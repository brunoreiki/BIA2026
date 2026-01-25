<?php

class __Mustache_82934facf70d36ccf69d9424a1dcccaa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="ltool-notes-container">
';
        $buffer .= $indent . '    <div class="ltool-notes-grid">
';
        $value = $context->find('hasnotes');
        $buffer .= $this->sectionF96ede985689aa9d3dc876572c7d7b4e($context, $indent, $value);
        $value = $context->find('hasnotes');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="alert alert-info">
';
            $buffer .= $indent . '                ';
            $value = $context->find('str');
            $buffer .= $this->sectionC25dc952ef385aec553e422264547d29($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56af3594696bb200526a0de3fb6d5b5b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/settings, core, {{#str}}edit{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/settings, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1245898a9c4802f609e8da4fe72227c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core, {{#str}}delete{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/delete, core, ';
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16748a03c78499f8e2e26ef467ecc74c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'view';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'view';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4d7ec0e45bf7b3a97d78ceb27865fe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/hide, core,{{#str}}show{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/hide, core,';
                $value = $context->find('str');
                $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c32facb31cf50ab14d0162d208cce65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showprint, local_learningtools';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showprint, local_learningtools';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section784c9b96d16fe0dc2f994ac3546fafe9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <a href="{{{showurl}}}" class="dropdown-item">
                                                {{#pix}}t/hide, core,{{#str}}show{{/str}}{{/pix}}
                                                <span class="menu-action-show-text">{{#str}}showprint, local_learningtools{{/str}}</span>
                                            </a>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->find('showurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="dropdown-item">
';
                $buffer .= $indent . '                                                ';
                $value = $context->find('pix');
                $buffer .= $this->sectionF4d7ec0e45bf7b3a97d78ceb27865fe4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                <span class="menu-action-show-text">';
                $value = $context->find('str');
                $buffer .= $this->section4c32facb31cf50ab14d0162d208cce65($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a08c9d6595b23cde72386192648c21d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hide';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hide';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd48af3ea0b33b98c2d0539c9c912934(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/show, core,{{#str}}hide{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/show, core,';
                $value = $context->find('str');
                $buffer .= $this->section2a08c9d6595b23cde72386192648c21d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1781bf4533546bd98808f0e62214c63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hideprint, local_learningtools';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hideprint, local_learningtools';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section742708368969bce39a8041d99a4aff69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="note-card">
                    <div class="note-content">
                        {{{content}}}
                    </div>
                    <div class="note-footer">
                        <div class="note-title-block">
                            <div class="note-context">
                                <span>{{{contextname}}}</span>
                            </div>
                            {{^hasprint}}
                                <div class="note-actions dropdown">
                                    <button class="btn btn-secondary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon fa fa-ellipsis-vertical fa-fw "></i>
                                    </button>
                                    <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                        <a href="{{{editurl}}}" class="dropdown-item">
                                            {{#pix}}i/settings, core, {{#str}}edit{{/str}}{{/pix}}
                                            <span class="menu-action-edit-text">{{#str}}edit{{/str}}</span>
                                        </a>
                                        <a href="{{{deleteurl}}}" class="dropdown-item">
                                            {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}
                                            <span class="menu-action-delete-text">{{#str}}delete{{/str}}</span>
                                        </a>
                                        <a href="{{{contexturl}}}" class="dropdown-item">
                                            <i class="icon fa fa-pager fa-fw "></i>
                                            <span class="menu-action-text">{{#str}}view{{/str}}</span>
                                        </a>
                                        {{#printstatus}}
                                            <a href="{{{showurl}}}" class="dropdown-item">
                                                {{#pix}}t/hide, core,{{#str}}show{{/str}}{{/pix}}
                                                <span class="menu-action-show-text">{{#str}}showprint, local_learningtools{{/str}}</span>
                                            </a>
                                        {{/printstatus}}

                                        {{^printstatus}}
                                            <a href="{{{hideurl}}}" class="dropdown-item">
                                                {{#pix}}t/show, core,{{#str}}hide{{/str}}{{/pix}}
                                                <span class="menu-action-hide-text">{{#str}}hideprint, local_learningtools{{/str}}</span>
                                            </a>
                                        {{/printstatus}}
                                    </div>
                                </div>
                            {{/hasprint}}
                        </div>
                        <div class="note-title">
                            <a href="{{{contexturl}}}">
                                <span class="note-module-text">{{name}}</span>
                            </a>
                        </div>
                        <div class="note-timestamp">
                            <i class="fa fa-clock"></i> {{{time}}}
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
                
                $buffer .= $indent . '                <div class="note-card">
';
                $buffer .= $indent . '                    <div class="note-content">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="note-footer">
';
                $buffer .= $indent . '                        <div class="note-title-block">
';
                $buffer .= $indent . '                            <div class="note-context">
';
                $buffer .= $indent . '                                <span>';
                $value = $this->resolveValue($context->find('contextname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </div>
';
                $value = $context->find('hasprint');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <div class="note-actions dropdown">
';
                    $buffer .= $indent . '                                    <button class="btn btn-secondary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
                    $buffer .= $indent . '                                        <i class="icon fa fa-ellipsis-vertical fa-fw "></i>
';
                    $buffer .= $indent . '                                    </button>
';
                    $buffer .= $indent . '                                    <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdownMenu2">
';
                    $buffer .= $indent . '                                        <a href="';
                    $value = $this->resolveValue($context->find('editurl'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="dropdown-item">
';
                    $buffer .= $indent . '                                            ';
                    $value = $context->find('pix');
                    $buffer .= $this->section56af3594696bb200526a0de3fb6d5b5b($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                            <span class="menu-action-edit-text">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                                        </a>
';
                    $buffer .= $indent . '                                        <a href="';
                    $value = $this->resolveValue($context->find('deleteurl'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="dropdown-item">
';
                    $buffer .= $indent . '                                            ';
                    $value = $context->find('pix');
                    $buffer .= $this->section1245898a9c4802f609e8da4fe72227c2($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                            <span class="menu-action-delete-text">';
                    $value = $context->find('str');
                    $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                                        </a>
';
                    $buffer .= $indent . '                                        <a href="';
                    $value = $this->resolveValue($context->find('contexturl'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="dropdown-item">
';
                    $buffer .= $indent . '                                            <i class="icon fa fa-pager fa-fw "></i>
';
                    $buffer .= $indent . '                                            <span class="menu-action-text">';
                    $value = $context->find('str');
                    $buffer .= $this->section16748a03c78499f8e2e26ef467ecc74c($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                                        </a>
';
                    $value = $context->find('printstatus');
                    $buffer .= $this->section784c9b96d16fe0dc2f994ac3546fafe9($context, $indent, $value);
                    $buffer .= $indent . '
';
                    $value = $context->find('printstatus');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                                            <a href="';
                        $value = $this->resolveValue($context->find('hideurl'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '" class="dropdown-item">
';
                        $buffer .= $indent . '                                                ';
                        $value = $context->find('pix');
                        $buffer .= $this->sectionAd48af3ea0b33b98c2d0539c9c912934($context, $indent, $value);
                        $buffer .= '
';
                        $buffer .= $indent . '                                                <span class="menu-action-hide-text">';
                        $value = $context->find('str');
                        $buffer .= $this->sectionA1781bf4533546bd98808f0e62214c63($context, $indent, $value);
                        $buffer .= '</span>
';
                        $buffer .= $indent . '                                            </a>
';
                    }
                    $buffer .= $indent . '                                    </div>
';
                    $buffer .= $indent . '                                </div>
';
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="note-title">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('contexturl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="note-module-text">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="note-timestamp">
';
                $buffer .= $indent . '                            <i class="fa fa-clock"></i> ';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF96ede985689aa9d3dc876572c7d7b4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#notes}}
                <div class="note-card">
                    <div class="note-content">
                        {{{content}}}
                    </div>
                    <div class="note-footer">
                        <div class="note-title-block">
                            <div class="note-context">
                                <span>{{{contextname}}}</span>
                            </div>
                            {{^hasprint}}
                                <div class="note-actions dropdown">
                                    <button class="btn btn-secondary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon fa fa-ellipsis-vertical fa-fw "></i>
                                    </button>
                                    <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                        <a href="{{{editurl}}}" class="dropdown-item">
                                            {{#pix}}i/settings, core, {{#str}}edit{{/str}}{{/pix}}
                                            <span class="menu-action-edit-text">{{#str}}edit{{/str}}</span>
                                        </a>
                                        <a href="{{{deleteurl}}}" class="dropdown-item">
                                            {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}
                                            <span class="menu-action-delete-text">{{#str}}delete{{/str}}</span>
                                        </a>
                                        <a href="{{{contexturl}}}" class="dropdown-item">
                                            <i class="icon fa fa-pager fa-fw "></i>
                                            <span class="menu-action-text">{{#str}}view{{/str}}</span>
                                        </a>
                                        {{#printstatus}}
                                            <a href="{{{showurl}}}" class="dropdown-item">
                                                {{#pix}}t/hide, core,{{#str}}show{{/str}}{{/pix}}
                                                <span class="menu-action-show-text">{{#str}}showprint, local_learningtools{{/str}}</span>
                                            </a>
                                        {{/printstatus}}

                                        {{^printstatus}}
                                            <a href="{{{hideurl}}}" class="dropdown-item">
                                                {{#pix}}t/show, core,{{#str}}hide{{/str}}{{/pix}}
                                                <span class="menu-action-hide-text">{{#str}}hideprint, local_learningtools{{/str}}</span>
                                            </a>
                                        {{/printstatus}}
                                    </div>
                                </div>
                            {{/hasprint}}
                        </div>
                        <div class="note-title">
                            <a href="{{{contexturl}}}">
                                <span class="note-module-text">{{name}}</span>
                            </a>
                        </div>
                        <div class="note-timestamp">
                            <i class="fa fa-clock"></i> {{{time}}}
                        </div>
                    </div>
                </div>
            {{/notes}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('notes');
                $buffer .= $this->section742708368969bce39a8041d99a4aff69($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC25dc952ef385aec553e422264547d29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nonotes, ltool_note';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nonotes, ltool_note';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
