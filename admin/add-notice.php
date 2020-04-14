<?php include "header.php"; ?>
<!-- //header-ends -->
<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1">Post Notice</h3>
		<div class="xs">

			<div class="col-md-8 inbox_right">
				<div class="Compose-Message">
					<div class="panel panel-default">
						<div class="panel-heading">
							Compose Notice
						</div>
						<?php if (get("success")) : ?>
							<div>
								<?= App::message("success", "Notice saved Successfully!") ?>
							</div>
						<?php endif; ?>
						<div class="panel-body panel-body-com-m">

							<form class="com-mail" action="save-notice.php" method="post" enctype="multipart/form-data">

								<label>Notice Title : </label>
								<input type="text" name="notice_title" class="form-control1 control3" placeholder="Notice Title">
								<label>Notice Link : </label>
								<input type="text" name="notice_link" class="form-control1 control3" placeholder="Notice Link">
								<label>Notice Detail : </label>
								<textarea rows="6" id="body" name="notice_detail" class="form-control1 control2"></textarea>
								<script>
									CKEDITOR.replace('body');
								</script>

								<label>Add Photo</label>
								<input type="file" name="file" class="form-control1 control3">

								<hr>
								<input type="submit" value="Submit Notice">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
<?php include "footer.php"; ?>