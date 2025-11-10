<?php

class __Mustache_8ad30af443bba3e1fb79e50184f4a101 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<span>
';
        $buffer .= $indent . '    ';
        $value = $context->find('pix');
        $buffer .= $this->section69f41f8aab2411ec51e7784892a4af59($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</span>';

        return $buffer;
    }

    private function sectionB1757c41fc32cd38d3028f6093a280de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loading';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loading';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69f41f8aab2411ec51e7784892a4af59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loading, format_tiles, {{#str}}loading{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loading, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->sectionB1757c41fc32cd38d3028f6093a280de($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
