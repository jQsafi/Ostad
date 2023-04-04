
<div class="container">
	<div class="row">
	<div class="col-lg-3">&nbsp;</div>
	<div class="col-lg-6">
      <h1>Contact Us</h1>
	  <?php
	  if($_POST)
	  {
		?>
		<div class="alert alert-success" role="alert">
			Thanks for your feedback.
		</div>
		<?php
	  }
	  ?>
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
		<div class="form-group">
          <label for="email">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
	  </div>
    </div>
	</div>