<!-- Gallery - SKM -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../../wp-content/themes/politicalwp/images/theme_favicon.png">
	<title>Gallery - SKM</title>
	<style type="text/css" media="all">
		@font-face {
			font-family: 'Arvo';
			font-style: italic;
			font-weight: 400;
			src: local('Arvo-Italic'), url(https://fonts.gstatic.com/s/arvo/v14/tDbN2oWUg0MKqSIg75Tp.woff) format('woff')
		}

		@font-face {
			font-family: 'Arvo';
			font-style: italic;
			font-weight: 700;
			src: local('Arvo Bold Italic'), local('Arvo-BoldItalic'), url(https://fonts.gstatic.com/s/arvo/v14/tDbO2oWUg0MKqSIoVLH68dr5.woff) format('woff')
		}

		@font-face {
			font-family: 'Arvo';
			font-display: block;
			font-style: normal;
			font-weight: 400;
			src: local('Arvo'), url(https://fonts.gstatic.com/s/arvo/v14/tDbD2oWUg0MKqScQ6w.woff) format('woff')
		}

		@font-face {
			font-family: 'Arvo';
			font-display: block;
			font-style: normal;
			font-weight: 700;
			src: local('Arvo Bold'), local('Arvo-Bold'), url(https://fonts.gstatic.com/s/arvo/v14/tDbM2oWUg0MKoZw1-LPK9Q.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-style: italic;
			font-weight: 300;
			src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV9hrIqU.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-style: italic;
			font-weight: 400;
			src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUK0Zdcs.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-style: italic;
			font-weight: 600;
			src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUdhrIqU.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-style: italic;
			font-weight: 700;
			src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWiUNhrIqU.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-style: italic;
			font-weight: 800;
			src: local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKW-U9hrIqU.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-display: block;
			font-style: normal;
			font-weight: 300;
			src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OUuhv.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-display: block;
			font-style: normal;
			font-weight: 400;
			src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0d.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-display: block;
			font-style: normal;
			font-weight: 600;
			src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUuhv.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-display: block;
			font-style: normal;
			font-weight: 700;
			src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOUuhv.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-display: block;
			font-style: normal;
			font-weight: 800;
			src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN8rsOUuhv.woff) format('woff')
		}
	</style>
	<style type="text/css" media="all">
		@font-face {
			font-family: 'Arvo';
			font-display: block;
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Arvo'), url(https://fonts.gstatic.com/s/arvo/v14/tDbD2oWUg0MKqScQ6w.woff) format('woff')
		}

		@font-face {
			font-family: 'Open Sans';
			font-display: block;
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0d.woff) format('woff')
		}
	</style>
	<style id="fvm-header-1" media="only screen and (max-width: 768px)">
		.woocommerce table.shop_table_responsive thead,
		.woocommerce-page table.shop_table_responsive thead {
			display: none
		}

		.woocommerce table.shop_table_responsive tbody tr:first-child td:first-child,
		.woocommerce-page table.shop_table_responsive tbody tr:first-child td:first-child {
			border-top: 0
		}

		.woocommerce table.shop_table_responsive tbody th,
		.woocommerce-page table.shop_table_responsive tbody th {
			display: none
		}

		.woocommerce table.shop_table_responsive tr,
		.woocommerce-page table.shop_table_responsive tr {
			display: block
		}

		.woocommerce table.shop_table_responsive tr td,
		.woocommerce-page table.shop_table_responsive tr td {
			display: block;
			text-align: right !important
		}

		.woocommerce table.shop_table_responsive tr td.order-actions,
		.woocommerce-page table.shop_table_responsive tr td.order-actions {
			text-align: left !important
		}

		.woocommerce table.shop_table_responsive tr td::before,
		.woocommerce-page table.shop_table_responsive tr td::before {
			content: attr(data-title) ": ";
			font-weight: 700;
			float: left
		}

		.woocommerce table.shop_table_responsive tr td.actions::before,
		.woocommerce table.shop_table_responsive tr td.product-remove::before,
		.woocommerce-page table.shop_table_responsive tr td.actions::before,
		.woocommerce-page table.shop_table_responsive tr td.product-remove::before {
			display: none
		}

		.woocommerce table.shop_table_responsive tr:nth-child(2n) td,
		.woocommerce-page table.shop_table_responsive tr:nth-child(2n) td {
			background-color: rgba(0, 0, 0, .025)
		}

		.woocommerce table.my_account_orders tr td.order-actions,
		.woocommerce-page table.my_account_orders tr td.order-actions {
			text-align: left
		}

		.woocommerce table.my_account_orders tr td.order-actions::before,
		.woocommerce-page table.my_account_orders tr td.order-actions::before {
			display: none
		}

		.woocommerce table.my_account_orders tr td.order-actions .button,
		.woocommerce-page table.my_account_orders tr td.order-actions .button {
			float: none;
			margin: .125em .25em .125em 0
		}

		.woocommerce .col2-set .col-1,
		.woocommerce .col2-set .col-2,
		.woocommerce-page .col2-set .col-1,
		.woocommerce-page .col2-set .col-2 {
			float: none;
			width: 100%
		}

		.woocommerce ul.products[class*=columns-] li.product,
		.woocommerce-page ul.products[class*=columns-] li.product {
			width: 48%;
			float: left;
			clear: both;
			margin: 0 0 2.992em
		}

		.woocommerce ul.products[class*=columns-] li.product:nth-child(2n),
		.woocommerce-page ul.products[class*=columns-] li.product:nth-child(2n) {
			float: right;
			clear: none !important
		}

		.woocommerce #content div.product div.images,
		.woocommerce #content div.product div.summary,
		.woocommerce div.product div.images,
		.woocommerce div.product div.summary,
		.woocommerce-page #content div.product div.images,
		.woocommerce-page #content div.product div.summary,
		.woocommerce-page div.product div.images,
		.woocommerce-page div.product div.summary {
			float: none;
			width: 100%
		}

		.woocommerce #content table.cart .product-thumbnail,
		.woocommerce table.cart .product-thumbnail,
		.woocommerce-page #content table.cart .product-thumbnail,
		.woocommerce-page table.cart .product-thumbnail {
			display: none
		}

		.woocommerce #content table.cart td.actions,
		.woocommerce table.cart td.actions,
		.woocommerce-page #content table.cart td.actions,
		.woocommerce-page table.cart td.actions {
			text-align: left
		}

		.woocommerce #content table.cart td.actions .coupon,
		.woocommerce table.cart td.actions .coupon,
		.woocommerce-page #content table.cart td.actions .coupon,
		.woocommerce-page table.cart td.actions .coupon {
			float: none;
			padding-bottom: .5em
		}

		.woocommerce #content table.cart td.actions .coupon::after,
		.woocommerce #content table.cart td.actions .coupon::before,
		.woocommerce table.cart td.actions .coupon::after,
		.woocommerce table.cart td.actions .coupon::before,
		.woocommerce-page #content table.cart td.actions .coupon::after,
		.woocommerce-page #content table.cart td.actions .coupon::before,
		.woocommerce-page table.cart td.actions .coupon::after,
		.woocommerce-page table.cart td.actions .coupon::before {
			content: ' ';
			display: table
		}

		.woocommerce #content table.cart td.actions .coupon::after,
		.woocommerce table.cart td.actions .coupon::after,
		.woocommerce-page #content table.cart td.actions .coupon::after,
		.woocommerce-page table.cart td.actions .coupon::after {
			clear: both
		}

		.woocommerce #content table.cart td.actions .coupon .button,
		.woocommerce #content table.cart td.actions .coupon .input-text,
		.woocommerce #content table.cart td.actions .coupon input,
		.woocommerce table.cart td.actions .coupon .button,
		.woocommerce table.cart td.actions .coupon .input-text,
		.woocommerce table.cart td.actions .coupon input,
		.woocommerce-page #content table.cart td.actions .coupon .button,
		.woocommerce-page #content table.cart td.actions .coupon .input-text,
		.woocommerce-page #content table.cart td.actions .coupon input,
		.woocommerce-page table.cart td.actions .coupon .button,
		.woocommerce-page table.cart td.actions .coupon .input-text,
		.woocommerce-page table.cart td.actions .coupon input {
			width: 48%;
			box-sizing: border-box
		}

		.woocommerce #content table.cart td.actions .coupon .button.alt,
		.woocommerce #content table.cart td.actions .coupon .input-text+.button,
		.woocommerce table.cart td.actions .coupon .button.alt,
		.woocommerce table.cart td.actions .coupon .input-text+.button,
		.woocommerce-page #content table.cart td.actions .coupon .button.alt,
		.woocommerce-page #content table.cart td.actions .coupon .input-text+.button,
		.woocommerce-page table.cart td.actions .coupon .button.alt,
		.woocommerce-page table.cart td.actions .coupon .input-text+.button {
			float: right
		}

		.woocommerce #content table.cart td.actions .button,
		.woocommerce table.cart td.actions .button,
		.woocommerce-page #content table.cart td.actions .button,
		.woocommerce-page table.cart td.actions .button {
			display: block;
			width: 100%
		}

		.woocommerce .cart-collaterals .cart_totals,
		.woocommerce .cart-collaterals .cross-sells,
		.woocommerce .cart-collaterals .shipping_calculator,
		.woocommerce-page .cart-collaterals .cart_totals,
		.woocommerce-page .cart-collaterals .cross-sells,
		.woocommerce-page .cart-collaterals .shipping_calculator {
			width: 100%;
			float: none;
			text-align: left
		}

		.woocommerce-page.woocommerce-checkout form.login .form-row,
		.woocommerce.woocommerce-checkout form.login .form-row {
			width: 100%;
			float: none
		}

		.woocommerce #payment .terms,
		.woocommerce-page #payment .terms {
			text-align: left;
			padding: 0
		}

		.woocommerce #payment #place_order,
		.woocommerce-page #payment #place_order {
			float: none;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 1em
		}

		.woocommerce .lost_reset_password .form-row-first,
		.woocommerce .lost_reset_password .form-row-last,
		.woocommerce-page .lost_reset_password .form-row-first,
		.woocommerce-page .lost_reset_password .form-row-last {
			width: 100%;
			float: none;
			margin-right: 0
		}

		.woocommerce-account .woocommerce-MyAccount-content,
		.woocommerce-account .woocommerce-MyAccount-navigation {
			float: none;
			width: 100%
		}

		.single-product .twentythirteen .panel {
			padding-left: 20px !important;
			padding-right: 20px !important
		}
	</style>
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel='stylesheet' id='fvm-header-0-css'
		href='../../wp-content/uploads/cache/fvm/1600714823/out/header-c9a3ab654f82089740c8cde1fb910e7007eabd28.min.css'
		type='text/css' media='all' />
	<link rel='stylesheet' id='fvm-header-2-css'
		href='../../wp-content/uploads/cache/fvm/1600714823/out/header-5faf5947623cbbe513e0b707c0454aa4c55efe3c.min.css'
		type='text/css' media='all' />
	<script type='text/javascript' src='../../wp-includes/js/jquery/jquery.js' id='jquery-core-js'></script>
	<script defer type='text/javascript'
		src='../../wp-content/uploads/cache/fvm/1600714823/out/header-196a8131980f9294edc2d89b0680dc429d777c1f.min.js'
		id='fvm-header-0-js'></script>
	<script defer type='text/javascript'
		src='../../wp-content/uploads/cache/fvm/1600714823/out/header-914a4d53fc79250195d7c8e74d0e4157f708f3bb.min.js'
		id='fvm-header-2-js'></script>
	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<style type="text/css">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	<style type="text/css" id="redux_demo-dynamic-css" title="dynamic-css" class="redux-options-output">
		body.layout_boxed {
			background-color: #E7E7E7;
			background-image: url('../../wp-content/themes/politicalwp/images/boxed_pattern.png');
		}

		body .politicalwp_preloader_holder {
			background-color: #053360;
		}

		.fixed-sidebar-menu {
			background-color: rgba(26, 27, 34, 0.95);
		}

		#navbar .menu-item>a,
		.navbar-nav .search_products a,
		.navbar-default .navbar-nav>li>a:hover,
		.navbar-default .navbar-nav>li>a:focus,
		.navbar-default .navbar-nav>li>a {
			color: #1a1b22;
		}

		#navbar .sub-menu,
		.navbar ul li ul.sub-menu {
			background-color: #ffffff;
		}

		#navbar ul.sub-menu li a {
			color: #1a1b22;
		}

		#navbar ul.sub-menu li a:hover {
			background-color: transparent;
		}

		#navbar ul.sub-menu li a:hover {
			color: #E3111A;
		}

		body {
			font-family: "Open Sans";
			font-display: swap;
			background-color: #e0e0e0;
		}

		h1,
		h1 span {
			font-family: Arvo;
			font-size: 36px;
			font-display: swap;
		}

		h2 {
			font-family: Arvo;
			font-size: 30px;
			font-display: swap;
		}

		h3 {
			font-family: Arvo;
			font-size: 24px;
			font-display: swap;
		}

		h4 {
			font-family: Arvo;
			font-size: 18px;
			font-display: swap;
		}

		h5 {
			font-family: Arvo;
			font-size: 14px;
			font-display: swap;
		}

		h6 {
			font-family: Arvo;
			font-size: 12px;
			font-display: swap;
		}

		input,
		textarea {
			font-family: "Open Sans";
			font-display: swap;
		}

		input[type="submit"] {
			font-family: "Open Sans";
			font-display: swap;
		}

		header .top-header {
			background-color: #053360;
		}

		header .top-header .left-side a {
			color: #ffffff;
		}

		.navbar-default {
			background-image: linear-gradient(to right, #f78320, #ed1e26, #01a451);
		}

		header {
			color: #1a1b22;
		}

		.fixed-sidebar-menu {
			background-color: #fff;
		}

		.fixed-sidebar-menu .logo,
		.fixed-sidebar-menu .widget-title,
		.fixed-sidebar-menu .widget-title {
			color: #000000;
		}

		.footer {
			padding-top: 2%;
			padding-left: 77.6667px;
			padding-right: 77.3333px;
			background-image: linear-gradient(to right, #f78320, #ed1e26, #01a451);
		}

		.header-nav-actions .donate-now {
			background: #E3111A;
		}

		.header-nav-actions .donate-now:hover {
			background: #053360;
		}

		.single article .article-content p {
			font-family: "Open Sans";
			line-height: 26px;
			color: #454646;
			font-size: 16px;
			font-display: swap;
		}

		.login-logout-button {
            background-color: #0096e2;
            color: #fff;
            padding: 10px;
            border-radius: 20px;
        }
	</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">
		.vc_custom_1494276490995 {
			padding-top: 80px !important;
			padding-bottom: 70px !important;
		}

		.vc_custom_1494276417716 {
			padding-top: 70px !important;
			padding-bottom: 70px !important;
		}

		.vc_custom_1494276490995 {
			padding-top: 80px !important;
			padding-bottom: 70px !important;
		}

		.vc_custom_1494276417716 {
			padding-top: 70px !important;
			padding-bottom: 70px !important;
		}
	</style><noscript>
		<style>
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>
</head>

<body data-rsssl=1
	class="page-template-default page page-id-6165 page-child parent-pageid-5954 theme-politicalwp woocommerce-no-js tribe-no-js       header1   wpb-js-composer js-comp-ver-6.4.0 vc_responsive">
	<div id="page" class="hfeed site">
		<header class="header1">
			<?php
			require_once '../../subfoldernavbar.php';
			?>
		</header>
		<div id="primary" class="no-padding content-area no-sidebar">
			<div class="container">
				<div class="row">
					<main id="main" class="col-md-12 site-main main-content">
						<article id="post-6165" class="post-6165 page type-page status-publish hentry">
							<div class="entry-content">
								<div data-vc-full-width="true" data-vc-full-width-init="false"
									class="vc_row wpb_row vc_row-fluid vc_custom_1494276417716 vc_row-has-fill">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="title-subtile-holder">
													<h1 class="section-title">Gallery</h1>
												</div>
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<div id="sb_instagram" class="sbi sbi_col_3  sbi_width_resp"
															style="padding-bottom: 30px;width: 100%;"
															data-feedid="sbi_17841433091278439#9" data-res="auto"
															data-cols="3" data-num="9"
															data-shortcode-atts="{&quot;num&quot;:&quot;9&quot;,&quot;cols&quot;:&quot;3&quot;,&quot;showfollow&quot;:&quot;false&quot;,&quot;showheader&quot;:&quot;false&quot;,&quot;imagepadding&quot;:&quot;15&quot;,&quot;showbutton&quot;:&quot;false&quot;}">
															<div id="sbi_images" style="padding: 15px;">
																<div class="sbi_item sbi_type_image sbi_new sbi_transition"
																	id="sbi_17898448993457981" data-date="1586695184">
																	<div class="sbi_photo_wrap"> <a class="sbi_photo"
																			href="https://www.instagram.com/p/B-4ZIOtFhbb/"
																			target="_blank" rel="noopener nofollow"
																			data-full-res="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/93136890_213856316565075_2214136576852634034_n.jpg?_nc_cat=107&#038;ccb=1-7&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Lfp9kaEB7jAAX9ZFde_&#038;_nc_ht=scontent-otp1-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT_xbSLlWJHMxDq8MDBLq6IGbR2cFzl0VYkRJPpf2hp74g&#038;oe=633986CF"
																			data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93136890_213856316565075_2214136576852634034_n.jpg?_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Lfp9kaEB7jAAX9ZFde_&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_xbSLlWJHMxDq8MDBLq6IGbR2cFzl0VYkRJPpf2hp74g&amp;oe=633986CF&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4ZIOtFhbb\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4ZIOtFhbb\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93136890_213856316565075_2214136576852634034_n.jpg?_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Lfp9kaEB7jAAX9ZFde_&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_xbSLlWJHMxDq8MDBLq6IGbR2cFzl0VYkRJPpf2hp74g&amp;oe=633986CF&quot;}">
																			<span class="sbi-screenreader">Instagram
																				post 17898448993457981</span> <img
																				src="../../wp-content/plugins/instagram-feed/img/placeholder.png"
																				alt="Instagram post 17898448993457981">
																		</a></div>
																</div>
																<div class="sbi_item sbi_type_image sbi_new sbi_transition"
																	id="sbi_17848621958029187" data-date="1586695152">
																	<div class="sbi_photo_wrap"> <a class="sbi_photo"
																			href="https://www.instagram.com/p/B-4ZEVmFg1u/"
																			target="_blank" rel="noopener nofollow"
																			data-full-res="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/93109343_234689961272008_7749725051036928604_n.jpg?_nc_cat=107&#038;ccb=1-7&#038;_nc_sid=8ae9d6&#038;_nc_ohc=5e46db5wLvIAX-ZGZMe&#038;_nc_ht=scontent-otp1-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT8bx3i23gJrmZsHL15aq0K6OnFZj7em961UUKTdpxU0JA&#038;oe=6339A13F"
																			data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93109343_234689961272008_7749725051036928604_n.jpg?_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=5e46db5wLvIAX-ZGZMe&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT8bx3i23gJrmZsHL15aq0K6OnFZj7em961UUKTdpxU0JA&amp;oe=6339A13F&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4ZEVmFg1u\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4ZEVmFg1u\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93109343_234689961272008_7749725051036928604_n.jpg?_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=5e46db5wLvIAX-ZGZMe&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT8bx3i23gJrmZsHL15aq0K6OnFZj7em961UUKTdpxU0JA&amp;oe=6339A13F&quot;}">
																			<span class="sbi-screenreader">Instagram
																				post 17848621958029187</span> <img
																				src="../../wp-content/plugins/instagram-feed/img/placeholder.png"
																				alt="Instagram post 17848621958029187">
																		</a></div>
																</div>
																<div class="sbi_item sbi_type_image sbi_new sbi_transition"
																	id="sbi_18095560972149208" data-date="1586695135">
																	<div class="sbi_photo_wrap"> <a class="sbi_photo"
																			href="https://www.instagram.com/p/B-4ZCUEFiTT/"
																			target="_blank" rel="noopener nofollow"
																			data-full-res="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/93807902_3110876942291089_6340813504599223258_n.jpg?_nc_cat=104&#038;ccb=1-7&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Y5M0-tF25XQAX_1mcx_&#038;_nc_ht=scontent-otp1-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT_YGseaqViCJijC_IiX4Ue-orjcaM3Ige6pvNdMn1Bn5w&#038;oe=633A4FA2"
																			data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93807902_3110876942291089_6340813504599223258_n.jpg?_nc_cat=104&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Y5M0-tF25XQAX_1mcx_&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_YGseaqViCJijC_IiX4Ue-orjcaM3Ige6pvNdMn1Bn5w&amp;oe=633A4FA2&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4ZCUEFiTT\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4ZCUEFiTT\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93807902_3110876942291089_6340813504599223258_n.jpg?_nc_cat=104&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Y5M0-tF25XQAX_1mcx_&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_YGseaqViCJijC_IiX4Ue-orjcaM3Ige6pvNdMn1Bn5w&amp;oe=633A4FA2&quot;}">
																			<span class="sbi-screenreader">Instagram
																				post 18095560972149208</span> <img
																				src="../../wp-content/plugins/instagram-feed/img/placeholder.png"
																				alt="Instagram post 18095560972149208">
																		</a></div>
																</div>
																<div class="sbi_item sbi_type_image sbi_new sbi_transition"
																	id="sbi_18137157838030125" data-date="1586695102">
																	<div class="sbi_photo_wrap"> <a class="sbi_photo"
																			href="https://www.instagram.com/p/B-4Y-RvFROa/"
																			target="_blank" rel="noopener nofollow"
																			data-full-res="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/93192234_3049123745109391_2591646065378914576_n.jpg?_nc_cat=101&#038;ccb=1-7&#038;_nc_sid=8ae9d6&#038;_nc_ohc=gRhWjvId4JcAX8QXQUb&#038;_nc_ht=scontent-otp1-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT-vchRnnVe0fQApr6Ikt2uxoZ-lbTn0uc9X8FmqIja1ag&#038;oe=633A3B61"
																			data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93192234_3049123745109391_2591646065378914576_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=gRhWjvId4JcAX8QXQUb&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-vchRnnVe0fQApr6Ikt2uxoZ-lbTn0uc9X8FmqIja1ag&amp;oe=633A3B61&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4Y-RvFROa\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4Y-RvFROa\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93192234_3049123745109391_2591646065378914576_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=gRhWjvId4JcAX8QXQUb&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-vchRnnVe0fQApr6Ikt2uxoZ-lbTn0uc9X8FmqIja1ag&amp;oe=633A3B61&quot;}">
																			<span class="sbi-screenreader">Instagram
																				post 18137157838030125</span> <img
																				src="../../wp-content/plugins/instagram-feed/img/placeholder.png"
																				alt="Instagram post 18137157838030125">
																		</a></div>
																</div>
																<div class="sbi_item sbi_type_image sbi_new sbi_transition"
																	id="sbi_18113433838103149" data-date="1586695089">
																	<div class="sbi_photo_wrap"> <a class="sbi_photo"
																			href="https://www.instagram.com/p/B-4Y8pJFi9S/"
																			target="_blank" rel="noopener nofollow"
																			data-full-res="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/93242314_837867626740581_2952048287211757051_n.jpg?_nc_cat=108&#038;ccb=1-7&#038;_nc_sid=8ae9d6&#038;_nc_ohc=3G1ZX_2xupsAX_iyJkL&#038;_nc_ht=scontent-otp1-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT-l1ukKrLgOInh8lNp8iQ3IjQ3aSDYfjY4MmfsDkRlMRQ&#038;oe=6338BFD6"
																			data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93242314_837867626740581_2952048287211757051_n.jpg?_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3G1ZX_2xupsAX_iyJkL&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-l1ukKrLgOInh8lNp8iQ3IjQ3aSDYfjY4MmfsDkRlMRQ&amp;oe=6338BFD6&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4Y8pJFi9S\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4Y8pJFi9S\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93242314_837867626740581_2952048287211757051_n.jpg?_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3G1ZX_2xupsAX_iyJkL&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-l1ukKrLgOInh8lNp8iQ3IjQ3aSDYfjY4MmfsDkRlMRQ&amp;oe=6338BFD6&quot;}">
																			<span class="sbi-screenreader">Instagram
																				post 18113433838103149</span> <img
																				src="../../wp-content/plugins/instagram-feed/img/placeholder.png"
																				alt="Instagram post 18113433838103149">
																		</a></div>
																</div>
																<div class="sbi_item sbi_type_image sbi_new sbi_transition"
																	id="sbi_17896590634473258" data-date="1586695037">
																	<div class="sbi_photo_wrap"> <a class="sbi_photo"
																			href="https://www.instagram.com/p/B-4Y2WtlB7g/"
																			target="_blank" rel="noopener nofollow"
																			data-full-res="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/92774243_166987701432810_6230185477012085084_n.jpg?_nc_cat=106&#038;ccb=1-7&#038;_nc_sid=8ae9d6&#038;_nc_ohc=BlhsKPlUhOYAX-gMig0&#038;_nc_ht=scontent-otp1-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT_gF6B-hS88MOseHtUQI0Aw0Bz9l63ZgN2D316sA51NEw&#038;oe=6338C340"
																			data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/92774243_166987701432810_6230185477012085084_n.jpg?_nc_cat=106&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=BlhsKPlUhOYAX-gMig0&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_gF6B-hS88MOseHtUQI0Aw0Bz9l63ZgN2D316sA51NEw&amp;oe=6338C340&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4Y2WtlB7g\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4Y2WtlB7g\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/92774243_166987701432810_6230185477012085084_n.jpg?_nc_cat=106&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=BlhsKPlUhOYAX-gMig0&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_gF6B-hS88MOseHtUQI0Aw0Bz9l63ZgN2D316sA51NEw&amp;oe=6338C340&quot;}">
																			<span class="sbi-screenreader">Instagram
																				post 17896590634473258</span> <img
																				src="../../wp-content/plugins/instagram-feed/img/placeholder.png"
																				alt="Instagram post 17896590634473258">
																		</a></div>
																</div>
																<div class="sbi_item sbi_type_image sbi_new sbi_transition"
																	id="sbi_18112926601105759" data-date="1586695009">
																	<div class="sbi_photo_wrap"> <a class="sbi_photo"
																			href="https://www.instagram.com/p/B-4Yy9Il85q/"
																			target="_blank" rel="noopener nofollow"
																			data-full-res="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/93232665_229003098184057_7759760632416052174_n.jpg?_nc_cat=109&#038;ccb=1-7&#038;_nc_sid=8ae9d6&#038;_nc_ohc=py0X9aGfZ-wAX-Te3Ly&#038;_nc_oc=AQk55XMPxLkAPoW3ZyZWbUZGXlOHYKnV1WDpihS50fUZgrQ_JVOTQ1lX8gktvInTfe0&#038;_nc_ht=scontent-otp1-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT_75Gp2s8NgT6sKtlUnfiEUdj4XJ74nRCV2kNWEZ34DbQ&#038;oe=63394004"
																			data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93232665_229003098184057_7759760632416052174_n.jpg?_nc_cat=109&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=py0X9aGfZ-wAX-Te3Ly&amp;_nc_oc=AQk55XMPxLkAPoW3ZyZWbUZGXlOHYKnV1WDpihS50fUZgrQ_JVOTQ1lX8gktvInTfe0&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_75Gp2s8NgT6sKtlUnfiEUdj4XJ74nRCV2kNWEZ34DbQ&amp;oe=63394004&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4Yy9Il85q\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4Yy9Il85q\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93232665_229003098184057_7759760632416052174_n.jpg?_nc_cat=109&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=py0X9aGfZ-wAX-Te3Ly&amp;_nc_oc=AQk55XMPxLkAPoW3ZyZWbUZGXlOHYKnV1WDpihS50fUZgrQ_JVOTQ1lX8gktvInTfe0&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_75Gp2s8NgT6sKtlUnfiEUdj4XJ74nRCV2kNWEZ34DbQ&amp;oe=63394004&quot;}">
																			<span class="sbi-screenreader">Instagram
																				post 18112926601105759</span> <img
																				src="../../wp-content/plugins/instagram-feed/img/placeholder.png"
																				alt="Instagram post 18112926601105759">
																		</a></div>
																</div>
																<div class="sbi_item sbi_type_image sbi_new sbi_transition"
																	id="sbi_17842749860106834" data-date="1586694985">
																	<div class="sbi_photo_wrap"> <a class="sbi_photo"
																			href="https://www.instagram.com/p/B-4YwBrFLx7/"
																			target="_blank" rel="noopener nofollow"
																			data-full-res="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/92653669_262909848072936_1451630384154529786_n.jpg?_nc_cat=101&#038;ccb=1-7&#038;_nc_sid=8ae9d6&#038;_nc_ohc=hwMkDvN8nS0AX8eU0DD&#038;_nc_ht=scontent-otp1-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT9ATQNuBL7qMMJCnqtL-jWpCbQF_9okcnqyLa_oI2z2oQ&#038;oe=6338F615"
																			data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/92653669_262909848072936_1451630384154529786_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=hwMkDvN8nS0AX8eU0DD&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9ATQNuBL7qMMJCnqtL-jWpCbQF_9okcnqyLa_oI2z2oQ&amp;oe=6338F615&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4YwBrFLx7\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4YwBrFLx7\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/92653669_262909848072936_1451630384154529786_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=hwMkDvN8nS0AX8eU0DD&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9ATQNuBL7qMMJCnqtL-jWpCbQF_9okcnqyLa_oI2z2oQ&amp;oe=6338F615&quot;}">
																			<span class="sbi-screenreader">Instagram
																				post 17842749860106834</span> <img
																				src="../../wp-content/plugins/instagram-feed/img/placeholder.png"
																				alt="Instagram post 17842749860106834">
																		</a></div>
																</div>
																<div class="sbi_item sbi_type_image sbi_new sbi_transition"
																	id="sbi_17843273450095805" data-date="1586694964">
																	<div class="sbi_photo_wrap"> <a class="sbi_photo"
																			href="https://www.instagram.com/p/B-4YteFlAU-/"
																			target="_blank" rel="noopener nofollow"
																			data-full-res="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/93461467_1655553137928417_7349264296504296188_n.jpg?_nc_cat=101&#038;ccb=1-7&#038;_nc_sid=8ae9d6&#038;_nc_ohc=9qALWjID0D4AX8YhaN8&#038;_nc_ht=scontent-otp1-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT_Yo9C96HCZOabmxIK5aDxKrue7j5LSi7OxtjUN5WQYWg&#038;oe=633A126F"
																			data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93461467_1655553137928417_7349264296504296188_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=9qALWjID0D4AX8YhaN8&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_Yo9C96HCZOabmxIK5aDxKrue7j5LSi7OxtjUN5WQYWg&amp;oe=633A126F&quot;,&quot;150&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4YteFlAU-\/media\/?size=t&quot;,&quot;320&quot;:&quot;https:\/\/www.instagram.com\/p\/B-4YteFlAU-\/media\/?size=m&quot;,&quot;640&quot;:&quot;https:\/\/scontent-otp1-1.cdninstagram.com\/v\/t51.2885-15\/93461467_1655553137928417_7349264296504296188_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=9qALWjID0D4AX8YhaN8&amp;_nc_ht=scontent-otp1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_Yo9C96HCZOabmxIK5aDxKrue7j5LSi7OxtjUN5WQYWg&amp;oe=633A126F&quot;}">
																			<span class="sbi-screenreader">Instagram
																				post 17843273450095805</span> <img
																				src="../../wp-content/plugins/instagram-feed/img/placeholder.png"
																				alt="Instagram post 17843273450095805">
																		</a></div>
																</div>
															</div>
															<div id="sbi_load"></div> <span
																class="sbi_resized_image_data"
																data-feed-id="sbi_17841433091278439#9"
																data-resized="{&quot;17898448993457981&quot;:{&quot;id&quot;:&quot;93136890_213856316565075_2214136576852634034_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17848621958029187&quot;:{&quot;id&quot;:&quot;93109343_234689961272008_7749725051036928604_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18095560972149208&quot;:{&quot;id&quot;:&quot;93807902_3110876942291089_6340813504599223258_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18137157838030125&quot;:{&quot;id&quot;:&quot;93192234_3049123745109391_2591646065378914576_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18113433838103149&quot;:{&quot;id&quot;:&quot;93242314_837867626740581_2952048287211757051_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17896590634473258&quot;:{&quot;id&quot;:&quot;92774243_166987701432810_6230185477012085084_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18112926601105759&quot;:{&quot;id&quot;:&quot;93232665_229003098184057_7759760632416052174_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17842749860106834&quot;:{&quot;id&quot;:&quot;92653669_262909848072936_1451630384154529786_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17843273450095805&quot;:{&quot;id&quot;:&quot;93461467_1655553137928417_7349264296504296188_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}}}">
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false"
									class="vc_row wpb_row vc_row-fluid vc_custom_1493846070013 vc_row-has-fill lvca-dark-bg footer">
									<aside id="politicalwp_social_share-2"
										class="widget vc_column_vc_container widget_politicalwp_social_share">
										<div class="footer-social-links">
											<ul class="share-social-links">
												<li class="facebook"> <a href="http://facebook.com/" target="_blank"><i
															class="fa fa-facebook"></i></a></li>
												<li class="twitter"> <a href="https://twitter.com/envato"
														target="_blank"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"> <a href="http://plus.google.com/"
														target="_blank"><i class="fa fa-google-plus"></i></a></li>
												<li class="pinterest"> <a href="http://pinterest.com/"
														target="_blank"><i class="fa fa-pinterest"></i></a></li>
											</ul>
										</div>
									</aside>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
								<div class="clearfix"></div>
							</div>
						</article>
					</main>
				</div>
			</div>
		</div>
		<style type="text/css">
			.politicalwp--sidepanel {
				background: #fff none repeat scroll 0 0;
				border-radius: 0;
				box-shadow: 0 0 25px rgba(37, 37, 37, 0.4);
				right: 0;
				z-index: 222;
				position: fixed;
				bottom: 60%;
			}

			.politicalwp--sidepanel a i {
				color: #053360;
				font-size: 18px;
			}

			.politicalwp--sidepanel:hover>a {
				width: 60px;
			}

			.politicalwp--sidepanel>a {
				padding: 10px;
				display: block;
				line-height: 35px;
				height: 50px;
				text-align: center;
				width: 50px;
				transition: all 250ms ease-in-out;
			}
		</style>

	</div>
	<script type='text/javascript' id='fvm-footer-0-js-extra'>/*  */
		var wpcf7 = { "apiSettings": { "root": "https:\/\/politicalwp.themeslr.com\/wp-json\/contact-form-7\/v1", "namespace": "contact-form-7\/v1" } };
		var wc_add_to_cart_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/politicalwp.themeslr.com\/shop\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
		var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%" };
		var wc_cart_fragments_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_ed70905f809738e8ead3ed5f845b9628", "fragment_name": "wc_fragments_ed70905f809738e8ead3ed5f845b9628", "request_timeout": "5000" };
		var sb_instagram_js_options = { "font_method": "svg", "resized_url": "https:\/\/politicalwp.themeslr.com\/wp-content\/uploads\/sb-instagram-feed-images\/", "placeholder": "https:\/\/politicalwp.themeslr.com\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png" };
/*  */</script>
	<script defer type='text/javascript'
		src='../../wp-content/uploads/cache/fvm/1600714823/out/footer-b62f80f89fa2b7e4da75ef93b13944567e599cde.min.js'
		id='fvm-footer-0-js'></script>
</body>

</html>