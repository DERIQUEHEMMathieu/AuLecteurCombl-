<!-- <p>Vos utilisateurs en base de données s'affichent sur cette page</p> -->
<div class="table-responsive ">
  <table class="table table table-striped">
  <thead>
    <tr>
        <th scope="col">Identifiant</th>
        <th scope="col">Numéro d'abonné</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Email</th>
        <th scope="col">Téléphone</th>
        <th scope="col">fiche</th>
    </tr>
  </thead>
  <tbody>
      <?php
      foreach ($users as $key => $user){
          ?>
        <tr>
            <th scope="row"><?php echo $user->getId(); ?></th>
            <td><?php echo $user->getSubscriber_number(); ?></td>
            <td><?php echo $user->getFirstname(); ?></th>
            <td><?php echo $user->getLastname(); ?></td>
            <td><?php echo $user->getEmail(); ?></td>
            <td><?php echo $user->getPhone(); ?></td>
            <form method="post" id="singleUser" name="singleUser">
                <td><a type="submit" name="singleUser" href="user.php?<?php echo "id=".$user->getId();?>">Voir</a></td>
            </form>
        </tr>
      <?php } ?>
  </tbody>
</table>
</div>