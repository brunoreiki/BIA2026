<?php

class __Mustache_0509f3bd95f91bb5bc906b1ab5f21cf8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex align-items-center">
';
        $buffer .= $indent . '    <div id="searchinput-navbar-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="simplesearchform">
';
        $buffer .= $indent . '        <div id="searchform-navbar">
';
        $buffer .= $indent . '            <form autocomplete="off" action="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" method="get" accept-charset="utf-8"
';
        $buffer .= $indent . '                  class="mform d-flex flex-wrap align-items-center searchform-navbar">
';
        $value = $context->find('hiddenfields');
        $buffer .= $this->section29925032bd2cd4b6b9b10b9812772b0a($context, $indent, $value);
        $buffer .= $indent . '                <div class="input-group">
';
        $buffer .= $indent . '                    <label for="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <span class="sr-only">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                    <input type="text"
';
        $buffer .= $indent . '                           id="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                           class="form-control withclear"
';
        $buffer .= $indent . '                           placeholder="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                           aria-label="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                           name="';
        $value = $this->resolveValue($context->find('inputname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                           data-region="input"
';
        $buffer .= $indent . '                           autocomplete="off">
';
        $buffer .= $indent . '                    <div class="input-group-append">
';
        $buffer .= $indent . '                        <button type="submit" class="btn btn-submit" data-action="submit">
';
        $buffer .= $indent . '                            ';
        $value = $context->find('pix');
        $buffer .= $this->section31a49b2ab335cdb4725ddb42ed8de96c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            <span class="sr-only">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        </button>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </form>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section0890c695254d67b13b770876fd4188ba($context, $indent, $value);

        return $buffer;
    }

    private function section29925032bd2cd4b6b9b10b9812772b0a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <input type="hidden" name="{{{name}}}" value="{{{value}}}">
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31a49b2ab335cdb4725ddb42ed8de96c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' a/search, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' a/search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0890c695254d67b13b770876fd4188ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require(["jquery"], function($) {
        var container = $("#searchinput-navbar-{{{uniqid}}}");
        var opensearch = container.find(`[data-action="opensearch"]`);
        var input = container.find(`[data-region="input"]`);
        var submit = container.find(`[data-action="submit"]`);

        submit.on("click", function(e) {
            if (input.val() === "") {
                e.preventDefault();
            }
        });
        container.on("hidden.bs.collapse", function() {
            opensearch.removeClass("d-none");
            input.val("");
        });
        container.on("show.bs.collapse", function() {
            opensearch.addClass("d-none");
        });
        container.on("shown.bs.collapse", function() {
            input.focus();
        });
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require(["jquery"], function($) {
';
                $buffer .= $indent . '        var container = $("#searchinput-navbar-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '");
';
                $buffer .= $indent . '        var opensearch = container.find(`[data-action="opensearch"]`);
';
                $buffer .= $indent . '        var input = container.find(`[data-region="input"]`);
';
                $buffer .= $indent . '        var submit = container.find(`[data-action="submit"]`);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        submit.on("click", function(e) {
';
                $buffer .= $indent . '            if (input.val() === "") {
';
                $buffer .= $indent . '                e.preventDefault();
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '        container.on("hidden.bs.collapse", function() {
';
                $buffer .= $indent . '            opensearch.removeClass("d-none");
';
                $buffer .= $indent . '            input.val("");
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '        container.on("show.bs.collapse", function() {
';
                $buffer .= $indent . '            opensearch.addClass("d-none");
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '        container.on("shown.bs.collapse", function() {
';
                $buffer .= $indent . '            input.focus();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
