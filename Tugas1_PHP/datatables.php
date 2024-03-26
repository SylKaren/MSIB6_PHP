<?php

    $name = ["Mori Calliope","Koseki Bijou","Ceres Fauna","Hakos Baelz","Ayunda Risu","Kureiji Ollie",
    "Vestia Zeta","Kobo Kanaeru","Shirakami Fubuki","Nekomata Okayu","Sakura Miko","Akai Haato"];
    $agency = 'Hololive';
    $regions = ["English","Indonesia","Japan","English","Indonesia","Japan",
    "English","Indonesia","Japan","English","Indonesia","Japan"];
    $listItem1 = ["Hololive","HOLOSTARS","hololive DEV_IS"];
    $listItem2 = ["Hololive English","Hololive Indonesia","Hololive Japan"];
    $sosmed = ["Youtube","Twitter","Tiktok"]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <table id="holoMember" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Agency</th>
                    <th>Region</th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i = 0; $i < count($name); $i++): ?>
                <tr>
                    <td><?= $name[$i] ?></td>
                    <td><?= $agency ?></td>
                    <td><?= $regions[$i] ?></td>
                </tr>
                <?php endfor; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Agency</th>
                    <th>Region</th>
                </tr>
            </tfoot>
        </table>
    
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
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        new DataTable('#holoMember',{
            layout:{
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        })
    </script>
</body>
</html>
