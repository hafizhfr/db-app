<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
    <div class="container mb-3 mt-3">

        <table class="table table-striped table-bordered datatable" style="width: 100%">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hasil as $rows)
                    echo "<tr><td>$rows[username]</td>
                    <td>$rows[password]</td>
                    <td>$rows[name]</td>
                    <td>$rows[position]</td>
                    <td>$$rows[salary]</td>
                    <td><a href='?edit=$rows[id]'>Edit</a></td>
                    <td><a href='?del=$rows[id]'>Delete</a></td></tr>"; ?>

            </tbody>
        </table>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Add User</button>
        <!-- Modal -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Insert Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form1" name="form1" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="fname" placeholder="full name">
                            </div>
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" class="form-control" name="position" placeholder="position">
                            </div>
                            <div class="form-group">
                                <label>Salary</label>
                                <input type="text" class="form-control" name="salary" placeholder="salary">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="insert">Insert</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $('.datatable').DataTable();
    </script>
</body>

<?php 
if (isset($_POST['insert'])) {
    $controller = new c_userList();
    $controller->insert();
}?>
</html>