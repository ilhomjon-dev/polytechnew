(()=>{"use strict";window.tutor_get_nonce_data||(window.tutor_get_nonce_data=function(t){var e=window._tutorobject||{},r=e.nonce_key||"",e=e[r]||"";return t?{key:r,value:e}:{[r]:e}});const s=function(t=[]){const n=new FormData;return t.forEach(t=>{for(var[e,r]of Object.entries(t))n.set(e,r)}),n.set(window.tutor_get_nonce_data(!0).key,window.tutor_get_nonce_data(!0).value),n};function E(t){return(E="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function j(){j=function(){return a};var a={},t=Object.prototype,u=t.hasOwnProperty,s=Object.defineProperty||function(t,e,r){t[e]=r.value},e="function"==typeof Symbol?Symbol:{},n=e.iterator||"@@iterator",r=e.asyncIterator||"@@asyncIterator",o=e.toStringTag||"@@toStringTag";function i(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{i({},"")}catch(t){i=function(t,e,r){return t[e]=r}}function c(t,e,r,n){var o,i,a,c,e=e&&e.prototype instanceof h?e:h,e=Object.create(e.prototype),n=new _(n||[]);return s(e,"_invoke",{value:(o=t,i=r,a=n,c="suspendedStart",function(t,e){if("executing"===c)throw new Error("Generator is already running");if("completed"===c){if("throw"===t)throw e;return x()}for(a.method=t,a.arg=e;;){var r=a.delegate;if(r){r=function t(e,r){var n=r.method,o=e.iterator[n];if(void 0===o)return r.delegate=null,"throw"===n&&e.iterator.return&&(r.method="return",r.arg=void 0,t(e,r),"throw"===r.method)||"return"!==n&&(r.method="throw",r.arg=new TypeError("The iterator does not provide a '"+n+"' method")),f;n=l(o,e.iterator,r.arg);if("throw"===n.type)return r.method="throw",r.arg=n.arg,r.delegate=null,f;o=n.arg;return o?o.done?(r[e.resultName]=o.value,r.next=e.nextLoc,"return"!==r.method&&(r.method="next",r.arg=void 0),r.delegate=null,f):o:(r.method="throw",r.arg=new TypeError("iterator result is not an object"),r.delegate=null,f)}(r,a);if(r){if(r===f)continue;return r}}if("next"===a.method)a.sent=a._sent=a.arg;else if("throw"===a.method){if("suspendedStart"===c)throw c="completed",a.arg;a.dispatchException(a.arg)}else"return"===a.method&&a.abrupt("return",a.arg);c="executing";r=l(o,i,a);if("normal"===r.type){if(c=a.done?"completed":"suspendedYield",r.arg===f)continue;return{value:r.arg,done:a.done}}"throw"===r.type&&(c="completed",a.method="throw",a.arg=r.arg)}})}),e}function l(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}a.wrap=c;var f={};function h(){}function p(){}function d(){}var e={},y=(i(e,n,function(){return this}),Object.getPrototypeOf),y=y&&y(y(L([]))),v=(y&&y!==t&&u.call(y,n)&&(e=y),d.prototype=h.prototype=Object.create(e));function g(t){["next","throw","return"].forEach(function(e){i(t,e,function(t){return this._invoke(e,t)})})}function m(a,c){var e;s(this,"_invoke",{value:function(r,n){function t(){return new c(function(t,e){!function e(t,r,n,o){var i,t=l(a[t],a,r);if("throw"!==t.type)return(r=(i=t.arg).value)&&"object"==E(r)&&u.call(r,"__await")?c.resolve(r.__await).then(function(t){e("next",t,n,o)},function(t){e("throw",t,n,o)}):c.resolve(r).then(function(t){i.value=t,n(i)},function(t){return e("throw",t,n,o)});o(t.arg)}(r,n,t,e)})}return e=e?e.then(t,t):t()}})}function w(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function b(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function _(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(w,this),this.reset(!0)}function L(e){if(e){var r,t=e[n];if(t)return t.call(e);if("function"==typeof e.next)return e;if(!isNaN(e.length))return r=-1,(t=function t(){for(;++r<e.length;)if(u.call(e,r))return t.value=e[r],t.done=!1,t;return t.value=void 0,t.done=!0,t}).next=t}return{next:x}}function x(){return{value:void 0,done:!0}}return s(v,"constructor",{value:p.prototype=d,configurable:!0}),s(d,"constructor",{value:p,configurable:!0}),p.displayName=i(d,o,"GeneratorFunction"),a.isGeneratorFunction=function(t){t="function"==typeof t&&t.constructor;return!!t&&(t===p||"GeneratorFunction"===(t.displayName||t.name))},a.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,d):(t.__proto__=d,i(t,o,"GeneratorFunction")),t.prototype=Object.create(v),t},a.awrap=function(t){return{__await:t}},g(m.prototype),i(m.prototype,r,function(){return this}),a.AsyncIterator=m,a.async=function(t,e,r,n,o){void 0===o&&(o=Promise);var i=new m(c(t,e,r,n),o);return a.isGeneratorFunction(e)?i:i.next().then(function(t){return t.done?t.value:i.next()})},g(v),i(v,o,"Generator"),i(v,n,function(){return this}),i(v,"toString",function(){return"[object Generator]"}),a.keys=function(t){var e,r=Object(t),n=[];for(e in r)n.push(e);return n.reverse(),function t(){for(;n.length;){var e=n.pop();if(e in r)return t.value=e,t.done=!1,t}return t.done=!0,t}},a.values=L,_.prototype={constructor:_,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(b),!t)for(var e in this)"t"===e.charAt(0)&&u.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=void 0)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(r){if(this.done)throw r;var n=this;function t(t,e){return i.type="throw",i.arg=r,n.next=t,e&&(n.method="next",n.arg=void 0),!!e}for(var e=this.tryEntries.length-1;0<=e;--e){var o=this.tryEntries[e],i=o.completion;if("root"===o.tryLoc)return t("end");if(o.tryLoc<=this.prev){var a=u.call(o,"catchLoc"),c=u.call(o,"finallyLoc");if(a&&c){if(this.prev<o.catchLoc)return t(o.catchLoc,!0);if(this.prev<o.finallyLoc)return t(o.finallyLoc)}else if(a){if(this.prev<o.catchLoc)return t(o.catchLoc,!0)}else{if(!c)throw new Error("try statement without catch or finally");if(this.prev<o.finallyLoc)return t(o.finallyLoc)}}}},abrupt:function(t,e){for(var r=this.tryEntries.length-1;0<=r;--r){var n=this.tryEntries[r];if(n.tryLoc<=this.prev&&u.call(n,"finallyLoc")&&this.prev<n.finallyLoc){var o=n;break}}var i=(o=o&&("break"===t||"continue"===t)&&o.tryLoc<=e&&e<=o.finallyLoc?null:o)?o.completion:{};return i.type=t,i.arg=e,o?(this.method="next",this.next=o.finallyLoc,f):this.complete(i)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),f},finish:function(t){for(var e=this.tryEntries.length-1;0<=e;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),b(r),f}},catch:function(t){for(var e=this.tryEntries.length-1;0<=e;--e){var r,n,o=this.tryEntries[e];if(o.tryLoc===t)return"throw"===(r=o.completion).type&&(n=r.arg,b(o)),n}throw new Error("illegal catch attempt")},delegateYield:function(t,e,r){return this.delegate={iterator:L(t),resultName:e,nextLoc:r},"next"===this.method&&(this.arg=void 0),f}},a}function u(t,e,r,n,o,i,a){try{var c=t[i](a),u=c.value}catch(t){return void r(t)}c.done?e(u):Promise.resolve(u).then(n,o)}function l(){return t.apply(this,arguments)}function t(){var c;return c=j().mark(function t(e){var r;return j().wrap(function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,t.next=3,fetch(window._tutorobject.ajaxurl,{method:"POST",body:e});case 3:return r=t.sent,t.abrupt("return",r);case 7:t.prev=7,t.t0=t.catch(0),tutor_toast(__("Operation failed","tutor"),t.t0,"error");case 10:case"end":return t.stop()}},t,null,[[0,7]])}),(t=function(){var t=this,a=arguments;return new Promise(function(e,r){var n=c.apply(t,a);function o(t){u(n,e,r,o,i,"next",t)}function i(t){u(n,e,r,o,i,"throw",t)}o(void 0)})}).apply(this,arguments)}function O(t){return(O="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function k(){k=function(){return a};var a={},t=Object.prototype,u=t.hasOwnProperty,s=Object.defineProperty||function(t,e,r){t[e]=r.value},e="function"==typeof Symbol?Symbol:{},n=e.iterator||"@@iterator",r=e.asyncIterator||"@@asyncIterator",o=e.toStringTag||"@@toStringTag";function i(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{i({},"")}catch(t){i=function(t,e,r){return t[e]=r}}function c(t,e,r,n){var o,i,a,c,e=e&&e.prototype instanceof h?e:h,e=Object.create(e.prototype),n=new _(n||[]);return s(e,"_invoke",{value:(o=t,i=r,a=n,c="suspendedStart",function(t,e){if("executing"===c)throw new Error("Generator is already running");if("completed"===c){if("throw"===t)throw e;return x()}for(a.method=t,a.arg=e;;){var r=a.delegate;if(r){r=function t(e,r){var n=r.method,o=e.iterator[n];if(void 0===o)return r.delegate=null,"throw"===n&&e.iterator.return&&(r.method="return",r.arg=void 0,t(e,r),"throw"===r.method)||"return"!==n&&(r.method="throw",r.arg=new TypeError("The iterator does not provide a '"+n+"' method")),f;n=l(o,e.iterator,r.arg);if("throw"===n.type)return r.method="throw",r.arg=n.arg,r.delegate=null,f;o=n.arg;return o?o.done?(r[e.resultName]=o.value,r.next=e.nextLoc,"return"!==r.method&&(r.method="next",r.arg=void 0),r.delegate=null,f):o:(r.method="throw",r.arg=new TypeError("iterator result is not an object"),r.delegate=null,f)}(r,a);if(r){if(r===f)continue;return r}}if("next"===a.method)a.sent=a._sent=a.arg;else if("throw"===a.method){if("suspendedStart"===c)throw c="completed",a.arg;a.dispatchException(a.arg)}else"return"===a.method&&a.abrupt("return",a.arg);c="executing";r=l(o,i,a);if("normal"===r.type){if(c=a.done?"completed":"suspendedYield",r.arg===f)continue;return{value:r.arg,done:a.done}}"throw"===r.type&&(c="completed",a.method="throw",a.arg=r.arg)}})}),e}function l(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}a.wrap=c;var f={};function h(){}function p(){}function d(){}var e={},y=(i(e,n,function(){return this}),Object.getPrototypeOf),y=y&&y(y(L([]))),v=(y&&y!==t&&u.call(y,n)&&(e=y),d.prototype=h.prototype=Object.create(e));function g(t){["next","throw","return"].forEach(function(e){i(t,e,function(t){return this._invoke(e,t)})})}function m(a,c){var e;s(this,"_invoke",{value:function(r,n){function t(){return new c(function(t,e){!function e(t,r,n,o){var i,t=l(a[t],a,r);if("throw"!==t.type)return(r=(i=t.arg).value)&&"object"==O(r)&&u.call(r,"__await")?c.resolve(r.__await).then(function(t){e("next",t,n,o)},function(t){e("throw",t,n,o)}):c.resolve(r).then(function(t){i.value=t,n(i)},function(t){return e("throw",t,n,o)});o(t.arg)}(r,n,t,e)})}return e=e?e.then(t,t):t()}})}function w(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function b(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function _(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(w,this),this.reset(!0)}function L(e){if(e){var r,t=e[n];if(t)return t.call(e);if("function"==typeof e.next)return e;if(!isNaN(e.length))return r=-1,(t=function t(){for(;++r<e.length;)if(u.call(e,r))return t.value=e[r],t.done=!1,t;return t.value=void 0,t.done=!0,t}).next=t}return{next:x}}function x(){return{value:void 0,done:!0}}return s(v,"constructor",{value:p.prototype=d,configurable:!0}),s(d,"constructor",{value:p,configurable:!0}),p.displayName=i(d,o,"GeneratorFunction"),a.isGeneratorFunction=function(t){t="function"==typeof t&&t.constructor;return!!t&&(t===p||"GeneratorFunction"===(t.displayName||t.name))},a.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,d):(t.__proto__=d,i(t,o,"GeneratorFunction")),t.prototype=Object.create(v),t},a.awrap=function(t){return{__await:t}},g(m.prototype),i(m.prototype,r,function(){return this}),a.AsyncIterator=m,a.async=function(t,e,r,n,o){void 0===o&&(o=Promise);var i=new m(c(t,e,r,n),o);return a.isGeneratorFunction(e)?i:i.next().then(function(t){return t.done?t.value:i.next()})},g(v),i(v,o,"Generator"),i(v,n,function(){return this}),i(v,"toString",function(){return"[object Generator]"}),a.keys=function(t){var e,r=Object(t),n=[];for(e in r)n.push(e);return n.reverse(),function t(){for(;n.length;){var e=n.pop();if(e in r)return t.value=e,t.done=!1,t}return t.done=!0,t}},a.values=L,_.prototype={constructor:_,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(b),!t)for(var e in this)"t"===e.charAt(0)&&u.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=void 0)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(r){if(this.done)throw r;var n=this;function t(t,e){return i.type="throw",i.arg=r,n.next=t,e&&(n.method="next",n.arg=void 0),!!e}for(var e=this.tryEntries.length-1;0<=e;--e){var o=this.tryEntries[e],i=o.completion;if("root"===o.tryLoc)return t("end");if(o.tryLoc<=this.prev){var a=u.call(o,"catchLoc"),c=u.call(o,"finallyLoc");if(a&&c){if(this.prev<o.catchLoc)return t(o.catchLoc,!0);if(this.prev<o.finallyLoc)return t(o.finallyLoc)}else if(a){if(this.prev<o.catchLoc)return t(o.catchLoc,!0)}else{if(!c)throw new Error("try statement without catch or finally");if(this.prev<o.finallyLoc)return t(o.finallyLoc)}}}},abrupt:function(t,e){for(var r=this.tryEntries.length-1;0<=r;--r){var n=this.tryEntries[r];if(n.tryLoc<=this.prev&&u.call(n,"finallyLoc")&&this.prev<n.finallyLoc){var o=n;break}}var i=(o=o&&("break"===t||"continue"===t)&&o.tryLoc<=e&&e<=o.finallyLoc?null:o)?o.completion:{};return i.type=t,i.arg=e,o?(this.method="next",this.next=o.finallyLoc,f):this.complete(i)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),f},finish:function(t){for(var e=this.tryEntries.length-1;0<=e;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),b(r),f}},catch:function(t){for(var e=this.tryEntries.length-1;0<=e;--e){var r,n,o=this.tryEntries[e];if(o.tryLoc===t)return"throw"===(r=o.completion).type&&(n=r.arg,b(o)),n}throw new Error("illegal catch attempt")},delegateYield:function(t,e,r){return this.delegate={iterator:L(t),resultName:e,nextLoc:r},"next"===this.method&&(this.arg=void 0),f}},a}function f(t,e,r,n,o,i,a){try{var c=t[i](a),u=c.value}catch(t){return void r(t)}c.done?e(u):Promise.resolve(u).then(n,o)}function r(c){return function(){var t=this,a=arguments;return new Promise(function(e,r){var n=c.apply(t,a);function o(t){f(n,e,r,o,i,"next",t)}function i(t){f(n,e,r,o,i,"throw",t)}o(void 0)})}}var h=wp.i18n.__;window.tutor_toast||(window.tutor_toast=function(t,e,r){var n=!(3<arguments.length&&void 0!==arguments[3])||arguments[3],o=(jQuery(".tutor-toast-parent").length||jQuery("body").append('<div class="tutor-toast-parent tutor-toast-right"></div>'),"success"==r?"success":"error"==r?"danger":"warning"==r?"warning":"primary"),r="success"==r?"tutor-icon-mark":"error"==r?"tutor-icon-times":"tutor-icon-circle-info-o",i=null!=e&&""!==e.trim(),a=jQuery('\n            <div class="tutor-notification tutor-is-'.concat(o,' tutor-mb-16">\n                <div class="tutor-notification-icon">\n                    <i class="').concat(r,'"></i>\n                </div>\n                <div class="tutor-notification-content">\n                <h5>').concat(t,'</h5>\n                <p class="').concat(i?"":"tutor-d-none",'">').concat(e,'</p>\n                </div>\n                <button class="tutor-notification-close">\n                    <i class="fas fa-times"></i>\n                </button>\n            </div>\n        '));a.find(".tutor-noti-close").click(function(){a.remove()}),jQuery(".tutor-toast-parent").append(a),n&&setTimeout(function(){a&&a.fadeOut("fast",function(){jQuery(this).remove()})},5e3)}),document.addEventListener("DOMContentLoaded",function(){"settings"===(window._tutorobject?_tutorobject:"").current_page&&document.querySelectorAll(".tutor-device-sign-out").forEach(function(t){t.onclick=function(){var e=r(k().mark(function t(e){var r,n,o,i;return k().wrap(function(t){for(;;)switch(t.prev=t.next){case 0:return r=e.target,n=e.target.dataset.umetaId,n=s([{umeta_id:n,action:"tutor_remove_device_manually"}]),t.prev=3,r.classList.add("is-loading"),r.setAttribute("disabled",!0),t.next=8,l(n);case 8:return n=t.sent,t.next=11,n.json();case 11:i=t.sent,o=i.success,i=i.data,o?(tutor_toast(h("Success","tutor-pro"),i.msg,"success"),i.redirect_to?window.location.href=i.redirect_to:r.closest(".tutor-col-md-6").remove()):tutor_toast(h("Failed","tutor-pro"),i.msg,"error"),t.next=19;break;case 16:t.prev=16,t.t0=t.catch(3),tutor_toast(h("Something went wrong","tutor-pro"),h("Please try again after reloading page!"),"error");case 19:return t.prev=19,r.classList.remove("is-loading"),r.removeAttribute("disabled"),t.finish(19);case 23:case"end":return t.stop()}},t,null,[[3,16,19,23]])}));return function(t){return e.apply(this,arguments)}}()});var u=document.querySelector(".tutor-login-form-wrapper, .tutor-login-modal, #login_error, .woocommerce-error");u&&(u.onclick=function(){var e=r(k().mark(function t(e){var r,n,o,i,a,c;return k().wrap(function(t){for(;;)switch(t.prev=t.next){case 0:if(i=e.target,(r=i).hasAttribute("id")&&"tutor-remove-active-logins"===i.getAttribute("id"))return e.preventDefault(),n=document.getElementById("tutor-remove-logins-wrapper"),o=(o=(o=n.closest(".tutor-alert"))||document.getElementById("login_error"))||document.querySelector("ul.woocommerce-error"),i=s([{action:"tutor_remove_all_active_logins"}]),t.prev=9,n.innerHTML='<span class="tutor-color-subdued">'.concat(h("Please wait...","tutor-pro"),"</span>"),t.next=13,l(i);t.next=38;break;case 13:return i=t.sent,t.next=16,i.json();case 16:a=t.sent,c=a.success,a=a.data,c?(o.classList.contains("tutor-warning")&&(o.classList.remove("tutor-warning"),o.classList.add("tutor-success")),o.hasAttribute("id")&&(o.style.borderLeftColor="#6eea98"),o.classList.contains("woocommerce-error")&&o.classList.add("woocommerce-message"),o.innerHTML=h("All of your active login sessions have been removed. You can login now."),t.next=32):t.next=25;break;case 25:if(Array.isArray(a))if((c=a[0])&&"tutor_login_limit"===c.code)return u.insertAdjacentHTML("afterbegin",c.message),t.abrupt("return");t.next=30;break;case 30:tutor_toast(h("Failed","tutor-pro"),a,"error"),n.innerHTML=r;case 32:t.next=38;break;case 34:t.prev=34,t.t0=t.catch(9),console.log(t.t0),tutor_toast(h("Something went wrong","tutor-pro"),h("Please try again after reloading page!"),"error");case 38:case"end":return t.stop()}},t,null,[[9,34]])}));return function(t){return e.apply(this,arguments)}}())}),document.addEventListener("DOMContentLoaded",function(){})})();