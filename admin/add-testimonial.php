<?php include "header.php"; ?>
<!-- //header-ends -->
<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1">Post Testimonial</h3>
		<div class="xs">

			<div class="col-md-8 inbox_right">
				<div class="Compose-Message">
					<div class="panel panel-default">
						<div class="panel-heading">
							Compose Testimonial
						</div>
						<?php if (get("success")) : ?>
							<div>
								<?= App::message("success", "Testimonial saved Successfully!") ?>
							</div>
						<?php endif; ?>
						<div class="panel-body panel-body-com-m">

							<form class="com-mail" action="save-testimonial.php" method="post" enctype="multipart/form-data">

								<label>Client Name : </label>
								<input type="text" name="client_name" class="form-control1 control3" placeholder="Client Name">
								<label>Client Designation : </label>
								<input type="text" name="client_designation" class="form-control1 control3" placeholder="Client Designation">
								<label>Client Message : </label>
								<textarea rows="6" id="body" name="client_message" class="form-control1 control2"></textarea>
								<script>
									CKEDITOR.replace('body');
								</script>

								<label>Add Photo</label>
								<input type="file" name="file" class="form-control1 control3">

								<hr>
								<input type="submit" value="Submit Testimonial">
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