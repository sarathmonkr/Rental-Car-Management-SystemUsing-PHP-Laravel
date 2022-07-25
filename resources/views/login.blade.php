@include('header')
   
    

    <div class="container d-flex justify-content-center pt-5">
        <div class=" border border-3 rounded p-5  ">
            <form action="save" method="post">
                @csrf
                <div >
                    <div class="d-flex justify-content-center py-2">
                        
                         <h2>Login</h2>
                    </div>
                    <div class=" py-1">
                        <label for="uname">Username</label>
                    </div>
                    <div class="d-flex justify-content-center py-2">   
                        <input type="text" required name="uname">               
                    </div>
                    <div class=" py-1">
                        <label for="pwd">Password</label>
                    </div>
                    <div class="d-flex justify-content-center py-2">
                        <input type="password" required name="pwd">
                    </div>
                    <div class="d-flex justify-content-center py-2">
                        <input type="submit" value="login" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
    

@include('footer')