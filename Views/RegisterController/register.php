<!DOCTYPE html>
<head>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="Public/css/registerPage.css" />
    <link rel="Stylesheet" type="text/css" href="Public/css/MediaQue.css" />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery3.3.1.min.js"></script>
    <title>MicroMonsterRPG</title>
</head>
</head>

<body>
<div class="RegisterBlock">
    <form action="?page=register" method="POST" >
            <label for="email">Email address</label>
            <input name="email" type="text" placeholder="youremail@email.com">
            <label for="repeatemail">Repeat Email address</label>
            <input name="repeatemail" type="text" placeholder="youremail@email.com">
            <label for="password">Password</label>
            <input name="password" type="password" placeholder="password">
            <label for="repeatpassword">Repeat Password</label>
            <input name="repeatpassword" type="password" placeholder="password">
            <button  class="button3" name="buttonregister" type="submit" >Register Now!</button>
            <div class="message">
            <?php if(isset($message)): ?>
            <?php foreach($message as $item): ?>
            <div><?= $item ?></div>
            <?php endforeach; ?>
            <?php endif; ?>  
            </div>
    </form>
    <div class="facePicture">
        <img src="Public/img/facePicture.svg">
    </div>
    <div class="ExamplePhotos">
            <div class="photo">
                <img src="Public/img/rayHowAT.png" alt="ingame foto" class="grayscale">
                <div class="actionbar">Rayquaza lv10</div>
            </div>
            <div class="photo">
                <img src="Public/img/rayHowAT.png" alt="ingame foto" class="huerotate">
                <div class="actionbar">Rayquaza lv25</div>
            </div>
            
            
</div>
</div>


</body>
</html>