<?php

class __Mustache_1c7246216c0b1da9a7067f8fc8ab92b6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('showinitialpageloadingicon');
        $buffer .= $this->section9aefa2c7c0806e72299724b5b9ee38a7($context, $indent, $value);
        $buffer .= $indent . '<div id="format-tiles-multi-section-page" class="m-auto ';
        $value = $this->resolveValue($context->find('outerextraclasses'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('jsnavuserenabled');
        $buffer .= $this->section397d891ff980a7f2235a8ee0d21e22eb($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('from_ajax');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('format_tiles/above_tiles')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <ul class="tiles" id="multi_section_tiles">
';
        $value = $context->find('tiles');
        $buffer .= $this->sectionAe3063eaca600868635e0e95cce899dd($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('editing');
        if (empty($value)) {
            
            $buffer .= $indent . '            <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '            <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '            <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '            <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '            <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '            <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '            <li class="tile spacer" aria-hidden="true" id="lasttile"></li>
';
            $buffer .= $indent . '
';
            $value = $context->find('tiles');
            $buffer .= $this->section23c6b0b78f451acb61eacff1822ed218($context, $indent, $value);
        }
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '
';
        $value = $context->find('editing');
        $buffer .= $this->section3e6aeb16f95609f6b904bec2a6cfd728($context, $indent, $value);
        $buffer .= $indent . '    <div id="format_tiles_overlay" style="position: fixed; top: 0; left: 0; background-color:rgba(0,0,0,0.5); width: 100vw; height: 100vh; display: none;"></div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionA479fe30e60574f2e07fae4fa02f070e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clickiffailstoload, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clickiffailstoload, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9aefa2c7c0806e72299724b5b9ee38a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a id="page-loading-icon" href="{{config.wwwroot}}/course/view.php?id={{courseid}}&skipcheck=1">
    <div class="text-center mt-5">
        {{> format_tiles/loading}}
        <div class="text-center" style="text-decoration: none;"><small>{{#str}}clickiffailstoload, format_tiles{{/str}}</small></div>
    </div>
    </a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a id="page-loading-icon" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&skipcheck=1">
';
                $buffer .= $indent . '    <div class="text-center mt-5">
';
                if ($partial = $this->mustache->loadPartial('format_tiles/loading')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '        <div class="text-center" style="text-decoration: none;"><small>';
                $value = $context->find('str');
                $buffer .= $this->sectionA479fe30e60574f2e07fae4fa02f070e($context, $indent, $value);
                $buffer .= '</small></div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDecedda471c2f91523a6c12bcddd8088(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nojswarning, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nojswarning, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD51d65c127ff43f47a73c0e2d242ee17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'refresh';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'refresh';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section370fae32d3d95b43a136c6fd774c068a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&format-tiles-action=toggleanimatednav&sesskey={{config.sesskey}}">{{#str}}refresh{{/str}}</a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&format-tiles-action=toggleanimatednav&sesskey=';
                $value = $this->resolveValue($context->findDot('config.sesskey'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionD51d65c127ff43f47a73c0e2d242ee17($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
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

    private function section397d891ff980a7f2235a8ee0d21e22eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <noscript>
            {{^jsSessionDisabled}}
                <div id="jswarning" class="alert alert-secondary">{{#str}}nojswarning, format_tiles{{/str}}
                    {{#showJScancelLink}}
                        <a href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&format-tiles-action=toggleanimatednav&sesskey={{config.sesskey}}">{{#str}}refresh{{/str}}</a>
                    {{/showJScancelLink}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert">
                        <span class="sr-only">{{#str}}dismissnotification, core{{/str}}</span>
                    </button>
                </div>
            {{/jsSessionDisabled}}
        </noscript>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <noscript>
';
                $value = $context->find('jsSessionDisabled');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <div id="jswarning" class="alert alert-secondary">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionDecedda471c2f91523a6c12bcddd8088($context, $indent, $value);
                    $buffer .= '
';
                    $value = $context->find('showJScancelLink');
                    $buffer .= $this->section370fae32d3d95b43a136c6fd774c068a($context, $indent, $value);
                    $buffer .= $indent . '                    <button type="button" class="btn-close" data-bs-dismiss="alert">
';
                    $buffer .= $indent . '                        <span class="sr-only">';
                    $value = $context->find('str');
                    $buffer .= $this->section62fce6eb1e22a38c9f1bd33645ed3cc6($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                    </button>
';
                    $buffer .= $indent . '                </div>
';
                }
                $buffer .= $indent . '        </noscript>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section728a483db41fe61910fecb57689ae0df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> format_tiles/multi_section_tilebar}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/multi_section_tilebar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe3063eaca600868635e0e95cce899dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^editing}}
                {{> format_tiles/multi_section_tile}}
            {{/editing}}
            {{#editing}}
                {{> format_tiles/multi_section_tilebar}}
            {{/editing}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('editing');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('format_tiles/multi_section_tile')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $value = $context->find('editing');
                $buffer .= $this->section728a483db41fe61910fecb57689ae0df($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23c6b0b78f451acb61eacff1822ed218(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="section course-section main moveablesection" style="display: none;" id="section-{{tileid}}"
                    data-section="{{tileid}}" data-sectionid="{{secid}}"></li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="section course-section main moveablesection" style="display: none;" id="section-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    data-section="';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-sectionid="';
                $value = $this->resolveValue($context->find('secid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e6aeb16f95609f6b904bec2a6cfd728(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^from_ajax}}
            {{activity_clipboard}}
        {{/from_ajax}}
        {{{course_activity_clipboard}}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('from_ajax');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            ';
                    $value = $this->resolveValue($context->find('activity_clipboard'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                }
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('course_activity_clipboard'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
