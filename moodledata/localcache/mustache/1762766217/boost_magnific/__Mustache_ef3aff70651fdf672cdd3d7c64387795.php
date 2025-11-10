<?php

class __Mustache_ef3aff70651fdf672cdd3d7c64387795 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="col d-flex px-0 mb-2">
';
        $buffer .= $indent . '    <div class="card course-card mx-1"
';
        $buffer .= $indent . '         role="listitem" data-region="course-content" data-course-id="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" tabindex="-1">
';
        $buffer .= $indent . '            <div class="card-img-top">
';
        $buffer .= $indent . '                <div class="background-image"
';
        $buffer .= $indent . '                     style="background-image: url(\'';
        $value = $this->resolveValue($context->find('courseimage'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '\');"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <div class="card-body pe-1 course-info-container pt-2" id="course-info-container-';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '-3">
';
        $buffer .= $indent . '            <div class="d-flex align-items-start">
';
        $buffer .= $indent . '                <div class="w-100 text-truncate">
';
        $buffer .= $indent . '                    <a href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                       class="aalink coursename me-2 mb-1">
';
        $buffer .= $indent . '                        <span class="sr-only">';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('shortentext');
        $buffer .= $this->section4cfe253abc2f427eb3ff668c1a825ace($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('has_enrolment_icons');
        $buffer .= $this->sectionB2a2bae95bef9106c5c7824e42806c97($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section4cfe253abc2f427eb3ff668c1a825ace(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '55, {{{fullname}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '55, ';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14d2f9d31ce4893245c7bd1a437db4ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{.}}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2a2bae95bef9106c5c7824e42806c97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-flex align-items-start">
                {{#enrolment_icons}}
                    {{{.}}}
                {{/enrolment_icons}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-flex align-items-start">
';
                $value = $context->find('enrolment_icons');
                $buffer .= $this->section14d2f9d31ce4893245c7bd1a437db4ca($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
