<?php
require_once 'include/database.php';
require_once 'include/function.php';
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Организации</title>
    <link rel="stylesheet" href="css/styleOrganisationMain.css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
    <style>
        @import url ("css/styleOrganisationMain.css");
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: radial-gradient(circle farthest-corner at 100px 50px, #FBF2EB, #352A3B);
        }
        .organisation-form{
            background-color: #222;
            text-align: center;
            min-width: 160px;
            min-height: 40px;
            padding: 10px 0 10px 10px;
            font-size: 18px;
        }
        .cap-organisation{
            color: #FFFFFF;
            font-size: 24px;
            padding: 0 16px 10px 10px;
        }
        .organisation-list{
            text-decoration: none;
            color: #FFFFFF;
            margin: 5px 12px 5px 5px;
        }
        .users-data{
            margin:0 0 5px 0;
        }
    </style>
<body>
    <div class="organisation-form">
        <legend class="cap-organisation">Организации</legend>
        <div class="organisation-list">
            <?php
            $organisation = get_users($link);
            ?>
            <?php if(count($organisation)===0): ?>
            <?php else: ?>

                <?php foreach ($organisation as $organisation): ?>
                    <div class="users-data">
<!--                        <span class="title-organisation">ID Organisation name Register number ACM</span>-->
<!--                        --><?//=$organisation["ID"]?>
<!--                        --><?//=$organisation["Organisation name"]?>
                        <a class="organisation-list" href="#"><?=$organisation["Organisation name"]?></a>
<!--                        --><?//=$organisation["Register number"]?>
<!--                        --><?//=$organisation["ACM"]?>
<!--                            --><?//=$organisation["id"]?>
<!--                            --><?//=$organisation["Last name"]?>
<!--                            --><?//=$organisation["First name"]?>
<!--                            --><?//=$organisation["Middle name"]?>
<!--                            --><?//=$organisation["Birthday date"]?>
<!--                            --><?//=$organisation["TAI"]?>
<!--                            --><?//=$organisation["INIP"]?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>