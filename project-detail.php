<?php include "header.php"; ?>
<!-- End Site Header -->
<!-- Start Nav Backed Header -->
<?php
$id = $_GET['id'];
$result = $db->prepare("SELECT * FROM project where id= :post_id");
$result->bindParam(':post_id', $id);
$result->execute();
for ($i = 0; $row = $result->fetch(); $i++) {
?>
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title"><?php echo $row['project_title']; ?></h2>
            </header>
            <article class="post-content"> <span class="post-meta meta-data"><span><i class="fa fa-calendar"></i> Posted on <?php echo $row['date']; ?> | Status: <?php echo $row['project_status']; ?></span> <span></i> </span></span>
              <div class="featured-image"> <img src="uploads/project/<?php echo $row['file']; ?>" alt=""> </div>
              <div><?php echo $row['project_detail']; ?></div>
              <div class="post-meta">
                <h5>Share this post:</h5>

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_926t"></div>


              </div>
            </article>
          </div>
        <?php } ?>
        <!-- Start Sidebar -->
        <?php include "side-bar.php"; ?>
        <!-- Start Footer -->
        <?php include "footer.php"; ?>