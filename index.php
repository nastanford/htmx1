<?php include "header.php"; ?>
<?php include_once "navbar.php"; ?>
<div id="mainContent">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-5 bg-light text-center text-primary h4">
        Home Page
      </div>
    </div>
  </div>
</div>

<div hx-get="/data/datetime.php"
  hx-trigger="every 2s, load"></div>

<?php include_once "footer.php"; ?>