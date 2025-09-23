<?php

class __Mustache_07e9bb74cbc4333f2171b16a9192d732 extends Mustache_Template
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
        $value = $context->find('hastilephoto');
        if (empty($value)) {
            
            $value = $context->find('numOutOf');
            $buffer .= $this->section68c45f1120f6ecce060176e8aa3d469d($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $value = $context->find('hastilephoto');
        $buffer .= $this->section679bf4fc3377cdaf627bfb46a1c78316($context, $indent, $value);

        return $buffer;
    }

    private function section2340cbe62924ad39a9a62f97f62658c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overall-progress align-top';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' overall-progress align-top';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section032ecdb681681f8ee4396988f5153305(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'overallprogressshort, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'overallprogressshort, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a1dcb7f46b31fa70481c5e7f3e2d040(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}overallprogressshort, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section032ecdb681681f8ee4396988f5153305($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bfe7263e72977defccb84d41ce1ee2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'progress, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'progress, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10470c0602d3700b02584489e0eadfa7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '15';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '15';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section030934a8f10284f9c40e7da171a33667(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '25';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '25';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3fc72a6724a0209261ae6c3eb0132cd8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#isSingleDigit}}25{{/isSingleDigit}}{{^isSingleDigit}}30{{/isSingleDigit}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isSingleDigit');
                $buffer .= $this->section030934a8f10284f9c40e7da171a33667($context, $indent, $value);
                $value = $context->find('isSingleDigit');
                if (empty($value)) {
                    
                    $buffer .= '30';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd6072b41b01eab24376b86d4d5297a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="progress-indic percent{{#isOverall}} overall-progress align-top{{/isOverall}}  tiles-hide-if-complete" id="tileprogress-{{tileid}}"
                 data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                <div class="progress-indic-label">
                  {{#isOverall}}{{#str}}overallprogressshort, format_tiles{{/str}}{{/isOverall}}{{^isOverall}}{{#str}}progress, format_tiles{{/str}}{{/isOverall}} %
                </div>
                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    {{! two circles, one showing complete and one showing the user\'s progress }}
                    <circle class="whole" cx="20" cy="20" r="17" fill="none" stroke="#e6e6e6" stroke-width="5"></circle>
                    <circle id="percent-circle-{{tileid}}" class="partial" transform="rotate(-90,20,20)" cx="20"
                            cy="20" r="17" fill="none" stroke="none" stroke-width="5" stroke-dasharray="{{percentCircumf}}"
                            stroke-dashoffset="{{percentOffset}}"></circle>
                    {{! the numeric percentage in centre of circle }}
                    <text x="{{^is-rtl}}{{#isSingleDigit}}15{{/isSingleDigit}}{{^isSingleDigit}}10{{/isSingleDigit}}{{/is-rtl}}{{#is-rtl}}{{#isSingleDigit}}25{{/isSingleDigit}}{{^isSingleDigit}}30{{/isSingleDigit}}{{/is-rtl}}" y="27" font-family="inherit" font-size="20" id="percent-text-{{tileid}}">
                        {{percent}}
                    </text>
                </svg>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="progress-indic percent';
                $value = $context->find('isOverall');
                $buffer .= $this->section2340cbe62924ad39a9a62f97f62658c2($context, $indent, $value);
                $buffer .= '  tiles-hide-if-complete" id="tileprogress-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                 data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <div class="progress-indic-label">
';
                $buffer .= $indent . '                  ';
                $value = $context->find('isOverall');
                $buffer .= $this->section0a1dcb7f46b31fa70481c5e7f3e2d040($context, $indent, $value);
                $value = $context->find('isOverall');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                }
                $buffer .= ' %
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
';
                $buffer .= $indent . '                    <circle class="whole" cx="20" cy="20" r="17" fill="none" stroke="#e6e6e6" stroke-width="5"></circle>
';
                $buffer .= $indent . '                    <circle id="percent-circle-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="partial" transform="rotate(-90,20,20)" cx="20"
';
                $buffer .= $indent . '                            cy="20" r="17" fill="none" stroke="none" stroke-width="5" stroke-dasharray="';
                $value = $this->resolveValue($context->find('percentCircumf'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                            stroke-dashoffset="';
                $value = $this->resolveValue($context->find('percentOffset'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></circle>
';
                $buffer .= $indent . '                    <text x="';
                $value = $context->find('is-rtl');
                if (empty($value)) {
                    
                    $value = $context->find('isSingleDigit');
                    $buffer .= $this->section10470c0602d3700b02584489e0eadfa7($context, $indent, $value);
                    $value = $context->find('isSingleDigit');
                    if (empty($value)) {
                        
                        $buffer .= '10';
                    }
                }
                $value = $context->find('is-rtl');
                $buffer .= $this->section3fc72a6724a0209261ae6c3eb0132cd8($context, $indent, $value);
                $buffer .= '" y="27" font-family="inherit" font-size="20" id="percent-text-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('percent'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </text>
';
                $buffer .= $indent . '                </svg>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a234fea2465ad85cf5d3792a8e4b81a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' percent';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' percent';
                $context->pop();
            }
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

    private function sectionDad27661b3676348c76420bf0fdb9208(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="progress-indic progress-indic-label" id="tileallcomplete-{{tileid}}" data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                    {{#pix}}completion-check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}
                    {{#str}}allcomplete, format_tiles{{/str}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="progress-indic progress-indic-label" id="tileallcomplete-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->section9a8bea825f4f2fe9de2e7cb93f9ed9b7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68c45f1120f6ecce060176e8aa3d469d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{! if the progress is out of zero then do not show the indicator at all}}
        {{#showAsPercent}}
            <div class="progress-indic percent{{#isOverall}} overall-progress align-top{{/isOverall}}  tiles-hide-if-complete" id="tileprogress-{{tileid}}"
                 data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                <div class="progress-indic-label">
                  {{#isOverall}}{{#str}}overallprogressshort, format_tiles{{/str}}{{/isOverall}}{{^isOverall}}{{#str}}progress, format_tiles{{/str}}{{/isOverall}} %
                </div>
                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    {{! two circles, one showing complete and one showing the user\'s progress }}
                    <circle class="whole" cx="20" cy="20" r="17" fill="none" stroke="#e6e6e6" stroke-width="5"></circle>
                    <circle id="percent-circle-{{tileid}}" class="partial" transform="rotate(-90,20,20)" cx="20"
                            cy="20" r="17" fill="none" stroke="none" stroke-width="5" stroke-dasharray="{{percentCircumf}}"
                            stroke-dashoffset="{{percentOffset}}"></circle>
                    {{! the numeric percentage in centre of circle }}
                    <text x="{{^is-rtl}}{{#isSingleDigit}}15{{/isSingleDigit}}{{^isSingleDigit}}10{{/isSingleDigit}}{{/is-rtl}}{{#is-rtl}}{{#isSingleDigit}}25{{/isSingleDigit}}{{^isSingleDigit}}30{{/isSingleDigit}}{{/is-rtl}}" y="27" font-family="inherit" font-size="20" id="percent-text-{{tileid}}">
                        {{percent}}
                    </text>
                </svg>
            </div>
        {{/showAsPercent}}

        {{^showAsPercent}}
            <div class="progress-indic{{#isOverall}} overall-progress align-top{{/isOverall}}  tiles-hide-if-complete" id="tileprogress-{{tileid}}"
                 data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                {{#str}}progress, format_tiles{{/str}}:
                <span class="num-complete">{{numComplete}}</span><span> / </span><span class="num-out-of">{{numOutOf}}</span>
            </div>
        {{/showAsPercent}}

        {{! Now the "is complete" indicator }}
        <div class="progress-indic{{#showAsPercent}} percent{{/showAsPercent}} tiles-hide-if-incomplete" id="tileprogress-{{tileid}}-allcomplete"
             data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
            {{#isOverall}}
                <div class="progress-indic progress-indic-label" id="tileallcomplete-{{tileid}}" data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                    {{#pix}}completion-check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}
                    {{#str}}allcomplete, format_tiles{{/str}}
                </div>
            {{/isOverall}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('showAsPercent');
                $buffer .= $this->sectionEd6072b41b01eab24376b86d4d5297a0($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('showAsPercent');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="progress-indic';
                    $value = $context->find('isOverall');
                    $buffer .= $this->section2340cbe62924ad39a9a62f97f62658c2($context, $indent, $value);
                    $buffer .= '  tiles-hide-if-complete" id="tileprogress-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                 data-numcomplete="';
                    $value = $this->resolveValue($context->find('numComplete'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-numoutof="';
                    $value = $this->resolveValue($context->find('numOutOf'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $buffer .= $indent . '                ';
                    $value = $context->find('str');
                    $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                    $buffer .= ':
';
                    $buffer .= $indent . '                <span class="num-complete">';
                    $value = $this->resolveValue($context->find('numComplete'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</span><span> / </span><span class="num-out-of">';
                    $value = $this->resolveValue($context->find('numOutOf'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</span>
';
                    $buffer .= $indent . '            </div>
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="progress-indic';
                $value = $context->find('showAsPercent');
                $buffer .= $this->section6a234fea2465ad85cf5d3792a8e4b81a($context, $indent, $value);
                $buffer .= ' tiles-hide-if-incomplete" id="tileprogress-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-allcomplete"
';
                $buffer .= $indent . '             data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('isOverall');
                $buffer .= $this->sectionDad27661b3676348c76420bf0fdb9208($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33ca64fc5d5179a6f274375d07070386(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="progress-indic{{#showAsPercent}} percent{{/showAsPercent}} tiles-hide-if-complete" id="tileprogress-{{tileid}}"
                data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                {{#str}}progress, format_tiles{{/str}}: <span class="percent-complete">{{percent}}</span><span>%</span>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="progress-indic';
                $value = $context->find('showAsPercent');
                $buffer .= $this->section6a234fea2465ad85cf5d3792a8e4b81a($context, $indent, $value);
                $buffer .= ' tiles-hide-if-complete" id="tileprogress-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                $buffer .= ': <span class="percent-complete">';
                $value = $this->resolveValue($context->find('percent'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span><span>%</span>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section087fc01ab7fad000ee50c6176edcfa44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{! The not complete indicator }}
        {{#showAsPercent}}
            <div class="progress-indic{{#showAsPercent}} percent{{/showAsPercent}} tiles-hide-if-complete" id="tileprogress-{{tileid}}"
                data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                {{#str}}progress, format_tiles{{/str}}: <span class="percent-complete">{{percent}}</span><span>%</span>
            </div>
        {{/showAsPercent}}
        {{^showAsPercent}}
            <div class="progress-indic{{#isOverall}} overall-progress align-top{{/isOverall}} tiles-hide-if-complete" id="tileprogress-{{tileid}}"
                data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}"
                title="{{{progresstitle}}}"
            >
                {{#str}}progress, format_tiles{{/str}}:
                <span class="num-complete">{{numComplete}}</span><span> / </span><span class="num-out-of">{{numOutOf}}</span>
            </div>
        {{/showAsPercent}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('showAsPercent');
                $buffer .= $this->section33ca64fc5d5179a6f274375d07070386($context, $indent, $value);
                $value = $context->find('showAsPercent');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="progress-indic';
                    $value = $context->find('isOverall');
                    $buffer .= $this->section2340cbe62924ad39a9a62f97f62658c2($context, $indent, $value);
                    $buffer .= ' tiles-hide-if-complete" id="tileprogress-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                data-numcomplete="';
                    $value = $this->resolveValue($context->find('numComplete'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-numoutof="';
                    $value = $this->resolveValue($context->find('numOutOf'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                title="';
                    $value = $this->resolveValue($context->find('progresstitle'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '            >
';
                    $buffer .= $indent . '                ';
                    $value = $context->find('str');
                    $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                    $buffer .= ':
';
                    $buffer .= $indent . '                <span class="num-complete">';
                    $value = $this->resolveValue($context->find('numComplete'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</span><span> / </span><span class="num-out-of">';
                    $value = $this->resolveValue($context->find('numOutOf'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</span>
';
                    $buffer .= $indent . '            </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section679bf4fc3377cdaf627bfb46a1c78316(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#numOutOf}}
        {{! The not complete indicator }}
        {{#showAsPercent}}
            <div class="progress-indic{{#showAsPercent}} percent{{/showAsPercent}} tiles-hide-if-complete" id="tileprogress-{{tileid}}"
                data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                {{#str}}progress, format_tiles{{/str}}: <span class="percent-complete">{{percent}}</span><span>%</span>
            </div>
        {{/showAsPercent}}
        {{^showAsPercent}}
            <div class="progress-indic{{#isOverall}} overall-progress align-top{{/isOverall}} tiles-hide-if-complete" id="tileprogress-{{tileid}}"
                data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}"
                title="{{{progresstitle}}}"
            >
                {{#str}}progress, format_tiles{{/str}}:
                <span class="num-complete">{{numComplete}}</span><span> / </span><span class="num-out-of">{{numOutOf}}</span>
            </div>
        {{/showAsPercent}}
    {{/numOutOf}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('numOutOf');
                $buffer .= $this->section087fc01ab7fad000ee50c6176edcfa44($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
