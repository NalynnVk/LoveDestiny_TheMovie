<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Character</title>
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

        body {
            background-image: url('assets/wallpaper-gold.jpg');
            background-size: cover;
            background-position: right center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
            font-family: 'Cinzel', cursive;
            font-size: 17px;
        }


        h3 {
            font-weight: bold;
            font-family: 'Open Sans', sans-serif;
            font-size: 25px;
        }

        p {
            font-family: 'Times New Roman', cursive;
        }

        .navbar {
            background-color: rgb(226, 97, 125);
        }

        .product {
            background-color: black;
            color: white;
            margin: 10px;
            padding: 05px;
            text-align: center;
            border-radius: 20px;
            width: 25.7%;
        }

        .your-text-element {
            padding: 20px;
            text-align: justify;
        }

        .product img {
            width: 90%;
            height: auto;
            border-radius: 15px;
        }

        .footer {
            background-color: rgb(226, 97, 125);
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 100%;
            font-family: 'Cinzel', cursive;
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
    <br><br>
    <br><br>
    <div class="container fade-in">
        {{-- <h1 class="text-center my-4">Love Destiny: The Movie Character</h1>
        <br><br> --}}
        <div class="row justify-content-center">
            <div class="col-md-4 product">
                <br>
                <img src="assets/Phop.jpg">
                <br><br>
                <h3>'Phop' portrayed by Pope Thanavat Vatthanaputi</h3>
                <br>
                <div class="your-text-element">
                    <p>A high-ranking official in the Department of Treasury, akin to a modern-day engineer. He holds a
                        prestigious position but refuses to leave his comfort zone, as he is unwavering in his
                        commitment to
                        the woman he has dreamt of for the past 10 years. However, one day, he encounters her in the
                        flesh,
                        much like a Greek god or goddess. But she sees him as a "smiley old-fashioned guy". This leads
                        Phop
                        to
                        seek a way to prove that they are meant to be together.
                    </p>
                </div>
                <!-- <p><strong>Price: RM350.00</strong></p> -->
            </div>

            <!-- Product 2: Tires -->
            <div class="col-md-4 product">
                <br>
                <img src="assets/Kesorn.jpg">
                <br><br>
                <h3>'Kasorn' portrayed by Bella Ranee Campen</h3>
                <br>
                <div class="your-text-element">

                    <p>The eldest daughter in the Department of Police. She isn't skilled in household chores but is
                        eager
                        to learn. Her ability to speak ancient languages sets her apart, thanks to her studies with the
                        royal family. She is a forward-thinking woman who doesn't believe in unproven matters until she
                        meets Phop, a young man who claims they've been destined for each other since a previous
                        lifetime,
                        supported by his study of ancient Ayutthaya records that discuss time travel. This piques her
                        interest in proving the truth of this matter.
                    </p>
                </div>
                <!-- <p><strong>Price: $19.99</strong></p> -->
            </div>

            <!-- Product 3: ContiTech -->
            <div class="col-md-4 product">
                <br>
                <img src="assets/Mathus.jpg">
                <br><br>
                <h3>'Mathus' played by Ice Paris Intarakomalyasut</h3>
                <br>
                <div class="your-text-element">

                    <p>A young adult who had to fend for himself from a young age, as his parents and relatives had all
                        left
                        this world. He transformed himself into an "online merchant" to make a living. One day, fate
                        leads
                        him to time-travel back to the early days of King Rama I's reign. Despite his unsuccessful
                        attempts
                        to find a way back home, he changes his mindset and tries to survive in this era by becoming a
                        merchant in the first department store in Thailand.
                    </p>
                </div>
                <!-- <p><strong>Price: $129.99</strong></p> -->
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <!-- Product 4: Electric_Cars -->
            <div class="col-md-4 product">
                <br>
                <img src="assets/Nang Aew.jpg">
                <br><br>
                <h3>'Pi Phee' played by Pookie Paweenuch Phaeng Nakhon</h3>
                <br>
                <div class="your-text-element">

                    <p>Pi Phee is Kasorn's dedicated sibling or simply "slave". Pi Phee's role is to accompany Gesorn
                        everywhere, whether
                        it's for studying, traveling, or handling any troublesome matters. He is always ready to be her
                        sidekick.
                    </p>
                </div>
                <!-- <p><strong>Price: Starting at $59.99</strong></p> -->
            </div>

            <!-- Product 5: Add your fifth product here -->
            <div class="col-md-4 product">
                <br>
                <img src="assets/Luang.jpg">
                <br><br>
                <h3>'Sunthorn Phu' played by Bobby Nimit Luksameepong</h3>
                <br>
                <div class="your-text-element">

                    <p>He is a prominent poet of the era and serves as Phop's advisor in matters of the heart. His
                        ability
                        to craft poetic verses sharpens his perspective on matters of love, especially when Phop faces
                        relationship problems. Suntharaphu is the one Phop turns to, particularly when dealing with the
                        intricacies of unrequited love, requesting poetic verses to soothe his heart.
                    </p>
                </div>
                <!-- <p><strong>Price: Your Price</strong></p> -->
            </div>

            <!-- Product 6: Add your sixth product here -->
            <div class="col-md-4 product">
                <br>
                <img src="assets/Prince.jpg">
                <br><br>
                <h3>'His Royal Highness' played by Nonkul Chanon Santinatornkul</h3>
                <br>
                <div class="your-text-element">

                    <p>An influential senior nobleman in the Chao Phraya River basin. He is also the owner of a theater
                        and
                        a troupe of outdoor theater that the villagers love. Despite his young age, he is hot-tempered
                        and
                        impulsive, which makes people fear and respect him.
                    </p>
                </div>
                <!-- <p><strong>Price: Your Price</strong></p> -->
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
