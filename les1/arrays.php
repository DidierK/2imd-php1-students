
<?php
//Voorbereiding altijd bovenaan
// normaal gezien SQL

$arr_posts = [
                ["username" => "David Heerinckx",
                 "picture" => "https://s3.amazonaws.com/uifaces/faces/twitter/mizko/128.jpg",
                 "text" => "Nice ... scroller",
                 "likes" => 80
            
            ],
            
                ["username" => "Joris Hens",
                 "picture" => "https://s3.amazonaws.com/uifaces/faces/twitter/mghoz/128.jpg",
                 "text" => "PHP first lesson",
                 "likes" => 45
            
            ],
            
     ["username" => "Billie",
                 "picture" => "https://s3.amazonaws.com/uifaces/faces/twitter/brynn/128.jpg",
                 "text" => "Heeeeeeeeeeeeeey",
                 "likes" => 45
            
            ]
    
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
    
    
    <body>        


<?php
foreach ($arr_posts as $key => $post)
{
    echo '<div class="post">';
    echo "<img src='" . $post['picture']. "'>";
//    <img src='http://...............'>
    echo '</div>';
}
    
?>




<?php foreach($arr_posts as $p){ ?> 

        <div class="post">
       <img src="<?php echo $p['picture']; ?>" alt="">
       <a href="#"><?php echo $p['username']; ?></a>
       <p><?php echo $p['text']; ?></p>
        <span><?php echo $p['likes']; ?></span>
    </div>
    <?php } ?>
  
   
   
    </body>
    
</html>