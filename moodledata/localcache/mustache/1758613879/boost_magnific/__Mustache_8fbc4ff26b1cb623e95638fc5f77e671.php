<?php

class __Mustache_8fbc4ff26b1cb623e95638fc5f77e671 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($parent = $this->mustache->loadPartial('theme_boost_magnific/drawer')) {
            $context->pushBlockContext(array(
                'id' => array($this, 'block8f795b47c37f6bf84cb946434e2fb6de'),
                'drawerclasses' => array($this, 'block1cdf8b81e3833a9ba388e299be6ac0c9'),
                'drawercloseonresize' => array($this, 'blockE052079a625ca42b568ba24af19cc7eb'),
                'drawerheading' => array($this, 'block17351b33d2a7633a1f9490fda46e35b9'),
                'drawercontent' => array($this, 'block22abbbafb7922f04c9a94998aca3cbf0'),
                'drawerstate' => array($this, 'blockA1dd4f2e68d7796ac435ab08723145ef'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section0145694eb3930ef018d574db044413b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <img src="{{{output.get_compact_logo_url}}}" class="logo py-1 h-100" alt="{{{sitename}}}">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '            <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="logo py-1 h-100" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67c59c18302e3b6896a1ce2ba2852316(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/expanded, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/expanded, core ';
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

    private function sectionFb21be3147b00254c7256c9c85519aaf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsed, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsed, core ';
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

    private function section6d8e07b14a3c24382f60f6f77ecdf79c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe9563bfec6b5ea1df084e3390539738(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{^divider}}
                                <a href="{{{url}}}"
                                   class="ps-5 {{^isactive}}bg-light{{/isactive}}{{#isactive}}active{{/isactive}} list-group-item list-group-item-action">{{{text}}}</a>
                            {{/divider}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <a href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                   class="ps-5 ';
                    $value = $context->find('isactive');
                    if (empty($value)) {
                        
                        $buffer .= 'bg-light';
                    }
                    $value = $context->find('isactive');
                    $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                    $buffer .= ' list-group-item list-group-item-action">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section717559b2b8a12f60c9df897ad78b4d2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a id="drop-down-{{{sort}}}" href="#"
                       class="list-group-item list-group-item-action icons-collapse-expand {{^isopen}}collapsed {{/isopen}}d-flex"
                       data-toggle="collapse" data-target="#drop-down-menu-{{{sort}}}"
                       aria-expanded="{{#isopen}}true{{/isopen}}{{^isopen}}false{{/isopen}}"
                       aria-controls="drop-down-menu-{{{sort}}}">
                        {{{text}}}
                        <span class="ms-auto expanded-icon icon-no-margin mx-2">
                                {{#pix}} t/expanded, core {{/pix}}
                            <span class="sr-only">
                                {{#str}} collapse, core {{/str}}
                            </span>
                            </span>
                        <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                                {{#pix}} t/collapsed, core {{/pix}}
                            <span class="sr-only">
                                {{#str}} expand, core {{/str}}
                            </span>
                            </span>
                    </a>
                    <div class="collapse {{#isopen}}show {{/isopen}}list-group-item p-0 border-0" role="menu"
                         id="drop-down-menu-{{{sort}}}" aria-labelledby="drop-down-{{{sort}}}">
                        {{#children}}
                            {{^divider}}
                                <a href="{{{url}}}"
                                   class="ps-5 {{^isactive}}bg-light{{/isactive}}{{#isactive}}active{{/isactive}} list-group-item list-group-item-action">{{{text}}}</a>
                            {{/divider}}
                        {{/children}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a id="drop-down-';
                $value = $this->resolveValue($context->find('sort'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" href="#"
';
                $buffer .= $indent . '                       class="list-group-item list-group-item-action icons-collapse-expand ';
                $value = $context->find('isopen');
                if (empty($value)) {
                    
                    $buffer .= 'collapsed ';
                }
                $buffer .= 'd-flex"
';
                $buffer .= $indent . '                       data-toggle="collapse" data-target="#drop-down-menu-';
                $value = $this->resolveValue($context->find('sort'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                       aria-expanded="';
                $value = $context->find('isopen');
                $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
                $value = $context->find('isopen');
                if (empty($value)) {
                    
                    $buffer .= 'false';
                }
                $buffer .= '"
';
                $buffer .= $indent . '                       aria-controls="drop-down-menu-';
                $value = $this->resolveValue($context->find('sort'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        <span class="ms-auto expanded-icon icon-no-margin mx-2">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('pix');
                $buffer .= $this->section67c59c18302e3b6896a1ce2ba2852316($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            <span class="sr-only">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('str');
                $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </span>
';
                $buffer .= $indent . '                            </span>
';
                $buffer .= $indent . '                        <span class="ms-auto collapsed-icon icon-no-margin mx-2">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('pix');
                $buffer .= $this->sectionFb21be3147b00254c7256c9c85519aaf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            <span class="sr-only">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('str');
                $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </span>
';
                $buffer .= $indent . '                            </span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                    <div class="collapse ';
                $value = $context->find('isopen');
                $buffer .= $this->section6d8e07b14a3c24382f60f6f77ecdf79c($context, $indent, $value);
                $buffer .= 'list-group-item p-0 border-0" role="menu"
';
                $buffer .= $indent . '                         id="drop-down-menu-';
                $value = $this->resolveValue($context->find('sort'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-labelledby="drop-down-';
                $value = $this->resolveValue($context->find('sort'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $value = $context->find('children');
                $buffer .= $this->sectionEe9563bfec6b5ea1df084e3390539738($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e96ec75439305fc88c78e77946e47bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0c0b051caebb6243b5c2bd6d728967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f50e59d74f67e789cb8b8834c1276f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#haschildren}}
                    <a id="drop-down-{{{sort}}}" href="#"
                       class="list-group-item list-group-item-action icons-collapse-expand {{^isopen}}collapsed {{/isopen}}d-flex"
                       data-toggle="collapse" data-target="#drop-down-menu-{{{sort}}}"
                       aria-expanded="{{#isopen}}true{{/isopen}}{{^isopen}}false{{/isopen}}"
                       aria-controls="drop-down-menu-{{{sort}}}">
                        {{{text}}}
                        <span class="ms-auto expanded-icon icon-no-margin mx-2">
                                {{#pix}} t/expanded, core {{/pix}}
                            <span class="sr-only">
                                {{#str}} collapse, core {{/str}}
                            </span>
                            </span>
                        <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                                {{#pix}} t/collapsed, core {{/pix}}
                            <span class="sr-only">
                                {{#str}} expand, core {{/str}}
                            </span>
                            </span>
                    </a>
                    <div class="collapse {{#isopen}}show {{/isopen}}list-group-item p-0 border-0" role="menu"
                         id="drop-down-menu-{{{sort}}}" aria-labelledby="drop-down-{{{sort}}}">
                        {{#children}}
                            {{^divider}}
                                <a href="{{{url}}}"
                                   class="ps-5 {{^isactive}}bg-light{{/isactive}}{{#isactive}}active{{/isactive}} list-group-item list-group-item-action">{{{text}}}</a>
                            {{/divider}}
                        {{/children}}
                    </div>
                {{/haschildren}}
                {{^haschildren}}
                    <a href="{{{url}}}"
                       class="list-group-item list-group-item-action {{#isactive}}active{{/isactive}} {{#classes}}{{.}} {{/classes}}"
                       {{#isactive}}aria-current="true"{{/isactive}}>
                        {{{text}}}
                    </a>
                {{/haschildren}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('haschildren');
                $buffer .= $this->section717559b2b8a12f60c9df897ad78b4d2e($context, $indent, $value);
                $value = $context->find('haschildren');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <a href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                       class="list-group-item list-group-item-action ';
                    $value = $context->find('isactive');
                    $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $context->find('classes');
                    $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                       ';
                    $value = $context->find('isactive');
                    $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '                        ';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block8f795b47c37f6bf84cb946434e2fb6de($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'theme_boost_magnific-drawers-primary';
    
        return $buffer;
    }

    public function block1cdf8b81e3833a9ba388e299be6ac0c9($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-left drawer-primary drawer-primary-mobile';
    
        return $buffer;
    }

    public function blockE052079a625ca42b568ba24af19cc7eb($context)
    {
        $indent = $buffer = '';
        $buffer .= '1';
    
        return $buffer;
    }

    public function block17351b33d2a7633a1f9490fda46e35b9($context)
    {
        $indent = $buffer = '';
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->section0145694eb3930ef018d574db044413b1($context, $indent, $value);
        $value = $context->findDot('output.should_display_navbar_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '            <span class="sitename" title="';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '">';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</span>
';
        }
    
        return $buffer;
    }

    public function block22abbbafb7922f04c9a94998aca3cbf0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="list-group">
';
        $value = $context->find('mobileprimarynav');
        $buffer .= $this->section5f50e59d74f67e789cb8b8834c1276f9($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }

    public function blockA1dd4f2e68d7796ac435ab08723145ef($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'show-drawer-primary';
    
        return $buffer;
    }
}
