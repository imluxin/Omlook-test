<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_1aef10bd20b89d8b3bc7407237f294d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  75 => 28,  70 => 26,  62 => 24,  46 => 14,  30 => 5,  24 => 2,  55 => 11,  40 => 9,  36 => 8,  28 => 7,  21 => 2,  19 => 1,  198 => 62,  195 => 61,  190 => 55,  185 => 54,  181 => 56,  178 => 55,  175 => 54,  172 => 53,  166 => 18,  161 => 17,  158 => 16,  152 => 13,  148 => 12,  143 => 11,  140 => 10,  135 => 5,  127 => 64,  125 => 61,  119 => 57,  117 => 53,  99 => 42,  91 => 35,  83 => 30,  74 => 37,  72 => 36,  66 => 25,  56 => 25,  45 => 16,  26 => 3,  163 => 55,  159 => 53,  149 => 49,  141 => 44,  136 => 42,  132 => 40,  120 => 37,  115 => 35,  112 => 34,  106 => 33,  100 => 29,  98 => 28,  93 => 26,  85 => 23,  81 => 22,  77 => 21,  73 => 19,  68 => 18,  65 => 17,  59 => 13,  57 => 12,  53 => 11,  50 => 15,  47 => 20,  42 => 12,  39 => 10,  32 => 6,  27 => 2,);
    }
}
