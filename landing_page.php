<!DOCTYPE html>
<html>
  <head>
    <!-- Concrete5 Mini-Header -->
    <?= Loader::element('header_required'); ?>
    <!-- Mobile Max Size -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- My Styles -->
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/dest/css/style.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

  </head>
  <body>
  <!-- Front Page Only -->
  <div class="front-page-overlay"></div>


  <div class="front-page-wrap">




    <div class="block">
      <?
        $a = new Area('Section_1');
        $a->display($c);
      ?>
    </div>

    <div class="block">
      <?
        $a = new Area('Section_2');
        $a->display($c);
      ?>
    </div>


    <div class="xylophone-wrap">
      <div class="v-line x-line1"></div><div class="v-line x-line2"></div>

      <ul class="xylophone">
        <div class="peg-aligner">
          <div class="xylophone-peg peg1"></div>
          <div class="xylophone-peg peg2"></div>
          <li class="peg-li1">
            <a href="http://localhost:8888/CandyMountainMusicV2/index.php/home">Home</a>
          </li>
        </div>

        <div class="peg-aligner">
          <div class="xylophone-peg peg3"></div>
          <div class="xylophone-peg peg4"></div>
          <li class="peg-li2">
            <a href="http://localhost:8888/CandyMountainMusicV2/index.php/classes">Classes</a>
          </li>
        </div>

        <div class="peg-aligner">
          <div class="xylophone-peg peg5"></div>
          <div class="xylophone-peg peg6"></div>
          <li class="peg-li3">
            <a href="http://localhost:8888/CandyMountainMusicV2/index.php/special-events">Special Events</a> <!-- Parties/<br> -->
          </li>
        </div>

        <div class="peg-aligner">
          <div class="xylophone-peg peg7"></div>
          <div class="xylophone-peg peg8"></div>
          <li class="peg-li4">
            <a href="http://localhost:8888/CandyMountainMusicV2/index.php/blog">Blog</a>
          </li>
        </div>

      </ul>
    </div>


  </div>


  <?= Loader::element('footer_required'); ?>
  </body>
</html>
