<?php
    if(!isset($_SESSION['id']) and !isset($_SESSION['role'])) {
        die('You are not logged in!');
    }

    if($_SESSION['role']!=2) {
        die('You do not have permission to watch this page!');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="Public/js/script.js"></script>
    
</head>
<body>
<div class="container">
    <div class="row">
        <h1 class="col-12 pl-0">ADMIN PANEL</h1>
        <h4 class="mt-4">Your data:</h4>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>rola</th>
                <th>money</th>
            </tr>
            </thead>
            <tbody class="users-list">
            <tr>
                <td><?php echo $message->getID(); ?></td>
                <td><?php echo $message->getEmail(); ?></td>
                <td><?php echo $message->getRole();?></td>
                <td><?php echo $message->getMoney();?></td>
            </tr>
            </tbody>
            </table>
    </div>
    <button class="btn btn-dark btn-lg" type="button" onclick="getUsers()">Get all users</button>

    <?php
if(isset($_SESSION))
print_r($_SESSION);
?>

<?php if(isset($message)): ?>
 <?php foreach($message as $item): ?>
 <div><?= $item ?></div>
 <?php endforeach; ?>
<?php endif; ?>
</div>
</body>
</html>