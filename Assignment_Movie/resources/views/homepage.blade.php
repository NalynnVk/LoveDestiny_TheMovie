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
            /* Primary text color */
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: palevioletred;
            color: white;
            /* Navbar background color */
        }

        .header {
            background-color: palevioletred;
            /* Header background color */
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .footer {
            background-color: palevioletred;
            /* Footer background color */
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .primary-subtle {
            background-color: black;
            color: palevioletred;
            border: 1px solid palevioletred;
        }

        .secondary-subtle {
            background-color: grey;
            /* Secondary background color */
            color: black;
            border: 1px solid grey;
        }

        /* Override Bootstrap's default link color */
        a {
            color: inherit;
        }

        /* Remove background color from form elements and set transparent background for labels */
        .form-control,
        .form-label {
            background-color: transparent;
            border-color: palevioletred;
            color: palevioletred;
        }

        /* Add custom styles to the table */
        .table {
            background-color: transparent;
        }

        .table td {
            color: palevioletred;
        }
    </style>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <b><a class="navbar-brand" href="companyprofilepage">Love Destiny</a></b>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="productpage">Products</a>
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
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="assets/lovedestinyposter.jpg" alt="lovedestinyposter"
                        style="max-width: 97%; height: auto;">
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 primary-subtle rounded-3">
                    <h1>Love Destiny: The Movie</h1>
                    <br>
                    <table>
                        <tr>
                            <td>RELEASE DATE</td>
                            <td>: 6 Oct 2022</td>
                        </tr>
                        <tr>
                            <td>LANGUAGE</td>
                            <td>: Thai</td>
                        </tr>
                        <tr>
                            <td>GENRE</td>
                            <td>: Romance, Comedy</td>
                        </tr>
                        <tr>
                            <td>RUNNING TIME</td>
                            <td>: 166 minutes</td>
                        </tr>
                        <tr>
                            <td>DIRECTOR</td>
                            <td>: Adisorn Tresirikasem</td>
                        </tr>
                        <tr>
                            <td>CAST</td>
                            <td>: Thanavat Vatthanaputi, Ranee Campen, Paris Intarakomalyasut</td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="p-3 secondary-subtle rounded-3 mt-4">
                    <h2>Synopsis</h2>
                    <br>
                    <p>In a tale spanning centuries, destiny weaves an intricate web. Dej and Karaket, bound together
                        even in death during the Ayutthaya era, find themselves reborn in the early Rattanakosin period.
                        But only one of them still clings to the idea of 'destiny.' Bhop, a charming chief engineer, has
                        long dreamt of a mysterious lady, his soulmate, believing in the power of fate. When he
                        encounters Gaysorn, her striking resemblance to the woman of his dreams sets him on a quest to
                        win her heart.

                        But Gaysorn, a free spirit, doesn't believe in destiny. Her affections lie elsewhere, with
                        Mathus, a Thai-Western man whose cryptic messages in an ancient journal echo those of Lady
                        Karaket. Is Mathus a time traveler from the future? As their intertwined destinies collide, a
                        historical upheaval looms, threatening to reshape history. </p>

                    <p>The question remains: where will destiny ultimately lead them?</p>
                </div>
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
