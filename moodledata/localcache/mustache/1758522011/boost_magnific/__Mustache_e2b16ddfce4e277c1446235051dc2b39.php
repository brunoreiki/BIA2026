<?php

class __Mustache_e2b16ddfce4e277c1446235051dc2b39 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('url');
        $buffer .= $this->section61792549e7891b64ccd56fa3c780ef08($context, $indent, $value);

        return $buffer;
    }

    private function sectionC444cb99498e842f0d38143b6f1dcf43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-bs-toggle="tooltip" title="{{{pluginname}}}" data-placement="top"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-bs-toggle="tooltip" title="';
                $value = $this->resolveValue($context->find('pluginname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-placement="top"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b5d181b764a30c01282a9da18d536b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{modname}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fb8f4873e24cc08353dc61cdb42dc9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activityicon, moodle, {{{pluginname}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activityicon, moodle, ';
                $value = $this->resolveValue($context->find('pluginname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section806358f3accb2e20e220bf384b7f45d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="activity-icon activityiconcontainer smaller {{purpose}} courseicon align-self-start me-2 {{formattilesclass}}"
            {{#showtooltip}}data-bs-toggle="tooltip" title="{{{pluginname}}}" data-placement="top"{{/showtooltip}}
        >
            <img src="{{{icon}}}" class="activityicon {{iconclass}}"
                 alt="{{#ismoodle40}}{{{modname}}}{{/ismoodle40}}{{^ismoodle40}}{{#cleanstr}} activityicon, moodle, {{{pluginname}}} {{/cleanstr}}{{/ismoodle40}}"
            >
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="activity-icon activityiconcontainer smaller ';
                $value = $this->resolveValue($context->find('purpose'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' courseicon align-self-start me-2 ';
                $value = $this->resolveValue($context->find('formattilesclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '            ';
                $value = $context->find('showtooltip');
                $buffer .= $this->sectionC444cb99498e842f0d38143b6f1dcf43($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="activityicon ';
                $value = $this->resolveValue($context->find('iconclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                 alt="';
                $value = $context->find('ismoodle40');
                $buffer .= $this->section3b5d181b764a30c01282a9da18d536b7($context, $indent, $value);
                $value = $context->find('ismoodle40');
                if (empty($value)) {
                    
                    $value = $context->find('cleanstr');
                    $buffer .= $this->section5fb8f4873e24cc08353dc61cdb42dc9f($context, $indent, $value);
                }
                $buffer .= '"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61792549e7891b64ccd56fa3c780ef08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#uservisible}}
        <div class="activity-icon activityiconcontainer smaller {{purpose}} courseicon align-self-start me-2 {{formattilesclass}}"
            {{#showtooltip}}data-bs-toggle="tooltip" title="{{{pluginname}}}" data-placement="top"{{/showtooltip}}
        >
            <img src="{{{icon}}}" class="activityicon {{iconclass}}"
                 alt="{{#ismoodle40}}{{{modname}}}{{/ismoodle40}}{{^ismoodle40}}{{#cleanstr}} activityicon, moodle, {{{pluginname}}} {{/cleanstr}}{{/ismoodle40}}"
            >
        </div>
    {{/uservisible}}
    {{^uservisible}}
        <div class="activity-icon activityiconcontainer smaller {{purpose}} courseicon align-self-start me-2">
            <img src="{{{icon}}}" class="activityicon {{iconclass}}"
                 alt="{{#ismoodle40}}{{{modname}}}{{/ismoodle40}}{{^ismoodle40}}{{#cleanstr}} activityicon, moodle, {{{pluginname}}} {{/cleanstr}}{{/ismoodle40}}"
            >
        </div>
    {{/uservisible}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('uservisible');
                $buffer .= $this->section806358f3accb2e20e220bf384b7f45d7($context, $indent, $value);
                $value = $context->find('uservisible');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <div class="activity-icon activityiconcontainer smaller ';
                    $value = $this->resolveValue($context->find('purpose'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= ' courseicon align-self-start me-2">
';
                    $buffer .= $indent . '            <img src="';
                    $value = $this->resolveValue($context->find('icon'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="activityicon ';
                    $value = $this->resolveValue($context->find('iconclass'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                 alt="';
                    $value = $context->find('ismoodle40');
                    $buffer .= $this->section3b5d181b764a30c01282a9da18d536b7($context, $indent, $value);
                    $value = $context->find('ismoodle40');
                    if (empty($value)) {
                        
                        $value = $context->find('cleanstr');
                        $buffer .= $this->section5fb8f4873e24cc08353dc61cdb42dc9f($context, $indent, $value);
                    }
                    $buffer .= '"
';
                    $buffer .= $indent . '            >
';
                    $buffer .= $indent . '        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
