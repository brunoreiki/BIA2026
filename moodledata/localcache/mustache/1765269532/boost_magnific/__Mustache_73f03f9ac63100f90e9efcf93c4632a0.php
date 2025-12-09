<?php

class __Mustache_73f03f9ac63100f90e9efcf93c4632a0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="course-overview border border-secondary border-1 rounded pt-2">
';
        $buffer .= $indent . '    <table
';
        $buffer .= $indent . '        class="course-overview-table boxaligncenter ';
        $buffer .= ' table table-responsive w-100 d-block d-md-table"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '    <caption class="accesshide">';
        $value = $this->resolveValue($context->find('caption'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</caption>
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $value = $context->find('headers');
        $buffer .= $this->sectionF08d2debe8df6e6ddf1ea8a299649a2e($context, $indent, $value);
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        $value = $context->find('activities');
        $buffer .= $this->section5416a7006287de1569f798e1ec74c65c($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '    </table>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF08d2debe8df6e6ddf1ea8a299649a2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <th
                class="{{textalign}} border-top-0"
                scope="col"
                data-mdl-overview-column="{{key}}"
            >{{{name}}}</th>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <th
';
                $buffer .= $indent . '                class="';
                $value = $this->resolveValue($context->find('textalign'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' border-top-0"
';
                $buffer .= $indent . '                scope="col"
';
                $buffer .= $indent . '                data-mdl-overview-column="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '            >';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80c2a89cd8953761730e696e98432d06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                data-mdl-overview-alertcount="{{alertcount}}"
                data-mdl-overview-alertlabel="{{alertlabel}}"
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                data-mdl-overview-alertcount="';
                $value = $this->resolveValue($context->find('alertcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                data-mdl-overview-alertlabel="';
                $value = $this->resolveValue($context->find('alertlabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21ceeb8f8eab04d7b305bcb2019cfd19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <td
                class="{{textalign}}"
                data-mdl-overview-item="{{overview}}"
                data-mdl-overview-value="{{value}}"
                {{#alertcount}}
                data-mdl-overview-alertcount="{{alertcount}}"
                data-mdl-overview-alertlabel="{{alertlabel}}"
                {{/alertcount}}
            >
                {{{content}}}
            </td>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <td
';
                $buffer .= $indent . '                class="';
                $value = $this->resolveValue($context->find('textalign'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                data-mdl-overview-item="';
                $value = $this->resolveValue($context->find('overview'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                data-mdl-overview-value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $value = $context->find('alertcount');
                $buffer .= $this->section80c2a89cd8953761730e696e98432d06($context, $indent, $value);
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5416a7006287de1569f798e1ec74c65c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr data-mdl-overview-cmid="{{cmid}}">
            {{#overviews}}
            <td
                class="{{textalign}}"
                data-mdl-overview-item="{{overview}}"
                data-mdl-overview-value="{{value}}"
                {{#alertcount}}
                data-mdl-overview-alertcount="{{alertcount}}"
                data-mdl-overview-alertlabel="{{alertlabel}}"
                {{/alertcount}}
            >
                {{{content}}}
            </td>
            {{/overviews}}
        </tr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <tr data-mdl-overview-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('overviews');
                $buffer .= $this->section21ceeb8f8eab04d7b305bcb2019cfd19($context, $indent, $value);
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
