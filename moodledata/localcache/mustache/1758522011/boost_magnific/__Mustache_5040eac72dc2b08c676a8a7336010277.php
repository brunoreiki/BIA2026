<?php

class __Mustache_5040eac72dc2b08c676a8a7336010277 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer">
';
        $buffer .= $indent . '    <style>
';
        $buffer .= $indent . '        footer {
';
        $buffer .= $indent . '            background: ';
        $value = $this->resolveValue($context->find('footer_background_color'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        footer * {
';
        $buffer .= $indent . '            color: ';
        $value = $this->resolveValue($context->find('footer_background_text_color'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    </style>
';
        $value = $context->find('footercount');
        $buffer .= $this->section481ed52ad8726c6bc58f56ced52d1ba4($context, $indent, $value);
        $value = $context->find('footer_show_copywriter');
        $buffer .= $this->section67e415bcc75caf25366d78b7ae7aa4e0($context, $indent, $value);
        $value = $context->find('editing');
        $buffer .= $this->section5b5042b44cf3a35780245a2a9730c031($context, $indent, $value);
        $buffer .= $indent . '    <div class="footer-content-debugging footer-dark bg-dark text-light d-none">
';
        $buffer .= $indent . '        <div class="container-fluid footer-dark-inner">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';

        return $buffer;
    }

    private function sectionC9e2d436150bb027d9771ce093762e97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <h6 class="footer-title">{{{footertitle}}}</h6>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <h6 class="footer-title">';
                $value = $this->resolveValue($context->find('footertitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0b0aad7c19811443916d7d16f470c84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section-wrapper">
                    {{#footertitle}}
                        <h6 class="footer-title">{{{footertitle}}}</h6>
                    {{/footertitle}}
                    {{{footerhtml}}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section-wrapper">
';
                $value = $context->find('footertitle');
                $buffer .= $this->sectionC9e2d436150bb027d9771ce093762e97($context, $indent, $value);
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('footerhtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section481ed52ad8726c6bc58f56ced52d1ba4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="footer-container footer-container-{{{footercount}}} container">
            {{#footercontents}}
                <div class="footer-section-wrapper">
                    {{#footertitle}}
                        <h6 class="footer-title">{{{footertitle}}}</h6>
                    {{/footertitle}}
                    {{{footerhtml}}}
                </div>
            {{/footercontents}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="footer-container footer-container-';
                $value = $this->resolveValue($context->find('footercount'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' container">
';
                $value = $context->find('footercontents');
                $buffer .= $this->sectionF0b0aad7c19811443916d7d16f470c84($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section243a90e4269ac7c70e5d76d2bcb9bf68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'footer_copywriter,theme_boost_magnific';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'footer_copywriter,theme_boost_magnific';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67e415bcc75caf25366d78b7ae7aa4e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="footer-foot">
            <div class="container">
                <p class="text-center text-white">
                    {{#str}}footer_copywriter,theme_boost_magnific{{/str}}
                    <a href="https://eduardokraus.com" target="_blank" class="text-white">Eduardo Kraus</a>.
                    Powered by <a href="https://moodle.org" target="_blank" class="text-white">Moodle</a>
                </p>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="footer-foot">
';
                $buffer .= $indent . '            <div class="container">
';
                $buffer .= $indent . '                <p class="text-center text-white">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->section243a90e4269ac7c70e5d76d2bcb9bf68($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <a href="https://eduardokraus.com" target="_blank" class="text-white">Eduardo Kraus</a>.
';
                $buffer .= $indent . '                    Powered by <a href="https://moodle.org" target="_blank" class="text-white">Moodle</a>
';
                $buffer .= $indent . '                </p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section731097174a5d68a2f903547cb2dd416b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'quickstart_title,theme_boost_magnific';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'quickstart_title,theme_boost_magnific';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b5042b44cf3a35780245a2a9730c031(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p class="text-center">
            <a href="{{{config.wwwroot}}}/theme/boost_magnific/quickstart/"
               class="btn text-white">{{#str}}quickstart_title,theme_boost_magnific{{/str}}</a>
        </p>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <p class="text-center">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/theme/boost_magnific/quickstart/"
';
                $buffer .= $indent . '               class="btn text-white">';
                $value = $context->find('str');
                $buffer .= $this->section731097174a5d68a2f903547cb2dd416b($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
