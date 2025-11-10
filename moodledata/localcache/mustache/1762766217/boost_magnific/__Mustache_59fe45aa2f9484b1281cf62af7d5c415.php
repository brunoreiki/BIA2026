<?php

class __Mustache_59fe45aa2f9484b1281cf62af7d5c415 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('url');
        $buffer .= $this->sectionC8cdaad0abc26e982942871a4ed3aff0($context, $indent, $value);

        return $buffer;
    }

    private function sectionC87ec54bed24a3520af271ca8ae4dbc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$ format_tiles/local/content/cm/cmicon }}
            {{> format_tiles/local/content/cm/cmicon }}
        {{/ format_tiles/local/content/cm/cmicon }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('format_tiles/local/content/cm/cmicon');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('format_tiles/local/content/cm/cmicon')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59d8f6e1eba8abacc33ff3282eed9535(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{! We use the core template for non subtiles if user is editing, so modals will not be launched}}
                        {{$ core/inplace_editable }}
                            {{> core/inplace_editable }}
                        {{/ core/inplace_editable }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core/inplace_editable');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core/inplace_editable')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                            ');
                    }
                }
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

    private function sectionF45e9a6285a5e3baaa5576fec4dc137c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' onclick="{{onclick}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' onclick="';
                $value = $this->resolveValue($context->find('onclick'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section061ca306106f07f0bb288ba3e9c4eda5(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                            <div class="modal-description" style="display: none;">';
                $value = $this->resolveValue($context->find('modalDescriptionHTML'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cc6784d089c34337a23f36205cfe395(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#editing}}
                        {{! We use the core template for non subtiles if user is editing, so modals will not be launched}}
                        {{$ core/inplace_editable }}
                            {{> core/inplace_editable }}
                        {{/ core/inplace_editable }}
                    {{/editing}}
                    {{^editing}}
                        {{! If user is not editing, we use this for non subtiles as we need to add data-action for modal launch}}
                        <a id="cm-link-{{id}}" href="{{url}}"{{#modalType}} data-action="launch-tiles-cm-modal"{{/modalType}} class="aalink stretched-link"{{#onclick}} onclick="{{onclick}}"{{/onclick}}><span class="instancename">{{{cmtitle}}}</span></a>
                        {{#modalDescriptionHTML}}
                        {{! If this is a modal capable course module, we may include the description HTML here, hidden }}
                        {{! This enables JS to grab it and add it to the modal }}
                            <div class="modal-description" style="display: none;">{{{modalDescriptionHTML}}}</div>
                        {{/modalDescriptionHTML}}
                    {{/editing}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('editing');
                $buffer .= $this->section59d8f6e1eba8abacc33ff3282eed9535($context, $indent, $value);
                $value = $context->find('editing');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <a id="cm-link-';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"';
                    $value = $context->find('modalType');
                    $buffer .= $this->section87a0f7ffade61f84a629dcdc419c23cf($context, $indent, $value);
                    $buffer .= ' class="aalink stretched-link"';
                    $value = $context->find('onclick');
                    $buffer .= $this->sectionF45e9a6285a5e3baaa5576fec4dc137c($context, $indent, $value);
                    $buffer .= '><span class="instancename">';
                    $value = $this->resolveValue($context->find('cmtitle'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span></a>
';
                    $value = $context->find('modalDescriptionHTML');
                    $buffer .= $this->section061ca306106f07f0bb288ba3e9c4eda5($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6542ca5a0d62c2ba26ecd4d9715e535(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{$ core_courseformat/local/content/cm/activitybadge }}
                        {{> core_courseformat/local/content/cm/activitybadge }}
                    {{/ core_courseformat/local/content/cm/activitybadge }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/activitybadge');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/activitybadge')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8cdaad0abc26e982942871a4ed3aff0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{! Icon }}
    {{#activityicon}}
        {{$ format_tiles/local/content/cm/cmicon }}
            {{> format_tiles/local/content/cm/cmicon }}
        {{/ format_tiles/local/content/cm/cmicon }}
    {{/activityicon}}

    {{! Name & Badge}}
    <div class="activity-name-area activity-instance d-flex flex-column me-2 ">
        <div class="activitytitle {{textclasses}} modtype_{{modname}} position-relative align-self-start">
            <div class="activityname">
                {{#activityname}}
                    {{#editing}}
                        {{! We use the core template for non subtiles if user is editing, so modals will not be launched}}
                        {{$ core/inplace_editable }}
                            {{> core/inplace_editable }}
                        {{/ core/inplace_editable }}
                    {{/editing}}
                    {{^editing}}
                        {{! If user is not editing, we use this for non subtiles as we need to add data-action for modal launch}}
                        <a id="cm-link-{{id}}" href="{{url}}"{{#modalType}} data-action="launch-tiles-cm-modal"{{/modalType}} class="aalink stretched-link"{{#onclick}} onclick="{{onclick}}"{{/onclick}}><span class="instancename">{{{cmtitle}}}</span></a>
                        {{#modalDescriptionHTML}}
                        {{! If this is a modal capable course module, we may include the description HTML here, hidden }}
                        {{! This enables JS to grab it and add it to the modal }}
                            <div class="modal-description" style="display: none;">{{{modalDescriptionHTML}}}</div>
                        {{/modalDescriptionHTML}}
                    {{/editing}}
                {{/activityname}}
                {{#activitybadge}}
                    {{$ core_courseformat/local/content/cm/activitybadge }}
                        {{> core_courseformat/local/content/cm/activitybadge }}
                    {{/ core_courseformat/local/content/cm/activitybadge }}
                {{/activitybadge}}
            </div>
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('activityicon');
                $buffer .= $this->sectionC87ec54bed24a3520af271ca8ae4dbc5($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="activity-name-area activity-instance d-flex flex-column me-2 ">
';
                $buffer .= $indent . '        <div class="activitytitle ';
                $value = $this->resolveValue($context->find('textclasses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' position-relative align-self-start">
';
                $buffer .= $indent . '            <div class="activityname">
';
                $value = $context->find('activityname');
                $buffer .= $this->section3cc6784d089c34337a23f36205cfe395($context, $indent, $value);
                $value = $context->find('activitybadge');
                $buffer .= $this->sectionC6542ca5a0d62c2ba26ecd4d9715e535($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
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
