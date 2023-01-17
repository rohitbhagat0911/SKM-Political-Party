<!-- SKM -->
<?php
require_once '../../server/partymeberdata.php';
session_start();
ob_start();

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
    .img-circle{
        border: 1em solid black;
        border-radius: 80% !important;
        
        
    }
    
    </style>
</head>

<style>
.back{
    background-color: #E0E0E0;
}

h1 {
    display: block;
    margin-top: 2em;
    text-align: center;
}
</style>

<body class="back" data-rsssl=1
    class="home page-template-default page page-id-869 page-child parent-pageid-2346 theme-politicalwp woocommerce-no-js tribe-no-js       header1   wpb-js-composer js-comp-ver-6.4.0 vc_responsive">
    <div id="page" class="hfeed site">
        <header class="header1">
        <?php
                require_once '../subnavbar.php'
           ?>
        </header>
   
        <?php
               if (isset($_SESSION['isLoggedIn']) == true && ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1 || $_SESSION['userDegree'] == 2 )) {
        
        ?>
        <h1 class="section-title dark_title">Member List</h1>

        <?php
               }    else {
                header('Location: ../');
                ob_end_flush();

               }

        ?>
    <div class="table-body">
        <div class="card-body">
                                        <div class="table-responsive">
                                            <?php

                                            if (isset($_SESSION['isLoggedIn']) == true && ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1 || $_SESSION['userDegree'] == 2 )) {
                                                
                                                
                                                ?>
                                                <div class="wrap-search">
                                                <div>
                                                    <?php
                                                    if (isset($_POST['searchTapped'])) {
                                                    
                                                    ?>
                                                    <a href="../../politicalwp.themeslr.com/member/">Go Back</a>
                                                    <?php
                                                    }

                                                    ?>
                                                    </div>
                                                <form action=""  method="post">
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
                if (isset($_POST['searchTapped'])) {
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

                                                         if (!isset($_POST['searchTapped'])) {

                                                           
                                                        
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

                                                                <a href="../application-view/index.php?id=<?php echo $pms['id']; ?>"
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

    </body>

    </html>