<?php 

require_once __DIR__.'/data/users.php';

//http://localhost:55330/supergolbals/user.php?id=1

$id = intval($_GET['id']);
if ($id === 0) {
    exit('Entrez une valeur correcte');
}
foreach($users as $user) { 
    if ($user['id'] === $id) {
    ?> <h4> <?php echo '=> ' . $user['name']."<br />" ?> </h4> 
       <h4> <?php echo '=> ' . $user['firstname']."<br />" ?> </h4> 
       <h4> <?php echo '=> ' . $user['email']."<br />" ?> </h4>
       <img src= '<?php $user['profile_pic'] ?>' alt="" style="width:200px;">
  <?php  }
} 

?>