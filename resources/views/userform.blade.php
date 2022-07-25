@include('header');

    <div class="container d-flex justify-content-center">
        <div class="w-50 pt-5">
            <form action="registerit" method="post">
                @csrf
                <h2 class="text-center my-2 text-danger">Book Now</h2>
                <div class="d-flex justify-content-between my-2">
                    <label for="name">Name</label>
                    <input type="text" required name="name">
                </div>
                <div class="d-flex justify-content-between my-2">
                    <label for="address">Address</label>
                    <input type="text" required name="address">
                </div>
                <div class="d-flex justify-content-between my-2">
                    <label for="Phone">Phone</label>
                    <input type="text" required name="phone">
                </div>
                <div class="d-flex justify-content-between my-2">
                    <label for="pickup">Pick-up Point</label>
                    <input type="text" required name="pickup">
                </div>
                <div class="d-flex justify-content-between my-2">
                    <label for="car">Car Name</label>
                    <input type="text" required  name="car">
                </div>
                <div class="text-center my-2">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    
    </div>



@include('footer')