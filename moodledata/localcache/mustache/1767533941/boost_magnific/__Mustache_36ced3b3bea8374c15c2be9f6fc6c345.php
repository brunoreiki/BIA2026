<?php

class __Mustache_36ced3b3bea8374c15c2be9f6fc6c345 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('isdelegatedsection');
        if (empty($value)) {
            
            $buffer .= $indent . '    <span class="tiles-editor-image text-center" ';
            $value = $context->find('editing');
            $buffer .= $this->section18cadf94ee90c3ebfba991674c23d8aa($context, $indent, $value);
            $buffer .= ' id="tileicon_';
            $value = $this->resolveValue($context->find('num'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $value = $context->find('hasphoto');
            if (empty($value)) {
                
                $buffer .= $indent . '        ';
                $value = $context->find('tilenumber');
                $buffer .= $this->section3363be026414c03c701194993104e7ec($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('tilenumber');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <span class="tile-icon" role="button">
';
                    $value = $context->find('tileicon');
                    $buffer .= $this->sectionDfa07bcb511adf541d6e0f3e453b4890($context, $indent, $value);
                    $buffer .= $indent . '            </span>
';
                }
            }
            $value = $context->find('hasphoto');
            $buffer .= $this->section3dad71939223a3fba8b6e9b7897a5f8e($context, $indent, $value);
            $buffer .= $indent . '    </span>
';
        }

        return $buffer;
    }

    private function section18cadf94ee90c3ebfba991674c23d8aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-section="{{num}}" data-true-sectionid="{{id}}" data-tiles-action="launch-tiles-icon-picker"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-section="';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-true-sectionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-tiles-action="launch-tiles-icon-picker"';
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

    private function section2e3d5ad1ee2c4a80765ea1ed3d47e595(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tileicon/{{{tileicon}}}, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tileicon/';
                $value = $this->resolveValue($context->find('tileicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ', format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDfa07bcb511adf541d6e0f3e453b4890(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#pix}}tileicon/{{{tileicon}}}, format_tiles{{/pix}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->section2e3d5ad1ee2c4a80765ea1ed3d47e595($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6101f1d6daa084e424a485160d916e86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'draftfile';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'draftfile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3dad71939223a3fba8b6e9b7897a5f8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="tilebarphoto" data-imagetype="{{#isdraftfile}}draftfile{{/isdraftfile}}{{^isdraftfile}}tilephoto{{/isdraftfile}}"
               href="{{{phototileediturl}}}" style="background-image: url({{{phototileurl}}});"></a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="tilebarphoto" data-imagetype="';
                $value = $context->find('isdraftfile');
                $buffer .= $this->section6101f1d6daa084e424a485160d916e86($context, $indent, $value);
                $value = $context->find('isdraftfile');
                if (empty($value)) {
                    
                    $buffer .= 'tilephoto';
                }
                $buffer .= '"
';
                $buffer .= $indent . '               href="';
                $value = $this->resolveValue($context->find('phototileediturl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" style="background-image: url(';
                $value = $this->resolveValue($context->find('phototileurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');"></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
