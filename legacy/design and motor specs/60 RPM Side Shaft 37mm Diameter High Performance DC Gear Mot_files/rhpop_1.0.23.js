function jsPopunder(m,z,n,p){var s=(top!=self&&typeof(top.document.location.toString())==="string")?top:self;var w=null;z=(z||{});var o=(z.astab)?true:false;var c=(z.mask)?true:false;var g=(z.name||Math.floor((Math.random()*1000)+1));var b=(z.width||window.outerWidth||window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth);var l=(z.height||(window.outerHeight-100)||window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight);var k=(typeof(z.left)!="undefined")?z.left.toString():window.screenX;var j=(typeof(z.top)!="undefined")?z.top.toString():window.screenY;var v=(z.wait||3600);v=(v*1000);var u=(z.cap||2);n=(typeof(n)==="function")?n:function(){return i()};p=(typeof(p)==="function")?p:function(){return e()};var t=0;var x=(z.cookie||"__.popunder");var y=function(){var B=navigator.userAgent.toLowerCase();var A={webkit:/webkit/.test(B),mozilla:(/mozilla/.test(B))&&(!/(compatible|webkit)/.test(B)),chrome:/chrome/.test(B),msie:((/msie/.test(B)||/trident/.test(B)||!!window.MSStream)&&!/opera/.test(B)),firefox:/firefox/.test(B),safari:(/safari/.test(B)&&!(/chrome/.test(B))),opera:/opera/.test(B)};A.version=(A.safari)?(B.match(/.+(?:ri)[\/: ]([\d.]+)/)||[])[1]:(B.match(/.+(?:ox|me|ra|ie)[\/: ]([\d.]+)/)||[])[1];return A}();function d(E,A){var C=document.addEventListener||document.attachEvent,D=document.removeEventListener||document.detachEvent;if(document.readyState==="complete"||document.readyState==="loaded"||document.readyState==="interactive"){E();return}A=A||false;var B=document.addEventListener?"DOMContentLoaded":"onreadystatechange";C.call(document,B,function(G){try{D(B,arguments.callee,A)}catch(F){}E()},A)}function i(){try{t=Math.floor(document.cookie.split(x+"Cap=")[1].split(";")[0])}catch(A){}return(u<=t)}function e(){var B=new Date();var C=new Date(B.setTime(B.getTime()+v));document.cookie=x+"=1;expires="+C.toGMTString()+";path=/";var A=new Date();A.setHours(24,0,0,0);document.cookie=x+"Cap="+(t+1)+";expires="+A.toGMTString()+";path=/"}function f(A,E,B,F,G,D){if(n()){return}var I="toolbar=no,scrollbars=yes,location=yes,statusbar=yes,menubar=no,resizable=1,width="+B.toString()+",height="+F.toString()+",screenX="+G+",screenY="+D;var C=false;var H=function(P){if(n()){return}C=true;if(y.chrome||y.safari){if(o){var M=document.createElement("a");M.href=A;M.target=E;var L=document.createEvent("MouseEvents");L.initMouseEvent("click",false,true,window,0,0,0,0,0,true,false,false,true,0,null);M.dispatchEvent(L)}else{s.window.open(A,E,I);var J=document.createElement("object");J.setAttribute("type","application/x-shockwave-flash");document.body.appendChild(J).focus();document.body.removeChild(J);var N=window.open("about:blank","ghost"+Math.floor(Math.random()).toString());try{N.close()}catch(O){}}}else{if(o){w=s.window.open(A,E)}else{w=s.window.open(A,E,I)}if(w){setTimeout(function(){q()},10)}else{C=false}}if(C){p()}if(c&&i()){try{var K=document.getElementById(x+"_mask");K.parentNode.removeChild(K)}catch(O){}}};if(!c){if(document.addEventListener){document.addEventListener("click",H,false)}else{document.attachEvent("onclick",H)}}else{d(function(){var K=document.createElement("div");K.id=x+"_mask";K.style.cssText='border:0!important;margin:0!important;padding:0!important;position:fixed!important;top:0!important;left:0!important;width:100%!important;height:100%!important;z-index:2147483647;background:white;opacity:0!important;-moz-opacity:0!important;filter:alpha(opacity=0)!important;filter:"alpha(opacity=0)"!important;';if(K.addEventListener){K.addEventListener("click",H,false)}else{K.attachEvent("onclick",H)}try{document.body.appendChild(K)}catch(J){document.documentElement.appendChild(K)}})}}var r;function q(){try{w.blur();w.opener.window.focus();window.self.window.focus();window.focus();if(y.firefox){a()}if(y.webkit){h()}if(y.msie){r=setInterval(function(){w.blur();w.opener.window.focus();window.self.window.focus();window.focus()},1);setTimeout(function(){clearTimeout(r)},3000)}}catch(A){}}function a(){var A=window.open("about:blank");A.focus();A.close()}function h(){var A="";var B=document.createElement("a");B.href="data:text/html,<scr"+A+"ipt>window.close();</scr"+A+"ipt>";document.getElementsByTagName("body")[0].appendChild(B);var C=document.createEvent("MouseEvents");C.initMouseEvent("click",false,true,window,0,0,0,0,0,true,false,false,true,0,null);B.dispatchEvent(C);B.parentNode.removeChild(B)}if(n()){return}else{f(m,g,b,l,k,j)}}var PopupManager={loaded:false,clicksNum:0,config:{cid:"RHPOP",popupUrl:"",cappingMinTime:2700,cappingMaxNum:5,cappingPeriod:86400,minClicks:0,useBlocker:false},popupUrl:null,cookie:{set:function(c,d,f,e){var a=null;if(f){var b=new Date();b.setTime(b.getTime()+(f*1000));a=b.toGMTString();if(e){d=d+"|"+a}}document.cookie=c+"="+escape(d)+(a?";expires="+a:"")+";path=/"},get:function(b){var e=b+"=";var a=document.cookie.split(";");for(var d=0;d<a.length;d++){var f=a[d];while(f.charAt(0)==" "){f=f.substring(1,f.length)}if(f.indexOf(e)==0){return unescape(f.substring(e.length,f.length))}}return null},update:function(b,c,a){document.cookie=b+"="+escape(c)+"|"+escape(a)+";expires="+a+";path=/"},remove:function(a){var b=a+"=";b=b+";path=/";document.cookie=b+";expires=Thu, 01-Jan-1970 00:00:01 GMT"}},afterPopup:function(){this.storeCookies();if(typeof(revenueHitsPUMngr)!="undefined"&&revenueHitsPUMngr!=null){try{revenueHitsPUMngr.onVisible()}catch(a){}}},isAllowed:function(){var f=false;if(this.config.minClicks!=0){if(this.clicksNum<this.config.minClicks){this.clicksNum++;return}}var c=null;if(this.config.cappingMinTime!=0){c=this.cookie.get(this.config.cid+"rhpmin")}if(!c){var a=null;if(this.config.cappingMaxNum!=0){a=this.cookie.get(this.config.cid+"rhpmax")}if(!a){f=true}else{var b=0,g="";try{b=parseInt(a.split("|")[0]);g=a.split("|")[1]}catch(d){}if(b<this.config.cappingMaxNum){f=true}}}return f},storeCookies:function(){if(this.config.cappingMinTime!=0){this.cookie.set(this.config.cid+"rhpmin","yes",this.config.cappingMinTime)}if(this.config.cappingMaxNum!=0){var a=this.cookie.get(this.config.cid+"rhpmax");if(!a){this.cookie.set(this.config.cid+"rhpmax",1,this.config.cappingPeriod,true)}else{var b=0,d="";try{b=parseInt(a.split("|")[0]);d=a.split("|")[1]}catch(c){}if(b<this.config.cappingMaxNum){this.cookie.update(this.config.cid+"rhpmax",b+1,d)}}}},load:function(){if(!this.loaded){this.loaded=true;var d=(typeof(_$rh)!="undefined"&&_$rh.POPUNDER)?_$rh.POPUNDER.pop():RHPopConfig;if(d.cid){this.config.cid=d.cid}if(d.popupUrl){this.config.popupUrl=d.popupUrl}if(typeof(d.useBlocker)!="undefined"){this.config.useBlocker=d.useBlocker}try{if(typeof(d.cappingMinTime)!="undefined"){this.config.cappingMinTime=parseInt(d.cappingMinTime)}}catch(c){}try{if(typeof(d.cappingMaxNum)!="undefined"){this.config.cappingMaxNum=parseInt(d.cappingMaxNum)}}catch(c){}try{if(d.cappingPeriod){this.config.cappingPeriod=parseInt(d.cappingPeriod)}}catch(c){}var b=null;try{b=this.getTermFromUrl();if(!b){b=this.getKeywordFromMeta();if(b){b=escape(b)}}}catch(c){}this.popupUrl=this.config.popupUrl+(b?"&q="+b:"");this.isCookieSupported();var a=this.config.useBlocker&&this.isAllowed();jsPopunder(PopupManager.popupUrl,{mask:a,name:"rhpop"},function(){return !PopupManager.isAllowed()},function(){PopupManager.afterPopup()})}},unload:function(){this.isAllowed=function(){return false}},isCookieSupported:function(){var a=this.cookie.get("rhid");if(!a){this.cookie.set("cs","1",24*60*60)}else{this.cookie.remove("cs")}},getMetaContent:function(d){var c=document;try{c=top.document}catch(b){}var f=c.getElementsByTagName("meta");if(f){for(var a=0;a<f.length;a++){if(f[a].getAttribute("name")==d){return f[a].getAttribute("content")}}}return null},getKeywordFromMeta:function(){var a=this.getMetaContent("keywords");if(a==null){a=this.getMetaContent("description");if(a==null){a=document.title}}if(a!=null&&a.length>80){a=a.substr(0,80)}return a},getTermFromUrl:function(){var g=null;var d=null;try{g=window.location;g=window.top.location}catch(j){}if(g){var h=["q=","term=","search=","p=","query=","searchString=","keyword=","keywords=","_nkw=","field-keywords=","s=","search_query=","find_desc="];for(var c=0;c<h.length;c++){var a="[\\?#&]"+h[c]+"([^&#]*)";var f=new RegExp(a);var b=f.exec(g);if(b!=null){d=b[1];break}}}return d}};PopupManager.load();