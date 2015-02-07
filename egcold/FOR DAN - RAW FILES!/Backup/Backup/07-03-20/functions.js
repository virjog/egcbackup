function openFile(file_name,type,width,height) {
	window.open(file_name,type,"width="+width+", height="+height+", menubar=no, resizeable=no, scrollbars=no, status=no");
}

function resizer(width,height) {
	window.resizeTo(width,height);
}