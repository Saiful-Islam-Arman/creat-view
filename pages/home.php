<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">About</a></li>
                <li><a href="" class="nav-link">Service</a></li>
            </ul>
        </div>
    </nav>

    <section class="my-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Simple Calculator Using PHP</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row m-2">
                                <label for="" class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="first_number" placeholder="Inter first number" class="form-control">
                                </div>
                            </div>
                            <div class="row m-2">
                                <label for="" class="col-md-3">Last Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="last_number" placeholder="Inter second number" class="form-control">
                                </div>
                            </div>
                            <div class="row m-2">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-3 mr-5">
                                    <select name="operator" class="form-control">
                                        <option name="add" value="+">Add</option>
                                        <option name="sub" value="-">Substruct</option>
                                        <option name="mult" value="*">Multiply</option>
                                        <option name="divide" value="/">Divide</option>
                                        <option name="modul" value="%">Modulus</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" name="full_name_button" class="btn btn-success" value="Make Full Name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>