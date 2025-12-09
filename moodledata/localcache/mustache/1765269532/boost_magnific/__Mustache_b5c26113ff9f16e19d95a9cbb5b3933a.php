<?php

class __Mustache_b5c26113ff9f16e19d95a9cbb5b3933a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="usermenu">
';
        $value = $context->find('unauthenticateduser');
        $buffer .= $this->section6a93a14ec7cd3bf95e50ebae41fcf7e2($context, $indent, $value);
        $value = $context->find('unauthenticateduser');
        if (empty($value)) {
            
            $buffer .= $indent . '        <a href="#" id="user-menu-toggle">
';
            $buffer .= $indent . '            <span class="userbutton">
';
            if ($partial = $this->mustache->loadPartial('core/user_menu_metadata')) {
                $buffer .= $partial->renderInternal($context, $indent . '                ');
            }
            $buffer .= $indent . '            </span>
';
            $buffer .= $indent . '        </a>
';
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section77a7b4a8819752ddd5faf5b37177480a($context, $indent, $value);

        return $buffer;
    }

    private function section709c7103df2192436d0891976f85ca16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' login, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' login, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section974f4b39fd5b694aff4286f547a2b264(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="login pl-2 btn btn-primary" href="{{{url}}}">{{#str}} login, core {{/str}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="login pl-2 btn btn-primary" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section709c7103df2192436d0891976f85ca16($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a93a14ec7cd3bf95e50ebae41fcf7e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#url}}
            <a class="login pl-2 btn btn-primary" href="{{{url}}}">{{#str}} login, core {{/str}}</a>
        {{/url}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('url');
                $buffer .= $this->section974f4b39fd5b694aff4286f547a2b264($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section868d58fed1b968733cf390c9d69f4947(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="avatar d-none {{{classes}}}">
                        {{{content}}}
                    </span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="avatar d-none ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10ca3eedf9bc5f23a86bca2cd8f38c36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'language';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'language';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section118045d539f1bd5dd62420b1729026fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>core/user_action_menu_submenu_items}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/user_action_menu_submenu_items')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f2c33f2fb307f841b2efe8d577dccb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class="avatar d-none {{{classes}}}">
                                    {{{content}}}
                                </span>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <span class="avatar d-none ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section77a7b4a8819752ddd5faf5b37177480a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require(["jquery", "core/notification"], function ($, Notification) {

        $("#user-menu-toggle").click(function (event) {
            event.preventDefault();
            let body = `
                {{#avatardata}}
                    <span class="avatar d-none {{{classes}}}">
                        {{{content}}}
                    </span>
                {{/avatardata}}
                <div class="usermenu-modal-tabs">
                    <div class="tabs-menu-link">
                        {{> core/user_action_menu_items }}
                    </div>
                    <div class="usermenu-modal-tabs-content"></div>
                </div>`;
            require([\'core/modal\'], function (ModalModule) {
                const Modal = ModalModule && (ModalModule.default || ModalModule);
                if (Modal && typeof Modal.create === \'function\') {
                    Modal.create({
                        title: "{{{userfullname}}}",
                        body: body,
                        large: true,
                        show: true,
                        removeOnClose: true,
                    }).then(function (modal) {
                        if (!modal.root) {
                            modal.root = modal._root;
                        }
                        usermodal_init(modal);
                    }).catch(Notification.exception);
                } else {
                    require(["core/modal_factory"], function (ModalFactory) {
                        ModalFactory.create({
                            type: ModalFactory.types.DEFAULT,
                            title: "{{{userfullname}}}",
                            body: body,
                            footer: "",
                            removeOnClose: true,
                        }).done(function (modal) {
                            if (!modal.root) {
                                modal.root = modal._root;
                            }
                            modal.show();
                            usermodal_init(modal);
                        });
                    });
                }
            });
        });

        function usermodal_init(modal) {
            modal.root.find(".modal-dialog").addClass("usermenu-modal-userlinks modal-xl");
            modal.root.find(".modal-header").append(`
                <div class="user-action d-flex">
                    <div class="languages dropdown">
                        <a href="#" class="dropdown-toggle nav-link">{{#str}}language{{/str}}</a>
                        <div class="submenus" style="z-index:2">
                            {{#submenus}}{{>core/user_action_menu_submenu_items}}{{/submenus}}
                        </div>
                    </div>
                </div>`);
            modal.root.find(".usermenu-modal-tabs .tabs-menu-link a:first-child").addClass("active");
            modal.root.find(".usermenu-modal-tabs .tabs-menu-link a").click(function () {
                event.preventDefault();
                setIframeUrl($(this), modal);
            });

            if ($(window).width() <= 575) {
                /* se menor não faz nada */
            } else {
                let $menu = modal.root.find(".usermenu-modal-tabs .tabs-menu-link a:first-child");
                setIframeUrl($menu, modal);
            }
        }

        function setIframeUrl($menu, modal) {
            modal.root.find(".usermenu-modal-tabs .tabs-menu-link a").removeClass("active");
            $menu.addClass("active");

            var href = $menu.attr("href");

            if ($(window).width() <= 575) {
                location.href = href;
            }

            if (href.includes("login/logout.php") ||
                    href.includes("switchrole.php") ||
                    href.includes("reportbuilder") ||
                    href.includes("user/files.php")) {
                location.href = href;
            } else if (href == "#") {
                alert("ops...");
            } else {
                if (href.includes("?")) {
                    href += "&embed-frame-top=1";
                } else {
                    href += "?embed-frame-top=1";
                }

                if (href.includes("user/profile.php")) {
                    modal.root.find(".modal-header").addClass("show-avatar");
                    modal.root.find(".usermenu-modal-tabs-content").html(`
                        <div class="user m-2">
                            {{#avatardata}}
                                <span class="avatar d-none {{{classes}}}">
                                    {{{content}}}
                                </span>
                            {{/avatardata}}
                            <h2>{{{userfullname}}}</h2>
                        </div>
                        <div class="usermenu-modal-tabs-content-internal"></div>`);
                    modal.root.find(".usermenu-modal-tabs-content-internal").load(href);
                } else {
                    modal.root.find(".modal-header").removeClass("show-avatar");
                    modal.root.find(".usermenu-modal-tabs-content").load(href);
                }
            }
        }
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require(["jquery", "core/notification"], function ($, Notification) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $("#user-menu-toggle").click(function (event) {
';
                $buffer .= $indent . '            event.preventDefault();
';
                $buffer .= $indent . '            let body = `
';
                $value = $context->find('avatardata');
                $buffer .= $this->section868d58fed1b968733cf390c9d69f4947($context, $indent, $value);
                $buffer .= $indent . '                <div class="usermenu-modal-tabs">
';
                $buffer .= $indent . '                    <div class="tabs-menu-link">
';
                if ($partial = $this->mustache->loadPartial('core/user_action_menu_items')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="usermenu-modal-tabs-content"></div>
';
                $buffer .= $indent . '                </div>`;
';
                $buffer .= $indent . '            require([\'core/modal\'], function (ModalModule) {
';
                $buffer .= $indent . '                const Modal = ModalModule && (ModalModule.default || ModalModule);
';
                $buffer .= $indent . '                if (Modal && typeof Modal.create === \'function\') {
';
                $buffer .= $indent . '                    Modal.create({
';
                $buffer .= $indent . '                        title: "';
                $value = $this->resolveValue($context->find('userfullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '",
';
                $buffer .= $indent . '                        body: body,
';
                $buffer .= $indent . '                        large: true,
';
                $buffer .= $indent . '                        show: true,
';
                $buffer .= $indent . '                        removeOnClose: true,
';
                $buffer .= $indent . '                    }).then(function (modal) {
';
                $buffer .= $indent . '                        if (!modal.root) {
';
                $buffer .= $indent . '                            modal.root = modal._root;
';
                $buffer .= $indent . '                        }
';
                $buffer .= $indent . '                        usermodal_init(modal);
';
                $buffer .= $indent . '                    }).catch(Notification.exception);
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    require(["core/modal_factory"], function (ModalFactory) {
';
                $buffer .= $indent . '                        ModalFactory.create({
';
                $buffer .= $indent . '                            type: ModalFactory.types.DEFAULT,
';
                $buffer .= $indent . '                            title: "';
                $value = $this->resolveValue($context->find('userfullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '",
';
                $buffer .= $indent . '                            body: body,
';
                $buffer .= $indent . '                            footer: "",
';
                $buffer .= $indent . '                            removeOnClose: true,
';
                $buffer .= $indent . '                        }).done(function (modal) {
';
                $buffer .= $indent . '                            if (!modal.root) {
';
                $buffer .= $indent . '                                modal.root = modal._root;
';
                $buffer .= $indent . '                            }
';
                $buffer .= $indent . '                            modal.show();
';
                $buffer .= $indent . '                            usermodal_init(modal);
';
                $buffer .= $indent . '                        });
';
                $buffer .= $indent . '                    });
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        function usermodal_init(modal) {
';
                $buffer .= $indent . '            modal.root.find(".modal-dialog").addClass("usermenu-modal-userlinks modal-xl");
';
                $buffer .= $indent . '            modal.root.find(".modal-header").append(`
';
                $buffer .= $indent . '                <div class="user-action d-flex">
';
                $buffer .= $indent . '                    <div class="languages dropdown">
';
                $buffer .= $indent . '                        <a href="#" class="dropdown-toggle nav-link">';
                $value = $context->find('str');
                $buffer .= $this->section10ca3eedf9bc5f23a86bca2cd8f38c36($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        <div class="submenus" style="z-index:2">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('submenus');
                $buffer .= $this->section118045d539f1bd5dd62420b1729026fb($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>`);
';
                $buffer .= $indent . '            modal.root.find(".usermenu-modal-tabs .tabs-menu-link a:first-child").addClass("active");
';
                $buffer .= $indent . '            modal.root.find(".usermenu-modal-tabs .tabs-menu-link a").click(function () {
';
                $buffer .= $indent . '                event.preventDefault();
';
                $buffer .= $indent . '                setIframeUrl($(this), modal);
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            if ($(window).width() <= 575) {
';
                $buffer .= $indent . '                /* se menor não faz nada */
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                let $menu = modal.root.find(".usermenu-modal-tabs .tabs-menu-link a:first-child");
';
                $buffer .= $indent . '                setIframeUrl($menu, modal);
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        function setIframeUrl($menu, modal) {
';
                $buffer .= $indent . '            modal.root.find(".usermenu-modal-tabs .tabs-menu-link a").removeClass("active");
';
                $buffer .= $indent . '            $menu.addClass("active");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            var href = $menu.attr("href");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            if ($(window).width() <= 575) {
';
                $buffer .= $indent . '                location.href = href;
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            if (href.includes("login/logout.php") ||
';
                $buffer .= $indent . '                    href.includes("switchrole.php") ||
';
                $buffer .= $indent . '                    href.includes("reportbuilder") ||
';
                $buffer .= $indent . '                    href.includes("user/files.php")) {
';
                $buffer .= $indent . '                location.href = href;
';
                $buffer .= $indent . '            } else if (href == "#") {
';
                $buffer .= $indent . '                alert("ops...");
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                if (href.includes("?")) {
';
                $buffer .= $indent . '                    href += "&embed-frame-top=1";
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    href += "?embed-frame-top=1";
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                if (href.includes("user/profile.php")) {
';
                $buffer .= $indent . '                    modal.root.find(".modal-header").addClass("show-avatar");
';
                $buffer .= $indent . '                    modal.root.find(".usermenu-modal-tabs-content").html(`
';
                $buffer .= $indent . '                        <div class="user m-2">
';
                $value = $context->find('avatardata');
                $buffer .= $this->section3f2c33f2fb307f841b2efe8d577dccb3($context, $indent, $value);
                $buffer .= $indent . '                            <h2>';
                $value = $this->resolveValue($context->find('userfullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="usermenu-modal-tabs-content-internal"></div>`);
';
                $buffer .= $indent . '                    modal.root.find(".usermenu-modal-tabs-content-internal").load(href);
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    modal.root.find(".modal-header").removeClass("show-avatar");
';
                $buffer .= $indent . '                    modal.root.find(".usermenu-modal-tabs-content").load(href);
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }
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
