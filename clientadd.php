<?php
  require_once('clientdb.php');
  $upload_dir = 'uploads/';

  if (isset($_POST['Submit'])) {

    $county = $_POST['county'];
    $sub_county = $_POST['sub_county'];
      $location = $_POST['location'];
      $street = $_POST['street'];
      $house_type = $_POST['house_type'];
      $price = $_POST['price'];
      $rooms_no = $_POST['rooms_no'];

    $availability = $_POST['availability'];

    $imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

    if(empty($county)){
			$errorMsg = 'Please input name';
		}elseif(empty($sub_county)){
			$errorMsg = 'Please input contact';
		}elseif(empty($location)){
			$errorMsg = 'Please input contact';
		}elseif(empty($street)){
			$errorMsg = 'Please input contact';
		}elseif(empty($house_type)){
			$errorMsg = 'Please input contact';
		}elseif(empty($price)){
			$errorMsg = 'Please input contact';
		}elseif(empty($rooms_no)){
			$errorMsg = 'Please input contact';
		}elseif(empty($availability)){
			$errorMsg = 'Please input email';
		}else{

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}


		if(!isset($errorMsg)){
				$sql = "insert into clients(county, sub_county, location,street,house_type,price,rooms_no,availability,image)
					values('".$county."', '".$sub_county."','".$location."','".$street."','".$house_type."','".$price."','".$rooms_no."', '".$availability."', '".$userPic."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: clientindex.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
