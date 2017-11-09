<?php
    session_start();
?>

<!DOCTYPE html>

<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width", initial-scale=1.0>
      <link rel="stylesheet" href="styles/main.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <title>LifeStyle FCT</title>
      <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
  </head>
  <!-- Start of Async Drift Code -->
  <script src="scripts/drift.js"></script>

  <body>
  <div class="grid">
    <!--
    --- Header -------------------------------------------------------------------------------------------------------------
    -->
      <div class="logo">
          <a class="logo_Link" href="#">
            <img src="images/logo.png" alt="LifeStyleFCT">
          </a>
      </div>

    <!--
    --- Menu ---------------------------------------------------------------------------------------------------------------
    -->
      <div class="menu">
          <nav class="menu_options" role="navigation">
              <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">History</a></li>
                  <li><a href="#">Recepies</a></li>
                  <li><a href="#">Contacts</a></li>
              </ul>
          </nav>
      </div>

      <div class="login">
        <a>Logout</a>
      </div>

      <div class="main"></div>
        <!-- <script src="scripts/pie.js"></script> -->

      <aside class="social">
          <h2>Your Friends</h2>
      </aside>

      <footer class="about">
          <h2>About Us</h2>
      </footer>
    </div>
  </body>
</html>
