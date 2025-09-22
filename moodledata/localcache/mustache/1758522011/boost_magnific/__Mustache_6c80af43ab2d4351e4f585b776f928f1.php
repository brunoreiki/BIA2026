<?php

class __Mustache_6c80af43ab2d4351e4f585b776f928f1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="mb-3">
';
        $buffer .= $indent . '    <div id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="boost_magnific-theme-select-itens">
';
        $value = $context->find('colors');
        $buffer .= $this->section2b95b2cd1faaf56bd395988e5ebfbdd0($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="boost_magnific-colors-preview colors-body" id="colors-body-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <section class="card">
';
        $buffer .= $indent . '        <header class="card__header">';
        $value = $context->find('str');
        $buffer .= $this->sectionFe9aa60ec8e0971893f62d5964dafa6b($context, $indent, $value);
        $buffer .= ' Preview</header>
';
        $buffer .= $indent . '        <div class="card__body">
';
        $buffer .= $indent . '            <!-- Left -->
';
        $buffer .= $indent . '            <div class="left">
';
        $buffer .= $indent . '                <!-- 3 selectable rows -->
';
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                    <div class="dash"></div>
';
        $buffer .= $indent . '                    <span class="dot"></span>
';
        $buffer .= $indent . '                    <div class="pill" role="button" aria-pressed="false">
';
        $buffer .= $indent . '                        <span class="line"></span>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="chev">▾</div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                    <div class="dash"></div>
';
        $buffer .= $indent . '                    <span class="dot"></span>
';
        $buffer .= $indent . '                    <div class="pill"><span class="line"></span></div>
';
        $buffer .= $indent . '                    <div class="chev">▾</div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <!-- section -->
';
        $buffer .= $indent . '                <div class="line-lg"></div>
';
        $buffer .= $indent . '                <div class="line-lg"></div>
';
        $buffer .= $indent . '                <div class="line-sm"></div>
';
        $buffer .= $indent . '                <!-- CTA -->
';
        $buffer .= $indent . '                <button class="cta" type="button">
';
        $buffer .= $indent . '                    <span class="slot"></span>
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <!-- Right -->
';
        $buffer .= $indent . '            <aside class="panel">
';
        $buffer .= $indent . '                <div class="bar"></div>
';
        $buffer .= $indent . '                <div class="bar"></div>
';
        $buffer .= $indent . '                <div class="bar"></div>
';
        $buffer .= $indent . '            </aside>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('footercolor');
        $buffer .= $this->section06bb43540e5799c07c8c6927bdbec57b($context, $indent, $value);
        $buffer .= $indent . '    </section>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionF2cb1e94c7f40db886ff3e81ff1059d6($context, $indent, $value);

        return $buffer;
    }

    private function section2b95b2cd1faaf56bd395988e5ebfbdd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="boost_magnific-theme-select-item">
                <div class="preview" style="background:{{{.}}}"
                     data-color="{{{.}}}">
                    <span>{{{.}}}</span>
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="boost_magnific-theme-select-item">
';
                $buffer .= $indent . '                <div class="preview" style="background:';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                     data-color="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <span>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe9aa60ec8e0971893f62d5964dafa6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pluginname, theme_boost_magnific';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pluginname, theme_boost_magnific';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06bb43540e5799c07c8c6927bdbec57b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <footer class="card__footer">© 2025 {{#str}}pluginname, theme_boost_magnific{{/str}} Preview. All rights reserved.</footer>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <footer class="card__footer">© 2025 ';
                $value = $context->find('str');
                $buffer .= $this->sectionFe9aa60ec8e0971893f62d5964dafa6b($context, $indent, $value);
                $buffer .= ' Preview. All rights reserved.</footer>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fff474db76948b2dfbece88633433e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                $(`[id^="id_"][id$="_startcolor"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
                updateMainColor(color);
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                $(`[id^="id_"][id$="_startcolor"]`)
';
                $buffer .= $indent . '                        .val(color)
';
                $buffer .= $indent . '                        .minicolors("settings", {value: color});
';
                $buffer .= $indent . '                updateMainColor(color);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48117e559ffd3dfd8912b01adf7d77a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                $(`[id^="id_"][id$="_brandcolor"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
                updateMainColor(color);
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                $(`[id^="id_"][id$="_brandcolor"]`)
';
                $buffer .= $indent . '                        .val(color)
';
                $buffer .= $indent . '                        .minicolors("settings", {value: color});
';
                $buffer .= $indent . '                updateMainColor(color);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section154941d23c4aebda5a9e85eb3efd6b9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                $(`[id^="id_"][id$="_footer_background_color"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
                updateMainColor(null, color);
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                $(`[id^="id_"][id$="_footer_background_color"]`)
';
                $buffer .= $indent . '                        .val(color)
';
                $buffer .= $indent . '                        .minicolors("settings", {value: color});
';
                $buffer .= $indent . '                updateMainColor(null, color);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1cdea23069e45bd1bf9ddffa3035d94(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            $(`[id^="id_"][id$="_startcolor"]`).change(function (){
                updateMainColor($(this).val());
           });
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            $(`[id^="id_"][id$="_startcolor"]`).change(function (){
';
                $buffer .= $indent . '                updateMainColor($(this).val());
';
                $buffer .= $indent . '           });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section334ab53e0492bf2b9947338cb7d871a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            $(`[id^="id_"][id$="_brandcolor"]`).change(function (){
                updateMainColor($(this).val());
            });
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            $(`[id^="id_"][id$="_brandcolor"]`).change(function (){
';
                $buffer .= $indent . '                updateMainColor($(this).val());
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section884b6ed1ff441f25a32558932ac12de3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            $(`[id^="id_"][id$="footer_background_color"]`).change(function () {
                updateMainColor(null, $(this).val());
            });
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            $(`[id^="id_"][id$="footer_background_color"]`).change(function () {
';
                $buffer .= $indent . '                updateMainColor(null, $(this).val());
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2cb1e94c7f40db886ff3e81ff1059d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require(["jquery"], function($) {
        $("#{{{uniqid}}} .preview").click(function() {
            let color = $(this).attr("data-color");
            {{#startcolor}}
                $(`[id^="id_"][id$="_startcolor"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
                updateMainColor(color);
            {{/startcolor}}
            {{#brandcolor}}
                $(`[id^="id_"][id$="_brandcolor"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
                updateMainColor(color);
            {{/brandcolor}}
            {{#footercolor}}
                $(`[id^="id_"][id$="_footer_background_color"]`)
                        .val(color)
                        .minicolors("settings", {value: color});
                updateMainColor(null, color);
            {{/footercolor}}
        });

        {{#startcolor}}
            $(`[id^="id_"][id$="_startcolor"]`).change(function (){
                updateMainColor($(this).val());
           });
        {{/startcolor}}
        {{#brandcolor}}
            $(`[id^="id_"][id$="_brandcolor"]`).change(function (){
                updateMainColor($(this).val());
            });
        {{/brandcolor}}
        {{#footercolor}}
            $(`[id^="id_"][id$="footer_background_color"]`).change(function () {
                updateMainColor(null, $(this).val());
            });
        {{/footercolor}}

        updateMainColor("{{{defaultcolor}}}", "{{{defaultcolorfooter}}}");

        $(\'[id^="id_s_"][id$="brandcolor_background_menu"]\').change(function () {
            updateMainColor();
        });

        // Troca a cor principal e recalcula as demais
        function updateMainColor(newColor, newFooterColor) {
            const root = document.querySelector("#colors-body-{{{uniqid}}}");
            if(!root) {
                return;
            }

            if ($(\'[id^="id_s_"][id$="brandcolor_background_menu"]\').is(\':checked\')) {
                $(".boost_magnific-colors-preview .card__header").addClass("card__header-dark");
            } else {
                $(".boost_magnific-colors-preview .card__header").removeClass("card__header-dark");
            }

            // Cores derivadas
            if (newColor) {
                root.style.setProperty("--preview-primary", newColor);
                root.style.setProperty("--preview-bg", lighten(newColor, 90));
                root.style.setProperty("--preview-app-bg", lighten(newColor, 80));
                root.style.setProperty("--preview-primary-shadow", darken(newColor, 25) + "3F");
                root.style.setProperty("--preview-text", darken(newColor, 60));

                const textFooterColor = luminance(newColor) > 0.6 ? "#333333" : "#FFFFFF";
                root.style.setProperty("--preview-footer-bg", newColor);
                root.style.setProperty("--preview-footer-text", textFooterColor);
            }
            if (newFooterColor && newFooterColor[5]) {
                const textNewFooterColor = luminance(newFooterColor) > 0.6 ? "#333333" : "#fff";
                root.style.setProperty("--preview-footer-bg", newFooterColor);
                root.style.setProperty("--preview-footer-text", textNewFooterColor);
            }
        }

        // Funções auxiliares para manipulação de cores
        function hexToRgb(hex) {
            hex = hex.replace(/^#/, "");
            if (hex.length === 3) {
                hex = hex.split("").map(c => c + c).join("");
            }
            const num = parseInt(hex, 16);
            return [ (num >> 16) & 255, (num >> 8) & 255, num & 255 ];
        }
        function rgbToHex(r, g, b) {
            return "#" + [r, g, b]
                    .map(x => x.toString(16).padStart(2, "0"))
                    .join("");
        }
        function darken(hex, percent) {
            const [r, g, b] = hexToRgb(hex);
            return rgbToHex(
                    Math.max(0, Math.floor(r * (1 - percent / 100))),
                    Math.max(0, Math.floor(g * (1 - percent / 100))),
                    Math.max(0, Math.floor(b * (1 - percent / 100)))
            );
        }
        function lighten(hex, percent) {
            const [r, g, b] = hexToRgb(hex);
            return rgbToHex(
                    Math.min(255, Math.floor(r + (255 - r) * percent / 100)),
                    Math.min(255, Math.floor(g + (255 - g) * percent / 100)),
                    Math.min(255, Math.floor(b + (255 - b) * percent / 100))
            );
        }
        function luminance(bgColor) {
            // Remove o # e converte para números
            const r = parseInt(bgColor.substr(1, 2), 16);
            const g = parseInt(bgColor.substr(3, 2), 16);
            const b = parseInt(bgColor.substr(5, 2), 16);

            // Calcula a luminância percebida (fórmula de acessibilidade W3C).
            return (0.299 * r + 0.587 * g + 0.114 * b) / 255;
        }
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require(["jquery"], function($) {
';
                $buffer .= $indent . '        $("#';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' .preview").click(function() {
';
                $buffer .= $indent . '            let color = $(this).attr("data-color");
';
                $value = $context->find('startcolor');
                $buffer .= $this->section5fff474db76948b2dfbece88633433e6($context, $indent, $value);
                $value = $context->find('brandcolor');
                $buffer .= $this->section48117e559ffd3dfd8912b01adf7d77a9($context, $indent, $value);
                $value = $context->find('footercolor');
                $buffer .= $this->section154941d23c4aebda5a9e85eb3efd6b9f($context, $indent, $value);
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $value = $context->find('startcolor');
                $buffer .= $this->sectionA1cdea23069e45bd1bf9ddffa3035d94($context, $indent, $value);
                $value = $context->find('brandcolor');
                $buffer .= $this->section334ab53e0492bf2b9947338cb7d871a1($context, $indent, $value);
                $value = $context->find('footercolor');
                $buffer .= $this->section884b6ed1ff441f25a32558932ac12de3($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '        updateMainColor("';
                $value = $this->resolveValue($context->find('defaultcolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '", "';
                $value = $this->resolveValue($context->find('defaultcolorfooter'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'[id^="id_s_"][id$="brandcolor_background_menu"]\').change(function () {
';
                $buffer .= $indent . '            updateMainColor();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        // Troca a cor principal e recalcula as demais
';
                $buffer .= $indent . '        function updateMainColor(newColor, newFooterColor) {
';
                $buffer .= $indent . '            const root = document.querySelector("#colors-body-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '");
';
                $buffer .= $indent . '            if(!root) {
';
                $buffer .= $indent . '                return;
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            if ($(\'[id^="id_s_"][id$="brandcolor_background_menu"]\').is(\':checked\')) {
';
                $buffer .= $indent . '                $(".boost_magnific-colors-preview .card__header").addClass("card__header-dark");
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                $(".boost_magnific-colors-preview .card__header").removeClass("card__header-dark");
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Cores derivadas
';
                $buffer .= $indent . '            if (newColor) {
';
                $buffer .= $indent . '                root.style.setProperty("--preview-primary", newColor);
';
                $buffer .= $indent . '                root.style.setProperty("--preview-bg", lighten(newColor, 90));
';
                $buffer .= $indent . '                root.style.setProperty("--preview-app-bg", lighten(newColor, 80));
';
                $buffer .= $indent . '                root.style.setProperty("--preview-primary-shadow", darken(newColor, 25) + "3F");
';
                $buffer .= $indent . '                root.style.setProperty("--preview-text", darken(newColor, 60));
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                const textFooterColor = luminance(newColor) > 0.6 ? "#333333" : "#FFFFFF";
';
                $buffer .= $indent . '                root.style.setProperty("--preview-footer-bg", newColor);
';
                $buffer .= $indent . '                root.style.setProperty("--preview-footer-text", textFooterColor);
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '            if (newFooterColor && newFooterColor[5]) {
';
                $buffer .= $indent . '                const textNewFooterColor = luminance(newFooterColor) > 0.6 ? "#333333" : "#fff";
';
                $buffer .= $indent . '                root.style.setProperty("--preview-footer-bg", newFooterColor);
';
                $buffer .= $indent . '                root.style.setProperty("--preview-footer-text", textNewFooterColor);
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        // Funções auxiliares para manipulação de cores
';
                $buffer .= $indent . '        function hexToRgb(hex) {
';
                $buffer .= $indent . '            hex = hex.replace(/^#/, "");
';
                $buffer .= $indent . '            if (hex.length === 3) {
';
                $buffer .= $indent . '                hex = hex.split("").map(c => c + c).join("");
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '            const num = parseInt(hex, 16);
';
                $buffer .= $indent . '            return [ (num >> 16) & 255, (num >> 8) & 255, num & 255 ];
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        function rgbToHex(r, g, b) {
';
                $buffer .= $indent . '            return "#" + [r, g, b]
';
                $buffer .= $indent . '                    .map(x => x.toString(16).padStart(2, "0"))
';
                $buffer .= $indent . '                    .join("");
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        function darken(hex, percent) {
';
                $buffer .= $indent . '            const [r, g, b] = hexToRgb(hex);
';
                $buffer .= $indent . '            return rgbToHex(
';
                $buffer .= $indent . '                    Math.max(0, Math.floor(r * (1 - percent / 100))),
';
                $buffer .= $indent . '                    Math.max(0, Math.floor(g * (1 - percent / 100))),
';
                $buffer .= $indent . '                    Math.max(0, Math.floor(b * (1 - percent / 100)))
';
                $buffer .= $indent . '            );
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        function lighten(hex, percent) {
';
                $buffer .= $indent . '            const [r, g, b] = hexToRgb(hex);
';
                $buffer .= $indent . '            return rgbToHex(
';
                $buffer .= $indent . '                    Math.min(255, Math.floor(r + (255 - r) * percent / 100)),
';
                $buffer .= $indent . '                    Math.min(255, Math.floor(g + (255 - g) * percent / 100)),
';
                $buffer .= $indent . '                    Math.min(255, Math.floor(b + (255 - b) * percent / 100))
';
                $buffer .= $indent . '            );
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        function luminance(bgColor) {
';
                $buffer .= $indent . '            // Remove o # e converte para números
';
                $buffer .= $indent . '            const r = parseInt(bgColor.substr(1, 2), 16);
';
                $buffer .= $indent . '            const g = parseInt(bgColor.substr(3, 2), 16);
';
                $buffer .= $indent . '            const b = parseInt(bgColor.substr(5, 2), 16);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Calcula a luminância percebida (fórmula de acessibilidade W3C).
';
                $buffer .= $indent . '            return (0.299 * r + 0.587 * g + 0.114 * b) / 255;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
