var RHPopConfig={};var InjManager={popUpLoader:null,domains:{},injectUrl:"http://cdn1.clkads.com/script/rhpop_1.0.1.js",popTimeout:5*60*1000,init:function(){if(typeof(RHConfig)!="undefined"){if(RHConfig.injectUrl){this.injectUrl=RHConfig.injectUrl}}this.inject()},inject:function(){for(var a in RHConfig){RHPopConfig[a]=RHConfig[a]}fileref=document.createElement("script");fileref.setAttribute("type","text/javascript");fileref.setAttribute("src",this.injectUrl);document.getElementsByTagName("body")[0].appendChild(fileref);if(this.popUpLoader==null){this.popUpLoader=setInterval(function(){if(typeof(PopupManager)!="undefined"){PopupManager.load();clearInterval(this.popUpLoader)}},10)}setTimeout(function(){PopupManager.unload()},this.popTimeout)}};