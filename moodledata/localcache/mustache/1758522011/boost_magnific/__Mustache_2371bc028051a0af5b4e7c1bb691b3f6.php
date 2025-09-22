<?php

class __Mustache_2371bc028051a0af5b4e7c1bb691b3f6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="sticky-footer"
';
        $buffer .= $indent . '     class="stickyfooter bg-white border-top"
';
        $blockFunction = $context->findInBlock('disable');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '         ';
            $value = $context->find('disable');
            $buffer .= $this->section352d85d73c1735100321ca105f9cdac8($context, $indent, $value);
            $buffer .= '
';
        }
        $blockFunction = $context->findInBlock('extradata');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('extras');
            $buffer .= $this->sectionBdb32d628e505a2ae4a7acd837c9e1fb($context, $indent, $value);
            $buffer .= $indent . '     ';
        }
        $buffer .= ' >
';
        $buffer .= $indent . '    <div class="sticky-footer-content-wrapper h-100 d-flex justify-content-center">
';
        $buffer .= $indent . '        <div class="sticky-footer-content w-100 d-flex align-items-center px-3 py-2
';
        $buffer .= $indent . '             ';
        $blockFunction = $context->findInBlock('stickyclasses');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('stickyclasses');
            $buffer .= $this->sectionDca53b6bd0a9060bad88fe2969772398($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '             ';
            $value = $context->find('stickyclasses');
            if (empty($value)) {
                
                $buffer .= 'justify-content-end';
            }
            $buffer .= '
';
            $buffer .= $indent . '             ';
        }
        $buffer .= '" >
';
        $blockFunction = $context->findInBlock('stickycontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('stickycontent'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section862647a1585fcc77e6c1be23b3db9540($context, $indent, $value);

        return $buffer;
    }

    private function section352d85d73c1735100321ca105f9cdac8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-disable="true" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-disable="true" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBdb32d628e505a2ae4a7acd837c9e1fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
             {{{attribute}}}="{{{value}}}"
         ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '             ';
                $value = $this->resolveValue($context->find('attribute'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDca53b6bd0a9060bad88fe2969772398(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
             {{{stickyclasses}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '             ';
                $value = $this->resolveValue($context->find('stickyclasses'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section862647a1585fcc77e6c1be23b3db9540(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require(["theme_boost/sticky-footer"], function(footer) {
        footer.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require(["theme_boost/sticky-footer"], function(footer) {
';
                $buffer .= $indent . '        footer.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
