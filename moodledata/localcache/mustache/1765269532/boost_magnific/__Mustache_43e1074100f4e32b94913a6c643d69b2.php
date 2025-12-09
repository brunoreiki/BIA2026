<?php

class __Mustache_43e1074100f4e32b94913a6c643d69b2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex justify-content-center my-4">
';
        $buffer .= $indent . '    <div class="btn-group align-items-center" role="group">
';
        $buffer .= $indent . '        <a href="?courseid=';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '&report=studentsalongcourse" class="btn btn-outline-primary report-toggler-button ';
        $value = $context->find('studentsalongcourse');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section29d9a466a90bf25e359d32c5b6528ceb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <a href="?courseid=';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '&report=singlequiz" class="btn btn-outline-primary report-toggler-button ';
        $value = $context->find('singlequiz');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section3bc08604b96669b1a455775d7c0f433b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29d9a466a90bf25e359d32c5b6528ceb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' studentsalongcourse, report_certaintyquizzes ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' studentsalongcourse, report_certaintyquizzes ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bc08604b96669b1a455775d7c0f433b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' singlequiz, report_certaintyquizzes ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' singlequiz, report_certaintyquizzes ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
