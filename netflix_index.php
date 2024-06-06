<?php
    //when ever we do somthing with session we have to session_start() function.
    session_start();
    //now chaeck is the session with array_key "user" is not set then the user is not loged in,
    if(!isset($_SESSION["user"])) {
        //if "user" is not loged in then we will direct into the "login.php" page.
        //the header() function is used to redirect to new web page "login.php" page.
        //argument should be ("Location : login.php").
        header("Location: netflix_login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
        <script src="https://kit.fontawesome.com/58b4975968.js" crossorigin="anonymous"></script>
        <title>Netflix index Page</title>
    </head>
    <body>
        <div class="index-bg-cont">
            <nav class="menu-card pl-5 pr-5 pt-3">
                <img src="netflix_Logo.jpg" alt="#" class="logo">
                <button class="logout-but">
                    <a href="netflix_logout.php">Logout</a>
                </button>
            </nav>
            <div class="banner-card" id="netflix-card">
                <h1 class="head">Unlimited films, TV<br>programes and<br> more</h1>
                <p class="para">Watch anywhere, cancel at any time</p>
                <p class="para">Ready to watch? Enter you email to create or restore your membership.</p>
                <form class="search-card">
                    <input type="text" class="in" placeholder="Email address" required="">
                    <input type="submit" class="in in-but">
                </form>
            </div>
        </div>
    </body>
</html>