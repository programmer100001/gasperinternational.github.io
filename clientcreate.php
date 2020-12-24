<?php
  include('clientadd.php')
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <a class="navbar-brand" href="clientindex.php">Add Vaccant Rooms</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
      </div>
    </nav>


    <!--   $county = $_POST['county'];
    $sub_county = $_POST['sub_county'];
    $location = $_POST['location'];
    $street = $_POST['street'];
    $house_type = $_POST['house_type'];
    $price = $_POST['price'];
    $rooms_no = $_POST['rooms_no'];
    $availability = $_POST['availability']-->

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">Create</div>
              <div class="card-body">
                <form class="" action="clientadd.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="county">county</label>
                      <input type="text"  class="form-control" name="county"  placeholder="Enter Name" value="">
                    </div>
                    <div class="form-group">
                      <label for="sub_county">sub_county </label>
                      <input type="text" class="form-control" name="sub_county" placeholder="Enter Mobile Number" value="">
                    </div>
                    <div class="form-group">
                      <label for="location">location</label>
                      <input type="text" class="form-control" name="location" placeholder="Enter Email" value="">
                    </div>
                    <div class="form-group">
                      <label for="street">street</label>
                      <input type="text" class="form-control" name="street" placeholder="Enter Email" value="">
                    </div>
                    <div class="form-group">
                      <label for="house_type">house_type</label>
                      <input type="text" class="form-control" name="house_type" placeholder="Enter Email" value="">
                    </div>
                    <div class="form-group">
                      <label for="price">price</label>
                      <input type="text" class="form-control" name="price" placeholder="Enter Email" value="">
                    </div>
                    <div class="form-group">
                      <label for="rooms_no">rooms_no</label>
                      <input type="text" class="form-control" name="rooms_no" placeholder="Enter Email" value="">
                    </div>
                    <div class="form-group">
                      <label for="availability">availability</label>
                      <input type="text" class="form-control" name="availability" placeholder="Enter Email" value="">
                    </div>
                    <div class="form-group">
                      <label for="image">Choose Image</label>
                      <input type="file" class="form-control" name="image" value="">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  </body>
</html>
