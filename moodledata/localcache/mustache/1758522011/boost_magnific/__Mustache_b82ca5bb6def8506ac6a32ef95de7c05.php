<?php

class __Mustache_b82ca5bb6def8506ac6a32ef95de7c05 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('useSubtiles');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('format_tiles/local/content/section/cmitem')) {
                $buffer .= $partial->renderInternal($context, $indent . '    ');
            }
        }
        $value = $context->find('useSubtiles');
        $buffer .= $this->section349fda6507b499bacac25c9bf153086a($context, $indent, $value);

        return $buffer;
    }

    private function section777d202d27944c55175fcaad81e1a89b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{! A label will have spacers before it to left align the items on the previous row }}
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '        <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '        <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '        <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '        <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '        <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '        <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdbb3e8fb8d9e12dfc943036d55e1abb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fullwidth';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fullwidth';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf3873cb887c975594d13ed05f19eed8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' resourcetype_{{modresourceicon}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' resourcetype_';
                $value = $this->resolveValue($context->find('modresourceicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section783ef0c4f1bc71968f70e0bc1c2183d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cursorpointer';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cursorpointer';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6f38bba29ae1a58e7bbcac33fa764e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hasphoto';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hasphoto';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84fe8209c3eef9daecbecfec01330e21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' purpose_{{purpose}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' purpose_';
                $value = $this->resolveValue($context->find('purpose'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7a38fcea47f11f0678bc16a5ac20dc1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '_{{{modresourceicon}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '_';
                $value = $this->resolveValue($context->find('modresourceicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b1c32609d0d38b2e3c60d5c2b4adc17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-modal="{{modalType}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-modal="';
                $value = $this->resolveValue($context->find('modalType'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc3d9ce6dd4cff0fae1e1d0134134ef0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-completion-state="{{completionstate}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-completion-state="';
                $value = $this->resolveValue($context->find('completionstate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87a0f7ffade61f84a629dcdc419c23cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-action="launch-tiles-cm-modal"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-action="launch-tiles-cm-modal"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFec320a1b2c1a3f12f355b3319c5a0ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' onclick="{{{onclick}}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' onclick="';
                $value = $this->resolveValue($context->find('onclick'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9faf273710e4a6ef9b66516e03d6a508(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{! If this is a modal capable course module, we may include the description HTML here, hidden }}
                    {{! This enables JS to grab it and add it to the modal }}
                    <div class="modal-description" style="display: none;">{{{modalDescriptionHTML}}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="modal-description" style="display: none;">';
                $value = $this->resolveValue($context->find('modalDescriptionHTML'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE79513b8ad730d7b0a40cb7ffa0ba79e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{url}}" {{#modalType}} data-action="launch-tiles-cm-modal"{{/modalType}}
                    {{#onclick}} onclick="{{{onclick}}}"{{/onclick}}
                   data-title="{{{activityname}}}" class="cm-link {{{extraclasses}}}">
                    {{> format_tiles/course_module_subtile_inner}}
                </a>
                {{#modalDescriptionHTML}}
                    {{! If this is a modal capable course module, we may include the description HTML here, hidden }}
                    {{! This enables JS to grab it and add it to the modal }}
                    <div class="modal-description" style="display: none;">{{{modalDescriptionHTML}}}</div>
                {{/modalDescriptionHTML}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('modalType');
                $buffer .= $this->section87a0f7ffade61f84a629dcdc419c23cf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $context->find('onclick');
                $buffer .= $this->sectionFec320a1b2c1a3f12f355b3319c5a0ec($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                   data-title="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="cm-link ';
                $value = $this->resolveValue($context->find('extraclasses'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('format_tiles/course_module_subtile_inner')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </a>
';
                $value = $context->find('modalDescriptionHTML');
                $buffer .= $this->section9faf273710e4a6ef9b66516e03d6a508($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8301286d9dabf7ec03a250af26303109(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>format_tiles/completion_button_subtile}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/completion_button_subtile')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF21bcd615140f59a12d81b3f73528ae0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#completionenabled}}
                    {{>format_tiles/completion_button_subtile}}
                {{/completionenabled}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('completionenabled');
                $buffer .= $this->section8301286d9dabf7ec03a250af26303109($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fd9880b63b75e7c2d8a477f26cb79a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activity-item p-3';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activity-item p-3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0d2bbcb120f7688b4f77671cb14e599(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{>format_tiles/completion_button_subtile}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/completion_button_subtile')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b3bd8774d90a34534274592c95b3bd1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#completionenabled}}
                        {{>format_tiles/completion_button_subtile}}
                    {{/completionenabled}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('completionenabled');
                $buffer .= $this->sectionC0d2bbcb120f7688b4f77671cb14e599($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b2ba16bec4d07d4b68b086ca079d562(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{! In Moodle 4.5 this could cover subsections too as they are label like}}
            <div class="cm-inner{{#issubsection}} activity-item p-3{{/issubsection}}">
                {{#hascompletion}}
                    {{#completionenabled}}
                        {{>format_tiles/completion_button_subtile}}
                    {{/completionenabled}}
                {{/hascompletion}}
                {{> format_tiles/course_module_subtile_inner}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="cm-inner';
                $value = $context->find('issubsection');
                $buffer .= $this->section0fd9880b63b75e7c2d8a477f26cb79a4($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('hascompletion');
                $buffer .= $this->section1b3bd8774d90a34534274592c95b3bd1($context, $indent, $value);
                if ($partial = $this->mustache->loadPartial('format_tiles/course_module_subtile_inner')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9da439e3ebc79ff22c0bec526dae7804(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a id="cm-link-{{id}}" href="{{url}}" class="dim-overlay cm-link"{{#modalType}} data-action="launch-tiles-cm-modal"{{/modalType}}
                    {{#onclick}} onclick="{{{onclick}}}"{{/onclick}}>
                </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a id="cm-link-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="dim-overlay cm-link"';
                $value = $context->find('modalType');
                $buffer .= $this->section87a0f7ffade61f84a629dcdc419c23cf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $context->find('onclick');
                $buffer .= $this->sectionFec320a1b2c1a3f12f355b3319c5a0ec($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE7130703ec87e19d10b1a229522f3b78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#clickable}}
                <a id="cm-link-{{id}}" href="{{url}}" class="dim-overlay cm-link"{{#modalType}} data-action="launch-tiles-cm-modal"{{/modalType}}
                    {{#onclick}} onclick="{{{onclick}}}"{{/onclick}}>
                </a>
            {{/clickable}}
            {{^clickable}}
                <div href="{{url}}" class="dim-overlay"></div>
            {{/clickable}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('clickable');
                $buffer .= $this->section9da439e3ebc79ff22c0bec526dae7804($context, $indent, $value);
                $value = $context->find('clickable');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <div href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" class="dim-overlay"></div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section202ddf415c0b16d57cf30d451735d5e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{availabilitymessage}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('availabilitymessage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22ff9c43f1784638043f1e471282c6dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#stealth}}{{{availabilitymessage}}}{{/stealth}}
                        {{^stealth}}{{>format_tiles/availability_info}}{{/stealth}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $context->find('stealth');
                $buffer .= $this->section202ddf415c0b16d57cf30d451735d5e5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $context->find('stealth');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('format_tiles/availability_info')) {
                        $buffer .= $partial->renderInternal($context);
                    }
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5d7e1c0c4b701b05aad5b00997cc05b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#availabilitymessage}}
                        {{#stealth}}{{{availabilitymessage}}}{{/stealth}}
                        {{^stealth}}{{>format_tiles/availability_info}}{{/stealth}}
                    {{/availabilitymessage}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('availabilitymessage');
                $buffer .= $this->section22ff9c43f1784638043f1e471282c6dc($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section349fda6507b499bacac25c9bf153086a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#hasSpacersBefore}}
        {{! A label will have spacers before it to left align the items on the previous row }}
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
        <li class="activity subtile spacer" aria-hidden="true"></li>
    {{/hasSpacersBefore}}
    <li class="activity{{^is_label}} subtile{{/is_label}} {{#is_label}}fullwidth{{/is_label}} {{modname}} modtype_{{modname}} {{#modresourceicon}} resourcetype_{{modresourceicon}}{{/modresourceicon}}{{^clickable}} unclickable {{/clickable}}{{#clickable}} cursorpointer{{/clickable}}{{#photourl}} hasphoto{{/photourl}}{{#purpose}} purpose_{{purpose}}{{/purpose}} {{extraclasses}}"
        id="module-{{cmid}}" data-modtype="{{modname}}{{#modresourceicon}}_{{{modresourceicon}}}{{/modresourceicon}}"
        data-cmid="{{cmid}}" data-completion="{{completion}}"
        data-modinstance="{{modinstance}}" data-contextid="{{modcontextid}}"
        data-title="{{{activityname}}}"
        {{#modalType}}data-modal="{{modalType}}" {{/modalType}}
        {{#hascompletion}}data-completion-state="{{completionstate}}"{{/hascompletion}}
    >
        {{^is_label}}
            {{#clickable}}
                <a href="{{url}}" {{#modalType}} data-action="launch-tiles-cm-modal"{{/modalType}}
                    {{#onclick}} onclick="{{{onclick}}}"{{/onclick}}
                   data-title="{{{activityname}}}" class="cm-link {{{extraclasses}}}">
                    {{> format_tiles/course_module_subtile_inner}}
                </a>
                {{#modalDescriptionHTML}}
                    {{! If this is a modal capable course module, we may include the description HTML here, hidden }}
                    {{! This enables JS to grab it and add it to the modal }}
                    <div class="modal-description" style="display: none;">{{{modalDescriptionHTML}}}</div>
                {{/modalDescriptionHTML}}
            {{/clickable}}
            {{^clickable}}
                <div class="cm-inner">
                    {{> format_tiles/course_module_subtile_inner}}
                </div>
            {{/clickable}}
            {{#hascompletion}}
                {{#completionenabled}}
                    {{>format_tiles/completion_button_subtile}}
                {{/completionenabled}}
            {{/hascompletion}}
        {{/is_label}}

        {{#is_label}}
            {{! In Moodle 4.5 this could cover subsections too as they are label like}}
            <div class="cm-inner{{#issubsection}} activity-item p-3{{/issubsection}}">
                {{#hascompletion}}
                    {{#completionenabled}}
                        {{>format_tiles/completion_button_subtile}}
                    {{/completionenabled}}
                {{/hascompletion}}
                {{> format_tiles/course_module_subtile_inner}}
            </div>
        {{/is_label}}

        {{#dimmed}}
            {{#clickable}}
                <a id="cm-link-{{id}}" href="{{url}}" class="dim-overlay cm-link"{{#modalType}} data-action="launch-tiles-cm-modal"{{/modalType}}
                    {{#onclick}} onclick="{{{onclick}}}"{{/onclick}}>
                </a>
            {{/clickable}}
            {{^clickable}}
                <div href="{{url}}" class="dim-overlay"></div>
            {{/clickable}}
        {{/dimmed}}

        {{^is_label}}
            <div class="contentafterlink">
                {{#visible}}
                    {{#availabilitymessage}}
                        {{#stealth}}{{{availabilitymessage}}}{{/stealth}}
                        {{^stealth}}{{>format_tiles/availability_info}}{{/stealth}}
                    {{/availabilitymessage}}
                {{/visible}}
                {{^visible}}
                    {{>format_tiles/availability_info}}
                {{/visible}}
            </div>
        {{/is_label}}
    </li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hasSpacersBefore');
                $buffer .= $this->section777d202d27944c55175fcaad81e1a89b($context, $indent, $value);
                $buffer .= $indent . '    <li class="activity';
                $value = $context->find('is_label');
                if (empty($value)) {
                    
                    $buffer .= ' subtile';
                }
                $buffer .= ' ';
                $value = $context->find('is_label');
                $buffer .= $this->sectionAdbb3e8fb8d9e12dfc943036d55e1abb($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $value = $context->find('modresourceicon');
                $buffer .= $this->sectionDf3873cb887c975594d13ed05f19eed8($context, $indent, $value);
                $value = $context->find('clickable');
                if (empty($value)) {
                    
                    $buffer .= ' unclickable ';
                }
                $value = $context->find('clickable');
                $buffer .= $this->section783ef0c4f1bc71968f70e0bc1c2183d9($context, $indent, $value);
                $value = $context->find('photourl');
                $buffer .= $this->sectionC6f38bba29ae1a58e7bbcac33fa764e6($context, $indent, $value);
                $value = $context->find('purpose');
                $buffer .= $this->section84fe8209c3eef9daecbecfec01330e21($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('extraclasses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '        id="module-';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-modtype="';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $value = $context->find('modresourceicon');
                $buffer .= $this->sectionB7a38fcea47f11f0678bc16a5ac20dc1($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '        data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-completion="';
                $value = $this->resolveValue($context->find('completion'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '        data-modinstance="';
                $value = $this->resolveValue($context->find('modinstance'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-contextid="';
                $value = $this->resolveValue($context->find('modcontextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '        data-title="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '        ';
                $value = $context->find('modalType');
                $buffer .= $this->section8b1c32609d0d38b2e3c60d5c2b4adc17($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                $value = $context->find('hascompletion');
                $buffer .= $this->sectionEc3d9ce6dd4cff0fae1e1d0134134ef0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    >
';
                $value = $context->find('is_label');
                if (empty($value)) {
                    
                    $value = $context->find('clickable');
                    $buffer .= $this->sectionE79513b8ad730d7b0a40cb7ffa0ba79e($context, $indent, $value);
                    $value = $context->find('clickable');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                <div class="cm-inner">
';
                        if ($partial = $this->mustache->loadPartial('format_tiles/course_module_subtile_inner')) {
                            $buffer .= $partial->renderInternal($context, $indent . '                    ');
                        }
                        $buffer .= $indent . '                </div>
';
                    }
                    $value = $context->find('hascompletion');
                    $buffer .= $this->sectionF21bcd615140f59a12d81b3f73528ae0($context, $indent, $value);
                }
                $buffer .= $indent . '
';
                $value = $context->find('is_label');
                $buffer .= $this->section2b2ba16bec4d07d4b68b086ca079d562($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('dimmed');
                $buffer .= $this->sectionE7130703ec87e19d10b1a229522f3b78($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('is_label');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="contentafterlink">
';
                    $value = $context->find('visible');
                    $buffer .= $this->sectionA5d7e1c0c4b701b05aad5b00997cc05b($context, $indent, $value);
                    $value = $context->find('visible');
                    if (empty($value)) {
                        
                        if ($partial = $this->mustache->loadPartial('format_tiles/availability_info')) {
                            $buffer .= $partial->renderInternal($context, $indent . '                    ');
                        }
                    }
                    $buffer .= $indent . '            </div>
';
                }
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
