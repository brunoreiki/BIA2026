<?php

class __Mustache_684ed08f2f103e476c0c7271f4a702b7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost_magnific/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_boost_magnific/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" data-region="mainpage" data-usertour="scroller"
';
        $buffer .= $indent . '         class="drawers ';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section05ab28b93094b30436e1224de5468efa($context, $indent, $value);
        $buffer .= ' drag-container">
';
        $buffer .= $indent . '        <div id="topofscroll" class="main-inner ';
        $value = $context->find('homemode_status');
        $buffer .= $this->sectionDcd2984f9aff38d57cd14d4e1ac9f2c4($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->find('editing');
        $buffer .= $this->section96a3132a2b04468af281b2b33976850f($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('homemode_status');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.full_header'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $value = $context->find('secondarymoremenu');
            $buffer .= $this->section4f721713009e54f14c799fa89336f6ee($context, $indent, $value);
            $buffer .= $indent . '                <div id="page-content" class="pb-3 d-print-block">
';
            $buffer .= $indent . '                    <div id="region-main-box">
';
            $value = $context->find('hasregionmainsettingsmenu');
            $buffer .= $this->section57fed93d78bdc520ac7ba90b2fc02d85($context, $indent, $value);
            $buffer .= $indent . '                        <section id="region-main"
';
            $buffer .= $indent . '                                 ';
            $value = $context->find('hasnavbarcourse');
            $buffer .= $this->section9caf78402500f711746c3a2c0f1f06d2($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                                 aria-label="';
            $value = $context->find('str');
            $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '
';
            $value = $context->find('hasregionmainsettingsmenu');
            $buffer .= $this->section85b38e2ef114feb4bcec35483a18248f($context, $indent, $value);
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $value = $context->find('headercontent');
            $buffer .= $this->section10ab9b7b6d2d94caa34262ddc48e2718($context, $indent, $value);
            $value = $context->find('overflow');
            $buffer .= $this->section6bf36f1a79af754fa25425b0182d3182($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('course_summary');
            $buffer .= $this->section003c7eb88f1d1be9269ef7869294c20e($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.main_content'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                        </section>
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
        }
        $value = $context->find('homemode_status');
        $buffer .= $this->sectionE961a8a9e1d0b990af869a35b04246f6($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('theme_boost_magnific/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->sectionF37d1e39b591b45355d3317c4153e3a1($context, $indent, $value);

        return $buffer;
    }

    private function section05ab28b93094b30436e1224de5468efa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDcd2984f9aff38d57cd14d4e1ac9f2c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'homemode_editor';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'homemode_editor';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34835318ff88b53942099fc12c7d338b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'frontpage_change_editor, theme_boost_magnific';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'frontpage_change_editor, theme_boost_magnific';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7749362ecb5f8c27fe0f43d5e969d66c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checked ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' checked ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section776dee44142a65b9bf10084716120856(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'quickstart_title, theme_boost_magnific';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'quickstart_title, theme_boost_magnific';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96a3132a2b04468af281b2b33976850f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="editmode-page-item editmode-block-form alert alert-info" style="display:none">
                    <form action="{{{homemode_form_action}}}"
                          method="post" class="d-flex align-items-center editmode-switch-form w-100"
                          id="homemode-editingswitch-form">
                        <div class="d-flex align-items-center">
                            <div class="me-4 text-nowrap">{{#str}}frontpage_change_editor, theme_boost_magnific{{/str}}</div>
                            <div class="input-group">
                            <div class="custom-control form-switch">
                                <input type="checkbox" {{#homemode_status}} checked {{/homemode_status}}
                                       id="homemode-editingswitch"
                                       name="homemode"
                                       value="1"
                                       class="form-check-input">
                                <span class="custom-control-label">&nbsp;</span>
                            </div>
                        </div>
                        </div>
                        <input type="hidden" name="sesskey" value="{{{config.sesskey}}}">
                        <input type="submit" class="d-none">

                        <a class="btn btn-lg btn-primary text-nowrap ms-5" href="{{{homemode_quickstart_action}}}">
                            <svg viewBox="0 0 24 24" width="20" height="20">
                                <path d="M14.5 3.5c2.7 0 5.7 1.2 5.7 1.2s-1.2 3-3.9 5.7l-6 6-3.1-3.1 6-6C11.6 4.7 14.5 3.5 14.5 3.5zM8.3 16.7l-2.5 5 5-2.5 6.6-6.6-2.5-2.5-6.6 6.6zM7 14.6l2.4 2.4" fill="currentColor"></path>
                            </svg>
                            {{#str}}quickstart_title, theme_boost_magnific{{/str}}
                        </a>
                    </form>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="editmode-page-item editmode-block-form alert alert-info" style="display:none">
';
                $buffer .= $indent . '                    <form action="';
                $value = $this->resolveValue($context->find('homemode_form_action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                          method="post" class="d-flex align-items-center editmode-switch-form w-100"
';
                $buffer .= $indent . '                          id="homemode-editingswitch-form">
';
                $buffer .= $indent . '                        <div class="d-flex align-items-center">
';
                $buffer .= $indent . '                            <div class="me-4 text-nowrap">';
                $value = $context->find('str');
                $buffer .= $this->section34835318ff88b53942099fc12c7d338b($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                            <div class="input-group">
';
                $buffer .= $indent . '                            <div class="custom-control form-switch">
';
                $buffer .= $indent . '                                <input type="checkbox" ';
                $value = $context->find('homemode_status');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                       id="homemode-editingswitch"
';
                $buffer .= $indent . '                                       name="homemode"
';
                $buffer .= $indent . '                                       value="1"
';
                $buffer .= $indent . '                                       class="form-check-input">
';
                $buffer .= $indent . '                                <span class="custom-control-label">&nbsp;</span>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <input type="hidden" name="sesskey" value="';
                $value = $this->resolveValue($context->findDot('config.sesskey'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <input type="submit" class="d-none">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        <a class="btn btn-lg btn-primary text-nowrap ms-5" href="';
                $value = $this->resolveValue($context->find('homemode_quickstart_action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <svg viewBox="0 0 24 24" width="20" height="20">
';
                $buffer .= $indent . '                                <path d="M14.5 3.5c2.7 0 5.7 1.2 5.7 1.2s-1.2 3-3.9 5.7l-6 6-3.1-3.1 6-6C11.6 4.7 14.5 3.5 14.5 3.5zM8.3 16.7l-2.5 5 5-2.5 6.6-6.6-2.5-2.5-6.6 6.6zM7 14.6l2.4 2.4" fill="currentColor"></path>
';
                $buffer .= $indent . '                            </svg>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->section776dee44142a65b9bf10084716120856($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </form>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f721713009e54f14c799fa89336f6ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="secondary-navigation d-print-none">
                        {{> core/moremenu}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="secondary-navigation d-print-none">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57fed93d78bdc520ac7ba90b2fc02d85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div id="region-main-settings-menu" class="d-print-none">
                                <div> {{{regionmainsettingsmenu}}} </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div id="region-main-settings-menu" class="d-print-none">
';
                $buffer .= $indent . '                                <div> ';
                $value = $this->resolveValue($context->find('regionmainsettingsmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9caf78402500f711746c3a2c0f1f06d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="hasnavbarcourse"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="hasnavbarcourse"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85b38e2ef114feb4bcec35483a18248f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="region_main_settings_menu_proxy"></div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10ab9b7b6d2d94caa34262ddc48e2718(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{> core/activity_header }}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6bf36f1a79af754fa25425b0182d3182(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="container-fluid tertiary-navigation">
                                    <div class="navitem">
                                        {{> core/url_select}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="container-fluid tertiary-navigation">
';
                $buffer .= $indent . '                                    <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                        ');
                }
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section003c7eb88f1d1be9269ef7869294c20e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="course-section">
                                    <div class="section-item">
                                        {{{course_summary}}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="course-section">
';
                $buffer .= $indent . '                                    <div class="section-item">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('course_summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE961a8a9e1d0b990af869a35b04246f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{ output.main_content }}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.main_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF37d1e39b591b45355d3317c4153e3a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    M.util.js_pending("theme_boost/loader");
    require(["theme_boost/loader", "theme_boost/drawer"], function (Loader, Drawer) {
        Drawer.init();
        M.util.js_complete("theme_boost/loader");
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    M.util.js_pending("theme_boost/loader");
';
                $buffer .= $indent . '    require(["theme_boost/loader", "theme_boost/drawer"], function (Loader, Drawer) {
';
                $buffer .= $indent . '        Drawer.init();
';
                $buffer .= $indent . '        M.util.js_complete("theme_boost/loader");
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
