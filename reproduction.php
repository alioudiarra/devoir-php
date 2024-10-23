<?php
$students = [
    ['nom' => 'durant', 'prenom' =>'loic' , 'age' => 29 , 'metier' => 'webmaster' , 'site' => 'openclassroom', 'lien' => 'http//www.openclassrooms.com/'],
    ['nom' => 'dupont', 'prenom' =>'michel' , 'age' => 55 , 'metier' => 'integrateur' , 'site' => 'alsacreations', 'lien' => 'http://www.alsacreations.com/'],
    ['nom' => 'martin', 'prenom' =>'yanick' , 'age' => 25 , 'metier' => 'devellopeur' , 'site' => 'creative juiz', 'lien' => 'http://www.alsacreations.com/'],
];
echo '<pre>';
print_r($students);
echo '</pre>';

$lgTabStudents = count($students); //sizeof
for ($p = 0; $p < $lgTabStudents; $p++) {
      foreach ($students[$p] as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
      }
}
echo $students[2]['nom'];

//mise en forme dans un tableau 
echo '<table border="1" width="100%"><tr><th>Id</th><th>Nom</th><th>prenom</th><th>Age</th><th>metier</th><th>site web</th></tr>';
for ($p = 0; $p < $lgTabStudents; $p++) {
      echo '<tr>';
      echo '<td>' . $p + 1 . '</td>';
      echo '<td>' . $students[$p]['nom'] . '</td>';
      echo '<td>' . $students[$p]['prenom'] . '</td>';
      
      

      echo '<td>' . $students[$p]['age'] . '</td>';

      echo '<td>' . strtoupper($students[$p]['metier']) . '</td>';
      echo '<td>' . strtoupper($students[$p]['site']) . '</td>';
      
    
}
echo '</table>';