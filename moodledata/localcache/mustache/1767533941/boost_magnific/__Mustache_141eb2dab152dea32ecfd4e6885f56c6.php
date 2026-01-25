<?php

class __Mustache_141eb2dab152dea32ecfd4e6885f56c6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="navigation-arrows pe-2 text-end">
';
        $value = $context->find('isdelegatedsection');
        if (empty($value)) {
            
            $value = $context->find('previous_tile_id');
            $buffer .= $this->sectionCcea6b970a034b937f1f33f73ccbb645($context, $indent, $value);
            $value = $context->find('previous_tile_id');
            if (empty($value)) {
                
                $buffer .= $indent . '            <span class="sectionbutton dimmed">
';
                $buffer .= $indent . '                <span class="d-flex justify-content-center align-items-center h-100">
';
                $buffer .= $indent . '                    <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section8e99fc5a847d39295bebc4036014298d($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </span>
';
                $value = $context->find('is-rtl');
                $buffer .= $this->section9828ee91d6c4ddee5f6d0d82cddeea94($context, $indent, $value);
                $buffer .= $indent . '        </span>
';
            }
            $buffer .= $indent . '
';
            $value = $context->find('next_tile_id');
            $buffer .= $this->section180ed93e69113c0d9c7e6855e764bc15($context, $indent, $value);
            $value = $context->find('next_tile_id');
            if (empty($value)) {
                
                $buffer .= $indent . '            <span class="sectionbutton dimmed">
';
                $buffer .= $indent . '                <span class="d-flex justify-content-center align-items-center h-100">
';
                $buffer .= $indent . '                    <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section25089960bba6aa5be7701b799c3c0ddd($context, $indent, $value);
                $buffer .= '</span>
';
                $value = $context->find('is-rtl');
                $buffer .= $this->sectionB48aace0f65c43e472a6c5c1f574d3f1($context, $indent, $value);
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '        </span>
';
            }
        }
        $value = $context->find('isdelegatedsection');
        $buffer .= $this->section107b2897e39bac3d73763983c77a0717($context, $indent, $value);
        $buffer .= $indent . '    <a class="sectionbutton" href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/course/view.php?id=';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <span class="d-flex justify-content-center align-items-center h-100">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->sectionF69eb641c7c02adcc5309c11614b9350($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </a>
';
        if ($partial = $this->mustache->loadPartial('format_tiles/above_tiles_buttons')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionDb730faeb315d2fc817de2b18f1d7d6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previoustopic, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'previoustopic, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e99fc5a847d39295bebc4036014298d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chevron-left, format_tiles, {{#str}}previoustopic, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'chevron-left, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->sectionDb730faeb315d2fc817de2b18f1d7d6f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA80c5caf0a42fa9441b324736d3d8f19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chevron-right, format_tiles, {{#str}}previoustopic, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'chevron-right, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->sectionDb730faeb315d2fc817de2b18f1d7d6f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section076ce7457b5e26b570785228299852da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="d-flex justify-content-center align-items-center h-100">
                    <span class="dir-ltr-hide">{{#pix}}chevron-right, format_tiles, {{#str}}previoustopic, format_tiles{{/str}}{{/pix}}</span>
                </span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <span class="d-flex justify-content-center align-items-center h-100">
';
                $buffer .= $indent . '                    <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->sectionA80c5caf0a42fa9441b324736d3d8f19($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCcea6b970a034b937f1f33f73ccbb645(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="sectionbutton"
               href="{{{ config.wwwroot }}}/course/section.php?id={{previous_tile_id}}">
                <span class="d-flex justify-content-center align-items-center h-100">
                    <span class="dir-rtl-hide">{{#pix}}chevron-left, format_tiles, {{#str}}previoustopic, format_tiles{{/str}}{{/pix}}</span>
                </span>
            {{#is-rtl}}
                <span class="d-flex justify-content-center align-items-center h-100">
                    <span class="dir-ltr-hide">{{#pix}}chevron-right, format_tiles, {{#str}}previoustopic, format_tiles{{/str}}{{/pix}}</span>
                </span>
            {{/is-rtl}}
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="sectionbutton"
';
                $buffer .= $indent . '               href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/course/section.php?id=';
                $value = $this->resolveValue($context->find('previous_tile_id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="d-flex justify-content-center align-items-center h-100">
';
                $buffer .= $indent . '                    <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section8e99fc5a847d39295bebc4036014298d($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </span>
';
                $value = $context->find('is-rtl');
                $buffer .= $this->section076ce7457b5e26b570785228299852da($context, $indent, $value);
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9828ee91d6c4ddee5f6d0d82cddeea94(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="d-flex justify-content-center align-items-center h-100">
                        <span class="dir-ltr-hide">{{#pix}}chevron-right, format_tiles, {{#str}}previoustopic, format_tiles{{/str}}{{/pix}}</span>
                    </span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="d-flex justify-content-center align-items-center h-100">
';
                $buffer .= $indent . '                        <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->sectionA80c5caf0a42fa9441b324736d3d8f19($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59ec7a9348c8f9b844e4c9476c48df1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nexttopic, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nexttopic, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25089960bba6aa5be7701b799c3c0ddd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chevron-right, format_tiles, {{#str}}nexttopic, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'chevron-right, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->section59ec7a9348c8f9b844e4c9476c48df1e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0b71e1bd96d5e5f0f18637a108f5e5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chevron-left, format_tiles, {{#str}}nexttopic, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'chevron-left, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->section59ec7a9348c8f9b844e4c9476c48df1e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF11fbec7efa88d159b18a9be3d04b641(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="d-flex justify-content-center align-items-center h-100">
                    <span class="dir-ltr-hide">{{#pix}}chevron-left, format_tiles, {{#str}}nexttopic, format_tiles{{/str}}{{/pix}}</span>
                </span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <span class="d-flex justify-content-center align-items-center h-100">
';
                $buffer .= $indent . '                    <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->sectionA0b71e1bd96d5e5f0f18637a108f5e5c($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section180ed93e69113c0d9c7e6855e764bc15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="sectionbutton"
               href="{{{ config.wwwroot }}}/course/section.php?id={{next_tile_id}}">
            <span class="d-flex justify-content-center align-items-center h-100">
                <span class="dir-rtl-hide">{{#pix}}chevron-right, format_tiles, {{#str}}nexttopic, format_tiles{{/str}}{{/pix}}</span>
            </span>
            {{#is-rtl}}
                <span class="d-flex justify-content-center align-items-center h-100">
                    <span class="dir-ltr-hide">{{#pix}}chevron-left, format_tiles, {{#str}}nexttopic, format_tiles{{/str}}{{/pix}}</span>
                </span>
            {{/is-rtl}}
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="sectionbutton"
';
                $buffer .= $indent . '               href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/course/section.php?id=';
                $value = $this->resolveValue($context->find('next_tile_id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="d-flex justify-content-center align-items-center h-100">
';
                $buffer .= $indent . '                <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section25089960bba6aa5be7701b799c3c0ddd($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </span>
';
                $value = $context->find('is-rtl');
                $buffer .= $this->sectionF11fbec7efa88d159b18a9be3d04b641($context, $indent, $value);
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB48aace0f65c43e472a6c5c1f574d3f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="dir-ltr-hide">{{#pix}}chevron-left, format_tiles, {{#str}}nexttopic, format_tiles{{/str}}{{/pix}}</span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->sectionA0b71e1bd96d5e5f0f18637a108f5e5c($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA27b6418f3b48fdc2203a979299b9e65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chevron-up, format_tiles, {{parent_tile.title}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'chevron-up, format_tiles, ';
                $value = $this->resolveValue($context->findDot('parent_tile.title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section107b2897e39bac3d73763983c77a0717(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a class="sectionbutton d-inline-block align-top" href="{{{ config.wwwroot }}}/course/section.php?id={{parent_tile.id}}" title="{{parent_tile.title}}">
            <span class="d-flex justify-content-center align-items-center h-100">
                {{#pix}}chevron-up, format_tiles, {{parent_tile.title}}{{/pix}}</a>
            </span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a class="sectionbutton d-inline-block align-top" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/course/section.php?id=';
                $value = $this->resolveValue($context->findDot('parent_tile.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->findDot('parent_tile.title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="d-flex justify-content-center align-items-center h-100">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->sectionA27b6418f3b48fdc2203a979299b9e65($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6637e488c3ec4f1612bec4a395b57b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'home, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'home, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF69eb641c7c02adcc5309c11614b9350(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'home, format_tiles, {{#str}}home, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'home, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->sectionC6637e488c3ec4f1612bec4a395b57b1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
