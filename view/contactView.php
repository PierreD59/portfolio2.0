<div class="container-contact">
<form class="form-area" role="form" action="./index.php?page=formulaire" method="post">

    <h3 class="title-contact">Me Contacter</h3>
    <div class="form-group">
    <input type="text" class="form-control" id="name" name="name" placeholder="Portman*" required>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Jacob*" required>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="email" name="email" placeholder="test@gmail.com*" required>
    </div>
    <div class="form-group">
    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message*" rows="4"></textarea>
    <span class="help-block"><p id="characterLeft" class="help-block ">Vous avez atteint la limite</p></span>
    </div>

    <button type="submit" id="submit" name="submit" class="btn btn-outline-danger pull-right">Envoyer</button>
    <h6 class="mt-3">* Ces champs sont obligatoires
</form>
</div>