<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="Stylesheet" type="text/css" href="Public/css/main.css"/>
        <link rel="Stylesheet" type="text/css" href="Public/css/MediaQue.css" />
        <title>MicroMonsterRPG</title>
    </head>

<body>

    <div class = "menupanel">
            <div class = "menupanelbackground" >
                <form class="leftBarForm" action="?page=mainPage" method="POST">
                    <button  type="submit" formaction="?page=Backpack" >Backpack</button>
                    <button  type="submit" >Monsters</button>
                    <button  type="submit" >Battle</button>
                    <button  type="submit" formaction="?page=Shop">Item Shop</button>
                    <button  type="submit" >Friendlist</button>
                    <button  class="buttonRightPanelJoin" type="submit" >JOIN</button>
                    <button  class="buttonRightPanelLogout" type="submit" formaction="?page=logout">Logout</button>
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
            <div class="logomainscr">
                    <img src="Public/img/MiniMonsterLogo.svg">
            </div>
            <?php
               // if(isset($_SESSION))
                //print_r($_SESSION);
            ?>
            
            
        

    </div>
    


</body>
</html>