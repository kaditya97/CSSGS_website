<?php

	include'../connect.php';
  $id=$_GET['id'];
  
  $image = "SELECT * FROM blog WHERE id = '$id'";
  $query = mysqli_query($conn, $image);
  $after = mysqli_fetch_assoc($query);

  unlink('../uploads/blog/'.$after['file']);

	$result = $db->prepare("DELETE FROM blog WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-blogs.php?success=true");
        }else{
            header("location:all-blogs.php?failed=true");
        } 
		
?>