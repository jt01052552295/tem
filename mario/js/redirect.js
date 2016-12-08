// UserAgent
function isNew3DS() {
	return (navigator.userAgent.indexOf("Nintendo 3DS") != -1 && navigator.userAgent.indexOf("iPhone") != -1 );
}
function is3DS() {
	return (navigator.userAgent.indexOf("Nintendo 3DS") != -1 && navigator.userAgent.indexOf("iPhone") == -1 );
}
function isSmartDevice(){
	return !!(navigator.userAgent.toLowerCase().match(/iphone|ipod|ipad|android/));
}
function isSmartDeviceDirectory(){
	return -1 < location.href.indexOf('/sp/');
}
function isRedirect(){
	return isSmartDeviceDirectory() !== isSmartDevice();
}

if(is3DS() || isNew3DS()){
	location.href = location.protocol + '//' + location.hostname + '/3ds.html?' + document.getElementsByTagName('html')[0].getAttribute('lang');
}
if(isRedirect()){
	if(isSmartDevice()){
		location = location.protocol + '//' + location.href.split('/')[2] + '/sp' + location.pathname;
	} else {
		location.href = location.href.replace('/sp/', '/');
	}
}

