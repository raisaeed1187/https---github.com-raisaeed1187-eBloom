<!DOCTYPE html>
<html lang="el">
  <!--
	_........_      |\||-|\||-/|/|
  .'     o    '.     \\|\|//||///
 /   o       o  \    |\/\||//||||
|o        o     o|   |||\\|/\\ ||
/'-.._o     __.-'\   | './\_/.' |
\      `````     \   | .:.  .:. |
|``............'`|   | :  ::  : |
 \              /    | :  ''  : |
  `.__________.`      '.______.'

  -->

  <!-- Mirrored from www.e-food.gr/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Mar 2021 07:44:00 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <title>eBloom | Online Delivery</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta charset="utf-8" />
    <meta
      name="description"
      content="Το Νο1 site για Delivery Online από χιλιάδες καταστήματα! Χωρίς καμία επιπλέον χρέωση! Εύκολα και γρήγορα!  🍔 🍕 🍖 🍗  🍜 🍝 🍞 🍟 🍢 🍣🍦  🍩 ☕"
    />
    {{-- <meta
      http-equiv="cache-control"
      content="no-store, no-cache, must-revalidate"
    /> --}}
    {{-- <meta http-equiv="Pragma" content="no-store, no-cache" />
    <meta http-equiv="Expires" content="0" /> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script type="f7cd9a4680c6ccdb45251385-text/javascript">
      (window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:false}};(window.NREUM||(NREUM={})).loader_config={xpid:"Ug4GWVVWGwAAV1FQAgcEVA==",licenseKey:"89fe45fbe0",applicationID:"303025632"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var i,o=t("ee"),a=t(24),c={};try{i=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,i.indexOf("dev")!==-1&&(c.dev=!0),i.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&o.on("internal-error",function(t){r(t.stack)}),c.dev&&o.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,c){try{p?p-=1:i(c||new UncaughtException(t,e,n),!0)}catch(f){try{o("ierr",[f,s.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function i(t,e){var n=e?null:s.now();o("err",[t,n])}var o=t("handle"),a=t(25),c=t("ee"),s=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(9),t(8),"addEventListener"in window&&t(5),s.xhrWrappable&&t(10),d=!0)}c.on("fn-start",function(t,e,n){d&&(p+=1)}),c.on("fn-err",function(t,e,n){d&&!n[l]&&(f(n,l,function(){return!0}),this.thrown=!0,i(n))}),c.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),c.on("internal-error",function(t){o("ierr",[t,s.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var i=t("ee"),o=t("handle"),a=t(9),c=t(8),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(7),"addEventListener"in window&&t(5);var x=NREUM.o.EV;i.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),i.on(w,function(t,e){var n=t[0];n instanceof x&&o("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),this.bstType])}),c.on(m,function(){this.bstStart=y.now()}),c.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),i.on(g+p,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),i.on(g+h,function(t){o("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&i(e)}function i(t){c.inPlace(t,[u,d],"-",o)}function o(t,e){return t[1]}var a=t("ee").get("events"),c=t("wrap-function")(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(i(window),i(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=o(arguments),e={};i.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var c=r.apply(this,t);return i.emit(n+"start",[t,a],c),c.then(function(t){return i.emit(n+"end",[null,t],c),t},function(t){throw i.emit(n+"end",[t],c),t})})}var i=t("ee").get("fetch"),o=t(25),a=t(24);e.exports=i;var c=window,s="fetch-",f=s+"body-",u=["arrayBuffer","blob","json","text","formData"],d=c.Request,l=c.Response,p=c.fetch,h="prototype",m="nr@context";d&&l&&p&&(a(u,function(t,e){r(d[h],e,f),r(l[h],e,f)}),r(c,"fetch",s),i.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),i.emit(s+"done",[null,e],n)}else i.emit(s+"done",[t],n)}))},{}],7:[function(t,e,n){var r=t("ee").get("history"),i=t("wrap-function")(r);e.exports=r;var o=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;o&&o.pushState&&o.replaceState&&(a=o),i.inPlace(a,["pushState","replaceState"],"-")},{}],8:[function(t,e,n){var r=t("ee").get("raf"),i=t("wrap-function")(r),o="equestAnimationFrame";e.exports=r,i.inPlace(window,["r"+o,"mozR"+o,"webkitR"+o,"msR"+o],"raf-"),r.on("raf-start",function(t){t[0]=i(t[0],"fn-")})},{}],9:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function i(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var o=t("ee").get("timer"),a=t("wrap-function")(o),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=o,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),o.on(s+u,r),o.on(c+u,i)},{}],10:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function i(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",c)}function o(t){y.push(t),h&&(b?b.then(a):w?w(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(v,i,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),o(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!w&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],11:[function(t,e,n){function r(t){if(!c(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=p.generateSpanId(),m=p.generateTraceId(),w=Date.now(),v={spanId:h,traceId:m,timestamp:w};return(t.sameOrigin||s(t)&&l())&&(v.traceContextParentHeader=i(h,m),v.traceContextStateHeader=o(h,w,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&s(t)&&d())&&(v.newrelicHeader=a(h,m,w,n,r,f)),v}function i(t,e){return"00-"+e+"-"+t+"-01"}function o(t,e,n,r,i){var o=0,a="",c=1,s="",f="";return i+"@nr="+o+"-"+c+"-"+n+"-"+r+"-"+t+"-"+a+"-"+s+"-"+f+"-"+e}function a(t,e,n,r,i,o){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var c={v:[0,1],d:{ty:"Browser",ac:r,ap:i,id:t,tr:e,ti:n}};return o&&r!==o&&(c.d.tk=o),btoa(JSON.stringify(c))}function c(t){return f()&&s(t)}function s(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var i=h(n.allowed_origins[r]);if(t.hostname===i.hostname&&t.protocol===i.protocol&&t.port===i.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function l(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var p=t(21),h=t(13);e.exports={generateTracePayload:r,shouldGenerateTrace:c}},{}],12:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):o(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=s(e),t.sameOrigin=t.parsedOrigin.sameOrigin}function o(t,e){t.params.status=e.status;var n=w(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(13),f=t(11).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(17),m=t(16),w=t(14),v=window.XMLHttpRequest;a.features.xhr=!0,t(10),t(6),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){o(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],i=this;if(n&&r){var o=m(r);o&&(n.txSize=o)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||i.loadCaptureCalled||(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<l;c++)e.addEventListener(d[c],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof v&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=s(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var i=f(this.parsedOrigin);if(i&&(i.newrelicHeader||i.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var o={};for(var a in r)o[a]=r[a];o.headers=new Headers(r.headers||{}),e(o.headers,i)&&(this.dt=i),t.length>1?t[1]=o:t.push(o)}else t[0]&&t[0].headers&&e(t[0].headers,i)&&(this.dt=i)})}},{}],13:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,i={};e.href=t,i.port=e.port;var o=e.href.split("://");!i.port&&o[1]&&(i.port=o[1].split("index.html")[0].split("@").pop().split(":")[1]),i.port&&"0"!==i.port||(i.port="https"===o[0]?"443":"80"),i.hostname=e.hostname||n.hostname,i.pathname=e.pathname,i.protocol=o[0],"/"!==i.pathname.charAt(0)&&(i.pathname="/"+i.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,c=e.hostname===document.domain&&e.port===n.port;return i.sameOrigin=a&&(!e.hostname||c),"/"===i.pathname&&(r[t]=i),i}},{}],14:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?i(t.response):"text"===n||""===n||void 0===n?i(t.responseText):void 0}var i=t(16);e.exports=r},{}],15:[function(t,e,n){function r(){}function i(t,e,n){return function(){return o(t,[f.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var o=t("handle"),a=t(24),c=t(25),s=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,e){u[e]=i(l+e,!0,"api")}),u.addPageAction=i(l+"addPageAction",!0),u.setCurrentRouteName=i(l+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(p+"tracer",[f.now(),t,n],r),function(){if(s.emit((i?"":"no-")+"fn-start",[f.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw s.emit("fn-err",[arguments,this,t],n),t}finally{s.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=i(p+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),o("err",[t,f.now(),!1,e])}},{}],16:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],17:[function(t,e,n){var r=0,i=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);i&&(r=+i[1]),e.exports=r},{}],18:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(26);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],19:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],20:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!w){var e=Math.round(t.timeStamp),n={type:t.type};e<=l.now()?n.fid=l.now()-e:e>l.offset&&e<=Date.now()?(e-=l.offset,n.fid=l.now()-e):e=l.now(),w=!0,d("timing",["fi",e,n])}}function c(t){d("pageHide",[l.now(),t])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var s,f,u,d=t("handle"),l=t("loader"),p=t(23),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(m){}f=new PerformanceObserver(i);try{f.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}u=new PerformanceObserver(o);try{u.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var w=!1,v=["click","keydown","mousedown","pointerdown","touchstart"];v.forEach(function(t){document.addEventListener(t,a,!1)})}p(c)}},{}],21:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var i,o="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",c=0;c<o.length;c++)i=o[c],"x"===i?a+=t().toString(16):"y"===i?(i=3&t()|8,a+=i.toString(16)):a+=i;return a}function i(){return a(16)}function o(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,i=window.crypto||window.msCrypto;i&&i.getRandomValues&&Uint8Array&&(n=i.getRandomValues(new Uint8Array(31)));for(var o=[],a=0;a<t;a++)o.push(e().toString(16));return o.join("")}e.exports={generateUuid:r,generateSpanId:i,generateTraceId:o}},{}],22:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,s=c.match(a);s&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=s[1])}e.exports={agent:i,version:o,match:r}},{}],23:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,e,!1)}e.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],24:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],25:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],26:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?f(t,s,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!p.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),s=m(n),f=s.length,u=0;u<f;u++)s[u].apply(c,r);var l=d[y[n]];return l&&l.push([x,n,r,c]),c}}function o(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function w(t){return l[t]=l[t]||i(n)}function v(t,e){u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:o,addEventListener:o,removeEventListener:h,emit:n,get:w,listeners:m,context:e,buffer:v,abort:c,aborted:!1};return x}function o(t){return f(t,s,a)}function a(){return new r}function c(){(d.api||d.feature)&&(p.aborted=!0,d=p.backlog={})}var s="nr@context",f=t("gos"),u=t(24),d={},l={},p=e.exports=i();e.exports.getOrSetContext=o,p.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=b.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(y,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=t(18),c=t("handle"),s=t(24),f=t("ee"),u=t(22),d=t(19),l=window,p=l.document,h="addEventListener",m="attachEvent",w=l.XMLHttpRequest,v=w&&w.prototype;if(d(l.location)){NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:w,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var g=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},x=w&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),b=e.exports={offset:a.getLastTimestamp(),now:a,origin:g,features:{},xhrWrappable:x,userAgent:u};t(15),t(20),p[h]?(p[h]("DOMContentLoaded",o,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",i),l[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,s,f){function nrWrapper(){var o,a,u,l;try{a=this,o=d(arguments),u="function"==typeof r?r(o,a):r||{}}catch(p){i([p,"",[o,a,s],u],t)}c(n+"start",[o,a,s],u,f);try{return l=e.apply(a,o)}catch(h){throw c(n+"err",[o,a,h],u,f),h}finally{c(n+"end",[o,a,l],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[l]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,s,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)s=e[f],c=t[s],a(c)||(t[s]=n(c,u?s+r:r,i,s,o))}function c(n,r,o,a){if(!h||e){var c=h;h=!0;try{t.emit(n,r,o,e,a)}catch(s){i([s,n,r,o],t)}h=c}}return t||(t=u),n.inPlace=r,n.flag=l,n}function i(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)p.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[l])}function c(t,e){var n=e(t);return n[l]=t,o(t,n,u),n}function s(t,e,n){var r=t[e];t[e]=c(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(25),l="nr@original",p=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=s,e.exports.argsToArray=f},{}]},{},["loader",2,12,4,3]);
    </script>

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="{{asset("efood-assets/site-assets/img/efood/apple-touch-icon.png")}}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="{{asset("efood-assets/site-assets/img/efood/favicon-32x32.png")}}"
    />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{asset("efood-assets/site-assets/img/efood/favicon-16x16.png")}}"
    />
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#ed2e2e" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="manifest" href="manifest.json" />

    <link rel="dns-prefetch" href="http://api.e-food.gr/" />
    <link rel="dns-prefetch" href="http://plus.google.com/" />
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <link rel="dns-prefetch" href="http://connect.facebook.net/" />
    <link rel="dns-prefetch" href="http://google-analytics.com/" />
    <link rel="dns-prefetch" href="http://v2.zopim.com/" />
    {{-- <link rel="dns-prefetch" href="http://maps.googleapis.com/" /> --}}

    <meta
      name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <meta property="og:url" content="https://www.e-food.gr%2F" />
    <meta property="og:title" content="efood | Online Delivery" />
    <meta
      property="og:description"
      content="Το Νο1 site για Delivery Online από χιλιάδες καταστήματα! Χωρίς καμία επιπλέον χρέωση! Εύκολα και γρήγορα!  🍔 🍕 🍖 🍗  🍜 🍝 🍞 🍟 🍢 🍣🍦  🍩 ☕"
    />
    <meta property="og:type" content="website" />
    <meta
      property="og:image"
      content="{{asset("efood-assets/site-assets/img/logos/logo250x25.jpg")}}"
    />
    <meta property="fb:app_id" content="514405861905024" />
    <meta name="p:domain_verify" content="6967780c0cfd9d1§90f0ccd144ca32dc8" />
    <!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300&subset=greek,latin-ext,latin' rel='stylesheet' type='text/css'> -->
    <link
      href="https://plus.google.com/107659040805233606039"
      rel="publisher"
    />

    <link
      rel="stylesheet"
      href="{{asset("efood-assets/assets/css/efood.82387275f940b3ce25dfd6a28b5f69ef.css")}}"
    />

    

    <script
      src="{{asset("efood-assets/assets/js/efood.header.0472098970c1e1314a72.js")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
     
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script type="f7cd9a4680c6ccdb45251385-text/javascript">
      window.lazySizesConfig = window.lazySizesConfig || {};
      lazySizesConfig.loadMode = 1;
    </script>

    <script
      src="{{asset("efood-assets/assets/ajax/libs/lazysizes/5.1.2/lazysizes.min.js")}}"
      async
      defer
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    <script type="f7cd9a4680c6ccdb45251385-text/javascript">
      window.fbAsyncInit = function() {
          FB.init({
              appId: '514405861905024',
              xfbml: true,
              version: 'v3.2'
          });
      };
      (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {return;}
          js = d.createElement(s);
          js.id = id;
          js.src = "../connect.facebook.net/en_US/sdk.js";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    {{-- <script type="f7cd9a4680c6ccdb45251385-text/javascript">
      function googleSignInStart() {
          gapi.load('auth2', function() {
              auth2 = gapi.auth2.init({
                  client_id: '885097402843-js6hi8niq0qa6s7e1tcm3rlkua8dlfb4.apps.googleusercontent.com'
              });
          });
      }
    </script> --}}
    <script
      src="{{asset("efood-assets/assets/js/client_platform3cb2.js?onload=googleSignInStart")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>
    <link
      href="http://fonts.googleapis.com/css?family=Roboto&amp;subset=greek&amp;text=%ce%a3%cf%8d%ce%bd%ce%b4%ce%b5%cf%83%ce%b7%ce%bc%ce%b5Google"
      rel="stylesheet"
      type="text/css"
    />

    <!--[if lt IE 9
      ]><script src="/site-assets/js/efoodfl/vendor/html5shiv.js"></script
    ><![endif]-->

    <script
      defer="defer"
      src="{{asset("efood-assets/assets/smartbanner/3.0/smartbanner.min.js")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>
    {{-- <script
      async
      id="google-map-script"
      src="http://maps.googleapis.com/maps/api/js?libraries=geometry,places&amp;language=el&amp;region=gr&amp;client=gme-deliveryheroholding&amp;channel=efood_gr"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script> --}}
    {{-- <script type="f7cd9a4680c6ccdb45251385-text/javascript">
      app.siteVersion = '2.9.29';
      app.sitePlatform = 'web';
      app.enviroment = 'production';
      app.brand = 'efood';
      app.locale = 'el';
      app.currency = 'EUR';
      app.ga_currency = 'EUR';
      app.userLoggedIn = false;
      app.userSid = '6bb82e9349e78b64654632375c318ce4';
      app.pageController = 'homepage';
      app.latitude = '';
      app.longitude = '';
      app.area_slug = '';
      app.userCartSid = '6bb82e9349e78b64654632375c318ce4';
      app.apiBaseURL = 'https://api.e-food.gr/api/v1';
      app.apiURL = 'https://api.e-food.gr/';
      app.apiLocale = 'el';
      app.googleMapsApiKeyString = '//maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=gr&client=gme-deliveryheroholding&channel=efood_gr';
      app.savedAddresses = null;
      app.isByArea = false;
      app.isJokerEnabled = false && !(/(iphone|ipod|ipad).* os 8_/.test(navigator.userAgent.toLowerCase()));
      app.loadMaps = false;
      app.isAppboyEnabled = true;

      app.displaySmartBanner = true;
      app.businessDiscountUrl = 'foodatwork/index.html';
      app.isFoodAtWorkEnabled = true;
      app.addressBusinessSlug = '';
      app.referrerSlug = '';
      app.apiOfflineMessage = "Προέκυψε πρόβλημα κατά την επικοινωνία με τον διακομιστή";
      app.verticalType      = "";

      app.brandName = "efood";



      app.deliveryPrefix = 'delivery';
      app.chainPrefix = 'menu';

      app.i18n = {
          countryCode: 'GR',
          locale: 'el',
          currency: {
              symbol: '€',
              unit: 'EUR',
          },
          trans: {
              'generic': {
                  'SEE_MORE': 'Δες περισσότερες',
                  'SEE_LESS': 'Δες λιγότερες',
                  'SHOP_LISTING_TOGGLE_LIST': 'Λίστα',
                  'SHOP_LISTING_TOGGLE_IMAGES': 'Με εικόνα',
                  'SHOP_LISTING_TIP': 'Άλλαξε από εδώ τον τρόπο εμφάνισης των καταστημάτων',
              },
              'menu-search': {
                  'search-placeholder': 'Aναζήτηση',
                  'no-results': 'Δε βρέθηκε αποτέλεσμα για',
                  'add': 'Προσθήκη',
                  'max-item-count': 'Μέγιστη ποσότητα %n τεμάχια',
                  'from': 'Από'
              },
              'order-tracking': {
                  'ORDER_TRACKING_INFO_COMPLETE': 'Στην πόρτα σου σε:',
                  'ORDER_TRACKING_INFO_ESTIMATION': 'Εκτιμώμενος Χρόνος:',
                  'ORDER_TRACKING_RECEIVED_TITLE': 'Λάβαμε την παραγγελία σου!',
                  'ORDER_TRACKING_RECEIVED_SUBTITLE': 'Το κατάστημα θα επιβεβαιώσει την παραγγελία σου.',
                  'ORDER_TRACKING_IN_PROGRESS_TITLE': 'Επεξεργασία Παραγγελίας',
                  'ORDER_TRACKING_IN_PROGRESS_SUBTITLE': 'Το κατάστημα θα ξεκινήσει να ετοιμάζει την παραγγελία σου πολύ σύντομα.',
                  'ORDER_TRACKING_PREPARING_TITLE': 'Προετοιμασία Παραγγελίας',
                  'ORDER_TRACKING_PREPARING_SUBTITLE': "Το κατάστημα ετοιμάζει όλα όσα ζήτησες.",
                  'ORDER_TRACKING_READY_FOR_DELIVERY_TITLE': 'Αποστολή Παραγγελίας',
                  'ORDER_TRACKING_READY_FOR_DELIVERY_SUBTITLE': 'Η παραγγελία σου είναι έτοιμη προς παράδοση.',
                  'ORDER_TRACKING_PICKED_UP_TITLE': 'Η παραγγελία σου έρχεται.',
                  'ORDER_TRACKING_PICKED_UP_SUBTITLE': "Έχει φύγει το παιδί και βρίσκεται καθ'οδόν.",
                  'ORDER_TRACKING_ARRIVING_SOON_TITLE': '3,2,1... Φτάνουμε!',
                  'ORDER_TRACKING_ARRIVING_SOON_SUBTITLE': 'Σε πολύ λίγο θα είμαστε στην πόρτα σου.',
                  'ORDER_TRACKING_DELIVERED_TITLE': 'Η παραγγελία σου έφτασε.',
                  'ORDER_TRACKING_DELIVERED_SUBTITLE': "Σου άρεσε; Μην ξεχάσεις να την αξιολογήσεις!",
                  'ORDER_TRACKING_CANCELED_TITLE': 'Η παραγγελία σου ακυρώθηκε',
                  'ORDER_TRACKING_CANCELED_SUBTITLE': "Το κατάστημα δυστυχώς δεν αποδέχτηκε την παραγγελία σου. Μην ανησυχείς, θα επικοινωνήσουμε άμεσα μαζί σου!",
                  'ORDER_TRACKING_IS_DELAYED_TITLE': 'Η παραγγελία σου θα καθυστερήσει λίγο.',
                  'ORDER_TRACKING_IS_DELAYED_SUBTITLE': "Ο χρόνος παράδοσης έχει ανανεωθεί.",
                  'ORDER_TRACKING_DELIVERED_AT': "Παραδόθηκε στις:",
                  'ORDER_TRACKING_LIVE_PROGRESS': "live εξέλιξη παραγγελίας",
                  'ORDER_TRACKING_DELIVERED_BY': "delivered by"
              },
              'swimlanes': {
                  'URL_PREFIX': "/delivery",
                  'MINIMUM_ORDER': 'Ελάχ.',
                  'SEE_ALL': 'Δες τα όλα'
              },
              loaderMessage: 'Παρακαλώ περιμένετε...'
          }
      };

      app.status = {
          isJokerActive: false,
          shopListing: {
              shopCategorySelectedQuantity: null,
              shopCategorySelected: null,
              shopFilteringSelected: null,
              shopSortingSelected: null,
              shopQuantityShown: null,
              shopQuantityTotal: null,
              shopListMessageShown: null,
          },
          cuisineLanding: {
              selectedCuisine: null,
          }
      };

      app.swimlanes = {
          key: null,
      };




      app.address = {"id":0,"latitude":0,"longitude":0,"city":"","county":"","doorbellName":"","floor":"","phone":"","userId":0,"isDefault":false,"country":"GR","street":"","streetNo":0,"notes":"","zip":"","slug":"","area_slug":"","friendly_name":"","scope":"","isComplete":false,"isByArea":false,"isFoodAtWork":false,"isInNoMapArea":false}
    </script> --}}

    <link rel="canonical" href="index.html" />

    <script
      async
      src="{{asset("efood-assets/assets/js/9411b219fc.js")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    <link rel="stylesheet" href="{{asset("efood-assets/assets/css/popup.css")}}">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
  </head>

  <body
    data-spy="scroll"
    data-target="#shop-profile-menu-list-nav"
    data-offset="122"
    class="page brand-efood page-homepage time-morning date-19-03 logged-out page-with-cover"
  >
    <script type="f7cd9a4680c6ccdb45251385-text/javascript">
      	dataLayer = [{
          "siteVersion": "2.9.29",
          "isLoggedIn": 0,
          "pageUrl": "https://www.e-food.gr/",
          "userAddress": "",
          "userAddressLat": 0,
          "userAddressLon": 0,
          "userAddressZip": "",
          "userAddressCity": "",
          "userAddressCountry": "GR",
          "userCookiePreference": "not selected",
          "userCookiePrivacyLevel": "required",
          "pageUrlPath": "",
          "userId": "",
          "userLoggedIn": false,
          "pageType": "home",
          "appLang": "el",
          "pageBreadcrumb": "home"
      }];
      	dataLayer[0].pageEnvironment = ('ontouchstart' in window) ? 'mobile' : 'desktop';
    </script>

    <!-- Google Tag Manager -->
    {{-- <noscript
      ><iframe
        src="http://www.googletagmanager.com/ns.html?id=GTM-P44B2X"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe --}}
    {{-- ></noscript> --}}
    {{-- <script type="f7cd9a4680c6ccdb45251385-text/javascript">
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-P44B2X');
    </script> --}}
    <!-- End Google Tag Manager -->

    <!-- Firebase -->
    <script type="f7cd9a4680c6ccdb45251385-text/javascript">
      (function(sa,fbc){function load(f,c){var a=document.createElement('script');
          a.async=1;a.src=f;a.id="firebaseScript";var s=document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(a,s);}load(sa);document.getElementById("firebaseScript").onload = function() {firebase.initializeApp(fbc).performance();};
      })('../www.gstatic.com/firebasejs/8.1.1/firebase-performance-standalone.js', {
          apiKey: "AIzaSyA5JVigeqBTKq-uiI9P7PJtE74PkeBYYkQ",
          authDomain: "api-project-1063727918193.firebaseapp.com",
          databaseURL: "https://api-project-1063727918193.firebaseio.com",
          projectId: "api-project-1063727918193",
          storageBucket: "api-project-1063727918193.appspot.com",
          messagingSenderId: "1063727918193",
          appId: "1:1063727918193:web:9ff18c74e8285a0f"
      });
    </script>
    <!-- Firebase -->

    <script type="f7cd9a4680c6ccdb45251385-text/javascript">
      var preferredView = window.$.cookie('shop_preferred_view');

      if (preferredView === undefined || ((preferredView === 'image') && !document.body.classList.contains('page-with-cover'))) {
          document.body.classList.add('page-with-cover');
      } else if (preferredView !== 'image' && document.body.classList.contains('page-with-cover')) {
          document.body.classList.remove('page-with-cover');
      }
    </script>

    <div data-toggle-control="m-side-menu" id="mobile-side-menu">
      <div class="mobile-sidemenu-login-btn-wrapper px-11 py-5 border-bottom">
        <button
          data-target="#myModal"
          data-toggle="modal"
          data-modal-class="modal-login"
          data-url="/foodatwork/modals/login"
          class="btn btn-block btn-outline-grey mobile-sidemenu-login-btn hover-no-decoration"
          title="Σύνδεση/Εγγραφή"
        >
          Login/Sign Up
        </button>
      </div>
      <ul class="mobile-sidemenu-list list-unstyled mb-0">
        <li class="mobile-sidemenu-list-item">
          <a class="d-block" href="index.html" title="Home">Home</a>
        </li>
      </ul>

      <ul
        class="mobile-sidemenu-list mobile-sidemenu-list--secondary list-unstyled"
      >
        <!-- <li
          id="mobile-sidemenu-list-accordion"
          class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item"
        >
          <a
            class="d-flex justify-content-between"
            data-toggle="collapse"
            class="collapsed"
            data-parent="#mobile-sidemenu-list-accordion"
            href="#mobile-sidemenu-list-one"
            aria-expanded="false"
            aria-controls="mobile-sidemenu-list-one"
          >
            Σχετικά με το efood
            <i class="fa fa-caret-down pull-right" aria-hidden="true"></i>
          </a>
          <ul
            id="mobile-sidemenu-list-one"
            class="list-unstyled collapse mobile-sidemenu-list"
          >
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="page/who.html">Ποιοί είμαστε</a>
            </li>
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="page/info.html">Πώς λειτουργεί</a>
            </li>
            <li class="mobile-sidemenu-list-item">
              <a
                class="d-block"
                href="https://e-food.workable.com/"
                target="_blank"
                >Γίνε efooder</a
              >
            </li>
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="page/faqs.html">FAQs</a>
            </li>
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="blog/index.html">Blog</a>
            </li>
          </ul>
        </li> -->
        <!-- <li
          class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item"
        >
          <a class="d-block" href="page/contact.html">Επικοινωνία</a>
        </li> -->
        <!-- <li
          class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item"
        >
          <a
            class="d-block"
            href="https://riders.e-food.gr/"
            target="_blank"
            rel="nofollow"
            >Γίνε efood διανομέας</a
          >
        </li> -->
        <li
          class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item"
        >
          <a class="d-block" href="page/restaurant.html"
            >Do you have a store?</a
          >
        </li>
        <!-- <li
          class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item"
        >
          <a
            class="d-flex justify-content-between"
            data-toggle="collapse"
            class="collapsed"
            data-parent="#mobile-sidemenu-list-accordion"
            href="#mobile-sidemenu-list-two"
            aria-expanded="false"
            aria-controls="mobile-sidemenu-list-two"
          >
            Όροι και Πολιτική
            <i class="fa fa-caret-down pull-right" aria-hidden="true"></i>
          </a>
          <ul
            id="mobile-sidemenu-list-two"
            class="list-unstyled collapse mobile-sidemenu-list"
          >
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="page/payments.html">Τρόποι Πληρωμής</a>
            </li>
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="page/tos.html">Όροι χρήσης</a>
            </li>
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="page/allergens.html">Αλλεργιογόνα</a>
            </li>
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="page/privacy.html">Πολιτική απορρήτου</a>
            </li>
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="page/copyright.html"
                >Πολιτική προστασίας</a
              >
            </li>
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="page/cookies.html">Πολιτική cookies</a>
            </li>
            <li class="mobile-sidemenu-list-item">
              <a class="d-block" href="page/reviews.html"
                >Πολιτική αξιολόγησης</a
              >
            </li>
          </ul>
        </li> -->

        <!-- <li
          class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item"
        >
          <a
            class="d-flex justify-content-between"
            data-toggle="collapse"
            class="collapsed"
            data-parent="#mobile-sidemenu-list-accordion"
            href="#mobile-sidemenu-list-three"
            aria-expanded="false"
            aria-controls="mobile-sidemenu-list-three"
          >
            Language

            <i class="fa fa-caret-down pull-right" aria-hidden="true"></i>
          </a>
          <ul
            id="mobile-sidemenu-list-three"
            class="list-unstyled collapse mobile-sidemenu-list"
          >
            <li
              class="mobile-sidemenu-list-item translate-button"
              data-lang="el_GR"
              data-event="translate"
            >
              <a class="d-block" href="#">Ελληνικά (GR)</a>
            </li>
            <li
              class="mobile-sidemenu-list-item translate-button"
              data-lang="en_US"
              data-event="translate"
            >
              <a class="d-block" href="#">English (EN)</a>
            </li>
          </ul>
        </li> -->
      </ul>
    </div>

    <button
      type="button"
      data-toggle-target="m-side-menu"
      class="btn btn-link mobile-sidemenu-btn--close"
    >
      <span class="fa-stack fa-lg">
        <i class="fas fa-circle fa-stack-2x fa-inverse"></i>
        <i class="fa fa-times fa-stack-1x"></i>
      </span>
    </button>

    <div id="main-container">
      <div id="smartbanner-container" class="d-none"></div>
      <div
        id="how-it-works"
        class="how-it-works-wrapper d-none bg-light text-center"
      >
        <div class="container d-flex px-12">
          <h1 class="ml-auto">
            Order delivery online <br />
            with 3 simple steps
          </h1>
          <span class="ml-auto"
            ><a href="#" class="how-it-works-trigger"
              ><i class="fas fa-times"></i></a
          ></span>
        </div>
        <div class="container d-flex justify-content-around pt-11">
          <div class="how-it-works-step-wrapper">
            <img
              alt="How it works first step"
              class="lazyload"
              data-src="efood-assets/site-assets/img/howitworks/facelift/efood/step-1.png?v=20201020"
              data-
              srcset="
                /cdn-cgi/image/w=186,h=186,fit=cover,q=100,f=auto/site-assets/img/howitworks/facelift/efood/step-1.png?v=20201020 186w
              "
            />
            <h3 class="mb-3">Βάλε τη διεύθυνσή σου</h3>
            <p class="font-weight-normal h3 text-muted">
              Μπορείς να έχεις όσες διευθύνσεις θέλεις.
            </p>
          </div>
          <div class="how-it-works-step-wrapper">
            <img
              alt="How it works second step"
              class="lazyload"
              data-src="efood-assets/site-assets/img/howitworks/facelift/efood/step-2.png?v=20201020"
              data-
              srcset="
                /cdn-cgi/image/w=186,h=186,fit=cover,q=100,f=auto/site-assets/img/howitworks/facelift/efood/step-2.png?v=20201020 186w
              "
            />
            <h3 class="mb-3">Επίλεξε κατάστημα</h3>
            <p class="font-weight-normal h3 text-muted">
              Ανάμεσα σε 15.000 καταστήματα σε όλη την Ελλάδα.
            </p>
          </div>
          <div class="how-it-works-step-wrapper">
            <img
              alt="How it works third step"
              class="lazyload"
              data-src="efood-assets/site-assets/img/howitworks/facelift/efood/step-3.png?v=20201020"
              data-
              srcset="
                /cdn-cgi/image/w=186,h=186,fit=cover,q=100,f=auto/site-assets/img/howitworks/facelift/efood/step-3.png?v=20201020 186w
              "
            />
            <h3 class="mb-3">Κάνε την παραγγελία σου</h3>
            <p class="font-weight-normal h3 text-muted">
              Προσθήκη. Καλάθι. Αποστολή!
            </p>
          </div>
        </div>
      </div>

      <header class="site-header py-lg-5">
        <button
          type="button"
          data-toggle-target="m-side-menu"
          class="d-lg-none btn btn-link mobile-sidemenu-btn p-2"
        >
          <span class="fa-stack fa-lg">
            <i class="fas fa-circle fa-stack-2x fa-inverse"></i>
            <i class="fas fa-bars fa-stack-1x"></i>
          </span>
        </button>
        <div class="container h-100">
          <div class="row align-items-center justify-content-between h-100">
            <div class="col-lg-auto">
              <a
                href="index.html"
                class="site-logo header-logo-main text-hide mx-auto ml-lg-0 d-lg-none"
                title="Flower Delivery &ndash; Order Online efood"
                >efood
                {{-- <img
                  src="data:image/png;base64,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
                  alt="efood Logo"
                /> --}}
                {{-- <img src="{{asset('efood-assets/images/logo2.jpeg')}}" alt="eBloom logo"> --}}

              </a>
              <a
                href="index.html"
                class="site-logo header-logo-main text-hide mx-auto ml-lg-0 d-none d-lg-block"
                title="Food Delivery &ndash; Order Online efood"
                >efood
                {{-- <img
                  src="data:image/png;base64,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"
                  alt="efood logo"
                /> --}}
                <img src="{{asset('efood-assets/images/logo2.jpeg')}}" alt="eBloom logo">
              </a>
            </div>
            <nav
              class="d-none d-lg-flex ml-auto col-auto site-header-nav align-items-center"
            >
              <a class="how-it-works-trigger btn btn-link px-0 mx-7" href="#"
                >How it works</a
              >

              <!-- <div
                class="site-header-translation d-none d-lg-block clearfix dropdown"
              >
                <a
                  href="#"
                  class="site-header-translation-link font-weight-bold btn btn-link hover-no-decoration dropdown-toggle pr-0 mx-7 text-uppercase"
                  role="button"
                  id="translationDropdownMenuLink"
                  data-toggle="dropdown"
                  data-offset="-100%"
                  aria-haspopup="true"
                  aria-expanded="false"
                  data-country="GR"
                >
                  GR
                </a>

                <div
                  class="dropdown-menu bg-white py-9 mt-5 dropdown-menu-center translation-dropdown-menu"
                  aria-labelledby="translationDropdownMenuLink"
                >
                  <h3 class="px-7 mb-3">Language</h3>
                  <ul
                    class="site-header-translation-options-list list-unstyled mb-0"
                  >
                    <li
                      class="pl-7 pr-12 py-4 translation-options-list-item dropdown-item translate-button"
                      data-lang="el_GR"
                      data-event="translate"
                    >
                      <div class="input-radio-mark position-relative">
                        <input
                          type="radio"
                          name="language"
                          checked
                          autocomplete="off"
                          id="el_GR"
                        />
                        <label
                          for="el_GR"
                          class="pl-10 h3 font-weight-normal mb-0 w-100"
                        >
                          Ελληνικά (GR)
                        </label>
                      </div>
                    </li>
                    <li
                      class="pl-7 pr-12 py-4 translation-options-list-item dropdown-item translate-button"
                      data-lang="en_US"
                      data-event="translate"
                    >
                      <div class="input-radio-mark position-relative">
                        <input
                          type="radio"
                          name="language"
                          autocomplete="off"
                          id="en_US"
                        />
                        <label
                          for="en_US"
                          class="pl-10 h3 font-weight-normal mb-0 w-100"
                        >
                          English (EN)
                        </label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div> -->
              <a href="#popup2"
                class="btn btn-sm btn-outline-white btn-block ml-7 login-button"
              >
                <strong>Login/Register</strong>
              </a>
            </nav>
          </div>
        </div>
      </header>
      {{-- --------------login popup------------ --}}
      <div id="popup2" class="overlay">
        <div class="loginpopup" >
            {{-- <div class="cc-modal-dismiss" style="float: right;">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x fa-inverse"></i>
                  <i class="far fa-times fa-stack-1x"></i>
                </span>
              </a>
            </div> --}}
            <div class="modal-content">
              <link href="//fonts.googleapis.com/css?family=Roboto&amp;subset=greek&amp;text=SigninwithGoogle" rel="stylesheet" type="text/css">
              <div class="modal-header flex-column bg-white pt-7 pb-0 px-0 border-bottom">
                  <div class="w-100 d-flex">
                      <h2 class="modal-title mx-auto"><strong class="h2">Log in eBloom</strong></h2>
                      <a href="#" type="button" class="modal-close mr-7 position-absolute pt-2" style="right: 0;" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="fa fa-times"></span>
                      </a>
                  </div>
                  <ul class="nav nav-tabs border-0 login-register-tablist w-100 d-flex justify-content-center clearfix pt-4" role="tablist">
                      <li role="presentation" class="w-50 text-center"><a href="#login-form" class="d-block py-4 hover-no-decoration h3 form-login-tab active" aria-controls="login" role="tab" data-toggle="tab" aria-selected="true">Login</a></li>
                      <li role="presentation" class="w-50 text-center"><a href="#register-form" class="d-block py-4 hover-no-decoration h3 form-registration-tab" aria-controls="register" role="tab" data-toggle="tab" aria-selected="false">Sign up</a></li>
                  </ul>
              </div>
                <div class="modal-body pt-7 bg-white">
                  <div class="tab-content login-register-tab-content">
                      <div role="tabpanel" class="tab-pane login-tab-pane active" id="login-form">
                          {{--social--}}
                            {{-- <span style="color:red" id="errorMsg"></span> --}}
                            <div class="print-error-msg-login">
                              <ul style="list-style: none;"></ul>
                            </div>
                          <form class="login-form has-validation-callback">{{ csrf_field() }}
                            <div class="form-group">
                              <div class="field-required">
                                <input type="email" name="user_email" id="login_email" class="form-control" data-validation="email" data-validation-error-msg="Enter your email" placeholder="Your Email" autocomplete="email">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="field-required position-relative">
                                <input type="password" name="user_password" id="pass" class="form-control" data-validation="required" data-validation-error-msg="Enter your password" placeholder="Your password">
                          
                                      <button type="button" class="show-hide-password position-absolute mr-2 btn-link border-0"><i class="fas fa-eye text-grey" aria-hidden="true"></i></button>
                              </div>
                            </div>
                            <button type="submit" id="loginBtn" class="btn btn-primary btn-block btn-lg login-form-submit">Login</button>
                          </form>
                          <p class="form-error form-text login-error-message alert alert-danger mt-5"></p>
                          <button type="button" data-target="#myModal" data-toggle="modal" data-dismiss="modal" data-modal-class="modal-login modal-forgot-password" data-url="/foodatwork/modals/forgot_password" class="mt-5 btn btn-link btn-block forgot-password-btn"><u>I don't remember my password</u></button>
                          <div class="text-center mt-5">
                              By signing up you agree to our <br>
                              <a href="/page/tos" target="_blank"><u>Terms of use</u></a> and <a href="/page/privacy" target="_blank"><u>Privacy policy</u></a>
                          </div>
              
                      </div>
                      <div role="tabpanel" class="tab-pane register-tab-pane" id="register-form">
                          
                          <form class="register-form mb-8 has-validation-callback">
                              <div class="form-group">
                                  <div class="field-required">
                                      <input type="email" name="register_email" id="register_email" class="form-control" data-validation="email" data-validation-error-msg="Enter your email" placeholder="Your Email" autocomplete="email">
                                  </div>
                              </div>
                              <div class="form-group form-group-register-password">
                                  <div class="field-required position-relative">
                                      <input type="password" name="register_email" id="register_password" class="form-control" placeholder="Your password" aria-describedby="passwordHelpBlock">
                                      <button type="button" class="show-hide-password position-absolute mr-2 btn-link border-0"><i class="fas fa-eye text-grey" aria-hidden="true"></i></button>
                                  </div>
                                  <p class="register-error-message alert alert-danger mt-3" style="display: none;"></p>
                                  <small id="passwordHelpBlock" class="form-text text-muted">Your password must be at least 8 characters long and contain at least one number, one capital letter and one lower case letter.</small>
                              </div>
                              <button type="submit" id="registerBtn" class="btn btn-block btn-primary btn-lg register-form-submit">Sign up</button>
                          </form>
                          <div class="text-center mt-5">
                              By signing up you agree to our <br>
                              <a href="/page/tos" target="_blank"><u>Terms of use</u></a> and <a href="/page/privacy" target="_blank"><u>Privacy policy</u></a>
                          </div>
              
                      </div>
                  </div>
                </div>
                  
            </div>
        </div>

      </div>
      {{-- -------------------end login popup---------- --}}
      {{-- ------------------login scripts--------- --}}
      <script type="text/javascript">
        $(document).ready(function() {
          // alert('check');
          $("#loginBtn").click(function(e) {

              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

              e.preventDefault();
              var email = $("input[name='user_email']").val();
              var password = $("input[name='user_password']").val();

              $.ajax({
                  url: '{{ url('/user-login') }}',
                  type: 'POST',
                  data: {
                      email: email,
                      password: password
                  },
                  success: function(data) {
                    console.log(data);
                      if ($.isEmptyObject(data.error)) {
                          // alert(data.success);
                          window.location.href = "{{ url('/welcome')}}";
                          email.val('');
                          password.val('');
                      } else {
                        console.log(data.error);
                        // $("#errorMsg").text(data.error);
                          printErrorMsg(data.error);
                      }
                  }
              });

          });
          ///-------------login ajex----

          $("#registerBtn").click(function(e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            e.preventDefault();
            var email = $("input[name='register_email']").val();
            var password = $("input[name='register_password']").val();

            $.ajax({
                url: '{{ url('/user-register') }}',
                type: 'POST',
                data: {
                    email: email,
                    password: password
                },
                success: function(data) {
                  console.log(data);
                    if ($.isEmptyObject(data.error)) {
                        // alert(data.success);
                        window.location.href = "{{ url('/welcome')}}";
                        email.val('');
                        password.val('');
                    } else {
                      console.log(data.error);
                      // $("#errorMsg").text(data.error);
                        printErrorMsg(data.error);
                    }
                }
            });

            });


          function printErrorMsg(msg) {
              $(".print-error-msg-login").find("ul").html('');
              $(".print-error-msg-login").css('display', 'block');
              $.each(msg, function(key, value) {
                  $(".print-error-msg-login").find("ul").append('<li style="color:red;">' + value + '</li>');
              });
          }
        });
      </script>
        {{-- ------------------------end login script---- --}}
      <main>
        <section id="notification" class="notification d-none">
          <div class="container">
            <div class="row">
              <p class="notification-content col-md-12"></p>
            </div>
          </div>
        </section>

        <script
          src="{{asset("efood-assets/assets/unpkg.com/react%4016.9.0/umd/react.production.min.js")}}"
          type="f7cd9a4680c6ccdb45251385-text/javascript"
        ></script>
        <script
          src="{{asset("efood-assets/assets/unpkg.com/react-dom%4016.9.0/umd/react-dom.production.min.js")}}"
          type="f7cd9a4680c6ccdb45251385-text/javascript"
        ></script>

        <script
          src="{{asset("efood-assets/assets/assets.e-food.gr/api-js-sdk/api-js-sdk.min.v0.0.32.js")}}"
          defer
          type="f7cd9a4680c6ccdb45251385-text/javascript"
        ></script>

        <script
          src="{{asset("efood-assets/assets/staticassets.e-food.gr/component-address/component-address.min.v3.1.0.js")}}"
          type="f7cd9a4680c6ccdb45251385-text/javascript"
        ></script>

        <script
          src="{{asset("efood-assets/assets/staticassets.e-food.gr/string-match-utils/string-match-utils.window.min.v1.0.1.js")}}"
          type="f7cd9a4680c6ccdb45251385-text/javascript"
        ></script>
        <div style="background: #f7f7f7">
          <section>
            <div class="homepage-hero-wrapper position-absolute w-100 bg-white">
              <div class="col-lg-6 px-0 pl-lg-5 pr-lg-0 ml-auto h-100">
                <div class="homepage-hero bg-grey h-100 d-flex align-items-end">
                  <div class="coca-cola-icons d-none d-lg-block ml-7 mb-7">
                    <img
                      alt="Coca-Cola Taste the feeling"
                      width="80"
                      height="75"
                      class="lazyload"
                      data-src="efood-assets/site-assets/img/coca/taste_the_feeling_N@3x.png"
                      data-
                      srcset="
                        /cdn-cgi/image/w=80,h=75,fit=cover,q=100,f=auto/site-assets/img/coca/taste_the_feeling_N@3x.png 80w
                      "
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="container">
              
              <div class="row">
                <div class="col-lg-6">
                  <div class="homepage-address-search-wrapper">
                    <div
                      class="homepage-address-search-inner w-100 h-50 px-7 pt-7 pb-11 bg-white rounded px-lg-0"
                    >
                      <div class="mb-5 mb-lg-11">
                        <h2
                          class="homepage-address-search-greeting text-center text-lg-left mb-lg-3"
                        >
                          <!-- Παράγγειλε -->
                          {{-- Order --}}
                          Παραγγείλτε Λουλούδια 
                          {{-- <div class="rolling-food--wrapper">
                            <div class="rolling-food-list">
                              <span> Amaryllis </span>
                              <span> Lilies </span>
                            </div>
                          </div> --}}

                          <br />
                          <span class="display-inline"> Online σε 1 λεπτό </span>

                          {{-- <span class="display-inline"> online in 1' </span> --}}
                        </h2>

                        <p
                          class="h3 text-muted font-weight-normal d-none d-lg-block"
                        >
                          15.000 stores, 90 cities. Pay with card, cash or
                          PayPal
                        </p>
                      </div>

                      <div>
                        <div
                          id="address-form-component"
                          class="address-search"
                        >
                          <div class="address-form-component-overlay"></div>
                          <div class="box-shadow rounded position-relative">
                            <div
                              class="address-form-component-outer d-flex align-items-center flex-column flex-lg-row bg-white pl-md-9 p-3 pl-5 rounded position-relative"
                            >
                              <div
                                class="d-flex align-items-center w-100 address-form-component-inner"
                              >
                                <i
                                  class="fas fa-circle-notch text-muted fa-spin text-muted address-form-component-icon-loading"
                                ></i>
                                <span
                                  id="scope"
                                  class="address-form-component-scope-icon"
                                ></span>
                                <span
                                  id="friendly_name"
                                  class="address-form-component-scope-friendly-name"
                                ></span>
                                {{-- <input
                                  type="text"
                                  class="form-control address-form-component-search-input border-0 pl-2 text-truncate autocomplete_txt"
                                  placeholder="Enter your address"
                                /> --}}
                                <input
                                  type="text" data-field-name="city_name"
                                  class="form-control autocomplete_txt "
                                  placeholder="Enter your address"
                                  {{-- id="searchAddress" --}}
                                  id="location-input"
                                  autocomplete="off"
                                />
                                
                                <button
                                  type="button"
                                  class="btn btn-link address-form-component-clear-btn px-3 px-md-5 mr-md-5"
                                >
                                  <i class="fas fa-times text-muted"></i>
                                </button>
                                <button
                                  type="button"
                                  class="btn btn-link address-form-component-geolocation-btn px-3 px-sm-5 d-lg-none"
                                >
                                  <i class="fas fa-crosshairs text-muted"></i>
                                </button>
                                <span
                                  class="address-form-component-list-arrow px-3 pr-md-9"
                                  ><i class="fas fa-angle-down"></i
                                ></span>
                              </div>
                              <ul
                                class="box-shadow border-top rounded-bottom list-unstyled position-absolute bg-white w-100 py-5 px-1 px-md-5 address-form-component-list"
                              ></ul>
                              <button
                                type="button"
                                class="btn btn-link text-muted position-absolute m-0 mt-12 pt-5 align-self-start address-form-component-back-to-saved px-0"
                              >
                                <i class="fas fa-arrow-left mr-3"></i
                                ><span
                                  class="small font-weight-bold hover-no-decoration"
                                  >See your addresses
                                </span>
                              </button>
                              <span
                                class="text-muted position-absolute m-0 mt-12 pt-5 align-self-start address-form-component-search-help small"
                              >
                                eg. Dionysou 48, Marousi
                              </span>
                              <div
                                class="d-none d-lg-block col-12 col-lg-auto px-0"
                              >
                              <input type="hidden" name="hidden_state" id="hidden_state">
                              <input type="hidden" name="hidden_region" id="hidden_region">
                                <a href="#popup1"
                                  class="btn btn-primary btn-block btn-lg"
                                  id="orderBtn">
                                  Order now
                                </a>
                              </div>
                            </div>
                            {{-- <button id="popBtn" onclick="togglePopup()">Show Popup</button> --}}

                            <div id="match-list"></div>
                              <div id="popup1" class="overlay">
                                {{-- <form action="{{url('/add-address')}}" method="post">{{ csrf_field() }} --}}
                                <form >
                                <div class="popup">
                                  {{-- <a class="close" id="closePop" href="#">
                                    <div>
                                      &times;
                                    </div>
                                    </a> --}}
                                    <div class="cc-modal-dismiss" style="float: right;">
                                      <a href="#">
                                        <span class="fa-stack fa-lg">
                                          <i class="fas fa-circle fa-stack-2x fa-inverse"></i>
                                          <i class="far fa-times fa-stack-1x"></i>
                                        </span>
                                      </a>
                                    </div>
                                  <div class="row">
                                    <div class="col-md-5" style="padding: 0px; margin:0px; position: relative;top:-10" id="map">
                                      {{-- <iframe style="padding: 0px; margin:0px; border-radius: 5px;" width="100%" height="100%" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=52.70967533219885, -8.020019531250002&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br /> --}}
                                    
                                    </div>
                                    <div class="col-md-7">
                                        <div class="modal-header p-7 d-flex justify-content-between flex-row">
                                          <div class="address-confirm-component-header-wrapper text-center mx-auto">
                                            <h1 class="address-confirm-component-header h2 font-weight-bold"> Address Confirmation </h1>
                                            <p id="popup_map_text" class="address-confirm-component-subheader text-muted" rel="1">Confirm that your address is properly filled</p>
                                          </div>
                                        </div>

                                        <div class="print-error-msg-login">
                                          <ul style="list-style: none;"></ul>
                                          <br>
                                        </div>

                                        <div class="form-group">
                                          <label for="city">City</label>
                                          <select name="city" class="custom-select" id="cities">
                                            <option value="">Afidnes</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="street">Address</label>
                                          <input type="text" name="region" id="regions" class="form-control" max="2" required>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-8">
                                            <div class="form-group">
                                              <label for="city">Zip Code</label>
                                              <input type="text" name="zip_code" class="form-control" id="zip_code" required>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="submit" id="confirmAddressBtn" class="btn btn-primary btn-block btn-lg">Continue</button>

                                    </div>
                                    {{-- col-md-7 --}}

                                  </div>
                                  {{-- -----------------confirm addres script --}}
                                    <script>
                                      $(document).ready(function() {
                                      $("#confirmAddressBtn").click(function(e) {

                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });

                                        e.preventDefault();
                                        var city = $("#cities").val();
                                        console.log(city);
                                        var address = $("#regions").val();
                                        var zip_code = $("#zip_code").val();
                                        console.log(zip_code);
                                        $.ajax({
                                            url: '{{ url('/add-address') }}',
                                            type: 'POST',
                                            data: {
                                                city: city,
                                                region: address,
                                                zipCode:zip_code
                                            },
                                            success: function(data) {
                                              console.log(data);
                                                if ($.isEmptyObject(data.error)) {
                                                    // alert(data.success);
                                                    window.location.href = "{{ url('/match_store')}}";
                                                    
                                                } else {
                                                  console.log(data.error);
                                                  // $("#errorMsg").text(data.error);
                                                    printErrorMsg(data.error);
                                                }
                                            }
                                        });

                                        });
                                    
                                    
                                      function printErrorMsg(msg) {
                                          $(".print-error-msg-login").find("ul").html('');
                                          $(".print-error-msg-login").css('display', 'block');
                                          $.each(msg, function(key, value) {
                                              $(".print-error-msg-login").find("ul").append('<li style="color:red;">' + value + '</li>');
                                          });
                                      }
                                      });
                                    </script>
                                  {{-- end address secript --}}
                                    
                                </div>
                                </form>

                              </div>
                            


                            <script>

  //start google places api
  var searchInput = 'location-input';
 
 $(document).ready(function () {
  var autocomplete;
  autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
   types: ['geocode'],
  //  componentRestrictions: {
  //   country: "Greece"
  //  }
  });
   
  google.maps.event.addListener(autocomplete, 'place_changed', function () {
   var near_place = autocomplete.getPlace();
  });
 });

    //google places api code

                              // var products = {!! json_encode($products->toArray()) !!};
                              //     console.log(products);
                              
                              // start map
      
      // Get location form
                              // var locationForm = document.getElementById("location-form");

                              // Listen for submiot
                              // locationForm.addEventListener("submit", geocode);
                              
                              
                              function geocode(region,loction) {
                                // Prevent actual submit
                                // e.preventDefault();

                                var location = loction;
                                 
                                axios
                                  .get("https://maps.googleapis.com/maps/api/geocode/json", {
                                    params: {
                                      address: location,
                                      key: "AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4",
                                    },
                                  })
                                  .then(function (response) {
                                    // Log full response
                                    console.log(response);
                                    var addressComponents = response.data.results[0].address_components;
                                    for (var i = 0; i < addressComponents.length; i++) {
                                      if (addressComponents[i].types[0] == 'postal_code') {
                                        $("#zip_code").val(addressComponents[i].long_name);
                                        console.log(addressComponents[i].long_name);
                                      }
                                    }
                                    var lat = response.data.results[0].geometry.location.lat;
                                    var lng = response.data.results[0].geometry.location.lng;
                                    
                                    let map;
                                      console.log("in "+lat+" & "+lng);
                                      map = new google.maps.Map(document.getElementById("map"), {
                                        center: { lat: lat, lng: lng },
                                        zoom: location ==='Greece' ? 6 : 15,
                                      });
                                      new google.maps.Marker({
                                          position:{ lat: lat, lng: lng },
                                          map:map,
                                          title:region !='' ? region : location
                                      });
                                    
                                  })
                                  .catch(function (error) {
                                    console.log(error);
                                  });
                                  
                              }
     
                              $("#cities").change(function () {
                                    var city = this.value;
                                    geocode(city,city);
                                });

                              // end map
                              if( !$("#location-input").val() ) {
                                // $(':input[type="submit"]').prop('disabled', false);
                                // $('#orderBtn').prop('disabled', false);
                                // $("#orderBtn").attr("disabled", true);
                                // $("#orderBtn").attr("href"," ");
                              }else{
                                $("#orderBtn").attr("disabled", false);
                                $("#orderBtn").attr("href","#popup1");
                              }

                              const search = document.getElementById("location-input");
                              const matchList = document.getElementById("match-list");

                              const states = {!! json_encode($cities->toArray()) !!};
                              function checkList(text){
                                if(text.length===5){
                                    matchList.innerHTML = ulHtml;
                                    const ul = document.getElementById("ul");
                                    html =`
                                    <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected" >
                                      <span class="address-form-component-scope-friendly-name">Your address wasn't found? 
                                      <a href="#" id="clickHereBtn" style:"text-decoration: none;"> <b>Click here</b></a></span>
                                    </li>
                                    `;
                                    ul.innerHTML = html;
                                  }
                              }
                              $(document).click(function (e){

                              var container = $("#ul");
                              if (!container.is(e.target) && container.has(e.target).length === 0){

                                container.fadeOut();
                                
                              }
                              });    
                              const searchStates = async searchText =>{
                                  // const states = {!! json_encode($cities->toArray()) !!};
                                  
                                  // console.log(states);
                                  let matches = states.filter(state=>{
                                    const regex = new RegExp(`^${searchText}`,'gi');
                                    return state.city_name.match(regex);
                                  });
                                  if(searchText.length===0){
                                    matches = [];
                                    matchList.innerHTML = '';
                                  }

                                  // console.log(matches);
                                  outputHtml(matches);
                                  // alert('check');
                              }
                              var ulHtml = `<ul class="box-shadow border-top rounded-bottom list-unstyled position-absolute bg-white w-100 py-5 px-1 px-md-5 address-form-component-list" id = "ul" style="display: block;">
                                
                              </ul>`;
                              
                              const outputHtml = matches => {
                                  matchList.innerHTML = ulHtml;
                                  const ul = document.getElementById("ul");
                                if (matches.length>0) {
                                 
                                  var html = matches.map(match =>`
                                  <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected city" id="${match.id}" >
                                    <span class="fa fa-map-marker"></span>
                                    <input type="hidden" name="state" value="${match.country}" class="state"  >
                                    <input type="hidden" name="region" value="${match.city_name}" class="region"  >
                                    <span class="address-form-component-scope-friendly-name">${match.country}, ${match.city_name}</span>
                                  </li>
                                  `).join('');
                                  // console.log(html);
                                  html +=`
                                  <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected city" >
                                    
                                    <span class="address-form-component-scope-friendly-name">Your address wasn't found? <b>Click here</b></span>
                                  </li>
                                  `;
                                  ul.innerHTML = html;
                                }else{
                                  html =`
                                  <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected" >
                                    <span class="address-form-component-scope-friendly-name">Your address wasn't found? <a href="#popup1" id="clickHereBtn" style:"text-decoration: none;"> <b>Click here</b></a></span>
                                  </li>
                                  `;
                                  ul.innerHTML = html;
                                }

                                
                              }
                              
                              function closePop() {
                                $("#zip_code").val('');
                              }
                              $(document).on('click','#closePop',closePop);
                              
                              $(document).on('click','#orderBtn',orderBtnFunction);
                              $(document).on('click','#clickHereBtn',clickHereFunction);
                              function clickHereFunction() {
                                var address = 'Greece';
                                getAddreess(address);
                              }
                              function orderBtnFunction() {
                                var address = $('#location-input').val();
                                
                                getAddreess(address);
                              }
                              function getAddreess(address){
                                // alert('slam');
                                const cities = document.getElementById("cities");
                                // const regions = document.getElementById("regions");
                                
                                const citiesHtml = states.map(match =>`
                                     <option value="${match.city_name}">${match.city_name}</option>
                                  
                                  `).join('');
                                // $.each( arr, function( index, value ){
                                //     sum += value;
                                // });
                                
                                // var getState = $('#hidden_state').val();
                                // var getRegion = $('#hidden_region').val();
                                 
                                var splitAddress = address.split(",");
                                var getRegion = splitAddress[0];
                                var getState = splitAddress[1];
                                console.log(splitAddress);


                                // $("#regions").val(getRegion);
                                // region_dropdown = `<option value='${getRegion}' selected >${getRegion}</option>`;
                                $("#regions").val(getRegion);
                                
                                var state_dropdown = `<option value='${getState}' selected>${getState}</option>`;
                                cities.innerHTML = state_dropdown;
                                var seleted;
                                // var state_dropdown = "<option value='' selected disabled>Select</option>";
                                geocode(getRegion,address);

                                

                                // $.each(states, function( i, val ) {
                                //   if (val.city_name === getRegion) {
                                //     seleted = "selected";
                                //   } else {
                                //     seleted = "";
                                //   }
                                //   state_dropdown += `<option value='${val.city_name}' ${seleted}>${val.city_name}</option>`;
                                // });

                                // cities.innerHTML = state_dropdown;

                                console.log(address);
                                $('#location-input').val('');
                              }

                              function cityInfo(){
                                // alert('check');
                                var text = $(this).text();
                                var state = $(this).find('.state').val();
                                var region = $(this).find('.region').val();

                                console.log(state);
                                console.log(region);
                              

                                $("#orderBtn").attr("disabled", false);
                                $("#orderBtn").attr("href","#popup1");
                                // $('#number').val(city);
                                var trimStr = $.trim(text);
                                $("#searchAddress").val(trimStr);
                                $("#hidden_state").val(state);
                                $("#hidden_region").val(region);

                                $('#ul').hide();
                                
                                // alert(text);
                              }
                              
                              search.addEventListener("input", () => checkList(search.value));
                              
                              // search.addEventListener("input", () => searchStates(search.value));
                              $(document).on('click','.city',cityInfo)
                            </script>
                            <div
                              class="position-absolute w-100 address-form-component-alert alert alert-warning border-0 rounded py-6 px-9"
                              role="alert"
                            >
                              Follow the form: Street - Number - City, e.g.
                              Michalakopoulou 64, Athens
                              <!-- Ακολούθησε τη μορφή: Οδός - Αριθμός - Πόλη, π.χ.
                              Μιχαλακοπούλου 64, Αθήνα -->
                            </div>
                          </div>
                          <a href="#popup1"
                            class="btn btn-primary btn-block btn-lg d-lg-none"
                          >
                            Order now
                          </a>
                        {{-- </div> --}}
                        </div>
                        <div class="social-login mt-8 row d-lg-none">
                          <div class="col-12 mb-6">
                            <div class="text-muted">
                              <!-- Σύνδεση ή δημιουργία λογαριασμού -->
                              Login or create an account
                            </div>
                          </div>
                          {{-- <div class="col-6 pr-2">
                            <div class="facebook-login-wrapper">
                              <button
                                class="btn btn-primary btn-block btn-lg mb-3 text-white button-facebook-login facebook_login"
                                type="button"
                              >
                                <img
                                  class="button-google-login-icon"
                                  src="efood-assets/site-assets/img/icons/Facebook.png"
                                  width="20"
                                  height="20"
                                  alt="Facebook login"
                                  style="left: 12px"
                                />
                                Facebook
                              </button>
                              <button
                                class="btn btn-primary btn-block btn-lg mb-3 text-white button-facebook-login d-none facebook_reprompt mt-0"
                                type="button"
                              >
                                <img
                                  class="button-google-login-icon"
                                  src="efood-assets/site-assets/img/icons/Facebook.png"
                                  width="20"
                                  height="20"
                                  alt="Facebook login"
                                  style="left: 6px"
                                />
                                Repetition
                              </button>
                            </div>
                          </div> --}}
                                                    <!-- testModal -->
                          <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-199" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    ...
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          {{-- end testModal --}}


                          {{-- <div class="col-6 pl-2">
                            <div class="google-login-wrapper">
                              <button
                                class="btn btn-primary btn-lg btn-block mb-3 button-google-login google_login"
                                type="button"
                              >
                                <img
                                  class="button-google-login-icon"
                                  src="efood-assets/site-assets/img/icons/Google.png"
                                  width="20"
                                  height="20"
                                  alt="Google login"
                                  style="left: 12px"
                                />
                                <span>Google</span>
                              </button>
                            </div>
                          </div> --}}
                          <div class="col-12 mt-4">
                            <div class="social-login-error">
                              <div class="alert alert-warning"></div>
                            </div>
                            <a
                              href="#popup2"
                              class="btn btn-secondary bg-white btn-block btn-lg mt-2 text-truncate position-relative"
                              title="Login / Register by email"
                            >
                              <img
                                class="button-google-login-icon"
                                src="efood-assets/site-assets/img/icons/Email.png"
                                width="20"
                                height="20"
                                alt="Email login"
                                style="left: 12px"
                              />
                              Login / Register by email
                            </a>
                          </div>
                          <div class="col-12">
                            <div
                              class="text-muted mt-5 signup-popover"
                              data-content="<a href=javascript:; class='float-right font-weight-bold ml-4' onclick=$(this).closest('.popover').popover('hide'); style='line-height:12px; font-size:16px;'>&times;</a> Στο email που χρησιμοποιείς κατά την εγγραφή σου, θα σου στέλνουμε την επιβεβαίωση των παραγγελιών σου, τις ενημερώσεις για τις αποκλειστικές προσφορές που εξασφαλίζουμε για εσένα, αλλά και τα νέα καταστήματα που μπαίνουν στο efood και σε εξυπηρετούν. Φυσικά θα μπορέσεις να κάνεις διαγραφή από τη λίστα μας οποιαδήποτε στιγμή. Για παραπάνω πληροφορίες μπορείς να δεις την πολιτική απορρήτου μας."
                              data-placement="bottom"
                              data-html="true"
                            >
                              <u class="signup_popover">Information</u>
                              for your entry or registration
                            </div>
                            <div class="text-center mt-5">
                              By registering or logging in you agree to <br />
                              <a href="page/tos.html" target="_blank"
                                ><u> Terms of use</u></a
                              >
                              and
                              <a href="page/privacy.html" target="_blank"
                                ><u>Privacy policy</u></a
                              >
                            </div>
                          </div>
                        </div>

                        <template id="listItemTemplate">
                          <li
                            class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded"
                            data-pos="${index}"
                          >
                            <span
                              data-scope="${scope}"
                              data-friendly-name="${friendly_name}"
                            ></span>
                            <span
                              class="address-form-component-scope-icon"
                              data-scope="${scope}"
                            ></span>
                            <span>
                              <span
                                class="address-form-component-scope-friendly-name"
                                data-friendly-name="${friendly_name}"
                              ></span>
                              <span>${description}</span>
                            </span>
                          </li>
                        </template>

                        <template id="listItemHelpTemplate">
                          <li
                            class="p-5 text-muted address-form-component-list-item address-form-component-list-item-new-address cant-select"
                          >
                            <span
                              ><i class="fas fa-plus-circle mr-3 ml-2"></i>Add a
                              new address</span
                            >
                          </li>
                          <li
                            class="p-5 text-muted address-form-component-list-item address-form-component-list-item-manual-address cant-select"
                          >
                            <span class="text-muted"
                              >Can't you see your address?</span
                            >
                            <strong>Click here</strong>
                          </li>
                        </template>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          {{-- <div class="coca-cola-icons d-lg-none py-9 text-center">
            <img
              alt="Coca-Cola Taste the feeling"
              width="87"
              height="81"
              class="lazyload"
              data-src="efood-assets/site-assets/img/coca/coca-cola-logo-positive@3x.png"
              data-
              srcset="
                /cdn-cgi/image/w=87,h=81,fit=cover,q=100,f=auto/site-assets/img/coca/coca-cola-logo-positive@3x.png 87w
              "
            />
          </div> --}}
          <section class="d-none d-lg-block homepage-offers">
            <div class="container">
              <h2 class="h1 mb-7">
                {{-- <span
                  class="badge text-green"
                  style="background: #d1eedd; font-size: 26px"
                  >15.000</span
                > --}}
                Αποστολή σε όλη την Ελλάδα
                {{-- offers only for you --}}
              </h2>

              <div class="row">
                @foreach ($products as $product)
                    
                <div
                  class="homepage-fixed-offer col-3"
                  data-restaurant_id="{{$product->id}}"
                >
                  <div class="mb-5">
                    {{-- @foreach ($florists as $florist)
                        
                    @if ($florist->id==$product->florist_id) --}}
                        
                    
                    <a
                      href="#"
                      class="hover-no-decoration"
                    >
                    <img src="uploads/products/{{$product->image}}" width="87" height="81" class="rounded lazyload" alt="flower image" />
                      
                    </a>
                    {{-- @endif --}}
                    {{-- @endforeach --}}
                  </div>

                  <a
                    href="delivery/menu/pizza-fan.html"
                    class="hover-no-decoration"
                  >
                    <div class="d-flex justify-content-between">
                      <h3 class="pr-5">{{$product->name}}</h3>
                      <span class="small flex-shrink-0">
                        <i
                          class="fas fa-shopping-basket mr-3 text-muted fa-sm"
                        ></i>
                        {{$product->price}}€
                      </span>
                    </div>

                    <p class="text-muted">{{$product->description}}</p>
                  </a>
                </div>
                @endforeach
                {{-- <div
                  class="homepage-fixed-offer col-3"
                  data-restaurant_id="834092"
                >
                  <div class="mb-5">
                    <a
                      href="delivery/menu/the-big-bad-wolf.html"
                      class="hover-no-decoration"
                    >
                      <img
                        alt="προσφορά The Big Bad Wolf - efood"
                        width="87"
                        height="81"
                        class="rounded lazyload"
                        data-src="efood-assets/site-assets/img/welcome/offers/thebigbadwolf.jpg"
                        data-
                        srcset="
                          /cdn-cgi/image/w=268,h=168,fit=cover,q=100,f=auto/site-assets/img/welcome/offers/thebigbadwolf.jpg 268w,
                          /cdn-cgi/image/w=208,h=130,fit=cover,q=100,f=auto/site-assets/img/welcome/offers/thebigbadwolf.jpg 208w
                        "
                        loading="lazy"
                        sizes="(min-width: 1200px) 268px, 208px"
                      />
                    </a>
                  </div>

                  <a
                    href="delivery/menu/the-big-bad-wolf.html"
                    class="hover-no-decoration"
                  >
                    <div class="d-flex justify-content-between">
                      <h3 class="pr-5">The Big Bad Wolf</h3>
                      <span class="small flex-shrink-0">
                        <i
                          class="fas fa-shopping-basket mr-3 text-muted fa-sm"
                        ></i>
                        10,99€
                      </span>
                    </div>

                    <p class="text-muted">
                      8 Καλαμάκια της επιλογής σας με πιτάκια
                    </p>
                  </a>
                </div> --}}
                
                
              </div>
            </div>
          </section>
          <section class="homepage-see-more-slider-wrapper">
            <div class="container">
              <div class="d-flex justify-content-between">
                <h2 class="h1 mb-7">Partner stores</h2>
                <div
                  class="homepage-see-more-slider-controls d-none d-md-flex"
                ></div>
              </div>

              <div class="homepage-see-more-slider row flex-nowrap">
                @foreach ($florists as $florist)
                    
                <div class="col-3">
                  <div class="mb-5">
                    <a href="{{url('/store/'.$florist->slug)}}">
                      <picture class="text-center">
                        <!--[if IE 9]>
                                    <audio><![endif]-->
                        {{-- <source
                          type="image/webp"
                          data-srcset="https://static.e-food.gr/cdn-cgi/image/w=268,h=168,fit=cover,q=100,f=auto/big-chains/BigChains_Aroma-caffe.jpg"
                        />
                        <source
                          type="image/jpeg"
                          data-srcset="https://static.e-food.gr/cdn-cgi/image/w=268,h=168,fit=cover,q=100,f=auto/big-chains/BigChains_Aroma-caffe.jpg"
                        /> --}}
                        <!--[if IE 9]></audio><![endif]-->
                        {{-- <img
                          class="rounded lazyload"
                          loading="lazy"
                          data-src="https://static.e-food.gr/cdn-cgi/image/w=268,h=168,fit=cover,q=100,f=auto/big-chains/BigChains_Aroma-caffe.jpg"
                          alt="Aroma caffe"
                          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAQAAAA3fa6RAAAADklEQVR42mNkAANGCAUAACMAA2w/AMgAAAAASUVORK5CYII="
                        /> --}}
                        <img src="uploads/products/{{$florist->image}}" class="rounded lazyload" loading="lazy" alt="store image">
                      </picture>
                    </a>
                  </div>

                  <a
                    href="{{url('/store/'.$florist->slug)}}"
                    class="hover-no-decoration"
                  >
                    <h3 class="pr-5">{{$florist->name}}</h3>

                    <p class="text-muted">{{$florist->city}}</p>
                  </a>
                </div>
                @endforeach
                
                {{-- <div class="col-3">
                  <div class="mb-5">
                    <a href="delivery/menu/bullseye.html">
                      <picture class="text-center">
                        <!--[if IE 9]>
                                    <audio><![endif]-->
                        <source
                          type="image/webp"
                          data-srcset="https://static.e-food.gr/cdn-cgi/image/w=268,h=168,fit=cover,q=100,f=auto/big-chains/BigChains_-Bullseye.jpg"
                        />
                        <source
                          type="image/jpeg"
                          data-srcset="https://static.e-food.gr/cdn-cgi/image/w=268,h=168,fit=cover,q=100,f=auto/big-chains/BigChains_-Bullseye.jpg"
                        />
                        <!--[if IE 9]></audio><![endif]-->
                        <img
                          class="rounded lazyload"
                          loading="lazy"
                          data-src="https://static.e-food.gr/cdn-cgi/image/w=268,h=168,fit=cover,q=100,f=auto/big-chains/BigChains_-Bullseye.jpg"
                          alt="Bullseye"
                          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAQAAAA3fa6RAAAADklEQVR42mNkAANGCAUAACMAA2w/AMgAAAAASUVORK5CYII="
                        />
                      </picture>
                    </a>
                  </div>

                  <a
                    href="delivery/menu/bullseye.html"
                    class="hover-no-decoration"
                  >
                    <h3 class="pr-5">Bullseye</h3>

                    <p class="text-muted">Burgers</p>
                  </a>
                </div> --}}
              </div>
            </div>
          </section>
          <section class="container px-0 px-sm-5 homepage-cuisines-container">
            <div class="row m-0 pt-5 pb-7 py-lg-0 bg-white">
              <div class="col-12 col-lg-6 px-lg-0">
                <div class="homepage-kitchens"></div>
              </div>

              <div
                class="col-12 col-lg-6 d-flex justify-content-center px-0 homepage-cuisines-description"
              >
                <h2 class="d-none d-lg-block display-1 font-weight-bold m-0">
                  What are you in the mood for today?
                </h2>

                <p class="d-none d-lg-block text-muted mt-5 mb-0">
                  Are you want flowers? eBloom is here for you. Find anything you crave and order by choosing between 15.000 stores in 90 cities.  
                </p>

                <p class="d-none d-lg-block text-muted m-0">
                  You know this already - eBloom is delivery in Greece!
                </p>

                <h3 class="px-5 px-lg-0 mt-7 mb-0">
                  Choose between {{count($types)}} flowers types
                </h3>

                <ul class="px-5 px-lg-0 text-muted list-unstyled mt-3 mb-0">
                  @foreach ($types as $type)
                      
                  
                  <li class="d-inline d-lg-inline">
                    <a
                      href="kafes-delivery.html"
                      class="text-muted text-nowrap"
                    >
                      {{$type->name}}
                    </a>

                    •
                  </li>
                  @endforeach
                  {{-- <li class="d-inline d-lg-inline">
                    <a
                      href="souvlakia-delivery.html"
                      class="text-muted text-nowrap"
                    >
                      Σουβλάκια
                    </a>

                    •
                  </li>
                  
                  
                  <li class="d-none homepage-cuisines-hidden d-lg-inline">
                    <a
                      href="mexikaniko-delivery.html"
                      class="text-muted text-nowrap"
                    >
                      Μεξικάνικη
                    </a>

                    •
                  </li> --}}
                  
                </ul>

                <div class="px-5 px-lg-0 text-muted">
                  {{-- <button
                    id="homepage-cuisines-see-more"
                    class="p-0 btn btn-link font-weight-bold text-muted d-lg-none"
                  >
                    See more
                  </button> --}}
                </div>
              </div>
            </div>
          </section>
          {{-- <section class="homepage-shops bg-light py-lg-11">
            <div class="container py-lg-11">
              <div class="d-flex justify-content-between">
                <h2 class="h1 mb-7">
                  <span
                    class="badge text-green"
                    style="background: #d1eedd; font-size: 26px"
                  >
                    New
                  </span>

                  <span class="d-block d-md-inline-block mt-3 mt-md-0"
                    >stores</span
                  >
                </h2>
                <div
                  class="homepage-new-shops-slider-controlls d-none d-md-flex"
                ></div>
                <div
                  class="homepage-new-shops-slider-controls-mweb d-flex d-md-none"
                ></div>
              </div>

              <div class="homepage-new-shops-slider d-none d-md-block">
                <ul class="list-unstyled">
                  @foreach ($florists as $florist)
                      
                  <li class="mb-3">
                    <a href="delivery/glyfada/deli-market.html">
                      {{$florist->name}}
                    </a>
                  </li>
                  @endforeach
                </ul>
                <ul class="list-unstyled">
                  <li class="mb-3">
                    <a href="delivery/rodos/north-bakery.html">
                      North Bakery
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="delivery/volos/l-chroni.html"> L` Chroni </a>
                  </li>
                  <li class="mb-3">
                    <a href="delivery/peiraias/artoanakalypsi.html">
                      Αρτο...ανακάλυψη
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="delivery/kifisia/arch-fresh-healthy.html">
                      Arch fresh & healthy
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="burgerfest.html"> Burger Fest x Ψωμί & Αλάτι </a>
                  </li>
                  <li class="mb-3">
                    <a href="delivery/irakleio-kriti/kreopoleio-aggelakis.html">
                      Κρεοπωλείο Αγγελάκης
                    </a>
                  </li>
                </ul>
         
              </div>
            </div>
          </section> --}}
          <section class="homepage-shops bg-light py-lg-11">
            <div class="container py-lg-11">
              <div class="d-flex justify-content-between">
                <h2 class="h1 mb-7">
                  <span
                    class="badge text-green"
                    style="background: #d1eedd; font-size: 26px"
                  >
                    New
                  </span>

                  <span class="d-block d-md-inline-block mt-3 mt-md-0"
                    >stores</span
                  >
                </h2>
                <div
                  class="homepage-new-shops-slider-controlls d-none d-md-flex"
                ></div>
                <div
                  class="homepage-new-shops-slider-controls-mweb d-flex d-md-none"
                ></div>
              </div>

              <div class="homepage-new-shops-slider d-none d-md-block">
                <ul class="list-unstyled">
                  @foreach ($florists as $florist)
                      
                  <li class="mb-3">
                    <a href="delivery/glyfada/deli-market.html">
                      {{$florist->name}}
                    </a>
                  </li>
                  @endforeach
                </ul>
                {{-- <ul class="list-unstyled">
                  <li class="mb-3">
                    <a
                      href="delivery/thessaloniki-analipsi/fylladoros-cheiropoiiti-mpoygatsa.html"
                    >
                      Φυλλαδόρος χειροποιήτη μπουγάτσα
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="delivery/serres/sklavenitis-supermarket.html">
                      ΣΚΛΑΒΕΝΙΤΗΣ SUPERMARKET
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="delivery/korydallos/little-village.html">
                      Little village
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="delivery/peristeri/gigifiogos.html">
                      Gigifioggos
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="delivery/ampelokipoi/everest-4423819.html">
                      everest
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="delivery/eksarcheia/efood-market.html">
                      efood market
                    </a>
                  </li>
                </ul> --}}
                
              </div>

              <div class="homepage-new-shops-slider-mweb d-block d-md-none">
                <ul class="list-unstyled">
                  
                  {{-- @foreach ($florists as $key=>$florist)
                  <li class="mb-3 homepage-areas-list-item-mweb">
                    <a href="delivery/glyfada/deli-market.html">
                      {{$florist->name}}
                    </a>
                  </li>
                  @endforeach --}}
                  @for ($i = 0; $i < count($florists); $i++)
                    @if ($i==2)
                        @break
                    @endif
                  <li class="mb-3 homepage-areas-list-item-mweb">
                    <a href="delivery/glyfada/deli-market.html">
                      {{$florists[$i]->name}}
                    </a>
                    
                  </li>
                  @endfor
                </ul>
                
                <ul class="list-unstyled">
                  @for ($i = 2; $i < count($florists); $i++)
                  @if ($i==4)
                        @break
                    @endif
                  <li class="mb-3 homepage-areas-list-item-mweb">
                    <a href="delivery/glyfada/deli-market.html">
                      {{$florists[$i]->name}}
                    </a>
                  </li>
                  @endfor
                </ul>
                <ul class="list-unstyled">
                  @for ($i = 4; $i < count($florists); $i++)
                  <li class="mb-3 homepage-areas-list-item-mweb">
                    <a href="delivery/glyfada/deli-market.html">
                      {{$florists[$i]->name}}
                    </a>
                  </li>
                  @endfor
                </ul>
              </div>
            </div>
          </section>
          <section class="homepage-areas bg-white">
            <div class="container">
              <h3 class="h1">
                <a href="delivery.html"> eBloom in every area </a>
              </h3>

              <div class="mt-7">
                <div id="accordion">
                  <div>
                    <h3
                      class="h3 px-0 py-5 border-bottom mb-0 d-block text-left areas-collapse-item"
                      data-toggle="collapse"
                      data-target="#collapse-area-collapse-0"
                      aria-expanded="false"
                      aria-controls="collapse-area-collapse-0"
                      id="heading-area-collapse-0"
                    >
                      <small>
                        <i class="fa fa-chevron-down text-muted"></i>
                      </small>

                      <a
                        href="delivery/athina.html"
                        class="ml-3 font-weight-bold areas-collapse-item-link"
                      >
                        Athina
                      </a>
                    </h3>

                    <div
                      id="collapse-area-collapse-0"
                      class="collapse"
                      aria-labelledby="heading-area-collapse-0"
                      data-parent="#accordion"
                    >
                      <div class="card-body">
                        <ul class="homepage-subareas row list-unstyled w-100">
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/agia-barbara.html"
                              >Αγία Βαρβάρα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/agia-paraskeyi.html"
                              >Αγία Παρασκευή</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/agioi-anarguroi.html"
                              >Άγιοι Ανάργυροι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/agios-dimitrios.html"
                              >Άγιος Δημήτριος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/agios-artemios.html"
                              >Άγιος Αρτέμιος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/agios-eleytherios.html"
                              >Άγιος Ελευθέριος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/agios-loykas.html"
                              >Άγιος Λουκάς</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/agios-panteleimonas.html"
                              >Άγιος Παντελεήμονας</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/akadimia.html"
                              >Ακαδημία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/akadimia-platonos.html"
                              >Ακαδημία Πλάτωνος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/ampelokipoi.html"
                              >Αμπελόκηποι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/anafiotika.html"
                              >Αναφιώτικα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/ano-kypseli.html"
                              >Άνω Κυψέλη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/anw-pathsia.html"
                              >Άνω Πατήσια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/petralona.html"
                              >Άνω Πετράλωνα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/botanikos.html"
                              >Βοτανικός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/girokomeio.html"
                              >Γηροκομείο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/gazi.html"
                              >Γκάζι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/gyzi.html"
                              >Γκύζη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/goyva.html"
                              >Γούβα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/goudi.html"
                              >Γουδί</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/dexameni.html"
                              >Δεξαμενή</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/ellinoroson.html"
                              >Ελληνορώσων</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/exarheia.html"
                              >Εξάρχεια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/erythros-stayros.html"
                              >Ερυθρός Σταυρός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/thiseio.html"
                              >Θησείο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thymarakia.html"
                              >Θυμαράκια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/katw-pathsia.html"
                              >Κάτω Πατήσια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/katw-petralwna.html"
                              >Κάτω Πετράλωνα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/kerameikos.html"
                              >Κεραμεικός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/klonaridoy.html"
                              >Κλωναρίδου</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/kolokynthoy.html"
                              >Κολοκυνθού</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/kolonaki.html"
                              >Κολωνάκι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/kolonos.html"
                              >Κολωνός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/koukaki.html"
                              >Κουκάκι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/kypriadoy.html"
                              >Κυπριάδου</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/kypseli.html"
                              >Κυψέλη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/lofos-skoyze.html"
                              >Λόφος Σκουζέ</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/lykavhtos.html"
                              >Λυκαβηττός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/makrygiannh.html"
                              >Μακρυγιάννη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/metaxourgeio.html"
                              >Μεταξουργείο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/mets.html"
                              >Μετς</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/monasthraki.html"
                              >Μοναστηράκι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/mouseio.html"
                              >Αρχαιολογικό Μουσείο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/nea-kypseli.html"
                              >Νέα Κυψέλη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/nea-filotheh.html"
                              >Νέα Φιλοθέη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/neapoli.html"
                              >Νεάπολη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/pagrati.html"
                              >Παγκράτι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/patisia.html"
                              >Πατήσια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/pedion-areos.html"
                              >Πεδίον Άρεως</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/plaka.html"
                              >Πλάκα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/plateia-amerikis.html"
                              >Πλατεία Αμερικής</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/plateia-vathis.html"
                              >Πλατεία Βάθης</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/plateia-koliatsoy.html"
                              >Πλατεία Κολιάτσου</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/plateia-mavili.html"
                              >Πλατεία Μαβίλη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/polugono.html"
                              >Πολύγωνο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/polytehneio.html"
                              >Πολυτεχνείο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/profitis-daniil.html"
                              >Προφήτης Δανιήλ</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/rizoypolh.html"
                              >Ριζούπολη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/rouf.html"
                              >Ρουφ</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/sepolia.html"
                              >Σεπόλια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/syntagma.html"
                              >Σύνταγμα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/filopappoy.html"
                              >Φιλοπάππου</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/hilton.html"
                              >Χίλτον</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/psuri.html"
                              >Ψυρρή</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/aigalew.html"
                              >Αιγάλεω</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/kalamaki.html"
                              >Άλιμος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/anthousa.html"
                              >Ανθούσα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/anw-liosia.html"
                              >Άνω Λιόσια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/arguroupoli.html"
                              >Αργυρούπολη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/axarnes.html"
                              >Αχαρνές</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/bari.html"
                              >Βάρη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/boula.html"
                              >Βούλα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/bouliagmeni.html"
                              >Βουλιαγμένη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/brilissia.html"
                              >Βριλήσσια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/burwnas.html"
                              >Βύρωνας</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/galatsi.html"
                              >Γαλάτσι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/gerakas.html"
                              >Γέρακας</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/gluka-nera.html"
                              >Γλυκά Νερά</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/glufada.html"
                              >Γλυφάδα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/dafni.html"
                              >Δάφνη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/ekali.html"
                              >Εκάλη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/elliniko.html"
                              >Ελληνικό</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/zefuri.html"
                              >Ζεφύρι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/zwgrafoy.html"
                              >Ζωγράφου</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/ilioupoli.html"
                              >Ηλιούπολη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/neo-irakleio.html"
                              >Ηράκλειο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/ilion.html"
                              >Ίλιον</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/kaisariani.html"
                              >Καισαριανή</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/kallithea.html"
                              >Καλλιθέα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/kamatero.html"
                              >Καματερό</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/kifisia.html"
                              >Κηφισιά</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/korudallos.html"
                              >Κορυδαλλός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/lukobrusi.html"
                              >Λυκόβρυση</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/marousi.html"
                              >Μαρούσι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/melissia.html"
                              >Μελίσσια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/metamorfwsi.html"
                              >Μεταμόρφωση</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/mosxato.html"
                              >Μοσχάτο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/nea-eruthraia.html"
                              >Νέα Ερυθραία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/nea-iwnia.html"
                              >Νέα Ιωνία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/nea-penteli.html"
                              >Νέα Πεντέλη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/nea-smurni.html"
                              >Νέα Σμύρνη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/nea-filadelfeia.html"
                              >Νέα Φιλαδέλφεια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/nea-xalkidona.html"
                              >Νέα Χαλκηδόνα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/psyxiko.html"
                              >Νέο Ψυχικό</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/neos-kosmos.html"
                              >Νέος Κόσμος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/fix.html"
                              >Φιξ</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/palaio-faliro.html"
                              >Παλαιό Φάληρο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/pallini.html"
                              >Παλλήνη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/papagou.html"
                              >Παπάγου</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/penteli.html"
                              >Πεντέλη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/peristeri.html"
                              >Περιστέρι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/petroupoli.html"
                              >Πετρούπολη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/peuki.html"
                              >Πεύκη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/tauros.html"
                              >Ταύρος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/umittos.html"
                              >Υμηττός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/filothei.html"
                              >Φιλοθέη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/xaidari.html"
                              >Χαϊδάρι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/xalandri.html"
                              >Χαλάνδρι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/xolargos.html"
                              >Χολαργός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/palaio-psuxiko.html"
                              >Ψυχικό</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/kapandriti.html"
                              >Καπανδρίτι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/stathmos-larisis.html"
                              >Σταθμός Λαρίσης</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/alsos-ilision.html"
                              >Άλσος Ιλισίων</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/omonoia.html"
                              >Ομόνοια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/lamprini.html"
                              >Λαμπρινή</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/rigillis.html"
                              >Ρηγίλλης</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/plateia-klaythmonos.html"
                              >Πλατεία Κλαυθμώνος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/treis-gefyres.html"
                              >Τρεις Γέφυρες</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/plateia-agioy-georgioy.html"
                              >Πλατεία Αγίου Γεωργίου</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/ilisia.html"
                              >Ιλίσια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/athina-plateia-kaniggos.html"
                              >Πλατεία Κάνιγγος</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h3
                      class="h3 px-0 py-5 border-bottom mb-0 d-block text-left areas-collapse-item"
                      data-toggle="collapse"
                      data-target="#collapse-area-collapse-1"
                      aria-expanded="false"
                      aria-controls="collapse-area-collapse-1"
                      id="heading-area-collapse-1"
                    >
                      <small>
                        <i class="fa fa-chevron-down text-muted"></i>
                      </small>

                      <a
                        href="delivery/thessaloniki.html"
                        class="ml-3 font-weight-bold areas-collapse-item-link"
                      >
                        Thessaloniki
                      </a>
                    </h3>

                    <div
                      id="collapse-area-collapse-1"
                      class="collapse"
                      aria-labelledby="heading-area-collapse-1"
                      data-parent="#accordion"
                    >
                      <div class="card-body">
                        <ul class="homepage-subareas row list-unstyled w-100">
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-agia-triada.html"
                              >Αγία Τριάδα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-agios-paylos.html"
                              >Άγιος Παύλος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-ampelokipoi.html"
                              >Αμπελόκηποι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-asvestohori.html"
                              >Ασβεστοχώρι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-diavata.html"
                              >Διαβατά</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-eleytherio-kordelio.html"
                              >Ελευθέριο Κορδελιό</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-exohi.html"
                              >Εξοχή</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-epanomi.html"
                              >Επανομή</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-eykarpia.html"
                              >Ευκαρπία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-eyosmos.html"
                              >Εύοσμος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-thermi.html"
                              >Θέρμη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-nea-raidestos.html"
                              >Νέα Ραιδεστός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-neo-rysio.html"
                              >Νέο Ρύσιο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-tagarades.html"
                              >Ταγαράδες</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-triadi.html"
                              >Τριάδι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-40-ekklisies.html"
                              >40 Εκκλησιές</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/agia-triada-faliroy.html"
                              >Αγία Τριάδα Φαλήρου</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-agios-fanoyrios.html"
                              >Άγιος Φανούριος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-analipsi.html"
                              >Ανάληψη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-ano-poli.html"
                              >Άνω Πόλη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-ano-toympa.html"
                              >Άνω Τούμπα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-aristoteloys.html"
                              >Αριστοτέλους</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-vardaris.html"
                              >Βαρδάρης</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-kato-toympa.html"
                              >Κάτω Τούμπα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki.html"
                              >Κέντρο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-ladadika.html"
                              >Λαδάδικα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-lahanokipoi.html"
                              >Λαχανόκηποι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-limani.html"
                              >Λιμάνι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-nea-elvetia.html"
                              >Νέα Ελβετία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-ntepo.html"
                              >Ντεπώ</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-xirokrini.html"
                              >Ξηροκρήνη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-palaia-paralia.html"
                              >Παλαιά Παραλία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-palaios-stathmos.html"
                              >Παλαιός Σταθμός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-rotonta.html"
                              >Ροτόντα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-sfageia.html"
                              >Σφαγεία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-toympa.html"
                              >Τούμπα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-tsaldari.html"
                              >Τσαλδάρη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-faliro.html"
                              >Φάληρο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-harilaoy.html"
                              >Χαριλάου</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-kalamaria.html"
                              >Καλαμαριά</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-kalohori.html"
                              >Καλοχώρι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-kardia.html"
                              >Καρδία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-menemeni.html"
                              >Μενεμένη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-mihaniona.html"
                              >Νέα Μηχανιώνα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-nea-magnisia.html"
                              >Νέα Μαγνησία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-neapoli.html"
                              >Νεάπολη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-neoi-epivates.html"
                              >Νέοι Επιβάτες</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-panorama.html"
                              >Πανόραμα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-peraia.html"
                              >Περαία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-plagiari.html"
                              >Πλαγιάρι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-polihni.html"
                              >Πολίχνη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-pylaia.html"
                              >Πυλαία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-retziki.html"
                              >Ρετζίκι</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-sindos.html"
                              >Σίνδος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-stayroypoli.html"
                              >Σταυρούπολη</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-sykies.html"
                              >Συκιές</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-triandria.html"
                              >Τριανδρία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-trilofos.html"
                              >Τρίλοφος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-filyro.html"
                              >Φίλυρο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-hortiatis.html"
                              >Χορτιάτης</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-oraiokastro.html"
                              >Ωραιόκαστρο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-palaiokastro.html"
                              >Παλαιόκαστρο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/koyfalia.html"
                              >Κουφάλια</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/asprovalta.html"
                              >Ασπροβάλτα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-lagkadas.html"
                              >Λαγκαδάς</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-agias-sofias.html"
                              >Αγίας Σοφίας</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki.html"
                              >Ρωμαϊκή Αγορά</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-palia-lahanagora.html"
                              >Παλιά Λαχαναγορά</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/papafeio.html"
                              >Παπάφειο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/ippokrateio.html"
                              >Ιπποκράτειο</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/sidirodromikos-stathmos.html"
                              >Σιδηροδρομικός Σταθμός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/halastra.html"
                              >Χαλάστρα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/nea-malgara.html"
                              >Νέα Μάλγαρα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/kymina.html"
                              >Κύμινα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-drymos.html"
                              >Δρυμός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/halkidona.html"
                              >Χαλκηδόνα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/aerodromio-makedonia.html"
                              >Αεροδρόμιο Μακεδονία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-stayros.html"
                              >Σταυρός</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/liti.html"
                              >Λητή</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-agios-athanasios.html"
                              >Άγιος Αθανάσιος</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/nea-vrasna.html"
                              >Νέα Βρασνά</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/nea-mesimvria.html"
                              >Νέα Μεσημβρία</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a class="text-black" href="delivery/vrasna.html"
                              >Βρασνά</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-prohoma.html"
                              >Πρόχωμα</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-kastanas.html"
                              >Καστανάς</a
                            >
                          </li>
                          <li class="col-6 col-lg-3 mt-3 px-0">
                            <a
                              class="text-black"
                              href="delivery/thessaloniki-nea-madytos.html"
                              >Νέα Μάδυτος</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div>
                      <h3
                        class="h3 px-0 py-5 border-bottom mb-0 d-block text-left areas-collapse-item"
                        data-toggle="collapse"
                        data-target="#collapse-area-collapse-other"
                        aria-expanded="false"
                        aria-controls="collapse-area-collapse-other"
                        id="heading-area-collapse-other"
                      >
                        <small>
                          <i class="fa fa-chevron-down text-muted"></i>
                        </small>

                        <a class="ml-3 font-weight-bold"> Other Areas </a>
                      </h3>

                      <div
                        id="collapse-area-collapse-other"
                        class="collapse"
                        aria-labelledby="heading-area-collapse-other"
                        data-parent="#accordion"
                      >
                        <div class="card-body">
                          <ul class="homepage-subareas row list-unstyled w-100">
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/agiokampos.html"
                                >Αγιόκαμπος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/agios-nikolaos-crete.html"
                                >Άγιος Νικόλαος Κρήτη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/agios-stefanos.html"
                                >Άγιος Στέφανος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/agrinio.html"
                                >Αγρίνιο</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/aigina.html"
                                >Αίγινα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/aigio.html"
                                >Αίγιο</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/alexandreia.html"
                                >Αλεξάνδρεια</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/alexandroupoli.html"
                                >Αλεξανδρούπολη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/amaliada.html"
                                >Αμαλιάδα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/amfilohia.html"
                                >Αμφιλοχία</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/amfissa.html"
                                >Άμφισσα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/anabyssos.html"
                                >Ανάβυσσος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/andros.html"
                                >Άνδρος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/anoiksi.html"
                                >Άνοιξη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/arahova.html"
                                >Αράχωβα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/argithea.html"
                                >Αργιθέα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/argos.html"
                                >Άργος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/aridaia.html"
                                >Αριδαία</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/arta.html"
                                >Άρτα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/artemida.html"
                                >Άρτεμις</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/aspropurgos.html"
                                >Ασπρόπυργος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/astypalaia.html"
                                >Αστυπάλαια</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/aylona.html"
                                >Αυλώνα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/afidnes.html"
                                >Αφίδνες</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/veria.html"
                                >Βέροια</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/vilia.html"
                                >Βίλια</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/volos.html"
                                >Βόλος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/galaxidi.html"
                                >Γαλαξίδι</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/giannitsa.html"
                                >Γιαννιτσά</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/grammatiko.html"
                                >Γραμματικό</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/grevena.html"
                                >Γρεβενά</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/dasamari.html"
                                >Δασαμάρι</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/didymoteiho.html"
                                >Διδυμότειχο</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/dionusos.html"
                                >Διόνυσος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/dioni.html"
                                >Διώνη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/drama.html"
                                >Δράμα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/drosia.html"
                                >Δροσιά</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/edessa.html"
                                >Έδεσσα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/elassona.html"
                                >Ελασσόνα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/elafonisos.html"
                                >Ελαφόνησος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/eleusina.html"
                                >Ελευσίνα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/eyvoia.html"
                                >Εύβοια</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/zakynthos.html"
                                >Ζάκυνθος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/igoymenitsa.html"
                                >Ηγουμενίτσα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/iraklio-crete.html"
                                >Ηράκλειο Κρήτη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/thasos.html"
                                >Θάσος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/thiva.html"
                                >Θήβα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/thrakomakedones.html"
                                >Θρακομακεδόνες</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/ierapetra-crete.html"
                                >Ιεράπετρα Κρήτη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/ithaki-vathy.html"
                                >Ιθάκη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/ikaria.html"
                                >Ικαρία</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/itea.html"
                                >Ιτέα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/ioannina.html"
                                >Ιωάννινα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/kavala.html"
                                >Καβάλα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/kalavryta.html"
                                >Καλάβρυτα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/kalamata.html"
                                >Καλαμάτα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/kalampaka.html"
                                >Καλαμπάκα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/kalybia.html"
                                >Καλύβια Θορικού</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/kalymnos.html"
                                >Κάλυμνος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/karditsa.html"
                                >Καρδίτσα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/karpathos.html"
                                >Κάρπαθος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/karpenisi.html"
                                >Καρπενήσι</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/kastoria.html"
                                >Καστοριά</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/katerini.html"
                                >Κατερίνη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/kato-ahaia.html"
                                >Κάτω Αχαΐα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/keratea.html"
                                >Κερατέα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/kerkira.html"
                                >Κέρκυρα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/kefalonia.html"
                                >Κεφαλονιά</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/kilkis.html"
                                >Κιλκίς</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/kozanh.html"
                                >Κοζάνη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/komotini.html"
                                >Κομοτηνή</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/korinthos.html"
                                >Κόρινθος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/koropi.html"
                                >Κορωπί</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/kryoneri.html"
                                >Κρυονέρι</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/kythira.html"
                                >Κύθηρα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/kythnos.html"
                                >Κύθνος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/kos.html"
                                >Κως</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/lamia.html"
                                >Λαμία</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/larisa.html"
                                >Λάρισα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/layrio.html"
                                >Λαύριο</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/leros.html"
                                >Λέρος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/lesvos.html"
                                >Λέσβος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/leykada.html"
                                >Λευκάδα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/limnos.html"
                                >Λήμνος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/livadia.html"
                                >Λιβαδειά</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/magoyla.html"
                                >Μαγούλα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/malakasa.html"
                                >Μαλακάσα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/mandra.html"
                                >Μάνδρα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/marathonas.html"
                                >Μαραθώνας</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/markopoulo.html"
                                >Μαρκόπουλο</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/megalopoli.html"
                                >Μεγαλόπολη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/megara.html"
                                >Μέγαρα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/mesologgi.html"
                                >Μεσολόγγι</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/metsovo.html"
                                >Μέτσοβο</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/milos.html"
                                >Μήλος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/monemvasia.html"
                                >Μονεμβασιά</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/mykonos.html"
                                >Μύκονος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/naxos.html"
                                >Νάξος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/naoysa.html"
                                >Νάουσα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/naupaktos.html"
                                >Ναύπακτος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/nauplio.html"
                                >Ναύπλιο</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/nea-makri.html"
                                >Νέα Μάκρη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/nea-peramos.html"
                                >Νέα Πέραμος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/neos-voutsas.html"
                                >Νέος Βουτζάς</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/ntrafi.html"
                                >Ντράφι</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/ksanthi.html"
                                >Ξάνθη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/oinoh.html"
                                >Οινόη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/orestiada.html"
                                >Ορεστιάδα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/paiania.html"
                                >Παιανία</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/palaio-faliro.html"
                                >Παλαιό Φάληρο</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/paxoi.html"
                                >Παξοί</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/paralia-ofrynioy.html"
                                >Παραλία Οφρυνίου</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/paramythia.html"
                                >Παραμυθιά</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/parga.html"
                                >Πάργα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/patmos.html"
                                >Πάτμος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/patra.html"
                                >Πάτρα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/peiraias.html"
                                >Πειραιάς</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/pikermi.html"
                                >Πικέρμι</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/platamonas.html"
                                >Πλαταμώνας</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/poros.html"
                                >Πόρος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/porto-rafti.html"
                                >Πόρτο Ράφτη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/preveza.html"
                                >Πρέβεζα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/ptolemaida.html"
                                >Πτολεμαΐδα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/pirgos.html"
                                >Πύργος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/rafina.html"
                                >Ραφήνα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/rethimno.html"
                                >Ρέθυμνο Κρήτη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/rodopoli.html"
                                >Ροδόπολη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/rodos.html"
                                >Ρόδος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/salamina.html"
                                >Σαλαμίνα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/samothraki.html"
                                >Σαμοθράκη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/samos.html"
                                >Σάμος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/santorini.html"
                                >Σαντορίνη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/sarwnida.html"
                                >Σαρωνίδα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/serifos.html"
                                >Σέριφος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/serres.html"
                                >Σέρρες</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/shteia.html"
                                >Σητεία Κρήτη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/skaramagkas.html"
                                >Σκαραμαγκάς</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/skiathos.html"
                                >Σκιάθος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/skopelos.html"
                                >Σκόπελος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/skyros.html"
                                >Σκύρος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/soynio.html"
                                >Σούνιο</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/soyfli.html"
                                >Σουφλί</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/sparti.html"
                                >Σπάρτη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/spata.html"
                                >Σπάτα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/spetses.html"
                                >Σπέτσες</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/stamata.html"
                                >Σταμάτα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/shimatari.html"
                                >Σχηματάρι</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/shinias.html"
                                >Σχινιάς</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/tinos.html"
                                >Τήνος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/trikala.html"
                                >Τρίκαλα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/tripoli.html"
                                >Τρίπολη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/tirnavos.html"
                                >Τύρναβος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/udra.html"
                                >Ύδρα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/farsala.html"
                                >Φάρσαλα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/feres.html"
                                >Φέρες</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/florina.html"
                                >Φλώρινα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/folegandros.html"
                                >Φολέγανδρος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/fyli.html"
                                >Φυλή</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/chalkida.html"
                                >Χαλκίδα</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a
                                class="text-black"
                                href="delivery/polygyros.html"
                                >Χαλκιδική</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/chania.html"
                                >Χανιά Κρήτη</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/chios.html"
                                >Χίος</a
                              >
                            </li>
                            <li class="col-6 col-lg-3 mt-3 px-0">
                              <a class="text-black" href="delivery/oropos.html"
                                >Ωρωπός</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>

      <footer class="position-relative">

        <!-- <div class="mobile-apps-banner-wrapper py-md-11">
          <div class="container px-0 px-lg-5">
            <div class="row my-md-11 mx-0">
              <div
                class="col-lg-6 pt-9 pb-12 py-lg-0 bg-white d-flex justify-content-center mobile-apps-banner-description rounded"
              >
                <h3 class="h1 font-weight-bold mb-0">Κατέβασε το App</h3>

                <p class="h3 text-muted font-weight-normal mb-0 mt-4">
                  Παράγγειλε τώρα από το κινητό σου (iOS ή Android) με τρία απλά
                  βήματα: προσθήκη, καλάθι, αποστολή.
                </p>

                <div class="mt-lg-7">
                  <a
                    target="_blank"
                    rel="nofollow"
                    href="https://app.adjust.com/xg1uld"
                    class="d-inline-block mobile-apps-banner-button mr-3"
                  >
                    <img
                      alt="Install efood on IOS"
                      width="87"
                      height="81"
                      class="lazyload"
                      data-src="/site-assets/img/howitworks/app-store-icon.png"
                      data-
                      srcset="
                        /cdn-cgi/image/w=130,fit=cover,q=100,f=auto/site-assets/img/howitworks/app-store-icon.png 130w,
                        /cdn-cgi/image/w=160,fit=cover,q=100,f=auto/site-assets/img/howitworks/app-store-icon.png 160w
                      "
                      loading="lazy"
                      sizes="(min-width: 992px) 130px, 160px"
                    />
                  </a>
                  <a
                    target="_blank"
                    rel="nofollow"
                    href="https://app.adjust.com/6hkdfv"
                    class="d-inline-block mobile-apps-banner-button mr-3"
                  >
                    <img
                      alt="Install efood on Android"
                      width="87"
                      height="81"
                      class="lazyload"
                      data-src="/site-assets/img/howitworks/play-store-icon.png"
                      data-
                      srcset="
                        /cdn-cgi/image/w=130,fit=cover,q=100,f=auto/site-assets/img/howitworks/play-store-icon.png 130w,
                        /cdn-cgi/image/w=160,fit=cover,q=100,f=auto/site-assets/img/howitworks/play-store-icon.png 160w
                      "
                      loading="lazy"
                      sizes="(min-width: 992px) 130px, 160px"
                    />
                  </a>
                  <a
                    target="_blank"
                    rel="nofollow"
                    href="https://appgallery.huawei.com/#/app/C101788963"
                    class="d-inline-block mobile-apps-banner-button"
                  >
                    <img
                      alt="Install efood on AppGallery"
                      width="87"
                      height="81"
                      class="lazyload"
                      data-src="/site-assets/img/howitworks/huawei-appGallery.png"
                      data-
                      srcset="
                        /cdn-cgi/image/w=130,fit=cover,q=100,f=auto/site-assets/img/howitworks/huawei-appGallery.png 130w,
                        /cdn-cgi/image/w=160,fit=cover,q=100,f=auto/site-assets/img/howitworks/huawei-appGallery.png 160w
                      "
                      loading="lazy"
                      sizes="(min-width: 992px) 130px, 160px"
                    />
                  </a>
                </div>
              </div>

              <div class="col-lg-6 bg-white p-0 rounded">
                <img
                  class="mobile-apps-banner-image rounded lazyload w-100"
                  data-src="/cdn-cgi/image/w=668,f=auto,q=100/site-assets/img/banners/efood-mobileapps.png"
                />
              </div>
            </div>
          </div>
        </div> -->
        <div
          class="bg-white mt-10 mt-lg-0"
          style="box-shadow: inset 0 -1px 0 0 #ebebeb"
        >
          <div class="container">
            <div class="text-center text-md-left">
              <a
                href="index.html"
                class="brand-logo"
                title="Food Delivery &ndash; Order Online efood"
              >
                {{-- <img
                  src="data:image/png;base64,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"
                  alt="efood logo"
                /> --}}
                <img src="{{asset('efood-assets/images/logo2.jpeg')}}" alt="eBloom logo">

              </a>
            </div>

            <div class="row mt-5">
              <div class="col-lg-5 mb-7 mr-auto text-center text-md-left">
                <p class="d-none d-md-block mb-0">
                  Are you want flowers? eBlood
                  is here for you. Find anything you crave and order by choosing
                  between 15.000 stores in 90 cities. You know this already -
                  eBloom is delivery in Greece!
                </p>

                <div class="mt-5 mt-lg-8">
                  <p class="h3 font-weight-normal d-md-none text-muted m-0">
                    Follow us!
                  </p>

                {{-- <ul
                    class="list-unstyled list-inline footer-social-buttons mt-5 mb-0"
                  >
                    <li class="list-inline-item">
                      <a
                        target="_blank"
                        class="text-grey text-center"
                        rel="nofollow"
                        href="https://www.facebook.com/efood.gr"
                      >
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        target="_blank"
                        class="text-grey text-center"
                        rel="nofollow"
                        href="https://twitter.com/efoodgr"
                      >
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        target="_blank"
                        class="text-grey text-center"
                        rel="nofollow"
                        href="https://www.instagram.com/efoodgr"
                      >
                        <i class="fab fa-instagram"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        target="_blank"
                        class="text-grey text-center"
                        rel="nofollow"
                        href="https://www.youtube.com/user/efoodgr"
                      >
                        <i class="fab fa-youtube"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        target="_blank"
                        class="text-grey text-center"
                        rel="nofollow"
                        href="https://www.linkedin.com/company/e-food-gr"
                      >
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </li>
                  </ul> --}}
                </div>
              </div>

              <div class="col-lg-6 mb-7 d-none d-md-block">
                <ul class="list-unstyled mb-0 footer-links-list">
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/who.html"
                    >
                      Who we are
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/info.html"
                    >
                      How it works
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/faqs.html"
                    >
                      FAQs
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="blog/index.html"
                      target="_blank"
                    >
                      Blog
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/contact.html"
                    >
                      Contact
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/restaurant.html"
                    >
                      Do you have a store?
                    </a>
                  </li>
                  <li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/payments.html"
                    >
                      Payment Methods
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/tos.html"
                    >
                      Terms of use
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/allergens.html"
                    >
                      Allergens
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/copyright.html"
                    >
                      Privacy policy
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/cookies.html"
                    >
                      Cookie Policy
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="page/reviews.html"
                    >
                      Reviews policy
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-black mb-3 d-inline-block"
                      href="https://portal.e-food.gr/"
                      target="_blank"
                      rel="nofollow"
                    >
                      Stores
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-md-block text-center py-9">
          <p class="small mb-0">
            Created & Developed by <a href="https://globaltouch.international/" target="_blank"> Global Touch </a>all Rights Reserved
            {{-- © 2021 efood All Rights Reserved. Terms of Use, Privacy Policy and
            efood Cookies Policy --}}
          </p>
        </div>
        <div class="back-to-top d-md-none bg-white pb-10">
          <a
            href="#"
            class="back-to-top-button d-block border-top text-center pt-12 pb-10"
            onclick="if (!window.__cfRLUnblockHandlers) return false; window.scrollTo(0,0); return false;"
            data-cf-modified-f7cd9a4680c6ccdb45251385-=""
          >
            <span class="d-block back-to-top-icon mx-auto mb-5">
              <i class="fa fa-angle-up"></i>
            </span>

            <span class="d-block small text-muted font-weight-bold">
              Take me to the top
            </span>
          </a>
        </div>
      </footer>
    </div>

    <div id="ef-loader" style="display: none">
      <div class="ef-loader-inner">
        <div class="spinner"></div>
        <div class="spinner-msg"></div>
      </div>
    </div>
    <!-- <div
      class="cookie-consent-v2 text-white fixed-bottom px-0 py-5 px-sm-5 m-0 d-none"
    >
      <div class="container">
        <div
          class="text-center active"
          data-toggle-control="cookie-consent-details"
        >
          <p class="mb-0 mb-5">
            Χρησιμοποιούμε εργαλεία όπως τα cookies για να σε φέρνουμε πιο κοντά
            στο αγαπημένο σου φαγητό, να σου παρέχουμε περιεχόμενο ειδικά
            φτιαγμένο για σένα, καθώς και για σκοπούς ανάλυσης επισκεψιμότητας
            στην σελίδα μας. Μπορείς να αλλάξεις τις ρυθμίσεις των cookies σου
            ανά πάσα στιγμή.
            <a
              class="text-muted ml-2 hover-no-decoration cookie-consent-accept-required"
              href="#"
              >Αποδοχή υποχρεωτικών<i
                class="far fa-chevron-right ml-2 fa-xs d-none d-sm-inline-block"
              ></i
            ></a>
          </p>
        </div>
        <div
          class="pt-6 text-left"
          data-toggle-control="cookie-consent-details"
        >
          <h3 class="font-weight-bold text-center text-sm-left">
            Τι είναι τα cookies
          </h3>
          <p class="text-center text-sm-left">
            Τα cookies είναι μικρά αρχεία κειμένου που αποθηκεύονται στον
            περιηγητή σου. Δες παρακάτω τις κατηγορίες cookies και ρύθμισε τις
            επιλογές σου.
            <a href="page/cookies.html" class="text-muted ml-2"
              >Πολιτική Cookies <i class="far fa-chevron-right ml-2 fa-xs"></i
            ></a>
          </p>
          <div class="accordion" id="cookiesAccordion">
            <div class="border-bottom">
              <div class="" id="headingOne">
                <div class="mb-0 py-4 d-flex w-100 align-items-center">
                  <div class="flex-grow-1">
                    <div class="input-radio-mark position-relative">
                      <input
                        type="checkbox"
                        name="required_cookies"
                        id="required_cookies"
                        value="true"
                        checked
                        readonly
                        disabled
                      />
                      <label
                        for="required_cookies"
                        class="font-weight-normal h3 mb-0 text-muted w-100"
                        >Αναγκαία cookies</label
                      >
                    </div>
                  </div>
                  <div>
                    <button
                      class="btn btn-link pr-sm-0"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      <i class="fal fa-chevron-down text-white"></i>
                    </button>
                  </div>
                </div>
              </div>

              <div
                id="collapseOne"
                class="collapse"
                aria-labelledby="headingOne"
                data-parent="#cookiesAccordion"
              >
                <div class="text-muted pl-10">
                  <p>
                    Απαιτούνται για την πλοήγηση στην ιστοσελίδα ή την εφαρμογή
                    μας, καθώς και τη χρήση των λειτουργιών που παρέχει. Χωρίς
                    τη χρήση τέτοιων cookies, η σωστή λειτουργία της ιστοσελίδας
                    μας δεν είναι εγγυημένη. Σύμφωνα με τη νομοθεσία, δεν
                    απαιτείται ενέργειά σου για την αποδοχή αυτών.
                  </p>
                </div>
              </div>
            </div>
            <div class="border-bottom">
              <div class="" id="headingTwo">
                <div class="mb-0 py-4 d-flex w-100 align-items-center">
                  <div class="flex-grow-1">
                    <div class="input-radio-mark position-relative">
                      <input
                        type="checkbox"
                        name="functional_cookies"
                        id="functional_cookies"
                        value="false"
                        data-unchecked-value="false"
                      />
                      <label
                        for="functional_cookies"
                        class="font-weight-normal h3 mb-0 text-muted w-100"
                        >Cookies Λειτουργικότητας</label
                      >
                    </div>
                  </div>
                  <div>
                    <button
                      class="btn btn-link pr-sm-0"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseTwo"
                      aria-expanded="true"
                      aria-controls="collapseTwo"
                    >
                      <i class="fal fa-chevron-down text-white"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div
                id="collapseTwo"
                class="collapse"
                aria-labelledby="headingTwo"
                data-parent="#cookiesAccordion"
              >
                <div class="text-muted pl-10">
                  <p>
                    Tα cookies αποθηκεύουν τα δεδομένα σύνδεσής σου στον
                    περιηγητή σου, για να μπορείς να συνδέεσαι αυτόματα την
                    επόμενη φορά που θα επισκεφτείς το efood. Mας επιτρέπουν
                    επίσης να βελτιώνουμε συνεχώς τις υπηρεσίες που σου
                    προσφέρουμε, συλλέγοντας και αναλύοντας στοιχεία για την
                    επισκεψιμότητα της ιστοσελίδας του efood. Επιπλέον μας
                    δίνουν τη δυνατότητα να σου προτείνουμε και να σε βοηθήσουμε
                    να βρεις αυτό που ψάχνεις.
                  </p>
                </div>
              </div>
            </div>
            <div class="border-bottom">
              <div class="" id="headingThree">
                <div class="mb-0 py-4 d-flex w-100 align-items-center">
                  <div class="flex-grow-1">
                    <div class="input-radio-mark position-relative">
                      <input
                        type="checkbox"
                        id="personalization_cookies"
                        value="false"
                        data-unchecked-value="false"
                      />
                      <label
                        for="personalization_cookies"
                        class="font-weight-normal h3 mb-0 text-muted w-100"
                        >Cookies Προσωποποίησης</label
                      >
                    </div>
                  </div>
                  <div>
                    <button
                      class="btn btn-link pr-sm-0"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseThree"
                      aria-expanded="true"
                      aria-controls="collapseThree"
                    >
                      <i class="fal fa-chevron-down text-white"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div
                id="collapseThree"
                class="collapse"
                aria-labelledby="headingThree"
                data-parent="#cookiesAccordion"
              >
                <div class="text-muted pl-10">
                  <p>
                    Αυτά τα cookies χρησιμοποιούνται για την δημιουργία
                    προσωποποιημένου περιεχομένου ειδικά φτιαγμένο για σένα ώστε
                    να σου προσφέρουμε την καλύτερη δυνατή efood εμπειρία.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center pt-6">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-sm-0">
              <button
                type="button"
                class="btn btn-block btn-outline-white btn-lg cookie-consent-accept-selected cookie-consent-details"
                data-toggle-target="cookie-consent-details"
              >
                Αποδοχή επιλογών
              </button>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <button
                type="button"
                class="btn btn-block btn-white btn-lg cookie-consent-accept-all"
              >
                Αποδοχή Όλων
              </button>
            </div>
          </div>
        </div>
        <div class="active" data-toggle-control="cookie-consent-details">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-sm-0 order-sm-1">
              <button
                type="button"
                class="btn btn-block btn-white btn-lg cookie-consent-accept-all"
              >
                Αποδοχή Όλων
              </button>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <button
                type="button"
                class="btn btn-block btn-outline-white btn-lg font-weight-normal hover-no-decoration cookie-consent-details"
                style="color: #9b9b9b; border-color: #9b9b9b"
                data-toggle-target="cookie-consent-details"
              >
                Πληροφορίες &amp; Ρυθμίσεις
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div
      class="dynamic-notification"
      data-placement="popup"
      data-quantity="2"
      data-order="3"
    ></div>
    <div class="re-mp"></div>
    <div
      class="modal"
      id="myModal"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content"></div>
      </div>
    </div>

    <div id="footer-scripts">
      <script
        data-cfasync="false"
        src="{{asset("efood-assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js")}}"
      ></script>
      <script
        src="{{asset("efood-assets/assets/js/efood.footer.ea8f79f56d2a02646c11.js")}}"
        type="f7cd9a4680c6ccdb45251385-text/javascript"
      ></script>

      <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Organization",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Heraklion, Greece",
            "postalCode": "14122",
            "streetAddress": "Ηρακλείου 409"
          },
          "email": "info@e-food.gr",
          "logo": "https://www.e-food.gr/site-assets/img/logos/schema/efood.png",
          "name": "efood",
          "alternateName": "efood Delivery",
          "brand": "efood",
          "telephone": "( 00 30  ) 211 311 0700",
          "url": "https://www.e-food.gr",
          "sameAs": [
            "https://www.facebook.com/efood.gr",
            "https://twitter.com/efoodgr",
            "https://www.youtube.com/user/efoodgr",
            "https://www.instagram.com/efoodgr",
            "https://www.linkedin.com/company/e-food-gr"
          ]
        }
      </script>
    </div>
    
    <script
      src="{{asset("efood-assets/assets/scripts/7089c43e/cloudflare-static/rocket-loader.min.js")}}"
      data-cf-settings="f7cd9a4680c6ccdb45251385-|49"
      defer=""
    ></script>
     
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    {{-- <script src="{{asset("efood-assets/assets/js/autocompleteField.js")}}"></script> --}}
    
    {{-- //google maps api --}}
    {{-- <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4&libraries=&v=weekly"
    async
  ></script> --}}
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language=el&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4"></script>

     
    
    

  
</body>
  <!-- Mirrored from www.e-food.gr/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Mar 2021 08:06:23 GMT -->
</html>
