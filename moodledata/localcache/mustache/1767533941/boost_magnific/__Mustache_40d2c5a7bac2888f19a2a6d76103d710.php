<?php

class __Mustache_40d2c5a7bac2888f19a2a6d76103d710 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('collapsedcolumns');
        $buffer .= $this->sectionBb585bb74af58ed9e85a4a5c506f028a($context, $indent, $value);

        return $buffer;
    }

    private function section72253b97c1ccb626197bdfdda8e24aba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            searchmynotes, local_learningtools
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '            searchmynotes, local_learningtools
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6bfe42bc4dc9e1e3529a1ae565c9067d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'section';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'section';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3ddb6eb5be10f18ae80e0f3e1fd5cb5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'allsections, local_learningtools';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'allsections, local_learningtools';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section233ee651d1d541142c1a2e35ff2afb49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option value="{{{filterurl}}}" {{selected}}>{{sectionname}}</option>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <option value="';
                $value = $this->resolveValue($context->find('filterurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $value = $this->resolveValue($context->find('selected'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('sectionname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section214527d919d98c7771ff584c606b75d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activity';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a032bbb4b167382fab5e5fa2b935cff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'allactiviies, local_learningtools';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'allactiviies, local_learningtools';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0f4dc86eb379ea108d5a576e90cddc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option value="{{filterurl}}" {{selected}}>{{mod}}</option>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <option value="';
                $value = $this->resolveValue($context->find('filterurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $this->resolveValue($context->find('selected'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('mod'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ee875e227715590f952ea27b89b6732(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'printlayout, local_learningtools';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'printlayout, local_learningtools';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section798ef27488ea67705a552f371ad0b26b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' printlayout, local_learningtools';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' printlayout, local_learningtools';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb585bb74af58ed9e85a4a5c506f028a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="navitem-divider"></div>
    {{< core/search_input_auto }}
        {{$additionalattributes}}
            data-input-element="ltoolnote-list-search-input"
        {{/additionalattributes}}
        {{$label}}{{#str}}
            searchmynotes, local_learningtools
        {{/str}}{{/label}}
        {{$placeholder}}{{#str}}
            searchmynotes, local_learningtools
        {{/str}}{{/placeholder}}
    {{/ core/search_input_auto }}
    <div data-region="searchplaceholder"></div>
    <div class="navitem-divider"></div>

    <div class="ltnote-sectionfilter">
        <label for="section-filter">{{#str}}section{{/str}}</label>
        <select id="section-filter" class="form-control" onchange="location = this.value;">
            <option value="{{{viewpageurl}}}">{{#str}}allsections, local_learningtools{{/str}}</option>
            {{#sections}}
                <option value="{{{filterurl}}}" {{selected}}>{{sectionname}}</option>
            {{/sections}}
        </select>
    </div>
    <div class="navitem-divider"></div>

    <div class="ltnote-activityfilter">
        <label for="activity-filter">{{#str}}activity{{/str}}</label>
        <select id="activity-filter" class="form-control" onchange="window.location.href=this.value">
            <option value="{{viewpageurl}}">{{#str}}allactiviies, local_learningtools{{/str}}</option>
            {{#activities}}
                <option value="{{filterurl}}" {{selected}}>{{mod}}</option>
            {{/activities}}
        </select>
    </div>
    <div class="navitem-divider"></div>

    <div class="note-print-block">
        <a href="javascript:void(0);" class="btn btn-secondary" id="ltnote-print-button" title="{{#str}}printlayout, local_learningtools{{/str}}">
            <i class="fa fa-print"></i> <span> {{#str}} printlayout, local_learningtools{{/str}} </span>
        </a>
    </div>

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="navitem-divider"></div>
';
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
                    $context->pushBlockContext(array(
                        'additionalattributes' => array($this, 'blockE61e1dd4f873ff7386dd4dcf53b2543d'),
                        'label' => array($this, 'block7f6d172e2bba47adc3100ba35998abc3'),
                        'placeholder' => array($this, 'block7f6d172e2bba47adc3100ba35998abc3'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= '    <div data-region="searchplaceholder"></div>
';
                $buffer .= $indent . '    <div class="navitem-divider"></div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="ltnote-sectionfilter">
';
                $buffer .= $indent . '        <label for="section-filter">';
                $value = $context->find('str');
                $buffer .= $this->section6bfe42bc4dc9e1e3529a1ae565c9067d($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '        <select id="section-filter" class="form-control" onchange="location = this.value;">
';
                $buffer .= $indent . '            <option value="';
                $value = $this->resolveValue($context->find('viewpageurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionE3ddb6eb5be10f18ae80e0f3e1fd5cb5($context, $indent, $value);
                $buffer .= '</option>
';
                $value = $context->find('sections');
                $buffer .= $this->section233ee651d1d541142c1a2e35ff2afb49($context, $indent, $value);
                $buffer .= $indent . '        </select>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="navitem-divider"></div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="ltnote-activityfilter">
';
                $buffer .= $indent . '        <label for="activity-filter">';
                $value = $context->find('str');
                $buffer .= $this->section214527d919d98c7771ff584c606b75d3($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '        <select id="activity-filter" class="form-control" onchange="window.location.href=this.value">
';
                $buffer .= $indent . '            <option value="';
                $value = $this->resolveValue($context->find('viewpageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section4a032bbb4b167382fab5e5fa2b935cff($context, $indent, $value);
                $buffer .= '</option>
';
                $value = $context->find('activities');
                $buffer .= $this->sectionD0f4dc86eb379ea108d5a576e90cddc5($context, $indent, $value);
                $buffer .= $indent . '        </select>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="navitem-divider"></div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="note-print-block">
';
                $buffer .= $indent . '        <a href="javascript:void(0);" class="btn btn-secondary" id="ltnote-print-button" title="';
                $value = $context->find('str');
                $buffer .= $this->section8ee875e227715590f952ea27b89b6732($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <i class="fa fa-print"></i> <span> ';
                $value = $context->find('str');
                $buffer .= $this->section798ef27488ea67705a552f371ad0b26b($context, $indent, $value);
                $buffer .= ' </span>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockE61e1dd4f873ff7386dd4dcf53b2543d($context)
    {
        $indent = $buffer = '';
        $buffer .= '            data-input-element="ltoolnote-list-search-input"
';
    
        return $buffer;
    }

    public function block7f6d172e2bba47adc3100ba35998abc3($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section72253b97c1ccb626197bdfdda8e24aba($context, $indent, $value);
    
        return $buffer;
    }
}
