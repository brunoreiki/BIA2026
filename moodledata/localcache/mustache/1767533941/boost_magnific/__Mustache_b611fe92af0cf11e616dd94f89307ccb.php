<?php

class __Mustache_b611fe92af0cf11e616dd94f89307ccb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li
';
        $buffer .= $indent . '    class="activity activity-wrapper ';
        $value = $this->resolveValue($context->find('module'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' modtype_';
        $value = $this->resolveValue($context->find('module'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' ';
        $value = $context->find('hasinfo');
        $buffer .= $this->section83f4cf4620de8b26d812ca106e959b0f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('clickable');
        if (empty($value)) {
            
            $buffer .= ' unclickable ';
        }
        $buffer .= ' mod_';
        $value = $this->resolveValue($context->find('modname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' ';
        $value = $context->find('modresourceicon');
        $buffer .= $this->section4d7dcc3cecc1281aefa62f789de6e421($context, $indent, $value);
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '  ';
        $value = $context->find('indent');
        $buffer .= $this->sectionEbc4fd45515e24a21412ca7c393ea1db($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    ';
        $value = $context->find('anchor');
        $buffer .= $this->section19063e0e17e7d024b9b7a32011df80f6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    data-for="cmitem"
';
        $buffer .= $indent . '    data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-cmid="';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-contextid="';
        $value = $this->resolveValue($context->find('modcontextid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-modinstance="';
        $value = $this->resolveValue($context->find('modinstance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-modtype="';
        $value = $this->resolveValue($context->find('modname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $value = $context->find('modresourceicon');
        $buffer .= $this->sectionB7a38fcea47f11f0678bc16a5ac20dc1($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-title="';
        $value = $this->resolveValue($context->find('activityname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '    ';
        $value = $context->find('modalType');
        $buffer .= $this->section8b1c32609d0d38b2e3c60d5c2b4adc17($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('hascompletion');
        $buffer .= $this->sectionEc3d9ce6dd4cff0fae1e1d0134134ef0($context, $indent, $value);
        $buffer .= ' data-completion="';
        $value = $this->resolveValue($context->find('completion'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '>
';
        $value = $context->find('cmformat');
        $buffer .= $this->sectionB453d67c914875b8a286f3daf8deb19d($context, $indent, $value);
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function section83f4cf4620de8b26d812ca106e959b0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hasinfo';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hasinfo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d7dcc3cecc1281aefa62f789de6e421(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'modtype_{{modresourceicon}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'modtype_';
                $value = $this->resolveValue($context->find('modresourceicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbc4fd45515e24a21412ca7c393ea1db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'indented';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'indented';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19063e0e17e7d024b9b7a32011df80f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'id="{{anchor}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'id="';
                $value = $this->resolveValue($context->find('anchor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7a38fcea47f11f0678bc16a5ac20dc1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '_{{{modresourceicon}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '_';
                $value = $this->resolveValue($context->find('modresourceicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b1c32609d0d38b2e3c60d5c2b4adc17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-modal="{{modalType}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-modal="';
                $value = $this->resolveValue($context->find('modalType'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc3d9ce6dd4cff0fae1e1d0134134ef0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-completion-state="{{completionstate}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-completion-state="';
                $value = $this->resolveValue($context->find('completionstate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB453d67c914875b8a286f3daf8deb19d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{$ format_tiles/local/content/cm}}
        {{> format_tiles/local/content/cm}}
    {{/ format_tiles/local/content/cm}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('format_tiles/local/content/cm');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('format_tiles/local/content/cm')) {
                        $buffer .= $partial->renderInternal($context, $indent . '        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
