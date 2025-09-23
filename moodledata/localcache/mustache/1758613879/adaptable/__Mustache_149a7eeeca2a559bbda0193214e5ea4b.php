<?php

class __Mustache_149a7eeeca2a559bbda0193214e5ea4b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="adaptable-page-header-wrapper"';
        $value = $this->resolveValue($context->find('headerbg'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <div id="header1" class="above-header">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            <nav class="navbar navbar-expand btco-hover-menu">
';
        $value = $context->find('hasmobileprimarynav');
        $buffer .= $this->section73045941ed38ce12ba5cae42dce44f7a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="collapse navbar-collapse">
';
        $value = $context->find('menuslinkright');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="my-auto m-1">';
            $value = $this->resolveValue($context->find('topmenus'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</div>
';
        }
        $buffer .= $indent . '                    <ul class="navbar-nav ms-auto my-auto">
';
        $value = $context->find('menuslinkright');
        $buffer .= $this->section8408aa8053416a684ebeba1ae6d4a1b6($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('searchandsocialnavbar');
        $buffer .= $this->section6a04039a710243270c13fbff59a49407($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('shownavbar');
        $buffer .= $this->section2b45d79c02e668d459e751153bae8a98($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('langmenu');
        $buffer .= $this->sectionB39e1d3d1bd8de92f82a2f83b138da30($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('loginoruser'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </nav>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page-header" class="container ';
        $value = $this->resolveValue($context->find('responsiveheader'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="row d-flex justify-content-start align-items-center h-100">
';
        $value = $context->find('pageheaderoriginal');
        $buffer .= $this->section7498a84167be254aae3db8c6e745effe($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="col-8">
';
            $buffer .= $indent . '                <div class="d-flex justify-content-between align-items-center h-100 bd-highlight">
';
            $value = $context->find('headertitle');
            $buffer .= $this->sectionBfcbae97f818124cd96e49eb0b463cc5($context, $indent, $value);
            $value = $context->find('searchandsocialheader');
            $buffer .= $this->section7d130a1cf862bac5e424612e825b52af($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="col-4 p-0">
';
            $value = $context->find('headerlogo');
            $buffer .= $this->section2d061895febbdca56d6fb0e09764c8a2($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
        }
        $buffer .= $indent . '        </div>
';
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="row">
';
            $buffer .= $indent . '            <div class="col-12 p-0 my-auto">
';
            $buffer .= $indent . '                <div id="course-header">
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.course_header'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('shownavbar');
        $buffer .= $this->section12adbc97ba0dbc28e22606abc255f396($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</header>
';
        $buffer .= $indent . '
';
        $value = $context->find('hasmobileprimarynav');
        $buffer .= $this->sectionA17b1b82657c800c8796ec365d876fdb($context, $indent, $value);

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

    private function section73045941ed38ce12ba5cae42dce44f7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <button class="navbar-toggler nav-link aabtn d-block d-lg-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_adaptable-drawers-primary">
                    {{{mobileprimarynavicon}}}
                    <span class="visually-hidden">{{#str}}sidepanel, core{{/str}}</span>
                </button>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <button class="navbar-toggler nav-link aabtn d-block d-lg-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_adaptable-drawers-primary">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('mobileprimarynavicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <span class="visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8408aa8053416a684ebeba1ae6d4a1b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="my-auto m-1">{{{topmenus}}}</li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="my-auto m-1">';
                $value = $this->resolveValue($context->find('topmenus'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a04039a710243270c13fbff59a49407(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item navbarsearchsocial mx-md-1 my-auto{{searchandsocialnavbarextra}}">
                            {{{searchandsocialnavbar}}}
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item navbarsearchsocial mx-md-1 my-auto';
                $value = $this->resolveValue($context->find('searchandsocialnavbarextra'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('searchandsocialnavbar'), $context);
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

    private function section2b45d79c02e668d459e751153bae8a98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li id="nav-popover-container" class="my-auto mx-md-1 d-flex">{{{output.navbar_plugin_output}}}</li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li id="nav-popover-container" class="my-auto mx-md-1 d-flex">';
                $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB39e1d3d1bd8de92f82a2f83b138da30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item dropdown ms-2 my-auto">{{{output.lang_menu}}}</li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item dropdown ms-2 my-auto">';
                $value = $this->resolveValue($context->findDot('output.lang_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d814267cc139e99e5247ea03c8ff82b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{headerlogo}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('headerlogo'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34cbe2515838ed94ba30a12b2e22ce25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{headertitle}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('headertitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9304f407f9d53d924764dfe13ab9ea74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{searchandsocialheader}}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('searchandsocialheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7498a84167be254aae3db8c6e745effe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-lg-8 p-0">
                <div class="bd-highlight d-flex">
                    {{#headerlogo}}{{{headerlogo}}}{{/headerlogo}}
                    {{#headertitle}}{{{headertitle}}}{{/headertitle}}
                </div>
                <div id="course-header">
                    {{{output.course_header}}}
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-end">
                {{#searchandsocialheader}}
                    {{{searchandsocialheader}}}
                {{/searchandsocialheader}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="col-lg-8 p-0">
';
                $buffer .= $indent . '                <div class="bd-highlight d-flex">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('headerlogo');
                $buffer .= $this->section0d814267cc139e99e5247ea03c8ff82b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $context->find('headertitle');
                $buffer .= $this->section34cbe2515838ed94ba30a12b2e22ce25($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div id="course-header">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.course_header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="col-lg-4 d-flex justify-content-end">
';
                $value = $context->find('searchandsocialheader');
                $buffer .= $this->section9304f407f9d53d924764dfe13ab9ea74($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfcbae97f818124cd96e49eb0b463cc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{headertitle}}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('headertitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d130a1cf862bac5e424612e825b52af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{searchandsocialheader}}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('searchandsocialheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d061895febbdca56d6fb0e09764c8a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex justify-content-end bd-highlight">
                    {{{headerlogo}}}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex justify-content-end bd-highlight">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('headerlogo'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12adbc97ba0dbc28e22606abc255f396(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_adaptable/headernavbar}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_adaptable/headernavbar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA17b1b82657c800c8796ec365d876fdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{< theme_adaptable/primary-drawer-mobile }}
{{/ theme_adaptable/primary-drawer-mobile }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($parent = $this->mustache->loadPartial('theme_adaptable/primary-drawer-mobile')) {
                    $buffer .= $parent->renderInternal($context, $indent);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
