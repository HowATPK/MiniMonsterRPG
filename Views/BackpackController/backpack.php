<?php
    if(!isset($_SESSION['id']) and !isset($_SESSION['role'])) {
        die('You are not logged in!');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="Stylesheet" type="text/css" href="Public/css/main.css"/>
        <link rel="Stylesheet" type="text/css" href="Public/css/MediaQue.css" />
        <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="Public/js/backpack.js"></script>
        <title>MicroMonsterRPG</title>
    </head>

<body>

    <div class = "menupanel">
            <div class = "menupanelbackground" >
                <form class="leftBarForm" action="?page=Backpack" method="POST">
                    <button  type="submit" >HealPots</button>
                    <button  type="submit" >Monster Balls</button>
                    <button  type="submit" >Special Items</button>
                    <button  type="button" onclick="getItems()">All</button>
                    <button  class="buttonRightPanelGoBack" type="submit" formaction="?page=mainPage">Go Back</button>
                </form>
            </div>
    </div>


    <div class="block2">
            <div class="rightleftinformator">
                <div class="monay">
                    <img src="Public/img/coin.svg">
                    <?php
                    print_r($_SESSION['monay']);
                    ?>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>Item</th>
                    <th>Cost</th>
                    </tr>
                </thead>
                <tbody  class="niewiem">
                    <tr>
                    <td></td>
                    <td></td>
                    </tr>
                </tbody>
                </table>
    </div>
    


</body>
</html>