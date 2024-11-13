<?php  
     session_start();  
     

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sessions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
include 'session.php'; ?>
<div class="image-container">
    <img src='<?php echo isset($_SESSION['img']) ? $_SESSION['img'] : "default.jpeg"; ?>' id="previewImage">
</div>

<div class="controls">
    
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" class="form-control mb-3" id="imageInput" style="max-width: 400px; margin: 0 auto;" name="newimage">
        <button type="submit" class="btn btn-success me-2">Submit</button> 
        <button type="submit" class="btn btn-danger" name="clear">Clear</button>
    </form>
   
</div>

</body>
</html>
