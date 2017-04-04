<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2209461399579378",
            enable_page_level_ads: true
        });
    </script>
    <meta charset="UTF-8">
    <meta name="description"
          content="Knave GmBH, World-Leading Audio Systems Corporation. Need anything sound- / audio-related? We got you!">

    <meta name="keywords" content="portfolio, audio, sound, knave gmbh">

    <!-- Mobile Specific Data -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Knave GmBH | Home</title>

    <!-- Stylesheets -->
    <style><?php readfile(getcwd() . "/critical/main-critical.css"); ?></style>


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

    <!-- Dummy Stylesheet GPSp-->
    <noscript id="dummy-stylesheet">
        <link rel="stylesheet" href="stylesheets/css/dummysheet.css" type="text/css"/>
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
<body id="home">


<header class="l__header--primary" id="top" role="banner">
    <div class="grid l__header">
        <h1 class="logo">
            <a href="index.php" title="Knave Incorporated Home">Knave Inc.</a>
        </h1><!-- end of logo -->
        <a class="site-logo" href="index.php">
            <b class="v-hidden">
                Knave &mdash; A Greyback Company.
            </b>
        </a><!-- end of hidden logo -->

        <ul class="btn-dashboard">
            <li>
                <span>Dashboard</span>
                <i class="fa fa-angle-down"></i>

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


            <ul class="nav is-collapsed-mobile">

                <li class="nav__item nav__item--current">
                    <a href="index.php">Home</a>
                </li>
                <li class="nav__item">
                    <a href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav__item">
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
<div class="grid">
    <!-- Notice -->
    <section class="notice">
        <div class="notice--content">
            <i class="fa fa-exclamation-triangle notice--icn"></i>
            <span class="notice--msg">Some of the visual content (mostly images) found on this website are solely for my personal educational purposes and have no intended connection to their real-life equivalents.</span>
        </div>
    </section>


    <section class="panel--centered hero--text">
        <h1 class="hl__prim">Introducing <span class="hl__prim--highlight">SONY Evo<sup>&reg;</sup></span></h1>
        <h4 class="hl__sec hl__sec--grouped">From the makers of <a href="#"><span
                        class="hl__sec--highlight">Walkman&REG;</span></a></h4>
    </section>


    <div class="featured__hero">
        <figure class="img--hero">
            <img src="assets/images/hero/sony-evo.jpg"
                 width="808"
                 height="388"
                 srcset="assets/images/hero/sony-evo-1.5.jpg 1.5x"
                 alt="A Prototype Image of the Sony EVO Device">
            <figcaption class="featured__hero--figcaption">Image Credit: Gianni Teruzzi (http://bit.ly/2mktqbB)
            </figcaption>
        </figure>


        <!-- end of hero--img -->

        <div class="featured__hero--heading featured__hero--heading--grouped">
            Price: <span class="featured__hero--price">GH¢ 1,299.99</span>
            <span class="featured__hero--code">Evo Wireless Video Streamer (SKU: EV17EGA)</span>
        </div>
    </div>


    <article class="featured__hero--desc">
        <h2 class="featured__hero--heading">Product Description</h2>
        <p>
            Designed for the everyday home, Evo is a wireless video streaming device that takes an unconventional
            approach to the user experience by celebrating each product touch-point in a new and exciting way.
            Unlike other video streamers, Evo eradicates the the classic clunky USB antenna by introducing a
            twin-shot, over-moulded, flexible TPU body.
            <br>
            The USB antenna beautifully nests onto the front of the device. When plugged into the computer or
            laptop, it can also be flexed into any shape.
        </p>

        <br><br>
        <p>Evo actually takes the opposite approach at dealing with cumbersome wiring – instead of hiding these
            behind the scenes it brings them center stage and celebrates them! With the connection ports located at
            its core, Evo creates an additional level of interactivity with an enhanced plugging and unplugging
            experience. Designed for the everyday home, Evo is a wireless video streaming device that takes an
            unconventional approach to the user experience by celebrating each product touch-point in a new and
            exciting way.</p>
    </article>


    <section>
        <h2 class="featured__hero--heading">Quick Pros Overview</h2>
        <ul class="featured__hero--pros">
            <li class="grid__col--5">
                <ul>
                    <li>Twin-shot flexible TPU body</li>
                    <li>Wireless — no more clunky and nasty antennae</li>
                    <li>Co-ordinated activity lights for better visual signal</li>
                    <li>Plug-'n-play ability on both Windows OS (Vista onwards) and macOS seamlessly</li>
                </ul>
            </li>

            <li class="grid__col--5">
                <ul>
                    <li>Rechargeable battery with 5-year guaranteed life span</li>
                    <li>USB 3.0 (backwards compatible with USB 2.0 & USB 1.0 ports</li>
                </ul>
            </li>
        </ul>
    </section>
</div><!-- end of hero--gallery -->


<!-- Reviews -->
<section class="grid">
    <h2 class="featured__hero--heading">Reviews</h2>

    <!-- Review 1 -->
    <blockquote>
        "This is one of the best audio MI-DI devices to be released this year. I'm impressed with the audio feedback
        I'm getting."

        <cite> Kwadwo Nsiah, UpTone Systems, Accra Ghana</cite>
    </blockquote><!-- end comment 1 -->

    <!-- Review 2 -->
    <blockquote>
        "At Audiophile Studios&copysr;, we have moved over to KnaveHub. It is hands-down the best sound system we
        have ever used. The customers can't have enough and just keep coming."

        <cite> Jack Bryne, Atlanta, USA</cite>
    </blockquote>

    <!-- Review 3 -->
    <blockquote>
        "I'm a Houston-based Sound Engineer. My whole family contributes in what I do and this device pops! We live
        in a ranch and no matter where anyone is in the house, the clarity of this sound manifests. For such a small
        device, it has AMAZING projection! You can't go wrong with this price and output. Strongly recommend."

        <cite> T. Black, Mixxx3, Johannesburg, South Africa</cite>
    </blockquote>


    <!-- Review 4 -->
    <blockquote>
        "Believe it or not, the first time I was introduced to this product, I have never been able to set it aside to
        date."

        <cite> Abraham Svelska, Penn Station, USA</cite>
    </blockquote><!-- end comment 1 -->

    <!-- Review 5 -->
    <blockquote>
        "All the hype is true! You only need to actually have it to fully comprehened the power of this thing. It is a
        beast of a device. I can see many singing praises to it for years to come. Well done, Sony!"

        <cite> Sven Pijecki, Aadvark Inc., Poland</cite>
    </blockquote>

    <!-- Review 6 -->
    <blockquote>
        "Very few audio purchases have truly impressed me for the past decade or so. I have been an audio engineer from
        as young as age 17. Twenty years later, and I feel the Audio Industry has finally produced a true masterpiece.
        From Home Users to Commercial, Evo is hard not to amaze."

        <cite> Alan Hearth, Globacomm, United Kingdom</cite>
    </blockquote>
</section><!-- end of Reviews -->


<!-- Featured -->

<section class="featured panel--padded--centered">
    <div class="grid">
        <div class="styled__horz">
            <span class="styled__horz--divider">
            </span>
            <h2 class="styled__horz--heading">Featured</h2>
        </div>

        <span class="featured--caption">Every few weeks, we showcase a number of devices from popular brands like Google, Sony, Astell & Kern, Yamaha. Find out what can professionally help you complete your next project.</span>
        <div class="grid__col--4">
            <section class="featured__item">
                <a href="#">
                    <img src="assets/images/featured/echo-dot.jpg"
                         class="img--featured"
                         width="360"
                         height="312"
                         srcset="assets/images/featured/echo-dot-1.5.jpg 1.5x"
                         alt="Amazon Dot Echo">

                    <div class="featured__item--content">
                        <h4 class="featured__item--caption">Amazon Dot Echo</h4>
                        <p class="featured__item--desc">Voice-controlled device with built-in
                            speaker and Alexa&reg;</p>
                    </div>
                </a>
            </section>
        </div><!-- end of featured 1 -->

        <div class="grid__col--4">
            <section class="featured__item">
                <a href="#">
                    <img src="assets/images/featured/htc-vive.jpg"
                         class="img--featured"
                         width="360"
                         height="312"
                         srcset="assets/images/featured/htc-vive-1.5.jpg 1.5x"
                         alt="HTC Vive Virtual Reality System">

                    <div class="featured__item--content">
                        <h4 class="featured__item--caption">HTC Vive - VR System</h4>
                        <p class="featured__item--desc">Designed for better immersive, room-scale virtual reality</p>
                    </div>
                </a>
            </section>
        </div><!-- end of featured 2 -->

        <div class="grid__col--4">
            <section class="featured__item">
                <a href="#">
                    <img src="assets/images/featured/nexus-q.jpg"
                         class="img--featured"
                         width="360"
                         height="312"
                         srcset="assets/images/featured/nexus-q-1.5.jpg 1.5x"
                         alt="Amazon Dot Echo">

                    <div class="featured__item--content">
                        <h4 class="featured__item--caption">Google Nexus Q</h4>
                        <p class="featured__item--desc">Distinguishable two-pound audio sphere with 32 LEDs</p>
                    </div>
                </a>
            </section>
        </div><!-- end of featured 3 -->


    </div><!--  end of Featured Items -->

    <button class="btn-hollow">See more</button>
</section>
<!-- end of MAIN -->


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