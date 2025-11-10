<?php

class __Mustache_b92ba07a12586009782df00a6d1bff63 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="navbar fixed-top navbar-light navbar-expand ';
        $value = $this->resolveValue($context->findDot('output.brandcolor_background_menu_class'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="navbar-content-background"></div>
';
        $buffer .= $indent . '    <div class="container-fluid">
';
        $buffer .= $indent . '        <button class="navbar-toggler aabtn d-block d-md-none px-1 my-1 border-0" data-toggler="drawers"
';
        $buffer .= $indent . '                data-action="toggle" data-target="theme_boost_magnific-drawers-primary">
';
        $buffer .= $indent . '            <span class="navbar-toggler-icon"></span>
';
        $buffer .= $indent . '            <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->findDot('config.homeurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="navbar-brand d-none d-md-flex align-items-center m-0 me-4 p-0 aabtn">
';
        $buffer .= $indent . '
';
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->section8be840047e526867466874515e5e65f9($context, $indent, $value);
        $value = $context->findDot('output.should_display_navbar_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '        </a>
';
        $value = $context->find('primarymoremenu');
        $buffer .= $this->section07e819b1f3f35b4c60bd7e2c826e6088($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
        $buffer .= $indent . '            <!-- page_heading_menu -->
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="usernavigation" class="usernavigation navbar-nav ms-auto">
';
        $buffer .= $indent . '            <div class="divider h-75 align-self-center"></div>
';
        $value = $context->findDot('output.search_box');
        $buffer .= $this->section8759d71b90e6496204ea4d094c43fb8c($context, $indent, $value);
        $value = $context->find('langmenu');
        $buffer .= $this->section0d523ee0c07b79b3248d4bcd4adf0aca($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
';
        $value = $context->find('usermenu');
        $buffer .= $this->sectionA9e23d79a85004416d048e2cac960de4($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_boost_magnific/primary-drawer-mobile')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '(function () {
';
        $buffer .= $indent . '    let lastHeight = -1;
';
        $buffer .= $indent . '    document.addEventListener("scroll", document_scroll_navbar);
';
        $buffer .= $indent . '    document_scroll_navbar();
';
        $buffer .= $indent . '    function document_scroll_navbar() {
';
        $buffer .= $indent . '        let scrollY = window.scrollY;
';
        $buffer .= $indent . '        let limitedScroll = Math.min(scrollY, 180);
';
        $buffer .= $indent . '        let newHeight = 91 - (limitedScroll / 6);
';
        $buffer .= $indent . '        newHeight = Math.ceil(Math.max(newHeight, 61));
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        if (lastHeight == newHeight) return;
';
        $buffer .= $indent . '        lastHeight = newHeight;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        const navbar = document.querySelector(".navbar.fixed-top");
';
        $buffer .= $indent . '        if (navbar) {
';
        $buffer .= $indent . '            navbar.style.setProperty("--navbar-height", `${newHeight}px`);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            const navbarcontentbackground = document.querySelector(".navbar.fixed-top .navbar-content-background");
';
        $buffer .= $indent . '            navbarcontentbackground.style.opacity = 1 - (newHeight - 61) / (91 - 61);
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '});
';
        $buffer .= $indent . '</script>
';

        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8be840047e526867466874515e5e65f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <img src="{{{output.get_compact_logo_url}}}" class="logo me-1" alt="{{{sitename}}}">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="logo me-1" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07e819b1f3f35b4c60bd7e2c826e6088(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="primary-navigation">
                {{> core/moremenu}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="primary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8759d71b90e6496204ea4d094c43fb8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{ output.search_box }}}
                <div class="divider border-start h-75 align-self-center mx-1"></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.search_box'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                <div class="divider border-start h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d523ee0c07b79b3248d4bcd4adf0aca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> theme_boost_magnific/language_menu }}
                <div class="divider border-start h-75 align-self-center mx-1"></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_boost_magnific/language_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '                <div class="divider border-start h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9e23d79a85004416d048e2cac960de4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/user_menu }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/user_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
