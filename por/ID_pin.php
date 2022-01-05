
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tichatool|register</title>
   <style>
       
   </style>
</head>
<body>
<div style="width: 100%; display:flex; justify-content:center;">
                <div class="error">
                        <?php
                       require_once 'Pphp/idpin.php';
                       check_auth();
                        ?>
                    </div>
        </div>
    <a href=""><small class="help">help</small></a>
    <form method="POST">
        
        <input name="studentID" type="code" placeholder="enter code" required> <br>
        <small>code sent to email or phone</small>
            <div class="navdiv">
           
                    <button id ="varify"type="submit" ><small>done</small></button>
                </div>
    </form>
    
</body>
</html>