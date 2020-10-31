<!-- <p>l'utilisateur sur lequel on a cliqué s'affiche sur cette page</p> -->
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="#">Mettre à jour le contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="#">Supprimer</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $user->getFirstname() . " " . $user->getLastname() ?></h5>
    <p class="card-text"><?php echo $user->getAdress() ?></p>
    <p class="card-text"><?php echo $user->getCity_code() . " " .$user->getCity()  ?></p>
    <p class="card-text">Tél. : <?php echo $user->getPhone()  ?></p>
    <p class="card-text">Email : <?php echo $user->getEmail()  ?></p>
    <p class="card-text">Date de naissance : <?php echo $user->getBirth_date()  ?></p>
    <?php
    
     include "view/indexView.php"; 
     ?>
  </div>
</div>