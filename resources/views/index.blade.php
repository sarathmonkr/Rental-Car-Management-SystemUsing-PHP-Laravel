@include('header')


<div class="container-fluid p-0 ">


    <!-- display car start  -->
    <div class="container">
        <div class="row ">
            @foreach ($data as $i)
            <div class="col-sm-4 my-4 ">
                <div class=" h-25"><img src="images/{{$i->img}}" class="img-fluid" alt=""></div>
            </div>
            <div class="col-sm-8 my-4">
                <p>Name:{{$i->carname}}</p>
                <p>Seats:{{$i->carseats}}</p>
                <p>Price per KM:{{$i->carprice}}</p>
                <div class="col-2">
                    <a class=" active btn btn-primary" aria-current="page" href="/form">Book Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- display car end  -->


    <!-- cousesel start  -->

    <div class="container-fluid p-0">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://imgd-ct.aeplcdn.com/664x415/n/cw/ec/54399/swift-exterior-left-front-three-quarter.jpeg?q=75"
                        class="d-block w-100 img-fluid" height="600px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Maruti Suzuki Swift</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2022-jeep-compass-trailhawk-4xe-110-1617814641.jpg?crop=1.00xw:0.753xh;0,0.232xh&resize=980:*"
                        class="d-block w-100 h-50 img-fluid" height="600px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jeep Compass</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://carnetwork.s3.ap-southeast-1.amazonaws.com/file/879e3602f33e46ec9c0560a4715f5cde.jpg"
                        class="d-block w-100 img-fluid" height="600px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Toyota Innova Crysta</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <!-- cousesel end  -->


</div>


@include('footer')