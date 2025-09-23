<?php

class __Mustache_f1b6b1894e1d7a357b177a7e50730b59 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="main-navbar" class="';
        $value = $this->resolveValue($context->find('responsiveheader'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-12 p-0">
';
        $buffer .= $indent . '                <div class="navbar navbar-expand btco-hover-menu">
';
        $buffer .= $indent . '                    <nav aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionB5f3fe981d4e1c31c23b73eb1e4a081a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <ul class="navbar-nav">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('navigationmenu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('userfavmenu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('toolsmenu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </ul>
';
        $buffer .= $indent . '                    </nav>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <ul class="navbar-nav ms-auto d-flex flex-wrap">
';
        $value = $context->find('showcog');
        $buffer .= $this->section52261f1f1c56f37e6acf6e690eb12e72($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('pageheadingbutton');
        $buffer .= $this->section36380c26947f65589f42eebf2d2d771f($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('enablezoom');
        $buffer .= $this->section3c92aa796bbebaa67af15363429fb0cc($context, $indent, $value);
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionB5f3fe981d4e1c31c23b73eb1e4a081a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitelinkslabel, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitelinkslabel, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8cbeb84113ce6b4e450e8fc2bb00350e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item me-2">
                            <div class="context-header-settings-menu">
                                {{{coursemenucontent}}}
                            </div>
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item me-2">
';
                $buffer .= $indent . '                            <div class="context-header-settings-menu">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('coursemenucontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section195a015ea32af829cdf5ab62ae6124ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item me-2">
                            <div id="region-main-settings-menu" class="region-main-settings-menu">
                                {{{othermenucontent}}}
                            </div>
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item me-2">
';
                $buffer .= $indent . '                            <div id="region-main-settings-menu" class="region-main-settings-menu">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('othermenucontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52261f1f1c56f37e6acf6e690eb12e72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#coursemenucontent}}
                        <li class="nav-item me-2">
                            <div class="context-header-settings-menu">
                                {{{coursemenucontent}}}
                            </div>
                        </li>
                        {{/coursemenucontent}}

                        {{#othermenucontent}}
                        <li class="nav-item me-2">
                            <div id="region-main-settings-menu" class="region-main-settings-menu">
                                {{{othermenucontent}}}
                            </div>
                        </li>
                        {{/othermenucontent}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('coursemenucontent');
                $buffer .= $this->section8cbeb84113ce6b4e450e8fc2bb00350e($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('othermenucontent');
                $buffer .= $this->section195a015ea32af829cdf5ab62ae6124ce($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36380c26947f65589f42eebf2d2d771f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li id="editingbutton" class="nav-item mx-0 my-auto">
                            {{{pageheadingbutton}}}
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li id="editingbutton" class="nav-item mx-0 my-auto">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a7c186b96d8d71a5750a3e8739e29e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fullscreen, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fullscreen, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24e6d89d96e5ff87adcc0c7071921f18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <i class="fa fa-expand fa-lg" aria-hidden="true"></i>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <i class="fa fa-expand fa-lg" aria-hidden="true"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06644b2a11a979411f3739708681a10d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class="zoomdesc">{{#str}}fullscreen, theme_adaptable{{/str}}</span>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <span class="zoomdesc">';
                $value = $context->find('str');
                $buffer .= $this->section8a7c186b96d8d71a5750a3e8739e29e7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7427f43aec250eace0045e20a2622b11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'standardview, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'standardview, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55318285633f3bf37589163686eadd15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <i class="fa fa-compress fa-lg" aria-hidden="true"></i>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <i class="fa fa-compress fa-lg" aria-hidden="true"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section534e077fa6bf91fafd4f2466458c45e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class="zoomdesc">{{#str}}standardview, theme_adaptable{{/str}}</span>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <span class="zoomdesc">';
                $value = $context->find('str');
                $buffer .= $this->section7427f43aec250eace0045e20a2622b11($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c92aa796bbebaa67af15363429fb0cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item mx-0 hbll">
                            <a class="nav-link moodlewidth" href="javascript:void(0);" title="{{#str}}fullscreen, theme_adaptable{{/str}}">
                                {{#navbardisplayicons}}
                                <i class="fa fa-expand fa-lg" aria-hidden="true"></i>
                                {{/navbardisplayicons}}
                                {{#navbardisplaytitles}}
                                <span class="zoomdesc">{{#str}}fullscreen, theme_adaptable{{/str}}</span>
                                {{/navbardisplaytitles}}
                            </a>
                        </li>
                        <li class="nav-item mx-0 sbll">
                            <a class="nav-link moodlewidth" href="javascript:void(0);" title="{{#str}}standardview, theme_adaptable{{/str}}">
                                {{#navbardisplayicons}}
                                <i class="fa fa-compress fa-lg" aria-hidden="true"></i>
                                {{/navbardisplayicons}}
                                {{#navbardisplaytitles}}
                                <span class="zoomdesc">{{#str}}standardview, theme_adaptable{{/str}}</span>
                                {{/navbardisplaytitles}}
                            </a>
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item mx-0 hbll">
';
                $buffer .= $indent . '                            <a class="nav-link moodlewidth" href="javascript:void(0);" title="';
                $value = $context->find('str');
                $buffer .= $this->section8a7c186b96d8d71a5750a3e8739e29e7($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('navbardisplayicons');
                $buffer .= $this->section24e6d89d96e5ff87adcc0c7071921f18($context, $indent, $value);
                $value = $context->find('navbardisplaytitles');
                $buffer .= $this->section06644b2a11a979411f3739708681a10d($context, $indent, $value);
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li class="nav-item mx-0 sbll">
';
                $buffer .= $indent . '                            <a class="nav-link moodlewidth" href="javascript:void(0);" title="';
                $value = $context->find('str');
                $buffer .= $this->section7427f43aec250eace0045e20a2622b11($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('navbardisplayicons');
                $buffer .= $this->section55318285633f3bf37589163686eadd15($context, $indent, $value);
                $value = $context->find('navbardisplaytitles');
                $buffer .= $this->section534e077fa6bf91fafd4f2466458c45e4($context, $indent, $value);
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
