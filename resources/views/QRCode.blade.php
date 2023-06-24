@section('title', 'Buy a Ticket')
@push('styles')
    <style>
        .swiper-slide {
            margin-bottom: 25px;
        }
        .bi-qr-code-scan{
            margin: auto;
            display: table;
        }
        .elementor-21 .elementor-element.elementor-element-7299f8b .exhibz-ticket-widget {
            background-color: #AC3E3E00;
            background-image: url('ticket_bg_1.png');
            background-position: right !important;
            background-repeat: no-repeat;
        }
    </style>

    <script type="text/javascript">
        window._wpemojiSettings = {
            baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            ext: ".png",
            svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            svgExt: ".svg",
            source: { concatemoji: "https:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2" },
        };
        /*! This file is auto-generated */
        !(function (e, a, t) {
            var n,
                r,
                o,
                i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");
            function s(e, t) {
                p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(t, 0, 0), e === i.toDataURL();
            }
            function c(e) {
                var t = a.createElement("script");
                (t.src = e), (t.defer = t.type = "text/javascript"), a.getElementsByTagName("head")[0].appendChild(t);
            }
            for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)
                (t.supports[o[r]] = (function (e) {
                    if (p && p.fillText)
                        switch (((p.textBaseline = "top"), (p.font = "600 32px Arial"), e)) {
                            case "flag":
                                return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")
                                    ? !1
                                    : !s("\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") &&
                                    !s(
                                        "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                        "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                    );
                            case "emoji":
                                return !s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff");
                        }
                    return !1;
                })(o[r])),
                    (t.supports.everything = t.supports.everything && t.supports[o[r]]),
                "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag),
                (t.DOMReady = !1),
                (t.readyCallback = function () {
                    t.DOMReady = !0;
                }),
            t.supports.everything ||
            ((n = function () {
                t.readyCallback();
            }),
                a.addEventListener
                    ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1))
                    : (e.attachEvent("onload", n),
                        a.attachEvent("onreadystatechange", function () {
                            "complete" === a.readyState && t.readyCallback();
                        })),
                (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)));
        })(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
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
    <link rel="stylesheet" id="elementor-frontend-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.13.3" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-post-14-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/uploads/sites/8/elementor/css/post-14.css?ver=1685272226" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-post-50-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/uploads/sites/8/elementor/css/post-50.css?ver=1685272226" type="text/css" media="all" />
    <link rel="stylesheet" id="wp-block-library-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-includes/css/dist/block-library/style.min.css?ver=6.2.2" type="text/css" media="all" />
    <link
        rel="stylesheet"
        id="wc-blocks-vendors-style-css"
        href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=10.0.4"
        type="text/css"
        media="all"
    />
    <link
        rel="stylesheet"
        id="wc-blocks-style-css"
        href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=10.0.4"
        type="text/css"
        media="all"
    />
    <link rel="stylesheet" id="classic-theme-styles-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-includes/css/classic-themes.min.css?ver=6.2.2" type="text/css" media="all" />
    <style id="global-styles-inline-css" type="text/css">
        body {
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
            --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
            --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
            --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
            --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
            --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
            --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
            --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
            --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }
        :where(.is-layout-flex) {
            gap: 0.5em;
        }
        body .is-layout-flow > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }
        body .is-layout-flow > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }
        body .is-layout-flow > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        body .is-layout-constrained > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }
        body .is-layout-constrained > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }
        body .is-layout-constrained > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }
        body .is-layout-constrained > .alignwide {
            max-width: var(--wp--style--global--wide-size);
        }
        body .is-layout-flex {
            display: flex;
        }
        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }
        body .is-layout-flex > * {
            margin: 0;
        }
        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }
        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }
        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }
        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }
        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }
        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }
        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }
        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }
        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }
        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }
        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }
        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }
        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }
        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }
        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }
        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }
        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }
        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }
        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.7.6" type="text/css" media="all" />
    <link rel="stylesheet" id="woocommerce-layout-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=7.7.0" type="text/css" media="all" />
    <link
        rel="stylesheet"
        id="woocommerce-smallscreen-css"
        href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=7.7.0"
        type="text/css"
        media="only screen and (max-width: 768px)"
    />
    <link rel="stylesheet" id="woocommerce-general-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=7.7.0" type="text/css" media="all" />
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="etn-icon-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/wp-event-solution/assets/css/etn-icon.css?ver=5.0" type="text/css" media="all" />
    <link rel="stylesheet" id="etn-public-css-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/wp-event-solution/assets/css/event-manager-public.css?ver=3.3.27" type="text/css" media="all" />
    <link rel="stylesheet" id="elementskit-parallax-style-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/themes/exhibz/core/parallax/assets/css/style.css?ver=2.5.3" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-icons-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.20.0" type="text/css" media="all" />
    <link rel="stylesheet" id="swiper-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-post-3-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/uploads/sites/8/elementor/css/post-3.css?ver=1685272226" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-global-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/uploads/sites/8/elementor/css/global.css?ver=1685272228" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-post-17-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/uploads/sites/8/elementor/css/post-17.css?ver=1685272229" type="text/css" media="all" />
    <link rel="stylesheet" id="bundle-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/themes/exhibz/assets/css/bundle.css?ver=2.5.3" type="text/css" media="all" />
    <link rel="stylesheet" id="icofont-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/themes/exhibz/assets/css/icofont.css?ver=2.5.3" type="text/css" media="all" />
    <link rel="stylesheet" id="exhibz-woocommerce-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/themes/exhibz/assets/css/woocommerce.css?ver=2.5.3" type="text/css" media="all" />
    <link rel="stylesheet" id="exhibz-style-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/themes/exhibz/assets/css/master.css?ver=2.5.3" type="text/css" media="all" />
    <style id="exhibz-style-inline-css" type="text/css">
        html.fonts-loaded body {
            font-family: "Outfit";
            font-style: normal;
            font-size: 16px;
            color: #000000;
        }

        html.fonts-loaded h1,
        html.fonts-loaded h2 {
            font-family: "Anton";
            font-style: normal;
            font-weight: 700;
        }
        html.fonts-loaded h3 {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 700;
        }

        html.fonts-loaded h4 {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 700;
        }

        .banner-title,
        .page-banner-title .breadcrumb li,
        .page-banner-title .breadcrumb,
        .page-banner-title .breadcrumb li a {
            color: ;
        }

        a,
        .post-meta span i,
        .entry-header .entry-title a:hover,
        .sidebar ul li a:hover,
        .navbar.navbar-light ul.navbar-nav > li ul.dropdown-menu li:hover a,
        .elementor-widget-exhibz-latestnews .post:hover .post-body .entry-header .entry-title a,
        .btn-link:hover,
        .footer-menu ul li a:hover,
        .schedule-tabs-item .schedule-listing-item .schedule-slot-time,
        .navbar.navbar-light ul.navbar-nav > li ul.dropdown-menu li .dropdown-item.active {
            color: #ff007a;
        }

        a:hover,
        .navbar.navbar-light ul.navbar-nav > li ul.dropdown-menu li.active a {
            color: #3b1d82;
        }
        .hero-form-content {
            border-top-color: #ff007a;
        }
        .entry-header .entry-title a,
        .ts-title,
        h1,
        h2,
        h3,
        h4,
        h5,
        .elementor-widget-exhibz-latestnews .post .post-body .entry-header .entry-title a,
        .blog-single .post-navigation h3,
        .entry-content h3 {
            color: #1c1c24;
        }

        body {
            background-color: #fdfdf3;
        }
        body {
            background-image: url();
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        body,
        .post-navigation span,
        .post-meta,
        .post-meta a {
            color: #000000;
        }
        .single-intro-text .count-number,
        .sticky.post .meta-featured-post,
        .sidebar .widget .widget-title:before,
        .pagination li.active a,
        .pagination li:hover a,
        .pagination li.active a:hover,
        .pagination li:hover a:hover,
        .sidebar .widget.widget_search .input-group-btn,
        .tag-lists a:hover,
        .tagcloud a:hover,
        .BackTo,
        .ticket-btn.btn:hover,
        .schedule-listing .schedule-slot-time,
        .btn-primary,
        .navbar-toggler,
        .schedule-tabs-item ul li:before,
        .btn,
        .btn-primary,
        .wp-block-button .wp-block-button__link:not(.has-background),
        .ts-single-speaker .ts-social-list li a,
        .header-fullwidth .header-fullwidth-nav .navbar.navbar-light ul.navbar-nav > li > a:before,
        .ts-footer-social ul li a:hover,
        .ts-schedule-nav ul li a.active,
        .elementor-widget-accordion .elementor-accordion .elementor-accordion-item .elementor-active,
        .ts-speakers-style4 .ts-speaker .ts-speaker-info .ts-title,
        .testimonial-thumb .quote-icon,
        .schedule-tab-wrapper .etn-schedule-speaker .etn-schedule-single-speaker .etn-schedule-speaker-title,
        .etn-btn,
        .attr-btn-primary,
        .etn-ticket-widget .etn-btn,
        .post .play-btn.video-btn,
        .testimonial-item .testimonial-body .client-info .client-name::before,
        .ts-schedule-alt .schedule-listing .multi-speaker-2 .speaker-content .schedule-speaker,
        #preloader,
        .woocommerce div.product form.cart .button,
        .woocommerce ul.products li.product .added_to_cart,
        .sidebar.sidebar-woo .woocommerce-product-search button,
        .woocommerce table.cart td.actions button.button,
        .woocommerce a.button,
        .woocommerce button.button.alt,
        .woocommerce table.cart td.actions button.button:hover,
        .woocommerce a.button:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce .checkout-button.button.alt.wc-forward,
        .woocommerce .woocommerce-Reviews #review_form #respond .form-submit input,
        .woocommerce span.onsale,
        .sinlge-event-registration,
        .etn_exhibz_inline_form_top .btn.btn-primary,
        .ts-event-archive-wrap .etn-event-item .ts_etn_thumb_meta_wraper .ts-event-term,
        .etn_load_more_button span {
            background: #ff007a;
        }

        .ts-map-tabs .elementor-tabs-wrapper .elementor-tab-title.elementor-active a,
        .wp-block-quote:before,
        .blog-single .post-navigation .post-next a:hover,
        .blog-single .post-navigation .post-previous a:hover,
        .archive .ts-speaker:hover .ts-title a,
        .post-navigation span:hover,
        .post-navigation h3:hover,
        .etn-event-single-content-wrap .etn-event-meta .etn-event-category span,
        .etn-schedule-wrap .etn-schedule-info .etn-schedule-time,
        .footer-area .ts-footer-3 .footer-widget h3 {
            color: #ff007a;
        }

        .ts-map-tabs .elementor-tabs-wrapper .elementor-tab-title.elementor-active a,
        .ts-map-tabs .elementor-tabs-wrapper .elementor-tab-title a:before,
        .schedule-tabs-item .schedule-listing-item:after,
        .ts-gallery-slider .owl-nav .owl-prev,
        .ts-gallery-slider .owl-nav .owl-next,
        .ts-schedule-alt .ts-schedule-nav ul li a.active {
            border-color: #ff007a;
        }
        .ts-schedule-alt .ts-schedule-nav ul li a::before,
        .schedule-tab-wrapper .attr-nav li:after,
        .schedule-tab-wrapper .etn-nav li a:after,
        .schedule-tab-wrapper .etn-schedule-speaker .etn-schedule-single-speaker .etn-schedule-speaker-title:after,
        .ts-schedule-alt .schedule-listing .multi-speaker-2 .speaker-content .schedule-speaker::after {
            border-color: #ff007a transparent transparent transparent;
        }

        .ts-schedule-nav ul li a:before {
            border-color: transparent #ff007a transparent transparent;
        }

        blockquote.wp-block-quote,
        .wp-block-quote,
        .wp-block-quote:not(.is-large):not(.is-style-large),
        blockquote.wp-block-pullquote,
        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        blockquote,
        .wp-block-quote:not(.is-large),
        .wp-block-quote:not(.is-style-large),
        .wp-block-pullquote:not(.is-style-solid-color) {
            border-left-color: #ff007a;
        }

        .schedule-tab-wrapper .attr-nav li.attr-active,
        .schedule-tab-wrapper .etn-nav li a.etn-active,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
            border-bottom-color: #ff007a;
        }

        .woocommerce ul.products li.product .added_to_cart:hover,
        .nav-center-logo .navbar.navbar-light .collapse.justify-content-end ul.navbar-nav > li.nav-ticket-btn > a,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover {
            background-color: #ff007a;
        }
        .woocommerce ul.products li.product .button,
        .woocommerce ul.products li.product .added_to_cart,
        .woocommerce nav.woocommerce-pagination ul li a:focus,
        .woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .sponsor-web-link a:hover i {
            background-color: #ff007a;
            color: #fff;
        }

        .ts-single-speaker .ts-social-list li a:hover,
        .etn-ticket-widget .etn-btn:hover,
        .ts-speakers-style4 .ts-speaker .ts-speaker-info p {
            background: #3b1d82;
        }

        .ticket-btn.btn {
            background-color: #f75b57;
        }

        @media (min-width: 1200px) {
            .sticky.header-transparent,
            .div,
            .sticky.header-classic {
                background: ;
            }
        }

        .ts-footer {
            background-color: #1a1831;
            padding-top: 250px;
            background-image: url();
        }
    </style>
    <link
        rel="stylesheet"
        id="ekit-widget-styles-css"
        href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.8.8"
        type="text/css"
        media="all"
    />
    <link rel="stylesheet" id="ekit-responsive-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.8.8" type="text/css" media="all" />
    <link
        rel="stylesheet"
        id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Anton%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.2"
        type="text/css"
        media="all"
    />
    <link rel="stylesheet" id="elementor-icons-shared-1-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/themes/exhibz/assets/css/icofont.css?ver=5.9.0" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-icons-icon-instive-css" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/themes/exhibz/assets/css/icofont.css?ver=5.9.0" type="text/css" media="all" />
    <link
        rel="stylesheet"
        id="elementor-icons-shared-0-css"
        href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3"
        type="text/css"
        media="all"
    />
    <link
        rel="stylesheet"
        id="elementor-icons-fa-brands-css"
        href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3"
        type="text/css"
        media="all"
    />
    <link
        rel="stylesheet"
        id="elementor-icons-fa-solid-css"
        href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3"
        type="text/css"
        media="all"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <script type="text/javascript" src="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-includes/js/jquery/jquery.min.js?ver=3.6.4" id="jquery-core-js"></script>
    <script type="text/javascript" src="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0" id="jquery-migrate-js"></script>
    <link rel="alternate" type="application/json+oembed" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.themewinter.com%2Fwp%2Fexhibz%2Fcreative-conference%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.themewinter.com%2Fwp%2Fexhibz%2Fcreative-conference%2F&#038;format=xml" />

    <script type="text/javascript">
        var elementskit_module_parallax_url = "https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/themes/exhibz/core/parallax/";
    </script>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta
        name="generator"
        content="Elementor 3.13.3; features: e_dom_optimization, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto"
    />
    <style type="text/css" id="wp-custom-css">
        @media (min-width: 1025px) and (max-width: 1366px) {
            .conference-footer.elementor-section {
                background-image: linear-gradient(90deg, #f7c831 31%, #000000 0%) !important;
            }
        }
        @media (max-width: 1024px) {
            .conference-footer.elementor-section {
                background-image: linear-gradient(90deg, #f7c831 30%, #000000 0%) !important;
            }
            .elementskit-menu-overlay {
                left: -500vh;
            }
        }

        @media (max-width: 767px) {
            .conference-footer.elementor-section {
                background-image: linear-gradient(90deg, #f7c831 0%, #000000 0%) !important;
            }
        }

        .icon-left-arrows:before {
            content: "\e9b3" !important;
        }

        .etn-attendee-widget-holder {
            display: none;
        }

        .single-intro-text.single-contact-feature {
            border: 1px solid #f75b57;
        }

        .wpcf7-form .form-control {
            border: 1px solid #000;
            background-color: transparent;
        }

        .wpcf7-form .form-control:focus {
            border: 1px solid #f75b57;
        }

        .wpcf7-submit.btn {
            background: transparent;
            color: #000;
            border: 1px solid #000;
            border-radius: 0;
        }

        .wpcf7-submit.btn:hover {
            background: #f75b57;
            color: #fff;
            border: 1px solid #f75b57;
        }

        .entry-header .entry-title,
        html.fonts-loaded h2 {
            font-weight: 400;
        }

        .blog.main-container {
            padding-top: 150px;
        }
    </style>
@endpush
<div>
    <livewire:frontend.top-menu />
    <div data-elementor-type="wp-page" data-elementor-id="17" class="elementor elementor-17">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-6d1b691 creative-hero-area elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="6d1b691"
            data-element_type="section"
            data-settings='{"background_background":"gradient","ekit_section_parallax_multi_items":[{"_id":"8dd88f0","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_10.png","id":105,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":90,"sizes":[]},"pos_y":{"unit":"%","size":0,"sizes":[]},"animation":"ekit-fade","animation_iteration_count":"unset","zindex":0,"parallax_style":"animation","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation_tablet":"","animation_mobile":"","item_opacity":"1","animation_speed":"5","animation_direction":"normal","parallax_speed":null,"parallax_transform":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_Ellipse.png","id":108,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":80,"sizes":[]},"_id":"a4112f4","zindex":0,"item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"pos_y":{"unit":"%","size":10,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":40,"parallax_transform":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"onscroll","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_9.png","id":109,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":93,"sizes":[]},"pos_y":{"unit":"%","size":20,"sizes":[]},"zindex":0,"_id":"c311d93","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":null,"parallax_transform":"translateY","parallax_transform_value":"250","smoothness":"700","offsettop":"0","offsetbottom":"0","maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"onscroll","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_8.png","id":110,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":80,"sizes":[]},"pos_y":{"unit":"%","size":82,"sizes":[]},"parallax_transform":"translateX","zindex":0,"_id":"e788db7","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":null,"parallax_transform_value":"250","smoothness":"700","offsettop":"0","offsetbottom":"0","maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_1.png","id":111,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":5,"sizes":[]},"pos_y":{"unit":"%","size":20,"sizes":[]},"parallax_transform":null,"zindex":0,"_id":"a469bda","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":40,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_3.png","id":113,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":0,"sizes":[]},"pos_y":{"unit":"%","size":45,"sizes":[]},"parallax_speed":10,"parallax_transform":null,"zindex":0,"_id":"4f82b01","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_2.png","id":114,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":15,"sizes":[]},"pos_y":{"unit":"%","size":20,"sizes":[]},"parallax_speed":10,"parallax_transform":null,"zindex":0,"_id":"9112220","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_4.png","id":115,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":5,"sizes":[]},"pos_y":{"unit":"%","size":50,"sizes":[]},"parallax_speed":10,"parallax_transform":null,"zindex":0,"_id":"c20451f","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_5.png","id":116,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":12,"sizes":[]},"pos_y":{"unit":"%","size":80,"sizes":[]},"parallax_speed":10,"parallax_transform":null,"zindex":0,"_id":"25a513e","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null}],"ekit_section_parallax_multi":"yes"}'
        >
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-153c5be" data-id="153c5be" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-5894256 elementor-widget elementor-widget-elementskit-heading"
                            data-id="5894256"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"none"}'
                            data-widget_type="elementskit-heading.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con">
                                    <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                        <h3 class="elementskit-section-subtitle">
                                            Ticket is Valid
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-05c7e5f elementor-widget elementor-widget-heading"
                            data-id="05c7e5f"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"none"}'
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">{{$transaction_info->client_name}}</h2>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-7b32806 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7b32806"
                            data-element_type="section"
                        >
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-265a989" data-id="265a989" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-7085b50 elementor-widget elementor-widget-elementskit-heading"
                                            data-id="7085b50"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="elementskit-heading.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                                        <p class="ekit-heading--title elementskit-section-title">
                                                            1st  <span><span>July 2023</span></span>
                                                        </p>
                                                        <h3 class="ekit-heading--subtitle elementskit-section-subtitle">
                                                            KivuFest, Rubavu
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-380928c" data-id="380928c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-8a96f45 elementor-widget elementor-widget-exhibz-button"
                                            data-id="8a96f45"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="exhibz-button.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-btn-wraper">
                                                        <a href="https://demo.themewinter.com/wp/exhibz/creative-conference/ticket-pricing/" class="exhibz-btn whitespace--normal">
                                                            <span class="exhibz-button-text"> Grab <span>Ticket</span> </span>

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="50" viewBox="0 0 56 50" fill="none">
                                                                <path
                                                                    d="M29.713 48.6221L22.9954 42.5031L33.2108 32.0607L34.8731 30.3614L32.4959 30.3614L1 30.3614L1 19.6386L32.4959 19.6386L34.8731 19.6386L33.2108 17.9393L22.9954 7.49689L29.7119 1.37891L53.602 25.0394L29.713 48.6221Z"
                                                                    stroke="#F52722"
                                                                    stroke-width="2"
                                                                ></path>
                                                            </svg>
                                                        </a>
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
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-71f224d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="71f224d"
            data-element_type="section"
            data-settings='{"ekit_section_parallax_multi_items":[{"parallax_style":"onscroll","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/join_us_shape_1.png","id":250,"size":"","alt":"","source":"library"},"pos_y":{"unit":"%","size":80,"sizes":[]},"_id":"962e16d","parallax_transform":"translateX","parallax_transform_value":-250,"item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"pos_x":{"unit":"%","size":10,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":null,"smoothness":"700","offsettop":"0","offsetbottom":"0","maxtilt":null,"scale":null,"disableaxis":null,"zindex":"2"}],"background_background":"classic","ekit_section_parallax_multi":"yes"}'
        >
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0e7c043 subscription-shape" data-id="0e7c043" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-60691c3 elementor-absolute elementor-widget elementor-widget-heading"
                            data-id="60691c3"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"onscroll","ekit_we_scroll_animation":"translateX","ekit_we_scroll_animation_value":350,"_position":"absolute","ekit_we_on_test_mode":"on","ekit_we_scroll_smoothness":700,"ekit_we_scroll_offsettop":0,"ekit_we_scroll_offsetbottom":0}'
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Subscribe</h2>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-c5f9c15 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="c5f9c15"
                            data-element_type="section"
                        >
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f12fbea" data-id="f12fbea" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-8c0ae77 elementor-widget elementor-widget-elementskit-heading"
                                            data-id="8c0ae77"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="elementskit-heading.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                                        <h2 class="ekit-heading--title elementskit-section-title">join us!</h2>
                                                        <h3 class="ekit-heading--subtitle elementskit-section-subtitle">
                                                            Don’t miss out on the entertainment and fun!
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-6053523 creative-subscribe-form elementor-widget elementor-widget-elementskit-mail-chimp"
                                            data-id="6053523"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="elementskit-mail-chimp.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-mail-chimp">
                                                        <form method="post" class="ekit-mailChimpForm" data-listed="" data-success-message="Successfully listed this email" data-success-opt-in-message="">
                                                            <div class="ekit-mail-message"></div>
                                                            <input type="hidden" name="double_opt_in" value="no" />

                                                            <div class="elementskit_form_wraper elementskit_inline_form">
                                                                <div class="ekit-mail-chimp-email elementskit_input_wraper elementskit_input_container">
                                                                    <div class="elementskit_form_group">
                                                                        <div class="elementskit_input_element_container">
                                                                            <input type="email" aria-label="email" name="email" class="ekit_mail_email ekit_form_control" placeholder="Enter e-mail" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ekit_submit_input_holder elementskit_input_wraper">
                                                                    <button type="submit" aria-label="submit" class="ekit-mail-submit" name="ekit_mail_chimp">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="50" viewBox="0 0 56 50" fill="none">
                                                                            <path
                                                                                d="M29.713 48.6221L22.9954 42.5031L33.2108 32.0607L34.8731 30.3614L32.4959 30.3614L1 30.3614L1 19.6386L32.4959 19.6386L34.8731 19.6386L33.2108 17.9393L22.9954 7.49689L29.7119 1.37891L53.602 25.0394L29.713 48.6221Z"
                                                                                stroke="#F52722"
                                                                                stroke-width="2"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-41d9415 elementor-widget elementor-widget-spacer"
                                            data-id="41d9415"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.13.3 - 22-05-2023 */
                                                    .elementor-column .elementor-spacer-inner {
                                                        height: var(--spacer-size);
                                                    }
                                                    .e-con {
                                                        --container-widget-width: 100%;
                                                    }
                                                    .e-con-inner > .elementor-widget-spacer,
                                                    .e-con > .elementor-widget-spacer {
                                                        width: var(--container-widget-width, var(--spacer-size));
                                                        --align-self: var(--container-widget-align-self, initial);
                                                        --flex-shrink: 0;
                                                    }
                                                    .e-con-inner > .elementor-widget-spacer > .elementor-widget-container,
                                                    .e-con-inner > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer,
                                                    .e-con > .elementor-widget-spacer > .elementor-widget-container,
                                                    .e-con > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer {
                                                        height: 100%;
                                                    }
                                                    .e-con-inner > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer > .elementor-spacer-inner,
                                                    .e-con > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer > .elementor-spacer-inner {
                                                        height: var(--container-widget-height, var(--spacer-size));
                                                    }
                                                </style>
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c6b671c"
                                    data-id="c6b671c"
                                    data-element_type="column"
                                    data-settings='{"background_background":"classic"}'
                                >
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-50a109a elementor-widget elementor-widget-image"
                                            data-id="50a109a"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="image.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <img
                                                    decoding="async"
                                                    width="545"
                                                    height="582"
                                                    src="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/uploads/sites/8/2021/12/join_us_image.png"
                                                    class="attachment-large size-large wp-image-188"
                                                    alt=""
                                                    loading="lazy"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div
                            class="elementor-element elementor-element-1a70051 elementor-widget elementor-widget-exhibz-gallery-slider"
                            data-id="1a70051"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"none"}'
                            data-widget_type="exhibz-gallery-slider.default"
                        >
                            <div class="elementor-widget-container">
                                <!-- banner start-->
                                <section
                                    class="ts-gallery-slider"
                                    data-widget_settings='{"exhibz_slider_items":[{"exhibz_team_title":" Carousel #1","_id":"34b40cc","exhibz_slider_bg_image":{"url":"","id":"","size":""},"exhibz_gallery_title":""},{"exhibz_team_title":" Carousel #1","_id":"9d5da38","exhibz_slider_bg_image":{"url":"","id":"","size":""},"exhibz_gallery_title":""},{"exhibz_team_title":" Carousel #1","_id":"980a9e6","exhibz_slider_bg_image":{"url":"","id":"","size":""},"exhibz_gallery_title":""}],"slider_items":5,"slider_space_between":"","speaker_slider_autoplay":"no","speaker_slider_speed":1500,"show_navigation":"no","show_pagination":"no","left_arrow_icon":{"value":"icon icon-left-arrows","library":"solid"},"right_arrow_icon":{"value":"icon icon-right-arrow1","library":"solid"},"_title":"","_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_element_width":"","_element_width_tablet":"","_element_width_mobile":"","_element_custom_width":{"unit":"%","size":"","sizes":[]},"_element_vertical_align":"","_position":"","_offset_orientation_h":"start","_offset_x":{"unit":"px","size":"0","sizes":[]},"_offset_x_end":{"unit":"px","size":"0","sizes":[]},"_offset_orientation_v":"start","_offset_y":{"unit":"px","size":"0","sizes":[]},"_offset_y_end":{"unit":"px","size":"0","sizes":[]},"_z_index":"","_element_id":"","_css_classes":"","ekit_we_effect_on":"none","ekit_we_css_animation_fx":"","ekit_we_css_animation":"ekit-fade","ekit_we_css_animation_speed":"5","ekit_we_css_animation_iteration_count":"infinite","ekit_we_css_animation_direction":"normal","ekit_we_css_transform_fx":"","ekit_we_css_transform_fx_translate_toggle":"","ekit_we_css_transform_fx_translate_x":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_translate_y":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_rotate_toggle":"","ekit_we_css_transform_fx_rotate_z":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_rotate_x":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_rotate_y":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_scale_toggle":"","ekit_we_css_transform_fx_scale_x":{"unit":"px","size":1,"sizes":[]},"ekit_we_css_transform_fx_scale_y":{"unit":"px","size":1,"sizes":[]},"ekit_we_css_transform_fx_skew_toggle":"","ekit_we_css_transform_fx_skew_x":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_skew_y":{"unit":"px","size":"","sizes":[]},"ekit_we_on_test_mode":"on","ekit_we_tilt_maxtilt":20,"ekit_we_tilt_scale":1,"ekit_we_tilt_disableaxis":"","ekit_we_mousemove_parallax_speed":40,"ekit_we_scroll_animation":"translateY","ekit_we_scroll_animation_value":250,"ekit_we_scroll_smoothness":700,"ekit_we_scroll_offsettop":0,"ekit_we_scroll_offsetbottom":0,"_animation":"","_animation_tablet":"","_animation_mobile":"","animation_duration":"","_animation_delay":"","_transform_rotate_popover":"","_transform_rotateZ_effect":{"unit":"px","size":"","sizes":[]},"_transform_rotateZ_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_rotate_3d":"","_transform_rotateX_effect":{"unit":"px","size":"","sizes":[]},"_transform_rotateX_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateX_effect_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_rotateY_effect":{"unit":"px","size":"","sizes":[]},"_transform_rotateY_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateY_effect_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_perspective_effect":{"unit":"px","size":"","sizes":[]},"_transform_perspective_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_perspective_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translate_popover":"","_transform_translateX_effect":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scale_popover":"","_transform_keep_proportions":"yes","_transform_scale_effect":{"unit":"px","size":"","sizes":[]},"_transform_scale_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scale_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_skew_popover":"","_transform_skewX_effect":{"unit":"px","size":"","sizes":[]},"_transform_skewX_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_skewX_effect_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_skewY_effect":{"unit":"px","size":"","sizes":[]},"_transform_skewY_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_skewY_effect_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_flipX_effect":"","_transform_flipY_effect":"","_transform_rotate_popover_hover":"","_transform_rotateZ_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_rotateZ_effect_hover_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_hover_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_rotate_3d_hover":"","_transform_rotateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_rotateX_effect_hover_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateX_effect_hover_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_rotateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_rotateY_effect_hover_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateY_effect_hover_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_perspective_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_perspective_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_perspective_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translate_popover_hover":"","_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scale_popover_hover":"","_transform_keep_proportions_hover":"yes","_transform_scale_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_scale_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scale_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_skew_popover_hover":"","_transform_skewX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_skewX_effect_hover_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_skewX_effect_hover_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_skewY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_skewY_effect_hover_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_skewY_effect_hover_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_flipX_effect_hover":"","_transform_flipY_effect_hover":"","_transform_transition_hover":{"unit":"px","size":"","sizes":[]},"motion_fx_transform_x_anchor_point":"","motion_fx_transform_y_anchor_point":"","_background_background":"","_background_color":"","_background_color_stop":{"unit":"%","size":0,"sizes":[]},"_background_color_b":"#f2295b","_background_color_b_stop":{"unit":"%","size":100,"sizes":[]},"_background_gradient_type":"linear","_background_gradient_angle":{"unit":"deg","size":180,"sizes":[]},"_background_gradient_position":"center center","_background_image":{"url":"","id":"","size":""},"_background_position":"","_background_xpos":{"unit":"px","size":0,"sizes":[]},"_background_ypos":{"unit":"px","size":0,"sizes":[]},"_background_attachment":"","_background_repeat":"","_background_size":"","_background_bg_width":{"unit":"%","size":100,"sizes":[]},"_background_video_link":"","_background_video_start":"","_background_video_end":"","_background_play_once":"","_background_play_on_mobile":"","_background_privacy_mode":"","_background_video_fallback":{"url":"","id":"","size":""},"_background_slideshow_gallery":[],"_background_slideshow_loop":"yes","_background_slideshow_slide_duration":5000,"_background_slideshow_slide_transition":"fade","_background_slideshow_transition_duration":500,"_background_slideshow_background_size":"","_background_slideshow_background_position":"","_background_slideshow_lazyload":"","_background_slideshow_ken_burns":"","_background_slideshow_ken_burns_zoom_direction":"in","_background_hover_background":"","_background_hover_color":"","_background_hover_color_stop":{"unit":"%","size":0,"sizes":[]},"_background_hover_color_b":"#f2295b","_background_hover_color_b_stop":{"unit":"%","size":100,"sizes":[]},"_background_hover_gradient_type":"linear","_background_hover_gradient_angle":{"unit":"deg","size":180,"sizes":[]},"_background_hover_gradient_position":"center center","_background_hover_image":{"url":"","id":"","size":""},"_background_hover_position":"","_background_hover_xpos":{"unit":"px","size":0,"sizes":[]},"_background_hover_ypos":{"unit":"px","size":0,"sizes":[]},"_background_hover_attachment":"","_background_hover_repeat":"","_background_hover_size":"","_background_hover_bg_width":{"unit":"%","size":100,"sizes":[]},"_background_hover_video_link":"","_background_hover_video_start":"","_background_hover_video_end":"","_background_hover_play_once":"","_background_hover_play_on_mobile":"","_background_hover_privacy_mode":"","_background_hover_video_fallback":{"url":"","id":"","size":""},"_background_hover_slideshow_gallery":[],"_background_hover_slideshow_loop":"yes","_background_hover_slideshow_slide_duration":5000,"_background_hover_slideshow_slide_transition":"fade","_background_hover_slideshow_transition_duration":500,"_background_hover_slideshow_background_size":"","_background_hover_slideshow_background_position":"","_background_hover_slideshow_lazyload":"","_background_hover_slideshow_ken_burns":"","_background_hover_slideshow_ken_burns_zoom_direction":"in","_background_hover_transition":{"unit":"px","size":"","sizes":[]},"_border_border":"","_border_width":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_border_color":"","_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_box_shadow_box_shadow_type":"","_box_shadow_box_shadow":{"horizontal":0,"vertical":0,"blur":10,"spread":0,"color":"rgba(0,0,0,0.5)"},"_box_shadow_box_shadow_position":" ","_border_hover_border":"","_border_hover_width":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_border_hover_color":"","_border_radius_hover":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_box_shadow_hover_box_shadow_type":"","_box_shadow_hover_box_shadow":{"horizontal":0,"vertical":0,"blur":10,"spread":0,"color":"rgba(0,0,0,0.5)"},"_box_shadow_hover_box_shadow_position":" ","_border_hover_transition":{"unit":"px","size":"","sizes":[]},"_mask_switch":"","_mask_shape":"circle","_mask_image":{"url":"","id":"","size":""},"_mask_notice":"","_mask_size":"contain","_mask_size_scale":{"unit":"%","size":100,"sizes":[]},"_mask_position":"center center","_mask_position_x":{"unit":"%","size":0,"sizes":[]},"_mask_position_y":{"unit":"%","size":0,"sizes":[]},"_mask_repeat":"no-repeat","hide_desktop":"","hide_tablet":"","hide_mobile":"","widget_id":"1a70051"}'
                                >
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper"></div>
                                    </div>
                                </section>
                                <!-- banner end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <livewire:frontend.footer />
</div>
@push('scripts')
@endpush
