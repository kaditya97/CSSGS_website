<?php include "header.php"; ?>
<!-- //header-ends -->
<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1">Post Client</h3>
		<div class="xs">

			<div class="col-md-8 inbox_right">
				<div class="Compose-Message">
					<div class="panel panel-default">
						<div class="panel-heading">
							Compose Client
						</div>
						<?php if (get("success")) : ?>
							<div>
								<?= App::message("success", "Client saved Successfully!") ?>
							</div>
						<?php endif; ?>
						<div class="panel-body panel-body-com-m">

							<form class="com-mail" action="save-client.php" method="post" enctype="multipart/form-data">

								<label>Client Name : </label>
								<input type="text" name="client_name" class="form-control1 control3" placeholder="Client Name">
								<label>Client Detail : </label>
								<textarea rows="6" id="body" name="client_detail" class="form-control1 control2"></textarea>
								<script>
									CKEDITOR.replace('body');
								</script>

								<label>Add Photo</label>
								<input type="file" name="file" class="form-control1 control3">

								<hr>
								<input type="submit" value="Submit Client">
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