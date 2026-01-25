<?php

class __Mustache_375a358e22a0557a9df6a99dbe0b08fa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex mt-3 text-center" role="presentation">
';
        $value = $context->find('expectedtrend');
        $buffer .= $this->section6d677ff5fd156c28c94d85e708ddee27($context, $indent, $value);
        $buffer .= $indent . '    <span class="chart-legend-element">
';
        $buffer .= $indent . '        <span class="chart-legend-bar-icon mr-1" style="background-image: linear-gradient(90deg, ';
        $value = $this->resolveValue($context->find('unexpectederrorcolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ', ';
        $value = $this->resolveValue($context->find('unexpectederrorcolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' 1.3em, ';
        $value = $this->resolveValue($context->find('allegederrorcolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' 1.3em, ';
        $value = $this->resolveValue($context->find('allegederrorcolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ');"></span>
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section017fac5a20c599dc92b635b795f02f69($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </span>
';
        $value = $context->find('displaydeclaredignorance');
        $buffer .= $this->sectionDd1eca6f63a1a14a51ed90ad8e9698cd($context, $indent, $value);
        $buffer .= $indent . '    <span class="chart-legend-element">
';
        $buffer .= $indent . '        <span class="chart-legend-bar-icon mr-1" style="background-image: linear-gradient(90deg, ';
        $value = $this->resolveValue($context->find('unsureknowledgecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ', ';
        $value = $this->resolveValue($context->find('unsureknowledgecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' 1.3em, ';
        $value = $this->resolveValue($context->find('sureknowledgecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' 1.3em, ';
        $value = $this->resolveValue($context->find('sureknowledgecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ');"></span>
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section387de5aea1440d693a209073035f030e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionBed62e8dd3de07c09e17bc499af8b503(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expectedtrend, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expectedtrend, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d677ff5fd156c28c94d85e708ddee27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="chart-legend-element">
            <span class="d-inline-block align-middle mr-1" style="width: 2em; height: 3px; border-radius: 2px; margin-top: -2px; background-color: {{{color}}}"></span>
            {{# str}} expectedtrend, qbehaviour_certaintywithstudentfbdeferred {{/ str}}
            {{{helpicon}}}
        </span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="chart-legend-element">
';
                $buffer .= $indent . '            <span class="d-inline-block align-middle mr-1" style="width: 2em; height: 3px; border-radius: 2px; margin-top: -2px; background-color: ';
                $value = $this->resolveValue($context->find('color'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"></span>
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionBed62e8dd3de07c09e17bc499af8b503($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('helpicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017fac5a20c599dc92b635b795f02f69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' incorrectanswers, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' incorrectanswers, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbf07f1793a3444966ad19c51b7cf6a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' declaredignoranceplural, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' declaredignoranceplural, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd1eca6f63a1a14a51ed90ad8e9698cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="chart-legend-element">
        <span class="chart-legend-bar-icon mr-1" style="background-color: {{{declaredignorancecolor}}};"></span>
        {{# str}} declaredignoranceplural, qbehaviour_certaintywithstudentfbdeferred {{/ str}}
    </span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="chart-legend-element">
';
                $buffer .= $indent . '        <span class="chart-legend-bar-icon mr-1" style="background-color: ';
                $value = $this->resolveValue($context->find('declaredignorancecolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';"></span>
';
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->sectionBbf07f1793a3444966ad19c51b7cf6a1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section387de5aea1440d693a209073035f030e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' correctanswers, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' correctanswers, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
