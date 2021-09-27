<!-- 
    Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>

    <!-- <form method="GET" action="index.php">
        <input type="text" name="badword" placeholder="Inserisci qui la parola da escludere">
    </form> -->

    <?php $badword = $_GET["badword"]?>

     <h2>
         <?php $text="
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eveniet facilis impedit suscipit repudiandae voluptatibus aut? Est ipsam veritatis, expedita odit, dolorum tenetur dicta fuga voluptas autem animi esse amet.";
         echo $text; 
         ?>
     </h2>
     <h2><?php echo strlen($text); ?></h2>

     
     <?php $censored_text = str_replace($badword , '***', $text);?>
     <h1><?php echo $censored_text; ?> 
     <br>
     <?php echo strlen($censored_text); ?> 
    
    
    </h1>



 </body>
 </html>