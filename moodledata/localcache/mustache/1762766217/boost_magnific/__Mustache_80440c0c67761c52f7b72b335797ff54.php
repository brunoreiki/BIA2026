<?php

class __Mustache_80440c0c67761c52f7b72b335797ff54 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hastilephoto');
        $buffer .= $this->sectionD0124145c99d0ffd1d001238ace345a1($context, $indent, $value);
        $value = $context->find('hastilephoto');
        if (empty($value)) {
            
            $value = $context->find('progress');
            $buffer .= $this->section33a1afbd9acfd62cc19a36d9bd175fbf($context, $indent, $value);
        }

        return $buffer;
    }

    private function section3a61055e8374c7626854b486d7edb30d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'allcomplete, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'allcomplete, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a8bea825f4f2fe9de2e7cb93f9ed9b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion-check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completion-check, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB78707adf01c70e904afff501ffef3a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="progress-complete-alt completioncheckbox complete tileallcomplete" id="tileallcomplete-{{tileid}}" data-numcomplete="{{numComplete}}"
                 data-numoutof="{{numOutOf}}">
                {{#pix}}completion-check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="progress-complete-alt completioncheckbox complete tileallcomplete" id="tileallcomplete-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                 data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section9a8bea825f4f2fe9de2e7cb93f9ed9b7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0430dd818f752b2d2280209cb376a447(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#progress}}
            <div class="progress-complete-alt completioncheckbox complete tileallcomplete" id="tileallcomplete-{{tileid}}" data-numcomplete="{{numComplete}}"
                 data-numoutof="{{numOutOf}}">
                {{#pix}}completion-check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}
            </div>
        {{/progress}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('progress');
                $buffer .= $this->sectionB78707adf01c70e904afff501ffef3a9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0124145c99d0ffd1d001238ace345a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#showprogressphototiles}}
        {{#progress}}
            <div class="progress-complete-alt completioncheckbox complete tileallcomplete" id="tileallcomplete-{{tileid}}" data-numcomplete="{{numComplete}}"
                 data-numoutof="{{numOutOf}}">
                {{#pix}}completion-check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}
            </div>
        {{/progress}}
    {{/showprogressphototiles}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('showprogressphototiles');
                $buffer .= $this->section0430dd818f752b2d2280209cb376a447($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33a1afbd9acfd62cc19a36d9bd175fbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="progress-complete-alt completioncheckbox complete tileallcomplete" id="tileallcomplete-{{tileid}}" data-numcomplete="{{numComplete}}"
             data-numoutof="{{numOutOf}}">
            {{#pix}}completion-check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="progress-complete-alt completioncheckbox complete tileallcomplete" id="tileallcomplete-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '             data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('pix');
                $buffer .= $this->section9a8bea825f4f2fe9de2e7cb93f9ed9b7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
