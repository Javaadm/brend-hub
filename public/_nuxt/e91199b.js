(window.webpackJsonp=window.webpackJsonp||[]).push([[120,21,55,63,105],{307:function(t,e,r){"use strict";(function(t){r.d(e,"b",(function(){return n})),r.d(e,"a",(function(){return l}));r(160),r(76),r(31),r(85),r(86);var n=function(image){return image?"string"==typeof image?image:image.file.url:""};function l(e,r){return e=(e=n(e))?e.match(/^https?:\/\//)?e:"local://"+e:"local://",["/_image","i",r,t.from(e).toString("base64").replace(/\+/g,"-").replace(/\//g,"_").replace(/=+$/,"")].join("/")}}).call(this,r(315).Buffer)},311:function(t,e,r){"use strict";r.r(e);r(10);var n,l,o,c=r(5),d=r(8),f=r(6),m=r(7),h=r(4),v=r(0),y=r(1),x=r(123);function _(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=Object(h.a)(t);if(e){var l=Object(h.a)(this).constructor;r=Reflect.construct(n,arguments,l)}else r=n.apply(this,arguments);return Object(m.a)(this,r)}}!function(t){t.White="white",t.Black="black",t.black_storage="black_storage",t.white_storage="white_storage"}(n||(n={})),function(t){t.Sm="Sm"}(l||(l={})),function(t){t.RESET_MARGINS="reset-margins"}(o||(o={}));var C=function(t){Object(f.a)(r,t);var e=_(r);function r(){return Object(c.a)(this,r),e.apply(this,arguments)}return Object(d.a)(r,[{key:"classes",get:function(){return{root:{"typography break-word":!0,typography_theme_white:this.theme===n.White,typography_theme_black:this.theme===n.Black,typography_theme_black_storage:this.theme===n.black_storage,typography_theme_white_storage:this.theme===n.white_storage,typography_size_sm:this.size===l.Sm,"typography_view_reset-margins":this.view===o.RESET_MARGINS,"typography-gapless-last-child":this.gaplessLastChild}}}}]),r}(y.Vue);Object(v.c)([Object(y.Prop)({type:String,required:!1})],C.prototype,"content",void 0),Object(v.c)([Object(y.Prop)({type:String,required:!1})],C.prototype,"theme",void 0),Object(v.c)([Object(y.Prop)({type:String,required:!1})],C.prototype,"size",void 0),Object(v.c)([Object(y.Prop)({type:String,required:!1})],C.prototype,"view",void 0),Object(v.c)([Object(y.Prop)({type:Boolean,required:!1,default:!1})],C.prototype,"gaplessLastChild",void 0);var O=C=Object(v.c)([Object(y.Component)({components:{Typograf:x.default}})],C),j=r(9),component=Object(j.a)(O,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{class:t.classes.root},[t._t("default",[r("Typograf",{attrs:{html:t.content}})])],2)}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{Typograf:r(123).default})},317:function(t,e,r){"use strict";r.r(e);r(10);var n,l,o,c=r(5),d=r(8),f=r(6),m=r(7),h=r(4),v=(r(122),r(0)),y=r(1),x=r(308),_=r(20);function C(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=Object(h.a)(t);if(e){var l=Object(h.a)(this).constructor;r=Reflect.construct(n,arguments,l)}else r=n.apply(this,arguments);return Object(m.a)(this,r)}}!function(t){t.light="light",t["light-blue"]="light-blue",t.blue="blue",t.gray="gray"}(n||(n={})),function(t){t.sm="sm",t.md="md"}(l||(l={})),function(t){t.extended="extended"}(o||(o={}));var O=function(t){Object(f.a)(r,t);var e=C(r);function r(){return Object(c.a)(this,r),e.apply(this,arguments)}return Object(d.a)(r,[{key:"themeClass",get:function(){switch(this.theme){case n.light:return"toggle-field_theme_light";case n["light-blue"]:return"toggle-field_theme_light-blue";case n.gray:return"toggle-field_theme_gray";case n.blue:return"toggle-field_theme_blue";default:return this.theme?"toggle-field_theme_".concat(this.theme):""}}},{key:"sizeClass",get:function(){switch(this.size){case l.sm:return"toggle-field_size_sm";case l.md:return"";default:return this.size?"toggle-field_size_".concat(this.size):""}}},{key:"viewClass",get:function(){switch(this.view){case o.extended:return"toggle-field_view_extended";default:return this.view?"toggle-field_view_".concat(this.view):""}}},{key:"typeClass",get:function(){return"radio"===this.type?"toggle-field_radio":""}}]),r}(x.default);Object(v.c)([Object(y.Prop)({type:String,default:"checkbox"})],O.prototype,"type",void 0),Object(v.c)([Object(y.Prop)({type:[String,Number],default:null})],O.prototype,"fieldValue",void 0),Object(v.c)([Object(y.Prop)({type:String,default:""})],O.prototype,"theme",void 0),Object(v.c)([Object(y.Prop)({type:String,default:l.md})],O.prototype,"size",void 0),Object(v.c)([Object(y.Prop)({type:String})],O.prototype,"view",void 0);var j=O=Object(v.c)([Object(y.Component)({components:{BaseFormField:x.default,BaseIcon:_.default}})],O),w=r(9),component=Object(w.a)(j,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("BaseFormField",t._b({class:["toggle-field",t.themeClass,t.sizeClass,t.viewClass,t.typeClass,{"toggle-field_side":"side"in t.$slots}],attrs:{outlined:!1},scopedSlots:t._u([{key:"title",fn:function(){return[t._t("title",[r("label",{staticClass:"toggle-field__content",attrs:{for:t.id}},["image"in t.$slots?[r("div",{staticClass:"relative cursor-pointer transform translate-y-px z-10"},[t._t("image")],2)]:t._e(),t._v(" "),r("span",{staticClass:"toggle-field__content-container"},[r("span",{staticClass:"toggle-field__mark"},[r("span",{staticClass:"toggle-field__mark-focus"}),t._v(" "),r("span",{staticClass:"toggle-field__mark-error"}),t._v(" "),r("span",{staticClass:"toggle-field__fake"},[r("BaseIcon",{staticClass:"toggle-field__mark-figure",attrs:{name:"check",width:"12",height:"9"}})],1)]),t._v(" "),"default"in t.$slots?r("span",[t._t("default")],2):r("span",{staticClass:"toggle-field__text",domProps:{innerHTML:t._s(t.title)}}),t._v(" "),"sideContent"in t.$slots?[t._t("sideContent")]:t._e()],2)],2)],null,{id:t.id,title:t.title}),t._v(" "),"background"in t.$slots?[r("div",{staticClass:"pointer-events-none"},[t._t("background")],2)]:t._e()]},proxy:!0},"side"in t.$slots?{key:"side",fn:function(){return[t._t("side")]},proxy:!0}:null],null,!0)},"BaseFormField",t.$props,!1),["checkbox"===t.inputProps.type?r("input",t._g(t._b({directives:[{name:"model",rawName:"v-model",value:t.inputValue,expression:"inputValue"}],staticClass:"toggle-field__input",attrs:{type:"checkbox"},domProps:{value:t.fieldValue,checked:Array.isArray(t.inputValue)?t._i(t.inputValue,t.fieldValue)>-1:t.inputValue},on:{change:function(e){var r=t.inputValue,n=e.target,l=!!n.checked;if(Array.isArray(r)){var o=t.fieldValue,c=t._i(r,o);n.checked?c<0&&(t.inputValue=r.concat([o])):c>-1&&(t.inputValue=r.slice(0,c).concat(r.slice(c+1)))}else t.inputValue=l}}},"input",t.inputProps,!1),t.inputListeners)):"radio"===t.inputProps.type?r("input",t._g(t._b({directives:[{name:"model",rawName:"v-model",value:t.inputValue,expression:"inputValue"}],staticClass:"toggle-field__input",attrs:{type:"radio"},domProps:{value:t.fieldValue,checked:t._q(t.inputValue,t.fieldValue)},on:{change:function(e){t.inputValue=t.fieldValue}}},"input",t.inputProps,!1),t.inputListeners)):r("input",t._g(t._b({directives:[{name:"model",rawName:"v-model",value:t.inputValue,expression:"inputValue"}],staticClass:"toggle-field__input",attrs:{type:t.inputProps.type},domProps:{value:t.fieldValue,value:t.inputValue},on:{input:function(e){e.target.composing||(t.inputValue=e.target.value)}}},"input",t.inputProps,!1),t.inputListeners))])}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{BaseIcon:r(20).default})},367:function(t,e,r){"use strict";r.r(e);r(10);var n,l=r(26),o=r(5),c=r(8),d=r(6),f=r(7),m=r(4),h=(r(36),r(386),r(126),r(37),r(40),r(30),r(31),r(85),r(86),r(47),r(48),r(0)),v=r(1),y=r(312),x=r(317),_=r(59),C=r(20),O=r(125),j=r(123),w=r(313),k=r(324),P=r(11),S=function(){function t(){Object(o.a)(this,t)}return Object(c.a)(t,null,[{key:"fetchBriefSettingsForLazyRegistration",value:function(t){return P.b.get("/api/briefSettings/fields/registrations",t)}}]),t}(),B=r(373),F=r(341),R=r(103);function D(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=Object(m.a)(t);if(e){var l=Object(m.a)(this).constructor;r=Reflect.construct(n,arguments,l)}else r=n.apply(this,arguments);return Object(f.a)(this,r)}}!function(t){t.default="default",t.small="small"}(n||(n={}));var E=function(t){Object(d.a)(r,t);var e=D(r);function r(){var t;return Object(o.a)(this,r),(t=e.apply(this,arguments)).briefSettingsRegistrationFields={isPending:!1,data:null,error:!1},t.formData={email:"",phone:""},t.formErrors={},t.submitForm={isPending:!1,data:null,error:!1},t.isEmailAndPhoneInputsVisible=!1,t.needCompanyNaming=!1,t}return Object(c.a)(r,[{key:"onNeedNamingChange",value:function(t){var e,r,n;if(t){Object(R.a)({dataLayer:["universal event",{event_param:"form-click-add-naming"}]});var o=null===(n=null===(r=null===(e=this.briefSettingsRegistrationFields)||void 0===e?void 0:e.data)||void 0===r?void 0:r.find((function(t){return"title"===t.type})))||void 0===n?void 0:n.id;o&&this.formData[o]&&(this.formData=Object.assign(Object.assign({},this.formData),Object(l.a)({},o,"")))}}},{key:"formTitle",get:function(){var t;return(null===(t=this.createBrandFormTitle)||void 0===t?void 0:t.title)||"Начать создание бренда"}},{key:"formDescription",get:function(){var t;return(null===(t=this.createBrandFormDescription)||void 0===t?void 0:t.title)||"Заполните форму и получите чек-лист своего бренда"}},{key:"formTitleSize",get:function(){switch(this.titleSize){case n.default:return"title-h2 lg:tracking-tightest";case n.small:return"title-h3";default:return""}}},{key:"hasFormErrors",get:function(){return Object.keys(this.formErrors).length>0}},{key:"briefFieldsHaveOptionalTitleField",get:function(){var t;return!!(null===(t=this.briefSettingsRegistrationFields.data)||void 0===t?void 0:t.length)&&!!this.briefSettingsRegistrationFields.data.find((function(t){return"title"===t.type&&!t.required}))}},{key:"downloadStrongBrandChecklistButtonTitle",get:function(){return this.isEmailAndPhoneInputsVisible?"Перейти к брифу":"Далее"}},{key:"fetchFieldsForLazyRegistration",value:function(){return Object(h.b)(this,void 0,void 0,regeneratorRuntime.mark((function t(){return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,this.briefSettingsRegistrationFields.isPending=!0,t.next=4,S.fetchBriefSettingsForLazyRegistration();case 4:this.briefSettingsRegistrationFields.data=t.sent,t.next=11;break;case 7:t.prev=7,t.t0=t.catch(0),console.log("fetchFieldsForLazyRegistration",t.t0),this.briefSettingsRegistrationFields.error=!0;case 11:return t.prev=11,this.briefSettingsRegistrationFields.isPending=!1,t.finish(11);case 14:case"end":return t.stop()}}),t,this,[[0,7,11,14]])})))}},{key:"submitBriefSettingsForLazyRegistration",value:function(){var t,e,r;return Object(h.b)(this,void 0,void 0,regeneratorRuntime.mark((function n(){var l,o,c,d=this;return regeneratorRuntime.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:if(!this.submitForm.isPending){n.next=2;break}return n.abrupt("return");case 2:if(this.formErrors={},this.isEmailAndPhoneInputsVisible){n.next=12;break}if(this.setInitialFormErrors(),!this.hasFormErrors){n.next=7;break}return n.abrupt("return");case 7:return this.isEmailAndPhoneInputsVisible=!0,Object(R.a)({dataLayer:["universal event",{event_param:"form-click-next"}]}),n.abrupt("return");case 12:if(this.formData.phone&&this.formData.email){n.next=16;break}if(this.validateForm(),!this.hasFormErrors){n.next=16;break}return n.abrupt("return");case 16:return n.prev=16,this.submitForm.isPending=!0,l=Object.keys(this.formData).filter((function(t){return"email"!==t&&"phone"!==t})).filter((function(t){return Boolean(d.formData[t])})).map((function(t){var e,r=null===(e=d.briefSettingsRegistrationFields.data)||void 0===e?void 0:e.find((function(e){return e.id===+t})),n={questionId:+t,value:d.formData[t]};return r&&"title"===r.type&&(n={questionId:+t,value:{value:d.formData[t],needNaming:d.needCompanyNaming}}),n})),o=null===(r=null===(e=null===(t=this.briefSettingsRegistrationFields)||void 0===t?void 0:t.data)||void 0===e?void 0:e.find((function(t){return"title"===t.type})))||void 0===r?void 0:r.id,this.needCompanyNaming&&o&&!this.formData[o]&&l.push({questionId:o,value:{value:"",needNaming:!0}}),n.next=23,B.a.fetchUserLazyRegistration({email:this.formData.email,phone:this.formData.phone,questions:l});case 23:if(!(c=n.sent).token){n.next=34;break}return n.next=27,this.$auth.setUserToken(c.token.token);case 27:return n.next=29,this.$auth.setUser(Object.assign(c.user,{email:this.formData.email,phone:this.formData.phone}));case 29:return this.formData={email:"",phone:""},this.isEmailAndPhoneInputsVisible=!1,this.needCompanyNaming=!1,n.next=34,this.$layer.alert({title:"Успешно!",message:"Для вашего удобства мы создали ваш профиль brand hub, продолжите работу над своим брендом, заполняя бриф"}).then((function(){return Object(h.b)(d,void 0,void 0,regeneratorRuntime.mark((function t(){return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return Object(R.a)({dataLayer:["universal event",{event_param:"form-click-download-checklist"}]}),t.next=3,this.$router.push({name:"cabinet-brief"});case 3:case"end":return t.stop()}}),t,this)})))}));case 34:n.next=41;break;case 36:n.prev=36,n.t0=n.catch(16),console.log("submitBriefSettingsForLazyRegistration",n.t0),this.submitForm.error=!0,Object(w.a)(n.t0,this.formErrors);case 41:return n.prev=41,this.submitForm.isPending=!1,n.finish(41);case 44:case"end":return n.stop()}}),n,this,[[16,36,41,44]])})))}},{key:"setInitialFormErrors",value:function(){var t;if(null===(t=this.briefSettingsRegistrationFields.data)||void 0===t?void 0:t.length)for(var i=0;i<this.briefSettingsRegistrationFields.data.length;i+=1){var e=this.briefSettingsRegistrationFields.data[i];e.required&&!this.formData[e.id.toString()]&&(this.formErrors=Object.assign(Object.assign({},this.formErrors),Object(l.a)({},e.id.toString(),"Значение должно быть заполнено")))}}}]),r}(Object(k.a)("formData","formErrors",{required:{email:"Введите почту",phone:"Введите телефон"}}));Object(h.c)([Object(v.Prop)({type:Boolean,required:!1,default:!0})],E.prototype,"withFigure",void 0),Object(h.c)([Object(v.Prop)({type:String,required:!1,default:""})],E.prototype,"formDescriptionMod",void 0),Object(h.c)([Object(v.Prop)({type:String,required:!1,default:n.default})],E.prototype,"titleSize",void 0),Object(h.c)([Object(v.Watch)("needCompanyNaming")],E.prototype,"onNeedNamingChange",null);var T=E=Object(h.c)([Object(v.Component)({components:{InputField:y.default,ToggleField:x.default,BaseButton:_.default,BaseIcon:C.default,CircleLoader:O.default,Typograf:j.default,BusinessCategorySuggestion:F.default},fetch:function(){return Promise.all([this.fetchFieldsForLazyRegistration()])},storageItems:["strongBrandCheckList","createBrandFormTitle","createBrandFormDescription"]})],E),z=r(9),component=Object(z.a)(T,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"relative container"},[t.withFigure?r("div",{staticClass:"absolute w-full h-full max-h-[208px] max-w-[864px] -top-10 a-lg:left-34 lg:top-12 lg:right-0 sm:right-0 sm:top-18 sm:w-[543px] sm:h-[130px] sm:left-auto",attrs:{"data-aos":"slide-up","data-aos-duration":"700"}},[t._m(0)]):t._e(),t._v(" "),r("Typograf",{class:["mb-6 lg:mb-4",t.formTitleSize],attrs:{html:t.formTitle}}),t._v(" "),r("Typograf",{class:["text-lg mb-10 font-normal lg:text-base lg:mb-8 lg:leading-5.5",t.formDescriptionMod],attrs:{html:t.formDescription}}),t._v(" "),t.briefSettingsRegistrationFields.isPending?r("CircleLoader",{staticClass:"w-12 text-white"}):t._e(),t._v(" "),t.briefSettingsRegistrationFields.error?r("div",{staticClass:"font-medium"},[t._v("\n        Упс, произошла ошибка при загрузке формы быстрого создания брифа\n    ")]):t._e(),t._v(" "),t.briefSettingsRegistrationFields.data?r("div",[t.briefSettingsRegistrationFields.data.length?r("form",{attrs:{autocomplete:"off"}},[r("div",{staticClass:"flex jitter-fix -mx-4 lg:flex-col lg:mx-0"},[t.isEmailAndPhoneInputsVisible?[r("div",{class:["flex-1 min-w-0 mx-4 lg:mx-0",t.briefFieldsHaveOptionalTitleField?"mb-10 lg:mb-4":""]},[r("InputField",{attrs:{value:t.formData.email,error:t.formErrors.email,readonly:t.submitForm.isPending,title:"Email*",required:""},on:{"update:value":function(e){return t.$set(t.formData,"email",e)}}})],1),t._v(" "),r("div",{staticClass:"flex-1 min-w-0 mx-4 lg:mx-0 lg:mb-4"},[r("InputField",{attrs:{value:t.formData.phone,error:t.formErrors.phone,readonly:t.submitForm.isPending,title:"Телефон*",mask:"phone",required:""},on:{"update:value":function(e){return t.$set(t.formData,"phone",e)}}})],1)]:t._l(t.briefSettingsRegistrationFields.data,(function(e,n){return r("div",{key:e.id,class:["flex-1 min-w-0 mx-4 lg:mx-0 lg:mb-4",{"flex flex-col":"title"===e.type&&!e.required},n>1?"hidden":""]},[["category"].includes(e.type)?r("BusinessCategorySuggestion",{staticClass:"text-black",attrs:{value:t.formData[e.id.toString()],error:t.formErrors[e.id.toString()],title:e.label},on:{"update:value":function(r){t.$set(t.formData,e.id.toString(),r)}}}):r("InputField",{attrs:{value:t.formData[e.id.toString()],error:t.formErrors[e.id.toString()],title:e.label,required:e.required,disabled:"title"===e.type&&t.needCompanyNaming},on:{"update:value":function(r){t.$set(t.formData,e.id.toString(),r)}}}),t._v(" "),"title"!==e.type||e.required?t._e():r("div",{staticClass:"mt-4 md:mt-2 md:mb-2"},[r("ToggleField",{attrs:{theme:"gray",value:t.needCompanyNaming,title:"Нужен нейминг"},on:{"update:value":function(e){t.needCompanyNaming=e}}})],1)],1)})),t._v(" "),r("div",{staticClass:"flex-1 min-w-0 mx-4 lg:mx-0"},[r("BaseButton",{staticClass:"w-full",attrs:{loading:t.submitForm.isPending},on:{click:function(e){return e.preventDefault(),t.submitBriefSettingsForLazyRegistration(e)}},scopedSlots:t._u([{key:"append",fn:function(){return[r("span",{staticClass:"fill-current text-white text-opacity-40"},[t.isEmailAndPhoneInputsVisible?t._e():r("BaseIcon",{attrs:{name:"arrow-right",width:"24",height:"12"}})],1)]},proxy:!0}],null,!1,2346243155)},[r("Typograf",{attrs:{html:t.downloadStrongBrandChecklistButtonTitle}})],1)],1)],2)]):[t._v("\n            Заполните поля для формы в административной панели!\n        ")]],2):t._e()],1)}),[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"absolute inset-0 clip-path-blue"},[e("div",{staticClass:"absolute inset-0 bg-noise opacity-50"})])}],!1,null,null,null);e.default=component.exports;installComponents(component,{Typograf:r(123).default,CircleLoader:r(125).default,BusinessCategorySuggestion:r(341).default,BaseIcon:r(20).default,BaseButton:r(59).default})},373:function(t,e,r){"use strict";r.d(e,"a",(function(){return c}));var n=r(5),l=r(8),o=r(11),c=function(){function t(){Object(n.a)(this,t)}return Object(l.a)(t,null,[{key:"fetchUserLazyRegistration",value:function(data,t){return o.b.post("/api/users/lazy",data,t)}},{key:"setWelcomeModalShown",value:function(t){return o.b.put("/api/users/self/lookWelcomeModal",{},t)}}]),t}()},386:function(t,e,r){"use strict";r(222)("small",(function(t){return function(){return t(this,"small","","")}}))},411:function(t,e,r){"use strict";r.r(e);r(10);var n,l,o=r(5),c=r(8),d=r(6),f=r(7),m=r(4),h=(r(122),r(0)),v=r(1);function y(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=Object(m.a)(t);if(e){var l=Object(m.a)(this).constructor;r=Reflect.construct(n,arguments,l)}else r=n.apply(this,arguments);return Object(f.a)(this,r)}}!function(t){t.default="default",t.blue="blue"}(n||(n={})),function(t){t.lg="lg",t.md="md"}(l||(l={}));var x=function(t){Object(d.a)(r,t);var e=y(r);function r(){return Object(o.a)(this,r),e.apply(this,arguments)}return Object(c.a)(r,[{key:"getCurrentCount",get:function(){return this.count<=9?"0".concat(this.count):"".concat(this.count)}}]),r}(v.Vue);Object(h.c)([Object(v.Prop)({type:String,default:"default"})],x.prototype,"theme",void 0),Object(h.c)([Object(v.Prop)({type:String,default:"lg"})],x.prototype,"size",void 0),Object(h.c)([Object(v.Prop)({type:Number})],x.prototype,"count",void 0);var _=x=Object(h.c)([v.Component],x),C=r(9),component=Object(C.a)(_,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{class:["relative py-4 lg:pt-3 lg:pb-2",{"pl-7 lg:pl-5":"lg"===t.size&&t.count>1,"pl-10 lg:pl-8":"lg"===t.size&&t.count<=1,"pt-11":"md"===t.size,"pl-10 pt-5 lg:pl-5":"md"===t.size&&t.count>1,"pl-14 lg:pl-6":"md"===t.size&&t.count<=1}]},[r("div",{class:["absolute inset-0 top-4 fill-current text-opacity-16",{"text-white":"default"===t.theme,"text-blue-700":"blue"===t.theme,"lg:-top-2":"lg"===t.size,"lg:-top-4 sm:-top-2":"md"===t.size}]},[r("BaseIcon",{staticClass:"lg:w-24 lg:h-24 sm:w-18 sm:h-18",attrs:{name:"fancy-check",width:"125",height:"100"}})],1),t._v(" "),r("div",{class:["relative font-bold tracking-wider",{"text-white":"default"===t.theme,"text-blue-700":"blue"===t.theme,"text-[84px]":"lg"===t.size,"text-[68px] leading-none":"md"===t.size},"lg:text-6xl sm:text-4.5xl"]},[t._v("\n        "+t._s(t.getCurrentCount)+"\n    ")])])}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{BaseIcon:r(20).default})},457:function(t,e,r){"use strict";r.r(e);r(10);var n,l=r(5),o=r(8),c=r(6),d=r(7),f=r(4),m=(r(122),r(0)),h=r(1);function v(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=Object(f.a)(t);if(e){var l=Object(f.a)(this).constructor;r=Reflect.construct(n,arguments,l)}else r=n.apply(this,arguments);return Object(d.a)(this,r)}}!function(t){t.blue="blue"}(n||(n={}));var y=function(t){Object(c.a)(r,t);var e=v(r);function r(){return Object(l.a)(this,r),e.apply(this,arguments)}return Object(o.a)(r,[{key:"themeClass",get:function(){switch(this.theme){case n.blue:return"base-typer_theme_blue";default:return""}}}]),r}(h.Vue);Object(m.c)([Object(h.Prop)({type:[String,Array],required:!0})],y.prototype,"text",void 0),Object(m.c)([Object(h.Prop)({type:Number,required:!1,default:0})],y.prototype,"preTypeDelay",void 0),Object(m.c)([Object(h.Prop)({type:Number,required:!1,default:20})],y.prototype,"typeDelay",void 0),Object(m.c)([Object(h.Prop)({type:Number,required:!1,default:3e3})],y.prototype,"preEraseDelay",void 0),Object(m.c)([Object(h.Prop)({type:Number,required:!1,default:20})],y.prototype,"eraseDelay",void 0),Object(m.c)([Object(h.Prop)({type:String,required:!1,default:"backspace"})],y.prototype,"eraseStyle",void 0),Object(m.c)([Object(h.Prop)({type:String,required:!1,default:"solid"})],y.prototype,"caretAnimation",void 0),Object(m.c)([Object(h.Prop)({type:Boolean,required:!1,default:!0})],y.prototype,"withCaret",void 0),Object(m.c)([Object(h.Prop)({type:String,required:!1})],y.prototype,"theme",void 0);var x=y=Object(m.c)([h.Component],y),_=r(9),component=Object(_.a)(x,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("span",{class:["base-typer",t.themeClass,{"base-typer_no-caret":!t.withCaret}]},[r("ClientOnly",[r("VueTyper",{attrs:{text:t.text,"pre-type-delay":t.preTypeDelay,"type-delay":t.typeDelay,"pre-erase-delay":t.preEraseDelay,"erase-delay":t.eraseDelay,"erase-style":t.eraseStyle,"caret-animation":t.caretAnimation}})],1)],1)}),[],!1,null,null,null);e.default=component.exports},641:function(t,e,r){"use strict";r.r(e);r(10);var n=r(5),l=r(8),o=r(6),c=r(7),d=r(4),f=(r(40),r(0)),m=r(1),h=r(78),v=r.n(h),y=r(367),x=r(411),_=r(457),C=r(123),O=r(124),j=r(311),w=r(307);r(132);function k(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=Object(d.a)(t);if(e){var l=Object(d.a)(this).constructor;r=Reflect.construct(n,arguments,l)}else r=n.apply(this,arguments);return Object(c.a)(this,r)}}var P=function(t){Object(o.a)(r,t);var e=k(r);function r(){return Object(n.a)(this,r),e.apply(this,arguments)}return Object(l.a)(r,[{key:"brandHubDefinitions",get:function(){var t=[];return this.aboutPageBrandHubDefinitions&&Array.isArray(this.aboutPageBrandHubDefinitions)&&(t=this.aboutPageBrandHubDefinitions.map((function(t){return t.title}))),t}},{key:"orangeBubbleContent",get:function(){var t;return(null===(t=this.aboutPageOrangeBubble)||void 0===t?void 0:t.title)||""}},{key:"textBubbleContent",get:function(){var t;return(null===(t=this.aboutPageTextBubble)||void 0===t?void 0:t.title)||""}},{key:"onlineIsEasySteps",get:function(){var t=[];return this.aboutPageOnlineIsEasy&&Array.isArray(this.aboutPageOnlineIsEasy)&&(t=this.aboutPageOnlineIsEasy.map((function(t){return{title:t.title,image:Object(w.a)(t.image.url,"rs:fit:343:230/format:jpg")}}))),t}},{key:"whatWeDoContent",get:function(){var t;return(null===(t=this.aboutPageWhatWeDo)||void 0===t?void 0:t.title)||""}},{key:"strengths",get:function(){var t=[];return this.aboutPageCompanyStrengths&&Array.isArray(this.aboutPageCompanyStrengths)&&(t=this.aboutPageCompanyStrengths),t}}]),r}(m.Vue),S=P=Object(f.c)([Object(m.Component)({components:{KickOffBrandCreatingForm:y.default,FancyCount:x.default,BaseTyper:_.default,Typograf:C.default,BaseImage:O.default,TypographyText:j.default},storageItems:["aboutPageBrandHubDefinitions","aboutPageOrangeBubble","aboutPageTextBubble","aboutPageOnlineIsEasy","aboutPageWhatWeDo","aboutPageCompanyStrengths"],mounted:function(){v.a.init()}})],P),B=r(9),component=Object(B.a)(S,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("div",{staticClass:"container"},[r("div",{staticClass:"relative pt-20 pb-28 px-10 mb-24 bg-black text-white font-medium text-center overflow-hidden 2xl:px-5 xl:pb-18 lg:mb-16 lg:py-14 md:py-10 md:px-3 sm:min-h-[220px] sm:mb-10 tiny:min-h-[200px]",attrs:{"data-aos":"fade-up","data-aos-duration":"500"}},[t._m(0),t._v(" "),r("div",{staticClass:"relative text-[102px] leading-none mb-9 lg:text-7xl md:text-6xl md:mb-6 tiny:text-5xl"},[t._v("\n                brand hub\n            ")]),t._v(" "),r("span",{staticClass:"relative flex items-start justify-center title-h2 text-left 3xl:text-4.5xl 2xl:text-4xl lg:text-3xl md:text-2xl sm:text-xl tiny:text-lg"},[r("span",{staticClass:"flex-1 min-w-0 text-left"},[t._v("\n                    — это новый способ\n                    "),r("BaseTyper",{attrs:{text:t.brandHubDefinitions,"with-caret":!1,theme:"blue"}})],1)])]),t._v(" "),r("div",{staticClass:"grid grid-cols-12 items-start gap-x-8 mb-22 lg:mb-16 lg:gap-x-6 sm:gap-x-0 sm:gap-y-8 sm:mb-12"},[t.orangeBubbleContent?r("div",{staticClass:"col-span-6 sm:col-span-12",attrs:{"data-aos":"fade-right","data-aos-delay":"200","data-aos-duration":"500"}},[r("div",{staticClass:"relative min-h-[319px] max-w-[634px] lg:min-h-[200px] sm:max-w-[400px] sm:min-h-[170px]"},[t._m(1),t._v(" "),r("div",{staticClass:"relative pt-13 pl-25 pb-32 pr-22 text-white text-2xl leading-9 xl:text-xl lg:text-lg lg:pt-9 lg:px-16 lg:pb-20 md:text-base md:pt-6 md:px-12 sm:pb-18"},[r("Typograf",{staticClass:"line-clamp-6 lg:line-clamp-8",attrs:{html:t.orangeBubbleContent}})],1)])]):t._e(),t._v(" "),t.textBubbleContent?r("div",{staticClass:"col-span-6 pt-13 text-2xl leading-9 xl:text-xl lg:text-lg lg:pt-9 md:text-base md:pt-6 sm:col-span-12 sm:pt-0",attrs:{"data-aos":"fade-left","data-aos-delay":"400","data-aos-duration":"1000"}},[r("Typograf",{attrs:{html:t.textBubbleContent}})],1):t._e()]),t._v(" "),t.onlineIsEasySteps.length?r("div",{staticClass:"mb-32 lg:mb-16 sm:mb-12",attrs:{"data-aos":"fade-up","data-aos-duration":"700"}},[r("div",{staticClass:"title-h2 mb-10 lg:mb-6"},[t._v("\n                Онлайн - это просто\n            ")]),t._v(" "),r("div",{staticClass:"grid grid-cols-4 items-start gap-10 xl:gap-6 lg:gap-10 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 sm:gap-x-0 sm:gap-y-8"},t._l(t.onlineIsEasySteps,(function(e){return r("div",{key:e.title,staticClass:"col-span-1 flex flex-col items-center justify-center"},[r("div",{staticClass:"flex items-center justify-center flex-shrink-0 fill-current mb-2.5 min-h-[120px] lg:min-h-[80px] sm:min-h-0 sm:mb-1.5"},[r("BaseImage",{staticClass:"max-w-[111px] max-h-[106px] lg:w-16 lg:h-18",attrs:{src:e.image,alt:e.title}})],1),t._v(" "),r("Typograf",{staticClass:"text-2xl leading-9 text-center break-word xl:text-xl lg:text-lg md:text-base",attrs:{html:e.title}})],1)})),0)]):t._e()]),t._v(" "),r("div",{staticClass:"relative bg-black text-white py-24 lg:pt-12 lg:pb-16"},[t.whatWeDoContent?r("div",{staticClass:"absolute left-4 top-22 max-w-[247px] max-h-[235px] w-full h-full pointer-events-none xl:max-w-[150px] xl:max-h-[150px] lg:max-w-[100px] lg:max-h-[100px] md:max-w-[75px] md:max-h-[75px] sm:max-w-[60px] sm:max-h-[60px]",attrs:{"data-aos":"fade-up-right"}},[r("div",{staticClass:"absolute inset-0 clip-path-yellow bg-yellow-700 transform rotate-[52deg] scale-x-reverse scale-y-[0.93] skew-x-[2deg]"})]):t._e(),t._v(" "),t._m(2),t._v(" "),r("div",{staticClass:"relative container"},[t.whatWeDoContent?r("div",{staticClass:"title-h2 pl-8 mb-13 xl:pl-0"},[t._v("\n                Что мы делаем?\n            ")]):t._e(),t._v(" "),r("TypographyText",{staticClass:"text-xl pl-[21rem] pr-48 mb-30 xl:pl-40 xl:mb-24 lg:text-lg lg:mb-16 md:pr-0 md:pl-24 md:text-base sm:pl-18",attrs:{content:t.whatWeDoContent,theme:"white"}}),t._v(" "),r("KickOffBrandCreatingForm",{attrs:{"form-description-mod":"text-xl lg:text-lg md:text-base"}})],1)]),t._v(" "),r("div",{staticClass:"relative bg-white pt-25 pb-22 xl:py-22 lg:py-16"},[t._m(3),t._v(" "),t._m(4),t._v(" "),r("div",{staticClass:"relative container"},[r("div",{staticClass:"title-h2 mb-10 lg:mb-6"},[t._v("\n                В чем сила Brand hub?\n            ")]),t._v(" "),t._l(t.strengths,(function(e,n){return r("div",{key:e.title,staticClass:"mb-10 last:mb-0 xl:mb-8 xl:last:mb-0 lg:mb-6 lg:last:mb-0"},[r("div",{staticClass:"flex -mx-2 items-start sm:mb-1.5"},[r("div",{staticClass:"mx-2 flex-shrink-0"},[r("FancyCount",{attrs:{count:n+1,theme:"blue",size:"md"}})],1),t._v(" "),r("div",{class:["mx-2 pt-15 lg:pt-3 lg:ml-4 sm:ml-2",n>0?" ml-12":"ml-14"]},[r("TypographyText",{attrs:{theme:"black_storage",view:"reset-margins"}},[r("Typograf",{staticClass:"title-h3 mb-4 pr-52 break-word xl:pr-24 lg:mb-2 sm:pr-0 sm:mb-0 tiny:text-xl",attrs:{html:e.title}}),t._v(" "),r("Typograf",{staticClass:"text-lg max-w-4xl xl:pr-24 lg:text-base sm:hidden sm:pr-0",attrs:{html:e.description||""}})],1)],1)]),t._v(" "),r("TypographyText",{staticClass:"a-sm:hidden text-sm",attrs:{content:e.description||"",theme:"black_storage",view:"reset-margins"}})],1)}))],2)])])}),[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"absolute max-w-[1092px] max-h-[184px] w-full h-full bottom-12 -right-28 lg:left-0",attrs:{"data-aos":"fade-right"}},[e("div",{staticClass:"absolute inset-0 clip-path-blue"},[e("div",{staticClass:"absolute inset-0 bg-noise opacity-70"})])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"absolute inset-0 bg-orange-700 clip-path-red lg:-bottom-6"},[e("div",{staticClass:"absolute inset-0 bg-noise"})])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"absolute top-36 right-[-36rem] max-w-[726px] min-h-[407px] w-full lg:max-w-[300px] lg:min-h-[200px] lg:-right-56 md:max-w-[250px] md:min-h-[110px] md:-right-52 md:top-4",attrs:{"data-aos":"fade-up-left"}},[e("div",{staticClass:"absolute inset-0 clip-path-green bg-green-300"},[e("div",{staticClass:"absolute inset-0 bg-noise opacity-40"})])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"absolute -right-20 top-8 max-w-[311px] max-h-[288px] w-full h-full pointer-events-none xl:max-w-[150px] xl:max-h-[150px] xl:-right-5 lg:max-w-[100px] lg:max-h-[100px] lg:-right-2 lg:top-4 md:max-w-[75px] md:max-h-[75px] sm:max-w-[60px] sm:max-h-[60px] sm:-top-4",attrs:{"data-aos":"fade-up-left"}},[e("div",{staticClass:"absolute inset-0 clip-path-yellow bg-yellow-700 transform rotate-[51deg] scale-x-reverse scale-y-[0.93] skew-x-[2deg]"})])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"absolute top-[43rem] right-[-15.5rem] max-w-[373px] max-h-[426px] w-full h-full pointer-events-none 2xl:max-w-[250px] 2xl:max-h-[200px] 2xl:-right-40 md:-right-48 sm:-right-56",attrs:{"data-aos":"fade-up-left","data-aos-duration":"700"}},[e("div",{staticClass:"absolute inset-0 clip-path-purple bg-purple-500 transform scale-x-reverse rotate-[111deg] skew-x-[-2deg] scale-y-105"},[e("div",{staticClass:"absolute inset-0 bg-noise opacity-40"})])])}],!1,null,null,null);e.default=component.exports;installComponents(component,{BaseTyper:r(457).default,Typograf:r(123).default,BaseImage:r(124).default,TypographyText:r(311).default,KickOffBrandCreatingForm:r(367).default,FancyCount:r(411).default})}}]);