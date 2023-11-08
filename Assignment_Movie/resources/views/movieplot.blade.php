<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Plot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kinnari&family=Limelight&display=swap" rel="stylesheet">
    <style>
        .navbar {
            background-color: rgb(226, 97, 125);
            padding: 16px 0;
        }

        .navbar a {
            color: white;
        }

        .dropdown-menu .dropdown-item {
            color: black;
            /* Change the color to black or a color that's easily readable */
        }

        .navbar-toggler-icon {
            background-color: white;
        }

        .header {
            background-color: rgb(226, 97, 125);
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .form-control[type="search"] {
            background-color: white;
        }

        .btn-outline-success {
            color: white;
            background-color: #b0c7ce;
            border-color: #b0c7ce;
        }

        .btn-outline-success:hover {
            background-color: greenyellow;
            border-color: greenyellow;
        }

        .footer {
            background-color: rgb(226, 97, 125);
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 100%;
        }

        body {
            background-image: url('assets/wallpaper-gold.jpg');
            background-size: cover;
            background-position: 50% center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
            font-family: 'Cinzel', cursive;
            font-size: 17px;
        }

        h3 {
            font-family: 'Times New Roman', cursive;
            font-size: 25px;
        }

        p {
            font-family: 'Times New Roman', cursive;
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .your-text-element {
            text-align: justify;
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 1.5s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .row {
            width: 980px;
            height: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

        .row:before,
        .row:after {
            content: "";
            display: table;
        }

        .sectiontitle {
            background-position: center;
            text-align: center;
            min-height: 20px;
        }

        .sectiontitle h2 {
            font-size: 30px;
            color: #222;
            margin-bottom: 0px;
            padding-right: 10px;
            padding-left: 10px;
        }

        .fullWidth {
            width: 100%;
            display: table;
            float: none;
            padding: 0;
            min-height: 1px;
            height: 100%;
            position: relative;
        }

        .cbp_tmtimeline {
            margin: 60px 30px 0 0;
            padding: 0;
            list-style: none;
            position: relative;
        }

        /* //palang */
        .cbp_tmtimeline:before {
            content: '';
            position: absolute;
            top: 3%;
            bottom: 0;
            width: 10px;
            background: white;
            left: 13%;
            height: 99.65%;
        }

        .cbp_tmtimeline li:last-child:before {
            content: initial;
        }

        .cbp_tmtimeline>li .cbp_tmtime {
            display: block;
            width: 25%;
            padding-right: 100px;
            position: absolute;
        }

        .cbp_tmtimeline>li .cbp_tmtime span {
            display: block;
            text-align: right;
        }

        .cbp_tmtimeline>li .cbp_tmtime span:first-child {
            font-size: 0.9em;
            color: #bdd0db;
        }

        .cbp_tmtimeline>li .cbp_tmtime span:last-child {
            font-size: 2.9em;
            color: #3594cb;
        }

        .cbp_tmtimeline>li:nth-child(odd) .cbp_tmtime span:last-child {
            color: #6cbfee;
        }

        .cbp_tmtimeline>li .cbp_tmlabel {
            margin: 0 0 15px 25%;
            background: black;
            color: #FFF;
            padding: 30px;
            font-size: 1.2em;
            font-weight: 300;
            line-height: 1.4;
            font-family: 'Open Sans';
            position: relative;
            border-radius: 20px;
            min-height: 150px;
        }

        .cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel {
            background: black;
        }

        .cbp_tmtimeline>li .cbp_tmlabel h3 {
            margin-top: 0px;
            color: white;
            font-size: 20px;
            margin-bottom: 5px;
            padding: 0 0 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
        }

        .cbp_tmtimeline>li .cbp_tmlabel h4 {
            opacity: 0.7;
            color: rgba(255, 255, 255, 1);
            letter-spacing: 0px;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            line-height: 1.2em;
            font-weight: 600;
            padding: 0;
            padding-bottom: 10px;
            margin: 0;
            text-align: left;
        }

        .cbp_tmtimeline>li .cbp_tmlabel h4 i {
            margin-right: 5px;
            vertical-align: middle;
        }

        .cbp_tmtimeline>li .cbp_tmlabel:after {
            right: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-right-color: black;
            border-width: 10px;
            top: 70px;
        }

        .cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
            border-right-color: black;
        }

        /* //bulat */
        .cbp_tmtimeline>li .cbp_tmicon {
            width: 100px;
            height: 100px;
            top: 3%;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            font-size: 1.2em;
            /* Adjust font size if needed */
            line-height: 100px;
            /* Should be equal to the height to vertically center content */
            -webkit-font-smoothing: antialiased;
            position: absolute;
            color: #151515;
            background: white;
            border-radius: 50%;
            text-align: center;
            left: 8%;
            margin: 0;
        }

        .cbp_tmtimeline li {
            margin-bottom: 70px;
            position: relative;
        }

        .sectionClassProject {
            position: relative;
            display: block;
            /* background: #f7f7f7; */

            margin: 0 auto;
            padding: 80px 1.875em 3.125em;
        }

        .projectParagraph {
            font-size: 18px;
            margin: 0.5em 0 0;
            font-family: 'Source Sans Pro', serif;
        }

        .projectParagraphLink {
            font-size: 15px !important;
            font-weight: 500 !important;
            margin-top: 50px !important;
            margin-bottom: 0px;
            text-align: right;
        }

        .projectParagraphLink a {
            color: white;
            text-decoration: underline;
        }

        @media screen and (max-width: 768px) {
            .authorWindow {
                width: 210px;
            }

            .authorWindowWrapper {
                bottom: -170px;
                margin-bottom: 20px;
            }

            footer p {
                font-size: 14px;
            }
        }

        .timeline-number {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.9em;
            color: #151515;
        }
    </style>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="assets/LoveDestiny2Logo.png" href="/" alt="Love Destiny"
                        style="width: 130px; height: auto;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/moviecharacter">Movie Character</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/movieplot">Movie Plot</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">About Us</a></li>
                                <li><a class="dropdown-item" href="https://www.netflix.com/my/title/81639974">Social
                                        Media</a></li>
                            </ul>
                        </li>
                    </ul>
                    {{-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> --}}
                </div>
            </div>
        </nav>
    </div>
    <br>
    <br>
    <div>
        <div id="workexperience" class="sectionClass">
            <div class="row ">
                {{-- <div class="sectiontitle">
                    <h2>Work experience</h2>
                    <span class="headerLine"></span>
                </div> --}}
                <div class="fullWidth eight columns">
                    <ul class="cbp_tmtimeline">
                        <li>
                            <div class="cbp_tmicon cbp_tmicon-phone">
                                <b><span class="timeline-number">1</span></b>
                                <i class="faPra fa-briefcase"></i>
                            </div>
                            <div class="cbp_tmlabel wow fadeInRight animated fade-in">
                                <img src="assets/methas.jpg" alt="Image 1"
                                    style="width: 655px; height: auto; border-radius: 10px;">
                                <br>
                                <br>
                                <div class="your-text-element">
                                    <h3>The Mysterious Arrival of Methas Hantrakul</h3>
                                    <div class="date">
                                        {{-- <i class="fa fa-calendar"></i>April 2014 - Current --}}
                                    </div>
                                    {{-- <h4><i class="fa fa-flag"></i>Davic Company, Bratislava</h4> --}}
                                    <p class="projectParagraph">In the early Rattanakosin period, Methas Hantrakul, an
                                        online merchant from the year 2021, mysteriously arrives in Siam with an ancient
                                        musket. He struggles to return to the present and becomes entangled with Phop,
                                        the
                                        chief engineer of the Royal Treasury Department, and Kesorn, a modern young
                                        woman
                                        with a deep knowledge of history.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cbp_tmicon cbp_tmicon-screen">
                                <b><span class="timeline-number">2</span></b>
                                <i class="faPra fa-briefcase"></i>
                            </div>
                            <div class="cbp_tmlabel wow fadeInRight animated fade-in">
                                <img src="assets/methas2.jpg" alt="Image 2"
                                    style="width: 655px; height: auto; border-radius: 10px;">
                                <br>
                                <br>
                                <div class="your-text-element">
                                    <h3>Love, Dreams, and Time Travel</h3>
                                    {{-- <h4><i class="fa fa-flag"></i>Fannous Company, Prague</h4> --}}
                                    {{-- <div class="date"><i class="fa fa-calendar"></i>June 2012 - April 2014</div> --}}
                                    <p class="projectParagraph">Phop, captivated by Kesorn and his dreams, attempts to
                                        prove
                                        their destined love. Meanwhile, Methas shares his time-traveling story and warns
                                        them about an impending threat. Together, they try to prevent historical
                                        alterations
                                        while navigating their complex feelings and growing affection.

                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cbp_tmicon cbp_tmicon-mail">
                                <b><span class="timeline-number">3</span></b>
                                <i class="faPra fa-briefcase"></i>
                            </div>
                            <div class="cbp_tmlabel wow fadeInRight animated fade-in">
                                <img src="assets/methas3.jpg" alt="Image 3"
                                    style="width: 655px; height: auto; border-radius: 10px;">
                                <br>
                                <br>
                                <div class="your-text-element">
                                    <h3>Unraveling the Conspiracy</h3>
                                    {{-- <h4><i class="fa fa-flag"></i>Techixs Company, London</h4> --}}
                                    {{-- <div class="date"><i class="fa fa-calendar"></i>November 2009 - June 2012</div> --}}
                                    <p class="projectParagraph">A conspiracy involving Mr. Hantram, General Yuttamat,
                                        and
                                        foreign forces unfolds. Phop, Kesorn, and Methas uncover the plot to start a
                                        rebellion and seize control of Siam. They devise a plan to thwart the sinister
                                        scheme, leading to intense confrontations and daring rescues.

                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cbp_tmicon cbp_tmicon-mail">
                                <b><span class="timeline-number">4</span></b>
                                <i class="faPra fa-briefcase"></i>
                            </div>
                            <div class="cbp_tmlabel wow fadeInRight animated fade-in">
                                <img src="assets/methas1.jpg" alt="Image 4"
                                    style="width: 655px; height: auto; border-radius: 10px;">
                                <br>
                                <br>
                                <div class="your-text-element">
                                    <h3>The Battle Against Betrayal</h3>
                                    {{-- <h4><i class="fa fa-flag"></i>Techixs Company, London</h4> --}}
                                    {{-- <div class="date"><i class="fa fa-calendar"></i>November 2009 - June 2012</div> --}}
                                    <p class="projectParagraph">As the eclipse approaches, Phop, Kesorn, and Methas
                                        confront
                                        the conspirators. A dramatic battle ensues, revealing betrayals and true
                                        identities.
                                        With Kesorn's bravery and Methas's wisdom, they fight against time to save their
                                        country and preserve history.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cbp_tmicon cbp_tmicon-phone">
                                <b><span class="timeline-number">5</span></b>
                                <i class="faPra fa-briefcase"></i>
                            </div>
                            <div class="cbp_tmlabel wow fadeInRight animated fade-in">
                                <img src="assets/methas4.jpg" alt="Image 5"
                                    style="width: 655px; height: auto; border-radius: 10px;">
                                <br>
                                <br>
                                <div class="your-text-element">
                                    <h3>Love Triumphs Over Time</h3>
                                    {{-- <div class="date"><i class="fa fa-calendar"></i>Januar 2006 - November 2009</div> --}}
                                    <p class="projectParagraph">In the climactic battle, Phop, Kesorn, and Methas face
                                        the
                                        ultimate challenge. Love and sacrifice prevail as they defeat the villains and
                                        restore peace. The story concludes with Methas accepting his fate in the past,
                                        ensuring a future where Phop and Kesorn's love remains eternal.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="footer">
        <b>
            &copy; 2023 Love Destiny: The Movie
        </b>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
