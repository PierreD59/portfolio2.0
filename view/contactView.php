<div class="container">
    <div class="col-md-5">
        <div class="form-area">
            <form role="form" action="./index.php?page=formulaire" method="post">
                <br>
                <h3 class="title-contact">Me Contacter</h3>
    			<div class="form-group">
					<input type="text" class="form-control" id="name" name="name" placeholder="Nom*" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email*" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="mobile" name="mobile" placeholder="06 10 45 75 95*" required>
				</div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message*" rows="2"></textarea>
                    <span class="help-block"><p id="characterLeft" class="help-block ">Vous avez atteint la limite</p></span>
                </div>

                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Envoyer</button>
                <h6 class="mt-3">* Ces champs sont obligatoires
            </form>
        </div>
    </div>
</div>