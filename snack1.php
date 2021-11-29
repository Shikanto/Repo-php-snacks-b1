<?php
    $name = $_GET['name'];
    $lenName = strlen($name);
    
    $email = $_GET['email'];
  
    $age = $_GET['age'];
    
    if ((($lenName >= 3) && (strstr($email, '@') && strstr($email, '.')) && (is_numeric($age)))) {
        echo "Accesso riuscito";
      } else {
        echo "Accesso negato";
      }
     

?>
