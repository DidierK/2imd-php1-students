
<?php
//Voorbereiding altijd bovenaan
// normaal gezien SQL

$arr_posts = [
                ["beschrijving" => "PHP afwerken",
                 "deadline" => 48,
                 "categorie" => "School",
                ],
                ["beschrijving" => "Stageplaats bellen",
                 "deadline" => 60,
                 "categorie" => "Werk",
                ],
                ["beschrijving" => "Git afwerken",
                 "deadline" => 2,
                 "categorie" => "School",
                ],
                ["beschrijving" => "CMS afwerken",
                 "deadline" => 10,
                 "categorie" => "School",
                ],
                ["beschrijving" => "Tante opbellen",
                 "deadline" => 20,
                 "categorie" => "Privé",
                ],
    
        ];


/*
    echo"<pre>";
    var_dump($arr_posts);
    echo"</pre>";
*/
?><!DOCTYPE html>
   
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Timeline</title>
        
       
    </head>
    
    
    <style>
              
        .post{
             width: 300px;   
            background-color:#951500;
            text-align:center;
            color:#FFF;
            border-style: solid;
            
           
        }
        #category{
             font-size:15px;   
        }
        #description{
             font-size:15px;     
        }
        #deadline{
            font-size:15px;  
        }
    </style>
    
<body>        


  
  
<?php

  foreach($arr_posts as $p){ ?> 
       
      <?php if($p['deadline'] < 4 ) { ?>
   <div class="post" style="background-color:red">
   <h1 id="category"><?php echo $p['categorie']; ?></h1>
            <h1 id="description"><?php echo $p['beschrijving']; ?></h1>
            <h2 id="deadline">Deadline : <?php echo $p['deadline']; ?> Uur</h2>   
<?php } 

   
else if($p['deadline'] < 24 ) { ?>
   <div class="post" style="background-color:orange">
   <h1 id="category"><?php echo $p['categorie']; ?></h1>
            <h1 id="description"><?php echo $p['beschrijving']; ?></h1>
            <h2 id="deadline">Deadline : <?php echo $p['deadline']; ?> Uur</h2>   
<?php } 
?>
   
<?php if($p['deadline'] > 24 ) { ?>
   <div class="post" style="background-color:green">
   <h1 id="category"><?php echo $p['categorie']; ?></h1>
            <h1 id="description"><?php echo $p['beschrijving']; ?></h1>
            <h2 id="deadline">Deadline : <?php echo $p['deadline']; ?> Uur</h2>   
<?php } 
?>
<?php } ?>


  

   
</body>
    
</html>