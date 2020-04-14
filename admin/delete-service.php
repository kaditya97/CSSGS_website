<?php
	include'../connect.php';
  $id=$_GET['id'];

  $image = "SELECT * FROM service WHERE id = '$id'";
  $query = mysqli_query($conn, $image);
  $after = mysqli_fetch_assoc($query);

  unlink('../uploads/service/'.$after['file']);


	$result = $db->prepare("DELETE FROM service WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-services.php?success=true");
        }else{
            header("location:all-services.php?failed=true");
        } 
		
?>