<?php
// Connexion à la base de données
try {
   $database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
} catch (Exception $e) {
   die('Erreur : ' . $e->getMessage());
}

// On récupère les 5 derniers billets
$statement = $database->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

$posts = [];
while ($row = $statement->fetch()) {
   $post = [
      'title' => $row['titre'],
      'content' => $row['contenu'],
      'frenchCreationDate' => $row['date_creation_fr']
   ];

   $posts[] = $post;
}

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