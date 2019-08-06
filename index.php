<?php
/****************************************************************************
 * \file index.php
 *
 * The entry for the system.
 ****************************************************************************/

/*
  The MIT License (MIT)

  Copyright (c) 2019 Matthew Rodusek All rights reserved.

  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files (the "Software"), to deal
  in the Software without restriction, including without limitation the rights
  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
  copies of the Software, and to permit persons to whom the Software is
  furnished to do so, subject to the following conditions:

  The above copyright notice and this permission notice shall be included in
  all copies or substantial portions of the Software.

  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
  SOFTWARE.
*/
include 'src/functions.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Matthew Rodusek</title>
  <meta property="og:title" content="Matthew Rodusek" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php current_url() ?>" />
  <meta property="og:image" content="src/display.png" />
  <meta property="og:locale" content="en_CA" />
  <meta property="og:locale:alternate" content="en_US" />
  <meta property="og:site_name" content="rodusek.com" />
  <meta name="description" content="" />
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" href="img/favicon.png" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" integrity="sha256-LxKiHTQko0DUCUSgrIK23SYMymvfuj8uxXmblBvVWm0=" crossorigin="anonymous" />
  <link href="css/main.css" rel="stylesheet" />

  <!-- Support HTML5 in older browsers -->
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha256-jHqcBHBWM2erADB7T7m7MFLQon8LlOY7ncC7jDaUScs=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js" integrity="sha256-g2lnLPqUkGXj7GDW+Zy47+O2ph+Ur1cmtdklVqkj+kg=" crossorigin="anonymous"></script>
  <![endif]-->
</head>
<body>
  <?php include 'src/navigation.php' ?>
  <?php include 'src/header.php' ?>

  <main role="main">
    <section id="about">
      <div class="container"><div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h2 role="heading">A little about me</h2>
          <p>Below are a few small points to get to know me better.</p>
        </div>
      </div></div>
    </section>

    <section id="cards">
      <div class="container"><div class="row centered">
        <div class="col-md-4">
          <div class="flip-card center-block" ontouchstart="this.classList.toggle('hover');">
            <div id="cpp-card" class="flip-card-inner">
              <div class="flip-card-front"></div>
              <div class="flip-card-back"></div>
            </div>
          </div>
          <div class="center-block">
            <h4 role="heading">C++ Expert</h4>
            <p>I am a C++ developer and template metaprogrammer. I have over
              a decade of experience working from C++98 up to the new
              <span class="definition" title="C++2a is the name for the working draft of what should become the C++20 standard" role="definition">C++2a</span>.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="flip-card center-block" ontouchstart="this.classList.toggle('hover');">
            <div id="osi-card" class="flip-card-inner">
              <div class="flip-card-front"></div>
              <div class="flip-card-back"></div>
            </div>
          </div>

          <h4 role="heading">Open-Source Contributor</h4>
          <p>I like to contribute to the community by releasing all of my projects
            under an <span class="definition" title="Open-Source Initiative" role="definition">OSI</span>-approved
            license.
          </p>
        </div>

        <div class="col-md-4">
          <div class="flip-card center-block" ontouchstart="this.classList.toggle('hover');">
            <div id="card2" class="flip-card-inner">
              <div class="flip-card-front"></div>
              <div class="flip-card-back"></div>
            </div>
          </div>

          <h4 role="heading">Multi-Paradigm</h4>
          <p>Even when working in procedural/<span class="definition" title="Object-Oriented" role="definition">OO</span> languages,
             my APIs often include functional programming and <span class="definition" title="Data-oriented design">DOD</span> principles
             for better composability, readability, and intuitiveness.
          </p>
        </div>

      </div><hr/></div>
    </section>
  </main>


  <?php include 'src/footer.php' ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
  <script src="/js/smoothscroll.js"></script>
</body>
</html>