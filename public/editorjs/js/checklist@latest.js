/***
 * Skipped minification because the original files appears to be already minified..
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
! function (e, t) {
    "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.Checklist = t() : e.Checklist = t()
}(window, (function () {
    return function (e) {
        var t = {};

        function n(r) {
            if (t[r]) return t[r].exports;
            var o = t[r] = {
                i: r,
                l: !1,
                exports: {}
            };
            return e[r].call(o.exports, o, o.exports, n), o.l = !0, o.exports
        }
        return n.m = e, n.c = t, n.d = function (e, t, r) {
            n.o(e, t) || Object.defineProperty(e, t, {
                enumerable: !0,
                get: r
            })
        }, n.r = function (e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                value: "Module"
            }), Object.defineProperty(e, "__esModule", {
                value: !0
            })
        }, n.t = function (e, t) {
            if (1 & t && (e = n(e)), 8 & t) return e;
            if (4 & t && "object" == typeof e && e && e.__esModule) return e;
            var r = Object.create(null);
            if (n.r(r), Object.defineProperty(r, "default", {
                    enumerable: !0,
                    value: e
                }), 2 & t && "string" != typeof e)
                for (var o in e) n.d(r, o, function (t) {
                    return e[t]
                }.bind(null, o));
            return r
        }, n.n = function (e) {
            var t = e && e.__esModule ? function () {
                return e.default
            } : function () {
                return e
            };
            return n.d(t, "a", t), t
        }, n.o = function (e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }, n.p = "/", n(n.s = 6)
    }([function (e, t, n) {
        var r = n(1);
        "string" == typeof r && (r = [
            [e.i, r, ""]
        ]);
        var o = {
            hmr: !0,
            transform: void 0,
            insertInto: void 0
        };
        n(3)(r, o);
        r.locals && (e.exports = r.locals)
    }, function (e, t, n) {
        (e.exports = n(2)(!1)).push([e.i, ".cdx-checklist__item {\n        display: flex;\n        box-sizing: content-box;\n    }\n\n        .cdx-checklist__item-text {\n            outline: none;\n            flex-grow: 1;\n            padding: 5px 0;\n        }\n\n        .cdx-checklist__item-checkbox {\n            display: inline-block;\n            flex-shrink: 0;\n            position: relative;\n            width: 20px;\n            height: 20px;\n            margin:  5px;\n            margin-left: 0;\n            margin-right: 7px;\n            border-radius: 50%;\n            border: 1px solid #d0d0d0;\n            background: #fff;\n            cursor: pointer;\n            user-select: none;\n        }\n\n        .cdx-checklist__item-checkbox:hover {\n                border-color: #b5b5b5;\n            }\n\n        .cdx-checklist__item-checkbox::after {\n                position: absolute;\n                top: 6px;\n                left: 5px;\n                width: 9px;\n                height: 4px;\n                border: 2px solid #fff;\n                border-top: none;\n                border-right: none;\n                background: transparent;\n                content: '';\n                opacity: 0;\n                transform: rotate(-45deg);\n            }\n\n        .cdx-checklist__item--checked .cdx-checklist__item-checkbox {\n                background: #388ae5;\n                border-color: #388ae5;\n            }\n\n        .cdx-checklist__item--checked .cdx-checklist__item-checkbox:hover {\n                    background: #307cd1;\n                }\n\n        .cdx-checklist__item--checked .cdx-checklist__item-checkbox::after {\n                    opacity: 1;\n                }\n", ""])
    }, function (e, t) {
        e.exports = function (e) {
            var t = [];
            return t.toString = function () {
                return this.map((function (t) {
                    var n = function (e, t) {
                        var n = e[1] || "",
                            r = e[3];
                        if (!r) return n;
                        if (t && "function" == typeof btoa) {
                            var o = (c = r, "/*# sourceMappingURL=data:application/json;charset=utf-8;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(c)))) + " */"),
                                i = r.sources.map((function (e) {
                                    return "/*# sourceURL=" + r.sourceRoot + e + " */"
                                }));
                            return [n].concat(i).concat([o]).join("\n")
                        }
                        var c;
                        return [n].join("\n")
                    }(t, e);
                    return t[2] ? "@media " + t[2] + "{" + n + "}" : n
                })).join("")
            }, t.i = function (e, n) {
                "string" == typeof e && (e = [
                    [null, e, ""]
                ]);
                for (var r = {}, o = 0; o < this.length; o++) {
                    var i = this[o][0];
                    "number" == typeof i && (r[i] = !0)
                }
                for (o = 0; o < e.length; o++) {
                    var c = e[o];
                    "number" == typeof c[0] && r[c[0]] || (n && !c[2] ? c[2] = n : n && (c[2] = "(" + c[2] + ") and (" + n + ")"), t.push(c))
                }
            }, t
        }
    }, function (e, t, n) {
        var r, o, i = {},
            c = (r = function () {
                return window && document && document.all && !window.atob
            }, function () {
                return void 0 === o && (o = r.apply(this, arguments)), o
            }),
            s = function (e) {
                return document.querySelector(e)
            },
            a = function (e) {
                var t = {};
                return function (e) {
                    if ("function" == typeof e) return e();
                    if (void 0 === t[e]) {
                        var n = s.call(this, e);
                        if (window.HTMLIFrameElement && n instanceof window.HTMLIFrameElement) try {
                            n = n.contentDocument.head
                        } catch (e) {
                            n = null
                        }
                        t[e] = n
                    }
                    return t[e]
                }
            }(),
            l = null,
            u = 0,
            f = [],
            d = n(4);

        function p(e, t) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n],
                    o = i[r.id];
                if (o) {
                    o.refs++;
                    for (var c = 0; c < o.parts.length; c++) o.parts[c](r.parts[c]);
                    for (; c < r.parts.length; c++) o.parts.push(g(r.parts[c], t))
                } else {
                    var s = [];
                    for (c = 0; c < r.parts.length; c++) s.push(g(r.parts[c], t));
                    i[r.id] = {
                        id: r.id,
                        refs: 1,
                        parts: s
                    }
                }
            }
        }

        function h(e, t) {
            for (var n = [], r = {}, o = 0; o < e.length; o++) {
                var i = e[o],
                    c = t.base ? i[0] + t.base : i[0],
                    s = {
                        css: i[1],
                        media: i[2],
                        sourceMap: i[3]
                    };
                r[c] ? r[c].parts.push(s) : n.push(r[c] = {
                    id: c,
                    parts: [s]
                })
            }
            return n
        }

        function m(e, t) {
            var n = a(e.insertInto);
            if (!n) throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
            var r = f[f.length - 1];
            if ("top" === e.insertAt) r ? r.nextSibling ? n.insertBefore(t, r.nextSibling) : n.appendChild(t) : n.insertBefore(t, n.firstChild), f.push(t);
            else if ("bottom" === e.insertAt) n.appendChild(t);
            else {
                if ("object" != typeof e.insertAt || !e.insertAt.before) throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
                var o = a(e.insertInto + " " + e.insertAt.before);
                n.insertBefore(t, o)
            }
        }

        function v(e) {
            if (null === e.parentNode) return !1;
            e.parentNode.removeChild(e);
            var t = f.indexOf(e);
            t >= 0 && f.splice(t, 1)
        }

        function b(e) {
            var t = document.createElement("style");
            return void 0 === e.attrs.type && (e.attrs.type = "text/css"), y(t, e.attrs), m(e, t), t
        }

        function y(e, t) {
            Object.keys(t).forEach((function (n) {
                e.setAttribute(n, t[n])
            }))
        }

        function g(e, t) {
            var n, r, o, i;
            if (t.transform && e.css) {
                if (!(i = t.transform(e.css))) return function () {};
                e.css = i
            }
            if (t.singleton) {
                var c = u++;
                n = l || (l = b(t)), r = S.bind(null, n, c, !1), o = S.bind(null, n, c, !0)
            } else e.sourceMap && "function" == typeof URL && "function" == typeof URL.createObjectURL && "function" == typeof URL.revokeObjectURL && "function" == typeof Blob && "function" == typeof btoa ? (n = function (e) {
                var t = document.createElement("link");
                return void 0 === e.attrs.type && (e.attrs.type = "text/css"), e.attrs.rel = "stylesheet", y(t, e.attrs), m(e, t), t
            }(t), r = C.bind(null, n, t), o = function () {
                v(n), n.href && URL.revokeObjectURL(n.href)
            }) : (n = b(t), r = w.bind(null, n), o = function () {
                v(n)
            });
            return r(e),
                function (t) {
                    if (t) {
                        if (t.css === e.css && t.media === e.media && t.sourceMap === e.sourceMap) return;
                        r(e = t)
                    } else o()
                }
        }
        e.exports = function (e, t) {
            if ("undefined" != typeof DEBUG && DEBUG && "object" != typeof document) throw new Error("The style-loader cannot be used in a non-browser environment");
            (t = t || {}).attrs = "object" == typeof t.attrs ? t.attrs : {}, t.singleton || "boolean" == typeof t.singleton || (t.singleton = c()), t.insertInto || (t.insertInto = "head"), t.insertAt || (t.insertAt = "bottom");
            var n = h(e, t);
            return p(n, t),
                function (e) {
                    for (var r = [], o = 0; o < n.length; o++) {
                        var c = n[o];
                        (s = i[c.id]).refs--, r.push(s)
                    }
                    e && p(h(e, t), t);
                    for (o = 0; o < r.length; o++) {
                        var s;
                        if (0 === (s = r[o]).refs) {
                            for (var a = 0; a < s.parts.length; a++) s.parts[a]();
                            delete i[s.id]
                        }
                    }
                }
        };
        var x, k = (x = [], function (e, t) {
            return x[e] = t, x.filter(Boolean).join("\n")
        });

        function S(e, t, n, r) {
            var o = n ? "" : r.css;
            if (e.styleSheet) e.styleSheet.cssText = k(t, o);
            else {
                var i = document.createTextNode(o),
                    c = e.childNodes;
                c[t] && e.removeChild(c[t]), c.length ? e.insertBefore(i, c[t]) : e.appendChild(i)
            }
        }

        function w(e, t) {
            var n = t.css,
                r = t.media;
            if (r && e.setAttribute("media", r), e.styleSheet) e.styleSheet.cssText = n;
            else {
                for (; e.firstChild;) e.removeChild(e.firstChild);
                e.appendChild(document.createTextNode(n))
            }
        }

        function C(e, t, n) {
            var r = n.css,
                o = n.sourceMap,
                i = void 0 === t.convertToAbsoluteUrls && o;
            (t.convertToAbsoluteUrls || i) && (r = d(r)), o && (r += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(o)))) + " */");
            var c = new Blob([r], {
                    type: "text/css"
                }),
                s = e.href;
            e.href = URL.createObjectURL(c), s && URL.revokeObjectURL(s)
        }
    }, function (e, t) {
        e.exports = function (e) {
            var t = "undefined" != typeof window && window.location;
            if (!t) throw new Error("fixUrls requires window.location");
            if (!e || "string" != typeof e) return e;
            var n = t.protocol + "//" + t.host,
                r = n + t.pathname.replace(/\/[^\/]*$/, "/");
            return e.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, (function (e, t) {
                var o, i = t.trim().replace(/^"(.*)"$/, (function (e, t) {
                    return t
                })).replace(/^'(.*)'$/, (function (e, t) {
                    return t
                }));
                return /^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(i) ? e : (o = 0 === i.indexOf("//") ? i : 0 === i.indexOf("/") ? n + i : r + i.replace(/^\.\//, ""), "url(" + JSON.stringify(o) + ")")
            }))
        }
    }, function (e, t, n) {
        "use strict";
        Element.prototype.matches || (Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector), Element.prototype.closest || (Element.prototype.closest = function (e) {
            var t = this;
            if (!document.documentElement.contains(t)) return null;
            do {
                if (t.matches(e)) return t;
                t = t.parentElement || t.parentNode
            } while (null !== t && 1 === t.nodeType);
            return null
        })
    }, function (e, t, n) {
        "use strict";

        function r(e) {
            return function (e) {
                if (Array.isArray(e)) return o(e)
            }(e) || function (e) {
                if ("undefined" != typeof Symbol && Symbol.iterator in Object(e)) return Array.from(e)
            }(e) || function (e, t) {
                if (!e) return;
                if ("string" == typeof e) return o(e, t);
                var n = Object.prototype.toString.call(e).slice(8, -1);
                "Object" === n && e.constructor && (n = e.constructor.name);
                if ("Map" === n || "Set" === n) return Array.from(e);
                if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return o(e, t)
            }(e) || function () {
                throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }

        function o(e, t) {
            (null == t || t > e.length) && (t = e.length);
            for (var n = 0, r = new Array(t); n < t; n++) r[n] = e[n];
            return r
        }

        function i() {
            var e = document.activeElement,
                t = window.getSelection().getRangeAt(0),
                n = t.cloneRange();
            return n.selectNodeContents(e), n.setStart(t.endContainer, t.endOffset), n.extractContents()
        }

        function c(e) {
            var t, n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null,
                o = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                i = document.createElement(e);
            Array.isArray(n) ? (t = i.classList).add.apply(t, r(n)) : n && i.classList.add(n);
            for (var c in o) i[c] = o[c];
            return i
        }

        function s(e) {
            return e.innerHTML.replace("<br>", " ").trim()
        }

        function a(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : void 0,
                r = document.createRange(),
                o = window.getSelection();
            r.selectNodeContents(e), void 0 !== n && (r.setStart(e, n), r.setEnd(e, n)), r.collapse(t), o.removeAllRanges(), o.addRange(r)
        }
        n.r(t), n.d(t, "default", (function () {
            return f
        }));
        n(0), n(5);

        function l(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }

        function u(e, t, n) {
            return t && l(e.prototype, t), n && l(e, n), e
        }
        var f = function () {
            function e(t) {
                var n = t.data,
                    r = (t.config, t.api),
                    o = t.readOnly;
                ! function (e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e), this._elements = {
                    wrapper: null,
                    items: []
                }, this.readOnly = o, this.api = r, this.data = n || {}
            }
            return u(e, null, [{
                key: "isReadOnlySupported",
                get: function () {
                    return !0
                }
            }, {
                key: "enableLineBreaks",
                get: function () {
                    return !0
                }
            }, {
                key: "toolbox",
                get: function () {
                    return {
                        icon: '<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 15a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm0-2.394a5.106 5.106 0 1 0 0-10.212 5.106 5.106 0 0 0 0 10.212zm-.675-4.665l2.708-2.708 1.392 1.392-2.708 2.708-1.392 1.391-2.971-2.971L5.245 6.36l1.58 1.58z"/></svg>',
                        title: "Checklist"
                    }
                }
            }, {
                key: "conversionConfig",
                get: function () {
                    return {
                        export: function (e) {
                            return e.items.map((function (e) {
                                return e.text
                            })).join(". ")
                        },
                        import: function (e) {
                            return {
                                items: [{
                                    text: e,
                                    checked: !1
                                }]
                            }
                        }
                    }
                }
            }]), u(e, [{
                key: "render",
                value: function () {
                    var e = this;
                    return this._elements.wrapper = c("div", [this.CSS.baseBlock, this.CSS.wrapper]), this.data.items || (this.data.items = [{
                        text: "",
                        checked: !1
                    }]), this.data.items.forEach((function (t) {
                        var n = e.createChecklistItem(t);
                        e._elements.wrapper.appendChild(n)
                    })), this.readOnly || (this._elements.wrapper.addEventListener("keydown", (function (t) {
                        switch (t.keyCode) {
                            case 13:
                                e.enterPressed(t);
                                break;
                            case 8:
                                e.backspace(t)
                        }
                    }), !1), this._elements.wrapper.addEventListener("click", (function (t) {
                        e.toggleCheckbox(t)
                    }))), this._elements.wrapper
                }
            }, {
                key: "save",
                value: function () {
                    var e = this,
                        t = this.items.map((function (t) {
                            return {
                                text: s(e.getItemInput(t)),
                                checked: t.classList.contains(e.CSS.itemChecked)
                            }
                        }));
                    return {
                        items: t = t.filter((function (e) {
                            return 0 !== e.text.trim().length
                        }))
                    }
                }
            }, {
                key: "validate",
                value: function (e) {
                    return !!e.items.length
                }
            }, {
                key: "toggleCheckbox",
                value: function (e) {
                    var t = e.target.closest(".".concat(this.CSS.item));
                    t.querySelector(".".concat(this.CSS.checkbox)).contains(e.target) && t.classList.toggle(this.CSS.itemChecked)
                }
            }, {
                key: "createChecklistItem",
                value: function () {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                        t = c("div", this.CSS.item),
                        n = c("span", this.CSS.checkbox),
                        r = c("div", this.CSS.textField, {
                            innerHTML: e.text ? e.text : "",
                            contentEditable: !this.readOnly
                        });
                    return e.checked && t.classList.add(this.CSS.itemChecked), t.appendChild(n), t.appendChild(r), t
                }
            }, {
                key: "enterPressed",
                value: function (e) {
                    e.preventDefault();
                    var t = this.items,
                        n = document.activeElement.closest(".".concat(this.CSS.item));
                    if (t.indexOf(n) === t.length - 1 && 0 === s(this.getItemInput(n)).length) {
                        var r = this.api.blocks.getCurrentBlockIndex();
                        return n.remove(), this.api.blocks.insert(), void this.api.caret.setToBlock(r + 1)
                    }
                    var o, c, l = i(),
                        u = (o = l, (c = document.createElement("div")).appendChild(o), c.innerHTML),
                        f = this.createChecklistItem({
                            text: u,
                            checked: !1
                        });
                    this._elements.wrapper.insertBefore(f, n.nextSibling), a(this.getItemInput(f), !0)
                }
            }, {
                key: "backspace",
                value: function (e) {
                    var t = e.target.closest(".".concat(this.CSS.item)),
                        n = this.items.indexOf(t),
                        r = this.items[n - 1];
                    if (r && 0 === window.getSelection().focusOffset) {
                        e.preventDefault();
                        var o = i(),
                            c = this.getItemInput(r),
                            s = c.childNodes.length;
                        c.appendChild(o), a(c, void 0, s), t.remove()
                    }
                }
            }, {
                key: "getItemInput",
                value: function (e) {
                    return e.querySelector(".".concat(this.CSS.textField))
                }
            }, {
                key: "CSS",
                get: function () {
                    return {
                        baseBlock: this.api.styles.block,
                        wrapper: "cdx-checklist",
                        item: "cdx-checklist__item",
                        itemChecked: "cdx-checklist__item--checked",
                        checkbox: "cdx-checklist__item-checkbox",
                        textField: "cdx-checklist__item-text"
                    }
                }
            }, {
                key: "items",
                get: function () {
                    return Array.from(this._elements.wrapper.querySelectorAll(".".concat(this.CSS.item)))
                }
            }]), e
        }()
    }]).default
}));
