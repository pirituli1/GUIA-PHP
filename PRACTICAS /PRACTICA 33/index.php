<!DOCTYPE html>
<html>
<head>
    <title>Practica 33</title>
</head>
<body>
    <form action="index2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivos[]" multiple accept=".jpg, .jpeg, .png, .pdf">
        <br><br>
        <input type="submit" value="Subir archivos">
    </form>
</body>
</html>