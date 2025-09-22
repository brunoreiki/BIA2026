<?php

class __Mustache_8941816ca51d8540482eb0b5564dc505 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('ismoodle41minus');
        if (empty($value)) {
            
            $value = $context->find('sectionbulk');
            $buffer .= $this->section43a130cc3c264813d8f0baa9b4d7e675($context, $indent, $value);
        }
        $value = $context->find('sitehome');
        $buffer .= $this->sectionAdc86b1d6b2725fea12f2413810d0ec1($context, $indent, $value);
        $value = $context->find('sitehome');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="course-section-header d-flex" data-for="section_title" data-id="';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" data-number="';
            $value = $this->resolveValue($context->find('num'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '        <div class="d-flex align-items-start position-relative">
';
            $buffer .= $indent . '            <a role="button"
';
            $buffer .= $indent . '                data-bs-toggle="collapse"
';
            $buffer .= $indent . '                data-for="sectiontoggler"
';
            $buffer .= $indent . '           href="#coursecontentcollapse';
            $value = $this->resolveValue($context->find('num'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '           id="collapssesectionid';
            $value = $this->resolveValue($context->find('num'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '           aria-expanded="';
            $value = $context->find('contentcollapsed');
            if (empty($value)) {
                
                $buffer .= 'true';
            }
            $value = $context->find('contentcollapsed');
            $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '                class="btn btn-icon me-1 icons-collapse-expand justify-content-center
';
            $buffer .= $indent . '               ';
            $value = $context->find('editing');
            if (empty($value)) {
                
                $buffer .= ' stretched-link ';
            }
            $buffer .= '
';
            $buffer .= $indent . '               ';
            $value = $context->find('contentcollapsed');
            $buffer .= $this->sectionE27d58bd82bf887495509fb3582d0729($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '                aria-label="';
            $value = $this->resolveValue($context->find('name'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '        <span class="expanded-icon icon-no-margin p-2" title="';
            $value = $context->find('str');
            $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '            ';
            $value = $context->find('pix');
            $buffer .= $this->sectionEce766800de4730c5a948801df414738($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </span>
';
            $buffer .= $indent . '            <span class="collapsed-icon icon-no-margin p-2" title="';
            $value = $context->find('str');
            $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '            <span class="dir-rtl-hide">';
            $value = $context->find('pix');
            $buffer .= $this->section8a8ae941fd79f459323bea8528b0311c($context, $indent, $value);
            $buffer .= '</span>
';
            $buffer .= $indent . '            <span class="dir-ltr-hide">';
            $value = $context->find('pix');
            $buffer .= $this->section99c846dfb5f618178bca670626f33c8b($context, $indent, $value);
            $buffer .= '</span>
';
            $buffer .= $indent . '        </span>
';
            $buffer .= $indent . '        </a>
';
            $buffer .= $indent . '            <h3 class="sectionname course-content-item d-flex align-self-stretch align-items-center mb-0"
';
            $buffer .= $indent . '                id="sectionid-';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '-title" data-for="section_title" data-id="';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" data-number="';
            $value = $this->resolveValue($context->find('num'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $value = $context->find('issectionzero');
            if (empty($value)) {
                
                if ($partial = $this->mustache->loadPartial('format_tiles/local/content/section-tiles-image')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
            }
            $buffer .= $indent . '                <span>';
            $value = $this->resolveValue($context->find('title'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</span>
';
            $buffer .= $indent . '        </h3>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '    <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center">
';
            $blockFunction = $context->findInBlock('core_courseformat/local/content/section/badges');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/badges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
            }
            $buffer .= $indent . '        ';
            $value = $context->find('restrictionlock');
            $buffer .= $this->section71144a51a86d4ac172e89df0f4071ff4($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
            $value = $context->find('collapsemenu');
            $buffer .= $this->section64a15e74247eaa400b7f7a602cd05bd8($context, $indent, $value);
            $value = $context->find('controlmenu');
            $buffer .= $this->section121f58cb6769c7cd8822136c7ef3ef98($context, $indent, $value);
            $buffer .= $indent . '</div>
';
        }

        return $buffer;
    }

    private function section43a130cc3c264813d8f0baa9b4d7e675(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$ core_courseformat/local/content/section/bulkselect }}
            {{> core_courseformat/local/content/section/bulkselect }}
        {{/ core_courseformat/local/content/section/bulkselect }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/section/bulkselect');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/bulkselect')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdc86b1d6b2725fea12f2413810d0ec1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2 id="sectionid-{{id}}-title" class="sectionname">
        {{{title}}}
    </h2>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h2 id="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title" class="sectionname">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE27d58bd82bf887495509fb3582d0729(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapsed ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapsed ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ac795c23146489fad8f951c23f9a92a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapse, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEce766800de4730c5a948801df414738(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/expandedchevron, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/expandedchevron, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b5765485c94c190bf567731edb08c3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expand, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expand, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a8ae941fd79f459323bea8528b0311c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsedchevron, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsedchevron, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99c846dfb5f618178bca670626f33c8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsedchevron_rtl, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsedchevron_rtl, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71144a51a86d4ac172e89df0f4071ff4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<i class="icon fa fa-lock fa-fw " aria-hidden="true"></i>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<i class="icon fa fa-lock fa-fw " aria-hidden="true"></i>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1c5833858b6a763436e852c524f170c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapseall';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'collapseall';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c42c2ba118f2e9924725a2f71fafad6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expandall';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'expandall';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64a15e74247eaa400b7f7a602cd05bd8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
           <div class="flex-fill d-flex justify-content-end me-2 align-self-start mt-2">
                <a
                        id="collapsesections"
                        class="section-collapsemenu"
                        href="#"
                        aria-expanded="true"
                        role="button"
                        data-toggle="toggleall"
                >
                    <span class="collapseall text-nowrap">{{#str}}collapseall{{/str}}</span>
                    <span class="expandall text-nowrap">{{#str}}expandall{{/str}}</span>
                </a>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '           <div class="flex-fill d-flex justify-content-end me-2 align-self-start mt-2">
';
                $buffer .= $indent . '                <a
';
                $buffer .= $indent . '                        id="collapsesections"
';
                $buffer .= $indent . '                        class="section-collapsemenu"
';
                $buffer .= $indent . '                        href="#"
';
                $buffer .= $indent . '                        aria-expanded="true"
';
                $buffer .= $indent . '                        role="button"
';
                $buffer .= $indent . '                        data-toggle="toggleall"
';
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '                    <span class="collapseall text-nowrap">';
                $value = $context->find('str');
                $buffer .= $this->sectionE1c5833858b6a763436e852c524f170c($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <span class="expandall text-nowrap">';
                $value = $context->find('str');
                $buffer .= $this->section5c42c2ba118f2e9924725a2f71fafad6($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section121f58cb6769c7cd8822136c7ef3ef98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{$ core_courseformat/local/content/section/controlmenu }}
                {{> core_courseformat/local/content/section/controlmenu }}
            {{/ core_courseformat/local/content/section/controlmenu }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/section/controlmenu');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/controlmenu')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
