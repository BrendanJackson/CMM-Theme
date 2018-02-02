<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('partials/header.php');
?>
<div class="sidebar-wrap">

  <div class="col-sidebar left-sidebar">
    <?php
      $a = new Area('Sidebar1');
      $a->display($c);

      $a = new Area('Sidebar2');
      $a->display($c);

      $a = new Area('Sidebar3');
      $a->display($c);

      $a = new Area('Sidebar Footer');
      $a->display($c);
    ?>
  </div>

  <div class="col-content">
      <?php
      $a = new Area('Main');
      // $a->setAreaGridMaximumColumns(12);
      $a->display($c);
      ?>
  </div>


</div>
<?php
$this->inc('partials/footer.php');
