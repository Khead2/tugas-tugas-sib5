<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h1>Assalamualaikum</h1>
        <h2>Selmat anda berhasil login</h2>
        <button type="submit" name="back">Logout</button>
    </form>
</body>
</html>

<?php 
    if (isset($_POST['back'])) {
        header("Location: tugas4php.php");
        exit();
    }
?>  
