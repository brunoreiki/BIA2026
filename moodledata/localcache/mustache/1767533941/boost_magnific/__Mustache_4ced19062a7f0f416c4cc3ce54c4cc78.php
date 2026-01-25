<?php

class __Mustache_4ced19062a7f0f416c4cc3ce54c4cc78 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="charts-sidebar" hidden="" data-role="charts-sidebar" data-attemptnum="';
        $value = $this->resolveValue($context->find('attemptnum'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" style="position: sticky; top: 10vh;">
';
        $buffer .= $indent . '    <div class="charts-sidebar-menu p-2 border border-dark mx-auto">
';
        $buffer .= $indent . '        <div>';
        $value = $this->resolveValue($context->find('attempttitle'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '        <hr class="my-2">
';
        $buffer .= $indent . '        <div class="d-flex">
';
        $buffer .= $indent . '            <div class="my-auto mr-3 ';
        $value = $this->resolveValue($context->find('cssshape'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-indicator" style="--shape-color:';
        $value = $this->resolveValue($context->find('ignorancerateindicatorcolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></div>
';
        $buffer .= $indent . '            <div>
';
        $value = $context->find('hasdeclaredignorance');
        $buffer .= $this->sectionB318d868dbdc9f334b281354a674adb0($context, $indent, $value);
        $buffer .= $indent . '                <div>';
        $value = $context->find('str');
        $buffer .= $this->sectionAeb8ee563d157fe6abc06c293d3a7b1e($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <hr class="my-2">
';
        $buffer .= $indent . '        <div class="mb-2">
';
        $buffer .= $indent . '            <div><b>';
        $value = $context->find('str');
        $buffer .= $this->sectionE4473c59dc1ba7eaef2eef22b4dff599($context, $indent, $value);
        $buffer .= '</b></div>
';
        $buffer .= $indent . '            <div class="mt-1 pl-3 indicators-grid">
';
        $buffer .= $indent . '                <span>';
        $value = $context->find('str');
        $buffer .= $this->sectionCdf372bf002398e5ace54effd288f0a2($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span>';
        $value = $this->resolveValue($context->find('nright'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/';
        $value = $this->resolveValue($context->find('questioncount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span>';
        $value = $context->find('str');
        $buffer .= $this->section4bdaa6e751a290075a3ed3556371f82b($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span>';
        $value = $this->resolveValue($context->find('nwrong'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/';
        $value = $this->resolveValue($context->find('questioncount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $value = $context->find('hasdeclaredignorance');
        $buffer .= $this->section39df789c107cdb329dc7041a5d9a6ead($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="mb-2">
';
        $buffer .= $indent . '            <div><b>';
        $value = $context->find('str');
        $buffer .= $this->section00be8b8b9c3ea10194bfa083554dc1af($context, $indent, $value);
        $buffer .= '</b></div>
';
        $buffer .= $indent . '            <div class="mt-1 pl-3 indicators-grid">
';
        $buffer .= $indent . '                <span>';
        $value = $context->find('str');
        $buffer .= $this->section1c2a92e5ee66b61ec3e7a18226cef702($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span>';
        $value = $this->resolveValue($context->find('confidencerate'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span>';
        $value = $context->find('str');
        $buffer .= $this->section6c3714830b2da69b71b231298dc8d2f6($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span>';
        $value = $this->resolveValue($context->find('imprudencerate'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <hr class="my-3">
';
        $buffer .= $indent . '        <div class="d-flex">
';
        $buffer .= $indent . '            <div class="my-auto mr-3 ';
        $value = $this->resolveValue($context->find('cssshape'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-indicator" style="--shape-color:';
        $value = $this->resolveValue($context->find('lucidityindicatorcolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></div>
';
        $buffer .= $indent . '            <div>
';
        $buffer .= $indent . '                <div>';
        $value = $this->resolveValue($context->find('lucidityindicatorlabel'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '                <div>
';
        $buffer .= $indent . '                    <b>';
        $value = $context->find('str');
        $buffer .= $this->sectionDb389e920677c114f354c6ed060e7041($context, $indent, $value);
        $buffer .= '</b>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <hr class="my-3">
';
        $buffer .= $indent . '        <div class="text-center">
';
        $buffer .= $indent . '            <a href="';
        $value = $this->resolveValue($context->find('attempturl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="btn btn-secondary ';
        $value = $context->find('iscurrentattempt');
        $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section97c79a94c6cfbef19417431ca3bcf466($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionBc935dc3e5a5af092375a95bd612a58f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' declaredignoranceratea, qbehaviour_certaintywithstudentfbdeferred, {{declaredignorancerate}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' declaredignoranceratea, qbehaviour_certaintywithstudentfbdeferred, ';
                $value = $this->resolveValue($context->find('declaredignorancerate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB318d868dbdc9f334b281354a674adb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>{{# str}} declaredignoranceratea, qbehaviour_certaintywithstudentfbdeferred, {{declaredignorancerate}} {{/ str}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>';
                $value = $context->find('str');
                $buffer .= $this->sectionBc935dc3e5a5af092375a95bd612a58f($context, $indent, $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAeb8ee563d157fe6abc06c293d3a7b1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeover100a, qbehaviour_certaintywithstudentfbdeferred, {{gradeover100}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeover100a, qbehaviour_certaintywithstudentfbdeferred, ';
                $value = $this->resolveValue($context->find('gradeover100'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4473c59dc1ba7eaef2eef22b4dff599(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' answersrepartition, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' answersrepartition, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCdf372bf002398e5ace54effd288f0a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ncorrectanswers, qbehaviour_certaintywithstudentfbdeferred,  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ncorrectanswers, qbehaviour_certaintywithstudentfbdeferred,  ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bdaa6e751a290075a3ed3556371f82b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nincorrectanswers, qbehaviour_certaintywithstudentfbdeferred,  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nincorrectanswers, qbehaviour_certaintywithstudentfbdeferred,  ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCdee8419a20e6f34c7c7876eb6b1de8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ndeclaredignorance, qbehaviour_certaintywithstudentfbdeferred,  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ndeclaredignorance, qbehaviour_certaintywithstudentfbdeferred,  ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39df789c107cdb329dc7041a5d9a6ead(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span>{{# str}} ndeclaredignorance, qbehaviour_certaintywithstudentfbdeferred,  {{/ str}}</span>
                    <span>{{nrandom}}/{{questioncount}}</span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span>';
                $value = $context->find('str');
                $buffer .= $this->sectionCdee8419a20e6f34c7c7876eb6b1de8c($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <span>';
                $value = $this->resolveValue($context->find('nrandom'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/';
                $value = $this->resolveValue($context->find('questioncount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00be8b8b9c3ea10194bfa083554dc1af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' metacognitiveindicators, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' metacognitiveindicators, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c2a92e5ee66b61ec3e7a18226cef702(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' confidenceratea, qbehaviour_certaintywithstudentfbdeferred,  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' confidenceratea, qbehaviour_certaintywithstudentfbdeferred,  ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c3714830b2da69b71b231298dc8d2f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' imprudenceratea, qbehaviour_certaintywithstudentfbdeferred,  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' imprudenceratea, qbehaviour_certaintywithstudentfbdeferred,  ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb389e920677c114f354c6ed060e7041(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lucidityindexa, qbehaviour_certaintywithstudentfbdeferred, {{lucidityindex}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lucidityindexa, qbehaviour_certaintywithstudentfbdeferred, ';
                $value = $this->resolveValue($context->find('lucidityindex'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97c79a94c6cfbef19417431ca3bcf466(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showthatattempt, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showthatattempt, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
