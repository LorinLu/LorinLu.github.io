
/* http://www.xd.com 
 *
 * v3 Created By 代立晨
 * 2012-03-22
 *
 * v4
 * 2013-09-22
 *
 */

/* Global Styles */
.clearfix:after {
    clear: both;
    content: ' ';
    display: block;
    font-size: 0;
    line-height: 0;
    visibility: hidden;
    width: 0;
    height: 0;
}

ul.clearfix li { float: left; }
.clearfix {*zoom: 1;}

*{
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    vertical-align: baseline;
}

*{
    box-sizing:content-box;
    -o-box-sizing:content-box;
    -ms-box-sizing:content-box;
    -icab-box-sizing:content-box;
    -khtml-box-sizing:content-box;
    -moz-box-sizing:content-box;
    -webkit-box-sizing:content-box;
}
/* ios font size */
@media screen and (max-device-width: 960px){
    body{
        -webkit-text-size-adjust:none;
    }
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
    display: block;
}

html {
    overflow-y:scroll;
    overflow-x:hidden;
}
body {
    font:14px/1.8 Arial,sans-serif;
    /*防止横向滚动条*/
    background: #fff none;
}
select{
    border: 1px solid #dee1e3;
    font-size: 12px;
    color: #333;
    line-height: 12px;
}
ul {
    list-style: none;
}
ol{
    list-style: decimal inside;
}
blockquote, q {
    quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content: '';
    content: none;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}

a{
    text-decoration:none;
    cursor: pointer;
}
a:hover {
    text-decoration:none;
}

a:focus{
    outline: none;
}

span{
    color:inherit;
}
a img{
    vertical-align: middle;
}

label[for]{
    cursor: pointer;
}

/***************************** END OF RESET *********************************/

/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
.fancybox-wrap,
.fancybox-skin,
.fancybox-outer,
.fancybox-inner,
.fancybox-image,
.fancybox-wrap iframe,
.fancybox-wrap object,
.fancybox-nav,
.fancybox-nav span,
.fancybox-tmp
{
	padding: 0;
	margin: 0;
	border: 0;
	outline: none;
	vertical-align: top;
}

.fancybox-wrap {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 8020;
}

.fancybox-skin {
	position: relative;
	background: #f9f9f9;
	color: #444;
	text-shadow: none;
	-webkit-border-radius: 4px;
	   -moz-border-radius: 4px;
	        border-radius: 4px;
}

.fancybox-opened {
	z-index: 8030;
}

.fancybox-opened .fancybox-skin {
	-webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	   -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
}

.fancybox-outer, .fancybox-inner {
	position: relative;
}

.fancybox-inner {
	overflow: hidden;
}

.fancybox-type-iframe .fancybox-inner {
	-webkit-overflow-scrolling: touch;
}

.fancybox-error {
	color: #444;
	font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
	margin: 0;
	padding: 15px;
	white-space: nowrap;
}

.fancybox-image, .fancybox-iframe {
	display: block;
	width: 100%;
	height: 100%;
}

.fancybox-image {
	max-width: 100%;
	max-height: 100%;
}

#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
	background-image: url('vendor/fancybox/2_1_5/fancybox_sprite.png?v=1439283243');
}

#fancybox-loading {
	position: fixed;
	top: 50%;
	left: 50%;
	margin-top: -22px;
	margin-left: -22px;
	background-position: 0 -108px;
	opacity: 0.8;
	cursor: pointer;
	z-index: 8060;
}

#fancybox-loading div {
	width: 44px;
	height: 44px;
	background: url('vendor/fancybox/2_1_5/fancybox_loading.gif?v=1439283243') center center no-repeat;
}

.fancybox-close {
	position: absolute;
	top: -18px;
	right: -18px;
	width: 36px;
	height: 36px;
	cursor: pointer;
	z-index: 8040;
}

.fancybox-nav {
	position: absolute;
	top: 0;
	width: 40%;
	height: 100%;
	cursor: pointer;
	text-decoration: none;
	background: transparent url('vendor/fancybox/2_1_5/blank.gif?v=1439283243'); /* helps IE */
	-webkit-tap-highlight-color: rgba(0,0,0,0);
	z-index: 8040;
}

.fancybox-prev {
	left: 0;
}

.fancybox-next {
	right: 0;
}

.fancybox-nav span {
	position: absolute;
	top: 50%;
	width: 36px;
	height: 34px;
	margin-top: -18px;
	cursor: pointer;
	z-index: 8040;
	visibility: hidden;
}

.fancybox-prev span {
	left: 10px;
	background-position: 0 -36px;
}

.fancybox-next span {
	right: 10px;
	background-position: 0 -72px;
}

.fancybox-nav:hover span {
	visibility: visible;
}

.fancybox-tmp {
	position: absolute;
	top: -99999px;
	left: -99999px;
	visibility: hidden;
	max-width: 99999px;
	max-height: 99999px;
	overflow: visible !important;
}

/* Overlay helper */

.fancybox-lock {
    /*overflow: hidden !important;*/
    width: auto;
}

.fancybox-lock body {
    overflow: hidden !important;
}

.fancybox-lock-test {
    /*overflow-y: hidden !important;*/
}

.fancybox-overlay {
	position: absolute;
	top: 0;
	left: 0;
	overflow: hidden;
	display: none;
	z-index: 8010;
	background: url('vendor/fancybox/2_1_5/fancybox_overlay.png?v=1439283243');
}

.fancybox-overlay-fixed {
	position: fixed;
	bottom: 0;
	right: 0;
}

.fancybox-lock .fancybox-overlay {
	overflow: auto;
	overflow-y: scroll;
}

/* Title helper */

.fancybox-title {
	visibility: hidden;
	font: normal 13px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
	position: relative;
	text-shadow: none;
	z-index: 8050;
}

.fancybox-opened .fancybox-title {
	visibility: visible;
}

.fancybox-title-float-wrap {
	position: absolute;
	bottom: 0;
	right: 50%;
	margin-bottom: -35px;
	z-index: 8050;
	text-align: center;
}

.fancybox-title-float-wrap .child {
	display: inline-block;
	margin-right: -100%;
	padding: 2px 20px;
	background: transparent; /* Fallback for web browsers that doesn't support RGBa */
	background: rgba(0, 0, 0, 0.8);
	-webkit-border-radius: 15px;
	   -moz-border-radius: 15px;
	        border-radius: 15px;
	text-shadow: 0 1px 2px #222;
	color: #FFF;
	font-weight: bold;
	line-height: 24px;
	white-space: nowrap;
}

.fancybox-title-outside-wrap {
	position: relative;
	margin-top: 10px;
	color: #fff;
}

.fancybox-title-inside-wrap {
	padding-top: 10px;
}

.fancybox-title-over-wrap {
	position: absolute;
	bottom: 0;
	left: 0;
	color: #fff;
	padding: 10px;
	background: #000;
	background: rgba(0, 0, 0, .8);
}

/*Retina graphics!*/
@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
	   only screen and (min--moz-device-pixel-ratio: 1.5),
	   only screen and (min-device-pixel-ratio: 1.5){

	#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
		background-image: url('vendor/fancybox/2_1_5/fancybox_sprite@2x.png?v=1439283243');
		background-size: 44px 152px; /*The size of the normal image, half the size of the hi-res image*/
	}

	#fancybox-loading div {
		background-image: url('vendor/fancybox/2_1_5/fancybox_loading@2x.gif?v=1439283243');
		background-size: 24px 24px; /*The size of the normal image, half the size of the hi-res image*/
	}
}
/* http://www.xd.com 
 *
 * v1 2014-01-09
 * carousel
 */

.carousel{position: relative;}

.carousel .carousel-inner{width: 100%; height: 100%; overflow: hidden; position: relative;}
.carousel .carousel-inner .item{width: 100%; height: 100%; overflow: hidden; position: absolute; left: 0; top: 0; display: none;}
.carousel .carousel-inner .item img{display: block;}
.carousel .carousel-inner .active, .carousel .carousel-inner .next, .carousel .carousel-inner .prev{display: block;}
.carousel .carousel-inner .active{left: 0;}
.carousel .carousel-control{position: absolute;}
.intl-tel-input{position:relative;display:inline-block}.intl-tel-input *{box-sizing:border-box;-moz-box-sizing:border-box}.intl-tel-input .hide{display:none}.intl-tel-input .v-hide{visibility:hidden}.intl-tel-input input,.intl-tel-input input[type=text],.intl-tel-input input[type=tel]{position:relative;z-index:0;margin-top:0 !important;margin-bottom:0 !important;padding-right:36px;margin-right:0}.intl-tel-input .flag-container{position:absolute;top:0;bottom:0;right:0;padding:1px}.intl-tel-input .selected-flag{z-index:1;position:relative;width:36px;height:100%;padding:0 0 0 8px}.intl-tel-input .selected-flag .iti-flag{position:absolute;top:0;bottom:0;margin:auto;_top:50%;_margin-top:-7px}.intl-tel-input .selected-flag .iti-arrow{position:absolute;top:50%;margin-top:-2px;right:6px;width:0;height:0;border-left:3px solid transparent;border-right:3px solid transparent;border-top:4px solid #555;_border-left-color:pink;_border-right-color:pink;_border-bottom-color:pink;_filter:chroma(color=pink)}.intl-tel-input .selected-flag .iti-arrow.up{border-top:none;border-bottom:4px solid #555}.intl-tel-input .country-list{position:absolute;z-index:2;list-style:none;text-align:left;padding:0;margin:0 0 0 -1px;box-shadow:1px 1px 4px rgba(0,0,0,0.2);background-color:white;border:1px solid #CCC;white-space:nowrap;max-height:200px;overflow-y:scroll;_height:200px}.intl-tel-input .country-list.dropup{bottom:100%;margin-bottom:-1px}.intl-tel-input .country-list .flag-box{display:inline-block;width:20px;_display:inline}@media (max-width: 500px){.intl-tel-input .country-list{white-space:normal}}.intl-tel-input .country-list .divider{padding-bottom:5px;margin-bottom:5px;border-bottom:1px solid #CCC;_font-size:0}.intl-tel-input .country-list .country{padding:5px 10px}.intl-tel-input .country-list .country .dial-code{color:#999}.intl-tel-input .country-list .country.highlight{background-color:rgba(0,0,0,0.05)}.intl-tel-input .country-list .flag-box,.intl-tel-input .country-list .country-name,.intl-tel-input .country-list .dial-code{vertical-align:middle}.intl-tel-input .country-list .flag-box,.intl-tel-input .country-list .country-name{margin-right:6px}.intl-tel-input.allow-dropdown input,.intl-tel-input.allow-dropdown input[type=text],.intl-tel-input.allow-dropdown input[type=tel]{padding-right:6px;padding-left:52px;margin-left:0;_display:inline}.intl-tel-input.allow-dropdown .flag-container{right:auto;left:0;_height:39px}.intl-tel-input.allow-dropdown .selected-flag{width:46px}.intl-tel-input.allow-dropdown .flag-container:hover{cursor:pointer}.intl-tel-input.allow-dropdown .flag-container:hover .selected-flag{background-color:rgba(0,0,0,0.05)}.intl-tel-input.allow-dropdown input[disabled]+.flag-container:hover,.intl-tel-input.allow-dropdown input[readonly]+.flag-container:hover{cursor:default}.intl-tel-input.allow-dropdown input[disabled]+.flag-container:hover .selected-flag,.intl-tel-input.allow-dropdown input[readonly]+.flag-container:hover .selected-flag{background-color:transparent}.intl-tel-input.allow-dropdown.separate-dial-code .selected-flag{background-color:rgba(0,0,0,0.05);display:table}.intl-tel-input.allow-dropdown.separate-dial-code .selected-dial-code{display:table-cell;vertical-align:middle;padding-left:28px}.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2 input,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2 input[type=text],.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2 input[type=tel]{padding-left:76px}.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2 .selected-flag{width:70px}.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3 input,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3 input[type=text],.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3 input[type=tel]{padding-left:84px}.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3 .selected-flag{width:78px}.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-4 input,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-4 input[type=text],.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-4 input[type=tel]{padding-left:92px}.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-4 .selected-flag{width:86px}.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-5 input,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-5 input[type=text],.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-5 input[type=tel]{padding-left:100px}.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-5 .selected-flag{width:94px}.intl-tel-input.iti-container{position:absolute;top:-1000px;left:-1000px;z-index:1060;padding:1px}.intl-tel-input.iti-container:hover{cursor:pointer}.iti-mobile .intl-tel-input.iti-container{top:30px;bottom:30px;left:30px;right:30px;position:fixed}.iti-mobile .intl-tel-input .country-list{max-height:100%;width:100%}.iti-mobile .intl-tel-input .country-list .country{padding:10px 10px;line-height:1.5em}.iti-flag{width:20px;height:15px;box-shadow:0px 0px 1px 0px #888;background-image:url("vendor/intl-tel-input/build/img/flags.png?v=1460606653");background-repeat:no-repeat;background-color:#DBDBDB;background-position:20px 0}@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx){.iti-flag{background-image:url("vendor/intl-tel-input/build/img/flags@2x.png?v=1460606653")}}.iti-flag{width:20px}.iti-flag.be{width:18px}.iti-flag.ch{width:15px}.iti-flag.mc{width:19px}.iti-flag.ne{width:18px}.iti-flag.np{width:13px}.iti-flag.va{width:15px}@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx){.iti-flag{background-size:5630px 15px}}.iti-flag-ac{height:10px;background-position:0px 0px}.iti-flag-ad{height:14px;background-position:-22px 0px}.iti-flag-ae{height:10px;background-position:-44px 0px}.iti-flag-af{height:14px;background-position:-66px 0px}.iti-flag-ag{height:14px;background-position:-88px 0px}.iti-flag-ai{height:10px;background-position:-110px 0px}.iti-flag-al{height:15px;background-position:-132px 0px}.iti-flag-am{height:10px;background-position:-154px 0px}.iti-flag-ao{height:14px;background-position:-176px 0px}.iti-flag-aq{height:14px;background-position:-198px 0px}.iti-flag-ar{height:13px;background-position:-220px 0px}.iti-flag-as{height:10px;background-position:-242px 0px}.iti-flag-at{height:14px;background-position:-264px 0px}.iti-flag-au{height:10px;background-position:-286px 0px}.iti-flag-aw{height:14px;background-position:-308px 0px}.iti-flag-ax{height:13px;background-position:-330px 0px}.iti-flag-az{height:10px;background-position:-352px 0px}.iti-flag-ba{height:10px;background-position:-374px 0px}.iti-flag-bb{height:14px;background-position:-396px 0px}.iti-flag-bd{height:12px;background-position:-418px 0px}.iti-flag-be{height:15px;background-position:-440px 0px}.iti-flag-bf{height:14px;background-position:-460px 0px}.iti-flag-bg{height:12px;background-position:-482px 0px}.iti-flag-bh{height:12px;background-position:-504px 0px}.iti-flag-bi{height:12px;background-position:-526px 0px}.iti-flag-bj{height:14px;background-position:-548px 0px}.iti-flag-bl{height:14px;background-position:-570px 0px}.iti-flag-bm{height:10px;background-position:-592px 0px}.iti-flag-bn{height:10px;background-position:-614px 0px}.iti-flag-bo{height:14px;background-position:-636px 0px}.iti-flag-bq{height:14px;background-position:-658px 0px}.iti-flag-br{height:14px;background-position:-680px 0px}.iti-flag-bs{height:10px;background-position:-702px 0px}.iti-flag-bt{height:14px;background-position:-724px 0px}.iti-flag-bv{height:15px;background-position:-746px 0px}.iti-flag-bw{height:14px;background-position:-768px 0px}.iti-flag-by{height:10px;background-position:-790px 0px}.iti-flag-bz{height:14px;background-position:-812px 0px}.iti-flag-ca{height:10px;background-position:-834px 0px}.iti-flag-cc{height:10px;background-position:-856px 0px}.iti-flag-cd{height:15px;background-position:-878px 0px}.iti-flag-cf{height:14px;background-position:-900px 0px}.iti-flag-cg{height:14px;background-position:-922px 0px}.iti-flag-ch{height:15px;background-position:-944px 0px}.iti-flag-ci{height:14px;background-position:-961px 0px}.iti-flag-ck{height:10px;background-position:-983px 0px}.iti-flag-cl{height:14px;background-position:-1005px 0px}.iti-flag-cm{height:14px;background-position:-1027px 0px}.iti-flag-cn{height:14px;background-position:-1049px 0px}.iti-flag-co{height:14px;background-position:-1071px 0px}.iti-flag-cp{height:14px;background-position:-1093px 0px}.iti-flag-cr{height:12px;background-position:-1115px 0px}.iti-flag-cu{height:10px;background-position:-1137px 0px}.iti-flag-cv{height:12px;background-position:-1159px 0px}.iti-flag-cw{height:14px;background-position:-1181px 0px}.iti-flag-cx{height:10px;background-position:-1203px 0px}.iti-flag-cy{height:13px;background-position:-1225px 0px}.iti-flag-cz{height:14px;background-position:-1247px 0px}.iti-flag-de{height:12px;background-position:-1269px 0px}.iti-flag-dg{height:10px;background-position:-1291px 0px}.iti-flag-dj{height:14px;background-position:-1313px 0px}.iti-flag-dk{height:15px;background-position:-1335px 0px}.iti-flag-dm{height:10px;background-position:-1357px 0px}.iti-flag-do{height:13px;background-position:-1379px 0px}.iti-flag-dz{height:14px;background-position:-1401px 0px}.iti-flag-ea{height:14px;background-position:-1423px 0px}.iti-flag-ec{height:14px;background-position:-1445px 0px}.iti-flag-ee{height:13px;background-position:-1467px 0px}.iti-flag-eg{height:14px;background-position:-1489px 0px}.iti-flag-eh{height:10px;background-position:-1511px 0px}.iti-flag-er{height:10px;background-position:-1533px 0px}.iti-flag-es{height:14px;background-position:-1555px 0px}.iti-flag-et{height:10px;background-position:-1577px 0px}.iti-flag-eu{height:14px;background-position:-1599px 0px}.iti-flag-fi{height:12px;background-position:-1621px 0px}.iti-flag-fj{height:10px;background-position:-1643px 0px}.iti-flag-fk{height:10px;background-position:-1665px 0px}.iti-flag-fm{height:11px;background-position:-1687px 0px}.iti-flag-fo{height:15px;background-position:-1709px 0px}.iti-flag-fr{height:14px;background-position:-1731px 0px}.iti-flag-ga{height:15px;background-position:-1753px 0px}.iti-flag-gb{height:10px;background-position:-1775px 0px}.iti-flag-gd{height:12px;background-position:-1797px 0px}.iti-flag-ge{height:14px;background-position:-1819px 0px}.iti-flag-gf{height:14px;background-position:-1841px 0px}.iti-flag-gg{height:14px;background-position:-1863px 0px}.iti-flag-gh{height:14px;background-position:-1885px 0px}.iti-flag-gi{height:10px;background-position:-1907px 0px}.iti-flag-gl{height:14px;background-position:-1929px 0px}.iti-flag-gm{height:14px;background-position:-1951px 0px}.iti-flag-gn{height:14px;background-position:-1973px 0px}.iti-flag-gp{height:14px;background-position:-1995px 0px}.iti-flag-gq{height:14px;background-position:-2017px 0px}.iti-flag-gr{height:14px;background-position:-2039px 0px}.iti-flag-gs{height:10px;background-position:-2061px 0px}.iti-flag-gt{height:13px;background-position:-2083px 0px}.iti-flag-gu{height:11px;background-position:-2105px 0px}.iti-flag-gw{height:10px;background-position:-2127px 0px}.iti-flag-gy{height:12px;background-position:-2149px 0px}.iti-flag-hk{height:14px;background-position:-2171px 0px}.iti-flag-hm{height:10px;background-position:-2193px 0px}.iti-flag-hn{height:10px;background-position:-2215px 0px}.iti-flag-hr{height:10px;background-position:-2237px 0px}.iti-flag-ht{height:12px;background-position:-2259px 0px}.iti-flag-hu{height:10px;background-position:-2281px 0px}.iti-flag-ic{height:14px;background-position:-2303px 0px}.iti-flag-id{height:14px;background-position:-2325px 0px}.iti-flag-ie{height:10px;background-position:-2347px 0px}.iti-flag-il{height:15px;background-position:-2369px 0px}.iti-flag-im{height:10px;background-position:-2391px 0px}.iti-flag-in{height:14px;background-position:-2413px 0px}.iti-flag-io{height:10px;background-position:-2435px 0px}.iti-flag-iq{height:14px;background-position:-2457px 0px}.iti-flag-ir{height:12px;background-position:-2479px 0px}.iti-flag-is{height:15px;background-position:-2501px 0px}.iti-flag-it{height:14px;background-position:-2523px 0px}.iti-flag-je{height:12px;background-position:-2545px 0px}.iti-flag-jm{height:10px;background-position:-2567px 0px}.iti-flag-jo{height:10px;background-position:-2589px 0px}.iti-flag-jp{height:14px;background-position:-2611px 0px}.iti-flag-ke{height:14px;background-position:-2633px 0px}.iti-flag-kg{height:12px;background-position:-2655px 0px}.iti-flag-kh{height:13px;background-position:-2677px 0px}.iti-flag-ki{height:10px;background-position:-2699px 0px}.iti-flag-km{height:12px;background-position:-2721px 0px}.iti-flag-kn{height:14px;background-position:-2743px 0px}.iti-flag-kp{height:10px;background-position:-2765px 0px}.iti-flag-kr{height:14px;background-position:-2787px 0px}.iti-flag-kw{height:10px;background-position:-2809px 0px}.iti-flag-ky{height:10px;background-position:-2831px 0px}.iti-flag-kz{height:10px;background-position:-2853px 0px}.iti-flag-la{height:14px;background-position:-2875px 0px}.iti-flag-lb{height:14px;background-position:-2897px 0px}.iti-flag-lc{height:10px;background-position:-2919px 0px}.iti-flag-li{height:12px;background-position:-2941px 0px}.iti-flag-lk{height:10px;background-position:-2963px 0px}.iti-flag-lr{height:11px;background-position:-2985px 0px}.iti-flag-ls{height:14px;background-position:-3007px 0px}.iti-flag-lt{height:12px;background-position:-3029px 0px}.iti-flag-lu{height:12px;background-position:-3051px 0px}.iti-flag-lv{height:10px;background-position:-3073px 0px}.iti-flag-ly{height:10px;background-position:-3095px 0px}.iti-flag-ma{height:14px;background-position:-3117px 0px}.iti-flag-mc{height:15px;background-position:-3139px 0px}.iti-flag-md{height:10px;background-position:-3160px 0px}.iti-flag-me{height:10px;background-position:-3182px 0px}.iti-flag-mf{height:14px;background-position:-3204px 0px}.iti-flag-mg{height:14px;background-position:-3226px 0px}.iti-flag-mh{height:11px;background-position:-3248px 0px}.iti-flag-mk{height:10px;background-position:-3270px 0px}.iti-flag-ml{height:14px;background-position:-3292px 0px}.iti-flag-mm{height:14px;background-position:-3314px 0px}.iti-flag-mn{height:10px;background-position:-3336px 0px}.iti-flag-mo{height:14px;background-position:-3358px 0px}.iti-flag-mp{height:10px;background-position:-3380px 0px}.iti-flag-mq{height:14px;background-position:-3402px 0px}.iti-flag-mr{height:14px;background-position:-3424px 0px}.iti-flag-ms{height:10px;background-position:-3446px 0px}.iti-flag-mt{height:14px;background-position:-3468px 0px}.iti-flag-mu{height:14px;background-position:-3490px 0px}.iti-flag-mv{height:14px;background-position:-3512px 0px}.iti-flag-mw{height:14px;background-position:-3534px 0px}.iti-flag-mx{height:12px;background-position:-3556px 0px}.iti-flag-my{height:10px;background-position:-3578px 0px}.iti-flag-mz{height:14px;background-position:-3600px 0px}.iti-flag-na{height:14px;background-position:-3622px 0px}.iti-flag-nc{height:10px;background-position:-3644px 0px}.iti-flag-ne{height:15px;background-position:-3666px 0px}.iti-flag-nf{height:10px;background-position:-3686px 0px}.iti-flag-ng{height:10px;background-position:-3708px 0px}.iti-flag-ni{height:12px;background-position:-3730px 0px}.iti-flag-nl{height:14px;background-position:-3752px 0px}.iti-flag-no{height:15px;background-position:-3774px 0px}.iti-flag-np{height:15px;background-position:-3796px 0px}.iti-flag-nr{height:10px;background-position:-3811px 0px}.iti-flag-nu{height:10px;background-position:-3833px 0px}.iti-flag-nz{height:10px;background-position:-3855px 0px}.iti-flag-om{height:10px;background-position:-3877px 0px}.iti-flag-pa{height:14px;background-position:-3899px 0px}.iti-flag-pe{height:14px;background-position:-3921px 0px}.iti-flag-pf{height:14px;background-position:-3943px 0px}.iti-flag-pg{height:15px;background-position:-3965px 0px}.iti-flag-ph{height:10px;background-position:-3987px 0px}.iti-flag-pk{height:14px;background-position:-4009px 0px}.iti-flag-pl{height:13px;background-position:-4031px 0px}.iti-flag-pm{height:14px;background-position:-4053px 0px}.iti-flag-pn{height:10px;background-position:-4075px 0px}.iti-flag-pr{height:14px;background-position:-4097px 0px}.iti-flag-ps{height:10px;background-position:-4119px 0px}.iti-flag-pt{height:14px;background-position:-4141px 0px}.iti-flag-pw{height:13px;background-position:-4163px 0px}.iti-flag-py{height:11px;background-position:-4185px 0px}.iti-flag-qa{height:8px;background-position:-4207px 0px}.iti-flag-re{height:14px;background-position:-4229px 0px}.iti-flag-ro{height:14px;background-position:-4251px 0px}.iti-flag-rs{height:14px;background-position:-4273px 0px}.iti-flag-ru{height:14px;background-position:-4295px 0px}.iti-flag-rw{height:14px;background-position:-4317px 0px}.iti-flag-sa{height:14px;background-position:-4339px 0px}.iti-flag-sb{height:10px;background-position:-4361px 0px}.iti-flag-sc{height:10px;background-position:-4383px 0px}.iti-flag-sd{height:10px;background-position:-4405px 0px}.iti-flag-se{height:13px;background-position:-4427px 0px}.iti-flag-sg{height:14px;background-position:-4449px 0px}.iti-flag-sh{height:10px;background-position:-4471px 0px}.iti-flag-si{height:10px;background-position:-4493px 0px}.iti-flag-sj{height:15px;background-position:-4515px 0px}.iti-flag-sk{height:14px;background-position:-4537px 0px}.iti-flag-sl{height:14px;background-position:-4559px 0px}.iti-flag-sm{height:15px;background-position:-4581px 0px}.iti-flag-sn{height:14px;background-position:-4603px 0px}.iti-flag-so{height:14px;background-position:-4625px 0px}.iti-flag-sr{height:14px;background-position:-4647px 0px}.iti-flag-ss{height:10px;background-position:-4669px 0px}.iti-flag-st{height:10px;background-position:-4691px 0px}.iti-flag-sv{height:12px;background-position:-4713px 0px}.iti-flag-sx{height:14px;background-position:-4735px 0px}.iti-flag-sy{height:14px;background-position:-4757px 0px}.iti-flag-sz{height:14px;background-position:-4779px 0px}.iti-flag-ta{height:10px;background-position:-4801px 0px}.iti-flag-tc{height:10px;background-position:-4823px 0px}.iti-flag-td{height:14px;background-position:-4845px 0px}.iti-flag-tf{height:14px;background-position:-4867px 0px}.iti-flag-tg{height:13px;background-position:-4889px 0px}.iti-flag-th{height:14px;background-position:-4911px 0px}.iti-flag-tj{height:10px;background-position:-4933px 0px}.iti-flag-tk{height:10px;background-position:-4955px 0px}.iti-flag-tl{height:10px;background-position:-4977px 0px}.iti-flag-tm{height:14px;background-position:-4999px 0px}.iti-flag-tn{height:14px;background-position:-5021px 0px}.iti-flag-to{height:10px;background-position:-5043px 0px}.iti-flag-tr{height:14px;background-position:-5065px 0px}.iti-flag-tt{height:12px;background-position:-5087px 0px}.iti-flag-tv{height:10px;background-position:-5109px 0px}.iti-flag-tw{height:14px;background-position:-5131px 0px}.iti-flag-tz{height:14px;background-position:-5153px 0px}.iti-flag-ua{height:14px;background-position:-5175px 0px}.iti-flag-ug{height:14px;background-position:-5197px 0px}.iti-flag-um{height:11px;background-position:-5219px 0px}.iti-flag-us{height:11px;background-position:-5241px 0px}.iti-flag-uy{height:14px;background-position:-5263px 0px}.iti-flag-uz{height:10px;background-position:-5285px 0px}.iti-flag-va{height:15px;background-position:-5307px 0px}.iti-flag-vc{height:14px;background-position:-5324px 0px}.iti-flag-ve{height:14px;background-position:-5346px 0px}.iti-flag-vg{height:10px;background-position:-5368px 0px}.iti-flag-vi{height:14px;background-position:-5390px 0px}.iti-flag-vn{height:14px;background-position:-5412px 0px}.iti-flag-vu{height:12px;background-position:-5434px 0px}.iti-flag-wf{height:14px;background-position:-5456px 0px}.iti-flag-ws{height:10px;background-position:-5478px 0px}.iti-flag-xk{height:15px;background-position:-5500px 0px}.iti-flag-ye{height:14px;background-position:-5522px 0px}.iti-flag-yt{height:14px;background-position:-5544px 0px}.iti-flag-za{height:14px;background-position:-5566px 0px}.iti-flag-zm{height:14px;background-position:-5588px 0px}.iti-flag-zw{height:10px;background-position:-5610px 0px}.iti-flag-np{background-color:transparent}

.clearfix:after {
    clear: both;
    content: ' ';
    display: block;
    font-size: 0;
    line-height: 0;
    visibility: hidden;
    width: 0;
    height: 0;
}
ul.clearfix li{ float: left;}
.clearfix {*zoom: 1;}

.hide-text{text-indent: -9999px;}
.float-left{float: left;}
.float-right{float: right;}
.force-hide{ display: none !important; }
.relative{position: relative;}

/***************** topnav *******************/
body{background-position: center 40px;}
#topnav *{
    box-sizing: content-box;
    -o-box-sizing: content-box;
    -ms-box-sizing: content-box;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
    margin: 0;
    padding: 0;
    border: 0;
}
#topnav{ 
    position: relative;
    width: 100%;
    min-width: 980px;
    height: 40px;
    background: #1e1e1e;
    box-shadow: 0 0px 2px #1e1e1e;
    font-family: 'Lucida Grande', Tahoma, Arial, sans-serif;
    z-index: 1999;
    color: #556977;
    font-size: 12px;

    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);

    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
     
    -webkit-perspective: 1000;
    -moz-perspective: 1000;
    -ms-perspective: 1000;
    perspective: 1000;
}
#topnav a{text-decoration: none; color: #bababa;}
#topnav a:hover{color: #fff;}
#topnav .auxiliary{
    position: absolute;
    border-style: solid;
    border-color: transparent;
    font-size: 0;
    line-height: 0;
}
#topnav .logo{ 
    left:20px; 
    top: 0;
    display: block;
    width: 140px;
    height: 100%; 
    background-repeat:no-repeat;
    background-position: center center;
    background-image: url("imgs/xdlogo/logo_topnav.png?2&v=1463398458");
    background-image: -webkit-image-set( url('imgs/xdlogo/logo_topnav.png?2&v=1463398458') 1x, url('imgs/xdlogo/logo_topnav_2x.png?4&v=1463398458') 2x);
    position: absolute;
    z-index: 1;
}
#topnav .logo img{opacity: 0.9; transition: opacity 0.3s ease-in;}
#topnav .logo:hover img{opacity: 1;}

#topnav .topnav-notice{
    padding-left: 200px;
    padding-right: 490px;
    line-height: 40px;
    position: relative;
}
#topnav .topnav-notice p{
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
#topnav .topnav-notice-link{
    color: #c7880e;
}
#topnav .topnav-notice-link:hover{
    color: #beb03f;
}

#topnav .topnav-links{width: auto;height: 40px; top: 0; right: 40px; position: absolute; z-index: 1;}
#topnav .topnav-links li{ padding: 10px 0;}
#topnav .topnav-links .sec{
    padding: 0 15px 0 35px;
    width: auto;
    *width: 60px;
    height: 20px;
    line-height: 20px;
    text-indent: 0;
    font-size: 14px;
    border: none;
    background-image: url('imgs/v4/topnav/icon.png?2&v=1471228156');
    background-image: -webkit-image-set( url('imgs/v4/topnav/icon.png?2&v=1471228156') 1x, url('imgs/v4/topnav/icon_2x.png?4&v=1471228156') 2x);
    background-repeat: no-repeat;
    display: block;
}
#topnav .topnav-links li.hoverlikeactive:hover a,
#topnav .topnav-links li a.sec1 { background-position: 14px -288px;}
#topnav .topnav-links li a.sec2 {  background-position: 14px -172px;}
#topnav .topnav-links li a.sec3 { background-position: 14px -230px; border-right: 1px solid #4c4d4d; padding-right: 6px;}
#topnav .topnav-links a:hover.sec1 { background-position: 14px -114px;}
#topnav .topnav-links a:hover.sec2{ background-position: 14px 2px;}
#topnav .topnav-links a:hover.sec3 { background-position: 14px -56px;}
#topnav .topnav-dropdown-container{position: relative;}
#topnav .topnav-dropdown-container .topnav-dropdown-body{
    display: none;
    position: absolute;
    opacity: 0;
    margin-top: -5px;
}
#topnav .support-transition .topnav-dropdown-body,
#topnav .transition-on-click .topnav-dropdown-body{
    visibility: hidden;
    display: block;
    margin-top: 0;
    transform: matrix(1, 0, 0, 1, 0, -5);
    -webkit-transform: matrix(1, 0, 0, 1, 0, -5);
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out, height 0.3s ease-in-out, visibility 0s linear 0.3s;
    -webkit-transition: opacity 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out, height 0.3s ease-in-out, visibility 0s linear 0.3s;
    -moz-transition: opacity 0.3s ease-in-out, -moz-transform 0.3s ease-in-out, height 0.3s ease-in-out, visibility 0s linear 0.3s;
}
#topnav .support-transition:hover .topnav-dropdown-body,
#topnav .transition-on-click.active .topnav-dropdown-body{
    opacity: 1;
    visibility: visible;
    transform: matrix(1, 0, 0, 1, 0, 0);
    -webkit-transform: matrix(1, 0, 0, 1, 0, 0);
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out, height 0.3s ease-in-out, visibility 0s linear 0s;
    -webkit-transition:  opacity 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out, height 0.3s ease-in-out, visibility 0s linear 0s;
}
#topnav .topnav-dropdown-container .topnav-dropdown-item{display: block;}
#topnavGameCenter .topnav-dropdown-body{
    background: #1f1e1e;
    width: 340px;
    right: 0px;
    border-radius: 0 0 5px 5px;
    position: absolute;
    overflow: hidden;
    top: 100%;
    height: 400px;
}
#topnav .topnav-links #topnavGameCenter:hover {background-color: #2f3033;}
#topnav .topnav-links #topnavGameCenter:hover .sec3{background-position: 14px 2px;color: #fff;}
#topnavGameCenter.unfold .topnav-dropdown-body{height: 652px;}
#topnavGameCenter .topnav-dropdown-item{border-bottom: 1px dashed #292827; padding: 6px 10px; *height: 58px;}
#topnavGameCenter .topnav-dropdown-item:hover{background-color: #292827;}
#topnavGameCenter .topnav-dropdown-item .topnav-logo{
    text-indent: -9999px;
    width: 120px;
    height: 58px;
    background: url(https://web.xdcdn.net/xd/imgs/v3/topnav/nav_logo.png?v4) no-repeat center 0;
}

#topnavGameCenter .topnav-dropdown-item-sg2 .topnav-logo{ background-position: -15px -10px; }
#topnavGameCenter .topnav-dropdown-item-sy .topnav-logo{ background-position: -15px -80px; }
#topnavGameCenter .topnav-dropdown-item-xxd .topnav-logo{ background-position: -15px -156px; }
#topnavGameCenter .topnav-dropdown-item-js .topnav-logo{ background-position: -15px -222px; }
#topnavGameCenter .topnav-dropdown-item-ktpd .topnav-logo{ background-position: -15px -300px; }
#topnavGameCenter .topnav-dropdown-item-sxd .topnav-logo{ background-position: -15px -370px; }
#topnavGameCenter .topnav-dropdown-item-sssg .topnav-logo{ background-position: -15px -444px; }
#topnavGameCenter .topnav-dropdown-item-tdyx .topnav-logo{ background-position: -15px -514px; }
#topnavGameCenter .topnav-dropdown-item-xxd2 .topnav-logo{ background-position: -15px -584px; }

#topnavGameCenter .topnav-dropdown-item .topnav-title{font-size: 14px; line-height: 28px; display: block;}
#topnavGameCenter .topnav-dropdown-item .topnav-more{line-height: 18px;}

#topnavGameCenter .topnav-toggle-button{position: absolute; bottom: 0; _bottom: -1px; left: 0; background-color: #292827; width: 100%; height: 30px;}
#topnavGameCenter .topnav-toggle-button .before{
    _border-color: #292827;
    left: 50%;
    margin-left: -8px;
    border-width: 8px;
    border-top-color: #fff;
    margin: 11px auto 0;
    transition: border-top-color 0.2s ease-in;
}
#topnavGameCenter .topnav-toggle-button:hover .before{border-top-color: #f60;}
#topnavGameCenter.unfold .topnav-toggle-button .before{
    border-bottom-color: #fff;
    border-top-width: 0;
}
#topnavGameCenter.unfold .topnav-toggle-button:hover .before{border-bottom-color: #f60;}

#topnav .topnav-btn{padding: 0 8px; height: 24px; line-height: 24px; background-color: #515150; border-radius: 8px; display: block;}
#topnav .topnav-btn-primary{background-color: #f60; color: #fff;}

#topnav .topnav-links .topnav-login-container{padding: 8px 0 0 20px;}
#topnav .topnav-login-layout{width: 116px; height: 24px; line-height: 24px; font-size: 14px;}
#topnav .topnav-login-panel{display: block; height: 32px; overflow: visible;}
#topnav .topnav-login-container .logging{ width: 24px; height: auto; margin: 0 auto;}
#topnav .topnav-login-layout .topnav-btn{margin-right: 16px;}
#topnav .yes-login .topnav-dropdown-menu{ margin-right: 0; position: relative; color: #bababa;}
#topnav .yes-login .topnav-dropdown-menu .username{width: 84px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;}
#topnav .yes-login .topnav-dropdown-menu .after{
    _border-color: #292827;
    _filter: chroma(color= #292827);
    top: 8px;
    right: 8px;
    border-width: 8px;
    border-top-color: #b2b2b2;
}
#topnav .topnav-login-container .active .topnav-dropdown-menu{background-color: #6a6a6a; color: #fff;}
#topnav .topnav-login-container .active .topnav-dropdown-menu .after{border-top-color: #fff; }
#topnav .yes-login .topnav-dropdown-body{background: #fff; border: 1px solid #b2b2b2; border-radius: 4px; padding: 4px 0 8px; top: 32px; box-shadow: 0 0px 3px #b2b2b2;}
#topnav .yes-login .topnav-dropdown-body .auxiliary{left: 100%; _border-color: #292827; _filter: chroma(color= #292827);}
#topnav .yes-login .topnav-dropdown-body .before{
    border-width: 8px;
    border-top: 0;
    border-bottom-color: #b2b2b2;
    top: -8px;
    margin-left: -38px;
}
#topnav .yes-login .topnav-dropdown-body .after{
    border-width: 7px;
    border-top: 0;
    border-bottom-color: #fff;
    top: -7px;
    margin-left: -37px;
}
#topnav .yes-login .topnav-dropdown-item{width: 112px; text-indent: 15px; color: #f60; font-size: 12px;}
#topnav .yes-login .topnav-dropdown-item:hover{color: #fff; background: #f60;}

/*** 游戏官网联系客服***/
.qq_wpa{
    width: 89px;
    height: 39px;
    padding: 3px 0 0 37px;
    line-height: 38px;
    color: #325F7F;
    font-size: 12px;
    font-weight: bold;
    text-align: center;
    text-decoration: none !important;
    text-shadow: none !important;
    display: inline-block;
    cursor: pointer;
    background: url(https://web.xdcdn.net/xd/imgs/wpa_a06.png) no-repeat;
    _background-image: none;
    _filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="https://web.xdcdn.net/xd/imgs/wpa_a06.png", sizingMethod="scale");
    zoom: 1;
}
.qq_wpa:hover {text-decoration: none !important;}

.kefu-qq-link{
    width: 92px;
    height: 22px;
    text-indent: -9999px;
    line-height: 22px;
    cursor: pointer;
    overflow: hidden;
    display: inline-block;
    *display: block;
    *zoom: 1;
    background-repeat: no-repeat;
    background: transparent url(https://web.xdcdn.net/xd/imgs/service/qq_kefu.png);
}

#topnavGameCenter  .topnav-dropdown-body .content{
    width: 100%;
    line-height: 30px;
    height: 400px;
}

#topnavGameCenter  .topnav-dropdown-body .have-border{
    border-left: 1px solid #2f3033;
}

#topnavGameCenter  .topnav-dropdown-body .content .title_container{
    background-color: #2f3033;
    padding: 10px 0;
    margin-bottom: 10px;
}
#topnavGameCenter  .topnav-dropdown-body .game_title{
    border-left: 4px solid #f60;
    padding-left: 22px;
    line-height: 16px;
    color: #999;
    font-size: 14px;
    white-space:nowrap;
}
#topnavGameCenter  .topnav-dropdown-body .content td{
    padding-left: 26px;
}
#topnavGameCenter  .topnav-dropdown-body .content td a:hover{
    color: #ff6600; transition: color .3s ease;
}

#topnavGameCenter  .topnav-dropdown-body .content a{
    *zoom: 1;
}
#topnavGameCenter .icon{
    color: #fff;
    font-size: 8px;
    line-height: 10px;
    height: 10px;
    width: 10px;
    text-align: center;
    display:inline;
    position: absolute;
    margin-top: 10px;
    margin-left: 5px;
    border-radius: 2px;
    z-index: 100;
}

#topnavGameCenter  .topnav-dropdown-body .content .new{
    background-color: #1abc9c;
}

#topnavGameCenter  .topnav-dropdown-body .content .hot{
    background-color: #f60;
}
@media screen and (-webkit-min-device-pixel-ratio:0) and (min-resolution:.001dpcm) {
    #topnavGameCenter .for-chrome{
        -webkit-transform:scale(0.6);
        display: block;
    }
}
/* http://www.xd.com 
 * button
 * v4 2014-12-4
 * 相应js为button.js
 */

.btn{
    line-height: 20px;
    display: inline-block;
    padding: 10px 12px;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 0;
    border-radius: 6px;
    white-space: nowrap;
    font-size: 14px;
    user-select: none;
    -webkit-transition: 0.25s;
    transition: 0.25s;
}

.btn:hover,
.btn:focus {
    text-decoration: none;
    outline: 0;
}
.btn:active,
.btn-active {
    outline: 0;
    background-image: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.btn[disabled],
.btn.disabled{
    cursor: not-allowed;
    pointer-events: none;
}

.btn.disabled{
    cursor: not-allowed;
    pointer-events: none;
}

.btn-block{
    display: block;
    width: 100%;
    padding-left: 0;
    padding-right: 0;
}

.btn-lg {
    padding: 12px 18px 13px;
    font-size: 16px;
    line-height: 20px;
}

.btn-sm {
    padding: 6px 13px 8px;
    font-size: 14px;
    line-height: 20px;
}

.btn-xs {
    padding: 8px 13px 9px;
    font-size: 12px;
    line-height: 1.2;
}

.btn-default{
    background-color: #bdc3c7;
    color: #ffffff;
}

.btn-default:hover, .btn-default-hover{
    background-color: #cacfd2;
    color: #ffffff;
}

.btn-default:active, .btn-default.active{
    background-color: #a1a6a9;
    color: #eef0f1;
}

.btn-default.disabled,
.btn-default[disabled]{
    color: #eef0f1;
    background-color: #d1d5d8;
}

.btn-default-disabled{
    color: #eef0f1;
    _background-color: #cacfd2;
}

.btn-primary{
    background-color: #ff6600;
    color: #ffffff;
}

.btn-primary:hover, .btn-primary-hover{
    background-color: #ff8533;
    color: #ffffff;
}

.btn-primary:active, .btn-primary.active{
    background-color: #d95700;
    color: #ffd9bf;
}

.btn-primary.disabled,
.btn-primary[disabled]{
    color: #ffd9bf;
    background-color: #ff944d;
}

.btn-primary-disabled{
    _background-color: #ff8533;
}
.btn-danger{
    background-color: #e74c3c;
    color: #ffffff;
}

.btn-danger:hover, .btn-danger-hover{
    background-color: #ec7063;
    color: #ffffff;
}

.btn-danger:active, .btn-danger.active{
    background-color: #c54133;
    color: #f9d2ce;
}

.btn-danger.disabled,
.btn-danger[disabled]{
    color: #f9d2ce;
    background-color: #ee8176;
}

.btn-danger-disabled{
    _background-color: #ec7063;
}
.btn-info{
    background-color: #84cbca;
    color: #ffffff;
}

.btn-info:hover, .btn-info-hover{
    background-color: #9dd5d5;
    color: #ffffff;
}

.btn-info:active, .btn-info.active{
    background-color: #70adac;
    color: #e0f2f2;
}

.btn-info.disabled,
.btn-info[disabled]{
    color: #e0f2f2;
    background-color: #a9dbda;
}

.btn-info-disabled{
    _background-color: #9dd5d5;
}

.btn.disabled{
    _filter: alpha(opacity=75);
}

.btn-link {
    color: #666666;
    cursor: pointer;
    border-radius: 0;
}

.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active,
.btn-link.active {
    border-color: transparent;
    background-color: transparent;
}

.btn-link:hover,
.btn-link:focus {
    color: #ff6600;
    text-decoration: none;
}
.modal{ display: none; color: #333; width:500px; border-radius: 5px; padding-bottom: 30px; color: #999; position: relative; background: #fff;}
.modal .modal-header{ height: 30px; padding: 0 5px;}
.modal .modal-header .close{ width: 20px; height: 20px; background: url(//web.xdcdn.net/xd/imgs/v3/widget_close.gif) no-repeat center 0; margin-top: 5px; text-indent: -9999px; float: right;}
.modal .modal-header .close:hover{background-position: 5px -20px;}

.modal-dialog{padding-bottom: 0; width: 640px; color: #333333;}
.modal-dialog .modal-header{height: 60px; padding: 0 24px; font-size: 24px;}
.modal-dialog .modal-header .title{line-height: 60px; float: left;}
.modal-dialog .modal-header .close{background: none; text-indent: 0; width: auto; height: auto; line-height: 24px; margin-top: 18px; color: #666; transition: color .3s ease;}
.modal-dialog .modal-header .close:hover{ color: #f60;}
.modal-dialog .modal-body{border-top: 2px solid #ecf0f1; padding: 30px 24px; font-size: 14px; line-height: 26px;}
.modal-dialog .modal-body .text-strong{color: #f60;}
.modal-dialog .modal-footer{ background: #f0f0f0; text-align: right; padding: 20px 24px; border-radius: 0 0 5px 5px;}
.modal-dialog .modal-footer .btn{min-width: 154px; _width: 154px; margin-left: 12px;}
/*  @author LR */
* { box-sizing: border-box; }

.hide { display: none; }

.float-left { float: left; }

.float-right { float: right; }

.text-right { text-align: right; }

.text-center { text-align: center; }

.text-left { text-align: left; }

.hide-text { text-indent: -9999px; }

@font-face { font-family: ro; src: url("../game/ro/fonts/ro/ro.eot?v=1450953976"); src: url("../game/ro/fonts/ro/ro.eot?v=1450953976?#iefix") format("embedded-opentype"), url("../game/ro/fonts/ro/ro.woff?v=1450953976") format("woff"), url("../game/ro/fonts/ro/ro.ttf?v=1450953976") format("truetype"), url("../game/ro/fonts/ro/ro.svg?v=1450953976") format("svg"); }
.font-ro { font-family: ro; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }

.custom-btn-primary { background-color: #ab9350; color: #fff; }
.custom-btn-primary:hover { background-color: #bca973; }
.custom-btn-primary:active { background-color: #927d44; }
.custom-btn-primary.disabled, .custom-btn-primary[disabled] { background-color: #c4b485; color: #eae4d3; }
.custom-btn-primary .btn-primary-disabled { _background-color: #c4b485; _color: #eae4d3; }

body { background-color: #fff; color: #532300; }

.layout, #body .section .section-body { width: 1000px; margin: 0 auto; }

.btn.custom-btn-primary { font-size: 20px; }

#header { width: 100%; height: 126px; z-index: 2; background-image: url('../game/ro/imgs/header.png?1489631232&v=1484747164'); background-repeat: repeat-x; background-position: 0 0; background-color: transparent; background-size: auto; position: absolute; top: 40px; }
#header .header-nav { width: 998px; height: 124px; line-height: 124px; }
#header .header-nav li { height: 100%; }
#header .nav-item { display: block; width: 145px; height: 100%; background-image: url('../game/ro/imgs/header-sprite.png?2&v=1478841740'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; background-position: -569px 0; text-align: center; font-size: 18px; color: #532300; position: relative; }
#header .nav-item .new-feel { text-align: center; font-size: 8px; text-indent: 0; color: #fff; border-radius: 2px; display: block; -webkit-transform: scale(0.67); transform: scale(0.67); width: 16px; height: 16px; line-height: 16px; background-color: #ff6600; position: absolute; top: 52px; right: 19px; }
#header .nav-item:hover, #header .nav-item-active { color: #92745e; background-position: -422px 0; }
#header .nav-logo { width: 420px; background-position: 0 0; }
#header .nav-logo:hover { background-position: 0 0; }
#header .nav-home { width: 144px; background-position: -570px 0; }
#header .nav-home:hover, #header .nav-home.nav-item-active { background-position: -423px 0; }
#header .nav-bbs { width: 144px; }
#header .share-container { background-image: url('../game/ro/imgs/header-sprite.png?1489631232&v=1478841740'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; width: 156px; height: 28px; line-height: 28px; background-position: -718px 0; position: absolute; bottom: -38px; left: 50%; margin-left: 344px; color: #fff; }
#header .share-container .text { padding-left: 16px; }
#header .share-container .share { color: #fff; font-size: 20px; width: 24px; display: inline-block; }
#header .share-container .share-wechat { position: relative; }
#header .share-container .share-wechat:hover { _zoom: 1; }
#header .share-container .share-wechat:hover .ro-site-qrcode { visibility: visible; }
#header .share-container .ro-site-qrcode { position: absolute; right: -5px; top: 28px; visibility: hidden; }

#footer { padding: 30px 0; background-color: #000; color: #534031; }
#footer a { color: #776859; }
#footer a:hover { color: #92745e; }
#footer .xd-logo { background: url(//web.xdcdn.net/xd/imgs/xdlogo/game_footer_white.png?v2) no-repeat 0 center; width: 140px; height: 40px; _filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="https://web.xdcdn.net/xd/imgs/xdlogo/game_footer_white.png?v2"); _background: none; _margin-top: 4px; cursor: default; }
#footer .logo-other { position: absolute; top: 50px; }
#footer .logo-jmyx { left: 160px; margin-top: 6px; width: 94px; height: 23px; background: url('../game/ro/imgs/footer-sprite.png?v=1459938586') 0 -35px no-repeat; }
#footer .logo-gravity { left: 0; width: 141px; height: 33px; background: url('../game/ro/imgs/footer-sprite.png?v=1459938586') 0 0 no-repeat; }

.ro-dialog { width: 372px; }
.ro-dialog .modal-header { padding: 0; width: 340px; margin: 0 auto; border-bottom: 2px solid #ecf0f1; color: #9b8049; _overflow: hidden; }
.ro-dialog .modal-header .title { border-bottom: 2px solid #9b8049; z-index: 1; position: relative; line-height: 60px; height: 60px; }
.ro-dialog .modal-header .close { font-size: 30px; color: #ab9350; margin-top: 0; line-height: 60px; }
.ro-dialog .modal-header .close:hover { color: #caaa51; }
.ro-dialog .modal-body { color: #532300; border: none; line-height: 34px; padding-top: 18px; }
.ro-dialog .modal-body .text-indent { text-indent: 30px; }
.ro-dialog .modal-body .text-center img { display: block; margin: 10px auto; }
.ro-dialog .modal-footer { background-color: #fff; text-align: center; padding-bottom: 50px; padding-top: 4px; }
.ro-dialog .modal-footer .custom-btn-primary { padding-left: 0; padding-right: 0; width: 126px; min-width: 126px; margin: 0; }

.decorate-sprite, #section2 #decorate-1 .inner-active, #section2 #decorate-1 .inner-unactive, #section2 #decorate-2 .inner-active, #section2 #decorate-2 .inner-unactive, #section2 #decorate-3 .inner-active, #section2 #decorate-3 .inner-unactive, #section2 #decorate-4 .inner-active, #section2 #decorate-4 .inner-unactive, #section2 #decorate-5 .inner-active, #section2 #decorate-5 .inner-unactive { background-image: url('../game/ro/imgs/section-2/decorate.png?v=1450953978'); background-repeat: no-repeat; }

html, body { overflow: hidden; _overflow-y: auto; }

.material, #body .section-title { background-image: url('../game/ro/imgs/sprite.png?1489631233&v=1480323690'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }

#body { width: 100%; margin: 0 auto; position: relative; background-image: url('../game/ro/imgs/body.jpg?1467600686&v=1450953977'); background-repeat: repeat-y; background-position: center -74px; background-color: transparent; background-size: auto; _background: none; }
#body .section { height: 1002px; width: 100%; position: relative; overflow: hidden; }
#body .section .section-body { height: 100%; position: absolute; left: 50%; top: 0; margin-left: -500px; -webkit-backface-visibility: hidden; backface-visibility: hidden; -webkit-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-perspective: 1000px; perspective: 1000px; }
#body .section-item { position: absolute; }
#body .section-title { height: 68px; width: 928px; opacity: 0; }
#body .section-desc { color: #6f6f6f; line-height: 28px; font-size: 16px; opacity: 0; }
#body .section-desc .bold { font-size: 18px; font-family: AdobeHeitiStd-Regular; }
#body .animate-move { -webkit-transform: translate3d(0, 0, 0); transform: translate3d(0, 0, 0); }
#body #section1 { height: 928px; background-image: url('../game/ro/imgs/section-1/bg.jpg?1490950219&v=1488282480'); background-repeat: no-repeat; background-position: center 0; background-color: transparent; background-size: auto; }
#body #section1 .section-body { width: 1920px; margin-left: -960px; }
#body #section9 { _height: 1080px; }
#body #section9 .section-body { width: 100%; left: 0; margin: 0; }
#body .except-ie6 { _display: none !important; }

#section1 .section-body { background-image: url('../game/ro/imgs/section-1/body.jpg?1503541930&v=1493115758'); background-repeat: no-repeat; background-position: center 0; background-color: transparent; background-size: auto; *background-image: url('../game/ro/imgs/section-1/bg.jpg?1490950219&v=1488282480'); }
#section1 .bg-flash { position: relative; width: 1920px; height: 100%; left: 0; top: 0; *background: url('../game/ro/imgs/section-1/body.jpg?1503541930&v=1493115758') no-repeat center 0; }
#section1 .bg-flash .no-flash-title { background-image: url('../game/ro/imgs/section-1/no-flash-bg.jpg?1489631233&v=1482234161'); background-repeat: no-repeat; background-position: center 0; background-color: transparent; background-size: auto; width: 924px; height: 298px; position: absolute; left: 50%; top: 167px; margin-left: -328px; }
#section1 .bg-flash .no-flash-bottom { background-image: url('../game/ro/imgs/section-1/no-flash-right-bottom.png?1489631233&v=1482234161'); background-repeat: no-repeat; background-position: center 0; background-color: transparent; background-size: auto; width: 246px; height: 253px; position: absolute; left: 50%; margin-left: 430px; bottom: 0; }
#section1 .video-list-popup-handle { width: 542px; height: 260px; top: 449px; left: 50%; margin-left: -135px; z-index: 2; }
#section1 .video-list-popup-handle .video-cover { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('../game/ro/imgs/section-1/video-cover.png?1489631233&v=1484747164'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section1 .video-list-popup-handle .video-play-btn { position: absolute; width: 100px; height: 100px; background-image: url('../game/ro/imgs/section-1/video-cover.png?1489631233&v=1484747164'); background-repeat: no-repeat; background-position: 0 -262px; background-color: transparent; background-size: auto; opacity: 0; filter: alpha(opacity=0); left: 230px; top: 83px; -webkit-transition: opacity .5s; transition: opacity .5s; }
#section1 .video-list-popup-handle:hover .video-play-btn { opacity: 1; filter: alpha(opacity=100); }
#section1 .for-subscribe { left: 50%; margin-left: 74px; top: 750px; height: 83px; width: 244px; background: url('../game/ro/imgs/section-1/sprite.png?v=1489469746') 0 -211px no-repeat; z-index: 2; }
#section1 .for-subscribe:hover { height: 83px; width: 244px; background: url('../game/ro/imgs/section-1/sprite.png?v=1489469746') 0 -126px no-repeat; }
#section1 .download-qrcode { width: 167px; height: 120px; position: absolute; left: 50%; top: 740px; margin-left: -108px; background-image: url('../game/ro/imgs/section-1/download-qrcode.png?1489631233&v=1484747164'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; z-index: 2; }
#section1 .mnq { position: absolute; z-index: 2; left: 50%; margin-left: 90px; top: 836px; height: 16px; width: 90px; background: url('../game/ro/imgs/section-1/sprite.png?v=1489469746') 0 -350px no-repeat; }
#section1 .mnq:hover { background: url('../game/ro/imgs/section-1/sprite.png?v=1489469746') 0 -296px no-repeat; }
#section1 .mnq-mac { position: absolute; z-index: 2; left: 50%; top: 836px; margin-left: 85px; height: 16px; width: 107px; background: url('../game/ro/imgs/section-1/sprite.png?v=1489469746') 0 -332px no-repeat; }
#section1 .mnq-mac:hover { height: 16px; width: 107px; background: url('../game/ro/imgs/section-1/sprite.png?v=1489469746') 0 -314px no-repeat; }
#section1 .go-ro { position: absolute; z-index: 2; left: 50%; top: 836px; margin-left: 210px; height: 16px; width: 107px; background: url('../game/ro/imgs/section-1/sprite.png?v=1489469746') 0 -18px no-repeat; }
#section1 .go-ro:hover { height: 16px; width: 107px; background: url('../game/ro/imgs/section-1/sprite.png?v=1489469746') 0 0 no-repeat; }
#section1 .btn-more-boli { background-image: url('../game/ro/imgs/section-1/boli.png?1467600687&v=1460124780'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; width: 188px; height: 48px; left: 50%; margin-left: -500px; top: 136px; z-index: 2; }

#section2 { _background: url('../game/ro/imgs/section-2/bg-ie6.jpg?1467600687&v=1450953978') no-repeat center top; }
#section2 .section-body { _background: url('../game/ro/imgs/section-2/bg-ie6.jpg?1467600687&v=1450953978') no-repeat center top; }
#section2 .section-title { background-position: 0 -310px; width: 652px; top: 100px; left: 150px; }
#section2 .section-desc { top: 186px; left: 150px; }
#section2 .need-prepare { opacity: 0; filter: alpha(opacity=0); _-webkit-filter: none; _filter: none; -webkit-transition: opacity 0.5s; transition: opacity 0.5s; }
#section2 .after-prepare { opacity: 1; -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)"; /* IE8 */ filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF); }
@-webkit-keyframes float { 0% { margin-top: 0; }
  100% { margin-top: -10px; } }
@keyframes float { 0% { margin-top: 0; }
  100% { margin-top: -10px; } }
#section2 .castle { width: 1406px; height: 420px; bottom: -18px; left: -216px; background-image: url('../game/ro/imgs/section-2/castle.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section2 .castle .shadow { width: 242px; height: 310px; top: 0; left: 708px; background-image: url('../game/ro/imgs/section-2/shadow.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section2 .carousel { width: 576px; height: 680px; bottom: 0; left: 162px; _width: 577px; _left: 164px; _top: 320px; }
#section2 .carousel .item .label { width: 42px; height: 184px; position: absolute; left: 74px; top: 124px; }
#section2 .carousel .item .role { width: 100%; height: 100%; position: absolute; left: 0; top: 0; *filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF); /* IE6 & 7 */ _-webkit-filter: none; _filter: none; }
#section2 .carousel .item-1 .role { background-image: url('../game/ro/imgs/section-2/role1.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: center bottom; background-color: transparent; background-size: auto; _background-image: url('../game/ro/imgs/section-2/role1-ie6.jpg?1467600687&v=1450953978'); }
#section2 .carousel .item-1 .label { background-position: -500px -126px; }
#section2 .carousel .item-2 .role { background-image: url('../game/ro/imgs/section-2/role2.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: center bottom; background-color: transparent; background-size: auto; _background-image: url('../game/ro/imgs/section-2/role2-ie6.jpg?1467600687&v=1450953978'); }
#section2 .carousel .item-2 .label { background-position: -544px -126px; }
@media \0screen { #section2 .carousel .item-1 { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/game_statics/ro/imgs/section-2/role1.png') \9; }
  #section2 .carousel .item-1 .role { background: none\9; }
  #section2 .carousel .item-2 { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/game_statics/ro/imgs/section-2/role2.png') \9; }
  #section2 .carousel .item-2 .role { background: none\9; } }
#section2 #decorate-1 { width: 112px; height: 112px; left: 10px; top: 413px; -webkit-transform: translate3d(0, 0, 0); transform: translate3d(0, 0, 0); cursor: pointer; -webkit-animation-name: float; animation-name: float; -webkit-animation-duration: 0.4s; animation-duration: 0.4s; -webkit-animation-delay: 0; animation-delay: 0; -webkit-animation-fill-mode: both; animation-fill-mode: both; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; -webkit-animation-direction: alternate; animation-direction: alternate; /* IE6-8 */ }
#section2 #decorate-1 .inner { width: 100%; height: 100%; _height: 112px; _zoom: 1; -webkit-transition: opacity .5s; transition: opacity .5s; position: absolute; left: 0; top: 0; }
#section2 #decorate-1 .inner-active { background-position: 0 -732px; _background: url('../game/ro/imgs/section-2/decorate-ie/active-1.jpg?1467600687&v=1450953978') no-repeat; opacity: 0; }
#section2 #decorate-1 .inner-unactive { background-position: 0 0; _background: url('../game/ro/imgs/section-2/decorate-ie/1.jpg?1467600687&v=1450953978') no-repeat; opacity: 1; }
#section2 #decorate-1.need-prepare { -webkit-transition-delay: 0.8s; transition-delay: 0.8s; }
#section2 #decorate-1.after-prepare { -webkit-transition-delay: 0s; transition-delay: 0s; }
#section2 #decorate-1.active { cursor: default; }
#section2 #decorate-1.active .inner-active { opacity: 1; }
#section2 #decorate-1.active .inner-unactive { opacity: 0; }
@media \0screen\,screen\9 { #section2 #decorate-1 .inner-active { display: none; }
  #section2 #decorate-1 .inner-unactive { display: block; }
  #section2 #decorate-1.active .inner-active { display: block; }
  #section2 #decorate-1.active .inner-unactive { display: none; } }
#section2 #decorate-2 { width: 135px; height: 135px; left: -38px; top: 579px; -webkit-transform: translate3d(0, 0, 0); transform: translate3d(0, 0, 0); cursor: pointer; -webkit-animation-name: float; animation-name: float; -webkit-animation-duration: 0.5s; animation-duration: 0.5s; -webkit-animation-delay: 0.2s; animation-delay: 0.2s; -webkit-animation-fill-mode: both; animation-fill-mode: both; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; -webkit-animation-direction: alternate; animation-direction: alternate; /* IE6-8 */ }
#section2 #decorate-2 .inner { width: 100%; height: 100%; _height: 136px; _zoom: 1; -webkit-transition: opacity .5s; transition: opacity .5s; position: absolute; left: 0; top: 0; }
#section2 #decorate-2 .inner-active { background-position: 0 -844px; _background: url('../game/ro/imgs/section-2/decorate-ie/active-2.jpg?1467600687&v=1450953978') no-repeat; opacity: 0; }
#section2 #decorate-2 .inner-unactive { background-position: 0 -112px; _background: url('../game/ro/imgs/section-2/decorate-ie/2.jpg?1467600687&v=1450953978') no-repeat; opacity: 1; }
#section2 #decorate-2.need-prepare { -webkit-transition-delay: 0.6s; transition-delay: 0.6s; }
#section2 #decorate-2.after-prepare { -webkit-transition-delay: 0.2s; transition-delay: 0.2s; }
#section2 #decorate-2.active { cursor: default; }
#section2 #decorate-2.active .inner-active { opacity: 1; }
#section2 #decorate-2.active .inner-unactive { opacity: 0; }
@media \0screen\,screen\9 { #section2 #decorate-2 .inner-active { display: none; }
  #section2 #decorate-2 .inner-unactive { display: block; }
  #section2 #decorate-2.active .inner-active { display: block; }
  #section2 #decorate-2.active .inner-unactive { display: none; } }
#section2 #decorate-3 { width: 135px; height: 135px; left: 131px; top: 785px; -webkit-transform: translate3d(0, 0, 0); transform: translate3d(0, 0, 0); cursor: pointer; -webkit-animation-name: float; animation-name: float; -webkit-animation-duration: 0.5s; animation-duration: 0.5s; -webkit-animation-delay: 0.1s; animation-delay: 0.1s; -webkit-animation-fill-mode: both; animation-fill-mode: both; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; -webkit-animation-direction: alternate; animation-direction: alternate; /* IE6-8 */ }
#section2 #decorate-3 .inner { width: 100%; height: 100%; _height: 136px; _zoom: 1; -webkit-transition: opacity .5s; transition: opacity .5s; position: absolute; left: 0; top: 0; }
#section2 #decorate-3 .inner-active { background-position: 0 -980px; _background: url('../game/ro/imgs/section-2/decorate-ie/active-3.jpg?1467600687&v=1450953978') no-repeat; opacity: 0; }
#section2 #decorate-3 .inner-unactive { background-position: 0 -248px; _background: url('../game/ro/imgs/section-2/decorate-ie/3.jpg?1467600687&v=1450953978') no-repeat; opacity: 1; }
#section2 #decorate-3.need-prepare { -webkit-transition-delay: 0.4s; transition-delay: 0.4s; }
#section2 #decorate-3.after-prepare { -webkit-transition-delay: 0.4s; transition-delay: 0.4s; }
#section2 #decorate-3.active { cursor: default; }
#section2 #decorate-3.active .inner-active { opacity: 1; }
#section2 #decorate-3.active .inner-unactive { opacity: 0; }
@media \0screen\,screen\9 { #section2 #decorate-3 .inner-active { display: none; }
  #section2 #decorate-3 .inner-unactive { display: block; }
  #section2 #decorate-3.active .inner-active { display: block; }
  #section2 #decorate-3.active .inner-unactive { display: none; } }
#section2 #decorate-4 { width: 184px; height: 184px; left: 795px; top: 540px; -webkit-transform: translate3d(0, 0, 0); transform: translate3d(0, 0, 0); cursor: pointer; -webkit-animation-name: float; animation-name: float; -webkit-animation-duration: 0.8s; animation-duration: 0.8s; -webkit-animation-delay: 0.4s; animation-delay: 0.4s; -webkit-animation-fill-mode: both; animation-fill-mode: both; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; -webkit-animation-direction: alternate; animation-direction: alternate; /* IE6-8 */ }
#section2 #decorate-4 .inner { width: 100%; height: 100%; _height: 184px; _zoom: 1; -webkit-transition: opacity .5s; transition: opacity .5s; position: absolute; left: 0; top: 0; }
#section2 #decorate-4 .inner-active { background-position: 0 -1116px; _background: url('../game/ro/imgs/section-2/decorate-ie/active-4.jpg?1467600687&v=1450953978') no-repeat; opacity: 0; }
#section2 #decorate-4 .inner-unactive { background-position: 0 -384px; _background: url('../game/ro/imgs/section-2/decorate-ie/4.jpg?1467600687&v=1450953978') no-repeat; opacity: 1; }
#section2 #decorate-4.need-prepare { -webkit-transition-delay: 0.2s; transition-delay: 0.2s; }
#section2 #decorate-4.after-prepare { -webkit-transition-delay: 0.6s; transition-delay: 0.6s; }
#section2 #decorate-4.active { cursor: default; }
#section2 #decorate-4.active .inner-active { opacity: 1; }
#section2 #decorate-4.active .inner-unactive { opacity: 0; }
@media \0screen\,screen\9 { #section2 #decorate-4 .inner-active { display: none; }
  #section2 #decorate-4 .inner-unactive { display: block; }
  #section2 #decorate-4.active .inner-active { display: block; }
  #section2 #decorate-4.active .inner-unactive { display: none; } }
#section2 #decorate-5 { width: 164px; height: 164px; left: 664px; top: 244px; -webkit-transform: translate3d(0, 0, 0); transform: translate3d(0, 0, 0); cursor: pointer; -webkit-animation-name: float; animation-name: float; -webkit-animation-duration: 0.6s; animation-duration: 0.6s; -webkit-animation-delay: 0.3s; animation-delay: 0.3s; -webkit-animation-fill-mode: both; animation-fill-mode: both; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; -webkit-animation-direction: alternate; animation-direction: alternate; /* IE6-8 */ }
#section2 #decorate-5 .inner { width: 100%; height: 100%; _height: 164px; _zoom: 1; -webkit-transition: opacity .5s; transition: opacity .5s; position: absolute; left: 0; top: 0; }
#section2 #decorate-5 .inner-active { background-position: 0 -1300px; _background: url('../game/ro/imgs/section-2/decorate-ie/active-5.jpg?1467600687&v=1450953978') no-repeat; opacity: 0; }
#section2 #decorate-5 .inner-unactive { background-position: 0 -568px; _background: url('../game/ro/imgs/section-2/decorate-ie/5.jpg?1467600687&v=1450953978') no-repeat; opacity: 1; }
#section2 #decorate-5.need-prepare { -webkit-transition-delay: 0s; transition-delay: 0s; }
#section2 #decorate-5.after-prepare { -webkit-transition-delay: 0.8s; transition-delay: 0.8s; }
#section2 #decorate-5.active { cursor: default; }
#section2 #decorate-5.active .inner-active { opacity: 1; }
#section2 #decorate-5.active .inner-unactive { opacity: 0; }
@media \0screen\,screen\9 { #section2 #decorate-5 .inner-active { display: none; }
  #section2 #decorate-5 .inner-unactive { display: block; }
  #section2 #decorate-5.active .inner-active { display: block; }
  #section2 #decorate-5.active .inner-unactive { display: none; } }

#section3 { _background: url('../game/ro/imgs/section-3/bg-ie6.jpg?1467600687&v=1450953978') no-repeat center top; }
#section3 .section-body { _background: url('../game/ro/imgs/section-3/bg-ie6.jpg?1467600687&v=1450953978') no-repeat center top; }
#section3 .feather { width: 1568px; height: 772px; left: -284px; top: 10px; background-image: url('../game/ro/imgs/section-3/feather.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section3 .section-title { background-position: 0 -380px; top: 112px; left: -10px; }
#section3 .section-desc { top: 210px; left: -10px; }
#section3 .book { width: 1240px; height: 428px; left: -120px; bottom: 0; _bottom: 48px; background-image: url('../game/ro/imgs/section-3/book.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; }
#section3 .book .windmill-fan { width: 228px; height: 228px; background-image: url('../game/ro/imgs/section-3/windmill-fan.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 center; background-color: transparent; background-size: auto; left: 786px; top: -90px; -webkit-animation-name: fan; animation-name: fan; -webkit-animation-duration: 12s; animation-duration: 12s; -webkit-animation-delay: 0; animation-delay: 0; -webkit-animation-fill-mode: both; animation-fill-mode: both; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; -webkit-animation-direction: normal; animation-direction: normal; -webkit-animation-play-state: paused; animation-play-state: paused; }
@-webkit-keyframes fan { 0% { -webkit-transform: rotateZ(0deg); transform: rotateZ(0deg); }
  100% { -webkit-transform: rotateZ(360deg); transform: rotateZ(360deg); } }
@keyframes fan { 0% { -webkit-transform: rotateZ(0deg); transform: rotateZ(0deg); }
  100% { -webkit-transform: rotateZ(360deg); transform: rotateZ(360deg); } }
#section3 .book #windmill-fan.after-prepare { -webkit-animation-play-state: running; animation-play-state: running; }
#section3 #emotions.need-prepare { opacity: 0; -webkit-transition: opacity .5s; transition: opacity .5s; }
#section3 #emotions.after-prepare { opacity: 1; }
#section3 .carousel { width: 264px; height: 564px; left: 493px; top: -228px; }
#section3 .carousel .emotion { width: 84px; height: 68px; left: 50%; top: 0; margin-left: -42px; position: absolute; }
#section3 .carousel .action { width: 100%; height: 500px; left: 0; bottom: 0; position: absolute; }
#section3 .carousel-indicators { height: 86px; white-space: nowrap; left: -390px; _left: -389px; top: 35px; position: absolute; }
#section3 .carousel-indicators .active { _background: url('../game/ro/imgs/section-3/indicator-ie6.jpg?1467600687&v=1450953978') no-repeat; }
#section3 .indicator { width: 76px; height: 100%; display: inline-block; margin-right: 28px; _height: 86px; _background: none; _position: absolute; _top: 0; _display: block; _margin: 0; }
@-webkit-keyframes emotion-action { 0% { background-position: 0 bottom; }
  100% { background-position: -5566px bottom; } }
@keyframes emotion-action { 0% { background-position: 0 bottom; }
  100% { background-position: -5566px bottom; } }
#section3 #wave .emotion { background-image: url('../game/ro/imgs/section-3/wave.gif?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: center 0; background-color: transparent; background-size: auto; }
#section3 #wave .action { background-image: url('../game/ro/imgs/section-3/wave.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 bottom; background-color: transparent; background-size: auto; }
#section3 #wave .action-0 { background-position: 0px bottom; }
#section3 #wave .action-1 { background-position: -253px bottom; }
#section3 #wave .action-2 { background-position: -506px bottom; }
#section3 #wave .action-3 { background-position: -759px bottom; }
#section3 #wave .action-4 { background-position: -1012px bottom; }
#section3 #wave .action-5 { background-position: -1265px bottom; }
#section3 #wave .action-6 { background-position: -1518px bottom; }
#section3 #wave .action-7 { background-position: -1771px bottom; }
#section3 #wave .action-8 { background-position: -2024px bottom; }
#section3 #wave .action-9 { background-position: -2277px bottom; }
#section3 #wave .action-10 { background-position: -2530px bottom; }
#section3 #wave .action-11 { background-position: -2783px bottom; }
#section3 #wave .action-12 { background-position: -3036px bottom; }
#section3 #wave .action-13 { background-position: -3289px bottom; }
#section3 #wave .action-14 { background-position: -3542px bottom; }
#section3 #wave .action-15 { background-position: -3795px bottom; }
#section3 #wave .action-16 { background-position: -4048px bottom; }
#section3 #wave .action-17 { background-position: -4301px bottom; }
#section3 #wave .action-18 { background-position: -4554px bottom; }
#section3 #wave .action-19 { background-position: -4807px bottom; }
#section3 #wave .action-20 { background-position: -5060px bottom; }
#section3 #wave .action-21 { background-position: -5313px bottom; }
#section3 .after-prepare #wave.active .action { -webkit-animation: emotion-action 2s steps(22) 1; animation: emotion-action 2s steps(22) 1; }
#section3 #section3-indicator-wave { background-position: -188px -126px; _left: 0; }
#section3 #section3-indicator-wave.active, #section3 #section3-indicator-wave:hover { background-position: -188px -214px; _background-position: 0 0; }
#section3 #kiss .emotion { background-image: url('../game/ro/imgs/section-3/kiss.gif?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: center 0; background-color: transparent; background-size: auto; }
#section3 #kiss .action { background-image: url('../game/ro/imgs/section-3/kiss.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 bottom; background-color: transparent; background-size: auto; }
#section3 #kiss .action-0 { background-position: 0px bottom; }
#section3 #kiss .action-1 { background-position: -253px bottom; }
#section3 #kiss .action-2 { background-position: -506px bottom; }
#section3 #kiss .action-3 { background-position: -759px bottom; }
#section3 #kiss .action-4 { background-position: -1012px bottom; }
#section3 #kiss .action-5 { background-position: -1265px bottom; }
#section3 #kiss .action-6 { background-position: -1518px bottom; }
#section3 #kiss .action-7 { background-position: -1771px bottom; }
#section3 #kiss .action-8 { background-position: -2024px bottom; }
#section3 #kiss .action-9 { background-position: -2277px bottom; }
#section3 #kiss .action-10 { background-position: -2530px bottom; }
#section3 #kiss .action-11 { background-position: -2783px bottom; }
#section3 #kiss .action-12 { background-position: -3036px bottom; }
#section3 #kiss .action-13 { background-position: -3289px bottom; }
#section3 #kiss .action-14 { background-position: -3542px bottom; }
#section3 #kiss .action-15 { background-position: -3795px bottom; }
#section3 #kiss .action-16 { background-position: -4048px bottom; }
#section3 #kiss .action-17 { background-position: -4301px bottom; }
#section3 #kiss .action-18 { background-position: -4554px bottom; }
#section3 #kiss .action-19 { background-position: -4807px bottom; }
#section3 #kiss .action-20 { background-position: -5060px bottom; }
#section3 #kiss .action-21 { background-position: -5313px bottom; }
#section3 .after-prepare #kiss.active .action { -webkit-animation: emotion-action 2s steps(22) 1; animation: emotion-action 2s steps(22) 1; }
#section3 #section3-indicator-kiss { background-position: -266px -126px; _left: 104px; }
#section3 #section3-indicator-kiss.active, #section3 #section3-indicator-kiss:hover { background-position: -266px -214px; _background-position: -78px 0; }
#section3 #clap .emotion { background-image: url('../game/ro/imgs/section-3/clap.gif?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: center 0; background-color: transparent; background-size: auto; }
#section3 #clap .action { background-image: url('../game/ro/imgs/section-3/clap.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 bottom; background-color: transparent; background-size: auto; }
#section3 #clap .action-0 { background-position: 0px bottom; }
#section3 #clap .action-1 { background-position: -253px bottom; }
#section3 #clap .action-2 { background-position: -506px bottom; }
#section3 #clap .action-3 { background-position: -759px bottom; }
#section3 #clap .action-4 { background-position: -1012px bottom; }
#section3 #clap .action-5 { background-position: -1265px bottom; }
#section3 #clap .action-6 { background-position: -1518px bottom; }
#section3 #clap .action-7 { background-position: -1771px bottom; }
#section3 #clap .action-8 { background-position: -2024px bottom; }
#section3 #clap .action-9 { background-position: -2277px bottom; }
#section3 #clap .action-10 { background-position: -2530px bottom; }
#section3 #clap .action-11 { background-position: -2783px bottom; }
#section3 #clap .action-12 { background-position: -3036px bottom; }
#section3 #clap .action-13 { background-position: -3289px bottom; }
#section3 #clap .action-14 { background-position: -3542px bottom; }
#section3 #clap .action-15 { background-position: -3795px bottom; }
#section3 #clap .action-16 { background-position: -4048px bottom; }
#section3 #clap .action-17 { background-position: -4301px bottom; }
#section3 #clap .action-18 { background-position: -4554px bottom; }
#section3 #clap .action-19 { background-position: -4807px bottom; }
#section3 #clap .action-20 { background-position: -5060px bottom; }
#section3 #clap .action-21 { background-position: -5313px bottom; }
#section3 .after-prepare #clap.active .action { -webkit-animation: emotion-action 2s steps(22) 1; animation: emotion-action 2s steps(22) 1; }
#section3 #section3-indicator-clap { background-position: -344px -126px; _left: 207px; }
#section3 #section3-indicator-clap.active, #section3 #section3-indicator-clap:hover { background-position: -345px -214px; _background-position: -156px 0; }
#section3 #bow .emotion { background-image: url('../game/ro/imgs/section-3/bow.gif?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: center 0; background-color: transparent; background-size: auto; }
#section3 #bow .action { background-image: url('../game/ro/imgs/section-3/bow.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 bottom; background-color: transparent; background-size: auto; }
#section3 #bow .action-0 { background-position: 0px bottom; }
#section3 #bow .action-1 { background-position: -253px bottom; }
#section3 #bow .action-2 { background-position: -506px bottom; }
#section3 #bow .action-3 { background-position: -759px bottom; }
#section3 #bow .action-4 { background-position: -1012px bottom; }
#section3 #bow .action-5 { background-position: -1265px bottom; }
#section3 #bow .action-6 { background-position: -1518px bottom; }
#section3 #bow .action-7 { background-position: -1771px bottom; }
#section3 #bow .action-8 { background-position: -2024px bottom; }
#section3 #bow .action-9 { background-position: -2277px bottom; }
#section3 #bow .action-10 { background-position: -2530px bottom; }
#section3 #bow .action-11 { background-position: -2783px bottom; }
#section3 #bow .action-12 { background-position: -3036px bottom; }
#section3 #bow .action-13 { background-position: -3289px bottom; }
#section3 #bow .action-14 { background-position: -3542px bottom; }
#section3 #bow .action-15 { background-position: -3795px bottom; }
#section3 #bow .action-16 { background-position: -4048px bottom; }
#section3 #bow .action-17 { background-position: -4301px bottom; }
#section3 #bow .action-18 { background-position: -4554px bottom; }
#section3 #bow .action-19 { background-position: -4807px bottom; }
#section3 #bow .action-20 { background-position: -5060px bottom; }
#section3 #bow .action-21 { background-position: -5313px bottom; }
#section3 .after-prepare #bow.active .action { -webkit-animation: emotion-action 2s steps(22) 1; animation: emotion-action 2s steps(22) 1; }
#section3 #section3-indicator-bow { background-position: -422px -126px; _left: 308px; }
#section3 #section3-indicator-bow.active, #section3 #section3-indicator-bow:hover { background-position: -422px -214px; _background-position: -234px 0; }

#section4 { _background: url('../game/ro/imgs/section-4/bg-ie6.jpg?1467600687&v=1450953978') no-repeat center top; }
#section4 .section-body { _background: url('../game/ro/imgs/section-4/bg-ie6.jpg?1467600687&v=1450953978') no-repeat center -2px; }
#section4 .section-title { left: 46px; }
#section4 .section-desc { top: 290px; left: 46px; }
#section4 .section-title-1 { top: 108px; width: 450px; background-position: 0 -450px; }
#section4 .section-title-2 { top: 198px; width: 406px; background-position: 0 -520px; }
#section4 .bat-1 { width: 518px; height: 378px; top: 160px; left: -404px; -webkit-backface-visibility: hidden; backface-visibility: hidden; -webkit-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-perspective: 1000; perspective: 1000; background-image: url('../game/ro/imgs/section-4/bat-1.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section4 .bat-2 { width: 278px; height: 138px; left: 536px; top: 30px; background-image: url('../game/ro/imgs/section-4/bat-2.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section4 .bat-3 { width: 308px; height: 224px; left: -258px; bottom: 60px; background-image: url('../game/ro/imgs/section-4/bat-3.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section4 .mooncat { width: 866px; height: 880px; right: -340px; top: 48px; background-image: url('../game/ro/imgs/section-4/mooncat.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section4 .video-cover-outer { width: 750px; height: 340px; left: -42px; top: 409px; visibility: hidden; _visibility: visible; }
#section4 .video-cover-outer.after-prepare { visibility: visible; }
#section4 .video-cover-outer .video-cover { width: 100%; height: 100%; left: 0; top: 0; background-image: url('../game/ro/imgs/section-4/video-cover.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section4 .video-cover-outer .boss-video { top: 0; left: 0; }
#section4 #bossVideos { width: 100%; height: 100%; left: 0; top: 0; overflow: visible; }
#section4 #bossVideos .carousel-inner { overflow: visible; }
#section4 #bossVideos .item { width: 268px; height: 270px; top: 413px; }
#section4 #bossVideos #baphomet { left: -22px; }
#section4 #bossVideos #golden-thiefbug { left: 206px; }
#section4 #bossVideos #drake { left: 437px; }
#section4 #bossVideos .carousel-indicators { width: 750px; height: 340px; left: -42px; top: 409px; position: absolute; }
#section4 #bossVideos .carousel-indicators .indicator { width: 290px; height: 340px; top: 0; }
#section4 #bossVideos .carousel-indicators .active, #section4 #bossVideos .carousel-indicators .indicator:hover { _filter: alpha(opacity=0); }
#section4 #bossVideos.after-prepare .carousel-indicators .indicator { -webkit-transition: opacity .5s; transition: opacity .5s; }
#section4 #bossVideos.after-prepare .carousel-indicators .active, #section4 #bossVideos.after-prepare .carousel-indicators .indicator:hover { opacity: 0; filter: alpha(opacity=0); }
#section4 .indicator-baphomet { left: 0; background-image: url('../game/ro/imgs/section-4/baphomet.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section4 .indicator-golden-thiefbug { left: 229px; background-image: url('../game/ro/imgs/section-4/golden-thiefbug.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section4 .indicator-drake { left: 459px; background-image: url('../game/ro/imgs/section-4/drake.png?1467600687&v=1450953978'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }

#section5 { overflow: hidden !important; _background: url('../game/ro/imgs/section-5/bg-ie6.jpg?1467600687&v=1450953979') no-repeat center top; }
#section5 .section-body { _background: url('../game/ro/imgs/section-5/bg-ie6.jpg?1467600687&v=1450953979') no-repeat center top; }
#section5 .section-title { left: -48px; }
#section5 .section-desc { top: 350px; left: -48px; }
#section5 .section-title-1 { top: 150px; width: 278px; background-position: 0 -590px; }
#section5 .section-title-2 { top: 250px; width: 458px; background-position: 0 -660px; }
#section5 .need-prepare { opacity: 0; filter: alpha(opacity=0); -webkit-transition: opacity 0.5s; transition: opacity 0.5s; }
#section5 .after-prepare { opacity: 1; -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)"; /* IE8 */ filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF); }
@-webkit-keyframes rotate { 0% { -webkit-transform: rotateX(1deg) rotateZ(0deg); transform: rotateX(1deg) rotateZ(0deg); }
  100% { -webkit-transform: rotateX(1deg) rotateZ(360deg); transform: rotateX(1deg) rotateZ(360deg); } }
@keyframes rotate { 0% { -webkit-transform: rotateX(1deg) rotateZ(0deg); transform: rotateX(1deg) rotateZ(0deg); }
  100% { -webkit-transform: rotateX(1deg) rotateZ(360deg); transform: rotateX(1deg) rotateZ(360deg); } }
@-webkit-keyframes rotateReverse { 0% { -webkit-transform: rotateZ(0deg); transform: rotateZ(0deg); }
  100% { -webkit-transform: rotateZ(-360deg); transform: rotateZ(-360deg); } }
@keyframes rotateReverse { 0% { -webkit-transform: rotateZ(0deg); transform: rotateZ(0deg); }
  100% { -webkit-transform: rotateZ(-360deg); transform: rotateZ(-360deg); } }
@-webkit-keyframes rotateKnight { 0% { -webkit-transform: rotateZ(0deg); transform: rotateZ(0deg); }
  100% { -webkit-transform: rotateZ(360deg); transform: rotateZ(360deg); } }
@keyframes rotateKnight { 0% { -webkit-transform: rotateZ(0deg); transform: rotateZ(0deg); }
  100% { -webkit-transform: rotateZ(360deg); transform: rotateZ(360deg); } }
#section5 .knight { width: 460px; height: 828px; top: 90px; left: 642px; }
#section5 .knight .knight-image { position: absolute; height: 100%; left: 0px; top: -2px; width: 100%; background-image: url('../game/ro/imgs/section-5/knight.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section5 .knight.skrollable-after { -webkit-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-animation: rotateReverse 2s infinite linear; animation: rotateReverse 2s infinite linear; }
#section5 .knight.skrollable-after .knight-image { -webkit-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-animation: rotateKnight 2s infinite linear; animation: rotateKnight 2s infinite linear; }
@media screen and (min-width: 0\0) { #section5 .knight.skrollable-after { -webkit-animation: none; animation: none; }
  #section5 .knight.skrollable-after .knight-image { -webkit-animation: none; animation: none; } }
#section5 .card-1 { width: 676px; height: 440px; top: 634px; left: 500px; }
#section5 .card-1 .card-1-image { position: absolute; height: 100%; left: 0px; top: -2px; width: 100%; background-image: url('../game/ro/imgs/section-5/card-1.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section5 .card-1 .knight-shadow { width: 436px; height: 284px; left: 150px; top: 0; background-image: url('../game/ro/imgs/section-5/knight-shadow.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section5 .card-1.skrollable-after { -webkit-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-animation: rotateReverse 2s infinite linear; animation: rotateReverse 2s infinite linear; }
#section5 .card-1.skrollable-after .card-1-image { -webkit-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-animation: rotateKnight 2s infinite linear; animation: rotateKnight 2s infinite linear; }
@media screen and (min-width: 0\0) { #section5 .card-1.skrollable-after { -webkit-animation: none; animation: none; }
  #section5 .card-1.skrollable-after .card-1-image { -webkit-animation: none; animation: none; } }
#section5 .card-2 { width: 1630px; height: 848px; left: 0; top: 152px; -webkit-transform-style: preserve-3d; transform-style: preserve-3d; }
#section5 .card-2.after-prepare { -webkit-animation: rotateReverse 2s infinite linear; animation: rotateReverse 2s infinite linear; }
@media screen and (min-width: 0\0) { #section5 .card-2.after-prepare { -webkit-animation: none; animation: none; }
  #section5 .card-2.after-prepare .card-2-inner { -webkit-transform: rotateX(0); transform: rotateX(0); -webkit-animation: none; animation: none; } }
#section5 .card-2 .card-2-inner { position: relative; width: 100%; height: 100%; }
#section5 .card-2 .card-sub { -webkit-transform: translate3d(0, 0, 0); transform: translate3d(0, 0, 0); width: 100%; height: 100%; left: 0; top: 0; -webkit-transform: scale(3); transform: scale(3); opacity: 0; }
#section5 .after-prepare { /* IE6-8 */ }
#section5 .after-prepare .card-2-inner { -webkit-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-transform: rotateX(1deg); transform: rotateX(1deg); -webkit-animation: rotate 2s infinite linear; animation: rotate 2s infinite linear; }
#section5 .after-prepare .card-sub { opacity: 1; -webkit-transform: scale(1); transform: scale(1); }
#section5 .after-prepare .card-2-1 { background-image: url('../game/ro/imgs/section-5/card-2-1.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; -webkit-transition: opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11), -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11); transition: opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11), -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11); transition: transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11), opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11); transition: transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11), opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11), -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11); }
#section5 .after-prepare .card-2-2 { background-image: url('../game/ro/imgs/section-5/card-2-2.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; -webkit-transition: opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.1s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.1s; transition: opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.1s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.1s; transition: transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.1s, opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.1s; transition: transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.1s, opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.1s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.1s; }
#section5 .after-prepare .card-2-3 { background-image: url('../game/ro/imgs/section-5/card-2-3.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; -webkit-transition: opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.15s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.15s; transition: opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.15s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.15s; transition: transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.15s, opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.15s; transition: transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.15s, opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.15s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.15s; }
#section5 .after-prepare .card-2-4 { background-image: url('../game/ro/imgs/section-5/card-2-4.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; -webkit-transition: opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.2s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.2s; transition: opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.2s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.2s; transition: transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.2s, opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.2s; transition: transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.2s, opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.2s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.2s; }
#section5 .after-prepare .card-2-5 { background-image: url('../game/ro/imgs/section-5/card-2-5.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; -webkit-transition: opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.25s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.25s; transition: opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.25s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.25s; transition: transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.25s, opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.25s; transition: transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.25s, opacity 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.25s, -webkit-transform 0.6s cubic-bezier(0.18, 0.86, 0.63, 1.11) 0.25s; }
#section5 .after-prepare .card-2-1 { -webkit-transform: translateZ(400px) scale(0.6); transform: translateZ(400px) scale(0.6); left: -128px; top: -32px; }
#section5 .after-prepare .card-2-2 { -webkit-transform: translateZ(250px) scale(0.75); transform: translateZ(250px) scale(0.75); top: -20px; left: -80px; }
#section5 .after-prepare .card-2-3 { -webkit-transform: translateZ(250px) scale(0.75); transform: translateZ(250px) scale(0.75); top: -20px; left: -80px; }
#section5 .after-prepare .card-2-4 { -webkit-transform: translateZ(100px) scale(0.9); transform: translateZ(100px) scale(0.9); left: -32px; top: -8px; }
#section5 .after-prepare .card-2-5 { -webkit-transform: translateZ(250px) scale(0.75); transform: translateZ(250px) scale(0.75); top: -20px; left: -80px; }
@media \0screen\,screen\9 { #section5 .after-prepare .card-2-1 { left: 0; top: 0; }
  #section5 .after-prepare .card-2-2 { top: 0; left: 0; }
  #section5 .after-prepare .card-2-3 { top: 0; left: 0; }
  #section5 .after-prepare .card-2-4 { left: 0; top: 0; }
  #section5 .after-prepare .card-2-5 { top: 0; left: 0; } }
@media screen and (min-width: 0\0) { #section5 .after-prepare .card-2-1 { -webkit-transform: none; transform: none; left: 0; top: 0; }
  #section5 .after-prepare .card-2-2 { -webkit-transform: none; transform: none; top: 0; left: 0; }
  #section5 .after-prepare .card-2-3 { -webkit-transform: none; transform: none; top: 0; left: 0; }
  #section5 .after-prepare .card-2-4 { -webkit-transform: none; transform: none; left: 0; top: 0; }
  #section5 .after-prepare .card-2-5 { -webkit-transform: none; transform: none; top: 0; left: 0; } }

#section6 { _background: url('../game/ro/imgs/section-6/bg-ie6.jpg?1467600687&v=1451011597') no-repeat center top; }
#section6 .section-body { _background: url('../game/ro/imgs/section-6/bg-ie6.jpg?1467600687&v=1451011597') no-repeat center top; }
#section6 .section-title { left: -46px; }
#section6 .section-desc { top: 390px; left: -46px; }
#section6 .section-title-1 { top: 180px; width: 344px; background-position: 0 -730px; }
#section6 .section-title-2 { top: 280px; width: 388px; background-position: 0 -800px; }
#section6 .need-prepare { visibility: hidden; _visibility: visible; }
#section6 .after-prepare { visibility: visible; }
#section6 .leaf { width: 1264px; height: 550px; left: -140px; top: 190px; background-image: url('../game/ro/imgs/section-6/leaf.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section6 .map { width: 1330px; height: 576px; left: -64px; bottom: 0; -webkit-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-backface-visibility: hidden; backface-visibility: hidden; -webkit-perspective: 1000; perspective: 1000; }
#section6 .map .bg { width: 100%; height: 100%; position: absolute; left: 0; top: 0; }
#section6 .map .role { -webkit-transform: translate3d(0, 0, 0); transform: translate3d(0, 0, 0); background-image: url('../game/ro/imgs/section-6/roles.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; -webkit-transform-origin: center bottom; transform-origin: center bottom; -webkit-transform: scale(0.1); transform: scale(0.1); }
#section6 .map .role.after-prepare { -webkit-transform: scale(1); transform: scale(1); }
#section6 .map .stone-flash { width: 544px; height: 666px; left: 394px; top: -270px; }
#section6 .map .priest { width: 68px; height: 156px; left: 252px; top: 240px; background-position: 0 0; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28); transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28); transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28); transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28), -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28); }
#section6 .map .magician { width: 50px; height: 108px; left: 374px; top: 194px; background-position: -156px 0; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.1s; transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.1s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.1s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.1s, -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.1s; }
#section6 .map .hunter { width: 84px; height: 176px; left: 393px; top: 304px; background-position: -70px 0; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.15s; transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.15s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.15s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.15s, -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.15s; }
#section6 .map .novice { width: 50px; height: 140px; left: 928px; top: 204px; background-position: -208px 0; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.2s; transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.2s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.2s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.2s, -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.2s; }
#section6 .map .assassin { width: 102px; height: 158px; left: 970px; top: 282px; background-position: -260px 0; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.25s; transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.25s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.25s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.25s, -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.25s; }

#section7 { _background: url('../game/ro/imgs/section-7/bg-ie6.jpg?1467600687&v=1450953979') no-repeat center top; /* IE6-8 */ }
#section7 .section-body { _background: url('../game/ro/imgs/section-7/bg-ie6.jpg?1467600687&v=1450953979') no-repeat center top; }
#section7 .section-title { left: 116px; top: 100px; width: 718px; background-position: 0 -870px; }
#section7 .leaf { width: 1330px; height: 648px; left: -250px; top: 170px; background-image: url('../game/ro/imgs/section-7/leaf.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section7 .city { width: 1260px; height: 672px; left: -128px; top: 236px; background-image: url('../game/ro/imgs/section-7/city.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; }
#section7 .city .role-info { position: absolute; width: 288px; height: 172px; color: #fff; background-position: -632px -126px; opacity: 0; -webkit-transform: scale(0); transform: scale(0); _background: url('../game/ro/imgs/section-7/box-ie6.png?1467600687&v=1450953979') no-repeat 0 0; -webkit-transition: opacity .5s; transition: opacity .5s; }
#section7 .city .role-info .title { height: 56px; line-height: 56px; padding-left: 68px; font-size: 22px; }
#section7 .city .role-info .desc { padding-left: 68px; padding-top: 10px; font-size: 16px; line-height: 28px; }
#section7 .city .role { -webkit-transform-origin: center bottom; transform-origin: center bottom; -webkit-transform: scale(0.1); transform: scale(0.1); }
#section7 .city .role .role-outline { position: absolute; left: 0; top: 0; width: 100%; height: 100%; opacity: 0; -webkit-transition: opacity .5s; transition: opacity .5s; }
#section7 .city.on-prepare .role, #section7 .city.after-prepare .role { -webkit-transform: scale(1); transform: scale(1); }
#section7 .city .angeling { width: 134px; height: 118px; left: 75px; top: 472px; z-index: 4; background-image: url('../game/ro/imgs/section-7/angeling.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; }
#section7 .city .monster { width: 150px; height: 220px; left: 1088px; top: 396px; z-index: 4; background-image: url('../game/ro/imgs/section-7/monster.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; }
#section7 .city .angeling .role-outline { background-image: url('../game/ro/imgs/section-7/angeling-outline.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section7 .city .angeling .role-info { width: 684px; height: 610px; background-image: url('../game/ro/imgs/section-7/angeling-role-info.png?1467884348&v=1467856622'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; _filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/game_statics/ro/imgs/section-7/angeling-role-info-ie.png'); left: 186px; bottom: 24px; }
#section7 .city.after-prepare .role:hover { z-index: 3; }
#section7 .city.after-prepare .role:hover .role-outline, #section7 .city.after-prepare .role:hover .role-info { opacity: 1; }
#section7 .city.after-prepare .role:hover .role-info { -webkit-transform: scale(1); transform: scale(1); }
@media \0screen\,screen\9 { #section7 .role-info, #section7 .role-outline { visibility: hidden; }
  #section7 .role:hover { color: #f60; _zoom: 1; }
  #section7 .role:hover .role-info, #section7 .role:hover .role-outline { visibility: visible; } }
#section7 .knight-boy { width: 356px; height: 466px; left: 104px; top: 128px; background-image: url('../game/ro/imgs/section-7/knight-boy.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28); transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28); transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28); transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28), -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28); }
#section7 .knight-boy .role-outline { background-image: url('../game/ro/imgs/section-7/knight-boy-outline.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section7 .knight-boy .role-info { left: 164px; top: 0; }
#section7 .knight-boy .role-info .title { background-position: -926px -214px; }
#section7 .wizard { width: 108px; height: 290px; left: 402px; top: 56px; background-image: url('../game/ro/imgs/section-7/wizard.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.1s; transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.1s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.1s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.1s, -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.1s; }
#section7 .wizard .role-outline { background-image: url('../game/ro/imgs/section-7/wizard-outline.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section7 .wizard .role-info { left: 100px; top: 32px; }
#section7 .wizard .role-info .title { background-position: -926px -160px; }
#section7 .hunter { width: 142px; height: 272px; left: 735px; top: 66px; background-image: url('../game/ro/imgs/section-7/hunter.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.15s; transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.15s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.15s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.15s, -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.15s; }
#section7 .hunter .role-outline { background-image: url('../game/ro/imgs/section-7/hunter-outline.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section7 .hunter .role-info { left: 116px; top: 24px; }
#section7 .hunter .role-info .title { background-position: -926px -52px; }
#section7 .high-priest { width: 122px; height: 306px; left: 560px; top: 86px; background-image: url('../game/ro/imgs/section-7/high-priest.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.2s; transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.2s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.2s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.2s, -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.2s; }
#section7 .high-priest .role-outline { background-image: url('../game/ro/imgs/section-7/high-priest-outline.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section7 .high-priest .role-info { left: 100px; top: 46px; }
#section7 .high-priest .role-info .title { background-position: -926px -106px; }
#section7 .assassin { width: 270px; height: 234px; left: 390px; top: 375px; background-image: url('../game/ro/imgs/section-7/assassin.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.25s; transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.25s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.25s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.25s, -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.25s; }
#section7 .assassin .role-outline { background-image: url('../game/ro/imgs/section-7/assassin-outline.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section7 .assassin .role-info { left: 194px; top: 28px; }
#section7 .assassin .role-info .title { background-position: -926px -268px; }
#section7 .priest { width: 160px; height: 292px; left: 658px; top: 312px; background-image: url('../game/ro/imgs/section-7/priest.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.3s; transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.3s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.3s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.3s, -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.3s; }
#section7 .priest .role-outline { background-image: url('../game/ro/imgs/section-7/priest-outline.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section7 .priest .role-info { left: 150px; top: 64px; }
#section7 .priest .role-info .title { background-position: -926px -322px; }
#section7 .knight-girl { width: 260px; height: 458px; left: 900px; top: 134px; background-image: url('../game/ro/imgs/section-7/knight-girl.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; _background: none; -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.35s; transition: -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.35s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.35s; transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.35s, -webkit-transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0.35s; }
#section7 .knight-girl .role-outline { background-image: url('../game/ro/imgs/section-7/knight-girl-outline.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section7 .knight-girl .role-info { left: -80px; top: 190px; }
#section7 .knight-girl .role-info .title { background-position: -926px 2px; }

#section8, #section8 .section-body { _background: url('../game/ro/imgs/section-8/bg-ie8.jpg?1467600687&v=1450953979') no-repeat center top; }
#section8 .section-title { background-position: 0 -940px; width: 652px; top: 206px; left: 388px; }
#section8 .section-desc { top: 316px; left: 388px; }
#section8 .girl { width: 694px; height: 773px; top: 130px; left: -196px; background-image: url('../game/ro/imgs/section-8/girl.png?1467600687&v=1453191536'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section8 .light-1 { width: 512px; height: 911px; left: -162px; top: 80px; background-image: url('../game/ro/imgs/section-8/light-1.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section8 .light-2 { width: 625px; height: 628px; left: 420px; top: 122px; background-image: url('../game/ro/imgs/section-8/light-2.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; }
#section8 .info { width: 694px; height: 433px; left: 350px; top: 416px; background-image: url('../game/ro/imgs/section-8/info.png?1467600687&v=1450953979'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; color: #936e27; line-height: 24px; font-size: 16px; }
#section8 .info .wechat { position: absolute; left: 130px; top: 260px; }
#section8 .info .qq-group { position: absolute; left: 314px; top: 100px; width: 340px; text-indent: 96px; }
#section8 .info .sina { position: absolute; left: 314px; top: 200px; width: 340px; text-indent: 96px; padding: 9px 0; color: #936e27; }

#section9 { _background: url('../game/ro/imgs/section-9/bg-ie6.jpg?1467600687&v=1467271169') no-repeat center top; }
#section9 .on-default { opacity: 1; }
#section9 .on-blur, #section9 .on-normal { opacity: 0; }
#section9 .show-after-active { opacity: 0; filter: alpha(opacity=0); visibility: hidden; }
#section9 .inner-image { position: absolute; width: 100%; height: 100%; left: 0; top: 0; display: none; }
#section9 .heading-container { left: 50%; top: 165px; margin-left: -438px; }
#section9 .heading-container .heading { position: absolute; left: 0; top: 0; }
#section9 .heading-container .on-default { height: 67px; width: 876px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -1141px no-repeat; *filter: alpha(opacity=100); }
@media \0screen\,screen\9 { #section9 .heading-container .on-default { background: transparent; filter: alpha(opacity=100) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/heading.png",sizingMethod='crop') \0; } }
#section9 .heading-container .on-default .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/heading.png",sizingMethod='crop'); }
#section9 .heading-container .on-blur { left: -10px; top: -10px; height: 87px; width: 894px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -910px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .heading-container .on-blur { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/heading-blur.png",sizingMethod='crop') \0; } }
#section9 .heading-container .on-blur .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/heading-blur.png",sizingMethod='crop'); }
#section9 .divide { left: 50%; top: 369px; }
#section9 .divide-ro { margin-left: -121px; opacity: 0; }
@media \0screen\,screen\9 { #section9 .divide-ro { visibility: hidden; } }
#section9 .divide-boli { margin-left: 0; }
#section9 .description-container { height: 516px; width: 516px; top: 260px; left: 50%; }
#section9 .description-container .circle { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -786px no-repeat; *filter: alpha(opacity=0); width: 100%; height: 100%; position: absolute; left: 0; top: 0; opacity: 0; filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-container .circle { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/circle.png",sizingMethod='crop') \0; } }
#section9 .description-container .circle .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/circle.png",sizingMethod='crop'); }
#section9 .description-container .portrait { position: absolute; height: 79px; width: 79px; opacity: 0; filter: alpha(opacity=0); }
#section9 .description-container .chat { position: absolute; opacity: 0; filter: alpha(opacity=0); }
#section9 .description-container .portrait-1 { left: 219px; top: -38px; }
#section9 .description-container .portrait-2 { left: -1px; top: 91px; }
#section9 .description-container .portrait-3 { left: 0; top: 350px; }
#section9 .description-container .portrait-4 { left: 221px; top: 475px; }
#section9 .description-container .portrait-5 { left: 439px; top: 350px; }
#section9 .description-container .portrait-6 { left: 439px; top: 91px; }
#section9 .description-container .chat-1 { left: 90px; top: -90px; }
#section9 .description-container .chat-2 { right: 100%; margin-right: -62px; top: 40px; }
#section9 .description-container .chat-3 { right: 100%; margin-right: -62px; top: 436px; }
#section9 .description-container .chat-4 { left: 294px; top: 529px; }
#section9 .description-container .chat-5 { left: 467px; top: 435px; }
#section9 .description-container .chat-6 { left: 467px; top: 38px; }
#section9 .description-ro { margin-left: -464px; }
#section9 .description-boli { margin-left: -54px; }
#section9 .icon-container { height: 291px; width: 291px; top: 376px; cursor: pointer; z-index: 1; left: 50%; }
#section9 .icon-container .icon { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
#section9 .icon-container .on-normal, #section9 .icon-container .on-blur { opacity: 0; filter: alpha(opacity=0); }
#section9 .icon-ro { margin-left: -351px; }
#section9 .icon-boli { margin-left: 60px; }
#section9 .title-container { top: 714px; left: 50%; }
#section9 .title-container .title { position: absolute; }
#section9 .title-container .on-default { left: 0; top: 0; }
#section9 .title-container .on-blur { left: -10px; top: -10px; }
#section9 .title-ro { margin-left: -359px; }
#section9 .title-boli { margin-left: 52px; }
#section9 .shadow-container { left: 50%; top: 792px; }
#section9 .shadow-container .shadow { position: absolute; }
#section9 .shadow-container .on-default { top: 0; left: 0; height: 88px; width: 496px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -1308px no-repeat; *filter: alpha(opacity=100); }
@media \0screen\,screen\9 { #section9 .shadow-container .on-default { background: transparent; filter: alpha(opacity=100) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/shadow.png",sizingMethod='crop') \0; } }
#section9 .shadow-container .on-default .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/shadow.png",sizingMethod='crop'); }
#section9 .shadow-container .on-blur { left: 5px; top: 5px; height: 96px; width: 487px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -1210px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .shadow-container .on-blur { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/shadow-blur.png",sizingMethod='crop') \0; } }
#section9 .shadow-container .on-blur .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/shadow-blur.png",sizingMethod='crop'); }
#section9 .shadow-ro { margin-left: -454px; }
#section9 .shadow-boli { margin-left: -42px; }
#section9 .corner-container { height: 304px; width: 304px; background: url('../game/ro/imgs/section-9/corner.png?v=1460124781') 0 0 no-repeat; _background: none; right: 0; bottom: 0; visibility: hidden; }
#section9 .corner-container .corner-girl, #section9 .corner-container .btn-entry { position: absolute; width: 100%; height: 100%; top: 0; left: 0; }
#section9 .corner-container .corner-girl { margin-left: 310px; _margin-left: 0; }
#section9 .corner-container .btn-entry { margin-top: 400px; _margin-top: 0; }
#section9 .corner-container .btn-entry-inner { position: absolute; width: 220px; height: 220px; bottom: 0; right: 0; }
#section9 .heading-ro { margin-left: -508px; margin-top: 50px; top: 170px; }
#section9 .heading-boli { margin-left: -91px; margin-top: 50px; top: 144px; }
#section9 .subheading-ro { margin-left: -506px; margin-top: 100px; top: 282px; }
#section9 .subheading-boli { margin-left: -91px; margin-top: 100px; top: 255px; }
#section9 .btn-more { height: 41px; width: 129px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -43px no-repeat; left: 50%; margin-top: 100px; _margin-top: 0; }
#section9 .btn-more:hover { height: 41px; width: 129px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 0 no-repeat; }
#section9 .btn-more-ro { margin-left: -255px; top: 750px; }
#section9 .btn-more-boli { top: 231px; margin-left: 329px; }
#section9 .video-container { margin-top: 200px; _margin-top: 0; }
#section9 .video-container .video-inner { position: absolute; z-index: 3; }
#section9 .video-container .btn-play { position: absolute; height: 99px; width: 99px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -187px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .video-container .btn-play { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/btn-play.png",sizingMethod='crop') \0; } }
#section9 .video-container .btn-play .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/btn-play.png",sizingMethod='crop'); }
#section9 .video-container .video-inner:hover .btn-play { height: 99px; width: 99px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -86px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .video-container .video-inner:hover .btn-play { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/btn-play-hover.png",sizingMethod='crop') \0; } }
#section9 .video-container .video-inner:hover .btn-play .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/btn-play-hover.png",sizingMethod='crop'); }
#section9 .video-ro { width: 694px; height: 457px; margin-left: -545px; top: 377px; }
#section9 .video-ro .video-inner { top: 0; left: 33px; width: 642px; height: 322px; }
#section9 .video-ro .btn-play { left: 284px; top: 108px; }
#section9 .video-boli { width: 809px; height: 736px; margin-left: -235px; top: 292px; }
#section9 .video-boli .video-inner { width: 322px; height: 642px; top: 0; left: 243px; }
#section9 .video-boli .btn-play { left: 113px; top: 369px; }
#section9 .girl-ro { width: 690px; height: 954px; margin-left: 284px; top: 115px; }
#section9 .girl-boli { width: 638px; height: 887px; margin-left: -954px; top: 143px; }
#section9 .ornament-container { left: 50%; }
#section9 .ornament-container .sakura { position: absolute; left: 0; top: 0; width: 100%; height: 100%; }
#section9 .ornament-container .boli { position: absolute; }
#section9 .ornament-ro { top: 0; margin-left: -766px; width: 1385px; height: 929px; }
#section9 .ornament-ro .boli-1 { width: 185px; height: 156px; left: 744px; top: 126px; background-image: url('../game/ro/imgs/section-9/ornament/boli-ro.png?1467600687&v=1460124780'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .ornament-ro .boli-1 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/boli-ro.png",sizingMethod='crop') \0; } }
#section9 .ornament-ro .boli-1 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/boli-ro.png",sizingMethod='crop'); }
#section9 .ornament-ro .sakura-1 { background-image: url('../game/ro/imgs/section-9/ornament/sakura-1-ro.png?1467600687&v=1460124780'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .ornament-ro .sakura-1 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-1-ro.png",sizingMethod='crop') \0; } }
#section9 .ornament-ro .sakura-1 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-1-ro.png",sizingMethod='crop'); }
#section9 .ornament-ro .sakura-2 { background-image: url('../game/ro/imgs/section-9/ornament/sakura-2-ro.png?1467600687&v=1460124780'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .ornament-ro .sakura-2 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-2-ro.png",sizingMethod='crop') \0; } }
#section9 .ornament-ro .sakura-2 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-2-ro.png",sizingMethod='crop'); }
#section9 .ornament-ro .sakura-3 { background-image: url('../game/ro/imgs/section-9/ornament/sakura-3-ro.png?1467600687&v=1460124780'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .ornament-ro .sakura-3 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-3-ro.png",sizingMethod='crop') \0; } }
#section9 .ornament-ro .sakura-3 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-3-ro.png",sizingMethod='crop'); }
#section9 .ornament-boli { top: 23px; margin-left: -671px; width: 1577px; height: 927px; }
#section9 .ornament-boli .boli { width: 100%; height: 100%; left: 0; top: 0; }
#section9 .ornament-boli .sakura-1 { background-image: url('../game/ro/imgs/section-9/ornament/sakura-1-boli.png?1467600687&v=1460124781'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .ornament-boli .sakura-1 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-1-boli.png",sizingMethod='crop') \0; } }
#section9 .ornament-boli .sakura-1 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-1-boli.png",sizingMethod='crop'); }
#section9 .ornament-boli .sakura-2 { background-image: url('../game/ro/imgs/section-9/ornament/sakura-2-boli.png?1467600687&v=1460124781'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .ornament-boli .sakura-2 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-2-boli.png",sizingMethod='crop') \0; } }
#section9 .ornament-boli .sakura-2 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-2-boli.png",sizingMethod='crop'); }
#section9 .ornament-boli .sakura-3 { background-image: url('../game/ro/imgs/section-9/ornament/sakura-3-boli.png?1467600687&v=1460124780'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .ornament-boli .sakura-3 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-3-boli.png",sizingMethod='crop') \0; } }
#section9 .ornament-boli .sakura-3 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-3-boli.png",sizingMethod='crop'); }
#section9 .ornament-boli .sakura-4 { background-image: url('../game/ro/imgs/section-9/ornament/sakura-4-boli.png?1467600687&v=1460124780'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .ornament-boli .sakura-4 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-4-boli.png",sizingMethod='crop') \0; } }
#section9 .ornament-boli .sakura-4 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/sakura-4-boli.png",sizingMethod='crop'); }
#section9 .ornament-boli .boli-1 { background-image: url('../game/ro/imgs/section-9/ornament/boli-1-boli.png?1467600687&v=1460124780'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .ornament-boli .boli-1 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/boli-1-boli.png",sizingMethod='crop') \0; } }
#section9 .ornament-boli .boli-1 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/boli-1-boli.png",sizingMethod='crop'); }
#section9 .ornament-boli .boli-2 { background-image: url('../game/ro/imgs/section-9/ornament/boli-2-boli.png?1467600687&v=1460124781'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .ornament-boli .boli-2 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/boli-2-boli.png",sizingMethod='crop') \0; } }
#section9 .ornament-boli .boli-2 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/ornament/boli-2-boli.png",sizingMethod='crop'); }
#section9 .divide-ro { height: 309px; width: 121px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -599px no-repeat; }
#section9 .description-ro .portrait-1 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1604px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .portrait-1 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-1.png",sizingMethod='crop') \0; } }
#section9 .description-ro .portrait-1 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-1.png",sizingMethod='crop'); }
#section9 .description-ro .chat-1 { height: 48px; width: 182px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1304px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .chat-1 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-1.png",sizingMethod='crop') \0; } }
#section9 .description-ro .chat-1 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-1.png",sizingMethod='crop'); }
#section9 .description-ro .portrait-2 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1685px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .portrait-2 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-2.png",sizingMethod='crop') \0; } }
#section9 .description-ro .portrait-2 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-2.png",sizingMethod='crop'); }
#section9 .description-ro .chat-2 { height: 48px; width: 152px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1354px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .chat-2 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-2.png",sizingMethod='crop') \0; } }
#section9 .description-ro .chat-2 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-2.png",sizingMethod='crop'); }
#section9 .description-ro .portrait-3 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1766px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .portrait-3 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-3.png",sizingMethod='crop') \0; } }
#section9 .description-ro .portrait-3 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-3.png",sizingMethod='crop'); }
#section9 .description-ro .chat-3 { height: 48px; width: 182px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1404px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .chat-3 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-3.png",sizingMethod='crop') \0; } }
#section9 .description-ro .chat-3 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-3.png",sizingMethod='crop'); }
#section9 .description-ro .portrait-4 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1847px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .portrait-4 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-4.png",sizingMethod='crop') \0; } }
#section9 .description-ro .portrait-4 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-4.png",sizingMethod='crop'); }
#section9 .description-ro .chat-4 { height: 48px; width: 177px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1454px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .chat-4 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-4.png",sizingMethod='crop') \0; } }
#section9 .description-ro .chat-4 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-4.png",sizingMethod='crop'); }
#section9 .description-ro .portrait-5 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1928px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .portrait-5 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-5.png",sizingMethod='crop') \0; } }
#section9 .description-ro .portrait-5 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-5.png",sizingMethod='crop'); }
#section9 .description-ro .chat-5 { height: 48px; width: 180px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1504px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .chat-5 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-5.png",sizingMethod='crop') \0; } }
#section9 .description-ro .chat-5 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-5.png",sizingMethod='crop'); }
#section9 .description-ro .portrait-6 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -2009px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .portrait-6 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-6.png",sizingMethod='crop') \0; } }
#section9 .description-ro .portrait-6 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-portrait-6.png",sizingMethod='crop'); }
#section9 .description-ro .chat-6 { height: 48px; width: 142px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -1554px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-ro .chat-6 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-6.png",sizingMethod='crop') \0; } }
#section9 .description-ro .chat-6 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/ro-chat-6.png",sizingMethod='crop'); }
#section9 .icon-ro .on-default { background: url('../game/ro/imgs/section-9/icon.png?v=1467270339') 0 -1222px no-repeat; *filter: alpha(opacity=100); }
@media \0screen\,screen\9 { #section9 .icon-ro .on-default { background: transparent; filter: alpha(opacity=100) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-ro-gray.png",sizingMethod='crop') \0; } }
#section9 .icon-ro .on-default .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-ro-gray.png",sizingMethod='crop'); }
#section9 .icon-ro .on-normal { background: url('../game/ro/imgs/section-9/icon.png?v=1467270339') 0 -1515px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .icon-ro .on-normal { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-ro.png",sizingMethod='crop') \0; } }
#section9 .icon-ro .on-normal .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-ro.png",sizingMethod='crop'); }
#section9 .icon-ro .on-blur { height: 316px; width: 316px; background: url('../game/ro/imgs/section-9/icon.png?v=1467270339') 0 -904px no-repeat; *filter: alpha(opacity=0); left: -12px; top: -12px; }
@media \0screen\,screen\9 { #section9 .icon-ro .on-blur { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-ro-blur.png",sizingMethod='crop') \0; } }
#section9 .icon-ro .on-blur .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-ro-blur.png",sizingMethod='crop'); }
#section9 .title-ro .on-default { height: 69px; width: 306px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -1717px no-repeat; *filter: alpha(opacity=100); }
@media \0screen\,screen\9 { #section9 .title-ro .on-default { background: transparent; filter: alpha(opacity=100) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/title-ro.png",sizingMethod='crop') \0; } }
#section9 .title-ro .on-default .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/title-ro.png",sizingMethod='crop'); }
#section9 .title-ro .on-blur { height: 90px; width: 328px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -1625px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .title-ro .on-blur { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/title-ro-blur.png",sizingMethod='crop') \0; } }
#section9 .title-ro .on-blur .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/title-ro-blur.png",sizingMethod='crop'); }
#section9 .corner-container .corner-girl-ro { background: url('../game/ro/imgs/section-9/corner.png?v=1460124781') 0 -1224px no-repeat; *filter: alpha(opacity=0); _-webkit-filter: none; _filter: none; }
@media \0screen\,screen\9 { #section9 .corner-container .corner-girl-ro { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/corner/corner-girl-ro.png",sizingMethod='crop') \0; } }
#section9 .corner-container .corner-girl-ro .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/corner/corner-girl-ro.png",sizingMethod='crop'); }
#section9 .corner-container .btn-entry-ro { background: url('../game/ro/imgs/section-9/corner.png?v=1460124781') 0 -612px no-repeat; *filter: alpha(opacity=0); _-webkit-filter: none; _filter: none; }
@media \0screen\,screen\9 { #section9 .corner-container .btn-entry-ro { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/corner/corner-btn-ro.png",sizingMethod='crop') \0; } }
#section9 .corner-container .btn-entry-ro .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/corner/corner-btn-ro.png",sizingMethod='crop'); }
#section9 .heading-ro { height: 69px; width: 416px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -1070px no-repeat; *filter: alpha(opacity=0); left: 50%; }
@media \0screen\,screen\9 { #section9 .heading-ro { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/heading-ro.png",sizingMethod='crop') \0; } }
#section9 .heading-ro .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/heading-ro.png",sizingMethod='crop'); }
#section9 .subheading-ro { height: 44px; width: 323px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -1416px no-repeat; *filter: alpha(opacity=0); left: 50%; }
@media \0screen\,screen\9 { #section9 .subheading-ro { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/subheading-ro.png",sizingMethod='crop') \0; } }
#section9 .subheading-ro .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/subheading-ro.png",sizingMethod='crop'); }
#section9 .girl-ro { background-image: url('../game/ro/imgs/section-9/girl-ro.png?1467600687&v=1460124781'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); left: 50%; }
@media \0screen\,screen\9 { #section9 .girl-ro { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/girl-ro.png",sizingMethod='crop') \0; } }
#section9 .girl-ro .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/girl-ro.png",sizingMethod='crop'); }
#section9 .video-ro { background-image: url('../game/ro/imgs/section-9/phone-ro.png?1489631233&v=1478841740'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); left: 50%; }
@media \0screen\,screen\9 { #section9 .video-ro { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/phone-ro.png?2",sizingMethod='crop') \0; } }
#section9 .video-ro .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/phone-ro.png?2",sizingMethod='crop'); }
#section9.hover-ro .divide-ro { opacity: 0; }
@media \0screen\,screen\9 { #section9.hover-ro .divide-ro { visibility: hidden; } }
#section9.hover-ro .description-ro { opacity: 1; }
#section9.hover-ro .divide-boli { opacity: 1; }
@media \0screen\,screen\9 { #section9.hover-ro .divide-boli { visibility: visible; } }
#section9.hover-ro .description-boli { visibility: hidden; }
#section9.active .corner-container { z-index: 1; visibility: visible; }
#section9.active-ro .section-body { _background: url('../game/ro/imgs/section-9/ro-ie6.jpg?1467600687&v=1464930372') center 0; }
#section9 .divide-boli { height: 309px; width: 121px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -288px no-repeat; }
#section9 .description-boli .portrait-1 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -300px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .portrait-1 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-1.png",sizingMethod='crop') \0; } }
#section9 .description-boli .portrait-1 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-1.png",sizingMethod='crop'); }
#section9 .description-boli .chat-1 { height: 48px; width: 182px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 0 no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .chat-1 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-1.png",sizingMethod='crop') \0; } }
#section9 .description-boli .chat-1 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-1.png",sizingMethod='crop'); }
#section9 .description-boli .portrait-2 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -381px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .portrait-2 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-2.png",sizingMethod='crop') \0; } }
#section9 .description-boli .portrait-2 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-2.png",sizingMethod='crop'); }
#section9 .description-boli .chat-2 { height: 48px; width: 182px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -50px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .chat-2 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-2.png",sizingMethod='crop') \0; } }
#section9 .description-boli .chat-2 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-2.png",sizingMethod='crop'); }
#section9 .description-boli .portrait-3 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -462px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .portrait-3 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-3.png",sizingMethod='crop') \0; } }
#section9 .description-boli .portrait-3 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-3.png",sizingMethod='crop'); }
#section9 .description-boli .chat-3 { height: 48px; width: 182px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -100px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .chat-3 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-3.png",sizingMethod='crop') \0; } }
#section9 .description-boli .chat-3 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-3.png",sizingMethod='crop'); }
#section9 .description-boli .portrait-4 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -543px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .portrait-4 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-4.png",sizingMethod='crop') \0; } }
#section9 .description-boli .portrait-4 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-4.png",sizingMethod='crop'); }
#section9 .description-boli .chat-4 { height: 48px; width: 182px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -150px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .chat-4 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-4.png",sizingMethod='crop') \0; } }
#section9 .description-boli .chat-4 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-4.png",sizingMethod='crop'); }
#section9 .description-boli .portrait-5 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -624px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .portrait-5 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-5.png",sizingMethod='crop') \0; } }
#section9 .description-boli .portrait-5 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-5.png",sizingMethod='crop'); }
#section9 .description-boli .chat-5 { height: 48px; width: 182px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -200px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .chat-5 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-5.png",sizingMethod='crop') \0; } }
#section9 .description-boli .chat-5 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-5.png",sizingMethod='crop'); }
#section9 .description-boli .portrait-6 { background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -705px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .portrait-6 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-6.png",sizingMethod='crop') \0; } }
#section9 .description-boli .portrait-6 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-portrait-6.png",sizingMethod='crop'); }
#section9 .description-boli .chat-6 { height: 48px; width: 182px; background: url('../game/ro/imgs/section-9/description.png?v=1460124781') 0 -250px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .description-boli .chat-6 { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-6.png",sizingMethod='crop') \0; } }
#section9 .description-boli .chat-6 .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/description/boli-chat-6.png",sizingMethod='crop'); }
#section9 .icon-boli .on-default { background: url('../game/ro/imgs/section-9/icon.png?v=1467270339') 0 -318px no-repeat; *filter: alpha(opacity=100); }
@media \0screen\,screen\9 { #section9 .icon-boli .on-default { background: transparent; filter: alpha(opacity=100) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-boli-gray.png",sizingMethod='crop') \0; } }
#section9 .icon-boli .on-default .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-boli-gray.png",sizingMethod='crop'); }
#section9 .icon-boli .on-normal { background: url('../game/ro/imgs/section-9/icon.png?v=1467270339') 0 -611px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .icon-boli .on-normal { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-boli.png",sizingMethod='crop') \0; } }
#section9 .icon-boli .on-normal .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-boli.png",sizingMethod='crop'); }
#section9 .icon-boli .on-blur { height: 316px; width: 316px; background: url('../game/ro/imgs/section-9/icon.png?v=1467270339') 0 0 no-repeat; *filter: alpha(opacity=0); left: -12px; top: -12px; }
@media \0screen\,screen\9 { #section9 .icon-boli .on-blur { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-boli-blur.png",sizingMethod='crop') \0; } }
#section9 .icon-boli .on-blur .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/icon/icon-boli-blur.png",sizingMethod='crop'); }
#section9 .title-boli .on-default { height: 69px; width: 306px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -1554px no-repeat; *filter: alpha(opacity=100); }
@media \0screen\,screen\9 { #section9 .title-boli .on-default { background: transparent; filter: alpha(opacity=100) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/title-boli.png",sizingMethod='crop') \0; } }
#section9 .title-boli .on-default .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/title-boli.png",sizingMethod='crop'); }
#section9 .title-boli .on-blur { height: 90px; width: 328px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -1462px no-repeat; *filter: alpha(opacity=0); }
@media \0screen\,screen\9 { #section9 .title-boli .on-blur { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/title-boli-blur.png",sizingMethod='crop') \0; } }
#section9 .title-boli .on-blur .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/title-boli-blur.png",sizingMethod='crop'); }
#section9 .corner-container .corner-girl-boli { background: url('../game/ro/imgs/section-9/corner.png?v=1460124781') 0 -918px no-repeat; *filter: alpha(opacity=0); _-webkit-filter: none; _filter: none; }
@media \0screen\,screen\9 { #section9 .corner-container .corner-girl-boli { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/corner/corner-girl-boli.png",sizingMethod='crop') \0; } }
#section9 .corner-container .corner-girl-boli .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/corner/corner-girl-boli.png",sizingMethod='crop'); }
#section9 .corner-container .btn-entry-boli { background: url('../game/ro/imgs/section-9/corner.png?v=1460124781') 0 -306px no-repeat; *filter: alpha(opacity=0); _-webkit-filter: none; _filter: none; }
@media \0screen\,screen\9 { #section9 .corner-container .btn-entry-boli { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/corner/corner-btn-boli.png",sizingMethod='crop') \0; } }
#section9 .corner-container .btn-entry-boli .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/corner/corner-btn-boli.png",sizingMethod='crop'); }
#section9 .heading-boli { height: 69px; width: 563px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -999px no-repeat; *filter: alpha(opacity=0); left: 50%; }
@media \0screen\,screen\9 { #section9 .heading-boli { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/heading-boli.png",sizingMethod='crop') \0; } }
#section9 .heading-boli .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/heading-boli.png",sizingMethod='crop'); }
#section9 .subheading-boli { height: 16px; width: 405px; background: url('../game/ro/imgs/section-9/sprite-pc.png?v=1465793347') 0 -1398px no-repeat; *filter: alpha(opacity=0); left: 50%; }
@media \0screen\,screen\9 { #section9 .subheading-boli { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/subheading-boli.png",sizingMethod='crop') \0; } }
#section9 .subheading-boli .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/sprite-pc/subheading-boli.png",sizingMethod='crop'); }
#section9 .girl-boli { background-image: url('../game/ro/imgs/section-9/girl-boli.png?1467600687&v=1460124781'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); left: 50%; }
@media \0screen\,screen\9 { #section9 .girl-boli { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/girl-boli.png",sizingMethod='crop') \0; } }
#section9 .girl-boli .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/girl-boli.png",sizingMethod='crop'); }
#section9 .video-boli { background-image: url('../game/ro/imgs/section-9/phone-boli.png?1467600687&v=1460124780'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; *filter: alpha(opacity=0); left: 50%; }
@media \0screen\,screen\9 { #section9 .video-boli { background: transparent; filter: alpha(opacity=0) progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/phone-boli.png?2",sizingMethod='crop') \0; } }
#section9 .video-boli .inner-image { *display: block; *filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/game_statics/ro/imgs/section-9/phone-boli.png?2",sizingMethod='crop'); }
#section9.hover-boli .divide-boli { opacity: 0; }
@media \0screen\,screen\9 { #section9.hover-boli .divide-boli { visibility: hidden; } }
#section9.hover-boli .description-boli { opacity: 1; }
#section9.hover-boli .divide-ro { opacity: 1; }
@media \0screen\,screen\9 { #section9.hover-boli .divide-ro { visibility: visible; } }
#section9.hover-boli .description-ro { visibility: hidden; }
#section9.active .corner-container { z-index: 1; visibility: visible; }
#section9.active-boli .section-body { _background: url('../game/ro/imgs/section-9/boli-ie6.jpg?1467600687&v=1460526912') center 0; }
#section9.support-transform .heading-container, #section9.support-transform .divide, #section9.support-transform .description-container, #section9.support-transform .icon-container, #section9.support-transform .title-container, #section9.support-transform .shadow-container { -webkit-transform: matrix(1, 0, 0, 1, 0, 0); transform: matrix(1, 0, 0, 1, 0, 0); -webkit-transition: top .5s, margin .5s, -webkit-transform .5s; transition: top .5s, margin .5s, -webkit-transform .5s; transition: transform .5s, top .5s, margin .5s; transition: transform .5s, top .5s, margin .5s, -webkit-transform .5s; }
#section9.support-transform .description-container { opacity: 1; }
#section9.support-transform .description-container .circle, #section9.support-transform .description-container .portrait, #section9.support-transform .description-container .chat { opacity: 1; -webkit-transition: -webkit-transform .2s 0s; transition: -webkit-transform .2s 0s; transition: transform .2s 0s; transition: transform .2s 0s, -webkit-transform .2s 0s; }
#section9.support-transform .description-container .circle { -webkit-transform: scale(0.5) rotateZ(-90deg); transform: scale(0.5) rotateZ(-90deg); }
#section9.support-transform .description-container .portrait, #section9.support-transform .description-container .chat { -webkit-transform: scale(0); transform: scale(0); }
#section9.support-transform .corner-container { opacity: 0; -webkit-transition: opacity .5s; transition: opacity .5s; }
#section9.support-transform .corner-container .corner-girl { margin-left: 0; -webkit-transform: matrix(1, 0, 0, 1, 310, 0); transform: matrix(1, 0, 0, 1, 310, 0); -webkit-transition: -webkit-transform 1s; transition: -webkit-transform 1s; transition: transform 1s; transition: transform 1s, -webkit-transform 1s; }
#section9.support-transform .corner-container .btn-entry { margin-top: 0; -webkit-transform: matrix(1, 0, 0, 1, 0, 400); transform: matrix(1, 0, 0, 1, 0, 400); -webkit-transition: -webkit-transform 1.5s; transition: -webkit-transform 1.5s; transition: transform 1.5s; transition: transform 1.5s, -webkit-transform 1.5s; }
#section9.support-transform .heading-ro, #section9.support-transform .heading-boli { margin-top: 0; -webkit-transform: matrix(1, 0, 0, 1, 0, 50); transform: matrix(1, 0, 0, 1, 0, 50); -webkit-transition: opacity .5s, -webkit-transform .5s; transition: opacity .5s, -webkit-transform .5s; transition: transform .5s, opacity .5s; transition: transform .5s, opacity .5s, -webkit-transform .5s; }
#section9.support-transform .subheading-ro, #section9.support-transform .subheading-boli, #section9.support-transform .btn-more { margin-top: 0; -webkit-transform: matrix(1, 0, 0, 1, 0, 100); transform: matrix(1, 0, 0, 1, 0, 100); -webkit-transition: opacity .5s, -webkit-transform .5s; transition: opacity .5s, -webkit-transform .5s; transition: transform .5s, opacity .5s; transition: transform .5s, opacity .5s, -webkit-transform .5s; }
#section9.support-transform .video-container { margin-top: 0; -webkit-transform: matrix(1, 0, 0, 1, 0, 200); transform: matrix(1, 0, 0, 1, 0, 200); -webkit-transition: opacity .5s, -webkit-transform .5s; transition: opacity .5s, -webkit-transform .5s; transition: transform .5s, opacity .5s; transition: transform .5s, opacity .5s, -webkit-transform .5s; }
#section9.support-transform .girl-ro { margin-left: -16px; -webkit-transform: matrix(1, 0, 0, 1, 300, 0); transform: matrix(1, 0, 0, 1, 300, 0); -webkit-transition: opacity .5s, -webkit-transform .5s; transition: opacity .5s, -webkit-transform .5s; transition: transform .5s, opacity .5s; transition: transform .5s, opacity .5s, -webkit-transform .5s; }
#section9.support-transform .girl-boli { margin-left: -654px; -webkit-transform: matrix(1, 0, 0, 1, -300, 0); transform: matrix(1, 0, 0, 1, -300, 0); -webkit-transition: opacity .5s, -webkit-transform .5s; transition: opacity .5s, -webkit-transform .5s; transition: transform .5s, opacity .5s; transition: transform .5s, opacity .5s, -webkit-transform .5s; }
#section9.support-transform .on-default, #section9.support-transform .on-blur, #section9.support-transform .on-normal { -webkit-transition: opacity .5s; transition: opacity .5s; }
#section9.support-transform.active .hide-after-active { opacity: 0; visibility: hidden; -webkit-transition: opacity .3s, visibility 0s .3s; transition: opacity .3s, visibility 0s .3s; }
#section9.support-transform.active .corner-container { opacity: 1; visibility: visible; }
#section9.support-transform.hover-ro .heading-container { -webkit-transform: matrix(1, 0, 0, 1, 0, -107); transform: matrix(1, 0, 0, 1, 0, -107); }
#section9.support-transform.hover-ro .heading-container .on-default { opacity: 0; }
#section9.support-transform.hover-ro .heading-container .on-blur { opacity: 1; }
#section9.support-transform.hover-ro .description-ro .circle { -webkit-transform: scale(1) rotateZ(0); transform: scale(1) rotateZ(0); -webkit-transition: -webkit-transform .2s; transition: -webkit-transform .2s; transition: transform .2s; transition: transform .2s, -webkit-transform .2s; }
#section9.support-transform.hover-ro .description-ro .portrait, #section9.support-transform.hover-ro .description-ro .chat { -webkit-transform: scale(1); transform: scale(1); }
#section9.support-transform.hover-ro .description-ro .portrait { -webkit-transition-delay: .2s; transition-delay: .2s; }
#section9.support-transform.hover-ro .description-ro .chat { -webkit-transition-delay: .4s; transition-delay: .4s; }
#section9.support-transform.hover-ro .icon-ro .on-normal { opacity: 1; }
#section9.support-transform.hover-ro .shadow-ro, #section9.support-transform.hover-ro .title-ro { -webkit-transform: matrix(1, 0, 0, 1, 0, 136); transform: matrix(1, 0, 0, 1, 0, 136); }
#section9.support-transform.hover-ro .divide-boli { -webkit-transform: matrix(1, 0, 0, 1, 235, 0); transform: matrix(1, 0, 0, 1, 235, 0); }
#section9.support-transform.hover-ro .description-boli, #section9.support-transform.hover-ro .icon-boli, #section9.support-transform.hover-ro .title-boli, #section9.support-transform.hover-ro .shadow-boli { -webkit-transform: matrix(1, 0, 0, 1, 332, 0); transform: matrix(1, 0, 0, 1, 332, 0); }
#section9.support-transform.hover-ro .icon-boli .on-default, #section9.support-transform.hover-ro .title-boli .on-default, #section9.support-transform.hover-ro .shadow-boli .on-default { opacity: 0; }
#section9.support-transform.hover-ro .icon-boli .on-blur, #section9.support-transform.hover-ro .title-boli .on-blur, #section9.support-transform.hover-ro .shadow-boli .on-blur { opacity: 1; }
#section9.support-transform.active-ro .show-after-active-ro { -webkit-transform: matrix(1, 0, 0, 1, 0, 0); transform: matrix(1, 0, 0, 1, 0, 0); opacity: 1; -webkit-transition: opacity .5s, -webkit-transform .5s; transition: opacity .5s, -webkit-transform .5s; transition: opacity .5s, transform .5s; transition: opacity .5s, transform .5s, -webkit-transform .5s; visibility: visible; }
#section9.support-transform.active-ro .heading-boli { -webkit-transform: matrix(1, 0, 0, 1, 0, 50); transform: matrix(1, 0, 0, 1, 0, 50); }
#section9.support-transform.active-ro .subheading-boli, #section9.support-transform.active-ro .btn-more-boli { -webkit-transform: matrix(1, 0, 0, 1, 0, 100); transform: matrix(1, 0, 0, 1, 0, 100); }
#section9.support-transform.active-ro .video-boli { -webkit-transform: matrix(1, 0, 0, 1, 0, 200); transform: matrix(1, 0, 0, 1, 0, 200); }
#section9.support-transform.active-ro .show-after-active-boli { opacity: 0; visibility: hidden; -webkit-transition: opacity .5s, visibility 0s .5s, -webkit-transform .5s; transition: opacity .5s, visibility 0s .5s, -webkit-transform .5s; transition: transform .5s, opacity .5s, visibility 0s .5s; transition: transform .5s, opacity .5s, visibility 0s .5s, -webkit-transform .5s; }
#section9.support-transform.active-ro .corner-container .corner-girl-boli, #section9.support-transform.active-ro .corner-container .btn-entry-boli { opacity: 1; -webkit-transform: matrix(1, 0, 0, 1, 0, 0); transform: matrix(1, 0, 0, 1, 0, 0); }
#section9.support-transform.hover-boli .heading-container { -webkit-transform: matrix(1, 0, 0, 1, 0, -107); transform: matrix(1, 0, 0, 1, 0, -107); }
#section9.support-transform.hover-boli .heading-container .on-default { opacity: 0; }
#section9.support-transform.hover-boli .heading-container .on-blur { opacity: 1; }
#section9.support-transform.hover-boli .description-boli .circle { -webkit-transform: scale(1) rotateZ(0); transform: scale(1) rotateZ(0); -webkit-transition: -webkit-transform .2s; transition: -webkit-transform .2s; transition: transform .2s; transition: transform .2s, -webkit-transform .2s; }
#section9.support-transform.hover-boli .description-boli .portrait, #section9.support-transform.hover-boli .description-boli .chat { -webkit-transform: scale(1); transform: scale(1); }
#section9.support-transform.hover-boli .description-boli .portrait { -webkit-transition-delay: .2s; transition-delay: .2s; }
#section9.support-transform.hover-boli .description-boli .chat { -webkit-transition-delay: .4s; transition-delay: .4s; }
#section9.support-transform.hover-boli .icon-boli .on-normal { opacity: 1; }
#section9.support-transform.hover-boli .shadow-boli, #section9.support-transform.hover-boli .title-boli { -webkit-transform: matrix(1, 0, 0, 1, 0, 136); transform: matrix(1, 0, 0, 1, 0, 136); }
#section9.support-transform.hover-boli .divide-ro { -webkit-transform: matrix(1, 0, 0, 1, -235, 0); transform: matrix(1, 0, 0, 1, -235, 0); }
#section9.support-transform.hover-boli .description-ro, #section9.support-transform.hover-boli .icon-ro, #section9.support-transform.hover-boli .title-ro, #section9.support-transform.hover-boli .shadow-ro { -webkit-transform: matrix(1, 0, 0, 1, -332, 0); transform: matrix(1, 0, 0, 1, -332, 0); }
#section9.support-transform.hover-boli .icon-ro .on-default, #section9.support-transform.hover-boli .title-ro .on-default, #section9.support-transform.hover-boli .shadow-ro .on-default { opacity: 0; }
#section9.support-transform.hover-boli .icon-ro .on-blur, #section9.support-transform.hover-boli .title-ro .on-blur, #section9.support-transform.hover-boli .shadow-ro .on-blur { opacity: 1; }
#section9.support-transform.active-boli .show-after-active-boli { -webkit-transform: matrix(1, 0, 0, 1, 0, 0); transform: matrix(1, 0, 0, 1, 0, 0); opacity: 1; -webkit-transition: opacity .5s, -webkit-transform .5s; transition: opacity .5s, -webkit-transform .5s; transition: opacity .5s, transform .5s; transition: opacity .5s, transform .5s, -webkit-transform .5s; visibility: visible; }
#section9.support-transform.active-boli .heading-ro { -webkit-transform: matrix(1, 0, 0, 1, 0, 50); transform: matrix(1, 0, 0, 1, 0, 50); }
#section9.support-transform.active-boli .subheading-ro, #section9.support-transform.active-boli .btn-more-ro { -webkit-transform: matrix(1, 0, 0, 1, 0, 100); transform: matrix(1, 0, 0, 1, 0, 100); }
#section9.support-transform.active-boli .video-ro { -webkit-transform: matrix(1, 0, 0, 1, 0, 200); transform: matrix(1, 0, 0, 1, 0, 200); }
#section9.support-transform.active-boli .show-after-active-ro { opacity: 0; visibility: hidden; -webkit-transition: opacity .5s, visibility 0s .5s, -webkit-transform .5s; transition: opacity .5s, visibility 0s .5s, -webkit-transform .5s; transition: transform .5s, opacity .5s, visibility 0s .5s; transition: transform .5s, opacity .5s, visibility 0s .5s, -webkit-transform .5s; }
#section9.support-transform.active-boli .corner-container .corner-girl-ro, #section9.support-transform.active-boli .corner-container .btn-entry-ro { opacity: 1; -webkit-transform: matrix(1, 0, 0, 1, 0, 0); transform: matrix(1, 0, 0, 1, 0, 0); }

#sectionGuideBar { position: fixed; _display: none; right: 30px; top: 50%; width: 30px; margin-top: -171px; }
#sectionGuideBar .bar { cursor: pointer; width: 30px; height: 30px; position: relative; }
#sectionGuideBar .bar .font-ro { display: block; position: absolute; font-size: 30px; height: 100%; width: 100%; left: 0; top: 0; line-height: 1; color: #6f5111; -webkit-transition: opacity 0.5s; transition: opacity 0.5s; }
#sectionGuideBar .for-active { opacity: 0; filter: alpha(opacity=0); }
#sectionGuideBar .for-unactive { opacity: 1; filter: alpha(opacity=100); }
#sectionGuideBar .bar-active .for-active { opacity: 1; filter: alpha(opacity=100); }
#sectionGuideBar .bar-active .for-unactive { opacity: 0; filter: alpha(opacity=0); }
#sectionGuideBar .bar-space { height: 22px; width: 0; font-size: 0; border-left: 2px dotted #6f5111; margin: 0 auto; }

.fancybox-skin { background: none; }

.fancybox-opened .fancybox-skin { background: none; box-shadow: none; }
.fancybox-opened .fancybox-skin .fancybox-inner { overflow: visible !important; }

#popupForSubscribe { width: 1000px; height: 522px; color: #9b8049; padding: 0; background: none; position: relative; overflow: visible; *width: 1100px; }
#popupForSubscribe .modal { background: none; }
#popupForSubscribe .modal-header { padding: 0; height: 0px; margin: 0; _overflow: hidden; display: none; }
#popupForSubscribe .modal-left { background-image: url('../game/ro/imgs/popup/bg-girl.png?1467600687&v=1451991400'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; height: 522px; width: 411px; position: relative; z-index: 1; }
#popupForSubscribe .modal-body { border-top: none; color: #532300; padding: 0; position: absolute; height: 417px; width: 730px; background: #ffffff; top: 105px; left: 187px; border-radius: 4px; }
#popupForSubscribe .modal-body .close { position: absolute; right: 15px; font-size: 60px; top: 15px; color: #9b8049; z-index: 2; }
#popupForSubscribe .modal-body .close:hover { color: #bca973; }
#popupForSubscribe .modal-body .title { color: #9b8049; font-size: 18px; padding-top: 20px; }
#popupForSubscribe .modal-body .flower { position: absolute; right: 34px; top: 100px; background-image: url('../game/ro/imgs/popup/flower.jpg?1467600687&v=1451991400'); background-repeat: no-repeat; background-position: 0 0; background-color: transparent; background-size: auto; height: 32px; width: 19px; }
#popupForSubscribe .modal-body .text-indent { text-indent: 30px; }
#popupForSubscribe .modal-body .for-subscribe { height: 370px; width: 568px; left: 143px; top: 18px; position: absolute; line-height: 34px; }
#popupForSubscribe .modal-body .before-subscribe { top: 33px; }
#popupForSubscribe .modal-body .before-subscribe .content { width: 520px; }
#popupForSubscribe .modal-body .after-subscribe { display: none; }
#popupForSubscribe .modal-body .after-subscribe .btn-block { position: absolute; width: 144px; left: 50%; bottom: 50px; margin-left: -72px; }
#popupForSubscribe .modal-body .ways-all { position: relative; height: 233px; margin-top: 27px; z-index: 2; border: 1px solid #dcd5c7; border-right: 0; background: rgba(255, 255, 255, 0.8); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CCffffff,endColorstr=#CCffffff); _-webkit-filter: none; _filter: none; }
#popupForSubscribe .modal-body .ways-all .item-title { height: 44px; line-height: 44px; padding-left: 24px; border-bottom: 1px solid #dcd5c7; background: #f4f3f0; font-size: 12px; }
#popupForSubscribe .modal-body .ways-all .special-color { color: #ab6d00; }
#popupForSubscribe .modal-body .ways-all .qr-code, #popupForSubscribe .modal-body .ways-all .logo-tap { display: block; margin: 0 auto; }
#popupForSubscribe .modal-body .subscribe-ways { position: relative; float: left; height: 100%; width: 189px; *width: 188px; border-right: 1px solid #dcd5c7; }
#popupForSubscribe .modal-body .subscribe-ways-qr { position: relative; }
#popupForSubscribe .modal-body .subscribe-ways-qr .subscribe-content-qr { padding-top: 18px; text-align: center; }
#popupForSubscribe .modal-body .subscribe-ways-mobile { z-index: 1; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .subscribe-content-mobile { padding-top: 16px; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .flag-container { *height: 28px; *z-index: 1; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .flag-container .iti-flag { *top: 50%; *margin-top: -7px; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .input-text { color: #fff; line-height: 28px; height: 28px; background-color: #97835c; width: 170px; _padding-left: 52px; *width: 118px; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .input-text:focus { outline: 0; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .form-group { padding-left: 9px; position: relative; z-index: 2; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .form-group label { display: block; line-height: 32px; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .form-group .help-block { line-height: 22px; font-size: 12px; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .form-group-submit { position: absolute; bottom: 36px; left: 0; margin: 0; width: 100%; padding: 0; z-index: 1; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .form-group-submit .help-block { position: absolute; bottom: -40px; left: 0; text-align: center; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .form-group-submit .btn-block { width: 126px; display: block; margin: 0 auto; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .has-error .help-block { color: #dc5816; }
#popupForSubscribe .modal-body .subscribe-ways-mobile .selected-flag { outline: 0; }
#popupForSubscribe .modal-body .subscribe-ways-tap .subscribe-content-tap { padding-top: 28px; }
#popupForSubscribe .modal-body .subscribe-ways-tap .link-tap { display: block; color: #532300; }
#popupForSubscribe .modal-body .subscribe-ways-tap .logo-tap { width: 127px; height: 75px; }
#popupForSubscribe .modal-body .subscribe-ways-tap .about-tap { padding: 10px 30px 0; line-height: 20px; }
#popupForSubscribe .modal-footer { text-align: center; background-color: transparent; }
#popupForSubscribe.subscribe-success .before-subscribe { display: none; }
#popupForSubscribe.subscribe-success .subscribe-notice { display: block; z-index: 3; }
#popupForSubscribe.subscribe-fail .before-subscribe { display: none; }
#popupForSubscribe.subscribe-fail .subscribe-tip { display: block; }

.popup-video-outer { width: 848px; height: 480px; }

#boliPopupVideoContainer { width: 360px; height: 636px; }

.fancybox-popup-video .fancybox-skin { background: #000; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); }

#popupmnq { color: #9b8049; width: 370px; height: 270px; padding: 0px 15px 20px; }
#popupmnq .modal-header { position: relative; padding: 0px 5px; }
#popupmnq .modal-header .title { font-size: 20px; }
#popupmnq .modal-header .close { position: absolute; width: 30px; height: 30px; right: 0px; top: 0px; background-image: url('../game/ro/imgs/section-1/close.jpg?1489631233&v=1484910426'); background-repeat: no-repeat; background-position: center bottom; background-color: transparent; background-size: auto; }
#popupmnq .modal-header .border-bottom { position: absolute; bottom: -2px; left: 1px; width: 87px; height: 2px; background: #9b8049; }
#popupmnq .modal-body { font-size: 20px; padding: 15px 15px 0px; }
#popupmnq .modal-body .itempopup { width: 69px; height: 69px; }
#popupmnq .modal-body .itempopup.popup1 { background-image: url('../game/ro/imgs/section-1/ropopup1.jpg?1503541930&v=1490610733'); background-repeat: no-repeat; background-position: center bottom; background-color: transparent; background-size: auto; }
#popupmnq .modal-body .itempopup.popup2 { background-image: url('../game/ro/imgs/section-1/ropopup2.jpg?1503541930&v=1490610733'); background-repeat: no-repeat; background-position: center bottom; background-color: transparent; background-size: auto; margin: 0 5px; }
#popupmnq .modal-body .itempopup.popup3 { background-image: url('../game/ro/imgs/section-1/ropopup3.jpg?1503541930&v=1490610733'); background-repeat: no-repeat; background-position: center bottom; background-color: transparent; background-size: auto; }
#popupmnq .modal-body .itempopup.popup4 { background-image: url('../game/ro/imgs/section-1/ropopup4.jpg?1503541930&v=1490610733'); background-repeat: no-repeat; background-position: center bottom; background-color: transparent; background-size: auto; }
#popupmnq .modal-body .has-tip-sm { padding-top: 12px; clear: both; font-size: 16px; }
#popupmnq .modal-body .has-bottom { padding-bottom: 15px; }

#popupmac { color: #9b8049; width: 370px; height: 270px; padding: 0px 15px 20px; }
#popupmac .modal-header { position: relative; padding: 0px 5px; }
#popupmac .modal-header .title { font-size: 20px; }
#popupmac .modal-header .close { position: absolute; width: 30px; height: 30px; right: 0px; top: 0px; background-image: url('../game/ro/imgs/section-1/close.jpg?1489631233&v=1484910426'); background-repeat: no-repeat; background-position: center bottom; background-color: transparent; background-size: auto; }
#popupmac .modal-header .border-bottom { position: absolute; bottom: -2px; left: 1px; width: 87px; height: 2px; background: #9b8049; }
#popupmac .modal-body { font-size: 20px; padding: 15px 55px 0px; }
#popupmac .modal-body .itempopup { width: 69px; height: 69px; }
#popupmac .modal-body .itempopup.popup3 { display: block; margin: auto; background-image: url('../game/ro/imgs/section-1/ropopup3.jpg?1503541930&v=1490610733'); background-repeat: no-repeat; background-position: center bottom; background-color: transparent; background-size: auto; }
#popupmac .modal-body .has-tip-sm { padding-top: 12px; clear: both; font-size: 16px; }
#popupmac .modal-body .has-bottom { padding-bottom: 15px; }

#popupVideoListContainer { width: 848px; height: 596px; position: relative; }
#popupVideoListContainer .video-list { width: 848px; height: 480px; position: relative; background-color: black; }
#popupVideoListContainer .video-list .video-container { position: absolute; width: 100%; height: 100%; left: 0; top: 0; }
#popupVideoListContainer .video-list .title { position: absolute; top: -60px; left: 0; width: 100%; color: white; line-height: 1; font-size: 36px; }
#popupVideoListContainer .video-handle-list { position: absolute; bottom: 0; left: 0; width: 100%; height: 86px; }
#popupVideoListContainer .video-handle-slider { position: relative; overflow: hidden; margin: 0 auto; width: 800px; height: 86px; }
#popupVideoListContainer .video-handle-list-1 .video-handle-slider { width: 160px; }
#popupVideoListContainer .video-handle-list-2 .video-handle-slider { width: 320px; }
#popupVideoListContainer .video-handle-list-3 .video-handle-slider { width: 480px; }
#popupVideoListContainer .video-handle-list-4 .video-handle-slider { width: 640px; }
#popupVideoListContainer .video-handle { width: 160px; height: 100%; position: relative; }
#popupVideoListContainer .video-handle .poster { width: 152px; height: 100%; display: block; margin: 0 auto; }
#popupVideoListContainer .video-handle .cover { position: absolute; left: 4px; top: 0; width: 152px; height: 100%; background-color: rgba(0, 0, 0, 0.5); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#80000000,endColorstr=#80000000); -webkit-transition: background-color .5s; transition: background-color .5s; }
#popupVideoListContainer .video-handle .title { position: absolute; bottom: 0; left: 4px; width: 152px; padding-top: 54px; line-height: 32px; font-size: 14px; color: #fff; background-image: url('../game/ro/imgs/section-1/video-poster-hover.png?1467600687&v=1467125999'); background-repeat: no-repeat; background-position: center bottom; background-color: transparent; background-size: auto; opacity: 0; -webkit-transition: opacity .5s; transition: opacity .5s; }
@media \0screen\,screen\9 { #popupVideoListContainer .video-handle .title { visibility: hidden; } }
#popupVideoListContainer .video-handle:hover .cover { background-color: transparent; -webkit-filter: none; filter: none; }
#popupVideoListContainer .video-handle:hover .title { opacity: 1; }
@media \0screen\,screen\9 { #popupVideoListContainer .video-handle:hover .title { visibility: visible; } }
#popupVideoListContainer .video-handle-active .cover { -webkit-filter: none; filter: none; background-color: transparent; border: 2px solid #bc9b41; *width: 148px; *height: 82px; }
#popupVideoListContainer .controller { position: absolute; bottom: 27px; }
#popupVideoListContainer .controller-prev { left: 0; height: 43px; width: 28px; background: url('../game/ro/imgs/section-1/sprite.png?v=1489469746') 0 -81px no-repeat; }
#popupVideoListContainer .controller-next { right: 0; height: 43px; width: 28px; background: url('../game/ro/imgs/section-1/sprite.png?v=1489469746') 0 -36px no-repeat; }
