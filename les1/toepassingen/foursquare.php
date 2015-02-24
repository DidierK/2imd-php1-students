
<?php
//Voorbereiding altijd bovenaan
// normaal gezien SQL

$arr_posts = [
                ["username" => "Didier",
                 "street" => "leuke straat",
                 "location" => "Vilvoorde, BE",
                 
                 "picture" => "http://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/VilvoordeChurch.jpg/200px-VilvoordeChurch.jpg",
                 
                 "likes" => 5
            
            ],
            
                ["username" => "Joeri",
                 "street" => "fancy straat",
                 "location" => "Mechelen, BE",
                 
                 "picture" => "",
                 
                 "likes" => 8
            
            ],
            
                ["username" => "Robbert",
                 "street" => "rustige straat",
                 "location" => "Bree, BE",
                 
                 "picture" => "http://toerisme.bree.be/userfiles/image/Stadhuis%20Bree.jpg",
                 
                 "likes" => 6
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
        
        <style>
            #street{
                 color:blue;
                     font-size:15px;
                         font-style: bold;
            }
            
            p{
                 color:black;
                
                font-size: 10px;
            }
            
            
            a{
                 color:blue;
                font-size: 20px;
                text-decoration:none;
                
            }
            
            .post{
                 background-color: #00aaff;
                width: 200px;
                text-align:center;
                margin-bottom: 20px;
            }
            
            .images{
                 max-width:75%;
                max-height:75%;
                
            }
            
            .likes{
                 font-size: 10px;
                color:#550000;
                
            }
        </style>
       
       
       
    </head>
    
    
    <body>        



<?php foreach($arr_posts as $p){ ?> 

        <div class="post">
        
        
        <a href="#"><?php echo $p['username']; ?></a>
        <p id="street"><?php echo $p['street']; ?></p>
        <p><?php echo $p['location']; ?></p>
        
        <img class="images" src="<?php echo $p['picture']; ?>" alt="">
        </br>
        <span class="likes"><?php echo $p['likes']; ?> likes</span>
    </div>
    <?php } ?>
  
   
   
    </body>
    
</html>