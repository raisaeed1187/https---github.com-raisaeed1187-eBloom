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

  <!-- Mirrored from www.e-food.gr/delivery/aigio by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Mar 2021 18:51:45 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <title>
      Flower delivery @if (Session::has('city'))
          
      {{Session::get('city')}} 
      @endif
      | Order from eBloom
    </title>
    <meta charset="utf-8" />
    <meta
      name="description"
      content="Αίγιο Online Delivery. Πλήρωσε εύκολα με κάρτα ή μετρητά και απόλαυσε το φαγητό ή τον καφέ σου όπου κι αν είσαι!"
    />
    <meta
      http-equiv="cache-control"
      content="no-store, no-cache, must-revalidate"
    />
    <meta http-equiv="Pragma" content="no-store, no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      (window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:false}};(window.NREUM||(NREUM={})).loader_config={xpid:"Ug4GWVVWGwAAV1FQAgcEVA==",licenseKey:"89fe45fbe0",applicationID:"303025632"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var i,o=t("ee"),a=t(24),c={};try{i=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,i.indexOf("dev")!==-1&&(c.dev=!0),i.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&o.on("internal-error",function(t){r(t.stack)}),c.dev&&o.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,c){try{p?p-=1:i(c||new UncaughtException(t,e,n),!0)}catch(f){try{o("ierr",[f,s.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function i(t,e){var n=e?null:s.now();o("err",[t,n])}var o=t("handle"),a=t(25),c=t("ee"),s=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(9),t(8),"addEventListener"in window&&t(5),s.xhrWrappable&&t(10),d=!0)}c.on("fn-start",function(t,e,n){d&&(p+=1)}),c.on("fn-err",function(t,e,n){d&&!n[l]&&(f(n,l,function(){return!0}),this.thrown=!0,i(n))}),c.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),c.on("internal-error",function(t){o("ierr",[t,s.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var i=t("ee"),o=t("handle"),a=t(9),c=t(8),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(7),"addEventListener"in window&&t(5);var x=NREUM.o.EV;i.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),i.on(w,function(t,e){var n=t[0];n instanceof x&&o("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),this.bstType])}),c.on(m,function(){this.bstStart=y.now()}),c.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),i.on(g+p,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),i.on(g+h,function(t){o("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&i(e)}function i(t){c.inPlace(t,[u,d],"-",o)}function o(t,e){return t[1]}var a=t("ee").get("events"),c=t("wrap-function")(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(i(window),i(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=o(arguments),e={};i.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var c=r.apply(this,t);return i.emit(n+"start",[t,a],c),c.then(function(t){return i.emit(n+"end",[null,t],c),t},function(t){throw i.emit(n+"end",[t],c),t})})}var i=t("ee").get("fetch"),o=t(25),a=t(24);e.exports=i;var c=window,s="fetch-",f=s+"body-",u=["arrayBuffer","blob","json","text","formData"],d=c.Request,l=c.Response,p=c.fetch,h="prototype",m="nr@context";d&&l&&p&&(a(u,function(t,e){r(d[h],e,f),r(l[h],e,f)}),r(c,"fetch",s),i.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),i.emit(s+"done",[null,e],n)}else i.emit(s+"done",[t],n)}))},{}],7:[function(t,e,n){var r=t("ee").get("history"),i=t("wrap-function")(r);e.exports=r;var o=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;o&&o.pushState&&o.replaceState&&(a=o),i.inPlace(a,["pushState","replaceState"],"-")},{}],8:[function(t,e,n){var r=t("ee").get("raf"),i=t("wrap-function")(r),o="equestAnimationFrame";e.exports=r,i.inPlace(window,["r"+o,"mozR"+o,"webkitR"+o,"msR"+o],"raf-"),r.on("raf-start",function(t){t[0]=i(t[0],"fn-")})},{}],9:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function i(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var o=t("ee").get("timer"),a=t("wrap-function")(o),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=o,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),o.on(s+u,r),o.on(c+u,i)},{}],10:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function i(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",c)}function o(t){y.push(t),h&&(b?b.then(a):w?w(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(v,i,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),o(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!w&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],11:[function(t,e,n){function r(t){if(!c(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=p.generateSpanId(),m=p.generateTraceId(),w=Date.now(),v={spanId:h,traceId:m,timestamp:w};return(t.sameOrigin||s(t)&&l())&&(v.traceContextParentHeader=i(h,m),v.traceContextStateHeader=o(h,w,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&s(t)&&d())&&(v.newrelicHeader=a(h,m,w,n,r,f)),v}function i(t,e){return"00-"+e+"-"+t+"-01"}function o(t,e,n,r,i){var o=0,a="",c=1,s="",f="";return i+"@nr="+o+"-"+c+"-"+n+"-"+r+"-"+t+"-"+a+"-"+s+"-"+f+"-"+e}function a(t,e,n,r,i,o){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var c={v:[0,1],d:{ty:"Browser",ac:r,ap:i,id:t,tr:e,ti:n}};return o&&r!==o&&(c.d.tk=o),btoa(JSON.stringify(c))}function c(t){return f()&&s(t)}function s(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var i=h(n.allowed_origins[r]);if(t.hostname===i.hostname&&t.protocol===i.protocol&&t.port===i.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function l(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var p=t(21),h=t(13);e.exports={generateTracePayload:r,shouldGenerateTrace:c}},{}],12:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):o(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=s(e),t.sameOrigin=t.parsedOrigin.sameOrigin}function o(t,e){t.params.status=e.status;var n=w(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(13),f=t(11).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(17),m=t(16),w=t(14),v=window.XMLHttpRequest;a.features.xhr=!0,t(10),t(6),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){o(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],i=this;if(n&&r){var o=m(r);o&&(n.txSize=o)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||i.loadCaptureCalled||(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<l;c++)e.addEventListener(d[c],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof v&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=s(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var i=f(this.parsedOrigin);if(i&&(i.newrelicHeader||i.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var o={};for(var a in r)o[a]=r[a];o.headers=new Headers(r.headers||{}),e(o.headers,i)&&(this.dt=i),t.length>1?t[1]=o:t.push(o)}else t[0]&&t[0].headers&&e(t[0].headers,i)&&(this.dt=i)})}},{}],13:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,i={};e.href=t,i.port=e.port;var o=e.href.split("://");!i.port&&o[1]&&(i.port=o[1].split("../index.html")[0].split("@").pop().split(":")[1]),i.port&&"0"!==i.port||(i.port="https"===o[0]?"443":"80"),i.hostname=e.hostname||n.hostname,i.pathname=e.pathname,i.protocol=o[0],"/"!==i.pathname.charAt(0)&&(i.pathname="/"+i.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,c=e.hostname===document.domain&&e.port===n.port;return i.sameOrigin=a&&(!e.hostname||c),"/"===i.pathname&&(r[t]=i),i}},{}],14:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?i(t.response):"text"===n||""===n||void 0===n?i(t.responseText):void 0}var i=t(16);e.exports=r},{}],15:[function(t,e,n){function r(){}function i(t,e,n){return function(){return o(t,[f.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var o=t("handle"),a=t(24),c=t(25),s=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,e){u[e]=i(l+e,!0,"api")}),u.addPageAction=i(l+"addPageAction",!0),u.setCurrentRouteName=i(l+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(p+"tracer",[f.now(),t,n],r),function(){if(s.emit((i?"":"no-")+"fn-start",[f.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw s.emit("fn-err",[arguments,this,t],n),t}finally{s.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=i(p+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),o("err",[t,f.now(),!1,e])}},{}],16:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],17:[function(t,e,n){var r=0,i=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);i&&(r=+i[1]),e.exports=r},{}],18:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(26);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],19:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],20:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!w){var e=Math.round(t.timeStamp),n={type:t.type};e<=l.now()?n.fid=l.now()-e:e>l.offset&&e<=Date.now()?(e-=l.offset,n.fid=l.now()-e):e=l.now(),w=!0,d("timing",["fi",e,n])}}function c(t){d("pageHide",[l.now(),t])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var s,f,u,d=t("handle"),l=t("loader"),p=t(23),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(m){}f=new PerformanceObserver(i);try{f.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}u=new PerformanceObserver(o);try{u.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var w=!1,v=["click","keydown","mousedown","pointerdown","touchstart"];v.forEach(function(t){document.addEventListener(t,a,!1)})}p(c)}},{}],21:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var i,o="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",c=0;c<o.length;c++)i=o[c],"x"===i?a+=t().toString(16):"y"===i?(i=3&t()|8,a+=i.toString(16)):a+=i;return a}function i(){return a(16)}function o(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,i=window.crypto||window.msCrypto;i&&i.getRandomValues&&Uint8Array&&(n=i.getRandomValues(new Uint8Array(31)));for(var o=[],a=0;a<t;a++)o.push(e().toString(16));return o.join("")}e.exports={generateUuid:r,generateSpanId:i,generateTraceId:o}},{}],22:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,s=c.match(a);s&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=s[1])}e.exports={agent:i,version:o,match:r}},{}],23:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,e,!1)}e.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],24:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],25:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],26:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?f(t,s,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!p.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),s=m(n),f=s.length,u=0;u<f;u++)s[u].apply(c,r);var l=d[y[n]];return l&&l.push([x,n,r,c]),c}}function o(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function w(t){return l[t]=l[t]||i(n)}function v(t,e){u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:o,addEventListener:o,removeEventListener:h,emit:n,get:w,listeners:m,context:e,buffer:v,abort:c,aborted:!1};return x}function o(t){return f(t,s,a)}function a(){return new r}function c(){(d.api||d.feature)&&(p.aborted=!0,d=p.backlog={})}var s="nr@context",f=t("gos"),u=t(24),d={},l={},p=e.exports=i();e.exports.getOrSetContext=o,p.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=b.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(y,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=t(18),c=t("handle"),s=t(24),f=t("ee"),u=t(22),d=t(19),l=window,p=l.document,h="addEventListener",m="attachEvent",w=l.XMLHttpRequest,v=w&&w.prototype;if(d(l.location)){NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:w,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var g=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},x=w&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),b=e.exports={offset:a.getLastTimestamp(),now:a,origin:g,features:{},xhrWrappable:x,userAgent:u};t(15),t(20),p[h]?(p[h]("DOMContentLoaded",o,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",i),l[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,s,f){function nrWrapper(){var o,a,u,l;try{a=this,o=d(arguments),u="function"==typeof r?r(o,a):r||{}}catch(p){i([p,"",[o,a,s],u],t)}c(n+"start",[o,a,s],u,f);try{return l=e.apply(a,o)}catch(h){throw c(n+"err",[o,a,h],u,f),h}finally{c(n+"end",[o,a,l],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[l]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,s,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)s=e[f],c=t[s],a(c)||(t[s]=n(c,u?s+r:r,i,s,o))}function c(n,r,o,a){if(!h||e){var c=h;h=!0;try{t.emit(n,r,o,e,a)}catch(s){i([s,n,r,o],t)}h=c}}return t||(t=u),n.inPlace=r,n.flag=l,n}function i(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)p.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[l])}function c(t,e){var n=e(t);return n[l]=t,o(t,n,u),n}function s(t,e,n){var r=t[e];t[e]=c(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(25),l="nr@original",p=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=s,e.exports.argsToArray=f},{}]},{},["loader",2,12,4,3]);
    </script>

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="{{asset("efood-assets/site-assets/img/efood/apple-touch-icon.png")}}"
    />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("efood-assets/images/logo2.jpeg")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("efood-assets/images/logo2.jpeg")}}">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#ed2e2e">
    
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#ed2e2e" />
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="manifest" href="../manifest.json" />

    <link rel="dns-prefetch" href="http://api.e-food.gr/" />
    <link rel="dns-prefetch" href="http://plus.google.com/" />
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <link rel="dns-prefetch" href="http://connect.facebook.net/" />
    <link rel="dns-prefetch" href="http://google-analytics.com/" />
    <link rel="dns-prefetch" href="http://v2.zopim.com/" />
    <link rel="dns-prefetch" href="http://maps.googleapis.com/" />

    <meta
      name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <meta
      property="og:url"
      content="https://www.e-food.gr%2Fdelivery%2Faigio"
    />
    <meta
      property="og:title"
      content="Delivery Online Αίγιο | Δες όλα τα καταστήματα της περιοχής και παράγγειλε"
    />
    <meta
      property="og:description"
      content="Αίγιο Online Delivery. Πλήρωσε εύκολα με κάρτα ή μετρητά και απόλαυσε το φαγητό ή τον καφέ σου όπου κι αν είσαι!"
    />
    <meta property="og:type" content="website" />
    <meta
      property="og:image"
      content="/site-assets/img/logos/logo250x250.jpg"
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

    {{-- <script
      src="../../assets.e-food.gr/js/efood.header.0472098970c1e1314a72.js"
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script> --}}
    <script
      src="{{asset("efood-assets/assets/js/efood.header.0472098970c1e1314a72.js")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      window.lazySizesConfig = window.lazySizesConfig || {};
      lazySizesConfig.loadMode = 1;
    </script>

    {{-- <script
      src="../../cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js"
      async
      defer
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script> --}}
    <script
      src="{{asset("efood-assets/assets/ajax/libs/lazysizes/5.1.2/lazysizes.min.js")}}"
      async
      defer
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    <script type="e85c68e5b6de427d773d8e77-text/javascript">
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
          js.src = "../../connect.facebook.net/en_US/sdk.js";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      function googleSignInStart() {
          gapi.load('auth2', function() {
              auth2 = gapi.auth2.init({
                  client_id: '885097402843-js6hi8niq0qa6s7e1tcm3rlkua8dlfb4.apps.googleusercontent.com'
              });
          });
      }
    </script>
    {{-- <script
      src="../../apis.google.com/js/client_platform3cb2.js?onload=googleSignInStart"
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script> --}}
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

    {{-- <script
      defer="defer"
      src="../../smartbanner.deliveryhero.net/smartbanner/3.0/smartbanner.min.js"
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script> --}}
    <script
    defer="defer"
    src="{{asset("efood-assets/assets/smartbanner/3.0/smartbanner.min.js")}}"
    type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    <script
      async
      id="google-map-script"
      src="http://maps.googleapis.com/maps/api/js?libraries=geometry,places&amp;language=el&amp;region=gr&amp;client=gme-deliveryheroholding&amp;channel=efood_gr"
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script>
    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      app.siteVersion = '2.9.29';
      app.sitePlatform = 'web';
      app.enviroment = 'production';
      app.brand = 'efood';
      app.locale = 'el';
      app.currency = 'EUR';
      app.ga_currency = 'EUR';
      app.userLoggedIn = false;
      app.userSid = '6bb82e9349e78b64654632375c318ce4';
      app.pageController = 'shop-search';
      app.latitude = '38.249534';
      app.longitude = '22.087473';
      app.area_slug = 'aigio';
      app.userCartSid = '6bb82e9349e78b64654632375c318ce4';
      app.apiBaseURL = 'https://api.e-food.gr/api/v1';
      app.apiURL = 'https://api.e-food.gr/';
      app.apiLocale = 'el';
      app.googleMapsApiKeyString = '//maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=gr&client=gme-deliveryheroholding&channel=efood_gr';
      app.savedAddresses = null;
      app.isByArea = true;
      app.isJokerEnabled = true && !(/(iphone|ipod|ipad).* os 8_/.test(navigator.userAgent.toLowerCase()));
      app.loadMaps = false;
      app.isAppboyEnabled = true;

      app.displaySmartBanner = false;
      app.businessDiscountUrl = '../foodatwork/index.html';
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




      app.address = {"id":0,"latitude":"38.249534","longitude":"22.087473","city":"","county":"","doorbellName":"","floor":"","phone":"","userId":0,"isDefault":false,"country":"GR","street":"","streetNo":0,"notes":"","zip":"","slug":"","area_slug":"aigio","friendly_name":"","scope":"","isComplete":false,"isByArea":true,"isFoodAtWork":false,"isInNoMapArea":false}
    </script>

    <link rel="canonical" href="aigio.html" />

    {{-- <script
      async
      src="{{asset("efood-assets/assets/kit.fontawesome.com/9411b219fc.js")}}"
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script> --}}
  </head>

  <body
    data-spy="scroll"
    data-target="#shop-profile-menu-list-nav"
    data-offset="122"
    class="page brand-efood page-search time-morning date-19-03 by-area logged-out page-with-cover"
  >
    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      	dataLayer = [{
          "siteVersion": "2.9.29",
          "isLoggedIn": 0,
          "pageUrl": "https://www.e-food.gr/delivery/aigio",
          "userAddress": "",
          "userAddressLat": "38.249534",
          "userAddressLon": "22.087473",
          "userAddressZip": "",
          "userAddressCity": "",
          "userAddressCountry": "GR",
          "userCookiePreference": "not selected",
          "userCookiePrivacyLevel": "required",
          "pageUrlPath": "delivery/aigio",
          "userId": "",
          "userLoggedIn": false,
          "pageType": "shop_list",
          "appLang": "el",
          "pageBreadcrumb": "home,shop_list"
      }];
      	dataLayer[0].pageEnvironment = ('ontouchstart' in window) ? 'mobile' : 'desktop';
    </script>

    <!-- Google Tag Manager -->
    <noscript
      ><iframe
        src="http://www.googletagmanager.com/ns.html?id=GTM-P44B2X"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-P44B2X');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Firebase -->
    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      (function(sa,fbc){function load(f,c){var a=document.createElement('script');
          a.async=1;a.src=f;a.id="firebaseScript";var s=document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(a,s);}load(sa);document.getElementById("firebaseScript").onload = function() {firebase.initializeApp(fbc).performance();};
      })('../../www.gstatic.com/firebasejs/8.1.1/firebase-performance-standalone.js', {
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

    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      var preferredView = window.$.cookie('shop_preferred_view');

      if (preferredView === undefined || ((preferredView === 'image') && !document.body.classList.contains('page-with-cover'))) {
          document.body.classList.add('page-with-cover');
      } else if (preferredView !== 'image' && document.body.classList.contains('page-with-cover')) {
          document.body.classList.remove('page-with-cover');
      }
    </script>

    <div data-toggle-control="m-side-menu"      id="mobile-side-menu">
        <div class="mobile-sidemenu-login-btn-wrapper px-11 py-5 border-bottom">
          <button
            data-target="#myModal"
            data-toggle="modal"
            data-modal-class="modal-login"
            data-url="/foodatwork/modals/login"
            class="btn btn-block btn-outline-grey mobile-sidemenu-login-btn hover-no-decoration"
            title="Login/Sign Up"
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
                <a class="d-block" href="blog/index.html">Blog</a>
              </li>
            </ul>
          </li> -->
          <!-- <li
            class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item"
          >
            <a class="d-block" href="page/contact.html">Επικοινωνία</a>
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

      <header class="site-header py-lg-5">
        <button type="button" data-toggle-target="m-side-menu" class="d-lg-none btn btn-link mobile-sidemenu-btn p-2">
            <span class="fa-stack fa-lg">
              <i class="fas fa-circle fa-stack-2x fa-inverse"></i>
              <i class="fas fa-bars fa-stack-1x">Menu</i>
            </span>
        </button>
        <div class="container h-100">
            <div class="row align-items-center justify-content-between h-100">
                <div class="col-lg-auto">
                        <a href="{{url('/welcome')}}" class="site-logo header-logo-main text-hide mx-auto ml-lg-0" title="Food Delivery &ndash; Order Online efood">efood
    
                    <img src="{{asset('efood-assets/images/logo2.jpeg')}}" alt="eBloom logo">
                        
        </a>
                </div>
                                <nav class="d-none d-lg-flex ml-auto col-auto site-header-nav align-items-center">
                                                                        <a class="btn btn-link font-weight-bold px-0 mx-7" href="../../delivery.html" id="areas-trigger" data-event="Header Areas">Delivery areas</a>
                                                                    
    
                            <button data-target="#myModal"
                data-toggle="modal"
                data-modal-class="modal-login"
                data-url="/foodatwork/modals/login"
                data-event="Header Login"
                class="btn btn-sm btn-outline-white btn-block ml-7 login-button"
        >
            <strong>Login/Sign up</strong>
        </button>
                    </nav>
                        </div>
        </div>
    
    </header>
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

        {{-- <script
          src="../../assets.e-food.gr/api-js-sdk/api-js-sdk.min.v0.0.32.js"
          defer
          type="e85c68e5b6de427d773d8e77-text/javascript"
        ></script> --}}
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
        <section>
          <div class="shop-listing-header position-relative" style="z-index: 1">
            <div class="header-hero">
              <img
                src="{{asset("efood-assets/images/2.jpg")}}"
                class="header-image lazyload position-absolute w-100 h-100"
                alt="header image"
              />

              <div class="container h-100">
                <div class="h-100 flex-column d-flex justify-content-end">
                  <div
                    class="position-relative h-100 w-100 d-flex align-items-center"
                  >
                    <div
                      class="text-center shops-listing-counter-wrapper position-relative text-white my-auto mx-auto mb-lg-8"
                    >
                      <h1 class="display-2 font-weight-bold mb-5">
                        <span
                          class="shops-listing-counter-restaurant-word d-none"
                          data-restaurant-plural="καταστήματα"
                          data-restaurant-singular="κατάστημα"
                        ></span>
                        We found {{count($florists)}} stores
                      </h1>

                      <span
                        class="h3 font-weight-normal p-3 position-relative shop-listing-header-address d-flex d-sm-inline justify-content-between mx-auto"
                        data-target="#myModal"
                        data-toggle="modal"
                        data-modal-class="modal-addressbox"
                        data-url="/modals/addressbox"
                        style="cursor: pointer; width: 275px; line-height: 16px"
                      >
                        <i class="fas fa-map-marker-alt mx-2 mx-sm-4"></i>
                        <i class="fa fa-map-marker "></i>
                        <span class="text-truncate ml-1">
                          {{-- {{Session::get('region')}}, {{Session::get('city')}} --}}
                          @if (Session::has('address'))
                              
                          {{Session::get('address')['region']}},{{Session::get('address')['city']}}
                          @endif
                          
                        </span>
                      </span>
                    </div>

                    <div
                      class="position-absolute d-none d-lg-block mt-7"
                      style="right: 0; bottom: 20px; z-index: 1"
                    >
                      {{-- <div class="coca-cola-icons">
                        <img
                          class="lazyload"
                          width="88"
                          height="81"
                          data-src="../site-assets/img/coca/taste_the_feeling_R.png"
                          data-srcset="/site-assets/img/coca/taste_the_feeling_R.png 1x, /site-assets/img/coca/taste_the_feeling_R@2x.png 2x, /site-assets/img/coca/taste_the_feeling_R@3x.png 3x"
                          alt="Coca-Cola – Taste the feeling"
                        />
                      </div> --}}
                    </div>
                  </div>

                  <div class="d-none d-lg-block mr-auto mb-8">
                    <div class="row">
                      <ul
                        id="navigation"
                        class="breadcrumbs breadcrumb pl-5 flex-nowrap m-0"
                      >
                        <li class="breadcrumb-item">
                          <a
                            href="{{url('welcome')}}"
                            title="Back to eBloom homepage"
                            rel="home"
                          >
                            <span class="breadcrumb-item__text">eBloom</span>
                          </a>
                        </li>
                        <li class="breadcrumb-item">
                          <a
                            href="../delivery.html"
                            title="Δείτε όλα τα καταστήματα για online delivery ανά περιοχή"
                          >
                            <h2>Delivery</h2>
                          </a>
                        </li>
                        <li class="breadcrumb-item text-truncate">
                          <a
                            href="aigio.html"
                            title="Online delivery Αίγιο, δείτε όλα τα καταστήματα"
                          >
                          @if (Session::has('address'))
                              
                          <h2>{{Session::get('address')['region']}},{{Session::get('address')['city']}}</h2>
                          @endif
                            {{-- <h2>12 14, Agios Konstantinos Agrinio, 19322</h2> --}}
                          </a>
                        </li>
                      </ul>

                      <script type="application/ld+json">
                        {
                          "@context": "https://schema.org",
                          "@type": "BreadcrumbList",
                          "itemListElement": [
                            {
                              "@type": "ListItem",
                              "position": 1,
                              "item": {
                                "@id": "https://www.e-food.gr/",
                                "name": "efood"
                              }
                            },
                            {
                              "@type": "ListItem",
                              "position": 2,
                              "item": {
                                "@id": "https://www.e-food.gr/delivery",
                                "name": "Delivery"
                              }
                            },
                            {
                              "@type": "ListItem",
                              "position": 3,
                              "item": {
                                "@id": "https://www.e-food.gr/delivery/aigio",
                                "name": "Αίγιο"
                              }
                            }
                          ]
                        }
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="pb-8 bg-light" style="margin-top: -25px">
          <div class="container">
            <div class="row">
              <div {{-- initilay col-lg-3 --}}
                class="d-none d-lg-block col-lg-2 position-relative"
                style="z-index: 1; pointer-events: none"
              >
                {{-- <div
                  class="stickyfill cuisine-filter-list-wrapper bg-white px-7 pt-7 pb-5 box-shadow sticky-top rounded"
                >
                  <h6 class="mb-7 h3">Κουζίνες</h6>

                  <ul class="list-unstyled cuisine-filter-list mb-0">
                    <li
                      class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                    >
                      <input
                        type="checkbox"
                        value="all"
                        id="all"
                        checked
                        disabled
                      />

                      <label
                        for="all"
                        class="mb-0 pl-9 text-9b9b9b font-weight-normal"
                      >
                        Όλες οι κουζίνες
                      </label>
                    </li>

                    <li
                      class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                    >
                      <input
                        type="checkbox"
                        class="filter cuisine-filter"
                        name="kitchens"
                        value="kafes"
                        id="kafes"
                        data-en="kafes"
                      />

                      <label
                        for="kafes"
                        class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                      >
                        Καφέδες
                      </label>
                    </li>

                    <li
                      class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                    >
                      <input
                        type="checkbox"
                        class="filter cuisine-filter"
                        name="kitchens"
                        value="souvlakia"
                        id="souvlakia"
                        data-en="souvlakia"
                      />

                      <label
                        for="souvlakia"
                        class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                      >
                        Σουβλάκια
                      </label>
                    </li>

                    <li
                      class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                    >
                      <input
                        type="checkbox"
                        class="filter cuisine-filter"
                        name="kitchens"
                        value="pizza"
                        id="pizza"
                        data-en="pizza"
                      />

                      <label
                        for="pizza"
                        class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                      >
                        Pizza
                      </label>
                    </li>

                    <li
                      class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                    >
                      <input
                        type="checkbox"
                        class="filter cuisine-filter"
                        name="kitchens"
                        value="crepes"
                        id="crepes"
                        data-en="crepes"
                      />

                      <label
                        for="crepes"
                        class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                      >
                        Κρέπες
                      </label>
                    </li>

                    <li
                      class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                    >
                      <input
                        type="checkbox"
                        class="filter cuisine-filter"
                        name="kitchens"
                        value="burger"
                        id="burger"
                        data-en="burger"
                      />

                      <label
                        for="burger"
                        class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                      >
                        Burgers
                      </label>
                    </li>

                    <li
                      data-toggle-control="cuisine-filter-list-more"
                      class="list-unstyled"
                    >
                      <ul class="list-unstyled more-cuisines">
                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="glyka"
                            id="glyka"
                            data-en="glyka"
                          />
                          <label
                            for="glyka"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Γλυκά
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="magireuta"
                            id="magireuta"
                            data-en="magireuta"
                          />
                          <label
                            for="magireuta"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Μαγειρευτά
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="makaronades"
                            id="makaronades"
                            data-en="makaronades"
                          />
                          <label
                            for="makaronades"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Ζυμαρικά
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="vafles"
                            id="vafles"
                            data-en="vafles"
                          />
                          <label
                            for="vafles"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Βάφλες
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="brunch"
                            id="brunch"
                            data-en="brunch"
                          />
                          <label
                            for="brunch"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Brunch
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="sfoliates"
                            id="sfoliates"
                            data-en="sfoliates"
                          />
                          <label
                            for="sfoliates"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Σφολιάτες
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="thalassina"
                            id="thalassina"
                            data-en="thalassina"
                          />
                          <label
                            for="thalassina"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Θαλασσινά
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="salates"
                            id="salates"
                            data-en="salates"
                          />
                          <label
                            for="salates"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Σαλάτες
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="elliniki"
                            id="elliniki"
                            data-en="elliniki"
                          />
                          <label
                            for="elliniki"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Ελληνική
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="psita"
                            id="psita"
                            data-en="psita"
                          />
                          <label
                            for="psita"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Ψητά - Grill
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="loykoymades"
                            id="loykoymades"
                            data-en="loykoymades"
                          />
                          <label
                            for="loykoymades"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Λουκουμάδες
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="artopoiimata"
                            id="artopoiimata"
                            data-en="artopoiimata"
                          />
                          <label
                            for="artopoiimata"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Αρτοποιήματα
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="bougatsa"
                            id="bougatsa"
                            data-en="bougatsa"
                          />
                          <label
                            for="bougatsa"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Μπουγάτσα
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="snacks"
                            id="snacks"
                            data-en="snacks"
                          />
                          <label
                            for="snacks"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Snacks
                          </label>
                        </li>

                        <li
                          class="input-radio-mark position-relative cuisine-filter-list-item mb-5"
                        >
                          <input
                            type="checkbox"
                            class="filter cuisine-filter"
                            name="kitchens"
                            value="sandwich"
                            id="sandwich"
                            data-en="sandwich"
                          />
                          <label
                            for="sandwich"
                            class="font-weight-normal mb-0 pl-9 text-9b9b9b"
                          >
                            Sandwich
                          </label>
                        </li>
                      </ul>
                    </li>

                    <li class="cuisine-filter-list-item mt-5">
                      <div class="position-relative w-100">
                        <button
                          type="button"
                          data-toggle-target="cuisine-filter-list-more"
                          data-alter-text="<div class='d-flex align-items-center w-100 text-muted'><span class='mb-0 mr-3 '>Λιγότερες</span> <i class='fas fa-angle-up'></i></div>"
                          class="btn btn-link px-0 hover-no-decoration"
                          id="cuisine-filter-list-more"
                        >
                          <div
                            class="d-flex align-items-center w-100 text-muted"
                          >
                            <span class="mb-0 mr-3">Δες τις όλες</span>
                            <i class="fas fa-angle-down"></i>
                          </div>
                        </button>
                      </div>
                    </li>
                  </ul>
                </div> --}}
              </div>
              <div class="shop-listing-content col-12 col-lg-9">
                <script type="e85c68e5b6de427d773d8e77-text/javascript">
                  app.swimlanes = {
                      key: null,
                  };
                </script>

                <div class="col-12">
                  <div
                    class="bg-white box-shadow position-absolute w-100 rounded"
                    style="z-index: 1; left: 0; top: 0; height: 56px"
                  ></div>
                </div>
                <div
                  class="stickyfill sticky-top"
                  style="height: 56px; z-index: 1; top: 8px"
                >
                  <div
                    class="row justify-content-between mx-0 pl-7 pr-0 pl-lg-7 pr-lg-3 h-100 align-items-center"
                  >
                    <div class="col pl-0 pr-0 pr-lg-5">
                      <div class="shops-listing-search">
                        <div class="shops-listing-search-form">
                          <script
                            type="e85c68e5b6de427d773d8e77-text/javascript"
                          >

                            var initializeShopListSearch = function () {
                                if (!efoodLib.shopListSearch) return

                                window.shopListSearch = new efoodLib.shopListSearch({
                                    elm: '#searchform',
                                    config: {
                                        lat: app.latitude,
                                        lng: app.longitude,
                                        'search.mounted': function (args) {},
                                        'search.suggestion.popular.selected': function (args) {
                                            dataLayer.push({
                                                'event': 'search_predefined_list.clicked',

                                                'userId': dataLayer[0].userId,
                                                'searchList': 'Popular',
                                                'matchTerm': args.value,
                                                'searchPosition': args.index,
                                                'locationAddress': dataLayer[0].userAddress,
                                                'locationLat': dataLayer[0].userAddressLat,
                                                'locationLon': dataLayer[0].userAddressLon,
                                                'locationCity': dataLayer[0].userAddressCity,
                                                'locationArea': dataLayer[0].userAddressZip,
                                                'locationCountry': dataLayer[0].userAddressCountry,
                                            })

                                            var encodedSearchTerm = efoodLib.shopListSearch.encode(args.value)
                                            window.location.href =  '/search/' + encodedSearchTerm
                                        },
                                        'search.suggestion.recent.selected': function (args) {
                                            dataLayer.push({
                                                'event': 'search_predefined_list.clicked',

                                                'userId': dataLayer[0].userId,
                                                'searchList': 'Recent',
                                                'matchTerm': args.value,
                                                'searchPosition': args.index,
                                                'locationAddress': dataLayer[0].userAddress,
                                                'locationLat': dataLayer[0].userAddressLat,
                                                'locationLon': dataLayer[0].userAddressLon,
                                                'locationCity': dataLayer[0].userAddressCity,
                                                'locationArea': dataLayer[0].userAddressZip,
                                                'locationCountry': dataLayer[0].userAddressCountry,
                                            })

                                            var encodedSearchTerm = efoodLib.shopListSearch.encode(args.value)
                                            window.location.href =  '/search/' + encodedSearchTerm
                                        },
                                        'search.suggestions.empty': function (args) {
                                            var pageUrlPath = window.location.href.replace(window.location.origin, '')

                                            dataLayer.push({
                                                'event': 'search_error.shown',

                                                'userId': dataLayer[0].userId,
                                                'pageType': 'shop_list',
                                                'pageUrlPath': pageUrlPath,
                                                'searchTerm': args.term,
                                                'errorMessage': 'no suggestions',
                                                'locationAddress': dataLayer[0].userAddress,
                                                'locationLat': dataLayer[0].userAddressLat,
                                                'locationLon': dataLayer[0].userAddressLon,
                                                'locationCity': dataLayer[0].userAddressCity,
                                                'locationArea': dataLayer[0].userAddressZip,
                                                'locationCountry': dataLayer[0].userAddressCountry,
                                                'verticalType': window.app.verticalType
                                            })
                                        },
                                        'search.suggestion.term.selected': function (args) {
                                            var pageUrlPath = window.location.href.replace(window.location.origin, '')

                                            dataLayer.push({
                                                'event': 'search.clicked',

                                                'userId': dataLayer[0].userId,
                                                'pageType': 'shop_list',
                                                'pageUrlPath': pageUrlPath,
                                                'searchTerm': args.input,
                                                'matchTerm': args.value,
                                                'searchSection': args.section,
                                                'searchPosition': args.index,
                                                'locationAddress': dataLayer[0].userAddress,
                                                'locationLat': dataLayer[0].userAddressLat,
                                                'locationLon': dataLayer[0].userAddressLon,
                                                'locationCity': dataLayer[0].userAddressCity,
                                                'locationArea': dataLayer[0].userAddressZip,
                                                'locationCountry': dataLayer[0].userAddressCountry,
                                                'verticalType': window.app.verticalType
                                            })

                                            var encodedSearchTerm = efoodLib.shopListSearch.encode(args.value)
                                            window.location.href =  '/search/' + encodedSearchTerm
                                        },
                                        'search.suggestion.restaurant.selected': function (args) {
                                            var pageUrlPath = window.location.href.replace(window.location.origin, '')

                                            dataLayer.push({
                                                'event': 'search.clicked',

                                                'userId': dataLayer[0].userId,
                                                'pageType': 'shop_list',
                                                'pageUrlPath': pageUrlPath,
                                                'searchTerm': args.input,
                                                'matchTerm': args.value,
                                                'searchSection': args.section,
                                                'searchPosition': args.index,
                                                'locationAddress': dataLayer[0].userAddress,
                                                'locationLat': dataLayer[0].userAddressLat,
                                                'locationLon': dataLayer[0].userAddressLon,
                                                'locationCity': dataLayer[0].userAddressCity,
                                                'locationArea': dataLayer[0].userAddressZip,
                                                'locationCountry': dataLayer[0].userAddressCountry,
                                                'shopId': args.shopId || '',
                                                'verticalType': window.app.verticalType
                                            })

                                            window.location.href = args.value
                                        },
                                        'search.results.nav.selected': function (args) {
                                            var pageUrlPath = window.location.href.replace(window.location.origin, '')

                                            dataLayer.push({
                                                'event': 'search_tab.clicked',
                                                'userId': dataLayer[0].userId,
                                                'pageType': 'shop_list',
                                                'pageUrlPath': pageUrlPath,
                                                'matchTerm': args.value,
                                                'searchSection': args.section,
                                                'searchSectionSize': args.sectionSize,
                                                'locationAddress': dataLayer[0].userAddress,
                                                'locationLat': dataLayer[0].userAddressLat,
                                                'locationLon': dataLayer[0].userAddressLon,
                                                'locationCity': dataLayer[0].userAddressCity,
                                                'locationArea': dataLayer[0].userAddressZip,
                                                'locationCountry': dataLayer[0].userAddressCountry,
                                            })
                                        },
                                        'search.results.selected': function (args) {
                                            dataLayer.push({
                                                'event': 'search_result.clicked',
                                                'userId': dataLayer[0].userId,
                                                'pageType': 'shop_list',
                                                'shopId': args.shopId,
                                                'searchClickType': args.clickType,
                                                'searchSection': args.section,
                                                'searchPosition': args.index,
                                                'shopId': args.shopId,
                                                'locationAddress': dataLayer[0].userAddress,
                                                'locationLat': dataLayer[0].userAddressLat,
                                                'locationLon': dataLayer[0].userAddressLon,
                                                'locationCity': dataLayer[0].userAddressCity,
                                                'locationArea': dataLayer[0].userAddressZip,
                                                'locationCountry': dataLayer[0].userAddressCountry,
                                            })
                                        },
                                        'search.sidebar.popular.selected': function (args) {
                                            var pageUrlPath = window.location.href.replace(window.location.origin, '')

                                            dataLayer.push({
                                                'event': 'search_popular_terms.clicked',
                                                'userId': dataLayer[0].userId,
                                                'pageType': 'shop_list',
                                                'pageUrlPath': pageUrlPath,
                                                'searchTerm': args.value,
                                                'matchTerm': args.value,
                                                'searchPosition': args.index,
                                                'locationAddress': dataLayer[0].userAddress,
                                                'locationLat': dataLayer[0].userAddressLat,
                                                'locationLon': dataLayer[0].userAddressLon,
                                                'locationCity': dataLayer[0].userAddressCity,
                                                'locationArea': dataLayer[0].userAddressZip,
                                                'locationCountry': dataLayer[0].userAddressCountry,
                                            })

                                            var encodedSearchTerm = efoodLib.shopListSearch.encode(args.value)
                                            window.location.href = '/search/' + encodedSearchTerm
                                        },
                                        'search.bar.clicked': function (args) {
                                            var pageUrlPath = window.location.href.replace(window.location.origin, '')

                                            dataLayer.push({
                                                'event': 'search_bar.clicked',
                                                'userId': dataLayer[0].userId,
                                                'pageType': 'shop_list',
                                                'pageUrlPath': pageUrlPath,
                                                'locationAddress': dataLayer[0].userAddress,
                                                'locationLat': dataLayer[0].userAddressLat,
                                                'locationLon': dataLayer[0].userAddressLon,
                                                'locationCity': dataLayer[0].userAddressCity,
                                                'locationArea': dataLayer[0].userAddressZip,
                                                'locationCountry': dataLayer[0].userAddressCountry,
                                                    'verticalType': window.app.verticalType
                                            })
                                        },
                                        'search.bar.cleared': function (args) {
                                            var pageUrlPath = window.location.href.replace(window.location.origin, '')

                                            dataLayer.push({
                                                'event': 'search.cleared',

                                                'userId': dataLayer[0].userId,
                                                'searchTerm': args.term,
                                                'pageUrlPath': pageUrlPath,
                                                'pageType': 'shop_list',
                                                    'verticalType': window.app.verticalType
                                            })
                                        }
                                    }
                                });
                            };

                            document.addEventListener('DOMContentLoaded', function () {
                                initializeShopListSearch();
                            })
                          </script>

                          <form id="searchform">
                            <div
                              class="d-flex justify-content-between align-items-center justify-content-lg-end position-relative w-100"
                            >
                              <div class="search-dropdown-overlay"></div>

                              <i
                                id="search-icon"
                                class="fa fa-search px-3 mr-2 text-muted"
                              ></i>
                              <i
                                id="search-loading"
                                class="fas fa-circle-notch fa-spin px-3 mr-2 text-muted d-none"
                              ></i>

                              <input
                                type="search"
                                tabindex="1"
                                class="bg-transparent shops-search-form form-control border-0 py-4 pl-0"
                                placeholder="Search for shop or items"
                                value=""
                              />
                              <span
                                class="shops-listing-search-form-help-text text-muted font-weight-bold pr-9"
                                >Πάτησε Enter για αναζήτηση</span
                              >
                              <button
                                type="button"
                                class="clear_search_form btn btn-link px-4 text-grey"
                              >
                                <i class="fas fa-times"></i>
                              </button>
                              <div
                                id="search-dropdown"
                                class="search-dropdown pt-5 position-absolute"
                              >
                                <!-- Recent -->
                                <!-- Recent/Popular -->
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div
                      class="d-none d-lg-block col-auto pl-3 pr-0 shops-listing-sorting-pane-wrapper"
                    >
                      <div class="d-flex h-100 w-100 pr-0 pr-md-5">
                        {{-- <button
                          type="button"
                          class="btn btn-link text-grey my-auto px-0 hover-no-decoration d-flex align-items-center"
                          data-toggle-target="shops-listing-sorting-pane"
                        >
                          <span class="mb-2 mr-3">
                            <svg
                              style="pointer-events: none"
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="16"
                              height="16"
                              viewBox="0 0 16 16"
                            >
                              <defs>
                                <path
                                  id="a"
                                  d="M15 3c.6 0 1 .4 1 1s-.4 1-1 1h-4c-.6 0-1-.4-1-1s.4-1 1-1h4zM5 1c1.7 0 3 1.3 3 3S6.7 7 5 7c-1.3 0-2.4-.9-2.8-2H1c-.6 0-1-.4-1-1s.4-1 1-1h1.2C2.6 1.9 3.7 1 5 1zM1 13c-.6 0-1-.4-1-1s.4-1 1-1h4c.6 0 1 .4 1 1s-.4 1-1 1H1zm14-2c.6 0 1 .4 1 1s-.4 1-1 1h-1.2c-.4 1.1-1.5 2-2.8 2-1.7 0-3-1.3-3-3s1.3-3 3-3c1.3 0 2.4.8 2.8 2H15z"
                                />
                              </defs>
                              <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h16v16H0z" />
                                <mask id="b" fill="#fff">
                                  <use xlink:href="#a" />
                                </mask>
                                <use
                                  fill="#444"
                                  fill-rule="nonzero"
                                  xlink:href="#a"
                                />
                                <g fill="#9B9B9B" mask="url(#b)">
                                  <path d="M0 0h16v16H0z" />
                                </g>
                              </g>
                            </svg>
                          </span>
                          <span>Filter & Sorting</span>
                          <span
                            class="categories-trigger--desk-count rounded-circle text-white font-weight-bold ml-2"
                          ></span
                          ><i class="fas fa-angle-down ml-3"></i>
                        </button> --}}
                        <div
                          class="position-absolute bg-white box-shadow rounded px-10 py-9 d-none shops-listing-sorting rounded"
                          data-toggle-control="shops-listing-sorting-pane"
                        >
                          <h5 class="mb-8 h3">Φίλτρα</h5>
                          <ul class="list-unstyled mb-9">
                            <li class="mb-3">
                              <div
                                class="input-radio-mark position-relative mb-7"
                              >
                                <input
                                  class="boolean-filter"
                                  name="features"
                                  value="has_credit"
                                  type="checkbox"
                                  id="has_credit"
                                />
                                <label
                                  for="has_credit"
                                  class="font-weight-normal mb-0 text-muted pr-5 pl-10 w-100"
                                >
                                  <div class="d-flex align-items-center">
                                    <span>Mε κάρτα</span>
                                  </div>
                                </label>
                              </div>
                            </li>
                            <li class="mb-3">
                              <div
                                class="input-radio-mark position-relative mb-7"
                              >
                                <input
                                  class="boolean-filter"
                                  name="features"
                                  value="has_offers"
                                  type="checkbox"
                                  id="has_offers"
                                />
                                <label
                                  for="has_offers"
                                  class="font-weight-normal mb-0 text-muted pr-5 pl-10 w-100"
                                >
                                  <div class="d-flex align-items-center">
                                    <span>Με προσφορές</span>
                                  </div>
                                </label>
                              </div>
                            </li>
                          </ul>
                          <h5 class="mb-8 h3">Ταξινόμηση</h5>
                          <ul class="list-unstyled mb-0">
                            <li>
                              <div
                                class="input-radio-mark position-relative mb-3"
                              >
                                <input
                                  type="radio"
                                  checked
                                  class="sorting"
                                  name="order_by"
                                  value="default_order"
                                  id="default_order"
                                  autocomplete="off"
                                />
                                <label
                                  for="default_order"
                                  class="font-weight-normal mb-0 text-muted mb-5 pl-10 w-100"
                                >
                                  Προεπιλεγμένη
                                </label>
                              </div>
                            </li>
                            <li>
                              <div
                                class="input-radio-mark position-relative mb-3"
                              >
                                <input
                                  type="radio"
                                  class="sorting"
                                  name="order_by"
                                  value="distance"
                                  id="distance"
                                  autocomplete="off"
                                />
                                <label
                                  for="distance"
                                  class="font-weight-normal mb-0 text-muted mb-5 pl-10 w-100"
                                >
                                  Απόσταση
                                </label>
                              </div>
                            </li>
                            <li>
                              <div
                                class="input-radio-mark position-relative mb-3"
                              >
                                <input
                                  type="radio"
                                  class="sorting"
                                  name="order_by"
                                  value="delivery_eta"
                                  id="delivery_eta"
                                  autocomplete="off"
                                />
                                <label
                                  for="delivery_eta"
                                  class="font-weight-normal mb-0 text-muted mb-5 pl-10 w-100"
                                >
                                  Χρόνος Παράδοσης
                                </label>
                              </div>
                            </li>
                            <li>
                              <div
                                class="input-radio-mark position-relative mb-3"
                              >
                                <input
                                  type="radio"
                                  class="sorting"
                                  name="order_by"
                                  value="minimum_order"
                                  id="minimum_order"
                                  autocomplete="off"
                                />
                                <label
                                  for="minimum_order"
                                  class="font-weight-normal mb-0 text-muted mb-5 pl-10 w-100"
                                >
                                  Ελάχιστη
                                </label>
                              </div>
                            </li>
                            <li>
                              <div
                                class="input-radio-mark position-relative mb-3"
                              >
                                <input
                                  type="radio"
                                  class="sorting"
                                  name="order_by"
                                  value="average_rating"
                                  id="average_rating"
                                  autocomplete="off"
                                />
                                <label
                                  for="average_rating"
                                  class="font-weight-normal mb-0 text-muted mb-5 pl-10 w-100"
                                >
                                  Βαθμολογία
                                </label>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div
                          class="position-fixed shops-listing-sorting--backdrop fixed-top w-100 h-100"
                          data-toggle-target="shops-listing-sorting-pane"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
                @if (count($florists)==0)
                <div class="alert alert-warning">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                  Sorry, stores available in eBloom don't deliver to your address "
                  <strong>
                    @if (Session::has('address'))
                    {{Session::get('address')['region']}}
                    {{Session::get('address')['city']}},
                    {{-- 12 14, Agios Konstantinos Agrinio, 19322 --}}
                    @endif
                  </strong>".
                </div>
                @else
                @if ($notMatch ==0)
                <div class="alert alert-warning">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                  Sorry, stores from 
                  <strong>
                    "{{$floristDetails->name}}"
                  </strong> 
                  chain available in eBloom don't deliver to your address "
                  <strong>
                    @if (Session::has('address'))
                     {{Session::get('address')['region']}}, 
                    {{Session::get('address')['city']}}

                    {{-- 12 14, Agios Konstantinos Agrinio, 19322 --}}
                    @endif
                  </strong>". Here are the stores that serve your address!
                </div>
                @endif
                @endif
                <div
                  class="dynamic-notification mt-9"
                  data-placement="page-top"
                  data-quantity="1"
                  data-order="1"
                ></div>

                <div class="shops-listing-shops position-relative mt-5">
                  <h3
                    class="promoted-shops-header mt-7 mb-5 d-none"
                    data-template="Βρήκαμε %1$s προτεινόμενο"
                    data-template-plural="Βρήκαμε %1$s προτεινόμενα"
                  ></h3>
                  <h3
                    class="organic-shops-header mt-7 mb-5 d-none"
                    data-template-with-promoted="%1$s ακόμα κατάστημα"
                    data-template-with-promoted-plural="%1$s ακόμα καταστήματα"
                    data-template="Βρήκαμε %1$s κατάστημα"
                    data-template-plural="Βρήκαμε %1$s καταστήματα"
                  ></h3>

                  <div
                    class="shops-listing-shops--empty bg-white box-shadow rounded pb-8 d-none text-center"
                  >
                    <img
                      width="72"
                      class="shops-listing-shops--empty-not-serving my-8"
                      src="../site-assets/img/icons/not-serving.png"
                      alt="No restaurants found"
                    />
                    <img
                      width="72"
                      class="shops-listing-shops--empty-no-results-filters d-none my-8"
                      src="../site-assets/img/icons/no-results-filters.png"
                      alt="No restaurants found for filters"
                    />
                    <h4 class="h2 mx-auto mb-4">Δεν υπάρχουν αποτελέσματα</h4>
                    <span
                      class="shops-listing-shops--empty-not-serving-msg mx-auto mb-9 text-muted"
                    >
                      Δυστυχώς δεν βρήκαμε καταστήματα που <br />
                      να εξυπηρετούν τη διεύθυνσή σου</span
                    >
                    <span
                      class="shops-listing-shops--empty-no-results-filters-msg d-none mx-auto mb-9 text-muted"
                    >
                      Δε βρέθηκε κατάστημα που να ταιριάζει στην αναζήτησή σου.
                      <br />
                      Προσπάθησε με διαφορετικούς όρους.</span
                    >
                    <div>
                      <button class="btn btn-primary d-none mt-6 reset-filters">
                        Επαναφορά
                      </button>
                    </div>
                    <div>
                      <button
                        data-target="#myModal"
                        data-toggle="modal"
                        data-modal-class="modal-addressbox"
                        data-url="/foodatwork/modals/addressbox"
                        class="btn btn-primary d-none mt-6 change-address"
                      >
                        Βάλε άλλη διεύθυνση
                      </button>
                    </div>
                  </div>

                  <div
                    id="quick_filters"
                    class="filter-banners-wrapper mt-9 px-5 px-sm-0"
                  >
                    {{-- <div class="filter-banners row flex-nowrap">
                      <div
                        class="filter-banners-banner px-3 col col-5 col-md-3 hover-no-decoration Agora"
                        data-priority="6"
                        data-filters_query='{"super_cuisine": "efoodmarket", "quick_filter": true}'
                        data-name="Agora"
                      >
                        <a
                          href="../quick_filter/restaurants/Agora0a5b.html?area_slug=aigio"
                        >
                          <div
                            class="filter-banners-banner-inner rounded"
                            style="
                              background-image: url(../../static.e-food.gr/cdn-cgi/image/w%3d410%2ch%3d250%2cfit%3dcover%2cq%3d100%2cf%3dauto/quick_filters/agora-square-el-v1.png);
                            "
                          ></div>
                        </a>
                      </div>
                      <div
                        class="filter-banners-banner px-3 col col-5 col-md-3 hover-no-decoration Προσφορές"
                        data-priority="10"
                        data-filters_query='{"has_offers": true, "quick_filter": true}'
                        data-name="Προσφορές"
                      >
                        <a
                          href="../quick_filter/offers/%ce%a0%cf%81%ce%bf%cf%83%cf%86%ce%bf%cf%81%ce%ad%cf%820a5b.html?area_slug=aigio"
                        >
                          <div
                            class="filter-banners-banner-inner rounded"
                            style="
                              background-image: url(../../static.e-food.gr/cdn-cgi/image/w%3d410%2ch%3d250%2cfit%3dcover%2cq%3d100%2cf%3dauto/quick_filters/offers-square-el.png);
                            "
                          ></div>
                        </a>
                      </div>
                    </div> --}}
                  </div>

                  <div class="shops-listings-shops-list">
                    <div
                      class="smart-assistant-wrapper smart-assistant-wrapper-rlp mt-9"
                    >
                      <div class="rounded smart-assistant-placeholder">
                        <div class="p-7 py-md-9 px-md-11">
                          <div class="mb-5">
                            <span class="placeholder-text-line-xl w-25"></span>
                          </div>
                          <ul
                            class="list-unstyled mb-0 d-flex smart-assistant-reorder-list"
                          >
                            <li class="mr-10 flex-shrink-0">
                              <span
                                style="width: 48px; height: 48px"
                                class="d-block border placeholder-text-line rounded-circle"
                              ></span>
                              <span
                                class="d-block mt-3 placeholder-text-line"
                              ></span>
                            </li>
                            <li class="mr-10 flex-shrink-0">
                              <span
                                style="width: 48px; height: 48px"
                                class="d-block border placeholder-text-line rounded-circle"
                              ></span>
                              <span
                                class="d-block mt-3 placeholder-text-line"
                              ></span>
                            </li>
                            <li class="mr-10 flex-shrink-0">
                              <span
                                style="width: 48px; height: 48px"
                                class="d-block border placeholder-text-line rounded-circle"
                              ></span>
                              <span
                                class="d-block mt-3 placeholder-text-line"
                              ></span>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="smart-assistant rounded"></div>
                    </div>

                    @foreach ($florists as $florist)
                        
                    <div
                      class="shops-listings-shops-list-item"
                      data-restaurant_id="1259599"
                      data-chain_id="0"
                      data-name="Momento cafe"
                      data-shop_type="normal"
                      data-closed-shops-copy="Κλειστά Καταστήματα"
                      data-promoted-shops-copy="Προτεινόμενα"
                      data-shop-url="/delivery/aigio/momento-cafe"
                      data-shop-type=""
                    >
                      <a
                        href="{{url('/store/'.$florist->slug)}}"
                        class="shops-listing-shop position-relative"
                      >
                        <div
                          class="d-none position-relative shops-listing-shop-image-wrapper cover-wrapper"
                        >
                          {{-- <img
                            class="shops-listing-shop-cover w-100 h-100 lazyload"
                            loading="lazy"
                            data-src="https://cdn.e-food.gr/cdn-cgi/image/w=680,h=350,fit=cover,q=100,f=auto/shop/1259599/cover"
                            alt="Καφέδες"
                            data-object-fit="cover"
                          /> --}}
                          <img src="/uploads/products/{{$florist->image}}" alt="florist image" class="shops-listing-shop-cover w-100 h-100 lazyload">
                          {{-- <img
                            data-src="https://cdn.e-food.gr/cdn-cgi/image/f=auto/shop/1259599/logo"
                            loading="lazy"
                            class="shops-listing-shop-logo position-absolute d-inline-block rounded-circle lazyload"
                            alt="Shop logo"
                          /> --}}
                          <img src="/uploads/products/{{$florist->image}}" alt="florist image" class="shops-listing-shop-logo position-absolute d-inline-block rounded-circle lazyload">

                        </div>

                        <div
                          class="d-flex justify-content-start bg-white w-100 no-cover-area"
                        >
                          <div
                            class="d-flex mr-5 mr-sm-7 logo-wrapper align-self-start"
                          >
                            <div class="position-relative">
                              <img
                                data-src="https://cdn.e-food.gr/cdn-cgi/image/f=auto/shop/1259599/logo"
                                loading="lazy"
                                width="48"
                                height="48"
                                class="shops-listing-shop-logo d-inline-block rounded-circle lazyload"
                                alt="Shop logo"
                                src="https://cdn.e-food.gr/cdn-cgi/image/f=auto/shop/1259599/logo"
                              />
                            </div>
                          </div>

                          <div
                            class="d-flex bg-white px-3 px-sm-5"
                            style="flex: 1"
                          >
                            <div
                              class="d-flex justify-content-center bg-white flex-column"
                            >
                              <h3 class="my-0">{{$florist->name}}</h3>
                              <div class="d-flex d-sm-none">
                                <div
                                  class="text-yellow order-first d-flex align-items-center"
                                >
                                  <i
                                    class="small m-0 fas fa-star star-filled"
                                    aria-hidden="true"
                                  ></i>
                                  <span class="ml-2 my-0 small font-weight-bold"
                                    >4.0</span
                                  >
                                  <small class="mx-2 text-muted">(48)</small>
                                  <span
                                    class="mr-2 font-weight-bold text-muted small text-truncate"
                                    style="max-width: 170px"
                                  >
                                    {{-- Καφέδες --}}
                                  </span>
                                </div>
                              </div>
                              <div class="d-flex text-muted small flex-wrap">
                                <span
                                  class="mr-2 font-weight-bold d-none cuisine-name-category-slug"
                                >
                                  {{-- Καφέδες --}}
                                </span>
                                <small
                                  class="mr-2 d-none cuisine-name-category-slug-first-dot"
                                >
                                  ·
                                </small>
                                10' <small class="mx-2"> · </small>

                                Min 0,00€
                              </div>
                            </div>
                          </div>
                          <div
                            class="d-none d-sm-flex justify-content-center bg-white flex-column ratings-right pr-3"
                          >
                            <div class="text-yellow d-flex align-items-center">
                              <i
                                class="h4 m-0 fas fa-star star-filled"
                                aria-hidden="true"
                              ></i>
                              <span
                                class="ml-1 my-0 font-size-18 font-weight-bold"
                              >
                                5.0
                              </span>
                            </div>

                            <small class="text-muted">(48)</small>
                          </div>
                        </div>
                      </a>
                    </div>
                    @endforeach
                    {{-- <div
                      class="shops-listings-shops-list-item"
                      data-restaurant_id="2519900"
                      data-chain_id="0"
                      data-name="Three Cups"
                      data-shop_type="normal"
                      data-closed-shops-copy="Κλειστά Καταστήματα"
                      data-promoted-shops-copy="Προτεινόμενα"
                      data-shop-url="/delivery/aigio/three-cups"
                      data-shop-type=""
                    >
                      <a
                        href="aigio/three-cups.html"
                        class="shops-listing-shop position-relative"
                      >
                        <div
                          class="d-none position-relative shops-listing-shop-image-wrapper cover-wrapper"
                        >
                          <img
                            class="shops-listing-shop-cover w-100 h-100 lazyload"
                            loading="lazy"
                            data-src="https://cdn.e-food.gr/cdn-cgi/image/w=680,h=350,fit=cover,q=100,f=auto/shop/2519900/cover"
                            alt="Καφέδες"
                            data-object-fit="cover"
                          />

                          <img
                            data-src="https://cdn.e-food.gr/cdn-cgi/image/f=auto/shop/2519900/logo"
                            loading="lazy"
                            class="shops-listing-shop-logo position-absolute d-inline-block rounded-circle lazyload"
                            alt="Shop logo"
                          />
                        </div>

                        <div
                          class="d-flex justify-content-start bg-white w-100 no-cover-area"
                        >
                          <div
                            class="d-flex mr-5 mr-sm-7 logo-wrapper align-self-start"
                          >
                            <div class="position-relative">
                              <img
                                data-src="https://cdn.e-food.gr/cdn-cgi/image/f=auto/shop/2519900/logo"
                                loading="lazy"
                                width="48"
                                height="48"
                                class="shops-listing-shop-logo d-inline-block rounded-circle lazyload"
                                alt="Shop logo"
                                src="https://cdn.e-food.gr/cdn-cgi/image/f=auto/shop/2519900/logo"
                              />
                            </div>
                          </div>

                          <div
                            class="d-flex bg-white px-3 px-sm-5"
                            style="flex: 1"
                          >
                            <div
                              class="d-flex justify-content-center bg-white flex-column"
                            >
                              <h3 class="my-0">Three Cups</h3>
                              <div class="d-flex d-sm-none">
                                <div
                                  class="text-yellow order-first d-flex align-items-center"
                                >
                                  <i
                                    class="small m-0 fas fa-star star-filled"
                                    aria-hidden="true"
                                  ></i>
                                  <span class="ml-2 my-0 small font-weight-bold"
                                    >4.9</span
                                  >
                                  <small class="mx-2 text-muted">(147)</small>
                                  <span
                                    class="mr-2 font-weight-bold text-muted small text-truncate"
                                    style="max-width: 170px"
                                  >
                                    Καφέδες
                                  </span>
                                </div>
                              </div>
                              <div class="d-flex text-muted small flex-wrap">
                                <span
                                  class="mr-2 font-weight-bold d-none cuisine-name-category-slug"
                                >
                                  Καφέδες
                                </span>
                                <small
                                  class="mr-2 d-none cuisine-name-category-slug-first-dot"
                                >
                                  ·
                                </small>
                                15' <small class="mx-2"> · </small>

                                Ελάχιστη 0,00€
                              </div>

                              <div
                                class="mt-2 d-flex flex-wrap"
                                style="margin-left: -8px; margin-top: -4px"
                              >
                                <div
                                  class="dynamic-badge d-inline-block ml-3 mt-2 white-space-no-wrap"
                                  style="
                                    background-color: #edf7ee;
                                    color: #00bc8b;
                                  "
                                >
                                  <span class="dynamic-badge--text"
                                    >efood Deals</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="d-none d-sm-flex justify-content-center bg-white flex-column ratings-right pr-3"
                          >
                            <div class="text-yellow d-flex align-items-center">
                              <i
                                class="h4 m-0 fas fa-star star-filled"
                                aria-hidden="true"
                              ></i>
                              <span
                                class="ml-1 my-0 font-size-18 font-weight-bold"
                              >
                                4.9
                              </span>
                            </div>

                            <small class="text-muted">(147)</small>
                          </div>
                        </div>
                      </a>
                    </div> --}}

                    {{-- <div
                      class="shops-listings-shops-list-item shops-listings-shops-list-item--closed"
                      data-restaurant_id="1698803"
                      data-chain_id="0"
                      data-name="Πραλίνα"
                      data-shop_type="normal"
                      data-closed-shops-copy="Κλειστά Καταστήματα"
                      data-promoted-shops-copy="Προτεινόμενα"
                      data-shop-url="/delivery/aigio/pralina"
                      data-shop-type=""
                    >
                      <a
                        href="aigio/pralina.html"
                        class="shops-listing-shop position-relative"
                      >
                        <div
                          class="d-none position-relative shops-listing-shop-image-wrapper cover-wrapper"
                        >
                          <img
                            class="shops-listing-shop-cover w-100 h-100 lazyload"
                            loading="lazy"
                            data-src="https://cdn.e-food.gr/cdn-cgi/image/w=680,h=350,fit=cover,q=100,f=auto/shop/1698803/cover"
                            alt="Γλυκά"
                            data-object-fit="cover"
                          />

                          <img
                            data-src="https://cdn.e-food.gr/cdn-cgi/image/f=auto/shop/1698803/logo"
                            loading="lazy"
                            class="shops-listing-shop-logo position-absolute d-inline-block rounded-circle lazyload"
                            alt="Shop logo"
                          />
                        </div>

                        <div
                          class="d-flex justify-content-start bg-white w-100 no-cover-area"
                        >
                          <div
                            class="d-flex mr-5 mr-sm-7 logo-wrapper align-self-start"
                          >
                            <div class="position-relative">
                              <img
                                data-src="https://cdn.e-food.gr/cdn-cgi/image/f=auto/shop/1698803/logo"
                                loading="lazy"
                                width="48"
                                height="48"
                                class="shops-listing-shop-logo d-inline-block rounded-circle lazyload"
                                alt="Shop logo"
                                src="https://cdn.e-food.gr/cdn-cgi/image/f=auto/shop/1698803/logo"
                              />
                            </div>
                          </div>

                          <div
                            class="d-flex bg-white px-3 px-sm-5"
                            style="flex: 1"
                          >
                            <div
                              class="d-flex justify-content-center bg-white flex-column"
                            >
                              <h3 class="my-0">Πραλίνα</h3>
                              <div class="d-flex d-sm-none">
                                <div
                                  class="text-yellow order-first d-flex align-items-center"
                                >
                                  <i
                                    class="small m-0 fas fa-star star-filled"
                                    aria-hidden="true"
                                  ></i>
                                  <span class="ml-2 my-0 small font-weight-bold"
                                    >4.8</span
                                  >
                                  <small class="mx-2 text-muted">(15)</small>
                                  <span
                                    class="mr-2 font-weight-bold text-muted small text-truncate"
                                    style="max-width: 170px"
                                  >
                                    Γλυκά
                                  </span>
                                </div>
                              </div>
                              <div class="d-flex text-muted small flex-wrap">
                                <span
                                  class="mr-2 font-weight-bold d-none cuisine-name-category-slug"
                                >
                                  Γλυκά
                                </span>
                                <small
                                  class="mr-2 d-none cuisine-name-category-slug-first-dot"
                                >
                                  ·
                                </small>
                                35' <small class="mx-2"> · </small>

                                Ελάχιστη 5,00€
                              </div>

                              <div
                                class="mt-2 d-flex flex-wrap"
                                style="margin-left: -8px; margin-top: -4px"
                              >
                                <div
                                  class="dynamic-badge d-inline-block ml-3 mt-2 white-space-no-wrap"
                                  style="
                                    background-color: #f7f7f7;
                                    color: #333333;
                                  "
                                >
                                  <span class="dynamic-badge--text"
                                    >Κλειστό Κατάστημα</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="d-none d-sm-flex justify-content-center bg-white flex-column ratings-right pr-3"
                          >
                            <div class="text-yellow d-flex align-items-center">
                              <i
                                class="h4 m-0 fas fa-star star-filled"
                                aria-hidden="true"
                              ></i>
                              <span
                                class="ml-1 my-0 font-size-18 font-weight-bold"
                              >
                                4.8
                              </span>
                            </div>

                            <small class="text-muted">(15)</small>
                          </div>
                        </div>
                      </a>
                    </div> --}}

                    {{-- //last product of list --}}

                  </div>

                  <button
                    id="categories-trigger--mobile"
                    type="button"
                    data-toggle-target="cuisine-filter--mobile-drawer"
                    class="btn btn-outline-dark text-black bg-white d-lg-none hover-no-decoration font-weight-bold px-4 position-fixed fixed-bottom d-inline-block box-shadow"
                  >
                    <span class="mr-3">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                      >
                        <defs>
                          <path
                            id="a"
                            d="M15 3c.6 0 1 .4 1 1s-.4 1-1 1h-4c-.6 0-1-.4-1-1s.4-1 1-1h4zM5 1c1.7 0 3 1.3 3 3S6.7 7 5 7c-1.3 0-2.4-.9-2.8-2H1c-.6 0-1-.4-1-1s.4-1 1-1h1.2C2.6 1.9 3.7 1 5 1zM1 13c-.6 0-1-.4-1-1s.4-1 1-1h4c.6 0 1 .4 1 1s-.4 1-1 1H1zm14-2c.6 0 1 .4 1 1s-.4 1-1 1h-1.2c-.4 1.1-1.5 2-2.8 2-1.7 0-3-1.3-3-3s1.3-3 3-3c1.3 0 2.4.8 2.8 2H15z"
                          />
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                          <path d="M0 0h16v16H0z" />
                          <mask id="b" fill="#fff">
                            <use xlink:href="#a" />
                          </mask>
                          <use
                            fill="#9B9B9B"
                            fill-rule="nonzero"
                            xlink:href="#a"
                          />
                          <g fill="transparent" mask="url(#b)">
                            <path d="M0 0h16v16H0z" />
                          </g>
                        </g>
                      </svg>
                    </span>
                    <span>Φίλτρα</span>
                    <span
                      class="categories-trigger--mobile-count rounded-circle text-white font-weight-bold ml-3"
                    ></span>
                  </button>
                </div>

                <div class="closed-shops-card d-none">
                  <h4 class="mb-5 mt-7 h3">Closed Stores</h4>
                  <div
                    class="bg-white box-shadow text-center p-9 border-bottom"
                  >
                    <div class="row align-items-center mx-0">
                      <div class="d-none d-md-block col-md-auto px-0 mr-5">
                        <img
                          src="efood-assets/site-assets/img/icons/closed-shops-icon.png"
                          alt="Closed shops card icons"
                        />
                      </div>
                      <div class="col-12 col-md-auto">
                        <p
                          class="font-weight-bold text-center text-md-left m-md-0"
                          data-plural-text="Βρήκαμε %$1s κλειστά καταστήματα"
                          data-singular-text="Βρήκαμε %$1s κλειστό κατάστημα"
                        >
                          <span class="closed-shops-counter"></span>.
                        </p>
                        <p class="text-muted text-center text-md-left m-md-0">
                          Μπορείς μόνο να δεις το μενού τους.
                        </p>
                      </div>
                      <div
                        class="col-12 ml-auto col-md-4 px-0 text-center text-md-right"
                      >
                        <button
                          type="button"
                          class="btn btn-secondary btn-lg btn-block show-closed-shops-btn px-5"
                        >
                          Δες τα κλειστά καταστήματα
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <div class="bg-white box-shadow text-center p-9">
                  <div class="row align-items-center mx-0">
                    <div class="d-none d-md-block col-md-auto px-0 mr-5">
                      <img
                        src="../site-assets/img/icons/suggestions-icon.png"
                        alt="Closed shops card icons"
                      />
                    </div>
                    <div class="col-12 col-md-auto">
                      <p
                        class="font-weight-bold text-center text-md-left m-md-0"
                      >
                        Δεν βρήκες το κατάστημα που έψαχνες;
                      </p>
                      <p class="text-muted text-center text-md-left m-md-0">
                        Η ομάδα του efood περιμένει τις προτάσεις σου.
                      </p>
                    </div>
                    <div
                      class="col-12 ml-auto col-md-4 px-0 text-center text-md-right"
                    >
                      <a
                        rel="nofollow"
                        target="_blank"
                        href="https://forms.gle/vdyFxAomHrHM9aSD8"
                        class="btn btn-secondary btn-block btn-lg px-5"
                        >Πρότεινέ μας κατάστημα</a
                      >
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>

          <div
            class="shops-listing-sorting-scrolled position-fixed fixed-top bg-white box-shadow py-2"
            style="z-index: 0; height: 72px"
          >
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-3 d-none d-lg-flex align-items-center">
                  <a
                    href="../index.html"
                    class="site-logo text-hide"
                    title="Food Delivery &ndash; Order Online efood"
                  >
                    efood
                    <img
                      src="data:image/png;base64,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
"
                      alt="efood logo"
                    />
                  </a>
                </div>
                <div class="col col-lg-9">
                  <div class="row h-100">
                    <div
                      class="col col-lg-8 col-xl-9 shops-listing-sorting-scrolled-border-wrapper py-3 pr-lg-10"
                    >
                      <div class="w-100 h-100 border rounded"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-toggle-control="cuisine-filter--mobile-drawer">
            <div
              data-toggle-target="cuisine-filter--mobile-drawer"
              class="cuisine-filter--mobile-backdrop fixed-top w-100 h-100"
            ></div>
            <div
              class="cuisine-filter--mobile fixed-top h-75 w-100 bg-white filters-default-state"
            >
              <div
                class="cuisine-filter--mobile-header d-flex border-dark border-bottom px-2 py-7 fixed-top w-100 bg-white"
              >
                <button
                  type="button"
                  data-toggle-target="cuisine-filter--mobile-drawer"
                  class="btn btn-link position-absolute py-0"
                >
                  <i class="fa fa-times"></i>
                </button>
                <span class="cuisine-filter--mobile-header-heading m-auto"
                  ><strong>Filter & Sorting</strong></span
                >
              </div>
              <div class="cuisine-filter--mobile--inner h-100">
                <h5 class="mt-6 mb-9 px-9 h3">Κουζίνες</h5>
                <ul
                  class="list-unstyled cuisine-filter-list--mobile mb-9 px-9 clearfix"
                >
                  <li class="cuisine-filter-list-item--mobile mb-5">
                    <div
                      class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                    >
                      <input
                        type="checkbox"
                        value="all"
                        id="mobile_all"
                        checked
                        disabled
                      />
                      <label
                        for="all"
                        class="font-weight-normal mb-0 text-muted w-100"
                        >Όλες οι κουζίνες</label
                      >
                    </div>
                  </li>

                  <li class="cuisine-filter-list-item--mobile mb-5">
                    <div
                      class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                    >
                      <input
                        type="checkbox"
                        value=""
                        id="mobile_kafes"
                        name="kitchens"
                      />
                      <label
                        for="kafes"
                        class="font-weight-normal mb-0 text-muted w-100"
                      >
                        Καφέδες
                      </label>
                    </div>
                  </li>

                  <li class="cuisine-filter-list-item--mobile mb-5">
                    <div
                      class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                    >
                      <input
                        type="checkbox"
                        value=""
                        id="mobile_souvlakia"
                        name="kitchens"
                      />
                      <label
                        for="souvlakia"
                        class="font-weight-normal mb-0 text-muted w-100"
                      >
                        Σουβλάκια
                      </label>
                    </div>
                  </li>

                  <ul
                    data-toggle-control="cuisine-filter-list-more--m-drawer"
                    id="cuisine-filter-list-more--mobile-drawer"
                    class="list-unstyled"
                  >
                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_pizza"
                          name="kitchens"
                        />
                        <label
                          for="pizza"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Pizza
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_crepes"
                          name="kitchens"
                        />
                        <label
                          for="crepes"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Κρέπες
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_burger"
                          name="kitchens"
                        />
                        <label
                          for="burger"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Burgers
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_glyka"
                          name="kitchens"
                        />
                        <label
                          for="glyka"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Γλυκά
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_magireuta"
                          name="kitchens"
                        />
                        <label
                          for="magireuta"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Μαγειρευτά
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_makaronades"
                          name="kitchens"
                        />
                        <label
                          for="makaronades"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Ζυμαρικά
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_vafles"
                          name="kitchens"
                        />
                        <label
                          for="vafles"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Βάφλες
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_brunch"
                          name="kitchens"
                        />
                        <label
                          for="brunch"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Brunch
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_sfoliates"
                          name="kitchens"
                        />
                        <label
                          for="sfoliates"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Σφολιάτες
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_thalassina"
                          name="kitchens"
                        />
                        <label
                          for="thalassina"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Θαλασσινά
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_salates"
                          name="kitchens"
                        />
                        <label
                          for="salates"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Σαλάτες
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_elliniki"
                          name="kitchens"
                        />
                        <label
                          for="elliniki"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Ελληνική
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_psita"
                          name="kitchens"
                        />
                        <label
                          for="psita"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Ψητά - Grill
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_loykoymades"
                          name="kitchens"
                        />
                        <label
                          for="loykoymades"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Λουκουμάδες
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_artopoiimata"
                          name="kitchens"
                        />
                        <label
                          for="artopoiimata"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Αρτοποιήματα
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_bougatsa"
                          name="kitchens"
                        />
                        <label
                          for="bougatsa"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Μπουγάτσα
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_snacks"
                          name="kitchens"
                        />
                        <label
                          for="snacks"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Snacks
                        </label>
                      </div>
                    </li>

                    <li class="cuisine-filter-list-item--mobile mb-5">
                      <div
                        class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative"
                      >
                        <input
                          type="checkbox"
                          id="mobile_sandwich"
                          name="kitchens"
                        />
                        <label
                          for="sandwich"
                          class="font-weight-normal mb-0 text-muted w-100"
                        >
                          Sandwich
                        </label>
                      </div>
                    </li>
                  </ul>
                  <li class="cuisine-filter-list-item--mobile mb-5">
                    <div class="position-relative w-100">
                      <button
                        type="button"
                        data-toggle-target="cuisine-filter-list-more--m-drawer"
                        data-alter-text="<span class='mr-3'>Λιγότερες</span><i class='fa fa-angle-up'></i>"
                        class="btn btn-block btn-link pl-0 pt-0 text-left text-muted hover-no-decoration"
                      >
                        <span class="mr-3">Δες τις όλες</span>
                        <i class="fa fa-angle-down"></i>
                      </button>
                    </div>
                  </li>
                </ul>
                <h5 class="mt-6 mb-9 px-9 h3">Φίλτρα</h5>
                <ul class="list-unstyled mb-9 px-9">
                  <li>
                    <div
                      class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative clearfix mb-5"
                    >
                      <input
                        class="boolean-filter"
                        value="has_credit"
                        type="checkbox"
                        id="mobile_has_credit"
                      />
                      <label
                        for="has_credit"
                        class="mb-0 font-weight-normal text-muted w-100"
                      >
                        <div class="d-flex align-items-center">
                          <span>Mε κάρτα</span>
                        </div>
                      </label>
                    </div>
                  </li>

                  <li>
                    <div
                      class="input-radio-mark mobile-filtering-checkboxes input-radio-mark-right position-relative clearfix mb-5"
                    >
                      <input
                        class="boolean-filter"
                        value="has_offers"
                        type="checkbox"
                        id="mobile_has_offers"
                      />
                      <label
                        for="has_offers"
                        class="mb-0 font-weight-normal text-muted w-100"
                      >
                        <div class="d-flex align-items-center">
                          <span>Με προσφορές</span>
                        </div>
                      </label>
                    </div>
                  </li>
                </ul>
                <h5 class="mt-6 mb-9 px-9 h3">Ταξινόμηση</h5>
                <ul class="list-unstyled mb-9 px-9">
                  <li>
                    <div
                      class="mb-5 input-radio-mark position-relative input-radio-mark-right clearfix"
                    >
                      <input
                        type="radio"
                        checked="checked"
                        class="sorting"
                        name="mobile_order_by"
                        value="default_order"
                        id="mobile_default_order"
                        autocomplete="off"
                      />
                      <label for="default_order" class="mb-0 text-muted w-100"
                        >Προεπιλεγμένη</label
                      >
                    </div>
                  </li>
                  <li>
                    <div
                      class="mb-5 input-radio-mark position-relative input-radio-mark-right clearfix"
                    >
                      <input
                        type="radio"
                        class="sorting"
                        name="mobile_order_by"
                        value="distance"
                        id="mobile_distance"
                        autocomplete="off"
                      />
                      <label
                        for="distance"
                        class="font-weight-normal mb-0 text-muted w-100"
                        >Απόσταση</label
                      >
                    </div>
                  </li>
                  <li>
                    <div
                      class="mb-5 input-radio-mark position-relative input-radio-mark-right clearfix"
                    >
                      <input
                        type="radio"
                        class="sorting"
                        name="mobile_order_by"
                        value="delivery_eta"
                        id="mobile_delivery_eta"
                        autocomplete="off"
                      />
                      <label
                        for="delivery_eta"
                        class="font-weight-normal mb-0 text-muted w-100"
                        >Χρόνος Παράδοσης</label
                      >
                    </div>
                  </li>
                  <li>
                    <div
                      class="mb-5 input-radio-mark position-relative input-radio-mark-right clearfix"
                    >
                      <input
                        type="radio"
                        class="sorting"
                        name="mobile_order_by"
                        value="minimum_order"
                        id="mobile_minimum_order"
                        autocomplete="off"
                      />
                      <label
                        for="minimum_order"
                        class="font-weight-normal mb-0 text-muted w-100"
                        >Ελάχιστη</label
                      >
                    </div>
                  </li>
                  <li>
                    <div
                      class="mb-5 input-radio-mark position-relative input-radio-mark-right clearfix"
                    >
                      <input
                        type="radio"
                        class="sorting"
                        name="mobile_order_by"
                        value="average_rating"
                        id="mobile_average_rating"
                        autocomplete="off"
                      />
                      <label
                        for="average_rating"
                        class="font-weight-normal mb-0 text-muted w-100"
                        >Βαθμολογία</label
                      >
                    </div>
                  </li>
                </ul>
              </div>
              <div
                class="bg-white fixed-bottom d-flex justify-content-between border-top p-5"
              >
                <button
                  type="button"
                  class="mr-5 btn btn-secondary reset-filters"
                >
                  Επαναφορά
                </button>
                <button
                  type="button"
                  class="col flex-fill btn btn-primary"
                  data-toggle-target="cuisine-filter--mobile-drawer"
                >
                  <span class="shops-listing-counter mr-3"></span
                  ><span class="shops-listing-counter-restaurant-word"></span>
                </button>
              </div>
            </div>
          </div>
        </section>

        <script type="e85c68e5b6de427d773d8e77-text/javascript">
          var template = "<h6 class='font-weight-bold mb-3'>Κάρτες πληρωμής</h6><p>Το κατάστημα δέχεται κάρτες πληρωμής (Πιστωτικές, Χρεωστικές ή Πρoπληρωμένες).Υποστηρίζονται Visa και Mastercard</p><div><img class='mr-3' width='32' height='auto' src='/site-assets/img/creditcard/Visa@3x.png'><img class='mr-3' width='32' height='auto' src='/site-assets/img/creditcard/mastercard@3x.png'></div>";
        </script>
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
    {{-- <div
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
            <a href="../page/cookies.html" class="text-muted ml-2"
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
    </div> --}}
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
      tabindex="-1"
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

      <script type="e85c68e5b6de427d773d8e77-text/javascript">
        var isTouchSupported = 'ontouchstart' in window;

        function loadZopim() {
            setTimeout(function () {
                window.$zopim || (function (d, s) {
                    var z = $zopim = function (c) {
                        z._.push(c)
                    }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                    z.set = function (o) {
                        z.set._.push(o)
                    };
                    z._ = [];
                    z.set._ = [];
                    $.async = !0;
                    $.setAttribute("charset", "utf-8");
                    $.src = "http://v2.zopim.com/?2K7Jr31NY817On4bzqHgrxnFnqyXG7bb";
                    z.t = +new Date;
                    $.type = "text/javascript";
                    e.parentNode.insertBefore($, e)
                })(document, "script");

                $zopim(function () {
                    var userid = dataLayer[0].userId || 0;
                    $zopim.livechat.setEmail = '' || '';

                    $zopim.livechat.addTags("userId:" + userid);

                    $zopim.livechat.set({
                        name: '',
                        notes: "Το UserId του: " + userid,
                    });

                                            $zopim.livechat.setOnConnected(function () {
                        var department_status = $zopim.livechat.departments.getDepartment('Pizza team!');
                        if (department_status.status === 'offline') {
                            var department_status_2 = $zopim.livechat.departments.getDepartment('Burger team!');
                            if (department_status_2.status === 'offline') {
                                $zopim.livechat.hideAll();
                            } else {
                                $zopim.livechat.departments.filter('');
                                $zopim.livechat.departments.setVisitorDepartment('Burger team!');
                            }
                        } else {
                            $zopim.livechat.departments.filter('');
                            $zopim.livechat.departments.setVisitorDepartment('Pizza team!');
                        }
                    });
                                        });
            }, 12000);
        }

        if (!isTouchSupported) {
            if (window.addEventListener) {
                window.addEventListener("load", loadZopim, false);
            } else if (window.attachEvent) {
                window.attachEvent("onload", loadZopim);
            } else {
                window.onload = loadZopim;
            }
        }
      </script>
    </div>

    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","licenseKey":"89fe45fbe0","applicationID":"303025632","transactionName":"ZgYBMEIDWBdWBxYIDV9MIgdEC1kKGDcKDhJCTAIWVQM=","queueTime":0,"applicationTime":111,"atts":"SkECRgoZSxk=","errorBeacon":"bam-cell.nr-data.net","agent":""}
    </script>
    {{-- <script
      src="{{asset("efood-assets/assets/scripts/7089c43e/cloudflare-static/rocket-loader.min.js")}}"
      data-cf-settings="e85c68e5b6de427d773d8e77-|49"
      defer=""
    ></script> --}}
    <script
      src="{{asset("efood-assets/assets/scripts/7089c43e/cloudflare-static/rocket-loader.min.js")}}"
      data-cf-settings="f7cd9a4680c6ccdb45251385-|49"
      defer=""
    ></script>
  </body>

  <!-- Mirrored from www.e-food.gr/delivery/aigio by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Mar 2021 18:52:40 GMT -->
</html>
