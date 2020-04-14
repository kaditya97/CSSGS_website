<?php include "header.php"; ?>
<!-- End Site Header -->
<!-- Start Content -->
<div class="main" role="main">
  <div id="content" class="content full">
    <div class="container">
      <div class="row">
        <div class="col-md-9 posts-archive">
          <?php
          if (!isset($_GET["page"])) {
            $_GET["page"] = 1;
          }

          $tbl_name = "blog";    //your table name
          // How many adjacent pages should be shown on each side?
          $adjacents = 3;

          $get_news = ORM::for_table("$tbl_name")
            ->find_array();

          $total_pages = count($get_news);


          /* Setup vars for query. */
          $targetpage = "pagination.php";   //your file name  (the name of this file)
          $limit = 5;                 //how many items to show per page
          $page = $_GET['page'];
          if ($page)
            $start = ($page - 1) * $limit;       //first item to display on this page
          else
            $start = 0;                //if no page var is given, set start to 0


          $news = ORM::for_table("blog")
            ->limit($limit)
            ->offset($start)
            ->order_by_desc('blog.id')
            ->find_array();

          ?>
          <?php foreach ($news as $row) : ?>


            <?php
            /* Setup page vars for display. */
            if ($page == 0) $page = 1;          //if no page var is given, default to 1.
            $prev = $page - 1;              //previous page is page - 1
            $next = $page + 1;              //next page is page + 1
            $lastpage = ceil($total_pages / $limit);    //lastpage is = total pages / items per page, rounded up.
            $lpm1 = $lastpage - 1;            //last page minus 1
            ?>

            <article class="post">
              <div class="row">
                <div class="col-md-4 col-sm-4"> <a href="blog-detail.php?id=<?php echo $row['id']; ?>"><img src="uploads/blog/<?php echo $row['file']; ?>" alt="" class="img-thumbnail img-responsive"></a> </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="blog-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['blog_title']; ?></a></h3>
                  <span class="post-meta meta-data"> <span><i class="fa fa-calendar"></i> <?php echo $row['date']; ?></span></span>
                  <?php echo strip_tags(substr($row['blog_detail'], 0, 180)); ?>...
                  <p><a href="blog-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Continue reading <i class="fa fa-long-arrow-right"></i></a></p>
                </div>
              </div>
            </article>
          <?php endforeach; ?>

          <?php ?>

          <span class="text-muted m-r-sm">

            Showing
            <?php if ($lastpage == $next - 1) : ?>
              <?= $total_pages ?>
            <?php else : ?>
              <?= $page * $limit ?>
            <?php endif; ?>
            of <?= $total_pages ?>

          </span>
          <div class="btn-group">

            <?php if ($page != 1) : ?>
              <a class="btn btn-default" href="?page=<?= $prev ?>"><i class="">Page <?= $prev ?><<</i> </a> <?php endif; ?> <?php if ($lastpage == $next - 1) : ?> <?php else : ?> <a class="btn btn-default" href="?page=<?= $next ?>"><i class="">>>Page <?= $next ?></i></a>
            <?php endif; ?>
          </div>

        </div>
        <!-- Start Sidebar -->
        <?php include "side-bar.php"; ?>
        <!-- Start Footer -->
        <?php include "footer.php"; ?>