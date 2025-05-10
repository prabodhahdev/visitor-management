@extends('dashboard')
@section('content')

<div class="container">
<div class="row mt-5">
<div class="offset-md-4 col-md-4">
    <div class="card">
        <div class="card-header">NeoVisitor-Admin Sign Up</div>
        <div class="card-body">
            <form action='' method='POST'>
                @csrf
            <div class="form-group mb-3">
                <input type="text" name='name' placeholder='Enter Name' class='form-control' value=''>
            </div>

            <div class="form-group mb-3">
                <input type="text" name='email' placeholder='Enter Email' class='form-control' value=''>
            </div>

            <div class="form-group mb-3">
                <input type="password" name='password' placeholder='Enter Password' class='form-control' value=''>
            </div>


            <div class="form-group mb-3 text-center">
            <button type='submit' class='btn btn-dark btn-block'>Sign Up</button>
            </div>  
            <br>
        
           <!-- 
              <br>
            <div class="text-center">
            <p>Have an account? <a href="{{route('login')}}">Login</a></p>
            </div> -->


            </form>

        </div>
    </div>
</div>
</div>
</div>

 
@endsection
