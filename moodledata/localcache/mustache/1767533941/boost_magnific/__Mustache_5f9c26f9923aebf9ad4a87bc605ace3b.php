<?php

class __Mustache_5f9c26f9923aebf9ad4a87bc605ace3b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('showskiplink');
        $buffer .= $this->section70836edc389d16ed89b7f47223f43527($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<section id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '     class="';
        $value = $context->find('hidden');
        $buffer .= $this->section9a7fc588e5e2ac7453379d33a752316e($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' ';
        $value = $context->find('hascontrols');
        $buffer .= $this->section12f3cb4be977f05616300fd1301c564b($context, $indent, $value);
        $buffer .= ' card mb-3"
';
        $buffer .= $indent . '     role="';
        $value = $this->resolveValue($context->find('ariarole'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '     data-block="';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '     data-instance-id="';
        $value = $this->resolveValue($context->find('blockinstanceid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $value = $context->find('arialabel');
        $buffer .= $this->sectionEb72ade5b3ef4ff787a382edbddc1672($context, $indent, $value);
        $value = $context->find('arialabel');
        if (empty($value)) {
            
            $value = $context->find('title');
            $buffer .= $this->section671c7d4d63540c78e30ba29dc270a7e0($context, $indent, $value);
            $buffer .= $indent . '     ';
        }
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $value = $context->find('title');
        $buffer .= $this->sectionE2f67a942ca93b0647c41d9f678b9fb0($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="card-body p-3">
';
        $value = $context->find('hascontrols');
        $buffer .= $this->sectionCb9f54e0db96522b5f23c9e984d909fa($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="card-text content mt-3">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <div class="footer">';
        $value = $this->resolveValue($context->find('footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('annotation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '
';
        $value = $context->find('showskiplink');
        $buffer .= $this->sectionBd6f9b66d650ab77724416154d972315($context, $indent, $value);

        return $buffer;
    }

    private function sectionBe3d023555afc33fa231c38a8a50c680(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'skipa, access, {{{title}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'skipa, access, ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70836edc389d16ed89b7f47223f43527(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <a href="#sb-{{{skipid}}}" class="sr-only sr-only-focusable">{{#str}}skipa, access, {{{title}}}{{/str}}</a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <a href="#sb-';
                $value = $this->resolveValue($context->find('skipid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="sr-only sr-only-focusable">';
                $value = $context->find('str');
                $buffer .= $this->sectionBe3d023555afc33fa231c38a8a50c680($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a7fc588e5e2ac7453379d33a752316e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hidden';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12f3cb4be977f05616300fd1301c564b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'block_with_controls';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'block_with_controls';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb72ade5b3ef4ff787a382edbddc1672(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        aria-label="{{{arialabel}}}"
     ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        aria-label="';
                $value = $this->resolveValue($context->find('arialabel'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section671c7d4d63540c78e30ba29dc270a7e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          aria-labelledby="instance-{{{blockinstanceid}}}-header"
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          aria-labelledby="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '-header"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2f67a942ca93b0647c41d9f678b9fb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="card-header">
            <h3 id="instance-{{{blockinstanceid}}}-header" class="h5 card-title d-inline">{{{title}}}</h3>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="card-header">
';
                $buffer .= $indent . '            <h3 id="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '-header" class="h5 card-title d-inline">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb9f54e0db96522b5f23c9e984d909fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="block-controls float-end header">
                {{{controls}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="block-controls float-end header">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('controls'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd6f9b66d650ab77724416154d972315(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <span id="sb-{{{skipid}}}"></span>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <span id="sb-';
                $value = $this->resolveValue($context->find('skipid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
