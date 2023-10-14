<div class="container-fluid bg-dark">
  <div class="row p-3 m-3">
    <div class="col-2">
      <p class="text-center h6 text-white">HTMX Footer</p>
    </div>
    <div class="col-8"></div>
    <div class="col-2">
      <div hx-get="/data/datetime.php" hx-trigger="every 2s, load"></div>
    </div>
  </div>
</div>
</body>

</html>