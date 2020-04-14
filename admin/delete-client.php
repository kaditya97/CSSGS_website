<?php

include'../connect.php';
  $id=$_GET['id'];
  
  $image = "SELECT * FROM client WHERE id = '$id'";
  $query = mysqli_query($conn, $image);
  $row = mysqli_fetch_assoc($query);

  unlink('../uploads/client/'.$row['file']);

	$result = $db->prepare("DELETE FROM client WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-clients.php?success=true");
        }else{
            header("location:all-clients.php?failed=true");
        } 
		
?>