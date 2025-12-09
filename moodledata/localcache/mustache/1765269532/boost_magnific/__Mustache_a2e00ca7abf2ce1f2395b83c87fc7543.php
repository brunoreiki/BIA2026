<?php

class __Mustache_a2e00ca7abf2ce1f2395b83c87fc7543 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('editing');
        $buffer .= $this->sectionD71a3e93bdd0c214734d516010551318($context, $indent, $value);
        $buffer .= $indent . '<div class="activity-item ';
        $value = $context->find('modstealth');
        $buffer .= $this->section814a15334b0fb146a25cc098588d4305($context, $indent, $value);
        $value = $context->find('modhiddenfromstudents');
        $buffer .= $this->section814a15334b0fb146a25cc098588d4305($context, $indent, $value);
        $value = $context->find('modinline');
        $buffer .= $this->sectionF4430bb1912fef25dc28340642a01da8($context, $indent, $value);
        $buffer .= '" data-activityname="';
        $value = $this->resolveValue($context->find('activityname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('ismoodle41minus');
        if (empty($value)) {
            
            $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/bulkselect');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/bulkselect')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
            }
        }
        $buffer .= $indent . '
';
        $blockFunction = $context->findInBlock('format_tiles/local/content/cm/activity');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            if ($partial = $this->mustache->loadPartial('format_tiles/local/content/cm/activity')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section13d0f301786963dcb6fda2851dd97009(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< core_courseformat/local/content/divider}}
            {{$content}}{{> core_course/activitychooserbuttonactivity}}{{/content}}
        {{/ core_courseformat/local/content/divider}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('core_courseformat/local/content/divider')) {
                    $context->pushBlockContext(array(
                        'content' => array($this, 'block7c66415badb63bcc4296b42a19e0861e'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb03b5bcdb70aa4ea488d5eb87d6ff9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core_course/activitychooserbutton}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/activitychooserbutton')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD71a3e93bdd0c214734d516010551318(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#ismoodle44}}
        {{< core_courseformat/local/content/divider}}
            {{$content}}{{> core_course/activitychooserbuttonactivity}}{{/content}}
        {{/ core_courseformat/local/content/divider}}
    {{/ismoodle44}}
    {{^ismoodle44}}
        {{! In Moodle 45 this was refactored}}
        {{< core_courseformat/local/content/divider}}
            {{$content}}
                {{#activitychooserbutton}}{{> core_course/activitychooserbutton}}{{/activitychooserbutton}}
            {{/content}}
        {{/ core_courseformat/local/content/divider}}
    {{/ismoodle44}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('ismoodle44');
                $buffer .= $this->section13d0f301786963dcb6fda2851dd97009($context, $indent, $value);
                $value = $context->find('ismoodle44');
                if (empty($value)) {
                    
                    $buffer .= '        ';
                    if ($parent = $this->mustache->loadPartial('core_courseformat/local/content/divider')) {
                        $context->pushBlockContext(array(
                            'content' => array($this, 'block2a85257857861a58033cc15b0b964e2d'),
                        ));
                        $buffer .= $parent->renderInternal($context, $indent);
                        $context->popBlockContext();
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section814a15334b0fb146a25cc098588d4305(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenactivity';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hiddenactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4430bb1912fef25dc28340642a01da8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activityinline';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activityinline';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block7c66415badb63bcc4296b42a19e0861e($context)
    {
        $indent = $buffer = '';
        if ($partial = $this->mustache->loadPartial('core_course/activitychooserbuttonactivity')) {
            $buffer .= $partial->renderInternal($context);
        }
    
        return $buffer;
    }

    public function block2a85257857861a58033cc15b0b964e2d($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $context->find('activitychooserbutton');
        $buffer .= $this->sectionEb03b5bcdb70aa4ea488d5eb87d6ff9b($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }
}
