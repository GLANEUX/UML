<!DOCTYPE html>
<html>
<head>
    <title>Calcul de l'impôt</title>
</head>
<body>
    <form action="resultatImpot.php" method="post">
        <label for="name">Nom :</label>
        <input type="text" name="name" required><br><br>
        
        <label for="revenu">Revenu :</label>
        <input type="number" name="revenu" required><br><br>
        
        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>
