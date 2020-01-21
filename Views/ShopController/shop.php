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
        <link rel="Stylesheet" type="text/css" href="Public/css/shopcss.css"/>
        <link rel="Stylesheet" type="text/css" href="Public/css/MediaQue.css" />
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery3.3.1.min.js"></script>
        <title>MicroMonsterRPG</title>
    </head>

<body>

    <div class = "menupanel">
            <div class = "menupanelbackground" >
                <form class="leftBarForm" action="?page=Shop" method="POST">
                    <button  type="submit" >HealPots</button>
                    <button  type="submit" >Monster Balls</button>
                    <button  type="submit" >Special Items</button>
                    <button  type="submit" >Attack changers</button>
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
            <form class="itemForm" action="?page=Shop" method="POST">-->
                <div class="itemLabel">
                    <?php echo $variables[0]?>
                    <button class="buyButton" formaction="?page=SmallMedicine">kup</button>
                </div>
                <div class="itemLabel">
                    <?php echo $variables[1]?>
                    <button class="buyButton" formaction="?page=MediumMedicine">kup</button>
                </div>
                <div class="itemLabel">
                    <?php echo $variables[2]?>
                    <button class="buyButton" formaction="?page=BigMedicine">kup</button>
                </div>
                <div class="itemLabel">
                    <?php echo $variables[3]?>
                    <button class="buyButton" formaction="?page=RedBall">kup</button>
                </div>
            </form>
    </div>

        $(document).ready(function(){
        $("p").click(function(){
        $(this).hide();
        });
        });
</body>
</html>