<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: black;
            color: palevioletred;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: palevioletred;
        }

        .navbar a {
            color: white;
        }

        .navbar-toggler-icon {
            background-color: white;
        }

        .header {
            background-color: palevioletred;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .form-control[type="search"] {
            background-color: white;
        }

        .btn-outline-success {
            color: gray;
            background-color: white;
            border-color: white;
        }

        .btn-outline-success:hover {
            background-color: greenyellow;
            border-color: greenyellow;
        }

        /* Add custom class to scale down content within the container */
        .scaled-container {
            background-color: palevioletred;
            border-radius: 15px;
            padding: 20px;
            color: white;
            font-size: 90%;
            /* Reduce font size */
        }

        .primary-subtle {
            background-color: black;
            color: palevioletred;
            border: 1px solid palevioletred;
        }

        .secondary-subtle {
            background-color: grey;
            color: black;
            border: 1px solid grey;
        }

        a {
            color: palevioletred;
        }

        .form-control,
        .form-label {
            background-color: transparent;
            border-color: palevioletred;
            color: palevioletred;
            font-size: 80%;
            /* Reduce font size */
        }

        .table {
            background-color: transparent;
        }

        th,
        td {
            padding: 6px;
            /* Reduce padding */
        }

        .table td {
            color: palevioletred;
        }

        .footer {
            background-color: palevioletred;
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 80%;
            /* Reduce font size */
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio (9 / 16 * 100%) */
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
            background-color: rgb(67, 105, 158);
            color: white;
        }

        .card-body {}
    </style>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg">
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
                                <li><a class="dropdown-item" href="#">Social Media</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/contactus">Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <br>
    <div class="container mt-4 scaled-container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="assets/lovedestinyposter.jpg" alt="lovedestinyposter"
                        style="max-width: 88%; height: auto;">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-4 border-secondary">
                    <div class="card-header card-header-indigo text-white">
                        <h2 class="card-title">Love Destiny: The Movie</h2>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>RELEASE DATE</td>
                                <td>: 6 OCTOBER 2022</td>
                            </tr>
                            {{-- <tr>
                            <td>LANGUAGE</td>
                            <td>: Thai</td>
                        </tr> --}}
                            <tr>
                                <td>GENRE</td>
                                <td>: ROMANCE, COMEDY</td>
                            </tr>
                            {{-- <tr>
                            <td>RUNNING TIME</td>
                            <td>: 166 minutes</td>
                        </tr> --}}
                            <tr>
                                <td>DIRECTOR</td>
                                <td>: ADISORN TRESIRIKASEM</td>
                            </tr>
                            <tr>
                                <td>CAST</td>
                                <td>: THANAVAT VATTHANAPUTI, RANEE CAMPEN, PARIS INTARAKOMALYASUT</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card mb-4 border-secondary">
                    <div class="card-header card-header-indigo text-white">
                        <h2 class="card-title">Synopsis</h2>
                    </div>
                    <br>
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
    <div class="container scaled-container">
        <div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/MXTVYeg1D5s" frameborder="10" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="footer">
        <p>&copy; 2023 Love Destiny: The Movie</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
