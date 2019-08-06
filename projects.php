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

  <title>Matthew Rodusek | Projects</title>
  <meta property="og:title" content="Matthew Rodusek" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php current_url() ?>" />
  <meta property="og:image" content="/src/display.png" />
  <meta property="og:locale" content="en_CA" />
  <meta property="og:locale:alternate" content="en_US" />
  <meta property="og:site_name" content="rodusek.com" />
  <meta name="description" content="" />
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" href="/img/favicon.png" />


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
    <section id="github-languages">
      <div class="container">

      <noscript>
          <div class="row">
            <div class="alert alert-warning" role="alert">
              <p><strong>Error:</strong> This page requires javascript to load Github details.
                Without javascript enabled, this page will fail to work properly.
              </p>
            </div>
          </div>
        </noscript>

        <div class="row centered">
          <div class="col-lg-8 col-lg-offset-2">
            <h2 role="heading">Project languages</h2>
            <p>I work in a lot of projects in my spare time. I like to experiment in
              different languages, but frequently work in C++. Check out the language
              breakdown generated from my public github repositories!
            </p>
          </div>

          <div id="error-log">
          </div>

          <canvas id="language-chart"></canvas>
        </div>
        <hr/>
      </div>
    </section>
  </main>


  <?php include 'src/footer.php' ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" integrity="sha256-Uv9BNBucvCPipKQ2NS9wYpJmi8DTOEfTA/nH2aoJALw=" crossorigin="anonymous"></script>
  <script src="/js/githubstats.js"></script>
</body>
</html>