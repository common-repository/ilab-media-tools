!function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="/",n(n.s=661)}({119:function(t,e){t.exports=function(t){return t.webpackPolyfill||(t.deprecate=function(){},t.paths=[],t.children||(t.children=[]),Object.defineProperty(t,"loaded",{enumerable:!0,get:function(){return t.l}}),Object.defineProperty(t,"id",{enumerable:!0,get:function(){return t.i}}),t.webpackPolyfill=1),t}},661:function(t,e,n){t.exports=n(662)},662:function(t,e,n){var r=n(663);function o(t){var e={fluid:!t.dataset.hasOwnProperty("noFluid"),responsive:!0,html5:{vhs:{overrideNative:!0,limitRenditionByPlayerDimensions:!1},nativeAudioTracks:!1,nativeVideoTracks:!1},controlBar:{}};if(r(e,muxPlayerSettings),e.hasOwnProperty("plugins")||(e.plugins={}),t.dataset.hasOwnProperty("filmstrip")&&(e.plugins.spriteThumbnails={url:t.dataset.filmstrip,width:160,height:90,interval:parseFloat(t.dataset.filmstripInterval)}),t.dataset.hasOwnProperty("downloadUrl")&&(e.plugins.vjsdownload={downloadURL:t.dataset.downloadUrl}),t.dataset.hasOwnProperty("metadataKey")){var n=JSON.parse(document.getElementById("mux-"+t.dataset.metadataKey).innerHTML);e.plugins.mux={debug:!1,data:n}}var o=videojs(t,e);if(t.dataset.hasOwnProperty("aspectRatio")&&o.aspectRatio(t.dataset.aspectRatio),t.dataset.hasOwnProperty("analytics")){var i={events:[{name:"play",label:"video play",action:"play"},{name:"pause",label:"video pause",action:"pause"},{name:"ended",label:"video ended",action:"ended"},{name:"fullscreenchange",label:{open:"video fullscreen open",exit:"video fullscreen exit"},action:"fullscreen change"},{name:"volumechange",label:"volume changed",action:"volume changed"},{name:"resize",label:"resize",action:"resize"},{name:"error",label:"error",action:"error"},{name:"resolutionchange",action:"resolution change"},{name:"timeupdate",action:"time updated"}]};"gtag"===t.dataset.analytics&&(i.mode="GTAG"),t.dataset.hasOwnProperty("analyticsAsset")&&(i.assetName=t.dataset.analyticsAsset),o.analytics(i)}window.muxPlayers.push(o)}window.debugPlayer=null,window.muxPlayers=[],document.querySelectorAll("video.mux-player").forEach((function(t){o(t)})),window.addEventListener("elementor/frontend/init",(function(){elementorFrontend.hooks.addAction("frontend/element_ready/widget",(function(t){t[0].querySelectorAll("video.mux-player").forEach((function(t){o(t)}))}))}))},663:function(t,e,n){(function(t,n){var r=/^\[object .+?Constructor\]$/,o=/^(?:0|[1-9]\d*)$/,i={};i["[object Float32Array]"]=i["[object Float64Array]"]=i["[object Int8Array]"]=i["[object Int16Array]"]=i["[object Int32Array]"]=i["[object Uint8Array]"]=i["[object Uint8ClampedArray]"]=i["[object Uint16Array]"]=i["[object Uint32Array]"]=!0,i["[object Arguments]"]=i["[object Array]"]=i["[object ArrayBuffer]"]=i["[object Boolean]"]=i["[object DataView]"]=i["[object Date]"]=i["[object Error]"]=i["[object Function]"]=i["[object Map]"]=i["[object Number]"]=i["[object Object]"]=i["[object RegExp]"]=i["[object Set]"]=i["[object String]"]=i["[object WeakMap]"]=!1;var a="object"==typeof t&&t&&t.Object===Object&&t,u="object"==typeof self&&self&&self.Object===Object&&self,c=a||u||Function("return this")(),l=e&&!e.nodeType&&e,s=l&&"object"==typeof n&&n&&!n.nodeType&&n,f=s&&s.exports===l,d=f&&a.process,p=function(){try{var t=s&&s.require&&s.require("util").types;return t||d&&d.binding&&d.binding("util")}catch(t){}}(),h=p&&p.isTypedArray;function v(t,e,n){switch(n.length){case 0:return t.call(e);case 1:return t.call(e,n[0]);case 2:return t.call(e,n[0],n[1]);case 3:return t.call(e,n[0],n[1],n[2])}return t.apply(e,n)}var y,_,b,g=Array.prototype,j=Function.prototype,m=Object.prototype,w=c["__core-js_shared__"],O=j.toString,A=m.hasOwnProperty,P=(y=/[^.]+$/.exec(w&&w.keys&&w.keys.IE_PROTO||""))?"Symbol(src)_1."+y:"",x=m.toString,z=O.call(Object),S=RegExp("^"+O.call(A).replace(/[\\^$.*+?()[\]{}|]/g,"\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g,"$1.*?")+"$"),F=f?c.Buffer:void 0,T=c.Symbol,U=c.Uint8Array,k=F?F.allocUnsafe:void 0,E=(_=Object.getPrototypeOf,b=Object,function(t){return _(b(t))}),M=Object.create,R=m.propertyIsEnumerable,B=g.splice,I=T?T.toStringTag:void 0,$=function(){try{var t=lt(Object,"defineProperty");return t({},"",{}),t}catch(t){}}(),L=F?F.isBuffer:void 0,N=Math.max,q=Date.now,D=lt(c,"Map"),G=lt(Object,"create"),C=function(){function t(){}return function(e){if(!mt(e))return{};if(M)return M(e);t.prototype=e;var n=new t;return t.prototype=void 0,n}}();function K(t){var e=-1,n=null==t?0:t.length;for(this.clear();++e<n;){var r=t[e];this.set(r[0],r[1])}}function V(t){var e=-1,n=null==t?0:t.length;for(this.clear();++e<n;){var r=t[e];this.set(r[0],r[1])}}function H(t){var e=-1,n=null==t?0:t.length;for(this.clear();++e<n;){var r=t[e];this.set(r[0],r[1])}}function J(t){var e=this.__data__=new V(t);this.size=e.size}function W(t,e){var n=yt(t),r=!n&&vt(t),o=!n&&!r&&bt(t),i=!n&&!r&&!o&&Ot(t),a=n||r||o||i,u=a?function(t,e){for(var n=-1,r=Array(t);++n<t;)r[n]=e(n);return r}(t.length,String):[],c=u.length;for(var l in t)!e&&!A.call(t,l)||a&&("length"==l||o&&("offset"==l||"parent"==l)||i&&("buffer"==l||"byteLength"==l||"byteOffset"==l)||st(l,c))||u.push(l);return u}function Q(t,e,n){(void 0!==n&&!ht(t[e],n)||void 0===n&&!(e in t))&&Z(t,e,n)}function X(t,e,n){var r=t[e];A.call(t,e)&&ht(r,n)&&(void 0!==n||e in t)||Z(t,e,n)}function Y(t,e){for(var n=t.length;n--;)if(ht(t[n][0],e))return n;return-1}function Z(t,e,n){"__proto__"==e&&$?$(t,e,{configurable:!0,enumerable:!0,value:n,writable:!0}):t[e]=n}K.prototype.clear=function(){this.__data__=G?G(null):{},this.size=0},K.prototype.delete=function(t){var e=this.has(t)&&delete this.__data__[t];return this.size-=e?1:0,e},K.prototype.get=function(t){var e=this.__data__;if(G){var n=e[t];return"__lodash_hash_undefined__"===n?void 0:n}return A.call(e,t)?e[t]:void 0},K.prototype.has=function(t){var e=this.__data__;return G?void 0!==e[t]:A.call(e,t)},K.prototype.set=function(t,e){var n=this.__data__;return this.size+=this.has(t)?0:1,n[t]=G&&void 0===e?"__lodash_hash_undefined__":e,this},V.prototype.clear=function(){this.__data__=[],this.size=0},V.prototype.delete=function(t){var e=this.__data__,n=Y(e,t);return!(n<0)&&(n==e.length-1?e.pop():B.call(e,n,1),--this.size,!0)},V.prototype.get=function(t){var e=this.__data__,n=Y(e,t);return n<0?void 0:e[n][1]},V.prototype.has=function(t){return Y(this.__data__,t)>-1},V.prototype.set=function(t,e){var n=this.__data__,r=Y(n,t);return r<0?(++this.size,n.push([t,e])):n[r][1]=e,this},H.prototype.clear=function(){this.size=0,this.__data__={hash:new K,map:new(D||V),string:new K}},H.prototype.delete=function(t){var e=ct(this,t).delete(t);return this.size-=e?1:0,e},H.prototype.get=function(t){return ct(this,t).get(t)},H.prototype.has=function(t){return ct(this,t).has(t)},H.prototype.set=function(t,e){var n=ct(this,t),r=n.size;return n.set(t,e),this.size+=n.size==r?0:1,this},J.prototype.clear=function(){this.__data__=new V,this.size=0},J.prototype.delete=function(t){var e=this.__data__,n=e.delete(t);return this.size=e.size,n},J.prototype.get=function(t){return this.__data__.get(t)},J.prototype.has=function(t){return this.__data__.has(t)},J.prototype.set=function(t,e){var n=this.__data__;if(n instanceof V){var r=n.__data__;if(!D||r.length<199)return r.push([t,e]),this.size=++n.size,this;n=this.__data__=new H(r)}return n.set(t,e),this.size=n.size,this};var tt,et=function(t,e,n){for(var r=-1,o=Object(t),i=n(t),a=i.length;a--;){var u=i[tt?a:++r];if(!1===e(o[u],u,o))break}return t};function nt(t){return null==t?void 0===t?"[object Undefined]":"[object Null]":I&&I in Object(t)?function(t){var e=A.call(t,I),n=t[I];try{t[I]=void 0;var r=!0}catch(t){}var o=x.call(t);r&&(e?t[I]=n:delete t[I]);return o}(t):function(t){return x.call(t)}(t)}function rt(t){return wt(t)&&"[object Arguments]"==nt(t)}function ot(t){return!(!mt(t)||function(t){return!!P&&P in t}(t))&&(gt(t)?S:r).test(function(t){if(null!=t){try{return O.call(t)}catch(t){}try{return t+""}catch(t){}}return""}(t))}function it(t){if(!mt(t))return function(t){var e=[];if(null!=t)for(var n in Object(t))e.push(n);return e}(t);var e=ft(t),n=[];for(var r in t)("constructor"!=r||!e&&A.call(t,r))&&n.push(r);return n}function at(t,e,n,r,o){t!==e&&et(e,(function(i,a){if(o||(o=new J),mt(i))!function(t,e,n,r,o,i,a){var u=dt(t,n),c=dt(e,n),l=a.get(c);if(l)return void Q(t,n,l);var s=i?i(u,c,n+"",t,e,a):void 0,f=void 0===s;if(f){var d=yt(c),p=!d&&bt(c),h=!d&&!p&&Ot(c);s=c,d||p||h?yt(u)?s=u:wt(g=u)&&_t(g)?s=function(t,e){var n=-1,r=t.length;e||(e=Array(r));for(;++n<r;)e[n]=t[n];return e}(u):p?(f=!1,s=function(t,e){if(e)return t.slice();var n=t.length,r=k?k(n):new t.constructor(n);return t.copy(r),r}(c,!0)):h?(f=!1,v=c,y=!0?(_=v.buffer,b=new _.constructor(_.byteLength),new U(b).set(new U(_)),b):v.buffer,s=new v.constructor(y,v.byteOffset,v.length)):s=[]:function(t){if(!wt(t)||"[object Object]"!=nt(t))return!1;var e=E(t);if(null===e)return!0;var n=A.call(e,"constructor")&&e.constructor;return"function"==typeof n&&n instanceof n&&O.call(n)==z}(c)||vt(c)?(s=u,vt(u)?s=function(t){return function(t,e,n,r){var o=!n;n||(n={});var i=-1,a=e.length;for(;++i<a;){var u=e[i],c=r?r(n[u],t[u],u,n,t):void 0;void 0===c&&(c=t[u]),o?Z(n,u,c):X(n,u,c)}return n}(t,At(t))}(u):mt(u)&&!gt(u)||(s=function(t){return"function"!=typeof t.constructor||ft(t)?{}:C(E(t))}(c))):f=!1}var v,y,_,b;var g;f&&(a.set(c,s),o(s,c,r,i,a),a.delete(c));Q(t,n,s)}(t,e,a,n,at,r,o);else{var u=r?r(dt(t,a),i,a+"",t,e,o):void 0;void 0===u&&(u=i),Q(t,a,u)}}),At)}function ut(t,e){return pt(function(t,e,n){return e=N(void 0===e?t.length-1:e,0),function(){for(var r=arguments,o=-1,i=N(r.length-e,0),a=Array(i);++o<i;)a[o]=r[e+o];o=-1;for(var u=Array(e+1);++o<e;)u[o]=r[o];return u[e]=n(a),v(t,this,u)}}(t,e,zt),t+"")}function ct(t,e){var n,r,o=t.__data__;return("string"==(r=typeof(n=e))||"number"==r||"symbol"==r||"boolean"==r?"__proto__"!==n:null===n)?o["string"==typeof e?"string":"hash"]:o.map}function lt(t,e){var n=function(t,e){return null==t?void 0:t[e]}(t,e);return ot(n)?n:void 0}function st(t,e){var n=typeof t;return!!(e=null==e?9007199254740991:e)&&("number"==n||"symbol"!=n&&o.test(t))&&t>-1&&t%1==0&&t<e}function ft(t){var e=t&&t.constructor;return t===("function"==typeof e&&e.prototype||m)}function dt(t,e){if(("constructor"!==e||"function"!=typeof t[e])&&"__proto__"!=e)return t[e]}var pt=function(t){var e=0,n=0;return function(){var r=q(),o=16-(r-n);if(n=r,o>0){if(++e>=800)return arguments[0]}else e=0;return t.apply(void 0,arguments)}}($?function(t,e){return $(t,"toString",{configurable:!0,enumerable:!1,value:(n=e,function(){return n}),writable:!0});var n}:zt);function ht(t,e){return t===e||t!=t&&e!=e}var vt=rt(function(){return arguments}())?rt:function(t){return wt(t)&&A.call(t,"callee")&&!R.call(t,"callee")},yt=Array.isArray;function _t(t){return null!=t&&jt(t.length)&&!gt(t)}var bt=L||function(){return!1};function gt(t){if(!mt(t))return!1;var e=nt(t);return"[object Function]"==e||"[object GeneratorFunction]"==e||"[object AsyncFunction]"==e||"[object Proxy]"==e}function jt(t){return"number"==typeof t&&t>-1&&t%1==0&&t<=9007199254740991}function mt(t){var e=typeof t;return null!=t&&("object"==e||"function"==e)}function wt(t){return null!=t&&"object"==typeof t}var Ot=h?function(t){return function(e){return t(e)}}(h):function(t){return wt(t)&&jt(t.length)&&!!i[nt(t)]};function At(t){return _t(t)?W(t,!0):it(t)}var Pt,xt=(Pt=function(t,e,n){at(t,e,n)},ut((function(t,e){var n=-1,r=e.length,o=r>1?e[r-1]:void 0,i=r>2?e[2]:void 0;for(o=Pt.length>3&&"function"==typeof o?(r--,o):void 0,i&&function(t,e,n){if(!mt(n))return!1;var r=typeof e;return!!("number"==r?_t(n)&&st(e,n.length):"string"==r&&e in n)&&ht(n[e],t)}(e[0],e[1],i)&&(o=r<3?void 0:o,r=1),t=Object(t);++n<r;){var a=e[n];a&&Pt(t,a,n,o)}return t})));function zt(t){return t}n.exports=xt}).call(this,n(88),n(119)(t))},88:function(t,e){var n;n=function(){return this}();try{n=n||new Function("return this")()}catch(t){"object"==typeof window&&(n=window)}t.exports=n}});