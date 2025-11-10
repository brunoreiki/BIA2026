<?php

class __Mustache_a7dde893bc8c4a268848395a4be9bb6a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('url');
        $buffer .= $this->section684ef0e1b6307f570d91b866f8cdccc2($context, $indent, $value);

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

    private function section57f790b3155c20d6a93182ce5b635880(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="activity-icon activityiconcontainer smaller {{purpose}} courseicon align-self-start me-2 {{formattilesclass}}">
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
                $buffer .= '">
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

    private function section684ef0e1b6307f570d91b866f8cdccc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#uservisible}}
        <div class="activity-icon activityiconcontainer smaller {{purpose}} courseicon align-self-start me-2 {{formattilesclass}}">
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
                $buffer .= $this->section57f790b3155c20d6a93182ce5b635880($context, $indent, $value);
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
