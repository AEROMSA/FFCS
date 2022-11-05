<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>contact</title>
</head>
</body>

<?php

$retour = mail("flyfennecconsulting@gmail.com","essai","cou les amis","");
if ($retour) {
    echo "<p>L'email a bien été envoyé.<p>";
}
</body>
</html>