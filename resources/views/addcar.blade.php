<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- navbar start  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Car<span class="text-danger">4</span>U</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarScroll ">
                <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/form">Book Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Logout</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    <!-- navbar end  -->
    <div class="d-flex justify-content-center">
        <a href="/viewrequest" class="btn btn-primary m-3">Requests</a>
        <a href="/addcar" class="btn btn-primary m-3">Add Car</a>
        <a href="/dash" class="btn btn-primary m-3">Dashboard</a>
    </div>

    <div class="mb-5">
        <div class="container d-flex justify-content-center">
            <div class="w-50 px-5 pt-5">
                <form action="carregit" method="post">
                    @csrf
                    <h2 class="text-center my-2 text-danger">Add Car</h2>
                    <div class="d-flex justify-content-between my-2">
                        <label for="carname">Name</label>
                        <input type="text" required name="carname">
                    </div>
                    <div class="d-flex justify-content-between my-2">
                        <label for="carprice">Price</label>
                        <input type="text" required name="carprice">
                    </div>
                    <div class="d-flex justify-content-between my-2">
                        <label for="carseat">Seats</label>
                        <input type="text" required name="carseat">
                    </div>
                    <div class="d-flex justify-content-between my-2">
                        <label for="image">Image</label>
                        <input type="file" required name="carimg">
                    </div>

                    <div class="text-center my-2">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('footer')