<?php

class __Mustache_953264d299f1557ffa0fda59f66954c6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="divider border-start align-self-center ms-1 me-3"></div>
';
        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('legacyseturl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" method="post" class="d-flex align-items-center editmode-switch-form">
';
        $buffer .= $indent . '    <div class="input-group">
';
        $buffer .= $indent . '        <div class="custom-control form-switch">
';
        $buffer .= $indent . '            <input type="checkbox" ';
        $value = $context->find('checked');
        $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                   id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '-editingswitch" name="setmode"
';
        $buffer .= $indent . '                   class="form-check-input"
';
        $buffer .= $indent . '                   data-context="';
        $value = $this->resolveValue($context->find('pagecontextid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                   data-pageurl="';
        $value = $this->resolveValue($context->find('pageurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                   title="';
        $value = $context->find('str');
        $buffer .= $this->section8eb26301b7adb5b471f5b42058e0700c($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                   disabled>
';
        $buffer .= $indent . '            <span class="custom-control-label">&nbsp;</span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="pageurl" value="';
        $value = $this->resolveValue($context->find('pageurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="context" value="';
        $value = $this->resolveValue($context->find('pagecontextid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionD1d32f08e48617851716724bffac8c76($context, $indent, $value);

        return $buffer;
    }

    private function section7749362ecb5f8c27fe0f43d5e969d66c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checked ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' checked ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8eb26301b7adb5b471f5b42058e0700c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editmode ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' editmode ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1d32f08e48617851716724bffac8c76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require(["core/edit_switch"], function(editSwitch) {
        editSwitch.init("{{{uniqid}}}-editingswitch");
        document.getElementById("{{{uniqid}}}-editingswitch").removeAttribute("disabled");
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require(["core/edit_switch"], function(editSwitch) {
';
                $buffer .= $indent . '        editSwitch.init("';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '-editingswitch");
';
                $buffer .= $indent . '        document.getElementById("';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '-editingswitch").removeAttribute("disabled");
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
