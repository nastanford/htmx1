<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-5 bg-light text-center text-primary h4">
      Mouse Hover<br>
    </div>
    <div>
      <div id="response-div"
        class="text-center mt-4">
        <div class="text-center">
          <button class="btn btn-secondary text-white mb-5"
            hx-post="/data/hoverdata.php"
            hx-target="#response-div"
            hx-trigger="mouseenter"
            hx-swap="innerhtml">
            Hover
          </button>
        </div>
      </div>
    </div>
  </div>
</div>