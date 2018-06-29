function open_window(name, url, left, top, width, height, toolbar, menubar, statusbar, scrollbar, resizable){
	toolbar_str = toolbar ? 'yes' : 'no';
	menubar_str = menubar ? 'yes' : 'no';
	statusbar_str = statusbar ? 'yes' : 'no';
	scrollbar_str = scrollbar ? 'yes' : 'no';
	resizable_str = resizable ? 'yes' : 'no';
	//left 가운데 정렬이면 50%입력
	if (left=='50%') {
		sw=screen.availWidth;
		left=(sw-width)/2;
		}
	//left 가운데 정렬이면 50%입력
	if (top=='50%') {
		sh=screen.availHeight;
		top=(sh-height)/2;
		}
	window.open(url,name,'left='+left+',top='+top+',width='+width+',height='+height+',toolbar='+toolbar_str+',menubar='+menubar_str+',status='+statusbar_str+',scrollbars='+scrollbar_str+',resizable='+resizable_str);
	}