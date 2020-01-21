<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" type="text/css" href="Public/css/styles.css" />
    <link rel="Stylesheet" type="text/css" href="Public/css/MediaQue.css" />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery3.3.1.min.js"></script>
    <title>MicroMonsterRPG</title>
    
</head>

<body>
<div class="Block">
    <div class="logo">
        <img src="Public/img/MiniMonsterLogo.svg">
    </div>
    <form action="?page=login" method="POST" >
            <input name="email" type="text" placeholder="youremail@email.com">
            <input name="password" type="password" placeholder="password">
            <button class="button" type="submit" >PLAY!</button>
            <button class="button2" type="submit" formaction="?page=register">Register Now!</button>
            <div class='message'>
                <?php if(isset($message)): ?>
                <?php foreach($message as $item): ?>
                <div><?= $item ?></div>
                <?php endforeach; ?>
                <?php endif; ?>  
            </div>     
    </form>
        
</div>



</body>
</html>