<?php

	include'../connect.php';
  $id=$_GET['id'];
  
  $image = "SELECT * FROM project WHERE id = '$id'";
  $query = mysqli_query($conn, $image);
  $after = mysqli_fetch_assoc($query);

  unlink('../uploads/project/'.$after['file']);

	$result = $db->prepare("DELETE FROM project WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-projects.php?success=true");
        }else{
            header("location:all-projects.php?failed=true");
        } 
		
?>