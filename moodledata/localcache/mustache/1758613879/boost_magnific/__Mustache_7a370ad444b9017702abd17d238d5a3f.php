<?php

class __Mustache_7a370ad444b9017702abd17d238d5a3f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('ismoodle42minus');
        $buffer .= $this->sectionFa9b78d88a31132e774eda314c896a20($context, $indent, $value);
        $value = $context->find('ismoodle42minus');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $context->find('moveicon');
            $buffer .= $this->section2e7d3cdfffee27291ffca5f384d8d23d($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    <div class="activity-grid ';
            $value = $context->find('hasname');
            if (empty($value)) {
                
                $buffer .= 'noname-grid';
            }
            $buffer .= ' tiles-activity-container"
';
            $buffer .= $indent . '        ';
            $value = $context->find('clickable');
            $buffer .= $this->sectionEaebfcbdddfec6e72df6856c656e8562($context, $indent, $value);
            $buffer .= '>
';
            $value = $context->find('hasname');
            $buffer .= $this->sectionAc5976a814e4fac51a3c6d48a01eea12($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('dates');
            $buffer .= $this->sectionAf30666042956b9c479ec848e70a3bc5($context, $indent, $value);
            $buffer .= $indent . '
';
            $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/badges');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/badges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
            }
            $buffer .= $indent . '
';
            $value = $context->find('groupmodeinfo');
            $buffer .= $this->section9cb8eb6e9d44300085c2d4dbf318557d($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('completion');
            $buffer .= $this->sectionFb045c68021d6b8d5263e27b11c0e1d7($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('controlmenu');
            $buffer .= $this->section64efc9296e8e7ad4cb8e8c3ca6379d34($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('altcontent');
            $buffer .= $this->section6395e96982ec8a446ccb1e75fe78bb82($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('modavailability');
            $buffer .= $this->section59227921106a62badb39181ab68051f4($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('afterlink');
            $buffer .= $this->section542beb251e0879ecd614109c5b27f344($context, $indent, $value);
            $buffer .= $indent . '    </div>
';
        }

        return $buffer;
    }

    private function sectionFa9b78d88a31132e774eda314c896a20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>format_tiles/local/content/cm/activity42}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/local/content/cm/activity42')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e7d3cdfffee27291ffca5f384d8d23d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{moveicon}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('moveicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEaebfcbdddfec6e72df6856c656e8562(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-cmid="{{cmid}}" data-modinstance="{{modinstance}}" data-title="{{{activityname}}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-modinstance="';
                $value = $this->resolveValue($context->find('modinstance'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-title="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83aa9f94571ef3260bbf2036d142e963(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{$ format_tiles/local/content/cm/cmname }}
                    {{> format_tiles/local/content/cm/cmname }}
                {{/ format_tiles/local/content/cm/cmname }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('format_tiles/local/content/cm/cmname');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('format_tiles/local/content/cm/cmname')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc5976a814e4fac51a3c6d48a01eea12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#cmname}}
                {{$ format_tiles/local/content/cm/cmname }}
                    {{> format_tiles/local/content/cm/cmname }}
                {{/ format_tiles/local/content/cm/cmname }}
            {{/cmname}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('cmname');
                $buffer .= $this->section83aa9f94571ef3260bbf2036d142e963($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC98254c424351c4907bf10cd15deec0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{$core_course/activity_date}}
                            {{>core_course/activity_date}}
                        {{/core_course/activity_date}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_course/activity_date');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_course/activity_date')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3de075d11cce88b38222416804a5c06d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div data-region="activity-dates" class="activity-dates me-sm-2">
                    {{#activitydates}}
                        {{$core_course/activity_date}}
                            {{>core_course/activity_date}}
                        {{/core_course/activity_date}}
                    {{/activitydates}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div data-region="activity-dates" class="activity-dates me-sm-2">
';
                $value = $context->find('activitydates');
                $buffer .= $this->sectionC98254c424351c4907bf10cd15deec0c($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf30666042956b9c479ec848e70a3bc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#hasdates}}
                <div data-region="activity-dates" class="activity-dates me-sm-2">
                    {{#activitydates}}
                        {{$core_course/activity_date}}
                            {{>core_course/activity_date}}
                        {{/core_course/activity_date}}
                    {{/activitydates}}
                </div>
            {{/hasdates}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hasdates');
                $buffer .= $this->section3de075d11cce88b38222416804a5c06d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9cb8eb6e9d44300085c2d4dbf318557d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div
                    class="activity-groupmode-info align-self-start ms-sm-2"
                    data-region="groupmode"
            >
                {{$ core_courseformat/local/content/cm/groupmode}}
                    {{> core_courseformat/local/content/cm/groupmode}}
                {{/ core_courseformat/local/content/cm/groupmode}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div
';
                $buffer .= $indent . '                    class="activity-groupmode-info align-self-start ms-sm-2"
';
                $buffer .= $indent . '                    data-region="groupmode"
';
                $buffer .= $indent . '            >
';
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/groupmode');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/groupmode')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50866dc0215790fb90a669a5c2197bfa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="activity-completion align-self-start ms-sm-2">
                    {{$ core_courseformat/local/content/cm/activity_info}}
                        {{> core_courseformat/local/content/cm/activity_info}}
                    {{/ core_courseformat/local/content/cm/activity_info}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="activity-completion align-self-start ms-sm-2">
';
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/activity_info');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/activity_info')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                        ');
                    }
                }
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb045c68021d6b8d5263e27b11c0e1d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#hascompletion}}
                <div class="activity-completion align-self-start ms-sm-2">
                    {{$ core_courseformat/local/content/cm/activity_info}}
                        {{> core_courseformat/local/content/cm/activity_info}}
                    {{/ core_courseformat/local/content/cm/activity_info}}
                </div>
            {{/hascompletion}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hascompletion');
                $buffer .= $this->section50866dc0215790fb90a669a5c2197bfa($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64efc9296e8e7ad4cb8e8c3ca6379d34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="activity-actions bulk-hidden align-self-start ms-sm-2">
                {{$ core_courseformat/local/content/cm/controlmenu }}
                    {{> core_courseformat/local/content/cm/controlmenu }}
                {{/ core_courseformat/local/content/cm/controlmenu }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="activity-actions bulk-hidden align-self-start ms-sm-2">
';
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/controlmenu');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/controlmenu')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDeab689131090b323e80f203552bf33a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delegated-section-content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'delegated-section-content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE7700784befebc1262586a7c792a229c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activity-description';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activity-description';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6395e96982ec8a446ccb1e75fe78bb82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{! In Moodle 4.5+, if this is a delegated section then this is a container for a <ul> of course modules }}
            <div class="activity-altcontent {{#issubsection}}delegated-section-content{{/issubsection}}{{^isdelegatedsection}}d-flex{{/isdelegatedsection}} text-break {{#hasname}}activity-description{{/hasname}}">
                {{{altcontent}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="activity-altcontent ';
                $value = $context->find('issubsection');
                $buffer .= $this->sectionDeab689131090b323e80f203552bf33a($context, $indent, $value);
                $value = $context->find('isdelegatedsection');
                if (empty($value)) {
                    
                    $buffer .= 'd-flex';
                }
                $buffer .= ' text-break ';
                $value = $context->find('hasname');
                $buffer .= $this->sectionE7700784befebc1262586a7c792a229c($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('altcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59227921106a62badb39181ab68051f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{$ core_courseformat/local/content/cm/availability }}
                {{> core_courseformat/local/content/cm/availability }}
            {{/ core_courseformat/local/content/cm/availability }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/availability');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/availability')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section542beb251e0879ecd614109c5b27f344(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="activity-afterlink afterlink d-flex align-items-center">
                {{{afterlink}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="activity-afterlink afterlink d-flex align-items-center">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('afterlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
