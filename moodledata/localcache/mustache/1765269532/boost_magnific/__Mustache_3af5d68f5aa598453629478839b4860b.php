<?php

class __Mustache_3af5d68f5aa598453629478839b4860b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<span class="d-none" data-region="groupid" data-groupid="';
        $value = $this->resolveValue($context->find('group'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '<div class="align-items-center d-flex">
';
        $buffer .= $indent . '    <div class="d-block pe-3 text-truncate">
';
        $buffer .= $indent . '        <span class="d-block m-0 small fw-normal" aria-hidden="true">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '        <span class="p-0 fw-bold" data-selected-option>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('selectedgroup'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
