<?php

    $company = "Hololive";
    $compDesc = "hololive production is a VTuber agency that consists of the talent groups hololive and HOLOSTARS. hololive production has over 80 affiliated talents active in Japan, Indonesia, and English-speaking countries, and has over 80 million YouTuber subscribers all across the channels.
    <br><br>With COVER Corporation’s VR/AR technology, hololive production talents provide various experiences ranging from game streams to offline concerts, and form a stable community that connects fans, creators, and talents all around the world via social networks.";
    $holoEN = ["Mori Calliope","Koseki Bijou","Ceres Fauna","Hakos Baelz"];
    $holoID = ["Ayunda Risu","Kureiji Ollie","Vestia Zeta","Kobo Kanaeru"];
    $holoJP = ["Shirakami Fubuki","Nekomata Okayu","Sakura Miko","Akai Haato"];
    $listItem1 = ["Hololive","HOLOSTARS","hololive DEV_IS"];
    $listItem2 = ["Hololive English","Hololive Indonesia","Hololive Japan"];
    $sosmed = ["Youtube","Twitter","Tiktok"]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="jumbotron card card-block">
                    <h2>
                        <?=$company?>
                    </h2>
                    <p>
                        <?=$compDesc?>
                    </p>
                    <p>
                        <a class="btn btn-primary btn-large" href="#">Learn more</a>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="carousel slide" id="carousel-423958">
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carousel-423958">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-423958" class="active">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-423958">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap First" src="https://wallpapercave.com/wp/wp9430387.png" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="" src="https://wallpapercave.com/wp/wp8600323.jpg" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://wallpapercave.com/wp/wp10025242.jpg" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div> <a class="carousel-control-prev" href="#carousel-423958" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-423958" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>
            </div>
            <div class="col-md-3">
                <div id="card-542960">
                    <div class="card">
                        <div class="card-header">
                             <a class="card-link" data-toggle="collapse" data-parent="#card-542960" href="#card-element-974911">Hololive EN</a>
                        </div>
                        <div id="card-element-974911" class="collapse hidden">
                            <div class="card-body">
                                <?php foreach ($holoEN as $talent): ?>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action"><?=$talent?></a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                             <a class="card-link" data-toggle="collapse" data-parent="#card-542960" href="#card-element-16234">Hololive ID</a>
                        </div>
                        <div id="card-element-16234" class="collapse hidden">
                            <div class="card-body">
                                <?php foreach ($holoID as $talent): ?>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action"><?=$talent?></a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                             <a class="card-link" data-toggle="collapse" data-parent="#card-542960" href="#card-element-3244">Hololive JP</a>
                        </div>
                        <div id="card-element-3244" class="collapse hidden">
                            <div class="card-body">
                                <?php foreach ($holoJP as $talent): ?>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action"><?=$talent?></a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bg-body-tertiary">
            <div class="col-md-4">
                <ul style="list-style: none;">
                    <?php foreach ($listItem1 as $item1): ?>
                    <li class="list-item"><?= $item1 ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <ul style="list-style: none;">
                    <?php foreach ($listItem2 as $item2): ?>
                    <li class="list-item"><?= $item2 ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-4">             
                <address>
                     <strong>Social Media </strong><br />
                     <?php foreach ($sosmed as $social): ?>
                     <a href="#"><?= $social ?></a><br />
                     <?php endforeach; ?>
                </address>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>