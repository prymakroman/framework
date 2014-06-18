
	<!-- page content -->
	<div id="pageFullWidth">
      	<h1>Compose Message</h1>
		<div class="content">
			<form method="post">
				<input name="message_time" type="hidden" value="<?php echo time(); ?>" />
				<input name="message_sender_id" type="hidden" value="<?php echo $logged_user_id; ?>" />
				<p>
					<label for="message_recipient_id">To:</label>
					<select name="message_recipient_id">
						<option value="">--Select a Friend--</option>
						<?php foreach ( $friend_objects as $friend ) : ?>
							<option value="<?php echo $friend->ID; ?>"><?php echo $friend->user_nicename; ?></option>
						<?php endforeach; ?>
					</select>
				</p>
				<p>
					<label class="labels" for="message_subject">Subject:</label>
					<input name="message_subject" type="text" />
				</p>
				<p>
					<label for="message_content">Message:</label>
					<textarea name="message_content"></textarea>
				</p>
				<p>
					<input type="submit" value="Submit" class="btn btn-inverse" />
				</p>
			</form>
		</div>
    </div>
      <!-- End page content -->