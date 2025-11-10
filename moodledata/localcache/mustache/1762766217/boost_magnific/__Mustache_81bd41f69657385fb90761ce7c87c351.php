<?php

class __Mustache_81bd41f69657385fb90761ce7c87c351 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="degrade-theme-select-';
        $value = $this->resolveValue($context->find('choice'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '     class="degrade-theme-select-';
        $value = $this->resolveValue($context->find('choice'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' degrade-theme-select-item"
';
        $buffer .= $indent . '     data-theme="';
        $value = $this->resolveValue($context->find('choice'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $value = $context->find('colors');
        $buffer .= $this->sectionAe61d72ff37c037b7bd62283363199e4($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <div class="preview"></div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section450c7ee22d152083f0e6fa3a905d1e39($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionAe61d72ff37c037b7bd62283363199e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
     data-{{{name}}}="{{{color}}}"
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '     data-';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '="';
                $value = $this->resolveValue($context->find('color'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section450c7ee22d152083f0e6fa3a905d1e39(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    /*
    <script>*/
    require(["jquery"], function($) {
        $("#degrade-theme-select-{{{choice}}}").click(function() {
            $("#id_s_theme_degrade_background_color").val("{{{choice}}}");
            $("body").attr("class", function(i, c) {
                return c.replace(/(^|\\s)degrade-theme-\\S+/g, "") + " degrade-theme-{{{choice}}}";
            });

            setSubColors("{{{background}}}");
        });

        $("#id_s_theme_degrade_background_color").change(function() {
            var name = $(this).val();
            var color = $("#degrade-theme-select-{{{choice}}}").attr(`data-${name}`);
            setSubColors(color);
        });

        function setSubColors(color) {
            var subcolors = themeBoostMagnificGenerateColorVariations(color);

            $("#id_s_theme_degrade_theme_color__color_primary")
                    .val(subcolors.color_primary)
                    .minicolors("settings", {value: subcolors.color_primary});
            $("#id_s_theme_degrade_theme_color__color_secondary")
                    .val(subcolors.color_secondary)
                    .minicolors("settings", {value: subcolors.color_secondary});
            $("#id_s_theme_degrade_theme_color__color_buttons")
                    .val(subcolors.color_buttons)
                    .minicolors("settings", {value: subcolors.color_buttons});
        }

        function themeBoostMagnificGenerateColorVariations(hexColor) {
            // Converte a cor hexadecimal para RGB.
            const r = parseInt(hexColor.substring(1, 3), 16);
            const g = parseInt(hexColor.substring(3, 5), 16);
            const b = parseInt(hexColor.substring(5, 7), 16);

            // Função auxiliar para garantir valores dentro do intervalo 0-255.
            const maxmin = (value) => Math.max(0, Math.min(255, value));

            // Gera variações de cor (mais clara e mais escura).
            const primary = `#${maxmin(r - 60).toString(16).padStart(2, "0")}${maxmin(g - 60).toString(16).padStart(2, "0")}${maxmin(b - 60).toString(16).padStart(2, "0")}`;
            const secondary = `#${maxmin(r + 90).toString(16).padStart(2, "0")}${maxmin(g + 90).toString(16).padStart(2, "0")}${maxmin(b + 90).toString(16).padStart(2, "0")}`;
            const buttons = `#${maxmin(r + 60).toString(16).padStart(2, "0")}${maxmin(g - 60).toString(16).padStart(2, "0")}${maxmin(b + 15).toString(16).padStart(2, "0")}`;

            // Atualiza as variáveis CSS no :root
            document.documentElement.style.setProperty("--color_primary_edit", `${maxmin(r -60)}, ${maxmin(g -60)}, ${maxmin(b -60)} `);
            document.documentElement.style.setProperty("--color_secondary_edit", `${maxmin(r +90)}, ${maxmin(g +90)}, ${maxmin(b +90)} `);
            document.documentElement.style.setProperty("--color_buttons_edit", `${maxmin(r + 60)}, ${maxmin(g - 60)}, ${maxmin(b + 15)} `);

            return {
                color_primary: primary,
                color_secondary: secondary,
                color_buttons: buttons,
            };
        }
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    /*
';
                $buffer .= $indent . '    <script>*/
';
                $buffer .= $indent . '    require(["jquery"], function($) {
';
                $buffer .= $indent . '        $("#degrade-theme-select-';
                $value = $this->resolveValue($context->find('choice'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '").click(function() {
';
                $buffer .= $indent . '            $("#id_s_theme_degrade_background_color").val("';
                $value = $this->resolveValue($context->find('choice'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '");
';
                $buffer .= $indent . '            $("body").attr("class", function(i, c) {
';
                $buffer .= $indent . '                return c.replace(/(^|\\s)degrade-theme-\\S+/g, "") + " degrade-theme-';
                $value = $this->resolveValue($context->find('choice'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '";
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            setSubColors("';
                $value = $this->resolveValue($context->find('background'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '");
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $("#id_s_theme_degrade_background_color").change(function() {
';
                $buffer .= $indent . '            var name = $(this).val();
';
                $buffer .= $indent . '            var color = $("#degrade-theme-select-';
                $value = $this->resolveValue($context->find('choice'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '").attr(`data-${name}`);
';
                $buffer .= $indent . '            setSubColors(color);
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        function setSubColors(color) {
';
                $buffer .= $indent . '            var subcolors = themeBoostMagnificGenerateColorVariations(color);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            $("#id_s_theme_degrade_theme_color__color_primary")
';
                $buffer .= $indent . '                    .val(subcolors.color_primary)
';
                $buffer .= $indent . '                    .minicolors("settings", {value: subcolors.color_primary});
';
                $buffer .= $indent . '            $("#id_s_theme_degrade_theme_color__color_secondary")
';
                $buffer .= $indent . '                    .val(subcolors.color_secondary)
';
                $buffer .= $indent . '                    .minicolors("settings", {value: subcolors.color_secondary});
';
                $buffer .= $indent . '            $("#id_s_theme_degrade_theme_color__color_buttons")
';
                $buffer .= $indent . '                    .val(subcolors.color_buttons)
';
                $buffer .= $indent . '                    .minicolors("settings", {value: subcolors.color_buttons});
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        function themeBoostMagnificGenerateColorVariations(hexColor) {
';
                $buffer .= $indent . '            // Converte a cor hexadecimal para RGB.
';
                $buffer .= $indent . '            const r = parseInt(hexColor.substring(1, 3), 16);
';
                $buffer .= $indent . '            const g = parseInt(hexColor.substring(3, 5), 16);
';
                $buffer .= $indent . '            const b = parseInt(hexColor.substring(5, 7), 16);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Função auxiliar para garantir valores dentro do intervalo 0-255.
';
                $buffer .= $indent . '            const maxmin = (value) => Math.max(0, Math.min(255, value));
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Gera variações de cor (mais clara e mais escura).
';
                $buffer .= $indent . '            const primary = `#${maxmin(r - 60).toString(16).padStart(2, "0")}${maxmin(g - 60).toString(16).padStart(2, "0")}${maxmin(b - 60).toString(16).padStart(2, "0")}`;
';
                $buffer .= $indent . '            const secondary = `#${maxmin(r + 90).toString(16).padStart(2, "0")}${maxmin(g + 90).toString(16).padStart(2, "0")}${maxmin(b + 90).toString(16).padStart(2, "0")}`;
';
                $buffer .= $indent . '            const buttons = `#${maxmin(r + 60).toString(16).padStart(2, "0")}${maxmin(g - 60).toString(16).padStart(2, "0")}${maxmin(b + 15).toString(16).padStart(2, "0")}`;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Atualiza as variáveis CSS no :root
';
                $buffer .= $indent . '            document.documentElement.style.setProperty("--color_primary_edit", `${maxmin(r -60)}, ${maxmin(g -60)}, ${maxmin(b -60)} `);
';
                $buffer .= $indent . '            document.documentElement.style.setProperty("--color_secondary_edit", `${maxmin(r +90)}, ${maxmin(g +90)}, ${maxmin(b +90)} `);
';
                $buffer .= $indent . '            document.documentElement.style.setProperty("--color_buttons_edit", `${maxmin(r + 60)}, ${maxmin(g - 60)}, ${maxmin(b + 15)} `);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            return {
';
                $buffer .= $indent . '                color_primary: primary,
';
                $buffer .= $indent . '                color_secondary: secondary,
';
                $buffer .= $indent . '                color_buttons: buttons,
';
                $buffer .= $indent . '            };
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
