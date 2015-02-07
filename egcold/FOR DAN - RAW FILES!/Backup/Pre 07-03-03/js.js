//SuckerTree Vertical Menu (Aug 4th, 06)
//By Dynamic Drive: http://www.dynamicdrive.com/style/

var menuids=["main_menu","ru_menu"] //Enter id(s) of SuckerTree UL menus, separated by commas

function buildsubmenus(){
for (var i=0; i<menuids.length; i++){
  var ultags=document.getElementById(menuids[i]).getElementsByTagName("ul")
	for (var t=0; t<ultags.length; t++){
	ultags[t].parentNode.getElementsByTagName("a")[0].className="subfolderstyle"
	ultags[t].parentNode.onmouseover=function(){
	this.getElementsByTagName("ul")[0].style.display="block"
	}
	ultags[t].parentNode.onmouseout=function(){
	this.getElementsByTagName("ul")[0].style.display="none"
	}
	}
  }
}

if (window.addEventListener)
window.addEventListener("load", buildsubmenus, false)
else if (window.attachEvent)
window.attachEvent("onload", buildsubmenus)

function getByID (n) {
	var d = window.document;
	if (d.getElementById) {
		return d.getElementById(n);
	}
	else if (d.all)
		return d.all[n];
}

function showHide (item) {
	var obj = getByID('show_hide_' + item);
	var lnk_obj = getByID('show_hide_link_' + item);
	if (obj && lnk_obj)
		if (obj.style.display == 'none') {
		obj.style.display = 'block';
		lnk_obj.style.backgroundImage = 'url(arrow_down.gif)';
	} else if (obj.style.display == 'block') {
		obj.style.display = 'none';
		lnk_obj.style.backgroundImage = 'url(arrow_right.gif)';
	}
}