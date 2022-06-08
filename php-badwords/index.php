<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
   
    <?php $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit." ?>

    <h2>Display of the text</h2>
    <p>
        <?php
        echo $text;
        ?>

    </p>

    <h2>Display of the lenght of the text</h2>
    <p>
        <?php
        echo "the lenght of the given text is " . strlen($text) . " caratteri."
        ?>
    </p>

    
</body>

</html>