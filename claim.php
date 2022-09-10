<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="menu-section ">
        <nav class="navbar navbar-expand-lg fixed-top bg-dark ">
            <a class="navbar-brand text-primary px-5" href="home.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> <i class="fa fa-bars" aria-hidden="true"></i> </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end menu_content" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-light px-3" href="lost.php"> Lost</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light pr-3 px-3" href="found.php"> Found</a>
                    </li>



                </ul>

            </div>
        </nav>
    </div>
    <div class="container " style="margin-top: 100px;">
        <h1>Claim Item:</h1>
    </div>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <form action="/action_page.php">
                <div class="mb-3 mt-3">
                        <label for="whereLost" class="form-label">Where lost: </label>
                        <input type="text" class="form-control" id="whereLost" placeholder="where lost" name="whereLost">
                    </div>
                    <div class="mb-3">
                        <label for="whenLost" class="form-label">When lost: </label>
                        <input type="text" class="form-control" id="whenLost" placeholder="When lost" name="whenLost">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Product description: </label>
                        <input type="text-area" class="form-control" id="productDescription" placeholder="please say something about your product condition" name="productDescription">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>