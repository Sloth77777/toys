(()=>{var Pt=Object.defineProperty;var Ft=(e,t)=>{for(var r in t)Pt(e,r,{get:t[r],enumerable:!0})};function z(e,t){return function(){return e.apply(t,arguments)}}var{toString:Lt}=Object.prototype,{getPrototypeOf:be}=Object,ee=(e=>t=>{let r=Lt.call(t);return e[r]||(e[r]=r.slice(8,-1).toLowerCase())})(Object.create(null)),C=e=>(e=e.toLowerCase(),t=>ee(t)===e),te=e=>t=>typeof t===e,{isArray:k}=Array,J=te("undefined");function Dt(e){return e!==null&&!J(e)&&e.constructor!==null&&!J(e.constructor)&&O(e.constructor.isBuffer)&&e.constructor.isBuffer(e)}var ve=C("ArrayBuffer");function _t(e){let t;return typeof ArrayBuffer<"u"&&ArrayBuffer.isView?t=ArrayBuffer.isView(e):t=e&&e.buffer&&ve(e.buffer),t}var Ut=te("string"),O=te("function"),Ke=te("number"),re=e=>e!==null&&typeof e=="object",Bt=e=>e===!0||e===!1,Y=e=>{if(ee(e)!=="object")return!1;let t=be(e);return(t===null||t===Object.prototype||Object.getPrototypeOf(t)===null)&&!(Symbol.toStringTag in e)&&!(Symbol.iterator in e)},kt=C("Date"),jt=C("File"),Ht=C("Blob"),qt=C("FileList"),It=e=>re(e)&&O(e.pipe),Mt=e=>{let t;return e&&(typeof FormData=="function"&&e instanceof FormData||O(e.append)&&((t=ee(e))==="formdata"||t==="object"&&O(e.toString)&&e.toString()==="[object FormData]"))},zt=C("URLSearchParams"),[Jt,Vt,Wt,vt]=["ReadableStream","Request","Response","Headers"].map(C),Kt=e=>e.trim?e.trim():e.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"");function V(e,t,{allOwnKeys:r=!1}={}){if(e===null||typeof e>"u")return;let n,o;if(typeof e!="object"&&(e=[e]),k(e))for(n=0,o=e.length;n<o;n++)t.call(null,e[n],n,e);else{let s=r?Object.getOwnPropertyNames(e):Object.keys(e),i=s.length,c;for(n=0;n<i;n++)c=s[n],t.call(null,e[c],c,e)}}function $e(e,t){t=t.toLowerCase();let r=Object.keys(e),n=r.length,o;for(;n-- >0;)if(o=r[n],t===o.toLowerCase())return o;return null}var B=typeof globalThis<"u"?globalThis:typeof self<"u"?self:typeof window<"u"?window:global,Ge=e=>!J(e)&&e!==B;function we(){let{caseless:e}=Ge(this)&&this||{},t={},r=(n,o)=>{let s=e&&$e(t,o)||o;Y(t[s])&&Y(n)?t[s]=we(t[s],n):Y(n)?t[s]=we({},n):k(n)?t[s]=n.slice():t[s]=n};for(let n=0,o=arguments.length;n<o;n++)arguments[n]&&V(arguments[n],r);return t}var $t=(e,t,r,{allOwnKeys:n}={})=>(V(t,(o,s)=>{r&&O(o)?e[s]=z(o,r):e[s]=o},{allOwnKeys:n}),e),Gt=e=>(e.charCodeAt(0)===65279&&(e=e.slice(1)),e),Xt=(e,t,r,n)=>{e.prototype=Object.create(t.prototype,n),e.prototype.constructor=e,Object.defineProperty(e,"super",{value:t.prototype}),r&&Object.assign(e.prototype,r)},Qt=(e,t,r,n)=>{let o,s,i,c={};if(t=t||{},e==null)return t;do{for(o=Object.getOwnPropertyNames(e),s=o.length;s-- >0;)i=o[s],(!n||n(i,e,t))&&!c[i]&&(t[i]=e[i],c[i]=!0);e=r!==!1&&be(e)}while(e&&(!r||r(e,t))&&e!==Object.prototype);return t},Zt=(e,t,r)=>{e=String(e),(r===void 0||r>e.length)&&(r=e.length),r-=t.length;let n=e.indexOf(t,r);return n!==-1&&n===r},Yt=e=>{if(!e)return null;if(k(e))return e;let t=e.length;if(!Ke(t))return null;let r=new Array(t);for(;t-- >0;)r[t]=e[t];return r},er=(e=>t=>e&&t instanceof e)(typeof Uint8Array<"u"&&be(Uint8Array)),tr=(e,t)=>{let n=(e&&e[Symbol.iterator]).call(e),o;for(;(o=n.next())&&!o.done;){let s=o.value;t.call(e,s[0],s[1])}},rr=(e,t)=>{let r,n=[];for(;(r=e.exec(t))!==null;)n.push(r);return n},nr=C("HTMLFormElement"),or=e=>e.toLowerCase().replace(/[-_\s]([a-z\d])(\w*)/g,function(r,n,o){return n.toUpperCase()+o}),Ve=(({hasOwnProperty:e})=>(t,r)=>e.call(t,r))(Object.prototype),sr=C("RegExp"),Xe=(e,t)=>{let r=Object.getOwnPropertyDescriptors(e),n={};V(r,(o,s)=>{let i;(i=t(o,s,e))!==!1&&(n[s]=i||o)}),Object.defineProperties(e,n)},ir=e=>{Xe(e,(t,r)=>{if(O(e)&&["arguments","caller","callee"].indexOf(r)!==-1)return!1;let n=e[r];if(O(n)){if(t.enumerable=!1,"writable"in t){t.writable=!1;return}t.set||(t.set=()=>{throw Error("Can not rewrite read-only method '"+r+"'")})}})},ar=(e,t)=>{let r={},n=o=>{o.forEach(s=>{r[s]=!0})};return k(e)?n(e):n(String(e).split(t)),r},cr=()=>{},ur=(e,t)=>e!=null&&Number.isFinite(e=+e)?e:t,Ee="abcdefghijklmnopqrstuvwxyz",We="0123456789",Qe={DIGIT:We,ALPHA:Ee,ALPHA_DIGIT:Ee+Ee.toUpperCase()+We},lr=(e=16,t=Qe.ALPHA_DIGIT)=>{let r="",{length:n}=t;for(;e--;)r+=t[Math.random()*n|0];return r};function fr(e){return!!(e&&O(e.append)&&e[Symbol.toStringTag]==="FormData"&&e[Symbol.iterator])}var dr=e=>{let t=new Array(10),r=(n,o)=>{if(re(n)){if(t.indexOf(n)>=0)return;if(!("toJSON"in n)){t[o]=n;let s=k(n)?[]:{};return V(n,(i,c)=>{let f=r(i,o+1);!J(f)&&(s[c]=f)}),t[o]=void 0,s}}return n};return r(e,0)},pr=C("AsyncFunction"),mr=e=>e&&(re(e)||O(e))&&O(e.then)&&O(e.catch),Ze=((e,t)=>e?setImmediate:t?((r,n)=>(B.addEventListener("message",({source:o,data:s})=>{o===B&&s===r&&n.length&&n.shift()()},!1),o=>{n.push(o),B.postMessage(r,"*")}))(`axios@${Math.random()}`,[]):r=>setTimeout(r))(typeof setImmediate=="function",O(B.postMessage)),hr=typeof queueMicrotask<"u"?queueMicrotask.bind(B):typeof process<"u"&&process.nextTick||Ze,a={isArray:k,isArrayBuffer:ve,isBuffer:Dt,isFormData:Mt,isArrayBufferView:_t,isString:Ut,isNumber:Ke,isBoolean:Bt,isObject:re,isPlainObject:Y,isReadableStream:Jt,isRequest:Vt,isResponse:Wt,isHeaders:vt,isUndefined:J,isDate:kt,isFile:jt,isBlob:Ht,isRegExp:sr,isFunction:O,isStream:It,isURLSearchParams:zt,isTypedArray:er,isFileList:qt,forEach:V,merge:we,extend:$t,trim:Kt,stripBOM:Gt,inherits:Xt,toFlatObject:Qt,kindOf:ee,kindOfTest:C,endsWith:Zt,toArray:Yt,forEachEntry:tr,matchAll:rr,isHTMLForm:nr,hasOwnProperty:Ve,hasOwnProp:Ve,reduceDescriptors:Xe,freezeMethods:ir,toObjectSet:ar,toCamelCase:or,noop:cr,toFiniteNumber:ur,findKey:$e,global:B,isContextDefined:Ge,ALPHABET:Qe,generateString:lr,isSpecCompliantForm:fr,toJSONObject:dr,isAsyncFn:pr,isThenable:mr,setImmediate:Ze,asap:hr};function j(e,t,r,n,o){Error.call(this),Error.captureStackTrace?Error.captureStackTrace(this,this.constructor):this.stack=new Error().stack,this.message=e,this.name="AxiosError",t&&(this.code=t),r&&(this.config=r),n&&(this.request=n),o&&(this.response=o)}a.inherits(j,Error,{toJSON:function(){return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:a.toJSONObject(this.config),code:this.code,status:this.response&&this.response.status?this.response.status:null}}});var Ye=j.prototype,et={};["ERR_BAD_OPTION_VALUE","ERR_BAD_OPTION","ECONNABORTED","ETIMEDOUT","ERR_NETWORK","ERR_FR_TOO_MANY_REDIRECTS","ERR_DEPRECATED","ERR_BAD_RESPONSE","ERR_BAD_REQUEST","ERR_CANCELED","ERR_NOT_SUPPORT","ERR_INVALID_URL"].forEach(e=>{et[e]={value:e}});Object.defineProperties(j,et);Object.defineProperty(Ye,"isAxiosError",{value:!0});j.from=(e,t,r,n,o,s)=>{let i=Object.create(Ye);return a.toFlatObject(e,i,function(f){return f!==Error.prototype},c=>c!=="isAxiosError"),j.call(i,e.message,t,r,n,o),i.cause=e,i.name=e.name,s&&Object.assign(i,s),i};var h=j;var ne=null;function Re(e){return a.isPlainObject(e)||a.isArray(e)}function rt(e){return a.endsWith(e,"[]")?e.slice(0,-2):e}function tt(e,t,r){return e?e.concat(t).map(function(o,s){return o=rt(o),!r&&s?"["+o+"]":o}).join(r?".":""):t}function yr(e){return a.isArray(e)&&!e.some(Re)}var Er=a.toFlatObject(a,{},null,function(t){return/^is[A-Z]/.test(t)});function wr(e,t,r){if(!a.isObject(e))throw new TypeError("target must be an object");t=t||new(ne||FormData),r=a.toFlatObject(r,{metaTokens:!0,dots:!1,indexes:!1},!1,function(y,d){return!a.isUndefined(d[y])});let n=r.metaTokens,o=r.visitor||l,s=r.dots,i=r.indexes,f=(r.Blob||typeof Blob<"u"&&Blob)&&a.isSpecCompliantForm(t);if(!a.isFunction(o))throw new TypeError("visitor must be a function");function u(m){if(m===null)return"";if(a.isDate(m))return m.toISOString();if(!f&&a.isBlob(m))throw new h("Blob is not supported. Use a Buffer instead.");return a.isArrayBuffer(m)||a.isTypedArray(m)?f&&typeof Blob=="function"?new Blob([m]):Buffer.from(m):m}function l(m,y,d){let g=m;if(m&&!d&&typeof m=="object"){if(a.endsWith(y,"{}"))y=n?y:y.slice(0,-2),m=JSON.stringify(m);else if(a.isArray(m)&&yr(m)||(a.isFileList(m)||a.endsWith(y,"[]"))&&(g=a.toArray(m)))return y=rt(y),g.forEach(function(E,T){!(a.isUndefined(E)||E===null)&&t.append(i===!0?tt([y],T,s):i===null?y:y+"[]",u(E))}),!1}return Re(m)?!0:(t.append(tt(d,y,s),u(m)),!1)}let p=[],w=Object.assign(Er,{defaultVisitor:l,convertValue:u,isVisitable:Re});function b(m,y){if(!a.isUndefined(m)){if(p.indexOf(m)!==-1)throw Error("Circular reference detected in "+y.join("."));p.push(m),a.forEach(m,function(g,A){(!(a.isUndefined(g)||g===null)&&o.call(t,g,a.isString(A)?A.trim():A,y,w))===!0&&b(g,y?y.concat(A):[A])}),p.pop()}}if(!a.isObject(e))throw new TypeError("data must be an object");return b(e),t}var D=wr;function nt(e){let t={"!":"%21","'":"%27","(":"%28",")":"%29","~":"%7E","%20":"+","%00":"\0"};return encodeURIComponent(e).replace(/[!'()~]|%20|%00/g,function(n){return t[n]})}function ot(e,t){this._pairs=[],e&&D(e,this,t)}var st=ot.prototype;st.append=function(t,r){this._pairs.push([t,r])};st.toString=function(t){let r=t?function(n){return t.call(this,n,nt)}:nt;return this._pairs.map(function(o){return r(o[0])+"="+r(o[1])},"").join("&")};var oe=ot;function br(e){return encodeURIComponent(e).replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}function W(e,t,r){if(!t)return e;let n=r&&r.encode||br,o=r&&r.serialize,s;if(o?s=o(t,r):s=a.isURLSearchParams(t)?t.toString():new oe(t,r).toString(n),s){let i=e.indexOf("#");i!==-1&&(e=e.slice(0,i)),e+=(e.indexOf("?")===-1?"?":"&")+s}return e}var xe=class{constructor(){this.handlers=[]}use(t,r,n){return this.handlers.push({fulfilled:t,rejected:r,synchronous:n?n.synchronous:!1,runWhen:n?n.runWhen:null}),this.handlers.length-1}eject(t){this.handlers[t]&&(this.handlers[t]=null)}clear(){this.handlers&&(this.handlers=[])}forEach(t){a.forEach(this.handlers,function(n){n!==null&&t(n)})}},Se=xe;var se={silentJSONParsing:!0,forcedJSONParsing:!0,clarifyTimeoutError:!1};var it=typeof URLSearchParams<"u"?URLSearchParams:oe;var at=typeof FormData<"u"?FormData:null;var ct=typeof Blob<"u"?Blob:null;var ut={isBrowser:!0,classes:{URLSearchParams:it,FormData:at,Blob:ct},protocols:["http","https","file","blob","url","data"]};var Ae={};Ft(Ae,{hasBrowserEnv:()=>ge,hasStandardBrowserEnv:()=>Rr,hasStandardBrowserWebWorkerEnv:()=>xr,origin:()=>Sr});var ge=typeof window<"u"&&typeof document<"u",Rr=(e=>ge&&["ReactNative","NativeScript","NS"].indexOf(e)<0)(typeof navigator<"u"&&navigator.product),xr=typeof WorkerGlobalScope<"u"&&self instanceof WorkerGlobalScope&&typeof self.importScripts=="function",Sr=ge&&window.location.href||"http://localhost";var S={...Ae,...ut};function Oe(e,t){return D(e,new S.classes.URLSearchParams,Object.assign({visitor:function(r,n,o,s){return S.isNode&&a.isBuffer(r)?(this.append(n,r.toString("base64")),!1):s.defaultVisitor.apply(this,arguments)}},t))}function gr(e){return a.matchAll(/\w+|\[(\w*)]/g,e).map(t=>t[0]==="[]"?"":t[1]||t[0])}function Ar(e){let t={},r=Object.keys(e),n,o=r.length,s;for(n=0;n<o;n++)s=r[n],t[s]=e[s];return t}function Or(e){function t(r,n,o,s){let i=r[s++];if(i==="__proto__")return!0;let c=Number.isFinite(+i),f=s>=r.length;return i=!i&&a.isArray(o)?o.length:i,f?(a.hasOwnProp(o,i)?o[i]=[o[i],n]:o[i]=n,!c):((!o[i]||!a.isObject(o[i]))&&(o[i]=[]),t(r,n,o[i],s)&&a.isArray(o[i])&&(o[i]=Ar(o[i])),!c)}if(a.isFormData(e)&&a.isFunction(e.entries)){let r={};return a.forEachEntry(e,(n,o)=>{t(gr(n),o,r,0)}),r}return null}var ie=Or;function Tr(e,t,r){if(a.isString(e))try{return(t||JSON.parse)(e),a.trim(e)}catch(n){if(n.name!=="SyntaxError")throw n}return(r||JSON.stringify)(e)}var Te={transitional:se,adapter:["xhr","http","fetch"],transformRequest:[function(t,r){let n=r.getContentType()||"",o=n.indexOf("application/json")>-1,s=a.isObject(t);if(s&&a.isHTMLForm(t)&&(t=new FormData(t)),a.isFormData(t))return o?JSON.stringify(ie(t)):t;if(a.isArrayBuffer(t)||a.isBuffer(t)||a.isStream(t)||a.isFile(t)||a.isBlob(t)||a.isReadableStream(t))return t;if(a.isArrayBufferView(t))return t.buffer;if(a.isURLSearchParams(t))return r.setContentType("application/x-www-form-urlencoded;charset=utf-8",!1),t.toString();let c;if(s){if(n.indexOf("application/x-www-form-urlencoded")>-1)return Oe(t,this.formSerializer).toString();if((c=a.isFileList(t))||n.indexOf("multipart/form-data")>-1){let f=this.env&&this.env.FormData;return D(c?{"files[]":t}:t,f&&new f,this.formSerializer)}}return s||o?(r.setContentType("application/json",!1),Tr(t)):t}],transformResponse:[function(t){let r=this.transitional||Te.transitional,n=r&&r.forcedJSONParsing,o=this.responseType==="json";if(a.isResponse(t)||a.isReadableStream(t))return t;if(t&&a.isString(t)&&(n&&!this.responseType||o)){let i=!(r&&r.silentJSONParsing)&&o;try{return JSON.parse(t)}catch(c){if(i)throw c.name==="SyntaxError"?h.from(c,h.ERR_BAD_RESPONSE,this,null,this.response):c}}return t}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,maxBodyLength:-1,env:{FormData:S.classes.FormData,Blob:S.classes.Blob},validateStatus:function(t){return t>=200&&t<300},headers:{common:{Accept:"application/json, text/plain, */*","Content-Type":void 0}}};a.forEach(["delete","get","head","post","put","patch"],e=>{Te.headers[e]={}});var H=Te;var Cr=a.toObjectSet(["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"]),lt=e=>{let t={},r,n,o;return e&&e.split(`
`).forEach(function(i){o=i.indexOf(":"),r=i.substring(0,o).trim().toLowerCase(),n=i.substring(o+1).trim(),!(!r||t[r]&&Cr[r])&&(r==="set-cookie"?t[r]?t[r].push(n):t[r]=[n]:t[r]=t[r]?t[r]+", "+n:n)}),t};var ft=Symbol("internals");function v(e){return e&&String(e).trim().toLowerCase()}function ae(e){return e===!1||e==null?e:a.isArray(e)?e.map(ae):String(e)}function Nr(e){let t=Object.create(null),r=/([^\s,;=]+)\s*(?:=\s*([^,;]+))?/g,n;for(;n=r.exec(e);)t[n[1]]=n[2];return t}var Pr=e=>/^[-_a-zA-Z0-9^`|~,!#$%&'*+.]+$/.test(e.trim());function Ce(e,t,r,n,o){if(a.isFunction(n))return n.call(this,t,r);if(o&&(t=r),!!a.isString(t)){if(a.isString(n))return t.indexOf(n)!==-1;if(a.isRegExp(n))return n.test(t)}}function Fr(e){return e.trim().toLowerCase().replace(/([a-z\d])(\w*)/g,(t,r,n)=>r.toUpperCase()+n)}function Lr(e,t){let r=a.toCamelCase(" "+t);["get","set","has"].forEach(n=>{Object.defineProperty(e,n+r,{value:function(o,s,i){return this[n].call(this,t,o,s,i)},configurable:!0})})}var q=class{constructor(t){t&&this.set(t)}set(t,r,n){let o=this;function s(c,f,u){let l=v(f);if(!l)throw new Error("header name must be a non-empty string");let p=a.findKey(o,l);(!p||o[p]===void 0||u===!0||u===void 0&&o[p]!==!1)&&(o[p||f]=ae(c))}let i=(c,f)=>a.forEach(c,(u,l)=>s(u,l,f));if(a.isPlainObject(t)||t instanceof this.constructor)i(t,r);else if(a.isString(t)&&(t=t.trim())&&!Pr(t))i(lt(t),r);else if(a.isHeaders(t))for(let[c,f]of t.entries())s(f,c,n);else t!=null&&s(r,t,n);return this}get(t,r){if(t=v(t),t){let n=a.findKey(this,t);if(n){let o=this[n];if(!r)return o;if(r===!0)return Nr(o);if(a.isFunction(r))return r.call(this,o,n);if(a.isRegExp(r))return r.exec(o);throw new TypeError("parser must be boolean|regexp|function")}}}has(t,r){if(t=v(t),t){let n=a.findKey(this,t);return!!(n&&this[n]!==void 0&&(!r||Ce(this,this[n],n,r)))}return!1}delete(t,r){let n=this,o=!1;function s(i){if(i=v(i),i){let c=a.findKey(n,i);c&&(!r||Ce(n,n[c],c,r))&&(delete n[c],o=!0)}}return a.isArray(t)?t.forEach(s):s(t),o}clear(t){let r=Object.keys(this),n=r.length,o=!1;for(;n--;){let s=r[n];(!t||Ce(this,this[s],s,t,!0))&&(delete this[s],o=!0)}return o}normalize(t){let r=this,n={};return a.forEach(this,(o,s)=>{let i=a.findKey(n,s);if(i){r[i]=ae(o),delete r[s];return}let c=t?Fr(s):String(s).trim();c!==s&&delete r[s],r[c]=ae(o),n[c]=!0}),this}concat(...t){return this.constructor.concat(this,...t)}toJSON(t){let r=Object.create(null);return a.forEach(this,(n,o)=>{n!=null&&n!==!1&&(r[o]=t&&a.isArray(n)?n.join(", "):n)}),r}[Symbol.iterator](){return Object.entries(this.toJSON())[Symbol.iterator]()}toString(){return Object.entries(this.toJSON()).map(([t,r])=>t+": "+r).join(`
`)}get[Symbol.toStringTag](){return"AxiosHeaders"}static from(t){return t instanceof this?t:new this(t)}static concat(t,...r){let n=new this(t);return r.forEach(o=>n.set(o)),n}static accessor(t){let n=(this[ft]=this[ft]={accessors:{}}).accessors,o=this.prototype;function s(i){let c=v(i);n[c]||(Lr(o,i),n[c]=!0)}return a.isArray(t)?t.forEach(s):s(t),this}};q.accessor(["Content-Type","Content-Length","Accept","Accept-Encoding","User-Agent","Authorization"]);a.reduceDescriptors(q.prototype,({value:e},t)=>{let r=t[0].toUpperCase()+t.slice(1);return{get:()=>e,set(n){this[r]=n}}});a.freezeMethods(q);var x=q;function K(e,t){let r=this||H,n=t||r,o=x.from(n.headers),s=n.data;return a.forEach(e,function(c){s=c.call(r,s,o.normalize(),t?t.status:void 0)}),o.normalize(),s}function $(e){return!!(e&&e.__CANCEL__)}function dt(e,t,r){h.call(this,e??"canceled",h.ERR_CANCELED,t,r),this.name="CanceledError"}a.inherits(dt,h,{__CANCEL__:!0});var L=dt;function G(e,t,r){let n=r.config.validateStatus;!r.status||!n||n(r.status)?e(r):t(new h("Request failed with status code "+r.status,[h.ERR_BAD_REQUEST,h.ERR_BAD_RESPONSE][Math.floor(r.status/100)-4],r.config,r.request,r))}function Ne(e){let t=/^([-+\w]{1,25})(:?\/\/|:)/.exec(e);return t&&t[1]||""}function Dr(e,t){e=e||10;let r=new Array(e),n=new Array(e),o=0,s=0,i;return t=t!==void 0?t:1e3,function(f){let u=Date.now(),l=n[s];i||(i=u),r[o]=f,n[o]=u;let p=s,w=0;for(;p!==o;)w+=r[p++],p=p%e;if(o=(o+1)%e,o===s&&(s=(s+1)%e),u-i<t)return;let b=l&&u-l;return b?Math.round(w*1e3/b):void 0}}var pt=Dr;function _r(e,t){let r=0,n=1e3/t,o,s,i=(u,l=Date.now())=>{r=l,o=null,s&&(clearTimeout(s),s=null),e.apply(null,u)};return[(...u)=>{let l=Date.now(),p=l-r;p>=n?i(u,l):(o=u,s||(s=setTimeout(()=>{s=null,i(o)},n-p)))},()=>o&&i(o)]}var mt=_r;var I=(e,t,r=3)=>{let n=0,o=pt(50,250);return mt(s=>{let i=s.loaded,c=s.lengthComputable?s.total:void 0,f=i-n,u=o(f),l=i<=c;n=i;let p={loaded:i,total:c,progress:c?i/c:void 0,bytes:f,rate:u||void 0,estimated:u&&c&&l?(c-i)/u:void 0,event:s,lengthComputable:c!=null,[t?"download":"upload"]:!0};e(p)},r)},Pe=(e,t)=>{let r=e!=null;return[n=>t[0]({lengthComputable:r,total:e,loaded:n}),t[1]]},Fe=e=>(...t)=>a.asap(()=>e(...t));var ht=S.hasStandardBrowserEnv?function(){let t=/(msie|trident)/i.test(navigator.userAgent),r=document.createElement("a"),n;function o(s){let i=s;return t&&(r.setAttribute("href",i),i=r.href),r.setAttribute("href",i),{href:r.href,protocol:r.protocol?r.protocol.replace(/:$/,""):"",host:r.host,search:r.search?r.search.replace(/^\?/,""):"",hash:r.hash?r.hash.replace(/^#/,""):"",hostname:r.hostname,port:r.port,pathname:r.pathname.charAt(0)==="/"?r.pathname:"/"+r.pathname}}return n=o(window.location.href),function(i){let c=a.isString(i)?o(i):i;return c.protocol===n.protocol&&c.host===n.host}}():function(){return function(){return!0}}();var yt=S.hasStandardBrowserEnv?{write(e,t,r,n,o,s){let i=[e+"="+encodeURIComponent(t)];a.isNumber(r)&&i.push("expires="+new Date(r).toGMTString()),a.isString(n)&&i.push("path="+n),a.isString(o)&&i.push("domain="+o),s===!0&&i.push("secure"),document.cookie=i.join("; ")},read(e){let t=document.cookie.match(new RegExp("(^|;\\s*)("+e+")=([^;]*)"));return t?decodeURIComponent(t[3]):null},remove(e){this.write(e,"",Date.now()-864e5)}}:{write(){},read(){return null},remove(){}};function Le(e){return/^([a-z][a-z\d+\-.]*:)?\/\//i.test(e)}function De(e,t){return t?e.replace(/\/?\/$/,"")+"/"+t.replace(/^\/+/,""):e}function X(e,t){return e&&!Le(t)?De(e,t):t}var Et=e=>e instanceof x?{...e}:e;function N(e,t){t=t||{};let r={};function n(u,l,p){return a.isPlainObject(u)&&a.isPlainObject(l)?a.merge.call({caseless:p},u,l):a.isPlainObject(l)?a.merge({},l):a.isArray(l)?l.slice():l}function o(u,l,p){if(a.isUndefined(l)){if(!a.isUndefined(u))return n(void 0,u,p)}else return n(u,l,p)}function s(u,l){if(!a.isUndefined(l))return n(void 0,l)}function i(u,l){if(a.isUndefined(l)){if(!a.isUndefined(u))return n(void 0,u)}else return n(void 0,l)}function c(u,l,p){if(p in t)return n(u,l);if(p in e)return n(void 0,u)}let f={url:s,method:s,data:s,baseURL:i,transformRequest:i,transformResponse:i,paramsSerializer:i,timeout:i,timeoutMessage:i,withCredentials:i,withXSRFToken:i,adapter:i,responseType:i,xsrfCookieName:i,xsrfHeaderName:i,onUploadProgress:i,onDownloadProgress:i,decompress:i,maxContentLength:i,maxBodyLength:i,beforeRedirect:i,transport:i,httpAgent:i,httpsAgent:i,cancelToken:i,socketPath:i,responseEncoding:i,validateStatus:c,headers:(u,l)=>o(Et(u),Et(l),!0)};return a.forEach(Object.keys(Object.assign({},e,t)),function(l){let p=f[l]||o,w=p(e[l],t[l],l);a.isUndefined(w)&&p!==c||(r[l]=w)}),r}var ce=e=>{let t=N({},e),{data:r,withXSRFToken:n,xsrfHeaderName:o,xsrfCookieName:s,headers:i,auth:c}=t;t.headers=i=x.from(i),t.url=W(X(t.baseURL,t.url),e.params,e.paramsSerializer),c&&i.set("Authorization","Basic "+btoa((c.username||"")+":"+(c.password?unescape(encodeURIComponent(c.password)):"")));let f;if(a.isFormData(r)){if(S.hasStandardBrowserEnv||S.hasStandardBrowserWebWorkerEnv)i.setContentType(void 0);else if((f=i.getContentType())!==!1){let[u,...l]=f?f.split(";").map(p=>p.trim()).filter(Boolean):[];i.setContentType([u||"multipart/form-data",...l].join("; "))}}if(S.hasStandardBrowserEnv&&(n&&a.isFunction(n)&&(n=n(t)),n||n!==!1&&ht(t.url))){let u=o&&s&&yt.read(s);u&&i.set(o,u)}return t};var Ur=typeof XMLHttpRequest<"u",wt=Ur&&function(e){return new Promise(function(r,n){let o=ce(e),s=o.data,i=x.from(o.headers).normalize(),{responseType:c,onUploadProgress:f,onDownloadProgress:u}=o,l,p,w,b,m;function y(){b&&b(),m&&m(),o.cancelToken&&o.cancelToken.unsubscribe(l),o.signal&&o.signal.removeEventListener("abort",l)}let d=new XMLHttpRequest;d.open(o.method.toUpperCase(),o.url,!0),d.timeout=o.timeout;function g(){if(!d)return;let E=x.from("getAllResponseHeaders"in d&&d.getAllResponseHeaders()),U={data:!c||c==="text"||c==="json"?d.responseText:d.response,status:d.status,statusText:d.statusText,headers:E,config:e,request:d};G(function(F){r(F),y()},function(F){n(F),y()},U),d=null}"onloadend"in d?d.onloadend=g:d.onreadystatechange=function(){!d||d.readyState!==4||d.status===0&&!(d.responseURL&&d.responseURL.indexOf("file:")===0)||setTimeout(g)},d.onabort=function(){d&&(n(new h("Request aborted",h.ECONNABORTED,e,d)),d=null)},d.onerror=function(){n(new h("Network Error",h.ERR_NETWORK,e,d)),d=null},d.ontimeout=function(){let T=o.timeout?"timeout of "+o.timeout+"ms exceeded":"timeout exceeded",U=o.transitional||se;o.timeoutErrorMessage&&(T=o.timeoutErrorMessage),n(new h(T,U.clarifyTimeoutError?h.ETIMEDOUT:h.ECONNABORTED,e,d)),d=null},s===void 0&&i.setContentType(null),"setRequestHeader"in d&&a.forEach(i.toJSON(),function(T,U){d.setRequestHeader(U,T)}),a.isUndefined(o.withCredentials)||(d.withCredentials=!!o.withCredentials),c&&c!=="json"&&(d.responseType=o.responseType),u&&([w,m]=I(u,!0),d.addEventListener("progress",w)),f&&d.upload&&([p,b]=I(f),d.upload.addEventListener("progress",p),d.upload.addEventListener("loadend",b)),(o.cancelToken||o.signal)&&(l=E=>{d&&(n(!E||E.type?new L(null,e,d):E),d.abort(),d=null)},o.cancelToken&&o.cancelToken.subscribe(l),o.signal&&(o.signal.aborted?l():o.signal.addEventListener("abort",l)));let A=Ne(o.url);if(A&&S.protocols.indexOf(A)===-1){n(new h("Unsupported protocol "+A+":",h.ERR_BAD_REQUEST,e));return}d.send(s||null)})};var Br=(e,t)=>{let r=new AbortController,n,o=function(f){if(!n){n=!0,i();let u=f instanceof Error?f:this.reason;r.abort(u instanceof h?u:new L(u instanceof Error?u.message:u))}},s=t&&setTimeout(()=>{o(new h(`timeout ${t} of ms exceeded`,h.ETIMEDOUT))},t),i=()=>{e&&(s&&clearTimeout(s),s=null,e.forEach(f=>{f&&(f.removeEventListener?f.removeEventListener("abort",o):f.unsubscribe(o))}),e=null)};e.forEach(f=>f&&f.addEventListener&&f.addEventListener("abort",o));let{signal:c}=r;return c.unsubscribe=i,[c,()=>{s&&clearTimeout(s),s=null}]},bt=Br;var kr=function*(e,t){let r=e.byteLength;if(!t||r<t){yield e;return}let n=0,o;for(;n<r;)o=n+t,yield e.slice(n,o),n=o},jr=async function*(e,t,r){for await(let n of e)yield*kr(ArrayBuffer.isView(n)?n:await r(String(n)),t)},_e=(e,t,r,n,o)=>{let s=jr(e,t,o),i=0,c,f=u=>{c||(c=!0,n&&n(u))};return new ReadableStream({async pull(u){try{let{done:l,value:p}=await s.next();if(l){f(),u.close();return}let w=p.byteLength;if(r){let b=i+=w;r(b)}u.enqueue(new Uint8Array(p))}catch(l){throw f(l),l}},cancel(u){return f(u),s.return()}},{highWaterMark:2})};var le=typeof fetch=="function"&&typeof Request=="function"&&typeof Response=="function",xt=le&&typeof ReadableStream=="function",Ue=le&&(typeof TextEncoder=="function"?(e=>t=>e.encode(t))(new TextEncoder):async e=>new Uint8Array(await new Response(e).arrayBuffer())),St=(e,...t)=>{try{return!!e(...t)}catch{return!1}},Hr=xt&&St(()=>{let e=!1,t=new Request(S.origin,{body:new ReadableStream,method:"POST",get duplex(){return e=!0,"half"}}).headers.has("Content-Type");return e&&!t}),Rt=64*1024,Be=xt&&St(()=>a.isReadableStream(new Response("").body)),ue={stream:Be&&(e=>e.body)};le&&(e=>{["text","arrayBuffer","blob","formData","stream"].forEach(t=>{!ue[t]&&(ue[t]=a.isFunction(e[t])?r=>r[t]():(r,n)=>{throw new h(`Response type '${t}' is not supported`,h.ERR_NOT_SUPPORT,n)})})})(new Response);var qr=async e=>{if(e==null)return 0;if(a.isBlob(e))return e.size;if(a.isSpecCompliantForm(e))return(await new Request(e).arrayBuffer()).byteLength;if(a.isArrayBufferView(e)||a.isArrayBuffer(e))return e.byteLength;if(a.isURLSearchParams(e)&&(e=e+""),a.isString(e))return(await Ue(e)).byteLength},Ir=async(e,t)=>{let r=a.toFiniteNumber(e.getContentLength());return r??qr(t)},gt=le&&(async e=>{let{url:t,method:r,data:n,signal:o,cancelToken:s,timeout:i,onDownloadProgress:c,onUploadProgress:f,responseType:u,headers:l,withCredentials:p="same-origin",fetchOptions:w}=ce(e);u=u?(u+"").toLowerCase():"text";let[b,m]=o||s||i?bt([o,s],i):[],y,d,g=()=>{!y&&setTimeout(()=>{b&&b.unsubscribe()}),y=!0},A;try{if(f&&Hr&&r!=="get"&&r!=="head"&&(A=await Ir(l,n))!==0){let P=new Request(t,{method:"POST",body:n,duplex:"half"}),F;if(a.isFormData(n)&&(F=P.headers.get("content-type"))&&l.setContentType(F),P.body){let[ye,Z]=Pe(A,I(Fe(f)));n=_e(P.body,Rt,ye,Z,Ue)}}a.isString(p)||(p=p?"include":"omit"),d=new Request(t,{...w,signal:b,method:r.toUpperCase(),headers:l.normalize().toJSON(),body:n,duplex:"half",credentials:p});let E=await fetch(d),T=Be&&(u==="stream"||u==="response");if(Be&&(c||T)){let P={};["status","statusText","headers"].forEach(Je=>{P[Je]=E[Je]});let F=a.toFiniteNumber(E.headers.get("content-length")),[ye,Z]=c&&Pe(F,I(Fe(c),!0))||[];E=new Response(_e(E.body,Rt,ye,()=>{Z&&Z(),T&&g()},Ue),P)}u=u||"text";let U=await ue[a.findKey(ue,u)||"text"](E,e);return!T&&g(),m&&m(),await new Promise((P,F)=>{G(P,F,{data:U,headers:x.from(E.headers),status:E.status,statusText:E.statusText,config:e,request:d})})}catch(E){throw g(),E&&E.name==="TypeError"&&/fetch/i.test(E.message)?Object.assign(new h("Network Error",h.ERR_NETWORK,e,d),{cause:E.cause||E}):h.from(E,E&&E.code,e,d)}});var ke={http:ne,xhr:wt,fetch:gt};a.forEach(ke,(e,t)=>{if(e){try{Object.defineProperty(e,"name",{value:t})}catch{}Object.defineProperty(e,"adapterName",{value:t})}});var At=e=>`- ${e}`,Mr=e=>a.isFunction(e)||e===null||e===!1,fe={getAdapter:e=>{e=a.isArray(e)?e:[e];let{length:t}=e,r,n,o={};for(let s=0;s<t;s++){r=e[s];let i;if(n=r,!Mr(r)&&(n=ke[(i=String(r)).toLowerCase()],n===void 0))throw new h(`Unknown adapter '${i}'`);if(n)break;o[i||"#"+s]=n}if(!n){let s=Object.entries(o).map(([c,f])=>`adapter ${c} `+(f===!1?"is not supported by the environment":"is not available in the build")),i=t?s.length>1?`since :
`+s.map(At).join(`
`):" "+At(s[0]):"as no adapter specified";throw new h("There is no suitable adapter to dispatch the request "+i,"ERR_NOT_SUPPORT")}return n},adapters:ke};function je(e){if(e.cancelToken&&e.cancelToken.throwIfRequested(),e.signal&&e.signal.aborted)throw new L(null,e)}function de(e){return je(e),e.headers=x.from(e.headers),e.data=K.call(e,e.transformRequest),["post","put","patch"].indexOf(e.method)!==-1&&e.headers.setContentType("application/x-www-form-urlencoded",!1),fe.getAdapter(e.adapter||H.adapter)(e).then(function(n){return je(e),n.data=K.call(e,e.transformResponse,n),n.headers=x.from(n.headers),n},function(n){return $(n)||(je(e),n&&n.response&&(n.response.data=K.call(e,e.transformResponse,n.response),n.response.headers=x.from(n.response.headers))),Promise.reject(n)})}var pe="1.7.3";var He={};["object","boolean","number","function","string","symbol"].forEach((e,t)=>{He[e]=function(n){return typeof n===e||"a"+(t<1?"n ":" ")+e}});var Ot={};He.transitional=function(t,r,n){function o(s,i){return"[Axios v"+pe+"] Transitional option '"+s+"'"+i+(n?". "+n:"")}return(s,i,c)=>{if(t===!1)throw new h(o(i," has been removed"+(r?" in "+r:"")),h.ERR_DEPRECATED);return r&&!Ot[i]&&(Ot[i]=!0,console.warn(o(i," has been deprecated since v"+r+" and will be removed in the near future"))),t?t(s,i,c):!0}};function zr(e,t,r){if(typeof e!="object")throw new h("options must be an object",h.ERR_BAD_OPTION_VALUE);let n=Object.keys(e),o=n.length;for(;o-- >0;){let s=n[o],i=t[s];if(i){let c=e[s],f=c===void 0||i(c,s,e);if(f!==!0)throw new h("option "+s+" must be "+f,h.ERR_BAD_OPTION_VALUE);continue}if(r!==!0)throw new h("Unknown option "+s,h.ERR_BAD_OPTION)}}var me={assertOptions:zr,validators:He};var _=me.validators,M=class{constructor(t){this.defaults=t,this.interceptors={request:new Se,response:new Se}}async request(t,r){try{return await this._request(t,r)}catch(n){if(n instanceof Error){let o;Error.captureStackTrace?Error.captureStackTrace(o={}):o=new Error;let s=o.stack?o.stack.replace(/^.+\n/,""):"";try{n.stack?s&&!String(n.stack).endsWith(s.replace(/^.+\n.+\n/,""))&&(n.stack+=`
`+s):n.stack=s}catch{}}throw n}}_request(t,r){typeof t=="string"?(r=r||{},r.url=t):r=t||{},r=N(this.defaults,r);let{transitional:n,paramsSerializer:o,headers:s}=r;n!==void 0&&me.assertOptions(n,{silentJSONParsing:_.transitional(_.boolean),forcedJSONParsing:_.transitional(_.boolean),clarifyTimeoutError:_.transitional(_.boolean)},!1),o!=null&&(a.isFunction(o)?r.paramsSerializer={serialize:o}:me.assertOptions(o,{encode:_.function,serialize:_.function},!0)),r.method=(r.method||this.defaults.method||"get").toLowerCase();let i=s&&a.merge(s.common,s[r.method]);s&&a.forEach(["delete","get","head","post","put","patch","common"],m=>{delete s[m]}),r.headers=x.concat(i,s);let c=[],f=!0;this.interceptors.request.forEach(function(y){typeof y.runWhen=="function"&&y.runWhen(r)===!1||(f=f&&y.synchronous,c.unshift(y.fulfilled,y.rejected))});let u=[];this.interceptors.response.forEach(function(y){u.push(y.fulfilled,y.rejected)});let l,p=0,w;if(!f){let m=[de.bind(this),void 0];for(m.unshift.apply(m,c),m.push.apply(m,u),w=m.length,l=Promise.resolve(r);p<w;)l=l.then(m[p++],m[p++]);return l}w=c.length;let b=r;for(p=0;p<w;){let m=c[p++],y=c[p++];try{b=m(b)}catch(d){y.call(this,d);break}}try{l=de.call(this,b)}catch(m){return Promise.reject(m)}for(p=0,w=u.length;p<w;)l=l.then(u[p++],u[p++]);return l}getUri(t){t=N(this.defaults,t);let r=X(t.baseURL,t.url);return W(r,t.params,t.paramsSerializer)}};a.forEach(["delete","get","head","options"],function(t){M.prototype[t]=function(r,n){return this.request(N(n||{},{method:t,url:r,data:(n||{}).data}))}});a.forEach(["post","put","patch"],function(t){function r(n){return function(s,i,c){return this.request(N(c||{},{method:t,headers:n?{"Content-Type":"multipart/form-data"}:{},url:s,data:i}))}}M.prototype[t]=r(),M.prototype[t+"Form"]=r(!0)});var Q=M;var qe=class e{constructor(t){if(typeof t!="function")throw new TypeError("executor must be a function.");let r;this.promise=new Promise(function(s){r=s});let n=this;this.promise.then(o=>{if(!n._listeners)return;let s=n._listeners.length;for(;s-- >0;)n._listeners[s](o);n._listeners=null}),this.promise.then=o=>{let s,i=new Promise(c=>{n.subscribe(c),s=c}).then(o);return i.cancel=function(){n.unsubscribe(s)},i},t(function(s,i,c){n.reason||(n.reason=new L(s,i,c),r(n.reason))})}throwIfRequested(){if(this.reason)throw this.reason}subscribe(t){if(this.reason){t(this.reason);return}this._listeners?this._listeners.push(t):this._listeners=[t]}unsubscribe(t){if(!this._listeners)return;let r=this._listeners.indexOf(t);r!==-1&&this._listeners.splice(r,1)}static source(){let t;return{token:new e(function(o){t=o}),cancel:t}}},Tt=qe;function Ie(e){return function(r){return e.apply(null,r)}}function Me(e){return a.isObject(e)&&e.isAxiosError===!0}var ze={Continue:100,SwitchingProtocols:101,Processing:102,EarlyHints:103,Ok:200,Created:201,Accepted:202,NonAuthoritativeInformation:203,NoContent:204,ResetContent:205,PartialContent:206,MultiStatus:207,AlreadyReported:208,ImUsed:226,MultipleChoices:300,MovedPermanently:301,Found:302,SeeOther:303,NotModified:304,UseProxy:305,Unused:306,TemporaryRedirect:307,PermanentRedirect:308,BadRequest:400,Unauthorized:401,PaymentRequired:402,Forbidden:403,NotFound:404,MethodNotAllowed:405,NotAcceptable:406,ProxyAuthenticationRequired:407,RequestTimeout:408,Conflict:409,Gone:410,LengthRequired:411,PreconditionFailed:412,PayloadTooLarge:413,UriTooLong:414,UnsupportedMediaType:415,RangeNotSatisfiable:416,ExpectationFailed:417,ImATeapot:418,MisdirectedRequest:421,UnprocessableEntity:422,Locked:423,FailedDependency:424,TooEarly:425,UpgradeRequired:426,PreconditionRequired:428,TooManyRequests:429,RequestHeaderFieldsTooLarge:431,UnavailableForLegalReasons:451,InternalServerError:500,NotImplemented:501,BadGateway:502,ServiceUnavailable:503,GatewayTimeout:504,HttpVersionNotSupported:505,VariantAlsoNegotiates:506,InsufficientStorage:507,LoopDetected:508,NotExtended:510,NetworkAuthenticationRequired:511};Object.entries(ze).forEach(([e,t])=>{ze[t]=e});var Ct=ze;function Nt(e){let t=new Q(e),r=z(Q.prototype.request,t);return a.extend(r,Q.prototype,t,{allOwnKeys:!0}),a.extend(r,t,null,{allOwnKeys:!0}),r.create=function(o){return Nt(N(e,o))},r}var R=Nt(H);R.Axios=Q;R.CanceledError=L;R.CancelToken=Tt;R.isCancel=$;R.VERSION=pe;R.toFormData=D;R.AxiosError=h;R.Cancel=R.CanceledError;R.all=function(t){return Promise.all(t)};R.spread=Ie;R.isAxiosError=Me;R.mergeConfig=N;R.AxiosHeaders=x;R.formToJSON=e=>ie(a.isHTMLForm(e)?new FormData(e):e);R.getAdapter=fe.getAdapter;R.HttpStatusCode=Ct;R.default=R;var he=R;var{Axios:Ks,AxiosError:$s,CanceledError:Gs,isCancel:Xs,CancelToken:Qs,VERSION:Zs,all:Ys,Cancel:ei,isAxiosError:ti,spread:ri,toFormData:ni,AxiosHeaders:oi,HttpStatusCode:si,formToJSON:ii,getAdapter:ai,mergeConfig:ci}=he;window.axios=he;})();
