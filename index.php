<?php

require_once 'requires/db.php';

$categories = R::findAll('categories');
$pictures = R::findAll('pictures');

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Галерея - Fine Art</title>
    <meta name="robots" content="noindex, nofollow"/>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com"/>
    <link rel="dns-prefetch" href="https://s.w.org"/>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/ld-wp73.template-help.com\/wordpress\/prod_26776\/v2\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.1"
            }
        };
        /*! This file is auto-generated */
        !function (e, a, t)
        {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s (e, t)
            {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c (e)
            {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for ( o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++ )
            {
                t.supports[o[r]] = function (e)
                {
                    if ( !p || !p.fillText ) return !1;
                    switch ( p.textBaseline = "top", p.font = "600 32px Arial", e )
                    {
                        case "flag":
                            return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                        case "emoji":
                            return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                    }
                    return !1
                }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            }
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function ()
            {
                t.DOMReady = !0
            }, t.supports.everything || (n = function ()
            {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function ()
            {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji
        {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-includes/css/dist/block-library/style.min.css?ver=6.0.1" type="text/css" media="all"/>
    <style id="global-styles-inline-css" type="text/css">
        body
        {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color
        {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color
        {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color
        {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color
        {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color
        {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color
        {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color
        {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color
        {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color
        {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color
        {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color
        {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color
        {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color
        {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color
        {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color
        {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color
        {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color
        {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color
        {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color
        {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color
        {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color
        {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color
        {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color
        {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color
        {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color
        {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color
        {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color
        {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color
        {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color
        {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color
        {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color
        {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color
        {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color
        {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color
        {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color
        {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color
        {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background
        {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background
        {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background
        {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background
        {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background
        {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background
        {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background
        {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background
        {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background
        {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background
        {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background
        {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background
        {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size
        {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size
        {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size
        {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size
        {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.6.1" type="text/css" media="all"/>
    <link rel="stylesheet" id="font-awesome-css" href="/assets/css/font-awesome.min.css?ver=4.7.0" type="text/css" media="all"/>
    <link rel="stylesheet" id="kava-parent-theme-style-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/themes/kava/style.css?ver=2.1.4" type="text/css" media="all"/>
    <link rel="stylesheet" id="kava-theme-style-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/themes/fineart/style.css?ver=2.1.4" type="text/css" media="all"/>
    <style id="kava-theme-style-inline-css" type="text/css">
        /* #Typography */
        body
        {
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.9;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            text-align: left;
            color: #585858;
        }

        h1,
        .h1-style
        {
            font-style: normal;
            font-weight: 400;
            font-size: 34px;
            line-height: 1.4;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            text-align: inherit;
            color: #1d1d1d;
        }

        h2,
        .h2-style
        {
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 1.2;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            text-align: inherit;
            color: #1d1d1d;
        }

        h3,
        .h3-style
        {
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            line-height: 1.2;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            text-align: inherit;
            color: #1d1d1d;
        }

        h4,
        .h4-style
        {
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 1.2;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            text-align: inherit;
            color: #1d1d1d;
        }

        h5,
        .h5-style
        {
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 1.5;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            text-align: inherit;
            color: #1d1d1d;
        }

        h6,
        .h6-style
        {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.5;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            text-align: inherit;
            color: #1d1d1d;
        }

        @media (min-width: 1200px)
        {

            h1,
            .h1-style
            {
                font-size: 56px;
            }

            h2,
            .h2-style
            {
                font-size: 30px;
            }

            h3,
            .h3-style
            {
                font-size: 16px;
            }
        }

        a,
        h1 a:hover,
        h2 a:hover,
        h3 a:hover,
        h4 a:hover,
        h5 a:hover,
        h6 a:hover
        {
            color: #585858;
        }

        a:hover
        {
            color: #f62e46;
        }

        blockquote
        {
            color: #f62e46;
        }

        /* #Header */
        .site-header__wrap
        {
            background-color: #ffffff;
            background-repeat: repeat;
            background-position: center top;
            background-attachment: scroll;;
        }

        /* ##Top Panel */
        .top-panel
        {
            color: #585858;
            background-color: #ffffff;
        }

        /* #Main Menu */
        .main-navigation
        {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.4;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
        }

        .main-navigation a,
        .menu-item-has-children:before
        {
            color: #585858;
        }

        .main-navigation a:hover,
        .main-navigation .current_page_item > a,
        .main-navigation .current-menu-item > a,
        .main-navigation .current_page_ancestor > a,
        .main-navigation .current-menu-ancestor > a
        {
            color: #f62e46;
        }

        /* #Mobile Menu */
        .mobile-menu-toggle-button
        {
            color: #ffffff;
            background-color: #f62e46;
        }

        /* #Social */
        .social-list a
        {
            color: #585858;
        }

        .social-list a:hover
        {
            color: #f62e46;
        }

        /* #Breadcrumbs */
        .breadcrumbs_item
        {
            font-style: normal;
            font-weight: 400;
            font-size: 11px;
            line-height: 1.5;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
        }

        .breadcrumbs_item_sep,
        .breadcrumbs_item_link
        {
            color: #585858;
        }

        .breadcrumbs_item_link:hover
        {
            color: #f62e46;
        }

        /* #Post navigation */
        .post-navigation-container i
        {
            color: #585858;
        }

        .post-navigation-container .nav-links a:hover .post-title,
        .post-navigation-container .nav-links a:hover .nav-text
        {
            color: #585858;
        }

        .post-navigation-container .nav-links a:hover i
        {
            color: #f62e46;
        }

        /* #Pagination */
        .posts-list-navigation .pagination .page-numbers,
        .page-links > span,
        .page-links > a
        {
            color: #585858;
        }

        .posts-list-navigation .pagination a.page-numbers:hover,
        .posts-list-navigation .pagination .page-numbers.current,
        .page-links > a:hover,
        .page-links > span
        {
            color: #f62e46;
        }

        .posts-list-navigation .pagination .next,
        .posts-list-navigation .pagination .prev
        {
            color: #585858;
        }

        .posts-list-navigation .pagination .next:hover,
        .posts-list-navigation .pagination .prev:hover
        {
            color: #f62e46;
        }

        /* #Button Appearance Styles (regular scheme) */
        .btn,
        button,
        input[type='button'],
        input[type='reset'],
        input[type='submit']
        {
            font-style: normal;
            font-weight: 900;
            font-size: 11px;
            line-height: 1;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 1px;
            color: #ffffff;
            background-color: #f62e46;
        }

        .btn:hover,
        button:hover,
        input[type='button']:hover,
        input[type='reset']:hover,
        input[type='submit']:hover,
        input[type='reset']:hover
        {
            color: #ffffff;
            background-color: rgb(255, 84, 108);
        }

        .btn.invert-button
        {
            color: #ffffff;
        }

        .btn.invert-button:hover
        {
            color: #ffffff;
            border-color: #f62e46;
            background-color: #f62e46;
        }

        /* #Totop Button */
        #toTop
        {
            padding: 11px 17px;
            border-radius: 100px;
            background-color: #ffffff;
            color: #1d1d1d;
        }

        #toTop:hover
        {
            background-color: #ffffff;
            color: #e82b18;
        }

        input,
        optgroup,
        select,
        textarea
        {
            font-size: 16px;
        }

        /* #Comment, Contact, Password Forms */
        .comment-form .submit,
        .wpcf7-submit,
        .post-password-form label + input
        {
            font-style: normal;
            font-weight: 900;
            font-size: 11px;
            line-height: 1;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 1px;
            color: #ffffff;
            background-color: #f62e46;
        }

        .comment-form .submit:hover,
        .wpcf7-submit:hover,
        .post-password-form label + input:hover
        {
            color: #ffffff;
            background-color: rgb(255, 84, 108);
        }

        .comment-reply-title
        {
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 1.2;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            color: #1d1d1d;
        }

        /* Cookies consent */
        .comment-form-cookies-consent input[type='checkbox']:checked ~ label[for=wp-comment-cookies-consent]:before
        {
            color: #ffffff;
            border-color: #f62e46;
            background-color: #f62e46;
        }

        /* #Comment Reply Link */
        #cancel-comment-reply-link
        {
            color: #585858;
        }

        #cancel-comment-reply-link:hover
        {
            color: #f62e46;
        }

        /* #Comment item */
        .comment-body .fn
        {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.5;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            color: #1d1d1d;
        }

        .comment-date__time
        {
            color: #585858;
        }

        .comment-reply-link
        {
            font-style: normal;
            font-weight: 900;
            font-size: 11px;
            line-height: 1;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 1px;
        }

        /* #Input Placeholders */
        ::-webkit-input-placeholder
        {
            color: #585858;
        }

        ::-moz-placeholder
        {
            color: #585858;
        }

        :-moz-placeholder
        {
            color: #585858;
        }

        :-ms-input-placeholder
        {
            color: #585858;
        }

        /* #Entry Meta */
        .posted-on,
        .cat-links,
        .byline,
        .tags-links
        {
            color: #585858;
        }

        .comments-button
        {
            color: #585858;
        }

        .comments-button:hover
        {
            color: #ffffff;
            background-color: #f62e46;
        }

        .btn-style .post-categories a
        {
            color: #ffffff;
            background-color: #f62e46;
        }

        .btn-style .post-categories a:hover
        {
            color: #ffffff;
            background-color: rgb(255, 84, 108);
        }

        .sticky-label
        {
            color: #ffffff;
            background-color: #f62e46;
        }

        /* Posts List Item Invert */
        .invert-hover.has-post-thumbnail:hover,
        .invert-hover.has-post-thumbnail:hover .posted-on,
        .invert-hover.has-post-thumbnail:hover .cat-links,
        .invert-hover.has-post-thumbnail:hover .byline,
        .invert-hover.has-post-thumbnail:hover .tags-links,
        .invert-hover.has-post-thumbnail:hover .entry-meta,
        .invert-hover.has-post-thumbnail:hover a,
        .invert-hover.has-post-thumbnail:hover .btn-icon,
        .invert-item.has-post-thumbnail,
        .invert-item.has-post-thumbnail .posted-on,
        .invert-item.has-post-thumbnail .cat-links,
        .invert-item.has-post-thumbnail .byline,
        .invert-item.has-post-thumbnail .tags-links,
        .invert-item.has-post-thumbnail .entry-meta,
        .invert-item.has-post-thumbnail a,
        .invert-item.has-post-thumbnail .btn:hover,
        .invert-item.has-post-thumbnail .btn-style .post-categories a:hover,
        .invert,
        .invert .entry-title,
        .invert a,
        .invert .byline,
        .invert .posted-on,
        .invert .cat-links,
        .invert .tags-links
        {
            color: #ffffff;
        }

        .invert-hover.has-post-thumbnail:hover a:hover,
        .invert-hover.has-post-thumbnail:hover .btn-icon:hover,
        .invert-item.has-post-thumbnail a:hover,
        .invert a:hover
        {
            color: #585858;
        }

        .invert-hover.has-post-thumbnail .btn,
        .invert-item.has-post-thumbnail .comments-button,
        .posts-list--default.list-style-v10 .invert.default-item .comments-button
        {
            color: #ffffff;
            background-color: #f62e46;
        }

        .invert-hover.has-post-thumbnail .btn:hover,
        .invert-item.has-post-thumbnail .comments-button:hover,
        .posts-list--default.list-style-v10 .invert.default-item .comments-button:hover
        {
            color: #585858;
            background-color: #ffffff;
        }

        /* Default Posts List */
        .list-style-v8 .comments-link
        {
            color: #585858;
        }

        .list-style-v8 .comments-link:hover
        {
            color: #f62e46;
        }

        /* Creative Posts List */
        .creative-item .entry-title a:hover
        {
            color: #585858;
        }

        .list-style-default .creative-item a,
        .creative-item .btn-icon
        {
            color: #585858;
        }

        .list-style-default .creative-item a:hover,
        .creative-item .btn-icon:hover
        {
            color: #585858;
        }

        .list-style-default .creative-item .btn,
        .list-style-default .creative-item .btn:hover,
        .list-style-default .creative-item .comments-button:hover
        {
            color: #ffffff;
        }

        .creative-item__title-first-letter
        {
            font-style: normal;
            font-weight: 400;
            font-family: 'Open Sans', sans-serif;
            color: #1d1d1d;
        }

        .posts-list--creative.list-style-v10 .creative-item:before
        {
            background-color: #f62e46;
            box-shadow: 0px 0px 0px 8px rgba(246, 46, 70, 0.25);
        }

        .posts-list--creative.list-style-v10 .creative-item__post-date
        {
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 1.2;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            color: #585858;
        }

        .posts-list--creative.list-style-v10 .creative-item__post-date a
        {
            color: #585858;
        }

        .posts-list--creative.list-style-v10 .creative-item__post-date a:hover
        {
            color: #f62e46;
        }

        /* Creative Posts List style-v2 */
        .list-style-v2 .creative-item .entry-title,
        .list-style-v9 .creative-item .entry-title
        {
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 1.2;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
        }

        /* Image Post Format */
        .post_format-post-format-image .post-thumbnail__link:before
        {
            color: #ffffff;
            background-color: #f62e46;
        }

        /* Gallery Post Format */
        .post_format-post-format-gallery .swiper-button-prev,
        .post_format-post-format-gallery .swiper-button-next
        {
            color: #585858;
        }

        .post_format-post-format-gallery .swiper-button-prev:hover,
        .post_format-post-format-gallery .swiper-button-next:hover
        {
            color: #f62e46;
        }

        /* Link Post Format */
        .post_format-post-format-quote .post-format-quote
        {
            color: #ffffff;
            background-color: #f62e46;
        }

        .post_format-post-format-quote .post-format-quote:before
        {
            color: #f62e46;
            background-color: #ffffff;
        }

        /* Post Author */
        .post-author__title a
        {
            color: #585858;
        }

        .post-author__title a:hover
        {
            color: #f62e46;
        }

        .invert .post-author__title a
        {
            color: #ffffff;
        }

        .invert .post-author__title a:hover
        {
            color: #585858;
        }

        /* Single Post */
        .single-post blockquote
        {
            border-color: #f62e46;
        }

        .single-post:not(.post-template-single-layout-4):not(.post-template-single-layout-7) .tags-links a:hover
        {
            color: #ffffff;
            border-color: #f62e46;
            background-color: #f62e46;
        }

        .single-header-3 .post-author .byline,
        .single-header-4 .post-author .byline,
        .single-header-5 .post-author .byline
        {
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 1.2;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
        }

        .single-header-8,
        .single-header-10 .entry-header
        {
            background-color: #f62e46;
        }

        .single-header-8.invert a:hover,
        .single-header-10.invert a:hover
        {
            color: rgba(255, 255, 255, 0.5);
        }

        .single-header-3 a.comments-button,
        .single-header-10 a.comments-button
        {
            border: 1px solid #ffffff;
        }

        .single-header-3 a.comments-button:hover,
        .single-header-10 a.comments-button:hover
        {
            color: #585858;
            background-color: #ffffff;
        }

        /* Page preloader */
        .page-preloader
        {
            border-top-color: #f62e46;
            border-right-color: #f62e46;
        }

        /* Logo */
        .site-logo__link,
        .site-logo__link:hover
        {
            color: #f62e46;
        }

        /* Page title */
        .page-title
        {
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 1.2;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            color: #1d1d1d;
        }

        @media (min-width: 1200px)
        {
            .page-title
            {
                font-size: 30px;
            }
        }

        /* Grid Posts List */
        .posts-list.list-style-v3 .comments-link
        {
            border-color: #585858;
        }

        .posts-list.list-style-v4 .comments-link
        {
            color: #585858;
        }

        .posts-list.list-style-v4 .posts-list__item.grid-item .grid-item-wrap .comments-link:hover
        {
            color: #ffffff;
            background-color: #585858;
        }

        /* Posts List Grid Item Invert */
        .grid-item-wrap.invert,
        .grid-item-wrap.invert .posted-on,
        .grid-item-wrap.invert .cat-links,
        .grid-item-wrap.invert .byline,
        .grid-item-wrap.invert .tags-links,
        .grid-item-wrap.invert .entry-meta,
        .grid-item-wrap.invert a,
        .grid-item-wrap.invert .btn-icon,
        .grid-item-wrap.invert .comments-button
        {
            color: #ffffff;
        }

        /* Posts List Grid-5 Item Invert */
        .list-style-v5 .grid-item-wrap.invert .posted-on,
        .list-style-v5 .grid-item-wrap.invert .cat-links,
        .list-style-v5 .grid-item-wrap.invert .byline,
        .list-style-v5 .grid-item-wrap.invert .tags-links,
        .list-style-v5 .grid-item-wrap.invert .posted-on a,
        .list-style-v5 .grid-item-wrap.invert .cat-links a,
        .list-style-v5 .grid-item-wrap.invert .tags-links a,
        .list-style-v5 .grid-item-wrap.invert .byline a,
        .list-style-v5 .grid-item-wrap.invert .comments-link,
        .list-style-v5 .grid-item-wrap.invert .entry-title a:hover
        {
            color: #f62e46;
        }

        .list-style-v5 .grid-item-wrap.invert .posted-on a:hover,
        .list-style-v5 .grid-item-wrap.invert .cat-links a:hover,
        .list-style-v5 .grid-item-wrap.invert .tags-links a:hover,
        .list-style-v5 .grid-item-wrap.invert .byline a:hover,
        .list-style-v5 .grid-item-wrap.invert .comments-link:hover
        {
            color: #ffffff;
        }

        /* Posts List Grid-6 Item Invert */
        .posts-list.list-style-v6 .posts-list__item.grid-item .grid-item-wrap .cat-links a,
        .posts-list.list-style-v7 .posts-list__item.grid-item .grid-item-wrap .cat-links a
        {
            color: #ffffff;
            background-color: #585858;
        }

        .posts-list.list-style-v6 .posts-list__item.grid-item .grid-item-wrap .cat-links a:hover,
        .posts-list.list-style-v7 .posts-list__item.grid-item .grid-item-wrap .cat-links a:hover
        {
            color: #ffffff;
            background-color: rgb(255, 84, 108);
        }

        .posts-list.list-style-v9 .posts-list__item.grid-item .grid-item-wrap .entry-header .entry-title
        {
            font-weight: 400;
        }

        /* Grid 7 */
        .list-style-v7 .grid-item-wrap.invert .posted-on a:hover,
        .list-style-v7 .grid-item-wrap.invert .cat-links a:hover,
        .list-style-v7 .grid-item-wrap.invert .tags-links a:hover,
        .list-style-v7 .grid-item-wrap.invert .byline a:hover,
        .list-style-v7 .grid-item-wrap.invert .comments-link:hover,
        .list-style-v7 .grid-item-wrap.invert .entry-title a:hover,
        .list-style-v6 .grid-item-wrap.invert .posted-on a:hover,
        .list-style-v6 .grid-item-wrap.invert .cat-links a:hover,
        .list-style-v6 .grid-item-wrap.invert .tags-links a:hover,
        .list-style-v6 .grid-item-wrap.invert .byline a:hover,
        .list-style-v6 .grid-item-wrap.invert .comments-link:hover,
        .list-style-v6 .grid-item-wrap.invert .entry-title a:hover
        {
            color: #f62e46;
        }

        .list-style-v7 .grid-item-wrap.invert .posted-on,
        .list-style-v7 .grid-item-wrap.invert .cat-links,
        .list-style-v7 .grid-item-wrap.invert .byline,
        .list-style-v7 .grid-item-wrap.invert .tags-links,
        .list-style-v7 .grid-item-wrap.invert .posted-on a,
        .list-style-v7 .grid-item-wrap.invert .cat-links a,
        .list-style-v7 .grid-item-wrap.invert .tags-links a,
        .list-style-v7 .grid-item-wrap.invert .byline a,
        .list-style-v7 .grid-item-wrap.invert .comments-link,
        .list-style-v7 .grid-item-wrap.invert .entry-title a,
        .list-style-v7 .grid-item-wrap.invert .entry-content p,
        .list-style-v6 .grid-item-wrap.invert .posted-on,
        .list-style-v6 .grid-item-wrap.invert .cat-links,
        .list-style-v6 .grid-item-wrap.invert .byline,
        .list-style-v6 .grid-item-wrap.invert .tags-links,
        .list-style-v6 .grid-item-wrap.invert .posted-on a,
        .list-style-v6 .grid-item-wrap.invert .cat-links a,
        .list-style-v6 .grid-item-wrap.invert .tags-links a,
        .list-style-v6 .grid-item-wrap.invert .byline a,
        .list-style-v6 .grid-item-wrap.invert .comments-link,
        .list-style-v6 .grid-item-wrap.invert .entry-title a,
        .list-style-v6 .grid-item-wrap.invert .entry-content p
        {
            color: #ffffff;
        }

        .posts-list.list-style-v7 .grid-item .grid-item-wrap .entry-footer .comments-link:hover,
        .posts-list.list-style-v6 .grid-item .grid-item-wrap .entry-footer .comments-link:hover,
        .posts-list.list-style-v6 .posts-list__item.grid-item .grid-item-wrap .btn:hover,
        .posts-list.list-style-v7 .posts-list__item.grid-item .grid-item-wrap .btn:hover
        {
            color: #f62e46;
            border-color: #f62e46;
        }

        .posts-list.list-style-v10 .grid-item-inner .space-between-content .comments-link
        {
            color: #585858;
        }

        .posts-list.list-style-v10 .grid-item-inner .space-between-content .comments-link:hover
        {
            color: #f62e46;
        }

        .posts-list.list-style-v10 .posts-list__item.justify-item .justify-item-inner .entry-title a
        {
            color: #585858;
        }

        .posts-list.posts-list--vertical-justify.list-style-v10 .posts-list__item.justify-item .justify-item-inner .entry-title a:hover
        {
            color: #ffffff;
            background-color: #f62e46;
        }

        .posts-list.list-style-v5 .posts-list__item.justify-item .justify-item-inner.invert .cat-links a:hover,
        .posts-list.list-style-v8 .posts-list__item.justify-item .justify-item-inner.invert .cat-links a:hover
        {
            color: #ffffff;
            background-color: rgb(255, 84, 108);
        }

        .posts-list.list-style-v5 .posts-list__item.justify-item .justify-item-inner.invert .cat-links a,
        .posts-list.list-style-v8 .posts-list__item.justify-item .justify-item-inner.invert .cat-links a
        {
            color: #ffffff;
            background-color: #585858;
        }

        .list-style-v8 .justify-item-inner.invert .posted-on,
        .list-style-v8 .justify-item-inner.invert .cat-links,
        .list-style-v8 .justify-item-inner.invert .byline,
        .list-style-v8 .justify-item-inner.invert .tags-links,
        .list-style-v8 .justify-item-inner.invert .posted-on a,
        .list-style-v8 .justify-item-inner.invert .cat-links a,
        .list-style-v8 .justify-item-inner.invert .tags-links a,
        .list-style-v8 .justify-item-inner.invert .byline a,
        .list-style-v8 .justify-item-inner.invert .comments-link,
        .list-style-v8 .justify-item-inner.invert .entry-title a,
        .list-style-v8 .justify-item-inner.invert .entry-content p,
        .list-style-v5 .justify-item-inner.invert .posted-on,
        .list-style-v5 .justify-item-inner.invert .cat-links,
        .list-style-v5 .justify-item-inner.invert .byline,
        .list-style-v5 .justify-item-inner.invert .tags-links,
        .list-style-v5 .justify-item-inner.invert .posted-on a,
        .list-style-v5 .justify-item-inner.invert .cat-links a,
        .list-style-v5 .justify-item-inner.invert .tags-links a,
        .list-style-v5 .justify-item-inner.invert .byline a,
        .list-style-v5 .justify-item-inner.invert .comments-link,
        .list-style-v5 .justify-item-inner.invert .entry-title a,
        .list-style-v5 .justify-item-inner.invert .entry-content p,
        .list-style-v4 .justify-item-inner.invert .posted-on:hover,
        .list-style-v4 .justify-item-inner.invert .cat-links,
        .list-style-v4 .justify-item-inner.invert .byline,
        .list-style-v4 .justify-item-inner.invert .tags-links,
        .list-style-v4 .justify-item-inner.invert .posted-on a,
        .list-style-v4 .justify-item-inner.invert .cat-links a,
        .list-style-v4 .justify-item-inner.invert .tags-links a,
        .list-style-v4 .justify-item-inner.invert .byline a,
        .list-style-v4 .justify-item-inner.invert .comments-link,
        .list-style-v4 .justify-item-inner.invert .entry-title a,
        .list-style-v4 .justify-item-inner.invert .entry-content p
        {
            color: #ffffff;
        }

        .list-style-v8 .justify-item-inner.invert .posted-on a:hover,
        .list-style-v8 .justify-item-inner.invert .cat-links a:hover,
        .list-style-v8 .justify-item-inner.invert .tags-links a:hover,
        .list-style-v8 .justify-item-inner.invert .byline a:hover,
        .list-style-v8 .justify-item-inner.invert .comments-link:hover,
        .list-style-v8 .justify-item-inner.invert .entry-title a:hover,
        .list-style-v5 .justify-item-inner.invert .posted-on a:hover,
        .list-style-v5 .justify-item-inner.invert .cat-links a:hover,
        .list-style-v5 .justify-item-inner.invert .tags-links a:hover,
        .list-style-v5 .justify-item-inner.invert .byline a:hover,
        .list-style-v5 .justify-item-inner.invert .entry-title a:hover,
        .list-style-v4 .justify-item-inner.invert .posted-on a,
        .list-style-v4 .justify-item-inner.invert .cat-links a:hover,
        .list-style-v4 .justify-item-inner.invert .tags-links a:hover,
        .list-style-v4 .justify-item-inner.invert .byline a:hover,
        .list-style-v4 .justify-item-inner.invert .comments-link:hover,
        .list-style-v4 .justify-item-inner.invert .entry-title a:hover
        {
            color: #f62e46;
        }

        .posts-list.list-style-v5 .justify-item .justify-item-wrap .entry-footer .comments-link:hover
        {
            border-color: #f62e46;
        }

        .list-style-v4 .justify-item-inner.invert .btn:hover,
        .list-style-v6 .justify-item-wrap.invert .btn:hover,
        .list-style-v8 .justify-item-inner.invert .btn:hover
        {
            color: #ffffff;
        }

        .posts-list.posts-list--vertical-justify.list-style-v5 .posts-list__item.justify-item .justify-item-wrap .entry-footer .comments-link:hover,
        .posts-list.posts-list--vertical-justify.list-style-v5 .posts-list__item.justify-item .justify-item-wrap .entry-footer .btn:hover
        {
            color: #f62e46;
            border-color: #f62e46;
        }

        /* masonry Posts List */
        .posts-list.list-style-v3 .comments-link
        {
            border-color: #585858;
        }

        .posts-list.list-style-v4 .comments-link
        {
            color: #585858;
        }

        .posts-list.list-style-v4 .posts-list__item.masonry-item .masonry-item-wrap .comments-link:hover
        {
            color: #ffffff;
            background-color: #585858;
        }

        /* Posts List masonry Item Invert */
        .masonry-item-wrap.invert,
        .masonry-item-wrap.invert .posted-on,
        .masonry-item-wrap.invert .cat-links,
        .masonry-item-wrap.invert .byline,
        .masonry-item-wrap.invert .tags-links,
        .masonry-item-wrap.invert .entry-meta,
        .masonry-item-wrap.invert a,
        .masonry-item-wrap.invert .btn-icon,
        .masonry-item-wrap.invert .comments-button
        {
            color: #ffffff;
        }

        /* Posts List masonry-5 Item Invert */
        .list-style-v5 .masonry-item-wrap.invert .posted-on,
        .list-style-v5 .masonry-item-wrap.invert .cat-links,
        .list-style-v5 .masonry-item-wrap.invert .byline,
        .list-style-v5 .masonry-item-wrap.invert .tags-links,
        .list-style-v5 .masonry-item-wrap.invert .posted-on a,
        .list-style-v5 .masonry-item-wrap.invert .cat-links a,
        .list-style-v5 .masonry-item-wrap.invert .tags-links a,
        .list-style-v5 .masonry-item-wrap.invert .byline a,
        .list-style-v5 .masonry-item-wrap.invert .comments-link,
        .list-style-v5 .masonry-item-wrap.invert .entry-title a:hover
        {
            color: #f62e46;
        }

        .list-style-v5 .masonry-item-wrap.invert .posted-on a:hover,
        .list-style-v5 .masonry-item-wrap.invert .cat-links a:hover,
        .list-style-v5 .masonry-item-wrap.invert .tags-links a:hover,
        .list-style-v5 .masonry-item-wrap.invert .byline a:hover,
        .list-style-v5 .masonry-item-wrap.invert .comments-link:hover
        {
            color: #ffffff;
        }

        .posts-list.list-style-v10 .masonry-item-inner .space-between-content .comments-link
        {
            color: #585858;
        }

        .posts-list.list-style-v10 .masonry-item-inner .space-between-content .comments-link:hover
        {
            color: #f62e46;
        }

        .widget_recent_entries a,
        .widget_recent_comments a
        {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.5;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            color: #1d1d1d;
        }

        .widget_recent_entries a:hover,
        .widget_recent_comments a:hover
        {
            color: #585858;
        }

        .widget_recent_entries .post-date,
        .widget_recent_comments .recentcomments
        {
            color: #585858;
        }

        .widget_recent_comments .comment-author-link a
        {
            color: #585858;
        }

        .widget_recent_comments .comment-author-link a:hover
        {
            color: #585858;
        }

        .widget_calendar th,
        .widget_calendar caption
        {
            color: #f62e46;
        }

        .widget_calendar tbody td a
        {
            color: #585858;
        }

        .widget_calendar tbody td a:hover
        {
            color: #ffffff;
            background-color: #f62e46;
        }

        .widget_calendar tfoot td a
        {
            color: #585858;
        }

        .widget_calendar tfoot td a:hover
        {
            color: #f62e46;
        }

        /* Preloader */
        .jet-smart-listing-wrap.jet-processing + div.jet-smart-listing-loading,
        div.wpcf7 .ajax-loader
        {
            border-top-color: #f62e46;
            border-right-color: #f62e46;
        }

        /*--------------------------------------------------------------## Ecwid Plugin Styles--------------------------------------------------------------*/
        /* Product Title, Product Price amount */
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid-product__title-inner,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products .grid-product__image ~ .grid-product__price .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products .grid-product__image ~ .grid-product__title .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-store .grid__products--medium-items.grid__products--layout-center .grid-product__price-compare,
        html#ecwid_html body#ecwid_body .ec-size .ec-store .grid__products--medium-items .grid-product__details,
        html#ecwid_html body#ecwid_body .ec-size .ec-store .grid__products--medium-items .grid-product__sku,
        html#ecwid_html body#ecwid_body .ec-size .ec-store .grid__products--medium-items .grid-product__sku-hover,
        html#ecwid_html body#ecwid_body .ec-size .ec-store .grid__products--medium-items .grid-product__tax,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .form__msg,
        html#ecwid_html body#ecwid_body .ec-size.ec-size--l .ec-wrapper .ec-store h1,
        html#ecwid_html body#ecwid_body.page .ec-size .ec-wrapper .ec-store .product-details__product-title,
        html#ecwid_html body#ecwid_body.page .ec-size .ec-wrapper .ec-store .product-details__product-price,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .product-details-module__title,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .ec-cart-summary__row--total .ec-cart-summary__title,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .ec-cart-summary__row--total .ec-cart-summary__price,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__categories *
        {
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
        }

        html#ecwid_html body#ecwid_body .ecwid .ec-size .ec-wrapper .ec-store .product-details__product-description
        {
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.9;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0px;
            text-align: left;
            color: #585858;
        }

        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid-product__title-inner,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products .grid-product__image ~ .grid-product__price .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products .grid-product__image ~ .grid-product__title .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-store .grid__products--medium-items.grid__products--layout-center .grid-product__price-compare,
        html#ecwid_html body#ecwid_body .ec-size .ec-store .grid__products--medium-items .grid-product__details,
        html#ecwid_html body#ecwid_body .ec-size .ec-store .grid__products--medium-items .grid-product__sku,
        html#ecwid_html body#ecwid_body .ec-size .ec-store .grid__products--medium-items .grid-product__sku-hover,
        html#ecwid_html body#ecwid_body .ec-size .ec-store .grid__products--medium-items .grid-product__tax,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .product-details-module__title,
        html#ecwid_html body#ecwid_body.page .ec-size .ec-wrapper .ec-store .product-details__product-price,
        html#ecwid_html body#ecwid_body.page .ec-size .ec-wrapper .ec-store .product-details__product-title,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .form-control__text,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .form-control__textarea,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .ec-link,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .ec-link:visited,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store input[type="radio"].form-control__radio:checked + .form-control__radio-view::after
        {
            color: #585858;
        }

        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .ec-link:hover
        {
            color: #f62e46;
        }

        /* Product Title, Price small state */
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--small-items .grid-product__title-inner,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--small-items .grid-product__price-hover .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--small-items .grid-product__image ~ .grid-product__price .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--small-items .grid-product__image ~ .grid-product__title .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--small-items.grid__products--layout-center .grid-product__price-compare,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--small-items .grid-product__details,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--small-items .grid-product__sku,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--small-items .grid-product__sku-hover,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--small-items .grid-product__tax
        {
            font-size: 12px;
        }

        /* Product Title, Price medium state */
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--medium-items .grid-product__title-inner,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--medium-items .grid-product__price-hover .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--medium-items .grid-product__image ~ .grid-product__price .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--medium-items .grid-product__image ~ .grid-product__title .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--medium-items.grid__products--layout-center .grid-product__price-compare,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--medium-items .grid-product__details,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--medium-items .grid-product__sku,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--medium-items .grid-product__sku-hover,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--medium-items .grid-product__tax
        {
            font-size: 14px;
        }

        /* Product Title, Price large state */
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--large-items .grid-product__title-inner,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--large-items .grid-product__price-hover .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--large-items .grid-product__image ~ .grid-product__price .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--large-items .grid-product__image ~ .grid-product__title .grid-product__price-amount,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--large-items.grid__products--layout-center .grid-product__price-compare,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--large-items .grid-product__details,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--large-items .grid-product__sku,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--large-items .grid-product__sku-hover,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--large-items .grid-product__tax
        {
            font-size: 17px;
        }

        /* Product Add To Cart button */
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store button
        {
            font-style: normal;
            font-weight: 900;
            line-height: 1;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 1px;
        }

        /* Product Add To Cart button normal state */
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .form-control--secondary .form-control__button,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .form-control--primary .form-control__button
        {
            border-color: #f62e46;
            background-color: transparent;
            color: #f62e46;
        }

        /* Product Add To Cart button hover state, Product Category active state */
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .form-control--secondary .form-control__button:hover,
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .form-control--primary .form-control__button:hover,
        html#ecwid_html body#ecwid_body .horizontal-menu-container.horizontal-desktop .horizontal-menu-item.horizontal-menu-item--active > a
        {
            border-color: #f62e46;
            background-color: #f62e46;
            color: #ffffff;
        }

        /* Black Product Add To Cart button normal state */
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--appearance-hover .grid-product--dark .form-control--secondary .form-control__button
        {
            border-color: #f62e46;
            background-color: #f62e46;
            color: #ffffff;
        }

        /* Black Product Add To Cart button normal state */
        html#ecwid_html body#ecwid_body .ec-size .ec-wrapper .ec-store .grid__products--appearance-hover .grid-product--dark .form-control--secondary .form-control__button:hover
        {
            border-color: #ffffff;
            background-color: #ffffff;
            color: #f62e46;
        }

        /* Product Add To Cart button small label */
        html#ecwid_html body#ecwid_body .ec-size.ec-size--l .ec-wrapper .ec-store .form-control .form-control__button
        {
            font-size: 10px;
        }

        /* Product Add To Cart button medium label */
        html#ecwid_html body#ecwid_body .ec-size.ec-size--l .ec-wrapper .ec-store .form-control--small .form-control__button
        {
            font-size: 11px;
        }

        /* Product Add To Cart button large label */
        html#ecwid_html body#ecwid_body .ec-size.ec-size--l .ec-wrapper .ec-store .form-control--medium .form-control__button
        {
            font-size: 14px;
        }

        /* Mini Cart icon styles */
        html#ecwid_html body#ecwid_body .ec-minicart__body .ec-minicart__icon .icon-default path[stroke],
        html#ecwid_html body#ecwid_body .ec-minicart__body .ec-minicart__icon .icon-default circle[stroke]
        {
            stroke: #585858;
        }

        html#ecwid_html body#ecwid_body .ec-minicart:hover .ec-minicart__body .ec-minicart__icon .icon-default path[stroke],
        html#ecwid_html body#ecwid_body .ec-minicart:hover .ec-minicart__body .ec-minicart__icon .icon-default circle[stroke]
        {
            stroke: #f62e46;
        }
    </style>
    <link rel="stylesheet" id="kava-theme-main-style-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/themes/kava/theme.css?ver=2.1.4" type="text/css" media="all"/>
    <link rel="stylesheet" id="blog-layouts-module-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/themes/kava/inc/modules/blog-layouts/assets/css/blog-layouts-module.css?ver=2.1.4" type="text/css" media="all"/>
    <link rel="stylesheet" id="cx-google-fonts-kava-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C900&#038;subset=latin&#038;ver=6.0.1" type="text/css" media="all"/>
    <link rel="stylesheet" id="jet-blocks-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-blocks/assets/css/jet-blocks.css?ver=1.3.2" type="text/css" media="all"/>
    <link rel="stylesheet" id="jet-elements-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-elements/assets/css/jet-elements.css?ver=2.6.6" type="text/css" media="all"/>
    <link rel="stylesheet" id="jet-elements-skin-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-elements/assets/css/jet-elements-skin.css?ver=2.6.6" type="text/css" media="all"/>
    <link rel="stylesheet" id="elementor-icons-css" href="/assets/css/elementor-icons.min.css?ver=5.15.0" type="text/css" media="all"/>
    <link rel="stylesheet" id="elementor-frontend-legacy-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.6.8" type="text/css" media="all"/>
    <link rel="stylesheet" id="elementor-frontend-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.6.8" type="text/css" media="all"/>
    <style id="elementor-frontend-inline-css" type="text/css">
        .elementor-kit-165
        {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed > .elementor-container
        {
            max-width: 1140px;
        }

        .e-container
        {
            --container-max-width: 1140px;
        }

        .elementor-widget:not(:last-child)
        {
            margin-bottom: 20px;
        }

        .elementor-element
        {
            --widgets-spacing: 20px;
        }

        {
        }

        h1.entry-title
        {
            display: var(--page-title-display);
        }

        @media (max-width: 1024px)
        {
            .elementor-section.elementor-section-boxed > .elementor-container
            {
                max-width: 1024px;
            }

            .e-container
            {
                --container-max-width: 1024px;
            }
        }

        @media (max-width: 767px)
        {
            .elementor-section.elementor-section-boxed > .elementor-container
            {
                max-width: 767px;
            }

            .e-container
            {
                --container-max-width: 767px;
            }
        }

        .elementor-12 .elementor-element.elementor-element-6e85b90 > .elementor-container
        {
            max-width: 1140px;
        }

        .elementor-12 .elementor-element.elementor-element-6e85b90 .elementor-repeater-item-ad2a9ad.jet-parallax-section__layout .jet-parallax-section__image
        {
            background-size: auto;
        }

        .elementor-12 .elementor-element.elementor-element-f016625 > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute)
        {
            margin-bottom: 0px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__item
        {
            width: calc(100% / 3);
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__inner
        {
            margin: 15px;
            padding: 0px 0px 30px 0px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__list
        {
            margin: -15px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__image-instance
        {
            height: 252px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__cover .jet-elements-icon
        {
            color: #FFFFFF;
            font-size: 48px;
            width: 48px;
            height: 48px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__cover .jet-elements-icon svg
        {
            fill: #FFFFFF;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__cover .jet-elements-icon:before
        {
            font-size: 48px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__cover
        {
            background-color: #33333380;
            margin: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__filter-list
        {
            padding: 0px 0px 0px 0px;
            margin: 0px 0px 48px 0px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__filter
        {
            justify-content: center;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__filter-item-separator
        {
            font-size: 0px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__filter-item
        {
            padding: 0px 0px 4px 0px;
            margin: 0px 12px 0px 12px;
            color: #333333;
            border-style: solid;
            border-width: 0px 0px 3px 0px;
            border-color: rgba(246, 46, 70, 0);
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__filter-item
        {
            font-family: "Open Sans", Sans-serif;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            font-style: normal;
            line-height: 1.1em;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__filter-item:hover
        {
            border-style: solid;
            border-width: 0px 0px 3px 0px;
            border-color: #f62e46;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__filter-item.active
        {
            background-color: rgba(0, 0, 0, 0);
            border-style: solid;
            border-width: 0px 0px 3px 0px;
            border-color: #f62e46;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .preset-type-2 .jet-portfolio__inner,
        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__content-inner
        {
            background-color: #83424200;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__content-inner
        {
            padding: 0px 0px 0px 0px;
            margin: 0px 0px 0px 0px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__title
        {
            text-align: left;
            color: #1D1D1D;
            font-family: "Cabin", Sans-serif;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            font-style: normal;
            line-height: 18px;
            padding: 25px 0px 0px 0px;
            margin: 0px 0px 0px 0px;
            order: 1;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__category
        {
            text-align: center;
            order: 2;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__desc
        {
            text-align: left;
            color: #333333;
            font-family: "Open Sans", Sans-serif;
            font-size: 16px;
            font-weight: 400;
            font-style: normal;
            line-height: 30px;
            padding: 20px 0px 0px 0px;
            margin: 0px 0px 0px 0px;
            order: 3;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__button
        {
            align-self: center;
            text-align: center;
            padding: 0px 0px 0px 0px;
            margin: 0px 0px 0px 0px;
            color: #ffffff;
            background-color: rgba(0, 0, 0, 0);
            order: 4;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__button
        {
            font-family: "Open Sans", Sans-serif;
            font-size: 16px;
            font-weight: 500;
            font-style: normal;
            line-height: 1.125em;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__button:hover
        {
            color: #f62e46;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__view-more-button
        {
            padding: 0px 5px 0px 5px;
            margin: 0px 0px 0px 0px;
            color: #000000;
            background-color: rgba(0, 0, 0, 0);
            border-style: solid;
            border-width: 7px 7px 7px 7px;
            border-color: #010100;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__view-more-button
        {
            font-family: "Open Sans", Sans-serif;
            font-size: 22px;
            font-weight: 700;
            font-style: normal;
            line-height: 33px;
        }

        .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__view-more-button:hover
        {
            color: #f62e46;
            border-style: solid;
            border-width: 7px 7px 7px 7px;
            border-color: #f62e46;
        }

        .elementor-12 .elementor-element.elementor-element-6e85b90
        {
            padding: 0120px 30px 120px 30px;
        }

        @media (max-width: 1024px)
        {
            .elementor-12 .elementor-element.elementor-element-f016625 > .elementor-element-populated > .elementor-widget-wrap
            {
                padding: 0px 0px 0px 0px;
            }

            .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__item
            {
                width: calc(100% / 2);
            }

            .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__inner
            {
                margin: 10px;
            }

            .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__list
            {
                margin: -10px;
            }

            .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__view-more-button
            {
                margin: 0px 0px 0px 0px;
            }

            .elementor-12 .elementor-element.elementor-element-6e85b90
            {
                padding: 95px 15px 100px 15px;
            }
        }

        @media (max-width: 767px)
        {
            .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__item
            {
                width: calc(100% / 1);
            }

            .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__inner
            {
                padding: 0px 0px 25px 0px;
            }

            .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__filter-list
            {
                margin: 0px 0px 20px 0px;
            }

            .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__filter-item
            {
                margin: 0px 10px 20px 10px;
            }

            .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__content-inner
            {
                padding: 0px 0px 0px 0px;
            }

            .elementor-12 .elementor-element.elementor-element-0d8426a .jet-portfolio__view-more-button
            {
                margin: -15px 0px 0px 0px;
            }

            .elementor-12 .elementor-element.elementor-element-0d8426a > .elementor-widget-container
            {
                margin: 0px 0px 0px 0px;
            }

            .elementor-12 .elementor-element.elementor-element-6e85b90
            {
                padding: 65px 15px 70px 15px;
            }
        }

        .elementor-42 .elementor-element.elementor-element-9b62698 .elementor-repeater-item-c2b59f7.jet-parallax-section__layout .jet-parallax-section__image
        {
            background-size: auto;
        }

        .elementor-42 .elementor-element.elementor-element-ff530c3 > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute)
        {
            margin-bottom: 0px;
        }

        .elementor-42 .elementor-element.elementor-element-4e90e63 .elementor-repeater-item-a731545.jet-parallax-section__layout .jet-parallax-section__image
        {
            background-size: auto;
        }

        .elementor-42 .elementor-element.elementor-element-b15c00b > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute)
        {
            margin-bottom: 0px;
        }

        .elementor-42 .elementor-element.elementor-element-4a507a5 .jet-logo
        {
            justify-content: center;
        }

        .elementor-42 .elementor-element.elementor-element-4a507a5 > .elementor-widget-container
        {
            margin: 0px 0px 20px 0px;
        }

        .elementor-42 .elementor-element.elementor-element-9447724
        {
            --divider-border-style: solid;
            --divider-color: #555554;
            --divider-border-width: 1px;
        }

        .elementor-42 .elementor-element.elementor-element-9447724 .elementor-divider-separator
        {
            width: 310px;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-42 .elementor-element.elementor-element-9447724 .elementor-divider
        {
            text-align: center;
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .elementor-42 .elementor-element.elementor-element-9447724 .elementor-divider__text
        {
            color: #ffffff;
            font-family: "Arizonia", Sans-serif;
            font-size: 30px;
            font-weight: 400;
            font-style: normal;
            line-height: 1.7em;
        }

        .elementor-42 .elementor-element.elementor-element-9447724 > .elementor-widget-container
        {
            margin: -22px 0px 42px 0px;
        }

        .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav--horizontal
        {
            justify-content: center;
            text-align: center;
        }

        .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav--vertical .menu-item-link-top
        {
            justify-content: center;
            text-align: center;
        }

        .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav--vertical-sub-bottom .menu-item-link-sub
        {
            justify-content: center;
            text-align: center;
        }

        body:not(.rtl) .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav--horizontal .jet-nav__sub
        {
            text-align: left;
        }

        body.rtl .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav--horizontal .jet-nav__sub
        {
            text-align: right;
        }

        .elementor-42 .elementor-element.elementor-element-c690763 .menu-item-link-top
        {
            color: #ffffff;
            padding: 0px 0px 0px 0px;
        }

        .elementor-42 .elementor-element.elementor-element-c690763 .menu-item-link-top .jet-nav-link-text
        {
            font-family: "Cabin", Sans-serif;
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
            font-style: normal;
            line-height: 0.9em;
        }

        .elementor-42 .elementor-element.elementor-element-c690763 .menu-item:hover > .menu-item-link-top
        {
            color: #e82b18;
        }

        .elementor-42 .elementor-element.elementor-element-c690763 .menu-item.current-menu-item .menu-item-link-top
        {
            color: #e82b18;
        }

        .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav > .jet-nav__item
        {
            margin: 0px 33px 0px 33px;
        }

        .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav__mobile-trigger
        {
            color: #ffffff;
            font-size: 18px;
        }

        .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav__mobile-close-btn
        {
            color: #ffffff;
            font-size: 18px;
        }

        .elementor-42 .elementor-element.elementor-element-4e90e63:not(.elementor-motion-effects-element-type-background),
        .elementor-42 .elementor-element.elementor-element-4e90e63 > .elementor-motion-effects-container > .elementor-motion-effects-layer
        {
            background-color: rgba(1, 1, 0, 0.52);
        }

        .elementor-42 .elementor-element.elementor-element-4e90e63
        {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 65px 0px 56px 0px;
        }

        .elementor-42 .elementor-element.elementor-element-4e90e63 > .elementor-background-overlay
        {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-42 .elementor-element.elementor-element-12ce721 .elementor-repeater-item-a731545.jet-parallax-section__layout .jet-parallax-section__image
        {
            background-size: auto;
        }

        .elementor-42 .elementor-element.elementor-element-3de8b4e > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute)
        {
            margin-bottom: 0px;
        }

        .elementor-42 .elementor-element.elementor-element-cdf4813 .jet-breadcrumbs
        {
            text-align: center;
        }

        .elementor-42 .elementor-element.elementor-element-cdf4813 .jet-breadcrumbs__title
        {
            order: -1;
            font-family: "Cabin", Sans-serif;
            font-size: 17px;
            font-weight: 700;
            text-transform: uppercase;
            font-style: normal;
            line-height: 1.3em;
            color: #ffffff;
        }

        .elementor-42 .elementor-element.elementor-element-cdf4813 .jet-breadcrumbs__item > *
        {
            font-size: 0px;
        }

        .elementor-42 .elementor-element.elementor-element-cdf4813 > .elementor-widget-container
        {
            margin: 0px 0px -22px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-42 .elementor-element.elementor-element-12ce721
        {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 30px 0px 31px 0px;
        }

        .elementor-42 .elementor-element.elementor-element-9b62698:not(.elementor-motion-effects-element-type-background),
        .elementor-42 .elementor-element.elementor-element-9b62698 > .elementor-motion-effects-container > .elementor-motion-effects-layer
        {
            background-image: url("https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/uploads/2019/10/page_bg.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-42 .elementor-element.elementor-element-9b62698
        {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-42 .elementor-element.elementor-element-9b62698 > .elementor-background-overlay
        {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        @media (max-width: 1024px)
        {
            .elementor-42 .elementor-element.elementor-element-ff530c3 > .elementor-element-populated
            {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-42 .elementor-element.elementor-element-ff530c3 > .elementor-element-populated > .elementor-widget-wrap
            {
                padding: 0px 0px 0px 0px;
            }

            .elementor-42 .elementor-element.elementor-element-b15c00b > .elementor-element-populated
            {
                margin: 0px 30px 0px 30px;
                --e-column-margin-right: 30px;
                --e-column-margin-left: 30px;
            }

            .elementor-42 .elementor-element.elementor-element-b15c00b > .elementor-element-populated > .elementor-widget-wrap
            {
                padding: 0px 0px 0px 0px;
            }

            .elementor-42 .elementor-element.elementor-element-9447724 > .elementor-widget-container
            {
                margin: -22px 0px 42px 0px;
            }

            .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav > .jet-nav__item
            {
                margin: 0px 20px 0px 20px;
            }

            .elementor-42 .elementor-element.elementor-element-9b62698
            {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 0px 0px;
            }
        }

        @media (max-width: 767px)
        {
            .elementor-42 .elementor-element.elementor-element-b15c00b > .elementor-element-populated
            {
                margin: 8px 15px 0px 15px;
                --e-column-margin-right: 15px;
                --e-column-margin-left: 15px;
            }

            .elementor-42 .elementor-element.elementor-element-9447724 .elementor-divider-separator
            {
                width: 240px;
            }

            .elementor-42 .elementor-element.elementor-element-9447724 > .elementor-widget-container
            {
                margin: -22px 0px 0px 0px;
            }

            .elementor-42 .elementor-element.elementor-element-c690763 .jet-mobile-menu .menu-item-link
            {
                justify-content: flex-start;
                text-align: left;
            }

            .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav--horizontal
            {
                justify-content: flex-start;
                text-align: left;
            }

            .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav--vertical .menu-item-link-top
            {
                justify-content: flex-start;
                text-align: left;
            }

            .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav--vertical-sub-bottom .menu-item-link-sub
            {
                justify-content: flex-start;
                text-align: left;
            }

            .elementor-42 .elementor-element.elementor-element-c690763 .menu-item-link-top
            {
                padding: 0px 0px 0px 0px;
            }

            .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav > .jet-nav__item
            {
                margin: 20px 0px 0px 20px;
            }

            .elementor-42 .elementor-element.elementor-element-c690763 .jet-nav
            {
                background-color: rgba(1, 1, 0, 0.97);
            }

            .elementor-42 .elementor-element.elementor-element-4e90e63
            {
                padding: 20px 0px 20px 0px;
            }

            .elementor-42 .elementor-element.elementor-element-12ce721
            {
                padding: 10px 0px 10px 0px;
            }
        }

        .elementor-35 .elementor-element.elementor-element-fdb3ebf .elementor-repeater-item-6f332f2.jet-parallax-section__layout .jet-parallax-section__image
        {
            background-size: auto;
        }

        .elementor-35 .elementor-element.elementor-element-009135e.elementor-column > .elementor-column-wrap > .elementor-widget-wrap
        {
            justify-content: center;
        }

        .elementor-35 .elementor-element.elementor-element-009135e > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute)
        {
            margin-bottom: 0px;
        }

        .elementor-35 .elementor-element.elementor-element-009135e .elementor-element-populated a
        {
            color: #FFFFFF;
        }

        .elementor-35 .elementor-element.elementor-element-009135e .elementor-element-populated a:hover
        {
            color: #E82B18;
        }

        .elementor-35 .elementor-element.elementor-element-5f5b139
        {
            text-align: center;
            flex-basis: 370px;
        }

        .elementor-35 .elementor-element.elementor-element-5f5b139 .elementor-heading-title
        {
            color: #ffffff;
            font-family: "Open Sans", Sans-serif;
            font-size: 20px;
            font-weight: 700;
            font-style: normal;
            line-height: 1.5em;
        }

        .elementor-35 .elementor-element.elementor-element-5f5b139 > .elementor-widget-container
        {
            margin: 0px 0px 52px 0px;
        }

        .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child)
        {
            padding-bottom: calc(42px / 2);
        }

        .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child)
        {
            margin-top: calc(42px / 2);
        }

        .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item
        {
            margin-right: calc(42px / 2);
            margin-left: calc(42px / 2);
        }

        .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items.elementor-inline-items
        {
            margin-right: calc(-42px / 2);
            margin-left: calc(-42px / 2);
        }

        body.rtl .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after
        {
            left: calc(-42px / 2);
        }

        body:not(.rtl) .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after
        {
            right: calc(-42px / 2);
        }

        .elementor-35 .elementor-element.elementor-element-49a5e5a
        {
            --e-icon-list-icon-size: 0px;
        }

        .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-text
        {
            color: #ffffff;
        }

        .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-item:hover .elementor-icon-list-text
        {
            color: #f62e46;
        }

        .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-item > .elementor-icon-list-text,
        .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-item > a
        {
            font-family: "Open Sans", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            font-style: normal;
            line-height: 1.14em;
        }

        .elementor-35 .elementor-element.elementor-element-49a5e5a > .elementor-widget-container
        {
            margin: 0px 0px 64px 0px;
        }

        .elementor-35 .elementor-element.elementor-element-f50a275
        {
            text-align: center;
            color: #ffffff;
            font-family: "Open Sans", Sans-serif;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            font-style: normal;
            line-height: 1.4em;
        }

        .elementor-35 .elementor-element.elementor-element-fdb3ebf:not(.elementor-motion-effects-element-type-background),
        .elementor-35 .elementor-element.elementor-element-fdb3ebf > .elementor-motion-effects-container > .elementor-motion-effects-layer
        {
            background-color: #010100;
        }

        .elementor-35 .elementor-element.elementor-element-fdb3ebf
        {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 50px 0px 56px 0px;
        }

        .elementor-35 .elementor-element.elementor-element-fdb3ebf > .elementor-background-overlay
        {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        @media (max-width: 1024px)
        {
            .elementor-35 .elementor-element.elementor-element-009135e > .elementor-element-populated > .elementor-widget-wrap
            {
                padding: 0px 0px 0px 0px;
            }

            .elementor-35 .elementor-element.elementor-element-fdb3ebf
            {
                padding: 50px 30px 50px 30px;
            }
        }

        @media (max-width: 767px)
        {
            .elementor-35 .elementor-element.elementor-element-5f5b139 > .elementor-widget-container
            {
                margin: 0px 0px 20px 0px;
            }

            .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child)
            {
                padding-bottom: calc(8px / 2);
            }

            .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child)
            {
                margin-top: calc(8px / 2);
            }

            .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item
            {
                margin-right: calc(8px / 2);
                margin-left: calc(8px / 2);
            }

            .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items.elementor-inline-items
            {
                margin-right: calc(-8px / 2);
                margin-left: calc(-8px / 2);
            }

            body.rtl .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after
            {
                left: calc(-8px / 2);
            }

            body:not(.rtl) .elementor-35 .elementor-element.elementor-element-49a5e5a .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after
            {
                right: calc(-8px / 2);
            }

            .elementor-35 .elementor-element.elementor-element-49a5e5a > .elementor-widget-container
            {
                margin: 0px 0px 20px 0px;
            }

            .elementor-35 .elementor-element.elementor-element-fdb3ebf
            {
                padding: 30px 15px 30px 15px;
            }
        }
    </style>
    <link rel="stylesheet" id="jet-blog-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-blog/assets/css/jet-blog.css?ver=2.3.0" type="text/css" media="all"/>
    <link rel="stylesheet" id="jet-tricks-frontend-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-tricks/assets/css/jet-tricks-frontend.css?ver=1.4.1" type="text/css" media="all"/>
    <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCabin%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CArizonia%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.0.1" type="text/css" media="all"/>
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="/assets/css/fontawesome.min.css?ver=5.15.3" type="text/css" media="all"/>
    <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" type="text/css" media="all"/>
    <script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
    <script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-json/"/>
    <link rel="alternate" type="application/json" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-json/wp/v2/pages/12"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 6.0.1"/>
    <link rel="canonical" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/gallery/"/>
    <link rel="shortlink" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/?p=12"/>
    <link rel="alternate" type="application/json+oembed" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fld-wp73.template-help.com%2Fwordpress%2Fprod_26776%2Fv2%2Fgallery%2F"/>
    <link rel="alternate" type="text/xml+oembed" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fld-wp73.template-help.com%2Fwordpress%2Fprod_26776%2Fv2%2Fgallery%2F&#038;format=xml"/>
    <style type="text/css">
        .recentcomments a
        {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <link rel="icon" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/uploads/2019/10/favicon.ico" sizes="32x32"/>
    <link rel="icon" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/uploads/2019/10/favicon.ico" sizes="192x192"/>
    <link rel="apple-touch-icon" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/uploads/2019/10/favicon.ico"/>
    <meta name="msapplication-TileImage" content="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/uploads/2019/10/favicon.ico"/>
</head>
<body class="page-template page-template-page-templates page-template-fullwidth-content page-template-page-templatesfullwidth-content-php page page-id-12 top-panel-invisible layout-fullwidth blog-default elementor-default elementor-kit-165 elementor-page elementor-page-12">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-dark-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0.49803921568627"/>
                <feFuncG type="table" tableValues="0 0.49803921568627"/>
                <feFuncB type="table" tableValues="0 0.49803921568627"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0 1"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-red">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1"/>
                <feFuncG type="table" tableValues="0 0.27843137254902"/>
                <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-midnight">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0"/>
                <feFuncG type="table" tableValues="0 0.64705882352941"/>
                <feFuncB type="table" tableValues="0 1"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-magenta-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.78039215686275 1"/>
                <feFuncG type="table" tableValues="0 0.94901960784314"/>
                <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-green">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0.44705882352941 0.4"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-orange">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.098039215686275 1"/>
                <feFuncG type="table" tableValues="0 0.66274509803922"/>
                <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <header id="masthead" class="site-header ">
        <div data-elementor-type="jet_header" data-elementor-id="42" class="elementor elementor-42">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-9b62698 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="9b62698" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;_id&quot;:&quot;c2b59f7&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}],&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ff530c3" data-id="ff530c3" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-4e90e63 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4e90e63" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;_id&quot;:&quot;a731545&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}],&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b15c00b" data-id="b15c00b" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-4a507a5 elementor-widget elementor-widget-jet-logo" data-id="4a507a5" data-element_type="widget" data-widget_type="jet-logo.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-jet-logo jet-blocks">
                                                                                <div class="jet-logo jet-logo-type-image jet-logo-display-block">
                                                                                    <a href="#" class="jet-logo__link">
                                                                                        <img src="/assets/images/logo.webp" class="jet-logo__img" alt="Fine Art" width="213" height="30" srcset="/assets/images/logo.webp 2x">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-12ce721 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="12ce721" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;_id&quot;:&quot;a731545&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3de8b4e" data-id="3de8b4e" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-cdf4813 jet-breadcrumbs-page-title-yes jet-breadcrumbs-align-center elementor-widget elementor-widget-jet-breadcrumbs" data-id="cdf4813" data-element_type="widget" data-widget_type="jet-breadcrumbs.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-jet-breadcrumbs jet-blocks">
                                                                                <div class="jet-breadcrumbs">
                                                                                    <h1 class="jet-breadcrumbs__title">
                                                                                        Галерея</h1>
                                                                                    <div class="jet-breadcrumbs__content">
                                                                                        <div class="jet-breadcrumbs__wrap">
                                                                                            <div class="jet-breadcrumbs__item"></div>
                                                                                            <div class="jet-breadcrumbs__item"></div>
                                                                                            <div class="jet-breadcrumbs__item">
                                                                                                <span class="jet-breadcrumbs__item-target">Галерея</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </header>
    <!-- #masthead -->
    <div id="content" class="site-content ">
        <article id="post-12" class="post-12 page type-page status-publish hentry">
            <div data-elementor-type="wp-page" data-elementor-id="12" class="elementor elementor-12">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-6e85b90 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6e85b90" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;_id&quot;:&quot;ad2a9ad&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f016625" data-id="f016625" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-0d8426a elementor-widget elementor-widget-jet-portfolio" data-id="0d8426a" data-element_type="widget" data-settings="{&quot;columns_tablet&quot;:&quot;2&quot;,&quot;columns_mobile&quot;:&quot;1&quot;,&quot;columns&quot;:3}" data-widget_type="jet-portfolio.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-jet-portfolio jet-elements">
                                                            <div class="jet-portfolio layout-type-grid preset-type-2 layout-desktop-column-3 layout-tablet-column-2 layout-mobile-column-1" data-settings="{&quot;layoutType&quot;:&quot;grid&quot;,&quot;perPage&quot;:6}">
                                                                <div class="jet-portfolio__filter">
                                                                    <div class="jet-portfolio__filter-list">
                                                                        <div class="jet-portfolio__filter-item active" data-slug="all">
                                                                            <span>Показати все</span>
                                                                        </div>
                                                                        <?php foreach ($categories as $category): ?>
                                                                            <div class="jet-portfolio__filter-item" data-slug="category-<?= $category->id ?>">
                                                                                <span><?= $category->name ?></span>
                                                                            </div>
                                                                        <?php endforeach; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="jet-portfolio__list">
                                                                    <?php foreach ($pictures as $picture): ?>
                                                                        <article class="jet-portfolio__item visible-status" data-slug="{&quot;0&quot;:&quot;all&quot;,&quot;1&quot;:&quot;category-<?= $picture->category_id ?>&quot;}">
                                                                            <div class="jet-portfolio__inner">
                                                                                <a class="jet-portfolio__link " href="<?= $picture->image ?>" data-elementor-open-lightbox="yes">
                                                                                    <div class="jet-portfolio__image">
                                                                                        <img class="jet-portfolio__image-instance" src="<?= $picture->image ?>" width="1140" height="884" alt="picture" loading="lazy">
                                                                                        <div class="jet-portfolio__image-loader">
                                                                                            <span></span>
                                                                                        </div>
                                                                                        <div class="jet-portfolio__cover">
                                                                                        <span class="jet-elements-icon">
                                                                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28">
                                                                                            <title>arrows-alt</title>
                                                                                            <path d="M20.047 8.453l-5.547 5.547 5.547 5.547 2.25-2.25c0.281-0.297 0.719-0.375 1.094-0.219 0.359 0.156 0.609 0.516 0.609 0.922v7c0 0.547-0.453 1-1 1h-7c-0.406 0-0.766-0.25-0.922-0.625-0.156-0.359-0.078-0.797 0.219-1.078l2.25-2.25-5.547-5.547-5.547 5.547 2.25 2.25c0.297 0.281 0.375 0.719 0.219 1.078-0.156 0.375-0.516 0.625-0.922 0.625h-7c-0.547 0-1-0.453-1-1v-7c0-0.406 0.25-0.766 0.625-0.922 0.359-0.156 0.797-0.078 1.078 0.219l2.25 2.25 5.547-5.547-5.547-5.547-2.25 2.25c-0.187 0.187-0.438 0.297-0.703 0.297-0.125 0-0.266-0.031-0.375-0.078-0.375-0.156-0.625-0.516-0.625-0.922v-7c0-0.547 0.453-1 1-1h7c0.406 0 0.766 0.25 0.922 0.625 0.156 0.359 0.078 0.797-0.219 1.078l-2.25 2.25 5.547 5.547 5.547-5.547-2.25-2.25c-0.297-0.281-0.375-0.719-0.219-1.078 0.156-0.375 0.516-0.625 0.922-0.625h7c0.547 0 1 0.453 1 1v7c0 0.406-0.25 0.766-0.609 0.922-0.125 0.047-0.266 0.078-0.391 0.078-0.266 0-0.516-0.109-0.703-0.297z"></path>
                                                                                          </svg>
                                                                                        </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                                <div class="jet-portfolio__content">
                                                                                    <div class="jet-portfolio__content-inner">
                                                                                        <h2 class="jet-portfolio__title"><?= $picture->name ?></h2>
                                                                                        <p class="jet-portfolio__desc"><?= $picture->description ?></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                                <div class="jet-portfolio__view-more hidden-status">
                                                                    <div class="elementor-button elementor-size-md jet-portfolio__view-more-button">Подивитися більше</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </article>
        <!-- #post-12 -->
    </div>
    <!-- #content -->
    <footer id="colophon" class="site-footer ">
        <div data-elementor-type="jet_footer" data-elementor-id="35" class="elementor elementor-35">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-fdb3ebf elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fdb3ebf" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;_id&quot;:&quot;6f332f2&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}],&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-009135e" data-id="009135e" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-f50a275 elementor-widget elementor-widget-text-editor" data-id="f50a275" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <a href="#">Fine Art</a> ©
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </footer>
    <!-- #colophon -->
</div>
<!-- #page -->
<script type="text/javascript">
    /*
                                                                  <![CDATA[ */
    var hasJetBlogPlaylist = 0;
    /* ]]> */
</script>
<link rel="stylesheet" id="e-animations-css" href="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.6.8" type="text/css" media="all"/>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
    /*
                                                                  <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/ld-wp73.template-help.com\/wordpress\/prod_26776\/v2\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.6.1" id="contact-form-7-js"></script>
<script type="text/javascript" id="kava-theme-script-js-extra">
    /*
                                                                  <![CDATA[ */
    var kavaConfig = {
        "toTop": "1"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/themes/kava/assets/js/theme-script.js?ver=2.1.4" id="kava-theme-script-js"></script>
<script type="text/javascript" id="kava-theme-script-js-after">
    function CxCSSCollector ()
    {
        "use strict";
        var t, e = window.CxCollectedCSS;
        void 0 !== e && ((t = document.createElement("style")).setAttribute("title", e.title), t.setAttribute("type", e.type), t.textContent = e.css, document.head.appendChild(t))
    }

    CxCSSCollector();
</script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-includes/js/hoverIntent.min.js?ver=1.10.2" id="hoverIntent-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-includes/js/imagesloaded.min.js?ver=4.1.4" id="imagesloaded-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-elements/assets/js/lib/masonry-js/masonry.pkgd.min.js?ver=4.2.1" id="jet-masonry-js-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-elements/assets/js/lib/anime-js/anime.min.js?ver=2.2.0" id="jet-anime-js-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.6.8" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.6.8" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6" id="swiper-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.6.8" id="share-link-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0" id="elementor-dialog-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.6.8",
        "is_static": false,
        "experimentalFeatures": {
            "e_import_export": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true
        },
        "urls": {
            "assets": "https:\/\/ld-wp73.template-help.com\/wordpress\/prod_26776\/v2\/wp-content\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 12,
            "title": "Gallery%20%E2%80%93%20Fine%20Art",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.6.8" id="elementor-frontend-js"></script>
<script type="text/javascript" id="jet-blocks-js-extra">
    /*
                                                                  <![CDATA[ */
    var JetHamburgerPanelSettings = {
        "ajaxurl": "https:\/\/ld-wp73.template-help.com\/wordpress\/prod_26776\/v2\/wp-admin\/admin-ajax.php",
        "isMobile": "false",
        "templateApiUrl": "https:\/\/ld-wp73.template-help.com\/wordpress\/prod_26776\/v2\/wp-json\/jet-blocks-api\/v1\/elementor-template",
        "devMode": "false"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-blocks/assets/js/jet-blocks.min.js?ver=1.3.2" id="jet-blocks-js"></script>
<script type="text/javascript" id="jet-elements-js-extra">
    /*
                                                                  <![CDATA[ */
    var jetElements = {
        "ajaxUrl": "https:\/\/ld-wp73.template-help.com\/wordpress\/prod_26776\/v2\/wp-admin\/admin-ajax.php",
        "isMobile": "false",
        "templateApiUrl": "https:\/\/ld-wp73.template-help.com\/wordpress\/prod_26776\/v2\/wp-json\/jet-elements-api\/v1\/elementor-template",
        "devMode": "false",
        "messages": {
            "invalidMail": "Please specify a valid e-mail"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-elements/assets/js/jet-elements.min.js?ver=2.6.6" id="jet-elements-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-tricks/assets/js/lib/tippy/popperjs.js?ver=2.5.2" id="jet-tricks-popperjs-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-tricks/assets/js/lib/tippy/tippy-bundle.js?ver=6.3.1" id="jet-tricks-tippy-bundle-js"></script>
<script type="text/javascript" id="jet-tricks-frontend-js-extra">
    /*
                                                                  <![CDATA[ */
    var JetTricksSettings = {
        "elements_data": {
            "sections": {
                "9b62698": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "4e90e63": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "12ce721": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "6e85b90": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "fdb3ebf": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                }
            },
            "columns": [],
            "widgets": {
                "4a507a5": [],
                "9447724": [],
                "c690763": [],
                "cdf4813": [],
                "0d8426a": [],
                "5f5b139": [],
                "49a5e5a": [],
                "f50a275": []
            }
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-tricks/assets/js/jet-tricks-frontend.js?ver=1.4.1" id="jet-tricks-frontend-js"></script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.6.8" id="preloaded-modules-js"></script>
<script type="text/javascript" id="jet-blog-js-extra">
    /*
                                                                  <![CDATA[ */
    var JetBlogSettings = {
        "ajaxurl": "https:\/\/ld-wp73.template-help.com\/wordpress\/prod_26776\/v2\/gallery\/?nocache=1671367069&jet_blog_ajax=1"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="https://ld-wp73.template-help.com/wordpress/prod_26776/v2/wp-content/plugins/jet-blog/assets/js/jet-blog.min.js?ver=2.3.0" id="jet-blog-js"></script>
<!-- End Google Tag Manager -->
</body>
</html>