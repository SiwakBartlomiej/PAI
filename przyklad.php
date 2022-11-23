<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przyklad PHP</title>
</head>
<body>
    <p>Paragraf statyczny</p>
    <?php
        $zmienna = 1;
        echo "<p>Paragraf dynamiczny</p>";

        $data = date("Y-m-d H:i:s");

        echo "<p>Dzisiejsza data: <strong>$data</strong>.</p>"
    ?>

    <p>
        Dzisiejsza data:
        <strong><?= $data ?></strong>
    </p>

    <?php
        $tablica = ['red', 'green', 'blue'];
        $tablica[] = 1000;
        $tablica[200] = 500.25;
        $tablica['indeks_tekstowy'] = 123123;

        // var_dump($tablica);

        echo "<ul>";
        foreach ($tablica as $kl => $wart){
            echo "<li><span style='color:red'>
                $kl</span> == <span style='color
                :green'>$wart</span></li>";
        }
        echo "<ul>";
    ?>

    <ul>
        <?php foreach ($tablica as $kl => $wart): ?>
            <li>
                <span style="color:orange"><?=$kl?></span>
                ==
                <span style="color:purple"><?=$wart?></span>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>