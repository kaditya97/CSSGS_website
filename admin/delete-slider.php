<?php
	include'../connect.php';
  $id=$_GET['id'];
  
  $image = "SELECT * FROM slider WHERE id = '$id'";
  $query = mysqli_query($conn, $image);
  $after = mysqli_fetch_assoc($query);

  unlink('../uploads/slider/'.$after['file']);

	$result = $db->prepare("DELETE FROM slider WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-slider.php?success=true");
        }else{
            header("location:all-slider.php?failed=true");
        } 
		
?>