
      <!-- page content -->
      <div id="pageFullWidth">
      	<h1>Post Status</h1>
		<div class="content">
			<form method="post">
				<input name="status_time" type="hidden" value="<?php echo time() ?>" />
				<p>What's on your mind?</p>
				<textarea name="status_content"></textarea>
				<p>
					<input type="submit" value="Submit" class="btn btn-inverse" />
					<a class="btn btn-inverse" href="index.php?q=feed">View Posts</a>
				</p>
			</form>
		</div>
      </div>
      <!-- End page content -->