
.portfolio_nav { display:none; }
.top_bar.fixed
{
	position: fixed;
	animation-name: slideDown;
	-webkit-animation-name: slideDown;	
	animation-duration: 0.5s;	
	-webkit-animation-duration: 0.5s;
	z-index: 999;
	visibility: visible !important;
	top: 30px;
}

.top_bar.fixed #menu_wrapper div .nav
{
	margin-top: 16px;
}

.top_bar.fixed #searchform
{
	margin-top: 8px;
}

.top_bar.fixed .header_cart_wrapper
{
	margin-top: 21px;
}

.top_bar.fixed #menu_wrapper div .nav > li > a
{
	padding-bottom: 24px;
}

.top_bar.fixed .logo_wrapper img
{
	max-height: 40px;
	width: auto;
}

@media only screen and (min-width: 961px)
{
	body #mobile_nav_icon
	{
	    display: none;
	}
}

#page_caption .page_title_wrapper
{
	text-align: left}
.page_title_inner
{
	float: none;
}





#wrapper.hasbg .above_top_bar
{
    background: #313d25 !important;
	background: rgb(49, 61, 37, 0.9) !important;
	background: rgba(49, 61, 37, 0.9) !important;
}


@media only screen and (max-width: 768px) {
	html[data-menu=leftmenu] .mobile_menu_wrapper
	{
		right: 0;
		left: initial;
		
		-webkit-transform: translate(400px, 0px);
		-ms-transform: translate(400px, 0px);
		transform: translate(400px, 0px);
		-o-transform: translate(400px, 0px);
	}
}

html[data-menu=leftmenu] .mobile_main_nav, #sub_menu
{
	clear: both;
}

html[data-menu=leftmenu] #wrapper
{
	padding-top: 0;
}




