<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Data</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <form id="form1" name="form1" method="post" action="">
        <div class="panel panel-default custom">
            <div class="panel-heading">Edit Data</div>
            <div class="panel-body">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo "$hasil[username]"; ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo "$hasil[password]"; ?>">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo "$hasil[name]"; ?>">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" class="form-control" name="position" value="<?php echo "$hasil[position]"; ?>">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" class="form-control" name="salary" value="<?php echo "$hasil[salary]"; ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                <button type="submit" class="btn bbtn-secondary" name="back">Back</button>
            </div>
        </div>
        </div>
    </form>
</body>
<?php
if (isset($_POST['edit'])) {
    $control = new c_userList();
    $control->editData($hasil['id'], $_POST['username'], $_POST['password'], $_POST['fname'], $_POST['position'], $_POST['salary']);
} else if (isset($_POST['back'])) {
    header('Location:index.php');
}
?>

<style>
    .custom {
        width: 40%;
        margin: 0;
        min-width: 350px;
    }
</style>

</html>