<?php

class __Mustache_7b65e14232dcf5c07cf350707e66bf9a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('section_zero_show');
        $buffer .= $this->section216f449fa866f779bd9efd91ded1d750($context, $indent, $value);

        return $buffer;
    }

    private function section2af72651b67e0cfebab37ff84b859898(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3>{{{title}}}</h3>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h3>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16d92a0484aeead404018fc9fdfc347c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editsummary, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editsummary, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3d6ec313aa02bbf9f122227223575b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/settings, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/settings, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfae1991762f11dde7931f139befaee9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a title="{{#str}}editsummary, core{{/str}}" href="{{{config.wwwroot}}}/course/editsection.php?id={{secid}}&sr={{tileid}}">
                    {{#pix}}i/settings, core{{/pix}}
                </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a title="';
                $value = $context->find('str');
                $buffer .= $this->section16d92a0484aeead404018fc9fdfc347c($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/course/editsection.php?id=';
                $value = $this->resolveValue($context->find('secid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&sr=';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->sectionD3d6ec313aa02bbf9f122227223575b8($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC45b96b748d622f1dc023f0bfdc7c659(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'subtiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'subtiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE37ab04d37766f3943a0e66ff186f071(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#usesubtilesseczero}}subtiles{{/usesubtilesseczero}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('usesubtilesseczero');
                $buffer .= $this->sectionC45b96b748d622f1dc023f0bfdc7c659($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7cfc5adf2530f7257536fd955aa2215(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{>format_tiles/course_module}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/course_module')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section747b047642ad653485fef2f252c98aa6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#course_modules}}
                            {{>format_tiles/course_module}}
                        {{/course_modules}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('course_modules');
                $buffer .= $this->sectionC7cfc5adf2530f7257536fd955aa2215($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5dff923a172e9591f2089b3ecf99d6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{section_zero_add_cm_control_html}}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('section_zero_add_cm_control_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4360d494b61dce984a391461156fddd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="section-0" data-section="0" class="section course-section main clearfix">
            {{#title}}<h3>{{{title}}}</h3>{{/title}}
            {{#editing}}
                <a title="{{#str}}editsummary, core{{/str}}" href="{{{config.wwwroot}}}/course/editsection.php?id={{secid}}&sr={{tileid}}">
                    {{#pix}}i/settings, core{{/pix}}
                </a>
            {{/editing}}
            <div class="content">
                <div class="summary">{{{summary}}}</div>
                <ul id="sec-zero-cm-list" class="ps-0 {{#usesubtilesseczero}}subtiles{{/usesubtilesseczero}}{{^usesubtilesseczero}}nosubtiles{{/usesubtilesseczero}}
                    {{#useSubtiles}}{{#usesubtilesseczero}}subtiles{{/usesubtilesseczero}}{{/useSubtiles}}">
                    {{#content}}
                        {{#course_modules}}
                            {{>format_tiles/course_module}}
                        {{/course_modules}}
                    {{/content}}
                </ul>
                {{#editing}}
                    {{{section_zero_add_cm_control_html}}}
                {{/editing}}
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div id="section-0" data-section="0" class="section course-section main clearfix">
';
                $buffer .= $indent . '            ';
                $value = $context->find('title');
                $buffer .= $this->section2af72651b67e0cfebab37ff84b859898($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('editing');
                $buffer .= $this->sectionAfae1991762f11dde7931f139befaee9($context, $indent, $value);
                $buffer .= $indent . '            <div class="content">
';
                $buffer .= $indent . '                <div class="summary">';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                <ul id="sec-zero-cm-list" class="ps-0 ';
                $value = $context->find('usesubtilesseczero');
                $buffer .= $this->sectionC45b96b748d622f1dc023f0bfdc7c659($context, $indent, $value);
                $value = $context->find('usesubtilesseczero');
                if (empty($value)) {
                    
                    $buffer .= 'nosubtiles';
                }
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $context->find('useSubtiles');
                $buffer .= $this->sectionE37ab04d37766f3943a0e66ff186f071($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('content');
                $buffer .= $this->section747b047642ad653485fef2f252c98aa6($context, $indent, $value);
                $buffer .= $indent . '                </ul>
';
                $value = $context->find('editing');
                $buffer .= $this->sectionD5dff923a172e9591f2089b3ecf99d6c($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section216f449fa866f779bd9efd91ded1d750(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#section_zero}}
        <div id="section-0" data-section="0" class="section course-section main clearfix">
            {{#title}}<h3>{{{title}}}</h3>{{/title}}
            {{#editing}}
                <a title="{{#str}}editsummary, core{{/str}}" href="{{{config.wwwroot}}}/course/editsection.php?id={{secid}}&sr={{tileid}}">
                    {{#pix}}i/settings, core{{/pix}}
                </a>
            {{/editing}}
            <div class="content">
                <div class="summary">{{{summary}}}</div>
                <ul id="sec-zero-cm-list" class="ps-0 {{#usesubtilesseczero}}subtiles{{/usesubtilesseczero}}{{^usesubtilesseczero}}nosubtiles{{/usesubtilesseczero}}
                    {{#useSubtiles}}{{#usesubtilesseczero}}subtiles{{/usesubtilesseczero}}{{/useSubtiles}}">
                    {{#content}}
                        {{#course_modules}}
                            {{>format_tiles/course_module}}
                        {{/course_modules}}
                    {{/content}}
                </ul>
                {{#editing}}
                    {{{section_zero_add_cm_control_html}}}
                {{/editing}}
            </div>
        </div>
    {{/section_zero}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('section_zero');
                $buffer .= $this->sectionD4360d494b61dce984a391461156fddd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
