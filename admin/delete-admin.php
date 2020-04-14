<?php
	include'../connect.php';
  $id=$_GET['id'];
  
  $image = "SELECT * FROM table_admin WHERE id = '$id'";
  $query = mysqli_query($conn, $image);
  $after = mysqli_fetch_assoc($query);

  unlink('../uploads/admin/'.$after['file']);

	$result = $db->prepare("DELETE FROM table_admin WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:adminlist.php?success=true");
        }else{
            header("location:adminlist.php?failed=true");
        } 
		
?>