<?php

class __Mustache_561c6a73281b95e7fcf9fc12cd7aa8eb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="text-center pl-6">
';
        $buffer .= $indent . '    <div class="d-flex small">
';
        $value = $context->find('answercategoriespercentages');
        $buffer .= $this->section1cfdf1cca3287a0ef96c0b9fdc5ea9f0($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="d-flex justify-content-around">
';
        $value = $context->find('answerclasses');
        $buffer .= $this->section9041788af68b88cfb52c090c26444936($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section1cfdf1cca3287a0ef96c0b9fdc5ea9f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span style="flex-basis: 100%;">
             ({{{.}}})
        </span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span style="flex-basis: 100%;">
';
                $buffer .= $indent . '             (';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ')
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC986b38f907455f10f86d01f2eaef3d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="numanswers">{{.}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="numanswers">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c96ad642fabc7376b29c10e43f0bf41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span style="flex-basis: {{spacepercentage}}%;">
            {{# numanswers}}<span class="numanswers">{{.}}</span> {{/ numanswers}}{{name}}
        </span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span style="flex-basis: ';
                $value = $this->resolveValue($context->find('spacepercentage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '%;">
';
                $buffer .= $indent . '            ';
                $value = $context->find('numanswers');
                $buffer .= $this->sectionC986b38f907455f10f86d01f2eaef3d1($context, $indent, $value);
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9041788af68b88cfb52c090c26444936(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{# display}}
        <span style="flex-basis: {{spacepercentage}}%;">
            {{# numanswers}}<span class="numanswers">{{.}}</span> {{/ numanswers}}{{name}}
        </span>
        {{/ display}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display');
                $buffer .= $this->section5c96ad642fabc7376b29c10e43f0bf41($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
