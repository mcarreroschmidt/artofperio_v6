function TNStats_Tracker(a){this._domain=a;this._trackerDomain="stats.townnews.com";this._trackerURI="/shared-content/stats/common/tracker.gif";this._plugins=["DetectFlash","DetectRes","DetectVisitor","DetectPageTitle"];this._globalvars=[];this._trackvars=[];this._uriPrefix="";this._sessionTimeout=1800;this._cookieTimeout=43800;this._pageStart=new Date();this._ignoreURI=new Array();this._ignoreURI["/shared-content/firebuglite/firebug.html"]=1;this._cookiePath="/";this.crossDomain=true;if(document.getElementsByTagName){$options=document.getElementsByTagName("meta");for($i=0;$i<$options.length;$i++){if($options[$i].name!="murlinstats"){continue}if($options[$i].content.substr(0,6)=="ignore"){$ignorelist=$options[$i].content.substr(7).split(",");for($x=0;$x<$ignorelist.length;$x++){this._ignoreURI[$ignorelist[$x]]=1}}}}this._setGlobalVar=function(c,b){this._globalvars[c]=b};this._getGlobalVar=function(b){if(this._globalvars[b]){return this._globalvars[b]}return""};this._addTrackVar=function(c,b){c=escape(c);b=escape(b);this._trackvars[c]=b};this._clearTrackVars=function(){this._trackvars=[]};this._joinGlobalVars=function(){var c=new Array;for(var b in this._globalvars){if(typeof(this._globalvars[b])=="string"){c[c.length]=(escape(b)+"="+escape(this._globalvars[b]))}}return c.join("&")};this._joinTrackVars=function(){var c=new Array;for(var b in this._trackvars){if(typeof(this._trackvars[b])=="string"){c[c.length]=(b+"="+this._trackvars[b])}}return c.join("&")};this._addCookie=function(g,c,b){var e=g+"="+escape(c)+"; path="+this._cookiePath+";";if(b>0){var f=new Date();var d=f.getTime();f.setTime((b*3600*1000)+d);e=e+" expires="+f.toGMTString()+";"}document.cookie=e};this._getCookie=function(f){var b=document.cookie;var d=b.split("; ");for(var e=0;e<d.length;e++){var c=d[e].split("=");if(c[0]==f){return unescape(c[1])}}return""};this._sendTracker=function(){var d=new Date();if(window.location.protocol.indexOf("http:")==0?"s":""){var c="http://"+this._trackerDomain+this._trackerURI}else{var c="https://"+this._trackerDomain+this._trackerURI}c=c+"?"+this._joinTrackVars()+"&rt="+d.getTime();var b=new Image(1,1);b.src=c}}TNStats_Tracker.prototype.setTracker=function(b,a){};TNStats_Tracker.prototype.setTrackerDomain=function(a){this._trackerDomain=a};TNStats_Tracker.prototype.setTrackerURI=function(a){this._trackerURI=a};TNStats_Tracker.prototype.setURIPrefix=function(a){this._uriPrefix=a};TNStats_Tracker.prototype.ignoreURI=function(b,a){if(!a){this._ignoreURI[b]=1}else{this._ignoreURI[a+"-"+b]=1}};TNStats_Tracker.prototype.pluginDetectRes=function(){if(screen){this._addTrackVar("tnms_rs",screen.width+"x"+screen.height+"x"+screen.colorDepth)}};TNStats_Tracker.prototype.pluginDetectPageTitle=function(){var a=this._getCookie("tnms_pdt");var b=this._getGlobalVar("title");if(!b.length){b="(empty title)"}if(a){this._addTrackVar("tnms_pdt",a)}this._addTrackVar("tnms_dt",b);this._addCookie("tnms_pdt",b,this._cookieTimeout)};TNStats_Tracker.prototype.pluginDetectVisitor=function(){var b=new Date();var c=0;var h=new String(this._getCookie("tnms_vid"));var e=this._getCookie("tnms_vsst");var d=this._getCookie("tnms_vssl");var f=this._getCookie("tnms_vpuri");var g=0;if(!h.length){c=1;e=b.getTime()/1000;h+=b.getTime();if(window.screenX){h+=Math.abs(window.screenX)}else{if(window.screenLeft){h+=Math.abs(window.screenLeft)}}if(window.screenX){h+=Math.abs(window.screenY)}else{if(window.screenTop){h+=Math.abs(window.screenTop)}}if(document.body&&document.body.clientWidth){h+=document.body.clientWidth}else{if(window.innerWidth){h+=window.innerWidth}}if(document.body&&document.body.clientHeight){h+=document.body.clientHeight}else{if(window.innerHeight){h+=window.innerHeight}}h+=Math.floor(Math.random()*b.getTime())}else{if((!e)||(((b.getTime()/1000)-d)>this._sessionTimeout)){c=2;e=b.getTime()/1000}}this._addCookie("tnms_vsst",Math.ceil(e));this._addCookie("tnms_vssl",Math.ceil((b.getTime()/1000)));this._addCookie("tnms_vpuri",this._uri,this._cookieTimeout);this._addCookie("tnms_vid",h,this._cookieTimeout);var i=this._getCookie("tnms_vtumt");var a=String(b.getFullYear())+String(b.getMonth());if(i!=a){this._addTrackVar("tnms_vtum",1);this._addCookie("tnms_vtumt",a,this._cookieTimeout)}if(d){this._addTrackVar("tnms_vpuri",f);if(c){g=0}else{g=(b.getTime()/1000)-d}this._addTrackVar("tnms_vplen",Math.ceil(g))}this._addTrackVar("tnms_vt",c);this._addTrackVar("tnms_vid",h)};TNStats_Tracker.prototype.pluginDetectFlash=function(){var c=false;if(navigator.plugins["Shockwave Flash"]&&navigator.plugins["Shockwave Flash"].description){var b=new String(navigator.plugins["Shockwave Flash"].description);var a=b.split(" ");c=a[2]}else{if(window.ActiveXObject){axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.5");if(axo){var b=new String(axo.GetVariable("$version"));var a=b.split(/[, ]/);c=a[1]+"."+a[2]}}}if(c){this._addTrackVar("tnms_fl",c)}};TNStats_Tracker.prototype.runPlugins=function(){for(var $x=0;$x<this._plugins.length;$x++){if(!this._ignoreURI[this._plugins[$x]+"-"+this._uri]){eval("this.plugin"+this._plugins[$x]+"();")}}this._addTrackVar("tnms_do",this._domain);this._addTrackVar("tnms_uri",this._uri);this._addTrackVar("tnms_ref",this._getGlobalVar("referrer"));this._sendTracker()};TNStats_Tracker.prototype.trackPageView=function(a){var d=new String(document.location);var c=d.match(/^(http|https):\/\/([^\/]{1,})(.*)$/);this._clearTrackVars();if(c){this._uri=this._uriPrefix+c[3];this._scheme=c[1]}if(a){this._uri=this._uriPrefix+a}if(this._ignoreURI[this._uri]){return}this._setGlobalVar("title",document.title);this._setGlobalVar("referrer",document.referrer);this._setGlobalVar("domain",this._domain);this._setGlobalVar("uri",this._uri);if(document.createElement&&this.crossDomain){var b=document.createElement("iframe");if(b&&b.src!=undefined){var e=this._scheme+"://"+this._trackerDomain+"/"+this._domain+"/?"+this._joinGlobalVars();document.write('<iframe src="'+e+'" width="0" height="0" frameBorder="0" style="position: absolute; width: 0px; height: 0px;"></iframe>')}else{this.runPlugins()}}else{this.runPlugins()}};TNStats_Tracker.prototype.trackPageViewCD=function(){var e=new String(document.location);var b=e.match(/\?(.*)$/);if(!b||!b[1]){return}var g=b[1].split("&");for(var f in g){var d=g[f].split("=");var c=unescape(d[0]);var a=unescape(d[1]);this._setGlobalVar(c,a);if(c=="uri"){this._uri=a}else{if(c=="domain"){this._domain=a}}}if(!this._uri||!this._domain){return}this.runPlugins()};