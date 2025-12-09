<?php

class __Mustache_ccde42dd7b8c5eb32b4fea4def362823 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="availabilityinfo isrestricted isfullinfo">
';
        $buffer .= $indent . '    <span class="badge rounded-pill bg-secondary text-dark" ';
        $value = $context->find('visible');
        $buffer .= $this->sectionBd9a9589b77e1598dab5fcce7e9699b3($context, $indent, $value);
        $buffer .= '>';
        $value = $context->find('visible');
        if (empty($value)) {
            
            $value = $context->find('str');
            $buffer .= $this->sectionAa413acb7776474efcb52c4cbf9fc6f9($context, $indent, $value);
        }
        $value = $context->find('visible');
        $buffer .= $this->section49ebb10c628fb1f64adea6c6a0871bde($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section649ba111082ee7075a1a481e78d1a1f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{availabilitymessage}}" data-bs-html="true" data-bs-toggle="tooltip"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('availabilitymessage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-bs-html="true" data-bs-toggle="tooltip"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd9a9589b77e1598dab5fcce7e9699b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#availabilitymessage}}title="{{availabilitymessage}}" data-bs-html="true" data-bs-toggle="tooltip"{{/availabilitymessage}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '        ';
                $value = $context->find('availabilitymessage');
                $buffer .= $this->section649ba111082ee7075a1a481e78d1a1f4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa413acb7776474efcb52c4cbf9fc6f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenfromstudents';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hiddenfromstudents';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA660a93413b0d2d8a474fd11d6a19275(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'restricted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'restricted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49ebb10c628fb1f64adea6c6a0871bde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}restricted{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionA660a93413b0d2d8a474fd11d6a19275($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
