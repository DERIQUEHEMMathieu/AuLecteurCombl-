<!-- <p>Vos livre au catalogue s'affichent sur cette page</p> -->
<h4 class="text-center mx-auto bg-info text-dark" style="width: 20%;">Liste des livres</h4>
<div class="mx-auto">
        <table class="table table-striped text-center">
          <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Auteur</th>
                <th scope="col">Resumé</th>
                <th scope="col">Parution</th>
                <th scope="col">Categorie</th>
                <th scope="col">Statut livre</th>
                <th scope="col">Emprunteur</th>
                <th scope="col">Fiche livre</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($books as $key=>$book) : ?>
              <tr>
                <th scope="row"><?php echo $book->getId(); ?></th>
                <td><?php echo $book->getTitle(); ?></td>
                <td><?php echo $book->getAuthor(); ?></td>
                <td><?php echo $book->getResume(); ?></td>
                <td><?php echo $book->getDate(); ?></td>
                <td><?php echo $book->getCategory(); ?></td>
                <td><?php
                  if (!empty($book->getUser_id())) { ?>
                  Livre emprunté
                  <?php
                  }
                  else { ?>
                  Livre disponible
                  <?php
                  } ?>
                  </td>
                  <td><?php echo ($book->getUser_id())?$book->getUser_id(): ""; ?></td>
                <form action="POST" name="bookSingle">
                  <td><a type="submit" href="book.php?<?php echo "id=".$book->getId();?>" name="bookSingle">Fiche</a></td>
                </form>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
