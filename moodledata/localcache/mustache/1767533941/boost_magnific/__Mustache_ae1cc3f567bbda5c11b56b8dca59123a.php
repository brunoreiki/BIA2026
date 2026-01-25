<?php

class __Mustache_ae1cc3f567bbda5c11b56b8dca59123a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasnavbarcourse');
        $buffer .= $this->sectionB378f64763845ac51d43ff9f33d62de2($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasbannercourse');
        $buffer .= $this->section834d9e3f0b57c9b5def0bd8c5dd59d3e($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasnavbarcourse');
        if (empty($value)) {
            
            $value = $context->find('hasbannercourse');
            if (empty($value)) {
                
                $buffer .= $indent . '        <header id="page-header" class="header-maxwidth d-print-none">
';
                $buffer .= $indent . '            <div class="w-100">
';
                $buffer .= $indent . '                <div class="d-flex flex-wrap">
';
                $value = $context->find('hasnavbar');
                $buffer .= $this->section6dbc106daeb19b330f398da6f89249a4($context, $indent, $value);
                $buffer .= $indent . '                    <div class="ms-auto d-flex">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div id="course-header">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('courseheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="d-flex align-items-center">
';
                $value = $context->find('welcomemessage');
                if (empty($value)) {
                    
                    $value = $context->find('contextheader');
                    $buffer .= $this->sectionB260637e5e5ab8226f16444c74360ffb($context, $indent, $value);
                }
                if ($partial = $this->mustache->loadPartial('core/welcome')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                    <div class="header-actions-container ms-auto" data-region="header-actions-container">
';
                $value = $context->find('headeractions');
                $buffer .= $this->section4eef411a16a2a0584c7e8d40fdc461b8($context, $indent, $value);
                $value = $context->find('headeractions_banner_course_edit');
                $buffer .= $this->section5f09ba8d5cec9db076fd0558da7e4b0f($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </header>
';
            }
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionAe4134ef2d834fea06954020a50a43f5($context, $indent, $value);

        return $buffer;
    }

    private function section40d9cbf5235d5c9580222bf1fd613dd5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="header-action ms-2">{{{.}}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="header-action ms-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ee7e60c8d33ea5813d4b9b5682bf32c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'course_summary_banner_edit, theme_boost_magnific';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'course_summary_banner_edit, theme_boost_magnific';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45bf2805d4f69ef2349e40df5fd02953(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="header-action ms-2">
                        <a id="headeractions-banner-{{{headeractions_banner_courseid}}}"
                           class="btn btn-primary text-nowrap"
                           href="{{{headeractions_banner_course_edithref}}}">
                            {{#str}}course_summary_banner_edit, theme_boost_magnific{{/str}}
                        </a>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="header-action ms-2">
';
                $buffer .= $indent . '                        <a id="headeractions-banner-';
                $value = $this->resolveValue($context->find('headeractions_banner_courseid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                           class="btn btn-primary text-nowrap"
';
                $buffer .= $indent . '                           href="';
                $value = $this->resolveValue($context->find('headeractions_banner_course_edithref'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->section4ee7e60c8d33ea5813d4b9b5682bf32c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00af97fa27092b0634f1cbec62636d48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="page-navbar">
                        {{{navbar}}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div id="page-navbar">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e93b22380c4315533a49d84c2a7f00f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <h6 class="number">{{{number}}}</h6>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <h6 class="number">';
                $value = $this->resolveValue($context->find('number'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9407c39f19264955dc61a28d7b386d9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a class="text" href="{{{link}}}">{{{text}}}</a>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a class="text" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fa690ce98927fac7701833e9e7640cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <dd class="course-intro-{{{id}}}">
                        <i class="fa {{{icon}}}"></i>
                        <div class="info">
                            {{#number}}
                                <h6 class="number">{{{number}}}</h6>
                            {{/number}}
                            {{#link}}
                                <a class="text" href="{{{link}}}">{{{text}}}</a>
                            {{/link}}
                            {{^link}}
                                <span class="text">{{{text}}}</span>
                            {{/link}}
                        </div>
                    </dd>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <dd class="course-intro-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <i class="fa ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                        <div class="info">
';
                $value = $context->find('number');
                $buffer .= $this->section0e93b22380c4315533a49d84c2a7f00f($context, $indent, $value);
                $value = $context->find('link');
                $buffer .= $this->section9407c39f19264955dc61a28d7b386d9b($context, $indent, $value);
                $value = $context->find('link');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <span class="text">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </dd>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB378f64763845ac51d43ff9f33d62de2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <header id="page-header" class="header-maxwidth d-print-none hasnavbarcourse">
        <div class="position-absolute hasnavbarcourse-gradient-image w-100 h-100"
             style="background-image: url(\'{{{overviewfiles}}}\');">
            <div class="overlay-gradient-image"></div>
        </div>
        <div class="w-100 header-wrapper" style="z-index:1;">
            <div class="header-actions-container ms-auto" data-region="header-actions-container">
                {{#headeractions}}
                    <div class="header-action ms-2">{{{.}}}</div>
                {{/headeractions}}
                {{#headeractions_banner_course_edit}}
                    <div class="header-action ms-2">
                        <a id="headeractions-banner-{{{headeractions_banner_courseid}}}"
                           class="btn btn-primary text-nowrap"
                           href="{{{headeractions_banner_course_edithref}}}">
                            {{#str}}course_summary_banner_edit, theme_boost_magnific{{/str}}
                        </a>
                    </div>
                {{/headeractions_banner_course_edit}}
            </div>
            <div class="d-flex flex-wrap">
                {{#hasnavbar}}
                    <div id="page-navbar">
                        {{{navbar}}}
                    </div>
                {{/hasnavbar}}
            </div>
            <div class="course-intro-category-name">{{{categoryname}}}</div>
            <div class="page-context-header">
                <div class="page-header-headings">
                    {{{contextheader}}}
                </div>
            </div>
            <dl class="course-intro-details">
                {{#details}}
                    <dd class="course-intro-{{{id}}}">
                        <i class="fa {{{icon}}}"></i>
                        <div class="info">
                            {{#number}}
                                <h6 class="number">{{{number}}}</h6>
                            {{/number}}
                            {{#link}}
                                <a class="text" href="{{{link}}}">{{{text}}}</a>
                            {{/link}}
                            {{^link}}
                                <span class="text">{{{text}}}</span>
                            {{/link}}
                        </div>
                    </dd>
                {{/details}}
            </dl>
        </div>
    </header>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <header id="page-header" class="header-maxwidth d-print-none hasnavbarcourse">
';
                $buffer .= $indent . '        <div class="position-absolute hasnavbarcourse-gradient-image w-100 h-100"
';
                $buffer .= $indent . '             style="background-image: url(\'';
                $value = $this->resolveValue($context->find('overviewfiles'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');">
';
                $buffer .= $indent . '            <div class="overlay-gradient-image"></div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="w-100 header-wrapper" style="z-index:1;">
';
                $buffer .= $indent . '            <div class="header-actions-container ms-auto" data-region="header-actions-container">
';
                $value = $context->find('headeractions');
                $buffer .= $this->section40d9cbf5235d5c9580222bf1fd613dd5($context, $indent, $value);
                $value = $context->find('headeractions_banner_course_edit');
                $buffer .= $this->section45bf2805d4f69ef2349e40df5fd02953($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="d-flex flex-wrap">
';
                $value = $context->find('hasnavbar');
                $buffer .= $this->section00af97fa27092b0634f1cbec62636d48($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="course-intro-category-name">';
                $value = $this->resolveValue($context->find('categoryname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div class="page-context-header">
';
                $buffer .= $indent . '                <div class="page-header-headings">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <dl class="course-intro-details">
';
                $value = $context->find('details');
                $buffer .= $this->section5fa690ce98927fac7701833e9e7640cd($context, $indent, $value);
                $buffer .= $indent . '            </dl>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </header>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section834d9e3f0b57c9b5def0bd8c5dd59d3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="page-header-size" class="hasbannercourse-size"></div>
    <header id="page-header"
            class="header-maxwidth d-print-none hasbannercourse">
        <div class="position-absolute hasnavbarcourse-gradient-image w-100 h-100"
             style="background-image: url(\'{{{banner_course_file_url}}}\');">
            <div class="overlay-gradient-image"></div>
        </div>
        <div class="w-100 header-wrapper container" style="z-index:1;">
            <div class="header-actions-container ms-auto" data-region="header-actions-container">
                {{#headeractions}}
                    <div class="header-action ms-2">{{{.}}}</div>
                {{/headeractions}}
                {{#headeractions_banner_course_edit}}
                    <div class="header-action ms-2">
                        <a id="headeractions-banner-{{{headeractions_banner_courseid}}}"
                           class="btn btn-primary text-nowrap"
                           href="{{{headeractions_banner_course_edithref}}}">
                            {{#str}}course_summary_banner_edit, theme_boost_magnific{{/str}}
                        </a>
                    </div>
                {{/headeractions_banner_course_edit}}
            </div>
            <div class="d-flex flex-wrap">
                {{#hasnavbar}}
                    <div id="page-navbar">
                        {{{navbar}}}
                    </div>
                {{/hasnavbar}}
            </div>
            <div class="course-intro-category-name">{{{categoryname}}}</div>
            <div class="page-context-header">
                <div class="page-header-headings">
                    {{{contextheader}}}
                </div>
            </div>
        </div>
    </header>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="page-header-size" class="hasbannercourse-size"></div>
';
                $buffer .= $indent . '    <header id="page-header"
';
                $buffer .= $indent . '            class="header-maxwidth d-print-none hasbannercourse">
';
                $buffer .= $indent . '        <div class="position-absolute hasnavbarcourse-gradient-image w-100 h-100"
';
                $buffer .= $indent . '             style="background-image: url(\'';
                $value = $this->resolveValue($context->find('banner_course_file_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');">
';
                $buffer .= $indent . '            <div class="overlay-gradient-image"></div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="w-100 header-wrapper container" style="z-index:1;">
';
                $buffer .= $indent . '            <div class="header-actions-container ms-auto" data-region="header-actions-container">
';
                $value = $context->find('headeractions');
                $buffer .= $this->section40d9cbf5235d5c9580222bf1fd613dd5($context, $indent, $value);
                $value = $context->find('headeractions_banner_course_edit');
                $buffer .= $this->section45bf2805d4f69ef2349e40df5fd02953($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="d-flex flex-wrap">
';
                $value = $context->find('hasnavbar');
                $buffer .= $this->section00af97fa27092b0634f1cbec62636d48($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="course-intro-category-name">';
                $value = $this->resolveValue($context->find('categoryname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div class="page-context-header">
';
                $buffer .= $indent . '                <div class="page-header-headings">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </header>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dbc106daeb19b330f398da6f89249a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div id="page-navbar">
                            {{{navbar}}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div id="page-navbar">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB260637e5e5ab8226f16444c74360ffb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="me-auto">
                                {{{contextheader}}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="me-auto">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4eef411a16a2a0584c7e8d40fdc461b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="header-action ms-2">{{{.}}}</div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="header-action ms-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f09ba8d5cec9db076fd0558da7e4b0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="header-action ms-2">
                                <a id="headeractions-banner-{{{headeractions_banner_courseid}}}"
                                   class="btn btn-primary text-nowrap"
                                   href="{{{headeractions_banner_course_edithref}}}">
                                    {{#str}}course_summary_banner_edit, theme_boost_magnific{{/str}}
                                </a>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="header-action ms-2">
';
                $buffer .= $indent . '                                <a id="headeractions-banner-';
                $value = $this->resolveValue($context->find('headeractions_banner_courseid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                   class="btn btn-primary text-nowrap"
';
                $buffer .= $indent . '                                   href="';
                $value = $this->resolveValue($context->find('headeractions_banner_course_edithref'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    ';
                $value = $context->find('str');
                $buffer .= $this->section4ee7e60c8d33ea5813d4b9b5682bf32c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe4134ef2d834fea06954020a50a43f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require(["jquery", "core/notification"], function ($, Notification) {
        $(`#headeractions-banner-{{{headeractions_banner_courseid}}}`).click(function () {
            event.preventDefault();

            let $link = $(this);
            require([\'core/modal\'], function (ModalModule) {
                const Modal = ModalModule && (ModalModule.default || ModalModule);
                if (Modal && typeof Modal.create === \'function\') {
                    Modal.create({
                        title: $link.text(),
                        body: `<div id="headeractions-banner-modal" style="margin:-27px;"></div>`,
                        large: true,
                        show: true,
                        removeOnClose: true,
                    }).then(function (modal) {
                        if (!modal.root) {
                            modal.root = modal._root;
                        }
                        modal.root.find(".modal-dialog").addClass("modal-xl");

                        let href = `${$link.attr("href")}&modal=1`;
                        $.get(href, function (data) {
                            $("#headeractions-banner-modal").html(data);
                        });
                    }).catch(Notification.exception);
                } else {
                    location.href = $link.attr("href");
                }
            });
        });
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require(["jquery", "core/notification"], function ($, Notification) {
';
                $buffer .= $indent . '        $(`#headeractions-banner-';
                $value = $this->resolveValue($context->find('headeractions_banner_courseid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '`).click(function () {
';
                $buffer .= $indent . '            event.preventDefault();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            let $link = $(this);
';
                $buffer .= $indent . '            require([\'core/modal\'], function (ModalModule) {
';
                $buffer .= $indent . '                const Modal = ModalModule && (ModalModule.default || ModalModule);
';
                $buffer .= $indent . '                if (Modal && typeof Modal.create === \'function\') {
';
                $buffer .= $indent . '                    Modal.create({
';
                $buffer .= $indent . '                        title: $link.text(),
';
                $buffer .= $indent . '                        body: `<div id="headeractions-banner-modal" style="margin:-27px;"></div>`,
';
                $buffer .= $indent . '                        large: true,
';
                $buffer .= $indent . '                        show: true,
';
                $buffer .= $indent . '                        removeOnClose: true,
';
                $buffer .= $indent . '                    }).then(function (modal) {
';
                $buffer .= $indent . '                        if (!modal.root) {
';
                $buffer .= $indent . '                            modal.root = modal._root;
';
                $buffer .= $indent . '                        }
';
                $buffer .= $indent . '                        modal.root.find(".modal-dialog").addClass("modal-xl");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        let href = `${$link.attr("href")}&modal=1`;
';
                $buffer .= $indent . '                        $.get(href, function (data) {
';
                $buffer .= $indent . '                            $("#headeractions-banner-modal").html(data);
';
                $buffer .= $indent . '                        });
';
                $buffer .= $indent . '                    }).catch(Notification.exception);
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    location.href = $link.attr("href");
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
