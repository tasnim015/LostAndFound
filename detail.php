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
        <h1>Product Details:</h1>
    </div>

    <div class="card justify-content-center" style="width: 500px; margin-top:5%; margin-left:20%;">
        <img src="images/bag.jpg" class="card-img-top img-fluid" alt="..." style="height: 300px;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="claim.php" class="btn btn-primary">Claim item</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>