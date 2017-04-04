<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="">

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

<!-- Simulate margin from sticky header -->
<div class="l__header--primary--support--sec"></div>
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
                <h3>A Preview of Auditory Management Systems (ASMs) in 2017</h3>
                <cite>&mdash; <a href="#">Stephen Asamoah</a>, <i class="fa fa-clock-o"></i> Sat. October 28, 2016 15:05
                    GMT</cite>
            </header>

            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa deserunt, dolorem iste numquam quas
                repellat sit voluptatum. At atque consequatur corporis eum illum iure obcaecati reprehenderit, tempora!
                Architecto, consequatur deleniti est ipsum maiores modi praesentium quas repudiandae totam veritatis.
                Architecto at cupiditate esse laudantium minima, officiis quis repellendus sapiente vel?</p>
            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate dolor eaque eveniet, ex
                explicabo fuga, harum illum incidunt magni nihil quos rem saepe! Corporis eum eveniet harum neque non
                nulla, obcaecati qui sunt unde vel. </p>
            <br>
            <p>Blanditiis delectus et ipsa, labore neque, numquam, obcaecati omnis
                provident quaerat quidem quisquam quod sint tempora. Consequuntur cum doloribus eveniet laboriosam
                magnam quis reiciendis tenetur velit voluptas voluptatem? Asperiores cum nesciunt odit sequi ut!</p>
            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deserunt dolorum enim eum facere illo,
                labore magni necessitatibus neque nesciunt obcaecati quisquam quo recusandae rerum saepe sunt unde?
                Assumenda, quod.</p>
            <br>

            <blockquote class="blockquote--styled">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius velit,
                vitae. Debitis dignissimos fugiat
                laboriosam minus officia perferendis quae reprehenderit voluptas.
            </blockquote>
            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolorum fugit laborum magnam modi
                necessitatibus nihil soluta, tenetur vel vitae. Animi, ducimus id incidunt quasi ullam velit veritatis.
                Alias asperiores aut corporis delectus doloremque eum ex fugiat hic, ipsa ipsum itaque iure iusto
                laudantium minima molestias mollitia nihil nobis odit, optio perspiciatis provident quos rem rerum saepe
                soluta suscipit vitae voluptate. Beatae magni optio sequi totam vitae? Ducimus itaque officiis quasi
                quidem.</p>
            <br>

            <p>Ad assumenda autem delectus distinctio eligendi est, eum facere id itaque, nemo nesciunt, sit
                tempora vitae? A accusamus adipisci, amet delectus dignissimos eum explicabo iusto, mollitia similique
                temporibus ullam veniam. Ad nisi, temporibus! Dignissimos dolorem doloremque ducimus, eos hic id ipsa,
                laboriosam magnam maiores minus nihil odit quaerat qui sint tempore totam, ut! Consectetur explicabo
                nihil non odit quod tempore temporibus.</p>
            <br>

            <p>A amet commodi officia ratione totam. Corporis earum facere non
                placeat possimus quod quos tempora ullam vel.</p>

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
            <a href="https://twitter.com/Jnr_Kwesi" target="_blank">
                <div class="content--persona--header">
                    <img src="../assets/images/blog/author/kwesijnr.jpg" alt="Author Photo"
                         class="content--persona--photo">

                    <span class="content--persona--name">Stephen K. Asamoah</span>
                    <div class="content--persona--desc">Front-End Web Developer and AJAX Guru, Accra GH</div>
                </div>
            </a>

            <p class="content--persona--bio">Stephen Asamoah is an AJAX developer who writes books, articles and
                tutorials about web design and development, with a focus on JavaScript and on responsive and
                mobile development. He runs a web design agency in Takoradi, Ghana and has published six books
                on AJAX, including the award-winning, AJAX: Defining the Limits, an advanced resource for
                JavaScript programmers. He loves to play video games and is an avid reader of the Ludlum
                series.</p>

            <div class="content--persona--social content--persona--social--twitter">
                <a href="https://twitter.com/Jnr_Kwesi" target="_blank">
                    <i class="fa fa-twitter node__item--icn"></i>Jnr_Kwesi
                </a>
            </div>
        </section>


        <!-- Comments -->
        <section>
            <h3 class="panel--padded">Comments</h3>

            <!-- Comment Author Section -->
            <form class="form">
                <label class="form__label--hidden" for="name">Name:</label>
                <input type="text" class="form__input" id="name" name="usr_name" placeholder="Name"><!--
                --><span class="form__input--subtext">e.g. Jonathan Snook</span>

                <label class="form__label--hidden" for="email">Email:</label>
                <input type="email" class="form__input" id="email" name="usr_email" placeholder="E-Mail"><!--
                --><span class="form__input--subtext">e.g. example@knavemail.com</span>

                <label class="form__label--hidden" for="subject">Subject:</label>
                <input type="text" class="form__input" id="subject" name="usr_subject" placeholder="Subject"><!--
                --><span class="form__input--subtext">e.g. Blog Response</span>


                <label class="form__label--hidden" for="message">Message:</label>
                <textarea class="form__textarea" id="message" name="usr_message" role="textbox"
                          placeholder="Join the discussion..." rows="10" cols="10"></textarea>

                <div class="form__button--wrapper">
                    <button type="submit" class="btn--success">Submit</button>
                    <button type="reset" class="btn--warning">Reset Fields</button>
                </div>
            </form><!-- end of comment author -->


            <!-- main comment section -->
            <div class="comment--author--section">
                <p class="panel--centered">There are currently no comments. <a href="#name">Click here to start.</a></p>
            </div>


            <!-- #DISQUS -->
            <div id="disqus_thread"></div>
            <script>

                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

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
        <section class="footer__subscribe">
            <h4 class="footer__subscribe--desc">Receive updates, newsletters & offers</h4>
            <form action="">
                <label for="sub_email" class="form__label--hidden">Email Address</label>
                <input type="email" id="sub_email" name="usr_email" class="form__input" placeholder="E-mail Address">
                <a href="#">
                    <input type="submit" class="btn--info" value="Subscribe">
                </a>
            </form>
        </section>

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
        var replacement = document.createElement("div");
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