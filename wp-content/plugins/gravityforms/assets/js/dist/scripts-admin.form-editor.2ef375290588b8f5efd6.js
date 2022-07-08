"use strict";(self.webpackChunkgravityforms=self.webpackChunkgravityforms||[]).push([[42],{4770:function(e,t,i){i.r(t),i.d(t,{default:function(){return D}});var n,r=i(5518),o=i(2340),a=i.n(o),s=i(7329),l=i.n(s),c=i(2452),d=i.n(c),u={labels:(0,r.getNodes)("choices-ui-label",!0),sections:(0,r.getNodes)("choices-ui-section",!0),settings:(0,r.getNodes)("choices-ui-setting",!0),flyoutTrigger:(0,r.getNodes)("choices-ui-trigger")[0],flyoutTriggerLabel:(0,r.getNodes)("choices-ui-trigger-label")[0]},f=(null===l()||void 0===l()||null===(n=l().form_editor)||void 0===n?void 0:n.choices_ui)||{},v=function(){var e=u.settings.filter((function(e){return"none"!==window.getComputedStyle(e).getPropertyValue("display")}));u.flyoutTrigger.style.display=e.length?"":"none",u.flyoutTriggerLabel.style.display=e.length?"":"none"},g=function(e){var t=e.title,i=void 0===t?"":t,n=e.content,o=void 0===n?null:n,s=e.position,l=void 0===s?"beforeend":s,c=e.type,d=void 0===c?"":c;if(o){a().instances.choicesUi.flyout.elements.content.insertAdjacentHTML(l,'\n\t\t<div class="choices-ui__section" data-js="choices-ui-section" data-type="'.concat(d,'">\n\t\t\t<h6 class="choices-ui__section-label">').concat((0,r.escapeHtml)(i),"</h6>\n\t\t</div>\n\t"));var f=(0,r.getNodes)("choices-ui-section",!0);f[f.length-1].appendChild(o),u.sections.push(f[f.length-1])}else(0,r.consoleError)("Gravity Forms Admin: You must supply a valid node to appendSectionHtml.")},h=function(e){(function(e){var t,i,n,o;u.container=e,(0,r.trigger)({event:"gform/choices_ui/pre_init",native:!1,data:{elements:u}}),a().instances=a().instances||{},a().instances.choicesUi={},i=(t=f.i18n).title,n=t.expandableTitle,o=t.description,a().instances.choicesUi.flyout=new(d())({description:(0,r.escapeHtml)(o),expandable:!0,expandableTitle:(0,r.escapeHtml)(n),expandableWidth:100,id:"choices-ui-flyout",maxWidth:540,mobileBreakpoint:1200,position:"absolute",simplebar:!0,target:'[data-js="form-editor"]',title:(0,r.escapeHtml)(i),triggers:'[data-js="choices-ui-trigger"]',wrapperClasses:"gform-flyout gform-flyout--choices-ui",zIndex:100}),function(){a().instances.choicesUi.flyout.elements.content.insertAdjacentHTML("afterbegin",'<ul class="choices-ui__content" data-js="choices-ui-content"></ul>');var e=(0,r.getNodes)("choices-ui-content",!1,a().instances.choicesUi.flyout.elements.content)[0];u.settings.forEach((function(t){return e.appendChild(t)}))}(),u.optionsList=(0,r.getNodes)("choices-ui-option-list",!1,a().instances.choicesUi.flyout.elements.content)[0],u.settings.forEach((function(e){"option"===e.dataset.type&&u.optionsList.appendChild(e)})),u.options=(0,r.getNodes)('[data-js="choices-ui-option-list"] > li',!0,a().instances.choicesUi.flyout.elements.content,!0),a().instances.choicesUi.flyout.elements.flyout.addEventListener("click",(function(e){e.stopPropagation()})),document.addEventListener("gform/form_editor/setting_selected",v),u.flyoutEl=(0,r.getNodes)("#choices-ui-flyout .gform-flyout__body",!1,document,!0),a().instances.choicesUi.elements=u,a().instances.choicesUi.methods={appendSectionHtml:g},(0,r.trigger)({event:"gform/choices_ui/post_render",native:!1,data:a().instances.choicesUi}),(0,r.consoleInfo)("Gravity Forms Admin: Initialized choices ui flyout.")})(e),(0,r.consoleInfo)("Gravity Forms Admin: Initialized all choices ui scripts.")},m=i(6655),p=i(8821),y=i(5169),S=i(9803),b=i(535),_=i(5469),w=i(2312),k=i(5311),E=i.n(k);function A(e,t){(null==t||t>e.length)&&(t=e.length);for(var i=0,n=new Array(t);i<t;i++)n[i]=e[i];return n}var F=function(e){(0,b.Z)(o,e);var t,i,n=(t=o,i=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,n=(0,w.Z)(t);if(i){var r=(0,w.Z)(this).constructor;e=Reflect.construct(n,arguments,r)}else e=n.apply(this,arguments);return(0,_.Z)(this,e)});function o(){return(0,p.Z)(this,o),n.apply(this,arguments)}return(0,y.Z)(o,[{key:"init",value:function(){var e=this;this.eventsManager.addListener("SaveRequested",this.save,this),this.eventsManager.addListener("SaveCompleted",this.resetFormChars,this),document.addEventListener("gform/dialog/confirm",this.maybeSave.bind(this));var t,i=function(e,t){var i="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!i){if(Array.isArray(e)||(i=function(e,t){if(e){if("string"==typeof e)return A(e,t);var i=Object.prototype.toString.call(e).slice(8,-1);return"Object"===i&&e.constructor&&(i=e.constructor.name),"Map"===i||"Set"===i?Array.from(e):"Arguments"===i||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i)?A(e,t):void 0}}(e))||t&&e&&"number"==typeof e.length){i&&(e=i);var n=0,r=function(){};return{s:r,n:function(){return n>=e.length?{done:!0}:{done:!1,value:e[n++]}},e:function(e){throw e},f:r}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var o,a=!0,s=!1;return{s:function(){i=i.call(e)},n:function(){var e=i.next();return a=e.done,e},e:function(e){s=!0,o=e},f:function(){try{a||null==i.return||i.return()}finally{if(s)throw o}}}}(this.config.data.domEvents);try{var n=function(){var i=t.value;if(i){var n=e.eventsManager.get(i.name),r=document,o={};if("document"!==i.elementSelector&&(r=document.getElementsByClassName(i.elementSelector.replace(".",""))[0]),void 0===r)return{v:void 0};r.addEventListener(i.action,(function(t){if(!e.saveInProgress){if("keydown"===i.action&&"keys"in i&&i.keys.length>0){if(-1===i.keys.indexOf(t.keyCode))return!1;if(o[t.keyCode.toString()]=t.keyCode,!i.keys.every((function(e){return e in o!=0})))return e.pressedKeysTimeOut=setTimeout((function(){o={}}),1e3),!1}e.saveInProgress||(a().instances.adminFormSaverUIHandler.activeElement=document.activeElement,document.activeElement.blur(),t.preventDefault(),t.stopImmediatePropagation(),o={},n.fire(),e.saveInProgress=!0)}}))}};for(i.s();!(t=i.n()).done;){var r=n();if("object"===(0,m.Z)(r))return r.v}}catch(e){i.e(e)}finally{i.f()}}},{key:"maybeSave",value:function(e){if("gform/dialog/confirm"===e.type){var t,i,n;if("dialog-embed-form-unsaved-changes"!==(null==e||null===(t=e.detail)||void 0===t||null===(i=t.instance)||void 0===i||null===(n=i.options)||void 0===n?void 0:n.id))return;this.save()}}},{key:"save",value:function(){var e=(0,r.getNodes)("force-focus")[0];if(e&&e.focus(),this.formJSONString=this.getUpdatedFormJSON(),!window.ValidateForm())return this.eventsManager.trigger("SaveAborted"),!1;(0,S.Z)((0,w.Z)(o.prototype),"save",this).call(this)}},{key:"deepSanitizeFormValues",value:function(e){if("object"!==(0,m.Z)(e))return e;for(var t in e){var i=e[t];"object"!==(0,m.Z)(i)||null===i?"string"==typeof i?(e[t]=i.replace(/\\'/g,"'"),e[t]=i.replace(/\\/g,"\\\\")):e[t]=i:e[t]=this.deepSanitizeFormValues(i)}return e}},{key:"resetFormChars",value:function(){window.form=this.reverseFormSanitization(this.form)}},{key:"reverseFormSanitization",value:function(e){if("object"!==(0,m.Z)(e))return e;for(var t in e){var i=e[t];"object"!==(0,m.Z)(i)||null===i?e[t]="string"==typeof i?i.replace(/\\\\/g,"\\"):i:e[t]=this.reverseFormSanitization(i)}return e}},{key:"getUpdatedFormJSON",value:function(){try{this.form=window.UpdateFormObject(),window.gforms_original_json=E().toJSON(this.form)}catch(e){(0,r.consoleError)(e)}var e=this.deepSanitizeFormValues(this.form);return E().toJSON(e)}}]),o}(i(5289).Z),j=i(2243),C=i(5998),x=i.n(C),I=i(1297),T=i.n(I),B=i(3623);function N(e,t){var i="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!i){if(Array.isArray(e)||(i=function(e,t){if(e){if("string"==typeof e)return O(e,t);var i=Object.prototype.toString.call(e).slice(8,-1);return"Object"===i&&e.constructor&&(i=e.constructor.name),"Map"===i||"Set"===i?Array.from(e):"Arguments"===i||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i)?O(e,t):void 0}}(e))||t&&e&&"number"==typeof e.length){i&&(e=i);var n=0,r=function(){};return{s:r,n:function(){return n>=e.length?{done:!0}:{done:!1,value:e[n++]}},e:function(e){throw e},f:r}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var o,a=!0,s=!1;return{s:function(){i=i.call(e)},n:function(){var e=i.next();return a=e.done,e},e:function(e){s=!0,o=e},f:function(){try{a||null==i.return||i.return()}finally{if(s)throw o}}}}function O(e,t){(null==t||t>e.length)&&(t=e.length);for(var i=0,n=new Array(t);i<t;i++)n[i]=e[i];return n}var U=function(){function e(t,i){(0,p.Z)(this,e),this.events=t,this.config=i,this.timeOuts=[],this.scripts=[],this.styles=[],this.buttons=[],this.maybeHandleNormalPostRequest(),this.setInitialUrlState(),this.initButtons(),this.bindEvents(),this.init()}return(0,y.Z)(e,[{key:"init",value:function(){var e=this;this.timeOuts.forEach((function(e){window.clearTimeout(e)})),document.getElementsByTagName("script").forEach((function(t){var i=t.getAttribute("src");null!==i&&(i=i.substring(0,i.indexOf("?ver")),e.scripts.push(i))})),document.getElementsByTagName("link").forEach((function(t){var i=t.getAttribute("href");null!==i&&(i=i.substring(0,i.indexOf("?ver")),e.styles.push(i))})),this.selectedField={}}},{key:"initButtons",value:function(){var e=this;this.config.data.selectors.saveAnimationButtons.forEach((function(t){(0,r.getNodes)(t,!0,document,!0).forEach((function(t){var i=t.id?t.id:(0,r.uniqueId)("button-");t.id=i;var n=new(T())({activeType:"loader",id:i,interactive:!0,loaderOptions:{background:"transparent",foreground:"#fff",mask:!1,showOnRender:!1,size:1.5},rendered:!0});e.buttons.push(n)}))}))}},{key:"maybeHandleNormalPostRequest",value:function(){void 0!==window.updateFormResult&&("invalid_json"===window.updateFormResult.status?this.showSaveErrorNotification():this.showSaveSuccessNotification())}},{key:"bindEvents",value:function(){this.events.addListeners([{name:"SaveBegan",handler:[this.init,this.beginButtonAnimation]},{name:"SaveInProgress",handler:this.handleSaveProgress},{name:["SaveFailed","SaveRequestFailed","SaveResponseMalformed"],handler:[this.handleSaveFailure]},{name:"SaveSucceeded",handler:[this.handleSaveSuccess]},{name:"SaveCompleted",handler:this.reset},{name:"SaveBegan",handler:this.beginButtonAnimation},{name:["SaveCompleted","SaveAborted"],handler:[this.endButtonAnimation,this.reset]}],this)}},{key:"beginButtonAnimation",value:function(){this.buttons.filter((function(e){return e.options.interactive})).forEach((function(e){return e.activateButton()}))}},{key:"endButtonAnimation",value:function(){this.buttons.filter((function(e){return e.options.interactive})).forEach((function(e){return e.deactivateButton()}))}},{key:"reset",value:function(){var e=this;this.registerTimeOut((function(){e.buttons.forEach((function(e){e.deactivateButton()})),"id"in e.selectedField&&E()("#field_"+e.selectedField.id).click(),e.resetSettingsControlsDisabledState(),e.activeElement&&E()(e.activeElement).focus(),a().instances.adminFormSaver.saveInProgress=!1}),this.config.data.animationDelay)}},{key:"resetElementClasses",value:function(e,t){var i=t.classList.value;if(void 0!==i&&""!==i){i=i.split(" "),e.removeClass();for(var n=0;n<i.length;n++)""!==i[n]&&void 0!==i[n]&&e.addClass(i[n])}}},{key:"handleSaveProgress",value:function(){var e=this;this.selectedField=window.GetSelectedField(),this.selectedField||(this.selectedField={}),this.registerTimeOut((function(){x().a11y.speak(e.config.i18n.saveInProgress,"polite"),e.disableSettingsControls()}),this.config.data.animationDelay/8)}},{key:"handleSaveFailure",value:function(e){var t=this;this.registerTimeOut((function(){t.showSaveErrorNotification(e),t.showSaveErrorDialog(),(0,r.trigger)({event:"gform/form_editor_saver/post_save_error",native:!1})}),this.config.data.animationDelay)}},{key:"fireManualSave",value:function(){window.SaveForm()}},{key:"showSaveErrorDialog",value:function(){new B.Z({animationDelay:250,closeOnConfirmClick:!1,closeOnMaskClick:!1,confirmButtonIcon:"floppy-disk",onConfirm:this.fireManualSave.bind(this),id:"dialog-ajax-save-error",cancelButtonText:this.config.i18n.ajaxErrorDialogCancelButtonText,closeButtonTitle:this.config.i18n.ajaxErrorDialogCloseButtonTitle,confirmButtonText:this.config.i18n.ajaxErrorDialogConfirmButtonText,content:this.config.i18n.ajaxErrorDialogContent,title:this.config.i18n.ajaxErrorDialogTitle,titleIcon:"circle-delete",mode:"dialog",titleIconColor:"#DD301D",wrapperClasses:"gform-dialog ",zIndex:1e5}).showDialog()}},{key:"handleSaveSuccess",value:function(e){var t=this;this.registerTimeOut((function(){t.showSaveSuccessNotification(),t.updatePageURL(),(0,r.trigger)({event:"gform/form_editor_saver/post_save_success",native:!1})}),this.config.data.animationDelay),this.reloadEditorUI(e)}},{key:"setInitialUrlState",value:function(){window.history.replaceState(window.form,document.title,(0,r.updateQueryVar)("gf_ajax_save",null))}},{key:"updatePageURL",value:function(){window.history.replaceState({},document.title,(0,r.updateQueryVar)("gf_ajax_save",(0,r.uniqueId)(""),(0,r.updateQueryVar)("isnew",null)))}},{key:"showSaveSuccessNotification",value:function(){var e=this.config.data.urls.formPreview,t=this.config.i18n,i=t.formUpdated,n=t.viewForm;(0,r.trigger)({data:{autoHideDelay:4500,container:"#form_editor_fields_container",ctaLink:(0,r.escapeHtml)((0,r.vsprintf)(e,[window.form.id])),ctaTarget:"_blank",ctaText:(0,r.escapeHtml)(n),icon:"circle-check-alt",message:(0,r.escapeHtml)(i),type:"success"},event:"gform/snackbar/render",native:!1})}},{key:"showSaveErrorNotification",value:function(e){var t=this.config.i18n.genericError,i="string"==typeof e&&""!==e&&null!==e?e:t;(0,r.trigger)({data:{autoHideDelay:4500,container:"#form_editor_fields_container",icon:"circle-delete",message:(0,r.escapeHtml)(i),type:"error"},event:"gform/snackbar/render",native:!1})}},{key:"disableSettingsControls",value:function(){document.querySelectorAll(".field_setting input, .field_setting select, .field_setting textarea").forEach((function(e){e.setAttribute("data-js-initial-disabled-state",e.disabled),e.disabled=!0}))}},{key:"resetSettingsControlsDisabledState",value:function(){document.querySelectorAll(".field_setting input, .field_setting select, .field_setting textarea").forEach((function(e){"false"===e.getAttribute("data-js-initial-disabled-state")&&e.removeAttribute("disabled"),e.removeAttribute("data-js-initial-disabled-state")}))}},{key:"reloadEditorUI",value:function(e){try{var t=document.createElement("html");t.innerHTML=e.data.updated_markup.toString();var i=E()(t);this.reloadSettings(i),this.reloadScripts(i),this.reloadElements(i)}catch(e){console.log("Error occurred while reloading editor UI after AJAX save: "+e.message)}}},{key:"reloadScripts",value:function(e){var t=this;e.find("script[data-js-reload]").toArray().forEach((function(e){var i=E()(e).attr("data-js-reload"),n=E()('script[data-js-reload="'+i+'"]');if(n.length){var r=t.events.trigger("scriptBeforeReload",e,i,n.get(0));!1!==r&&void 0!==E()(r).attr("data-js-skip-reload")&&(n.replaceWith(r),t.events.trigger("scriptAfterReload",r,i,n.get(0)))}})),E()("#gform_editor_js_action_output_wrapper script").toArray().forEach((function(e){e.remove()}));var i=e.find("#gform_editor_js_action_output_wrapper").toArray().pop();!1!==(i=this.events.trigger("gformEditorJSActionBeforeReload",i))&&E()("#gform_editor_js_action_output_wrapper").replaceWith(i)}},{key:"reloadElements",value:function(e){var t=this;e.find(":not(script)[data-js-reload]").toArray().forEach((function(e){var i=E()(e).attr("data-js-reload");if("true"!==i){var n=E()(':not(script)[data-js-reload="'+i+'"]');if(n.length){var r=t.events.trigger("elementBeforeReload",e,i,n.get(0));!1!==r&&void 0===E()(r).attr("data-js-skip-reload")&&(n.replaceWith(r),t.events.trigger("elementAfterReload",r,i,n.get(0)))}}})),"id"in this.selectedField&&E()("#field_"+this.selectedField.id).addClass("field_selected")}},{key:"reloadSettings",value:function(e){var t,i=E()(".editor-sidebar"),n=E()(".gform-flyout"),r=e.find(".editor-sidebar"),o=[],a=[],s=[],l=r.find("li.field_setting").toArray(),c=i.find("li.field_setting").toArray(),d=n.find("li.field_setting").toArray(),u=this.getElementsAsClassLists(l),f=this.getElementsAsClassLists(d),v=this.getElementsAsClassLists(c),g=N(v=v.concat(f));try{for(g.s();!(t=g.n()).done;){var h=t.value;u.indexOf(h)>=0||a.push(h)}}catch(e){g.e(e)}finally{g.f()}var m,p=N(u);try{for(p.s();!(m=p.n()).done;){var y=m.value;""!==y&&(v.indexOf(y)>=0?s.push(y):o.push(y))}}catch(e){p.e(e)}finally{p.f()}this.insertNewFieldSettings(o,r),this.updateExistingFieldSettings(s,r,e),this.deleteExpiredFieldSettings(a)}},{key:"insertNewFieldSettings",value:function(e,t){var i,n=N(e);try{for(n.s();!(i=n.n()).done;){var r=i.value,o=t.find("."+r).prevUntil().toArray();if(this.events.trigger("beforeFieldSettingAdded",[E()("."+r).get(0),t.find("."+r).get(0)]),o.length<1){var a=t.find("."+r).parent().attr("id");E()("#"+a).prepend(t.find("."+r)),this.events.trigger("afterFieldSettingAdded",[r])}else{var s,l=N(o);try{for(l.s();!(s=l.n()).done;){var c=s.value.classList.value.split(" ")[0];if(E()("."+c).length){t.find("."+r).insertAfter(E()("."+c)),this.events.trigger("afterFieldSettingAdded",[r]);break}}}catch(e){l.e(e)}finally{l.f()}}}}catch(e){n.e(e)}finally{n.f()}}},{key:"deleteExpiredFieldSettings",value:function(e){var t,i=N(e);try{for(i.s();!(t=i.n()).done;){var n=t.value;this.events.trigger("beforeFieldSettingDeleted",[n]),E()("."+n).remove(),this.events.trigger("AfterFieldSettingDeleted",[n])}}catch(e){i.e(e)}finally{i.f()}}},{key:"updateExistingFieldSettings",value:function(e,t,i){var n=this;e.forEach((function(e){var r="."+e;E()(r).hasClass("data-js-reload")&&(n.events.trigger("fieldSettingBeforeUpdate",E()(r).get(0),t.find(r).get(0)),E()(r).replaceWith(i.find(r)),n.events.trigger("fieldSettingAfterUpdate",E()(r).get(0)))}))}},{key:"getElementsAsClassLists",value:function(e){return e.map((function(e){return e.classList.value.split(" ")[0]}))}},{key:"registerTimeOut",value:function(e,t){var i=setTimeout(e,t);return this.timeOuts.push(i),i}}]),e}(),L=(null===l()||void 0===l()?void 0:l().form_editor_save_form)||{};a().instances=(null===a()||void 0===a()?void 0:a().instances)||{};var D=function(e){h(e),a().instances.formSaverEventsManager=new j.Z,a().instances.adminFormSaverUIHandler=new U(a().instances.formSaverEventsManager,L),a().instances.adminFormSaver=new F(L,{config:L,events:a().instances.formSaverEventsManager,endpointKey:"form_editor_save_form",form:window.form}),a().instances.adminFormSaver.init(),console.info("Gravity Forms Admin: Initialized Form Editor AJAX Saver."),(0,r.consoleInfo)("Gravity Forms Admin: Initialized all form editor scripts.")}}}]);