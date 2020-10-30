<!-- <p>Le livre sur lequel on a cliqué s'affiche ici</p> -->
<h4 class="text-center mx-auto bg-info text-dark" style="width: 50%;">Détails du livre : <?php echo $book->getTitle(); ?> de <?php echo $book->getAuthor(); ?></h4>
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
                <th scope="col">Emprunteur</th>
                <th scope="col">Suppression du livre</th>
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
              </tr>
          </tbody>
        </table>
      </div>