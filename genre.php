<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadReactReview</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="genrestyle.css">

    <style>
        .flex-container {
            display: flex;
            justify-content: space-around;
        }
    </style>
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />

</head>



<body>
    <header class="headernav">
        <h1 class="logo"><img src="Illustration\Logo\logo.png" alt="Authors" height="110" width="150" style="padding-left: 40px;"></h1>

        <ul class="main-nav">
            <li><a href="index.php"> Home</a></li>
            <li><a href="genre.php">Genre</a></li>
           
            <li><a href="myshelf.php">My shelf</a></li>
            <li><a href="Aboutus.php">About Us</a></li>
            <li><a href="register.php">Login/Sign-Up</a></li>
            <li>
                <div class="cntr">
                    <div class="cntr-innr">
                        <label class="searchinput" for="inpt_search">
                            <input id="inpt_search" type="text" />
                        </label>
                    </div>
                </div>
            </li>
        </ul>
    </header>

    <div class="flex-container">
        <div>
            <div class="flip-card-container" style="--hue: 220">
                <div class="flip-card">

                    <div class="card-front">
                        <figure>
                            <div class="img-bg"></div>
                            <img src="Photo assets\Genre page\a.jpg" alt="Authors">
                            <figcaption>Authors</figcaption>
                        </figure>


                    </div>



                    <div class="card-back">
                        <figure>
                            <div class="img-bg"></div>
                            <img src="Photo assets\Genre page\a.jpg" alt="Brohm Lake">
                        </figure>

                        <button onclick="window.location.href='authorseg.php';">Authors</button>

                        <div class="design-container">
                            <span class="design design--1"></span>
                            <span class="design design--2"></span>
                            <span class="design design--3"></span>
                            <span class="design design--4"></span>
                            <span class="design design--5"></span>
                            <span class="design design--6"></span>
                            <span class="design design--7"></span>
                            <span class="design design--8"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div>
            <div class="flip-card-container" style="--hue: 170">
                <div class="flip-card">

                    <div class="card-front">
                        <figure>
                            <div class="img-bg"></div>
                            <img src="Photo assets\Genre page\b.jpg" alt="Image 2">
                            <figcaption> Genres </figcaption>
                        </figure>


                    </div>

                    <div class="card-back">
                        <figure>
                            <div class="img-bg"></div>
                            <img src="Photo assets\Genre page\b.jpg" alt="image-2">
                        </figure>

                        <button onclick="window.location.href='Genreseg.php';"> Genres</button>

                        <div class="design-container">
                            <span class="design design--1"></span>
                            <span class="design design--2"></span>
                            <span class="design design--3"></span>
                            <span class="design design--4"></span>
                            <span class="design design--5"></span>
                            <span class="design design--6"></span>
                            <span class="design design--7"></span>
                            <span class="design design--8"></span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div>
            <div class="flip-card-container" style="--hue: 350">
                <div class="flip-card">

                    <div class="card-front">
                        <figure>
                            <div class="img-bg"></div>
                            <img src="Photo assets\Genre page\c.jpg" alt="img 3">
                            <figcaption> Difficulty </figcaption>
                        </figure>


                    </div>

                    <div class="card-back">

                        <figure>
                            <div class="img-bg"></div>
                            <img src="Photo assets\Genre page\c.jpg" alt="Brohm Lake">
                        </figure>

                        <button onclick="window.location.href='Difficulty.php';"> Difficulty </button>
                        <div class="design-container">
                            <span class="design design--1"></span>
                            <span class="design design--2"></span>
                            <span class="design design--3"></span>
                            <span class="design design--4"></span>
                            <span class="design design--5"></span>
                            <span class="design design--6"></span>
                            <span class="design design--7"></span>
                            <span class="design design--8"></span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


</body>

</html>