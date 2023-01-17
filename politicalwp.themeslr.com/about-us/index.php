<?php
session_start();
require_once '../../server/aboutparty.php';

?>

<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../wp-content/themes/politicalwp/images/theme_favicon.png">
	<title>About Us - SKM</title>
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
		href='../wp-content/uploads/cache/fvm/1600714823/out/header-c9a3ab654f82089740c8cde1fb910e7007eabd28.min.css'
		type='text/css' media='all' />
	<link rel='stylesheet' id='fvm-header-2-css'
		href='../wp-content/uploads/cache/fvm/1600714823/out/header-5faf5947623cbbe513e0b707c0454aa4c55efe3c.min.css'
		type='text/css' media='all' />
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
			background-image: url('../wp-content/themes/politicalwp/images/boxed_pattern.png');
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

		footer .footer-top {
			background-color: #021426;
			background-repeat: no-repeat;
			background-position: center top;
			background-image: url('../wp-content/themes/politicalwp/images/politicalwp_crowd.jpg');
			background-size: cover;
		}

		footer .footer-top h1.widget-title,
		footer .footer-top h3.widget-title,
		footer .footer-top .widget-title {
			color: #ffffff;
		}

		.footer-row-1 {
			padding-top: 60px;
			padding-bottom: 60px;
		}

		.footer-row-1 {
			margin-top: 0px;
			margin-bottom: 0px;
		}

		.footer-row-1 {
			border-top: 0px solid #515b5e;
			border-bottom: 0px solid #515b5e;
			border-left: 0px solid #515b5e;
			border-right: 0px solid #515b5e;
		}

		footer .footer {
			background-color: #1a1b22;
		}

		footer .footer h1.widget-title,
		footer .footer h3.widget-title,
		footer .footer .widget-title {
			color: #ffffff;
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

		.block {
			padding-top: 30px;
		}

		.footer {
			padding-top: 2%;
			padding-left: 77.6667px;
			padding-right: 77.3333px;
			background-image: linear-gradient(to right, #f78320, #ed1e26, #01a451);
		}

		body {
			background-color: #e0e0e0;
		}

		.login-logout-button {
			background-color: #0096e2;
			color: #fff;
			padding: 10px;
			border-radius: 20px;
		}
	</style>
	<style type="text/css" data-type="vc_custom-css">
		.mpc-menu-item-label {
			background: #b39a68 !important;
		}
	</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">
		.vc_custom_1493849660794 {
			margin-top: 0px !important;
			margin-bottom: 0px !important;
			padding-top: 80px !important;
			padding-bottom: 80px !important;
			background-image: url(../wp-content/uploads/2016/02/politicalwp_crowd7142.jpg?id=6347) !important;
		}

		.vc_custom_1493850215161 {
			margin-bottom: 0px !important;
			padding-bottom: 40px !important;
			background-color: #f5f5f5 !important;
		}

		.vc_custom_1493850228471 {
			margin-bottom: 0px !important;
			padding-top: 20px !important;
			padding-bottom: 80px !important;
		}

		.vc_custom_1493849994352 {
			margin-top: 0em !important;
			margin-bottom: 0px !important;
			padding-top: 30px !important;
			padding-bottom: 80px !important;
			background-color: #f5f5f5 !important;
		}

		.vc_custom_1485978162518 {
			margin-bottom: 0px !important;
			background-color: #ffffff !important;
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
	class="page-template-default page page-id-5888 theme-politicalwp woocommerce-no-js tribe-no-js       header1   wpb-js-composer js-comp-ver-6.4.0 vc_responsive">
	<div id="page" class="hfeed site">
		<header class="header1">
			<?php
				require_once '../subnavbar.php';
			?>
		</header>
		<div id="primary" class="no-padding content-area no-sidebar">
			<div class="container">
				<div class="row">
					<main id="main" class="col-md-12 site-main main-content">
						<article id="post-5888" class="post-5888 page type-page status-publish hentry">
							<div class="entry-content">
								<div data-vc-full-width="true" data-vc-full-width-init="false"
									class="vc_row wpb_row vc_row-fluid vc_custom_1493850228471 vc_row-has-fill">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
<?php
															if (isset($_SESSION['isLoggedIn']) == true && ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1 )) {

							if (isset($_GET['res']) && $_GET['res'] == 1) {
								?>
										<script>
											alert("Successfully Updated");
										</script>
								<?php
							} else if(isset($_GET['res']) && $_GET['res'] == 0) {
								?>
<script>
											alert("Failed. Try again");
										</script>
								<?php
							}
							?>
							<a href="./?res=edit">Edit</a>
							<?php
							if (isset($_GET['res']) && $_GET['res'] == "edit")  {
								if($aboutDetails != FALSE && $aboutDetails->num_rows > 0) {
									while ($about = $aboutDetails->fetch_assoc()) {
											if ($about['id'] == 1) {
								?>

<form accept-charset="UTF-8" action="../../server/updateabout.php" method="POST"
                enctype="multipart/form-data">
                <div class="form-group"> 
                    <label for="title">Title</label>
                    <input type="text" name="heading" value="<?php echo $about['heading']; ?>" class="form-control" id="title" placeholder="Enter the title"
                       required="required">
                </div>
                <div class="form-group">
                    <label for="description">Enter Description:</label>
                    <textarea id="description" name="desc" class="form-control" rows="4" cols="50" maxlength="1000" required="required" placeholder="Enter Description"><?php echo $about['description']; ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Image:</label>
                    <input type="file" name="image" >
                </div>
                <hr>
                <input type="submit" class="btn btn-primary" name="about" value="Submit">
            </form>


								<?php
											}
										}
									}
							}
						}
						
?>


											<?php
									if($aboutDetails != FALSE && $aboutDetails->num_rows > 0) {
										while ($abouts = $aboutDetails->fetch_assoc()) {
												if ($abouts['id'] == 1) {
													
?>

<div class="wpb_wrapper">
												<div class="title-subtile-holder">
													<h1 class="section-title dark_title"><?php echo $abouts['heading'];?></h1>
												</div>
												<div class="vc_row wpb_row vc_inner vc_row-fluid block">
													<div class="wpb_column vc_column_container vc_col-sm-6">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div
																	class="wpb_video_widget wpb_content_element vc_clearfix   vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-left">
																	<div class="wpb_wrapper">
																		<div class="wpb_video_wrapper"><img width="640"
																				height="360"
																				src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($abouts['image']); ?>"		
																				frameborder="0" allowfullscreen></img>
																		</div>

																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-6">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="vc_empty_space" style="height: 10px"><span
																		class="vc_empty_space_inner"></span></div>
																<div class="wpb_text_column wpb_content_element ">
																	<div class="wpb_wrapper">
																		<?php echo $abouts['description']; ?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>


<?php
												}
										}
									}
?>

										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
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
	<style id="fvm-footer-0" media="all">
		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both
		}

		.animated.infinite {
			-webkit-animation-iteration-count: infinite;
			animation-iteration-count: infinite
		}

		.animated.hinge {
			-webkit-animation-duration: 2s;
			animation-duration: 2s
		}

		@-webkit-keyframes bounce {

			0%,
			100%,
			20%,
			53%,
			80% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1);
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0)
			}

			40%,
			43% {
				transition-timing-function: cubic-bezier(.755, .050, .855, .060);
				-webkit-transform: translate3d(0, -30px, 0);
				transform: translate3d(0, -30px, 0)
			}

			70% {
				transition-timing-function: cubic-bezier(.755, .050, .855, .060);
				-webkit-transform: translate3d(0, -15px, 0);
				transform: translate3d(0, -15px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, -4px, 0);
				transform: translate3d(0, -4px, 0)
			}
		}

		@keyframes bounce {

			0%,
			100%,
			20%,
			53%,
			80% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1);
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0)
			}

			40%,
			43% {
				transition-timing-function: cubic-bezier(.755, .050, .855, .060);
				-webkit-transform: translate3d(0, -30px, 0);
				transform: translate3d(0, -30px, 0)
			}

			70% {
				transition-timing-function: cubic-bezier(.755, .050, .855, .060);
				-webkit-transform: translate3d(0, -15px, 0);
				transform: translate3d(0, -15px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, -4px, 0);
				transform: translate3d(0, -4px, 0)
			}
		}

		.bounce {
			-webkit-animation-name: bounce;
			animation-name: bounce;
			-webkit-transform-origin: center bottom;
			transform-origin: center bottom
		}

		@-webkit-keyframes flash {

			0%,
			100%,
			50% {
				opacity: 1
			}

			25%,
			75% {
				opacity: 0
			}
		}

		@keyframes flash {

			0%,
			100%,
			50% {
				opacity: 1
			}

			25%,
			75% {
				opacity: 0
			}
		}

		.flash {
			-webkit-animation-name: flash;
			animation-name: flash
		}

		@-webkit-keyframes pulse {
			0% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}

			50% {
				-webkit-transform: scale3d(1.05, 1.05, 1.05);
				transform: scale3d(1.05, 1.05, 1.05)
			}

			100% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}
		}

		@keyframes pulse {
			0% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}

			50% {
				-webkit-transform: scale3d(1.05, 1.05, 1.05);
				transform: scale3d(1.05, 1.05, 1.05)
			}

			100% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}
		}

		.pulse {
			-webkit-animation-name: pulse;
			animation-name: pulse
		}

		@-webkit-keyframes rubberBand {
			0% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}

			30% {
				-webkit-transform: scale3d(1.25, .75, 1);
				transform: scale3d(1.25, .75, 1)
			}

			40% {
				-webkit-transform: scale3d(.75, 1.25, 1);
				transform: scale3d(.75, 1.25, 1)
			}

			50% {
				-webkit-transform: scale3d(1.15, .85, 1);
				transform: scale3d(1.15, .85, 1)
			}

			65% {
				-webkit-transform: scale3d(.95, 1.05, 1);
				transform: scale3d(.95, 1.05, 1)
			}

			75% {
				-webkit-transform: scale3d(1.05, .95, 1);
				transform: scale3d(1.05, .95, 1)
			}

			100% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}
		}

		@keyframes rubberBand {
			0% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}

			30% {
				-webkit-transform: scale3d(1.25, .75, 1);
				transform: scale3d(1.25, .75, 1)
			}

			40% {
				-webkit-transform: scale3d(.75, 1.25, 1);
				transform: scale3d(.75, 1.25, 1)
			}

			50% {
				-webkit-transform: scale3d(1.15, .85, 1);
				transform: scale3d(1.15, .85, 1)
			}

			65% {
				-webkit-transform: scale3d(.95, 1.05, 1);
				transform: scale3d(.95, 1.05, 1)
			}

			75% {
				-webkit-transform: scale3d(1.05, .95, 1);
				transform: scale3d(1.05, .95, 1)
			}

			100% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}
		}

		.rubberBand {
			-webkit-animation-name: rubberBand;
			animation-name: rubberBand
		}

		@-webkit-keyframes shake {

			0%,
			100% {
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0)
			}

			10%,
			30%,
			50%,
			70%,
			90% {
				-webkit-transform: translate3d(-10px, 0, 0);
				transform: translate3d(-10px, 0, 0)
			}

			20%,
			40%,
			60%,
			80% {
				-webkit-transform: translate3d(10px, 0, 0);
				transform: translate3d(10px, 0, 0)
			}
		}

		@keyframes shake {

			0%,
			100% {
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0)
			}

			10%,
			30%,
			50%,
			70%,
			90% {
				-webkit-transform: translate3d(-10px, 0, 0);
				transform: translate3d(-10px, 0, 0)
			}

			20%,
			40%,
			60%,
			80% {
				-webkit-transform: translate3d(10px, 0, 0);
				transform: translate3d(10px, 0, 0)
			}
		}

		.shake {
			-webkit-animation-name: shake;
			animation-name: shake
		}

		@-webkit-keyframes swing {
			20% {
				-webkit-transform: rotate3d(0, 0, 1, 15deg);
				transform: rotate3d(0, 0, 1, 15deg)
			}

			40% {
				-webkit-transform: rotate3d(0, 0, 1, -10deg);
				transform: rotate3d(0, 0, 1, -10deg)
			}

			60% {
				-webkit-transform: rotate3d(0, 0, 1, 5deg);
				transform: rotate3d(0, 0, 1, 5deg)
			}

			80% {
				-webkit-transform: rotate3d(0, 0, 1, -5deg);
				transform: rotate3d(0, 0, 1, -5deg)
			}

			100% {
				-webkit-transform: rotate3d(0, 0, 1, 0deg);
				transform: rotate3d(0, 0, 1, 0deg)
			}
		}

		@keyframes swing {
			20% {
				-webkit-transform: rotate3d(0, 0, 1, 15deg);
				transform: rotate3d(0, 0, 1, 15deg)
			}

			40% {
				-webkit-transform: rotate3d(0, 0, 1, -10deg);
				transform: rotate3d(0, 0, 1, -10deg)
			}

			60% {
				-webkit-transform: rotate3d(0, 0, 1, 5deg);
				transform: rotate3d(0, 0, 1, 5deg)
			}

			80% {
				-webkit-transform: rotate3d(0, 0, 1, -5deg);
				transform: rotate3d(0, 0, 1, -5deg)
			}

			100% {
				-webkit-transform: rotate3d(0, 0, 1, 0deg);
				transform: rotate3d(0, 0, 1, 0deg)
			}
		}

		.swing {
			-webkit-transform-origin: top center;
			transform-origin: top center;
			-webkit-animation-name: swing;
			animation-name: swing
		}

		@-webkit-keyframes tada {
			0% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}

			10%,
			20% {
				-webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
				transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
			}

			30%,
			50%,
			70%,
			90% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
				transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
			}

			40%,
			60%,
			80% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
				transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
			}

			100% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}
		}

		@keyframes tada {
			0% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}

			10%,
			20% {
				-webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
				transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
			}

			30%,
			50%,
			70%,
			90% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
				transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
			}

			40%,
			60%,
			80% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
				transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
			}

			100% {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}
		}

		.tada {
			-webkit-animation-name: tada;
			animation-name: tada
		}

		@-webkit-keyframes wobble {
			0% {
				-webkit-transform: none;
				transform: none
			}

			15% {
				-webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
				transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
			}

			30% {
				-webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
				transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
			}

			45% {
				-webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
				transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
			}

			60% {
				-webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
				transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
			}

			75% {
				-webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
				transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
			}

			100% {
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes wobble {
			0% {
				-webkit-transform: none;
				transform: none
			}

			15% {
				-webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
				transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
			}

			30% {
				-webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
				transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
			}

			45% {
				-webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
				transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
			}

			60% {
				-webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
				transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
			}

			75% {
				-webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
				transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
			}

			100% {
				-webkit-transform: none;
				transform: none
			}
		}

		.wobble {
			-webkit-animation-name: wobble;
			animation-name: wobble
		}

		@-webkit-keyframes bounceIn {

			0%,
			100%,
			20%,
			40%,
			60%,
			80% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			20% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1);
				transform: scale3d(1.1, 1.1, 1.1)
			}

			40% {
				-webkit-transform: scale3d(.9, .9, .9);
				transform: scale3d(.9, .9, .9)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(1.03, 1.03, 1.03);
				transform: scale3d(1.03, 1.03, 1.03)
			}

			80% {
				-webkit-transform: scale3d(.97, .97, .97);
				transform: scale3d(.97, .97, .97)
			}

			100% {
				opacity: 1;
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}
		}

		@keyframes bounceIn {

			0%,
			100%,
			20%,
			40%,
			60%,
			80% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			20% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1);
				transform: scale3d(1.1, 1.1, 1.1)
			}

			40% {
				-webkit-transform: scale3d(.9, .9, .9);
				transform: scale3d(.9, .9, .9)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(1.03, 1.03, 1.03);
				transform: scale3d(1.03, 1.03, 1.03)
			}

			80% {
				-webkit-transform: scale3d(.97, .97, .97);
				transform: scale3d(.97, .97, .97)
			}

			100% {
				opacity: 1;
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}
		}

		.bounceIn {
			-webkit-animation-name: bounceIn;
			animation-name: bounceIn;
			-webkit-animation-duration: .75s;
			animation-duration: .75s
		}

		@-webkit-keyframes bounceInDown {

			0%,
			100%,
			60%,
			75%,
			90% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -3000px, 0);
				transform: translate3d(0, -3000px, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(0, 25px, 0);
				transform: translate3d(0, 25px, 0)
			}

			75% {
				-webkit-transform: translate3d(0, -10px, 0);
				transform: translate3d(0, -10px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, 5px, 0);
				transform: translate3d(0, 5px, 0)
			}

			100% {
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes bounceInDown {

			0%,
			100%,
			60%,
			75%,
			90% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -3000px, 0);
				transform: translate3d(0, -3000px, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(0, 25px, 0);
				transform: translate3d(0, 25px, 0)
			}

			75% {
				-webkit-transform: translate3d(0, -10px, 0);
				transform: translate3d(0, -10px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, 5px, 0);
				transform: translate3d(0, 5px, 0)
			}

			100% {
				-webkit-transform: none;
				transform: none
			}
		}

		.bounceInDown {
			-webkit-animation-name: bounceInDown;
			animation-name: bounceInDown
		}

		@-webkit-keyframes bounceInLeft {

			0%,
			100%,
			60%,
			75%,
			90% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(-3000px, 0, 0);
				transform: translate3d(-3000px, 0, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(25px, 0, 0);
				transform: translate3d(25px, 0, 0)
			}

			75% {
				-webkit-transform: translate3d(-10px, 0, 0);
				transform: translate3d(-10px, 0, 0)
			}

			90% {
				-webkit-transform: translate3d(5px, 0, 0);
				transform: translate3d(5px, 0, 0)
			}

			100% {
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes bounceInLeft {

			0%,
			100%,
			60%,
			75%,
			90% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(-3000px, 0, 0);
				transform: translate3d(-3000px, 0, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(25px, 0, 0);
				transform: translate3d(25px, 0, 0)
			}

			75% {
				-webkit-transform: translate3d(-10px, 0, 0);
				transform: translate3d(-10px, 0, 0)
			}

			90% {
				-webkit-transform: translate3d(5px, 0, 0);
				transform: translate3d(5px, 0, 0)
			}

			100% {
				-webkit-transform: none;
				transform: none
			}
		}

		.bounceInLeft {
			-webkit-animation-name: bounceInLeft;
			animation-name: bounceInLeft
		}

		@-webkit-keyframes bounceInRight {

			0%,
			100%,
			60%,
			75%,
			90% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(3000px, 0, 0);
				transform: translate3d(3000px, 0, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(-25px, 0, 0);
				transform: translate3d(-25px, 0, 0)
			}

			75% {
				-webkit-transform: translate3d(10px, 0, 0);
				transform: translate3d(10px, 0, 0)
			}

			90% {
				-webkit-transform: translate3d(-5px, 0, 0);
				transform: translate3d(-5px, 0, 0)
			}

			100% {
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes bounceInRight {

			0%,
			100%,
			60%,
			75%,
			90% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(3000px, 0, 0);
				transform: translate3d(3000px, 0, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(-25px, 0, 0);
				transform: translate3d(-25px, 0, 0)
			}

			75% {
				-webkit-transform: translate3d(10px, 0, 0);
				transform: translate3d(10px, 0, 0)
			}

			90% {
				-webkit-transform: translate3d(-5px, 0, 0);
				transform: translate3d(-5px, 0, 0)
			}

			100% {
				-webkit-transform: none;
				transform: none
			}
		}

		.bounceInRight {
			-webkit-animation-name: bounceInRight;
			animation-name: bounceInRight
		}

		@-webkit-keyframes bounceInUp {

			0%,
			100%,
			60%,
			75%,
			90% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 3000px, 0);
				transform: translate3d(0, 3000px, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(0, -20px, 0);
				transform: translate3d(0, -20px, 0)
			}

			75% {
				-webkit-transform: translate3d(0, 10px, 0);
				transform: translate3d(0, 10px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, -5px, 0);
				transform: translate3d(0, -5px, 0)
			}

			100% {
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0)
			}
		}

		@keyframes bounceInUp {

			0%,
			100%,
			60%,
			75%,
			90% {
				transition-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 3000px, 0);
				transform: translate3d(0, 3000px, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(0, -20px, 0);
				transform: translate3d(0, -20px, 0)
			}

			75% {
				-webkit-transform: translate3d(0, 10px, 0);
				transform: translate3d(0, 10px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, -5px, 0);
				transform: translate3d(0, -5px, 0)
			}

			100% {
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0)
			}
		}

		.bounceInUp {
			-webkit-animation-name: bounceInUp;
			animation-name: bounceInUp
		}

		@-webkit-keyframes bounceOut {
			20% {
				-webkit-transform: scale3d(.9, .9, .9);
				transform: scale3d(.9, .9, .9)
			}

			50%,
			55% {
				opacity: 1;
				-webkit-transform: scale3d(1.1, 1.1, 1.1);
				transform: scale3d(1.1, 1.1, 1.1)
			}

			100% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}
		}

		@keyframes bounceOut {
			20% {
				-webkit-transform: scale3d(.9, .9, .9);
				transform: scale3d(.9, .9, .9)
			}

			50%,
			55% {
				opacity: 1;
				-webkit-transform: scale3d(1.1, 1.1, 1.1);
				transform: scale3d(1.1, 1.1, 1.1)
			}

			100% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}
		}

		.bounceOut {
			-webkit-animation-name: bounceOut;
			animation-name: bounceOut;
			-webkit-animation-duration: .75s;
			animation-duration: .75s
		}

		@-webkit-keyframes bounceOutDown {
			20% {
				-webkit-transform: translate3d(0, 10px, 0);
				transform: translate3d(0, 10px, 0)
			}

			40%,
			45% {
				opacity: 1;
				-webkit-transform: translate3d(0, -20px, 0);
				transform: translate3d(0, -20px, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}
		}

		@keyframes bounceOutDown {
			20% {
				-webkit-transform: translate3d(0, 10px, 0);
				transform: translate3d(0, 10px, 0)
			}

			40%,
			45% {
				opacity: 1;
				-webkit-transform: translate3d(0, -20px, 0);
				transform: translate3d(0, -20px, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}
		}

		.bounceOutDown {
			-webkit-animation-name: bounceOutDown;
			animation-name: bounceOutDown
		}

		@-webkit-keyframes bounceOutLeft {
			20% {
				opacity: 1;
				-webkit-transform: translate3d(20px, 0, 0);
				transform: translate3d(20px, 0, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}
		}

		@keyframes bounceOutLeft {
			20% {
				opacity: 1;
				-webkit-transform: translate3d(20px, 0, 0);
				transform: translate3d(20px, 0, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}
		}

		.bounceOutLeft {
			-webkit-animation-name: bounceOutLeft;
			animation-name: bounceOutLeft
		}

		@-webkit-keyframes bounceOutRight {
			20% {
				opacity: 1;
				-webkit-transform: translate3d(-20px, 0, 0);
				transform: translate3d(-20px, 0, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}
		}

		@keyframes bounceOutRight {
			20% {
				opacity: 1;
				-webkit-transform: translate3d(-20px, 0, 0);
				transform: translate3d(-20px, 0, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}
		}

		.bounceOutRight {
			-webkit-animation-name: bounceOutRight;
			animation-name: bounceOutRight
		}

		@-webkit-keyframes bounceOutUp {
			20% {
				-webkit-transform: translate3d(0, -10px, 0);
				transform: translate3d(0, -10px, 0)
			}

			40%,
			45% {
				opacity: 1;
				-webkit-transform: translate3d(0, 20px, 0);
				transform: translate3d(0, 20px, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}
		}

		@keyframes bounceOutUp {
			20% {
				-webkit-transform: translate3d(0, -10px, 0);
				transform: translate3d(0, -10px, 0)
			}

			40%,
			45% {
				opacity: 1;
				-webkit-transform: translate3d(0, 20px, 0);
				transform: translate3d(0, 20px, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}
		}

		.bounceOutUp {
			-webkit-animation-name: bounceOutUp;
			animation-name: bounceOutUp
		}

		@-webkit-keyframes fadeIn {
			0% {
				opacity: 0
			}

			100% {
				opacity: 1
			}
		}

		@keyframes fadeIn {
			0% {
				opacity: 0
			}

			100% {
				opacity: 1
			}
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn
		}

		@-webkit-keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInDown {
			-webkit-animation-name: fadeInDown;
			animation-name: fadeInDown
		}

		@-webkit-keyframes fadeInDownBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInDownBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInDownBig {
			-webkit-animation-name: fadeInDownBig;
			animation-name: fadeInDownBig
		}

		@-webkit-keyframes fadeInLeft {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInLeft {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInLeft {
			-webkit-animation-name: fadeInLeft;
			animation-name: fadeInLeft
		}

		@-webkit-keyframes fadeInLeftBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInLeftBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInLeftBig {
			-webkit-animation-name: fadeInLeftBig;
			animation-name: fadeInLeftBig
		}

		@-webkit-keyframes fadeInRight {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInRight {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInRight {
			-webkit-animation-name: fadeInRight;
			animation-name: fadeInRight
		}

		@-webkit-keyframes fadeInRightBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInRightBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInRightBig {
			-webkit-animation-name: fadeInRightBig;
			animation-name: fadeInRightBig
		}

		@-webkit-keyframes fadeInUp {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInUp {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInUp {
			-webkit-animation-name: fadeInUp;
			animation-name: fadeInUp
		}

		@-webkit-keyframes fadeInUpBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInUpBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInUpBig {
			-webkit-animation-name: fadeInUpBig;
			animation-name: fadeInUpBig
		}

		@-webkit-keyframes fadeOut {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0
			}
		}

		@keyframes fadeOut {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0
			}
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut
		}

		@-webkit-keyframes fadeOutDown {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}
		}

		@keyframes fadeOutDown {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}
		}

		.fadeOutDown {
			-webkit-animation-name: fadeOutDown;
			animation-name: fadeOutDown
		}

		@-webkit-keyframes fadeOutDownBig {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}
		}

		@keyframes fadeOutDownBig {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}
		}

		.fadeOutDownBig {
			-webkit-animation-name: fadeOutDownBig;
			animation-name: fadeOutDownBig
		}

		@-webkit-keyframes fadeOutLeft {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}
		}

		@keyframes fadeOutLeft {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}
		}

		.fadeOutLeft {
			-webkit-animation-name: fadeOutLeft;
			animation-name: fadeOutLeft
		}

		@-webkit-keyframes fadeOutLeftBig {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}
		}

		@keyframes fadeOutLeftBig {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}
		}

		.fadeOutLeftBig {
			-webkit-animation-name: fadeOutLeftBig;
			animation-name: fadeOutLeftBig
		}

		@-webkit-keyframes fadeOutRight {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}
		}

		@keyframes fadeOutRight {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}
		}

		.fadeOutRight {
			-webkit-animation-name: fadeOutRight;
			animation-name: fadeOutRight
		}

		@-webkit-keyframes fadeOutRightBig {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}
		}

		@keyframes fadeOutRightBig {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}
		}

		.fadeOutRightBig {
			-webkit-animation-name: fadeOutRightBig;
			animation-name: fadeOutRightBig
		}

		@-webkit-keyframes fadeOutUp {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}
		}

		@keyframes fadeOutUp {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}
		}

		.fadeOutUp {
			-webkit-animation-name: fadeOutUp;
			animation-name: fadeOutUp
		}

		@-webkit-keyframes fadeOutUpBig {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}
		}

		@keyframes fadeOutUpBig {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}
		}

		.fadeOutUpBig {
			-webkit-animation-name: fadeOutUpBig;
			animation-name: fadeOutUpBig
		}

		@-webkit-keyframes flip {
			0% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
				transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
				-webkit-animation-timing-function: ease-out;
				animation-timing-function: ease-out
			}

			40% {
				-webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
				transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
				-webkit-animation-timing-function: ease-out;
				animation-timing-function: ease-out
			}

			50% {
				-webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
				transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}

			80% {
				-webkit-transform: perspective(400px) scale3d(.95, .95, .95);
				transform: perspective(400px) scale3d(.95, .95, .95);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}

			100% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}
		}

		@keyframes flip {
			0% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
				transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
				-webkit-animation-timing-function: ease-out;
				animation-timing-function: ease-out
			}

			40% {
				-webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
				transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
				-webkit-animation-timing-function: ease-out;
				animation-timing-function: ease-out
			}

			50% {
				-webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
				transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}

			80% {
				-webkit-transform: perspective(400px) scale3d(.95, .95, .95);
				transform: perspective(400px) scale3d(.95, .95, .95);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}

			100% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}
		}

		.animated.flip {
			-webkit-backface-visibility: visible;
			backface-visibility: visible;
			-webkit-animation-name: flip;
			animation-name: flip
		}

		@-webkit-keyframes flipInX {
			0% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
				transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
				transition-timing-function: ease-in;
				opacity: 0
			}

			40% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
				transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
				transition-timing-function: ease-in
			}

			60% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
				transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
				opacity: 1
			}

			80% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
				transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
			}

			100% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}
		}

		@keyframes flipInX {
			0% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
				transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
				transition-timing-function: ease-in;
				opacity: 0
			}

			40% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
				transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
				transition-timing-function: ease-in
			}

			60% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
				transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
				opacity: 1
			}

			80% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
				transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
			}

			100% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}
		}

		.flipInX {
			-webkit-backface-visibility: visible !important;
			backface-visibility: visible !important;
			-webkit-animation-name: flipInX;
			animation-name: flipInX
		}

		@-webkit-keyframes flipInY {
			0% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
				transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
				transition-timing-function: ease-in;
				opacity: 0
			}

			40% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
				transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
				transition-timing-function: ease-in
			}

			60% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
				transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
				opacity: 1
			}

			80% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
				transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
			}

			100% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}
		}

		@keyframes flipInY {
			0% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
				transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
				transition-timing-function: ease-in;
				opacity: 0
			}

			40% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
				transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
				transition-timing-function: ease-in
			}

			60% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
				transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
				opacity: 1
			}

			80% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
				transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
			}

			100% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}
		}

		.flipInY {
			-webkit-backface-visibility: visible !important;
			backface-visibility: visible !important;
			-webkit-animation-name: flipInY;
			animation-name: flipInY
		}

		@-webkit-keyframes flipOutX {
			0% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}

			30% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
				transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
				opacity: 1
			}

			100% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
				transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
				opacity: 0
			}
		}

		@keyframes flipOutX {
			0% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}

			30% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
				transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
				opacity: 1
			}

			100% {
				-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
				transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
				opacity: 0
			}
		}

		.flipOutX {
			-webkit-animation-name: flipOutX;
			animation-name: flipOutX;
			-webkit-animation-duration: .75s;
			animation-duration: .75s;
			-webkit-backface-visibility: visible !important;
			backface-visibility: visible !important
		}

		@-webkit-keyframes flipOutY {
			0% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}

			30% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
				transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
				opacity: 1
			}

			100% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
				transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
				opacity: 0
			}
		}

		@keyframes flipOutY {
			0% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}

			30% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
				transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
				opacity: 1
			}

			100% {
				-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
				transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
				opacity: 0
			}
		}

		.flipOutY {
			-webkit-backface-visibility: visible !important;
			backface-visibility: visible !important;
			-webkit-animation-name: flipOutY;
			animation-name: flipOutY;
			-webkit-animation-duration: .75s;
			animation-duration: .75s
		}

		@-webkit-keyframes lightSpeedIn {
			0% {
				-webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
				transform: translate3d(100%, 0, 0) skewX(-30deg);
				opacity: 0
			}

			60% {
				-webkit-transform: skewX(20deg);
				transform: skewX(20deg);
				opacity: 1
			}

			80% {
				-webkit-transform: skewX(-5deg);
				transform: skewX(-5deg);
				opacity: 1
			}

			100% {
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes lightSpeedIn {
			0% {
				-webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
				transform: translate3d(100%, 0, 0) skewX(-30deg);
				opacity: 0
			}

			60% {
				-webkit-transform: skewX(20deg);
				transform: skewX(20deg);
				opacity: 1
			}

			80% {
				-webkit-transform: skewX(-5deg);
				transform: skewX(-5deg);
				opacity: 1
			}

			100% {
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.lightSpeedIn {
			-webkit-animation-name: lightSpeedIn;
			animation-name: lightSpeedIn;
			-webkit-animation-timing-function: ease-out;
			animation-timing-function: ease-out
		}

		@-webkit-keyframes lightSpeedOut {
			0% {
				opacity: 1
			}

			100% {
				-webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
				transform: translate3d(100%, 0, 0) skewX(30deg);
				opacity: 0
			}
		}

		@keyframes lightSpeedOut {
			0% {
				opacity: 1
			}

			100% {
				-webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
				transform: translate3d(100%, 0, 0) skewX(30deg);
				opacity: 0
			}
		}

		.lightSpeedOut {
			-webkit-animation-name: lightSpeedOut;
			animation-name: lightSpeedOut;
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		@-webkit-keyframes rotateIn {
			0% {
				-webkit-transform-origin: center;
				transform-origin: center;
				-webkit-transform: rotate3d(0, 0, 1, -200deg);
				transform: rotate3d(0, 0, 1, -200deg);
				opacity: 0
			}

			100% {
				-webkit-transform-origin: center;
				transform-origin: center;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes rotateIn {
			0% {
				-webkit-transform-origin: center;
				transform-origin: center;
				-webkit-transform: rotate3d(0, 0, 1, -200deg);
				transform: rotate3d(0, 0, 1, -200deg);
				opacity: 0
			}

			100% {
				-webkit-transform-origin: center;
				transform-origin: center;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.rotateIn {
			-webkit-animation-name: rotateIn;
			animation-name: rotateIn
		}

		@-webkit-keyframes rotateInDownLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate3d(0, 0, 1, -45deg);
				transform: rotate3d(0, 0, 1, -45deg);
				opacity: 0
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes rotateInDownLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate3d(0, 0, 1, -45deg);
				transform: rotate3d(0, 0, 1, -45deg);
				opacity: 0
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.rotateInDownLeft {
			-webkit-animation-name: rotateInDownLeft;
			animation-name: rotateInDownLeft
		}

		@-webkit-keyframes rotateInDownRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate3d(0, 0, 1, 45deg);
				transform: rotate3d(0, 0, 1, 45deg);
				opacity: 0
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes rotateInDownRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate3d(0, 0, 1, 45deg);
				transform: rotate3d(0, 0, 1, 45deg);
				opacity: 0
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.rotateInDownRight {
			-webkit-animation-name: rotateInDownRight;
			animation-name: rotateInDownRight
		}

		@-webkit-keyframes rotateInUpLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate3d(0, 0, 1, 45deg);
				transform: rotate3d(0, 0, 1, 45deg);
				opacity: 0
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes rotateInUpLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate3d(0, 0, 1, 45deg);
				transform: rotate3d(0, 0, 1, 45deg);
				opacity: 0
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.rotateInUpLeft {
			-webkit-animation-name: rotateInUpLeft;
			animation-name: rotateInUpLeft
		}

		@-webkit-keyframes rotateInUpRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate3d(0, 0, 1, -90deg);
				transform: rotate3d(0, 0, 1, -90deg);
				opacity: 0
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes rotateInUpRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate3d(0, 0, 1, -90deg);
				transform: rotate3d(0, 0, 1, -90deg);
				opacity: 0
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.rotateInUpRight {
			-webkit-animation-name: rotateInUpRight;
			animation-name: rotateInUpRight
		}

		@-webkit-keyframes rotateOut {
			0% {
				-webkit-transform-origin: center;
				transform-origin: center;
				opacity: 1
			}

			100% {
				-webkit-transform-origin: center;
				transform-origin: center;
				-webkit-transform: rotate3d(0, 0, 1, 200deg);
				transform: rotate3d(0, 0, 1, 200deg);
				opacity: 0
			}
		}

		@keyframes rotateOut {
			0% {
				-webkit-transform-origin: center;
				transform-origin: center;
				opacity: 1
			}

			100% {
				-webkit-transform-origin: center;
				transform-origin: center;
				-webkit-transform: rotate3d(0, 0, 1, 200deg);
				transform: rotate3d(0, 0, 1, 200deg);
				opacity: 0
			}
		}

		.rotateOut {
			-webkit-animation-name: rotateOut;
			animation-name: rotateOut
		}

		@-webkit-keyframes rotateOutDownLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				opacity: 1
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate3d(0, 0, 1, 45deg);
				transform: rotate3d(0, 0, 1, 45deg);
				opacity: 0
			}
		}

		@keyframes rotateOutDownLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				opacity: 1
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate3d(0, 0, 1, 45deg);
				transform: rotate3d(0, 0, 1, 45deg);
				opacity: 0
			}
		}

		.rotateOutDownLeft {
			-webkit-animation-name: rotateOutDownLeft;
			animation-name: rotateOutDownLeft
		}

		@-webkit-keyframes rotateOutDownRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				opacity: 1
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate3d(0, 0, 1, -45deg);
				transform: rotate3d(0, 0, 1, -45deg);
				opacity: 0
			}
		}

		@keyframes rotateOutDownRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				opacity: 1
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate3d(0, 0, 1, -45deg);
				transform: rotate3d(0, 0, 1, -45deg);
				opacity: 0
			}
		}

		.rotateOutDownRight {
			-webkit-animation-name: rotateOutDownRight;
			animation-name: rotateOutDownRight
		}

		@-webkit-keyframes rotateOutUpLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				opacity: 1
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate3d(0, 0, 1, -45deg);
				transform: rotate3d(0, 0, 1, -45deg);
				opacity: 0
			}
		}

		@keyframes rotateOutUpLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				opacity: 1
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate3d(0, 0, 1, -45deg);
				transform: rotate3d(0, 0, 1, -45deg);
				opacity: 0
			}
		}

		.rotateOutUpLeft {
			-webkit-animation-name: rotateOutUpLeft;
			animation-name: rotateOutUpLeft
		}

		@-webkit-keyframes rotateOutUpRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				opacity: 1
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate3d(0, 0, 1, 90deg);
				transform: rotate3d(0, 0, 1, 90deg);
				opacity: 0
			}
		}

		@keyframes rotateOutUpRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				opacity: 1
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate3d(0, 0, 1, 90deg);
				transform: rotate3d(0, 0, 1, 90deg);
				opacity: 0
			}
		}

		.rotateOutUpRight {
			-webkit-animation-name: rotateOutUpRight;
			animation-name: rotateOutUpRight
		}

		@-webkit-keyframes hinge {
			0% {
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out
			}

			20%,
			60% {
				-webkit-transform: rotate3d(0, 0, 1, 80deg);
				transform: rotate3d(0, 0, 1, 80deg);
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out
			}

			40%,
			80% {
				-webkit-transform: rotate3d(0, 0, 1, 60deg);
				transform: rotate3d(0, 0, 1, 60deg);
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
				opacity: 1
			}

			100% {
				-webkit-transform: translate3d(0, 700px, 0);
				transform: translate3d(0, 700px, 0);
				opacity: 0
			}
		}

		@keyframes hinge {
			0% {
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out
			}

			20%,
			60% {
				-webkit-transform: rotate3d(0, 0, 1, 80deg);
				transform: rotate3d(0, 0, 1, 80deg);
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out
			}

			40%,
			80% {
				-webkit-transform: rotate3d(0, 0, 1, 60deg);
				transform: rotate3d(0, 0, 1, 60deg);
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
				opacity: 1
			}

			100% {
				-webkit-transform: translate3d(0, 700px, 0);
				transform: translate3d(0, 700px, 0);
				opacity: 0
			}
		}

		.hinge {
			-webkit-animation-name: hinge;
			animation-name: hinge
		}

		@-webkit-keyframes rollIn {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
				transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes rollIn {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
				transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.rollIn {
			-webkit-animation-name: rollIn;
			animation-name: rollIn
		}

		@-webkit-keyframes rollOut {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
				transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
			}
		}

		@keyframes rollOut {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
				transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
			}
		}

		.rollOut {
			-webkit-animation-name: rollOut;
			animation-name: rollOut
		}

		@-webkit-keyframes zoomIn {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			50% {
				opacity: 1
			}
		}

		@keyframes zoomIn {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			50% {
				opacity: 1
			}
		}

		.zoomIn {
			-webkit-animation-name: zoomIn;
			animation-name: zoomIn
		}

		@-webkit-keyframes zoomInDown {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomInDown {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomInDown {
			-webkit-animation-name: zoomInDown;
			animation-name: zoomInDown
		}

		@-webkit-keyframes zoomInLeft {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
				transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomInLeft {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
				transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomInLeft {
			-webkit-animation-name: zoomInLeft;
			animation-name: zoomInLeft
		}

		@-webkit-keyframes zoomInRight {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
				transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomInRight {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
				transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomInRight {
			-webkit-animation-name: zoomInRight;
			animation-name: zoomInRight
		}

		@-webkit-keyframes zoomInUp {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomInUp {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomInUp {
			-webkit-animation-name: zoomInUp;
			animation-name: zoomInUp
		}

		@-webkit-keyframes zoomOut {
			0% {
				opacity: 1
			}

			50% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			100% {
				opacity: 0
			}
		}

		@keyframes zoomOut {
			0% {
				opacity: 1
			}

			50% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			100% {
				opacity: 0
			}
		}

		.zoomOut {
			-webkit-animation-name: zoomOut;
			animation-name: zoomOut
		}

		@-webkit-keyframes zoomOutDown {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			100% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
				-webkit-transform-origin: center bottom;
				transform-origin: center bottom;
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomOutDown {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			100% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
				-webkit-transform-origin: center bottom;
				transform-origin: center bottom;
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomOutDown {
			-webkit-animation-name: zoomOutDown;
			animation-name: zoomOutDown
		}

		@-webkit-keyframes zoomOutLeft {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
				transform: scale(.1) translate3d(-2000px, 0, 0);
				-webkit-transform-origin: left center;
				transform-origin: left center
			}
		}

		@keyframes zoomOutLeft {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
				transform: scale(.1) translate3d(-2000px, 0, 0);
				-webkit-transform-origin: left center;
				transform-origin: left center
			}
		}

		.zoomOutLeft {
			-webkit-animation-name: zoomOutLeft;
			animation-name: zoomOutLeft
		}

		@-webkit-keyframes zoomOutRight {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: scale(.1) translate3d(2000px, 0, 0);
				transform: scale(.1) translate3d(2000px, 0, 0);
				-webkit-transform-origin: right center;
				transform-origin: right center
			}
		}

		@keyframes zoomOutRight {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
			}

			100% {
				opacity: 0;
				-webkit-transform: scale(.1) translate3d(2000px, 0, 0);
				transform: scale(.1) translate3d(2000px, 0, 0);
				-webkit-transform-origin: right center;
				transform-origin: right center
			}
		}

		.zoomOutRight {
			-webkit-animation-name: zoomOutRight;
			animation-name: zoomOutRight
		}

		@-webkit-keyframes zoomOutUp {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			100% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
				-webkit-transform-origin: center bottom;
				transform-origin: center bottom;
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomOutUp {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			100% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
				-webkit-transform-origin: center bottom;
				transform-origin: center bottom;
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomOutUp {
			-webkit-animation-name: zoomOutUp;
			animation-name: zoomOutUp
		}

		@-webkit-keyframes slideInDown {
			0% {
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%);
				visibility: visible
			}

			100% {
				-webkit-transform: translateY(0);
				transform: translateY(0)
			}
		}

		@keyframes slideInDown {
			0% {
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%);
				visibility: visible
			}

			100% {
				-webkit-transform: translateY(0);
				transform: translateY(0)
			}
		}

		.slideInDown {
			-webkit-animation-name: slideInDown;
			animation-name: slideInDown
		}

		@-webkit-keyframes slideInLeft {
			0% {
				-webkit-transform: translateX(-100%);
				transform: translateX(-100%);
				visibility: visible
			}

			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}
		}

		@keyframes slideInLeft {
			0% {
				-webkit-transform: translateX(-100%);
				transform: translateX(-100%);
				visibility: visible
			}

			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}
		}

		.slideInLeft {
			-webkit-animation-name: slideInLeft;
			animation-name: slideInLeft
		}

		@-webkit-keyframes slideInRight {
			0% {
				-webkit-transform: translateX(100%);
				transform: translateX(100%);
				visibility: visible
			}

			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}
		}

		@keyframes slideInRight {
			0% {
				-webkit-transform: translateX(100%);
				transform: translateX(100%);
				visibility: visible
			}

			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}
		}

		.slideInRight {
			-webkit-animation-name: slideInRight;
			animation-name: slideInRight
		}

		@-webkit-keyframes slideInUp {
			0% {
				-webkit-transform: translateY(100%);
				transform: translateY(100%);
				visibility: visible
			}

			100% {
				-webkit-transform: translateY(0);
				transform: translateY(0)
			}
		}

		@keyframes slideInUp {
			0% {
				-webkit-transform: translateY(100%);
				transform: translateY(100%);
				visibility: visible
			}

			100% {
				-webkit-transform: translateY(0);
				transform: translateY(0)
			}
		}

		.slideInUp {
			-webkit-animation-name: slideInUp;
			animation-name: slideInUp
		}

		@-webkit-keyframes slideOutDown {
			0% {
				-webkit-transform: translateY(0);
				transform: translateY(0)
			}

			100% {
				visibility: hidden;
				-webkit-transform: translateY(100%);
				transform: translateY(100%)
			}
		}

		@keyframes slideOutDown {
			0% {
				-webkit-transform: translateY(0);
				transform: translateY(0)
			}

			100% {
				visibility: hidden;
				-webkit-transform: translateY(100%);
				transform: translateY(100%)
			}
		}

		.slideOutDown {
			-webkit-animation-name: slideOutDown;
			animation-name: slideOutDown
		}

		@-webkit-keyframes slideOutLeft {
			0% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}

			100% {
				visibility: hidden;
				-webkit-transform: translateX(-100%);
				transform: translateX(-100%)
			}
		}

		@keyframes slideOutLeft {
			0% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}

			100% {
				visibility: hidden;
				-webkit-transform: translateX(-100%);
				transform: translateX(-100%)
			}
		}

		.slideOutLeft {
			-webkit-animation-name: slideOutLeft;
			animation-name: slideOutLeft
		}

		@-webkit-keyframes slideOutRight {
			0% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}

			100% {
				visibility: hidden;
				-webkit-transform: translateX(100%);
				transform: translateX(100%)
			}
		}

		@keyframes slideOutRight {
			0% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}

			100% {
				visibility: hidden;
				-webkit-transform: translateX(100%);
				transform: translateX(100%)
			}
		}

		.slideOutRight {
			-webkit-animation-name: slideOutRight;
			animation-name: slideOutRight
		}

		@-webkit-keyframes slideOutUp {
			0% {
				-webkit-transform: translateY(0);
				transform: translateY(0)
			}

			100% {
				visibility: hidden;
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%)
			}
		}

		@keyframes slideOutUp {
			0% {
				-webkit-transform: translateY(0);
				transform: translateY(0)
			}

			100% {
				visibility: hidden;
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%)
			}
		}

		.slideOutUp {
			-webkit-animation-name: slideOutUp;
			animation-name: slideOutUp
		}
	</style>
</body>

</html>