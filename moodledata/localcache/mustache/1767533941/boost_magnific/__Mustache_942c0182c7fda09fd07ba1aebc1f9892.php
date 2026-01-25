<?php

class __Mustache_942c0182c7fda09fd07ba1aebc1f9892 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    ';
        $value = $context->find('str');
        $buffer .= $this->sectionA963fbfdf7b7a78fd4638e043b9c9a49($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('addprompt');
        $buffer .= $this->section749b90957c1085f997b336f4f2b2b419($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<table class="qbehaviour_certaintywithstudentfbdeferred-certaintytable">
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $value = $context->find('certaintylevels');
        $buffer .= $this->section3c1bd7af8af98b9c9902ba412e65d508($context, $indent, $value);
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        $buffer .= $indent . '        <tr>
';
        $value = $context->find('certaintylevels');
        $buffer .= $this->section445da87e2f080adfbf3ae2be460488b9($context, $indent, $value);
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>';

        return $buffer;
    }

    private function sectionA963fbfdf7b7a78fd4638e043b9c9a49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' whatisyourcertaintylevel, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' whatisyourcertaintylevel, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c6b9ddb589731914387b60d31657c84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pleaseselectcertainty, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pleaseselectcertainty, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section749b90957c1085f997b336f4f2b2b419(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="validationerror">{{# str}} pleaseselectcertainty, qbehaviour_certaintywithstudentfbdeferred {{/ str}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="validationerror">';
                $value = $context->find('str');
                $buffer .= $this->section9c6b9ddb589731914387b60d31657c84($context, $indent, $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c1bd7af8af98b9c9902ba412e65d508(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <th class="px-1"><label for="{{controlname}}_level{{i}}">{{{name}}}</label></th>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <th class="px-1"><label for="';
                $value = $this->resolveValue($context->find('controlname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '_level';
                $value = $this->resolveValue($context->find('i'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</label></th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2eb10691007c92bdff260da6f5c039fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled="disabled"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled="disabled"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE262a41669da4e6e3b97fcdc38c27010(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'font-weight-bold';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'font-weight-bold';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa1c9f4432b6390306a01ab7731b048b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{# checked}}font-weight-bold{{/ checked}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('checked');
                $buffer .= $this->sectionE262a41669da4e6e3b97fcdc38c27010($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section445da87e2f080adfbf3ae2be460488b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <td class="px-1">
                <input id="{{controlname}}_level{{i}}" type="radio" name="{{controlname}}" value="{{i}}" {{# readonly}}disabled="disabled"{{/ readonly}} {{# checked}}checked="checked"{{/ checked}}>
                <label for="{{controlname}}_level{{i}}" class="mx-1 {{# readonly}}{{# checked}}font-weight-bold{{/ checked}}{{/ readonly}}">{{{percentage}}}</label>
            </td>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <td class="px-1">
';
                $buffer .= $indent . '                <input id="';
                $value = $this->resolveValue($context->find('controlname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '_level';
                $value = $this->resolveValue($context->find('i'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" type="radio" name="';
                $value = $this->resolveValue($context->find('controlname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('i'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('readonly');
                $buffer .= $this->section2eb10691007c92bdff260da6f5c039fd($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('checked');
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <label for="';
                $value = $this->resolveValue($context->find('controlname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '_level';
                $value = $this->resolveValue($context->find('i'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="mx-1 ';
                $value = $context->find('readonly');
                $buffer .= $this->sectionBa1c9f4432b6390306a01ab7731b048b($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('percentage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '            </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
