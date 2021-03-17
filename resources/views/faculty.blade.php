<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Laraval Student App</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Student</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/faculty">Faculty</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <h2><b><center>Faculty Page</center></b></h2>
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <td>Faculty Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><textarea name="" id="" cols="30" rows="10" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Education Qualification</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>College</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-dark">Submit</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>