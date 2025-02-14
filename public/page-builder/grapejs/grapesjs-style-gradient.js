/*! grapesjs-style-gradient - 2.0.3 */ ! function (e, t) {
    'object' == typeof exports && 'object' == typeof module ? module.exports = t() : 'function' == typeof define && define.amd ? define([], t) : 'object' == typeof exports ? exports["grapesjs-style-gradient"] = t() : e["grapesjs-style-gradient"] = t()
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
            'undefined' != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                value: 'Module'
            }), Object.defineProperty(e, '__esModule', {
                value: !0
            })
        }, n.t = function (e, t) {
            if (1 & t && (e = n(e)), 8 & t) return e;
            if (4 & t && 'object' == typeof e && e && e.__esModule) return e;
            var r = Object.create(null);
            if (n.r(r), Object.defineProperty(r, 'default', {
                    enumerable: !0,
                    value: e
                }), 2 & t && 'string' != typeof e)
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
            return n.d(t, 'a', t), t
        }, n.o = function (e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }, n.p = "", n(n.s = 3)
    }([function (e, t) {
        e.exports = function (e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n, e
        }
    }, function (e, t) {
        function n(t) {
            return "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? e.exports = n = function (e) {
                return typeof e
            } : e.exports = n = function (e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            }, n(t)
        }
        e.exports = n
    }, function (e, t, n) {
        e.exports = function (e) {
            function t(r) {
                if (n[r]) return n[r].exports;
                var o = n[r] = {
                    i: r,
                    l: !1,
                    exports: {}
                };
                return e[r].call(o.exports, o, o.exports, t), o.l = !0, o.exports
            }
            var n = {};
            return t.m = e, t.c = n, t.d = function (e, n, r) {
                t.o(e, n) || Object.defineProperty(e, n, {
                    configurable: !1,
                    enumerable: !0,
                    get: r
                })
            }, t.n = function (e) {
                var n = e && e.__esModule ? function () {
                    return e.default
                } : function () {
                    return e
                };
                return t.d(n, "a", n), n
            }, t.o = function (e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }, t.p = "", t(t.s = 1)
        }([function (e, t, n) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.on = function (e, t, n) {
                t = t.split(/\s+/);
                for (var r = 0; r < t.length; ++r) e.addEventListener(t[r], n)
            }, t.off = function (e, t, n) {
                t = t.split(/\s+/);
                for (var r = 0; r < t.length; ++r) e.removeEventListener(t[r], n)
            }
        }, function (e, t, n) {
            "use strict";
            var r = function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }(n(2));
            e.exports = function (e) {
                return new r.default(e)
            }
        }, function (e, t, n) {
            "use strict";

            function r(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }

            function o(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }

            function i(e, t) {
                if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return !t || "object" != typeof t && "function" != typeof t ? e : t
            }
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var a = function () {
                    function e(e, t) {
                        for (var n = 0; n < t.length; n++) {
                            var r = t[n];
                            r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                        }
                    }
                    return function (t, n, r) {
                        return n && e(t.prototype, n), r && e(t, r), t
                    }
                }(),
                l = r(n(3)),
                c = r(n(4)),
                u = n(0),
                s = function (e, t) {
                    return e.position - t.position
                },
                f = function (e) {
                    return e + "-gradient("
                },
                d = function (e) {
                    function t() {
                        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                        o(this, t);
                        var n = i(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this));
                        e = Object.assign({}, e);
                        var r = {
                            pfx: "grp",
                            el: ".grp",
                            colorEl: "",
                            min: 0,
                            max: 100,
                            direction: "90deg",
                            type: "linear",
                            height: "30px",
                            width: "100%"
                        };
                        for (var a in r) a in e || (e[a] = r[a]);
                        var l = e.el;
                        if (!((l = "string" == typeof l ? document.querySelector(l) : l) instanceof HTMLElement)) throw "Element not found, given " + l;
                        return n.el = l, n.handlers = [], n.options = e, n.on("handler:color:change", (function (e, t) {
                            return n.change(t)
                        })), n.on("handler:position:change", (function (e, t) {
                            return n.change(t)
                        })), n.on("handler:remove", (function (e) {
                            return n.change(1)
                        })), n.on("handler:add", (function (e) {
                            return n.change(1)
                        })), n.render(), n
                    }
                    return function (e, t) {
                        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
                        e.prototype = Object.create(t && t.prototype, {
                            constructor: {
                                value: e,
                                enumerable: !1,
                                writable: !0,
                                configurable: !0
                            }
                        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
                    }(t, e), a(t, [{
                        key: "setColorPicker",
                        value: function (e) {
                            this.colorPicker = e
                        }
                    }, {
                        key: "getValue",
                        value: function (e, t) {
                            var n = this.getColorValue(),
                                r = e || this.getType(),
                                o = t || this.getDirection();
                            return n ? r + "-gradient(" + o + ", " + n + ")" : ""
                        }
                    }, {
                        key: "getSafeValue",
                        value: function (e, t) {
                            var n = this.previewEl,
                                r = this.getValue(e, t);
                            if (!this.sandEl && (this.sandEl = document.createElement("div")), !n || !r) return "";
                            for (var o = this.sandEl.style, i = [r].concat(function (e) {
                                    if (Array.isArray(e)) {
                                        for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
                                        return n
                                    }
                                    return Array.from(e)
                                }(this.getPrefixedValues(e, t))), a = void 0, l = 0; l < i.length && (a = i[l], o.backgroundImage = a, o.backgroundImage != a); l++);
                            return o.backgroundImage
                        }
                    }, {
                        key: "setValue",
                        value: function () {
                            var e = this,
                                t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                                n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                                r = this.type,
                                o = this.direction,
                                i = t.indexOf("(") + 1,
                                a = t.lastIndexOf(")"),
                                l = t.substring(i, a),
                                c = l.split(/,(?![^(]*\)) /);
                            if (this.clear(n), l) {
                                c.length > 2 && (o = c.shift());
                                var u = void 0;
                                ["repeating-linear", "repeating-radial", "linear", "radial"].forEach((function (e) {
                                    t.indexOf(f(e)) > -1 && !u && (u = 1, r = e)
                                })), this.setDirection(o, n), this.setType(r, n), c.forEach((function (t) {
                                    var r = t.split(" "),
                                        o = parseFloat(r.pop()),
                                        i = r.join("");
                                    e.addHandler(o, i, 0, n)
                                })), this.updatePreview()
                            } else this.updatePreview()
                        }
                    }, {
                        key: "getColorValue",
                        value: function () {
                            var e = this.handlers;
                            return e.sort(s), (e = 1 == e.length ? [e[0], e[0]] : e).map((function (e) {
                                return e.getValue()
                            })).join(", ")
                        }
                    }, {
                        key: "getPrefixedValues",
                        value: function (e, t) {
                            var n = this.getValue(e, t);
                            return ["-moz-", "-webkit-", "-o-", "-ms-"].map((function (e) {
                                return "" + e + n
                            }))
                        }
                    }, {
                        key: "change",
                        value: function () {
                            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
                                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                            this.updatePreview(), !t.silent && this.emit("change", e)
                        }
                    }, {
                        key: "setDirection",
                        value: function (e) {
                            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                            this.options.direction = e, this.change(1, t)
                        }
                    }, {
                        key: "getDirection",
                        value: function () {
                            return this.options.direction
                        }
                    }, {
                        key: "setType",
                        value: function (e) {
                            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                            this.options.type = e, this.change(1, t)
                        }
                    }, {
                        key: "getType",
                        value: function () {
                            return this.options.type
                        }
                    }, {
                        key: "addHandler",
                        value: function (e, t) {
                            var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1,
                                r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {},
                                o = new c.default(this, e, t, n);
                            return !r.silent && this.emit("handler:add", o), o
                        }
                    }, {
                        key: "getHandler",
                        value: function (e) {
                            return this.handlers[e]
                        }
                    }, {
                        key: "getHandlers",
                        value: function () {
                            return this.handlers
                        }
                    }, {
                        key: "clear",
                        value: function () {
                            for (var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, t = this.handlers, n = t.length - 1; n >= 0; n--) t[n].remove(e)
                        }
                    }, {
                        key: "getSelected",
                        value: function () {
                            for (var e = this.getHandlers(), t = 0; t < e.length; t++) {
                                var n = e[t];
                                if (n.isSelected()) return n
                            }
                            return null
                        }
                    }, {
                        key: "updatePreview",
                        value: function () {
                            var e = this.previewEl;
                            e && (e.style.backgroundImage = this.getSafeValue("linear", "to right"))
                        }
                    }, {
                        key: "initEvents",
                        value: function () {
                            var e = this,
                                t = this.options,
                                n = t.min,
                                r = t.max,
                                o = this.previewEl,
                                i = 0,
                                a = {};
                            o && (0, u.on)(o, "click", (function (t) {
                                a.w = o.clientWidth, a.h = o.clientHeight;
                                var l = t.offsetX - o.clientLeft,
                                    c = t.offsetY - o.clientTop;
                                if (!((i = l / a.w * 100) > r || i < n)) {
                                    var u = document.createElement("canvas"),
                                        s = u.getContext("2d");
                                    u.width = a.w, u.height = a.h;
                                    var f = s.createLinearGradient(0, 0, a.w, a.h);
                                    e.getHandlers().forEach((function (e) {
                                        return f.addColorStop(e.position / 100, e.color)
                                    })), s.fillStyle = f, s.fillRect(0, 0, u.width, u.height), u.style.background = "black";
                                    var d = u.getContext("2d").getImageData(l, c, 1, 1).data,
                                        p = "rgba(" + d[0] + ", " + d[1] + ", " + d[2] + ", " + d[3] + ")";
                                    e.addHandler(i, p)
                                }
                            }))
                        }
                    }, {
                        key: "render",
                        value: function () {
                            var e = this.options,
                                t = this.el,
                                n = e.pfx,
                                r = e.height,
                                o = e.width;
                            if (t) {
                                var i = n + "-wrapper",
                                    a = n + "-preview";
                                t.innerHTML = '\n      <div class="' + i + '">\n        <div class="' + a + '"></div>\n      </div>\n    ';
                                var l = t.querySelector("." + i),
                                    c = t.querySelector("." + a),
                                    u = l.style;
                                u.position = "relative", this.wrapperEl = l, this.previewEl = c, r && (u.height = r), o && (u.width = o), this.initEvents(), this.updatePreview()
                            }
                        }
                    }]), t
                }(l.default);
            t.default = d
        }, function (e, t, n) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var r = function () {
                    function e(e, t) {
                        for (var n = 0; n < t.length; n++) {
                            var r = t[n];
                            r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                        }
                    }
                    return function (t, n, r) {
                        return n && e(t.prototype, n), r && e(t, r), t
                    }
                }(),
                o = function () {
                    function e() {
                        ! function (e, t) {
                            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                        }(this, e)
                    }
                    return r(e, [{
                        key: "on",
                        value: function (e, t, n) {
                            var r = this.e || (this.e = {});
                            return (r[e] || (r[e] = [])).push({
                                fn: t,
                                ctx: n
                            }), this
                        }
                    }, {
                        key: "once",
                        value: function (e, t, n) {
                            function r() {
                                o.off(e, r), t.apply(n, arguments)
                            }
                            var o = this;
                            return r._ = t, this.on(e, r, n)
                        }
                    }, {
                        key: "emit",
                        value: function (e) {
                            for (var t = [].slice.call(arguments, 1), n = ((this.e || (this.e = {}))[e] || []).slice(), r = 0, o = n.length; r < o; r++) n[r].fn.apply(n[r].ctx, t);
                            return this
                        }
                    }, {
                        key: "off",
                        value: function (e, t) {
                            var n = this.e || (this.e = {}),
                                r = n[e],
                                o = [];
                            if (r && t)
                                for (var i = 0, a = r.length; i < a; i++) r[i].fn !== t && r[i].fn._ !== t && o.push(r[i]);
                            return o.length ? n[e] = o : delete n[e], this
                        }
                    }]), e
                }();
            t.default = o
        }, function (e, t, n) {
            "use strict";

            function r(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var o = function () {
                    function e(e, t) {
                        for (var n = 0; n < t.length; n++) {
                            var r = t[n];
                            r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                        }
                    }
                    return function (t, n, r) {
                        return n && e(t.prototype, n), r && e(t, r), t
                    }
                }(),
                i = n(0),
                a = function () {
                    function e(t) {
                        var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                            o = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "black",
                            i = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 1;
                        r(this, e), t.getHandlers().push(this), this.gp = t, this.position = n, this.color = o, this.selected = 0, this.render(), i && this.select()
                    }
                    return o(e, [{
                        key: "toJSON",
                        value: function () {
                            return {
                                position: this.position,
                                selected: this.selected,
                                color: this.color
                            }
                        }
                    }, {
                        key: "setColor",
                        value: function (e) {
                            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1;
                            this.color = e, this.emit("handler:color:change", this, t)
                        }
                    }, {
                        key: "setPosition",
                        value: function (e) {
                            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1,
                                n = this.getEl();
                            this.position = e, n && (n.style.left = e + "%"), this.emit("handler:position:change", this, t)
                        }
                    }, {
                        key: "getColor",
                        value: function () {
                            return this.color
                        }
                    }, {
                        key: "getPosition",
                        value: function () {
                            return this.position
                        }
                    }, {
                        key: "isSelected",
                        value: function () {
                            return !!this.selected
                        }
                    }, {
                        key: "getValue",
                        value: function () {
                            return this.getColor() + " " + this.getPosition() + "%"
                        }
                    }, {
                        key: "select",
                        value: function () {
                            var e = this.getEl();
                            this.gp.getHandlers().forEach((function (e) {
                                return e.deselect()
                            })), this.selected = 1;
                            var t = this.getSelectedCls();
                            e && (e.className += " " + t), this.emit("handler:select", this)
                        }
                    }, {
                        key: "deselect",
                        value: function () {
                            var e = this.getEl();
                            this.selected = 0;
                            var t = this.getSelectedCls();
                            e && (e.className = e.className.replace(t, "").trim()), this.emit("handler:deselect", this)
                        }
                    }, {
                        key: "getSelectedCls",
                        value: function () {
                            return this.gp.options.pfx + "-handler-selected"
                        }
                    }, {
                        key: "remove",
                        value: function () {
                            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                                t = this.getEl(),
                                n = this.gp.getHandlers(),
                                r = n.splice(n.indexOf(this), 1)[0];
                            return t && t.parentNode.removeChild(t), !e.silent && this.emit("handler:remove", r), r
                        }
                    }, {
                        key: "getEl",
                        value: function () {
                            return this.el
                        }
                    }, {
                        key: "initEvents",
                        value: function () {
                            var e = this,
                                t = this.getEl(),
                                n = this.gp.previewEl,
                                r = this.gp.options,
                                o = r.min,
                                a = r.max,
                                l = t.querySelector("[data-toggle=handler-close]"),
                                c = t.querySelector("[data-toggle=handler-color-c]"),
                                u = t.querySelector("[data-toggle=handler-color-wrap]"),
                                s = t.querySelector("[data-toggle=handler-color]"),
                                f = t.querySelector("[data-toggle=handler-drag]");
                            if (c && (0, i.on)(c, "click", (function (e) {
                                    return e.stopPropagation()
                                })), l && (0, i.on)(l, "click", (function (t) {
                                    t.stopPropagation(), e.remove()
                                })), s && (0, i.on)(s, "change", (function (t) {
                                    var n = t.target.value;
                                    e.setColor(n), u && (u.style.backgroundColor = n)
                                })), f) {
                                var d = 0,
                                    p = 0,
                                    h = 0,
                                    g = {},
                                    v = {},
                                    y = {},
                                    m = function (t) {
                                        h = 1, y.x = t.clientX - v.x, y.y = t.clientY - v.y, d = 100 * y.x, d /= g.w, d = (d = (d = p + d) < o ? o : d) > a ? a : d, e.setPosition(d, 0), e.emit("handler:drag", e, d), 0 === t.which && b(t)
                                    },
                                    b = function t(n) {
                                        h && (h = 0, e.setPosition(d), (0, i.off)(document, "touchmove mousemove", m), (0, i.off)(document, "touchend mouseup", t), e.emit("handler:drag:end", e, d))
                                    };
                                (0, i.on)(f, "touchstart mousedown", (function (t) {
                                    0 === t.button && (e.select(), p = e.position, g.w = n.clientWidth, g.h = n.clientHeight, v.x = t.clientX, v.y = t.clientY, (0, i.on)(document, "touchmove mousemove", m), (0, i.on)(document, "touchend mouseup", b), e.emit("handler:drag:start", e))
                                })), (0, i.on)(f, "click", (function (e) {
                                    return e.stopPropagation()
                                }))
                            }
                        }
                    }, {
                        key: "emit",
                        value: function () {
                            var e;
                            (e = this.gp).emit.apply(e, arguments)
                        }
                    }, {
                        key: "render",
                        value: function () {
                            var e = this.gp,
                                t = e.options,
                                n = e.previewEl,
                                r = e.colorPicker,
                                o = t.pfx,
                                i = t.colorEl,
                                a = this.getColor();
                            if (n) {
                                var l = document.createElement("div"),
                                    c = l.style,
                                    u = o + "-handler";
                                return l.className = u, l.innerHTML = '\n      <div class="' + u + '-close-c">\n        <div class="' + u + '-close" data-toggle="handler-close">&Cross;</div>\n      </div>\n      <div class="' + u + '-drag" data-toggle="handler-drag"></div>\n      <div class="' + u + '-cp-c" data-toggle="handler-color-c">\n        ' + (i || '\n          <div class="' + u + '-cp-wrap" data-toggle="handler-color-wrap" style="background-color: ' + a + '">\n            <input type="color" data-toggle="handler-color" value="' + a + '">\n          </div>') + "\n      </div>\n    ", c.position = "absolute", c.top = 0, c.left = this.position + "%", n.appendChild(l), this.el = l, this.initEvents(), r && r(this), l
                            }
                        }
                    }]), e
                }();
            t.default = a
        }])
    }, function (e, t, n) {
        "use strict";
        n.r(t);
        var r = n(0),
            o = n.n(r),
            i = n(1),
            a = n.n(i),
            l = n(2),
            c = n.n(l);

        function u(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function (t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))), n.push.apply(n, r)
            }
            return n
        }

        function s(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? u(Object(n), !0).forEach((function (t) {
                    o()(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : u(Object(n)).forEach((function (t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }))
            }
            return e
        }
        var f, d, p = 'data-cp',
            h = function (e) {
                return (1 == e.getAlpha() ? e.toHexString() : e.toRgbString()).replace(/ /g, '')
            },
            g = function (e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    n = e.StyleManager,
                    r = t.colorPicker,
                    o = {},
                    i = function (e) {
                        o = e || {
                            fromTarget: 1,
                            avoidStore: 1
                        }, setTimeout((function () {
                            return o = {}
                        }))
                    };
                n.addType('gradient', {
                    view: {
                        events: {},
                        templateInput: function () {
                            return ''
                        },
                        setValue: function (e) {
                            var t = this.gp,
                                n = this.model.getDefaultValue();
                            e = e || n, i(), t && t.setValue(e), d && d.setValue(t.getType()), f && f.setValue(t.getDirection())
                        },
                        onRender: function () {
                            var l = this,
                                u = this.ppfx,
                                g = this.em,
                                v = this.model,
                                y = s({}, t, {}, v.get('gradientConfig') || {}),
                                m = y.onCustomInputChange,
                                b = document.createElement('div'),
                                w = r && "<div class=\"grp-handler-cp-wrap\">\n          <div class=\"".concat(u, "field-colorp-c\">\n            <div class=\"").concat(u, "checker-bg\"></div>\n            <div class=\"").concat(u, "field-color-picker\" ").concat(p, "></div>\n          </div>\n        </div>"),
                                k = new c.a(s({
                                    el: b,
                                    colorEl: w
                                }, y.grapickOpts)),
                                O = this.el.querySelector(".".concat(u, "fields"));
                            O.style.flexWrap = 'wrap', O.appendChild(b.children[0]), this.gp = k, k.on('change', (function (e) {
                                var t = k.getSafeValue();
                                v.setValueFromInput(t, e, o)
                            })), [
                                ['inputDirection', 'integer', 'setDirection', {
                                    name: 'Direction',
                                    units: ['deg'],
                                    defaults: 90,
                                    fixedValues: ['top', 'right', 'bottom', 'left']
                                }],
                                ['inputType', 'select', 'setType', {
                                    name: 'Type',
                                    defaults: 'linear',
                                    options: [{
                                        value: 'radial'
                                    }, {
                                        value: 'linear'
                                    }, {
                                        value: 'repeating-radial'
                                    }, {
                                        value: 'repeating-linear'
                                    }]
                                }]
                            ].forEach((function (e) {
                                var t = e[0],
                                    r = y[e[0]];
                                if (r) {
                                    var o = v.parent,
                                        c = e[1],
                                        u = 'object' == a()(r) ? r : {},
                                        p = n.createType(u.type || c, {
                                            model: s({}, e[3], {}, u),
                                            view: {
                                                propTarget: l.propTarget
                                            }
                                        });
                                    o && (p.model.parent = o), p.render(), p.model.on('change:value', (function (t, n) {
                                        var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                                        i(r), k[e[2]](t.getFullValue()), m({
                                            model: t,
                                            input: e,
                                            inputDirection: f,
                                            inputType: d,
                                            opts: r
                                        })
                                    })), O.appendChild(p.el), 'inputDirection' == t && (f = p), 'inputType' == t && (d = p)
                                }
                            })), 'default' == r && (r = function (t) {
                                var n = t.getEl().querySelector("[".concat(p, "]")),
                                    r = n.style;
                                r.backgroundColor = t.getColor();
                                var o = g && g.getConfig() || {},
                                    i = o.colorPicker || {},
                                    a = o.el,
                                    l = function (e) {
                                        var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1,
                                            o = h(e);
                                        r.backgroundColor = o, t.setColor(o, n)
                                    },
                                    c = {
                                        color: t.getColor(),
                                        change: function (e) {
                                            l(e)
                                        },
                                        move: function (e) {
                                            l(e, 0)
                                        }
                                    },
                                    f = g && g.initBaseColorPicker;
                                f ? f(n, c) : e.$(n).spectrum(s({
                                    containerClassName: "".concat(u, "one-bg ").concat(u, "two-color"),
                                    appendTo: a || 'body',
                                    maxSelectionSize: 8,
                                    showPalette: !0,
                                    palette: [],
                                    showAlpha: !0,
                                    chooseText: 'Ok',
                                    cancelText: '⨯'
                                }, c, {}, i))
                            }, k.on('handler:remove', (function (t) {
                                var n = t.getEl().querySelector("[".concat(p, "]")),
                                    r = e.$(n);
                                r.spectrum && r.spectrum('destroy')
                            }))), r && k.setColorPicker(r)
                        }
                    }
                })
            };

        function v(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function (t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))), n.push.apply(n, r)
            }
            return n
        }

        function y(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? v(Object(n), !0).forEach((function (t) {
                    o()(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : v(Object(n)).forEach((function (t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }))
            }
            return e
        }
        t.default = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                n = {
                    grapickOpts: {},
                    colorPicker: '',
                    inputDirection: 1,
                    inputType: 1,
                    onCustomInputChange: function () {
                        return 0
                    }
                },
                r = y({}, n, {}, t);
            g(e, r)
        }
    }])
}));
//# sourceMappingURL=grapesjs-style-gradient.min.js.map
