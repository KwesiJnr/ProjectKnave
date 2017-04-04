<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="Knave GmBH, World-Leading Audio Systems Corporation. Need anything sound- / audio-related? We got you!">

    <meta name="keywords" content="portfolio, audio, sound, knave gmbh">

    <!-- Mobile Specific Data -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Knave GmBH | Products & Services</title>

    <!-- Stylesheets -->
    <style><?php readfile(getcwd() . "/critical/pserv-critical.css"); ?></style>


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
        <link rel="stylesheet" href="stylesheets/css/dummysheet.css">
    </noscript>

    <!-- LoadCss -->
    <link rel="preload"
          href="stylesheets/css/main.css"
          as="style" onload="this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet"
              href="stylesheets/css/main.css">
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
        var stylesheet = loadCSS("stylesheets/css/main.css");
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

<body class="page-pserv">
<!-- HEADER -->
<header class="l__header--primary" id="top" role="banner">
    <div class="grid l__header">
        <h1 class="logo"> <!-- takes 30%+ grid -->
            <a class="" href="index.php" title="Knave Incorporated Home">Knave Inc.</a>
        </h1><!-- end of logo -->
        <!-- logo for mobile -->
        <a class="site-logo" href="index.php">
            <b class="v-hidden">
                Knave &mdash; A Greyback Company.
            </b>
        </a><!-- end of mobile logo -->

        <ul class="btn-dashboard">
            <li>
                <span class="">Dashboard</span><i class="fa fa-angle-down"></i>

                <ul class="btn-dashboard--child">
                    <li><a href="accountdir/sign_up.php">Sign Up</a></li>
                    <li><a href="accountdir/login.php">Log In</a></li>
                    <li><a href="accountdir/acct.php">Account</a></li>
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
                    <a href="index.php">Home</a>
                </li>
                <li class="nav__item">
                    <a href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav__item  nav__item--current">
                    <a href="pserv.php">Products & Services</a>
                </li>
                <li class="nav__item">
                    <a href="blog/blog.php">Blog</a>
                </li>
                <li class="nav__item">
                    <a href="about.php">About</a>
                </li>
                <li class="nav__item">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav><!-- end of nav -->
    </div>
</header><!-- end of Header -->


<!-- MAIN -->
<section class="panel">
    <h2 class="v-hidden" aria-label="Dual Tab Structure for Products and Services">Products and Services</h2>
    <div id="tabs">
        <ul class="grid tab__nav">
            <li class="tab__item" role="tab">
                <a href="#products" class="tab__item--title">Products</a></li>

            <li class="tab__item" role="tab">
                <a href="#services" class="tab__item--title">Services</a></li>
        </ul>

        <section id="products">
            <div class="grid">
                <h2 class="">Products</h2>
                <p>Here, you will find products we only have in stock, along with audio devices from the featured
                    section:</p>
            </div>


            <section class="grid sale__item">
                <div class="grid__col--5">
                    <img src="assets/images/prod-gallery/google-home.jpg" width="240"
                         srcset="assets/images/prod-gallery/google-home-2.jpg 2x"
                         alt="Google Home" class="sale__item--img">
                </div>

                <div class="grid__col--7">
                    <div class="sale__item--content">
                        <h3 class="sale__item--heading"><a href="https://madeby.google.com/home/" target="_blank">Google
                                Home</a></h3>
                        <p class="sale__item--desc">
                            Google Home is a voice-activated speaker powered by the Google Assistant. Ask it questions.
                            Tell it to do things. It’s your own Google, always ready to help. Just start with, "Ok
                            Google".
                        </p>
                        <span class="sale__item--price">Price: GH¢399.00</span>

                        <div class="sale__item--purch">
                            <label for="purch_qty_1" class="form__label">Quantity</label>
                            <select name="usr_purch_qty" id="purch_qty_1" aria-label="Quantity"
                                    class="sale__item--select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <input type="submit" value="Purchase" class="btn--success btn--inline">
                        </div>
                    </div>


                </div>
            </section><!-- end of Sale Item 1 -->

            <section class="grid sale__item">
                <div class="grid__col--5">
                    <img src="assets/images/prod-gallery/gradog5.jpg" width="240"
                         srcset="assets/images/prod-gallery/gradog5-2.jpg 2x"
                         alt="Grado GS1000e Headphones" class="sale__item--img">
                </div>

                <div class="grid__col--7">
                    <div class="sale__item--content">
                        <h3 class="sale__item--heading"><a href="http://bit.ly/2miVUT6" target="_blank">Grado GS1000e
                                Headphones</a></h3>
                        <p class="sale__item--desc">
                            Grado GS1000e Headphones has excellent audio dynamics, smooth high ends and authentic bass.
                            Heck, with these, you can probably just about make out the sound of wind brushing against
                            the guitarist's stubble.
                        </p>
                        <span class="sale__item--price">Price: GH¢199.99</span>


                        <div class="sale__item--purch">
                            <label for="purch_qty_2" class="form__label">Quantity</label>
                            <select name="usr_purch_qty" id="purch_qty_2" aria-label="Quantity"
                                    class="sale__item--select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <input type="submit" value="Purchase" class="btn--success btn--inline">
                        </div>
                    </div>
                </div>
            </section><!-- end of Sale Item 2 -->


            <section class="grid sale__item">
                <div class="grid__col--5">
                    <img src="assets/images/prod-gallery/iaudio.jpg" width="240"
                         srcset="assets/images/prod-gallery/iaudio-2.jpg 2x"
                         alt="iAudio E3 MP3 Player" class="sale__item--img">
                </div>

                <div class="grid__col--7">
                    <div class="sale__item--content">
                        <h3 class="sale__item--heading"><a href="http://bit.ly/2lD0GxE" target="_blank">iAudio E3 MP3
                                Player</a></h3>
                        <p class="sale__item--desc">
                            iAudio is incredibly light, well-built and its 16GB of storage will see you through a short
                            bike ride or even an ultramarathon.
                        </p>
                        <span class="sale__item--price">Price: GH¢79.00</span>

                        <div class="sale__item--purch">
                            <label for="purch_qty_3" class="form__label">Quantity</label>
                            <select name="usr_purch_qty" id="purch_qty_3" aria-label="Quantity"
                                    class="sale__item--select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <input type="submit" value="Purchase" class="btn--success btn--inline">
                        </div>
                    </div>
                </div>
            </section><!-- end of Sale Item 3 -->


            <section class="grid sale__item">
                <div class="grid__col--5">
                    <img src="assets/images/prod-gallery/x5h.jpg" width="240"
                         srcset="assets/images/prod-gallery/x5h-2.jpg 2x"
                         alt="X5 High Resolution Music Player" class="sale__item--img">
                </div>

                <div class="grid__col--7">
                    <div class="sale__item--content">
                        <h3 class="sale__item--heading"><a href="http://amzn.to/2lIX6mi" target="_blank">X5 High
                                Resolution Music Player</a></h3>
                        <p class="sale__item--desc">
                            To sort the six popular lossless audio formats, Fiio’s X5 player features a dual-core 600MHz
                            CPU and wields two microSD slots for carrying up to 256GB of high-resolution tunes. And, as
                            you might expect, the X5 has the proper outputs for using it alongside headphone amps and
                            other audiophile gear.
                        </p>
                        <span class="sale__item--price">Price: GH¢209.00</span>

                        <div class="sale__item--purch">
                            <label for="purch_qty_4" class="form__label">Quantity</label>
                            <select name="usr_purch_qty" id="purch_qty_4" aria-label="Quantity"
                                    class="sale__item--select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>


                            <input type="submit" value="Purchase" class="btn--success btn--inline">
                        </div>
                    </div>
                </div>
            </section><!-- end of Sale Item 4 -->


            <section class="grid sale__item">
                <div class="grid__col--5">
                    <img src="assets/images/prod-gallery/sms-sync.jpg" width="480"
                         srcset="assets/images/prod-gallery/sms-sync-1.5.jpg 1.5x"
                         alt="Sync SMS Audio" class="sale__item--img">
                </div>

                <div class="grid__col--7">
                    <div class="sale__item--content">
                        <h3 class="sale__item--heading"><a href="http://bit.ly/21kpHYW" target="_blank">Sync SMS
                                Audio</a></h3>
                        <p class="sale__item--desc">
                            Headphones for athletes usually involve hooks or wings. These can be good, but SMS Audio
                            provides another solution -- wireless on-ear Sync.
                        </p>
                        <span class="sale__item--price">Price: GH¢ 195.00</span>

                        <div class="sale__item--purch">
                            <label for="purch_qty_5" class="form__label">Quantity</label>
                            <select name="usr_purch_qty" id="purch_qty_5" aria-label="Quantity"
                                    class="sale__item--select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <input type="submit" value="Purchase" class="btn--success btn--inline">
                        </div>
                    </div>
                </div>
            </section><!-- end of Sale Item 5 -->

        </section>
        <section id="services">
            <div class="grid">
                <div class="styled__horz">
                    <h2 class="">Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque, dolore esse excepturi,
                        natus nihil quaerat quas quidem reprehenderit sed sint veniam voluptas. Alias aliquid atque ea
                        eos maxime quia.</p>
                </div>

                <section class="node__item">
                    <div class="panel--centered">
                        <i class="fa fa-mixcloud fa-3x node__item--icn"></i>
                        <h3 class="node__item--heading">Unlimited Sound Storage (Cloud)</h3>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci, animi, architecto
                        asperiores atque commodi culpa dolore earum eius esse et exercitationem id illo impedit incidunt
                        magnam minima modi, molestiae natus nihil nisi numquam quia quos repudiandae voluptatem
                        voluptates. Consequatur eligendi iusto, laudantium modi pariatur quibusdam sint ut velit?</p>
                </section>


                <section class="node__item">
                    <div class="panel--centered">
                        <i class="fa fa-sliders fa-3x node__item--icn"></i>
                        <h3 class="node__item--heading">Phenomenal Audio Tuning</h3>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi consequatur esse fuga
                        fugit harum ipsa iure, maxime non, numquam, officiis reprehenderit rerum voluptatem voluptates
                        voluptatum. Facere magnam qui quisquam quo quod repellat saepe?
                        <br><br>
                        Ad animi aut cupiditate delectus deserunt dolorem eaque eius enim et, excepturi exercitationem
                        fuga iste libero minima nam, natus
                        nulla optio placeat quaerat quas qui quia repellendus soluta veniam voluptates. Doloribus eius
                        nisi non quos sequi!</p>
                </section>


                <section class="node__item">
                    <div class="panel--centered">
                        <i class="fa fa-simplybuilt fa-3x node__item--icn"></i>
                        <h3 class="node__item--heading">Sound Recording & Professional Restoration</h3>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque beatae consequuntur cumque eius
                        eos fugit harum hic itaque labore laborum, minus mollitia, similique ut. Aperiam asperiores
                        consequatur cum eius, ipsa modi nisi perferendis sit sunt tenetur, unde voluptate! Labore,
                        maiores.</p>
                </section>


            </div>
        </section>
    </div><!-- TABS -->


</section><!-- end of products section -->


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
                <li><a href="about.php">
                        About Knave Inc.
                    </a>
                </li>

                <li><a href="contact.php">
                        Contact Us
                    </a>
                </li>
            </ul>
        </section><!-- end of footer item 1 -->


        <section class="grid__col--4 footer__item">
            <h4 class="footer__item--heading">Wanna Work?</h4>


            <ul class="footer__item--list">
                <li><a href="misc/vendors.php">Become a Knave Vendor</a>
                </li>

            </ul>
        </section><!-- end of footer item 2 -->

        <section class="grid__col--4 footer__item">
            <h4 class="footer__item--heading">Account Services</h4>

            <ul class="footer__item--list">
                <li><a href="accountdir/acct.php">Your Account</a>
                </li>

                <li><a href="accountdir/trackr.php">Track an order</a>
                </li>

                <li><a href="accountdir/sign_up.php">Sign Up</a>
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


<script src="assets/javascript/jquery-ui.min.js"></script>


<!-- LoDash -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"
        integrity="sha256-8E6QUcFg1KTnpEU8TFGhpTGHw5fJqB9vCms3OhAYLqw=" crossorigin="anonymous"></script>


<!-- Default Scripts -->
<script src="assets/javascript/scripts.js"></script>


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