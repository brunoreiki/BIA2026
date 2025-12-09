<?php

class __Mustache_ef5f9129652b07d56284bdc62b2dc97b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<select name="users" class="custom-select" ';
        $value = $context->find('onlycurrentuser');
        $buffer .= $this->section2eb10691007c92bdff260da6f5c039fd($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    ';
        $value = $context->find('onlycurrentuser');
        if (empty($value)) {
            
            $buffer .= '<option value="u-1">';
            $value = $context->find('str');
            $buffer .= $this->section92056b081b567895036687940e74ce03($context, $indent, $value);
            $buffer .= '</option>';
        }
        $buffer .= '
';
        $value = $context->find('hasgroups');
        $buffer .= $this->section4ac56ccd73c2eb50a5e176b71097094c($context, $indent, $value);
        $value = $context->find('users');
        $buffer .= $this->section93766bdb3c20e130b1abae4d2678ef41($context, $indent, $value);
        $buffer .= $indent . '    ';
        $value = $context->find('hasgroups');
        $buffer .= $this->section60da504738f603684ac4c8292ab42353($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</select>
';

        return $buffer;
    }

    private function section2eb10691007c92bdff260da6f5c039fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled="disabled"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled="disabled"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92056b081b567895036687940e74ce03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' allusers, report_certaintyquizzes ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' allusers, report_certaintyquizzes ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1fe88b80e6f092e364b082e3ef3214b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' groups ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' groups ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76adf30734cb5ee4c8c6504ee0818400(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <option value="g{{id}}" {{# selected}}selected="selected"{{/ selected}}>{{name}}</option>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <option value="g';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3acb728cb1c24fe31a75f5d0443ea59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' users ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' users ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ac56ccd73c2eb50a5e176b71097094c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <optgroup label="{{# str}} groups {{/ str}}">
        {{# groups}}
        <option value="g{{id}}" {{# selected}}selected="selected"{{/ selected}}>{{name}}</option>
        {{/ groups}}
    </optgroup>
    <optgroup label="{{# str}} users {{/ str}}">
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <optgroup label="';
                $value = $context->find('str');
                $buffer .= $this->sectionD1fe88b80e6f092e364b082e3ef3214b($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('groups');
                $buffer .= $this->section76adf30734cb5ee4c8c6504ee0818400($context, $indent, $value);
                $buffer .= $indent . '    </optgroup>
';
                $buffer .= $indent . '    <optgroup label="';
                $value = $context->find('str');
                $buffer .= $this->sectionF3acb728cb1c24fe31a75f5d0443ea59($context, $indent, $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93766bdb3c20e130b1abae4d2678ef41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <option value="u{{id}}" {{# selected}}selected="selected"{{/ selected}}>{{name}}</option>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <option value="u';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60da504738f603684ac4c8292ab42353(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</optgroup>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '</optgroup>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
