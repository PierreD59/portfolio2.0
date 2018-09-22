<?php include('header.php'); ?>

<div class="d-flex justify-content-center container">
<div class="col-md-5">
    <div class="form-area">
        <form role="form" action="formulaire.php">
        <br style="clear:both">
            <h3 class="title-contact">Me Contacter</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name*" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email*" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number*" required>
					</div>
          <div class="form-group">
            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message*" rows="2"></textarea>
              <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
            </div>

        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Envoyer</button>
        <h6 class="mt-3">* Ces champs sont obligatoires
        </form>
    </div>
</div>
</div>

<?php include('footer.php'); ?>
