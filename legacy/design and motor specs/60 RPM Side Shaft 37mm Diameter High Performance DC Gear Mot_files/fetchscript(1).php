/** 
* Main CSS file for the "default" theme for VirtueMart
* @copyright 2006-2008 soeren
* @license GNU/GPL
*
*/

/* General Shop Styles here please */
.addtocart_button, .notify_button {
	text-align:center;
	background-position:bottom left;
	width:160px;height:30px;
	cursor:pointer;
	border: none;
	font-weight:bold;
	font-family:inherit;
	vertical-align: middle;
	overflow:hidden;
	color: white;
	
}
/*Mouse over property on notify image added on 05/09/2013 by dipesh */
.notify_button:hover
	{
	color:#FF8000;	
	}
.addtocart_button {
	background: url( "themes/default/images/add-to-cart_blue.gif" ) no-repeat  center transparent;
}
.notify_button {
	background: url( "themes/default/images/notify_blue.gif" ) no-repeat  center transparent;
}
.addtocart_button_module {
	text-align:center;
	background-position:bottom left;
	width:160px;height:30px;
	cursor:pointer;
	color: #000000;
	border: none;
	font-weight:bold;
	font-family:inherit;
	background: url( "themes/default/images/transparent.gif" ) no-repeat  center transparent;
	vertical-align: middle;
	overflow:hidden;
	
}

input.addtocart_button_module:hover  {
	color: #333333;	
}

.addtocart_form {
	width: 100%;
	display: inline;
	white-space: nowrap;
}

/* The quantity box beneath the "add to cart" button  */
.quantity_box {	
	vertical-align: middle;
}
.quantity_box_button {
	width:10px;
	vertical-align:middle;
	height:10px;
	background-repeat: no-repeat;
	background-position: center;
   border:1px solid #000;
}
.quantity_box_button_down {
	background-image: url( "themes/default/images/down_small.gif" );
}
.quantity_box_button_up {
	background-image: url( "themes/default/images/up_small.gif" );
}
.continue_link, .checkout_link {
	margin: 2px;
	padding: 2px 0px 2px 40px;
	vertical-align: middle;
	font-weight: bold;
	font-size: 1.4em;
	width: 40%;
}
.checkout_link {
	margin-left: 40px;
	background: url( "themes/default/images/forward.png" ) no-repeat left;
}
.continue_link {
	background: url( "themes/default/images/back.png" ) no-repeat left;
}
.next_page {
	background: url( "themes/default/images/next_16x16.png" ) no-repeat right;
	padding-right: 30px;
	line-height: 20px;
	float: right;
	width: auto;
}
.previous_page {
	background: url( "themes/default/images/previous_16x16.png" ) no-repeat left;
	padding-left: 30px;
	line-height: 20px;
	float: left;
	width: auto;
}

/* This is the text box informing customers about your returns policy */
.legalinfo {
	background: #d3d3d3;
	border: 2px solid gray;
	margin: 10px;
	padding: 0px 0px 10px 10px;
}

div.pathway {
	margin-bottom: 1em;
}

div.pathway img {
	padding: 0 2px;
}

/* The PDF, Email and Print buttons */
div.buttons_heading {
	margin:10px;
	width:10%;
	float:right;
}

.productPrice {
	font-weight:bold;
	white-space: nowrap;
}
.product-Old-Price {
	color:red;
	text-decoration:line-through;
}
/** BROWSE PRODUCTS STYLES **/
.browseProductContainer {
	width:100%;
	padding: 3px 3px 3px 3px;
	vertical-align: top;
}

.browseProductTitle {
	font-size: 16px; 
	font-weight: bold;
	padding: 3px;
	margin-top: 3px;
	width: 30%;
	float: left;
}
.browseProductImageContainer {
	float: left;
	width: auto;
	margin: 3px;
}
.browseProductDetailsContainer {
	float: left;
	width: 70%;
}
.browseProductDescription {
	margin-top: 40px;
	width:50%;
}
.browsePriceContainer {
	float: left;
	margin: 5px;
	width:20%;
}
.browseAddToCartContainer {
	width:30%;
	text-align:center
}
.browseRatingContainer {
	float: left;
	width:25%;
	margin: 3px;
	white-space: nowrap;
}

/** Flypage Styles **/
.thumbnailListContainer {
	text-align: center;
	width: 200px;
	height: 200px;
	overflow: auto;
}

/*
General Form Styling
*/
.formLabel {
	float:left;
	width:30%;
	text-align:right;
	font-weight: bold;
	margin: 2px;
	white-space: nowrap;
	clear: left;
	vertical-align: middle;
	margin-top: 8px;
}

#agreed_div {
	white-space: normal;
}

.formField {
	float:left;
	width:60%;
	margin: 2px;
	vertical-align: middle;
	margin-top: 8px;
	
}
.missing {
	color:red;
	font-weight:bold;
}

/**
* Administration Styles
*/
.adminListHeader {
	float:left; height: 48px; background-repeat: no-repeat;
	text-align: left; font-size: 18px; font-weight: bold;
	padding-left: 80px;	
}

.labelcell {
	margin-left: auto;
	font-weight: bold;
	vertical-align: top;
	width: 30%;
}
table.adminform td.labelcell {
	text-align: right;
}
.iconcell {
	vertical-align: top;
	width: 5%;
}
.shop_error, .shop_warning, .shop_info, .shop_debug, .shop_critical, .shop_tip {
	background-color:#FAFAD2;
	background-position:left 5px;
	background-repeat:no-repeat;
	border-color:#AACCAA;
	border-style:dotted none;
	border-width:1px 0pt;
	font-weight: 900;
	margin:1pt 1pt 1em 1em;
	padding:0.5em 1em 1.5em 48px;
}
.shop_error {
	background-image: url( "themes/default/images/error.gif" );
}
.shop_warning {
	background-image: url( "themes/default/images/warning.png" );
}
.shop_info, .shop_tip {
  	background-image: url( "themes/default/images/info.png" );
}

.shop_debug {
	background-image: url( "themes/default/images/log_debug.png" );

}
.shop_critical {
	font-weight: bold;
	background-image: url( "themes/default/images/log_critical.png" );
}
/**
* Addtocart detail Styles
*/
.vmCartContainer { /* Cart Container */
	width: auto;
	float: left;
	background: #ADD8E6;
	border: 1px solid #000;
	padding: 3px;
}

.vmCartChildHeading { /* Header for the cart */
	font-size: 14px;
	font-weight: bold;
	padding-bottom: 3px;
	text-align: left;
}

.vmCartChild { /* Container for the Child Product */
	
	vertical-align: middle;
	border: 1px solid #000;
	padding-left: 2px;
	padding-right: 2px;
	margin-bottom: 2px;
	float:left;	
}

.vmChildDetail { /* Child Detail, description , attributes ,price, quantity etc */
	vertical-align: middle;
	margin-top: 6px;
}

.vmCartChildElement { /* Individual element styling */
	width: 100%;
	vertical-align: middle ;
	height: 25px;
	text-align: left;
	
}

.vmCartAttributes { /* Attributes Div*/
	
	margin-top:8px;
	width:100%;
}

.vmAttribChildDetail {  /* Product Attributes Styling */
	
}
	

.vmMultiple {
	height:35px;
}



.vmChildType { /* Product type div*/

width: 100%;
}

.vmClearDetail { /*Clear the divs afer child types*/
	clear: both;
}

.vmClearAttribs { /*Clear the divs before the attributes*/
	clear:both;
}
.vmRowOne { /* Odd Row One styling */
	background: #d3d3d3;	
}

.vmRowTwo { /* Even Row Styling */
	background: white;
}

/* Link Details for link to child*/
.vmChildDetail a, .vmChildDetail a:link {
  font-size        : 11px;
  color            : #000000;
  text-decoration  : none;
  font-weight      : bold;
}
.vmChildDetail a:hover {
  font-size        : 11px;
  color            : #333333;
  text-decoration  : none;
  font-weight      : bold;
}
/* Styling for the form elements to enable correct Line Up  */
.inputboxquantity {
	margin-top: 3px;
	vertical-align: middle;
}
.availabilityHeader {
	text-decoration:underline;
	font-weight:bold;
}
.inputboxattrib {
	float: left;
	margin-top: 0px;
	vertical-align: middle;
	margin-bottom: 2px;
}

.quantitycheckbox {
	margin-top: 6px;
	vertical-align: middle;
}	

/**
* Addtocart detail Styles for placing attributes beside product_types
*/
.vmCartContainer_2up { /* Cart Container */
	width: 100%;
	float: left;
	background: #ADD8E6;
	border: 1px solid #000;
	padding: 3px;
}

.vmCartChildHeading_2up { /* Header for the cart */
	font-size: 14px;
	font-weight: bold;
	padding-bottom: 3px;
	text-align: left;
}

.vmCartChild_2up { /* Container for the Child Product */
	
	vertical-align: middle;
	border: 1px solid #000;
	padding-left: 2px;
	padding-right: 2px;
	
	margin-bottom: 2px;
	float:left;	
}

.vmChildDetail_2up { /* Child Detail, description , attributes ,price, quantity etc */
	vertical-align: middle;
	margin-top: 6px;
}

.vmCartChildElement_2up { /* Individual element styling */
	width: 100%;
	vertical-align: middle ;
	height: 25px;
	text-align: left;
	
}

.vmCartAttributes_2up { /* Attributes Div*/
	float: left;
	padding: 0px 5px 5px 5px;
	margin: 0px 5px 5px 5px;
	width:50%;
}

.vmAttribChildDetail_2up {  /* Product Attributes Styling */
	
}
	
.vmMultiple {
	height:35px;
}

.vmChildType_2up { /* Product type div*/
	background: #ADD8E6;
	padding: 0px 5px 5px 5px;
	margin: 0px 5px 5px 5px;
	float: left;
	width: 40%;
	border: 1px solid #000;
}

.vmClearDetail_2up { /*Clear the divs afer child types*/
	
}

.vmClearAttribs_2up { /*Clear the divs before the attributes*/
	clear:both;
}
.vmRowOne_2up { /* Odd Row One styling */
	background: #d3d3d3;	
}

.vmRowTwo_2up { /* Even Row Styling */
	background: white;
}

/* Link Details for link to child*/
.vmChildDetail_2up a, .vmChildDetail_2up a:link {
  font-size        : 11px;
  color            : #000000;
  text-decoration  : none;
  font-weight      : bold;
}
.vmChildDetail_2up a:hover {
  font-size        : 11px;
  color            : #333333;
  text-decoration  : none;
  font-weight      : bold;
}

.vmCartModuleList  {
  cursor : pointer;
  font-size        : 11px;
  color            : #000000;
  text-decoration  : none;
  font-weight      : bold;
}
.vmCartModuleList:hover {
  font-size        : 11px;
  color            : #333333;
  text-decoration  : none;
  font-weight      : bold;
}
.vmquote {
	margin: 4px;
	border: 1px solid #cccccc;
	background-color: #E9ECEF;
	padding: 10px;
	font-size: 12px;
	color: #254D78;
}
.editable {
	background: #ffff33;
	cursor: pointer;
}
ul.pagination li {
	padding: 2px 1px;
	display: inline;
	background: none;
}
.clr { clear: both; overflow:hidden; }.cbOverlay {
	background-color: #000;
}

.cbContainer {
	padding:5px;
	background-color:white;
	border: 2px solid gray;
}
.cbBox h3 {
	font-size:1.4em;
	margin-top:0px;
	padding-top: 3px;
	vertical-align: middle;
	text-align:center;
	background-color:#ccc;
	background-image: url( "js/mootools/header-background.png" );
}
.cbBox p {
	margin:3px;
}
.cbBox, .cbButtons {
	text-align:center;
}
.cbButton {
	margin: 3px;
}
.cbCloseButton {
	background: url( "js/mootools/close.gif" ) no-repeat;
	width: 16px; height: 16px;
	position:absolute;
	top: 9px;
	right:5px;
	cursor: pointer;
}/* SLIMBOX */

#lbOverlay {
	position: absolute;
	left: 0;
	width: 100%;
	background-color: #000;
	cursor: pointer;
}

#lbCenter, #lbBottomContainer {
	position: absolute;
	left: 50%;
	overflow: hidden;
	background-color: #fff;
}

.lbLoading {
	background: #fff url( "js/slimbox/css/loading.gif" ) no-repeat center;
}

#lbImage {
	position: absolute;
	left: 0;
	top: 0;
	border: 10px solid #fff;
	background-repeat: no-repeat;
}

#lbPrevLink, #lbNextLink {
	display: block;
	position: absolute;
	top: 0;
	width: 50%;
	outline: none;
}

#lbPrevLink {
	left: 0;
}

#lbPrevLink:hover {
	background: transparent url( "js/slimbox/css/prevlabel.gif" ) no-repeat 0% 15%;
}

#lbNextLink {
	right: 0;
}

#lbNextLink:hover {
	background: transparent url( "js/slimbox/css/nextlabel.gif" ) no-repeat 100% 15%;
}

#lbBottom {
	font-family: Verdana, Arial, Geneva, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
	line-height: 1.4em;
	text-align: left;
	border: 10px solid #fff;
	border-top-style: none;
}

#lbCloseLink {
	display: block;
	float: right;
	width: 66px;
	height: 22px;
	background: transparent url( "js/slimbox/css/closelabel.gif" ) no-repeat center;
	margin: 5px 0;
}

#lbCaption, #lbNumber {
	margin-right: 71px;
}

#lbCaption {
	font-weight: bold;
}
