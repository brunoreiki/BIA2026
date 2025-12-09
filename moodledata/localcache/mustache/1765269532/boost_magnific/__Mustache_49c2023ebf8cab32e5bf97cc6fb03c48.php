<?php

class __Mustache_49c2023ebf8cab32e5bf97cc6fb03c48 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="tertiary-navigation d-flex justify-content-center border-bottom">
';
        $buffer .= $indent . '    <form method="get" class="row">
';
        $buffer .= $indent . '        <input type="hidden" name="courseid" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <input type="hidden" name="report" value="';
        $value = $this->resolveValue($context->find('report'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('selectors');
        $buffer .= $this->section818346977db88b333cc869cedd99d084($context, $indent, $value);
        $buffer .= $indent . '	    <div class="navitem-divider"></div>
';
        $buffer .= $indent . '	    <div class="navitem">
';
        $buffer .= $indent . '	        <input type="submit" value="';
        $value = $context->find('str');
        $buffer .= $this->sectionCcd25cc1479e8bb63945e84015765508($context, $indent, $value);
        $buffer .= '" class="btn btn-outline-success px-6">
';
        $buffer .= $indent . '	    </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section818346977db88b333cc869cedd99d084(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="navitem align-items-center" style="grid-gap:.3em;">
            {{{.}}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="navitem align-items-center" style="grid-gap:.3em;">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCcd25cc1479e8bb63945e84015765508(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' show ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
