<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <?php $names=[
    ["name"=>"alaa",
    "job"=>"frontend",
    "age"=>"26"],
    ["name"=>"ahmed",
    "job"=>"backend",
    "age"=>"27"],
    ["name"=>"diaa",
    "job"=>"fullstack",
    "age"=>"28"]
    ];?>
    <?php for($i=0; $i<count($names);$i++) { ;?>
    <!--to loop for each developer array of data-->
    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <?php foreach($names[$i] as $key => $value) {; ?>
            <!---each array's data stored as key and value-->

            <h5 class="card-title"><?=$key; ?> : <?=$value;?></h5>
            <!--printing each array in card
            <!-- <h6 class="card-subtitle mb-2 text-muted"><?=$key; ?> : <?=$value;?></h6>
            <p><?=$key; ?> : <?=$value;?></p> -->
            <?php
            }; ?>
        </div>

    </div>

    <?php
            }; ?>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>