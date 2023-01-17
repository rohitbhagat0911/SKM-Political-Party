<?php
session_start();
require_once '../../server/fetchnews.php';
ob_start();
?>

<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="../wp-content/themes/politicalwp/images/theme_favicon.png">
    <link rel="stylesheet" href="index.css">
    <title>Add Events - SKM</title>
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
        .tribe-mobile #main {
            padding-top: 0
        }

        a.tribe-events-gmap {
            display: block
        }

        #tribe-events-content {
            width: 100%
        }

        .tribe-events-day .tribe-events-day-time-slot .tribe-events-day-time-slot-heading {
            margin-top: 2em
        }

        .tribe-events-day .tribe-events-day-time-slot .type-tribe_events {
            margin-left: 0
        }

        #tribe-events #tribe-events-footer,
        #tribe-events #tribe-events-header {
            padding: 0
        }

        #tribe-events-footer,
        #tribe-events-header {
            position: relative
        }

        .events-list #tribe-events-footer,
        .single-tribe_events #tribe-events-footer,
        .tribe-events-day #tribe-events-footer,
        .tribe-events-map #tribe-events-footer,
        .tribe-events-photo #tribe-events-footer {
            border-top: 0
        }

        #tribe-events-footer:after,
        #tribe-events-footer:before,
        #tribe-events-header:after,
        #tribe-events-header:before {
            background-color: #fff;
            content: "";
            display: block;
            height: 100%;
            position: absolute;
            top: 0;
            width: 1px;
            z-index: 1
        }

        #tribe-events-footer:before,
        #tribe-events-header:before {
            right: 50%
        }

        #tribe-events-footer:after,
        #tribe-events-header:after {
            left: 50%
        }

        #tribe-events-footer .tribe-events-sub-nav .tribe-events-nav-next,
        #tribe-events-footer .tribe-events-sub-nav .tribe-events-nav-previous,
        #tribe-events-header .tribe-events-sub-nav .tribe-events-nav-next,
        #tribe-events-header .tribe-events-sub-nav .tribe-events-nav-previous {
            box-sizing: border-box;
            display: block;
            margin: 0;
            width: 50%
        }

        .tribe-events-notices+#tribe-events-header {
            display: none
        }

        .tribe-events-sub-nav li a {
            background: #666;
            color: #fff;
            display: block;
            padding: 10px 20px;
            position: relative;
            white-space: normal
        }

        .tribe-events-sub-nav li a:hover,
        .tribe-events-sub-nav li a:visited {
            color: #fff
        }

        .tribe-events-sub-nav .tribe-events-nav-left a span {
            display: block;
            content: "\ab";
            position: absolute;
            left: 10px;
            top: 10px
        }

        .tribe-events-sub-nav .tribe-events-nav-right a span {
            display: block;
            content: "\00BB";
            position: absolute;
            right: 10px;
            top: 10px
        }

        .tribe-events-list .tribe-events-event-image {
            float: left;
            margin: 0 3% 0 0
        }

        .tribe-events-list .tribe-events-event-image img {
            width: auto;
            max-height: 400px
        }

        .tribe-events-list .tribe-events-event-image+div.tribe-events-content {
            float: none;
            position: relative;
            width: 100%
        }

        .tribe-events-list .tribe-events-event-image+div.tribe-events-content.tribe-events-list-event-description {
            position: static
        }

        .tribe-events-list .tribe-events-loop .tribe-events-event-meta .recurringinfo {
            display: block;
            margin: 4px 0 0
        }

        .tribe-events-list .tribe-events-loop .tribe-events-event-meta .recurringinfo .tribe-events-divider {
            display: none
        }

        .tribe-events-list .time-details,
        .tribe-events-list .tribe-event-schedule-details {
            margin-bottom: 0;
            padding: 0 12px
        }

        .tribe-events-list .tribe-events-venue-details {
            border-top: 1px solid #eee;
            margin-top: 12px;
            padding: 8px 12px 0
        }

        #tribe-events .tribe-events-loop .tribe-events-content {
            margin: 0;
            padding: 0
        }

        .tribe-events-loop .tribe-events-event-meta {
            background: #fafafa;
            border: 1px solid #eee;
            margin-top: 12px;
            padding: 12px 0 15px
        }

        .tribe-events-list-separator-year {
            display: none
        }

        .tribe-events-list-separator-month {
            margin: 36px 0 0
        }

        .tribe-events-event-cost .tribe-out-of-stock,
        .tribe-events-event-cost .tribe-tickets-left {
            font-size: 12px;
            line-height: 15px;
            white-space: nowrap
        }

        .single-tribe_events .tribe-events-schedule {
            background: #fafafa;
            border: 1px solid #eee;
            margin: 18px 0 8px;
            padding: 12px
        }

        .single-tribe_events .tribe-events-schedule .tribe-events-cost,
        .single-tribe_events .tribe-events-schedule h3 {
            display: block;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.25;
            margin: 0
        }

        .single-tribe_events .tribe-events-schedule h3 {
            margin-bottom: 2px;
            white-space: normal
        }

        .single-tribe_events .tribe-events-schedule .recurringinfo .tribe-events-divider,
        .single-tribe_events .tribe-events-schedule .tribe-events-divider {
            display: none
        }

        .single-tribe_events .tribe-events-event-image {
            margin-bottom: 10px
        }

        .single-tribe_events .tribe-events-cal-links {
            margin-bottom: 30px
        }

        .single-tribe_events .tribe-events-cal-links a {
            margin-top: 15px
        }

        .single-tribe_events .tribe-events-event-meta {
            margin: 15px 0 20px;
            padding: 4% 0
        }

        .single-tribe_events .tribe-events-venue-map {
            width: 90%;
            margin: 5px auto 0;
            display: block;
            float: none
        }

        #tribe-events div.tribe-events-single-event-description {
            padding: 0;
            margin-bottom: 10px
        }

        .tribe-events-meta-group .tribe-events-single-section-title {
            margin-top: 0
        }

        .tribe-events-event-meta .tribe-events-meta-group {
            margin-bottom: 0
        }

        .tribe-events-event-meta .column,
        .tribe-events-event-meta .tribe-events-meta-group {
            float: none;
            width: 100%
        }

        .tribe-events-calendar .tribe-events-has-events:after {
            content: "";
            display: block;
            height: 8px;
            width: 8px;
            padding: 0;
            border-radius: 50%;
            background-color: #333;
            margin: 5px auto
        }

        .tribe-events-calendar .tribe-events-has-events.tribe-events-othermonth:after {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";
            filter: alpha(opacity=40);
            -moz-opacity: .4;
            -khtml-opacity: .4;
            opacity: .4
        }

        #tribe-mobile-container {
            display: block;
            margin: 0 auto 10px
        }

        #tribe-mobile-container .type-tribe_events {
            padding: 20px 0 16px;
            margin-bottom: 0
        }

        #tribe-mobile-container .type-tribe_events~.type-tribe_events {
            padding: 15px 0;
            border-top: 1px solid #ddd
        }

        #tribe-mobile-container .type-tribe_events h4 {
            font-size: 1.25em;
            margin: 0 0 2px;
            line-height: 1.35
        }

        #tribe-mobile-container .type-tribe_events .time-details {
            font-size: 13px;
            font-weight: 700;
            margin: 0 0 2px
        }

        #tribe-mobile-container .type-tribe_events .tribe-events-event-image {
            float: left;
            width: 25%;
            margin: 5px 15px 10px 0
        }

        #tribe-mobile-container .type-tribe_events .tribe-events-event-image a {
            display: block
        }

        #tribe-mobile-container .type-tribe_events .entry-summary.description {
            padding: 0;
            margin-bottom: 0
        }

        #tribe-mobile-container .type-tribe_events .tribe-events-read-more {
            margin-top: 8px;
            display: inline-block
        }

        .tribe-mobile-day-heading {
            font-size: 16px;
            margin-bottom: 10px
        }

        .tribe-events-calendar td.tribe-events-has-events:hover {
            cursor: pointer
        }

        #tribe-events-content .tribe-events-calendar td {
            height: 45px;
            padding: 0
        }

        .tribe-events-calendar td .tribe-events-viewmore,
        .tribe-events-calendar td .type-tribe_events {
            display: none
        }

        .tribe-events-calendar td div[id*=tribe-events-daynum-],
        .tribe-events-calendar td div[id*=tribe-events-daynum-] a {
            background: none;
            font-size: 16px;
            line-height: 1;
            margin-top: 6px;
            padding: 0;
            text-align: center
        }

        .tribe-events-calendar .mobile-active.tribe-events-past div[id*=tribe-events-daynum-],
        .tribe-events-calendar .mobile-active.tribe-events-past div[id*=tribe-events-daynum-]>a {
            color: #fff
        }

        .tribe-events-calendar .mobile-active div[id*=tribe-events-daynum-],
        .tribe-events-calendar .mobile-active div[id*=tribe-events-daynum-] a,
        .tribe-events-calendar .tribe-events-past.tribe-events-has-events:after,
        .tribe-events-calendar td.mobile-active {
            background-color: #999;
            color: #fff
        }

        .tribe-events-calendar .mobile-active.tribe-events-has-events:after,
        .tribe-events-calendar .tribe-events-present.tribe-events-has-events:after {
            background: #fff
        }

        .tribe-events-calendar .tribe-events-present,
        .tribe-events-calendar .tribe-events-present.mobile-active div[id*=tribe-events-daynum-],
        .tribe-events-calendar .tribe-events-present.mobile-active div[id*=tribe-events-daynum-] a,
        .tribe-events-calendar td.tribe-events-present.mobile-active {
            background-color: #666
        }

        #tribe-mobile-container .tribe-events-viewmore {
            border-top: 1px solid #ddd;
            margin: 5px 0 0;
            padding: 15px 0 5px
        }

        .tribe-bar-disabled {
            float: none;
            width: 100%
        }

        .tribe-bar-disabled #tribe-bar-views .tribe-bar-views-list {
            padding: 0
        }

        #tribe-events-pg-template {
            padding: 40px 20px 20px
        }

        #tribe-events-content,
        #tribe-events-content.tribe-events-list {
            margin-bottom: 20px
        }

        .tribe-events-promo {
            margin-top: 10px;
            text-align: center
        }

        #tribe-events-footer~a.tribe-events-ical.tribe-events-button {
            border-radius: 0;
            display: block;
            float: none;
            font-size: 12px;
            font-weight: 400;
            height: 32px;
            line-height: 32px;
            margin: 0 auto 10px;
            padding: 0 10px;
            text-align: center
        }

        .tribe-theme-twentyfourteen .entry-content .tribe-events-calendar th,
        .tribe-theme-twentyfourteen .tribe-events-calendar th {
            border-width: 0;
            padding: 3px
        }

        .tribe-theme-twentyfourteen #tribe-events-pg-template {
            padding-left: 0;
            padding-right: 0;
            padding-top: 0
        }

        .tribe-theme-twentyfourteen #tribe-events-bar {
            margin-bottom: 10px
        }

        .tribe-theme-twentyfourteen.events-archive .entry-content {
            width: 90%
        }

        .tribe-is-responsive.tribe-mobile .tribe-events-page-title {
            margin-top: .5em
        }

        .tribe-theme-twentyfifteen #tribe-events {
            margin-left: 0;
            margin-right: 0
        }

        .tribe-theme-twentyfifteen #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option a {
            padding-left: 6px;
            padding-right: 6px
        }

        .tribe-theme-twentysixteen #tribe-events-pg-template {
            padding-top: 0
        }

        #tribe-events-header .tribe-events-sub-nav li a {
            display: none
        }

        .tribe-events-list .tribe-events-loop .tribe-events-event-meta .recurringinfo {
            display: block;
            padding: 0
        }

        .single-tribe_events .tribe-events-schedule .recurringinfo {
            display: block;
            margin: 2px 0 0
        }

        .tribe-events-schedule {
            margin: 18px 0
        }

        .single-tribe_events .tribe-events-event-image {
            margin-bottom: 10px
        }

        .tribe-events-list-separator-month {
            margin: 20px 0
        }

        #tribe-mobile-container .type-tribe_events~.type-tribe_events {
            border-top: 1px dotted #2f2f2f
        }

        .tribe-events-calendar thead th {
            padding: 7px 1em
        }

        #tribe-events-content .tribe-events-calendar td {
            transition: none
        }

        #tribe-events-content .tribe-events-calendar td:hover {
            background: none;
            box-shadow: none
        }

        #tribe-events-content .tribe-events-calendar td.tribe-events-othermonth:hover {
            background: #f9f9f9
        }

        .tribe-events-calendar td.tribe-events-past div[id*=tribe-events-daynum-],
        .tribe-events-calendar td.tribe-events-past div[id*=tribe-events-daynum-]>a {
            background: none;
            color: #999
        }

        .tribe-events-calendar td div[id*=tribe-events-daynum-],
        .tribe-events-calendar td div[id*=tribe-events-daynum-] a {
            background: none;
            padding: 0;
            color: #333
        }

        #tribe-mobile-container .tribe-events-viewmore {
            border-top: 1px dotted #2f2f2f
        }

        .tribe-events-calendar div[id*=tribe-events-daynum-] a:hover {
            color: #333
        }

        .tribe-events-calendar .mobile-active.tribe-events-past div[id*=tribe-events-daynum-],
        .tribe-events-calendar .mobile-active.tribe-events-past div[id*=tribe-events-daynum-]>a {
            color: #fff
        }

        #tribe-events-content .tribe-events-calendar .mobile-active:hover,
        #tribe-events-content .tribe-events-calendar td.tribe-events-othermonth.mobile-active,
        #tribe-events-content .tribe-events-calendar td.tribe-events-othermonth.mobile-active div[id*=tribe-events-daynum-],
        #tribe-events-content .tribe-events-calendar td.tribe-events-othermonth.mobile-active div[id*=tribe-events-daynum-] a,
        .tribe-events-calendar .mobile-active div[id*=tribe-events-daynum-],
        .tribe-events-calendar .mobile-active div[id*=tribe-events-daynum-] a,
        .tribe-events-calendar td.mobile-active {
            background-color: #21759b;
            color: #fff
        }

        .tribe-events-calendar .tribe-events-present.tribe-events-has-events:after {
            background: #333
        }

        .tribe-events-calendar .mobile-active.tribe-events-has-events:after {
            background-color: #fff
        }

        #tribe-events-content .tribe-events-calendar td.tribe-events-present:hover,
        .tribe-events-calendar td.tribe-events-present,
        .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-],
        .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-]>a {
            background-color: #dedede;
            color: #333
        }

        #tribe-events-content .tribe-events-calendar td.tribe-events-present.mobile-active:hover,
        .tribe-events-calendar td.tribe-events-present.mobile-active,
        .tribe-events-calendar td.tribe-events-present.mobile-active div[id*=tribe-events-daynum-],
        .tribe-events-calendar td.tribe-events-present.mobile-active div[id*=tribe-events-daynum-] a {
            background-color: #21759b;
            color: #fff
        }

        .tribe-theme-twentyfourteen #tribe-events-pg-template {
            padding-left: 0;
            padding-right: 0
        }

        .tribe-theme-twentyfourteen #tribe-events-pg-template #tribe-events {
            padding: 10px
        }
    </style>
    <style id="fvm-header-3" media="only screen and (max-width: 768px)">
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
        href='../wp-content/uploads/cache/fvm/1600714823/out/header-bd4f160203b74dcb76caaf173553a3175ffb42fe.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='fvm-header-2-css'
        href='../wp-content/uploads/cache/fvm/1600714823/out/header-60bd117b452336916ea166f76d7003ee322fb463.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='fvm-header-4-css'
        href='../wp-content/uploads/cache/fvm/1600714823/out/header-a0cc2a27b4243f0d880aef223c3c6150c32442fd.min.css'
        type='text/css' media='all' />
    <script defer type='text/javascript'
        src='../wp-content/uploads/cache/fvm/1600714823/out/header-0c047eff16c0891c3d45f49437e9782f0c94c03d.min.js'
        id='fvm-header-1-js'></script>
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

        .footer {
            padding-top: 2%;
            padding-left: 77.6667px;
            padding-right: 77.3333px;
            background-image: linear-gradient(to right, #f78320, #ed1e26, #01a451);
        }

        .tribe-events-list-event-title {
            color: #e3111a;
        }

        .add-button {
            position: absolute;
            top: 0;
            right: 0;
            text-decoration: none;
            border: #e3111a solid 1px;
            padding: 5px 10px;
            border-radius: 15px;
        }

        .login-logout-button {
            background-color: #0096e2;
            color: #fff;
            padding: 10px;
            border-radius: 20px;
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
    class="archive post-type-archive post-type-archive-tribe_events theme-politicalwp woocommerce-no-js tribe-no-js tribe-filter-live          wpb-js-composer js-comp-ver-6.4.0 vc_responsive events-list events-archive tribe-events-style-full tribe-events-style-theme tribe-theme-parent-politicalwp tribe-theme-child-politicalwp-child tribe-events-page-template">
    <div id="page" class="hfeed site">
        <header class="header1">
            <?php
            require_once '../subnavbar.php';
            ?>
        </header>

        
        
        <div class="clearfix"></div>
        <div id="tribe-events-pg-template" class="high-padding container">
        <div style="text-align: center; font-size: 0.1em;"><h1>Add Events</h1></div>

        <?php
         if ( isset($_SESSION['userDegree']) && ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1)) {
            if (isset($_GET['vb']) && $_GET['vb'] == '1') {
                ?>
 <div class="success">
   Video exceeds the memory size. It must be less than 20 MB
 </div>
                <?php
             } 

            if (isset($_GET['res']) && $_GET['res'] == 'newsupdated') {
               ?>
<div class="success">
  News updated Successfully
</div>
               <?php
            }  
            if (isset($_GET['res']) && $_GET['res'] == 'newsadded') {
                        ?>
                            <div class="success">
  News added Successfully
</div>
<form accept-charset="UTF-8" action="../../server/addnews.php" method="POST"
                enctype="multipart/form-data">
                <div class="form-group"> 
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter the title"
                       required="required">
                </div>
                <div class="form-group">
                    <label for="description">Enter Description:</label>
                    <textarea id="description" name="description" class="form-control" rows="4" cols="50" maxlength="1000" required="required" placeholder="Enter Description"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload First Image:</label>
                    <input type="file" name="image" required="required">
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Second Image:</label>
                    <input type="file" name="image2">
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Third Image:</label>
                    <input type="file" name="image3">
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Video:</label>
                    <input type="file" name="video">
                    <small>Video size should be less than 20 MB</small>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary" name="addnews">Submit</button>
            </form>

                        <?php
                    } elseif (isset($_GET['id']) && (isset($_SESSION['userDegree']) && ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1))) { 
                        if($eventDetails != FALSE && $eventDetails->num_rows > 0) {
                            while ($event = $eventDetails->fetch_assoc()) {
                                if ($_GET['id'] == $event['id']) {
                                    
?>

                        
<form accept-charset="UTF-8" action="../../server/editnews.php" method="POST"
                enctype="multipart/form-data">
                <div class="form-group"> 
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter the title"
                      value="<?php echo $event['title']; ?>" required="required">
                </div>
                <div class="form-group">
                    <label for="description">Enter Description:</label>
                    <textarea id="description" name="description" class="form-control" rows="4" cols="50" maxlength="1000" required="required" placeholder="Enter Description"><?php echo $event['description']; ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Image:</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Second Image:</label>
                    <input type="file" name="image2">
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Third Image:</label>
                    <input type="file" name="image3">
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Video:</label>
                    <input type="file" name="video">
                    <small>Video size should be less than 20 MB</small>
                </div>
                <hr>
                <input type="hidden" name="id" value="<?php echo $event['id'] ?>" />
                <button type="submit" class="btn btn-primary" name="enews">Submit</button>
            </form>
<?php           
}
                            }
                        }             
                    } else {
                     ?>
                   <form accept-charset="UTF-8" action="../../server/addnews.php" method="POST"
                enctype="multipart/form-data">
                <div class="form-group"> 
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter the title"
                       required="required">
                </div>
                <div class="form-group">
                    <label for="description">Enter Description:</label>
                    <textarea id="description" name="description" class="form-control" rows="4" cols="50" maxlength="1000" required="required" placeholder="Enter Description"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload First Image:</label>
                    <input type="file" name="image" required="required">
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Second Image:</label>
                    <input type="file" name="image2">
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Third Image:</label>
                    <input type="file" name="image3">
                </div>
                <div class="form-group mt-3">
                    <label class="mr-2">Upload Video:</label>
                    <input type="file" name="video">
                    <small>Video size should be less than 20 MB</small>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary" name="addnews">Submit</button>
            </form>
                     <?php
                    }

                } else {
                    header('Location: ../');
                }
            ?>
           

        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="clearfix"></div>
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
</body>

</html>