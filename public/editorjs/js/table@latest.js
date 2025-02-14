/***
 * Skipped minification because the original files appears to be already minified.
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
! function (t, e) {
    "object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? exports.Table = e() : t.Table = e()
}(window, function () {
    return function (t) {
        var e = {};

        function o(r) {
            if (e[r]) return e[r].exports;
            var i = e[r] = {
                i: r,
                l: !1,
                exports: {}
            };
            return t[r].call(i.exports, i, i.exports, o), i.l = !0, i.exports
        }
        return o.m = t, o.c = e, o.d = function (t, e, r) {
            o.o(t, e) || Object.defineProperty(t, e, {
                enumerable: !0,
                get: r
            })
        }, o.r = function (t) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
                value: "Module"
            }), Object.defineProperty(t, "__esModule", {
                value: !0
            })
        }, o.t = function (t, e) {
            if (1 & e && (t = o(t)), 8 & e) return t;
            if (4 & e && "object" == typeof t && t && t.__esModule) return t;
            var r = Object.create(null);
            if (o.r(r), Object.defineProperty(r, "default", {
                    enumerable: !0,
                    value: t
                }), 2 & e && "string" != typeof t)
                for (var i in t) o.d(r, i, function (e) {
                    return t[e]
                }.bind(null, i));
            return r
        }, o.n = function (t) {
            var e = t && t.__esModule ? function () {
                return t.default
            } : function () {
                return t
            };
            return o.d(e, "a", e), e
        }, o.o = function (t, e) {
            return Object.prototype.hasOwnProperty.call(t, e)
        }, o.p = "/", o(o.s = 15)
    }([function (t, e) {
        t.exports = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path d="M8.02 2.48a.9.9 0 01.9.9l-.001 3.74h3.701a.9.9 0 010 1.8l-3.701-.001.001 3.701a.9.9 0 01-1.8 0V8.919l-3.74.001a.9.9 0 010-1.8h3.74V3.38a.9.9 0 01.9-.9z"></path></svg>'
    }, function (t, e) {
        t.exports = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path d="M12.277 3.763a.9.9 0 010 1.273L9.293 8.018l2.984 2.986a.9.9 0 01-1.273 1.272L8.02 9.291l-2.984 2.985a.9.9 0 01-1.273-1.272l2.984-2.986-2.984-2.982a.9.9 0 011.273-1.273L8.02 6.745l2.984-2.982a.9.9 0 011.273 0z"></path></svg>'
    }, function (t, e) {
        t.exports = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"><rect width="18" height="18" fill="#F4F5F7" rx="2"></rect><circle cx="11.5" cy="6.5" r="1.5"></circle><circle cx="11.5" cy="11.5" r="1.5"></circle><circle cx="6.5" cy="6.5" r="1.5"></circle><circle cx="6.5" cy="11.5" r="1.5"></circle></svg>'
    }, function (t, e) {
        t.exports = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16"><path transform="matrix(0 1 1 0 2.514 2.046)" d="M8.728-.038l.01.012 2.52 3.503a.895.895 0 01.169.568v.067a.894.894 0 01-.249.632l-.01.012-3.064 3.093a.9.9 0 01-1.29-1.254l.011-.012 1.877-1.896c-1.824-.204-3.232.063-4.242.767-1.279.892-2.035 2.571-2.222 5.112a.901.901 0 01-1.796-.132C.666 7.399 1.647 5.222 3.43 3.978c1.342-.936 3.072-1.296 5.173-1.11L7.276 1.027A.9.9 0 018.719-.05l.01.012z"></path></svg>'
    }, function (t, e) {
        t.exports = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#1D202B" d="M13.552 10.774l-.012.01-3.503 2.52a.895.895 0 01-.568.169h-.067a.894.894 0 01-.632-.249l-.012-.01-3.093-3.064a.9.9 0 011.254-1.29l.012.011 1.896 1.877c.204-1.824-.063-3.232-.767-4.242-.892-1.279-2.571-2.035-5.112-2.222a.901.901 0 01.132-1.796c3.035.224 5.212 1.205 6.456 2.988.936 1.342 1.296 3.072 1.11 5.173l1.841-1.327a.9.9 0 011.077 1.443l-.012.01z"></path></svg>'
    }, function (t, e) {
        t.exports = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#1D202B" d="M10.808 2.442l.01.012 2.52 3.503a.895.895 0 01.169.568v.067a.894.894 0 01-.249.632l-.01.012-3.064 3.093a.9.9 0 01-1.29-1.254l.011-.012 1.877-1.896c-1.824-.204-3.232.063-4.242.767-1.279.892-2.035 2.571-2.222 5.112a.901.901 0 01-1.796-.132c.224-3.035 1.205-5.212 2.988-6.456 1.342-.936 3.072-1.296 5.173-1.11L9.356 3.507a.9.9 0 011.443-1.076l.01.012z"></path></svg>'
    }, function (t, e) {
        t.exports = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#1D202B" d="M10.808 13.518l.01-.012 2.52-3.503a.895.895 0 00.169-.568v-.067a.894.894 0 00-.249-.632l-.01-.012-3.064-3.093a.9.9 0 00-1.29 1.254l.011.012 1.877 1.896c-1.824.204-3.232-.063-4.242-.767-1.279-.892-2.035-2.571-2.222-5.112a.901.901 0 00-1.796.132c.224 3.035 1.205 5.212 2.988 6.456 1.342.936 3.072 1.296 5.173 1.11l-1.327 1.841a.9.9 0 001.443 1.076l.01-.012z"></path></svg>'
    }, function (t, e) {
        t.exports = '<svg width="18" height="14"><path d="M2.833 8v1.95a1.7 1.7 0 0 0 1.7 1.7h3.45V8h-5.15zm0-2h5.15V2.35h-3.45a1.7 1.7 0 0 0-1.7 1.7V6zm12.3 2h-5.15v3.65h3.45a1.7 1.7 0 0 0 1.7-1.7V8zm0-2V4.05a1.7 1.7 0 0 0-1.7-1.7h-3.45V6h5.15zM4.533.1h8.9a3.95 3.95 0 0 1 3.95 3.95v5.9a3.95 3.95 0 0 1-3.95 3.95h-8.9a3.95 3.95 0 0 1-3.95-3.95v-5.9A3.95 3.95 0 0 1 4.533.1z"></path></svg>'
    }, function (t, e) {
        t.exports = '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="13"><path d="M14.74 10.175a1.1 1.1 0 110 2.2H1.1a1.1 1.1 0 110-2.2h13.64zm0-4.235a1.1 1.1 0 110 2.2H1.1a1.1 1.1 0 110-2.2h13.64zM13.887 0a1.952 1.952 0 110 3.905H1.954A1.953 1.953 0 111.952 0h11.935z"></path></svg>'
    }, function (t, e) {
        t.exports = '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="13"><path d="M14.602 9.9a1.237 1.237 0 110 2.475H1.238a1.238 1.238 0 110-2.475h13.364zm0-4.95a1.237 1.237 0 110 2.475H1.238a1.237 1.237 0 110-2.475h13.364zm0-4.95a1.238 1.238 0 110 2.475H1.238a1.238 1.238 0 110-2.475h13.364z"></path></svg>'
    }, function (t, e, o) {
        var r = o(11);
        "string" == typeof r && (r = [
            [t.i, r, ""]
        ]);
        var i = {
            hmr: !0,
            transform: void 0,
            insertInto: void 0
        };
        o(13)(r, i);
        r.locals && (t.exports = r.locals)
    }, function (t, e, o) {
        (t.exports = o(12)(!1)).push([t.i, '.tc-wrap{--color-background:#f9f9fb;--color-text-secondary:#7b7e89;--color-border:#e8e8eb;--cell-size:34px;--toolbox-icon-size:18px;--toolbox-padding:6px;--toolbox-aiming-field-size:calc(var(--toolbox-icon-size) + 2*var(--toolbox-padding));border-left:0;position:relative;height:100%;width:100%;margin-top:var(--toolbox-icon-size);box-sizing:border-box;display:grid;grid-template-columns:calc(100% - var(--cell-size)) var(--cell-size);}.tc-wrap--readonly{grid-template-columns:100% var(--cell-size)}.tc-wrap svg{vertical-align:top;fill:currentColor}.tc-table{position:relative;width:100%;height:100%;display:grid;font-size:14px;border-top:1px solid var(--color-border);line-height:1.4;}.tc-table:after{width:var(--cell-size);height:100%;left:calc(-1*var(--cell-size));top:0}.tc-table:after,.tc-table:before{position:absolute;content:""}.tc-table:before{width:100%;height:var(--toolbox-aiming-field-size);top:calc(-1*var(--toolbox-aiming-field-size));left:0}.tc-table--heading .tc-row:first-child{font-weight:600;border-bottom:2px solid var(--color-border);}.tc-table--heading .tc-row:first-child [contenteditable]:empty:before{content:attr(heading);color:var(--color-text-secondary)}.tc-table--heading .tc-row:first-child:after{bottom:-2px;border-bottom:2px solid var(--color-border)}.tc-add-column,.tc-add-row{display:flex;color:var(--color-text-secondary)}.tc-add-column{padding:9px 0;justify-content:center;border-top:1px solid var(--color-border)}.tc-add-row{height:var(--cell-size);align-items:center;padding-left:12px;position:relative;}.tc-add-row:before{content:"";position:absolute;right:calc(-1*var(--cell-size));width:var(--cell-size);height:100%}.tc-add-column,.tc-add-row{transition:0s;cursor:pointer;will-change:background-color;}.tc-add-column:hover,.tc-add-row:hover{transition:background-color .1s ease;background-color:var(--color-background)}.tc-add-row{margin-top:1px;}.tc-add-row:hover:before{transition:.1s;background-color:var(--color-background)}.tc-row{display:grid;grid-template-columns:repeat(auto-fit,minmax(10px,1fr));position:relative;border-bottom:1px solid var(--color-border);}.tc-row:after{content:"";pointer-events:none;position:absolute;width:var(--cell-size);height:100%;bottom:-1px;right:calc(-1*var(--cell-size));border-bottom:1px solid var(--color-border)}.tc-row--selected{background:var(--color-background)}.tc-row--selected:after{background:var(--color-background)}.tc-cell{border-right:1px solid var(--color-border);padding:6px 12px;overflow:hidden;outline:none;line-break:normal;}.tc-cell--selected{background:var(--color-background)}.tc-wrap--readonly .tc-row:after{display:none}.tc-toolbox{--toolbox-padding:6px;--popover-margin:30px;--toggler-click-zone-size:30px;--toggler-dots-color:#7b7e89;--toggler-dots-color-hovered:#1d202b;position:absolute;cursor:pointer;z-index:1;opacity:0;transition:opacity .1s;will-change:left,opacity;}.tc-toolbox--column{top:calc(-1*var(--toggler-click-zone-size));-webkit-transform:translateX(calc(-1*var(--toggler-click-zone-size)/2));transform:translateX(calc(-1*var(--toggler-click-zone-size)/2));will-change:left,opacity}.tc-toolbox--row{left:calc(-1*var(--popover-margin));-webkit-transform:translateY(calc(-1*var(--toggler-click-zone-size)/2));transform:translateY(calc(-1*var(--toggler-click-zone-size)/2));margin-top:-1px;will-change:top,opacity}.tc-toolbox--showed{opacity:1}.tc-toolbox .tc-popover{position:absolute;top:0;left:var(--popover-margin)}.tc-toolbox__toggler{display:flex;align-items:center;justify-content:center;width:var(--toggler-click-zone-size);height:var(--toggler-click-zone-size);color:var(--toggler-dots-color);opacity:0;transition:opacity .15s ease;will-change:opacity;}.tc-toolbox__toggler:hover{color:var(--toggler-dots-color-hovered)}.tc-wrap:hover .tc-toolbox__toggler{opacity:1}.tc-settings .cdx-settings-button{width:50%;margin:0}.tc-popover{--color-border:#eaeaea;--color-background:#fff;--color-background-hover:rgba(232,232,235,0.49);--color-background-confirm:#e24a4a;--color-background-confirm-hover:#d54040;--color-text-confirm:#fff;background:var(--color-background);border:1px solid var(--color-border);box-shadow:0 3px 15px -3px rgba(13,20,33,.13);border-radius:6px;padding:6px;display:none;will-change:opacity,transform;}.tc-popover--opened{display:block;-webkit-animation:menuShowing .1s cubic-bezier(.215,.61,.355,1) forwards;animation:menuShowing .1s cubic-bezier(.215,.61,.355,1) forwards}.tc-popover__item{display:flex;align-items:center;padding:2px 14px 2px 2px;border-radius:5px;cursor:pointer;white-space:nowrap;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}.tc-popover__item:hover{background:var(--color-background-hover)}.tc-popover__item:not(:last-of-type){margin-bottom:2px}.tc-popover__item-icon{display:inline-flex;width:26px;height:26px;align-items:center;justify-content:center;background:var(--color-background);border-radius:5px;border:1px solid var(--color-border);margin-right:8px}.tc-popover__item-label{line-height:22px;font-size:14px;font-weight:500}.tc-popover__item--confirm{background:var(--color-background-confirm);color:var(--color-text-confirm);}.tc-popover__item--confirm:hover{background-color:var(--color-background-confirm-hover)}.tc-popover__item--confirm .tc-popover__item-icon{background:var(--color-background-confirm);border-color:rgba(0,0,0,.1);}.tc-popover__item--confirm .tc-popover__item-icon svg{transition:-webkit-transform .2s ease-in;transition:transform .2s ease-in;transition:transform .2s ease-in,-webkit-transform .2s ease-in;-webkit-transform:rotate(90deg) scale(1.2);transform:rotate(90deg) scale(1.2)}.tc-popover__item--hidden{display:none}@-webkit-keyframes menuShowing{0%{opacity:0;-webkit-transform:translateY(-8px) scale(.9);transform:translateY(-8px) scale(.9)}70%{opacity:1;-webkit-transform:translateY(2px);transform:translateY(2px)}to{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes menuShowing{0%{opacity:0;-webkit-transform:translateY(-8px) scale(.9);transform:translateY(-8px) scale(.9)}70%{opacity:1;-webkit-transform:translateY(2px);transform:translateY(2px)}to{-webkit-transform:translateY(0);transform:translateY(0)}}', ""])
    }, function (t, e) {
        t.exports = function (t) {
            var e = [];
            return e.toString = function () {
                return this.map(function (e) {
                    var o = function (t, e) {
                        var o = t[1] || "",
                            r = t[3];
                        if (!r) return o;
                        if (e && "function" == typeof btoa) {
                            var i = (s = r, "/*# sourceMappingURL=data:application/json;charset=utf-8;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(s)))) + " */"),
                                n = r.sources.map(function (t) {
                                    return "/*# sourceURL=" + r.sourceRoot + t + " */"
                                });
                            return [o].concat(n).concat([i]).join("\n")
                        }
                        var s;
                        return [o].join("\n")
                    }(e, t);
                    return e[2] ? "@media " + e[2] + "{" + o + "}" : o
                }).join("")
            }, e.i = function (t, o) {
                "string" == typeof t && (t = [
                    [null, t, ""]
                ]);
                for (var r = {}, i = 0; i < this.length; i++) {
                    var n = this[i][0];
                    "number" == typeof n && (r[n] = !0)
                }
                for (i = 0; i < t.length; i++) {
                    var s = t[i];
                    "number" == typeof s[0] && r[s[0]] || (o && !s[2] ? s[2] = o : o && (s[2] = "(" + s[2] + ") and (" + o + ")"), e.push(s))
                }
            }, e
        }
    }, function (t, e, o) {
        var r, i, n = {},
            s = (r = function () {
                return window && document && document.all && !window.atob
            }, function () {
                return void 0 === i && (i = r.apply(this, arguments)), i
            }),
            a = function (t) {
                var e = {};
                return function (t, o) {
                    if ("function" == typeof t) return t();
                    if (void 0 === e[t]) {
                        var r = function (t, e) {
                            return e ? e.querySelector(t) : document.querySelector(t)
                        }.call(this, t, o);
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
            l = null,
            c = 0,
            d = [],
            h = o(14);

        function p(t, e) {
            for (var o = 0; o < t.length; o++) {
                var r = t[o],
                    i = n[r.id];
                if (i) {
                    i.refs++;
                    for (var s = 0; s < i.parts.length; s++) i.parts[s](r.parts[s]);
                    for (; s < r.parts.length; s++) i.parts.push(w(r.parts[s], e))
                } else {
                    var a = [];
                    for (s = 0; s < r.parts.length; s++) a.push(w(r.parts[s], e));
                    n[r.id] = {
                        id: r.id,
                        refs: 1,
                        parts: a
                    }
                }
            }
        }

        function u(t, e) {
            for (var o = [], r = {}, i = 0; i < t.length; i++) {
                var n = t[i],
                    s = e.base ? n[0] + e.base : n[0],
                    a = {
                        css: n[1],
                        media: n[2],
                        sourceMap: n[3]
                    };
                r[s] ? r[s].parts.push(a) : o.push(r[s] = {
                    id: s,
                    parts: [a]
                })
            }
            return o
        }

        function f(t, e) {
            var o = a(t.insertInto);
            if (!o) throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
            var r = d[d.length - 1];
            if ("top" === t.insertAt) r ? r.nextSibling ? o.insertBefore(e, r.nextSibling) : o.appendChild(e) : o.insertBefore(e, o.firstChild), d.push(e);
            else if ("bottom" === t.insertAt) o.appendChild(e);
            else {
                if ("object" != typeof t.insertAt || !t.insertAt.before) throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
                var i = a(t.insertAt.before, o);
                o.insertBefore(e, i)
            }
        }

        function g(t) {
            if (null === t.parentNode) return !1;
            t.parentNode.removeChild(t);
            var e = d.indexOf(t);
            e >= 0 && d.splice(e, 1)
        }

        function m(t) {
            var e = document.createElement("style");
            if (void 0 === t.attrs.type && (t.attrs.type = "text/css"), void 0 === t.attrs.nonce) {
                var r = function () {
                    0;
                    return o.nc
                }();
                r && (t.attrs.nonce = r)
            }
            return b(e, t.attrs), f(t, e), e
        }

        function b(t, e) {
            Object.keys(e).forEach(function (o) {
                t.setAttribute(o, e[o])
            })
        }

        function w(t, e) {
            var o, r, i, n;
            if (e.transform && t.css) {
                if (!(n = "function" == typeof e.transform ? e.transform(t.css) : e.transform.default(t.css))) return function () {};
                t.css = n
            }
            if (e.singleton) {
                var s = c++;
                o = l || (l = m(e)), r = C.bind(null, o, s, !1), i = C.bind(null, o, s, !0)
            } else t.sourceMap && "function" == typeof URL && "function" == typeof URL.createObjectURL && "function" == typeof URL.revokeObjectURL && "function" == typeof Blob && "function" == typeof btoa ? (o = function (t) {
                var e = document.createElement("link");
                return void 0 === t.attrs.type && (t.attrs.type = "text/css"), t.attrs.rel = "stylesheet", b(e, t.attrs), f(t, e), e
            }(e), r = function (t, e, o) {
                var r = o.css,
                    i = o.sourceMap,
                    n = void 0 === e.convertToAbsoluteUrls && i;
                (e.convertToAbsoluteUrls || n) && (r = h(r));
                i && (r += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(i)))) + " */");
                var s = new Blob([r], {
                        type: "text/css"
                    }),
                    a = t.href;
                t.href = URL.createObjectURL(s), a && URL.revokeObjectURL(a)
            }.bind(null, o, e), i = function () {
                g(o), o.href && URL.revokeObjectURL(o.href)
            }) : (o = m(e), r = function (t, e) {
                var o = e.css,
                    r = e.media;
                r && t.setAttribute("media", r);
                if (t.styleSheet) t.styleSheet.cssText = o;
                else {
                    for (; t.firstChild;) t.removeChild(t.firstChild);
                    t.appendChild(document.createTextNode(o))
                }
            }.bind(null, o), i = function () {
                g(o)
            });
            return r(t),
                function (e) {
                    if (e) {
                        if (e.css === t.css && e.media === t.media && e.sourceMap === t.sourceMap) return;
                        r(t = e)
                    } else i()
                }
        }
        t.exports = function (t, e) {
            if ("undefined" != typeof DEBUG && DEBUG && "object" != typeof document) throw new Error("The style-loader cannot be used in a non-browser environment");
            (e = e || {}).attrs = "object" == typeof e.attrs ? e.attrs : {}, e.singleton || "boolean" == typeof e.singleton || (e.singleton = s()), e.insertInto || (e.insertInto = "head"), e.insertAt || (e.insertAt = "bottom");
            var o = u(t, e);
            return p(o, e),
                function (t) {
                    for (var r = [], i = 0; i < o.length; i++) {
                        var s = o[i];
                        (a = n[s.id]).refs--, r.push(a)
                    }
                    t && p(u(t, e), e);
                    for (i = 0; i < r.length; i++) {
                        var a;
                        if (0 === (a = r[i]).refs) {
                            for (var l = 0; l < a.parts.length; l++) a.parts[l]();
                            delete n[a.id]
                        }
                    }
                }
        };
        var v, x = (v = [], function (t, e) {
            return v[t] = e, v.filter(Boolean).join("\n")
        });

        function C(t, e, o, r) {
            var i = o ? "" : r.css;
            if (t.styleSheet) t.styleSheet.cssText = x(e, i);
            else {
                var n = document.createTextNode(i),
                    s = t.childNodes;
                s[e] && t.removeChild(s[e]), s.length ? t.insertBefore(n, s[e]) : t.appendChild(n)
            }
        }
    }, function (t, e) {
        t.exports = function (t) {
            var e = "undefined" != typeof window && window.location;
            if (!e) throw new Error("fixUrls requires window.location");
            if (!t || "string" != typeof t) return t;
            var o = e.protocol + "//" + e.host,
                r = o + e.pathname.replace(/\/[^\/]*$/, "/");
            return t.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function (t, e) {
                var i, n = e.trim().replace(/^"(.*)"$/, function (t, e) {
                    return e
                }).replace(/^'(.*)'$/, function (t, e) {
                    return e
                });
                return /^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(n) ? t : (i = 0 === n.indexOf("//") ? n : 0 === n.indexOf("/") ? o + n : r + n.replace(/^\.\//, ""), "url(" + JSON.stringify(i) + ")")
            })
        }
    }, function (t, e, o) {
        "use strict";
        o.r(e);
        var r = o(0),
            i = o.n(r),
            n = o(2),
            s = o.n(n);

        function a(t, e, o = {}) {
            const r = document.createElement(t);
            Array.isArray(e) ? r.classList.add(...e) : e && r.classList.add(e);
            for (const t in o) Object.prototype.hasOwnProperty.call(o, t) && (r[t] = o[t]);
            return r
        }

        function l(t) {
            const e = t.getBoundingClientRect();
            return {
                y1: Math.floor(e.top + window.pageYOffset),
                x1: Math.floor(e.left + window.pageXOffset),
                x2: Math.floor(e.right + window.pageXOffset),
                y2: Math.floor(e.bottom + window.pageYOffset)
            }
        }

        function c(t, e) {
            const o = l(t),
                r = l(e);
            return {
                fromTopBorder: r.y1 - o.y1,
                fromLeftBorder: r.x1 - o.x1,
                fromRightBorder: o.x2 - r.x2,
                fromBottomBorder: o.y2 - r.y2
            }
        }

        function d(t, e) {
            return e.parentNode.insertBefore(t, e)
        }

        function h(t, e = !0) {
            const o = document.createRange(),
                r = window.getSelection();
            o.selectNodeContents(t), o.collapse(e), r.removeAllRanges(), r.addRange(o)
        }
        class p {
            constructor({
                items: t
            }) {
                this.items = t, this.wrapper = void 0, this.itemEls = []
            }
            static get CSS() {
                return {
                    popover: "tc-popover",
                    popoverOpened: "tc-popover--opened",
                    item: "tc-popover__item",
                    itemHidden: "tc-popover__item--hidden",
                    itemConfirmState: "tc-popover__item--confirm",
                    itemIcon: "tc-popover__item-icon",
                    itemLabel: "tc-popover__item-label"
                }
            }
            render() {
                return this.wrapper = a("div", p.CSS.popover), this.items.forEach((t, e) => {
                    const o = a("div", p.CSS.item),
                        r = a("div", p.CSS.itemIcon, {
                            innerHTML: t.icon
                        }),
                        i = a("div", p.CSS.itemLabel, {
                            textContent: t.label
                        });
                    o.dataset.index = e, o.appendChild(r), o.appendChild(i), this.wrapper.appendChild(o), this.itemEls.push(o)
                }), this.wrapper.addEventListener("click", t => {
                    this.popoverClicked(t)
                }), this.wrapper
            }
            popoverClicked(t) {
                const e = t.target.closest(`.${p.CSS.item}`);
                if (!e) return;
                const o = e.dataset.index,
                    r = this.items[o];
                !r.confirmationRequired || this.hasConfirmationState(e) ? r.onClick() : this.setConfirmationState(e)
            }
            setConfirmationState(t) {
                t.classList.add(p.CSS.itemConfirmState)
            }
            clearConfirmationState(t) {
                t.classList.remove(p.CSS.itemConfirmState)
            }
            hasConfirmationState(t) {
                return t.classList.contains(p.CSS.itemConfirmState)
            }
            get opened() {
                return this.wrapper.classList.contains(p.CSS.popoverOpened)
            }
            open() {
                this.items.forEach((t, e) => {
                    "function" == typeof t.hideIf && this.itemEls[e].classList.toggle(p.CSS.itemHidden, t.hideIf())
                }), this.wrapper.classList.add(p.CSS.popoverOpened)
            }
            close() {
                this.wrapper.classList.remove(p.CSS.popoverOpened), this.itemEls.forEach(t => {
                    this.clearConfirmationState(t)
                })
            }
        }
        class u {
            constructor({
                api: t,
                items: e,
                onOpen: o,
                onClose: r,
                cssModifier: i = ""
            }) {
                this.api = t, this.items = e, this.onOpen = o, this.onClose = r, this.cssModifier = i, this.popover = null, this.wrapper = this.createToolbox()
            }
            static get CSS() {
                return {
                    toolbox: "tc-toolbox",
                    toolboxShowed: "tc-toolbox--showed",
                    toggler: "tc-toolbox__toggler"
                }
            }
            get element() {
                return this.wrapper
            }
            createToolbox() {
                const t = a("div", [u.CSS.toolbox, this.cssModifier ? `${u.CSS.toolbox}--${this.cssModifier}` : ""]),
                    e = this.createPopover(),
                    o = this.createToggler();
                return t.appendChild(o), t.appendChild(e), t
            }
            createToggler() {
                const t = a("div", u.CSS.toggler, {
                    innerHTML: s.a
                });
                return t.addEventListener("click", () => {
                    this.togglerClicked()
                }), t
            }
            createPopover() {
                return this.popover = new p({
                    items: this.items
                }), this.popover.render()
            }
            togglerClicked() {
                this.popover.opened ? (this.popover.close(), this.onClose()) : (this.popover.open(), this.onOpen())
            }
            show(t) {
                const e = t();
                Object.entries(e).forEach(([t, e]) => {
                    this.wrapper.style[t] = e
                }), this.wrapper.classList.add(u.CSS.toolboxShowed)
            }
            hide() {
                this.popover.close(), this.wrapper.classList.remove(u.CSS.toolboxShowed)
            }
        }
        var f = o(3),
            g = o.n(f),
            m = o(4),
            b = o.n(m),
            w = o(5),
            v = o.n(w),
            x = o(6),
            C = o.n(x),
            y = o(1),
            S = o.n(y);
        const R = {
            wrapper: "tc-wrap",
            wrapperReadOnly: "tc-wrap--readonly",
            table: "tc-table",
            row: "tc-row",
            withHeadings: "tc-table--heading",
            rowSelected: "tc-row--selected",
            cell: "tc-cell",
            cellSelected: "tc-cell--selected",
            addRow: "tc-add-row",
            addColumn: "tc-add-column"
        };
        class k {
            constructor(t, e, o, r) {
                this.readOnly = t, this.api = e, this.data = o, this.config = r, this.wrapper = null, this.table = null, this.toolboxColumn = this.createColumnToolbox(), this.toolboxRow = this.createRowToolbox(), this.createTableWrapper(), this.hoveredRow = 0, this.hoveredColumn = 0, this.selectedRow = 0, this.selectedColumn = 0, this.tunes = {
                    withHeadings: !1
                }, this.resize(), this.fill(), this.focusedCell = {
                    row: 0,
                    column: 0
                }, this.documentClicked = (t => {
                    const e = null !== t.target.closest(`.${R.table}`),
                        o = null === t.target.closest(`.${R.wrapper}`);
                    (e || o) && this.hideToolboxes();
                    const r = t.target.closest(`.${R.addRow}`),
                        i = t.target.closest(`.${R.addColumn}`);
                    r && r.parentNode === this.wrapper ? (this.addRow(void 0, !0), this.hideToolboxes()) : i && i.parentNode === this.wrapper && (this.addColumn(void 0, !0), this.hideToolboxes())
                }), this.readOnly || this.bindEvents()
            }
            getWrapper() {
                return this.wrapper
            }
            bindEvents() {
                document.addEventListener("click", this.documentClicked), this.table.addEventListener("mousemove", function (t, e) {
                    let o = 0;
                    return function (...r) {
                        const i = (new Date).getTime();
                        if (!(i - o < t)) return o = i, e(...r)
                    }
                }(150, t => this.onMouseMoveInTable(t)), {
                    passive: !0
                }), this.table.onkeypress = (t => this.onKeyPressListener(t)), this.table.addEventListener("keydown", t => this.onKeyDownListener(t)), this.table.addEventListener("focusin", t => this.focusInTableListener(t))
            }
            createColumnToolbox() {
                return new u({
                    api: this.api,
                    cssModifier: "column",
                    items: [{
                        label: this.api.i18n.t("Add column to left"),
                        icon: g.a,
                        onClick: () => {
                            this.addColumn(this.selectedColumn, !0), this.hideToolboxes()
                        }
                    }, {
                        label: this.api.i18n.t("Add column to right"),
                        icon: b.a,
                        onClick: () => {
                            this.addColumn(this.selectedColumn + 1, !0), this.hideToolboxes()
                        }
                    }, {
                        label: this.api.i18n.t("Delete column"),
                        icon: S.a,
                        hideIf: () => 1 === this.numberOfColumns,
                        confirmationRequired: !0,
                        onClick: () => {
                            this.deleteColumn(this.selectedColumn), this.hideToolboxes()
                        }
                    }],
                    onOpen: () => {
                        this.selectColumn(this.hoveredColumn), this.hideRowToolbox()
                    },
                    onClose: () => {
                        this.unselectColumn()
                    }
                })
            }
            createRowToolbox() {
                return new u({
                    api: this.api,
                    cssModifier: "row",
                    items: [{
                        label: this.api.i18n.t("Add row above"),
                        icon: v.a,
                        onClick: () => {
                            this.addRow(this.selectedRow, !0), this.hideToolboxes()
                        }
                    }, {
                        label: this.api.i18n.t("Add row below"),
                        icon: C.a,
                        onClick: () => {
                            this.addRow(this.selectedRow + 1, !0), this.hideToolboxes()
                        }
                    }, {
                        label: this.api.i18n.t("Delete row"),
                        icon: S.a,
                        hideIf: () => 1 === this.numberOfRows,
                        confirmationRequired: !0,
                        onClick: () => {
                            this.deleteRow(this.selectedRow), this.hideToolboxes()
                        }
                    }],
                    onOpen: () => {
                        this.selectRow(this.hoveredRow), this.hideColumnToolbox()
                    },
                    onClose: () => {
                        this.unselectRow()
                    }
                })
            }
            moveCursorToNextRow() {
                this.focusedCell.row !== this.numberOfRows ? (this.focusedCell.row += 1, this.focusCell(this.focusedCell)) : (this.addRow(), this.focusedCell.row += 1, this.focusCell(this.focusedCell), this.updateToolboxesPosition(0, 0))
            }
            getCell(t, e) {
                return this.table.querySelector(`.${R.row}:nth-child(${t}) .${R.cell}:nth-child(${e})`)
            }
            getRow(t) {
                return this.table.querySelector(`.${R.row}:nth-child(${t})`)
            }
            getRowByCell(t) {
                return t.parentElement
            }
            getRowFirstCell(t) {
                return t.querySelector(`.${R.cell}:first-child`)
            }
            setCellContent(t, e, o) {
                this.getCell(t, e).innerHTML = o
            }
            addColumn(t = -1, e = !1) {
                let o = this.numberOfColumns;
                for (let r = 1; r <= this.numberOfRows; r++) {
                    let i;
                    const n = this.createCell();
                    if (t > 0 && t <= o ? d(n, i = this.getCell(r, t)) : i = this.getRow(r).appendChild(n), 1 === r) {
                        const i = this.getCell(r, t > 0 ? t : o + 1);
                        i && e && h(i)
                    }
                }
                this.addHeadingAttrToFirstRow()
            }
            addRow(t = -1, e = !1) {
                let o, r = a("div", R.row);
                this.tunes.withHeadings && this.removeHeadingAttrFromFirstRow();
                let i = this.numberOfColumns;
                if (t > 0 && t <= this.numberOfRows) {
                    o = d(r, this.getRow(t))
                } else o = this.table.appendChild(r);
                this.fillRow(o, i), this.tunes.withHeadings && this.addHeadingAttrToFirstRow();
                const n = this.getRowFirstCell(o);
                return n && e && h(n), o
            }
            deleteColumn(t) {
                for (let e = 1; e <= this.numberOfRows; e++) {
                    const o = this.getCell(e, t);
                    if (!o) return;
                    o.remove()
                }
            }
            deleteRow(t) {
                this.getRow(t).remove(), this.addHeadingAttrToFirstRow()
            }
            createTableWrapper() {
                if (this.wrapper = a("div", R.wrapper), this.table = a("div", R.table), this.readOnly && this.wrapper.classList.add(R.wrapperReadOnly), this.wrapper.appendChild(this.toolboxRow.element), this.wrapper.appendChild(this.toolboxColumn.element), this.wrapper.appendChild(this.table), !this.readOnly) {
                    const t = a("div", R.addColumn, {
                            innerHTML: i.a
                        }),
                        e = a("div", R.addRow, {
                            innerHTML: i.a
                        });
                    this.wrapper.appendChild(t), this.wrapper.appendChild(e)
                }
            }
            computeInitialSize() {
                const t = this.data && this.data.content,
                    e = Array.isArray(t),
                    o = !!e && t.length,
                    r = e ? t.length : void 0,
                    i = o ? t[0].length : void 0,
                    n = Number.parseInt(this.config && this.config.rows),
                    s = Number.parseInt(this.config && this.config.cols),
                    a = !isNaN(n) && n > 0 ? n : void 0,
                    l = !isNaN(s) && s > 0 ? s : void 0;
                return {
                    rows: r || a || 2,
                    cols: i || l || 2
                }
            }
            resize() {
                const {
                    rows: t,
                    cols: e
                } = this.computeInitialSize();
                for (let e = 0; e < t; e++) this.addRow();
                for (let t = 0; t < e; t++) this.addColumn()
            }
            fill() {
                const t = this.data;
                if (t && t.content)
                    for (let e = 0; e < t.content.length; e++)
                        for (let o = 0; o < t.content[e].length; o++) this.setCellContent(e + 1, o + 1, t.content[e][o])
            }
            fillRow(t, e) {
                for (let o = 1; o <= e; o++) {
                    const e = this.createCell();
                    t.appendChild(e)
                }
            }
            createCell() {
                return a("div", R.cell, {
                    contentEditable: !this.readOnly
                })
            }
            get numberOfRows() {
                return this.table.childElementCount
            }
            get numberOfColumns() {
                return this.numberOfRows ? this.table.querySelector(`.${R.row}:first-child`).childElementCount : 0
            }
            get isColumnMenuShowing() {
                return 0 !== this.selectedColumn
            }
            get isRowMenuShowing() {
                return 0 !== this.selectedRow
            }
            onMouseMoveInTable(t) {
                const {
                    row: e,
                    column: o
                } = this.getHoveredCell(t);
                this.hoveredColumn = o, this.hoveredRow = e, this.updateToolboxesPosition()
            }
            onKeyPressListener(t) {
                if ("Enter" === t.key) {
                    if (t.shiftKey) return !0;
                    this.moveCursorToNextRow()
                }
                return "Enter" !== t.key
            }
            onKeyDownListener(t) {
                "Tab" === t.key && t.stopPropagation()
            }
            focusInTableListener(t) {
                const e = t.target,
                    o = this.getRowByCell(e);
                this.focusedCell = {
                    row: Array.from(this.table.querySelectorAll(`.${R.row}`)).indexOf(o) + 1,
                    column: Array.from(o.querySelectorAll(`.${R.cell}`)).indexOf(e) + 1
                }
            }
            hideToolboxes() {
                this.hideRowToolbox(), this.hideColumnToolbox(), this.updateToolboxesPosition()
            }
            hideRowToolbox() {
                this.unselectRow(), this.toolboxRow.hide()
            }
            hideColumnToolbox() {
                this.unselectColumn(), this.toolboxColumn.hide()
            }
            focusCell() {
                this.focusedCellElem.focus()
            }
            get focusedCellElem() {
                const {
                    row: t,
                    column: e
                } = this.focusedCell;
                return this.getCell(t, e)
            }
            updateToolboxesPosition(t = this.hoveredRow, e = this.hoveredColumn) {
                this.isColumnMenuShowing || e > 0 && e <= this.numberOfColumns && this.toolboxColumn.show(() => ({
                    left: `calc((100% - var(--cell-size)) / (${this.numberOfColumns} * 2) * (1 + (${e} - 1) * 2))`
                })), this.isRowMenuShowing || t > 0 && e <= this.numberOfColumns && this.toolboxRow.show(() => {
                    const e = this.getRow(t),
                        {
                            fromTopBorder: o
                        } = c(this.table, e),
                        {
                            height: r
                        } = e.getBoundingClientRect();
                    return {
                        top: `${Math.ceil(o+r/2)}px`
                    }
                })
            }
            setHeadingsSetting(t) {
                this.tunes.withHeadings = t, t ? (this.table.classList.add(R.withHeadings), this.addHeadingAttrToFirstRow()) : (this.table.classList.remove(R.withHeadings), this.removeHeadingAttrFromFirstRow())
            }
            addHeadingAttrToFirstRow() {
                for (let t = 1; t <= this.numberOfColumns; t++) {
                    let e = this.getCell(1, t);
                    e && e.setAttribute("heading", this.api.i18n.t("Heading"))
                }
            }
            removeHeadingAttrFromFirstRow() {
                for (let t = 1; t <= this.numberOfColumns; t++) {
                    let e = this.getCell(1, t);
                    e && e.removeAttribute("heading")
                }
            }
            selectRow(t) {
                const e = this.getRow(t);
                e && (this.selectedRow = t, e.classList.add(R.rowSelected))
            }
            unselectRow() {
                if (this.selectedRow <= 0) return;
                const t = this.table.querySelector(`.${R.rowSelected}`);
                t && t.classList.remove(R.rowSelected), this.selectedRow = 0
            }
            selectColumn(t) {
                for (let e = 1; e <= this.numberOfRows; e++) {
                    const o = this.getCell(e, t);
                    o && o.classList.add(R.cellSelected)
                }
                this.selectedColumn = t
            }
            unselectColumn() {
                if (this.selectedColumn <= 0) return;
                let t = this.table.querySelectorAll(`.${R.cellSelected}`);
                Array.from(t).forEach(t => {
                    t.classList.remove(R.cellSelected)
                }), this.selectedColumn = 0
            }
            getHoveredCell(t) {
                let e = this.hoveredRow,
                    o = this.hoveredColumn;
                const {
                    width: r,
                    height: i,
                    x: n,
                    y: s
                } = function (t, e) {
                    const o = t.getBoundingClientRect(),
                        {
                            width: r,
                            height: i,
                            x: n,
                            y: s
                        } = o,
                        {
                            clientX: a,
                            clientY: l
                        } = e;
                    return {
                        width: r,
                        height: i,
                        x: a - n,
                        y: l - s
                    }
                }(this.table, t);
                return n >= 0 && (o = this.binSearch(this.numberOfColumns, t => this.getCell(1, t), ({
                    fromLeftBorder: t
                }) => n < t, ({
                    fromRightBorder: t
                }) => n > r - t)), s >= 0 && (e = this.binSearch(this.numberOfRows, t => this.getCell(t, 1), ({
                    fromTopBorder: t
                }) => s < t, ({
                    fromBottomBorder: t
                }) => s > i - t)), {
                    row: e || this.hoveredRow,
                    column: o || this.hoveredColumn
                }
            }
            binSearch(t, e, o, r) {
                let i, n = 0,
                    s = t + 1,
                    a = 0;
                for (; n < s - 1 && a < 10;) {
                    const t = e(i = Math.ceil((n + s) / 2)),
                        l = c(this.table, t);
                    if (o(l)) s = i;
                    else {
                        if (!r(l)) break;
                        n = i
                    }
                    a++
                }
                return i
            }
            getData() {
                const t = [];
                for (let e = 1; e <= this.numberOfRows; e++) {
                    const o = this.table.querySelector(`.${R.row}:nth-child(${e})`),
                        r = Array.from(o.querySelectorAll(`.${R.cell}`));
                    r.every(t => !t.textContent.trim()) || t.push(r.map(t => t.innerHTML))
                }
                return t
            }
            destroy() {
                document.removeEventListener("click", this.documentClicked)
            }
        }
        var T = o(7),
            L = o.n(T),
            O = o(8),
            z = o.n(O),
            M = o(9),
            A = o.n(M);
        class H {
            static get isReadOnlySupported() {
                return !0
            }
            static get enableLineBreaks() {
                return !0
            }
            constructor({
                data: t,
                config: e,
                api: o,
                readOnly: r
            }) {
                this.api = o, this.readOnly = r, this.data = {
                    withHeadings: !(!t || !t.withHeadings) && t.withHeadings,
                    content: t && t.content ? t.content : []
                }, this.config = e, this.table = null
            }
            static get toolbox() {
                return {
                    icon: L.a,
                    title: "Table"
                }
            }
            static get CSS() {
                return {
                    settingsWrapper: "tc-settings"
                }
            }
            render() {
                return this.table = new k(this.readOnly, this.api, this.data, this.config), this.container = a("div", this.api.styles.block), this.container.appendChild(this.table.getWrapper()), this.table.setHeadingsSetting(this.data.withHeadings), this.container
            }
            renderSettings() {
                const t = a("div", H.CSS.settingsWrapper);
                return [{
                    name: this.api.i18n.t("With headings"),
                    icon: z.a,
                    isActive: this.data.withHeadings,
                    setTune: () => {
                        this.data.withHeadings = !0
                    }
                }, {
                    name: this.api.i18n.t("Without headings"),
                    icon: A.a,
                    isActive: !this.data.withHeadings,
                    setTune: () => {
                        this.data.withHeadings = !1
                    }
                }].forEach(e => {
                    let o = a("div", this.api.styles.settingsButton);
                    e.isActive && o.classList.add(this.api.styles.settingsButtonActive), o.innerHTML = e.icon, o.addEventListener("click", () => this.toggleTune(e, o)), this.api.tooltip.onHover(o, e.name, {
                        placement: "top",
                        hidingDelay: 500
                    }), t.append(o)
                }), t
            }
            save() {
                const t = this.table.getData();
                return {
                    withHeadings: this.data.withHeadings,
                    content: t
                }
            }
            toggleTune(t, e) {
                const o = e.parentNode.querySelectorAll("." + this.api.styles.settingsButton);
                Array.from(o).forEach(t => t.classList.remove(this.api.styles.settingsButtonActive)), e.classList.toggle(this.api.styles.settingsButtonActive), t.setTune(), this.table.setHeadingsSetting(this.data.withHeadings)
            }
            destroy() {
                this.table.destroy()
            }
        }
        o(10), e.default = H
    }]).default
});
