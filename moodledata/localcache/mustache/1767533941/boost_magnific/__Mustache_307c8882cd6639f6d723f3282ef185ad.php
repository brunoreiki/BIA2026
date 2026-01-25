<?php

class __Mustache_307c8882cd6639f6d723f3282ef185ad extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('course_modules');
        $buffer .= $this->sectionA9f17748ecec3604e5c35050c4cf4f93($context, $indent, $value);
        $value = $context->find('useSubtiles');
        $buffer .= $this->sectionE9d7d604aa1c47aa3ae89a3cee96ce36($context, $indent, $value);

        return $buffer;
    }

    private function sectionA9f17748ecec3604e5c35050c4cf4f93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>format_tiles/course_module}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/course_module')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9d7d604aa1c47aa3ae89a3cee96ce36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="activity subtile spacer" aria-hidden="true"></li>
    <li class="activity subtile spacer" aria-hidden="true"></li>
    <li class="activity subtile spacer" aria-hidden="true"></li>
    <li class="activity subtile spacer" aria-hidden="true"></li>
    <li class="activity subtile spacer" aria-hidden="true"></li>
    <li class="activity subtile spacer" aria-hidden="true"></li>
    <li class="activity subtile spacer" aria-hidden="true"></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
