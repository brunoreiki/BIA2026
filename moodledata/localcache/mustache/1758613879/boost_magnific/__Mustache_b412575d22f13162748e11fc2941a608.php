<?php

class __Mustache_b412575d22f13162748e11fc2941a608 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="format_tiles_section_content">
';
        $buffer .= $indent . '<div class="pagesechead">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('hidden_section');
        $buffer .= $this->section48ea386d4b8fe4941f0f746b03fa1622($context, $indent, $value);
        $value = $context->find('hidden_section');
        if (empty($value)) {
            
            $value = $context->find('usingjsnav');
            $buffer .= $this->section09bd9dd85a950a7596b8758307dede6e($context, $indent, $value);
        }
        $buffer .= $indent . '        <div class="col text-end">
';
        $value = $context->find('usingjsnav');
        $buffer .= $this->section48d28958c5667fd76102e57ab2051aec($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('hidden_section');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="row m-1">
';
            $value = $context->find('current');
            $buffer .= $this->section1d417a9b339e4f783b86f3082e58cb29($context, $indent, $value);
            $value = $context->find('visible');
            if (empty($value)) {
                
                $buffer .= $indent . '                <span class="badge badge-pill badge-warning order-2">';
                $value = $context->find('str');
                $buffer .= $this->sectionAa413acb7776474efcb52c4cbf9fc6f9($context, $indent, $value);
                $buffer .= '</span>
';
            }
            $value = $context->find('visible');
            $buffer .= $this->sectionE7039c9f7115da8f8eecf759f13129cc($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('hidden_section');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('availabilitymessage'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '        <div class="summary';
            $value = $context->find('visible');
            if (empty($value)) {
                
                $buffer .= ' dimmed';
            }
            $buffer .= '">';
            $value = $this->resolveValue($context->find('summary'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</div>
';
            $value = $context->find('editing');
            $buffer .= $this->sectionE8c28344c59162b2c66f064ff0b1fffd($context, $indent, $value);
            $buffer .= $indent . '        <ul class="format-tiles-cm-list ';
            $value = $context->find('useSubtiles');
            if (empty($value)) {
                
                $buffer .= 'no';
            }
            $buffer .= 'subtiles">
';
            if ($partial = $this->mustache->loadPartial('format_tiles/course_modules')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            $buffer .= $indent . '        </ul>
';
            $buffer .= $indent . '
';
            $value = $context->find('editing');
            $buffer .= $this->section7684b6717d74c1f2d64d487962f93908($context, $indent, $value);
            $value = $context->find('from_ajax');
            if (empty($value)) {
                
                $value = $context->find('single_sec_content_is_long');
                $buffer .= $this->section1df24d34126743968ec27b767e021153($context, $indent, $value);
            }
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section31ae0fbdc439c6d3e86010ee0fe2597e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notavailable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'notavailable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48ea386d4b8fe4941f0f746b03fa1622(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#str}}notavailable{{/str}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section31ae0fbdc439c6d3e86010ee0fe2597e($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fcff15626d63e0deda9271ecf0b048b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{inplace_editable_title}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('inplace_editable_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32a70a1e9f830c8a3dd5fd05c1e40813(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="icon20" id="hiddeneye" title="Hidden"></span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="icon20" id="hiddeneye" title="Hidden"></span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09bd9dd85a950a7596b8758307dede6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="sectiontitlecontainer col">
                    <div class="sectiontitle" id="sectiontitle{{tileid}}">
                        <h2>{{#editing}}{{{inplace_editable_title}}}{{/editing}}{{^editing}}{{{title}}}{{/editing}}</h2>
                        {{#hidden}}<span class="icon20" id="hiddeneye" title="Hidden"></span>{{/hidden}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="sectiontitlecontainer col">
';
                $buffer .= $indent . '                    <div class="sectiontitle" id="sectiontitle';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <h2>';
                $value = $context->find('editing');
                $buffer .= $this->section9fcff15626d63e0deda9271ecf0b048b($context, $indent, $value);
                $value = $context->find('editing');
                if (empty($value)) {
                    
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= ($value === null ? '' : $value);
                }
                $buffer .= '</h2>
';
                $buffer .= $indent . '                        ';
                $value = $context->find('hidden');
                $buffer .= $this->section32a70a1e9f830c8a3dd5fd05c1e40813($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78f50f53d43e23f2e4064014fd464cc6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pencil, format_tiles, {{#str}}edit{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pencil, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section089a4b0789c16f9dfe7bf713b5883b53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^editing}}
                            <a class="sectionbutton d-none d-md-inline-block" id="editsectiontbtn-{{tileid}}"
                               href="{{{ config.wwwroot }}}/course/view.php?id={{courseid}}&sesskey={{sesskey}}&edit=on&expandsection={{tileid}}#section-{{tileid}}">
                            <span class="d-flex justify-content-center align-items-center h-100">
                                {{#pix}}pencil, format_tiles, {{#str}}edit{{/str}}{{/pix}}
                            </span>
                            </a>
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
                    
                    $buffer .= $indent . '                            <a class="sectionbutton d-none d-md-inline-block" id="editsectiontbtn-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                               href="';
                    $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '/course/view.php?id=';
                    $value = $this->resolveValue($context->find('courseid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '&sesskey=';
                    $value = $this->resolveValue($context->find('sesskey'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '&edit=on&expandsection=';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '#section-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $buffer .= $indent . '                            <span class="d-flex justify-content-center align-items-center h-100">
';
                    $buffer .= $indent . '                                ';
                    $value = $context->find('pix');
                    $buffer .= $this->section78f50f53d43e23f2e4064014fd464cc6($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                            </span>
';
                    $buffer .= $indent . '                            </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe7cbd9c9dac158cc537b0cead9e16c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'close, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'close, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9de0cc86ce9bf58c0c382a47b9cf6593(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'close, format_tiles, {{#str}}close, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'close, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->sectionFe7cbd9c9dac158cc537b0cead9e16c8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48d28958c5667fd76102e57ab2051aec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="sectionbuttons">
                    {{#canedit}}
                        {{^editing}}
                            <a class="sectionbutton d-none d-md-inline-block" id="editsectiontbtn-{{tileid}}"
                               href="{{{ config.wwwroot }}}/course/view.php?id={{courseid}}&sesskey={{sesskey}}&edit=on&expandsection={{tileid}}#section-{{tileid}}">
                            <span class="d-flex justify-content-center align-items-center h-100">
                                {{#pix}}pencil, format_tiles, {{#str}}edit{{/str}}{{/pix}}
                            </span>
                            </a>
                        {{/editing}}
                    {{/canedit}}
                    <button class="sectionbutton closesectionbtn" id="closesectionbtn-{{tileid}}"
                       title="{{#str}}close, format_tiles{{/str}}" data-section="{{tileid}}">
                    <span class="d-flex justify-content-center align-items-center h-100">
                        {{#pix}}close, format_tiles, {{#str}}close, format_tiles{{/str}}{{/pix}}
                    </span>
                    </button>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="sectionbuttons">
';
                $value = $context->find('canedit');
                $buffer .= $this->section089a4b0789c16f9dfe7bf713b5883b53($context, $indent, $value);
                $buffer .= $indent . '                    <button class="sectionbutton closesectionbtn" id="closesectionbtn-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                       title="';
                $value = $context->find('str');
                $buffer .= $this->sectionFe7cbd9c9dac158cc537b0cead9e16c8($context, $indent, $value);
                $buffer .= '" data-section="';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <span class="d-flex justify-content-center align-items-center h-100">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('pix');
                $buffer .= $this->section9de0cc86ce9bf58c0c382a47b9cf6593($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    </button>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE24236d574cd94bfb8b4779c142666a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'highlighted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'highlighted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d417a9b339e4f783b86f3082e58cb29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="badge badge-pill badge-primary order-1">{{#str}}highlighted{{/str}}</span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <span class="badge badge-pill badge-primary order-1">';
                $value = $context->find('str');
                $buffer .= $this->sectionE24236d574cd94bfb8b4779c142666a4($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa413acb7776474efcb52c4cbf9fc6f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenfromstudents';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hiddenfromstudents';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA660a93413b0d2d8a474fd11d6a19275(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'restricted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'restricted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f1a20ae705210fc57f21d4771c458ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="badge badge-pill badge-secondary order-3">{{#str}}restricted{{/str}}</span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="badge badge-pill badge-secondary order-3">';
                $value = $context->find('str');
                $buffer .= $this->sectionA660a93413b0d2d8a474fd11d6a19275($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE7039c9f7115da8f8eecf759f13129cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#availabilitymessage}}
                    <span class="badge badge-pill badge-secondary order-3">{{#str}}restricted{{/str}}</span>
                {{/availabilitymessage}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('availabilitymessage');
                $buffer .= $this->section3f1a20ae705210fc57f21d4771c458ef($context, $indent, $value);
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

    private function section6296ea0f3198ce30386d3bdcf135b8ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            i/settings, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '            i/settings, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8c28344c59162b2c66f064ff0b1fffd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a title="{{#str}}editsummary, core{{/str}}"
               href="{{{config.wwwroot}}}/course/editsection.php?id={{secid}}&sr={{tileid}}">{{#pix}}
            i/settings, core{{/pix}}
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a title="';
                $value = $context->find('str');
                $buffer .= $this->section16d92a0484aeead404018fc9fdfc347c($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '               href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/course/editsection.php?id=';
                $value = $this->resolveValue($context->find('secid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&sr=';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->section6296ea0f3198ce30386d3bdcf135b8ac($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7684b6717d74c1f2d64d487962f93908(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{single_sec_add_cm_control_html}}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('single_sec_add_cm_control_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1df24d34126743968ec27b767e021153(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{!repeat nav arrows at bottom of page if it is long}}
                {{>format_tiles/single_section_nav}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/single_section_nav')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
