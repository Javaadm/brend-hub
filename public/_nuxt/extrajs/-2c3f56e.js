(window.webpackJsonp = window.webpackJsonp || []).push([[178, 34, 36, 57, 97], {
    307: function (t, e, r) {
        "use strict";
        (function (t) {
            r.d(e, "b", (function () {
                return o
            })), r.d(e, "a", (function () {
                return l
            }));
            r(160), r(76), r(31), r(85), r(86);
            var o = function (image) {
                return image ? "string" == typeof image ? image : image.file.url : ""
            };

            function l(e, r) {
                return e = (e = o(e)) ? e.match(/^https?:\/\//) ? e : "local://" + e : "local://", ["/_image", "i", r, t.from(e).toString("base64").replace(/\+/g, "-").replace(/\//g, "_").replace(/=+$/, "")].join("/")
            }
        }).call(this, r(315).Buffer)
    }, 314: function (t, e, r) {
        var content = r(328);
        content.__esModule && (content = content.default), "string" == typeof content && (content = [[t.i, content, ""]]), content.locals && (t.exports = content.locals);
        (0, r(68).default)("2fea4dd0", content, !0, {sourceMap: !1})
    }, 319: function (t, e, r) {
        "use strict";
        r.r(e);
        r(10);
        var o, l, c, n = r(25), m = r(5), d = r(8), f = r(6), h = r(7), y = r(4),
            _ = (r(30), r(60), r(51), r(126), r(40), r(0)), v = r(1), w = r(308), j = r(331);

        function O(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var r, o = Object(y.a)(t);
                if (e) {
                    var l = Object(y.a)(this).constructor;
                    r = Reflect.construct(o, arguments, l)
                } else r = o.apply(this, arguments);
                return Object(h.a)(this, r)
            }
        }

        !function (t) {
            t.simple = "simple", t.primary = "primary", t.suggestion = "suggestion"
        }(o || (o = {})), function (t) {
            t.default = "default", t["blue-700"] = "blue-700", t["light-white-green-350"] = "light-white-green-350", t["transparent-black"] = "transparent-black", t["light-transparent"] = "light-transparent"
        }(l || (l = {})), function (t) {
            t.sm = "sm", t.md = "md"
        }(c || (c = {}));
        var x = function (t) {
            Object(f.a)(r, t);
            var e = O(r);

            function r() {
                var t;
                return Object(m.a)(this, r), (t = e.apply(this, arguments)).focusField = !1, t
            }

            return Object(d.a)(r, [{
                key: "selectValue", get: function () {
                    var t = this, e = this.inputValue;
                    return this.modelValue && e && (e = Array.isArray(e) ? this.options.filter((function (r) {
                        return e.includes(r[t.modelValue])
                    })) : this.options.find((function (r) {
                        return r[t.modelValue] === e
                    }))), e
                }, set: function (t) {
                    var e = this, r = t;
                    this.modelValue && t && (Array.isArray(t) ? r = t.map((function (t) {
                        return t[e.modelValue]
                    })) : "object" === Object(n.a)(t) && (r = t[this.modelValue])), this.emitValue(r)
                }
            }, {
                key: "inputPropsCombined", get: function () {
                    return Object.assign(Object.assign({}, this.inputProps), this.$attrs)
                }
            }, {
                key: "emitValue", value: function (t) {
                    return t
                }
            }, {
                key: "rootProps", get: function () {
                    var t = this.$props;
                    return {
                        title: t.title,
                        disabled: t.disabled,
                        error: t.error,
                        focus: t.focus,
                        id: t.id,
                        readonly: t.readonly,
                        value: t.value
                    }
                }
            }, {
                key: "themeClass", get: function () {
                    switch (this.theme) {
                        case l["transparent-black"]:
                            return {
                                field: "field_theme_transparent-black",
                                multiselect: "multiselect_theme_transparent-black"
                            };
                        case l["light-white-green-350"]:
                            return {
                                field: "field_theme_light-white-green-350",
                                multiselect: "multiselect_theme_light-white-green-350"
                            };
                        case l["blue-700"]:
                            return {field: "field_theme_blue-700", multiselect: "multiselect_theme_blue-700"};
                        case l["light-transparent"]:
                            return {
                                field: "field_theme_light-transparent",
                                multiselect: "multiselect_theme_light-transparent"
                            };
                        case l.default:
                            return {field: "", multiselect: ""};
                        default:
                            return this.theme ? {
                                field: "field_theme_".concat(this.theme),
                                multiselect: "multiselect_theme_".concat(this.theme)
                            } : {field: "", multiselect: ""}
                    }
                }
            }, {
                key: "sizeClass", get: function () {
                    switch (this.size) {
                        case c.sm:
                            return "multiselect_size_sm";
                        case c.md:
                            return "multiselect_size_md";
                        default:
                            return this.size ? "multiselect_size_".concat(this.size) : ""
                    }
                }
            }, {
                key: "viewClass", get: function () {
                    switch (this.view) {
                        case o.simple:
                            return {field: "field_select-view-simple", multiselect: "multiselect_view_simple"};
                        case o.primary:
                            return {field: "field_select-view-primary", multiselect: "multiselect_view_primary"};
                        case o.suggestion:
                            return {field: "field_select-view-suggestion", multiselect: "multiselect_view_suggestion"};
                        default:
                            return this.view ? {
                                field: "field_select-view-".concat(this.view),
                                multiselect: "multiselect_view_".concat(this.view)
                            } : {field: "", multiselect: ""}
                    }
                }
            }, {
                key: "onFocus", value: function () {
                    this.focusField = !0, this.fixedDropDown && this.repositionDropDown()
                }
            }, {
                key: "onBlur", value: function () {
                    this.focusField = !1
                }
            }, {
                key: "repositionDropDown", value: function () {
                    if (this.focusField) {
                        var t = this.$el.getBoundingClientRect(), e = t.top, r = t.height, o = t.width, l = t.left;
                        this.select && (this.select.$refs.list.style.width = "".concat(o, "px"), this.select.$refs.list.style.position = "fixed", this.select.$refs.list.style.bottom = "auto", this.select.$refs.list.style.top = "".concat(e + r, "px"), this.select.$refs.list.style.left = "".concat(l, "px"))
                    }
                }
            }]), r
        }(w.default);
        Object(_.c)([Object(v.Ref)()], x.prototype, "select", void 0), Object(_.c)([Object(v.Prop)({
            type: String,
            default: "text"
        })], x.prototype, "type", void 0), Object(_.c)([Object(v.Prop)({
            type: Boolean,
            default: !1
        })], x.prototype, "multiple", void 0), Object(_.c)([Object(v.Prop)({
            type: Array, default: function () {
                return []
            }
        })], x.prototype, "options", void 0), Object(_.c)([Object(v.Prop)({
            type: String,
            default: "?????? ????????????"
        })], x.prototype, "noOptions", void 0), Object(_.c)([Object(v.Prop)({
            type: String,
            default: "???????????? ???? ??????????????"
        })], x.prototype, "noResult", void 0), Object(_.c)([Object(v.Prop)({
            type: String,
            default: ""
        })], x.prototype, "placeholder", void 0), Object(_.c)([Object(v.Prop)({type: String})], x.prototype, "view", void 0), Object(_.c)([Object(v.Prop)({
            type: String,
            default: l.default
        })], x.prototype, "theme", void 0), Object(_.c)([Object(v.Prop)({
            type: String,
            default: c.md
        })], x.prototype, "size", void 0), Object(_.c)([Object(v.Prop)({
            type: Boolean,
            default: !1
        })], x.prototype, "fixedDropDown", void 0), Object(_.c)([Object(v.Prop)({
            type: String,
            default: ""
        })], x.prototype, "modelValue", void 0), Object(_.c)([Object(v.Emit)("update:value")], x.prototype, "emitValue", null);
        var k = x = Object(_.c)([Object(v.Component)({
            components: {BaseSelect: j.default, BaseFormField: w.default},
            mounted: function () {
                this.fixedDropDown && window.addEventListener("scroll", this.repositionDropDown)
            },
            destroyed: function () {
                this.fixedDropDown && window.removeEventListener("scroll", this.repositionDropDown)
            }
        })], x), C = r(9), component = Object(C.a)(k, (function () {
            var t = this, e = t.$createElement, r = t._self._c || e;
            return r("BaseFormField", t._b({
                class: ["field_select", t.themeClass.field, t.viewClass.field],
                attrs: {outlined: !1, focus: t.focusField}
            }, "BaseFormField", t.rootProps, !1), [r("BaseSelect", t._g(t._b({
                ref: "select",
                staticClass: "multiselect_field",
                class: [t.themeClass.multiselect, t.sizeClass, t.viewClass.multiselect],
                attrs: {multiple: t.multiple, options: t.options},
                on: {open: t.onFocus, close: t.onBlur},
                scopedSlots: t._u([{
                    key: "singleLabel", fn: function (e) {
                        return t.$scopedSlots.singleLabel ? [t._t("singleLabel", null, null, e)] : void 0
                    }
                }, {
                    key: "option", fn: function (e) {
                        return [r("span", {staticClass: "flex flex-1 items-center justify-between"}, [r("span", {staticClass: "flex-1"}, [t._v(t._s(e.option.title || e.search))]), t._v(" "), e.option.note ? r("span", {staticClass: "flex-initial block text-sm font-normal text-gray-300 ml-auto"}, [t._v(t._s(e.option.note))]) : t._e()])]
                    }
                }, {
                    key: "noResult", fn: function () {
                        return [r("span", [t._v(t._s(t.noResult))])]
                    }, proxy: !0
                }, {
                    key: "noOptions", fn: function () {
                        return [r("span", [t._v(t._s(t.noOptions))])]
                    }, proxy: !0
                }], null, !0),
                model: {
                    value: t.selectValue, callback: function (e) {
                        t.selectValue = e
                    }, expression: "selectValue"
                }
            }, "BaseSelect", t.inputPropsCombined, !1), t.inputListeners))], 1)
        }), [], !1, null, null, null);
        e.default = component.exports
    }, 327: function (t, e, r) {
        "use strict";
        r(314)
    }, 328: function (t, e, r) {
        var o = r(67)((function (i) {
            return i[1]
        }));
        o.push([t.i, ".multiselect{color:inherit;cursor:pointer;flex:1;min-height:unset;width:unset}.multiselect .multiselect__select{height:auto;padding:0;right:27px;top:50%;-webkit-transform:translateY(-5px);transform:translateY(-5px);-webkit-transform-origin:100% 50%;transform-origin:100% 50%;transition-duration:.15s;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,-webkit-transform,-webkit-filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-transform,-webkit-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-timing-function:cubic-bezier(0,0,.2,1);width:23px;z-index:20}.multiselect .multiselect__select:before{--tw-border-opacity:1;border-color:rgba(0,104,255,var(--tw-border-opacity));border-right:0;border-top:0;height:6px;left:50%;margin:0;position:absolute;top:50%;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);transition:-webkit-transform .15s ease-out;transition:transform .15s ease-out;transition:transform .15s ease-out, -webkit-transform .15s ease-out;width:6px}.multiselect .multiselect__tags{--tw-border-opacity:1;--tw-border-opacity:0.16;border-color:rgba(0,0,0,var(--tw-border-opacity));border-width:1px;font-size:inherit;min-height:unset}.multiselect .multiselect__single{-webkit-box-orient:vertical;-webkit-line-clamp:1;display:-webkit-box;font-size:1.125rem;font-weight:500;line-height:unset;line-height:1.5rem;margin:0;overflow:hidden;padding-left:0}.multiselect .multiselect__content-wrapper{--tw-shadow:0 10px 15px -3px rgba(0,0,0,0.1),0 4px 6px -2px rgba(0,0,0,0.05);border-style:none;box-shadow:var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow)}.multiselect .multiselect__option{align-items:center;display:flex;font-size:1rem;line-height:1.5rem;transition-duration:.15s;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,-webkit-transform,-webkit-filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-transform,-webkit-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-timing-function:cubic-bezier(0,0,.2,1);white-space:normal}.multiselect .multiselect__option:after{line-height:1.25;margin-left:auto;padding:0;position:static}.multiselect .multiselect__option--highlight{--tw-bg-opacity:1;--tw-text-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));color:rgba(0,104,255,var(--tw-text-opacity))}.multiselect .multiselect__option--highlight:after{--tw-text-opacity:1;background-color:hsla(0,0%,100%,0);color:rgba(0,104,255,var(--tw-text-opacity))}.multiselect .multiselect__option--selected{--tw-bg-opacity:1;--tw-text-opacity:1;background-color:rgba(0,104,255,var(--tw-bg-opacity));color:rgba(255,255,255,var(--tw-text-opacity))}.multiselect .multiselect__input{font-size:1.125rem;font-weight:500;line-height:1.5rem;padding:0}.multiselect--disabled{background:unset;opacity:1}.multiselect--disabled .multiselect__select{background:unset}.field_select .multiselect{font-size:inherit}.multiselect--active{z-index:40}.multiselect--active .multiselect__select:before{-webkit-transform:rotate(135deg);transform:rotate(135deg)}.multiselect--active .multiselect__placeholder{display:block}.multiselect--active+.field__title{z-index:50}.multiselect--disabled{cursor:default}.error .multiselect .multiselect__tags{--tw-border-opacity:1;border-color:rgba(255,0,0,var(--tw-border-opacity))}.multiselect_view_simple{padding-right:.75rem}.multiselect_view_simple .multiselect__select{height:.5rem;right:4px;top:calc(50% - 4px);-webkit-transform:translateY(-50%);transform:translateY(-50%);width:.5rem}.multiselect_view_simple .multiselect__tags{border-style:none;padding:0}.multiselect_view_simple .multiselect__placeholder{display:block;margin-bottom:0;padding-top:0}.multiselect_view_simple .multiselect__content-wrapper{--tw-translate-y:0.5rem;border-radius:unset;min-width:275px;-webkit-transform:var(--tw-transform);transform:var(--tw-transform)}.multiselect_view_simple .multiselect__content{width:100%}.multiselect_view_primary .multiselect__select,.multiselect_view_suggestion .multiselect__select{--tw-translate-y:-50%;height:.5rem;right:2.5rem;top:calc(50% - 7px);-webkit-transform:var(--tw-transform);transform:var(--tw-transform);width:.5rem}.multiselect_view_primary .multiselect__tags,.multiselect_view_suggestion .multiselect__tags{border-radius:unset;height:4.5rem;padding-bottom:1rem;padding-left:1.5rem;padding-right:1.5rem;padding-top:1.75rem}.multiselect_view_primary .multiselect__content-wrapper,.multiselect_view_suggestion .multiselect__content-wrapper{border-radius:unset;padding-left:.875rem;padding-right:.875rem;padding-top:.5rem}.multiselect_view_primary .multiselect__element,.multiselect_view_suggestion .multiselect__element{margin-bottom:.5rem}.multiselect_view_suggestion .multiselect__select{display:none}.multiselect_view_suggestion .multiselect__content-wrapper{padding:0}.multiselect_view_suggestion .multiselect__element{margin-bottom:0}.multiselect_theme_blue-700 .multiselect__select:before{--tw-border-opacity:1;border-color:rgba(0,104,255,var(--tw-border-opacity))}.multiselect_theme_blue-700 .multiselect__placeholder,.multiselect_theme_blue-700 .multiselect__single{--tw-text-opacity:1;color:rgba(0,104,255,var(--tw-text-opacity))}.multiselect_theme_blue-700 .multiselect__option--selected{--tw-bg-opacity:1;--tw-text-opacity:1;background-color:rgba(0,104,255,var(--tw-bg-opacity));color:rgba(255,255,255,var(--tw-text-opacity))}.multiselect_theme_blue-700 .multiselect__option--highlight{--tw-bg-opacity:1;--tw-text-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));color:rgba(0,104,255,var(--tw-text-opacity))}.multiselect_theme_blue-700 .multiselect__option--selected.multiselect__option--highlight{--tw-bg-opacity:1;--tw-text-opacity:1;background-color:rgba(0,104,255,var(--tw-bg-opacity));color:rgba(255,255,255,var(--tw-text-opacity))}.multiselect_theme_light-white-green-350 .multiselect__tags{--tw-border-opacity:1;--tw-border-opacity:0.5;--tw-bg-opacity:1;--tw-bg-opacity:0.1;background-color:rgba(255,255,255,var(--tw-bg-opacity));border-color:rgba(255,255,255,var(--tw-border-opacity))}.multiselect_theme_light-white-green-350 .multiselect__select:before{--tw-border-opacity:1;border-color:rgba(255,255,255,var(--tw-border-opacity))}.multiselect_theme_light-white-green-350 .multiselect__placeholder{--tw-text-opacity:1;color:rgba(255,255,255,var(--tw-text-opacity))}.multiselect_theme_light-white-green-350 .multiselect__single{--tw-text-opacity:1;background:unset;color:rgba(255,255,255,var(--tw-text-opacity))}.multiselect_theme_light-white-green-350 .multiselect__option{--tw-text-opacity:1;color:rgba(0,0,0,var(--tw-text-opacity));font-weight:500}.multiselect_theme_light-white-green-350 .multiselect__option--selected{--tw-bg-opacity:1;--tw-text-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));color:rgba(10,192,103,var(--tw-text-opacity))}.multiselect_theme_light-white-green-350 .multiselect__option.multiselect__option--highlight{--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));opacity:.7}.multiselect_theme_light-white-green-350 .multiselect__option--selected.multiselect__option--highlight{--tw-bg-opacity:1;--tw-text-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));color:rgba(10,192,103,var(--tw-text-opacity))}.multiselect_theme_transparent-black .multiselect__tags{--tw-border-opacity:1;--tw-border-opacity:0.4;background-color:hsla(0,0%,100%,0);border-color:rgba(0,0,0,var(--tw-border-opacity))}.multiselect_theme_transparent-black .multiselect__select:before{--tw-border-opacity:1;--tw-border-opacity:0.48;border-color:rgba(0,0,0,var(--tw-border-opacity))}.multiselect_theme_transparent-black .multiselect__placeholder{--tw-text-opacity:1;--tw-text-opacity:0.48;color:rgba(0,0,0,var(--tw-text-opacity))}.multiselect_theme_transparent-black .multiselect__single{--tw-text-opacity:1;background:unset;color:rgba(0,0,0,var(--tw-text-opacity))}.multiselect_theme_transparent-black .multiselect__option{--tw-text-opacity:1;color:rgba(0,0,0,var(--tw-text-opacity));font-weight:500}.multiselect_theme_transparent-black .multiselect__option--selected{--tw-bg-opacity:1;--tw-text-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));color:rgba(255,197,52,var(--tw-text-opacity))}.multiselect_theme_transparent-black .multiselect__option--highlight{--tw-bg-opacity:1;--tw-text-opacity:1;--tw-text-opacity:0.7;background-color:rgba(255,255,255,var(--tw-bg-opacity));color:rgba(0,0,0,var(--tw-text-opacity))}.multiselect_theme_transparent-black .multiselect__option--selected.multiselect__option--highlight{--tw-bg-opacity:1;--tw-text-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));color:rgba(255,197,52,var(--tw-text-opacity))}.multiselect_theme_light-transparent .multiselect__tags{--tw-border-opacity:1;--tw-border-opacity:0.16;--tw-bg-opacity:1;--tw-bg-opacity:0.1;background-color:rgba(255,255,255,var(--tw-bg-opacity));border-color:rgba(255,255,255,var(--tw-border-opacity))}.multiselect_theme_light-transparent .multiselect__input,.multiselect_theme_light-transparent .multiselect__single{--tw-text-opacity:1;background-color:hsla(0,0%,100%,0);color:rgba(255,255,255,var(--tw-text-opacity))}.multiselect_theme_light-transparent .multiselect__element,.multiselect_theme_light-transparent .multiselect__option{--tw-text-opacity:1;color:rgba(0,0,0,var(--tw-text-opacity))}.multiselect_theme_light-transparent.multiselect--disabled{background-color:hsla(0,0%,100%,0);opacity:1}.multiselect_theme_light-transparent.multiselect--disabled .multiselect__input,.multiselect_theme_light-transparent.multiselect--disabled .multiselect__single{--tw-text-opacity:1;--tw-text-opacity:0.8;color:rgba(255,255,255,var(--tw-text-opacity))}.multiselect_size_sm{padding-right:1.5rem}.multiselect_size_sm .multiselect__select:before{border-width:4px;height:.75rem;width:.75rem}.multiselect_size_md .multiselect__single,.multiselect_size_sm .multiselect__option{font-size:1.125rem;line-height:1.5rem}.multiselect_size_md .multiselect__single{font-weight:500}.multiselect_size_md .multiselect__select:before{border-width:2px;height:.75rem;width:.75rem}.multiselect_size_md .multiselect__option{font-size:1.125rem;line-height:1.5rem}@media (max-width:1000px){.multiselect__option{padding:.5rem}.multiselect .multiselect__input{font-size:1rem;line-height:1.5rem}.multiselect_size_sm{padding-right:1rem}.multiselect_size_sm .multiselect__select:before{border-width:2px;height:.5rem;width:.5rem}.multiselect_size_md .multiselect__single,.multiselect_size_sm .multiselect__option{font-size:1rem;line-height:1.5rem}.multiselect_size_md .multiselect__select:before{height:.625rem;width:.625rem}.multiselect_size_md .multiselect__option{font-size:1rem;line-height:1.5rem}.multiselect_view_primary .multiselect__select{right:2rem;top:calc(50% - 6px)}.multiselect_view_primary .multiselect__tags{height:3.5rem;padding-bottom:.5rem;padding-top:1.5rem}.multiselect_view_simple .multiselect__content-wrapper{min-width:175px}}", ""]), o.locals = {}, t.exports = o
    }, 331: function (t, e, r) {
        "use strict";
        r.r(e);
        r(10);
        var o = r(5), l = r(6), c = r(7), n = r(4), m = r(0), d = r(1), f = r(370), h = r.n(f);
        r(371);

        function y(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var r, o = Object(n.a)(t);
                if (e) {
                    var l = Object(n.a)(this).constructor;
                    r = Reflect.construct(o, arguments, l)
                } else r = o.apply(this, arguments);
                return Object(c.a)(this, r)
            }
        }

        var _ = function (t) {
            Object(l.a)(r, t);
            var e = y(r);

            function r() {
                return Object(o.a)(this, r), e.apply(this, arguments)
            }

            return r
        }(d.Vue);
        Object(m.c)([Object(d.Prop)({
            type: Boolean,
            default: !1
        })], _.prototype, "searchable", void 0), Object(m.c)([Object(d.Prop)({
            type: Boolean,
            default: !1
        })], _.prototype, "showLabels", void 0), Object(m.c)([Object(d.Prop)({
            type: String,
            default: "[Enter] ?????????? ??????????????"
        })], _.prototype, "deselectLabel", void 0), Object(m.c)([Object(d.Prop)({
            type: Boolean,
            default: !1
        })], _.prototype, "allowEmpty", void 0);
        var v = _ = Object(m.c)([Object(d.Component)({extends: h.a, components: {Multiselect: h.a}})], _),
            w = (r(327), r(9)), component = Object(w.a)(v, undefined, undefined, !1, null, null, null);
        e.default = component.exports
    }, 332: function (t, e, r) {
        "use strict";
        r.r(e);
        r(10);
        var o = r(5), l = r(8), c = r(6), n = r(7), m = r(4), d = (r(32), r(122), r(0)), f = r(1), h = r(123);

        function y(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var r, o = Object(m.a)(t);
                if (e) {
                    var l = Object(m.a)(this).constructor;
                    r = Reflect.construct(o, arguments, l)
                } else r = o.apply(this, arguments);
                return Object(n.a)(this, r)
            }
        }

        var _ = function (t) {
            Object(c.a)(r, t);
            var e = y(r);

            function r() {
                return Object(o.a)(this, r), e.apply(this, arguments)
            }

            return Object(l.a)(r, [{
                key: "isEmpty", get: function () {
                    var t;
                    return !(null === (t = this.author) || void 0 === t ? void 0 : t.name) && !this.review
                }
            }]), r
        }(f.Vue);
        Object(d.c)([Object(f.Prop)({
            type: Number,
            required: !0
        })], _.prototype, "rating", void 0), Object(d.c)([Object(f.Prop)({
            type: Number,
            required: !1,
            default: 5
        })], _.prototype, "totalRating", void 0), Object(d.c)([Object(f.Prop)({
            type: Object,
            required: !1
        })], _.prototype, "author", void 0), Object(d.c)([Object(f.Prop)({
            type: String,
            required: !1
        })], _.prototype, "review", void 0);
        var v = _ = Object(d.c)([Object(f.Component)({components: {Typograf: h.default}})], _), w = r(9),
            component = Object(w.a)(v, (function () {
                var t = this, e = t.$createElement, r = t._self._c || e;
                return t.isEmpty ? t._e() : r("div", [r("div", {staticClass: "flex items-center -mx-1"}, [t.author && t.author.avatar ? r("div", {
                    staticClass: "mx-1 flex-shrink-0 bg-cover bg-no-repeat rounded-full h-12 w-12 bg-gray-600",
                    style: {backgroundImage: "url(" + t.author.avatar + ")"}
                }) : t._e(), t._v(" "), r("div", {staticClass: "mx-1"}, [t.author && t.author.name ? r("div", {staticClass: "mb-px font-medium"}, [t._v("\n                " + t._s(t.author.name) + "\n            ")]) : t._e(), t._v(" "), t.rating ? r("div", {staticClass: "flex items-center font-normal"}, [r("div", {staticClass: "flex items-center -mx-0.5"}, t._l(t.totalRating, (function (e, o) {
                    return r("div", {
                        key: e,
                        class: ["w-2.5 h-3px bg-white mx-0.5", o < t.rating ? "opacity-100" : "opacity-40"]
                    })
                })), 0), t._v(" "), r("div", {staticClass: "font-normal ml-2"}, [t._v("\n                    " + t._s(t.rating)), r("span", {staticClass: "opacity-48"}, [t._v("/" + t._s(t.totalRating))])])]) : t._e()])]), t._v(" "), t.review ? r("Typograf", {
                    staticClass: "mt-4 font-normal text-sm line-clamp-3",
                    attrs: {html: t.review}
                }) : t._e()], 1)
            }), [], !1, null, null, null);
        e.default = component.exports;
        installComponents(component, {Typograf: r(123).default})
    }, 337: function (t, e, r) {
        "use strict";
        r(129);
        e.a = function (t, e) {
            var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {}, o = r.showNumber,
                l = void 0 !== o && o, c = r.delimiter, n = void 0 === c ? "|" : c, m = t;
            return "string" == typeof m && (m = m.split(n)), "".concat(l ? e + "??" : "").concat(m[e % 10 == 1 && e % 100 != 11 ? 0 : e % 10 >= 2 && e % 10 <= 4 && (e % 100 < 10 || e % 100 >= 20) ? 1 : 2])
        }
    }, 378: function (t, e, r) {
        "use strict";
        r.r(e);
        r(10);
        var o = r(5), l = r(6), c = r(7), n = r(4), m = (r(122), r(0)), d = r(1), f = r(124), h = r(123), y = r(332);

        function _(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var r, o = Object(n.a)(t);
                if (e) {
                    var l = Object(n.a)(this).constructor;
                    r = Reflect.construct(o, arguments, l)
                } else r = o.apply(this, arguments);
                return Object(c.a)(this, r)
            }
        }

        var v = function (t) {
            Object(l.a)(r, t);
            var e = _(r);

            function r() {
                return Object(o.a)(this, r), e.apply(this, arguments)
            }

            return r
        }(d.Vue);
        Object(m.c)([Object(d.Prop)({
            type: String,
            required: !1,
            default: "normal"
        })], v.prototype, "view", void 0), Object(m.c)([Object(d.Prop)({
            type: [String, Number],
            required: !1
        })], v.prototype, "id", void 0), Object(m.c)([Object(d.Prop)({
            type: [String, Object],
            required: !1
        })], v.prototype, "to", void 0), Object(m.c)([Object(d.Prop)({
            type: String,
            required: !0
        })], v.prototype, "title", void 0), Object(m.c)([Object(d.Prop)({
            type: String,
            required: !1
        })], v.prototype, "description", void 0), Object(m.c)([Object(d.Prop)({
            type: String,
            required: !1
        })], v.prototype, "image", void 0), Object(m.c)([Object(d.Prop)({
            type: String,
            required: !1
        })], v.prototype, "imageUrlAdaptive", void 0), Object(m.c)([Object(d.Prop)({
            type: String,
            required: !1
        })], v.prototype, "imagePlaceholder", void 0), Object(m.c)([Object(d.Prop)({
            type: String,
            required: !1
        })], v.prototype, "industry", void 0), Object(m.c)([Object(d.Prop)({
            type: Object,
            required: !1
        })], v.prototype, "feedback", void 0);
        var w = v = Object(m.c)([Object(d.Component)({
            components: {
                Typograf: h.default,
                BaseImage: f.default,
                RatingItem: y.default
            }
        })], v), j = r(9), component = Object(j.a)(w, (function () {
            var t = this, e = t.$createElement, r = t._self._c || e;
            return r("div", {staticClass: "relative group  flex flex-col"}, [r("div", {
                class: {
                    "relative overflow-hidden mb-4 md:mb-2": !0,
                    "flex flex-col items-start  h-full w-full min-h-[22.5rem] lg:min-h-[15rem] md:min-h-0 md:h-60": "vertically" === t.view,
                    "h-90 lg:h-60": "vertically" !== t.view,
                    "tiny:h-52": !0
                }
            }, [r("div", {staticClass: "absolute inset-0 flex bg-gray-300 transform transition-main group-hover:scale-110"}, [t.image ? r("BaseImage", {
                staticClass: "flex-auto xs:hidden",
                attrs: {alt: t.title, src: t.image, placeholder: t.imagePlaceholder}
            }) : t._e(), t._v(" "), t.imageUrlAdaptive ? r("BaseImage", {
                staticClass: "flex-auto a-xs:hidden",
                attrs: {alt: t.title, src: t.imageUrlAdaptive, placeholder: t.imagePlaceholder}
            }) : t._e()], 1), t._v(" "), r("div", {staticClass: "absolute inset-0 flex flex-col justify-between p-4 bg-black bg-opacity-40 opacity-0 text-white text-sm transition-fast group-hover:opacity-100"}, [t.feedback ? r("RatingItem", t._b({staticClass: "mb-4"}, "RatingItem", t.feedback, !1)) : t._e(), t._v(" "), t.description ? r("Typograf", {
                staticClass: "font-normal text-sm line-clamp-3",
                attrs: {html: t.description}
            }) : t._e(), t._v(" "), t.industry ? r("div", {staticClass: "mt-auto font-normal text-white-640"}, [t._v("\n                " + t._s(t.industry) + "\n            ")]) : t._e()], 1)]), t._v(" "), r("div", {staticClass: "text-2xl inline-block font-medium lg:text-xl md:text-lg"}, [t.to ? r("NuxtLink", {
                staticClass: "after:absolute after:inset-0",
                attrs: {to: t.to}
            }, [r("Typograf", {
                staticClass: "border-b border-black-160 pb-1 transition-fast group-hover:border-black lg:pb-px",
                attrs: {as: "span", html: t.title}
            })], 1) : r("Typograf", {
                staticClass: "border-b border-black-160 pb-1 transition-fast group-hover:border-black lg:pb-px",
                attrs: {as: "span", html: t.title}
            })], 1)])
        }), [], !1, null, null, null);
        e.default = component.exports;
        installComponents(component, {BaseImage: r(124).default, RatingItem: r(332).default, Typograf: r(123).default})
    }, 394: function (t, e, r) {
        "use strict";
        r.r(e);
        r(10);
        var o = r(5), l = r(8), c = r(6), n = r(7), m = r(4), d = (r(409), r(224), r(40), r(0)), f = r(1), h = r(378),
            y = r(307), _ = r(103);

        function v(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var r, o = Object(m.a)(t);
                if (e) {
                    var l = Object(m.a)(this).constructor;
                    r = Reflect.construct(o, arguments, l)
                } else r = o.apply(this, arguments);
                return Object(n.a)(this, r)
            }
        }

        var w = Object.freeze({normal: "420:360", horizontally: "870:360", vertically: "420:820"});

        function j(t) {
            var e, r, o, l, c, n = t.previewMode.code, m = "vertically" === n, d = "horizontally" === n,
                f = "normal" === n, h = Object(y.b)(t.previewImage),
                _ = t.useMainImageAsPreviewAdaptive && t.mainImage ? Object(y.b)(t.mainImage) : Object(y.b)(t.previewImage);
            return {
                props: {
                    view: n,
                    id: t.slug,
                    to: {name: "projects-project", params: {project: t.slug}},
                    title: t.title,
                    description: t.quote,
                    industry: null === (e = t.category) || void 0 === e ? void 0 : e.title,
                    image: h.endsWith(".gif") ? h : Object(y.a)(h, "rs:fit:".concat(w[n], "/format:jpg")),
                    imageUrlAdaptive: _.endsWith(".gif") ? _ : Object(y.a)(_, "rs:fit:".concat(w[n], "/format:jpg")),
                    imagePlaceholder: h.endsWith(".gif") ? "" : Object(y.a)(h, "rs:fit:".concat(w[n], "/format:jpg/preset:placeholder")),
                    feedback: {
                        author: {
                            name: t.userName,
                            avatar: t.userImage ? Object(y.a)(t.userImage, "rs:fit:100:100/format:jpg") : ""
                        },
                        rating: (null === (o = null === (r = t.project) || void 0 === r ? void 0 : r.review) || void 0 === o ? void 0 : o.ratingForService) || 0,
                        review: (null === (c = null === (l = t.project) || void 0 === l ? void 0 : l.review) || void 0 === c ? void 0 : c.text) || ""
                    }
                },
                classes: {
                    gridItem: {
                        "col-span-4 lg:col-span-6 md:col-span-12": m || f,
                        "col-span-8 lg:col-span-6 md:col-span-12": d,
                        "row-span-2 md:row-span-1": m
                    }, card: {"flex-auto": m}
                }
            }
        }

        var O = function (t) {
            Object(c.a)(r, t);
            var e = v(r);

            function r() {
                return Object(o.a)(this, r), e.apply(this, arguments)
            }

            return Object(l.a)(r, [{
                key: "itemsNormalized", get: function () {
                    return this.items ? this.items.map(j) : null
                }
            }, {
                key: "onCardClick", value: function () {
                    Object(_.a)({dataLayer: ["universal event", {event_param: "cases-click"}]})
                }
            }]), r
        }(f.Vue);
        Object(d.c)([Object(f.Prop)({type: Array, required: !0})], O.prototype, "items", void 0);
        var x = O = Object(d.c)([Object(f.Component)({components: {CaseCard: h.default}})], O), k = r(9),
            component = Object(k.a)(x, (function () {
                var t = this, e = t.$createElement, r = t._self._c || e;
                return t.itemsNormalized ? r("div", {staticClass: "grid grid-cols-12 gap-x-8 gap-y-11 xl:gap-4 lg:gap-y-8 md:gap-y-6"}, t._l(t.itemsNormalized, (function (e) {
                    return r("CaseCard", t._b({
                        key: e.props.id,
                        class: [e.classes.card, e.classes.gridItem],
                        nativeOn: {
                            click: function (e) {
                                return e.preventDefault(), t.onCardClick(e)
                            }
                        }
                    }, "CaseCard", e.props, !1))
                })), 1) : t._e()
            }), [], !1, null, null, null);
        e.default = component.exports;
        installComponents(component, {CaseCard: r(378).default})
    }, 409: function (t, e, r) {
        var o = r(42), meta = r(223).onFreeze;
        r(164)("freeze", (function (t) {
            return function (e) {
                return t && o(e) ? t(meta(e)) : e
            }
        }))
    }, 451: function (t, e, r) {
        "use strict";
        r.d(e, "a", (function () {
            return n
        }));
        var o = r(5), l = r(8), c = r(11), n = function () {
            function t() {
                Object(o.a)(this, t)
            }

            return Object(l.a)(t, null, [{
                key: "getCasesList", value: function (t) {
                    return Object(c.a)((function () {
                        return c.b.get("/api/informs", t)
                    }))
                }
            }, {
                key: "getStatistics", value: function (t) {
                    return Object(c.a)((function () {
                        return c.b.get("/api/informs/parameters", t)
                    }))
                }
            }, {
                key: "getCategories", value: function () {
                    var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {
                        params: {
                            page: 1,
                            limit: 0
                        }
                    };
                    return Object(c.a)((function () {
                        return c.b.get("/api/businessCategories", t)
                    }))
                }
            }, {
                key: "getCase", value: function (t, e) {
                    return Object(c.a)((function () {
                        return c.b.get("/api/informs/" + t, e)
                    }))
                }
            }, {
                key: "getSimilarCases", value: function (t) {
                    var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {
                        params: {
                            page: 1,
                            limit: 10
                        }
                    };
                    return Object(c.a)((function () {
                        return c.b.get("/api/informs/" + t + "/similars", e)
                    }))
                }
            }]), t
        }()
    }, 458: function (t, e, r) {
        "use strict";
        r.r(e);
        r(10);
        var o = r(54), l = r(28), c = r(5), n = r(8), m = r(6), d = r(7), f = r(4),
            h = (r(36), r(40), r(30), r(60), r(51), r(122), r(126), r(32), r(47), r(31), r(48), r(0)), y = r(1),
            _ = r(319), v = r(59), w = r(394), j = r(123), O = r(125), x = r(313), k = r(337), C = r(451), P = r(24);

        function R(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var r, o = Object(f.a)(t);
                if (e) {
                    var l = Object(f.a)(this).constructor;
                    r = Reflect.construct(o, arguments, l)
                } else r = o.apply(this, arguments);
                return Object(d.a)(this, r)
            }
        }

        var z = function (t) {
            Object(m.a)(r, t);
            var e = R(r);

            function r() {
                var t;
                return Object(c.a)(this, r), (t = e.apply(this, arguments)).isDeactivated = !1, t.componentQuery = {page: 1}, t.projects = null, t.isProjectsPending = !0, t.categories = null, t.isCategoriesPending = !1, t.selectedCategory = null, t
            }

            return Object(n.a)(r, [{
                key: "titlePretty", get: function () {
                    var t = this.projectsCount;
                    return t ? this.title ? this.title : "?????? ".concat(Object(k.a)("????????????|??????????????|??????????????", t), " ").concat(t, "&nbsp;").concat(Object(k.a)("??????????|????????????|??????????????", t), " ").concat(this.isCategoriesEmpty ? "" : "??") : "?????? ???? ?????????????? ?????????????? ??"
                }
            }, {
                key: "currentQuery", get: function () {
                    return this.useQuery ? this.$route.query : Object.assign({}, this.componentQuery)
                }
            }, {
                key: "isAnyEmpty", get: function () {
                    return this.isProjectsEmpty || this.isCategoriesEmpty
                }
            }, {
                key: "isAnyPending", get: function () {
                    return this.isProjectsPending || this.isCategoriesPending
                }
            }, {
                key: "projectsListQuery", get: function () {
                    var t = this.currentQuery.page || 1;
                    return Object.assign({
                        categoryId: this.currentQuery.category,
                        page: t,
                        limit: this.$route.params.projectsLimit ? +this.$route.params.projectsLimit : 20
                    }, this.extraQuery)
                }
            }, {
                key: "isProjectsEmpty", get: function () {
                    var t;
                    return !(null === (t = this.projects) || void 0 === t ? void 0 : t.items.length)
                }
            }, {
                key: "projectsCount", get: function () {
                    var t;
                    return (null === (t = this.projects) || void 0 === t ? void 0 : t.pagination.total) || 0
                }
            }, {
                key: "fetchProjects", value: function () {
                    return Object(h.b)(this, void 0, void 0, regeneratorRuntime.mark((function t() {
                        var e, r, c, n, m;
                        return regeneratorRuntime.wrap((function (t) {
                            for (; ;) switch (t.prev = t.next) {
                                case 0:
                                    return this.isProjectsPending = !0, t.next = 3, C.a.getCasesList({params: this.projectsListQuery});
                                case 3:
                                    e = t.sent, r = Object(l.a)(e, 2), c = r[0], n = r[1], "true" === this.$route.params.append && c && this.projects ? (m = this.projects.items.map((function (t) {
                                        return t.id
                                    })), this.projects = {
                                        items: [].concat(Object(o.a)(this.projects.items), Object(o.a)(c.items.filter((function (t) {
                                            return !m.includes(t.id)
                                        })))), pagination: c.pagination
                                    }) : this.projects = c, (null == c ? void 0 : c.items.length) && P.casesStore.updateCasesCount(null == c ? void 0 : c.items.length), this.isProjectsPending = !1, n && Object(x.a)(n);
                                case 11:
                                case"end":
                                    return t.stop()
                            }
                        }), t, this)
                    })))
                }
            }, {
                key: "categoriesTotalTitle", get: function () {
                    var t, e = null === (t = this.categories) || void 0 === t ? void 0 : t.pagination.total;
                    return e ? "".concat(e, "??").concat(Object(k.a)("??????????|????????????|????????????", e)) : ""
                }
            }, {
                key: "categoriesSelectOptions", get: function () {
                    var t, e;
                    return (null === (t = this.categories) || void 0 === t ? void 0 : t.items) ? [].concat(Object(o.a)(null === (e = this.categories) || void 0 === e ? void 0 : e.items), [{
                        id: -1,
                        title: "?????? ??????????",
                        labelTitle: this.categoriesTotalTitle
                    }]) : []
                }
            }, {
                key: "isCategoriesEmpty", get: function () {
                    var t;
                    return !(null === (t = this.categories) || void 0 === t ? void 0 : t.items.length)
                }
            }, {
                key: "isCategoriesHasMorePages", get: function () {
                    return !!this.projects && this.projects.pagination.page < this.projects.pagination.pages
                }
            }, {
                key: "fetchCategories", value: function () {
                    var t = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
                    return Object(h.b)(this, void 0, void 0, regeneratorRuntime.mark((function e() {
                        var r, o, c, n;
                        return regeneratorRuntime.wrap((function (e) {
                            for (; ;) switch (e.prev = e.next) {
                                case 0:
                                    if (t || !this.categories) {
                                        e.next = 2;
                                        break
                                    }
                                    return e.abrupt("return");
                                case 2:
                                    return this.isCategoriesPending = !0, e.next = 5, C.a.getCategories();
                                case 5:
                                    r = e.sent, o = Object(l.a)(r, 2), c = o[0], n = o[1], this.categories = c, this.isCategoriesPending = !1, this.setSelectedCategoryById(Number(this.currentQuery.category) || -1), n && Object(x.a)(n);
                                case 13:
                                case"end":
                                    return e.stop()
                            }
                        }), e, this)
                    })))
                }
            }, {
                key: "setSelectedCategoryById", value: function (t) {
                    this.selectedCategory = this.categoriesSelectOptions.find((function (e) {
                        return e.id === t
                    })) || null
                }
            }, {
                key: "onFilterChange", value: function (t, e) {
                    var r;
                    if (e) {
                        var o = Object.assign(Object.assign({}, this.currentQuery), {category: null === (r = this.selectedCategory) || void 0 === r ? void 0 : r.id});
                        -1 === o.category && delete o.category, this.setPageState(o)
                    }
                }
            }, {
                key: "goProjectsNextPage", value: function () {
                    this.projects && this.setPageState({page: this.projects.pagination.page + 1}, {
                        append: "true",
                        projectsLimit: String(20)
                    })
                }
            }, {
                key: "setPageState", value: function (t, e) {
                    this.useQuery ? this.$router.push({query: t, params: e}) : this.componentQuery = t
                }
            }, {
                key: "activated", value: function () {
                    this.isDeactivated = !1
                }
            }, {
                key: "deactivated", value: function () {
                    this.isDeactivated = !0
                }
            }, {
                key: "onQueryChange", value: function (t) {
                    this.useQuery && "projects" !== this.$route.name || this.isDeactivated || (this.fetchProjects(), t.category ? this.setSelectedCategoryById(+t.category) : this.setSelectedCategoryById(-1))
                }
            }]), r
        }(y.Vue);
        Object(h.c)([Object(y.Prop)({
            type: String,
            required: !1
        })], z.prototype, "title", void 0), Object(h.c)([Object(y.Prop)({
            type: Boolean,
            default: !0
        })], z.prototype, "useQuery", void 0), Object(h.c)([Object(y.Prop)({
            type: Boolean,
            default: !1,
            required: !1
        })], z.prototype, "withFilter", void 0), Object(h.c)([Object(y.Prop)({
            type: Object, default: function () {
                return {}
            }, required: !1
        })], z.prototype, "extraQuery", void 0), Object(h.c)([Object(y.Watch)("selectedCategory")], z.prototype, "onFilterChange", null), Object(h.c)([Object(y.Watch)("currentQuery")], z.prototype, "onQueryChange", null);
        var S = z = Object(h.c)([Object(y.Component)({
            components: {
                Typograf: j.default,
                CircleLoader: O.default,
                CasesList: w.default,
                SelectField: _.default,
                BaseButton: v.default
            }, fetch: function () {
                return Promise.all([this.fetchProjects(), this.fetchCategories()])
            }
        })], z), B = r(9), component = Object(B.a)(S, (function () {
            var t = this, e = t.$createElement, r = t._self._c || e;
            return r("div", [t.isAnyEmpty && t.isAnyPending ? [r("div", {staticClass: "title-h2 mb-17 lg:mb-8"}, [t._v("\n            ?????? ???????????? ??????????????, wait a little bit???\n        ")]), t._v(" "), r("div", {staticClass: "text-center"}, [r("CircleLoader", {staticClass: "w-20 text-blue-700"})], 1)] : [r("div", {
                class: {
                    "title-h2 mb-12 lg:mb-8": !0,
                    "opacity-50": t.isProjectsPending
                }
            }, [t._v("\n            ?????? ?????????????? 104 ????????????\n\n            ")]), t._v(" "), t.isProjectsEmpty ? t._e() : r("div", {}, [r("CasesList", {attrs: {items: t.projects.items}})], 1), t._v(" "), t._t("actions", [t.isCategoriesHasMorePages ? r("div", {staticClass: "mt-10 text-center"}, [r("BaseButton", {
                attrs: {
                    theme: "blue",
                    size: "medium",
                    loading: t.isProjectsPending
                }, on: {click: t.goProjectsNextPage}
            }, [t._v("\n                    ???????????????? ??????\n                ")])], 1) : t._e()], null, {
                hasMore: t.isCategoriesHasMorePages,
                goToNext: t.goProjectsNextPage,
                isPending: t.isProjectsPending
            })]], 2)
        }), [], !1, null, null, null);
        e.default = component.exports;
        installComponents(component, {
            CircleLoader: r(125).default,
            CasesList: r(394).default,
            BaseButton: r(59).default
        })
    }, 649: function (t, e, r) {
        "use strict";
        r.r(e);
        r(10);
        var o = r(5), l = r(8), c = r(6), n = r(7), m = r(4), d = r(0), f = r(1), h = r(123), y = r(347), _ = r(458),
            v = r(24);

        function w(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var r, o = Object(m.a)(t);
                if (e) {
                    var l = Object(m.a)(this).constructor;
                    r = Reflect.construct(o, arguments, l)
                } else r = o.apply(this, arguments);
                return Object(n.a)(this, r)
            }
        }

        var j = function (t) {
            Object(c.a)(r, t);
            var e = w(r);

            function r() {
                return Object(o.a)(this, r), e.apply(this, arguments)
            }

            return Object(l.a)(r, [{
                key: "page", get: function () {
                    return v.pageStore.data
                }
            }, {
                key: "pageTitle", get: function () {
                    var t;
                    return null === (t = this.page) || void 0 === t ? void 0 : t.title
                }
            }]), r
        }(f.Vue), O = j = Object(d.c)([Object(f.Component)({
            components: {
                Typograf: h.default,
                CallbackForm: y.default,
                CasesSection: _.default
            }, meta: function () {
                return {title: this.pageTitle || "??????????????"}
            }, head: function () {
                return {
                    link: [{
                        rel: "canonical",
                        href: v.pageStore.pageHost ? "".concat(v.pageStore.pageHost).concat(this.$route.path) : this.$route.path
                    }]
                }
            }
        })], j), x = r(9), component = Object(x.a)(O, (function () {
            var t = this, e = t.$createElement, r = t._self._c || e;
            return r("div", {staticClass: "pt-7 pb-24 lg:py-4"}, [r("div", {staticClass: "container"}, [r("CasesSection", {
                staticClass: "mb-20 lg:mb-10",
                scopedSlots: t._u([{
                    key: "title", fn: function (t) {
                        return [r("Typograf", {staticClass: "inline title-h2 mb-0", attrs: {as: "h1", html: t.title}})]
                    }
                }])
            }), t._v(" "), r("CallbackForm", {
                attrs: {
                    title: "???? ???????????? ?????????????? ??????????",
                    description: "???????????????? ???????? ???????????????? ?? ????<br> ?????????????????? ?????? ?????? ??????????????"
                }
            })], 1)])
        }), [], !1, null, null, null);
        e.default = component.exports;
        installComponents(component, {
            Typograf: r(123).default,
            CasesSection: r(458).default,
            CallbackForm: r(347).default
        })
    }
}]);
