<div id="form" class="container-fluid mt-4">
  <div class="row">
    <div class="col-4 offset-4 border border-1 border-primary rounded-3 p-3">
      <div hx-target="#form" hx-swap="outerHTML">
        <div class=""><label class="fw-bold">First Name</label>:</div>
        <div class="p-2 m-1">Jim</div>
        <div class="p-2 m-1"><label class="fw-bold">Last Name</label>:</div>
        <div class="p-2 m-1">Sample</div>
        <div class="p-2 m-1"><label class="fw-bold">Email</label>:</div>
        <d iv class="p-2 m-2">jsample@test.com</d><br>
        <button hx-get="/data/contactform.php" class="btn btn-secondary text-white mt-3">
          Edit
        </button>
      </div>
    </div>
  </div>
</div>