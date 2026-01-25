<?php

class __Mustache_8a93f5744e4bcd6b0480738c1126355e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('divid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="position-relative ';
        $value = $context->find('general');
        if (empty($value)) {
            
            $buffer .= 'mt-3';
        }
        $buffer .= '">
';
        $buffer .= $indent . '    <label class="w-100 mb-0">
';
        $value = $context->find('general');
        $buffer .= $this->section73596397323a9b9f36648388ef5c5b72($context, $indent, $value);
        $value = $context->find('general');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $context->find('ownattempt');
            $buffer .= $this->section2ee65507bd1afed41a30b2b433b0987d($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        ';
            $value = $context->find('ownattempt');
            if (empty($value)) {
                
                $value = $context->find('str');
                $buffer .= $this->section6d33c487a7d23531fbf9067921597fc9($context, $indent, $value);
            }
            $buffer .= '
';
        }
        $buffer .= $indent . '        <textarea class="form-control" disabled="disabled" data-value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-populated="';
        $value = $context->find('value');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        $value = $context->find('value');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '">';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</textarea>
';
        $buffer .= $indent . '    </label>
';
        $value = $context->find('ownattempt');
        $buffer .= $this->sectionB191759b14400e7fcb079e4a5332b079($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionA665931f95d6063cf50deb581f75b9a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' yourgeneralfeedback, qbehaviour_studentfeedbackdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' yourgeneralfeedback, qbehaviour_studentfeedbackdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0cb914931795c0f5186f8a74bf3fddf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{# str}} yourgeneralfeedback, qbehaviour_studentfeedbackdeferred {{/ str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionA665931f95d6063cf50deb581f75b9a8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB500217be4e7a8c1414c5ea3563ab5b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' studentsgeneralfeedback, qbehaviour_studentfeedbackdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' studentsgeneralfeedback, qbehaviour_studentfeedbackdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73596397323a9b9f36648388ef5c5b72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{# ownattempt}}{{# str}} yourgeneralfeedback, qbehaviour_studentfeedbackdeferred {{/ str}}{{/ ownattempt}}
        {{^ ownattempt}}{{# str}} studentsgeneralfeedback, qbehaviour_studentfeedbackdeferred {{/ str}}{{/ ownattempt}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $context->find('ownattempt');
                $buffer .= $this->sectionB0cb914931795c0f5186f8a74bf3fddf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                $value = $context->find('ownattempt');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->sectionB500217be4e7a8c1414c5ea3563ab5b3($context, $indent, $value);
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section469ae938340ad7319f6e04e96ee5be6d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' yourfeedback, qbehaviour_studentfeedbackdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' yourfeedback, qbehaviour_studentfeedbackdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ee65507bd1afed41a30b2b433b0987d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{# str}} yourfeedback, qbehaviour_studentfeedbackdeferred {{/ str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section469ae938340ad7319f6e04e96ee5be6d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d33c487a7d23531fbf9067921597fc9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' studentsfeedback, qbehaviour_studentfeedbackdeferred ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' studentsfeedback, qbehaviour_studentfeedbackdeferred ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD443824d679dd5686a503494e869f18b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mb-2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'mb-2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9421aacc9941bd2f404ffad17b33061f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' submit ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' submit ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48889b9f3f273ba8c7c463afc8a04b66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancel ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cancel ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a58bd3b46eea9f9784c07a37fbde3e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' edit ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' edit ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB191759b14400e7fcb079e4a5332b079(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="float-right mt-2 {{# general}}mb-2{{/ general}}">
        <button type="button" class="btn btn-primary" style="display: none;" data-role="submit-feedback" tabindex=0>{{# str}} submit {{/ str}}</button>
        <button type="button" class="btn btn-secondary ml-1" style="display: none;" data-role="cancel-feedback" tabindex=0>{{# str}} cancel {{/ str}}</button>
    </div>
    <button type="button" class="btn btn-link position-absolute" style="top: 1.3em; right: 0; display: none;" data-role="edit-feedback">{{# str}} edit {{/ str}}</button>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="float-right mt-2 ';
                $value = $context->find('general');
                $buffer .= $this->sectionD443824d679dd5686a503494e869f18b($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <button type="button" class="btn btn-primary" style="display: none;" data-role="submit-feedback" tabindex=0>';
                $value = $context->find('str');
                $buffer .= $this->section9421aacc9941bd2f404ffad17b33061f($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '        <button type="button" class="btn btn-secondary ml-1" style="display: none;" data-role="cancel-feedback" tabindex=0>';
                $value = $context->find('str');
                $buffer .= $this->section48889b9f3f273ba8c7c463afc8a04b66($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <button type="button" class="btn btn-link position-absolute" style="top: 1.3em; right: 0; display: none;" data-role="edit-feedback">';
                $value = $context->find('str');
                $buffer .= $this->section9a58bd3b46eea9f9784c07a37fbde3e5($context, $indent, $value);
                $buffer .= '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
