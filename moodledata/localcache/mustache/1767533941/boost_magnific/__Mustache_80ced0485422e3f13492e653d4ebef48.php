<?php

class __Mustache_80ced0485422e3f13492e653d4ebef48 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<details>
';
        $buffer .= $indent . '	<summary>
';
        $buffer .= $indent . '	   <h4 class="d-inline" style="vertical-align:sub">';
        $value = $context->find('str');
        $buffer .= $this->section66b5ff231e92db46b4d4ac1da647956b($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '	</summary>
';
        $buffer .= $indent . '	<div class="d-flex">
';
        $buffer .= $indent . '	    <div class="charts-content p-4">
';
        $buffer .= $indent . '	        <div class="d-flex mt-1">
';
        $buffer .= $indent . '	            <div class="d-flex align-items-center justify-content-center" style="flex: 1 1 0; --shape-color: #dedede"><span class="rotated-square-indicator mr-1"></span><span class="ml-2">';
        $value = $context->find('str');
        $buffer .= $this->section082e5907e443d9b10f6011332053d660($context, $indent, $value);
        $buffer .= '</span></div>
';
        $buffer .= $indent . '	            <div class="d-flex align-items-center justify-content-center" style="flex: 1 1 0; --shape-color: #dedede"><span class="circle-indicator"></span><span class="ml-2">';
        $value = $context->find('str');
        $buffer .= $this->section2a3576123d4abfc6e18a988a68713b8c($context, $indent, $value);
        $buffer .= '</span></div>
';
        $buffer .= $indent . '	        </div>
';
        $buffer .= $indent . '	        <hr>
';
        $buffer .= $indent . '	        ';
        $value = $this->resolveValue($context->find('grade_progress_chart'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('qbehaviour_certaintywithstudentfbdeferred/declaredignoranceindicators')) {
            $buffer .= $partial->renderInternal($context, $indent . '	        ');
        }
        $buffer .= $indent . '	        <hr>
';
        $buffer .= $indent . '	        ';
        $value = $this->resolveValue($context->find('lucidity_progress_chart'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('qbehaviour_certaintywithstudentfbdeferred/lucidityindicators')) {
            $buffer .= $partial->renderInternal($context, $indent . '	        ');
        }
        $buffer .= $indent . '	    </div>
';
        $buffer .= $indent . '	    <div id="charts-sidebar-container" hidden="" style="width:33%;position:relative;">
';
        $value = $context->find('attemptsdata');
        $buffer .= $this->sectionFafe651ce2413833383658da7a426065($context, $indent, $value);
        $buffer .= $indent . '	    </div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '</details>
';

        return $buffer;
    }

    private function section66b5ff231e92db46b4d4ac1da647956b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' attemptsevolution, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' attemptsevolution, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section082e5907e443d9b10f6011332053d660(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' thisattempt, qbehaviour_certaintywithstudentfbdeferred, {{attemptnum}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' thisattempt, qbehaviour_certaintywithstudentfbdeferred, ';
                $value = $this->resolveValue($context->find('attemptnum'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a3576123d4abfc6e18a988a68713b8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' otherattempts, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' otherattempts, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFafe651ce2413833383658da7a426065(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	            {{> qbehaviour_certaintywithstudentfbdeferred/charts_sidebar}}
	        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('qbehaviour_certaintywithstudentfbdeferred/charts_sidebar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '	            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
