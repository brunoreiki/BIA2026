<?php

class __Mustache_3842dc2547ac1c98335fee3bcb1a8c5a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('editorwarnings');
        $buffer .= $this->section7c7478ce87110c5840efe29e4f235ac8($context, $indent, $value);
        $value = $context->find('is_single_section');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="section-zero-container" class="';
            $value = $context->find('usingjsnav');
            if (empty($value)) {
                
                $buffer .= 'format-tiles-no-js';
            }
            $value = $context->find('section_zero_show');
            if (empty($value)) {
                
                $buffer .= ' section-zero-empty';
            }
            $buffer .= '">
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '    <div class="d-block d-sm-none">
';
            $buffer .= $indent . '        <div class="above-tiles-buttons text-end';
            $value = $context->find('section_zero_show');
            if (empty($value)) {
                
                $buffer .= ' section-zero-empty';
            }
            $buffer .= '">
';
            if ($partial = $this->mustache->loadPartial('format_tiles/above_tiles_buttons')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '    <div class="row">
';
            $buffer .= $indent . '        <div class="col-sm-11">';
            if ($partial = $this->mustache->loadPartial('format_tiles/section_zero')) {
                $buffer .= $partial->renderInternal($context);
            }
            $buffer .= '</div>
';
            $buffer .= $indent . '        <div class="col-sm-1 d-none d-sm-block">
';
            $buffer .= $indent . '            <div class="above-tiles-buttons text-end';
            $value = $context->find('section_zero_show');
            if (empty($value)) {
                
                $buffer .= ' section-zero-empty';
            }
            $buffer .= '">
';
            if ($partial = $this->mustache->loadPartial('format_tiles/above_tiles_buttons')) {
                $buffer .= $partial->renderInternal($context, $indent . '                ');
            }
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('editing');
        if (empty($value)) {
            
            $value = $context->find('is_single_section');
            if (empty($value)) {
                
                $buffer .= $indent . '        <div id="abovetiles"
';
                $buffer .= $indent . '             class="';
                $value = $context->find('has_filter_buttons');
                $buffer .= $this->sectionF64829d7ca36f8d2d4cdef5a62f9e7a3($context, $indent, $value);
                $value = $context->find('has_filter_buttons');
                if (empty($value)) {
                    
                    $buffer .= 'justify-content-end';
                }
                $buffer .= ' tilestyle-';
                $value = $this->resolveValue($context->find('tilestyle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $value = $context->find('section_zero_show');
                if (empty($value)) {
                    
                    $buffer .= ' section-zero-empty';
                }
                $buffer .= '">
';
                $value = $context->find('is_multi_section');
                $buffer .= $this->sectionCbe7204c6f5a0d6e0d00cd2b2a710c13($context, $indent, $value);
                $value = $context->find('is_multi_section');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                ';
                    $value = $context->find('editing');
                    if (empty($value)) {
                        
                        $value = $context->find('section_zero_show');
                        $buffer .= $this->section9c9e3640f54f0ed0d2153cc18525de95($context, $indent, $value);
                    }
                    $buffer .= '
';
                }
                $buffer .= $indent . '        </div>
';
            }
        }

        return $buffer;
    }

    private function section62fce6eb1e22a38c9f1bd33645ed3cc6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dismissnotification, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dismissnotification, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c7478ce87110c5840efe29e4f235ac8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="alert alert-{{class}} alert-block fade show"><i class="icon fa fa-{{icon}}"></i>{{{text}}}
        <button type="button" class="btn-close" data-bs-dismiss="alert">
            <span class="sr-only">{{#str}}dismissnotification, core{{/str}}</span>
        </button>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="alert alert-';
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' alert-block fade show"><i class="icon fa fa-';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        <button type="button" class="btn-close" data-bs-dismiss="alert">
';
                $buffer .= $indent . '            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section62fce6eb1e22a38c9f1bd33645ed3cc6($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF64829d7ca36f8d2d4cdef5a62f9e7a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'justify-content-between';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'justify-content-between';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3e06d13efc69d47f6b08b6fba2db1c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filters, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'filters, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4824eb7d80cfd77305f5fa202afd3412(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filter, format_tiles, {{#str}}filters, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'filter, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->sectionF3e06d13efc69d47f6b08b6fba2db1c6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e5c9d00bd84bb56a075c737d8f40872(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> format_tiles/filterbutton}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/filterbutton')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3b8c7f828ca0f692d81260dd5cb7343(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'all, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'all, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE7ee9e11a5ae6bf92e5a40e9d8a41a0a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="filterbuttons">
                    <span id="filterintro">
                        {{#pix}}filter, format_tiles, {{#str}}filters, format_tiles{{/str}}{{/pix}}
                    </span>
                        {{#filternumberedbuttons}}
                            {{> format_tiles/filterbutton}}
                        {{/filternumberedbuttons}}
                        {{#filteroutcomebuttons}}
                            {{> format_tiles/filterbutton}}
                        {{/filteroutcomebuttons}}
                        <div id="filterbutton-all" class="filterbutton" data-buttonid="all" data-sections="[all]">
                            {{#str}}all, format_tiles{{/str}}
                        </div>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div id="filterbuttons">
';
                $buffer .= $indent . '                    <span id="filterintro">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('pix');
                $buffer .= $this->section4824eb7d80cfd77305f5fa202afd3412($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $value = $context->find('filternumberedbuttons');
                $buffer .= $this->section8e5c9d00bd84bb56a075c737d8f40872($context, $indent, $value);
                $value = $context->find('filteroutcomebuttons');
                $buffer .= $this->section8e5c9d00bd84bb56a075c737d8f40872($context, $indent, $value);
                $buffer .= $indent . '                        <div id="filterbutton-all" class="filterbutton" data-buttonid="all" data-sections="[all]">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionA3b8c7f828ca0f692d81260dd5cb7343($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0913567f62f48e9575a17a7fa0d6df20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' is-complete';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' is-complete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2ad21c668f969a9bc78e68df9db34c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> format_tiles/progress}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/progress')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCbe7204c6f5a0d6e0d00cd2b2a710c13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#has_filter_buttons}}
                    <div id="filterbuttons">
                    <span id="filterintro">
                        {{#pix}}filter, format_tiles, {{#str}}filters, format_tiles{{/str}}{{/pix}}
                    </span>
                        {{#filternumberedbuttons}}
                            {{> format_tiles/filterbutton}}
                        {{/filternumberedbuttons}}
                        {{#filteroutcomebuttons}}
                            {{> format_tiles/filterbutton}}
                        {{/filteroutcomebuttons}}
                        <div id="filterbutton-all" class="filterbutton" data-buttonid="all" data-sections="[all]">
                            {{#str}}all, format_tiles{{/str}}
                        </div>
                    </div>
                {{/has_filter_buttons}}
                <div id="tiles-overall-progress-outer" class="ms-auto me-1 mb-2 pt-1 d-none d-sm-block{{#overall_progress_indicator.isComplete}} is-complete{{/overall_progress_indicator.isComplete}}">
                    {{#overall_progress_indicator}}
                        {{> format_tiles/progress}}
                    {{/overall_progress_indicator}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('has_filter_buttons');
                $buffer .= $this->sectionE7ee9e11a5ae6bf92e5a40e9d8a41a0a($context, $indent, $value);
                $buffer .= $indent . '                <div id="tiles-overall-progress-outer" class="ms-auto me-1 mb-2 pt-1 d-none d-sm-block';
                $value = $context->findDot('overall_progress_indicator.isComplete');
                $buffer .= $this->section0913567f62f48e9575a17a7fa0d6df20($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('overall_progress_indicator');
                $buffer .= $this->sectionC2ad21c668f969a9bc78e68df9db34c1($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11333c2b7d7f260038ca2164924aa1d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="buttonhidesec0 open ms-1" id="buttonhidesec0"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                    <div class="buttonhidesec0 open ms-1" id="buttonhidesec0"></div>
';
                $buffer .= $indent . '                ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c9e3640f54f0ed0d2153cc18525de95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#section_zero.is_collapsible}}
                    <div class="buttonhidesec0 open ms-1" id="buttonhidesec0"></div>
                {{/section_zero.is_collapsible}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('section_zero.is_collapsible');
                $buffer .= $this->section11333c2b7d7f260038ca2164924aa1d9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
