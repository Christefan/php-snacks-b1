<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $games = [
        [
            "squadraCasa" => "Milano",
            "puntiCasa" => rand(1,100),
            "squadraOspite" => "Varese",
            "puntiOspite" => rand(1,100),
        ],
        [
            ""  
            "squadraCasa" => "Brindisi",
            "puntiCasa" => rand(1,100),
            "squadraOspite" => "Trento",
            "puntiOspite" => rand(1,100),
            
        ],
        [
            
            "squadraCasa" => "Pesaro",
            "puntiCasa" => rand(1,100),
            "squadraOspite" => "Trieste",
            "puntiOspite" => rand(1,100),
            
        ],
    ];
    ?>
    <h1> Snack 1 </h1>
        <ul>
        <?php for($i = 0; $i < count($games); $i++){ ?>
        <li> 
            <span>
            <?php echo $games[$i]["squadraCasa"]; ?>
            </span>
            -
            <span>
            <?php echo $games[$i]["squadraOspite"]; ?>
            </span>
            |
            <span>
            <?php echo $games[$i]["puntiCasa"]; ?>
            </span>
            -
            <span>
            <?php echo $games[$i]["puntiOspite"]; ?>
            </span>
        </li>
        <?php } ?>
    </ul>
</body>
</html>