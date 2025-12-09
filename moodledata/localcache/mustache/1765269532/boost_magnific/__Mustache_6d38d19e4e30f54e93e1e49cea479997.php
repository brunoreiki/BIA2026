<?php

class __Mustache_6d38d19e4e30f54e93e1e49cea479997 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="flex-column h-100 w-100">
';
        $buffer .= $indent . '    <span class="d-none" data-region="courseid" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '    <span class="d-none" data-region="groupid" data-groupid="';
        $value = $this->resolveValue($context->find('groupid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '    <span class="d-none" data-region="instance" data-instance="';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'block327cf687fa77f1dfb94809104859e497'),
                'placeholder' => array($this, 'block327cf687fa77f1dfb94809104859e497'),
                'value' => array($this, 'block6461ec0d6ca7ef922be0d61813a9ee9a'),
                'additionalattributes' => array($this, 'blockDee8b3d0baac65937599ee74fdb4c46c'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '    <input type="hidden" name="search" id="input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"/>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div data-region="searchplaceholder"></div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section5f5a8acb9904a8534af584f4a8ad8111(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            searchgroups, core
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '            searchgroups, core
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block327cf687fa77f1dfb94809104859e497($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section5f5a8acb9904a8534af584f4a8ad8111($context, $indent, $value);
    
        return $buffer;
    }

    public function block6461ec0d6ca7ef922be0d61813a9ee9a($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('currentvalue'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function blockDee8b3d0baac65937599ee74fdb4c46c($context)
    {
        $indent = $buffer = '';
        $buffer .= '            role="combobox"
';
        $buffer .= $indent . '            aria-expanded="true"
';
        $buffer .= $indent . '            aria-controls="groups-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-result-listbox"
';
        $buffer .= $indent . '            aria-autocomplete="list"
';
        $buffer .= $indent . '            data-input-element="input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
    
        return $buffer;
    }
}
