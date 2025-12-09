<?php

class __Mustache_d476a7a8c481e60e63b62127b6b2c388 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('section_zero_show');
        $buffer .= $this->section1f4ca4fb1781df46ec3d2c4def95f773($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('hasabovetilescontrols');
        $buffer .= $this->sectionF6a1d787f37728f7470724f3599f789d($context, $indent, $value);

        return $buffer;
    }

    private function sectionC52e92585e0c298567c42f9c762ae7bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closetopsection, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closetopsection, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c384c125e304912e4aa4f286246f4f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'close, format_tiles, {{#str}}closetopsection, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'close, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->sectionC52e92585e0c298567c42f9c762ae7bd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93ea0cff72c01e5394823a89f199e7cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expandtopsection, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'expandtopsection, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c7f89162282c2ef7fdbadc4c3b09f4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expand, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'expand, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c71b497be2eade6894cdb87acac9468(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sort, format_tiles, {{#str}}expand, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sort, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->section3c7f89162282c2ef7fdbadc4c3b09f4b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36d3779dc807a8ea050eb3882fdda348(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <button class="sectionbutton buttonhidesec0 open float-end ms-1" data-section="0">
        <span class="sec-zero-open-icon justify-content-center align-items-center h-100" title="{{#str}}closetopsection, format_tiles{{/str}}">
            {{#pix}}close, format_tiles, {{#str}}closetopsection, format_tiles{{/str}}{{/pix}}
        </span>
        <span class="sec-zero-closed-icon justify-content-center align-items-center h-100" title="{{#str}}expandtopsection, format_tiles{{/str}}">
            {{#pix}}sort, format_tiles, {{#str}}expand, format_tiles{{/str}}{{/pix}}
        </span>

    </button>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <button class="sectionbutton buttonhidesec0 open float-end ms-1" data-section="0">
';
                $buffer .= $indent . '        <span class="sec-zero-open-icon justify-content-center align-items-center h-100" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionC52e92585e0c298567c42f9c762ae7bd($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('pix');
                $buffer .= $this->section1c384c125e304912e4aa4f286246f4f2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '        <span class="sec-zero-closed-icon justify-content-center align-items-center h-100" title="';
                $value = $context->find('str');
                $buffer .= $this->section93ea0cff72c01e5394823a89f199e7cb($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('pix');
                $buffer .= $this->section7c71b497be2eade6894cdb87acac9468($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f4ca4fb1781df46ec3d2c4def95f773(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#section_zero.is_collapsible}}
    <button class="sectionbutton buttonhidesec0 open float-end ms-1" data-section="0">
        <span class="sec-zero-open-icon justify-content-center align-items-center h-100" title="{{#str}}closetopsection, format_tiles{{/str}}">
            {{#pix}}close, format_tiles, {{#str}}closetopsection, format_tiles{{/str}}{{/pix}}
        </span>
        <span class="sec-zero-closed-icon justify-content-center align-items-center h-100" title="{{#str}}expandtopsection, format_tiles{{/str}}">
            {{#pix}}sort, format_tiles, {{#str}}expand, format_tiles{{/str}}{{/pix}}
        </span>

    </button>
{{/section_zero.is_collapsible}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('section_zero.is_collapsible');
                $buffer .= $this->section36d3779dc807a8ea050eb3882fdda348($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB71377313c722aba4ea691067a941738(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'controls, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'controls, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4371b1f5468004e60029d5a5dff3d5f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checked';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3805926ab6bbd3fce5b140207d85f1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="dropdown-item" href="{{{url}}}">
                    <div class="custom-control custom-switch{{#checked}} checked{{/checked}}">
                        <span class="custom-control-label">{{label}}</span>
                    </div>
                </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="dropdown-item" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="custom-control custom-switch';
                $value = $context->find('checked');
                $buffer .= $this->sectionB4371b1f5468004e60029d5a5dff3d5f($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <span class="custom-control-label">';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6a1d787f37728f7470724f3599f789d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="btn-group align-top">
        <button type="button" class="sectionbutton align-top" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="{{#str}}controls, format_tiles{{/str}}">
            <span class="d-flex justify-content-center align-items-center h-100">
                <i class="icon fa fa-ellipsis-h fa-fw m-0" aria-hidden="true"></i>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            {{#abovetilescontrols}}
                <a class="dropdown-item" href="{{{url}}}">
                    <div class="custom-control custom-switch{{#checked}} checked{{/checked}}">
                        <span class="custom-control-label">{{label}}</span>
                    </div>
                </a>
            {{/abovetilescontrols}}
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="btn-group align-top">
';
                $buffer .= $indent . '        <button type="button" class="sectionbutton align-top" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionB71377313c722aba4ea691067a941738($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="d-flex justify-content-center align-items-center h-100">
';
                $buffer .= $indent . '                <i class="icon fa fa-ellipsis-h fa-fw m-0" aria-hidden="true"></i>
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '        <div class="dropdown-menu dropdown-menu-right">
';
                $value = $context->find('abovetilescontrols');
                $buffer .= $this->sectionA3805926ab6bbd3fce5b140207d85f1b($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
