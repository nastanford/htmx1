<div id="form" class="container-fluid mt-4">
  <div class="row">
    <div class="col-4 offset-4">
      <div hx-target="#form" hx-swap="outerHTML">
        <div class="p-2"><label class="fw-bold">First Name</label>:</div>
        <div class="p-2">Jim</div>
        <div class="p-2"><label class="fw-bold">Last Name</label>:</div>
        <div class="p-2">Sample</div>
        <div class="p-2"><label class="fw-bold">Email</label>:</div>
        <d iv class="p-2">jsample@test.com</d><br>
        <button hx-get="/data/contactform.php" class="btn btn-primary mt-3">
          Edit
        </button>
      </div>
    </div>
  </div>
</div>