<?php

class __Mustache_c822ec76fc09ca1bcf7c3431c14fdea7 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-section="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-sectionid="';
        $value = $this->resolveValue($context->find('secid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="section course-section main clearfix">
';
        if ($partial = $this->mustache->loadPartial('format_tiles/single_section_content')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</li>
';

        return $buffer;
    }
}
