<?php
if (isset($_POST['clear'])) {
    unset($_SESSION); 
    $_SESSION['img'] = 'default.jpeg';  
    session_destroy();
    unset($_SESSION);
}

elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["newimage"])) {
  
        $target_dir = "uploads/"; 
        $target_file = $target_dir . basename($_FILES["newimage"]["name"]);

        if (move_uploaded_file($_FILES["newimage"]["tmp_name"], $target_file)) {
            $_SESSION['img'] = $target_file;
            
        } 
    }

  



;
?>