<form method="post" action="./index.php?page=addProjet" class="mt-3">
  <p>
    <label for="name">Nom du Projet : </label><br>
    <input type="text" name="name" id="name" required/>
  </p>
  <p>
    <label for="content">Commentaire : </label> <br>
    <input type="text" name="content" id="content" required/>
  </p>
  <p>
    <label for="src">Source : </label> <br>
    <input type="text" name="src" id="src" required/>
  </p>
  <input type="submit" value="Envoyer" />
</form>