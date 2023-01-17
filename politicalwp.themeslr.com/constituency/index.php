<!-- SKM -->
<?php

session_start();
require_once '../../server/partymeberdata.php';
require_once '../../server/constituenciesdata.php';
require_once '../../server/newsdata.php';
require_once '../../server/fetchnews.php';


ob_start();
$con_name = '';
?>

<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="xmlrpc.html">
    <link rel="shortcut icon" href="../wp-content/themes/politicalwp/images/theme_favicon.png">
    <link rel="stylesheet" href="index.css">
    <script>function fvmuag() { if (navigator.userAgent.match(/x11.*fox\/54|oid\s4.*xus.*ome\/62|oobot|ighth|tmetr|eadles|ingdo/i)) return !1; if (navigator.userAgent.match(/x11.*ome\/75\.0\.3770\.100/i)) { var e = screen.width, t = screen.height; if ("number" == typeof e && "number" == typeof t && 862 == t && 1367 == e) return !1 } return !0 }</script>
    <title>SKM</title>
    <link rel="alternate" type="text/calendar" title="PoliticalWP &raquo; iCal Feed"
        href="events/indexedf3.html?ical=1" />
    <script type="text/javascript" src="paging.js"></script>
    <script type="text/javascript" data-cfasync="false">var mi_version = '7.12.2';
        var mi_track_user = true;
        var mi_no_track_reason = '';

        var disableStr = 'ga-disable-UA-113036590-1';

        /* Function to detect opted out users */
        function __gaTrackerIsOptedOut() {
            return document.cookie.indexOf(disableStr + '=true') > -1;
        }

        /* Disable tracking if the opt-out cookie exists. */
        if (__gaTrackerIsOptedOut()) {
            window[disableStr] = true;
        }

        /* Opt-out function */
        function __gaTrackerOptout() {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
            window[disableStr] = true;
        }

        if ('undefined' === typeof gaOptout) {
            function gaOptout() {
                __gaTrackerOptout();
            }
        }

        if (mi_track_user) {
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../www.google-analytics.com/analytics.js', '__gaTracker');

            __gaTracker('create', 'UA-113036590-1', 'auto');
            __gaTracker('set', 'forceSSL', true);
            __gaTracker('require', 'displayfeatures');
            __gaTracker('send', 'pageview');
        } else {
            console.log("");
            (function () {
                /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                var noopfn = function () {
                    return null;
                };
                var noopnullfn = function () {
                    return null;
                };
                var Tracker = function () {
                    return null;
                };
                var p = Tracker.prototype;
                p.get = noopfn;
                p.set = noopfn;
                p.send = noopfn;
                var __gaTracker = function () {
                    var len = arguments.length;
                    if (len === 0) {
                        return;
                    }
                    var f = arguments[len - 1];
                    if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                        console.log('Not running function __gaTracker(' + arguments[0] + " ....) because you are not being tracked. " + mi_no_track_reason);
                        return;
                    }
                    try {
                        f.hitCallback();
                    } catch (ex) {

                    }
                };
                __gaTracker.create = function () {
                    return new Tracker();
                };
                __gaTracker.getByName = noopnullfn;
                __gaTracker.getAll = function () {
                    return [];
                };
                __gaTracker.remove = noopfn;
                window['__gaTracker'] = __gaTracker;
            })();
        }</script>
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
        href='../wp-content/uploads/cache/fvm/1600714823/out/header-95bbcd3a8e8701079e5b61c11950d6cbb700f37b.min.css'
        type='text/css' media='all' />
    <script type='text/javascript' src='../wp-includes/js/jquery/jquery.js' id='jquery-core-js'></script>
    <script type='text/javascript' id='fvm-header-0-js-extra'>/*  */
        var monsterinsights_frontend = { "js_events_tracking": "true", "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx", "inbound_paths": "[]", "home_url": "https:\/\/politicalwp.themeslr.com", "hash_tracking": "false" };
    </script>
    <script defer type='text/javascript'
        src='../wp-content/uploads/cache/fvm/1600714823/out/header-196a8131980f9294edc2d89b0680dc429d777c1f.min.js'
        id='fvm-header-0-js'></script>
    <script type='text/javascript' id='fvm-header-2-js-extra'>/*  */
        var give_global_vars = { "ajaxurl": "https:\/\/politicalwp.themeslr.com\/wp-admin\/admin-ajax.php", "checkout_nonce": "3bfad330e6", "currency": "USD", "currency_sign": "$", "currency_pos": "before", "thousands_separator": ",", "decimal_separator": ".", "no_gateway": "Please select a payment method.", "bad_minimum": "The minimum custom donation amount for this form is", "bad_maximum": "The maximum custom donation amount for this form is", "general_loading": "Loading...", "purchase_loading": "Please Wait...", "number_decimals": "0", "give_version": "2.8.0", "magnific_options": { "main_class": "give-modal", "close_on_bg_click": false }, "form_translation": { "payment-mode": "Please select payment mode.", "give_first": "Please enter your first name.", "give_email": "Please enter a valid email address.", "give_user_login": "Invalid email address or username.", "give_user_pass": "Enter a password.", "give_user_pass_confirm": "Enter the password confirmation.", "give_agree_to_terms": "You must agree to the terms and conditions." }, "confirm_email_sent_message": "Please check your email and click on the link to access your complete donation history.", "ajax_vars": { "ajaxurl": "https:\/\/politicalwp.themeslr.com\/wp-admin\/admin-ajax.php", "ajaxNonce": "19521368c0", "loading": "Loading", "select_option": "Please select an option", "default_gateway": "paypal", "permalinks": "1", "number_decimals": 0 }, "cookie_hash": "a896d4c9da5b834df1d8cc2165865f62", "session_nonce_cookie_name": "wp-give_session_reset_nonce_a896d4c9da5b834df1d8cc2165865f62", "session_cookie_name": "wp-give_session_a896d4c9da5b834df1d8cc2165865f62", "delete_session_nonce_cookie": "0" };
        var giveApiSettings = { "root": "https:\/\/politicalwp.themeslr.com\/wp-json\/give-api\/v2\/", "rest_base": "give-api\/v2" };
    </script>
    <script defer type='text/javascript'
        src='../wp-content/uploads/cache/fvm/1600714823/out/header-914a4d53fc79250195d7c8e74d0e4157f708f3bb.min.js'
        id='fvm-header-2-js'></script>
    <link rel="https://api.w.org/" href="../wp-json/index.html" />
    <link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/869.json" />
    <link rel="canonical" href="index.html" />
    <link rel="alternate" type="application/json+oembed"
        href="../wp-json/oembed/1.0/embed94f6.json?url=https%3A%2F%2Fpoliticalwp.themeslr.com%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="../wp-json/oembed/1.0/embed04ef?url=https%3A%2F%2Fpoliticalwp.themeslr.com%2F&amp;format=xml" />
    <meta name="framework" content="Redux 4.1.20" />
    <meta name="generator" content="Give v2.8.0" />
    <meta name="tec-api-version" content="v1">
    <meta name="tec-api-origin" content="https://politicalwp.themeslr.com">
    <link rel="https://theeventscalendar.com/" href="../wp-json/tribe/events/v1/index.html" /> <noscript>
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
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <meta name="generator"
        content="Powered by Slider Revolution 6.2.23 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">function setREVStartSize(e) {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
                document.getElementById(e.c).height = newh + "px";
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>
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
            color: white;
        }

        .fixed-sidebar-menu {
            background-color: #fff;
        }

        .fixed-sidebar-menu .logo,
        .fixed-sidebar-menu .widget-title,
        .fixed-sidebar-menu .widget-title {
            color: #000000;
        }

        .single article .article-content p {
            font-family: "Open Sans";
            line-height: 26px;
            color: #454646;
            font-size: 16px;
            font-display: swap;
        }

        .lvca-dark-bg .lvca-odometers .lvca-odometer .lvca-number {
            color: #E34234; //EC5800
        }

        .theme_header_slider {
            background-image: linear-gradient(to right, #f78320, #ed1e26, #01a451);
        }

        .see-more-section {
            text-align: center;
        }

        .see-more-button {
            color: #000000;
            padding: 5px 15px;
            border: #B71C1C solid 1px;
            border-radius: 25px;
        }

        .footer-social-links {
            padding-left: 15px;
            padding-top: 30px;
        }

        .login-logout-button {
            background-color: #0096e2;
            color: #fff;
            padding: 10px;
            border-radius: 20px;
        }

        th {
            background-color: #cfd8dc;
        }

        td {
            text-align: left;
        }

        .fa-eye {
            color: #6b6b6b;
        }

        .pager-nav {
            margin: 16px 0;
        }

        .pager-nav span {
            display: inline-block;
            padding: 4px 8px;
            margin: 1px;
            cursor: pointer;
            font-size: 14px;
            background-color: #FFFFFF;
            border: 1px solid #e1e1e1;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        }

        .pager-nav span:hover,
        .pager-nav .pg-selected {
            background-color: #cfd8dc;
            border: 1px solid #CCCCCC;
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1493795314622 {
            margin-bottom: 0px !important;
            background-color: #e5e5e5;
        }

        .vc_custom_1493796418853 {
            margin-bottom: 0px !important;
            padding-top: 40px !important;
            padding-bottom: 80px !important;
            background-color: #E0E0E0 !important;
        }

        .vc_custom_1495139522198 {
            margin-bottom: 0px !important;
            padding-top: 80px !important;
            padding-bottom: 100px !important;
            background: #ffffff url(wp-content/uploads/2016/02/politicalwpgraydf0c.jpg?id=6640) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1485818229073 {
            margin-top: 0em !important;
            margin-bottom: 0px !important;
            padding-top: 30px !important;
            padding-bottom: 50px !important;
            background-color: #f5f5f5 !important;
        }

        .vc_custom_1485978162518 {
            margin-bottom: 0px !important;
            background-color: #ffffff !important;
        }

        .vc_custom_1493761571262 {
            margin-top: 0px !important;
            margin-right: 0px !important;
            margin-bottom: 0px !important;
            margin-left: 0px !important;
            padding-top: 75px !important;
            padding-bottom: 60px !important;
            background-color: #CFD8DC !important;
        }

        .vc_custom_1485978162518 {
            margin-bottom: 0px !important;
            background-color: #E0E0E0 !important;
        }

        .vc_custom_1493846070013 {
            margin-top: 0px !important;
            margin-right: 0px !important;
            margin-bottom: 0px !important;
            margin-left: 0px !important;
            background-image: linear-gradient(to right, #f78320, #ed1e26, #01a451);
        }

        .vc_custom_1486327452422 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        .vc_custom_1450339501388 {
            padding-top: 0px !important;
        }

        .vc_custom_1450339501388 {
            padding-top: 0px !important;
        }

        .vc_custom_1486327502890 {
            padding-top: 0px !important;
        }
    </style><noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>

    <style>

    .img-prob{
        
        // display: block;
        // width: 200px !important;
        // 
        
    }        
    .img-circle{
        border: 1em solid black;
        border-radius: 50% !important;

        
        
    }

       
    .img-wid{
		    display: block;
			width: 100%;
            height: 20vw;
            object-fit: cover;
            
	}
    
    </style>
</head>

<body data-rsssl=1
    class="home page-template-default page page-id-869 page-child parent-pageid-2346 theme-politicalwp woocommerce-no-js tribe-no-js       header1   wpb-js-composer js-comp-ver-6.4.0 vc_responsive">
    <div id="page" class="hfeed site">
        <header class="header1">
        <?php
                require_once '../subnavbar.php'
           ?>
        </header>
        <div id="primary" class="no-padding content-area no-sidebar">
            <!--<div class=""> -->
            <div class="container">
                <div class="row">
                    <main id="main" class="col-md-12 site-main main-content">
                        <article id="post-869" class="post-869 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1493796418853 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <?php
                                            if (isset($_GET['con'])) {
                                                
                                            if(($consDetails != FALSE && $consDetails->num_rows > 0)) {
                                            $conid = $_GET['con']; 
                                                while ($cons = $consDetails->fetch_assoc()) {
                                                        if ($cons['id'] == $conid) {

                                                          
                                            ?>
                                            <div class="wpb_wrapper">
                                            <?php if (isset($_SESSION['userDegree']) && ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1)) {
                                            ?>
                                            <a href='.?con=<?php echo $_GET['con']. '&edit=true'; ?>'>Edit</a>

                                            <?php }

                                            if (isset($_GET['e']) && $_GET['e'] == 1) {
                                                ?>
                                                <script>
                                                alert("Updated Successfully");
                                                </script>

                                                <?php
                                            }

                                              if (isset($_GET['edit']) && $_GET['edit'] == 'true' ) {
                                                    ?>

                                                <form accept-charset="UTF-8" action="../../server/constituencydesc.php" method="POST">
                                                                                            
                                                           <div class="form-group">
                                                            <label for="description">Edit:</label>
                                                      <textarea id="description" name="desc" class="form-control" rows="4" cols="50" maxlength="1000" required="required" placeholder="Edit"><?php echo $cons['description']; ?> </textarea>
                                                   </div>
                                                  <input type="hidden" name="id" value="<?php echo $cons['id']; ?>">
                                                            <hr>
                                                   <button type="submit" class="btn btn-primary" name="editcons">Submit</button>
                                                </form>	
                                                    

                                                    <?php
                                                }
                                            
                                            ?>
                                                <div class="title-subtile-holder">
                                                    <h1 class="section-title dark_title"><?php echo $cons['name']; 
                                                    $con_name = $cons['name'];
                                                    ?></h1>
                                                    <div class="section-subtitle dark_subtitle">Description about the
                                                        Constituency</div>
                                                    <br>
                                                    <div class="section-subtitle dark_subtitle"><?php echo $cons['description']; ?></div>
                                                </div>
                                            </div>

                                            <?php

                                              

                                            
                                                }
                                            }
                                        }
                                    } else {
                                        header('Location: ../');
                                        ob_end_flush();

                                    }        
                                  

                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1493795314622 vc_row-has-fill lvca-dark-bg">
                                    <div id="navigation" class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                           
                                            <div class="wpb_wrapper">
                                                <div class="lvca-odometers lvca-container">
                                                    <div class="lvca-odometer lvca-threecol">
                                                        <div class="lvca-number odometer" data-stop="96492">0</div>
                                                        <div class="lvca-stats-title-wrap">
                                                            <div class="lvca-stats-title">Active Voters</div>
                                                        </div>
                                                    </div>
                                                    <div class="lvca-odometer lvca-threecol">
                                                        <div class="lvca-number odometer" data-stop="240">0</div>
                                                        <div class="lvca-stats-title-wrap">
                                                            <div class="lvca-stats-title">No. Of MLA's</div>
                                                        </div>
                                                    </div>
                                                    <div class="lvca-odometer lvca-threecol">
                                                        <div class="lvca-number odometer" data-stop="450">0</div>
                                                        <div class="lvca-stats-title-wrap">
                                                            <div class="lvca-stats-title">Party Members</div>
                                                        </div>
                                                    </div>
                                                    <div class="lvca-odometer lvca-threecol">
                                                        <div class="lvca-number odometer" data-stop="35000">0</div>
                                                        <div class="lvca-stats-title-wrap">
                                                            <div class="lvca-stats-title">Dedicated Donors</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                              
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1493795314622 vc_row-has-fill lvca-dark-bg">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <?php

                                            if (isset($_SESSION['isLoggedIn']) == true && ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1 || $_SESSION['userDegree'] == 2 )) {
                                                if (isset($_GET['status']) && $_GET['status'] == 'deleted') {
                                                    ?>
                                                    <script>alert("Deleted Successfully");</script>
            
                                                    <?php
                                                                    
                                                } elseif (isset($_GET['status']) && $_GET['status'] == 'fdeleted') {
                                                ?>
                                                <script>alert("Failed. Try Again");</script>
            
                                                <?php
                                                }
                                                
                                                ?>
                                                <div class="wrap-search">
                                                <div>
                                                    <?php
                                                    if (isset($_POST['searchTapped'])) {
                                                    
                                                    ?>
                                                    <a href="../../politicalwp.themeslr.com/constituency/?con=<?php echo $_GET['con'] ?>">Go Back</a>
                                                    <?php
                                                    }

                                                    ?>
                                                    </div>
                                                <form action="#navigation"  method="post">
                                                    <div class="searchbar">
                                                        <input type="text" name="searchData" class="searchTerm" placeholder="Search with voter id or name" required>
                                                        <button name="searchTapped" type="submit" class="searchButton">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                        </form>
                                                    </div>
                                                    </div>
                                                
                                               
                                                <table id="pager" class="table table-striped table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Sn. no</th>
                                                        <th>Name</th>
                                                        <th>Gender</th>
                                                        <th>Post in Party</th>
                                                        <th>Email</th>
                                                        <th>Constituency</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php
require_once '../../server/searchdata.php';

if (isset($scDetails)) {
    if($scDetails != FALSE && $scDetails->num_rows > 0) {
        $si = 1; 
            while ($scs = $scDetails->fetch_assoc()) {
                if (strtoupper($con_name) == $scs['constituency'] && isset($_POST['searchTapped'])) {
                ?>

                
<tr>
                                                        <td><?php echo $si++; ?></td>
                                                        <td><?php echo $scs['name']; ?></td>
                                                        <td><?php echo $scs['gender']; ?></td>
                                                        <td><?php echo $scs['postinparty']; ?></td>
                                                        <td><?php echo $scs['email']; ?></td>
                                                        <td>
                                                        <?php echo $scs['constituency']; ?>
                                                        </td>
                                                        <td>
                                                        <div style="display: flex; flex-direction: row;">
                                                            <div
                                                                class="table-actions d-flex align-items-center gap-3 fs-6">

                                                                <a href="../application-view/index.php?id=<?php echo $scs['id']; ?>&con=<?php echo $_GET['con']; ?>"
                                                                    class="text-primary" data-bs-toggle="tooltip"
                                                                    data-bs-placement="bottom" title=""
                                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                                        class="fa fa-eye"></i></a>
                                                            </div>
                                                            <?php 
									if (isset($_SESSION['isLoggedIn']) == true && ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 2 )) {
                                              
                                                    if ((strtoupper($scs['constituency']) == strtoupper($_SESSION['adminStatus'])) || ($_SESSION['userDegree'] == 0)) {
                                                       
                                                            ?>
                                                            <div style="padding-left: 1em"
                                                                class="table-actions d-flex align-items-center gap-3 fs-6">

                                                                <a href="../voter-registeration/index.php?eid=<?php echo $scs['id']; ?>"
                                                                    class="text-primary" data-bs-toggle="tooltip"
                                                                    data-bs-placement="bottom" title=""
                                                                    data-bs-original-title="Views" aria-label="Views"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            </div>
                                                            <?php 
                                                            if ($_SESSION['userDegree'] == 0) {
                                                                
                                                            ?>
                                                            
                                                            <div style="padding-left: 1em"
                                                                class="table-actions d-flex align-items-center gap-3 fs-6">

                                                                <a href="../../server/partymemberdelete.php?did=<?php echo $scs['id']; ?>"
                                                                    class="text-primary" data-bs-toggle="tooltip"
                                                                    data-bs-placement="bottom" title=""
                                                                    data-bs-original-title="Views" aria-label="Views"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                            </div>
                                                            <?php    
                                                        }
                                                            ?>


                                                            
                                                            <?php
                                                    }
                                              
                                    }

                                 

                                                            ?>
                                                        </div>
                                                            
                                                        </td>
                                                    </tr>
                                                    
                                                


                <?php

            }
        }                   
}
}
// 

                                                if($pmDetails != FALSE && $pmDetails->num_rows > 0) {
                                                $sn = 1; 
                                                    while ($pms = $pmDetails->fetch_assoc()) {

                                                         if (strtoupper($con_name) == $pms['constituency']  && !isset($_POST['searchTapped'])) {

                                                           
                                                        
                                               ?>

                                               


                                                    <tr>
                                                        <td><?php echo $sn++; ?></td>
                                                        <td><?php echo $pms['name']; ?></td>
                                                        <td><?php echo $pms['gender']; ?></td>
                                                        <td><?php echo $pms['postinparty']; ?></td>
                                                        <td><?php echo $pms['email']; ?></td>
                                                        <td>
                                                        <?php echo $pms['constituency']; ?>
                                                        </td>
                                                        <td>
                                                        <div style="display: flex; flex-direction: row;">
                                                            <div
                                                                class="table-actions d-flex align-items-center gap-3 fs-6">

                                                                <a href="../application-view/index.php?id=<?php echo $pms['id']; ?>&con=<?php echo $_GET['con']; ?>"
                                                                    class="text-primary" data-bs-toggle="tooltip"
                                                                    data-bs-placement="bottom" title=""
                                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                                        class="fa fa-eye"></i></a>
                                                            </div>
                                                            <?php 
									if (isset($_SESSION['isLoggedIn']) == true && ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 2 )) {
                                              
                                                    if ((strtoupper($pms['constituency']) == strtoupper($_SESSION['adminStatus'])) || ($_SESSION['userDegree'] == 0)) {
                                                       
                                                            ?>
                                                            <div style="padding-left: 1em"
                                                                class="table-actions d-flex align-items-center gap-3 fs-6">

                                                                <a href="../voter-registeration/index.php?eid=<?php echo $pms['id']; ?>"
                                                                    class="text-primary" data-bs-toggle="tooltip"
                                                                    data-bs-placement="bottom" title=""
                                                                    data-bs-original-title="Views" aria-label="Views"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            </div>
                                                            <?php 
                                                            if ($_SESSION['userDegree'] == 0) {
                                                                
                                                            ?>
                                                            
                                                            <div style="padding-left: 1em"
                                                                class="table-actions d-flex align-items-center gap-3 fs-6">

                                                                <a href="../../server/partymemberdelete.php?did=<?php echo $pms['id']; ?>"
                                                                    class="text-primary" data-bs-toggle="tooltip"
                                                                    data-bs-placement="bottom" title=""
                                                                    data-bs-original-title="Views" aria-label="Views"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                            </div>
                                                            <?php    
                                                        }
                                                            ?>


                                                            
                                                            <?php
                                                    }
                                              
                                    }

                                 

                                                            ?>
                                                        </div>
                                                            
                                                        </td>
                                                    </tr>
                                                    
                                                



                                                <?php
                                                        }
                                               
                                                    }
                                                }
                                                ?>

</tbody>
                                            </table>

                                                <?php
                                            }

                                            ?>
                                            <div id="pageNavPosition" class="pager-nav"></div>

                                            <script src="paging.js" defer></script>

                                            <script>
                                                let pager = new Pager('pager', 10);

                                                pager.init();
                                                pager.showPageNav('pager', 'pageNavPosition');
                                                pager.showPage(1);
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1485978162518 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space" style="height: 32px">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                                <div class="title-subtile-holder">
                                                    <h1 class="section-title dark_title">Members
                                                    </h1>
                                                </div>
                                                <div class="vc_empty_space" style="height: 20px">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                                <div class="lvca-team-members lvca-style1 lvca-container">
                                                    <?php
                                                    //echo $con_name;
                                                    if($pmDetail != FALSE && $pmDetail->num_rows > 0) {
                                                        $fourIds = 0;
                                                            while ($pm = $pmDetail->fetch_assoc()) {
                                                            if (strtoupper($con_name) == $pm['constituency']) {
                                                                if ($fourIds < 4) {

                                                    
                                                    ?>
                                                    <div class="lvca-team-member-wrapper lvca-threecol">
                                                        <div class="lvca-team-member">
                                                            <div class="lvca-image-wrapper img-prob">
                                                            
                                                            <img 
                                                                    
                                                                    src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pm['photo']); ?>"
                                                                    class="img-circle" alt="" loading="lazy"
                                                                    />
                                                                    
                                                            </div>
                                                            <div class="lvca-team-member-text">
                                                                <h3 class="lvca-title"><?php echo $pm['name']; ?></h3>
                                                                <div class="lvca-team-member-position">
                                                                    <?php echo $pm['deg'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <?php
                                                    $fourIds++;
                                                                }
                                                            }

                                                            }
                                                        }


                                                    ?>



                                                </div>
                                                <div class="vc_empty_space" style="height: 40px">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1493761571262 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1450339501388">
                                            <div class="wpb_wrapper">
                                                <div class="title-subtile-holder">
                                                    <h1 class="section-title dark_title">Latest News
                                                    </h1>
                                                </div>
                                                <div class="blog-posts tslr-blog-posts-shortcode wow row fadeIn">
                                                        <?php
                                                        if($newsDetails != FALSE && $newsDetails->num_rows > 0) {
                                                            $th = 0;
                                                            while ($news = $newsDetails->fetch_assoc()) {
                                                                if ($th < 3) {
                                                        ?>

<div class="odd-post col-md-4">
                                                        <article class="single-post list-view">
                                                            <div class="blog_custom">
                                                                <!-- POST THUMBNAIL -->
                                                                <div class="col-md-12 post-thumbnail">
                                                                    <img class="img-wid"
                                                                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($news['image']); ?>"
                                                                        alt="Launch of DBU’s in India" />
                                                                </div>
                                                                <!-- POST DETAILS -->
                                                                <div class="post-details col-md-12">
                                                                    <h3 class="text-center post-name row">
                                                                        <?php echo $news['title']; ?> </h3>
                                                                    <div class="post-excerpt text-center row">
                                                                        <p>
                                                                        <?php echo $news['description']; ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>

                                                        <?php
                                                        $th++;
                                                                }
                                                            }
                                                        }

                                                        ?>
                                                    
                                                </div>
                                                <div class="see-more-section"><a href="../events/list/index.php"
                                                        class="see-more-button">See More News</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <hr style="padding: 0px; margin: 0px;">
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1493761571262 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1450339501388">
                                            <div class="wpb_wrapper">
                                                <div class="title-subtile-holder">
                                                    <h1 class="section-title dark_title">Events</h1>
                                                </div>
                                                <div class="blog-posts tslr-blog-posts-shortcode wow row fadeIn">
                                                <?php
                                                        if($eventDetails != FALSE && $eventDetails->num_rows > 0) {
                                                            $th2 = 0;
                                                            while ($events = $eventDetails->fetch_assoc()) {
                                                                if ($th2 < 3) {
                                                        ?>

<div class="odd-post col-md-4">
                                                        <article class="single-post list-view">
                                                            <div class="blog_custom">
                                                                <!-- POST THUMBNAIL -->
                                                                <div class="col-md-12 post-thumbnail">
                                                                    <img class="img-wid"
                                                                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($events['image']); ?>"
                                                                        alt="Launch of DBU’s in India" />
                                                                </div>
                                                                <!-- POST DETAILS -->
                                                                <div class="post-details col-md-12">
                                                                    <h3 class="text-center post-name row">
                                                                        <?php echo $events['title']; ?> </h3>
                                                                    <div class="post-excerpt text-center row">
                                                                        <p>
                                                                        <?php echo $events['description']; ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>

                                                        <?php
                                                        $th2++;
                                                                }
                                                            }
                                                        }

                                                        ?>
                                                    
                                                </div>
                                                <div class="see-more-section"><a href="../events/index.php"
                                                        class="see-more-button">See More Events</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1493846070013 vc_row-has-fill lvca-dark-bg">
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
                            </div><!-- .entry-content -->
                            <div class="clearfix"></div>
                        </article><!-- #post-## -->
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
    </div><!-- Start of HubSpot Embed Code -->

    <style id="fvm-footer-0" media="all">
        @font-face {
            font-family: vc_linecons;
            src: url(../wp-content/plugins/js_composer/assets/css/lib/vc-linecons/fonts/vc_linecons.eot#1600714823);
            src: url(https://politicalwp.themeslr.com/wp-content/plugins/js_composer/assets/css/lib/vc-linecons/fonts/vc_linecons.eot#1600714823) format('embedded-opentype'), url(https://politicalwp.themeslr.com/wp-content/plugins/js_composer/assets/css/lib/vc-linecons/fonts/vc_linecons.woff#1600714823) format('woff'), url(https://politicalwp.themeslr.com/wp-content/plugins/js_composer/assets/css/lib/vc-linecons/fonts/vc_linecons.ttf#1600714823) format('truetype'), url(https://politicalwp.themeslr.com/wp-content/plugins/js_composer/assets/css/lib/vc-linecons/fonts/vc_linecons.svg?54101537#vc_openiconic) format('svg');
            font-weight: 400;
            font-style: normal
        }

        [class*=" vc_li-"]:before,
        [class^=vc_li-]:before {
            font-family: vc_linecons;
            font-style: normal;
            font-weight: 400;
            speak: none;
            display: inline-block;
            text-decoration: inherit;
            width: 1em;
            margin-right: 0;
            text-align: center;
            font-variant: normal;
            text-transform: none;
            line-height: inherit;
            margin-left: 0
        }

        .vc_li-heart:before {
            content: "\e000"
        }

        .vc_li-cloud:before {
            content: "\e001"
        }

        .vc_li-star:before {
            content: "\e002"
        }

        .vc_li-tv:before {
            content: "\e003"
        }

        .vc_li-sound:before {
            content: "\e004"
        }

        .vc_li-video:before {
            content: "\e005"
        }

        .vc_li-trash:before {
            content: "\e006"
        }

        .vc_li-user:before {
            content: "\e007"
        }

        .vc_li-key:before {
            content: "\e008"
        }

        .vc_li-search:before {
            content: "\e009"
        }

        .vc_li-settings:before {
            content: "\e00a"
        }

        .vc_li-camera:before {
            content: "\e00b"
        }

        .vc_li-tag:before {
            content: "\e00c"
        }

        .vc_li-lock:before {
            content: "\e00d"
        }

        .vc_li-bulb:before {
            content: "\e00e"
        }

        .vc_li-pen:before {
            content: "\e00f"
        }

        .vc_li-diamond:before {
            content: "\e010"
        }

        .vc_li-display:before {
            content: "\e011"
        }

        .vc_li-location:before {
            content: "\e012"
        }

        .vc_li-eye:before {
            content: "\e013"
        }

        .vc_li-bubble:before {
            content: "\e014"
        }

        .vc_li-stack:before {
            content: "\e015"
        }

        .vc_li-cup:before {
            content: "\e016"
        }

        .vc_li-phone:before {
            content: "\e017"
        }

        .vc_li-news:before {
            content: "\e018"
        }

        .vc_li-mail:before {
            content: "\e019"
        }

        .vc_li-like:before {
            content: "\e01a"
        }

        .vc_li-photo:before {
            content: "\e01b"
        }

        .vc_li-note:before {
            content: "\e01c"
        }

        .vc_li-clock:before {
            content: "\e01d"
        }

        .vc_li-paperplane:before {
            content: "\e01e"
        }

        .vc_li-params:before {
            content: "\e01f"
        }

        .vc_li-banknote:before {
            content: "\e020"
        }

        .vc_li-data:before {
            content: "\e021"
        }

        .vc_li-music:before {
            content: "\e022"
        }

        .vc_li-megaphone:before {
            content: "\e023"
        }

        .vc_li-study:before {
            content: "\e024"
        }

        .vc_li-lab:before {
            content: "\e025"
        }

        .vc_li-food:before {
            content: "\e026"
        }

        .vc_li-t-shirt:before {
            content: "\e027"
        }

        .vc_li-fire:before {
            content: "\e028"
        }

        .vc_li-clip:before {
            content: "\e029"
        }

        .vc_li-shop:before {
            content: "\e02a"
        }

        .vc_li-calendar:before {
            content: "\e02b"
        }

        .vc_li-vallet:before {
            content: "\e02c"
        }

        .vc_li-vynil:before {
            content: "\e02d"
        }

        .vc_li-truck:before {
            content: "\e02e"
        }

        .vc_li-world:before {
            content: "\e02f"
        }

        /*! Animate.css - https://daneden.me/animate Licensed under the MIT license - https://opensource.org/licenses/MIT Copyright (c) 2014 Daniel Eden */
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
    <script type='text/javascript' id='fvm-footer-0-js-extra'>/*  */
        var wpcf7 = { "apiSettings": { "root": "https:\/\/politicalwp.themeslr.com\/wp-json\/contact-form-7\/v1", "namespace": "contact-form-7\/v1" } };
        var wc_add_to_cart_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/politicalwp.themeslr.com\/shop\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
        var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%" };
        var wc_cart_fragments_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_ed70905f809738e8ead3ed5f845b9628", "fragment_name": "wc_fragments_ed70905f809738e8ead3ed5f845b9628", "request_timeout": "5000" };
        var sb_instagram_js_options = { "font_method": "svg", "resized_url": "https:\/\/politicalwp.themeslr.com\/wp-content\/uploads\/sb-instagram-feed-images\/", "placeholder": "https:\/\/politicalwp.themeslr.com\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png" };
/*  */</script>
    <script defer type='text/javascript'
        src='../wp-content/uploads/cache/fvm/1600714823/out/footer-d32a69f611ba1c3839f0dfd83adc169caa112218.min.js'
        id='fvm-footer-0-js'></script>
</body>

</html>