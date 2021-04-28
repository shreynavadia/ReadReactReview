<?php

require_once ("phpya1/component.php");
require_once ("phpya1/operation.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadReactReview</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="../../logo.ico" />

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesheet.css">

    <style>
    .button {
    background-color: black;
    color: white;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
    
    
    
    </style>
</head>
<body>

<main>

<header class="headernav">
        <h1 class="logo">
            <img src="logo.png" alt="Logo" height="110" width="150" style="padding-left: 40px;"></h1>

        <ul class="main-nav">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../../genre.php">Genre</a></li>
            <li><a href="../../Review.php">Review</a></li>
            <li><a href="../../myshelf.php">My Shelf</a></li>
            <li><a href="../../Aboutus.php">About Us</a></li>
            <li><a href="../../register.php">Login/Sign-Up</a></li>

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
<br> <br>

    <h1 style="text-align:center;"> A Court of Thorns and Roses -
                    <small>Sarah J. Maas</small> </h1>

<div class="cardimage" style="display:flex; align-items:center; padding: 100px; justify-content:space-around;">
            <div class="card__image-holder">
                <img class="card__image" src="https://m.media-amazon.com/images/I/51dw+3CdtBL.jpg" alt="wave" height="500"/>
            </div>

               <div class="card-description" style="padding-bottom: 100px; padding-left: 100px;" >
               From the author of Throne of Glass comes this equally intense and thrilling YA series, devised as a loose retelling of Beauty and the Beast. In the eponymous first installment, now a new adult favorite, a young human huntress named Feyre is captured and
                    forced to become the ward of a part-faerie, part-beast High Lord called Tamlin. Though cold to one another at first, Feyre’s irrepressible human spirit and curiosity soon endear her to Tamlin, and their lives intertwine as she learns
                    the ways of the fae. But this contentment is shattered when Feyre realizes the curse that hangs over Tamlin and his people… and finally understands that only she has the power to save them.
                    <br>
                    <br>
                    <br>
                   

                    <a href="https://www.amazon.in/s?k=A+Court+of+Thorns+and+Roses+by+Sarah+J.+Maas&i=stripbooks&ref=nb_sb_noss" class="button"> Buy Book</a>
                    <a href="#" class="button"> PDF</a>

                </div>
          

    </div>


    <div class="container text-center">
        <h1 class="py-4 text-light rounded" style="background-color:black;"> Write Your Review Here</h1>

        <div class="d-flex justify-content-center">


            <form action="" method="post" class="w-50">
                <div class="pt-2">
                    
                </div>

                <label for="lname"> Book Review  </label>
                <textarea rows="10" cols="50" name="book_name">
                </textarea>
<br>
<br>
  <label for="lname"> Your Name </label>
  <input type="text" id="lname" name="book_publisher" ><br><br>
  <label for="lname">Ratings </label>
  <input type="number" id="quantity" name="book_price" min="0" max="5" step="0.1" >

  <br> 
  <br>

  <h3 style=" color:black;" > Hit Refresh after posting the review! </h3>
  
  

               
                   
                </div>


                <div class="d-flex justify-content-center">


                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>

                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                       
                        
                        <?php deleteBtn();?>
                </div>
            </form>
        </div>

        <!-- Bootstrap table  -->
        <div class="d-flex table-data" >
            <table class="table table-striped table-dark" >
                <thead class="thead-dark">
                    <tr >
                       
                        <th>Book Review</th>
                        <th>Reviewer</th>
                        <th>Rating</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                
                <tbody id="tbody">
                   <?php


                   if(isset($_POST['read'])){
                       $result = getData();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>
<div class="overflow-auto">
                               <tr>
                                   

                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_name']; ?></td>

                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_publisher']; ?></td>

                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_price']; ?></td>
                                   
                                   <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                               </tr>
</div>
                   <?php
                           }

                       }
                   }


                   ?>
                </tbody>
            </table>
        </div>


    </div>
</main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="../crud/php/main.js"></script>
</body>
</html>