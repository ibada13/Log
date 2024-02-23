<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titlhye ?? ' no title' ?></title>
</head>
<body>
    <h1><?php
    echo $valhyhue?? 'no value '
    ?></h1>


    <h1>
        <?php foreach($comments as $comment):
       echo '<br>';
        
   
         echo $comment['id'];
       echo $comment['comment'];
         echo $comment['like'];
        

      
         endforeach; ?>
    </h1>
</body>
</html>