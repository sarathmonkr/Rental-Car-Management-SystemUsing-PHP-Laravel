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


    <div class="">
        <div class="row">
            @foreach ($data as $i)

            <div class="col-sm-3 ">
                <div class="border border-3 m-2 border-primary p-5 rounded bg-primary text-light">
                    <p>Name:{{$i->name}}</p>
                    <p>Address:{{$i->address}}</p>
                    <p>Phone:{{$i->phone}}</p>
                    <p>Pickup Point:{{$i->pickup}}</p>
                    <p>Car :{{$i->car}}</p>
                    <a href="/finished/{{$i->id}}" class="btn btn-warning text-center">Finished</a>
                </div>
            </div>


            @endforeach
        </div>
    </div>
    @include('footer')