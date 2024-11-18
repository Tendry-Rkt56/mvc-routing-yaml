<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Les articles</title>
</head>
<body>
     
     <style>
          .containers {
               position:absolute;
               top:50%;
               left:50%;
               transform: translate(-50%, -50%);
               display: flex;
               align-items:center;
               justify-content: center;
               flex-direction: column;
          }
     </style>

     <div class="containers">
          <h1>Les articles...</h1>
          <?php for($i = 1; $i <= 10; $i++): ?>
               <a style="margin:10px 10px;" href="/articles/<?=$i?>">Article <?=$i?></a>
          <?php endfor ?>
     </div>

</body>
</html>