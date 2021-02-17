<?php
require_once '../load.php'; 
confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="main.css">    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h2>Dashboard page</h2>
<h3>You are in level</h3><?php echo getCurrentUserLevel(); ?>
<?php if(!empty($_SESSION['user_level'])):?>

    <a href="admin_user.php">Create New User</a>
<?php endif; ?>
    <a href="admin_logout.php">Sign out</a>

</body>
</html>