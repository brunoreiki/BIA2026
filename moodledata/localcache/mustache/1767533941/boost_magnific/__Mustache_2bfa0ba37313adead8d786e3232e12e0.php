<?php

class __Mustache_2bfa0ba37313adead8d786e3232e12e0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $value = $context->find('colors');
        $buffer .= $this->section2f19989347730e6395a8a9e536c8032d($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionB74b72a7927bec9809734af93f865d94($context, $indent, $value);

        return $buffer;
    }

    private function section2f19989347730e6395a8a9e536c8032d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="training-theme-select-item">
            <div class="preview" style="background:{{{.}}}"
                 data-color="{{{.}}}">
                <span>{{{.}}}</span>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="training-theme-select-item">
';
                $buffer .= $indent . '            <div class="preview" style="background:';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                 data-color="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <span>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2f13b729c3dac706c82aa3d8c22fbbb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                $(`[id^="id_s_theme_"][id$="_startcolor"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                $(`[id^="id_s_theme_"][id$="_startcolor"]`)
';
                $buffer .= $indent . '                        .val(color)
';
                $buffer .= $indent . '                        .minicolors("settings", {value: color});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2ba6f108284153e3eda86360af69277(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                $(`[id^="id_s_theme_"][id$="_brandcolor"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                $(`[id^="id_s_theme_"][id$="_brandcolor"]`)
';
                $buffer .= $indent . '                        .val(color)
';
                $buffer .= $indent . '                        .minicolors("settings", {value: color});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section357433803f947a2e8358b76f4b756e8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                $(`[id^="id_s_theme_"][id$="_footer_background_color"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                $(`[id^="id_s_theme_"][id$="_footer_background_color"]`)
';
                $buffer .= $indent . '                        .val(color)
';
                $buffer .= $indent . '                        .minicolors("settings", {value: color});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB74b72a7927bec9809734af93f865d94(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    /*<script>*/
    require(["jquery"], function($) {
        $("#{{{uniqid}}} .preview").click(function() {
            let color = $(this).attr("data-color");
            {{#startcolor}}
                $(`[id^="id_s_theme_"][id$="_startcolor"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
            {{/startcolor}}
            {{#brandcolor}}
                $(`[id^="id_s_theme_"][id$="_brandcolor"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
            {{/brandcolor}}
            {{#footercolor}}
                $(`[id^="id_s_theme_"][id$="_footer_background_color"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
            {{/footercolor}}
        });
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    /*<script>*/
';
                $buffer .= $indent . '    require(["jquery"], function($) {
';
                $buffer .= $indent . '        $("#';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' .preview").click(function() {
';
                $buffer .= $indent . '            let color = $(this).attr("data-color");
';
                $value = $context->find('startcolor');
                $buffer .= $this->sectionE2f13b729c3dac706c82aa3d8c22fbbb($context, $indent, $value);
                $value = $context->find('brandcolor');
                $buffer .= $this->sectionC2ba6f108284153e3eda86360af69277($context, $indent, $value);
                $value = $context->find('footercolor');
                $buffer .= $this->section357433803f947a2e8358b76f4b756e8a($context, $indent, $value);
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
