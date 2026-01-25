<?php

class __Mustache_1b6cb2e5cca1dd203367a1669d4b9ba6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="format-tiles-js-config" ';
        $value = $context->find('tiles_js_config');
        $buffer .= $this->section23856aa238fc5a71266dcaf634cf85e2($context, $indent, $value);
        $buffer .= '></div>';

        return $buffer;
    }

    private function section23856aa238fc5a71266dcaf634cf85e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-{{{key}}}="{{value}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
