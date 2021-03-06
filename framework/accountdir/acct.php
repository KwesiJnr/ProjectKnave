<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="Knave GmBH, World-Leading Audio Systems Corporation. Need anything sound- / audio-related? We got you!">

    <meta name="keywords" content="portfolio, audio, sound, knave gmbh">

    <!-- Mobile Specific Data -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Knave GmBH | Account Dashboard</title>

    <!-- Stylesheets -->
    <style><?php readfile(getcwd() . "/../critical/acct-critical.css"); ?></style>


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.google.com/" crossorigin>

    <!-- Cookie of Fonts -->
    <script>
        (function () {
            if (sessionStorage.fonts) {
                console.log("Fonts installed over last session.");
                document.documentElement.classList.add('wf-active');
            } else {
                console.log("Required fonts not yet installed/cached.");
            }
        })();
    </script>

    <!-- Dummy Stylesheet GPS-->
    <noscript id="dummy-stylesheet">
        <link rel="stylesheet" href="../stylesheets/css/dummysheet.css">
    </noscript>

    <!-- LoadCss -->
    <link rel="preload"
          href="../stylesheets/css/main.css"
          as="style" onload="this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet"
              href="../stylesheets/css/main.css">
    </noscript>


    <!-- LoadCss Script -->
    <script>
        /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
        !function (a) {
            "use strict";
            var b = function (b, c, d) {
                function e(a) {
                    return h.body ? a() : void setTimeout(function () {
                        e(a)
                    })
                }

                function f() {
                    i.addEventListener && i.removeEventListener("load", f), i.media = d || "all"
                }

                var g, h = a.document, i = h.createElement("link");
                if (c) g = c; else {
                    var j = (h.body || h.getElementsByTagName("head")[0]).childNodes;
                    g = j[j.length - 1]
                }
                var k = h.styleSheets;
                i.rel = "stylesheet", i.href = b, i.media = "only x", e(function () {
                    g.parentNode.insertBefore(i, c ? g : g.nextSibling)
                });
                var l = function (a) {
                    for (var b = i.href, c = k.length; c--;)if (k[c].href === b)return a();
                    setTimeout(function () {
                        l(a)
                    })
                };
                return i.addEventListener && i.addEventListener("load", f), i.onloadcssdefined = l, l(f), i
            };
            "undefined" != typeof exports ? exports.loadCSS = b : a.loadCSS = b
        }("undefined" != typeof global ? global : this);


        /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
        !function (a) {
            if (a.loadCSS) {
                var b = loadCSS.relpreload = {};
                if (b.support = function () {
                        try {
                            return a.document.createElement("link").relList.supports("preload")
                        } catch (b) {
                            return !1
                        }
                    }, b.poly = function () {
                        for (var b = a.document.getElementsByTagName("link"), c = 0; c < b.length; c++) {
                            var d = b[c];
                            "preload" === d.rel && "style" === d.getAttribute("as") && (a.loadCSS(d.href, d, d.getAttribute("media")), d.rel = null)
                        }
                    }, !b.support()) {
                    b.poly();
                    var c = a.setInterval(b.poly, 300);
                    a.addEventListener && a.addEventListener("load", function () {
                        b.poly(), a.clearInterval(c)
                    }), a.attachEvent && a.attachEvent("onload", function () {
                        a.clearInterval(c)
                    })
                }
            }
        }(this);


        /*! fallback for sketchy browsers */

        /*! onloadCSS. (onload callback for loadCSS) [c]2017 Filament Group, Inc. MIT License */
        function onloadCSS(a, b) {
            function c() {
                !d && b && (d = !0, b.call(a))
            }

            var d;
            a.addEventListener && a.addEventListener("load", c), a.attachEvent && a.attachEvent("onload", c), "isApplicationInstalled" in navigator && "onloadcssdefined" in a && a.onloadcssdefined(c)
        }
        var stylesheet = loadCSS("../stylesheets/css/main.css");
        onloadCSS(stylesheet, function () {
            console.log("Stylesheet has loaded.");
        });
    </script>
    <script></script>


    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"
            integrity="sha256-3Jy/GbSLrg0o9y5Z5n1uw0qxZECH7C6OQpVBgNFYa0g=" crossorigin="anonymous"></script>
    <![endif]-->
</head>
<body class="page-acct">

<!-- HEADER -->
<header class="l__header--primary" id="top" role="banner">
    <div class="grid l__header">
        <h1 class="logo"> <!-- takes 30%+ grid -->
            <a class="" href="../index.php" title="Knave Incorporated Home">Knave Inc.</a>
        </h1><!-- end of logo -->
        <!-- logo for mobile -->
        <a class="site-logo" href="../index.php">
            <b class="v-hidden">
                Knave &mdash; A Greyback Company.
            </b>
        </a><!-- end of mobile logo -->

        <ul class="btn-dashboard">
            <li>
                <span class="">Account</span> <i class="fa fa-angle-down"></i>
                <ul class="btn-dashboard--child">
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="#orders">Orders</a></li>
                    <li><a href="#man_acct">Management</a></li>
                    <li><a href="#notif">Notifications</a></li>
                </ul>
            </li>

        </ul>

        <nav class="navbar" role="navigation">
            <h3 class="v-hidden">Main Navigation</h3>
            <!-- toggle for mobile -->
            <span id="toggle" class="icn--nav-toggle is-displayed-mobile">
                    <b class="v-hidden">Toggle</b>
                </span><!-- end of toggle for mobile -->

            <!-- Desktop Navigation -->
            <ul class="nav is-collapsed-mobile">
                <li class="nav__item">
                    <a href="../index.php">Home</a>
                </li>
                <li class="nav__item">
                    <a href="../portfolio.php">Portfolio</a>
                </li>
                <li class="nav__item">
                    <a href="../pserv.php">Products & Services</a>
                </li>
                <li class="nav__item">
                    <a href="../blog/blog.php">Blog</a>
                </li>
                <li class="nav__item">
                    <a href="../about.php">About</a>
                </li>
                <li class="nav__item">
                    <a href="../contact.php">Contact</a>
                </li>
            </ul>
        </nav><!-- end of nav -->
    </div>
</header><!-- end of Header -->


<!-- MAIN -->
<div class="grid switch-view panel--padded">
    <div class="grid__col--3 panel--isolate-min">
        <ul class="list--menu">
            <li class="list--menu--header">
                <div class="list--menu--heading">Account Overview</div>

                <ul class="list--child">
                    <li class="list--menu--current">
                        <a href="acct.php" class="list--node--heading">Dashboard</a>
                    </li>
                </ul>
            </li>


            <li class="list--node">
                <div class="list--node--heading" id="orders">Orders</div>
                <ul class="list--node--child">
                    <li>
                        <a href="#" class="link--disabled">Order History</a>
                    </li>
                    <li>
                        <a href="#" class="link--disabled">Digital Library</a>
                    </li>
                    <li>
                        <a href="#" class="link--disabled">Return Status / History</a>
                    </li>
                    <li>
                        <a href="#" class="link--disabled">Subscription Orders</a>
                    </li>
                </ul><!-- end of orders -->
            </li>


            <li class="list--node">
                <div class="list--node--heading" id="man_acct">Manage Account</div>
                <ul class="list--node--child">
                    <li>
                        <a href="#" class="link--disabled">Account Settings</a>
                    </li>
                    <li>
                        <a href="#" class="link--disabled">Return Status / History</a>
                    </li>
                    <li>
                        <a href="#" class="link--disabled">Subscription Orders</a>
                    </li>
                    <li>
                        <a href="#" class="link--disabled">Premium Membership</a>
                    </li>
                    <li>
                        <a href="#" class="link--disabled">Monsoon Store Card</a>
                    </li>
                </ul><!-- end of manage account-->
            </li>


            <li class="list--node">
                <div class="list--node--heading" id="notif">Notifications</div>
                <ul class="list--node--child">
                    <li>
                        <a href="#" class="link--disabled">Email Notifications</a>
                    </li>
                    <li>
                        <a href="#" class="link--disabled">Price Alerts</a>
                    </li>
                    <li>
                        <a href="#" class="link--disabled">SMS / Mobile Setup</a>
                    </li>
                    <li>
                        <a href="#" class="link--disabled">Auto Notify</a>
                    </li>
                </ul><!-- end of manage account-->
            </li>
        </ul>
    </div><!-- end of list menu -->


    <!-- list content -->
    <div class="grid__col--9 panel--isolate-max">
        <section class="list--content">
            <h2 class="list--content--heading">
                <span class="">Your</span> Account
            </h2>

            <div class="list--content--persona">
                <ul class="">
                    <li class="list--content--persona-r"><span class="">Knave ID</span></li>
                    <li class="list--content--persona-i"><span></span></li>
                </ul>

                <ul class="">
                    <li class="list--content--persona-r"><span class="">Account Number</span></li>
                    <li class="list--content--persona-i"><span></span></li>
                </ul>

                <ul class="">
                    <li class="list--content--persona-r"><span class="">Address</span></li>
                    <li class="list--content--persona-i"><span></span></li>
                </ul>
            </div><!-- end of list c-persona -->


            <div>
                <h4 class="list--content--title">Recent Order Status</h4>
                <span class="list-content-i">No available sales order at the moment.</span>
            </div><!-- end of order status -->

            <div>
                <h4 class="list--content--title">Recent Return Status</h4>
                <span class="list-content-i">There is no return on this account at the moment.</span>
            </div><!-- end of return status -->

            <div>
                <h4 class="list--content--title">Recently Purchased Products</h4>
                <span class="list-content-i">No order has been made in the past 90 day(s).</span>
            </div><!-- end of recent purchase -->
        </section>


    </div><!-- end of list content -->
</div>


<!-- back to top -->
<a href="#top">
    <div class="return--up">Back to top
    </div>
</a>


<!-- FOOTER -->
<footer class="l-footer">
    <div class="grid footer__prim">
        <section id="mc_embed_signup" class="footer__subscribe">
            <h4 class="footer__subscribe--desc">Receive updates, newsletters & offers</h4>
            <form action="//knave.us15.list-manage.com/subscribe/post?u=397542b073dff24e8d0bbf3d9&amp;id=f2f9d07f5f"
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                  target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <label for="mce-EMAIL" class="form__label--hidden">Email Address</label>
                    <input type="email" value="" name="EMAIL" class="form__input footer__subscribe--email"
                           pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$"
                           id="mce-EMAIL"
                           placeholder="E-mail Address (e.g. example@knavemail.com)" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                              name="b_397542b073dff24e8d0bbf3d9_f2f9d07f5f"
                                                                                              tabindex="-1" value="">
                    </div>
                    <input type="submit" value="Subscribe" name="subscribe"
                           id="mc-embedded-subscribe" class="btn--info">
                </div>
            </form>
        </section>
        <!--End mc_embed_signup-->

        <section class="l-footer--social">
            <h4 class="footer__subscribe--desc">Find Us On</h4>

            <a href="#" class="l-footer--social--icn">
                <i class="fa fa-facebook-square fa-3x"></i>
            </a><!-- facebook -->
            <a href="#" class="l-footer--social--icn">
                <i class="fa fa-twitter-square fa-3x"></i>
            </a><!-- twitter -->
            <a href="#" class="l-footer--social--icn">
                <i class="fa fa-google-plus-square fa-3x"></i>
            </a><!-- google-plus -->
        </section>

        <section class="grid__col--4 footer__item">
            <h4 class="footer__item--heading">Get to Know Us</h4>

            <ul class="footer__item--list">
                <li><a href="../about.php">
                        About Knave Inc.
                    </a>
                </li>

                <li><a href="../contact.php">
                        Contact Us
                    </a>
                </li>
            </ul>
        </section><!-- end of footer item 1 -->


        <section class="grid__col--4 footer__item">
            <h4 class="footer__item--heading">Wanna Work?</h4>


            <ul class="footer__item--list">
                <li><a href="../misc/vendors.php">Become a Knave Vendor</a>
                </li>

            </ul>
        </section><!-- end of footer item 2 -->

        <section class="grid__col--4 footer__item">
            <h4 class="footer__item--heading">Account Services</h4>

            <ul class="footer__item--list">
                <li><a href="../accountdir/acct.php">Your Account</a>
                </li>

                <li><a href="../accountdir/trackr.php">Track an order</a>
                </li>

                <li><a href="../accountdir/sign_up.php">Sign Up</a>
                </li>
            </ul>
        </section><!-- end of footer item 3 -->
    </div>


    <div class="footer__sec">
        <div class="grid">
            <span class="footer__sec--lft">
                <small class="footer__sec--1-content">&copy;2017 Knave Inc. GmBH, Accra.</small>
            </span>

            <span class="footer__sec--rt">
                 <small class="footer__sec--2-content">A Greyback Company</small>
            </span>
        </div>

    </div>
</footer>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

<!-- LoDash -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"
        integrity="sha256-8E6QUcFg1KTnpEU8TFGhpTGHw5fJqB9vCms3OhAYLqw=" crossorigin="anonymous"></script>


<!-- Default Scripts -->
<script src="../assets/javascript/scripts.js"></script>


<!-- FontAwesome -->
<script src="https://use.fontawesome.com/3eec833028.js"></script>

<!-- Web Font Loader -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.27/webfontloader.js"
        integrity="sha256-FL2n/ULq4lZxp5qZGW6boR09sNrvvpsQhjsFxEmcfm8=" crossorigin="anonymous"></script>

<script>
    WebFontConfig = {
        google: {
            families: ['Assistant:200,300,400,600,700,800', 'Ubuntu']
        },
        timeout: 2400,
        // other options and settings
        active: function () {
            sessionStorage.fonts = true;
        }
    };

    (function (d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = "https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.27/webfontloader.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
</script>


<!-- GPSp Stove -->
<script>
    var loadDeferredStyles = function () {
        var addStylesNode = document.getElementById("dummy-stylesheet");
        var replacement = document.createElement("span");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement);
        addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
        webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) raf(function () {
        window.setTimeout(loadDeferredStyles, 0);
    });
    else window.addEventListener('load', loadDeferredStyles);
</script>
</body>
</html>