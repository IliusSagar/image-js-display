<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Display Js</title>

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  </head>
  <body>

<br><br><br>
    <div class="container">
        <div class="row">

          <center>  <h1 >Image Display Js</h1> </center>
            <br><br><br>

            <div class="col-md-4">
                <input class="form-control" type="file" id="file" onchange="readURL(this);">
                <img src="" id="one">
            </div>
            <div class="col-md-4">
                <input class="form-control" type="file" id="file" onchange="readURL2(this);">
                <img src="" id="two">
            </div>
            <div class="col-md-4">
                <input class="form-control" type="file" id="file" onchange="readURL3(this);">
                <img src="" id="three">
            </div>
            <div class="col-md-4">
                <input class="form-control" type="file" id="file" onchange="readURL4(this);">
                <img src="" id="four">
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function readURL(input){
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              $('#one')
              .attr('src', e.target.result)
              .width(80)
              .height(80);
            };
            reader.readAsDataURL(input.files[0]);
          }
        }
      </script>

<script type="text/javascript">
    function readURL2(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#two')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

<script type="text/javascript">
    function readURL3(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#three')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

<script type="text/javascript">
    function readURL4(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#four')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

  </body>
</html>
