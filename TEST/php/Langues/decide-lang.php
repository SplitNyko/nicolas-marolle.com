  <?php  
    $language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $language = $language{0}.$language{1};
    echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    if ($language=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php  
    include("lang/fr-lang.php");  
    }   
      
    else if ($language=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php  
    include("lang/en-lang.php");  
    }  
      
    else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut  
    include("lang/fr-lang.php");  
    }  
      
    ?>  
