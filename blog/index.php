<?php

require('src/model.php');

$posts = getPosts();

require('templates/homepage.php');

foreach ($posts as $post) {
   ?>
   <div class="news">
      <h3>
         <?php echo htmlspecialchars($post['title']); ?>
         <em>le <?php echo $post['frenchCreationDate']; ?></em>
      </h3>
      <p>
         <?php
         // On affiche le contenu du billet
         echo nl2br(htmlspecialchars($post['content']));
         ?>
         <br />
         <em><a href="#">Commentaires</a></em>
      </p>
   </div>
   <?php
} // Fin de la boucle des billets
?>