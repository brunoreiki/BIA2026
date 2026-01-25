<?php

class __Mustache_7698d4caeb0a201a3864f650d1893a8f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="studentcomment">
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('studenturl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('studentname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</a>:
';
        $value = $context->find('isstudent');
        $buffer .= $this->section5f49033c14f047d6b67756d4acfd1221($context, $indent, $value);
        $value = $context->find('isstudent');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('commenttext'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section5f49033c14f047d6b67756d4acfd1221(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <label for="studentcommentid{{itemid}}" class="{{hideclass}}">{{label}}</label>
        <input type="text" class="studentcommentid{{itemid}} studentcommentinput form-control form-text-inline"
               name="studentcomment[{{itemid}}]" value="{{commenttext}}"
               id="studentcommentid{{itemid}}"
        >
        <div id="checklistspinnerstudentcomment{{itemid}}" class="checklistspinnerstudent"> </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <label for="studentcommentid';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('hideclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</label>
';
                $buffer .= $indent . '        <input type="text" class="studentcommentid';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' studentcommentinput form-control form-text-inline"
';
                $buffer .= $indent . '               name="studentcomment[';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ']" value="';
                $value = $this->resolveValue($context->find('commenttext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               id="studentcommentid';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '        <div id="checklistspinnerstudentcomment';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="checklistspinnerstudent"> </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
