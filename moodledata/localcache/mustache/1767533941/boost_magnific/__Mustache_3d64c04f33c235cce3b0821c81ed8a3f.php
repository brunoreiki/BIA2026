<?php

class __Mustache_3d64c04f33c235cce3b0821c81ed8a3f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table class="generaltable mt-1">
';
        $buffer .= $indent . '    <tr>
';
        $buffer .= $indent . '        <th class="cell" scope="row">';
        $value = $context->find('str');
        $buffer .= $this->sectionE4473c59dc1ba7eaef2eef22b4dff599($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        <td class="cell">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->sectionB9a44a76716b8d442f4508643416b24e($context, $indent, $value);
        $buffer .= '<br>
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->sectionCd53ccfd50fc17fe2d48b17ef53c4713($context, $indent, $value);
        $buffer .= '<br>
';
        $value = $context->find('hasdeclaredignorance');
        $buffer .= $this->section1d1075c45cef01ceb63e9ce275c051fb($context, $indent, $value);
        $value = $context->find('nnotanswered');
        $buffer .= $this->sectionBfa194076f33cb3a29574f377d36cf86($context, $indent, $value);
        $value = $context->find('nnocertainty');
        $buffer .= $this->section619db6e1aa60ea5e8eae3ce527b8a901($context, $indent, $value);
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '    <tr>
';
        $buffer .= $indent . '        <th class="cell" scope="row">';
        $value = $context->find('str');
        $buffer .= $this->section00be8b8b9c3ea10194bfa083554dc1af($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        <td class="cell d-flex flex-row">
';
        $buffer .= $indent . '            <div>
';
        $value = $context->find('hasdeclaredignorance');
        $buffer .= $this->section85c493dca76aebefdded451d93205d1e($context, $indent, $value);
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionC56874ec5778baea212562d8eebd7de6($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('confidencerate_help'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '<br>
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionC4bab2672e727e0021c4980875987a44($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('imprudencerate_help'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '<br>
';
        $buffer .= $indent . '                <span class="lucidity-indicator">';
        $value = $context->find('str');
        $buffer .= $this->section236521fe04847e4228e706587da43104($context, $indent, $value);
        $buffer .= '</span> ';
        $value = $this->resolveValue($context->find('lucidityindex_help'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $context->find('showluciditydisclaimer');
        $buffer .= $this->section5652bd93d2ab17ea0f5449b41ec2d81c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $value = $context->find('linktoreport');
        $buffer .= $this->sectionD6e31317a686252dd03aeea842b56b21($context, $indent, $value);
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '</table>
';

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

    private function sectionB9a44a76716b8d442f4508643416b24e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ncorrectanswers, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">{{nrightanswers}} / {{nquestions}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ncorrectanswers, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">';
                $value = $this->resolveValue($context->find('nrightanswers'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('nquestions'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd53ccfd50fc17fe2d48b17ef53c4713(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nincorrectanswers, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">{{nwronganswers}} / {{nquestions}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nincorrectanswers, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">';
                $value = $this->resolveValue($context->find('nwronganswers'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('nquestions'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0b8a698e51e057d6ec8b35538418b15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ndeclaredignorance, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">{{ndeclaredignorance}} / {{nquestions}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ndeclaredignorance, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">';
                $value = $this->resolveValue($context->find('ndeclaredignorance'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('nquestions'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d1075c45cef01ceb63e9ce275c051fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{# str}} ndeclaredignorance, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">{{ndeclaredignorance}} / {{nquestions}}</span> {{/ str}}<br>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionB0b8a698e51e057d6ec8b35538418b15($context, $indent, $value);
                $buffer .= '<br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a7b3247c8e0ba0aab3e14e6bcc0f915(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' warning ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' warning ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section995c255c7b503eb282503e8df426f9fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nnotanswered, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">{{nnotanswered}} / {{nquestions}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nnotanswered, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">';
                $value = $this->resolveValue($context->find('nnotanswered'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('nquestions'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfa194076f33cb3a29574f377d36cf86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <i class="icon fa fa-warning text-warning" title="{{# str}} warning {{/ str}}"></i>{{# str}} nnotanswered, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">{{nnotanswered}} / {{nquestions}}</span> {{/ str}}<br>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <i class="icon fa fa-warning text-warning" title="';
                $value = $context->find('str');
                $buffer .= $this->section7a7b3247c8e0ba0aab3e14e6bcc0f915($context, $indent, $value);
                $buffer .= '"></i>';
                $value = $context->find('str');
                $buffer .= $this->section995c255c7b503eb282503e8df426f9fe($context, $indent, $value);
                $buffer .= '<br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1fd6d3d283da24246e03938c6c98b7fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nnocertainty, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">{{nnocertainty}} / {{nquestions}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nnocertainty, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">';
                $value = $this->resolveValue($context->find('nnocertainty'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('nquestions'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section619db6e1aa60ea5e8eae3ce527b8a901(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <i class="icon fa fa-warning text-warning" title="{{# str}} warning {{/ str}}"></i>{{# str}} nnocertainty, qbehaviour_certaintywithstudentfbdeferred, <span class="numanswers">{{nnocertainty}} / {{nquestions}}</span> {{/ str}}<br>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <i class="icon fa fa-warning text-warning" title="';
                $value = $context->find('str');
                $buffer .= $this->section7a7b3247c8e0ba0aab3e14e6bcc0f915($context, $indent, $value);
                $buffer .= '"></i>';
                $value = $context->find('str');
                $buffer .= $this->section1fd6d3d283da24246e03938c6c98b7fa($context, $indent, $value);
                $buffer .= '<br>
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

    private function section313111d62d2ef448cf039728779bd938(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' declaredignoranceratea, qbehaviour_certaintywithstudentfbdeferred, <span class="indicator">{{declaredignorancerate}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' declaredignoranceratea, qbehaviour_certaintywithstudentfbdeferred, <span class="indicator">';
                $value = $this->resolveValue($context->find('declaredignorancerate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85c493dca76aebefdded451d93205d1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{# str}} declaredignoranceratea, qbehaviour_certaintywithstudentfbdeferred, <span class="indicator">{{declaredignorancerate}}</span> {{/ str}} {{{declaredignorancerate_help}}}<br>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section313111d62d2ef448cf039728779bd938($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('declaredignorancerate_help'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '<br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC56874ec5778baea212562d8eebd7de6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' confidenceratea, qbehaviour_certaintywithstudentfbdeferred, <span class="indicator">{{confidencerate}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' confidenceratea, qbehaviour_certaintywithstudentfbdeferred, <span class="indicator">';
                $value = $this->resolveValue($context->find('confidencerate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4bab2672e727e0021c4980875987a44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' imprudenceratea, qbehaviour_certaintywithstudentfbdeferred, <span class="indicator">{{imprudencerate}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' imprudenceratea, qbehaviour_certaintywithstudentfbdeferred, <span class="indicator">';
                $value = $this->resolveValue($context->find('imprudencerate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section236521fe04847e4228e706587da43104(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lucidityindexa, qbehaviour_certaintywithstudentfbdeferred, <span class="indicator">{{lucidityindex}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lucidityindexa, qbehaviour_certaintywithstudentfbdeferred, <span class="indicator">';
                $value = $this->resolveValue($context->find('lucidityindex'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26d63272483cb4ce18cee6880acf7fe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lucidityindexdisclaimer, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lucidityindexdisclaimer, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5652bd93d2ab17ea0f5449b41ec2d81c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<br><i class="icon fa fa-exclamation-circle text-info" role="presentation"></i>{{# str}} lucidityindexdisclaimer, qbehaviour_certaintywithstudentfbdeferred {{/ str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<br><i class="icon fa fa-exclamation-circle text-info" role="presentation"></i>';
                $value = $context->find('str');
                $buffer .= $this->section26d63272483cb4ce18cee6880acf7fe4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd74dbf0289adf7ed4a4cd2a4f9a5da3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' viewcoursereport, qbehaviour_certaintywithstudentfbdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' viewcoursereport, qbehaviour_certaintywithstudentfbdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6e31317a686252dd03aeea842b56b21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="align-content-center ml-4">
                <a href="{{{.}}}" class="btn btn-secondary">{{# str}} viewcoursereport, qbehaviour_certaintywithstudentfbdeferred {{/ str}}</a>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="align-content-center ml-4">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-secondary">';
                $value = $context->find('str');
                $buffer .= $this->sectionAd74dbf0289adf7ed4a4cd2a4f9a5da3($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
