<?php

include'../connect.php';
  $id=$_GET['id'];
  
  $image = "SELECT * FROM testimonial WHERE id = '$id'";
  $query = mysqli_query($conn, $image);
  $row = mysqli_fetch_assoc($query);

  unlink('../uploads/testimonial/'.$row['file']);

	$result = $db->prepare("DELETE FROM testimonial WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-testimonials.php?success=true");
        }else{
            header("location:all-testimonials.php?failed=true");
        } 
		
?>