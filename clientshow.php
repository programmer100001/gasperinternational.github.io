<?php
  require_once('clientdb.php');
  $upload_dir = 'uploads/';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from clients where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>House decription</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  </head>
  <body>

      <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto"></ul>

          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row justify-content-center">
          <div class="card">
            <div class="card-header">
              Details
            </div>
            <form class="" action="add.php" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="row">
                <div class="col-md">
                    <img src="<?php echo $upload_dir.$row['image'] ?>" height="500">
                </div>
                <div class="col-md">
                    <h5 class="form-control" >

                      <span><?php echo $row['county'] ?></span>
                    </i></h5>
                    <h5 class="form-control">
                      <span><?php echo $row['price'] ?></span>
                    </i></h5>
                    <h5 class="form-control">
                      <span><?php echo $row['house_type'] ?></span>
                    </i></h5>

                       <div class="form-group">
                      <label for="id_no">id no</label>
                      <input type="input" class="form-control" name="availability" placeholder="Enter id no" value="">
                    </div>
                      <div class="form-group">
                      <label for="phone_no">Phone No</label>
                      <input type="input" class="form-control" name="availability" placeholder="Enter contact" value="">
                    </div>
                    
                    <br> <br>


                      <a class="btn btn-outline-danger" ><i class="fas fa-book-open"></i><span>Book Resevation</span></a><br><br>
                      </form>

                       <a href="clientregister.php"><i class="fa fa-sign-out-alt"></i><span>Back</span></a>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <script src="js/bootstrap.min.js" charset="utf-8"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
      <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable();
        } );
      </script>
    </body>
  </html>
