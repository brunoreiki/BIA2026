<?php

class __Mustache_405ede811732cd291a239b3b2894db63 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('hastilephoto');
        $buffer .= $this->section8b437f37d5f32b044e6de4f08e5c36b9($context, $indent, $value);
        $value = $context->find('hastilephoto');
        if (empty($value)) {
            
            $value = $context->find('progress');
            $buffer .= $this->sectionB33ab9ea27fa12cb779ea4a95fb4c257($context, $indent, $value);
        }

        return $buffer;
    }

    private function section8f6d82855ff2269b49ee119611b99dd5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="completion-spacer float-end"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="completion-spacer float-end"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd19f714f71e3ed32e1c68184b2b56e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#progress}}
            <div class="completion-spacer float-end"></div>
        {{/progress}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('progress');
                $buffer .= $this->section8f6d82855ff2269b49ee119611b99dd5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b437f37d5f32b044e6de4f08e5c36b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#showprogressphototiles}}
        {{#progress}}
            <div class="completion-spacer float-end"></div>
        {{/progress}}
    {{/showprogressphototiles}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('showprogressphototiles');
                $buffer .= $this->sectionBd19f714f71e3ed32e1c68184b2b56e8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB33ab9ea27fa12cb779ea4a95fb4c257(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="completion-spacer float-end"></div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="completion-spacer float-end"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
