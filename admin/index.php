<?php include "header.php"; ?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="fa fa-globe"></i>
					<div class="stats">
						<?php
						$result = $db->prepare("SELECT count(*) as total FROM blog");
						$result->execute();
						for ($i = 0; $row = $result->fetch(); $i++) {
						?>
							<h5><?php echo $row['total']; ?> </h5>
							<div class="grow grow1">
								<p>Total Blogs</p>
							</div><?php } ?>
					</div>
				</div>
			</div>

			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="fa fa-eye"></i>
					<div class="stats">
						<?php
						$result = $db->prepare("SELECT count(*) as total FROM notice");
						$result->execute();
						for ($i = 0; $row = $result->fetch(); $i++) {
						?>
							<h5><?php echo $row['total']; ?></h5>
							<div class="grow grow3">
								<p>Total Notices</p>
							</div> <?php } ?>
					</div>
				</div>
			</div>

			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="fa fa-instagram"></i>
					<div class="stats">
						<?php
						$result = $db->prepare("SELECT count(*) as total FROM project");
						$result->execute();
						for ($i = 0; $row = $result->fetch(); $i++) {
						?>
							<h5><?php echo $row['total']; ?></h5>
							<div class="grow grow4">
								<p>Total Projects</p>
							</div> <?php } ?>
					</div>
				</div>
			</div>

			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="fa fa-inbox"></i>
					<div class="stats">
						<?php
						$result = $db->prepare("SELECT count(*) as total FROM table_admin");
						$result->execute();
						for ($i = 0; $row = $result->fetch(); $i++) {
						?>
							<h5><?php echo $row['total']; ?></h5>
							<div class="grow grow2">
								<p>Total Admins</p>
							</div> <?php } ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include "footer.php"; ?>