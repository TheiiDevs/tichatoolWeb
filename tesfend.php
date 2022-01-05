<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
           
        
            display: grid; 
        }
        .cont1{
            background-color: red;
            width: 200px;
            height: 200px;
        }
        .cont2{
            margin-top: 150px;
            background-color: blueviolet;
            width: 100px;
            height: 100px;
        }

        .cont1, .cont2{
            grid-area:1/1;

        }

    </style>
</head>
<body>
   <div class="container">
        <div class="cont1">
            <span>blood</span>
        </div>
        <div class="cont2">

        </div>
   </div>
</body>
</html>


