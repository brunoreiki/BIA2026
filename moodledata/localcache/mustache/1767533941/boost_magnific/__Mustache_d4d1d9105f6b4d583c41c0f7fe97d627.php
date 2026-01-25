<?php

class __Mustache_d4d1d9105f6b4d583c41c0f7fe97d627 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasdeclaredignorance');
        $buffer .= $this->section41d491e6719a78b9078b57b7092a7663($context, $indent, $value);

        return $buffer;
    }

    private function section74e253e3d9f316e6dc2c4a798729b481(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="d-flex align-items-center mt-1" style="grid-gap:5px; --shape-color: {{color}}"><span class="circle-indicator"></span>{{^ circleonly}}<span class="rotated-square-indicator"></span>{{/ circleonly}}<span class="ml-1">{{label}}</span></div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="d-flex align-items-center mt-1" style="grid-gap:5px; --shape-color: ';
                $value = $this->resolveValue($context->find('color'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><span class="circle-indicator"></span>';
                $value = $context->find('circleonly');
                if (empty($value)) {
                    
                    $buffer .= '<span class="rotated-square-indicator"></span>';
                }
                $buffer .= '<span class="ml-1">';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section41d491e6719a78b9078b57b7092a7663(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div aria-hidden="true">
    {{# declaredignoranceindicators}}
    <div class="d-flex align-items-center mt-1" style="grid-gap:5px; --shape-color: {{color}}"><span class="circle-indicator"></span>{{^ circleonly}}<span class="rotated-square-indicator"></span>{{/ circleonly}}<span class="ml-1">{{label}}</span></div>
    {{/ declaredignoranceindicators}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div aria-hidden="true">
';
                $value = $context->find('declaredignoranceindicators');
                $buffer .= $this->section74e253e3d9f316e6dc2c4a798729b481($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
