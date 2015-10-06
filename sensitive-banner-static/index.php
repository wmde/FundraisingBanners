<!DOCTYPE html>
<html dir="ltr" class="client-js ve-not-available" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<title>Meta, a Wikimedia project coordination wiki</title>
	<script type="text/javascript" src="mw-files/jquery-1.11.3.min.js"></script>
	<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
	<script>window.RLQ = window.RLQ || [];
		window.RLQ.push( function() {
			/*
			 @nomin
			 */
			mw.config.set( {
				"wgCanonicalNamespace": "",
				"wgCanonicalSpecialPageName": false,
				"wgNamespaceNumber": 0,
				"wgPageName": "Main_Page",
				"wgTitle": "Main Page",
				"wgCurRevisionId": 13832341,
				"wgRevisionId": 13832341,
				"wgArticleId": 79155,
				"wgIsArticle": true,
				"wgIsRedirect": false,
				"wgAction": "view",
				"wgUserName": null,
				"wgUserGroups": ["*"],
				"wgCategories": ["Pages using duplicate arguments in template calls", "Main page/en", "English", "EN"],
				"wgBreakFrames": false,
				"wgPageContentLanguage": "en",
				"wgPageContentModel": "wikitext",
				"wgSeparatorTransformTable": ["", ""],
				"wgDigitTransformTable": ["", ""],
				"wgDefaultDateFormat": "dmy",
				"wgMonthNames": ["", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
				"wgMonthNamesShort": ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				"wgRelevantPageName": "Main_Page",
				"wgRelevantArticleId": 79155,
				"wgIsProbablyEditable": false,
				"wgRestrictionEdit": ["sysop"],
				"wgRestrictionMove": ["sysop"],
				"wgIsMainPage": true,
				"wgMediaViewerOnClick": true,
				"wgMediaViewerEnabledByDefault": true,
				"wgWikiEditorEnabledModules": { "toolbar": true, "dialogs": true, "preview": false, "publish": false },
				"wgBetaFeaturesFeatures": [],
				"wgVisualEditor": {
					"pageLanguageCode": "en",
					"pageLanguageDir": "ltr",
					"usePageImages": true,
					"usePageDescriptions": false
				},
				"wgULSAcceptLanguageList": ["de", "en-us", "en"],
				"wgULSCurrentAutonym": "English",
				"wgCategoryTreePageCategoryOptions": "{\"mode\":0,\"hideprefix\":20,\"showcount\":true,\"namespaces\":false}",
				"wgNoticeProject": "meta",
				"wgVisualEditorToolbarScrollOffset": 0
			} );
			mw.loader.implement( "user.options", function( $, jQuery ) {
				mw.user.options.set( { "variant": "en" } );
			} );
			mw.loader.implement( "user.tokens", function( $, jQuery ) {
				/*
				 @nomin
				 */
				mw.user.tokens.set( { "editToken": "+\\", "patrolToken": "+\\", "watchToken": "+\\" } );
			} );
			mw.loader.load( ["mediawiki.page.startup", "mediawiki.legacy.wikibits", "ext.centralauth.centralautologin", "mmv.head", "ext.visualEditor.desktopArticleTarget.init", "ext.uls.init", "ext.uls.interface", "ext.centralNotice.bannerController", "skins.vector.js"] );
		} );</script>
	<link rel="stylesheet" href="mw-files/load_002.css">
	<style>
		@-webkit-keyframes centralAuthPPersonalAnimation {
			0% {
				opacity: 0;
				-webkit-transform: translateY(-20px)
			}
			100% {
				opacity: 1;
				-webkit-transform: translateY(0)
			}
		}

		@-moz-keyframes centralAuthPPersonalAnimation {
			0% {
				opacity: 0;
				-moz-transform: translateY(-20px)
			}
			100% {
				opacity: 1;
				-moz-transform: translateY(0)
			}
		}

		@-o-keyframes centralAuthPPersonalAnimation {
			0% {
				opacity: 0;
				-o-transform: translateY(-20px)
			}
			100% {
				opacity: 1;
				-o-transform: translateY(0)
			}
		}

		@keyframes centralAuthPPersonalAnimation {
			0% {
				opacity: 0;
				transform: translateY(-20px)
			}
			100% {
				opacity: 1;
				transform: translateY(0)
			}
		}

		.centralAuthPPersonalAnimation {
			-webkit-animation-duration: 1s;
			-moz-animation-duration: 1s;
			-o-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			-moz-animation-fill-mode: both;
			-o-animation-fill-mode: both;
			animation-fill-mode: both;
			-webkit-animation-name: centralAuthPPersonalAnimation;
			-moz-animation-name: centralAuthPPersonalAnimation;
			-o-animation-name: centralAuthPPersonalAnimation;
			animation-name: centralAuthPPersonalAnimation
		}

		.ve-activated #toc, .ve-activated #siteNotice, .ve-activated .mw-indicators, .ve-active #bodyContent > :not(#siteSub):not(#contentSub):not(.ve-ui-mwTocWidget), .ve-activated #t-print, .ve-activated #t-permalink, .ve-activated #p-coll-print_export, .ve-activated #t-cite, .ve-activating .ve-ui-surface, .ve-deactivating .ve-ui-surface {
			display: none
		}

		.ve-activated #bodyContent, .ve-activated #firstHeading, .ve-activated #siteSub, .ve-activated #contentSub {
			opacity: 0.6;
			pointer-events: none
		}

		.ve-activated #firstHeading {
			cursor: default
		}

		.ve-activated #content {
			position: relative
		}

		.ve-init-mw-desktopArticleTarget-loading-overlay {
			position: absolute;
			left: 0;
			right: 0;
			z-index: 1;
			margin-top: -0.5em
		}

		.ve-init-mw-desktopArticleTarget-progress {
			border: 1px solid #347bff;
			background: #fff;
			height: 0.75em;
			border-radius: 2px;
			overflow: hidden;
			margin: 0 25%
		}

		.ve-init-mw-desktopArticleTarget-progress-bar {
			width: 0;
			height: 0.75em;
			background: #347bff
		}

		.mw-editsection {
			white-space: nowrap;
			unicode-bidi: -moz-isolate;
			unicode-bidi: -webkit-isolate;
			unicode-bidi: isolate
		}

		.mw-editsection-divider {
			color: #555
		}

		.ve-tabmessage-appendix {
			font-size: 0.7em;
			vertical-align: top;
			line-height: 1.43em;
			padding-left: 0.5em;
			background-image: none !important;
			display: inline !important
		}

		.uls-menu a {
			cursor: pointer
		}

		.uls-menu.callout .caret-before {
			border-top: 20px solid transparent;
			border-right: 20px solid #C9C9C9;
			border-bottom: 20px solid transparent;
			display: inline-block;
			left: -21px;
			top: 30px;
			position: absolute
		}

		.uls-menu.callout .caret-after {
			border-top: 20px solid transparent;
			border-right: 20px solid #FCFCFC;
			border-bottom: 20px solid transparent;
			display: inline-block;
			left: -20px;
			top: 30px;
			position: absolute
		}

		.uls-ui-languages button {
			width: 23%;
			text-overflow: ellipsis;
			margin-right: 4%
		}

		button.uls-more-languages {
			width: auto
		}

		.settings-title {
			font-size: 11pt
		}

		.settings-text {
			color: #555555;
			font-size: 9pt
		}

		div.display-settings-block:hover .settings-text {
			color: #252525
		}

		.tipsy {
			padding: 5px;
			position: absolute;
			z-index: 100000;
			cursor: default
		}

		.tipsy-inner {
			padding: 5px 8px 4px 8px;
			background-color: #ffffff;
			border: solid 1px #a7d7f9;
			color: black;
			max-width: 15em;
			border-radius: 4px;
		}

		.tipsy-arrow {
			position: absolute;
			background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAALAgMAAADUwp+1AAAACVBMVEX5+fmn1/n///9s6BFKAAAAAXRSTlMAQObYZgAAACpJREFUCB1jZBD4wMiQMoeRcUU4I9uSaYxSE54xZjn8AtMgPkgcJA9UBwAeDw1Qrb3pVAAAAABJRU5ErkJggg==) no-repeat top left;
			background: url(//meta.wikimedia.org/static/1.27.0-wmf.1/resources/src/jquery.tipsy/images/tipsy.png?6c317) no-repeat top left !ie;
			width: 11px;
			height: 6px
		}

		.tipsy-n .tipsy-arrow {
			top: 0px;
			left: 50%;
			margin-left: -5px
		}

		.tipsy-nw .tipsy-arrow {
			top: 1px;
			left: 10px
		}

		.tipsy-ne .tipsy-arrow {
			top: 1px;
			right: 10px
		}

		.tipsy-s .tipsy-arrow {
			bottom: 0px;
			left: 50%;
			margin-left: -5px;
			background-position: bottom left
		}

		.tipsy-sw .tipsy-arrow {
			bottom: 0px;
			left: 10px;
			background-position: bottom left
		}

		.tipsy-se .tipsy-arrow {
			bottom: 0px;
			right: 10px;
			background-position: bottom left
		}

		.tipsy-e .tipsy-arrow {
			top: 50%;
			margin-top: -5px;
			right: 1px;
			width: 5px;
			height: 11px;
			background-position: top right
		}

		.tipsy-w .tipsy-arrow {
			top: 50%;
			margin-top: -5px;
			left: 0px;
			width: 6px;
			height: 11px
		}

		.tipsy {
			font-size: 0.8em
		}

		@media print {
			#centralNotice {
				display: none
			}
		}</style>
	<style>@import "//meta.wikimedia.org/w/index.php?title=MediaWiki:User_language.css&action=raw&ctype=text/css&r=2";
		@import "//www.mediawiki.org/w/index.php?title=MediaWiki:Gadget-enwp-boxes.css&action=raw&ctype=text/css";

		.redirect-in-category, .allpagesredirect a {
			color: gray
		}

		body.page-Main_Page.action-view #siteSub, body.page-Main_Page.action-view #contentSub, body.page-Main_Page.action-view .firstHeading, body.page-Main_Page.action-view #jump-to-nav {
			display: none !important
		}

		@media print {
			#privacy, #about, #disclaimer {
				display: none
			}
		}

		.hiddenStructure, .if {
			display: none
		}

		.infobox {
			float: right;
			clear: right;
			margin-bottom: 0.5em;
			margin-left: 1em;
			padding: 0.2em;
			border: 1px solid #AAA;
			background: #F9F9F9;
			color: black
		}

		.infobox td, .infobox th {
			vertical-align: top
		}

		.infobox caption {
			margin-left: inherit;
			font-size: larger
		}

		.infobox.bordered {
			border-collapse: collapse
		}

		.infobox.bordered td, .infobox.bordered th {
			border: 1px solid #AAA
		}

		.infobox.bordered .borderless td, .infobox.bordered .borderless th {
			border: 0
		}

		.infobox.sisterproject {
			width: 20em;
			font-size: 90%
		}

		.sister-project {
			clear: right;
			float: right;
			width: 250px;
			margin: 0 0 1em 3em;
			padding: 4px;
			border: 1px solid #AAA;
			background: #F9F9F9;
			font-size: 0.8em;
			text-align: left
		}

		#otherlangs {
			margin: 0.5em;
			padding: 2px;
			border: 1px solid #CCC;
			background: #FAFAFA;
			font-size: 0.9em
		}

		#otherlangs span {
			margin: 0 2px;
			padding-left: 2px;
			border-left: 1px solid gray
		}

		#otherlangs span.firstlang {
			border: none
		}

		.logtable pre {
			margin: 0;
			padding: 0;
			border: 0
		}

		.page-Talk_Fundraising_2010_Feedback #firstHeading {
			display: none
		}

		span.PDFlink a {
			padding-right: 17px !important;
			background: url(//upload.wikimedia.org/wikipedia/commons/thumb/2/23/Icons-mini-file_acrobat.gif/15px-Icons-mini-file_acrobat.gif) center right no-repeat !important
		}

		div.Boxmerge, div.NavFrame {
			margin: 0px;
			padding: 4px;
			border: 1px solid #AAA;
			border-collapse: collapse;
			text-align: center;
			font-size: 95%
		}

		div.Boxmerge div.NavFrame {
			border-style: none;
			border-style: hidden
		}

		div.NavFrame + div.NavFrame {
			border-top-style: none;
			border-top-style: hidden
		}

		div.NavPic {
			float: left;
			margin: 0px;
			padding: 2px;
			background: #FFF
		}

		div.NavFrame div.NavHead {
			position: relative;
			height: 1.6em;
			background: #CCF;
			font-weight: bold
		}

		div.NavFrame p {
			font-size: 100%
		}

		div.NavFrame div.NavContent {
			font-size: 100%
		}

		div.NavFrame div.NavContent p {
			font-size: 100%
		}

		div.NavEnd {
			clear: both;
			margin: 0px;
			padding: 0px;
			line-height: 1px
		}

		a.NavToggle {
			position: absolute;
			top: 0px;
			right: 3px;
			font-size: smaller;
			font-weight: normal
		}

		.messagebox {
			width: 80%;
			margin: 0 auto 1em auto;
			padding: 0.2em;
			border: 1px solid #AAA;
			background: #F9F9F9
		}

		.messagebox.merge {
			border: 1px solid #C0B8CC;
			background: #F0E5FF;
			text-align: center
		}

		.messagebox.cleanup {
			border: 1px solid #9F9FFF;
			background: #EFEFFF;
			text-align: center
		}

		.messagebox .standard-talk {
			border: 1px solid #C0C090;
			background: #F8EABA
		}

		.messagebox.nested-talk {
			width: 100%;
			margin: 2px 4px 2px 4px;
			border: 1px solid #C0C090;
			background: #F8EABA
		}

		.messagebox.small {
			float: right;
			clear: both;
			width: 238px;
			margin: 0 0 1em 1em;
			font-size: 85%;
			line-height: 1.25em
		}

		span.updatedmarker {
			color: black;
			background-color: #0f0
		}

		.template-documentation {
			clear: both;
			margin: 1em 0 0 0;
			padding: 5px;
			border: 1px solid #AAA;
			background: #ECFCF4
		}

		.hidden-redlink a.new {
			display: none
		}

		.toclimit-2 .toclevel-1 ul, .toclimit-3 .toclevel-2 ul, .toclimit-4 .toclevel-3 ul, .toclimit-5 .toclevel-4 ul, .toclimit-6 .toclevel-5 ul, .toclimit-7 .toclevel-6 ul {
			display: none
		}

		.InformationBox {
			width: 80%;
			clear: both;
			margin: 0.5em auto;
			padding: 3px;
			border: 1px solid #999;
			background: #F8F8F8;
			color: #000
		}

		.PrettyTextBox {
			padding: .2em;
			border: 1px solid #AAA;
			background: #F9F9F9;
			color: #000
		}

		ol.references > li:target {
			background: #DEF
		}

		sup.reference:target {
			background: #DEF
		}

		body.page-Toolserver_watcher a.new:link, body.page-Toolserver_watcher a.new:visited {
			color: grey
		}

		div.translationcompare {
			max-height: 500px;
			overflow: auto
		}

		div.articleFeedback-expertise {
			display: none
		}

		body.page-Fundraising_2011_Banners_and_LPs_en .articleFeedback, body.page-Fundraising_2011_Jimmy_Letter_002_en .articleFeedback, body.page-Fundraising_2011_Brandon_Letter_en .articleFeedback, body.page-Fundraising_2011_Alan_Letter_en .articleFeedback, body.page-Fundraising_2011_Kaldari_Letter_en .articleFeedback, body.page-Fundraising_2011_Susan_Letter_en .articleFeedback, body.page-Fundraising_2011_Thank_You_Mail_en .articleFeedback, body.page-Fundraising_2011_Thank_You_Page_en .articleFeedback, body.page-Fundraising_2011_FAQ_en .articleFeedback {
			display: none
		}

		fieldset.mw-sp-translate-edit-info div {
			min-height: 40px;
			background: url(//upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Infobox_info_icon.svg/40px-Infobox_info_icon.svg.png) no-repeat
		}

		fieldset.mw-sp-translate-edit-info div.mw-content-ltr {
			background-position: left center;
			padding-left: 45px
		}

		fieldset.mw-sp-translate-edit-info div.mw-centent-rtl {
			background-position: right center;
			padding-right: 45px
		}

		#hideTOCnumbers .tocnumber {
			display: none
		}

		:lang(fa) {
			font-family: Tahoma, 'Iranian Sans', 'DejaVu Sans', 'Noto Sans', 'Droid Arabic Kufi', sans-serif
		}

		.skin-monobook .hlist dl, .skin-modern .hlist dl, .skin-vector .hlist dl {
			line-height: 1.5em
		}

		.hlist dl, .hlist ol, .hlist ul {
			margin: 0;
			padding: 0
		}

		.hlist dd, .hlist dt, .hlist li {
			margin: 0;
			display: inline
		}

		.hlist dl dl, .hlist dl ol, .hlist dl ul, .hlist ol dl, .hlist ol ol, .hlist ol ul, .hlist ul dl, .hlist ul ol, .hlist ul ul {
			display: inline
		}

		.hlist dt:after {
			content: ":"
		}

		.hlist dd:after, .hlist li:after {
			content: " ·";
			font-weight: bold
		}

		.hlist dd:last-child:after, .hlist dt:last-child:after, .hlist li:last-child:after {
			content: none
		}

		.hlist dd.hlist-last-child:after, .hlist dt.hlist-last-child:after, .hlist li.hlist-last-child:after {
			content: none
		}

		.hlist dd dd:first-child:before, .hlist dd dt:first-child:before, .hlist dd li:first-child:before, .hlist dt dd:first-child:before, .hlist dt dt:first-child:before, .hlist dt li:first-child:before, .hlist li dd:first-child:before, .hlist li dt:first-child:before, .hlist li li:first-child:before {
			content: "(";
			font-weight: normal
		}

		.hlist dd dd:last-child:after, .hlist dd dt:last-child:after, .hlist dd li:last-child:after, .hlist dt dd:last-child:after, .hlist dt dt:last-child:after, .hlist dt li:last-child:after, .hlist li dd:last-child:after, .hlist li dt:last-child:after, .hlist li li:last-child:after {
			content: ")";
			font-weight: normal
		}

		.hlist dd dd.hlist-last-child:after, .hlist dd dt.hlist-last-child:after, .hlist dd li.hlist-last-child:after, .hlist dt dd.hlist-last-child:after, .hlist dt dt.hlist-last-child:after, .hlist dt li.hlist-last-child:after, .hlist li dd.hlist-last-child:after, .hlist li dt.hlist-last-child:after, .hlist li li.hlist-last-child:after {
			content: ")";
			font-weight: normal
		}

		.hlist ol {
			counter-reset: list-item
		}

		.hlist ol > li {
			counter-increment: list-item
		}

		.hlist ol > li:before {
			content: counter(list-item) " "
		}

		.hlist dd ol > li:first-child:before, .hlist dt ol > li:first-child:before, .hlist li ol > li:first-child:before {
			content: "(" counter(list-item) " "
		}

		.plainlist ul {
			line-height: inherit;
			list-style: none none;
			margin: 0
		}

		.plainlist ul li {
			margin-bottom: 0
		}

		.navbox {
			border: 1px solid #aaa;
			width: 100%;
			margin: auto;
			clear: both;
			font-size: 88%;
			text-align: center;
			padding: 1px
		}

		.navbox-inner, .navbox-subgroup {
			width: 100%
		}

		.navbox-group, .navbox-title, .navbox-abovebelow {
			padding: 0.25em 1em;
			line-height: 1.5em;
			text-align: center
		}

		th.navbox-group {
			white-space: nowrap;
			text-align: right
		}

		.navbox, .navbox-subgroup {
			background: #fdfdfd;
		}

		.navbox-list {
			line-height: 1.8em;
			border-color: #fdfdfd;
		}

		.navbox th, .navbox-title {
			background: #ccccff;
		}

		.navbox-abovebelow, th.navbox-group, .navbox-subgroup .navbox-title {
			background: #ddddff;
		}

		.navbox-subgroup .navbox-group, .navbox-subgroup .navbox-abovebelow {
			background: #e6e6ff;
		}

		.navbox-even {
			background: #f7f7f7;
		}

		.navbox-odd {
			background: transparent;
		}

		table.navbox + table.navbox {
			margin-top: -1px;
		}

		.navbox .hlist td dl, .navbox .hlist td ol, .navbox .hlist td ul, .navbox td.hlist dl, .navbox td.hlist ol, .navbox td.hlist ul {
			padding: 0.125em 0;
		}

		ol + table.navbox, ul + table.navbox {
			margin-top: 0.5em;
		}

		.navbar {
			display: inline;
			font-size: 88%;
			font-weight: normal
		}

		.navbar ul {
			display: inline;
			white-space: nowrap
		}

		.navbar li {
			word-spacing: -0.125em
		}

		.navbar.mini li span {
			font-variant: small-caps
		}

		.infobox .navbar {
			font-size: 100%
		}

		.navbox .navbar {
			display: block;
			font-size: 100%
		}

		.navbox-title .navbar {
			float: left;
			text-align: left;
			margin-right: 0.5em;
			width: 6em
		}

		div.mw-geshi div, div.mw-geshi div pre, span.mw-geshi, pre.source-css, pre.source-javascript, pre.source-php, pre.source-lua {
			font-family: monospace, Courier !important
		}

		@media (-webkit-min-device-pixel-ratio: 1.5),(min--moz-device-pixel-ratio: 1.5),(min-resolution: 1.5dppx),(min-resolution: 144dpi) {
			#p-logo a {
				background-size: 135px auto;
				background-image: url(//upload.wikimedia.org/wikipedia/commons/e/e7/Wikimedia-logo-meta.svg) !important
			}
		}

		.transborder {
			border: solid transparent
		}

		* html .transborder {
			border: solid #000001;
			filter: chroma(color=#000001)
		}

		.alternance, .alternance2 {
			border-collapse: collapse
		}

		table.alternance > * > tr > th, table.alternance2 > * > tr > th {
			background: #e6e6e6
		}

		.alternance tr, .alternance th[scope="row"] {
			background: #fcfcfc
		}

		.alternance:not(.sortable) tr:nth-child(odd), .alternance.sortable tr:nth-child(even), .alternance:not(.sortable) tr:nth-child(odd) th[scope="row"], .alternance.sortable tr:nth-child(even) th[scope="row"] {
			background: #eeeeee
		}

		.alternance .odd, .alternance .odd th[scope="row"] {
			background: #eeeeee
		}

		.alternance2 tr, .alternance2 th[scope="row"] {
			background: #eeeeee
		}

		.alternance2 tr:nth-child(odd), .alternance2 tr:nth-child(odd) th[scope="row"] {
			background: #fcfcfc
		}

		.alternance2 .odd, .alternance2 .odd th[scope="row"] {
			background: #fcfcfc
		}

		.sharedUploadNotice {
			border: 1px solid #aaa;
			margin: 1em auto;
			width: 60%;
			padding: 8px 1% 8px 8%;
			border-radius: 5px;
			background-color: #EEEFFF;
			background-position: 2% 50%;
			background-repeat: no-repeat;
			background-image: url(//upload.wikimedia.org/wikipedia/commons/9/9d/Commons-logo-31px.png)
		}

		.page-Wikimedia_Foundation_nomail_list #wpSave {
			display: none
		}

		#bodyContent .letterhead {
			background-image: url(//upload.wikimedia.org/wikipedia/commons/e/e0/Tan-page-corner.png);
			background-repeat: no-repeat;
			padding: 2em;
			background-color: #faf9f2
		}

		.page-Wikimedia_Foundation_elections_2015_Call_for_candidates .cn-Election2015_Submission {
			display: none
		}</style>
	<style>
		.postedit-container {
			margin: 0 auto;
			position: fixed;
			top: 0;
			height: 0;
			left: 50%;
			z-index: 1000;
			font-size: 13px
		}

		.postedit-container:hover {
			cursor: pointer
		}

		.postedit {
			position: relative;
			top: 0.6em;
			left: -50%;
			padding: .6em 3.6em .6em 1.1em;
			line-height: 1.5625em;
			color: #626465;
			background-color: #f4f4f4;
			border: 1px solid #dcd9d9;
			text-shadow: 0 0.0625em 0 rgba(255, 255, 255, 0.5);
			border-radius: 5px;
			box-shadow: 0 2px 5px 0 #ccc;
			-webkit-transition: all 0.25s ease-in-out;
			-moz-transition: all 0.25s ease-in-out;
			-ms-transition: all 0.25s ease-in-out;
			-o-transition: all 0.25s ease-in-out;
			transition: all 0.25s ease-in-out
		}

		.skin-monobook .postedit {
			top: 6em !important
		}

		.postedit-faded {
			opacity: 0
		}

		.postedit-icon {
			padding-left: 41px;
			line-height: 25px;
			background-repeat: no-repeat;
			background-position: 8px 50%
		}

		.postedit-icon-checkmark {
			background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABblBMVEUAAAD///////9PfTf///80aRdTgjn///9Feij///////////9Rfzf///////////9PfjZRgDh1o1xOfTb///////+bwYqLtnj///////9PfTa82K////9WhT6YxIL///9QgDdTgzr////////j7uDl7eLq8efi693k7OH///////9UhjuBr2rp9uRUhjr///9YljVKgir///9WiTlYjT3////9/v57vFlbkT5PjC9dlD/5/fhuq09stUTs9uhxuElctCpfnT1huDFloEZloUZmpENmvDZpvDxpvTxqvjxrvT5rvT9rwTxsqktswD5uwkBvuUdxw0NztFBztU9ztVBzwkp0tlJ1xkd2t1R3uVR4w1F4xk54x014yE15uVZ5v1R5xVB6v1R7yFJ8wVh9xVl9yFR9yVd9ylN+xVh+yFd/x1l/yFeAylmEx1+Ny2uY0Hqe04Wj1Ymv3Ze33qLD47TJ5L3O6cPU7Mrq9eb2+/Q4j37OAAAAQHRSTlMAAQIEBAUFBQwPFB4fJCUoKiosQEhJS01RUlZZXmdydXaChYuSlJSWmJmoq6uur8LExcvM19fg5ejt8fX2+Pr7SljgewAAAKpJREFUGBkFwQNCAwAAAMDLtl3LtrG4rWXbtvX77gAgZ6grFwC0bhwNVgKgdPZx8b0dgLi+s7Wn0VoAqpfOI9+BNADZI7fLrz2pSEwGHZuH+78lSK8ZLkLezF3ooyUG3VPXq2USei9WngeyoG195yBYWDF3E/2pAhl1e9Gr8bGT+bfOFCC2fnvh4X7rcqIAQNNu+HT6sxkAjceTL/2ZAIhv+PorBwBJxfkA//dFHSCBy/UTAAAAAElFTkSuQmCC);
			background-image: url(//meta.wikimedia.org/static/1.27.0-wmf.1/resources/src/mediawiki.action/images/green-checkmark.png?9048a) !ie;
			background-position: left
		}

		.postedit-close {
			position: absolute;
			padding: 0 .8em;
			right: 0;
			top: 0;
			font-size: 1.25em;
			font-weight: bold;
			line-height: 2.3em;
			color: black;
			text-shadow: 0 0.0625em 0 white;
			text-decoration: none;
			opacity: 0.2;
			filter: alpha(opacity=20)
		}

		.postedit-close:hover {
			color: black;
			text-decoration: none;
			opacity: 0.4;
			filter: alpha(opacity=40)
		}

		.mw-collapsible-toggle {
			float: right;
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
			user-select: none
		}

		.mw-content-ltr .mw-collapsible-toggle, .mw-content-rtl .mw-content-ltr .mw-collapsible-toggle {
			float: right
		}

		.mw-content-rtl .mw-collapsible-toggle, .mw-content-ltr .mw-content-rtl .mw-collapsible-toggle {
			float: left
		}

		.mw-customtoggle, .mw-collapsible-toggle {
			cursor: pointer
		}

		caption .mw-collapsible-toggle, .mw-content-ltr caption .mw-collapsible-toggle, .mw-content-rtl caption .mw-collapsible-toggle, .mw-content-rtl .mw-content-ltr caption .mw-collapsible-toggle, .mw-content-ltr .mw-content-rtl caption .mw-collapsible-toggle {
			float: none
		}

		li .mw-collapsible-toggle, .mw-content-ltr li .mw-collapsible-toggle, .mw-content-rtl li .mw-collapsible-toggle, .mw-content-rtl .mw-content-ltr li .mw-collapsible-toggle, .mw-content-ltr .mw-content-rtl li .mw-collapsible-toggle {
			float: none
		}

		.mw-collapsible-toggle-li {
			list-style: none
		}

		.suggestions {
			overflow: hidden;
			position: absolute;
			top: 0;
			left: 0;
			width: 0;
			border: none;
			z-index: 1099;
			padding: 0;
			margin: -1px 0 0 0
		}

		.suggestions-special {
			position: relative;
			background-color: white;
			cursor: pointer;
			border: solid 1px #aaaaaa;
			padding: 0;
			margin: 0;
			margin-top: -2px;
			display: none;
			padding: 0.25em 0.25em;
			line-height: 1.25em
		}

		.suggestions-results {
			background-color: white;
			cursor: pointer;
			border: solid 1px #aaaaaa;
			padding: 0;
			margin: 0
		}

		.suggestions-result {
			color: black;
			margin: 0;
			line-height: 1.5em;
			padding: 0.01em 0.25em;
			text-align: left;
			overflow: hidden;
			-o-text-overflow: ellipsis;
			text-overflow: ellipsis;
			white-space: nowrap
		}

		.suggestions-result-current {
			background-color: #4C59A6;
			color: white
		}

		.suggestions-special .special-label {
			color: gray;
			text-align: left
		}

		.suggestions-special .special-query {
			color: black;
			font-style: italic;
			text-align: left
		}

		.suggestions-special .special-hover {
			background-color: silver
		}

		.suggestions-result-current .special-label, .suggestions-result-current .special-query {
			color: white
		}

		.highlight {
			font-weight: bold
		}

		.mw-ui-button {
			font-family: inherit;
			font-size: 1em;
			display: inline-block;
			padding: .5em 1em;
			margin: 0;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			-webkit-appearance: none;
			*display: inline;
			zoom: 1;
			background: #ffffff;
			color: #555555;
			border: 1px solid #cccccc;
			border-radius: 2px;
			min-width: 4em;
			vertical-align: middle;
			text-align: center;
			font-weight: bold;
			cursor: pointer;
			-webkit-transition: background 0.1s ease-in-out, color 0.1s ease-in-out, box-shadow 0.1s ease-in-out;
			-moz-transition: background 0.1s ease-in-out, color 0.1s ease-in-out, box-shadow 0.1s ease-in-out;
			-o-transition: background 0.1s ease-in-out, color 0.1s ease-in-out, box-shadow 0.1s ease-in-out;
			transition: background 0.1s ease-in-out, color 0.1s ease-in-out, box-shadow 0.1s ease-in-out
		}

		.mw-ui-button:hover {
			background-color: #cccccc
		}

		.mw-ui-button:focus {
			border-color: #ffffff;
			box-shadow: 0 0 0 1px #cccccc;
			outline: none
		}

		.mw-ui-button:focus::-moz-focus-inner {
			border-color: transparent
		}

		.mw-ui-button:active, .mw-ui-button.mw-ui-checked {
			background: #777777;
			box-shadow: none
		}

		.mw-ui-button:hover, .mw-ui-button:active, .mw-ui-button:visited {
			color: #555555
		}

		.mw-ui-button:focus {
			background-color: #cccccc
		}

		.mw-ui-button:disabled {
			color: #cccccc
		}

		.mw-ui-button:disabled:hover, .mw-ui-button:disabled:active {
			background: #ffffff;
			box-shadow: none
		}

		.mw-ui-button:disabled {
			text-shadow: none;
			cursor: default
		}

		.mw-ui-button.mw-ui-big {
			font-size: 1.3em
		}

		.mw-ui-button.mw-ui-block {
			display: block;
			width: 100%
		}

		.mw-ui-button.mw-ui-progressive, .mw-ui-button.mw-ui-primary {
			background: #347bff;
			color: #fff;
			border: 1px solid #347bff;
			text-shadow: 0 1px rgba(0, 0, 0, 0.1)
		}

		.mw-ui-button.mw-ui-progressive:hover, .mw-ui-button.mw-ui-primary:hover {
			background-color: #2962cc
		}

		.mw-ui-button.mw-ui-progressive:focus, .mw-ui-button.mw-ui-primary:focus {
			border-color: #ffffff;
			box-shadow: 0 0 0 1px #2962cc;
			outline: none
		}

		.mw-ui-button.mw-ui-progressive:focus::-moz-focus-inner, .mw-ui-button.mw-ui-primary:focus::-moz-focus-inner {
			border-color: transparent
		}

		.mw-ui-button.mw-ui-progressive:active, .mw-ui-button.mw-ui-primary:active, .mw-ui-button.mw-ui-progressive.mw-ui-checked, .mw-ui-button.mw-ui-primary.mw-ui-checked {
			background: #2962cc;
			box-shadow: none
		}

		.mw-ui-button.mw-ui-progressive:disabled, .mw-ui-button.mw-ui-primary:disabled {
			background: #dddddd;
			border-color: #dddddd
		}

		.mw-ui-button.mw-ui-progressive:disabled:hover, .mw-ui-button.mw-ui-primary:disabled:hover, .mw-ui-button.mw-ui-progressive:disabled:active, .mw-ui-button.mw-ui-primary:disabled:active, .mw-ui-button.mw-ui-progressive:disabled.mw-ui-checked, .mw-ui-button.mw-ui-primary:disabled.mw-ui-checked {
			box-shadow: none
		}

		.mw-ui-button.mw-ui-progressive.mw-ui-quiet, .mw-ui-button.mw-ui-primary.mw-ui-quiet {
			color: #555555
		}

		.mw-ui-button.mw-ui-progressive.mw-ui-quiet:hover, .mw-ui-button.mw-ui-primary.mw-ui-quiet:hover, .mw-ui-button.mw-ui-progressive.mw-ui-quiet:focus, .mw-ui-button.mw-ui-primary.mw-ui-quiet:focus {
			background: transparent;
			color: #347bff
		}

		.mw-ui-button.mw-ui-progressive.mw-ui-quiet:active, .mw-ui-button.mw-ui-primary.mw-ui-quiet:active, .mw-ui-button.mw-ui-progressive.mw-ui-quiet.mw-ui-checked, .mw-ui-button.mw-ui-primary.mw-ui-quiet.mw-ui-checked {
			color: #2962cc
		}

		.mw-ui-button.mw-ui-progressive.mw-ui-quiet:disabled, .mw-ui-button.mw-ui-primary.mw-ui-quiet:disabled {
			color: #cccccc
		}

		.mw-ui-button.mw-ui-constructive {
			background: #00af89;
			color: #fff;
			border: 1px solid #00af89;
			text-shadow: 0 1px rgba(0, 0, 0, 0.1)
		}

		.mw-ui-button.mw-ui-constructive:hover {
			background-color: #008c6d
		}

		.mw-ui-button.mw-ui-constructive:focus {
			border-color: #ffffff;
			box-shadow: 0 0 0 1px #008c6d;
			outline: none
		}

		.mw-ui-button.mw-ui-constructive:focus::-moz-focus-inner {
			border-color: transparent
		}

		.mw-ui-button.mw-ui-constructive:active, .mw-ui-button.mw-ui-constructive.mw-ui-checked {
			background: #008c6d;
			box-shadow: none
		}

		.mw-ui-button.mw-ui-constructive:disabled {
			background: #dddddd;
			border-color: #dddddd
		}

		.mw-ui-button.mw-ui-constructive:disabled:hover, .mw-ui-button.mw-ui-constructive:disabled:active, .mw-ui-button.mw-ui-constructive:disabled.mw-ui-checked {
			box-shadow: none
		}

		.mw-ui-button.mw-ui-constructive.mw-ui-quiet {
			color: #555555
		}

		.mw-ui-button.mw-ui-constructive.mw-ui-quiet:hover, .mw-ui-button.mw-ui-constructive.mw-ui-quiet:focus {
			background: transparent;
			color: #00af89
		}

		.mw-ui-button.mw-ui-constructive.mw-ui-quiet:active, .mw-ui-button.mw-ui-constructive.mw-ui-quiet.mw-ui-checked {
			color: #008c6d
		}

		.mw-ui-button.mw-ui-constructive.mw-ui-quiet:disabled {
			color: #cccccc
		}

		.mw-ui-button.mw-ui-destructive {
			background: #d11d13;
			color: #fff;
			border: 1px solid #d11d13;
			text-shadow: 0 1px rgba(0, 0, 0, 0.1)
		}

		.mw-ui-button.mw-ui-destructive:hover {
			background-color: #a7170f
		}

		.mw-ui-button.mw-ui-destructive:focus {
			border-color: #ffffff;
			box-shadow: 0 0 0 1px #a7170f;
			outline: none
		}

		.mw-ui-button.mw-ui-destructive:focus::-moz-focus-inner {
			border-color: transparent
		}

		.mw-ui-button.mw-ui-destructive:active, .mw-ui-button.mw-ui-destructive.mw-ui-checked {
			background: #a7170f;
			box-shadow: none
		}

		.mw-ui-button.mw-ui-destructive:disabled {
			background: #dddddd;
			border-color: #dddddd
		}

		.mw-ui-button.mw-ui-destructive:disabled:hover, .mw-ui-button.mw-ui-destructive:disabled:active, .mw-ui-button.mw-ui-destructive:disabled.mw-ui-checked {
			box-shadow: none
		}

		.mw-ui-button.mw-ui-destructive.mw-ui-quiet {
			color: #555555
		}

		.mw-ui-button.mw-ui-destructive.mw-ui-quiet:hover, .mw-ui-button.mw-ui-destructive.mw-ui-quiet:focus {
			background: transparent;
			color: #d11d13
		}

		.mw-ui-button.mw-ui-destructive.mw-ui-quiet:active, .mw-ui-button.mw-ui-destructive.mw-ui-quiet.mw-ui-checked {
			color: #a7170f
		}

		.mw-ui-button.mw-ui-destructive.mw-ui-quiet:disabled {
			color: #cccccc
		}

		.mw-ui-button.mw-ui-quiet {
			background: transparent;
			border: none;
			text-shadow: none;
			color: #555555
		}

		.mw-ui-button.mw-ui-quiet:hover, .mw-ui-button.mw-ui-quiet:focus {
			background: transparent;
			color: #555555
		}

		.mw-ui-button.mw-ui-quiet:active, .mw-ui-button.mw-ui-quiet.mw-ui-checked {
			color: #777777
		}

		.mw-ui-button.mw-ui-quiet:disabled {
			color: #cccccc
		}

		.mw-ui-button.mw-ui-quiet:hover, .mw-ui-button.mw-ui-quiet:focus {
			box-shadow: none
		}

		.mw-ui-button.mw-ui-quiet:active, .mw-ui-button.mw-ui-quiet:disabled {
			background: transparent
		}

		a.mw-ui-button {
			text-decoration: none
		}

		a.mw-ui-button:hover, a.mw-ui-button:focus {
			text-decoration: none
		}

		.mw-ui-button-group > * {
			min-width: 48px;
			border-radius: 0;
			float: left
		}

		.mw-ui-button-group > *:first-child {
			border-top-left-radius: 2px;
			border-bottom-left-radius: 2px
		}

		.mw-ui-button-group > *:not(:first-child) {
			border-left: none
		}

		.mw-ui-button-group > *:last-child {
			border-top-right-radius: 2px;
			border-bottom-right-radius: 2px
		}

		.mw-ui-icon {
			position: relative;
			min-height: 1.5em;
			min-width: 1.5em
		}

		.mw-ui-icon.mw-ui-icon-element {
			text-indent: -999px;
			overflow: hidden;
			width: 3.5em;
			min-width: 3.5em;
			max-width: 3.5em
		}

		.mw-ui-icon.mw-ui-icon-element:before {
			left: 0;
			right: 0;
			position: absolute;
			margin: 0 1em
		}

		.mw-ui-icon.mw-ui-icon-before:before, .mw-ui-icon.mw-ui-icon-element:before {
			background-position: 50% 50%;
			float: left;
			display: block;
			background-repeat: no-repeat;
			background-size: 100% auto;
			min-height: 1.5em;
			content: ''
		}

		.mw-ui-icon.mw-ui-icon-before:before {
			position: relative;
			width: 1.5em;
			margin-right: 1em
		}

		.ui-helper-hidden {
			display: none
		}

		.ui-helper-hidden-accessible {
			border: 0;
			clip: rect(0 0 0 0);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px
		}

		.ui-helper-reset {
			margin: 0;
			padding: 0;
			border: 0;
			outline: 0;
			line-height: 1.3;
			text-decoration: none;
			font-size: 100%;
			list-style: none
		}

		.ui-helper-clearfix:before, .ui-helper-clearfix:after {
			content: "";
			display: table;
			border-collapse: collapse
		}

		.ui-helper-clearfix:after {
			clear: both
		}

		.ui-helper-clearfix {
			zoom: 1
		}

		.ui-helper-zfix {
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			position: absolute;
			opacity: 0;
			filter: Alpha(Opacity=0)
		}

		.ui-state-disabled {
			cursor: default !important
		}

		.ui-icon {
			display: block;
			text-indent: -99999px;
			overflow: hidden;
			background-repeat: no-repeat
		}

		.ui-widget-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%
		}

		.ui-widget {
			font-family: Verdana, Arial, sans-serif;
			font-size: 1.1em
		}

		.ui-widget .ui-widget {
			font-size: 1em
		}

		.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button {
			font-family: Verdana, Arial, sans-serif;
			font-size: 1em
		}

		.ui-widget-content {
			border: 1px solid #aaaaaa;
			background: #ffffff url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-bg_flat_75_ffffff_40x100.png?81e0f) 50% 50% repeat-x;
			color: #222222
		}

		.ui-widget-header {
			border: 1px solid #aaaaaa;
			background: #cccccc url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-bg_highlight-soft_75_cccccc_1x100.png?52261) 50% 50% repeat-x;
			color: #222222;
			font-weight: bold
		}

		.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
			border: 1px solid #d3d3d3;
			background: #e6e6e6 url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-bg_glass_75_e6e6e6_1x400.png?944bb) 50% 50% repeat-x;
			font-weight: normal;
			color: #555555
		}

		.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
			color: #555555;
			text-decoration: none
		}

		.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
			border: 1px solid #999999;
			background: #dadada url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-bg_glass_75_dadada_1x400.png?78379) 50% 50% repeat-x;
			font-weight: normal;
			color: #212121
		}

		.ui-state-hover a, .ui-state-hover a:hover, .ui-state-hover a:link, .ui-state-hover a:visited {
			color: #212121;
			text-decoration: none
		}

		.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
			border: 1px solid #aaaaaa;
			background: #ffffff url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-bg_glass_65_ffffff_1x400.png?bd8a3) 50% 50% repeat-x;
			font-weight: normal;
			color: #212121
		}

		.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
			color: #212121;
			text-decoration: none
		}

		.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
			border: 1px solid #fcefa1;
			background: #fbf9ee url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-bg_glass_55_fbf9ee_1x400.png?f7ccf) 50% 50% repeat-x;
			color: #363636
		}

		.ui-state-highlight a, .ui-widget-content .ui-state-highlight a, .ui-widget-header .ui-state-highlight a {
			color: #363636
		}

		.ui-state-error, .ui-widget-content .ui-state-error, .ui-widget-header .ui-state-error {
			border: 1px solid #cd0a0a;
			background: #fef1ec url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-bg_glass_95_fef1ec_1x400.png?f9aa8) 50% 50% repeat-x;
			color: #cd0a0a
		}

		.ui-state-error a, .ui-widget-content .ui-state-error a, .ui-widget-header .ui-state-error a {
			color: #cd0a0a
		}

		.ui-state-error-text, .ui-widget-content .ui-state-error-text, .ui-widget-header .ui-state-error-text {
			color: #cd0a0a
		}

		.ui-priority-primary, .ui-widget-content .ui-priority-primary, .ui-widget-header .ui-priority-primary {
			font-weight: bold
		}

		.ui-priority-secondary, .ui-widget-content .ui-priority-secondary, .ui-widget-header .ui-priority-secondary {
			opacity: .7;
			filter: Alpha(Opacity=70);
			font-weight: normal
		}

		.ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .ui-state-disabled {
			opacity: .35;
			filter: Alpha(Opacity=35);
			background-image: none
		}

		.ui-state-disabled .ui-icon {
			filter: Alpha(Opacity=35)
		}

		.ui-icon {
			width: 16px;
			height: 16px;
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-icons_222222_256x240.png?a1b38)
		}

		.ui-widget-content .ui-icon {
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-icons_222222_256x240.png?a1b38)
		}

		.ui-widget-header .ui-icon {
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-icons_222222_256x240.png?a1b38)
		}

		.ui-state-default .ui-icon {
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-icons_888888_256x240.png?302ae)
		}

		.ui-state-hover .ui-icon, .ui-state-focus .ui-icon {
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-icons_454545_256x240.png?6b29e)
		}

		.ui-state-active .ui-icon {
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-icons_454545_256x240.png?6b29e)
		}

		.ui-state-highlight .ui-icon {
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-icons_2e83ff_256x240.png?764c3)
		}

		.ui-state-error .ui-icon, .ui-state-error-text .ui-icon {
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-icons_cd0a0a_256x240.png?5c785)
		}

		.ui-icon-carat-1-n {
			background-position: 0 0
		}

		.ui-icon-carat-1-ne {
			background-position: -16px 0
		}

		.ui-icon-carat-1-e {
			background-position: -32px 0
		}

		.ui-icon-carat-1-se {
			background-position: -48px 0
		}

		.ui-icon-carat-1-s {
			background-position: -64px 0
		}

		.ui-icon-carat-1-sw {
			background-position: -80px 0
		}

		.ui-icon-carat-1-w {
			background-position: -96px 0
		}

		.ui-icon-carat-1-nw {
			background-position: -112px 0
		}

		.ui-icon-carat-2-n-s {
			background-position: -128px 0
		}

		.ui-icon-carat-2-e-w {
			background-position: -144px 0
		}

		.ui-icon-triangle-1-n {
			background-position: 0 -16px
		}

		.ui-icon-triangle-1-ne {
			background-position: -16px -16px
		}

		.ui-icon-triangle-1-e {
			background-position: -32px -16px
		}

		.ui-icon-triangle-1-se {
			background-position: -48px -16px
		}

		.ui-icon-triangle-1-s {
			background-position: -64px -16px
		}

		.ui-icon-triangle-1-sw {
			background-position: -80px -16px
		}

		.ui-icon-triangle-1-w {
			background-position: -96px -16px
		}

		.ui-icon-triangle-1-nw {
			background-position: -112px -16px
		}

		.ui-icon-triangle-2-n-s {
			background-position: -128px -16px
		}

		.ui-icon-triangle-2-e-w {
			background-position: -144px -16px
		}

		.ui-icon-arrow-1-n {
			background-position: 0 -32px
		}

		.ui-icon-arrow-1-ne {
			background-position: -16px -32px
		}

		.ui-icon-arrow-1-e {
			background-position: -32px -32px
		}

		.ui-icon-arrow-1-se {
			background-position: -48px -32px
		}

		.ui-icon-arrow-1-s {
			background-position: -64px -32px
		}

		.ui-icon-arrow-1-sw {
			background-position: -80px -32px
		}

		.ui-icon-arrow-1-w {
			background-position: -96px -32px
		}

		.ui-icon-arrow-1-nw {
			background-position: -112px -32px
		}

		.ui-icon-arrow-2-n-s {
			background-position: -128px -32px
		}

		.ui-icon-arrow-2-ne-sw {
			background-position: -144px -32px
		}

		.ui-icon-arrow-2-e-w {
			background-position: -160px -32px
		}

		.ui-icon-arrow-2-se-nw {
			background-position: -176px -32px
		}

		.ui-icon-arrowstop-1-n {
			background-position: -192px -32px
		}

		.ui-icon-arrowstop-1-e {
			background-position: -208px -32px
		}

		.ui-icon-arrowstop-1-s {
			background-position: -224px -32px
		}

		.ui-icon-arrowstop-1-w {
			background-position: -240px -32px
		}

		.ui-icon-arrowthick-1-n {
			background-position: 0 -48px
		}

		.ui-icon-arrowthick-1-ne {
			background-position: -16px -48px
		}

		.ui-icon-arrowthick-1-e {
			background-position: -32px -48px
		}

		.ui-icon-arrowthick-1-se {
			background-position: -48px -48px
		}

		.ui-icon-arrowthick-1-s {
			background-position: -64px -48px
		}

		.ui-icon-arrowthick-1-sw {
			background-position: -80px -48px
		}

		.ui-icon-arrowthick-1-w {
			background-position: -96px -48px
		}

		.ui-icon-arrowthick-1-nw {
			background-position: -112px -48px
		}

		.ui-icon-arrowthick-2-n-s {
			background-position: -128px -48px
		}

		.ui-icon-arrowthick-2-ne-sw {
			background-position: -144px -48px
		}

		.ui-icon-arrowthick-2-e-w {
			background-position: -160px -48px
		}

		.ui-icon-arrowthick-2-se-nw {
			background-position: -176px -48px
		}

		.ui-icon-arrowthickstop-1-n {
			background-position: -192px -48px
		}

		.ui-icon-arrowthickstop-1-e {
			background-position: -208px -48px
		}

		.ui-icon-arrowthickstop-1-s {
			background-position: -224px -48px
		}

		.ui-icon-arrowthickstop-1-w {
			background-position: -240px -48px
		}

		.ui-icon-arrowreturnthick-1-w {
			background-position: 0 -64px
		}

		.ui-icon-arrowreturnthick-1-n {
			background-position: -16px -64px
		}

		.ui-icon-arrowreturnthick-1-e {
			background-position: -32px -64px
		}

		.ui-icon-arrowreturnthick-1-s {
			background-position: -48px -64px
		}

		.ui-icon-arrowreturn-1-w {
			background-position: -64px -64px
		}

		.ui-icon-arrowreturn-1-n {
			background-position: -80px -64px
		}

		.ui-icon-arrowreturn-1-e {
			background-position: -96px -64px
		}

		.ui-icon-arrowreturn-1-s {
			background-position: -112px -64px
		}

		.ui-icon-arrowrefresh-1-w {
			background-position: -128px -64px
		}

		.ui-icon-arrowrefresh-1-n {
			background-position: -144px -64px
		}

		.ui-icon-arrowrefresh-1-e {
			background-position: -160px -64px
		}

		.ui-icon-arrowrefresh-1-s {
			background-position: -176px -64px
		}

		.ui-icon-arrow-4 {
			background-position: 0 -80px
		}

		.ui-icon-arrow-4-diag {
			background-position: -16px -80px
		}

		.ui-icon-extlink {
			background-position: -32px -80px
		}

		.ui-icon-newwin {
			background-position: -48px -80px
		}

		.ui-icon-refresh {
			background-position: -64px -80px
		}

		.ui-icon-shuffle {
			background-position: -80px -80px
		}

		.ui-icon-transfer-e-w {
			background-position: -96px -80px
		}

		.ui-icon-transferthick-e-w {
			background-position: -112px -80px
		}

		.ui-icon-folder-collapsed {
			background-position: 0 -96px
		}

		.ui-icon-folder-open {
			background-position: -16px -96px
		}

		.ui-icon-document {
			background-position: -32px -96px
		}

		.ui-icon-document-b {
			background-position: -48px -96px
		}

		.ui-icon-note {
			background-position: -64px -96px
		}

		.ui-icon-mail-closed {
			background-position: -80px -96px
		}

		.ui-icon-mail-open {
			background-position: -96px -96px
		}

		.ui-icon-suitcase {
			background-position: -112px -96px
		}

		.ui-icon-comment {
			background-position: -128px -96px
		}

		.ui-icon-person {
			background-position: -144px -96px
		}

		.ui-icon-print {
			background-position: -160px -96px
		}

		.ui-icon-trash {
			background-position: -176px -96px
		}

		.ui-icon-locked {
			background-position: -192px -96px
		}

		.ui-icon-unlocked {
			background-position: -208px -96px
		}

		.ui-icon-bookmark {
			background-position: -224px -96px
		}

		.ui-icon-tag {
			background-position: -240px -96px
		}

		.ui-icon-home {
			background-position: 0 -112px
		}

		.ui-icon-flag {
			background-position: -16px -112px
		}

		.ui-icon-calendar {
			background-position: -32px -112px
		}

		.ui-icon-cart {
			background-position: -48px -112px
		}

		.ui-icon-pencil {
			background-position: -64px -112px
		}

		.ui-icon-clock {
			background-position: -80px -112px
		}

		.ui-icon-disk {
			background-position: -96px -112px
		}

		.ui-icon-calculator {
			background-position: -112px -112px
		}

		.ui-icon-zoomin {
			background-position: -128px -112px
		}

		.ui-icon-zoomout {
			background-position: -144px -112px
		}

		.ui-icon-search {
			background-position: -160px -112px
		}

		.ui-icon-wrench {
			background-position: -176px -112px
		}

		.ui-icon-gear {
			background-position: -192px -112px
		}

		.ui-icon-heart {
			background-position: -208px -112px
		}

		.ui-icon-star {
			background-position: -224px -112px
		}

		.ui-icon-link {
			background-position: -240px -112px
		}

		.ui-icon-cancel {
			background-position: 0 -128px
		}

		.ui-icon-plus {
			background-position: -16px -128px
		}

		.ui-icon-plusthick {
			background-position: -32px -128px
		}

		.ui-icon-minus {
			background-position: -48px -128px
		}

		.ui-icon-minusthick {
			background-position: -64px -128px
		}

		.ui-icon-close {
			background-position: -80px -128px
		}

		.ui-icon-closethick {
			background-position: -96px -128px
		}

		.ui-icon-key {
			background-position: -112px -128px
		}

		.ui-icon-lightbulb {
			background-position: -128px -128px
		}

		.ui-icon-scissors {
			background-position: -144px -128px
		}

		.ui-icon-clipboard {
			background-position: -160px -128px
		}

		.ui-icon-copy {
			background-position: -176px -128px
		}

		.ui-icon-contact {
			background-position: -192px -128px
		}

		.ui-icon-image {
			background-position: -208px -128px
		}

		.ui-icon-video {
			background-position: -224px -128px
		}

		.ui-icon-script {
			background-position: -240px -128px
		}

		.ui-icon-alert {
			background-position: 0 -144px
		}

		.ui-icon-info {
			background-position: -16px -144px
		}

		.ui-icon-notice {
			background-position: -32px -144px
		}

		.ui-icon-help {
			background-position: -48px -144px
		}

		.ui-icon-check {
			background-position: -64px -144px
		}

		.ui-icon-bullet {
			background-position: -80px -144px
		}

		.ui-icon-radio-on {
			background-position: -96px -144px
		}

		.ui-icon-radio-off {
			background-position: -112px -144px
		}

		.ui-icon-pin-w {
			background-position: -128px -144px
		}

		.ui-icon-pin-s {
			background-position: -144px -144px
		}

		.ui-icon-play {
			background-position: 0 -160px
		}

		.ui-icon-pause {
			background-position: -16px -160px
		}

		.ui-icon-seek-next {
			background-position: -32px -160px
		}

		.ui-icon-seek-prev {
			background-position: -48px -160px
		}

		.ui-icon-seek-end {
			background-position: -64px -160px
		}

		.ui-icon-seek-start {
			background-position: -80px -160px
		}

		.ui-icon-seek-first {
			background-position: -80px -160px
		}

		.ui-icon-stop {
			background-position: -96px -160px
		}

		.ui-icon-eject {
			background-position: -112px -160px
		}

		.ui-icon-volume-off {
			background-position: -128px -160px
		}

		.ui-icon-volume-on {
			background-position: -144px -160px
		}

		.ui-icon-power {
			background-position: 0 -176px
		}

		.ui-icon-signal-diag {
			background-position: -16px -176px
		}

		.ui-icon-signal {
			background-position: -32px -176px
		}

		.ui-icon-battery-0 {
			background-position: -48px -176px
		}

		.ui-icon-battery-1 {
			background-position: -64px -176px
		}

		.ui-icon-battery-2 {
			background-position: -80px -176px
		}

		.ui-icon-battery-3 {
			background-position: -96px -176px
		}

		.ui-icon-circle-plus {
			background-position: 0 -192px
		}

		.ui-icon-circle-minus {
			background-position: -16px -192px
		}

		.ui-icon-circle-close {
			background-position: -32px -192px
		}

		.ui-icon-circle-triangle-e {
			background-position: -48px -192px
		}

		.ui-icon-circle-triangle-s {
			background-position: -64px -192px
		}

		.ui-icon-circle-triangle-w {
			background-position: -80px -192px
		}

		.ui-icon-circle-triangle-n {
			background-position: -96px -192px
		}

		.ui-icon-circle-arrow-e {
			background-position: -112px -192px
		}

		.ui-icon-circle-arrow-s {
			background-position: -128px -192px
		}

		.ui-icon-circle-arrow-w {
			background-position: -144px -192px
		}

		.ui-icon-circle-arrow-n {
			background-position: -160px -192px
		}

		.ui-icon-circle-zoomin {
			background-position: -176px -192px
		}

		.ui-icon-circle-zoomout {
			background-position: -192px -192px
		}

		.ui-icon-circle-check {
			background-position: -208px -192px
		}

		.ui-icon-circlesmall-plus {
			background-position: 0 -208px
		}

		.ui-icon-circlesmall-minus {
			background-position: -16px -208px
		}

		.ui-icon-circlesmall-close {
			background-position: -32px -208px
		}

		.ui-icon-squaresmall-plus {
			background-position: -48px -208px
		}

		.ui-icon-squaresmall-minus {
			background-position: -64px -208px
		}

		.ui-icon-squaresmall-close {
			background-position: -80px -208px
		}

		.ui-icon-grip-dotted-vertical {
			background-position: 0 -224px
		}

		.ui-icon-grip-dotted-horizontal {
			background-position: -16px -224px
		}

		.ui-icon-grip-solid-vertical {
			background-position: -32px -224px
		}

		.ui-icon-grip-solid-horizontal {
			background-position: -48px -224px
		}

		.ui-icon-gripsmall-diagonal-se {
			background-position: -64px -224px
		}

		.ui-icon-grip-diagonal-se {
			background-position: -80px -224px
		}

		.ui-corner-all, .ui-corner-top, .ui-corner-left, .ui-corner-tl {
			-moz-border-radius-topleft: 4px;
			-webkit-border-top-left-radius: 4px;
			-khtml-border-top-left-radius: 4px;
			border-top-left-radius: 4px
		}

		.ui-corner-all, .ui-corner-top, .ui-corner-right, .ui-corner-tr {
			-moz-border-radius-topright: 4px;
			-webkit-border-top-right-radius: 4px;
			-khtml-border-top-right-radius: 4px;
			border-top-right-radius: 4px
		}

		.ui-corner-all, .ui-corner-bottom, .ui-corner-left, .ui-corner-bl {
			-moz-border-radius-bottomleft: 4px;
			-webkit-border-bottom-left-radius: 4px;
			-khtml-border-bottom-left-radius: 4px;
			border-bottom-left-radius: 4px
		}

		.ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br {
			-moz-border-radius-bottomright: 4px;
			-webkit-border-bottom-right-radius: 4px;
			-khtml-border-bottom-right-radius: 4px;
			border-bottom-right-radius: 4px
		}

		.ui-widget-overlay {
			background: #aaaaaa url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-bg_flat_0_aaaaaa_40x100.png?fda5a) 50% 50% repeat-x;
			opacity: .3;
			filter: Alpha(Opacity=30)
		}

		.ui-widget-shadow {
			margin: -8px 0 0 -8px;
			padding: 8px;
			background: #aaaaaa url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.ui/themes/smoothness/images/ui-bg_flat_0_aaaaaa_40x100.png?fda5a) 50% 50% repeat-x;
			opacity: .3;
			filter: Alpha(Opacity=30);
			-moz-border-radius: 8px;
			-khtml-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px
		}

		.grantsGadget .ui-state-hover {
			background: transparent;
			border-color: #a1a1a1
		}

		.grantsGadget.ui-dialog .ui-icon-closethick {
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTEuMzEzcHgiIGhlaWdodD0iMTEuMzEzcHgiIHZpZXdCb3g9IjAgMCAxMS4zMTMgMTEuMzEzIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMS4zMTMgMTEuMzEzIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwb2x5Z29uIGZpbGw9IiNCMEIxQjEiIHBvaW50cz0iMTEuMzEzLDIuMTIxIDkuMTkyLDAgNS42NTcsMy41MzUgMi4xMjIsMCAwLDIuMTIxIDMuNTM2LDUuNjU2IDAuMDAxLDkuMTkxIDIuMTIyLDExLjMxMyANCgk1LjY1Nyw3Ljc3NyA5LjE5MiwxMS4zMTIgMTEuMzEzLDkuMTkxIDcuNzc4LDUuNjU2ICIvPg0KPC9zdmc+DQo=) no-repeat 50% 50% !important
		}

		.grantsGadget .ui-widget-content {
			background: #EEE
		}

		.grantsGadget.ui-dialog .ui-widget-header {
			border: none;
			background: #EEE !important;
			padding-left: 11px !important;
			margin-top: 25px
		}

		.grantsGadget.ui-widget-content {
			background: #EEE;
			padding: 10px 18px;
			color: #444;
			border-left: 1px solid #ddd;
			border-top: 1px solid #ddd;
			border-right: 1px solid #ddd;
			border-bottom: 3px solid #D0D0D0;
			border-radius: 1px
		}

		.grantsGadget .gadgetControls {
			text-align: right;
			margin: 10px 0px
		}

		.grantsGadget .messageDescription {
			margin: 10px 0px
		}

		.grantsGadget textarea {
			outline: 0px;
			padding: 14px;
			resize: none;
			background-color: white;
			border: 1px solid #DDD;
			border-radius: 1px;
			margin-bottom: 1em
		}

		.grantsGadget textarea:focus {
			box-shadow: inset .45em 0 0 #5088f7
		}

		.grantsSpeechBubbleContainer {
			position: absolute;
			top: -50px
		}

		.grantsSpeechBubble {
			background: #347BFF;
			border-radius: 3px;
			display: inline-block;
			padding: 10px;
			border-bottom-color: #1059E1;
			border-width: 0px 0px 3px 0px;
			border-style: solid;
			color: white
		}

		.grantsSpeechBubbleArrowDown {
			width: 0px;
			height: 0px;
			border-left: 10px solid transparent;
			border-right: 10px solid transparent;
			border-top: 10px solid #347BFF;
			position: relative;
			top: -3px;
			left: 10px
		}

		div.grantsHide {
			display: none
		}

		.messageSignature {
			font-size: 9px
		}

		.grantsGadget mw-ui-vform {
			width: 100%
		}

		.grantsGadget textarea::-webkit-input-placeholder {
			font-style: italic
		}

		.grantsGadget textarea::-moz-placeholder {
			font-style: italic
		}

		.grantsGadget textarea:-ms-input-placeholder {
			font-style: italic
		}

		.joinGadget .chzn-container-single .chzn-single {
			background-image: none;
			border-radius: 1px;
			box-shadow: none;
			border: 1px solid #ddd;
			padding: .25em;
			padding-left: 14px
		}

		.joinGadget .chzn-container .chzn-results li {
			padding-left: 10px
		}

		.joinGadget .chzn-container-active.chzn-with-drop .chzn-single {
			background: #F6F3F3;
			border: 1px solid #aaa;
			padding: .25em;
			padding-left: 14px
		}

		.joinGadget .chzn-container .chzn-results .highlighted {
			background-image: none;
			background-color: #347bff
		}

		.joinGadget .chzn-container-single .chzn-single div b {
			background-position: 0px 5px
		}

		.joinGadget .chzn-container-active.chzn-with-drop .chzn-single div b {
			background-position: -18px 5px
		}

		/* cache key: global:resourceloader:filter:minify-css:7:0249f35ea016e24f527b92e577c94ce5 */
		.uls-trigger {
			background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAQCAMAAADQzfSkAAABqlBMVEX////f3/+Ov+/n5+fp6enp6eno6Ojp6enn5+ff39/q6urp6enp6enp6enq6urp6en////q6urr6+upv+rU1NTJycnR0dEaGhrp6enT4/SEuuK9vb3l5eU2ktCxsbFdXV1paWmzwc9ITFDo6OhaWlpsbGxtbW2BipSZpK/X19d2dnZ8hI2/v79PT09gZm2CgoLIyMjD0eGksL1JTVHM2+spKywnKCkcHBzAzt3I1+cxMzZxcXFkZGSvr69WW2C8vLyFjphqcXiLlZ8dHh4gISLa2trQ3/Dc3NzZ2dl7e3uioqIfHyBCRko9QEPh4eFgYGDGxsZoaGiPj4/Ly8uRm6a6yNcbGxuSnKfL2uqVn6scHR20tLR/f3+Kioq4uLienp54gIipqanA2e+71u9GSk5yeoKgoKCAgIB0dHRLS0tlZWWDg4PBwcHFxcWxvsxkanGapbCKlJ7O4fNXo9hQn9bM3/OPmaRfZWve3t6mpqbR0dG+vr6JiYnKyspPVFl1s99+fn5srdzm5ubNzc1BREh2s99xsN7S0tIxMzUiIyQ2OTt/iJFwcHBbYWc3S28lAAAAF3RSTlMACBAg7P3LiTYIX6LmmDzeAYMnDN+1MJx17ncAAAEQSURBVHheddBTb0VREIbhVduYWVuHRm3btm3bNv9zJ2v3IE36Xk3yZG4+xkMKw0BREYwJMzkcO38MY37tG6AmYN48YZFxwsbeiys6y/02rT1Wa4TxwoYgpx4adLMbfRubs9tk0cJuYK8ACv1/Xy5LLlIYS5bf2FTUUlJapptiqKwyuOfJEsjq4M3j+YBPYc02X6utTWnvQEwk6wJRNxn29Pb1D2iIg0bEJMaHYWTU6RyfABPZ5BTa7xBxxo2YzPgcPPGFRb4Ey2Qrq2vrXlRk6xampDK+a94/ODw6PjGfkp2dX1y6ZOvVNWKavsutqt6HbGZ5QCqdMUmSnlXqhY6M12CZtKcaUnhtsKz/Tc5m7AfjN0jzWIipawAAAABJRU5ErkJggg==) no-repeat scroll left center;
			background: transparent url(//meta.wikimedia.org/static/1.26wmf24/extensions/UniversalLanguageSelector/lib/jquery.uls/images/icon-language.png?4d0aa) no-repeat scroll left center !ie;
			background-image: -webkit-linear-gradient(transparent, transparent), url(data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2227%22%20height%3D%2216%22%3E%3Cpath%20fill%3D%22%23D3E3F4%22%20d%3D%22M0%200h11.876v16h-11.876v-16z%22%2F%3E%3Cpath%20fill%3D%22%23E9E9E9%22%20d%3D%22M12.819%200v15.969h10.755c1.085-2.578%201.837-4.991%203.062-8.591l-3.062-7.378h-10.755z%22%2F%3E%3Cpath%20fill%3D%22%23434343%22%20d%3D%22M14.828%204.146c.32.023.639.035.951.035.471%200%20.922-.016%201.354-.046l.023-.258.034-.367.081-.711.033-.333.873.058c-.073.577-.133%201.091-.179%201.542%201.116-.119%202.233-.331%203.349-.637l.092.809c-1.078.271-2.251.472-3.521.602-.05.463-.082.968-.098%201.514.524-.187%201.14-.313%201.847-.378.064-.207.136-.461.213-.763l.865.201c-.027.123-.088.315-.184.579.814.104%201.461.34%201.938.711.681.542%201.021%201.252%201.021%202.128%200%20.963-.406%201.746-1.221%202.351-.635.47-1.505.784-2.609.94l-.505-.779c.968-.104%201.739-.337%202.317-.7.733-.458%201.101-1.066%201.101-1.823%200-.772-.341-1.363-1.021-1.772-.345-.21-.764-.344-1.256-.401-.604%201.422-1.4%202.598-2.387%203.527.035.352.102.715.201%201.09l-.849.314-.126-.773c-.654.462-1.27.693-1.847.693-.696%200-1.044-.407-1.044-1.222%200-1.104.591-2.103%201.771-2.993.227-.165.532-.352.918-.562.012-.524.046-1.128.104-1.812-.585.046-1.143.069-1.675.069l-.493-.011-.071-.822m2.127%203.384c-.268.161-.545.392-.831.694-.612.619-.94%201.226-.986%201.817l-.017.121.017.138c0%20.252.112.378.339.378.492%200%201.02-.258%201.582-.773-.057-.613-.092-1.404-.104-2.375m2.455-.884c-.57.08-1.111.226-1.623.436%200%20.883.018%201.581.052%202.093.634-.707%201.158-1.55%201.571-2.529%22%2F%3E%3Cpath%20fill%3D%22%231A1A1A%22%20d%3D%22M8.517%2011.735l-.734-2.409h-3.69l-.734%202.409h-2.313l3.573-10.165h2.625l3.587%2010.165h-2.314m-1.246-4.21c-.679-2.183-1.062-3.418-1.149-3.704-.083-.286-.143-.512-.18-.678-.153.59-.589%202.051-1.309%204.382h2.638%22%2F%3E%3Cpath%20fill%3D%22%23BCBCBC%22%20d%3D%22M12.817%2013.5v2.5h10.757l.98-2.5h-11.737z%22%2F%3E%3Cpath%20fill%3D%22%233692D0%22%20d%3D%22M.011%2013.511h3.569l2.367-3.116%202.367%203.116h3.57v2.484h-11.873v-2.484z%22%2F%3E%3C%2Fsvg%3E);
			background-image: -webkit-linear-gradient(transparent, transparent), url(//meta.wikimedia.org/static/1.26wmf24/extensions/UniversalLanguageSelector/lib/jquery.uls/images/icon-language.svg?9334a) !ie;
			background-image: linear-gradient(transparent, transparent), url(data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2227%22%20height%3D%2216%22%3E%3Cpath%20fill%3D%22%23D3E3F4%22%20d%3D%22M0%200h11.876v16h-11.876v-16z%22%2F%3E%3Cpath%20fill%3D%22%23E9E9E9%22%20d%3D%22M12.819%200v15.969h10.755c1.085-2.578%201.837-4.991%203.062-8.591l-3.062-7.378h-10.755z%22%2F%3E%3Cpath%20fill%3D%22%23434343%22%20d%3D%22M14.828%204.146c.32.023.639.035.951.035.471%200%20.922-.016%201.354-.046l.023-.258.034-.367.081-.711.033-.333.873.058c-.073.577-.133%201.091-.179%201.542%201.116-.119%202.233-.331%203.349-.637l.092.809c-1.078.271-2.251.472-3.521.602-.05.463-.082.968-.098%201.514.524-.187%201.14-.313%201.847-.378.064-.207.136-.461.213-.763l.865.201c-.027.123-.088.315-.184.579.814.104%201.461.34%201.938.711.681.542%201.021%201.252%201.021%202.128%200%20.963-.406%201.746-1.221%202.351-.635.47-1.505.784-2.609.94l-.505-.779c.968-.104%201.739-.337%202.317-.7.733-.458%201.101-1.066%201.101-1.823%200-.772-.341-1.363-1.021-1.772-.345-.21-.764-.344-1.256-.401-.604%201.422-1.4%202.598-2.387%203.527.035.352.102.715.201%201.09l-.849.314-.126-.773c-.654.462-1.27.693-1.847.693-.696%200-1.044-.407-1.044-1.222%200-1.104.591-2.103%201.771-2.993.227-.165.532-.352.918-.562.012-.524.046-1.128.104-1.812-.585.046-1.143.069-1.675.069l-.493-.011-.071-.822m2.127%203.384c-.268.161-.545.392-.831.694-.612.619-.94%201.226-.986%201.817l-.017.121.017.138c0%20.252.112.378.339.378.492%200%201.02-.258%201.582-.773-.057-.613-.092-1.404-.104-2.375m2.455-.884c-.57.08-1.111.226-1.623.436%200%20.883.018%201.581.052%202.093.634-.707%201.158-1.55%201.571-2.529%22%2F%3E%3Cpath%20fill%3D%22%231A1A1A%22%20d%3D%22M8.517%2011.735l-.734-2.409h-3.69l-.734%202.409h-2.313l3.573-10.165h2.625l3.587%2010.165h-2.314m-1.246-4.21c-.679-2.183-1.062-3.418-1.149-3.704-.083-.286-.143-.512-.18-.678-.153.59-.589%202.051-1.309%204.382h2.638%22%2F%3E%3Cpath%20fill%3D%22%23BCBCBC%22%20d%3D%22M12.817%2013.5v2.5h10.757l.98-2.5h-11.737z%22%2F%3E%3Cpath%20fill%3D%22%233692D0%22%20d%3D%22M.011%2013.511h3.569l2.367-3.116%202.367%203.116h3.57v2.484h-11.873v-2.484z%22%2F%3E%3C%2Fsvg%3E);
			background-image: linear-gradient(transparent, transparent), url(//meta.wikimedia.org/static/1.26wmf24/extensions/UniversalLanguageSelector/lib/jquery.uls/images/icon-language.svg?9334a) !ie;
			padding-left: 30px
		}

		#pt-uls a.uls-trigger {
			padding-left: 30px;
			line-height: 1
		}

		x:-o-prefocus, body.rtl li#pt-uls {
			direction: ltr
		}

		#uls-settings-block {
			border-top: 1px solid #C9C9C9;
			background: #f8f8f8;
			background: -webkit-gradient(linear, left top, left bottom, from(#FBFBFB), to(#F0F0F0));
			background: -webkit-linear-gradient(top, #FBFBFB, #F0F0F0);
			background: -moz-linear-gradient(top, #FBFBFB, #F0F0F0);
			background: -o-linear-gradient(top, #FBFBFB, #F0F0F0);
			background: linear-gradient(#FBFBFB, #F0F0F0);
			padding-left: 10px;
			line-height: 1.2em;
			border-radius: 0 0 5px 5px
		}

		#uls-settings-block div.display-settings-block, #uls-settings-block div.input-settings-block {
			display: inline-block;
			margin: 8px 15px;
			color: #565656
		}

		#uls-settings-block div.display-settings-block:hover, #uls-settings-block div.input-settings-block:hover {
			color: #252525
		}</style>
	<style>
		.suggestions a.mw-searchSuggest-link, .suggestions a.mw-searchSuggest-link:hover, .suggestions a.mw-searchSuggest-link:active, .suggestions a.mw-searchSuggest-link:focus {
			color: black;
			text-decoration: none
		}

		.suggestions-result-current a.mw-searchSuggest-link, .suggestions-result-current a.mw-searchSuggest-link:hover, .suggestions-result-current a.mw-searchSuggest-link:active, .suggestions-result-current a.mw-searchSuggest-link:focus {
			color: white
		}

		.suggestions a.mw-searchSuggest-link .special-query {
			overflow: hidden;
			-o-text-overflow: ellipsis;
			text-overflow: ellipsis;
			white-space: nowrap
		}

		.mw-mmv-overlay {
			position: fixed;
			top: 0px;
			left: 0px;
			right: 0px;
			bottom: 0px;
			z-index: 1000;
			background-color: #000000
		}

		body.mw-mmv-lightbox-open {
			overflow-y: auto
		}

		body.mw-mmv-lightbox-open #mw-page-base, body.mw-mmv-lightbox-open #mw-head-base, body.mw-mmv-lightbox-open #mw-navigation, body.mw-mmv-lightbox-open #content, body.mw-mmv-lightbox-open #footer, body.mw-mmv-lightbox-open #globalWrapper {
			display: none
		}

		body.mw-mmv-lightbox-open > * {
			display: none
		}

		body.mw-mmv-lightbox-open > .mw-mmv-overlay, body.mw-mmv-lightbox-open > .mw-mmv-wrapper {
			display: block
		}

		.mw-mmv-filepage-buttons {
			margin-top: 5px
		}

		.mw-mmv-filepage-buttons .mw-mmv-view-expanded, .mw-mmv-filepage-buttons .mw-mmv-view-config {
			display: block
		}

		.mw-mmv-filepage-buttons .mw-mmv-view-expanded.mw-ui-icon:before {
			background-image: url(data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%20standalone%3D%22no%22%3F%3E%0A%3C%21--%20Created%20with%20Inkscape%20%28http%3A%2F%2Fwww.inkscape.org%2F%29%20--%3E%0A%0A%3Csvg%0A%20%20%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%0A%20%20%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%0A%20%20%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%0A%20%20%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%0A%20%20%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%0A%20%20%20version%3D%221.1%22%0A%20%20%20width%3D%22100%25%22%0A%20%20%20height%3D%22100%25%22%0A%20%20%20viewBox%3D%220%200%201024%20768%22%0A%20%20%20id%3D%22Layer_1%22%0A%20%20%20xml%3Aspace%3D%22preserve%22%3E%3Cmetadata%0A%20%20%20%20%20id%3D%22metadata17%22%3E%3Crdf%3ARDF%3E%3Ccc%3AWork%0A%20%20%20%20%20%20%20%20%20rdf%3Aabout%3D%22%22%3E%3Cdc%3Aformat%3Eimage%2Fsvg%2Bxml%3C%2Fdc%3Aformat%3E%3Cdc%3Atype%0A%20%20%20%20%20%20%20%20%20%20%20rdf%3Aresource%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Fdcmitype%2FStillImage%22%20%2F%3E%3Cdc%3Atitle%3E%3C%2Fdc%3Atitle%3E%3C%2Fcc%3AWork%3E%3C%2Frdf%3ARDF%3E%3C%2Fmetadata%3E%3Cdefs%0A%20%20%20%20%20id%3D%22defs15%22%20%2F%3E%3Cg%0A%20%20%20%20%20id%3D%22g3%22%3E%3Cpolygon%0A%20%20%20%20%20%20%20points%3D%22851.2%2C71.6%20690.7%2C232.1%20650.6%2C191.8%20641%2C356.6%20805.8%2C347.3%20765.5%2C306.9%20926%2C146.4%20984.5%2C204.9%20997.6%2C0%20792.7%2C13.1%20%22%0A%20%20%20%20%20%20%20id%3D%22polygon5%22%0A%20%20%20%20%20%20%20style%3D%22fill%3A%23777777%22%20%2F%3E%3Cpolygon%0A%20%20%20%20%20%20%20points%3D%22769.6%2C89.3%20611.9%2C89.3%20682.8%2C160.1%20690.7%2C167.6%20%22%0A%20%20%20%20%20%20%20id%3D%22polygon7%22%0A%20%20%20%20%20%20%20style%3D%22fill%3A%23777777%22%20%2F%3E%3Cpath%0A%20%20%20%20%20%20%20d%3D%22m%20643.6%2C402.2%20-51.2%2C3%203%2C-51.2%209.4%2C-164.4%205.8%2C-100.3%20H%2026.4%20V%20768%20H%20909.5%20V%20387%20l%20-100.9%2C5.8%20-165%2C9.4%20z%20M%20813.9%2C678%20H%20113.6%20l%20207.2%2C-270.2%2031.5%2C-12.9%20195.7%2C204.9%20105.9%2C-63.2%20159.8%2C140.8%200.2%2C0.6%200%2C0%20z%22%0A%20%20%20%20%20%20%20id%3D%22path9%22%0A%20%20%20%20%20%20%20style%3D%22fill%3A%23777777%22%20%2F%3E%3Cpolygon%0A%20%20%20%20%20%20%20points%3D%22909.5%2C386.1%20909.5%2C228%20830.4%2C306.9%20838.2%2C314.8%20%22%0A%20%20%20%20%20%20%20id%3D%22polygon11%22%0A%20%20%20%20%20%20%20style%3D%22fill%3A%23777777%22%20%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E);
			background-image: url(//meta.wikimedia.org/static/1.27.0-wmf.1/extensions/MultimediaViewer/resources/mmv/img/expand.svg?09b49) !ie
		}

		.mw-mmv-filepage-buttons .mw-mmv-view-config.mw-ui-icon:before {
			background-image: url(data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%20standalone%3D%22no%22%3F%3E%0A%3C%21--%20Created%20with%20Inkscape%20%28http%3A%2F%2Fwww.inkscape.org%2F%29%20--%3E%0A%0A%3Csvg%0A%20%20%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%0A%20%20%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%0A%20%20%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%0A%20%20%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%0A%20%20%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%0A%20%20%20version%3D%221.1%22%0A%20%20%20width%3D%22100%25%22%0A%20%20%20height%3D%22100%25%22%0A%20%20%20viewBox%3D%220%200%201024%20768%22%0A%20%20%20id%3D%22Layer_1%22%0A%20%20%20xml%3Aspace%3D%22preserve%22%3E%3Cmetadata%0A%20%20%20%20%20id%3D%22metadata9%22%3E%3Crdf%3ARDF%3E%3Ccc%3AWork%0A%20%20%20%20%20%20%20%20%20rdf%3Aabout%3D%22%22%3E%3Cdc%3Aformat%3Eimage%2Fsvg%2Bxml%3C%2Fdc%3Aformat%3E%3Cdc%3Atype%0A%20%20%20%20%20%20%20%20%20%20%20rdf%3Aresource%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Fdcmitype%2FStillImage%22%20%2F%3E%3Cdc%3Atitle%3E%3C%2Fdc%3Atitle%3E%3C%2Fcc%3AWork%3E%3C%2Frdf%3ARDF%3E%3C%2Fmetadata%3E%3Cdefs%0A%20%20%20%20%20id%3D%22defs7%22%20%2F%3E%3Cpath%0A%20%20%20%20%20d%3D%22M%20897%2C454.6%20V%20313.4%20L%20810.4%2C299%20c%20-6.4%2C-23.3%20-16%2C-45.7%20-27.3%2C-65.8%20L%20833.6%2C161.8%20734.2%2C61.6%20662.8%2C112.1%20C%20641.9%2C100.9%20620.3%2C91.2%20597%2C84.8%20L%20582.6%2C-1%20H%20441.4%20L%20427%2C85.6%20c%20-23.3%2C6.4%20-45.7%2C16%20-65.8%2C27.3%20L%20289.8%2C62.4%20189.5%2C161.9%20240%2C233.3%20c%20-11.2%2C20.9%20-20.9%2C42.5%20-27.3%2C66.6%20L%20127%2C313.4%20v%20141.2%20l%2085.8%2C14.4%20c%206.4%2C23.3%2016%2C45.7%2027.3%2C66.6%20l%20-50.5%2C71.4%2099.5%2C99.5%2071.4%2C-50.5%20c%2020.9%2C11.2%2042.5%2C20.9%2066.6%2C27.3%20l%2014.4%2C85.8%20h%20141.2%20l%2014.4%2C-86.6%20c%2023.3%2C-6.4%2045.7%2C-16%2065.8%2C-27.3%20l%2071.4%2C50.5%2099.5%2C-99.5%20-50.5%2C-71.4%20c%2011.2%2C-20.9%2020.9%2C-42.5%2027.3%2C-66.6%20L%20897%2C454.6%20z%20m%20-385%2C77%20C%20430.2%2C531.6%20364.4%2C465%20364.4%2C384%20364.4%2C302.2%20431%2C236.4%20512%2C236.4%20c%2081%2C0%20147.6%2C65.8%20147.6%2C147.6%200%2C81.8%20-65.8%2C147.6%20-147.6%2C147.6%20z%22%0A%20%20%20%20%20id%3D%22path3%22%0A%20%20%20%20%20style%3D%22fill%3A%23777777%22%20%2F%3E%3C%2Fsvg%3E);
			background-image: url(//meta.wikimedia.org/static/1.27.0-wmf.1/extensions/MultimediaViewer/resources/mmv/img/gear_gray.svg?ea8fa) !ie;
			opacity: 0.75
		}

		.mw-mmv-filepage-buttons .mw-mmv-view-config.mw-ui-icon:before:hover {
			opacity: 1
		}

		.ui-helper-hidden {
			display: none
		}

		.ui-helper-hidden-accessible {
			border: 0;
			clip: rect(0 0 0 0);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px
		}

		.ui-helper-reset {
			margin: 0;
			padding: 0;
			border: 0;
			outline: 0;
			line-height: 1.3;
			text-decoration: none;
			font-size: 100%;
			list-style: none
		}

		.ui-helper-clearfix:before, .ui-helper-clearfix:after {
			content: "";
			display: table;
			border-collapse: collapse
		}

		.ui-helper-clearfix:after {
			clear: both
		}

		.ui-helper-clearfix {
			zoom: 1
		}

		.ui-helper-zfix {
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			position: absolute;
			opacity: 0;
			filter: Alpha(Opacity=0)
		}

		.ui-state-disabled {
			cursor: default !important
		}

		.ui-icon {
			display: block;
			text-indent: -99999px;
			overflow: hidden;
			background-repeat: no-repeat
		}

		.ui-widget-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%
		}

		.ui-widget {
			font-family: sans-serif;
			font-size: 0.8em
		}

		.ui-widget .ui-widget {
			font-size: 1em
		}

		.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button {
			font-family: sans-serif;
			font-size: 1em
		}

		.ui-widget-content {
			border: 1px solid #cccccc;
			background: #f2f5f7 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAABkEAIAAACY3hF0AAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAiklEQVQoz+3PoQ3CQBSA4T8XDBOgGhTMgqhC1uNQRbMCCzAEDRoUAlAdgDQMgGhy9O7eu2sCE6AJCerTH/GcUn81APDnExaPGPacqFGXin6GLuIjtcgllmmDZNqmCWGly3jEH+Qec/xA5nrDFaHWkm4Xch3SjX0jlXmt2VLxnPpMRljrXAjfbv4Ub+PMQ/ZkpczlAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE0LTA5LTI4VDE3OjIwOjQwLTA3OjAwKGDVKwAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxNC0wOS0yOFQxNzoyMDo0MC0wNzowMFk9bZcAAAAASUVORK5CYII=) 50% top repeat-x;
			background: #f2f5f7 url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-bg_highlight-hard_100_f2f5f7_1x100.png?320d1) 50% top repeat-x !ie;
			color: #362b36
		}

		.ui-widget-header {
			border: 1px solid #aed0ea;
			background: #ffffff url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAABkAQAAAABvV2fNAAAAAmJLR0QAAd2KE6QAAAAJcEhZcwAAAEgAAABIAEbJaz4AAAANSURBVAjXY2hgGBYQAInlMgFqPHoBAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE0LTEwLTEyVDIzOjQ0OjE4LTA3OjAwEuT3bwAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxNC0xMC0xMlQyMzo0NDoxOC0wNzowMGO5T9MAAAAASUVORK5CYII=) 50% 50% repeat-x;
			background: #ffffff url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-bg_highlight-soft_100_ffffff_1x100.png?2750d) 50% 50% repeat-x !ie;
			color: #222222;
			font-weight: bold
		}

		.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
			border: 1px solid #aed0ea;
			background: #d7ebf9 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAABkEAIAAACY3hF0AAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAiUlEQVQoz+3PvQnCUBiG0YdvCwt/JoiNpeIIWcDgCNnEDdRFYhEt01goaXJFEWwuiCAW0XBfJ7BXsDr1wbcfs8YZAPz5gI7ceBljlpxNTil7CwvFFFwG91bTszBRX2sLiSJy00gdMgtDdclwm+vpWZkSInILc8UUppWmbE0HUnaUpfd1/R3bH+ENThY7RWPOsKcAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTQtMTAtMTJUMjM6NDQ6MTctMDc6MDDkrIeGAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE0LTEwLTEyVDIzOjQ0OjE3LTA3OjAwlfE/OgAAAABJRU5ErkJggg==) 50% 50% repeat-x;
			background: #d7ebf9 url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-bg_highlight-hard_80_d7ebf9_1x100.png?7e6bf) 50% 50% repeat-x !ie;
			font-weight: normal;
			color: #2779aa
		}

		.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
			color: #2779aa;
			text-decoration: none
		}

		.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
			border: 1px solid #74b2e2;
			background: #e4f1fb url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAABkEAIAAACY3hF0AAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAqElEQVQoz+WQsQnCYBSEP14jks7WPsEFtFYcw8LCIWydIBa22cAFHEDsBHvBQBIJKIb8Khj9zbMIuoKC1fHdcRwcV+8+LEcCAH8jCQYrOmbBkbMtlmVHqMhsilbpYBq31TMT7REQi3YJiEQ99QlFXXxCwa3IY8pO1P1kGoo6OmFb1SPS06VuZ0JPA2LRAXNS9muT2X41e3ibSds0bY04zvPH49sv/bi8AIZ+VPsYx2M2AAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE0LTEwLTEyVDIzOjQ0OjE4LTA3OjAwEuT3bwAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxNC0xMC0xMlQyMzo0NDoxOC0wNzowMGO5T9MAAAAASUVORK5CYII=) 50% 50% repeat-x;
			background: #e4f1fb url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-bg_highlight-soft_100_e4f1fb_1x100.png?4374d) 50% 50% repeat-x !ie;
			font-weight: normal;
			color: #0070a3
		}

		.ui-state-hover a, .ui-state-hover a:hover, .ui-state-hover a:link, .ui-state-hover a:visited {
			color: #0070a3;
			text-decoration: none
		}

		.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
			border: 1px solid #cccccc;
			background: #f0f0f0 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAABkEAAAAAAy19n/AAAAAmJLR0T//xSrMc0AAAAJcEhZcwAAAEgAAABIAEbJaz4AAAA/SURBVBjTY/jwgWHA0Ucdho9bGT75MHz6xPB5O8OXaoav/gzflBi+PWf4vprhRyLDT3aGn/0MP18x/Pw5gAgAX1+40qw+xBwAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTQtMTAtMTJUMjM6NDQ6MTgtMDc6MDAS5PdvAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE0LTEwLTEyVDIzOjQ0OjE4LTA3OjAwY7lP0wAAAABJRU5ErkJggg==) 50% 50% repeat-x;
			background: #f0f0f0 url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-bg_inset-hard_100_f0f0f0_1x100.png?ac98c) 50% 50% repeat-x !ie;
			font-weight: normal;
			color: #000000
		}

		.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
			color: #000000;
			text-decoration: none
		}

		.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
			border: 1px solid #f9dd34;
			background: #ffef8f url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAABkEAIAAACY3hF0AAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAc0lEQVQoz+WQzQmDYBAFh1fIlz60j8QmcrIQW/BuS4EIehD0IOIx8DysIYIFJJDTMPvYHxZ7Keq7AOCP8KITMLkUMFJ+zAM3Ab2zQC6gC2udAhcBLUnA811MAu/Zwzr37cMGrgcb44hY69mVgJXm+1/6aWwSxTXBL1HtNgAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxNC0wOS0yOFQxODozMDowMi0wNzowMN1LwA0AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTQtMDktMjhUMTg6MzA6MDItMDc6MDCsFnixAAAAAElFTkSuQmCC) 50% top repeat-x;
			background: #ffef8f url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-bg_highlight-soft_25_ffef8f_1x100.png?f26a8) 50% top repeat-x !ie;
			color: #363636
		}

		.ui-state-highlight a, .ui-widget-content .ui-state-highlight a, .ui-widget-header .ui-state-highlight a {
			color: #363636
		}

		.ui-state-error, .ui-widget-content .ui-state-error, .ui-widget-header .ui-state-error {
			border: 1px solid #cd0a0a;
			background: #cd0a0a url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAABkAQMAAADOquA5AAAAA1BMVEXNCgokNzldAAAACXBIWXMAAABIAAAASABGyWs+AAAAD0lEQVQoz2NgGAWjgPoAAAJYAAF1NoZ3AAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE0LTA5LTI4VDE4OjMwOjAyLTA3OjAw3UvADQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxNC0wOS0yOFQxODozMDowMi0wNzowMKwWeLEAAAAASUVORK5CYII=) 50% 50% repeat-x;
			background: #cd0a0a url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-bg_flat_15_cd0a0a_40x100.png?2d088) 50% 50% repeat-x !ie;
			color: #ffffff
		}

		.ui-state-error a, .ui-widget-content .ui-state-error a, .ui-widget-header .ui-state-error a {
			color: #ffffff
		}

		.ui-state-error-text, .ui-widget-content .ui-state-error-text, .ui-widget-header .ui-state-error-text {
			color: #ffffff
		}

		.ui-priority-primary, .ui-widget-content .ui-priority-primary, .ui-widget-header .ui-priority-primary {
			font-weight: bold
		}

		.ui-priority-secondary, .ui-widget-content .ui-priority-secondary, .ui-widget-header .ui-priority-secondary {
			opacity: .7;
			filter: Alpha(Opacity=70);
			font-weight: normal
		}

		.ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .ui-state-disabled {
			opacity: .35;
			filter: Alpha(Opacity=35);
			background-image: none
		}

		.ui-state-disabled .ui-icon {
			filter: Alpha(Opacity=35)
		}

		.ui-icon {
			width: 16px;
			height: 16px
		}

		.ui-icon, .ui-widget-content .ui-icon, .ui-widget-header .ui-icon {
			background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAADwCAMAAADYSUr5AAABDlBMVEVyp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp89yp8/KULUUAAAAWXRSTlMAGRAzBAhQv4KZLyJVcUBmYBoTMswNITwWQkhLIB5aIycxUyyFNIeAw2rIz8Y4RRy8uL58q7WljKqorR+yKf0BnlEk7woGAgOPomKUSqCvbd+cR2M/b3+RaPlAXvEAAAABYktHRACIBR1IAAAACXBIWXMAAABIAAAASABGyWs+AAAPZElEQVR42u1dC2PbthEGyUiq6ZiSXblLE6ex1mTO5iXZq+u6ro3abG26pOkSd13v//+RAXzhcIeHWMoUbeOTLesIEMB9PIB3ACgLERERMQIkkOy6CTvWH0bOQO/mJeDXP8EMqMzDEkIsEBRMAmh7jHSVmuAjAKwC8FRAzi8/DmoS1AI5AQltj5FOryAjgJ7OK2CZkwEZYO23q+BJ5wwKkttfui1z4s20VTAL5k2kF5hbiPcKcwvwNGB4C7CTwproI4CdDcxEPKUTExx+DNiAj0u9C9AuNPxdYOe46Y5QRERERERExIhx6Z7gjv2ghEVrQJ33hJ5BsxsBfsIq8M0HsAkhWfqglFgawAhgGWh2M1xMWAWUAE90qUofMhhi7be32JNsmVFJPKeLwBQglAQMNh3ALVjYbNaI1jaYD0jM0nw9atcWYEXiaXH/+QDeQ3Y6BoRx3e8CERERERERERG7Qz/HP+iaBsvvHXj0LAD4cip0yN27fXw7AGtQoDTwH+HqkWTgWczTwZVmr8DbAEuqv35bCT6CWDorjGnAqwOSCI7EhlFWHjkBXIkb1M/DZQgRwCeAwK9B+HRPFlPBOjeZ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);
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-icons_72a7cf_256x240.png?9f4ba) !ie
		}

		.ui-state-default .ui-icon {
			background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAADwCAMAAADYSUr5AAABDlBMVEU9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLM9gLO2JeAwAAAAWXRSTlMAGRAzBAhQv4KZLyJVcUBmYBoTMswNITwWQkhLIB5aIycxUyyFNIeAw2rIz8Y4RRy8uL58q7WljKqorR+yKf0BnlEk7woGAgOPomKUSqCvbd+cR2M/b3+RaPlAXvEAAAABYktHRACIBR1IAAAACXBIWXMAAABIAAAASABGyWs+AAAPZElEQVR42u1dC2PbthEGyUiq6ZiSXblLE6ex1mTO5iXZq+u6ro3abG26pOkSd13v//+RAXzhcIeHWMoUbeOTLesIEMB9PIB3ACgLERERMQIkkOy6CTvWH0bOQO/mJeDXP8EMqMzDEkIsEBRMAmh7jHSVmuAjAKwC8FRAzi8/DmoS1AI5AQltj5FOryAjgJ7OK2CZkwEZYO23q+BJ5wwKkttfui1z4s20VTAL5k2kF5hbiPcKcwvwNGB4C7CTwproI4CdDcxEPKUTExx+DNiAj0u9C9AuNPxdYOe46Y5QRERERERExIhx6Z7gjv2ghEVrQJ33hJ5BsxsBfsIq8M0HsAkhWfqglFgawAhgGWh2M1xMWAWUAE90qUofMhhi7be32JNsmVFJPKeLwBQglAQMNh3ALVjYbNaI1jaYD0jM0nw9atcWYEXiaXH/+QDeQ3Y6BoRx3e8CERERERERERG7Qz/HP+iaBsvvHXj0LAD4cip0yN27fXw7AGtQoDTwH+HqkWTgWczTwZVmr8DbAEuqv35bCT6CWDorjGnAqwOSCI7EhlFWHjkBXIkb1M/DZQgRwCeAwK9B+HRPFlPBOjeZszKz0wK9/FlzeE3I24GEzUII45bT/SYarqGLesE+btlDBP70QInkckDwggQqAGGt052667vAJZ8fvk1GRERERERE3FT035ba081ILLvR3UXa/NDgUlWg+m4N2KgCfzzP1lYtDUDpAi9ObeDVqczu4ASsy/u8kaxId/2W+JYq4CsbrBcV8SPw8iRvrWWze+IlILA3XFjNzMeAl7/EMt0TmH4wwtkmHG4OsLVzYkEsHLZE4+yRDbFBA+ypVoZJ6fR8iw24T2cEsBbw5pnptIuFCbA3wHkJN0pmAbObAOvaOl+hd14A1gVIFwl2AXsvT5w5GMPezQE8j8XAhFmAYCv0AQLIIEhS2bAUmsGh9VuukT/Z3goHgZsE7wEL4JnHPR+w6+djIiIiIiIiRo3LvYtzR4U8Kms5Y7uORbg46Ja9o/7Aj+Doz3oGZm2j9XKiMc0MTpGt7PgXvroD2G5x03es1iY9T4cHXH1LBmAKCyP69BIC9jL7EuB+vrtM8nw/gG0+w1yvZu31BQfNueA6fesENOGmi4DEEg7zpnviKZ5uW50Gkgr+zLBFChJLC1m4C9hEwduHLaXRCRHvnhUrAbRLbD2804Oamkxg0Zn5fL8lnQi2bo8JYfwECAkR3h/mjA6LTskTI4HoNbQJKDT/4J8/uoa47vpFRERERFxvpFf8RmZxO8C3XEW94V+i/5iWAqzLLKb3lQZXAyElhXpFIUa1GMK2LgsUryhVU0hRMGTGdylUFqDzC+sSOCNwLN0GePRCt9dL/Y3ozCAAKhKMeJaKWN8ExkWAZfmdE5QSmRKA/wpL7IaOJW0XG0sX2MACWH5zx0ZFkMMC6H6Fhu7R6M90ZGMAyWGdoUm1ldAxwLJBZjTmr9tkSPiPY8hH+VO7QmD5pDDgd2V2YIDT0e0i0XugD8kICeiLLvpHRERERNwsZMpPyDbPf2sicWuo1k1l42ZTX473Ap4b7FWukkvFjCZnfj5uiRwgF7dIAeiMfSnuC4dME8XtGuSERiU4KIopcvbKzwYhpVs057ufG3FRa7gw9G1bTGW2srVfpzetnuQwmUA+MRogWDBB99paherA3FZjG6QVRZFWIITMDAIQA6BMdKJr3DMIkEUfSrSuNDQW4FrvrorTBU5gcnT0PmAClsul/wkMgQkQAQL2DQJBqY4OSEISTEjVQJPwYwWXBcAU0B9VcT0GAGqg0eLj8vRjTcDRB/u/Mgi4c+cO2x7vlskBSoDS/0NMgGlSIPUHTlGKpv3gjoLTAg6V6jA91PMAWWn/LQGqfDTFVhWnC5Rd4O5d3AWWQl4C+d6ekJWvX0iA0v/2vQ/dBCTkgDySJIcJCmHg5OTEPQbAoWRA6o8JKH9aAspBEBFwX519/35z4KgaBI+IOugETgB7REMQAj7C8xPzxW35XrgIoBXCgxKowtPTU9AmyiwgO5xO5ZvuAqXsJuC0Qn0gyeGDPF9Bjp8RQl1IHvh1+cL6TigBE0IAGBYw1/p7CGiL+7gEMblJSwC1gOywRHOJmAxqjJ2C0SfzvL0L5E39udMCOAGhLoDTqzGwaDO3BGRmfW1xlR8A7wkHiAWEboNVe+bmHEymb93AFQ4MegtcPT9ACSgZKMT2kGWLEh18Pcah6bqEs0OvaaX9reofERERETFyPHzoT0/BO68NYNv6SJDpcPdReZt61Ih1sN3G2PNanrfnVq7J/sayEL8h7Sm89zUZbR2TQ/K2jfXPMs3ATHmRZ/kUBTuyyfO91pGzUpHp449qV7xhQJ6sQFaaTM8mV67gxnJ1PVoNCuXMpe29PVXczvE1fQzwmOivHKUTrb/yzdvoN7E7Yiich9/K1wFuUCavc4byG2uDNLYQvxPn4vc4vs2lkBuyMOXjyTGSVfsXC1cDoXb2a7kxOGRxsrGLVLuO1YxFG11xAkg4DOLJ/afP7t1H00aZtO8Mt8dLwB/gj/L1J6ygcv2JjIMPGRtPcur7tnLtzKf2+h42IhoHZnCwkBxUwl4zY7PnIqAeBZAFHMCf4aFukNQfTdmFLeAv4hPxVz2ldEos4JRYwCmxgIURe8geUA1SbXxL6vu0kj5tG1gG8zh2ADUGaP3CBDy5/9ED+bLrX3vqmIAUylmnRv4bfCZff0c7Jow+XsrvExmll/1X4oGDgCa6S40GEfsRGOYoD5OpODHiRUJARhgm+rc7IkwCkPz5J3dmd/7xRS0fNsXtbyYvzKsnWBeoZSw+fqxlZfvtfKeVAEGg9gilwj0pCWSS+1HdYH0XUFuMhKtLqO5OivPLgujPA/gU6y+efimHv/mXT1sCZP9PPeczRedsEDUnWdkkP/ED6LQ3kW3fAOOTF1R/ehsU1aYunVyuCNwu2vOBlWAgF1cQRYcA3/CBIiIiIiJ2gCmemFauHJyyPM/1x0veWlguRXjvftCnBSms5fsa35rPALmaH8JXX339NXyBmnOg9C8hP6zuwZMncG/VpJP9Fs10QzPf0Mr0QBu8Ub8ph9l0+sJgwP/lYiEsZFk5ijZBMrCm3viJ9rz+qfAv7Yqup7KABQtu2nSyVEs+1MGrziNdx0wGO3pxsErQwZVyjNfwwrJb9hcSoFwtdIbSvfw1DUAT8M23z59/+41uz1RAscArO5QAY8sIlJNRaMNDKqqpilT72pmaj0EEPFNrdbjCtWLdRQANL7m6JL1a3dMWtS5lrX9q5ofS1vfb01/KpBlyV2FCNmSY55froCgDqMBTxnMCW8B8jver56uVCi81AVJ/gabAKOM0WLCLxMTb9jc2gPSvrmAzBnwG+xLwss1QFMb5cOwn4Eh+PFI/TbIysCmcIAsg0euzZ4fPVnDWFvhCtW62PQKoBXxXys2sXK2/VjBflzgxT9eEyUt6fHxsEFBf2erPicTn8odseFg7x4DVSnUAPAi+mE5nWxwEyRjwXT0G1Awo/QsjHF2p9p7o09cHcIYYUAUdoWGvmbxp9Pv44/qHGIhzDJhmq9UKVpgBehvc9l3gsZqY1e2hodt6PtcTVnIElD+pZgCMP83H/eYAvQ2WFlHCMQbAVAETYLuGfQggSMtr/7jxAyx7BM0RVlrLi1SNlM+b1H8/ScyvdRHlqFFLk0xN6WXNho3ufsDucfTq1RESFweKq/R5yxhtMNs5GREREdELU7w7+vX3aoj5/vWuGzUg3gC8aYUfmlH3h103azDcVererYXX1R1HvWsbWMISn/AfizMjtrfzbFnyv+xf0KZ4owKoxgTeagLetjmI22DzIwpNCVt6oAeoDEt1T196y79E3K0Uvosqp64Ha09KDxTaKAIbN5X8bvLOXJ1l1Q1JgBwBVAj9xqjcbMMcL4xV+uvlxcLU37Z1d5EusH7v5Ns7I8NyhwQUzfUu3AQUpMsDnKc4DetvIyA1TKbcaD4xwmmDgAyWy+Vwnq5W2E0APwfpL3U3BsXeFjDsIFgaQPXQTKnDK03AK5Sp8BeA03uPAcNGa3TQe6rFpzgTOYkwYPDT+y4gxIBD4FIrXLXgohEvsI50DMBSsf3d5zsN1n9U07Lw8sddtmFMsxURERERERGXjAJ84mUDZsSR2egJiT7Y26P6g0e8fAKAUGAQUKalOEMxS9WbkUGFzI08rzK5w9uC+M4FS4ZyhWxAAkwKTAKqtLbN5eWR6tEMBgE4nRNAg0U+GWBuxh2EALwZmBJQTn/UjSz/zHCb6wyYgJlFp7DGhrjN/x+wEQEDWsBGBAxsAcOOARQ7HwMGvgvw+Y4d3wVGgN36ARERERERNxv+58iuO9L/Cvjpc7R3U3opZzfoe3LVc6TwU4GeZ8iLl5YHKBrfhH7/QVd5dFjD/yQBAu1OVqzMGAP0yVK9X7+bPDakcC7ET4U4x09br09kRGs+X6sVmRxP5E+7fRuOzf3sSgZTnqjXZKTubVbvmz/TVyhfgNptf+AgoPxqtOSw+X49SCBJ1IFGPlQv/f17Kl0eSQ5HSkBpARLn+IqrcWFt7E5GBHxRoTXxjvLoMCvvgQu050UGo1M4mToIuHaDYA5wfnaOh/1qOkKHpLDl/3A5NuRv5PV5cyWfmo+IiIiI6A36fEBIppuouspd6+srh0CfDwjJdBtdV7lrfX3l4PWHFq83kelGyq5y1/r6ykHQ5wPe6gIa+UL5hhe1XG2lLdNftTJQWTjT3+r0t876BXjT1Y5Oki5o+wV+3sEH0BVAKzeFiHo1+OICrw6H8vN0ll8vkdvS8eqZ/S8Y7RE///yzMNtTPpG8KQHGB4useu8FaTBuEMsvmEL+/ISAYHtE8+uQV5X+2yNggb6DzkKA7W8XhYL1WyzEZwHq20ZW0IGAcBdQ377VxcRDXQRCBHq7lCD5qSwZWLX5g6DPB1gGtWYQ1IMYHaSAyu5B1TpI0vrpIGumN/y4ZNUHWjmIoW9jfW+jXeUwhnZk+jpSXeUwhnZl+7rSXeWIiIiIiIgID2rH4dLk0YP8/8CwfA0JAD8B5QsrKPwECPpPD8eN6isJwSMTgqB5c8nk39+NHdECbvwYcNPvAhERERERERHbRnJ1PIHgLkjIum90Tcj/BxozEhFo6wYE0Ot9lfTfhgVQfa+U/qYFlNvby5eDgHbtzdTX4FCdfW3HgKyBqT++4pX+V8cG+lpAlf/q6t/XAq68/n3vAg79r+0YEIDW/+rYQNACukDp3fxGRIwc/we0wIqagmy7GAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxMy0wMi0wMVQwNTozMzoxMC0wODowMClgwJIAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTMtMDItMDFUMDU6MzM6MTAtMDg6MDBYPXguAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==);
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-icons_3d80b3_256x240.png?acbd3) !ie
		}

		.ui-state-hover .ui-icon, .ui-state-focus .ui-icon {
			background-image: url(data:image/png;base64,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);
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-icons_2694e8_256x240.png?87423) !ie
		}

		.ui-state-active .ui-icon {
			background-image: url(data:image/png;base64,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);
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-icons_666666_256x240.png?52982) !ie
		}

		.ui-state-highlight .ui-icon {
			background-image: url(data:image/png;base64,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);
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-icons_2e83ff_256x240.png?764c3) !ie
		}

		.ui-state-error .ui-icon, .ui-state-error-text .ui-icon {
			background-image: url(data:image/png;base64,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);
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-icons_ffffff_256x240.png?e3f47) !ie
		}

		.ui-icon-carat-1-n {
			background-position: 0 0
		}

		.ui-icon-carat-1-ne {
			background-position: -16px 0
		}

		.ui-icon-carat-1-e {
			background-position: -32px 0
		}

		.ui-icon-carat-1-se {
			background-position: -48px 0
		}

		.ui-icon-carat-1-s {
			background-position: -64px 0
		}

		.ui-icon-carat-1-sw {
			background-position: -80px 0
		}

		.ui-icon-carat-1-w {
			background-position: -96px 0
		}

		.ui-icon-carat-1-nw {
			background-position: -112px 0
		}

		.ui-icon-carat-2-n-s {
			background-position: -128px 0
		}

		.ui-icon-carat-2-e-w {
			background-position: -144px 0
		}

		.ui-icon-triangle-1-n {
			background-position: 0 -16px
		}

		.ui-icon-triangle-1-ne {
			background-position: -16px -16px
		}

		.ui-icon-triangle-1-e {
			background-position: -32px -16px
		}

		.ui-icon-triangle-1-se {
			background-position: -48px -16px
		}

		.ui-icon-triangle-1-s {
			background-position: -64px -16px
		}

		.ui-icon-triangle-1-sw {
			background-position: -80px -16px
		}

		.ui-icon-triangle-1-w {
			background-position: -96px -16px
		}

		.ui-icon-triangle-1-nw {
			background-position: -112px -16px
		}

		.ui-icon-triangle-2-n-s {
			background-position: -128px -16px
		}

		.ui-icon-triangle-2-e-w {
			background-position: -144px -16px
		}

		.ui-icon-arrow-1-n {
			background-position: 0 -32px
		}

		.ui-icon-arrow-1-ne {
			background-position: -16px -32px
		}

		.ui-icon-arrow-1-e {
			background-position: -32px -32px
		}

		.ui-icon-arrow-1-se {
			background-position: -48px -32px
		}

		.ui-icon-arrow-1-s {
			background-position: -64px -32px
		}

		.ui-icon-arrow-1-sw {
			background-position: -80px -32px
		}

		.ui-icon-arrow-1-w {
			background-position: -96px -32px
		}

		.ui-icon-arrow-1-nw {
			background-position: -112px -32px
		}

		.ui-icon-arrow-2-n-s {
			background-position: -128px -32px
		}

		.ui-icon-arrow-2-ne-sw {
			background-position: -144px -32px
		}

		.ui-icon-arrow-2-e-w {
			background-position: -160px -32px
		}

		.ui-icon-arrow-2-se-nw {
			background-position: -176px -32px
		}

		.ui-icon-arrowstop-1-n {
			background-position: -192px -32px
		}

		.ui-icon-arrowstop-1-e {
			background-position: -208px -32px
		}

		.ui-icon-arrowstop-1-s {
			background-position: -224px -32px
		}

		.ui-icon-arrowstop-1-w {
			background-position: -240px -32px
		}

		.ui-icon-arrowthick-1-n {
			background-position: 0 -48px
		}

		.ui-icon-arrowthick-1-ne {
			background-position: -16px -48px
		}

		.ui-icon-arrowthick-1-e {
			background-position: -32px -48px
		}

		.ui-icon-arrowthick-1-se {
			background-position: -48px -48px
		}

		.ui-icon-arrowthick-1-s {
			background-position: -64px -48px
		}

		.ui-icon-arrowthick-1-sw {
			background-position: -80px -48px
		}

		.ui-icon-arrowthick-1-w {
			background-position: -96px -48px
		}

		.ui-icon-arrowthick-1-nw {
			background-position: -112px -48px
		}

		.ui-icon-arrowthick-2-n-s {
			background-position: -128px -48px
		}

		.ui-icon-arrowthick-2-ne-sw {
			background-position: -144px -48px
		}

		.ui-icon-arrowthick-2-e-w {
			background-position: -160px -48px
		}

		.ui-icon-arrowthick-2-se-nw {
			background-position: -176px -48px
		}

		.ui-icon-arrowthickstop-1-n {
			background-position: -192px -48px
		}

		.ui-icon-arrowthickstop-1-e {
			background-position: -208px -48px
		}

		.ui-icon-arrowthickstop-1-s {
			background-position: -224px -48px
		}

		.ui-icon-arrowthickstop-1-w {
			background-position: -240px -48px
		}

		.ui-icon-arrowreturnthick-1-w {
			background-position: 0 -64px
		}

		.ui-icon-arrowreturnthick-1-n {
			background-position: -16px -64px
		}

		.ui-icon-arrowreturnthick-1-e {
			background-position: -32px -64px
		}

		.ui-icon-arrowreturnthick-1-s {
			background-position: -48px -64px
		}

		.ui-icon-arrowreturn-1-w {
			background-position: -64px -64px
		}

		.ui-icon-arrowreturn-1-n {
			background-position: -80px -64px
		}

		.ui-icon-arrowreturn-1-e {
			background-position: -96px -64px
		}

		.ui-icon-arrowreturn-1-s {
			background-position: -112px -64px
		}

		.ui-icon-arrowrefresh-1-w {
			background-position: -128px -64px
		}

		.ui-icon-arrowrefresh-1-n {
			background-position: -144px -64px
		}

		.ui-icon-arrowrefresh-1-e {
			background-position: -160px -64px
		}

		.ui-icon-arrowrefresh-1-s {
			background-position: -176px -64px
		}

		.ui-icon-arrow-4 {
			background-position: 0 -80px
		}

		.ui-icon-arrow-4-diag {
			background-position: -16px -80px
		}

		.ui-icon-extlink {
			background-position: -32px -80px
		}

		.ui-icon-newwin {
			background-position: -48px -80px
		}

		.ui-icon-refresh {
			background-position: -64px -80px
		}

		.ui-icon-shuffle {
			background-position: -80px -80px
		}

		.ui-icon-transfer-e-w {
			background-position: -96px -80px
		}

		.ui-icon-transferthick-e-w {
			background-position: -112px -80px
		}

		.ui-icon-folder-collapsed {
			background-position: 0 -96px
		}

		.ui-icon-folder-open {
			background-position: -16px -96px
		}

		.ui-icon-document {
			background-position: -32px -96px
		}

		.ui-icon-document-b {
			background-position: -48px -96px
		}

		.ui-icon-note {
			background-position: -64px -96px
		}

		.ui-icon-mail-closed {
			background-position: -80px -96px
		}

		.ui-icon-mail-open {
			background-position: -96px -96px
		}

		.ui-icon-suitcase {
			background-position: -112px -96px
		}

		.ui-icon-comment {
			background-position: -128px -96px
		}

		.ui-icon-person {
			background-position: -144px -96px
		}

		.ui-icon-print {
			background-position: -160px -96px
		}

		.ui-icon-trash {
			background-position: -176px -96px
		}

		.ui-icon-locked {
			background-position: -192px -96px
		}

		.ui-icon-unlocked {
			background-position: -208px -96px
		}

		.ui-icon-bookmark {
			background-position: -224px -96px
		}

		.ui-icon-tag {
			background-position: -240px -96px
		}

		.ui-icon-home {
			background-position: 0 -112px
		}

		.ui-icon-flag {
			background-position: -16px -112px
		}

		.ui-icon-calendar {
			background-position: -32px -112px
		}

		.ui-icon-cart {
			background-position: -48px -112px
		}

		.ui-icon-pencil {
			background-position: -64px -112px
		}

		.ui-icon-clock {
			background-position: -80px -112px
		}

		.ui-icon-disk {
			background-position: -96px -112px
		}

		.ui-icon-calculator {
			background-position: -112px -112px
		}

		.ui-icon-zoomin {
			background-position: -128px -112px
		}

		.ui-icon-zoomout {
			background-position: -144px -112px
		}

		.ui-icon-search {
			background-position: -160px -112px
		}

		.ui-icon-wrench {
			background-position: -176px -112px
		}

		.ui-icon-gear {
			background-position: -192px -112px
		}

		.ui-icon-heart {
			background-position: -208px -112px
		}

		.ui-icon-star {
			background-position: -224px -112px
		}

		.ui-icon-link {
			background-position: -240px -112px
		}

		.ui-icon-cancel {
			background-position: 0 -128px
		}

		.ui-icon-plus {
			background-position: -16px -128px
		}

		.ui-icon-plusthick {
			background-position: -32px -128px
		}

		.ui-icon-minus {
			background-position: -48px -128px
		}

		.ui-icon-minusthick {
			background-position: -64px -128px
		}

		.ui-icon-close {
			background-position: -80px -128px
		}

		.ui-icon-closethick {
			background-position: -96px -128px
		}

		.ui-icon-key {
			background-position: -112px -128px
		}

		.ui-icon-lightbulb {
			background-position: -128px -128px
		}

		.ui-icon-scissors {
			background-position: -144px -128px
		}

		.ui-icon-clipboard {
			background-position: -160px -128px
		}

		.ui-icon-copy {
			background-position: -176px -128px
		}

		.ui-icon-contact {
			background-position: -192px -128px
		}

		.ui-icon-image {
			background-position: -208px -128px
		}

		.ui-icon-video {
			background-position: -224px -128px
		}

		.ui-icon-script {
			background-position: -240px -128px
		}

		.ui-icon-alert {
			background-position: 0 -144px
		}

		.ui-icon-info {
			background-position: -16px -144px
		}

		.ui-icon-notice {
			background-position: -32px -144px
		}

		.ui-icon-help {
			background-position: -48px -144px
		}

		.ui-icon-check {
			background-position: -64px -144px
		}

		.ui-icon-bullet {
			background-position: -80px -144px
		}

		.ui-icon-radio-on {
			background-position: -96px -144px
		}

		.ui-icon-radio-off {
			background-position: -112px -144px
		}

		.ui-icon-pin-w {
			background-position: -128px -144px
		}

		.ui-icon-pin-s {
			background-position: -144px -144px
		}

		.ui-icon-play {
			background-position: 0 -160px
		}

		.ui-icon-pause {
			background-position: -16px -160px
		}

		.ui-icon-seek-next {
			background-position: -32px -160px
		}

		.ui-icon-seek-prev {
			background-position: -48px -160px
		}

		.ui-icon-seek-end {
			background-position: -64px -160px
		}

		.ui-icon-seek-start {
			background-position: -80px -160px
		}

		.ui-icon-seek-first {
			background-position: -80px -160px
		}

		.ui-icon-stop {
			background-position: -96px -160px
		}

		.ui-icon-eject {
			background-position: -112px -160px
		}

		.ui-icon-volume-off {
			background-position: -128px -160px
		}

		.ui-icon-volume-on {
			background-position: -144px -160px
		}

		.ui-icon-power {
			background-position: 0 -176px
		}

		.ui-icon-signal-diag {
			background-position: -16px -176px
		}

		.ui-icon-signal {
			background-position: -32px -176px
		}

		.ui-icon-battery-0 {
			background-position: -48px -176px
		}

		.ui-icon-battery-1 {
			background-position: -64px -176px
		}

		.ui-icon-battery-2 {
			background-position: -80px -176px
		}

		.ui-icon-battery-3 {
			background-position: -96px -176px
		}

		.ui-icon-circle-plus {
			background-position: 0 -192px
		}

		.ui-icon-circle-minus {
			background-position: -16px -192px
		}

		.ui-icon-circle-close {
			background-position: -32px -192px
		}

		.ui-icon-circle-triangle-e {
			background-position: -48px -192px
		}

		.ui-icon-circle-triangle-s {
			background-position: -64px -192px
		}

		.ui-icon-circle-triangle-w {
			background-position: -80px -192px
		}

		.ui-icon-circle-triangle-n {
			background-position: -96px -192px
		}

		.ui-icon-circle-arrow-e {
			background-position: -112px -192px
		}

		.ui-icon-circle-arrow-s {
			background-position: -128px -192px
		}

		.ui-icon-circle-arrow-w {
			background-position: -144px -192px
		}

		.ui-icon-circle-arrow-n {
			background-position: -160px -192px
		}

		.ui-icon-circle-zoomin {
			background-position: -176px -192px
		}

		.ui-icon-circle-zoomout {
			background-position: -192px -192px
		}

		.ui-icon-circle-check {
			background-position: -208px -192px
		}

		.ui-icon-circlesmall-plus {
			background-position: 0 -208px
		}

		.ui-icon-circlesmall-minus {
			background-position: -16px -208px
		}

		.ui-icon-circlesmall-close {
			background-position: -32px -208px
		}

		.ui-icon-squaresmall-plus {
			background-position: -48px -208px
		}

		.ui-icon-squaresmall-minus {
			background-position: -64px -208px
		}

		.ui-icon-squaresmall-close {
			background-position: -80px -208px
		}

		.ui-icon-grip-dotted-vertical {
			background-position: 0 -224px
		}

		.ui-icon-grip-dotted-horizontal {
			background-position: -16px -224px
		}

		.ui-icon-grip-solid-vertical {
			background-position: -32px -224px
		}

		.ui-icon-grip-solid-horizontal {
			background-position: -48px -224px
		}

		.ui-icon-gripsmall-diagonal-se {
			background-position: -64px -224px
		}

		.ui-icon-grip-diagonal-se {
			background-position: -80px -224px
		}

		.ui-corner-all, .ui-corner-top, .ui-corner-left, .ui-corner-tl {
			-moz-border-radius-topleft: 3px;
			-webkit-border-top-left-radius: 3px;
			-khtml-border-top-left-radius: 3px;
			border-top-left-radius: 3px
		}

		.ui-corner-all, .ui-corner-top, .ui-corner-right, .ui-corner-tr {
			-moz-border-radius-topright: 3px;
			-webkit-border-top-right-radius: 3px;
			-khtml-border-top-right-radius: 3px;
			border-top-right-radius: 3px
		}

		.ui-corner-all, .ui-corner-bottom, .ui-corner-left, .ui-corner-bl {
			-moz-border-radius-bottomleft: 3px;
			-webkit-border-bottom-left-radius: 3px;
			-khtml-border-bottom-left-radius: 3px;
			border-bottom-left-radius: 3px
		}

		.ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br {
			-moz-border-radius-bottomright: 3px;
			-webkit-border-bottom-right-radius: 3px;
			-khtml-border-bottom-right-radius: 3px;
			border-bottom-right-radius: 3px
		}

		.ui-widget-overlay {
			background: #000000 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAABkAQAAAADcH0/XAAAAAmJLR0QAAd2KE6QAAAAJcEhZcwAAAEgAAABIAEbJaz4AAAAPSURBVCjPY2AYBaOA+gAAAlgAAXU2hncAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTQtMTItMTJUMDc6NDk6NDctMDg6MDBUsrrOAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE0LTEyLTEyVDA3OjQ5OjQ3LTA4OjAwJe8CcgAAAABJRU5ErkJggg==) 50% 50% repeat-x;
			background: #000000 url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-bg_flat_100_000000_40x100.png?32172) 50% 50% repeat-x !ie;
			opacity: .5;
			filter: Alpha(Opacity=50)
		}

		.ui-widget-shadow {
			margin: -7px 0 0 -7px;
			padding: 7px;
			background: #000000 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAABkAQAAAADcH0/XAAAAAmJLR0QAAd2KE6QAAAAJcEhZcwAAAEgAAABIAEbJaz4AAAAPSURBVCjPY2AYBaOA+gAAAlgAAXU2hncAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTQtMTAtMTJUMjM6NDQ6MTgtMDc6MDAS5PdvAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE0LTEwLTEyVDIzOjQ0OjE4LTA3OjAwY7lP0wAAAABJRU5ErkJggg==) 50% 50% repeat-x;
			background: #000000 url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-bg_flat_70_000000_40x100.png?65011) 50% 50% repeat-x !ie;
			opacity: .2;
			filter: Alpha(Opacity=20);
			-moz-border-radius: 8px;
			-khtml-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px
		}

		.mw-ui-vform {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			width: 290px
		}

		.mw-ui-vform select, .mw-ui-vform .mw-ui-button {
			display: block;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			margin: 0;
			width: 100%
		}

		.mw-ui-vform select {
			padding: 0.35em 0.5em 0.35em 0.5em;
			vertical-align: middle
		}

		.mw-ui-vform > label {
			display: block;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			font-size: 0.9em;
			color: #222222;
			width: auto;
			margin: 0 0 0.2em;
			padding: 0
		}

		.mw-ui-vform > label * {
			font-weight: normal
		}

		.mw-ui-vform input[type="radio"] {
			display: inline;
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box;
			width: auto
		}

		.mw-ui-vform .error, .mw-ui-vform .errorbox, .mw-ui-vform .warningbox, .mw-ui-vform .successbox {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			font-size: 0.9em;
			margin: 0 0 1em 0;
			padding: 0.5em;
			word-wrap: break-word
		}

		.mw-ui-vform .error {
			color: #cc0000;
			border: 1px solid #fac5c5;
			background-color: #fae3e3;
			text-shadow: 0 1px #fae3e3
		}

		.mw-ui-vform .mw-ui-vform-field .error {
			display: block;
			margin-top: 5px
		}

		.mw-ui-vform-field {
			display: block;
			margin: 0 0 15px;
			padding: 0;
			width: 100%
		}

		.mw-ui-label {
			font-size: 0.9em;
			color: #222222
		}

		.mw-ui-label * {
			font-weight: normal
		}

		.mw-ui-radio-label {
			margin-bottom: 0.5em;
			cursor: pointer;
			vertical-align: bottom;
			line-height: normal;
			font-weight: normal
		}

		.mw-ui-radio-label > input[type="checkbox"], .mw-ui-radio-label > input[type="radio"] {
			width: auto;
			height: auto;
			margin: 0 0.1em 0 0;
			padding: 0;
			border: 1px solid #cccccc;
			cursor: pointer
		}

		.mw-ui-flush-left {
			float: left;
			margin-left: 0;
			padding-left: 0
		}

		.mw-ui-flush-right {
			float: right;
			padding-right: 0;
			margin-right: 0
		}

		.mw-ui-center-block {
			display: block;
			margin-left: auto;
			margin-right: auto
		}

		.chzn-container {
			font-size: 13px;
			position: relative;
			display: inline-block;
			vertical-align: middle;
			zoom: 1;
			*display: inline
		}

		.chzn-container .chzn-drop {
			background: #fff;
			border: 1px solid #aaa;
			border-top: 0;
			position: absolute;
			top: 100%;
			left: -9999px;
			-webkit-box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
			-moz-box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
			box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
			z-index: 1010;
			width: 100%;
			-moz-box-sizing: border-box;
			-ms-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-khtml-box-sizing: border-box;
			box-sizing: border-box
		}

		.chzn-container.chzn-with-drop .chzn-drop {
			left: 0
		}

		.chzn-container-single .chzn-single {
			background-color: #ffffff;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0);
			background-image: -webkit-gradient(linear, 0 0, 0 100%, color-stop(20%, #ffffff), color-stop(50%, #f6f6f6), color-stop(52%, #eeeeee), color-stop(100%, #f4f4f4));
			background-image: -webkit-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
			background-image: -moz-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
			background-image: -o-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
			background-image: linear-gradient(#ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-moz-background-clip: padding;
			-webkit-background-clip: padding-box;
			background-clip: padding-box;
			border: 1px solid #aaaaaa;
			-webkit-box-shadow: 0 0 3px #ffffff inset, 0 1px 1px rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 0 0 3px #ffffff inset, 0 1px 1px rgba(0, 0, 0, 0.1);
			box-shadow: 0 0 3px #ffffff inset, 0 1px 1px rgba(0, 0, 0, 0.1);
			display: block;
			overflow: hidden;
			white-space: nowrap;
			position: relative;
			height: 23px;
			line-height: 24px;
			padding: 0 0 0 8px;
			color: #444444;
			text-decoration: none
		}

		.chzn-container-single .chzn-default {
			color: #999
		}

		.chzn-container-single .chzn-single span {
			margin-right: 26px;
			display: block;
			overflow: hidden;
			white-space: nowrap;
			-o-text-overflow: ellipsis;
			-ms-text-overflow: ellipsis;
			text-overflow: ellipsis
		}

		.chzn-container-single .chzn-single abbr {
			display: block;
			position: absolute;
			right: 26px;
			top: 6px;
			width: 12px;
			height: 12px;
			font-size: 1px;
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) -42px 1px no-repeat
		}

		.chzn-container-single .chzn-single abbr:hover {
			background-position: -42px -10px
		}

		.chzn-container-single.chzn-disabled .chzn-single abbr:hover {
			background-position: -42px -10px
		}

		.chzn-container-single .chzn-single div {
			position: absolute;
			right: 0;
			top: 0;
			display: block;
			height: 100%;
			width: 18px
		}

		.chzn-container-single .chzn-single div b {
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat 0px 2px;
			display: block;
			width: 100%;
			height: 100%
		}

		.chzn-container-single .chzn-search {
			padding: 3px 4px;
			position: relative;
			margin: 0;
			white-space: nowrap;
			z-index: 1010
		}

		.chzn-container-single .chzn-search input {
			background: #fff url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat 100% -20px;
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat 100% -20px, -webkit-gradient(linear, 0 0, 0 100%, color-stop(1%, #eeeeee), color-stop(15%, #ffffff));
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat 100% -20px, -webkit-linear-gradient(top, #eeeeee 1%, #ffffff 15%);
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat 100% -20px, -moz-linear-gradient(top, #eeeeee 1%, #ffffff 15%);
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat 100% -20px, -o-linear-gradient(top, #eeeeee 1%, #ffffff 15%);
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat 100% -20px, linear-gradient(#eeeeee 1%, #ffffff 15%);
			margin: 1px 0;
			padding: 4px 20px 4px 5px;
			outline: 0;
			border: 1px solid #aaa;
			font-family: sans-serif;
			font-size: 1em;
			width: 100%;
			-moz-box-sizing: border-box;
			-ms-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-khtml-box-sizing: border-box;
			box-sizing: border-box
		}

		.chzn-container-single .chzn-drop {
			margin-top: -1px;
			-webkit-border-radius: 0 0 4px 4px;
			-moz-border-radius: 0 0 4px 4px;
			border-radius: 0 0 4px 4px;
			-moz-background-clip: padding;
			-webkit-background-clip: padding-box;
			background-clip: padding-box
		}

		.chzn-container-single-nosearch .chzn-search {
			position: absolute;
			left: -9999px
		}

		.chzn-container-multi .chzn-choices {
			background-color: #fff;
			background-image: -webkit-gradient(linear, 0 0, 0 100%, color-stop(1%, #eeeeee), color-stop(15%, #ffffff));
			background-image: -webkit-linear-gradient(top, #eeeeee 1%, #ffffff 15%);
			background-image: -moz-linear-gradient(top, #eeeeee 1%, #ffffff 15%);
			background-image: -o-linear-gradient(top, #eeeeee 1%, #ffffff 15%);
			background-image: linear-gradient(#eeeeee 1%, #ffffff 15%);
			border: 1px solid #aaa;
			margin: 0;
			padding: 0;
			cursor: text;
			overflow: hidden;
			height: auto !important;
			height: 1%;
			position: relative;
			width: 100%;
			-moz-box-sizing: border-box;
			-ms-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-khtml-box-sizing: border-box;
			box-sizing: border-box
		}

		.chzn-container-multi .chzn-choices li {
			float: left;
			list-style: none
		}

		.chzn-container-multi .chzn-choices .search-field {
			white-space: nowrap;
			margin: 0;
			padding: 0
		}

		.chzn-container-multi .chzn-choices .search-field input {
			color: #666;
			background: transparent !important;
			border: 0 !important;
			font-family: sans-serif;
			font-size: 100%;
			height: 15px;
			padding: 5px;
			margin: 1px 0;
			outline: 0;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none
		}

		.chzn-container-multi .chzn-choices .search-field .default {
			color: #999
		}

		.chzn-container-multi .chzn-choices .search-choice {
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
			-moz-background-clip: padding;
			-webkit-background-clip: padding-box;
			background-clip: padding-box;
			background-color: #e4e4e4;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4f4f4', endColorstr='#eeeeee', GradientType=0);
			background-image: -webkit-gradient(linear, 0 0, 0 100%, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), color-stop(100%, #eeeeee));
			background-image: -webkit-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
			background-image: -moz-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
			background-image: -o-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
			background-image: linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
			-webkit-box-shadow: 0 0 2px #ffffff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 0 2px #ffffff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
			box-shadow: 0 0 2px #ffffff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
			color: #333;
			border: 1px solid #aaaaaa;
			line-height: 13px;
			padding: 3px 20px 3px 5px;
			margin: 3px 0 3px 5px;
			position: relative;
			cursor: default
		}

		.chzn-container-multi .chzn-choices .search-choice.search-choice-disabled {
			background-color: #e4e4e4;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4f4f4', endColorstr='#eeeeee', GradientType=0);
			background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), color-stop(100%, #eeeeee));
			background-image: -webkit-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
			background-image: -moz-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
			background-image: -o-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
			background-image: -ms-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
			background-image: linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
			color: #666;
			border: 1px solid #cccccc;
			padding-right: 5px
		}

		.chzn-container-multi .chzn-choices .search-choice-focus {
			background: #d4d4d4
		}

		.chzn-container-multi .chzn-choices .search-choice .search-choice-close {
			display: block;
			position: absolute;
			right: 3px;
			top: 4px;
			width: 12px;
			height: 12px;
			font-size: 1px;
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) -42px 1px no-repeat
		}

		.chzn-container-multi .chzn-choices .search-choice .search-choice-close:hover {
			background-position: -42px -10px
		}

		.chzn-container-multi .chzn-choices .search-choice-focus .search-choice-close {
			background-position: -42px -10px
		}

		.chzn-container .chzn-results {
			margin: 0 4px 4px 0;
			max-height: 240px;
			padding: 0 0 0 4px;
			position: relative;
			overflow-x: hidden;
			overflow-y: auto;
			-webkit-overflow-scrolling: touch
		}

		.chzn-container-multi .chzn-results {
			margin: 0;
			padding: 0
		}

		.chzn-container .chzn-results li {
			display: none;
			line-height: 15px;
			padding: 5px 6px;
			margin: 0;
			list-style: none
		}

		.chzn-container .chzn-results .active-result {
			cursor: pointer;
			display: list-item
		}

		.chzn-container .chzn-results .highlighted {
			background-color: #3875d7;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3875d7', endColorstr='#2a62bc', GradientType=0);
			background-image: -webkit-gradient(linear, 0 0, 0 100%, color-stop(20%, #3875d7), color-stop(90%, #2a62bc));
			background-image: -webkit-linear-gradient(top, #3875d7 20%, #2a62bc 90%);
			background-image: -moz-linear-gradient(top, #3875d7 20%, #2a62bc 90%);
			background-image: -o-linear-gradient(top, #3875d7 20%, #2a62bc 90%);
			background-image: linear-gradient(#3875d7 20%, #2a62bc 90%);
			color: #fff
		}

		.chzn-container .chzn-results li em {
			background: #feffde;
			font-style: normal
		}

		.chzn-container .chzn-results .highlighted em {
			background: transparent
		}

		.chzn-container .chzn-results .no-results {
			background: #f4f4f4;
			display: list-item
		}

		.chzn-container .chzn-results .group-result {
			cursor: default;
			color: #999;
			font-weight: bold
		}

		.chzn-container .chzn-results .group-option {
			padding-left: 15px
		}

		.chzn-container-multi .chzn-drop .result-selected {
			display: none
		}

		.chzn-container .chzn-results-scroll {
			background: white;
			margin: 0 4px;
			position: absolute;
			text-align: center;
			width: 321px;
			z-index: 1
		}

		.chzn-container .chzn-results-scroll span {
			display: inline-block;
			height: 17px;
			text-indent: -5000px;
			width: 9px
		}

		.chzn-container .chzn-results-scroll-down {
			bottom: 0
		}

		.chzn-container .chzn-results-scroll-down span {
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat -4px -3px
		}

		.chzn-container .chzn-results-scroll-up span {
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat -22px -3px
		}

		.chzn-container-active .chzn-single {
			-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, .3);
			-moz-box-shadow: 0 0 5px rgba(0, 0, 0, .3);
			box-shadow: 0 0 5px rgba(0, 0, 0, .3);
			border: 1px solid #5897fb
		}

		.chzn-container-active.chzn-with-drop .chzn-single {
			border: 1px solid #aaa;
			-webkit-box-shadow: 0 1px 0 #fff inset;
			-moz-box-shadow: 0 1px 0 #fff inset;
			box-shadow: 0 1px 0 #fff inset;
			background-color: #eee;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#ffffff', GradientType=0);
			background-image: -webkit-gradient(linear, 0 0, 0 100%, color-stop(20%, #eeeeee), color-stop(80%, #ffffff));
			background-image: -webkit-linear-gradient(top, #eeeeee 20%, #ffffff 80%);
			background-image: -moz-linear-gradient(top, #eeeeee 20%, #ffffff 80%);
			background-image: -o-linear-gradient(top, #eeeeee 20%, #ffffff 80%);
			background-image: linear-gradient(#eeeeee 20%, #ffffff 80%);
			-webkit-border-bottom-left-radius: 0;
			-webkit-border-bottom-right-radius: 0;
			-moz-border-radius-bottomleft: 0;
			-moz-border-radius-bottomright: 0;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0
		}

		.chzn-container-active.chzn-with-drop .chzn-single div {
			background: transparent;
			border-left: none
		}

		.chzn-container-active.chzn-with-drop .chzn-single div b {
			background-position: -18px 2px
		}

		.chzn-container-active .chzn-choices {
			-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, .3);
			-moz-box-shadow: 0 0 5px rgba(0, 0, 0, .3);
			box-shadow: 0 0 5px rgba(0, 0, 0, .3);
			border: 1px solid #5897fb
		}

		.chzn-container-active .chzn-choices .search-field input {
			color: #111 !important
		}

		.chzn-disabled {
			cursor: default;
			opacity: 0.5 !important
		}

		.chzn-disabled .chzn-single {
			cursor: default
		}

		.chzn-disabled .chzn-choices .search-choice .search-choice-close {
			cursor: default
		}

		.chzn-rtl {
			text-align: right
		}

		.chzn-rtl .chzn-single {
			padding: 0 8px 0 0;
			overflow: visible
		}

		.chzn-rtl .chzn-single span {
			margin-left: 26px;
			margin-right: 0;
			direction: rtl
		}

		.chzn-rtl .chzn-single div {
			left: 3px;
			right: auto
		}

		.chzn-rtl .chzn-single abbr {
			left: 26px;
			right: auto
		}

		.chzn-rtl .chzn-choices .search-field input {
			direction: rtl
		}

		.chzn-rtl .chzn-choices li {
			float: right
		}

		.chzn-rtl .chzn-choices .search-choice {
			padding: 3px 5px 3px 19px;
			margin: 3px 5px 3px 0
		}

		.chzn-rtl .chzn-choices .search-choice .search-choice-close {
			left: 4px;
			right: auto
		}

		.chzn-rtl .chzn-search {
			left: 9999px
		}

		.chzn-rtl.chzn-with-drop .chzn-search {
			left: 0px
		}

		.chzn-rtl .chzn-drop {
			left: 9999px
		}

		.chzn-rtl.chzn-container-single .chzn-results {
			margin: 0 0 4px 4px;
			padding: 0 4px 0 0
		}

		.chzn-rtl .chzn-results .group-option {
			padding-left: 0;
			padding-right: 15px
		}

		.chzn-rtl.chzn-container-active.chzn-with-drop .chzn-single div {
			border-right: none
		}

		.chzn-rtl .chzn-search input {
			background: #fff url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat -30px -20px;
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat -30px -20px, -webkit-gradient(linear, 0 0, 0 100%, color-stop(1%, #eeeeee), color-stop(15%, #ffffff));
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat -30px -20px, -webkit-linear-gradient(top, #eeeeee 1%, #ffffff 15%);
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat -30px -20px, -moz-linear-gradient(top, #eeeeee 1%, #ffffff 15%);
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat -30px -20px, -o-linear-gradient(top, #eeeeee 1%, #ffffff 15%);
			background: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite.png?25b9a) no-repeat -30px -20px, linear-gradient(#eeeeee 1%, #ffffff 15%);
			padding: 4px 5px 4px 20px;
			direction: rtl
		}

		.chzn-container-single.chzn-rtl .chzn-single div b {
			background-position: 6px 2px
		}

		.chzn-container-single.chzn-rtl.chzn-with-drop .chzn-single div b {
			background-position: -12px 2px
		}

		@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-resolution: 144dpi) {
			.chzn-rtl .chzn-search input, .chzn-container-single .chzn-single abbr, .chzn-container-single .chzn-single div b, .chzn-container-single .chzn-search input, .chzn-container-multi .chzn-choices .search-choice .search-choice-close, .chzn-container .chzn-results-scroll-down span, .chzn-container .chzn-results-scroll-up span {
				background-image: url(//meta.wikimedia.org/static/1.26wmf24/resources/lib/jquery.chosen/chosen-sprite@2x.png?be3e1) !important;
				background-repeat: no-repeat !important;
				background-size: 52px 37px !important
			}
		}</style>
	<style>
		.ui-button {
			display: inline-block;
			position: relative;
			padding: 0;
			line-height: normal;
			margin-right: .1em;
			cursor: pointer;
			vertical-align: middle;
			text-align: center;
			overflow: visible;
		}

		.ui-button, .ui-button:link, .ui-button:visited, .ui-button:hover, .ui-button:active {
			text-decoration: none
		}

		.ui-button-icon-only {
			width: 2.2em
		}

		button.ui-button-icon-only {
			width: 2.4em
		}

		.ui-button-icons-only {
			width: 3.4em
		}

		button.ui-button-icons-only {
			width: 3.7em
		}

		.ui-button .ui-button-text {
			display: block;
			line-height: normal
		}

		.ui-button-text-only .ui-button-text {
			padding: .4em 1em
		}

		.ui-button-icon-only .ui-button-text, .ui-button-icons-only .ui-button-text {
			padding: .4em;
			text-indent: -9999999px
		}

		.ui-button-text-icon-primary .ui-button-text, .ui-button-text-icons .ui-button-text {
			padding: .4em 1em .4em 2.1em
		}

		.ui-button-text-icon-secondary .ui-button-text, .ui-button-text-icons .ui-button-text {
			padding: .4em 2.1em .4em 1em
		}

		.ui-button-text-icons .ui-button-text {
			padding-left: 2.1em;
			padding-right: 2.1em
		}

		input.ui-button {
			padding: .4em 1em
		}

		.ui-button-icon-only .ui-icon, .ui-button-text-icon-primary .ui-icon, .ui-button-text-icon-secondary .ui-icon, .ui-button-text-icons .ui-icon, .ui-button-icons-only .ui-icon {
			position: absolute;
			top: 50%;
			margin-top: -8px
		}

		.ui-button-icon-only .ui-icon {
			left: 50%;
			margin-left: -8px
		}

		.ui-button-text-icon-primary .ui-button-icon-primary, .ui-button-text-icons .ui-button-icon-primary, .ui-button-icons-only .ui-button-icon-primary {
			left: .5em
		}

		.ui-button-text-icon-secondary .ui-button-icon-secondary, .ui-button-text-icons .ui-button-icon-secondary, .ui-button-icons-only .ui-button-icon-secondary {
			right: .5em
		}

		.ui-buttonset {
			margin-right: 7px
		}

		.ui-buttonset .ui-button {
			margin-left: 0;
			margin-right: -.3em
		}

		input.ui-button::-moz-focus-inner, button.ui-button::-moz-focus-inner {
			border: 0;
			padding: 0
		}

		body button.ui-button::-moz-focus-inner {
			border: 0
		}

		body .ui-button-large {
			padding: 5px
		}

		.ui-button-green .ui-icon, .ui-button-blue .ui-icon, .ui-button-red .ui-icon, .ui-button-orange .ui-icon {
			background-image: url(data:image/png;base64,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) !important;
			background-image: url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/ui-icons_ffffff_256x240.png?e3f47) !important !ie
		}

		.ui-button.ui-corner-all, .ui-button.ui-corner-top, .ui-button.ui-corner-left, .ui-button.ui-corner-tl {
			border-top-left-radius: 4px
		}

		.ui-button.ui-corner-all, .ui-button.ui-corner-top, .ui-button.ui-corner-right, .ui-button.ui-corner-tr {
			border-top-right-radius: 4px
		}

		.ui-button.ui-corner-all, .ui-button.ui-corner-bottom, .ui-button.ui-corner-left, .ui-button.ui-corner-bl {
			border-bottom-left-radius: 4px
		}

		.ui-button.ui-corner-all, .ui-button.ui-corner-bottom, .ui-button.ui-corner-right, .ui-button.ui-corner-br {
			border-bottom-right-radius: 4px
		}

		body .ui-button {
			color: #2779aa;
			margin: 0.5em 0 0.5em 0.4em;
			border: 1px solid #aaa !important;
			background: #f0f0f0 !important;
			background: -moz-linear-gradient(top, #fff 0%, #ddd 90%) !important;
			background: -webkit-linear-gradient(top, #fff 0%, #ddd 90%) !important;
			background: -o-linear-gradient(top, #fff 0%, #ddd 90%) !important;
			background: linear-gradient(to bottom, #fff 0%, #ddd 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dddddd', GradientType=0);
			cursor: pointer;
			font-size: 1em;
			line-height: 1.4em;
			width: auto;
			overflow: visible;
			box-shadow: 0 1px 3px rgba(0, 0, 0, .2)
		}

		body .ui-button-icon-only {
			width: 2.2em
		}

		body .ui-button-icons-only {
			width: 3.4em
		}

		body .ui-button:hover {
			color: #2779aa;
			border-color: #bbb !important;
			background: #fff !important;
			background: -moz-linear-gradient(top, #fff 0%, #eee 90%) !important;
			background: -webkit-linear-gradient(top, #fff 0%, #eee 90%) !important;
			background: -o-linear-gradient(top, #fff 0%, #eee 90%) !important;
			background: linear-gradient(to bottom, #fff 0%, #eee 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .1)
		}

		body .ui-button:active, body .ui-button:focus {
			border-color: #8ad !important;
			box-shadow: 0 0 1px 1px rgba(167, 215, 249, .5)
		}

		body .ui-button:active {
			background: #e0e0e0 !important;
			background: -moz-linear-gradient(top, #f0f0f0 0%, #d0d0d0 90%) !important;
			background: -webkit-linear-gradient(top, #f0f0f0 0%, #d0d0d0 90%) !important;
			background: -o-linear-gradient(top, #f0f0f0 0%, #d0d0d0 90%) !important;
			background: linear-gradient(to bottom, #f0f0f0 0%, #d0d0d0 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f0f0f0', endColorstr='#d0d0d0', GradientType=0);
		}

		body .ui-button-green, body .ui-button-green .ui-button-text {
			color: white;
			text-shadow: 0 -1px 1px #072
		}

		body .ui-button.ui-button-green {
			border-color: #294 !important;
			background: #295 !important;
			background: -moz-linear-gradient(top, #3c8 0%, #295 90%) !important;
			background: -webkit-linear-gradient(top, #3c8 0%, #295 90%) !important;
			background: -o-linear-gradient(top, #3c8 0%, #295 90%) !important;
			background: linear-gradient(to bottom, #3c8 0%, #295 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#33cc88', endColorstr='#229955', GradientType=0);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .3)
		}

		body .ui-button.ui-button-green:hover {
			background: #33a055 !important;
			background: -moz-linear-gradient(top, #44d388 0%, #33a055 90%) !important;
			background: -webkit-linear-gradient(top, #44d388 0%, #33a055 90%) !important;
			background: -o-linear-gradient(top, #44d388 0%, #33a055 90%) !important;
			background: linear-gradient(to bottom, #44d388 0%, #33a055 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#44d388', endColorstr='#33a055', GradientType=0);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .25)
		}

		body .ui-button.ui-button-green:active, body .ui-button.ui-button-green:focus {
			border-color: #172 !important;
			box-shadow: 0 0 2px 2px rgba(167, 215, 249, .75)
		}

		body .ui-button.ui-button-green:active {
			background: #338855 !important;
			background: -moz-linear-gradient(top, #30c080 0%, #338855 90%) !important;
			background: -webkit-linear-gradient(top, #30c080 0%, #338855 90%) !important;
			background: -o-linear-gradient(top, #30c080 0%, #338855 90%) !important;
			background: linear-gradient(to bottom, #30c080 0%, #338855 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#30c080', endColorstr='#338855', GradientType=0);
		}

		body .ui-button-blue, body .ui-button-blue .ui-button-text {
			color: white;
			text-shadow: 0 -1px 1px #037
		}

		body .ui-button.ui-button-blue {
			border-color: #468 !important;
			background: #36b !important;
			background: -moz-linear-gradient(top, #48e 0%, #36b 90%) !important;
			background: -webkit-linear-gradient(top, #48e 0%, #36b 90%) !important;
			background: -o-linear-gradient(top, #48e 0%, #36b 90%) !important;
			background: linear-gradient(to bottom, #48e 0%, #36b 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4488ee', endColorstr='#3366bb', GradientType=0);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .35)
		}

		body .ui-button.ui-button-blue:hover {
			background: #36c !important;
			background: -moz-linear-gradient(top, #59e 0%, #36c 90%) !important;
			background: -webkit-linear-gradient(top, #59e 0%, #36c 90%) !important;
			background: -o-linear-gradient(top, #59e 0%, #36c 90%) !important;
			background: linear-gradient(to bottom, #59e 0%, #36c 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5599ee', endColorstr='#3366cc', GradientType=0);
		}

		body .ui-button.ui-button-blue:active, body .ui-button.ui-button-blue:focus {
			border-color: #357 !important;
			box-shadow: 0 0 2px 2px rgba(167, 215, 249, .75)
		}

		body .ui-button.ui-button-blue:active {
			background: #3060a0 !important;
			background: -moz-linear-gradient(top, #4080e0 0%, #3060a0 90%) !important;
			background: -webkit-linear-gradient(top, #4080e0 0%, #3060a0 90%) !important;
			background: -o-linear-gradient(top, #4080e0 0%, #3060a0 90%) !important;
			background: linear-gradient(to bottom, #4080e0 0%, #3060a0 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4080e0', endColorstr='#3060a0', GradientType=0);
		}

		body .ui-button-red, body .ui-button-red .ui-button-text {
			color: white;
			text-shadow: 0 -1px 1px #700
		}

		body .ui-button.ui-button-red {
			border-color: #944 !important;
			background: #a22 !important;
			background: -moz-linear-gradient(top, #d44 0%, #a22 90%) !important;
			background: -webkit-linear-gradient(top, #d44 0%, #a22 90%) !important;
			background: -o-linear-gradient(top, #d44 0%, #a22 90%) !important;
			background: linear-gradient(to bottom, #d44 0%, #a22 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#dd4444', endColorstr='#aa2222', GradientType=0);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .35)
		}

		body .ui-button.ui-button-red:hover {
			border-color: #a44 !important;
			background: #b03333 !important;
			background: -moz-linear-gradient(top, #ee4646 0%, #b03333 90%) !important;
			background: -webkit-linear-gradient(top, #ee4646 0%, #b03333 90%) !important;
			background: -o-linear-gradient(top, #ee4646 0%, #b03333 90%) !important;
			background: linear-gradient(to bottom, #ee4646 0%, #b03333 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ee4646', endColorstr='#b03333', GradientType=0);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .3)
		}

		body .ui-button.ui-button-red:active, body .ui-button.ui-button-red:focus {
			border-color: #747 !important;
			box-shadow: 0 0 2px 2px rgba(167, 215, 249, .7)
		}

		body .ui-button.ui-button-red:active {
			background: #952020 !important;
			background: -moz-linear-gradient(top, #d04545 0%, #952020 90%) !important;
			background: -webkit-linear-gradient(top, #d04545 0%, #952020 90%) !important;
			background: -o-linear-gradient(top, #d04545 0%, #952020 90%) !important;
			background: linear-gradient(to bottom, #d04545 0%, #952020 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#d04545', endColorstr='#952020', GradientType=0);
		}

		body .ui-button-green.disabled, body .ui-button-green.disabled:hover, body .ui-button-green.disabled:active, body .ui-button-green.disabled:focus, body .ui-button-blue.disabled, body .ui-button-blue.disabled:hover, body .ui-button-blue.disabled:active, body .ui-button-blue.disabled:focus, body .ui-button-red.disabled, body .ui-button-red.disabled:hover, body .ui-button-red.disabled:active, body .ui-button-red.disabled:focus, body .ui-button.disabled, body .ui-button.disabled:hover {
			color: #aaa;
			border-color: #ccc !important;
			background: #eee !important;
			background: -moz-linear-gradient(top, #f6f6f6 0%, #eee 90%) !important;
			background: -webkit-linear-gradient(top, #f6f6f6 0%, #eee 90%) !important;
			background: -o-linear-gradient(top, #f6f6f6 0%, #eee 90%) !important;
			background: linear-gradient(to bottom, #f6f6f6 0%, #eee 90%) !important;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#eeeeee', GradientType=0);
			box-shadow: 0 1px 3px rgba(0, 0, 0, 0)
		}

		body .ui-button-green.disabled .ui-button-text, body .ui-button-blue.disabled .ui-button-text, body .ui-button-red.disabled .ui-button-text {
			color: #aaa;
			text-shadow: 0 1px 1px #fff
		}

		.ui-resizable {
			position: relative
		}

		.ui-resizable-handle {
			position: absolute;
			font-size: 0.1px;
			display: block
		}

		.ui-resizable-disabled .ui-resizable-handle, .ui-resizable-autohide .ui-resizable-handle {
			display: none
		}

		.ui-resizable-n {
			cursor: n-resize;
			height: 7px;
			width: 100%;
			top: -5px;
			left: 0
		}

		.ui-resizable-s {
			cursor: s-resize;
			height: 7px;
			width: 100%;
			bottom: -5px;
			left: 0
		}

		.ui-resizable-e {
			cursor: e-resize;
			width: 7px;
			right: -5px;
			top: 0;
			height: 100%
		}

		.ui-resizable-w {
			cursor: w-resize;
			width: 7px;
			left: -5px;
			top: 0;
			height: 100%
		}

		.ui-resizable-se {
			cursor: se-resize;
			width: 12px;
			height: 12px;
			right: 1px;
			bottom: 1px
		}

		.ui-resizable-sw {
			cursor: sw-resize;
			width: 9px;
			height: 9px;
			left: -5px;
			bottom: -5px
		}

		.ui-resizable-nw {
			cursor: nw-resize;
			width: 9px;
			height: 9px;
			left: -5px;
			top: -5px
		}

		.ui-resizable-ne {
			cursor: ne-resize;
			width: 9px;
			height: 9px;
			right: -5px;
			top: -5px
		}</style>
	<style>
		.wp-teahouse-question-form {
			position: absolute;
			margin-left: auto;
			margin-right: auto;
			background-color: #f4f3f0;
			border: 1px solid #a7d7f9;
			padding: 1em
		}

		#wp-th-question-ask {
			float: right
		}

		.wp-teahouse-ask a.external {
			background-image: none !important
		}

		.wp-teahouse-respond-form {
			position: absolute;
			margin-left: auto;
			margin-right: auto;
			background-color: #f4f3f0;
			border: 1px solid #a7d7f9;
			padding: 1em
		}

		.wp-th-respond {
			float: right
		}

		.wp-teahouse-respond a.external {
			background-image: none !important
		}

		.ui-dialog {
			position: absolute;
			top: 0;
			left: 0;
			padding: .2em;
			width: 300px;
			overflow: hidden
		}

		.ui-dialog .ui-dialog-titlebar {
			padding: .4em 1em;
			position: relative
		}

		.ui-dialog .ui-dialog-title {
			float: left;
			margin: .1em 16px .1em 0
		}

		.ui-dialog .ui-dialog-titlebar-close {
			position: absolute;
			right: .3em;
			top: 50%;
			width: 19px;
			margin: -10px 0 0 0;
			padding: 1px;
			height: 18px
		}

		.ui-dialog .ui-dialog-titlebar-close span {
			display: block;
			margin: 1px
		}

		.ui-dialog .ui-dialog-titlebar-close:hover, .ui-dialog .ui-dialog-titlebar-close:focus {
			padding: 0
		}

		.ui-dialog .ui-dialog-content {
			position: relative;
			border: 0;
			padding: .5em 1em;
			background: none;
			overflow: auto;
			zoom: 1
		}

		.ui-dialog .ui-dialog-buttonpane {
			text-align: left;
			border-width: 1px 0 0 0;
			background-image: none;
			margin: .5em 0 0 0;
			padding: .3em 1em .5em .4em
		}

		.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
			float: right
		}

		.ui-dialog .ui-dialog-buttonpane button {
			margin: .5em .4em .5em 0;
			cursor: pointer
		}

		.ui-dialog .ui-resizable-se {
			width: 14px;
			height: 14px;
			right: 3px;
			bottom: 3px
		}

		.ui-draggable .ui-dialog-titlebar {
			cursor: move
		}

		body .ui-dialog .ui-dialog-titlebar-close:hover {
			text-decoration: none
		}

		body .ui-dialog .ui-dialog-content .status-invalid input {
			border: 2px solid red;
			padding: 2px 1px
		}

		body .ui-dialog .ui-dialog-titlebar {
			padding: 0.9em 1.4em 0.6em !important
		}

		body .ui-dialog .ui-widget-header {
			background: #f0f0f0 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAkCAAAAABtHw/QAAAAGElEQVQIW2P4wMTA9B8Fo5IIGl0EQQIxAEzaGCA3rKnhAAAAAElFTkSuQmCC) repeat-x scroll 50% 100% !important;
			background: #f0f0f0 url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/titlebar-fade.png?b6942) repeat-x scroll 50% 100% !important !ie
		}

		body .ui-dialog .ui-icon-closethick {
			background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAIBAMAAAA2IaO4AAAAElBMVEUAAAAAAAD///8AAAAAAAAAAAAtTix5AAAABXRSTlMNTQC/s2KwEqEAAAAjSURBVAgdYwhhUnBlEDVgDmRgDDYVYFAQDWSCEGAuWAKkBABiBwTrflTh/wAAAABJRU5ErkJggg==) no-repeat 50% 50% !important;
			background: url(//meta.wikimedia.org/static/1.26wmf24/skins/Vector/skinStyles/jquery.ui/images/close.png?24b51) no-repeat 50% 50% !important !ie
		}

		body .ui-dialog .ui-dialog-buttonpane {
			margin-top: 0 !important;
			padding: 0.3em 1.4em 0.5em 1.4em !important
		}</style>
	<meta name="ResourceLoaderDynamicStyles" content="">
	<link rel="stylesheet" href="mw-files/load.css">
	<style>a:lang(ar), a:lang(kk-arab), a:lang(mzn), a:lang(ps), a:lang(ur) {
			text-decoration: none
		}</style>
	<script async="" src="mw-files/load_002.php"></script>
	<meta name="generator" content="MediaWiki 1.27.0-wmf.1">
	<link rel="alternate" type="application/atom+xml" title="Tech News weekly bulletin feed"
		  href="https://meta.wikimedia.org/w/api.php?action=featuredfeed&amp;feed=technews&amp;feedformat=atom">
	<link rel="shortcut icon" href="https://meta.wikimedia.org/static/favicon/community.ico">
	<link rel="search" type="application/opensearchdescription+xml"
		  href="https://meta.wikimedia.org/w/opensearch_desc.php" title="Meta (en)">
	<link rel="EditURI" type="application/rsd+xml" href="https://meta.wikimedia.org/w/api.php?action=rsd">
	<link rel="copyright" href="https://creativecommons.org/licenses/by-sa/3.0/">
	<link rel="alternate" type="application/atom+xml" title="Meta Atom feed"
		  href="https://meta.wikimedia.org/w/index.php?title=Special:RecentChanges&amp;feed=atom">
	<link rel="canonical" href="https://meta.wikimedia.org/wiki/Main_Page">
	<!--[if lt IE 7]>
	<style type="text/css">body {
		behavior: url("/w/static/1.27.0-wmf.1/skins/Vector/csshover.min.htc")
	}</style><![endif]-->
	<script src="mw-files/load.php"></script>
	<link href="mw-files/index.css" rel="stylesheet">
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Main_Page skin-vector action-view">
<div class="cn-undefined" id="centralNotice"><!--googleoff: all-->

	<?php
	include 'sensitive-banner.inc.php';
	?>

	<!--googleon: all--></div>
<div style="padding-top: 220px;" id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>

	<div id="siteNotice"><!-- CentralNotice --></div>
	<div class="mw-indicators">
	</div>
	<h1 id="firstHeading" class="firstHeading" lang="en">Main Page</h1>

	<div id="bodyContent" class="mw-body-content">
		<div id="siteSub">From Meta, a Wikimedia project coordination wiki</div>
		<div id="contentSub"></div>
		<div id="jump-to-nav" class="mw-jump">
			Jump to: <a href="#mw-head">navigation</a>, <a href="#p-search">search</a>
		</div>
		<div id="mw-content-text" dir="ltr" class="mw-content-ltr" lang="en">
			<div dir="ltr">
				<div style="font-size:115%;line-height:normal;padding:0 30px .5em">
					<table style="font-size:1.1em;width:100%;margin:auto;background:none;padding:0">
						<tbody>
						<tr>
							<td style="padding:0 1em;width:75%">
								<h1 style="font-size:200%;margin-bottom:0;color:#069;border-bottom:none;padding:.4em 0;font-family:'Century Gothic',Verdana,sans-serif;font-weight:bold">
									<span class="mw-headline" id="Meta-Wiki">Meta-Wiki</span></h1>
							</td>
							<td rowspan="2" style="border-left:3px solid #800;padding-left:1em;width:25%">
								<ul style="margin:0;padding:0;list-style:none none;font-weight:bold">
									<li style="padding:.2em 0"><a
											href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Mission"
											title="Special:MyLanguage/Mission"><span
												style="color:#069">Mission</span></a></li>
									<li style="padding:.2em 0"><a
											href="https://meta.wikimedia.org/wiki/Wikimedia_projects"
											title="Wikimedia projects"><span
												style="color:#069">Projects</span></a><br>
										(<a href="https://meta.wikimedia.org/wiki/Complete_list_of_Wikimedia_projects"
											title="Complete list of Wikimedia projects"><span style="color:#006699">complete list</span></a>)
									</li>
									<li style="padding:.2em 0"><a href="https://meta.wikimedia.org/wiki/Research:Index"
																  title="Research:Index"><span style="color:#069">Research</span></a>
									</li>
									<li style="padding:.2em 0"><a
											href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Meta:Babylon"
											title="Special:MyLanguage/Meta:Babylon"><span
												style="color:#069">Translation</span></a><br>
										(<a href="https://meta.wikimedia.org/wiki/Translation_requests"
											title="Translation requests"><span
												style="color:#069">requests</span></a>)
									</li>
									<li style="padding:.2em 0"><a
											href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Vision"
											title="Special:MyLanguage/Vision"><span
												style="color:#006699;">Vision</span></a></li>
								</ul>
							</td>
						</tr>
						<tr>
							<td id="mf-intro" style="padding:0 1em;width:75%">
								<p><b>Welcome to <a href="https://meta.wikimedia.org/wiki/Meta:About_Meta"
													title="Meta:About Meta"
													class="mw-redirect">Meta-Wiki</a></b>, the global community site for
									the <a
										href="https://meta.wikimedia.org/wiki/Wikimedia_projects"
										title="Wikimedia projects">Wikimedia
										projects</a> and the <a
										href="https://meta.wikimedia.org/wiki/Wikimedia_movement"
										title="Wikimedia movement">Wikimedia movement</a>
									in general. Meta-Wiki's discussions range from coordination and
									documentation to planning and analysis of future Wikimedia activities.<br>
									<br>
									Other meta-focused wikis such as <a href="https://outreach.wikimedia.org/wiki/"
																		class="extiw"
																		title="outreach:">Wikimedia Outreach</a> are
									specialized projects
									that have their roots in Meta-Wiki. Related discussion also takes place on Wikimedia
									<a
										href="https://meta.wikimedia.org/wiki/Mailing_lists/Overview"
										title="Mailing lists/Overview">mailing
										lists</a> (particularly <b><a
											href="https://meta.wikimedia.org/wiki/Mailing_lists#Wikimedia_mailing_list"
											title="Mailing lists">wikimedia-l</a></b>,
									with its low-traffic equivalent <a
										href="https://meta.wikimedia.org/wiki/Mailing_lists#Wikimedia_Announcements_mailing_list"
										title="Mailing lists">WikimediaAnnounce</a>), <a
										href="https://meta.wikimedia.org/wiki/IRC"
										title="IRC">IRC channels</a> on freenode,
									individual wikis of <a
										href="https://meta.wikimedia.org/wiki/Wikimedia_movement_affiliates"
										title="Wikimedia movement affiliates">Wikimedia affiliates</a>, and other
									places.</p>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
				<table style="border-collapse:collapse">
					<tbody>
					<tr style="background:#e6e6e6" valign="middle">
						<td style="border-left:2px solid #800;border-bottom:2px solid #800"></td>
						<td style="width:60%;border-bottom:2px solid #800;padding:.5em 1em"><span
								style="padding:0 15px"><img alt=""
															src="mw-files/20px-Wikimedia_Community_Logo_optimized.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikimedia_Community_Logo_optimized.svg/30px-Wikimedia_Community_Logo_optimized.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikimedia_Community_Logo_optimized.svg/40px-Wikimedia_Community_Logo_optimized.svg.png 2x"
															data-file-width="900"
															data-file-height="900"
															height="20"
															width="20"></span><b>Goings-on</b>
						</td>
						<td style="width:40%;border-bottom:2px solid #800;padding:.5em 1em"><span
								style="padding:0 15px"><img alt=""
															src="mw-files/20px-Wikimedia_Community_Logo_optimized.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikimedia_Community_Logo_optimized.svg/30px-Wikimedia_Community_Logo_optimized.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikimedia_Community_Logo_optimized.svg/40px-Wikimedia_Community_Logo_optimized.svg.png 2x"
															data-file-width="900"
															data-file-height="900"
															height="20"
															width="20"></span><b>Requests</b>
						</td>
					</tr>
					<tr valign="top">
						<td></td>
						<td style="width:60%;padding:0 30px">
							<div dir="ltr">
								<div style="float:right;margin-right:.5em;font-size:smaller;" class="noprint">[<a
										class="external text"
										href="https://meta.wikimedia.org/w/index.php?title=Template:Main_Page/WM_News&amp;action=edit">Edit
										/ Translate</a>]
								</div>
								<h3><span class="mw-headline" id="October_2015">October 2015</span></h3>
								<table>
									<tbody>
									<tr class="announce"
										style="-webkit-column-break-inside:avoid;page-break-inside:avoid;break-inside:avoid-column;"
										valign="top">
										<td style="width:20px"><a
												href="https://meta.wikimedia.org/wiki/File:Wikimedia-logo.svg"
												class="image"><img alt="Wikimedia-logo.svg"
																   src="mw-files/20px-Wikimedia-logo.png"
																   srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/30px-Wikimedia-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/40px-Wikimedia-logo.svg.png 2x"
																   data-file-width="1024" data-file-height="1024"
																   height="20" width="20"></a></td>
										<td style="min-width:3.5em;text-align:right;padding:0 0.3em;white-space:nowrap">
											5:
										</td>
										<td style="width:100%"><a
												href="https://meta.wikimedia.org/wiki/Requests_for_comment/Global_ban_for_Tobias_Conradi"
												title="Requests for comment/Global ban for Tobias Conradi">RfC: Global
												ban for Tobias
												Conradi</a></td>
									</tr>
									</tbody>
								</table>
								<h3><span class="mw-headline" id="September_2015">September 2015</span></h3>
								<table>
									<tbody>
									<tr class="announce"
										style="-webkit-column-break-inside:avoid;page-break-inside:avoid;break-inside:avoid-column;"
										valign="top">
										<td style="width:20px"><a
												href="https://meta.wikimedia.org/wiki/File:Wikimedia-logo.svg"
												class="image"><img alt="Wikimedia-logo.svg"
																   src="mw-files/20px-Wikimedia-logo.png"
																   srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/30px-Wikimedia-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/40px-Wikimedia-logo.svg.png 2x"
																   data-file-width="1024" data-file-height="1024"
																   height="20" width="20"></a></td>
										<td style="min-width:3.5em;text-align:right;padding:0 0.3em;white-space:nowrap">
											25:
										</td>
										<td style="width:100%"><a
												href="https://meta.wikimedia.org/wiki/Requests_for_comment/OAuth_handover"
												title="Requests for comment/OAuth handover">Request for comment: OAuth
												handover</a></td>
									</tr>
									</tbody>
								</table>
								<h3><span class="mw-headline" id="August_2015">August 2015</span></h3>
								<table>
									<tbody>
									<tr class="announce"
										style="-webkit-column-break-inside:avoid;page-break-inside:avoid;break-inside:avoid-column;"
										valign="top">
										<td style="width:20px"><a
												href="https://meta.wikimedia.org/wiki/File:Wikimedia-logo.svg"
												class="image"><img alt="Wikimedia-logo.svg"
																   src="mw-files/20px-Wikimedia-logo.png"
																   srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/30px-Wikimedia-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/40px-Wikimedia-logo.svg.png 2x"
																   data-file-width="1024" data-file-height="1024"
																   height="20" width="20"></a></td>
										<td style="min-width:3.5em;text-align:right;padding:0 0.3em;white-space:nowrap">
											6:
										</td>
										<td style="width:100%"><a rel="nofollow" class="external text"
																  href="http://wikiconferenceusa.org/"><b>WikiConference
													USA 2015</b></a> registration and proposals may be submitted. The
											conference will be held October
											9 to 11 at the <a
												href="https://en.wikipedia.org/wiki/National_Archives_Building"
												class="extiw"
												title="en:National Archives Building">U.S. National Archives</a>.
										</td>
									</tr>
									<tr class="announce"
										style="-webkit-column-break-inside:avoid;page-break-inside:avoid;break-inside:avoid-column;"
										valign="top">
										<td style="width:20px"><a
												href="https://meta.wikimedia.org/wiki/File:Wikimedia-logo.svg"
												class="image"><img alt="Wikimedia-logo.svg"
																   src="mw-files/20px-Wikimedia-logo.png"
																   srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/30px-Wikimedia-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/40px-Wikimedia-logo.svg.png 2x"
																   data-file-width="1024" data-file-height="1024"
																   height="20" width="20"></a></td>
										<td style="min-width:3.5em;text-align:right;padding:0 0.3em;white-space:nowrap">
											5:
										</td>
										<td style="width:100%"><a
												href="https://meta.wikimedia.org/wiki/Wikimedia_Language_Portals"
												title="Wikimedia Language Portals">Wikimedia Language Portals</a>: a
											proposed expansion of pages within <b><a class="external text"
																					 href="https://www.wikimedia.org/">wikimedia.org</a></b>.
										</td>
									</tr>
									<tr class="announce"
										style="-webkit-column-break-inside:avoid;page-break-inside:avoid;break-inside:avoid-column;"
										valign="top">
										<td style="width:20px"><a
												href="https://meta.wikimedia.org/wiki/File:Wikimedia-logo.svg"
												class="image"><img alt="Wikimedia-logo.svg"
																   src="mw-files/20px-Wikimedia-logo.png"
																   srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/30px-Wikimedia-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/40px-Wikimedia-logo.svg.png 2x"
																   data-file-width="1024" data-file-height="1024"
																   height="20" width="20"></a></td>
										<td style="min-width:3.5em;text-align:right;padding:0 0.3em;white-space:nowrap">
											3:
										</td>
										<td style="width:100%"><a
												href="https://meta.wikimedia.org/wiki/Grants:Evaluation/Community_Health_learning_campaign"
												title="Grants:Evaluation/Community Health learning campaign">Community
												Health learning</a></td>
									</tr>
									</tbody>
								</table>
								<h3><span class="mw-headline" id="July_2015">July 2015</span></h3>
								<table>
									<tbody>
									<tr class="announce"
										style="-webkit-column-break-inside:avoid;page-break-inside:avoid;break-inside:avoid-column;"
										valign="top">
										<td style="width:20px"><a
												href="https://meta.wikimedia.org/wiki/File:Wikimedia-logo.svg"
												class="image"><img alt="Wikimedia-logo.svg"
																   src="mw-files/20px-Wikimedia-logo.png"
																   srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/30px-Wikimedia-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/40px-Wikimedia-logo.svg.png 2x"
																   data-file-width="1024" data-file-height="1024"
																   height="20" width="20"></a></td>
										<td style="min-width:3.5em;text-align:right;padding:0 0.3em;white-space:nowrap">
											18:
										</td>
										<td style="width:100%"><a
												href="https://meta.wikimedia.org/wiki/Requests_for_comment/Adding_global_abuse_filter_rights_to_global_sysops"
												title="Requests for comment/Adding global abuse filter rights to global sysops">Request
												for
												comment: Adding global abuse filter view rights to global sysops</a>
										</td>
									</tr>
									</tbody>
								</table>
							</div>
						</td>
						<td style="width:40%;padding:0 30px">
							<div class="poem">
								<div dir="ltr">
									<dl>
										<dt>Cross-wiki issues</dt>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Steward_requests/Bot_status"
												title="Special:MyLanguage/Steward requests/Bot status">Bot status</a>
										</dd>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Steward_requests/Checkuser"
												title="Special:MyLanguage/Steward requests/Checkuser">CheckUser</a></dd>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Steward_requests/Speedy_deletions"
												title="Special:MyLanguage/Steward requests/Speedy deletions">Speedy
												deletions</a></dd>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Steward_requests/Username_changes"
												title="Special:MyLanguage/Steward requests/Username changes">Username
												changes</a></dd>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Steward_requests/Permissions"
												title="Special:MyLanguage/Steward requests/Permissions">Permissions</a>
										</dd>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Talk:Spam_blacklist"
												title="Special:MyLanguage/Talk:Spam blacklist">Spam blacklist</a></dd>
										<dt>Other</dt>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Translation_requests"
												title="Special:MyLanguage/Translation requests">Translations</a></dd>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Requests_for_logos"
												title="Special:MyLanguage/Requests for logos">Logos</a></dd>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Grants:Start"
												title="Special:MyLanguage/Grants:Start">Wikimedia Grants (funding)</a>
										</dd>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Requests_for_new_languages"
												title="Special:MyLanguage/Requests for new languages">New languages</a>
										</dd>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Proposals_for_closing_projects"
												title="Special:MyLanguage/Proposals for closing projects">Project
												closures</a></dd>
										<dd>&nbsp;»&nbsp; <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Meta:Requests_for_deletion"
												title="Special:MyLanguage/Meta:Requests for deletion">Deletions</a> (<a
												href="https://meta.wikimedia.org/wiki/Category:Deleteme"
												title="Category:Deleteme">Deleteme
												category</a>) / <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Meta:Requests_for_undeletion"
												title="Special:MyLanguage/Meta:Requests for undeletion">Undeletions</a>
										</dd>
										<dd>&nbsp;»&nbsp; <b><a
													href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Meta:Requests_and_proposals"
													title="Special:MyLanguage/Meta:Requests and proposals">More</a></b>
											(<b><a
													href="https://meta.wikimedia.org/wiki/Special:MyLanguage/General_requests"
													title="Special:MyLanguage/General requests">overview</a></b>)
										</dd>
									</dl>
								</div>
							</div>
						</td>
					</tr>
					<tr style="background:#e6e6e6" valign="middle">
						<td style="background:#e6e6e6;border-left:2px solid #800;border-bottom:2px solid #800"></td>
						<td style="border-bottom:2px solid #800;padding:.5em 1em;width:60%"><span
								style="padding:0 15px"><img alt=""
															src="mw-files/20px-Wikimedia_Community_Logo_optimized.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikimedia_Community_Logo_optimized.svg/30px-Wikimedia_Community_Logo_optimized.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikimedia_Community_Logo_optimized.svg/40px-Wikimedia_Community_Logo_optimized.svg.png 2x"
															data-file-width="900"
															data-file-height="900"
															height="20"
															width="20"></span><b>Community
								and communication</b></td>
						<td style="border-bottom:2px solid #800;padding:.5em 1em;width:40%"><span
								style="padding:0 15px"><img alt=""
															src="mw-files/20px-Wikimedia_Community_Logo_optimized.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikimedia_Community_Logo_optimized.svg/30px-Wikimedia_Community_Logo_optimized.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikimedia_Community_Logo_optimized.svg/40px-Wikimedia_Community_Logo_optimized.svg.png 2x"
															data-file-width="900"
															data-file-height="900"
															height="20"
															width="20"></span><b>Core
								issues and collaboration</b></td>
					</tr>
					<tr valign="top">
						<td></td>
						<td style="padding:0 30px;width:60%">
							<div class="poem">
								<div dir="ltr">
									<dl>
										<dd>&nbsp;» <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Meta:Babel"
												title="Special:MyLanguage/Meta:Babel">Babel</a>, a discussion place for
											Meta-Wiki
											matters
										</dd>
										<dd>&nbsp;» <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Mailing_lists"
												title="Special:MyLanguage/Mailing lists">Mailing lists</a> and <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/IRC"
												title="Special:MyLanguage/IRC">IRC</a></dd>
										<dd>&nbsp;» <a href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Meetup"
													   title="Special:MyLanguage/Meetup">Meetups</a></dd>
										<dd>&nbsp;» <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Wikimedia_Embassy"
												title="Special:MyLanguage/Wikimedia Embassy">Wikimedia Embassy</a>, a
											list of local
											contacts by language
										</dd>
										<dd>&nbsp;» <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Wikimedia_Forum"
												title="Special:MyLanguage/Wikimedia Forum">Wikimedia Forum</a>, a
											multilingual forum
											for Wikimedia projects
										</dd>
										<dd>&nbsp;» <a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Wikimedian"
												title="Special:MyLanguage/Wikimedian">Wikimedians</a></dd>
									</dl>
								</div>
							</div>
						</td>
						<td style="padding:0 30px;width:40%">
							<div class="poem">
								<div dir="ltr">
									<dl>
										<dd>»&nbsp;&nbsp;<a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Community"
												title="Special:MyLanguage/Community">Community</a></dd>
										<dd>»&nbsp;&nbsp;<a
												href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Dispute_resolution"
												title="Special:MyLanguage/Dispute resolution">Dispute resolution</a>
										</dd>
										<dd>»&nbsp;&nbsp;<a href="https://meta.wikimedia.org/wiki/Growing_Wikimedia"
															title="Growing Wikimedia">Growing Wikimedia</a></dd>
										<dd>»&nbsp;&nbsp;<a
												href="https://meta.wikimedia.org/wiki/Interlingual_coordination"
												title="Interlingual coordination">Interlingual coordination</a></dd>
										<dd>»&nbsp;&nbsp;<a href="https://meta.wikimedia.org/wiki/Requests_for_comment"
															title="Requests for comment">Requests for comment</a></dd>
										<dd>»&nbsp;&nbsp;<a href="https://meta.wikimedia.org/wiki/Wikimedia_principles"
															title="Wikimedia principles">Wikimedia principles</a></dd>
									</dl>
								</div>
							</div>
						</td>
					</tr>
					<tr style="background:#e6e6e6" valign="middle">
						<td style="background:#e6e6e6;border-left:2px solid #800;border-bottom:2px solid #800"></td>
						<td colspan="2" style="border-bottom:2px solid #800;padding:.5em 1em;width:100%"><span
								style="padding:0 15px"><img alt=""
															src="mw-files/20px-Wikimedia_Community_Logo_optimized.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikimedia_Community_Logo_optimized.svg/30px-Wikimedia_Community_Logo_optimized.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikimedia_Community_Logo_optimized.svg/40px-Wikimedia_Community_Logo_optimized.svg.png 2x"
															data-file-width="900" data-file-height="900" height="20"
															width="20"></span><b>Wikimedia Foundation, Meta-Wiki, and
								its sister
								projects</b></td>
					</tr>
					<tr valign="top">
						<td></td>
						<td colspan="2" style="width:100%;padding:0 30px">
							<div dir="ltr">The <a href="https://meta.wikimedia.org/wiki/Wikimedia_Foundation"
												  title="Wikimedia Foundation">Wikimedia Foundation</a> is the
								overarching non-profit
								foundation that owns the <a href="https://meta.wikimedia.org/wiki/Wikimedia_servers"
															title="Wikimedia servers">Wikimedia servers</a> along with
								the domain names,
								<a href="https://meta.wikimedia.org/wiki/Logo" title="Logo">logos</a> and <a
									href="https://meta.wikimedia.org/wiki/Wikimedia_trademarks"
									title="Wikimedia trademarks">trademarks</a> of all <a
									href="https://meta.wikimedia.org/wiki/Complete_list_of_Wikimedia_projects"
									title="Complete list of Wikimedia projects">Wikimedia projects</a> and <a
									href="https://www.mediawiki.org/wiki/" class="extiw" title="mw:">MediaWiki</a>.
								Meta-Wiki is the
								coordination wiki for the various Wikimedia wikis.
							</div>
							<div dir="ltr">
								<table dir="ltr" class="plainlinks"
									   style="margin:10px auto;border:1px solid #AAA;background:transparent;text-align:left">
									<tbody>
									<tr>
										<td colspan="6"
											style="font-size:1.2em;padding:.6em;font-weight:bold;text-align:center">
											Content
											projects
										</td>
									</tr>
									<tr>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://en.wikipedia.org/wiki/"><img
															alt="Wikipedia-logo-v2.svg"
															src="mw-files/40px-Wikipedia-logo-v2.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/80/Wikipedia-logo-v2.svg/60px-Wikipedia-logo-v2.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/80/Wikipedia-logo-v2.svg/80px-Wikipedia-logo-v2.svg.png 2x"
															data-file-width="103"
															data-file-height="94"
															height="37" width="40"></a>
												</div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://en.wikipedia.org/wiki/">Wikipedia</a></b><br>
											The free encyclopedia
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://en.wiktionary.org/wiki/"><img
															alt="Wiktionary small.svg"
															src="mw-files/40px-Wiktionary_small.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Wiktionary_small.svg/60px-Wiktionary_small.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Wiktionary_small.svg/80px-Wiktionary_small.svg.png 2x"
															data-file-width="350"
															data-file-height="350"
															height="40"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://en.wiktionary.org/wiki/">Wiktionary</a></b><br>
											Free dictionary and thesaurus
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a
														href="https://commons.wikimedia.org/wiki/"><img
															alt="Commons-logo.svg"
															src="mw-files/30px-Commons-logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/45px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/59px-Commons-logo.svg.png 2x"
															data-file-width="1024"
															data-file-height="1376"
															height="40"
															width="30"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://commons.wikimedia.org/wiki/">Wikimedia
													Commons</a></b><br>
											Free media repository
										</td>
									</tr>
									<tr>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://en.wikibooks.org/wiki/"><img
															alt="Wikibooks-logo.svg"
															src="mw-files/40px-Wikibooks-logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Wikibooks-logo.svg/60px-Wikibooks-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Wikibooks-logo.svg/80px-Wikibooks-logo.svg.png 2x"
															data-file-width="300"
															data-file-height="300"
															height="40" width="40"></a>
												</div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://en.wikibooks.org/wiki/">Wikibooks</a></b><br>
											Free textbooks and manuals
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://en.wikisource.org/wiki/"><img
															alt="Wikisource-logo.svg"
															src="mw-files/38px-Wikisource-logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Wikisource-logo.svg/57px-Wikisource-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Wikisource-logo.svg/76px-Wikisource-logo.svg.png 2x"
															data-file-width="410"
															data-file-height="430"
															height="40"
															width="38"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://en.wikisource.org/wiki/">Wikisource</a></b><br>
											Free-content library
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://www.wikidata.org/wiki/"><img
															alt="Wikidata-logo.svg"
															src="mw-files/40px-Wikidata-logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Wikidata-logo.svg/60px-Wikidata-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Wikidata-logo.svg/80px-Wikidata-logo.svg.png 2x"
															data-file-width="1050"
															data-file-height="590"
															height="22" width="40"></a>
												</div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://www.wikidata.org/wiki/">Wikidata</a></b><br>
											Free knowledge base
										</td>
									</tr>
									<tr>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://en.wikiversity.org/wiki/"><img
															alt="Wikiversity-logo.svg"
															src="mw-files/40px-Wikiversity-logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/91/Wikiversity-logo.svg/60px-Wikiversity-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/91/Wikiversity-logo.svg/80px-Wikiversity-logo.svg.png 2x"
															data-file-width="1000" data-file-height="800" height="32"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://en.wikiversity.org/wiki/">Wikiversity</a></b><br>
											Free learning materials and activities
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://en.wikiquote.org/wiki/"><img
															alt="Wikiquote-logo.svg"
															src="mw-files/34px-Wikiquote-logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Wikiquote-logo.svg/51px-Wikiquote-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Wikiquote-logo.svg/68px-Wikiquote-logo.svg.png 2x"
															data-file-width="300"
															data-file-height="355"
															height="40" width="34"></a>
												</div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://en.wikiquote.org/wiki/">Wikiquote</a></b><br>
											Collection of quotations
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a
														href="https://species.wikimedia.org/wiki/"><img
															alt="Wikispecies-logo.svg"
															src="mw-files/34px-Wikispecies-logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/Wikispecies-logo.svg/51px-Wikispecies-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/df/Wikispecies-logo.svg/68px-Wikispecies-logo.svg.png 2x"
															data-file-width="941" data-file-height="1103" height="40"
															width="34"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://species.wikimedia.org/wiki/">Wikispecies</a></b><br>
											Free directory of species
										</td>
									</tr>
									<tr>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://en.wikinews.org/wiki/"><img
															alt="Wikinews-logo.svg"
															src="mw-files/40px-Wikinews-logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/24/Wikinews-logo.svg/60px-Wikinews-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/24/Wikinews-logo.svg/80px-Wikinews-logo.svg.png 2x"
															data-file-width="759"
															data-file-height="415"
															height="22" width="40"></a>
												</div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://en.wikinews.org/wiki/">Wikinews</a></b><br>
											Free-content news
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://en.wikivoyage.org/wiki/"><img
															alt="Wikivoyage-Logo-v3-icon.svg"
															src="mw-files/40px-Wikivoyage-Logo-v3-icon.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Wikivoyage-Logo-v3-icon.svg/60px-Wikivoyage-Logo-v3-icon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Wikivoyage-Logo-v3-icon.svg/80px-Wikivoyage-Logo-v3-icon.svg.png 2x"
															data-file-width="193" data-file-height="193" height="40"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://en.wikivoyage.org/wiki/">Wikivoyage</a></b><br>
											Free travel guide
										</td>
										<td colspan="2">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="6"
											style="border-top:1px solid #AAA;font-size:1.2em;font-weight:bold;padding:.6em;text-align:center">
											"Outreach and administration" projects
										</td>
									</tr>
									<tr>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a
														href="https://wikimediafoundation.org/wiki/"><img
															alt="Wikimedia-logo.svg"
															src="mw-files/40px-Wikimedia-logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/60px-Wikimedia-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/81/Wikimedia-logo.svg/80px-Wikimedia-logo.svg.png 2x"
															data-file-width="1024" data-file-height="1024" height="40"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://wikimediafoundation.org/wiki/">Wikimedia
													Foundation</a></b><br>
											Foundation public relations
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a
														href="https://outreach.wikimedia.org/wiki/"><img
															alt="Wikimedia Outreach.svg"
															src="mw-files/40px-Wikimedia_Outreach.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Wikimedia_Outreach.svg/60px-Wikimedia_Outreach.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Wikimedia_Outreach.svg/80px-Wikimedia_Outreach.svg.png 2x"
															data-file-width="400" data-file-height="400" height="40"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://outreach.wikimedia.org/wiki/">Wikimedia
													Outreach</a></b><br>
											Wikimedia outreach wiki
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a
														href="https://wikimania.wikimedia.org/wiki/"><img
															alt="Wikimania.svg"
															src="mw-files/33px-Wikimania.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/Wikimania.svg/49px-Wikimania.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/57/Wikimania.svg/65px-Wikimania.svg.png 2x"
															data-file-width="99"
															data-file-height="121"
															height="40"
															width="33"></a>
												</div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://wikimania.wikimedia.org/wiki/">Wikimania</a></b><br>
											The International Conference
										</td>
									</tr>
									<tr>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://lists.wikimedia.org/"><img
															alt="Wikimedia Community Logo-Mailservices.svg"
															src="mw-files/40px-Wikimedia_Community_Logo-Mailservices.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Wikimedia_Community_Logo-Mailservices.svg/60px-Wikimedia_Community_Logo-Mailservices.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Wikimedia_Community_Logo-Mailservices.svg/80px-Wikimedia_Community_Logo-Mailservices.svg.png 2x"
															data-file-width="900" data-file-height="900" height="40"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://lists.wikimedia.org/">Wikimedia
													Mailservices</a></b><br>
											Wikimedia Mailing Lists
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://stats.wikimedia.org/"><img
															alt="Nuvola mimetypes log.svg"
															src="mw-files/40px-Nuvola_mimetypes_log.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Nuvola_mimetypes_log.svg/60px-Nuvola_mimetypes_log.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Nuvola_mimetypes_log.svg/80px-Nuvola_mimetypes_log.svg.png 2x"
															data-file-width="120" data-file-height="120" height="40"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://stats.wikimedia.org/">Wikistats</a></b><br>
											Wikimedia statistics
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a
														href="https://incubator.wikimedia.org/wiki/Incubator:Main_Page/en"><img
															alt="Incubator-logo.svg"
															src="mw-files/32px-Incubator-logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Incubator-logo.svg/48px-Incubator-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Incubator-logo.svg/64px-Incubator-logo.svg.png 2x"
															data-file-width="800" data-file-height="1000" height="40"
															width="32"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://incubator.wikimedia.org/wiki/Incubator:Main_Page/en">Incubator</a></b><br>
											For language versions in development
										</td>
									</tr>
									<tr>
										<td colspan="6"
											style="border-top:1px solid #AAA;font-size:1.2em;font-weight:bold;padding:.6em;text-align:center">
											"Technical and development" projects
										</td>
									</tr>
									<tr>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://www.mediawiki.org/wiki/"><img
															alt="MediaWiki-notext.svg"
															src="mw-files/40px-MediaWiki-notext.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bb/MediaWiki-notext.svg/60px-MediaWiki-notext.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bb/MediaWiki-notext.svg/80px-MediaWiki-notext.svg.png 2x"
															data-file-width="685"
															data-file-height="530"
															height="31"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://www.mediawiki.org/wiki/">MediaWiki</a></b><br>
											MediaWiki software documentation
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a
														href="https://wikitech.wikimedia.org/wiki/"><img
															alt="Wikitech logo.svg"
															src="mw-files/40px-Wikitech_logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/58/Wikitech_logo.svg/60px-Wikitech_logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/58/Wikitech_logo.svg/80px-Wikitech_logo.svg.png 2x"
															data-file-width="614" data-file-height="520" height="34"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://wikitech.wikimedia.org/wiki/">Wikitech</a></b><br>
											Wikimedia technical documentation
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://phabricator.wikimedia.org/"><img
															alt="Phacility phabricator logo.svg"
															src="mw-files/40px-Phacility_phabricator_logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Phacility_phabricator_logo.svg/60px-Phacility_phabricator_logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Phacility_phabricator_logo.svg/80px-Phacility_phabricator_logo.svg.png 2x"
															data-file-width="120" data-file-height="120" height="40"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://phabricator.wikimedia.org/">Phabricator</a></b><br>
											A bug tracker for MediaWiki
										</td>
									</tr>
									<tr>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a href="https://test.wikipedia.org/wiki/"><img
															alt="Wikipedia-logo-test v2.svg"
															src="mw-files/35px-Wikipedia-logo-test_v2.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikipedia-logo-test_v2.svg/52px-Wikipedia-logo-test_v2.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Wikipedia-logo-test_v2.svg/70px-Wikipedia-logo-test_v2.svg.png 2x"
															data-file-width="135" data-file-height="155" height="40"
															width="35"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://test.wikipedia.org/wiki/">Test
													Wikipedia</a></b><br>
											For testing software changes
										</td>
										<td style="width:40px;height:40px;padding:7px;vertical-align:middle">
											<div class="center">
												<div class="floatnone"><a
														href="https://wikitech.wikimedia.org/wiki/Nova_Resource:Tools"><img
															alt="Wikimedia labs logo.svg"
															src="mw-files/40px-Wikimedia_labs_logo.png"
															srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/60/Wikimedia_labs_logo.svg/60px-Wikimedia_labs_logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/60/Wikimedia_labs_logo.svg/80px-Wikimedia_labs_logo.svg.png 2x"
															data-file-width="900" data-file-height="900" height="40"
															width="40"></a></div>
											</div>
										</td>
										<td style="width:250px;height:40px;padding:7px;vertical-align:top"><b><a
													class="external text"
													href="https://wikitech.wikimedia.org/wiki/Nova_Resource:Tools">Wikimedia
													Tool Labs</a></b><br>
											Server environment for supporting development and operations engineering
										</td>
										<td colspan="2">&nbsp;</td>
									</tr>
									</tbody>
								</table>
							</div>
						</td>
					</tr>
					</tbody>
				</table>
				<div id="otherlangs" class="plainlinks"><img alt="Geographylogo.png"
															 src="mw-files/20px-Geographylogo.png"
															 srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Geographylogo.png/30px-Geographylogo.png 1.5x, //upload.wikimedia.org/wikipedia/commons/5/59/Geographylogo.png 2x"
															 data-file-width="40" data-file-height="40" height="20"
															 width="20">
					<b>In other languages:</b> <span class="" style="white-space: nowrap"><bdi
							title="Swiss German (gsw)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Houptsyte&amp;uselang=gsw">
								<bdi class="autonym" dir="ltr" lang="gsw">Alemannisch</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Asturian (ast)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Portada/ast&amp;uselang=ast">
								<bdi class="autonym" dir="ltr" lang="ast">asturianu</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Azerbaijani (az)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Ana_S%C9%99hif%C9%99&amp;uselang=az">
								<bdi class="autonym" dir="ltr" lang="az">azərbaycanca</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Indonesian (id)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Halaman_Utama&amp;uselang=id">
								<bdi class="autonym" dir="ltr" lang="id">Bahasa Indonesia</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Malay (ms)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Laman_Utama&amp;uselang=ms">
								<bdi class="autonym" dir="ltr" lang="ms">Bahasa Melayu</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Javanese (jv)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Kaca_Utama&amp;uselang=jv">
								<bdi class="autonym" dir="ltr" lang="jv">Basa Jawa</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Bavarian (bar)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Hoamseitn&amp;uselang=bar">
								<bdi class="autonym" dir="ltr" lang="bar">Boarisch</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Bosnian (bs)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Po%C4%8Detna_strana&amp;uselang=bs">
								<bdi class="autonym" dir="ltr" lang="bs">bosanski</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Catalan (ca)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Portada/Ca&amp;uselang=ca">
								<bdi class="autonym" dir="ltr" lang="ca">català</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Czech (cs)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Hlavn%C3%AD_strana&amp;uselang=cs">
								<bdi class="autonym" dir="ltr" lang="cs">čeština</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Corsican (co)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Pagina_maestra&amp;uselang=co">
								<bdi class="autonym" dir="ltr" lang="co">corsu</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Danish (da)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Forside&amp;uselang=da">
								<bdi class="autonym" dir="ltr" lang="da">dansk</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="German (de)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Hauptseite&amp;uselang=de">
								<bdi class="autonym" dir="ltr" lang="de">Deutsch</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Estonian (et)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Esileht&amp;uselang=et">
								<bdi class="autonym" dir="ltr" lang="et">eesti</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Greek (el)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%CE%9A%CF%8D%CF%81%CE%B9%CE%B1_%CE%A3%CE%B5%CE%BB%CE%AF%CE%B4%CE%B1&amp;uselang=el">
								<bdi class="autonym" dir="ltr" lang="el">Ελληνικά</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><b title="English (en)"
																							lang="en">
							<bdi class="autonym" dir="ltr" lang="en">English</bdi>
						</b></span> <span class="" style="white-space: nowrap"><bdi title="Spanish (es)"
																					class="plainlinks" lang="en">
							<a class="external text"
							   href="https://meta.wikimedia.org/w/index.php?title=Portada/es&amp;uselang=es">
								<bdi class="autonym" dir="ltr" lang="es">español</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Esperanto (eo)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%C4%88efpa%C4%9Do&amp;uselang=eo">
								<bdi class="autonym" dir="ltr" lang="eo">Esperanto</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="French (fr)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Accueil&amp;uselang=fr">
								<bdi class="autonym" dir="ltr" lang="fr">français</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Galician (gl)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Portada/gl&amp;uselang=gl">
								<bdi class="autonym" dir="ltr" lang="gl">galego</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Icelandic (is)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Fors%C3%AD%C3%B0a_%28%C3%ADslenska%29&amp;uselang=is">
								<bdi class="autonym" dir="ltr" lang="is">íslenska</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Italian (it)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Pagina_principale&amp;uselang=it">
								<bdi class="autonym" dir="ltr" lang="it">italiano</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Kurdish (ku)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Destp%C3%AAk&amp;uselang=ku">
								<bdi class="autonym" dir="ltr" lang="ku">Kurdî</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Latvian (lv)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=S%C4%81kumlapa&amp;uselang=lv">
								<bdi class="autonym" dir="ltr" lang="lv">latviešu</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Lithuanian (lt)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Pagrindinis_puslapis&amp;uselang=lt">
								<bdi class="autonym" dir="ltr" lang="lt">lietuvių</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Hungarian (hu)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Kezd%C5%91lap&amp;uselang=hu">
								<bdi class="autonym" dir="ltr" lang="hu">magyar</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Neapolitan (nap)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Paggena_prencepale&amp;uselang=nap">
								<bdi class="autonym" dir="ltr" lang="nap">Napulitano</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Dutch (nl)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Hoofdpagina_Nederlands&amp;uselang=nl">
								<bdi class="autonym" dir="ltr" lang="nl">Nederlands</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="Northern Frisian (frr)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Hoodsidj&amp;uselang=frr">
								<bdi class="autonym" dir="ltr" lang="frr">Nordfriisk</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Norwegian (no)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Hovedside&amp;uselang=no">
								<bdi class="autonym" dir="ltr" lang="nb">norsk bokmål</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="Norwegian Nynorsk (nn)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Hovudside&amp;uselang=nn">
								<bdi class="autonym" dir="ltr" lang="nn">norsk nynorsk</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Polish (pl)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Strona_g%C5%82%C3%B3wna&amp;uselang=pl">
								<bdi class="autonym" dir="ltr" lang="pl">polski</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Portuguese (pt)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=P%C3%A1gina_principal&amp;uselang=pt">
								<bdi class="autonym" dir="ltr" lang="pt">português</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Sicilian (scn)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=P%C3%A0ggina_principali&amp;uselang=scn">
								<bdi class="autonym" dir="ltr" lang="scn">sicilianu</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Slovak (sk)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Hlavn%C3%A1_str%C3%A1nka&amp;uselang=sk">
								<bdi class="autonym" dir="ltr" lang="sk">slovenčina</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Slovenian (sl)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Glavna_stran&amp;uselang=sl">
								<bdi class="autonym" dir="ltr" lang="sl">slovenščina</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Somali (so)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Bogga_Hore&amp;uselang=so">
								<bdi class="autonym" dir="ltr" lang="so">Soomaaliga</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Finnish (fi)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Etusivu&amp;uselang=fi">
								<bdi class="autonym" dir="ltr" lang="fi">suomi</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Swedish (sv)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Huvudsida&amp;uselang=sv">
								<bdi class="autonym" dir="ltr" lang="sv">svenska</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Swahili (sw)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Mwanzo&amp;uselang=sw">
								<bdi class="autonym" dir="ltr" lang="sw">Kiswahili</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="tarandíne (roa-tara)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Pagene_prengep%C3%A1le&amp;uselang=roa-tara">
								<bdi class="autonym" dir="ltr" lang="it-x-tara">tarandíne</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Vietnamese (vi)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Trang_Ch%C3%ADnh&amp;uselang=vi">
								<bdi class="autonym" dir="ltr" lang="vi">Tiếng Việt</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Turkish (tr)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Ana_Sayfa&amp;uselang=tr">
								<bdi class="autonym" dir="ltr" lang="tr">Türkçe</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Võro (vro)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Main_Page/vro&amp;uselang=vro">
								<bdi class="autonym" dir="ltr" lang="vro">Võro</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Zazaki (diq)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Pela_Seri&amp;uselang=diq">
								<bdi class="autonym" dir="ltr" lang="diq">Zazaki</bdi>
							</a></bdi></span><span class="" style="white-space: nowrap"><bdi title="Avaric (av)"
																							 class="plainlinks"
																							 lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%91%D0%B5%D1%82%D3%80%D0%B5%D1%80%D0%B0%D0%B1_%D0%B3%D1%8C%D1%83%D0%BC%D0%B5%D1%80&amp;uselang=av">
								<bdi class="autonym" dir="ltr" lang="av">авар</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Belarusian (be)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%93%D0%B0%D0%BB%D0%BE%D1%9E%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D0%B0%D1%80%D0%BE%D0%BD%D0%BA%D0%B0&amp;uselang=be">
								<bdi class="autonym" dir="ltr" lang="be">беларуская</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Bulgarian (bg)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%9D%D0%B0%D1%87%D0%B0%D0%BB%D0%BD%D0%B0_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0&amp;uselang=bg">
								<bdi class="autonym" dir="ltr" lang="bg">български</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Chechen (ce)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%9A%D0%BE%D1%8C%D1%80%D1%82%D0%B0_%D0%B0%D0%B3l%D0%BE&amp;uselang=ce">
								<bdi class="autonym" dir="ltr" lang="ce">нохчийн</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Church Slavic (cu)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%93%D0%BB%D0%B0%D0%B2%D1%8C%D0%BD%D0%B0_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0&amp;uselang=cu">
								<bdi class="autonym" dir="ltr" lang="cu">словѣньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Kazakh (kk)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%91%D0%B0%D1%81%D1%82%D1%8B_%D0%B1%D0%B5%D1%82&amp;uselang=kk">
								<bdi class="autonym" dir="ltr" lang="kk">қазақша</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Macedonian (mk)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0&amp;uselang=mk">
								<bdi class="autonym" dir="ltr" lang="mk">македонски</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Russian (ru)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0&amp;uselang=ru">
								<bdi class="autonym" dir="ltr" lang="ru">русский</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Rusyn (rue)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%93%D0%BE%D0%BB%D0%BE%D0%B2%D0%BD%D0%B0_%D1%81%D1%82%D0%BE%D1%80%D1%96%D0%BD%D0%BA%D0%B0/rue&amp;uselang=rue">
								<bdi class="autonym" dir="ltr" lang="rue">русиньскый</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Sakha (sah)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%A1%D2%AF%D1%80%D2%AF%D0%BD_%D1%81%D0%B8%D1%80%D1%8D%D0%B9&amp;uselang=sah">
								<bdi class="autonym" dir="ltr" lang="sah">саха тыла</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Serbian (sr)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B0&amp;uselang=sr">
								<bdi class="autonym" dir="ltr" lang="sr">српски / srpski</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Tatar (tt)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%91%D0%B0%D1%88_%D0%B1%D0%B8%D1%82&amp;uselang=tt">
								<bdi class="autonym" dir="ltr" lang="tt">татарча/tatarça</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Ukrainian (uk)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%93%D0%BE%D0%BB%D0%BE%D0%B2%D0%BD%D0%B0_%D1%81%D1%82%D0%BE%D1%80%D1%96%D0%BD%D0%BA%D0%B0/uk&amp;uselang=uk">
								<bdi class="autonym" dir="ltr" lang="uk">українська</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Armenian (hy)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D4%B3%D5%AC%D5%AD%D5%A1%D5%BE%D5%B8%D6%80_%D4%B7%D5%BB&amp;uselang=hy">
								<bdi class="autonym" dir="ltr" lang="hy">Հայերեն</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Georgian (ka)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E1%83%9B%E1%83%97%E1%83%90%E1%83%95%E1%83%90%E1%83%A0%E1%83%98_%E1%83%92%E1%83%95%E1%83%94%E1%83%A0%E1%83%93%E1%83%98&amp;uselang=ka">
								<bdi class="autonym" dir="ltr" lang="ka">ქართული</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Bengali (bn)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A7%E0%A6%BE%E0%A6%A8_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE&amp;uselang=bn">
								<bdi class="autonym" dir="ltr" lang="bn">বাংলা</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Hindi (hi)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%A4%AE%E0%A5%81%E0%A4%96%E0%A5%8D%E0%A4%AF_%E0%A4%AA%E0%A5%83%E0%A4%B7%E0%A5%8D%E0%A4%A0&amp;uselang=hi">
								<bdi class="autonym" dir="ltr" lang="hi">हिन्दी</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Malayalam (ml)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%B4%AA%E0%B5%8D%E0%B4%B0%E0%B4%A7%E0%B4%BE%E0%B4%A8_%E0%B4%A4%E0%B4%BE%E0%B5%BE&amp;uselang=ml">
								<bdi class="autonym" dir="ltr" lang="ml">മലയാളം</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Punjabi (pa)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%A8%AE%E0%A9%81%E0%A9%B1%E0%A8%96_%E0%A8%B8%E0%A8%AB%E0%A8%BC%E0%A8%BE&amp;uselang=pa">
								<bdi class="autonym" dir="ltr" lang="pa">ਪੰਜਾਬੀ</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Sinhala (si)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%B6%B8%E0%B7%94%E0%B6%BD%E0%B7%8A_%E0%B6%B4%E0%B7%92%E0%B6%A7%E0%B7%94%E0%B7%80&amp;uselang=si">
								<bdi class="autonym" dir="ltr" lang="si">සිංහල</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Tamil (ta)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%AE%AE%E0%AF%81%E0%AE%A4%E0%AE%B1%E0%AF%8D_%E0%AE%AA%E0%AE%95%E0%AF%8D%E0%AE%95%E0%AE%AE%E0%AF%8D&amp;uselang=ta">
								<bdi class="autonym" dir="ltr" lang="ta">தமிழ்</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Korean (ko)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%EB%8C%80%EB%AC%B8&amp;uselang=ko">
								<bdi class="autonym" dir="ltr" lang="ko">한국어</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Japanese (ja)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E3%83%A1%E3%82%A4%E3%83%B3%E3%83%9A%E3%83%BC%E3%82%B8&amp;uselang=ja">
								<bdi class="autonym" dir="ltr" lang="ja">日本語</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="Hakka Chinese (hak)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E9%A0%AD%E9%A0%81&amp;uselang=hak">
								<bdi class="autonym" dir="ltr" lang="hak">客家語/Hak-kâ-ngî</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Cantonese (yue)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E9%A0%AD%E7%89%88&amp;uselang=yue">
								<bdi class="autonym" dir="ltr" lang="yue">粵語</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="Simplified Chinese (zh-hans)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E9%A6%96%E9%A1%B5&amp;uselang=zh-hans">
								<bdi class="autonym" dir="ltr" lang="zh-hans">中文（简体）‎</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="Traditional Chinese (zh-hant)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E9%A6%96%E9%A0%81&amp;uselang=zh-hant">
								<bdi class="autonym" dir="ltr" lang="zh-hant">中文（繁體）‎</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Hebrew (he)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D7%A2%D7%9E%D7%95%D7%93_%D7%A8%D7%90%D7%A9%D7%99&amp;uselang=he&amp;rtl=1">
								<bdi class="autonym" dir="rtl" lang="he">עברית</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Arabic (ar)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9_%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9&amp;uselang=ar&amp;rtl=1">
								<bdi class="autonym" dir="rtl" lang="ar">العربية</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="Algerian Arabic (arq)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D8%A7%D9%84%D9%BE%D8%A7%D8%AC%D8%A9_%D8%A7%D9%84%D9%84%D9%88%D9%84%D8%A7%D9%86%D9%8A%D9%91%D8%A9&amp;uselang=arq">
								<bdi class="autonym" dir="ltr" lang="arq">جازايرية</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Persian (fa)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D8%B5%D9%81%D8%AD%D9%87%D9%94_%D8%A7%D8%B5%D9%84%DB%8C&amp;uselang=fa&amp;rtl=1">
								<bdi class="autonym" dir="rtl" lang="fa">فارسی</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Uyghur (ug)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D8%A8%D8%A7%D8%B4_%D8%A8%DB%95%D8%AA&amp;uselang=ug&amp;rtl=1">
								<bdi class="autonym" dir="rtl" lang="ug">ئۇيغۇرچە / Uyghurche</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Mazanderani (mzn)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%DA%AF%D8%AA_%D8%B5%D9%81%D8%AD%D9%87&amp;uselang=mzn&amp;rtl=1">
								<bdi class="autonym" dir="rtl" lang="mzn">مازِرونی</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="Central Kurdish (ckb)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D8%AF%DB%95%D8%B3%D8%AA%D9%BE%DB%8E%DA%A9&amp;uselang=ckb&amp;rtl=1">
								<bdi class="autonym" dir="rtl" lang="ckb">کوردیی ناوەندی</bdi>
							</a></bdi></span><br>
					<span class="firstlang" dir="ltr"><b>Old style:</b></span> <span class="firstlang"
																					 style="white-space: nowrap"><bdi
							title="Old English (ang)" class="plainlinks" lang="en"><a class="external text"
																					  href="https://meta.wikimedia.org/w/index.php?title=H%C4%93afods%C4%ABde&amp;uselang=ang">
								<bdi class="autonym" dir="ltr" lang="ang">Ænglisc</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Afrikaans (af)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Tuisblad&amp;uselang=af">
								<bdi class="autonym" dir="ltr" lang="af">Afrikaans</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="Min Nan Chinese (nan)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Th%C3%A2u-ia%CC%8Dh&amp;uselang=nan">
								<bdi class="autonym" dir="ltr" lang="nan">Bân-lâm-gú</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Sundanese (su)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Tepas&amp;uselang=su">
								<bdi class="autonym" dir="ltr" lang="su">Basa Sunda</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Breton (br)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Degemer&amp;uselang=br">
								<bdi class="autonym" dir="ltr" lang="br">brezhoneg</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Welsh (cy)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Hafan&amp;uselang=cy">
								<bdi class="autonym" dir="ltr" lang="cy">Cymraeg</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Basque (eu)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Azala&amp;uselang=eu">
								<bdi class="autonym" dir="ltr" lang="eu">euskara</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Extremaduran (ext)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=P%C3%A1hina_prencipal&amp;uselang=ext">
								<bdi class="autonym" dir="ltr" lang="ext">estremeñu</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Faroese (fo)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Fors%C3%AD%C3%B0a/Fo&amp;uselang=fo">
								<bdi class="autonym" dir="ltr" lang="fo">føroyskt</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Irish (ga)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Pr%C3%ADomhleathanach&amp;uselang=ga">
								<bdi class="autonym" dir="ltr" lang="ga">Gaeilge</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Croatian (hr)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Glavna_stranica&amp;uselang=hr">
								<bdi class="autonym" dir="ltr" lang="hr">hrvatski</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Ido (io)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Frontispico&amp;uselang=io">
								<bdi class="autonym" dir="ltr" lang="io">Ido</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Igbo (ig)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Ih%C3%BC_Mbu&amp;uselang=ig">
								<bdi class="autonym" dir="ltr" lang="ig">Igbo</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Interlingua (ia)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Pagina_principal&amp;uselang=ia">
								<bdi class="autonym" dir="ltr" lang="ia">interlingua</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Occitan (oc)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Acu%C3%A8lh&amp;uselang=oc">
								<bdi class="autonym" dir="ltr" lang="oc">occitan</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Romanian (ro)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Pagina_principal%C4%83&amp;uselang=ro">
								<bdi class="autonym" dir="ltr" lang="ro">română</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Quechua (qu)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Qhapaq_p%27anqa&amp;uselang=qu">
								<bdi class="autonym" dir="ltr" lang="qu">Runa Simi</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Albanian (sq)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Faqja_Kryesore&amp;uselang=sq">
								<bdi class="autonym" dir="ltr" lang="sq">shqip</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Tagalog (tl)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Unang_Pahina&amp;uselang=tl">
								<bdi class="autonym" dir="ltr" lang="tl">Tagalog</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Venetian (vec)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Pajina_prinsipa%C5%82e&amp;uselang=vec">
								<bdi class="autonym" dir="ltr" lang="vec">vèneto</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Yoruba (yo)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Oj%C3%BAew%C3%A9_%C3%80k%E1%BB%8D%CC%81k%E1%BB%8D%CC%81&amp;uselang=yo">
								<bdi class="autonym" dir="ltr" lang="yo">Yorùbá</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Kyrgyz (ky)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%91%D0%B0%D1%88%D0%BA%D1%8B_%D0%91%D0%B5%D1%82&amp;uselang=ky">
								<bdi class="autonym" dir="ltr" lang="ky">Кыргызча</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Tajik (tg)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D0%A1%D0%B0%D2%B3%D0%B8%D1%84%D0%B0%D0%B8_%D0%90%D1%81%D0%BB%D3%A3&amp;uselang=tg">
								<bdi class="autonym" dir="ltr" lang="tg">тоҷикӣ</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Kannada (kn)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=Kannada&amp;uselang=kn">
								<bdi class="autonym" dir="ltr" lang="kn">ಕನ್ನಡ</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Marathi (mr)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%A4%AE%E0%A5%81%E0%A4%96%E0%A4%AA%E0%A5%83%E0%A4%B7%E0%A5%8D%E0%A4%A0&amp;uselang=mr">
								<bdi class="autonym" dir="ltr" lang="mr">मराठी</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Nepali (ne)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%A4%AE%E0%A5%81%E0%A4%96%E0%A5%8D%E0%A4%AF%E0%A4%AA%E0%A5%83%E0%A4%B7%E0%A5%8D%E0%A4%A0&amp;uselang=ne">
								<bdi class="autonym" dir="ltr" lang="ne">नेपाली</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Telugu (te)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%B0%AE%E0%B1%8A%E0%B0%A6%E0%B0%9F%E0%B0%BF_%E0%B0%AA%E0%B1%87%E0%B0%9C%E0%B1%80&amp;uselang=te">
								<bdi class="autonym" dir="ltr" lang="te">తెలుగు</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Khmer (km)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E1%9E%91%E1%9F%86%E1%9E%96%E1%9F%90%E1%9E%9A%E1%9E%8A%E1%9E%BE%E1%9E%98&amp;uselang=km">
								<bdi class="autonym" dir="ltr" lang="km">ភាសាខ្មែរ</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="sou (sou)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%AB%E0%B8%BA%E0%B8%A5%E0%B8%B1%E0%B8%81&amp;uselang=sou">
								<bdi class="autonym" dir="ltr" lang="sou">sou</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Thai (th)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%81&amp;uselang=th">
								<bdi class="autonym" dir="ltr" lang="th">ไทย</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="tgl (tgl)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E1%9C%82%E1%9C%88%E1%9C%85%E1%9C%94_%E1%9C%89%E1%9C%91%E1%9C%92%E1%9C%88&amp;uselang=tgl">
								<bdi class="autonym" dir="ltr" lang="tl-tglg">tgl</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Tibetan (bo)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E0%BD%A6%E0%BE%90%E0%BD%91%E0%BC%8B%E0%BD%A0%E0%BD%82%E0%BE%B1%E0%BD%B4%E0%BD%A2%E0%BC%8B%E0%BD%A2%E0%BD%BA%E0%BC%8B%E0%BD%9E%E0%BD%B4%E0%BC%8D&amp;uselang=bo">
								<bdi class="autonym" dir="ltr" lang="bo">བོད་ཡིག</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Wu Chinese (wuu)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E5%B0%81%E9%9D%A2&amp;uselang=wuu">
								<bdi class="autonym" dir="ltr" lang="wuu">吴语</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="Literary Chinese (lzh)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%E5%8D%B7%E9%A6%96&amp;uselang=lzh">
								<bdi class="autonym" dir="ltr" lang="lzh">文言</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi
							title="Southern Balochi (bcc)"
							class="plainlinks" lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D8%A7%D9%88%D9%84%DB%8C_%D8%AA%D8%A7%DA%A9&amp;uselang=bcc&amp;rtl=1">
								<bdi class="autonym" dir="rtl" lang="bcc">جهلسری بلوچی</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Pashto (ps)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D9%84%D9%88%D9%85%DA%93%DB%8C_%D9%85%D8%AE&amp;uselang=ps&amp;rtl=1">
								<bdi class="autonym" dir="rtl" lang="ps">پښتو</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Sindhi (sd)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D9%85%DA%A9_%D8%B5%D9%81%D8%AD%D9%88&amp;uselang=sd&amp;rtl=1">
								<bdi class="autonym" dir="rtl" lang="sd">سنڌي</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><bdi title="Urdu (ur)"
																							  class="plainlinks"
																							  lang="en"><a
								class="external text"
								href="https://meta.wikimedia.org/w/index.php?title=%D8%B5%D9%81%D8%AD%DB%81_%D8%A7%D9%88%D9%84&amp;uselang=ur&amp;rtl=1">
								<bdi class="autonym" dir="rtl" lang="ur">اردو</bdi>
							</a></bdi></span> <span class="" style="white-space: nowrap"><em><a
								href="https://meta.wikimedia.org/wiki/Skanwiki" title="Skanwiki">
								<bdi>Skandinavisk</bdi>
								<small>(Skanwiki)</small>
							</a></em></span> <span class="" style="white-space: nowrap"><em><a
								href="https://meta.wikimedia.org/wiki/Slavopedia" title="Slavopedia">
								<bdi>Slovio</bdi>
								<small>(Slavopedia)</small>
							</a></em></span> <span class="lastlang"><small class="plainlinks"><a class="external text"
																								 href="https://meta.wikimedia.org/w/index.php?title=Template:Other_languages/Template:Main_Page&amp;action=edit">+/-</a>
						</small></span></div>
			</div>


			<!-- 
NewPP limit report
Parsed by mw1087
Cached time: 20151005123645
Cache expiry: 2592000
Dynamic content: false
CPU time usage: 1.538 seconds
Real time usage: 1.679 seconds
Preprocessor visited node count: 43677/1000000
Preprocessor generated node count: 0/1500000
Post‐expand include size: 301114/2097152 bytes
Template argument size: 23868/2097152 bytes
Highest expansion depth: 15/40
Expensive parser function count: 128/500
Lua time usage: 0.019/10.000 seconds
Lua memory usage: 828 KB/50 MB
-->

			<!-- 
Transclusion expansion time report (%,ms,calls,template)
100.00% 1482.492      1 - -total
100.00% 1482.492      1 - Template:Main_Page/en
 99.82% 1479.884      1 - Template:Main_Page/Code
 84.45% 1251.897      1 - Template:Other_languages/Template:Main_Page
 73.78% 1093.854    119 - Template:Other_languages/link2
 42.40%  628.540    234 - Template:BCP47
 10.64%  157.691    251 - Template:Dir
  8.73%  129.373      1 - Template:LangAutoSwitch
  4.63%   68.680    267 - Template:Uselang
  3.98%   58.972      1 - Template:Main_Page/WM_News
-->

			<!-- Saved in parser cache with key metawiki:pcache:idhash:79155-0!*!0!!en!4!* and timestamp 20151005123643 and revision id 13832341
 -->
			<noscript><img src="//meta.wikimedia.org/wiki/Special:CentralAutoLogin/start?type=1x1" alt="" title=""
						   width="1"
						   height="1" style="border: none; position: absolute;"/></noscript>
		</div>
		<div class="printfooter">
			Retrieved from "<a dir="ltr"
							   href="https://meta.wikimedia.org/w/index.php?title=Main_Page&amp;oldid=13832341">https://meta.wikimedia.org/w/index.php?title=Main_Page&amp;oldid=13832341</a>"
		</div>
		<div id="catlinks" class="catlinks">
			<div id="mw-normal-catlinks" class="mw-normal-catlinks"><a
					href="https://meta.wikimedia.org/wiki/Special:Categories" title="Special:Categories">Categories</a>:
				<ul>
					<li><a href="https://meta.wikimedia.org/wiki/Category:Main_page/en" title="Category:Main page/en">Main
							page/en</a></li>
					<li><a href="https://meta.wikimedia.org/wiki/Category:English" title="Category:English">English</a>
					</li>
					<li><a href="https://meta.wikimedia.org/wiki/Category:EN" title="Category:EN">EN</a></li>
				</ul>
			</div>
			<div id="mw-hidden-catlinks" class="mw-hidden-catlinks mw-hidden-cats-hidden">Hidden category:
				<ul>
					<li>
						<a href="https://meta.wikimedia.org/wiki/Category:Pages_using_duplicate_arguments_in_template_calls"
						   title="Category:Pages using duplicate arguments in template calls">Pages using duplicate
							arguments in
							template calls</a></li>
				</ul>
			</div>
		</div>
		<div class="visualClear"></div>
	</div>
</div>
<div id="mw-navigation">
	<h2>Navigation menu</h2>

	<div style="top: 220px;" id="mw-head">
		<div id="p-personal" role="navigation" class="" aria-labelledby="p-personal-label">
			<h3 id="p-personal-label">Personal tools</h3>
			<ul>
				<li id="pt-uls" class="active"><a original-title="" aria-haspopup="true" role="button" tabindex="0"
												  href="#"
												  class="uls-trigger autonym">English</a></li>
				<li id="pt-createaccount"><a
						href="https://meta.wikimedia.org/w/index.php?title=Special:UserLogin&amp;returnto=Main+Page&amp;returntoquery=banner%3DB14WMDE_45_141229_ctrl%26uselang%3Den%26force%3D1&amp;type=signup"
						title="You are encouraged to create an account and log in; however, it is not mandatory">Create
						account</a>
				</li>
				<li id="pt-login"><a
						href="https://meta.wikimedia.org/w/index.php?title=Special:UserLogin&amp;returnto=Main+Page&amp;returntoquery=banner%3DB14WMDE_45_141229_ctrl%26uselang%3Den%26force%3D1"
						title="You are encouraged to log in; however, it is not mandatory [Alt+Umschalt+o]"
						accesskey="o">Log in</a>
				</li>
			</ul>
		</div>
		<div id="left-navigation">
			<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
				<h3 id="p-namespaces-label">Namespaces</h3>
				<ul>
					<li id="ca-nstab-main" class="selected"><span><a href="https://meta.wikimedia.org/wiki/Main_Page"
																	 title="View the content page [Alt+Umschalt+c]"
																	 accesskey="c">Main
								Page</a></span></li>
					<li id="ca-talk"><span><a href="https://meta.wikimedia.org/wiki/Talk:Main_Page"
											  title="Discussion about the content page [Alt+Umschalt+t]" accesskey="t"
											  rel="discussion">Discussion</a></span></li>
				</ul>
			</div>
			<div id="p-variants" role="navigation" class="vectorMenu emptyPortlet" aria-labelledby="p-variants-label">
				<h3 tabindex="0" id="p-variants-label">
					<span>Variants</span><a tabindex="-1" href="#"></a>
				</h3>

				<div class="menu">
					<ul>
					</ul>
				</div>
			</div>
		</div>
		<div id="right-navigation">
			<div id="p-views" role="navigation" class="vectorTabs" aria-labelledby="p-views-label">
				<h3 id="p-views-label">Views</h3>
				<ul>
					<li id="ca-view" class="selected"><span><a href="https://meta.wikimedia.org/wiki/Main_Page">Read</a></span>
					</li>
					<li id="ca-viewsource"><span><a
								href="https://meta.wikimedia.org/w/index.php?title=Main_Page&amp;action=edit"
								title="This page is protected.
You can view its source [Alt+Umschalt+e]" accesskey="e">View source</a></span></li>
					<li id="ca-history" class="collapsible"><span><a
								href="https://meta.wikimedia.org/w/index.php?title=Main_Page&amp;action=history"
								title="Past revisions of this page [Alt+Umschalt+h]" accesskey="h">View
								history</a></span></li>
				</ul>
			</div>
			<div style="" id="p-cactions" role="navigation" class="vectorMenu emptyPortlet"
				 aria-labelledby="p-cactions-label">
				<h3 tabindex="0" id="p-cactions-label"><span>More</span><a tabindex="-1" href="#"></a></h3>

				<div class="menu">
					<ul>
					</ul>
				</div>
			</div>
			<div id="p-search" role="search">
				<h3>
					<label for="searchInput">Search</label>
				</h3>

				<form action="/w/index.php" id="searchform">
					<div id="simpleSearch">
						<input autocomplete="off" tabindex="1" name="search" placeholder="Search"
							   title="Search Meta [Alt+Umschalt+f]" accesskey="f" id="searchInput" type="search"><input
							value="Special:Search" name="title" type="hidden"><input name="go" value="Go"
																					 title="Go to a page with this exact name if it exists"
																					 id="searchButton"
																					 class="searchButton"
																					 type="submit"></div>
				</form>
			</div>
		</div>
	</div>
	<div style="top: 380px;" id="mw-panel">
		<div id="p-logo" role="banner"><a class="mw-wiki-logo" href="https://meta.wikimedia.org/wiki/Main_Page"
										  title="Visit the main page"></a></div>
		<div class="portal" role="navigation" id="p-navigation" aria-labelledby="p-navigation-label">
			<h3 id="p-navigation-label">Navigation</h3>

			<div class="body">
				<ul>
					<li id="n-mainpage-description"><a href="https://meta.wikimedia.org/wiki/Main_Page"
													   title="Visit the main page [Alt+Umschalt+z]" accesskey="z">Main
							page</a>
					</li>
					<li id="n-currentevents"><a href="https://meta.wikimedia.org/wiki/Wikimedia_News"
												title="Find background information on current events">Wikimedia News</a>
					</li>
					<li id="n-translations"><a href="https://meta.wikimedia.org/wiki/Special:LanguageStats"
											   title="Help with translations">Translations</a></li>
					<li id="n-recentchanges"><a href="https://meta.wikimedia.org/wiki/Special:RecentChanges"
												title="A list of recent changes in the wiki [Alt+Umschalt+r]"
												accesskey="r">Recent
							changes</a></li>
					<li id="n-randompage"><a href="https://meta.wikimedia.org/wiki/Special:Random"
											 title="Load a random page [Alt+Umschalt+x]" accesskey="x">Random page</a>
					</li>
					<li id="n-help"><a href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Help:Help"
									   title="The place to find out">Help</a></li>
					<li id="n-Babel-text"><a href="https://meta.wikimedia.org/wiki/Meta:Babel">Babel</a></li>
				</ul>
			</div>
		</div>
		<div class="portal" role="navigation" id="p-community" aria-labelledby="p-community-label">
			<h3 id="p-community-label">Community</h3>

			<div class="body">
				<ul>
					<li id="n-WikimediaForum-text"><a href="https://meta.wikimedia.org/wiki/Wikimedia_Forum">Wikimedia
							Forum</a>
					</li>
					<li id="n-mailinglists-text"><a href="https://meta.wikimedia.org/wiki/Mailing_lists/Overview">Mailing
							lists</a></li>
					<li id="n-Requests-text"><a
							href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Meta:Requests_and_proposals">Requests</a>
					</li>
					<li id="n-Babylon-text"><a href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Meta:Babylon">Babylon</a>
					</li>
					<li id="n-Reports-text"><a href="https://meta.wikimedia.org/wiki/Reports">Reports</a></li>
					<li id="n-Research-text"><a href="https://meta.wikimedia.org/wiki/Research:Index">Research</a></li>
					<li id="n-planet"><a href="https://en.planet.wikimedia.org/"
										 title="Weblog aggregator of Wikimedia-related posts">Planet Wikimedia</a></li>
				</ul>
			</div>
		</div>
		<div class="portal" role="navigation" id="p-beyond_the_web" aria-labelledby="p-beyond_the_web-label">
			<h3 id="p-beyond_the_web-label">Beyond the Web</h3>

			<div class="body">
				<ul>
					<li id="n-Meetup-text"><a href="https://meta.wikimedia.org/wiki/Meetup">Meet Wikimedians</a></li>
					<li id="n-Events-text"><a href="https://meta.wikimedia.org/wiki/Events">Events</a></li>
					<li id="n-Affiliates-text"><a
							href="https://meta.wikimedia.org/wiki/Special:MyLanguage/Wikimedia_movement_affiliates">Movement
							affiliates</a></li>
					<li id="n-sitesupport"><a
							href="https://donate.wikimedia.org/wiki/Special:FundraiserRedirector?utm_source=donate&amp;utm_medium=sidebar&amp;utm_campaign=C13_meta.wikimedia.org&amp;uselang=en"
							title="Support us">Donate</a></li>
				</ul>
			</div>
		</div>
		<div class="portal" role="navigation" id="p-coll-print_export" aria-labelledby="p-coll-print_export-label">
			<h3 id="p-coll-print_export-label">Print/export</h3>

			<div class="body">
				<ul>
					<li id="coll-create_a_book"><a
							href="https://meta.wikimedia.org/w/index.php?title=Special:Book&amp;bookcmd=book_creator&amp;referer=Main+Page">Create
							a book</a></li>
					<li id="coll-download-as-rdf2latex"><a
							href="https://meta.wikimedia.org/w/index.php?title=Special:Book&amp;bookcmd=render_article&amp;arttitle=Main+Page&amp;returnto=Main+Page&amp;oldid=13832341&amp;writer=rdf2latex">Download
							as PDF</a></li>
					<li id="t-print"><a href="https://meta.wikimedia.org/w/index.php?title=Main_Page&amp;printable=yes"
										title="Printable version of this page [Alt+Umschalt+p]" accesskey="p">Printable
							version</a></li>
				</ul>
			</div>
		</div>
		<div class="portal" role="navigation" id="p-tb" aria-labelledby="p-tb-label">
			<h3 id="p-tb-label">Tools</h3>

			<div class="body">
				<ul>
					<li id="t-whatlinkshere"><a href="https://meta.wikimedia.org/wiki/Special:WhatLinksHere/Main_Page"
												title="A list of all wiki pages that link here [Alt+Umschalt+j]"
												accesskey="j">What
							links here</a></li>
					<li id="t-recentchangeslinked"><a
							href="https://meta.wikimedia.org/wiki/Special:RecentChangesLinked/Main_Page"
							title="Recent changes in pages linked from this page [Alt+Umschalt+k]"
							accesskey="k">Related changes</a></li>
					<li id="t-specialpages"><a href="https://meta.wikimedia.org/wiki/Special:SpecialPages"
											   title="A list of all special pages [Alt+Umschalt+q]" accesskey="q">Special
							pages</a></li>
					<li id="t-permalink"><a
							href="https://meta.wikimedia.org/w/index.php?title=Main_Page&amp;oldid=13832341"
							title="Permanent link to this revision of the page">Permanent link</a></li>
					<li id="t-info"><a href="https://meta.wikimedia.org/w/index.php?title=Main_Page&amp;action=info"
									   title="More information about this page">Page information</a></li>
					<li id="t-cite"><a
							href="https://meta.wikimedia.org/w/index.php?title=Special:CiteThisPage&amp;page=Main_Page&amp;id=13832341"
							title="Information on how to cite this page">Cite this page</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="footer" role="contentinfo">
	<ul id="footer-info">
		<li id="footer-info-lastmod"> This page was last modified on 27 September 2015, at 18:51 (UTC).</li>
		<li id="footer-info-copyright">Text is available under the <a
				href="https://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike
				License</a>;
			additional terms may apply. By using this site, you agree to the <a
				href="https://wikimediafoundation.org/wiki/Terms_of_Use">terms of use</a> and <a
				href="https://wikimediafoundation.org/wiki/Privacy_policy">privacy policy</a>.
		</li>
	</ul>
	<ul id="footer-places">
		<li id="footer-places-privacy"><a href="https://wikimediafoundation.org/wiki/Privacy_policy"
										  title="wmf:Privacy policy">Privacy policy</a></li>
		<li id="footer-places-about"><a href="https://meta.wikimedia.org/wiki/Meta:About" title="Meta:About">About
				Meta</a>
		</li>
		<li id="footer-places-disclaimer"><a href="https://meta.wikimedia.org/wiki/Meta:General_disclaimer"
											 title="Meta:General disclaimer">Disclaimers</a></li>
		<li id="footer-places-developers"><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/How_to_contribute">Developers</a>
		</li>
		<li id="footer-places-mobileview"><a
				href="https://meta.m.wikimedia.org/w/index.php?title=Main_Page&amp;banner=B14WMDE_45_141229_ctrl&amp;uselang=en&amp;force=1&amp;mobileaction=toggle_view_mobile"
				class="noprint stopMobileRedirectToggle">Mobile view</a></li>
	</ul>
	<ul id="footer-icons" class="noprint">
		<li id="footer-copyrightico">
			<a href="https://wikimediafoundation.org/"><img src="mw-files/wikimedia-button.png"
															srcset="/static/images/wikimedia-button-1.5x.png 1.5x, /static/images/wikimedia-button-2x.png 2x"
															alt="Wikimedia Foundation" height="31" width="88"></a></li>
		<li id="footer-poweredbyico">
			<a href="https://www.mediawiki.org/"><img src="mw-files/poweredby_mediawiki_88x31.png"
													  alt="Powered by MediaWiki"
													  srcset="/static/1.27.0-wmf.1/resources/assets/poweredby_mediawiki_132x47.png 1.5x, /static/1.27.0-wmf.1/resources/assets/poweredby_mediawiki_176x62.png 2x"
													  height="31" width="88"></a></li>
	</ul>
	<div style="clear:both"></div>
</div>
<script>window.RLQ = window.RLQ || [];
	window.RLQ.push( function() {
		mw.loader.state( {
			"ext.globalCssJs.site": "ready",
			"ext.globalCssJs.user": "ready",
			"user": "ready",
			"user.groups": "ready"
		} );
	} );</script>
<link rel="stylesheet" href="mw-files/load_003.css">
<script>window.RLQ = window.RLQ || [];
	window.RLQ.push( function() {
		mw.loader.load( ["mediawiki.action.view.postEdit", "site", "mediawiki.user", "mediawiki.hidpi", "mediawiki.page.ready", "mediawiki.searchSuggest", "mmv.bootstrap.autostart", "ext.eventLogging.subscriber", "ext.wikimediaEvents", "ext.wikimediaEvents.geoFeatures", "ext.navigationTiming", "ext.gadget.wm-portal-preview", "ext.gadget.CentralAuthInterlinkFixer", "ext.gadget.teahouse", "ext.gadget.addMe", "ext.gadget.formWizard", "ext.visualEditor.targetLoader", "schema.UniversalLanguageSelector", "ext.uls.eventlogger", "ext.uls.pt"] );
	} );</script>
<script>window.RLQ = window.RLQ || [];
	window.RLQ.push( function() {
		/*
		 @nomin
		 */
		mw.config.set( { "wgBackendResponseTime": 79, "wgHostname": "mw1167" } );
	} );</script>


<div class="suggestions" style="display: none; font-size: 13px;">
	<div class="suggestions-results"></div>
	<div class="suggestions-special"></div>
</div>
</body>
</html>