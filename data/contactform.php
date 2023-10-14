<div id="form" class="container-fluid mt-4">
  <div class="row">
    <div class="col-4 offset-4">

      <form hx-put="/data/clicktoedit.php" hx-target="#form" hx-swap="outerHTML">
        <div class="mb-3">
          <label for="exampleText" class="form-label fw-bold">First Name</label>
          <input type="text" value="Jim" class="form-control" id="exampleText" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleText" class="form-label fw-bold">Last Name</label>
          <input type="text" value="Sample" class="form-control" id="exampleText" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
          <input type="email" value="jsample@test.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-primary" hx-get="/data/clicktoedit.php">Cancel</button>
      </form>




    </div>
  </div>
</div>