<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ReadReactReview </title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="review.css">
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
</head>

<body>
    <header class="headernav">
        <h1 class="logo">
            <img src="Illustration\Logo\logo.png" alt="Logo" height="110" width="150" style="padding-left: 40px;"></h1>

            <ul class="main-nav">
            <li><a href="index.php"> Home</a></li>
            <li><a href="genre.php">Genre</a></li>
            
            <li><a href="myshelf.php">My shelf</a></li>
            <li><a href="Aboutus.php">About Us</a></li>
            <li><a href="loginsignup2.php">Login/Sign-Up</a></li>
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


    <div class="reviewcont">

        <div id="form-main">
            <div id="form-div">
                <form class="form" id="form1">
                    <p style="padding-left:13px;">
                        Book:
                    </p>

                    <p class="name">
                        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Book Name" id="name" />
                    </p>

                    <p style="padding-left:13px;">
                        Review:
                    </p>

                    <p class="text">
                        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Review"></textarea>
                    </p>

                    <p style="padding-left:13px;">
                        Star Rating:
                    </p>

                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>

                    <div class="submit">
                        <input type="submit" value="SEND" id="button-blue" />
                        <div class="ease"></div>
                    </div>
                </form>
            </div>
        </div>







</html>