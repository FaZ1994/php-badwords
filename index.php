
<?php
$text = 'Il tiramisù si prepara con i pavesini';
$wordBanned = $_GET['wordBanned'];
$text_rep = str_replace($wordBanned, 'SAVOIARDI', $text);
$text_banned = str_replace($wordBanned, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $text ?></p>
    <p><?php echo strlen($text) ?></p>
    <p><?php echo $text_rep ?></p>
    <p><?php echo strlen($text_rep) ?></p>
    <p><?php echo $text_banned ?></p>
    <p><?php echo strlen($text_banned) ?></p>
    

    
</body>
</html>