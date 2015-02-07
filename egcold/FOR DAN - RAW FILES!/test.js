// JavaScript Document

window.onload = initFuncs;

function initFuncs () {
	var ele = testFunc("test2", 1000);	
	var ele = testFunc("test", 1000);	
}

function testFunc(eleName, expandTime) {
	var control = document.getElementById("control_" + eleName);
	var element = document.getElementById("div_" + eleName);
	
	var base = new Object();
	base.expandTime = expandTime;
	base.height = element.offsetHeight - 2;
	element.style.height = "0px";

	control.onclick = clickFunc;
	
	
	function clickFunc () {
		var startTime = new Date().getTime();
		slideDiv(startTime);
	
		return false;
	}
	
	function slideDiv(startTime) {
		var percentDone = (1 - Math.cos(((new Date().getTime() - startTime) / base.expandTime) * Math.PI)) / 2;
		element.style.height = (percentDone * base.height) + "px";
		
		if (percentDone < 1) {setTimeout(function () {slideDiv(startTime);},10);}
		else { this.base.status = "down"; }
	}
}