<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description"
              content="Knave GmBH, World-Leading Audio Systems Corporation. Need anything sound- / audio-related? We got you!">

        <meta name="keywords" content="portfolio, audio, sound, knave gmbh">

        <!-- Mobile Specific Data -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Knave GmBH | Blog</title>

        <!-- Stylesheets -->
        <style><?php readfile(getcwd() . "/../critical/blog-critical.css"); ?></style>


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
<body class="page-blog">

<!-- HEADER -->
<header class="l__header--primary" id="top" role="banner">
    <div class="grid l__header">
        <h1 class="logo">
            <a class="" href="../index.php" title="Knave Incorporated Home">Knave Inc.</a>
        </h1><!-- end of logo -->

        <!-- logo for mobile -->
        <a class="site-logo" href="../index.php">
            <b class="v-hidden">
                Knave &mdash; A Greyback Company.
            </b>
        </a><!-- end of hidden mobile logo -->

        <ul class="btn-dashboard">
            <li>
                <span>Dashboard</span>
                <i class="fa fa-angle-down"></i>

                <ul class="btn-dashboard--child">
                    <li><a href="../accountdir/sign_up.php">Sign Up</a></li>
                    <li><a href="../accountdir/login.php">Log In</a></li>
                    <li><a href="../accountdir/acct.php">Account</a></li>
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
                <li class="nav__item nav__item--current">
                    <a href="blog.php">Blog</a>
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
<div class="grid switch-view panel">
    <div class="grid__col--3 panel--isolate-min">
        <a href="#">
            <h3 class="hl-sec"><i class="fa fa-arrow-left node__item--icn"></i>Previous Posts</h3>
        </a>

        <ul>
            <li class="node__item datac--isolate--text">
                <a href="#"><h4>Why You Need a Sound Mixer</h4></a>

                <p>Sample Text is something written here to check on other stuff... <a href="#">Read more></a></p>
                <small>
                    <i class="fa fa-clock-o"></i> Posted on January 5, 2001 by <a href="#"><cite>Jack Foster, WY</cite></a>
                </small>
            </li><!-- end of Blog Item 1 -->


            <li class="node__item  datac--isolate--text">
                <a href="#"><h4>Autonomous Coding &mdash; A Study</h4></a>

                <p>Sample Text is something written here to check on other stuff... <a href="#">Read more></a></p>
                <small>
                    <i class="fa fa-clock-o"></i> Posted on January 5, 2001 by <a href="#"><cite>Jack Foster, WY</cite></a>
                </small>
            </li><!-- end of Blog Item 2 -->


            <li class="node__item  datac--isolate--text">
                <a href="#"><h4>An Interview With Kaseem Nabil, CEO of UltraMix Studios</h4></a>

                <p>Sample Text is something written here to check on other stuff... <a href="#">Read more></a></p>
                <small>
                    <i class="fa fa-clock-o"></i> Posted on January 5, 2001 by <a href="#"><cite>Jack Foster, WY</cite></a>
                </small>
            </li><!-- end of Blog Item 3 -->


            <li class="node__item  datac--isolate--text">
                <a href="#"><h4>A Report of Our Growth for the Past Year</h4></a>

                <p>Sample Text is something written here to check on other stuff... <a href="#">Read more></a></p>
                <small>
                    <i class="fa fa-clock-o"></i> Posted on January 5, 2001 by <a href="#"><cite>Jack Foster, WY</cite></a>
                </small>
            </li><!-- end of Blog Item 4 -->


            <li class="node__item  datac--isolate--text">
                <a href="#"><h4>Archives</h4></a>

                <p>Sample Text is something written here to check on other stuff... <a href="#">Read more></a></p>
                <small>
                    Posted on January 5, 2001 by <a href="#"><cite>Jack Foster, WY</cite></a>
                </small>
            </li><!-- end of Blog Item 5 -->
        </ul>


        <!-- Advertisement-->
        <div class="ad ad--desktop">
            <a href="#">
                <img src="../assets/images/generic/adbox2.png" alt="">
            </a>
        </div>
    </div>


    <!--  main blog body-->
    <div class="grid__col--9 panel--isolate-max">
        <article>
            <header class="panel--centered">
                <h3>How Music Affects Your Productivity</h3>
                <cite>&mdash; <a href="https://medium.com/@gregoryciotti" target="_blank">Gregory Ciotti</a>, <i
                            class="fa fa-clock-o"></i> Tue. May 2, 2016 (7 min read)</cite>
            </header>

            <div class="panel--padded">
                <figure class="blog__hero--img">
                    <img src="../assets/images/blog/2016/05/musicbg.jpg" alt="Music is Life" width="899" height="504"
                         srcset="../assets/images/blog/2016/05/musicbg-1.2.jpg 1.2x">
                </figure>
            </div>

            <p> It’s a question worth asking, since music has increasingly become a part of the modern-day workplace.
                Music has a strange temporal permanence; as art decorates space, so does music decorate time.</p>
            <br>

            <p>With so much of our time being spent at work, and so much of our work being done at computers, music has
                become inseparable from our day-to-day tasks — a way to “optimize the boring” while looking at screens.
                To better understand music and productivity, let’s look at the research.</p>
            <br>

            <h3>Music makes repetitive tasks more enjoyable</h3>
            <p>Music’s effectiveness is dependent on how “immersive” a task is, referring to the creative demand of the
                work.
                When a task is clearly defined and repetitive in nature, research from Applied Ergonomics suggests that
                music is consistently helpful.</p>
            <br>

            <p>Assembly line workers showed signs of increased happiness and efficiency while listening to music, for
                example.
                More modern studies from Dr. Teresa Lesiuk would argue that it isn’t the music itself, but rather the
                improved mood your favorite music brings that is the source of this bump in productivity.</p>
            <br>


            <p>Music with a dissonant tone was found to have no impact to productivity, while music in the major mode,
                or key, had better results: “Subjects hearing BGM (background music) achieved greater productivity when
                BGM was in the major mode.”</p>
            <br>

            <h3>In a noisy workplace, music is an escape</h3>
            <p>While the open-office debate rages on, one point has become clear: a noisy workplace can halt personal
                productivity in its tracks.
                Perhaps a pair of headphones may not be as distracting as some companies think says Dr. Lesiuk.</p>
            <br>
            <blockquote class="blockquote--styled">Dr. Lesiuk’s research focuses on how music affects workplace
                performance. In one study involving information technology specialists, she found that those who
                listened to music completed their tasks more quickly and came up with better ideas than those who
                didn’t, because the music improved their mood.
            </blockquote>
            <br>

            <h3>Ambient noise is the creative sweet spot</h3>
            <p>For those who do enjoy listening to music during creative sessions, an atmospheric presence seems to work
                best.</p>
            <br>

            <p>A <b><a href="http://www.jstor.org/stable/10.1086/665048">study</a></b> in the Journal of Consumer
                Research has shown that a moderate noise level can get creative juices flowing, but the line is easily
                crossed; loud noises made it incredibly difficult to concentrate. Bellowing basses and screeching synths
                will do you more harm than good when engaging in deep work.</p>
            <br>

            <p>A <b><a href="http://scitation.aip.org/content/asa/journal/jasa/137/4/10.1121/1.4920363">2015
                        study</a></b> from the Acoustical Society of America found that when it came to sound-masking
                with ambient
                noise, “natural” sounds, such as waves at a beach, also improved subjects’ ability to concentrate.</p>
            <br>

            <p>Whether deliberately created or naturally occurring, a soft background noise is what you should aim
                for.</p>
            <br>

            <h3>Lyrics are often too distracting</h3>
            <p>For low-immersion or physical tasks, music with lyrics can offer huge benefits. But for intensive work,
                lyrics are especially destructive for focus.</p>
            <br>

            <p>Research from Applied Acoustics shows that “intelligible” chatter — talking that can be clearly heard
                and understood — is what makes for a distracting environment. Shifting focus to figure out what someone
                else is saying is the reason why speech is often considered the most troublesome element of a noisy
                office; in one study, 48% of participants listed intelligible talking as the sound which distracted them
                the most.</p>
            <br>

            <p>Trying to engage in language-related tasks — such as writing — while listening to lyrics would be akin to
                holding a conversation while another person talks over you… while also strumming a guitar. Lyrics are
                often a no-go.</p>
            <br>

            <p>Lyrics might not have the same effect on creative tasks that don’t directly deal with “verbal
                architecture.” A 2005 study lead by Dr. Lesiuk that looked at software developers suggested that music
                with lyrics helped their output while working.</p>
            <br>

            <h3>Finding workplace harmony</h3>
            <p>The environment you create impacts the behavior you get. When deciding what sounds will fill your
                workday, get deliberate: test and tweak until you find the perfect harmony. The ability to do
                consistently great work is what’s at stake, so think before you press play.</p>
            <br>

            <small>Source: Medium.com</small>

            <p class="panel--padded">Don't forget to voice your opinion in the comment box below. Your voice is truly
                valued!</p>

        </article><!-- end of main blog body -->


        <!-- Advertisement for Mobile-->
        <div class="panel--isolate-micro ad ad--mobile">
            <a href="#">
                <img src="../assets/images/generic/adbox1.png" alt="">
            </a>
        </div>


        <!-- Author Listing -->

        <section class="content--persona">
            <h3 class="v-hidden" aria-label="About the Author">About the Author</h3>
            <a href="https://medium.com/@gregoryciotti" target="_blank">
                <div class="content--persona--header">
                    <img src="../assets/images/blog/author/gregoryciotti.jpg" alt="Author : Gregory Ciotti"
                         class="content--persona--photo">

                    <span class="content--persona--name">Gregory Ciotti</span>
                    <div class="content--persona--desc">Editor of <b><a href="https://medium.com/help-scout">Help
                                Scout</a></b>
                    </div>
                </div>
            </a>

            <p class="content--persona--bio">Gregory Ciotti is on the marketing team at Help Scout, software for
                delivering outstanding customer support. You’ll find him writing about clear communication and editorial
                strategy on the Help Scout blog.</p>

            <div class="content--persona--social content--persona--social--twitter">
                <a href="https://twitter.com/gregoryciotti?lang=en" target="_blank">
                    <i class="fa fa-twitter node__item--icn"></i>gregoryciotti
                </a>
            </div>
        </section>


        <section class="panel--padded">
            <!-- #DISQUS -->
            <div id="disqus_thread"></div>
            <script>
                // Disqus Universal Kode
                var disqus_config = function () {
                    this.page.url = '<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>';
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };

                (function () { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://knave.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
                    by Disqus.</a></noscript>
        </section>
    </div>

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

<!-- Disqus -->
<script id="dsq-count-scr" src="//knave.disqus.com/count.js" async></script>
</body>
</html>

<!-- Mobile Specific Data -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Knave GmBH | Become a Vendor</title>

<!-- Stylesheets -->
<style><?php readfile(getcwd() . "/../critical/vendor-critical.css"); ?></style>


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
<body class="page-vendor">

<!-- HEADER -->
<header class="l__header--primary" id="top" role="banner">
    <div class="grid l__header">
        <h2 class="logo"> <!-- takes 30%+ grid -->
            <a href="../index.php" title="Knave Incorporated Home">Knave Inc.</a>
        </h2><!-- end of logo -->
        <!-- logo for mobile -->
        <a class="site-logo" href="../index.php">
            <b class="v-hidden">
                Knave &mdash; A Greyback Company.
            </b>
        </a><!-- end of hidden mobile logo -->

        <ul class="btn-dashboard">
            <li>
                <span>Dashboard</span> <i class="fa fa-angle-down"></i>

                <ul class="btn-dashboard--child">
                    <li><a href="../accountdir/sign_up.php">Sign Up</a></li>
                    <li><a href="../accountdir/login.php">Log In</a></li>
                    <li><a href="../accountdir/acct.php">Account</a></li>
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
<div class="grid">
    <section class="vend--hero">
        <h2 class="vend--msg">
            Get commissioned. Start selling today and earn amazing rewards!
        </h2>

        <a href="#call-2-action" class="vend--c2a">
            <button class="btn--success vend--c2a--btn">
                Get Started
            </button>
        </a>
    </section>
</div><!-- end of Vendor Hero -->


<section class="grid panel--padded--centered vend__sect">
    <div class="styled__horz">
            <span class="styled__horz--divider">
            </span>
        <h2 class="styled__horz--heading">Basics</h2>
    </div>

    <div class="grid__col--4 vend__item">
        <span class="vend__benefit--icn">
            <i class="vend__item--num">1</i>
        </span>

        <h4 class="vend__item--caption">Apply and Qualify</h4>
        <div class="vend__item--desc">The first step to awesomeness. All you need to do is send your application to
            the address provided. Once approved, our Integration Team will notify you via email with instructions on
            how you can join the service.
        </div>
    </div><!-- end of vendor step 1 -->

    <div class="grid__col--4 vend__item">
        <span class="vend__benefit--icn">
            <i class="vend__item--num">2</i>
        </span>

        <h4 class="vend__item--caption">Sell, We'll Do The Rest</h4>
        <div class="vend__item--desc">You don't need to do much on this step. It's all on us. All you have to do is put
            your item on display in the online shopping portal.
        </div>
    </div><!-- end of vendor step 2 -->

    <div class="grid__col--4 vend__item">
        <span class="vend__benefit--icn">
             <i class="vend__item--num">3</i>
        </span>

        <h4 class="vend__item--caption">Collect Rewards and Get Paid</h4>
        <div class="vend__item--desc">Sit back, collect cash rewards (commission, if that applies) and re-stock once you
            receive the "Lo' Stock" Notification. It's that easy!
        </div>
    </div><!-- end of vendor step 3 -->
</section><!-- end of Vendor Steps -->


<section class="grid panel--centered">
    <h2 class="v-hidden">Commission Table</h2>

    <table class="table" summary="A breakdown of commission rate system for Vendors on Knave">
        <caption class="table--caption">Commission Rates</caption>
        <thead>
        <tr class="table--heading">
            <th scope="colgroup">Gadget</th>
            <th scope="colgroup">Pricing</th>
            <th scope="colgroup">Commission (%)</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>KnaveHub</td>
            <td>$20.99</td>
            <td>3.55</td>
        </tr>
        <!-- item 2 -->
        <tr>
            <td>Aurocast</td>
            <td>$40.99</td>
            <td>3.55</td>
        </tr>
        <!-- item 3 -->
        <tr>
            <td>Asynchronous Multimedia Device</td>
            <td>$225.99</td>
            <td>3.55</td>
        </tr>
        <!-- item 4 -->
        <tr>
            <td>SoundMaxxx 4000 Implementer</td>
            <td>$1,210.99</td>
            <td>3.55</td>
        </tr>
        <!-- item 5 -->
        <tr>
            <td>Sound Track Enhancement System</td>
            <td>$80.99</td>
            <td>3.55</td>
        </tr>
        <!-- item 6 -->
        <tr>
            <td>Custom-made Audio Devices</td>
            <td>N/A</td>
            <td>N/A</td>
        </tr>
        </tbody>
    </table>
</section><!-- end of commission -->


<section class="grid panel--padded">
    <div class="styled__horz">
            <span class="styled__horz--divider">
            </span>
        <h2 class="styled__horz--heading">Perks</h2>
    </div>


    <section class="grid__col--5 vend__benefit">
        <span class="vend__benefit--icn">
            <i class="fa fa-bullhorn"></i>
        </span>

        <h4 class="vend__benefit--caption">Free Advertising</h4>
        <span class="vend__benefit--desc">Hundreds of thousands of customers browse our marketplace everyday. You get to showcase other products and services on our platform &mdash;
            for FREE!</span>
    </section><!-- end of perk 1 -->


    <section class="grid__col--5 vend__benefit">
        <span class="vend__benefit--icn">
            <i class="fa fa-google-wallet"></i>
        </span>

        <h4 class="vend__benefit--caption">Google Wallet Integration</h4>
        <span class="vend__benefit--desc">Say goodbye to problematic transactions. Hassle-free and efficient, our integration of Google Wallet ensures fast and secure transactions both ways.</span>
    </section><!-- end of perk 2 -->


    <section class="grid__col--5 vend__benefit">
        <span class="vend__benefit--icn">
            <i class="fa fa-bolt"></i>
        </span>

        <h4 class="vend__benefit--caption">Power Up On Rebates</h4>
        <span class="vend__benefit--desc">Maximize your benefits on all purchases you make from us. Enjoy year-round rebates on select products from any of our online stores around the globe.</span>
    </section><!-- end of perk 3-->


    <section class="grid__col--5 vend__benefit">
        <span class="vend__benefit--icn">
            <i class="fa fa-hourglass-3"></i>
        </span>

        <h4 class="vend__benefit--caption">24/7 Telecom Service</h4>
        <span class="vend__benefit--desc">Knave provides an elite 24-hour Telecommunication Service to all vendors at a small fee of 0.5% per customer &mdash;
            an unbeatable rate you can't find anywhere. </span>
    </section><!-- end of perk 4-->
</section><!-- end of Perk Station -->


<section id="call-2-action" class="row--alt panel--padded--centered">
    <h2 class="v-hidden">Call to Action</h2>
    <div class="grid">
        <div class="c2a">Interested in selling with us? Become a Vendor today and join our 35,000+ resellers and
            vendors.<br><br>
            <a href="#" class="vend--c2a">
                <button class="btn--success vend--c2a--btn">Apply Now</button>
            </a>
        </div>
    </div>

</section>


<!-- Back to Top -->
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