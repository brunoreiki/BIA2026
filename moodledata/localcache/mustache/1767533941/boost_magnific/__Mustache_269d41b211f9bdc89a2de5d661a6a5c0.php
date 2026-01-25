<?php

class __Mustache_269d41b211f9bdc89a2de5d661a6a5c0 extends Mustache_Template
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
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_boost_magnific/navbar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $value = $context->find('courseindex');
        $buffer .= $this->section4d85908e5d225e14acf9793bebce1da2($context, $indent, $value);
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionF0e7bffb0ce99ea4b84cefddb3d1cb45($context, $indent, $value);
        $buffer .= '    <div id="page" data-region="mainpage" data-usertour="scroller"
';
        $buffer .= $indent . '         class="drawers ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section6b40e2748488de16028fd4032111cc9b($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section05ab28b93094b30436e1224de5468efa($context, $indent, $value);
        $buffer .= ' drag-container">
';
        $buffer .= $indent . '        <div id="topofscroll" class="container main-inner">
';
        $buffer .= $indent . '            <div class="drawer-toggles d-flex">
';
        $value = $context->find('courseindex');
        $buffer .= $this->section51360bd1ddf6c1178c759fa30a9f2847($context, $indent, $value);
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionFa88be6703acee50c363e152cffea904($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('secondarymoremenu');
        $buffer .= $this->sectionD2b4dcb0cc83675dfa05902c4094b87d($context, $indent, $value);
        $buffer .= $indent . '            <div id="page-content" class="pb-3 d-print-block">
';
        $buffer .= $indent . '                <div id="region-main-box">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section7ab894b0dde40adc90f3a1e75437826a($context, $indent, $value);
        $buffer .= $indent . '                    <section id="region-main"
';
        $buffer .= $indent . '                             ';
        $value = $context->find('hasnavbarcourse');
        $buffer .= $this->section9caf78402500f711746c3a2c0f1f06d2($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                             aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionBfb58dd1d13a295db43bf0266e3aa6ee($context, $indent, $value);
        $value = $context->find('headercontent');
        $buffer .= $this->section72a93137fa43b727f40759a358d07ffb($context, $indent, $value);
        $value = $context->find('overflow');
        $buffer .= $this->sectionD1a531f5a89e5a3e9617c88ef195a6bf($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('course_summary');
        $buffer .= $this->sectionDab4afdcd8d3d6efd6f841599e71a8a3($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    </section>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('theme_boost_magnific/footer')) {
            $buffer .= $partial->renderInternal($context);
        }
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
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
        $buffer .= $this->sectionAed8b0e307904dd374275982c7c927a8($context, $indent, $value);

        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8c059d8e564034fcd5a4fcfed7ed8eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closecourseindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closecourseindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66ff38734dedd1f4402f340a5b7ff9f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completed';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completed';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30655fb57716e838cf691ae4fe224ab8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="progress-info">
                    <div class="progress-label">
                        <span>{{#str}}completed{{/str}} {{{progress}}}%</span>
                    </div>
                    <div class="progress-percentage progress-count">
                        <span>{{{progress_completed}}} / {{{progress_count}}}</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-primary"
                         role="progressbar"
                         aria-valuenow="0"
                         aria-valuemin="{{{progress}}}"
                         aria-valuemax="100"
                         style="width: {{{progress}}}%;"
                         title="{{{progress}}}%"
                         data-toggle="tooltip"></div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                <div class="progress-info">
';
                $buffer .= $indent . '                    <div class="progress-label">
';
                $buffer .= $indent . '                        <span>';
                $value = $context->find('str');
                $buffer .= $this->section66ff38734dedd1f4402f340a5b7ff9f7($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '%</span>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="progress-percentage progress-count">
';
                $buffer .= $indent . '                        <span>';
                $value = $this->resolveValue($context->find('progress_completed'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('progress_count'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="progress">
';
                $buffer .= $indent . '                    <div class="progress-bar bg-primary"
';
                $buffer .= $indent . '                         role="progressbar"
';
                $buffer .= $indent . '                         aria-valuenow="0"
';
                $buffer .= $indent . '                         aria-valuemin="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                         aria-valuemax="100"
';
                $buffer .= $indent . '                         style="width: ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '%;"
';
                $buffer .= $indent . '                         title="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '%"
';
                $buffer .= $indent . '                         data-toggle="tooltip"></div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d85908e5d225e14acf9793bebce1da2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< theme_boost_magnific/drawer }}
        {{$id}}theme_boost_magnific-drawers-courseindex{{/id}}
        {{$drawerclasses}}drawer drawer-left {{#courseindexopen}}show{{/courseindexopen}}{{/drawerclasses}}
        {{$drawercontent}}
            {{{courseindex}}}
        {{/drawercontent}}
        {{$drawerpreferencename}}drawer-open-index{{/drawerpreferencename}}
        {{$drawerstate}}show-drawer-left{{/drawerstate}}
        {{$tooltipplacement}}right{{/tooltipplacement}}
        {{$closebuttontext}}{{#str}}closecourseindex, core{{/str}}{{/closebuttontext}}
        {{$drawershowprogress}}
             {{#isprogress}}
                <div class="progress-info">
                    <div class="progress-label">
                        <span>{{#str}}completed{{/str}} {{{progress}}}%</span>
                    </div>
                    <div class="progress-percentage progress-count">
                        <span>{{{progress_completed}}} / {{{progress_count}}}</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-primary"
                         role="progressbar"
                         aria-valuenow="0"
                         aria-valuemin="{{{progress}}}"
                         aria-valuemax="100"
                         style="width: {{{progress}}}%;"
                         title="{{{progress}}}%"
                         data-toggle="tooltip"></div>
                </div>
            {{/isprogress}}
        {{/drawershowprogress}}
    {{/ theme_boost_magnific/drawer}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('theme_boost_magnific/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'block070d4b8ef7afa85ba32762c35a17098e'),
                        'drawerclasses' => array($this, 'block0dcbcdb48783bd0043cc25a3ecb99947'),
                        'drawercontent' => array($this, 'block9fff240262f0ea356c2062c52093f306'),
                        'drawerpreferencename' => array($this, 'block24fc4cc7410bc884a3b9fba5f26dc7b9'),
                        'drawerstate' => array($this, 'blockBd5099c9b82bf8a4037bbd56bb374a89'),
                        'tooltipplacement' => array($this, 'block2a81b037a416792e91b78e41049f49f9'),
                        'closebuttontext' => array($this, 'block9ac4e5859f44816b862545bc2c6e6a46'),
                        'drawershowprogress' => array($this, 'block21dfc134f31f5d974ba306917a7a492a'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cb47d3ed9b97c6d6d496d2358bec253(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bd0cc4642e36d67e46c9dd550f1fa06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '1';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '1';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31618380a8d2d407a8b2acf35dd449a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closeblockdrawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closeblockdrawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0e7bffb0ce99ea4b84cefddb3d1cb45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< theme_boost_magnific/drawer }}
        {{$id}}theme_boost_magnific-drawers-blocks{{/id}}
        {{$drawerclasses}}drawer drawer-right{{#blockdraweropen}} show{{/blockdraweropen}}{{/drawerclasses}}
        {{$drawercontent}}
            <section class="d-print-none" aria-label="{{#str}}blocks{{/str}}">
                {{{addblockbutton}}}
                {{{sidepreblocks}}}
            </section>
        {{/drawercontent}}
        {{$drawerpreferencename}}drawer-open-block{{/drawerpreferencename}}
        {{$forceopen}}{{#forceblockdraweropen}}1{{/forceblockdraweropen}}{{/forceopen}}
        {{$drawerstate}}show-drawer-right{{/drawerstate}}
        {{$tooltipplacement}}left{{/tooltipplacement}}
        {{$drawercloseonresize}}1{{/drawercloseonresize}}
        {{$closebuttontext}}{{#str}}closeblockdrawer, core{{/str}}{{/closebuttontext}}
    {{/ theme_boost_magnific/drawer}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('theme_boost_magnific/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'blockBd2cf6b947fcdff845e881a58ab5c363'),
                        'drawerclasses' => array($this, 'block874d06fc7c30c807dc0ee7226cad4ec8'),
                        'drawercontent' => array($this, 'block929b0a482aa2eead0eb779f74cc03222'),
                        'drawerpreferencename' => array($this, 'block59146569a56c3d2642fa2e8224817be0'),
                        'forceopen' => array($this, 'block13847ba3219919ecdb2378620735177c'),
                        'drawerstate' => array($this, 'block0ea572ae0e89f9c5cc1dc5d7238a50d5'),
                        'tooltipplacement' => array($this, 'blockC945de95615645c65d6b2f192042e6ea'),
                        'drawercloseonresize' => array($this, 'blockE052079a625ca42b568ba24af19cc7eb'),
                        'closebuttontext' => array($this, 'blockC879444321d250421c3438099ae68173'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b40e2748488de16028fd4032111cc9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-left';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-left';
                $context->pop();
            }
        }
    
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

    private function sectionAfaaa3dab86fd46a075d917e3ce891f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3feaf801d4aa0a811fe41c3427e53335(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/index_drawer, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/index_drawer, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51360bd1ddf6c1178c759fa30a9f2847(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
                        <button
                                class="btn icon-no-margin"
                                data-toggler="drawers"
                                data-action="toggle"
                                data-target="theme_boost_magnific-drawers-courseindex"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="{{#str}}opendrawerindex, core{{/str}}">
                            <span class="sr-only">{{#str}}opendrawerindex, core{{/str}}</span>
                            {{#pix}} t/index_drawer, moodle {{/pix}}
                        </button>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
';
                $buffer .= $indent . '                        <button
';
                $buffer .= $indent . '                                class="btn icon-no-margin"
';
                $buffer .= $indent . '                                data-toggler="drawers"
';
                $buffer .= $indent . '                                data-action="toggle"
';
                $buffer .= $indent . '                                data-target="theme_boost_magnific-drawers-courseindex"
';
                $buffer .= $indent . '                                data-toggle="tooltip"
';
                $buffer .= $indent . '                                data-placement="right"
';
                $buffer .= $indent . '                                title="';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section3feaf801d4aa0a811fe41c3427e53335($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section245ba37b5a58f162a63e0d10700eb739(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerblocks, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerblocks, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bf870995ed49a0bb4a766ed18e0f142(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/blocks_drawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/blocks_drawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD277bad9387573c58f79f77fc705e8dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/blocks_drawer_rtl, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/blocks_drawer_rtl, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa88be6703acee50c363e152cffea904(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="drawer-toggler drawer-right-toggle ms-auto d-print-none">
                        <button
                                class="btn icon-no-margin"
                                data-toggler="drawers"
                                data-action="toggle"
                                data-target="theme_boost_magnific-drawers-blocks"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="{{#str}}opendrawerblocks, core{{/str}}">
                            <span class="sr-only">{{#str}}opendrawerblocks, core{{/str}}</span>
                            <span class="dir-rtl-hide">{{#pix}}t/blocks_drawer, core{{/pix}}</span>
                            <span class="dir-ltr-hide">{{#pix}}t/blocks_drawer_rtl, core{{/pix}}</span>
                        </button>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="drawer-toggler drawer-right-toggle ms-auto d-print-none">
';
                $buffer .= $indent . '                        <button
';
                $buffer .= $indent . '                                class="btn icon-no-margin"
';
                $buffer .= $indent . '                                data-toggler="drawers"
';
                $buffer .= $indent . '                                data-action="toggle"
';
                $buffer .= $indent . '                                data-target="theme_boost_magnific-drawers-blocks"
';
                $buffer .= $indent . '                                data-toggle="tooltip"
';
                $buffer .= $indent . '                                data-placement="right"
';
                $buffer .= $indent . '                                title="';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section0bf870995ed49a0bb4a766ed18e0f142($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->sectionD277bad9387573c58f79f77fc705e8dd($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2b4dcb0cc83675dfa05902c4094b87d(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                <div class="secondary-navigation d-print-none">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ab894b0dde40adc90f3a1e75437826a(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                        <div id="region-main-settings-menu" class="d-print-none">
';
                $buffer .= $indent . '                            <div> ';
                $value = $this->resolveValue($context->find('regionmainsettingsmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '                        </div>
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

    private function sectionBfb58dd1d13a295db43bf0266e3aa6ee(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                            <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72a93137fa43b727f40759a358d07ffb(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1a531f5a89e5a3e9617c88ef195a6bf(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                            <div class="container-fluid tertiary-navigation">
';
                $buffer .= $indent . '                                <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                }
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDab4afdcd8d3d6efd6f841599e71a8a3(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                            <div class="course-section">
';
                $buffer .= $indent . '                                <div class="section-item">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('course_summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e51eee49df663feb9d5898e6fb73196(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        (function () {
            // Automatically submit the form when accessing the SCORM so the user isn’t prompted to log in.
            const form = document.getElementById("scormviewform");
            if (form) {
                form.method = "GET"; // changes the method to GET.
                form.submit();       // submits the form.
            }
        })();
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        (function () {
';
                $buffer .= $indent . '            // Automatically submit the form when accessing the SCORM so the user isn’t prompted to log in.
';
                $buffer .= $indent . '            const form = document.getElementById("scormviewform");
';
                $buffer .= $indent . '            if (form) {
';
                $buffer .= $indent . '                form.method = "GET"; // changes the method to GET.
';
                $buffer .= $indent . '                form.submit();       // submits the form.
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        })();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08ca360cd2ed7f0853fba69f448f3015(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        (function () {
            // 1) Add the "disabled" class and the "disabled-by" attribute to the TOC.
            const scormtoc = document.getElementById("scorm_toc");
            if (scormtoc) {
                scormtoc.classList.add("disabled");
                scormtoc.setAttribute("disabled-by", "user");
            }

            // 2) Update the toggle button — set the title to "Show" and the text to ">".
            const scormtoctogglebtn = document.getElementById("scorm_toc_toggle_btn");
            if (scormtoctogglebtn) {
                scormtoctogglebtn.title = "{{#str}}show{{/str}}";
                scormtoctogglebtn.textContent = ">";
            }

            // 3) Expand the content area — change the class from "yui3-u-3-4" to "yui3-u-1".
            const scormcontent = document.getElementById("scorm_content");
            if (scormcontent) {
                scormcontent.classList.remove("yui3-u-3-4");
                if (!scormcontent.classList.contains("yui3-u-1")) {
                    scormcontent.classList.add("yui3-u-1");
                }
            }

            // Selects the side drawer
            const drawer = document.querySelector(".drawer.drawer-left:not(.drawer-primary-mobile)");
            if (drawer) {
                drawer.classList.remove("show");
                drawer.removeAttribute("aria-hidden", "true");
            }

            const drawerheadercontent = document.querySelector(".drawerheadercontent");
            if (drawerheadercontent) {
                drawerheadercontent.classList.add("hidden");
            }

            // Selects the element with id="page"
            const page = document.getElementById("page");
            if (page) {
                page.classList.remove("show-drawer-left");
            }
        })();
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        (function () {
';
                $buffer .= $indent . '            // 1) Add the "disabled" class and the "disabled-by" attribute to the TOC.
';
                $buffer .= $indent . '            const scormtoc = document.getElementById("scorm_toc");
';
                $buffer .= $indent . '            if (scormtoc) {
';
                $buffer .= $indent . '                scormtoc.classList.add("disabled");
';
                $buffer .= $indent . '                scormtoc.setAttribute("disabled-by", "user");
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // 2) Update the toggle button — set the title to "Show" and the text to ">".
';
                $buffer .= $indent . '            const scormtoctogglebtn = document.getElementById("scorm_toc_toggle_btn");
';
                $buffer .= $indent . '            if (scormtoctogglebtn) {
';
                $buffer .= $indent . '                scormtoctogglebtn.title = "';
                $value = $context->find('str');
                $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
                $buffer .= '";
';
                $buffer .= $indent . '                scormtoctogglebtn.textContent = ">";
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // 3) Expand the content area — change the class from "yui3-u-3-4" to "yui3-u-1".
';
                $buffer .= $indent . '            const scormcontent = document.getElementById("scorm_content");
';
                $buffer .= $indent . '            if (scormcontent) {
';
                $buffer .= $indent . '                scormcontent.classList.remove("yui3-u-3-4");
';
                $buffer .= $indent . '                if (!scormcontent.classList.contains("yui3-u-1")) {
';
                $buffer .= $indent . '                    scormcontent.classList.add("yui3-u-1");
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Selects the side drawer
';
                $buffer .= $indent . '            const drawer = document.querySelector(".drawer.drawer-left:not(.drawer-primary-mobile)");
';
                $buffer .= $indent . '            if (drawer) {
';
                $buffer .= $indent . '                drawer.classList.remove("show");
';
                $buffer .= $indent . '                drawer.removeAttribute("aria-hidden", "true");
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            const drawerheadercontent = document.querySelector(".drawerheadercontent");
';
                $buffer .= $indent . '            if (drawerheadercontent) {
';
                $buffer .= $indent . '                drawerheadercontent.classList.add("hidden");
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Selects the element with id="page"
';
                $buffer .= $indent . '            const page = document.getElementById("page");
';
                $buffer .= $indent . '            if (page) {
';
                $buffer .= $indent . '                page.classList.remove("show-drawer-left");
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        })();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAed8b0e307904dd374275982c7c927a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    M.util.js_pending("theme_boost/loader");
    require(["theme_boost/loader", "theme_boost/drawer"], function(Loader, Drawer) {
        Drawer.init();
        M.util.js_complete("theme_boost/loader");
    });

    {{#mod_scorm_view}}
        (function () {
            // Automatically submit the form when accessing the SCORM so the user isn’t prompted to log in.
            const form = document.getElementById("scormviewform");
            if (form) {
                form.method = "GET"; // changes the method to GET.
                form.submit();       // submits the form.
            }
        })();
    {{/mod_scorm_view}}
    {{#mod_scorm_player}}
        (function () {
            // 1) Add the "disabled" class and the "disabled-by" attribute to the TOC.
            const scormtoc = document.getElementById("scorm_toc");
            if (scormtoc) {
                scormtoc.classList.add("disabled");
                scormtoc.setAttribute("disabled-by", "user");
            }

            // 2) Update the toggle button — set the title to "Show" and the text to ">".
            const scormtoctogglebtn = document.getElementById("scorm_toc_toggle_btn");
            if (scormtoctogglebtn) {
                scormtoctogglebtn.title = "{{#str}}show{{/str}}";
                scormtoctogglebtn.textContent = ">";
            }

            // 3) Expand the content area — change the class from "yui3-u-3-4" to "yui3-u-1".
            const scormcontent = document.getElementById("scorm_content");
            if (scormcontent) {
                scormcontent.classList.remove("yui3-u-3-4");
                if (!scormcontent.classList.contains("yui3-u-1")) {
                    scormcontent.classList.add("yui3-u-1");
                }
            }

            // Selects the side drawer
            const drawer = document.querySelector(".drawer.drawer-left:not(.drawer-primary-mobile)");
            if (drawer) {
                drawer.classList.remove("show");
                drawer.removeAttribute("aria-hidden", "true");
            }

            const drawerheadercontent = document.querySelector(".drawerheadercontent");
            if (drawerheadercontent) {
                drawerheadercontent.classList.add("hidden");
            }

            // Selects the element with id="page"
            const page = document.getElementById("page");
            if (page) {
                page.classList.remove("show-drawer-left");
            }
        })();
    {{/mod_scorm_player}}
    (function () {
        const drawers = document.querySelectorAll(".drawer:not(.drawer-primary-mobile)");
        const START_TOP = 90; // px
        let drawer__lastTop = -1;
        document.addEventListener("scroll", document_scroll_drawers);
        document_scroll_drawers();

        function document_scroll_drawers() {
            const y = window.scrollY || document.documentElement.scrollTop;
            const newTop = Math.max(START_TOP - y, 0); // clamp 90 → 0
            if (drawer__lastTop !== newTop) {
                drawer__lastTop = newTop;
                drawers.forEach((drawer) => {
                    drawer.style.top = `${newTop}px`;
                    drawer.style.height = `calc(100vh - ${newTop}px)`;
                });
            }
        }
    })();
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    M.util.js_pending("theme_boost/loader");
';
                $buffer .= $indent . '    require(["theme_boost/loader", "theme_boost/drawer"], function(Loader, Drawer) {
';
                $buffer .= $indent . '        Drawer.init();
';
                $buffer .= $indent . '        M.util.js_complete("theme_boost/loader");
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $value = $context->find('mod_scorm_view');
                $buffer .= $this->section7e51eee49df663feb9d5898e6fb73196($context, $indent, $value);
                $value = $context->find('mod_scorm_player');
                $buffer .= $this->section08ca360cd2ed7f0853fba69f448f3015($context, $indent, $value);
                $buffer .= $indent . '    (function () {
';
                $buffer .= $indent . '        const drawers = document.querySelectorAll(".drawer:not(.drawer-primary-mobile)");
';
                $buffer .= $indent . '        const START_TOP = 90; // px
';
                $buffer .= $indent . '        let drawer__lastTop = -1;
';
                $buffer .= $indent . '        document.addEventListener("scroll", document_scroll_drawers);
';
                $buffer .= $indent . '        document_scroll_drawers();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        function document_scroll_drawers() {
';
                $buffer .= $indent . '            const y = window.scrollY || document.documentElement.scrollTop;
';
                $buffer .= $indent . '            const newTop = Math.max(START_TOP - y, 0); // clamp 90 → 0
';
                $buffer .= $indent . '            if (drawer__lastTop !== newTop) {
';
                $buffer .= $indent . '                drawer__lastTop = newTop;
';
                $buffer .= $indent . '                drawers.forEach((drawer) => {
';
                $buffer .= $indent . '                    drawer.style.top = `${newTop}px`;
';
                $buffer .= $indent . '                    drawer.style.height = `calc(100vh - ${newTop}px)`;
';
                $buffer .= $indent . '                });
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    })();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block070d4b8ef7afa85ba32762c35a17098e($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_boost_magnific-drawers-courseindex';
    
        return $buffer;
    }

    public function block0dcbcdb48783bd0043cc25a3ecb99947($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-left ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
    
        return $buffer;
    }

    public function block9fff240262f0ea356c2062c52093f306($context)
    {
        $indent = $buffer = '';
        $buffer .= '            ';
        $value = $this->resolveValue($context->find('courseindex'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block24fc4cc7410bc884a3b9fba5f26dc7b9($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-index';
    
        return $buffer;
    }

    public function blockBd5099c9b82bf8a4037bbd56bb374a89($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-left';
    
        return $buffer;
    }

    public function block2a81b037a416792e91b78e41049f49f9($context)
    {
        $indent = $buffer = '';
        $buffer .= 'right';
    
        return $buffer;
    }

    public function block9ac4e5859f44816b862545bc2c6e6a46($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionD8c059d8e564034fcd5a4fcfed7ed8eb($context, $indent, $value);
    
        return $buffer;
    }

    public function block21dfc134f31f5d974ba306917a7a492a($context)
    {
        $indent = $buffer = '';
        $value = $context->find('isprogress');
        $buffer .= $this->section30655fb57716e838cf691ae4fe224ab8($context, $indent, $value);
    
        return $buffer;
    }

    public function blockBd2cf6b947fcdff845e881a58ab5c363($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_boost_magnific-drawers-blocks';
    
        return $buffer;
    }

    public function block874d06fc7c30c807dc0ee7226cad4ec8($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-right';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section1cb47d3ed9b97c6d6d496d2358bec253($context, $indent, $value);
    
        return $buffer;
    }

    public function block929b0a482aa2eead0eb779f74cc03222($context)
    {
        $indent = $buffer = '';
        $buffer .= '            <section class="d-print-none" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('addblockbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('sidepreblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </section>
';
    
        return $buffer;
    }

    public function block59146569a56c3d2642fa2e8224817be0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-block';
    
        return $buffer;
    }

    public function block13847ba3219919ecdb2378620735177c($context)
    {
        $indent = $buffer = '';
        $value = $context->find('forceblockdraweropen');
        $buffer .= $this->section1bd0cc4642e36d67e46c9dd550f1fa06($context, $indent, $value);
    
        return $buffer;
    }

    public function block0ea572ae0e89f9c5cc1dc5d7238a50d5($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-right';
    
        return $buffer;
    }

    public function blockC945de95615645c65d6b2f192042e6ea($context)
    {
        $indent = $buffer = '';
        $buffer .= 'left';
    
        return $buffer;
    }

    public function blockE052079a625ca42b568ba24af19cc7eb($context)
    {
        $indent = $buffer = '';
        $buffer .= '1';
    
        return $buffer;
    }

    public function blockC879444321d250421c3438099ae68173($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section31618380a8d2d407a8b2acf35dd449a4($context, $indent, $value);
    
        return $buffer;
    }
}
