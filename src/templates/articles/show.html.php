<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Article N° <?=$id?></title>
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
          <h1>L'id de l'article est <?=$id?></h1>
     </div>

</body>
</html>