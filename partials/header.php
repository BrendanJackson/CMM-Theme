<!DOCTYPE html>
<html>
<head>
  <!-- Concrete5 Mini-Header -->
  <?= Loader::element('header_required'); ?>
  <!-- Mobile Max Size -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <!-- My Styles -->
  <link rel="stylesheet" href="<?=$view->getThemePath()?>/dest/css/style.min.css">
  <script type="text/javascript" src="<?=$view->getThemePath()?>/src/assets/js/main.js"></script>


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">


</head>
<body>
 <!-- !TODO: Should this be class be on the body? -->
<div class="<?= $c->getPageWrapperClass(); ?>" > <!-- Concrete5 Side Bars -->


  <header>

      <div class="header-image"></div>
      <nav class="">
        <div class="logo">
          <a href="/">
            <img src="<?=$view->getThemePath()?>/dest/images/logo-stripped.png" alt="Candy Mountain Music Logo">
            <h5>Candy Mountain Music</h5>
          </a>
        </div>
        <div class="xylophone-wrap ">
          <div class="v-line x-line1"></div><div class="v-line x-line2"></div>

          <ul class="xylophone">
            <div class="peg-aligner">
              <div class="xylophone-peg peg1"></div>
              <div class="xylophone-peg peg2"></div>
              <li class="peg-li1">
                <a href="<?=$this->url('home');?>">Home</a>
              </li>
            </div>

            <div class="peg-aligner">
              <div class="xylophone-peg peg3"></div>
              <div class="xylophone-peg peg4"></div>
              <li class="peg-li2">
                <a href="<?=$this->url('classes');?>">Classes</a>
              </li>
            </div>

            <div class="peg-aligner">
              <div class="xylophone-peg peg5"></div>
              <div class="xylophone-peg peg6"></div>
              <li class="peg-li3">
                <a href="<?=$this->url('special-events');?>">Special Events</a> <!-- Parties/<br> -->
              </li>
            </div>

            <div class="peg-aligner">
              <div class="xylophone-peg peg7"></div>
              <div class="xylophone-peg peg8"></div>
              <li class="peg-li4">
                <a href="<?=$this->url('blog');?>">Blog</a>
              </li>
            </div>

          </ul>
        </div>
      </nav>

  </header>

  <div class="content-wrap">
