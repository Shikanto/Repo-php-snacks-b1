<?php

    $name = "";
    $age = "";
    $email = "";

    if(!isset($_GET["name"]) || !isset($_GET["age"]) || !isset($_GET["email"])) {
      exit("Dati mancanti");
    }


    $name = $_GET['name'];
    $lenName = strlen($name);
    
    $email = $_GET['email'];
  
    $age = $_GET['age'];
    
    if ((($lenName >= 3) && (strstr($email, '@') && strstr($email, '.')) && (is_numeric($age)))) {
        exit ("Accesso riuscito");
      } else {
        exit ("Accesso negato");
      }
     
    /* FLORIAN SOLUZIONE

    controllo la chiave NAME

    if (!isset($_GET["name"]) || strlen($_GET["name"]) <3) {
      echo "<h1>Accesso Negato</h1>"
      exit("Valore di 'name' non valido");
    }


    controllo la chiave AGE

    if (!isset($_GET["age"]) || is_numeric($_GET["age"])) {
      echo "<h1>Accesso Negato</h1>"
      exit("Valore di 'age' non valido");
    }


    controllo la chiave MAIL
    if (isset($_GET["mail"])) {
      $hasAt = strpos ($_GET["mail"], "@");

      if ($hasAt === false) {
        echo "<h1>Accesso Negato</h1>"
        exit("Valore di 'mail' non valido");
      }

       PRENDIAMO SOLO LA PARTE DOPO LA @

      $domain = explode("@", $_GET["mail"])[1];  // qui andiamo a prendere l'indice 1 cioè quello dopo la chiocciola

      if(strpos($domain, ".") === false) {
        echo "<h1>Accesso Negato</h1>"
        exit("Valore di 'mail' non valido");
      }
    } else {
      echo "<h1>Accesso Negato</h1>";
      exit("Valore di 'mail' non valido");

    }

    $name = $_GET["name"];
    $age = $_GET["age"];
    $mail = $_GET["mail"];

    echo "<h1>Accesso Riuscito</h1>";

    */
?>
