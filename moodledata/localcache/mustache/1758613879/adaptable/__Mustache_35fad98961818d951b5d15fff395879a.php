<?php

class __Mustache_35fad98961818d951b5d15fff395879a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="adaptable-activity-navigation">
';
        $value = $context->find('nonav');
        if (empty($value)) {
            
            $buffer .= $indent . '    <nav class="activity_footer activity-navigation">
';
            $buffer .= $indent . '        <div class="row">
';
            $buffer .= $indent . '            <div class="col-md-6">
';
            $buffer .= $indent . '                <div class="float-start">
';
            $buffer .= $indent . '                ';
            $value = $context->find('prevlink');
            $buffer .= $this->section490440062d62727ec9d762c45f0157fb($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="col-md-6">
';
            $buffer .= $indent . '                <div class="float-end">
';
            $buffer .= $indent . '                ';
            $value = $context->find('nextlink');
            $buffer .= $this->section490440062d62727ec9d762c45f0157fb($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </nav>
';
            $buffer .= $indent . '    <div class="jumpnav">
';
            $buffer .= $indent . '        ';
            $value = $context->find('activitylist');
            $buffer .= $this->sectionF38cbdd58a4e67e3cb86ecb5ee6001b3($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section25db32fc88d1218a4577f7fe027f2335($context, $indent, $value);

        return $buffer;
    }

    private function section490440062d62727ec9d762c45f0157fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/action_link }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38cbdd58a4e67e3cb86ecb5ee6001b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/url_select }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25db32fc88d1218a4577f7fe027f2335(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_adaptable/activity_navigation\'], function(component) {
    component.init(\'adaptable-activity-navigation\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_adaptable/activity_navigation\'], function(component) {
';
                $buffer .= $indent . '    component.init(\'adaptable-activity-navigation\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
