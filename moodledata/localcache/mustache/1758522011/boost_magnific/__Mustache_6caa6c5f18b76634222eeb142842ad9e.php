<?php

class __Mustache_6caa6c5f18b76634222eeb142842ad9e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('ltoolschedule');
        $buffer .= $this->section4b205de728fa0b57a75a9ac1643f8005($context, $indent, $value);

        return $buffer;
    }

    private function section4b205de728fa0b57a75a9ac1643f8005(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="ltoolschedule-info" id="ltoolschedule-info" data-tool="schedule">
        <button type="submit" id="ltoolschedule-action" data-hovercolor="{{iconbackcolor}}"
        data-fontcolor="{{iconcolor}}" style="background:{{iconbackcolor}};">
             <i class="{{icon}}" style="color:{{iconcolor}}"></i>
        </button>
        <p>{{schedulehovername}} </p>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="ltoolschedule-info" id="ltoolschedule-info" data-tool="schedule">
';
                $buffer .= $indent . '        <button type="submit" id="ltoolschedule-action" data-hovercolor="';
                $value = $this->resolveValue($context->find('iconbackcolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '        data-fontcolor="';
                $value = $this->resolveValue($context->find('iconcolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="background:';
                $value = $this->resolveValue($context->find('iconbackcolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';">
';
                $buffer .= $indent . '             <i class="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="color:';
                $value = $this->resolveValue($context->find('iconcolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('schedulehovername'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' </p>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
