<?php
$imageName=$_FILES['image']['name'] ;
$tmp_name=$_FILES['image']['tmp_name'];
move_uploaded_file($tmp_name,"./savedPhotos/$imageName");
echo $_FILES['image']['tmp_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     .container{
         height: 220px;
         width: 250px;
         border: 1px solid black;
         background-color: antiquewhite;
         padding: 10px;
         margin-left:600px;
         margin-Top:200px;
         border-radius: 10px;
     }
     .x{
        margin-left:28px;
     }
     .y{
   margin-left:23px;
    }
    .z{
   margin-left:5px;
    }
    .small{
        padding:3px;
    }
 </style>
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="small">
            Name <input type="text" name="name" class="x" required>
            </div>
            <br>
            <div class="small">
            E-mail <input type="email" name="email" class="y" required>
            </div>
            <br>
            <div class="small">
            Password <input type="password" name="password" class="z" required>
            </div>
            <br>
            <div class="small">
            Upload your image <input type="file" name="image" required>
            </div>
            <br>
            <div class="small">
            <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>