<?php
/****************************************************************************
 * \file src/navigation.php
 *
 * This file provides the default navigation bar for the base website.
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
?>
<nav id="navigation" class="navbar navbar-default" role="navigation">
  <div class="container"><div class="row">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1 id="logo" role="heading">
        <a class="navbar-brand" href="/" tabindex="1" role="link">rodusek.com ></a>
      </h1>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/blog" tabindex="2" role="link">
            <span class="glyphicon glyphicon-comment"></span> Blog
          </a>
        </li>
        <li>
          <a href="/projects" tabindex="3" role="link">
            <span class="glyphicon glyphicon-folder-open"></span> My Projects
          </a>
        </li>
        <li>
          <a href="/support" tabindex="4" role="link">
            <span class="glyphicon glyphicon-heart"></span> Support My Work
          </a>
        </li>
        <li>
          <a href="/#about" tabindex="5" role="link">
            <span class="glyphicon glyphicon-user"></span> About Me
          </a>
        </li>
      </ul>
    </div>
  </div></div>
</nav>