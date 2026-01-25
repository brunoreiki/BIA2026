<?php

class __Mustache_b56dcd0918d4f1445f8f630d9401b14f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block2905e238e41ce505642c23291f2c1096'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionCc48dcea9d2838da4d0362b228628420(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'is-invalid';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'is-invalid';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcc7eee5f84f54609b55ea286289d725(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' readonly ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' readonly ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c20bc1d85fbd0d76a1dc8e622b91e99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' autofocus aria-describedby="{{{element.iderror}}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' autofocus aria-describedby="';
                $value = $this->resolveValue($context->findDot('element.iderror'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb45b6ba76060b39161b0153ea16fb42(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-required="true" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria-required="true" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0456df008114280c7908271e554ab4e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskrevealhint, form ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' passwordunmaskrevealhint, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1667a21b88c22dac36577c7b6bb67df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hide ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hide ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block2905e238e41ce505642c23291f2c1096($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div id="form-password-eye-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="d-flex align-items-center">
';
        $buffer .= $indent . '                <input type="password"
';
        $buffer .= $indent . '                       id="';
        $value = $this->resolveValue($context->findDot('element.id'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                       value="';
        $value = $this->resolveValue($context->findDot('element.value'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                       class="form-control ';
        $value = $context->find('error');
        $buffer .= $this->sectionCc48dcea9d2838da4d0362b228628420($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                       placeholder="**********"
';
        $buffer .= $indent . '                       data-size="';
        $value = $this->resolveValue($context->findDot('element.size'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                       ';
        $value = $context->findDot('element.frozen');
        $buffer .= $this->sectionBcc7eee5f84f54609b55ea286289d725($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                       ';
        $value = $context->findDot('element.hardfrozen');
        if (empty($value)) {
            
            $buffer .= ' name="';
            $value = $this->resolveValue($context->findDot('element.name'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" ';
        }
        $buffer .= '
';
        $buffer .= $indent . '                       ';
        $value = $context->find('error');
        $buffer .= $this->section1c20bc1d85fbd0d76a1dc8e622b91e99($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                       ';
        $value = $context->find('required');
        $buffer .= $this->sectionCb45b6ba76060b39161b0153ea16fb42($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                       ';
        $value = $this->resolveValue($context->findDot('element.attributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '                <button type="button"
';
        $buffer .= $indent . '                        id="form-password-eye-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        class="btn btn-outline-secondary toggle-password h-100 ms-2"
';
        $buffer .= $indent . '                        tabindex="-1"
';
        $buffer .= $indent . '                        aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section0456df008114280c7908271e554ab4e3($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <i class="fa fa-eye"></i>
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <script>
';
        $buffer .= $indent . '            document.getElementById("form-password-eye-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '").addEventListener("click", function (e) {
';
        $buffer .= $indent . '                if (e.target.closest(".toggle-password")) {
';
        $buffer .= $indent . '                    const btn = e.target.closest(".toggle-password");
';
        $buffer .= $indent . '                    const input = btn.parentElement.querySelector("input");
';
        $buffer .= $indent . '                    const icon = btn.querySelector("i");
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    if (input.type === "password") {
';
        $buffer .= $indent . '                        input.type = "text";
';
        $buffer .= $indent . '                        icon.classList.remove("fa-eye");
';
        $buffer .= $indent . '                        icon.classList.remove("fa-eye");
';
        $buffer .= $indent . '                        icon.classList.add("fa-eye-slash");
';
        $buffer .= $indent . '                        btn.classList.remove("btn-outline-secondary")
';
        $buffer .= $indent . '                        btn.classList.add("btn-secondary");
';
        $buffer .= $indent . '                        btn.setAttribute("aria-label", "';
        $value = $context->find('str');
        $buffer .= $this->sectionF1667a21b88c22dac36577c7b6bb67df($context, $indent, $value);
        $buffer .= '");
';
        $buffer .= $indent . '                    } else {
';
        $buffer .= $indent . '                        input.type = "password";
';
        $buffer .= $indent . '                        icon.classList.remove("fa-eye-slash");
';
        $buffer .= $indent . '                        icon.classList.add("fa-eye");
';
        $buffer .= $indent . '                        btn.classList.remove("btn-secondary");
';
        $buffer .= $indent . '                        btn.classList.add("btn-outline-secondary")
';
        $buffer .= $indent . '                        btn.setAttribute("aria-label", "';
        $value = $context->find('str');
        $buffer .= $this->section0456df008114280c7908271e554ab4e3($context, $indent, $value);
        $buffer .= '");
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '                }
';
        $buffer .= $indent . '            });
';
        $buffer .= $indent . '        </script>
';
    
        return $buffer;
    }
}
