<?php

class __Mustache_f74c88502d877ae09c2baec53632faf9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="format-tiles-course-header" class="single-section">
';
        if ($partial = $this->mustache->loadPartial('format_tiles/single_section_nav')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div class="d-none d-sm-block">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('section_zero_show');
        $buffer .= $this->section693259a9c8d5cd3cacc683bebd709df3($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section693259a9c8d5cd3cacc683bebd709df3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="w-100"></div>
        <div id="section-zero-container" class="w-100 {{^usingjsnav}}format-tiles-no-js{{/usingjsnav}}{{^section_zero_show}} section-zero-empty{{/section_zero_show}}">
            {{> format_tiles/section_zero}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="w-100"></div>
';
                $buffer .= $indent . '        <div id="section-zero-container" class="w-100 ';
                $value = $context->find('usingjsnav');
                if (empty($value)) {
                    
                    $buffer .= 'format-tiles-no-js';
                }
                $value = $context->find('section_zero_show');
                if (empty($value)) {
                    
                    $buffer .= ' section-zero-empty';
                }
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('format_tiles/section_zero')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
