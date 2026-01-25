<?php

class __Mustache_7ed7c5d5a6a12e822cb428de7e1d60f9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="single-section">
';
        $value = $context->find('from_ajax');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('format_tiles/above_tiles')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
        }
        $buffer .= $indent . '    <ul id="single_section_tiles">
';
        if ($partial = $this->mustache->loadPartial('format_tiles/single_section')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('from_ajax');
        if (empty($value)) {
            
            $value = $context->find('editing');
            $buffer .= $this->section5416ee7569148458ed761ff5d83ae535($context, $indent, $value);
        }

        return $buffer;
    }

    private function section5416ee7569148458ed761ff5d83ae535(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{course_activity_clipboard}}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('course_activity_clipboard'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
