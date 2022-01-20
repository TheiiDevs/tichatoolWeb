<?
require '/xampp/htdocs/tichatool/php/db.php';

    if(isset($_FILES['file']['name']))
    {
        $uploadDir ="uploads/";
        
        if(!empty($_FILES['file']['name']))
        {
            $fileToUpload = $uiploadDir.basename($_FILES['file']['name']);
            if(move_uploaded_file($_FILES['file']['tmp_name'], $fileToUpload))
            {
                $file = htmlspecialchars($_FILES['file']['name']);
                $result = "UPDATE user SET profile_image = '$file' WHERE username = '$username' ";
                $r = Query($result);
            }
                
        }
    }




?>