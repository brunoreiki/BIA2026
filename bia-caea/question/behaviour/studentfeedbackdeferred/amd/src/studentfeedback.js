// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Defines behaviour of student feedback fields (edition and submission).
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define(['jquery', 'core/url', 'core/config', 'core/log'], function($, url, cfg, log) {

    /**
     * Sets up the student feedback fields (a text area and buttons).
     * @param {String} divID The html id of the element containinf the area and buttons.
     * @param {Object} ajaxParams Parameters to be appended to ajax call when submitting feedback.
     */
    function setup(divID, ajaxParams) {
        var $feedbackarea = $('#' + divID + ' textarea');
        var $submit = $('#' + divID + ' [data-role="submit-feedback"]');
        var $cancel = $('#' + divID + ' [data-role="cancel-feedback"]');
        var $edit = $('#' + divID + ' [data-role="edit-feedback"]');

        var setEditing = function(editing) {
            // Toggle the visibility / availability of every button / text area.
            $edit.toggle(!editing);
            $submit.toggle(editing);
            $cancel.toggle(editing && $feedbackarea.data('populated'));
            if (editing) {
                $feedbackarea.removeAttr('disabled');
            } else {
                $feedbackarea.attr('disabled', 'disabled');
            }
        };

        // Prompt user before leaving the page if some changes have been made to feedback areas.
        var preventUnsavedChangesUnload = function(event) {
            event.preventDefault();
            event.returnValue = '';
        };
        $feedbackarea.change(function() {
            window.addEventListener('beforeunload', preventUnsavedChangesUnload);
        });

        setEditing(!$feedbackarea.data('populated') || $feedbackarea.val() != $feedbackarea.data('value'));

        $submit.click(function() {
            $.ajax({
                url: url.relativeUrl('/question/behaviour/studentfeedbackdeferred/ajax/submitstudentfeedback.json.php'),
                async: false,
                dataType: 'json',
                data: $.extend({}, {feedback: encodeURIComponent($feedbackarea.val())}, ajaxParams),
                method: 'post'
            })
            .done(function(response) {
                if (response.success) {
                    // Store value in attribute data-value to handle cancel.
                    $feedbackarea.data('value', $feedbackarea.val());
                    $feedbackarea.data('populated', true);
                    setEditing(false);
                    // Changes have been saved, don't prompt the user anymore.
                    window.removeEventListener('beforeunload', preventUnsavedChangesUnload);
                } else {
                    log.error(response.error);
                }
                return response;
            })
            .fail(log.error);
        });

        $edit.click(function() {
            setEditing(true);
            $feedbackarea.focus();
        });

        $cancel.click(function() {
            $feedbackarea.val($feedbackarea.data('value'));
            setEditing(false);
            // The cancel has been explicitely requested, don't prompt the user anymore.
            window.removeEventListener('beforeunload', preventUnsavedChangesUnload);
        });
    }

    return {
        setupForQuestion: function(divID, attemptStepID) {
            setup(divID, {
                qasid: attemptStepID,
                sesskey: cfg.sesskey,
                isgeneral: 0
            });
        },
        setupForQuiz: function(divID, attemptStepID) {
            setup(divID, {
                qasid: attemptStepID,
                sesskey: cfg.sesskey,
                isgeneral: 1
            });
        }
    };
});