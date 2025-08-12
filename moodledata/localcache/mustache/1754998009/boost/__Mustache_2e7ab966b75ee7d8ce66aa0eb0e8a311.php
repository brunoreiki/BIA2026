<?php

class __Mustache_2e7ab966b75ee7d8ce66aa0eb0e8a311 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="searchinput-navbar-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="simplesearchform">
';
        $buffer .= $indent . '    <div class="collapse" id="searchform-navbar">
';
        $buffer .= $indent . '        <form autocomplete="off" action="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" method="get" accept-charset="utf-8" class="mform d-flex flex-wrap align-items-center searchform-navbar">
';
        $value = $context->find('hiddenfields');
        $buffer .= $this->section04b8ae4b53b0a507223620372a841e3e($context, $indent, $value);
        $buffer .= $indent . '            <div class="input-group" ';
        $value = $context->find('grouplabel');
        $buffer .= $this->section8dff1dbcb3bb2d11d645e52b5683e3b3($context, $indent, $value);
        $buffer .= '>
';
        $value = $context->find('grouplabel');
        $buffer .= $this->section14d194233f33a1550e9ec78da04c9dda($context, $indent, $value);
        $buffer .= $indent . '                <input type="text"
';
        $buffer .= $indent . '                    id="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                    class="form-control withclear"
';
        $buffer .= $indent . '                    placeholder="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                    aria-label="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                    name="';
        $value = $this->resolveValue($context->find('inputname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                    data-region="input"
';
        $buffer .= $indent . '                    autocomplete="off"
';
        $buffer .= $indent . '                >
';
        $buffer .= $indent . '                <label for="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                    <span class="visually-hidden">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </label>
';
        $buffer .= $indent . '                <a class="btn btn-close"
';
        $buffer .= $indent . '                    data-action="closesearch"
';
        $buffer .= $indent . '                    data-bs-toggle="collapse"
';
        $buffer .= $indent . '                    href="#searchform-navbar"
';
        $buffer .= $indent . '                    role="button"
';
        $buffer .= $indent . '                    title="';
        $value = $context->find('str');
        $buffer .= $this->section256776dc607cdebe9d890b0efd29b5ba($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                >
';
        $buffer .= $indent . '                    <span class="visually-hidden">';
        $value = $context->find('str');
        $buffer .= $this->section256776dc607cdebe9d890b0efd29b5ba($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '                <button type="submit" class="btn btn-submit" data-action="submit" title="';
        $value = $context->find('str');
        $buffer .= $this->section71150cdd1ab8aef64636fd7d825a6de3($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('pix');
        $buffer .= $this->section31a49b2ab335cdb4725ddb42ed8de96c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    <span class="visually-hidden">';
        $value = $context->find('str');
        $buffer .= $this->section71150cdd1ab8aef64636fd7d825a6de3($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </form>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <a
';
        $buffer .= $indent . '        class="rounded-0 nav-link icon-no-margin"
';
        $buffer .= $indent . '        data-bs-toggle="collapse"
';
        $buffer .= $indent . '        data-action="opensearch"
';
        $buffer .= $indent . '        href="#searchform-navbar"
';
        $buffer .= $indent . '        role="button"
';
        $buffer .= $indent . '        aria-expanded="false"
';
        $buffer .= $indent . '        aria-controls="searchform-navbar"
';
        $buffer .= $indent . '        title="';
        $value = $context->find('str');
        $buffer .= $this->sectionEf182a623a7e3d255977cee5b4aa1302($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        ';
        $value = $context->find('pix');
        $buffer .= $this->section31a49b2ab335cdb4725ddb42ed8de96c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <span class="visually-hidden">';
        $value = $context->find('str');
        $buffer .= $this->sectionEf182a623a7e3d255977cee5b4aa1302($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section111c39a27e8a6ca95501f3cfa7f4e868($context, $indent, $value);

        return $buffer;
    }

    private function section04b8ae4b53b0a507223620372a841e3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <input type="hidden" name="{{ name }}" value="{{ value }}">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8dff1dbcb3bb2d11d645e52b5683e3b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'role="group" aria-labelledby="searchgrouplabel-{{uniqid}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'role="group" aria-labelledby="searchgrouplabel-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14d194233f33a1550e9ec78da04c9dda(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span id="searchgrouplabel-{{uniqid}}" class="visually-hidden">{{{ . }}}</span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span id="searchgrouplabel-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="visually-hidden">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section256776dc607cdebe9d890b0efd29b5ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' closebuttontitle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' closebuttontitle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71150cdd1ab8aef64636fd7d825a6de3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'performsearch, search';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'performsearch, search';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31a49b2ab335cdb4725ddb42ed8de96c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' a/search, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' a/search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf182a623a7e3d255977cee5b4aa1302(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglesearch ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' togglesearch ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section111c39a27e8a6ca95501f3cfa7f4e868(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
],
function(
    $
) {
    const container = document.getElementById(\'searchform-navbar\');
    const opensearch = container.parentElement.querySelector(\'[data-action="opensearch"]\');
    const input = container.querySelector(\'[data-region="input"]\');
    const submit = container.querySelector(\'[data-action="submit"]\');

    submit.addEventListener(\'click\', (e) => {
        if (input.valUE === \'\') {
            e.preventDefault();
        }
    });

    container.addEventListener(\'hidden.bs.collapse\', () => {
        opensearch.classList.remove(\'d-none\');
        input.value = \'\';
    });

    container.addEventListener(\'show.bs.collapse\', () => {
        opensearch.classList.add(\'d-none\');
    });

    container.addEventListener(\'shown.bs.collapse\', () => {
        input.focus();
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    const container = document.getElementById(\'searchform-navbar\');
';
                $buffer .= $indent . '    const opensearch = container.parentElement.querySelector(\'[data-action="opensearch"]\');
';
                $buffer .= $indent . '    const input = container.querySelector(\'[data-region="input"]\');
';
                $buffer .= $indent . '    const submit = container.querySelector(\'[data-action="submit"]\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    submit.addEventListener(\'click\', (e) => {
';
                $buffer .= $indent . '        if (input.valUE === \'\') {
';
                $buffer .= $indent . '            e.preventDefault();
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    container.addEventListener(\'hidden.bs.collapse\', () => {
';
                $buffer .= $indent . '        opensearch.classList.remove(\'d-none\');
';
                $buffer .= $indent . '        input.value = \'\';
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    container.addEventListener(\'show.bs.collapse\', () => {
';
                $buffer .= $indent . '        opensearch.classList.add(\'d-none\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    container.addEventListener(\'shown.bs.collapse\', () => {
';
                $buffer .= $indent . '        input.focus();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
