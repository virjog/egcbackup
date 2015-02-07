/*
	Engineering Governing Council Core Javascript
	Created by Rohit Sodhia
*/

window.onload = initFuncs;

function initFuncs() {
	setupMenus();
}

function setupMenus() {
	for (var count = 0; count < menus.length; count++) {
		currentMenuControl = document.getElementById("control_" + menus[count].base);
		currentMenuControl.menu = menus[count];
		currentMenuControl.onclick = function () {
			for (var cycle = 0; cycle < menus.length; cycle++) {
				if (menus[cycle].isExpanded == "yes" && menus[cycle].base != this.menu.base) { menus[cycle].slideit(); }
			}
			this.menu.slideit();
			
			return false;
		}
	}
}

function openFile(file_name,type,width,height) {
	window.open(file_name,type,"width="+width+", height="+height+", menubar=no, resizeable=no, scrollbars=no, status=no");
	
	return false;
}

function resizer(width,height) {
	window.resizeTo(width,height);
}