//	Function to Get Form Info from URL
function getFormInfo(url){
	var info=url.split("?");
	var nameValuePairs=info[1].split("&");
	var obj=new Object();
	for(var i=0;i<nameValuePairs.length;i++){
		var map=nameValuePairs[i].split("=");
		var name=map[0];
		var value=map[1];
		obj[name]=value;
	}
	return obj;
}

//	Cookie Functions: SET and GET
function setCookie(name, value, secondsToLive) {
	var cookie = name + "=" + encodeURIComponent(value);
	if (typeof daysToLive === "number") 
		cookie += "; max-age=" + (daysToLive);
	document.cookie = cookie;
}
function getCookies() {
	var cookies = {};
	var all = document.cookie;
	if (all === "")
		return cookies;
	var list = all.split("; ");
	for(var i = 0; i < list.length; i++) {
		var cookie = list[i];
		var p = cookie.indexOf("=");
		var name = cookie.substring(0,p);
		var value = cookie.substring(p+1);
		value = decodeURIComponent(value);
		cookies[name] = value;
	}
	return cookies;
}
