/***
 * Skipped minification because the original files appears to be already minified.
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
! function (t, e) {
    "object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? exports.Warning = e() : t.Warning = e()
}(window, function () {
    return function (t) {
        var e = {};

        function n(r) {
            if (e[r]) return e[r].exports;
            var o = e[r] = {
                i: r,
                l: !1,
                exports: {}
            };
            return t[r].call(o.exports, o, o.exports, n), o.l = !0, o.exports
        }
        return n.m = t, n.c = e, n.d = function (t, e, r) {
            n.o(t, e) || Object.defineProperty(t, e, {
                enumerable: !0,
                get: r
            })
        }, n.r = function (t) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
                value: "Module"
            }), Object.defineProperty(t, "__esModule", {
                value: !0
            })
        }, n.t = function (t, e) {
            if (1 & e && (t = n(t)), 8 & e) return t;
            if (4 & e && "object" == typeof t && t && t.__esModule) return t;
            var r = Object.create(null);
            if (n.r(r), Object.defineProperty(r, "default", {
                    enumerable: !0,
                    value: t
                }), 2 & e && "string" != typeof t)
                for (var o in t) n.d(r, o, function (e) {
                    return t[e]
                }.bind(null, o));
            return r
        }, n.n = function (t) {
            var e = t && t.__esModule ? function () {
                return t.default
            } : function () {
                return t
            };
            return n.d(e, "a", e), e
        }, n.o = function (t, e) {
            return Object.prototype.hasOwnProperty.call(t, e)
        }, n.p = "/", n(n.s = 1)
    }([function (t, e) {
        t.exports = '<svg width="16" height="17" viewBox="0 0 320 294" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M160.5 97c12.426 0 22.5 10.074 22.5 22.5v28c0 12.426-10.074 22.5-22.5 22.5S138 159.926 138 147.5v-28c0-12.426 10.074-22.5 22.5-22.5zm0 83c14.636 0 26.5 11.864 26.5 26.5S175.136 233 160.5 233 134 221.136 134 206.5s11.864-26.5 26.5-26.5zm-.02-135c-6.102 0-14.05 8.427-23.842 25.28l-74.73 127.605c-12.713 21.444-17.806 35.025-15.28 40.742 2.527 5.717 8.519 9.175 17.974 10.373h197.255c5.932-1.214 10.051-4.671 12.357-10.373 2.307-5.702-1.812-16.903-12.357-33.603L184.555 70.281C174.608 53.427 166.583 45 160.48 45zm154.61 165.418c2.216 6.027 3.735 11.967 4.393 18.103.963 8.977.067 18.035-3.552 26.98-7.933 19.612-24.283 33.336-45.054 37.586l-4.464.913H61.763l-2.817-.357c-10.267-1.3-19.764-4.163-28.422-9.16-11.051-6.377-19.82-15.823-25.055-27.664-4.432-10.03-5.235-19.952-3.914-29.887.821-6.175 2.486-12.239 4.864-18.58 3.616-9.64 9.159-20.55 16.718-33.309L97.77 47.603c6.469-11.125 12.743-20.061 19.436-27.158 4.62-4.899 9.562-9.07 15.206-12.456C140.712 3.01 150.091 0 160.481 0c10.358 0 19.703 2.99 27.989 7.933 5.625 3.356 10.563 7.492 15.193 12.354 6.735 7.072 13.08 15.997 19.645 27.12l.142.24 76.986 134.194c6.553 10.46 11.425 19.799 14.654 28.577z"></path></svg>'
    }, function (t, e, n) {
        "use strict";
        n.r(e), n.d(e, "default", function () {
            return c
        });
        var r = n(0),
            o = n.n(r);

        function i(t) {
            return function (t) {
                if (Array.isArray(t)) {
                    for (var e = 0, n = new Array(t.length); e < t.length; e++) n[e] = t[e];
                    return n
                }
            }(t) || function (t) {
                if (Symbol.iterator in Object(t) || "[object Arguments]" === Object.prototype.toString.call(t)) return Array.from(t)
            }(t) || function () {
                throw new TypeError("Invalid attempt to spread non-iterable instance")
            }()
        }

        function a(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function s(t, e, n) {
            return e && a(t.prototype, e), n && a(t, n), t
        }
        n(2).toString();
        var c = function () {
            function t(e) {
                var n = e.data,
                    r = e.config,
                    o = e.api,
                    i = e.readOnly;
                ! function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, t), this.api = o, this.readOnly = i, this.titlePlaceholder = r.titlePlaceholder || t.DEFAULT_TITLE_PLACEHOLDER, this.messagePlaceholder = r.messagePlaceholder || t.DEFAULT_MESSAGE_PLACEHOLDER, this.data = {
                    title: n.title || "",
                    message: n.message || ""
                }
            }
            return s(t, [{
                key: "CSS",
                get: function () {
                    return {
                        baseClass: this.api.styles.block,
                        wrapper: "cdx-warning",
                        title: "cdx-warning__title",
                        input: this.api.styles.input,
                        message: "cdx-warning__message"
                    }
                }
            }], [{
                key: "isReadOnlySupported",
                get: function () {
                    return !0
                }
            }, {
                key: "toolbox",
                get: function () {
                    return {
                        icon: o.a,
                        title: "Warning"
                    }
                }
            }, {
                key: "enableLineBreaks",
                get: function () {
                    return !0
                }
            }, {
                key: "DEFAULT_TITLE_PLACEHOLDER",
                get: function () {
                    return "Title"
                }
            }, {
                key: "DEFAULT_MESSAGE_PLACEHOLDER",
                get: function () {
                    return "Message"
                }
            }]), s(t, [{
                key: "render",
                value: function () {
                    var t = this._make("div", [this.CSS.baseClass, this.CSS.wrapper]),
                        e = this._make("div", [this.CSS.input, this.CSS.title], {
                            contentEditable: !this.readOnly,
                            innerHTML: this.data.title
                        }),
                        n = this._make("div", [this.CSS.input, this.CSS.message], {
                            contentEditable: !this.readOnly,
                            innerHTML: this.data.message
                        });
                    return e.dataset.placeholder = this.titlePlaceholder, n.dataset.placeholder = this.messagePlaceholder, t.appendChild(e), t.appendChild(n), t
                }
            }, {
                key: "save",
                value: function (t) {
                    var e = t.querySelector(".".concat(this.CSS.title)),
                        n = t.querySelector(".".concat(this.CSS.message));
                    return Object.assign(this.data, {
                        title: e.innerHTML,
                        message: n.innerHTML
                    })
                }
            }, {
                key: "_make",
                value: function (t) {
                    var e, n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null,
                        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                        o = document.createElement(t);
                    Array.isArray(n) ? (e = o.classList).add.apply(e, i(n)) : n && o.classList.add(n);
                    for (var a in r) o[a] = r[a];
                    return o
                }
            }], [{
                key: "sanitize",
                get: function () {
                    return {
                        title: {},
                        message: {}
                    }
                }
            }]), t
        }()
    }, function (t, e, n) {
        var r = n(3);
        "string" == typeof r && (r = [
            [t.i, r, ""]
        ]);
        var o = {
            hmr: !0,
            transform: void 0,
            insertInto: void 0
        };
        n(5)(r, o);
        r.locals && (t.exports = r.locals)
    }, function (t, e, n) {
        (t.exports = n(4)(!1)).push([t.i, ".cdx-warning {\n  position: relative;\n}\n\n.cdx-warning [contentEditable=true][data-placeholder]::before{\n  position: absolute;\n  content: attr(data-placeholder);\n  color: #707684;\n  font-weight: normal;\n  opacity: 0;\n}\n\n.cdx-warning [contentEditable=true][data-placeholder]:empty::before {\n  opacity: 1;\n}\n\n.cdx-warning [contentEditable=true][data-placeholder]:empty:focus::before {\n  opacity: 0;\n}\n\n\n.cdx-warning::before {\n  content: '';\n  background-image: url(\"data:image/svg+xml,%3Csvg width='16' height='17' viewBox='0 0 320 294' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cpath fill='%237B7E89' d='M160.5 97c12.426 0 22.5 10.074 22.5 22.5v28c0 12.426-10.074 22.5-22.5 22.5S138 159.926 138 147.5v-28c0-12.426 10.074-22.5 22.5-22.5zm0 83c14.636 0 26.5 11.864 26.5 26.5S175.136 233 160.5 233 134 221.136 134 206.5s11.864-26.5 26.5-26.5zm-.02-135c-6.102 0-14.05 8.427-23.842 25.28l-74.73 127.605c-12.713 21.444-17.806 35.025-15.28 40.742 2.527 5.717 8.519 9.175 17.974 10.373h197.255c5.932-1.214 10.051-4.671 12.357-10.373 2.307-5.702-1.812-16.903-12.357-33.603L184.555 70.281C174.608 53.427 166.583 45 160.48 45zm154.61 165.418c2.216 6.027 3.735 11.967 4.393 18.103.963 8.977.067 18.035-3.552 26.98-7.933 19.612-24.283 33.336-45.054 37.586l-4.464.913H61.763l-2.817-.357c-10.267-1.3-19.764-4.163-28.422-9.16-11.051-6.377-19.82-15.823-25.055-27.664-4.432-10.03-5.235-19.952-3.914-29.887.821-6.175 2.486-12.239 4.864-18.58 3.616-9.64 9.159-20.55 16.718-33.309L97.77 47.603c6.469-11.125 12.743-20.061 19.436-27.158 4.62-4.899 9.562-9.07 15.206-12.456C140.712 3.01 150.091 0 160.481 0c10.358 0 19.703 2.99 27.989 7.933 5.625 3.356 10.563 7.492 15.193 12.354 6.735 7.072 13.08 15.997 19.645 27.12l.142.24 76.986 134.194c6.553 10.46 11.425 19.799 14.654 28.577z'/%3E%3C/svg%3E\");\n  width: 18px;\n  height: 18px;\n  background-size: 18px 18px;\n  position: absolute;\n  margin-top: 12px;\n  left: -30px;\n}\n\n@media all and (max-width: 735px) {\n  .cdx-warning::before {\n    display: none;\n  }\n}\n\n.cdx-warning__message {\n  min-height: 85px;\n}\n\n.cdx-warning__title {\n  margin-bottom: 6px;\n}\n", ""])
    }, function (t, e, n) {
        "use strict";
        t.exports = function (t) {
            var e = [];
            return e.toString = function () {
                return this.map(function (e) {
                    var n = function (t, e) {
                        var n = t[1] || "",
                            r = t[3];
                        if (!r) return n;
                        if (e && "function" == typeof btoa) {
                            var o = (a = r, "/*# sourceMappingURL=data:application/json;charset=utf-8;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(a)))) + " */"),
                                i = r.sources.map(function (t) {
                                    return "/*# sourceURL=" + r.sourceRoot + t + " */"
                                });
                            return [n].concat(i).concat([o]).join("\n")
                        }
                        var a;
                        return [n].join("\n")
                    }(e, t);
                    return e[2] ? "@media " + e[2] + "{" + n + "}" : n
                }).join("")
            }, e.i = function (t, n) {
                "string" == typeof t && (t = [
                    [null, t, ""]
                ]);
                for (var r = {}, o = 0; o < this.length; o++) {
                    var i = this[o][0];
                    null != i && (r[i] = !0)
                }
                for (o = 0; o < t.length; o++) {
                    var a = t[o];
                    null != a[0] && r[a[0]] || (n && !a[2] ? a[2] = n : n && (a[2] = "(" + a[2] + ") and (" + n + ")"), e.push(a))
                }
            }, e
        }
    }, function (t, e, n) {
        var r, o, i = {},
            a = (r = function () {
                return window && document && document.all && !window.atob
            }, function () {
                return void 0 === o && (o = r.apply(this, arguments)), o
            }),
            s = function (t) {
                var e = {};
                return function (t, n) {
                    if ("function" == typeof t) return t();
                    if (void 0 === e[t]) {
                        var r = function (t, e) {
                            return e ? e.querySelector(t) : document.querySelector(t)
                        }.call(this, t, n);
                        if (window.HTMLIFrameElement && r instanceof window.HTMLIFrameElement) try {
                            r = r.contentDocument.head
                        } catch (t) {
                            r = null
                        }
                        e[t] = r
                    }
                    return e[t]
                }
            }(),
            c = null,
            l = 0,
            u = [],
            f = n(6);

        function d(t, e) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n],
                    o = i[r.id];
                if (o) {
                    o.refs++;
                    for (var a = 0; a < o.parts.length; a++) o.parts[a](r.parts[a]);
                    for (; a < r.parts.length; a++) o.parts.push(y(r.parts[a], e))
                } else {
                    var s = [];
                    for (a = 0; a < r.parts.length; a++) s.push(y(r.parts[a], e));
                    i[r.id] = {
                        id: r.id,
                        refs: 1,
                        parts: s
                    }
                }
            }
        }

        function p(t, e) {
            for (var n = [], r = {}, o = 0; o < t.length; o++) {
                var i = t[o],
                    a = e.base ? i[0] + e.base : i[0],
                    s = {
                        css: i[1],
                        media: i[2],
                        sourceMap: i[3]
                    };
                r[a] ? r[a].parts.push(s) : n.push(r[a] = {
                    id: a,
                    parts: [s]
                })
            }
            return n
        }

        function h(t, e) {
            var n = s(t.insertInto);
            if (!n) throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
            var r = u[u.length - 1];
            if ("top" === t.insertAt) r ? r.nextSibling ? n.insertBefore(e, r.nextSibling) : n.appendChild(e) : n.insertBefore(e, n.firstChild), u.push(e);
            else if ("bottom" === t.insertAt) n.appendChild(e);
            else {
                if ("object" != typeof t.insertAt || !t.insertAt.before) throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
                var o = s(t.insertAt.before, n);
                n.insertBefore(e, o)
            }
        }

        function v(t) {
            if (null === t.parentNode) return !1;
            t.parentNode.removeChild(t);
            var e = u.indexOf(t);
            e >= 0 && u.splice(e, 1)
        }

        function g(t) {
            var e = document.createElement("style");
            if (void 0 === t.attrs.type && (t.attrs.type = "text/css"), void 0 === t.attrs.nonce) {
                var r = function () {
                    0;
                    return n.nc
                }();
                r && (t.attrs.nonce = r)
            }
            return m(e, t.attrs), h(t, e), e
        }

        function m(t, e) {
            Object.keys(e).forEach(function (n) {
                t.setAttribute(n, e[n])
            })
        }

        function y(t, e) {
            var n, r, o, i;
            if (e.transform && t.css) {
                if (!(i = "function" == typeof e.transform ? e.transform(t.css) : e.transform.default(t.css))) return function () {};
                t.css = i
            }
            if (e.singleton) {
                var a = l++;
                n = c || (c = g(e)), r = x.bind(null, n, a, !1), o = x.bind(null, n, a, !0)
            } else t.sourceMap && "function" == typeof URL && "function" == typeof URL.createObjectURL && "function" == typeof URL.revokeObjectURL && "function" == typeof Blob && "function" == typeof btoa ? (n = function (t) {
                var e = document.createElement("link");
                return void 0 === t.attrs.type && (t.attrs.type = "text/css"), t.attrs.rel = "stylesheet", m(e, t.attrs), h(t, e), e
            }(e), r = function (t, e, n) {
                var r = n.css,
                    o = n.sourceMap,
                    i = void 0 === e.convertToAbsoluteUrls && o;
                (e.convertToAbsoluteUrls || i) && (r = f(r));
                o && (r += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(o)))) + " */");
                var a = new Blob([r], {
                        type: "text/css"
                    }),
                    s = t.href;
                t.href = URL.createObjectURL(a), s && URL.revokeObjectURL(s)
            }.bind(null, n, e), o = function () {
                v(n), n.href && URL.revokeObjectURL(n.href)
            }) : (n = g(e), r = function (t, e) {
                var n = e.css,
                    r = e.media;
                r && t.setAttribute("media", r);
                if (t.styleSheet) t.styleSheet.cssText = n;
                else {
                    for (; t.firstChild;) t.removeChild(t.firstChild);
                    t.appendChild(document.createTextNode(n))
                }
            }.bind(null, n), o = function () {
                v(n)
            });
            return r(t),
                function (e) {
                    if (e) {
                        if (e.css === t.css && e.media === t.media && e.sourceMap === t.sourceMap) return;
                        r(t = e)
                    } else o()
                }
        }
        t.exports = function (t, e) {
            if ("undefined" != typeof DEBUG && DEBUG && "object" != typeof document) throw new Error("The style-loader cannot be used in a non-browser environment");
            (e = e || {}).attrs = "object" == typeof e.attrs ? e.attrs : {}, e.singleton || "boolean" == typeof e.singleton || (e.singleton = a()), e.insertInto || (e.insertInto = "head"), e.insertAt || (e.insertAt = "bottom");
            var n = p(t, e);
            return d(n, e),
                function (t) {
                    for (var r = [], o = 0; o < n.length; o++) {
                        var a = n[o];
                        (s = i[a.id]).refs--, r.push(s)
                    }
                    t && d(p(t, e), e);
                    for (o = 0; o < r.length; o++) {
                        var s;
                        if (0 === (s = r[o]).refs) {
                            for (var c = 0; c < s.parts.length; c++) s.parts[c]();
                            delete i[s.id]
                        }
                    }
                }
        };
        var b, w = (b = [], function (t, e) {
            return b[t] = e, b.filter(Boolean).join("\n")
        });

        function x(t, e, n, r) {
            var o = n ? "" : r.css;
            if (t.styleSheet) t.styleSheet.cssText = w(e, o);
            else {
                var i = document.createTextNode(o),
                    a = t.childNodes;
                a[e] && t.removeChild(a[e]), a.length ? t.insertBefore(i, a[e]) : t.appendChild(i)
            }
        }
    }, function (t, e) {
        t.exports = function (t) {
            var e = "undefined" != typeof window && window.location;
            if (!e) throw new Error("fixUrls requires window.location");
            if (!t || "string" != typeof t) return t;
            var n = e.protocol + "//" + e.host,
                r = n + e.pathname.replace(/\/[^\/]*$/, "/");
            return t.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function (t, e) {
                var o, i = e.trim().replace(/^"(.*)"$/, function (t, e) {
                    return e
                }).replace(/^'(.*)'$/, function (t, e) {
                    return e
                });
                return /^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(i) ? t : (o = 0 === i.indexOf("//") ? i : 0 === i.indexOf("/") ? n + i : r + i.replace(/^\.\//, ""), "url(" + JSON.stringify(o) + ")")
            })
        }
    }]).default
});
