<?php ?>
<!DOCTYPE html>
<html>

<head>
    <title>Demo-title</title>
    <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
    <div class="col-md-4">
            <form name="demo-form" action="login.php" method="post">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Login Form</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="username">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary form-control" name="submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
