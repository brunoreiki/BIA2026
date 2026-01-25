<?php

class __Mustache_b76e7294c93b09d1452435f3bdc11678 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<span class="tile-icon';
        $value = $context->find('editing');
        $buffer .= $this->section4fde1966070028aa38167f1bcbedcc80($context, $indent, $value);
        $buffer .= '"';
        $value = $context->find('editing');
        $buffer .= $this->sectionA911883fe1f400a2f9ddc47fb6e0427d($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    ';
        $value = $context->find('icon');
        if (empty($value)) {
            
            $value = $context->find('tileicon');
            $buffer .= $this->sectionAfa61654f2b98cc5afe267a8356aac51($context, $indent, $value);
        }
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('tileicon');
        if (empty($value)) {
            
            $value = $context->find('icon');
            $buffer .= $this->sectionBf59513b96003bcff1e57cb5f80e7dce($context, $indent, $value);
        }
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('icon');
        if (empty($value)) {
            
            $value = $context->find('tileicon');
            if (empty($value)) {
                
                $value = $context->find('pix');
                $buffer .= $this->section128e2d9368523a5b7335c853e622efd0($context, $indent, $value);
            }
        }
        $buffer .= '
';
        $buffer .= $indent . '</span>';

        return $buffer;
    }

    private function section4fde1966070028aa38167f1bcbedcc80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' launchiconpicker';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' launchiconpicker';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA911883fe1f400a2f9ddc47fb6e0427d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-section="{{tileid}}" data-true-sectionid="{{secid}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-section="';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-true-sectionid="';
                $value = $this->resolveValue($context->find('secid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e3d5ad1ee2c4a80765ea1ed3d47e595(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tileicon/{{{tileicon}}}, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tileicon/';
                $value = $this->resolveValue($context->find('tileicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ', format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfa61654f2b98cc5afe267a8356aac51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}tileicon/{{{tileicon}}}, format_tiles{{/pix}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('pix');
                $buffer .= $this->section2e3d5ad1ee2c4a80765ea1ed3d47e595($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf59513b96003bcff1e57cb5f80e7dce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img class="icon {{icon.iconclass}}" src="{{icon.url}}" alt="{{{icon.label}}}">';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<img class="icon ';
                $value = $this->resolveValue($context->findDot('icon.iconclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" src="';
                $value = $this->resolveValue($context->findDot('icon.url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->findDot('icon.label'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section128e2d9368523a5b7335c853e622efd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tileicon/{{{defaulttileicon}}}, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tileicon/';
                $value = $this->resolveValue($context->find('defaulttileicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ', format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
