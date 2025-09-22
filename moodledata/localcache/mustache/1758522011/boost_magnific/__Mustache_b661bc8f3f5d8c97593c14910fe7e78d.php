<?php

class __Mustache_b661bc8f3f5d8c97593c14910fe7e78d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="course-format-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <h2 class="accesshide">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('completionhelp'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('editoradvice');
        $buffer .= $this->sectionDc28974864845468598ea945768be94c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <ul class="';
        $value = $this->resolveValue($context->find('format'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-for="course_sectionlist">
';
        $value = $context->find('initialsection');
        $buffer .= $this->sectionC3db03be68f7d9d3f765f65c2817694b($context, $indent, $value);
        $value = $context->find('sections');
        $buffer .= $this->sectionC3db03be68f7d9d3f765f65c2817694b($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $value = $context->find('hasnavigation');
        $buffer .= $this->sectionDabe27f8968ae9825284859d7d300877($context, $indent, $value);
        $value = $context->find('ismoodle41minus');
        if (empty($value)) {
            
            $value = $context->find('bulkedittools');
            $buffer .= $this->sectionBc4f88d1718d84a6297c8298ed048580($context, $indent, $value);
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section9e22f306f9a41d70db0d3332a76f475f($context, $indent, $value);

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

    private function sectionDc28974864845468598ea945768be94c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="alert alert-{{class}} alert-block fade in alert-dismissible"><i class="icon fa fa-{{icon}}"></i>{{{text}}}
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
                
                $buffer .= $indent . '        <div class="alert alert-';
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' alert-block fade in alert-dismissible"><i class="icon fa fa-';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            <button type="button" class="btn-close" data-bs-dismiss="alert">
';
                $buffer .= $indent . '                <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section62fce6eb1e22a38c9f1bd33645ed3cc6($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3db03be68f7d9d3f765f65c2817694b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{$ format_tiles/local/content/section }}
                {{> format_tiles/local/content/section }}
            {{/ format_tiles/local/content/section }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('format_tiles/local/content/section');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('format_tiles/local/content/section')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78db7189b7274c6206998f09e79b6e93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{$ core_courseformat/local/content/sectionnavigation }}
                    {{> core_courseformat/local/content/sectionnavigation }}
                {{/ core_courseformat/local/content/sectionnavigation }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/sectionnavigation');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/sectionnavigation')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31fdfa5cd03e487546298c30581ebf3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{$ format_tiles/local/content/section }}
                        {{> format_tiles/local/content/section }}
                    {{/ format_tiles/local/content/section }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('format_tiles/local/content/section');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('format_tiles/local/content/section')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c100d59bd75f737a9bdb6b3fd53177f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{$ core_courseformat/local/content/sectionselector }}
                    {{> core_courseformat/local/content/sectionselector }}
                {{/ core_courseformat/local/content/sectionselector }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/sectionselector');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/sectionselector')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDabe27f8968ae9825284859d7d300877(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="single-section">
            {{#sectionnavigation}}
                {{$ core_courseformat/local/content/sectionnavigation }}
                    {{> core_courseformat/local/content/sectionnavigation }}
                {{/ core_courseformat/local/content/sectionnavigation }}
            {{/sectionnavigation}}
            <ul class="{{format}}">
                {{#singlesection}}
                    {{$ format_tiles/local/content/section }}
                        {{> format_tiles/local/content/section }}
                    {{/ format_tiles/local/content/section }}
                {{/singlesection}}
            </ul>
            {{#sectionselector}}
                {{$ core_courseformat/local/content/sectionselector }}
                    {{> core_courseformat/local/content/sectionselector }}
                {{/ core_courseformat/local/content/sectionselector }}
            {{/sectionselector}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="single-section">
';
                $value = $context->find('sectionnavigation');
                $buffer .= $this->section78db7189b7274c6206998f09e79b6e93($context, $indent, $value);
                $buffer .= $indent . '            <ul class="';
                $value = $this->resolveValue($context->find('format'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('singlesection');
                $buffer .= $this->section31fdfa5cd03e487546298c30581ebf3a($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $value = $context->find('sectionselector');
                $buffer .= $this->section5c100d59bd75f737a9bdb6b3fd53177f($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc4f88d1718d84a6297c8298ed048580(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{$ core_courseformat/local/content/bulkedittools}}
                {{> core_courseformat/local/content/bulkedittools}}
            {{/ core_courseformat/local/content/bulkedittools}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/bulkedittools');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/bulkedittools')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e22f306f9a41d70db0d3332a76f475f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core_courseformat/local/content\'], function(component) {
    component.init(\'course-format-{{uniqid}}\', {}, {{sectionreturn}});
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core_courseformat/local/content\'], function(component) {
';
                $buffer .= $indent . '    component.init(\'course-format-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', {}, ';
                $value = $this->resolveValue($context->find('sectionreturn'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
