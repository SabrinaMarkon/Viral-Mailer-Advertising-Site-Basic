/* stylesheet for advsearchreplace plugin*/

.panel_wrapper { height: 85px; }
.panel_wrapper div.current { height: 85px; }

/* MS IE only styles */
* html .panel_wrapper { height: 100px; }
* html .panel_wrapper div.current { height: 100px; }

#replaceBtn, #replaceAllBtn {
	padding-bottom: 2px;
	font-weight: bold;
	width: 90px;
	height: 21px;
	border: 0;
	cursor: pointer;
}

#replaceBtn { background: url(../images/replace_button_bg.gif); }
#replaceAllBtn { background: url(../images/replace_all_button_bg.gif); }
