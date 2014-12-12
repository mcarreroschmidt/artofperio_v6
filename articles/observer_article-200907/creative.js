function adsys_getAdCount(nAdID)
{var sAllCookies=document.cookie;var nAdCount=0;var sIndexString="tnadsys_adcount_"+nAdID+"=";var nPos=sAllCookies.indexOf(sIndexString);if(nPos!=-1)
{var nStart=nPos+sIndexString.length;var nEnd=sAllCookies.indexOf(";",nStart);if(nEnd==-1)
{nEnd=sAllCookies.length;}
var sDataString=sAllCookies.substring(nStart,nEnd);var aAdData=sDataString.split("&");nAdCount=parseInt(aAdData[0],10);if(isNaN(nAdCount))
{nAdCount=0;}}
return nAdCount;}
function adsys_hasReachedFreqCap(nAdID,nLimit)
{var nAdCount=adsys_getAdCount(nAdID);if(nAdCount>=nLimit)
{return true;}
return false;}
function adsys_incrementAdView(nAdID,nMinutes)
{var sAllCookies=document.cookie;var sIndexString="tnadsys_adcount_"+nAdID+"=";var nPos=sAllCookies.indexOf(sIndexString);if(nPos==-1)
{var expdate=new Date((new Date()).getTime()+nMinutes*60000);document.cookie=sIndexString+"1&"+escape(expdate.toGMTString())+"; expires="+expdate.toGMTString();}
else
{var sCookieData=sAllCookies.substring(nPos+sIndexString.length);var aCookieData=sCookieData.split(";");var sDataString=aCookieData[0];var aData=sDataString.split("&");nAdCount=parseInt(aData[0],10)+1;document.cookie=sIndexString+nAdCount+"&"+aData[1]+"; expires="+unescape(aData[1]);}}
function adsys_displayAd(sAdsURL,sDomain,aAdSet,aCampaigns)
{var adNumber=null;var adLink="";var aAds=new Array();var sAdUniqueURL=sSubURL=sAdsURL;var sAdsBaseURL=""
var sFlashVars=""
var nTotalWeight=0;var aCampaignTotals=new Array();var nHighestCampaign=0;var nCampaignID=0;if(!document.adsys)
{document.adsys=new Array();}
for(var i=0;i<aAdSet.length;i++)
{var tempAry=aAdSet[i][1].split("-");var nAdId=tempAry[0];if(!document.adsys[nAdId])
{aAds[aAds.length]=aAdSet[i];}}
if(aAds.length==0)
{return;}
else if(aAds.length==1)
{adNumber=0;}
else
{aCampaignTotals[0]=0;for(var i=0;i<aAds.length;i++)
{nCampaignID=aAds[i][9];if(!aCampaignTotals[nCampaignID])
{aCampaignTotals[nCampaignID]=0;}
aAds[i][7]=aAds[i][7]*100;aCampaignTotals[nCampaignID]=aCampaignTotals[nCampaignID]+aAds[i][7];if(aCampaignTotals[nCampaignID]>=aCampaignTotals[nHighestCampaign])
{nHighestCampaign=nCampaignID;}}
for(var i=0;i<aAds.length;i++)
{nCampaignID=aAds[i][9];nMultiplier=aCampaignTotals[nHighestCampaign]/aCampaignTotals[nCampaignID];nPercentage=aCampaigns[nCampaignID]/100;aAds[i][7]=Math.ceil(aAds[i][7]*nMultiplier*nPercentage);aAds[i][8]=nTotalWeight;nTotalWeight+=aAds[i][7];}
randomWeight=Math.floor(Math.random()*nTotalWeight);for(var i=0;i<aAds.length;i++)
{if(randomWeight>=aAds[i][8])
{adNumber=i;}
else
{break;}}}
var temp=aAds[adNumber][1].split("-");var nAdId=temp[0];document.adsys[nAdId]=1;if(aAds[adNumber][11]&&(aAds[adNumber][11]>0))
{adsys_incrementAdView(nAdId,aAds[adNumber][11]);}
sAdsBaseURL="/creative/"+sDomain+"/"+aAds[adNumber][0];sAdsBaseURL+="/"+aAds[adNumber][1]+"."+aAds[adNumber][2];sAdUniqueURL+="/"+Math.floor(Math.random()*100000000)+sAdsBaseURL;sAdClickURL="/c"+Math.floor(Math.random()*100000000);sAdExtURL="/e"+Math.floor(Math.random()*100000000);sAdsBaseExtURL="/creative/"+sDomain+"/"+aAds[adNumber][0]+"/"+aAds[adNumber][1]+".external";switch(aAds[adNumber][2])
{case"swf":if(aAds[adNumber][5][0]!='')
{sSubURL+=sAdClickURL;sSubURL+="/creative/"+sDomain+"/"+aAds[adNumber][6];sSubURL+="/"+aAds[adNumber][1]+"."+aAds[adNumber][2];sFlashVars="clickTAG="+sSubURL+"%3Fr%3D"+aAds[adNumber][5][0];for(var x=1;x<aAds[adNumber][5].length;x++)
{sFlashVars+="&clickTAG"+(x+1)+"="+sSubURL+"%3Fr%3D"+aAds[adNumber][5][x];}
sAdUniqueURL+="?"+sFlashVars;}
adLink='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" ';adLink+='codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" ';adLink+='width="'+aAds[adNumber][3]+'" height="'+aAds[adNumber][4];adLink+='" name="'+aAds[adNumber][1]+'" id="'+aAds[adNumber][1]+'">';adLink+='<param name="play" value="true">';adLink+='<param name="movie" value="'+sAdUniqueURL+'" />';adLink+='<param name="quality" value="high" />';adLink+='<param name="wmode" value="opaque" />';adLink+='<param name="FlashVars" value="'+sFlashVars+'" />';adLink+='<embed src="'+sAdUniqueURL+'" quality="high" ';adLink+='FlashVars="'+sFlashVars+'" ';adLink+='wmode="opaque" ';adLink+='width="'+aAds[adNumber][3]+'" height="'+aAds[adNumber][4];adLink+='" name="'+aAds[adNumber][1];adLink+='" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">';adLink+='</embed>';adLink+='</object>';break;case"js":adLink='<scr'+'ipt type="text/javascript" src="'+sAdUniqueURL+'">';adLink+='</scr'+'ipt>';break;case"flv":if(document.usePlayer)
{var theSkin="FlowPlayer.swf";var sClickLink="";if(aAds[adNumber][12])
{var sMovie=sAdsURL+sAdExtURL+sAdsBaseExtURL+'?o='+aAds[adNumber][12];sClickLink=sAdsURL+sAdClickURL+sAdsBaseExtURL+'?r='+aAds[adNumber][5];}
else
{var sMovie=sAdUniqueURL;sClickLink=sAdsURL+sAdClickURL+sAdsBaseURL+'?r='+aAds[adNumber][5];}
adLink+='<object type="application/x-shockwave-flash" id="FlowPlayer" ';adLink+='width="'+aAds[adNumber][3]+'" height="'+aAds[adNumber][4]+'" ';adLink+='data="/shared-content/flowplayer/'+theSkin+'">';adLink+='<param name="allowScriptAccess" value="always" />';adLink+='<param name="movie" value="/shared-content/flowplayer/'+theSkin+'" />';adLink+='<param name="quality" value="high" />';adLink+='<param name="scaleMode" value="showAll" />';adLink+='<param name="allowfullscreen" value="true" />';adLink+='<param name="wmode" value="transparent" />';adLink+='<param name="allowNetworking" value="all" />';adLink+='<param name="flashvars" value="config={';if(aAds[adNumber][13]=='1'){adLink+='autoPlay: true, autoBuffering: true, ';overlay=0;}else{adLink+='autoPlay: false, autoBuffering: false, ';overlay=1;}
adLink+='loop: false, ';if(aAds[adNumber][15]==0){adLink+='initialVolumePercentage: 0,';}
else if(aAds[adNumber][15]){adLink+='initialVolumePercentage: '+aAds[adNumber][15]+',';}
adLink+='baseURL: \'/shared-content/flowplayer\', ';adLink+='fullScreenScriptURL: \'/shared-content/flowplayer/fullscreen.js\', ';adLink+='showLoopButton: false, ';adLink+='showPlayListButtons: false, ';adLink+='playList: [';if(overlay){if(aAds[adNumber][14]){adLink+='{ overlayId: \'play\', url: \''+aAds[adNumber][14]+'\'},';}}
adLink+='{ url: \''+sMovie+'\', type: \'flv\', linkUrl: \''+sClickLink+'\' }]}" />';adLink+='</object>';}
else
{var sClickLink="";if(aAds[adNumber][12])
{var sMovie=sAdsURL+sAdExtURL+sAdsBaseExtURL+'?o='+aAds[adNumber][12];sClickLink=sAdsURL+sAdClickURL+sAdsBaseExtURL+'?r='+aAds[adNumber][5];}
else
{var sMovie=sAdUniqueURL;sClickLink=sAdsURL+sAdClickURL+sAdsBaseURL+'?r='+aAds[adNumber][5];}
adLink='<scr'+'ipt type="text/javascript">';adLink+="document.embededAd = {itemUrl: '"+sMovie+"', itemLink: '"+sClickLink+"', preRoll: '"+aAds[adNumber][6]+"', itemType: 'flv'};\n";adLink+='</scr'+'ipt>';}
break;default:if(!document.usePlayer&&aAds[adNumber][2]=="jpg")
{var sClickLink="";sClickLink=sAdsURL+sAdClickURL+sAdsBaseURL+'?r='+aAds[adNumber][3];adLink='<scr'+'ipt type="text/javascript">';adLink+="document.embededAd = {itemUrl: '"+sAdUniqueURL+"', itemLink: '"+sClickLink+"', preRoll: '"+aAds[adNumber][6]+"', itemType: 'jpg'};\n";adLink+='</scr'+'ipt>';}
else
{if(aAds[adNumber][3]!="")
{if(aAds[adNumber][3].substring(0,7)=="mailto:")
{adLink='<a href="'+aAds[adNumber][3]+'">';}
else
{adLink='<a href="'+sAdsURL+sAdClickURL+sAdsBaseURL+'?r='+aAds[adNumber][3]+'"';if(aAds[adNumber][4]=="1")
{adLink+=' target="_blank"';}
adLink+='>';}}
adLink+='<img alt="*" border="0" src="'+sAdUniqueURL+'" />';if(aAds[adNumber][3]!="")
{adLink+='</a>';}}
break;}
document.write(adLink);}