<?php

class __Mustache_f242aed4e3e46d82601c5e01def9ed22 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost_magnific/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper" class="page-wrapper-login ';
        $value = $this->resolveValue($context->find('login_theme'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '     style="--login-bg: url(\'';
        $value = $this->resolveValue($context->find('loginbackgroundimageurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '\');">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <section class="login-wrapper">
';
        $buffer .= $indent . '        <div class="login-container">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <script>
';
        $buffer .= $indent . '                (function () {
';
        $buffer .= $indent . '                    const block = document.querySelector(".login-form-password");
';
        $buffer .= $indent . '                    if (!block) {
';
        $buffer .= $indent . '                        return;
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    // 1) Label -> ';
        $value = $context->find('str');
        $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    const label = block.querySelector(\'label[for="password"]\');
';
        $buffer .= $indent . '                    if (label) {
';
        $buffer .= $indent . '                        label.textContent = "';
        $value = $context->find('str');
        $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
        $buffer .= '";
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    // 2) Input password
';
        $buffer .= $indent . '                    const input = block.querySelector("#password");
';
        $buffer .= $indent . '                    if (!input) {
';
        $buffer .= $indent . '                        return;
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    // Placeholder -> ';
        $value = $context->find('cleanstr');
        $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    input.setAttribute("placeholder", "';
        $value = $context->find('cleanstr');
        $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
        $buffer .= '");
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    // 3) Criar (ou reaproveitar) a wrapper .password-wrapper
';
        $buffer .= $indent . '                    let wrapper = block.querySelector(".password-wrapper");
';
        $buffer .= $indent . '                    if (!wrapper) {
';
        $buffer .= $indent . '                        wrapper = document.createElement("div");
';
        $buffer .= $indent . '                        wrapper.className = "password-wrapper";
';
        $buffer .= $indent . '                        // Inserir a wrapper exatamente onde estava o input
';
        $buffer .= $indent . '                        input.parentNode.insertBefore(wrapper, input);
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    // Garantir que o input esteja dentro da wrapper
';
        $buffer .= $indent . '                    if (input.parentElement !== wrapper) {
';
        $buffer .= $indent . '                        wrapper.appendChild(input);
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    // 4) Criar o botão #togglePassword (se não existir)
';
        $buffer .= $indent . '                    let toggle = block.querySelector("#togglePassword");
';
        $buffer .= $indent . '                    if (!toggle) {
';
        $buffer .= $indent . '                        toggle = document.createElement("button");
';
        $buffer .= $indent . '                        toggle.type = "button";
';
        $buffer .= $indent . '                        toggle.id = "togglePassword";
';
        $buffer .= $indent . '                        toggle.className = "toggle-password";
';
        $buffer .= $indent . '                        toggle.title = "';
        $value = $context->find('str');
        $buffer .= $this->section0456df008114280c7908271e554ab4e3($context, $indent, $value);
        $buffer .= '";
';
        $buffer .= $indent . '                        toggle.setAttribute("aria-pressed", "false");
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        const icon = document.createElement("i");
';
        $buffer .= $indent . '                        icon.className = "fa fa-eye";
';
        $buffer .= $indent . '                        icon.setAttribute("aria-hidden", "true");
';
        $buffer .= $indent . '                        toggle.appendChild(icon);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        wrapper.appendChild(toggle);
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    // 5) Toggle show/hide (evita dupla ligação)
';
        $buffer .= $indent . '                    if (!toggle.dataset.bound) {
';
        $buffer .= $indent . '                        toggle.addEventListener("click", function () {
';
        $buffer .= $indent . '                            const isPassword = input.getAttribute("type") === "password";
';
        $buffer .= $indent . '                            input.setAttribute("type", isPassword ? "text" : "password");
';
        $buffer .= $indent . '                            toggle.setAttribute("aria-pressed", (!isPassword).toString());
';
        $buffer .= $indent . '                            toggle.classList.toggle("active", !isPassword);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            const icon = toggle.querySelector("i");
';
        $buffer .= $indent . '                            if (isPassword) {
';
        $buffer .= $indent . '                                if (icon.classList.replace) {
';
        $buffer .= $indent . '                                    icon.classList.replace("fa-eye", "fa-eye-slash");
';
        $buffer .= $indent . '                                } else {
';
        $buffer .= $indent . '                                    icon.classList.remove("fa-eye");
';
        $buffer .= $indent . '                                    icon.classList.add("fa-eye-slash");
';
        $buffer .= $indent . '                                }
';
        $buffer .= $indent . '                            } else {
';
        $buffer .= $indent . '                                if (icon.classList.replace) {
';
        $buffer .= $indent . '                                    icon.classList.replace("fa-eye-slash", "fa-eye");
';
        $buffer .= $indent . '                                } else {
';
        $buffer .= $indent . '                                    icon.classList.remove("fa-eye-slash");
';
        $buffer .= $indent . '                                    icon.classList.add("fa-eye");
';
        $buffer .= $indent . '                                }
';
        $buffer .= $indent . '                            }
';
        $buffer .= $indent . '                        });
';
        $buffer .= $indent . '                        toggle.dataset.bound = "1";
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '                })();
';
        $buffer .= $indent . '            </script>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </section>
';
        $buffer .= $indent . '    <div class="loginfooter">
';
        $buffer .= $indent . '            <div class="language-menu">
';
        $value = $context->find('languagemenu');
        $buffer .= $this->sectionEd56830bc5383b9ca60498f0f15530c2($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <p>
';
        $value = $context->find('footer_show_copywriter');
        $buffer .= $this->sectionD93fb8b6fdbeea075012d7d099e21fa2($context, $indent, $value);
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->section8eb37ad7a87256d6486c6b7aaff1440f($context, $indent, $value);

        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0456df008114280c7908271e554ab4e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskrevealhint, form ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' passwordunmaskrevealhint, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1a3446726426cbf7e010f5b401a4fca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="language-menu__item">
                                <a href="{{actionmenulink.url}}">
                                    {{actionmenulink.text}}
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="language-menu__item">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('actionmenulink.url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->findDot('actionmenulink.text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd56830bc5383b9ca60498f0f15530c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <button class="language-menu__button" id="languageMenuBtn">
                        {{languagemenu.primary.title}}
                        <span class="arrow"></span>
                    </button>
                    <ul class="language-menu__list" id="languageMenuList">
                        {{#languagemenu.secondary.items}}
                            <li class="language-menu__item">
                                <a href="{{actionmenulink.url}}">
                                    {{actionmenulink.text}}
                                </a>
                            </li>
                        {{/languagemenu.secondary.items}}
                    </ul>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const btn = document.getElementById("languageMenuBtn");
                            const list = document.getElementById("languageMenuList");
                            const container = btn.closest(".language-menu");

                            btn.addEventListener("click", function (e) {
                                e.stopPropagation();
                                list.classList.toggle("show");
                                container.classList.toggle("open");
                            });

                            document.addEventListener("click", function () {
                                list.classList.remove("show");
                                container.classList.remove("open");
                            });
                        });
                    </script>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <button class="language-menu__button" id="languageMenuBtn">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->findDot('languagemenu.primary.title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        <span class="arrow"></span>
';
                $buffer .= $indent . '                    </button>
';
                $buffer .= $indent . '                    <ul class="language-menu__list" id="languageMenuList">
';
                $value = $context->findDot('languagemenu.secondary.items');
                $buffer .= $this->sectionE1a3446726426cbf7e010f5b401a4fca($context, $indent, $value);
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                    <script>
';
                $buffer .= $indent . '                        document.addEventListener("DOMContentLoaded", function () {
';
                $buffer .= $indent . '                            const btn = document.getElementById("languageMenuBtn");
';
                $buffer .= $indent . '                            const list = document.getElementById("languageMenuList");
';
                $buffer .= $indent . '                            const container = btn.closest(".language-menu");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            btn.addEventListener("click", function (e) {
';
                $buffer .= $indent . '                                e.stopPropagation();
';
                $buffer .= $indent . '                                list.classList.toggle("show");
';
                $buffer .= $indent . '                                container.classList.toggle("open");
';
                $buffer .= $indent . '                            });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            document.addEventListener("click", function () {
';
                $buffer .= $indent . '                                list.classList.remove("show");
';
                $buffer .= $indent . '                                container.classList.remove("open");
';
                $buffer .= $indent . '                            });
';
                $buffer .= $indent . '                        });
';
                $buffer .= $indent . '                    </script>
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

    private function sectionD93fb8b6fdbeea075012d7d099e21fa2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#str}}footer_copywriter,theme_boost_magnific{{/str}}
                    <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->section243a90e4269ac7c70e5d76d2bcb9bf68($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8eb37ad7a87256d6486c6b7aaff1440f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    M.util.js_pending("theme_boost/loader");
    require(["theme_boost/loader"], function() {
        M.util.js_complete("theme_boost/loader");
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    M.util.js_pending("theme_boost/loader");
';
                $buffer .= $indent . '    require(["theme_boost/loader"], function() {
';
                $buffer .= $indent . '        M.util.js_complete("theme_boost/loader");
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
