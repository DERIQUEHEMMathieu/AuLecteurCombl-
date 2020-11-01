<!-- <p>Le livre sur lequel on a cliqué s'affiche ici</p> -->
<h4 class="text-center mx-auto bg-info text-dark" style="width: 40%;">Détails du livre : <?php echo $book->getTitle(); ?> de <?php echo $book->getAuthor(); ?></h4>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Auteur</th>
                <th scope="col">Resumé</th>
                <th scope="col">Parution</th>
                <th scope="col">Categorie</th>
                <th scope="col">Emprunteur</th>
                <th scope="col">Livre rendu</th>
            </tr>
        </thead>
        <tbody>
              <tr>
                <th scope="row"><?php echo $book->getId(); ?></th>
                <td><?php echo $book->getTitle(); ?></td>
                <td><?php echo $book->getAuthor(); ?></td>
                <td><?php echo $book->getResume(); ?></td>
                <td><?php echo $book->getDate(); ?></td>
                <td><?php echo $book->getCategory(); ?></td>
                <td><?php echo ($book->getUser_id())?$book->getUser_id(): ""; ?></td>
                <td><form action="" method="post">
                  <input class="btn btn-danger" type="submit" Value="Livre rendu" name="bookDelete" id="bookDelete"></input>
                  </form>
                </td>
              </tr>
        </tbody>
    </table>

<?php
    if (!empty($book->getUser_id())) {
?>
  <span class="mx-auto bg-danger text-warning">Livre emprunté par : <?php echo $user->getFirstname() . " " . $user->getLastname()?></span>
  <form action="" method="post">
    <input type="submit" class="btn btn-success text-white mx-2 my-0" name="bookStatusSwitch" value="Restituer"></input>
  </form>
<?php
}
else{
?>
  <form action="" method="post">
    <div class="form-group form-column col-md-5">
      <label for="user_id">Emprunteur</label>
      <input type="text" name="user_id" id="user_id"></input>
      <button class="btn btn-success text-dark mx-2 my-0" type="submit">Valider</button>
    </div>
  </form>
<?php
}
?>