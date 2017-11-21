<!DOCTYPE html>

<html lang="en"> 
<head>
   <link href="http://vjs.zencdn.net/6.2.0/video-js.css" rel="stylesheet">
   <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.0.4/howler.min.js"></script>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Scan House Service</title>
   <meta name="description" content="This template can be used for Scan House">  
   <meta name="Youssef" content="Check accommodation availibility, template Scan house">

   <!-- mobile specific metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="viewport" content="width=320">
   <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="css/simple-grid.css">
<!--     <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css"> 

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
 
  

   <!-- favicons
   ================================================== -->
   <link rel="icon" type="image/png" src="/images/favicon.png">



</head>

<body>

   <!-- header 
   ================================================== -->

      <div class="menu">

        <div class="logo-container">
         <img src="images/logo-test.png" width="157" height="0" alt="Globuzzer" class="logo">
        </div>
        

        <div class="nav-container">
          <ul class="my-list">

          <li class="list-item"><a href="index">Home</a></li>
          <li class="list-item"><a href="about">About</a></li>
          <li class="list-item"><a href="contact">Contact</a></li>
          <li id="singIn" class="list-item"><a href="#">Sign in</a></li>
          <li id="singInM" class="list-item"><a href="#">Sign in</a></li>
          <li id="singUpM" class="list-item"><a href="#">Sign up</a></li>

          </ul>
        </div>
        <div class="menu-toggle">
           <a href="#" style="padding:0"><i class="fa fa-bars fa-2x"  aria-hidden="true"></i></a>
        </div>
        

        <div id="myModal" class="modal">

       <!-- Modal content -->
          <div class="modal-content">
            
            <div id="part1" class="modal-part1">
              <h2>Have you registred?</h2>
              <div class="signIn">
                <input type="email" name="emailid" placeholder="E-mail">
                <input type="password" name="passwordid" placeholder="Password">
                <a href="">Forgot password?</a><br>
                <a class="primary-button" href="#">Sign in</a><br>
                <a id="closeM" class="primary-button" href="#">Cancel</a>
              </div>
            </div>

            <div id="part2" class="modal-part2">
              <h2>Not a member?</h2>
              <div>
                <div class="signIn-part">
                  <input type="email" name="emailid" placeholder="E-mail">
                  <input type="password" name="passwordid" placeholder="Password">
                </div>
                <div class="signIn-part">
                  <input type="text" name="firstname" placeholder="First Name">
                  <input type="text" name="lastname" placeholder="Last Name">
                </div>
              </div>
              <div class="buttons-side">
                <a class="modal-prm-btn " href="">Sign In</a>
                <a class="modal-prm-btn socialF" href="">Log in with <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a class="modal-prm-btn socialG" id="#signUpButton" href="">Log in with <i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
              </div>
              <div><a class="x-button" href="index">&#10006;</a></div>
            </div>
            
            </div>
             
      </div>
      
         
   </div> <!-- /header --> 
    

<script>
    var signUp = document.getElementById("#signUpButton");
    signUp.onclick = function() {
    console.log("Sign Up");
    alert("Hello");
  }
</script>