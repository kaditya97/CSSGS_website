<?php include "header.php"; ?>
<!-- //header-ends -->
<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1">Post Project</h3>
		<div class="xs">

			<div class="col-md-8 inbox_right">
				<div class="Compose-Message">
					<div class="panel panel-default">
						<div class="panel-heading">
							Compose Project
						</div>
						<?php if (get("success")) : ?>
							<div>
								<?= App::message("success", "Project saved Successfully!") ?>
							</div>
						<?php endif; ?>
						<div class="panel-body panel-body-com-m">

							<form class="com-mail" action="save-project.php" method="post" enctype="multipart/form-data">

								<label>Project Title : </label>
								<input type="text" name="project_title" class="form-control1 control3" placeholder="Project Title">
								<label>Project Status : </label>
								<input type="text" name="project_status" class="form-control1 control3" placeholder="Status">
								<label>Project Detail : </label>
								<textarea rows="6" id="body" name="project_detail" class="form-control1 control2"></textarea>
								<script>
									CKEDITOR.replace('body');
								</script>

								<label>Add Photo</label>
								<input type="file" name="file" class="form-control1 control3">

								<hr>
								<input type="submit" value="Submit Project">
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