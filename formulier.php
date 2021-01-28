<!DOCTYPE html>

<html lang="nl">

<head>
    <meta http-equiv="Content-Type"
          content="text/html"
          charset="UTF-8"/>
    <title>Testen</title>
</head>

<body>

<form action="verwerken.php" method="post">
Uw naam :
<input type="text" name="naam">
<input type="hidden" name="taal" value="false">
<br>kies een taal:
<input type= "radio" name="taal" value="N"> Nederlands
    <input type= "radio" name="taal" value="E"> Engels
    <input type= "radio" name="taal" value="S"> Spaans

    <input type="submit" name="submit" value="Versturen">
</form>

</body>

</html>
