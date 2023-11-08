<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Taviraj:wght@400;700&display=swap" rel="stylesheet">
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
            color: black;
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

        .rounded-image {
            border-radius: 25px;
        }


        .primary-subtle {
            background-color: black;
            color: rgb(226, 97, 125);
            border: 1px solid rgb(226, 97, 125);
        }

        .secondary-subtle {
            background-color: grey;
            color: black;
            border: 1px solid grey;
        }

        a {
            color: rgb(226, 97, 125);
        }

        .form-control,
        .form-label {
            background-color: transparent;
            border-color: rgb(226, 97, 125);
            color: rgb(226, 97, 125);
            font-size: 80%;
        }

        .table {
            background-color: transparent;
        }

        th,
        td {
            padding: 6px;
        }

        .table td {
            color: rgb(226, 97, 125);
        }

        .footer {
            background-color: rgb(226, 97, 125);
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 100%;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .card-header {
            background-color: rgb(226, 97, 125);
        }

        h2 {
            color: black;
        }

        h2 {
            font-weight: bold;
        }

        .card-body {
            color: black;
            font-weight: bold;
            font-family: 'Open Sans', sans-serif;
            font-size: 14.5px;
            text-align: justify;
        }

        .scaled-container-black {
            background-color: rgba(0, 0, 0, 0);
            border-radius: 15px;
            padding: 30px;
            color: white;
            font-size: 90%;
            width: 88%;
            height: 50%;
        }

        Set the background color of the second container to palevioletred .scaled-container-palevioletred {
            background-color: rgb(226, 97, 125);
            border-radius: 15px;
            padding: 20px;
            color: white;
            font-size: 70%;
        }

        .scaled-container-palevioletred {
            background-color: black;
            border-radius: 15px;
            padding: 20px;
            color: white;
            font-size: 70%;
            width: 83%;
            height: 50%;
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

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: url('play-button.png') no-repeat;
            background-size: cover;
            cursor: pointer;
        }

        .play-button:hover {
            background-image: url('play-button-hover.png');
        }
    </style>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand poster" href="/">
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
    <br>
    <div class="container mt-4 scaled-container-black fade-in">
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <img class="rounded" src="assets/lovedestinyposter.jpg" alt="lovedestinyposter"
                            style="max-width: 307%; height: auto;">
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card mb-4 border-secondary">
                    <div class="card-header card-header-indigo text-white">
                        <h2 class="card-title" style="color: white;">Love Destiny: The Movie</h2>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>Release Date</td>
                                <td>: 6 October 2022</td>
                            </tr>
                            <tr>
                                <td>Language</td>
                                <td>: Thai</td>
                            </tr>
                            <tr>
                                <td>Genre</td>
                                <td>: Romance, Comedy</td>
                            </tr>
                            {{-- <tr>
                            <td>running Time</td>
                            <td>: 166 Minutes</td>
                        </tr> --}}
                            <tr>
                                <td>Director</td>
                                <td>: Adisorn Tresirikasem</td>
                            </tr>
                            <tr>
                                <td>Cast</td>
                                <td>: Thanavat Vatthanaputi, Ranee Campen, Paris Intarakomalyasut</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card mb-4 border-secondary">
                    <div class="card-header card-header-indigo text-white">
                        <h2 class="card-title" style="color: white;">Synopsis</h2>
                    </div>
                    <div class="card-body">
                        <p>In a tale spanning centuries, destiny weaves an intricate web. Dej and Karaket, bound
                            together
                            even in death during the Ayutthaya era, find themselves reborn in the early Rattanakosin
                            period.
                            But only one of them still clings to the idea of 'destiny.' Bhop, a charming chief engineer,
                            has
                            long dreamt of a mysterious lady, his soulmate, believing in the power of fate. When he
                            encounters Gaysorn, her striking resemblance to the woman of his dreams sets him on a quest
                            to
                            win her heart.</p>

                        <p>But Gaysorn, a free spirit, doesn't believe in destiny. Her affections lie elsewhere, with
                            Mathus, a Thai-Western man whose cryptic messages in an ancient journal echo those of Lady
                            Karaket. Is Mathus a time traveler from the future? As their intertwined destinies collide,
                            a
                            historical upheaval looms, threatening to reshape history. </p>

                        <p>The question remains: where will destiny ultimately lead them?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="container scaled-container-palevioletred fade-in">
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/ShD0CvB9kWM?autoplay=1&mute=1" frameborder="0"
                allowfullscreen></iframe>
            <div class="play-button"></div>
        </div>
    </div>

    <br>
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
