<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->

    <?php include "head.php"; ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<?php include "nav.php"; ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="page-header clearfix">
                        <h2 class="pull-left mt-4">User List</h2>
                        <a href="create.php" class="btn btn-success float-right">Add New User</a>
                    </div>
                   <?php
                    include_once 'db.php';
                    $result = mysqli_query($conn,"SELECT * FROM students");
                    ?>

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                    <style>
                        table {
                            font-family: arial, sans-serif;
                            border-collapse: collapse;
                            width: 100%;
                        }

                        td {
                        border: 1px solid #3e7544;
                        text-align: left;
                        padding: 8px;
                        }

                        tr{
                        background-color: #aef5b6;
                        }
                    </style>
                      <table class='table table-bordered table-striped mt-4'>
                      <tr>
                        <td>Name</td>
                        <td>Email id</td>
                        <td>Mobile</td>
                        <td>Action</td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo ($row["mobile"])?($row["mobile"]):('N/A'); ?></td>
                        <td><a href="view.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary" title='View Record'>View</a>
                        <a href="update.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary" title='Update Record'>Update</a>
                        <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger" title='Delete Record'>Delete</a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>

                </div>
            </div>     
        </div>
<?php include 'js.php';?>
</body>
</html>
