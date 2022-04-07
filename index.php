<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <h1>ORIGINAL SONG TEXT:</h1>
    <?php

    $song_text = 
    "Look inside, look inside your tiny mind and look a bit
    harder cause we're so uninspired so sick and tired of all the
    hatred you harbor so you say it's not okay to be gay well I think
    you're just evil you're just some racist who can't tie my laces you're
    point of view is marked evil fuck you, fuck you very very much
    cause we hate what you do and we hate your whole crew so please don't
    stay in touch fuck you, fuck you very very much cause your words
    don't translate and it's getting quite late so please don't stay in touch
    do you get, do you get a little kick out of being small-minded?";

    echo $song_text;

    ?>
    
    <h2>Text length: <?= strlen($song_text) ?> </h2>

    <h1>CENSURED SONG TEXT:</h1>

    <?php
    $bad_word = $_GET["word"];
    $censured_text = str_replace($bad_word, "***", $song_text);
    echo $censured_text;
    ?>

    <h2>Text length: <?= strlen($censured_text) ?> </h2>

</body>
</html>