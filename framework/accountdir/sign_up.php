<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="Knave GmBH, World-Leading Audio Systems Corporation. Need anything sound- / audio-related? We got you!">

    <meta name="keywords" content="portfolio, audio, sound, knave gmbh">

    <!-- Mobile Specific Data -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Knave GmBH | Sign Up</title>

    <!-- Stylesheets -->
    <style><?php readfile(getcwd() . "/../critical/signup-critical.css"); ?></style>


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

<body class="page-signup">
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
        </a><!-- end of mobile logo -->

        <ul class="btn-dashboard">
            <li>
                <span class="">Dashboard</span> <i class="fa fa-angle-down"></i>

                <ul class="btn-dashboard--child">
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="acct.php">Account</a></li>
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


<!-- #MAIN -->
<section class="grid">
    <!-- Notice -->
    <section class="notice">
        <div class="notice--content">
            <i class="fa fa-exclamation-triangle notice--icn"></i>
            <span class="notice--msg">This sign-up form is not secure. Please <b>DO NOT</b> enter your actual password. All other information is fine and you may feel free to input them as you wish. </span>
        </div>
    </section>


    <form method="POST" id="signup_form" class="form panel--padded">
        <h2 class="form--heading">Create An Account</h2>

        <!-- Special FormSpree Commands -->
        <input type="hidden" name="_subject" value="New Account @ Knave">
        <input type="text" name="_gotcha" style="display: none;"/>
        <input type="hidden" name="_next" value="http://www.knave.gq/misc/thank-you/member.php"/>
        <!-- -------------------------------------------------- -->


        <fieldset class="form__fieldset">
            <legend class="form__legend"><span class="form--num">1</span>Basic Info</legend>
            <!-- fix for Safari legend margin bug -->
            <span role="presentation"></span>

            <span>
                <label class="form__label form__label--styled">
                <span role="presentation">First Name (e.g. John)</span>
                <input type="text" name="usr_fname" class="form__input form__input--styled"
                       aria-label="First Name"
                       pattern="[a-zA-Z]{3,15}"
                       title="Must contain at least 3 alphanumeric characters" required aria-required="true">
            </label>


            <label for="l-name" class="form__label--styled">
                <span role="presentation">Last Name (e.g. Doe)</span>
                <input type="text" id="l-name" name="usr_lname" class="form__input form__input--styled"
                       aria-label="Last Name"
                       pattern="[a-zA-Z-_\.]{3,15}"
                       required aria-required="true"
                       title="Must contain at least 3 alphanumeric characters. Hyphens allowed.">
            </label>


            <label class="form__label form__label--styled">
                <span role="presentation">Password (e.g. knAve17)</span>
                <input type="password" id="pass" name="usr_pass" class="form__input form__input--styled"
                       aria-label="Password"
                       pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"
                       title="Password must have between 6-32 characters, a number and at least one uppercase and lowercase letter."
                       required aria-required="true">
            </label>


            <label class="form__label form__label--styled">
                <span role="presentation">Confirm Password</span>
                <input type="password" id="pass_conf" name="usr_pass_conf" class="form__input form__input--styled"
                       aria-label="Confirm Password"
                       title="You need to enter the same password as above."
                       required aria-required="true">
            </label>


            <label class="form__label form__label--styled">
                <span role="presentation">Email</span>
                <input type="email" id="email" name="_replyto" class="form__input form__input--styled"
                       pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$"
                       title="Kindly enter a valid email."
                       required aria-required="true">
            </label>
            </span>


            <span>
                <label class="form__label">Gender</label>
                <label for="gender_male" class="form__radio--label">
                    <input type="radio" id="gender_male" name="usr_gender" value="male" class="form__radio">Male
                </label><br>

                <label for="gender_female" class="form__radio--label">
                    <input type="radio" id="gender_female" name="usr_gender" value="female" class="form__radio">Female
                </label><br>

                <label for="gender_neuter" class="form__radio--label">
                    <input type="radio" id="gender_neuter" name="usr_gender" value="neuter" class="form__radio">Prefer
                    not to say
                </label><br>
            </span>


            <label for="nationality" class="form__label">Nationality</label>
            <select id="nationality" name="usr_country" aria-label="Nationality" required class="form__select">
                <option value="ISO 3166-2:AF">Afghanistan</option>
                <option value="ISO 3166-2:AX">Åland Islands</option>
                <option value="ISO 3166-2:AL">Albania</option>
                <option value="ISO 3166-2:DZ">Algeria</option>
                <option value="ISO 3166-2:AS">American Samoa</option>
                <option value="ISO 3166-2:AD">Andorra</option>
                <option value="ISO 3166-2:AO">Angola</option>
                <option value="ISO 3166-2:AI">Anguilla</option>
                <option value="ISO 3166-2:AQ">Antarctica</option>
                <option value="ISO 3166-2:AG">Antigua and Barbuda</option>
                <option value="ISO 3166-2:AR">Argentina</option>
                <option value="ISO 3166-2:AM">Armenia</option>
                <option value="ISO 3166-2:AW">Aruba</option>
                <option value="ISO 3166-2:AU">Australia</option>
                <option value="ISO 3166-2:AT">Austria</option>
                <option value="ISO 3166-2:AZ">Azerbaijan</option>
                <option value="ISO 3166-2:BS">Bahamas</option>
                <option value="ISO 3166-2:BH">Bahrain</option>
                <option value="ISO 3166-2:BD">Bangladesh</option>
                <option value="ISO 3166-2:BB">Barbados</option>
                <option value="ISO 3166-2:BY">Belarus</option>
                <option value="ISO 3166-2:BE">Belgium</option>
                <option value="ISO 3166-2:BZ">Belize</option>
                <option value="ISO 3166-2:BJ">Benin</option>
                <option value="ISO 3166-2:BM">Bermuda</option>
                <option value="ISO 3166-2:BT">Bhutan</option>
                <option value="ISO 3166-2:BO">Bolivia, Plurinational State of</option>
                <option value="ISO 3166-2:BQ">Bonaire, Sint Eustatius and Saba</option>
                <option value="ISO 3166-2:BA">Bosnia and Herzegovina</option>
                <option value="ISO 3166-2:BW">Botswana</option>
                <option value="ISO 3166-2:BV">Bouvet Island</option>
                <option value="ISO 3166-2:BR">Brazil</option>
                <option value="ISO 3166-2:IO">British Indian Ocean Territory</option>
                <option value="ISO 3166-2:BN">Brunei Darussalam</option>
                <option value="ISO 3166-2:BG">Bulgaria</option>
                <option value="ISO 3166-2:BF">Burkina Faso</option>
                <option value="ISO 3166-2:BI">Burundi</option>
                <option value="ISO 3166-2:KH">Cambodia</option>
                <option value="ISO 3166-2:CM">Cameroon</option>
                <option value="ISO 3166-2:CA">Canada</option>
                <option value="ISO 3166-2:CV">Cape Verde</option>
                <option value="ISO 3166-2:KY">Cayman Islands</option>
                <option value="ISO 3166-2:CF">Central African Republic</option>
                <option value="ISO 3166-2:TD">Chad</option>
                <option value="ISO 3166-2:CL">Chile</option>
                <option value="ISO 3166-2:CN">China</option>
                <option value="ISO 3166-2:CX">Christmas Island</option>
                <option value="ISO 3166-2:CC">Cocos (Keeling) Islands</option>
                <option value="ISO 3166-2:CO">Colombia</option>
                <option value="ISO 3166-2:KM">Comoros</option>
                <option value="ISO 3166-2:CG">Congo</option>
                <option value="ISO 3166-2:CD">Congo, the Democratic Republic of the</option>
                <option value="ISO 3166-2:CK">Cook Islands</option>
                <option value="ISO 3166-2:CR">Costa Rica</option>
                <option value="ISO 3166-2:CI">Côte d'Ivoire</option>
                <option value="ISO 3166-2:HR">Croatia</option>
                <option value="ISO 3166-2:CU">Cuba</option>
                <option value="ISO 3166-2:CW">Curaçao</option>
                <option value="ISO 3166-2:CY">Cyprus</option>
                <option value="ISO 3166-2:CZ">Czech Republic</option>
                <option value="ISO 3166-2:DK">Denmark</option>
                <option value="ISO 3166-2:DJ">Djibouti</option>
                <option value="ISO 3166-2:DM">Dominica</option>
                <option value="ISO 3166-2:DO">Dominican Republic</option>
                <option value="ISO 3166-2:EC">Ecuador</option>
                <option value="ISO 3166-2:EG">Egypt</option>
                <option value="ISO 3166-2:SV">El Salvador</option>
                <option value="ISO 3166-2:GQ">Equatorial Guinea</option>
                <option value="ISO 3166-2:ER">Eritrea</option>
                <option value="ISO 3166-2:EE">Estonia</option>
                <option value="ISO 3166-2:ET">Ethiopia</option>
                <option value="ISO 3166-2:FK">Falkland Islands (Malvinas)</option>
                <option value="ISO 3166-2:FO">Faroe Islands</option>
                <option value="ISO 3166-2:FJ">Fiji</option>
                <option value="ISO 3166-2:FI">Finland</option>
                <option value="ISO 3166-2:FR">France</option>
                <option value="ISO 3166-2:GF">French Guiana</option>
                <option value="ISO 3166-2:PF">French Polynesia</option>
                <option value="ISO 3166-2:TF">French Southern Territories</option>
                <option value="ISO 3166-2:GA">Gabon</option>
                <option value="ISO 3166-2:GM">Gambia</option>
                <option value="ISO 3166-2:GE">Georgia</option>
                <option value="ISO 3166-2:DE">Germany</option>
                <option value="ISO 3166-2:GH">Ghana</option>
                <option value="ISO 3166-2:GI">Gibraltar</option>
                <option value="ISO 3166-2:GR">Greece</option>
                <option value="ISO 3166-2:GL">Greenland</option>
                <option value="ISO 3166-2:GD">Grenada</option>
                <option value="ISO 3166-2:GP">Guadeloupe</option>
                <option value="ISO 3166-2:GU">Guam</option>
                <option value="ISO 3166-2:GT">Guatemala</option>
                <option value="ISO 3166-2:GG">Guernsey</option>
                <option value="ISO 3166-2:GN">Guinea</option>
                <option value="ISO 3166-2:GW">Guinea-Bissau</option>
                <option value="ISO 3166-2:GY">Guyana</option>
                <option value="ISO 3166-2:HT">Haiti</option>
                <option value="ISO 3166-2:HM">Heard Island and McDonald Islands</option>
                <option value="ISO 3166-2:VA">Holy See (Vatican City State)</option>
                <option value="ISO 3166-2:HN">Honduras</option>
                <option value="ISO 3166-2:HK">Hong Kong</option>
                <option value="ISO 3166-2:HU">Hungary</option>
                <option value="ISO 3166-2:IS">Iceland</option>
                <option value="ISO 3166-2:IN">India</option>
                <option value="ISO 3166-2:ID">Indonesia</option>
                <option value="ISO 3166-2:IR">Iran, Islamic Republic of</option>
                <option value="ISO 3166-2:IQ">Iraq</option>
                <option value="ISO 3166-2:IE">Ireland</option>
                <option value="ISO 3166-2:IM">Isle of Man</option>
                <option value="ISO 3166-2:IL">Israel</option>
                <option value="ISO 3166-2:IT">Italy</option>
                <option value="ISO 3166-2:JM">Jamaica</option>
                <option value="ISO 3166-2:JP">Japan</option>
                <option value="ISO 3166-2:JE">Jersey</option>
                <option value="ISO 3166-2:JO">Jordan</option>
                <option value="ISO 3166-2:KZ">Kazakhstan</option>
                <option value="ISO 3166-2:KE">Kenya</option>
                <option value="ISO 3166-2:KI">Kiribati</option>
                <option value="ISO 3166-2:KP">Korea, Democratic People's Republic of</option>
                <option value="ISO 3166-2:KR">Korea, Republic of</option>
                <option value="ISO 3166-2:KW">Kuwait</option>
                <option value="ISO 3166-2:KG">Kyrgyzstan</option>
                <option value="ISO 3166-2:LA">Lao People's Democratic Republic</option>
                <option value="ISO 3166-2:LV">Latvia</option>
                <option value="ISO 3166-2:LB">Lebanon</option>
                <option value="ISO 3166-2:LS">Lesotho</option>
                <option value="ISO 3166-2:LR">Liberia</option>
                <option value="ISO 3166-2:LY">Libya</option>
                <option value="ISO 3166-2:LI">Liechtenstein</option>
                <option value="ISO 3166-2:LT">Lithuania</option>
                <option value="ISO 3166-2:LU">Luxembourg</option>
                <option value="ISO 3166-2:MO">Macao</option>
                <option value="ISO 3166-2:MK">Macedonia, the former Yugoslav Republic of</option>
                <option value="ISO 3166-2:MG">Madagascar</option>
                <option value="ISO 3166-2:MW">Malawi</option>
                <option value="ISO 3166-2:MY">Malaysia</option>
                <option value="ISO 3166-2:MV">Maldives</option>
                <option value="ISO 3166-2:ML">Mali</option>
                <option value="ISO 3166-2:MT">Malta</option>
                <option value="ISO 3166-2:MH">Marshall Islands</option>
                <option value="ISO 3166-2:MQ">Martinique</option>
                <option value="ISO 3166-2:MR">Mauritania</option>
                <option value="ISO 3166-2:MU">Mauritius</option>
                <option value="ISO 3166-2:YT">Mayotte</option>
                <option value="ISO 3166-2:MX">Mexico</option>
                <option value="ISO 3166-2:FM">Micronesia, Federated States of</option>
                <option value="ISO 3166-2:MD">Moldova, Republic of</option>
                <option value="ISO 3166-2:MC">Monaco</option>
                <option value="ISO 3166-2:MN">Mongolia</option>
                <option value="ISO 3166-2:ME">Montenegro</option>
                <option value="ISO 3166-2:MS">Montserrat</option>
                <option value="ISO 3166-2:MA">Morocco</option>
                <option value="ISO 3166-2:MZ">Mozambique</option>
                <option value="ISO 3166-2:MM">Myanmar</option>
                <option value="ISO 3166-2:NA">Namibia</option>
                <option value="ISO 3166-2:NR">Nauru</option>
                <option value="ISO 3166-2:NP">Nepal</option>
                <option value="ISO 3166-2:NL">Netherlands</option>
                <option value="ISO 3166-2:NC">New Caledonia</option>
                <option value="ISO 3166-2:NZ">New Zealand</option>
                <option value="ISO 3166-2:NI">Nicaragua</option>
                <option value="ISO 3166-2:NE">Niger</option>
                <option value="ISO 3166-2:NG">Nigeria</option>
                <option value="ISO 3166-2:NU">Niue</option>
                <option value="ISO 3166-2:NF">Norfolk Island</option>
                <option value="ISO 3166-2:MP">Northern Mariana Islands</option>
                <option value="ISO 3166-2:NO">Norway</option>
                <option value="ISO 3166-2:OM">Oman</option>
                <option value="ISO 3166-2:PK">Pakistan</option>
                <option value="ISO 3166-2:PW">Palau</option>
                <option value="ISO 3166-2:PS">Palestinian Territory, Occupied</option>
                <option value="ISO 3166-2:PA">Panama</option>
                <option value="ISO 3166-2:PG">Papua New Guinea</option>
                <option value="ISO 3166-2:PY">Paraguay</option>
                <option value="ISO 3166-2:PE">Peru</option>
                <option value="ISO 3166-2:PH">Philippines</option>
                <option value="ISO 3166-2:PN">Pitcairn</option>
                <option value="ISO 3166-2:PL">Poland</option>
                <option value="ISO 3166-2:PT">Portugal</option>
                <option value="ISO 3166-2:PR">Puerto Rico</option>
                <option value="ISO 3166-2:QA">Qatar</option>
                <option value="ISO 3166-2:RE">Réunion</option>
                <option value="ISO 3166-2:RO">Romania</option>
                <option value="ISO 3166-2:RU">Russian Federation</option>
                <option value="ISO 3166-2:RW">Rwanda</option>
                <option value="ISO 3166-2:BL">Saint Barthélemy</option>
                <option value="ISO 3166-2:SH">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="ISO 3166-2:KN">Saint Kitts and Nevis</option>
                <option value="ISO 3166-2:LC">Saint Lucia</option>
                <option value="ISO 3166-2:MF">Saint Martin (French part)</option>
                <option value="ISO 3166-2:PM">Saint Pierre and Miquelon</option>
                <option value="ISO 3166-2:VC">Saint Vincent and the Grenadines</option>
                <option value="ISO 3166-2:WS">Samoa</option>
                <option value="ISO 3166-2:SM">San Marino</option>
                <option value="ISO 3166-2:ST">Sao Tome and Principe</option>
                <option value="ISO 3166-2:SA">Saudi Arabia</option>
                <option value="ISO 3166-2:SN">Senegal</option>
                <option value="ISO 3166-2:RS">Serbia</option>
                <option value="ISO 3166-2:SC">Seychelles</option>
                <option value="ISO 3166-2:SL">Sierra Leone</option>
                <option value="ISO 3166-2:SG">Singapore</option>
                <option value="ISO 3166-2:SX">Sint Maarten (Dutch part)</option>
                <option value="ISO 3166-2:SK">Slovakia</option>
                <option value="ISO 3166-2:SI">Slovenia</option>
                <option value="ISO 3166-2:SB">Solomon Islands</option>
                <option value="ISO 3166-2:SO">Somalia</option>
                <option value="ISO 3166-2:ZA">South Africa</option>
                <option value="ISO 3166-2:GS">South Georgia and the South Sandwich Islands</option>
                <option value="ISO 3166-2:SS">South Sudan</option>
                <option value="ISO 3166-2:ES">Spain</option>
                <option value="ISO 3166-2:LK">Sri Lanka</option>
                <option value="ISO 3166-2:SD">Sudan</option>
                <option value="ISO 3166-2:SR">Suriname</option>
                <option value="ISO 3166-2:SJ">Svalbard and Jan Mayen</option>
                <option value="ISO 3166-2:SZ">Swaziland</option>
                <option value="ISO 3166-2:SE">Sweden</option>
                <option value="ISO 3166-2:CH">Switzerland</option>
                <option value="ISO 3166-2:SY">Syrian Arab Republic</option>
                <option value="ISO 3166-2:TW">Taiwan, Province of China</option>
                <option value="ISO 3166-2:TJ">Tajikistan</option>
                <option value="ISO 3166-2:TZ">Tanzania, United Republic of</option>
                <option value="ISO 3166-2:TH">Thailand</option>
                <option value="ISO 3166-2:TL">Timor-Leste</option>
                <option value="ISO 3166-2:TG">Togo</option>
                <option value="ISO 3166-2:TK">Tokelau</option>
                <option value="ISO 3166-2:TO">Tonga</option>
                <option value="ISO 3166-2:TT">Trinidad and Tobago</option>
                <option value="ISO 3166-2:TN">Tunisia</option>
                <option value="ISO 3166-2:TR">Turkey</option>
                <option value="ISO 3166-2:TM">Turkmenistan</option>
                <option value="ISO 3166-2:TC">Turks and Caicos Islands</option>
                <option value="ISO 3166-2:TV">Tuvalu</option>
                <option value="ISO 3166-2:UG">Uganda</option>
                <option value="ISO 3166-2:UA">Ukraine</option>
                <option value="ISO 3166-2:AE">United Arab Emirates</option>
                <option value="ISO 3166-2:GB">United Kingdom</option>
                <option value="ISO 3166-2:US">United States</option>
                <option value="ISO 3166-2:UM">United States Minor Outlying Islands</option>
                <option value="ISO 3166-2:UY">Uruguay</option>
                <option value="ISO 3166-2:UZ">Uzbekistan</option>
                <option value="ISO 3166-2:VU">Vanuatu</option>
                <option value="ISO 3166-2:VE">Venezuela, Bolivarian Republic of</option>
                <option value="ISO 3166-2:VN">Viet Nam</option>
                <option value="ISO 3166-2:VG">Virgin Islands, British</option>
                <option value="ISO 3166-2:VI">Virgin Islands, U.S.</option>
                <option value="ISO 3166-2:WF">Wallis and Futuna</option>
                <option value="ISO 3166-2:EH">Western Sahara</option>
                <option value="ISO 3166-2:YE">Yemen</option>
                <option value="ISO 3166-2:ZM">Zambia</option>
                <option value="ISO 3166-2:ZW">Zimbabwe</option>
            </select>

        </fieldset><!-- end of Basic Info -->

        <fieldset class="form__fieldset">
            <legend class="form__legend"><span class="form--num">2</span>Profile</legend>
            <span role="presentation"></span>
            <label for="job" class="form__label">Occupation</label>
            <select name="usr_job" id="job" aria-label="Job" required class="form__select">
                <optgroup label="Computers & Technology">
                    <option value="comp_tech">Computer Technician</option>
                    <option value="sound_eng">Sound Engineer</option>
                    <option value="creat_eng">Creative Engineer</option>
                </optgroup>
                <optgroup label="Web">
                    <option value="web_desg">Web Designer</option>
                    <option value="rails_dev">Rails Developer</option>
                    <option value="ajax_dev">AJAX Developer</option>
                    <option value="php_dev">PHP Developer</option>
                    <option value="haskell_dev">Haskell Developer</option>
                </optgroup>
                <optgroup label="Business">
                    <option value="bus_owner">Business Owner</option>
                    <option value="gadg_merch">Gadget Merchant</option>
                    <option value="sales_exec">Sales Exacutive</option>
                </optgroup>
                <optgroup label="Other">
                    <option value="crea_inst">Creative Instructor</option>
                    <option value="student">Student</option>
                    <option value="marketer">Marketer</option>
                    <option value="freelancer">Freelancer</option>
                </optgroup>
            </select>


            <label for="bio" class="form__label">Biography</label>
            <textarea name="usr_bio" id="bio" class="form__textarea"
                      placeholder="Tell us a little about yourself..."
                      cols="auto" rows="5"></textarea>


            <span>
                <label class="form__label">Interests</label>

                <label class="form__checkbox--label">
                    <input type="checkbox" name="usr_interest" value="audio_eng"
                           class="form__checkbox">Audio Engineering
                </label><br>


                <label class="form__checkbox--label">
                    <input type="checkbox" name="usr_interest" value="gaming" class="form__checkbox">Gaming
                </label><br>

                <label for="fitness" class="form__checkbox--label">
                    <input type="checkbox" id="fitness" name="usr_interest" value="fitness" class="form__checkbox">Fitness
                </label>
            </span>
        </fieldset>

        <p class="form__policy">By clicking Create Account, you agree to our <a href="#">Terms</a> and confirm that
            you
            have read our <a href="#">Data Policy</a>, including our <a href="#">Cookie Use Policy</a>. You may
            receive
            SMS message notifications from us and can opt out at any time. </p>

        <div class="form__button--wrapper">
            <input type="submit" class="btn--success" value="Create Account">
            <input type="reset" class="btn--warning" value="Reset Fields">
        </div>
    </form>
    <!-- Script to Capture Email -->
    <script>
        var contactform = document.getElementById('signup_form');
        contactform.setAttribute('action', '//formspree.io/' + 'support' + '@' + 'knave' + '.' + 'gq');
    </script>
</section>


<!-- back to top -->
<a href="#top">
    <div class="return--up">Back to top
    </div>
</a>


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