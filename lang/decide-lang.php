  <?php
    if (isset($_GET['language'])) {
      $language= $_GET['language'];
    }
    else{
      $language = $_SERVER['HTTP_ACCEPT_LANGUAGE']{0}.$_SERVER['HTTP_ACCEPT_LANGUAGE']{1};
    }

    if ($language=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php  
    include("fr-lang.php");  
    }   
      
    else if ($language=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php  
    include("en-lang.php");  
    }  
    else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut  
    include("fr-lang.php");  
    }  
      
  ?>  