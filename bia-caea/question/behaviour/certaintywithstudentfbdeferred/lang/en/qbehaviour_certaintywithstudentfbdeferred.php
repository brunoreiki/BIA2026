<?php
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
 * Strings for component 'qbehaviour_certaintywithstudentfbdeferred', language 'en'
 * @package    qbehaviour_certaintywithstudentfbdeferred
 * @copyright  2021 Astor Bizard <astor.bizard@univ-grenoble-alpes.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['allegederror'] = 'Presumed error';
$string['allegederror_details'] = 'Presumed error ({$a})';
$string['allegederrorplural'] = 'Presumed errors';
$string['almostsure'] = 'Almost sure';
$string['almostsure_details'] = 'you were almost sure';
$string['answer'] = 'your answer was {$a}';
$string['answercategorydetails'] = '{$a->certainty} and {$a->youranswer}';
$string['answersrepartition'] = 'Answers repartition';
$string['attemptsevolution'] = 'Attempts evolution';
$string['attempttitle'] = 'Attempt {$a->num} of {$a->attemptcount} from {$a->date}';
$string['behavioursummary'] = 'Certainty summary';
$string['clickfordetails'] = '(Click for details)';
$string['confidencerate'] = 'Confidence rate';
$string['confidencerate_help'] = '<p>Indicates the mean certainty level of correct answers (not counting random answers). Ideally, it should be a rather high value, as you should be quite sure of your correct answers. If it is rather low, it means that your knowledge is unsecure. In the event that you have no correct answer, the confidence rate is not computed.</p><div><b>Value:</b> between {$a->min} and {$a->max}</div>';
$string['confidencerate_nodi'] = 'Confidence rate';
$string['confidencerate_nodi_help'] = '<p>Indicates the mean certainty level of correct answers. Ideally, it should be a rather high value, as you should be quite sure of your correct answers. If it is rather low, it means that your knowledge is unsecure. In the event that you have no correct answer, the confidence rate is not computed.</p><div><b>Value:</b> between {$a->min} and {$a->max}</div>';
$string['confidenceratea'] = 'Confidence rate: {$a}';
$string['correct'] = 'correct';
$string['correctanswers'] = 'Correct answers';
$string['declaredignorance'] = 'Random answer';
$string['declaredignorance_details'] = 'Random answer (you answered at random, whether your answer was correct or incorrect does not matter)';
$string['declaredignoranceplural'] = 'Random answers';
$string['declaredignorancerate'] = 'Declared ignorance rate';
$string['declaredignorancerate_help'] = '<p>Indicates the percentage of questions where you answered giving the minimal certainty level "{$a}", which is interpreted as a "random" answer. Answers associated with this "declared ignorance" certainty level are not taken into account in other metacognitive indicators.</p><div><b>Value:</b> between 0% and 100%</div>';
$string['declaredignoranceratea'] = 'Declared ignorance rate: {$a}';
$string['declaredignorancerateabove'] = 'Declared ignorance above {$a}';
$string['declaredignoranceratebelow'] = 'Declared ignorance below {$a}';
$string['expectedtrend'] = 'Expected trend';
$string['expectedtrend_help'] = 'This describes the overall shape that the histogram would look like with a typical lucid behaviour. The closer your histogram shape is to this curve, the more lucid you were about your answers and certainty.';
$string['gradeover100a'] = 'Grade: {$a}/100';
$string['imprudencerate'] = 'Imprudence rate';
$string['imprudencerate_help'] = '<p>Indicates the mean certainty level of incorrect answers (not counting random answers). Ideally, it should be a rather low value, as you should be doubtful about your incorrect answers. If it is rather high, it means that you do not expect your own errors. In the event that you have no incorrect answer, the imprudence rate is not computed.</p><div><b>Value:</b> between {$a->min} and {$a->max}</div>';
$string['imprudencerate_nodi'] = 'Imprudence rate';
$string['imprudencerate_nodi_help'] = '<p>Indicates the mean certainty level of incorrect answers. Ideally, it should be a rather low value, as you should be doubtful about your incorrect answers. If it is rather high, it means that you do not expect your own errors. In the event that you have no incorrect answer, the imprudence rate is not computed.</p><div><b>Value:</b> between {$a->min} and {$a->max}</div>';
$string['imprudenceratea'] = 'Imprudence rate: {$a}';
$string['incorrect'] = 'incorrect';
$string['incorrectanswers'] = 'Incorrect answers';
$string['lucidityindex'] = 'Lucidity index';
$string['lucidityindex_help'] = '<p>Index computed as the mean certainty level for correct answers (counted positively, excluding random answers) weighted by the proportion of correct answers, minus the mean certainty level for incorrect answers (counted negatively, excluding random answers) weighted by the proportion of incorrect answers. If this lucidity index is openly positive, it means that you are rather sure of your correct answers and unsure of your incorrect answers. If it is openly negative, this indicates a problem as you seem more sure about your incorrect answers than your correct ones! If it is around 0, it means that you are as sure about your correct answers than your incorrect answers.</p><div><b>Value:</b> between -100 and 100</div>';
$string['lucidityindex_nodi'] = 'Lucidity index';
$string['lucidityindex_nodi_help'] = '<p>Index computed as the mean certainty level for correct answers (counted positively) weighted by the proportion of correct answers, minus the mean certainty level for incorrect answers (counted negatively) weighted by the proportion of incorrect answers. If this lucidity index is openly positive, it means that you are rather sure of your correct answers and unsure of your incorrect answers. If it is openly negative, this indicates a problem as you seem more sure about your incorrect answers than your correct ones! If it is around 0, it means that you are as sure about your correct answers than your incorrect answers.</p><div><b>Value:</b> between -100 and 100</div>';
$string['lucidityindexa'] = 'Lucidity index: {$a}';
$string['lucidityindicatorallegederror'] = 'No unexpected error, but at least one alleged error';
$string['lucidityindicatordeclaredignorance'] = 'All questions are answered at random';
$string['lucidityindicatorsureknowledge'] = 'All answers are well-founded knowledge';
$string['lucidityindicatorunexpectederror'] = 'At least one unexpected error';
$string['lucidityindicatorunsureknowledge'] = 'No error, but at least one unsecure knowledge';
$string['metacognitiveindicator'] = 'Metacognitive indicator';
$string['metacognitiveindicators'] = 'Metacognitive indicators';
$string['ncorrectanswers'] = 'Correct answers: {$a}';
$string['ndeclaredignorance'] = 'Random answers: {$a}';
$string['nincorrectanswers'] = 'Incorrect answers: {$a}';
$string['noallegederror'] = 'No presumed error';
$string['nodeclaredignorance'] = 'No random answer';
$string['nosureknowledge'] = 'No well-founded knowledge';
$string['nounexpectederror'] = 'No unexpected error';
$string['nounsureknowledge'] = 'No unsecure knowledge';
$string['numofanswers'] = 'Number of answers';
$string['otherattempts'] = 'Other attempts';
$string['pleaseselectcertainty'] = 'Please select one.';
$string['pluginname'] = 'Certainty with student feedback (deferred)';
$string['pluginsettings'] = 'Certainty quiz behaviours settings';
$string['privacy:behaviourpath'] = 'Behaviour';
$string['privacy:metadata:attemptstepdata'] = 'This plugin stores some data submitted during quiz attempts.';
$string['privacy:metadata:name'] = 'Attempt step data variable name, among [certainty, studentfeedback, generalstudentfeedback].';
$string['privacy:metadata:value'] = 'Attempt step data variable value.For certainty, certainty that submitted answer would be considered correct, for each attempted question using this behaviour.For studentfeedback, feedback submitted after a question attempt, for each attempted question using this behaviour.For generalstudentfeedback, global feedback submitted after a quiz attempt, for each quiz using this behaviour.';
$string['quitesure'] = 'Quite sure';
$string['quitesure_details'] = 'you were quite sure';
$string['quiteunsure'] = 'Quite unsure';
$string['quiteunsure_details'] = 'you were quite unsure';
$string['random'] = 'Fifty-fifty or less';
$string['random_alt'] = 'I answered at random';
$string['random_details'] = 'you answered at random';
$string['random_open'] = 'I believe it is wrong';
$string['settings:answercategorization'] = 'Answer categorization';
$string['settings:answerclasses'] = 'Answer classes';
$string['settings:answerclassesinfo'] = 'For each answer class, you can customize the associated color.<br>You can customize answer class labels through <a href="{$a}">language customization settings</a>.';
$string['settings:certaintylevela'] = 'Certainty level {$a}';
$string['settings:certaintylevels'] = 'Certainty levels';
$string['settings:certaintylevelsinfo'] = 'For each certainty level, you can customize displayed label (if relevant), displayed percentage and the way the answer will be categorized upon a right / wrong answer.<br>You can further customize certainty level labels through <a href="{$a}">language customization settings</a>.';
$string['settings:enablefbforclasses'] = 'Display student feedback field for answer classes';
$string['settings:enablefbforclasses_help'] = 'The field prompting the student for a textual feedback will only be shown for questions with an answer within selected classifications.';
$string['settings:error:categoryorder'] = 'Please keep a continuity in certainty levels categorization: first optional level of Random answers, then levels of Unsecure knowledge / Presumed errors, and finally levels of Well-founded knowledge / Unexpected errors.';
$string['settings:label'] = 'Label';
$string['settings:loadpresets'] = 'Load scale preset';
$string['settings:percentage'] = 'Percentage';
$string['settings:preset:alternative'] = 'Alternative (linear)';
$string['settings:preset:default'] = 'Default (legacy)';
$string['settings:preset:recommended'] = 'Recommended (non-linear)';
$string['settings:studentfeedback'] = 'Student feedback field';
$string['settings:useopenlabel'] = 'open questions alternative certainty label';
$string['settings:useopenlabel_help'] = 'For questions that are open (i.e. neither True/False nor Multiple choice), this alternative label can be used to describe this certainty level.';
$string['settings:useopenlabela'] = 'Use "{$a}" for open questions';
$string['settingsformerrors'] = 'Changes not saved. There were some errors in the submitted data. Please refer to related error messages below.';
$string['showthatattempt'] = 'Show that attempt';
$string['sure'] = 'Sure';
$string['sure_details'] = 'you were sure';
$string['sureknowledge'] = 'Well-founded knowledge';
$string['sureknowledge_details'] = 'Well-founded knowledge ({$a})';
$string['sureknowledgeplural'] = 'Well-founded knowledge';
$string['thisattempt'] = 'This attempt (no. {$a})';
$string['thisattemptdetail'] = 'Detail for this attempt (no. {$a})';
$string['unexpectederror'] = 'Unexpected error';
$string['unexpectederror_details'] = 'Unexpected error ({$a})';
$string['unexpectederrorplural'] = 'Unexpected errors';
$string['unsure'] = 'Unsure';
$string['unsure_details'] = 'you were unsure';
$string['unsureknowledge'] = 'Unsecure knowledge';
$string['unsureknowledge_details'] = 'Unsecure knowledge ({$a})';
$string['unsureknowledgeplural'] = 'Unsecure knowledge';
$string['viewcoursereport'] = 'View evolution along course quizzes';
$string['whatisyourcertaintylevel'] = 'What is the certainty level associated with your answer?';
