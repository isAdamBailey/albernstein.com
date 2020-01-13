<?php include 'helpers/format_helper.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="A clinical psychologist, author, speaker, columnist, and business consultant, Albert J. Bernstein, Ph. D. is well known for teaching people to confront difficult and frightening situations with wit, wisdom, grace, and liberal doses of humor.">
    <meta name="keywords" content="Albert Bernstein,Albert J. Bernstein, Ph. D.,author,Emotional Vampires at Work,Am I the Only Sane One Working Here?,How To Deal With Emotionally Explosive People,Dinosaur Brains,Emotional Vampires,Neanderthals at Work,Sacred Bull,clinical psychologist,speaker,columnist,business consultant">
    <title>Albert J. Bernstein, Ph. D.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="images/favicon.ico">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
      $(".loader").fadeOut("slow");
    })
   </script>

   <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-72928016-1', 'auto');
    ga('send', 'pageview');

  </script>

  </head>
  <body>
    <div class="loader"></div>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><strong>Albert J. Bernstein, PhD</strong></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="nav-item <?=echoActive("index")?>"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
            <li class="nav-item <?=echoActive("services")?>"><a href="services.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Services</a></li>
            <li class="nav-item <?=echoActive("books")?>"><a href="books.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Books</a></li>
            <li class="nav-item <?=echoActive("about")?>"><a href="about.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About</a></li>
            <li class="nav-item <?=echoActive("contact")?>"><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a></li>
          </ul>
        </div>
      </div>
    </div> <!-- navbar -->