
<?php

    $arr_artists = [ 
        [
            "name" => "Will Tura",
            "picture" => "http://www.allpartyevents.be/sites/default/files/artiest/will_tura_site.jpg"
        ],
        [
            "name" => "Eddy Wally",
            "picture" => "http://www.eddywally.be/userfiles/images/intro_pic.jpg"
        ],
        [
            "name" => "Willy Sommers",
            "picture" => "http://www.allpartyevents.be/sites/default/files/artiest/tn_willy20sommers201.jpg"
        ]
    ];

//Form uitlezen als er is gezocht
if (isset($_GET['aantal']))
{
    $aantal = $_GET['aantal'];
}
    $melding = "Geef een aantal"

?><!DOCTYPE html>
   
   <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Intro Forms</title>
    </head>
    
    
    <body>        
        <p>TOEPASSING1</p>

       <?php
 // als een user een te hoog aantal geeft
                    if(isset ($aantal)){

                        if ($aantal > count($arr_artists))
                        {
                            //limiteer tot het maximum dat we kunnen afprinten
                            $aantal = count($arr_artists);
                            // plus toon melding
                            $melding = "Sorry buddy, we don't have any more artists.";

                        }
                    }
?>
      
       
        <div class="feedback" style="background-color:red;width:300px;text-align:center"><h3 style="color:#FFF">
        <?php echo $melding?></h3></div>
        
        <form action="" method="get">
          
          <label style="color:red" for="aantal">Aantal artiesten?:</label>
           <input type="number" name="aantal" id="query">
           </br>
           <button id="verzendknop" type="submit">SEARCH</button>
           
        </form>
        
        <div id="artists">
            
            <?php
                if(isset ($aantal))
                {
                   
                    
                    for($i=0; $i<$aantal; $i++)
                    {
                        // <a href="artist.php?id=1">Willy</a>   
                        echo "<a href='artist.php?id=" . $i . "'>" . $arr_artists[$i]['name'] . "</a>";
                    }
                }
            ?>
            
            
        </div>
   
    </body>
    
</html>


