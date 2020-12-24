<?php
include_once 'clientdatabase.php';
if(isset($_POST['save']))
{	 
	 $county = $_POST['county'];
	 $sub_county = $_POST['sub_county'];
	 $location = $_POST['location'];
	 $house_type = $_POST['house_type'];
	 $rooms_no = $_POST['rooms_no'];
	 $availability = $_POST['availability'];

	 $sql = "INSERT INTO landrod (county,sub_county,location,house_type,rooms_no,availability)
	 VALUES ('$county','$sub_county','$location','$house_type','$rooms_no','$availability')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>