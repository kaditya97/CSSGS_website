<div class="col-md-3 sidebar">
  <div class="widget sidebar-widget">
    <div class="sidebar-widget-title">
      <h3>Recent Notices</h3>
    </div>
    <ul>
      <?php
      $result = $db->prepare("SELECT * FROM notice ORDER BY id DESC Limit 3");
      $result->execute();
      for ($i = 0; $row = $result->fetch(); $i++) {
      ?>
        <li class="item event-item clearfix">
          <div class="event-detail">
            <h4><a href="notice-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['notice_title']; ?></a></h4>
            <span class="event-dayntime meta-data"><i class="fa fa-calendar"></i> on <?php echo $row['date']; ?></span>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>

  <!-- Recent Posts Widget -->
  <div class="widget-recent-posts widget">
    <div class="sidebar-widget-title">
      <h3>Recent Blogs</h3>
    </div>
    <ul>
      <?php
      $result = $db->prepare("SELECT * FROM blog ORDER BY id DESC Limit 3");
      $result->execute();
      for ($i = 0; $row = $result->fetch(); $i++) {
      ?>

        <div class="widget-blog-content"><a href="blog-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['blog_title']; ?></a> <span class="meta-data">
            <i class="fa fa-calendar"></i> on <?php echo $row['date']; ?></span> </div>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>
</div>
</div>
</div>
</div>