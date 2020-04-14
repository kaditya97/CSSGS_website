<?php
	include'../connect.php';
  $id=$_GET['id'];

  $image = "SELECT * FROM notice WHERE id = '$id'";
  $query = mysqli_query($conn, $image);
  $after = mysqli_fetch_assoc($query);

  unlink('../uploads/notice/'.$after['file']);


	$result = $db->prepare("DELETE FROM notice WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-notices.php?success=true");
        }else{
            header("location:all-notices.php?failed=true");
        } 
		
?>