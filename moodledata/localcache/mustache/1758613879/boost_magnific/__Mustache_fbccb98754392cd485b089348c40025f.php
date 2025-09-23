<?php

class __Mustache_fbccb98754392cd485b089348c40025f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<li class="tile';
        $value = $context->find('hidden');
        $buffer .= $this->section7aa9d29047685f43b691d6a07b1afcea($context, $indent, $value);
        $value = $context->find('restrictionlock');
        $buffer .= $this->sectionE2bb66f5487b7617b8c51f2a5b45d501($context, $indent, $value);
        $value = $context->find('isactive');
        $buffer .= $this->section928b6ff338b0eb6eaf854e3f17360ba9($context, $indent, $value);
        $value = $context->find('userclickable');
        $buffer .= $this->sectionCb55db809f17c40a745ac914e4c0d26a($context, $indent, $value);
        $value = $context->findDot('progress.isComplete');
        $buffer .= $this->section0913567f62f48e9575a17a7fa0d6df20($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    id="tile-';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-section="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-true-sectionid="';
        $value = $this->resolveValue($context->find('secid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $context->find('hastilephoto');
        $buffer .= $this->section23076bee0d5ba21085d8152deab9a01a($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    ';
        $value = $context->find('hastilephoto');
        if (empty($value)) {
            
            $buffer .= '<div class="tile-bg"></div>';
        }
        $buffer .= '
';
        $buffer .= $indent . '    <a class="tile-link"';
        $value = $context->find('userclickable');
        $buffer .= $this->section29e0be42f2c6c9cfc3980aefd5cc4565($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '       data-section="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="sectionlink-';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-label="';
        $value = $this->resolveValue($context->find('tilearialabel'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $value = $context->find('hastilephoto');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="tile-content" id="tilecontent-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '                <div class="tile-top" id="tileTop-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '                    <div class="tileiconcontainer" id="tileicon_';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '                        ';
            $value = $context->find('editing');
            $buffer .= $this->sectionDf14f79efcf06a00437273642561f1d8($context, $indent, $value);
            $buffer .= '>
';
            $buffer .= $indent . '                        ';
            $value = $context->find('tilenumber');
            $buffer .= $this->section3363be026414c03c701194993104e7ec($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                        ';
            $value = $context->find('tilenumber');
            if (empty($value)) {
                
                if ($partial = $this->mustache->loadPartial('format_tiles/tileicon')) {
                    $buffer .= $partial->renderInternal($context);
                }
            }
            $buffer .= '
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    <div class="tiletopright" id="tiletopright-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" aria-hidden="true">
';
            if ($partial = $this->mustache->loadPartial('format_tiles/progress_spacer')) {
                $buffer .= $partial->renderInternal($context, $indent . '                        ');
            }
            $buffer .= $indent . '                        ';
            $value = $context->find('progress');
            $buffer .= $this->sectionA286c49bdf484a888f7843cd1d929e21($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <div class="tile-text" id="tileText-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '                    <div class="tile-textinner';
            $value = $this->resolveValue($context->find('titleclass'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" id="tileTextin-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '                        ';
            $value = $context->find('title');
            $buffer .= $this->section53172c825852d72b0af9c791171103b7($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </div>
';
            $value = $context->find('availabilitymessage');
            $buffer .= $this->section7bf3f0090088442c9567fff838525a3c($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('hastilephoto');
        $buffer .= $this->section6a622674c136fdd21b63ffbec1c0e83b($context, $indent, $value);
        $buffer .= $indent . '    </a>
';
        if ($partial = $this->mustache->loadPartial('format_tiles/progress_all_complete')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    ';
        $value = $context->find('jsnavadminallowed');
        $buffer .= $this->section0825236bebde7688cc0adcc760ea085b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section7aa9d29047685f43b691d6a07b1afcea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tile-hidden';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tile-hidden';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2bb66f5487b7617b8c51f2a5b45d501(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tile-restricted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tile-restricted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section928b6ff338b0eb6eaf854e3f17360ba9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' current';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' current';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb55db809f17c40a745ac914e4c0d26a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tile-clickable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tile-clickable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0913567f62f48e9575a17a7fa0d6df20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' is-complete';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' is-complete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23076bee0d5ba21085d8152deab9a01a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{phototileinlinestyle}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('phototileinlinestyle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29e0be42f2c6c9cfc3980aefd5cc4565(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' href="{{{config.wwwroot}}}/course/section.php?id={{secid}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/course/section.php?id=';
                $value = $this->resolveValue($context->find('secid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa52e14d9db90ec37b236f39dc78c82e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'picknewicon, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'picknewicon, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF32f5bbcf6805d6f2767abe2a98bfa4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'picknewiconphoto, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'picknewiconphoto, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section366205ecbdff702f963ebbfc675cc9be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}picknewiconphoto, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionF32f5bbcf6805d6f2767abe2a98bfa4d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf14f79efcf06a00437273642561f1d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-bs-toggle="tooltip" data-placement="left"
                         data-bs-original-title="{{^allowphototiles}}{{#str}}picknewicon, format_tiles{{/str}}{{/allowphototiles}}{{#allowphototiles}}{{#str}}picknewiconphoto, format_tiles{{/str}}{{/allowphototiles}}"
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-bs-toggle="tooltip" data-placement="left"
';
                $buffer .= $indent . '                         data-bs-original-title="';
                $value = $context->find('allowphototiles');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->sectionFa52e14d9db90ec37b236f39dc78c82e($context, $indent, $value);
                }
                $value = $context->find('allowphototiles');
                $buffer .= $this->section366205ecbdff702f963ebbfc675cc9be($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3363be026414c03c701194993104e7ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>format_tiles/tilenumber}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/tilenumber')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA286c49bdf484a888f7843cd1d929e21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^hidden}}
                            {{> format_tiles/progress}}
                        {{/hidden}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hidden');
                if (empty($value)) {
                    
                    $buffer .= '
';
                    if ($partial = $this->mustache->loadPartial('format_tiles/progress')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                            ');
                    }
                    $buffer .= $indent . '                        ';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53172c825852d72b0af9c791171103b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3{{^title}} title="{{{tilearialabel}}}"{{/title}}>{{{title}}}</h3>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h3';
                $value = $context->find('title');
                if (empty($value)) {
                    
                    $buffer .= ' title="';
                    $value = $this->resolveValue($context->find('tilearialabel'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"';
                }
                $buffer .= '>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7bf3f0090088442c9567fff838525a3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{>format_tiles/availability_info}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/availability_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE801f9ab0cae8dff89fc23a745c48b18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>format_tiles/availability_info}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/availability_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
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

    private function sectionC3046aa34557c06a6fe90ef30daa5e32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> format_tiles/progress}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/progress')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b9ddddeddf3e5cd82f504117b6ce7bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#progress}}
                    {{> format_tiles/progress}}
                {{/progress}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('progress');
                $buffer .= $this->sectionC3046aa34557c06a6fe90ef30daa5e32($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a622674c136fdd21b63ffbec1c0e83b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#availabilitymessage}}
                {{>format_tiles/availability_info}}
            {{/availabilitymessage}}
            <div id="tileText-{{tileid}}">
            <div class="photo-tile-text {{titleclass}}" id="tileTextin-{{tileid}}">
                {{>format_tiles/progress_spacer}}
                {{#title}}<h3>{{{title}}}</h3>{{/title}}
            </div>
                <div class="tile-text">
                {{! This ensures that the bottom section of the tile shows the activity summary on hover, too}}
                </div>
            </div>
            {{#showprogressphototiles}}
                {{#progress}}
                    {{> format_tiles/progress}}
                {{/progress}}
            {{/showprogressphototiles}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('availabilitymessage');
                $buffer .= $this->sectionE801f9ab0cae8dff89fc23a745c48b18($context, $indent, $value);
                $buffer .= $indent . '            <div id="tileText-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="photo-tile-text ';
                $value = $this->resolveValue($context->find('titleclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" id="tileTextin-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('format_tiles/progress_spacer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '                ';
                $value = $context->find('title');
                $buffer .= $this->section2af72651b67e0cfebab37ff84b859898($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '                <div class="tile-text">
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $value = $context->find('showprogressphototiles');
                $buffer .= $this->section2b9ddddeddf3e5cd82f504117b6ce7bb($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17957b7bab327aa2a9340dc71b7c8c90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{! This is added as empty for now - JS will populate and de-populate as necessary and add image to it using template.}}
        <span class="tile-loading-icon" id="loading-icon-{{tileid}}" style="display: none;"></span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '        <span class="tile-loading-icon" id="loading-icon-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="display: none;"></span>
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0825236bebde7688cc0adcc760ea085b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#userenabledjsnav}}
        {{! This is added as empty for now - JS will populate and de-populate as necessary and add image to it using template.}}
        <span class="tile-loading-icon" id="loading-icon-{{tileid}}" style="display: none;"></span>
    {{/userenabledjsnav}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('userenabledjsnav');
                $buffer .= $this->section17957b7bab327aa2a9340dc71b7c8c90($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
