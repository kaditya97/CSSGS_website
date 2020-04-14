<?php include "header.php"; ?>
<!-- //header-ends -->
<div id="page-wrapper">
	<div class="graphs">

		<div class="xs">

			<div class="col-md-8 inbox_right">
				<div class="Compose-Message">
					<div class="panel panel-default">
						<div class="panel-heading">
							Add Executive Members
						</div>
						<?php if (get("success")) : ?>
							<div>
								<?= App::message("success", "Successfully saved information!") ?>
							</div>
						<?php endif; ?>
						<div class="panel-body panel-body-com-m">

							<form class="com-mail" action="save-exco.php" method="post" enctype="multipart/form-data">

								<label>Name : </label>
								<input type="text" name="person_name" class="form-control1 control3">
								<label>Designation : </label>
								<input type="text" name="designation" class="form-control1 control3">
								<label>Image: </label>
								<input type="file" name="file" class="form-control1 control3">
								<label>Facebook : </label>
								<input type="text" name="facebook" class="form-control1 control3">
								<label>Twitter : </label>
								<input type="text" name="twitter" class="form-control1 control3">
								<label>Linkedin : </label>
								<input type="text" name="linkedin" class="form-control1 control3">
								<hr>
								<input type="submit" value="Submit Admin">
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