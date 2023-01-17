@include('layout.header')

        <form action="{{url('/')}}/login" method="post"> <!--After submitting the form it will redirect login page-->
         @csrf 
<!-- csrf stands for crosssite request forgery. That identifies users by providing a unique token -->
        <div class="container">
    <div class="form-group">
        <label for="" >Email address</label>
    <input type="email"  name="email" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password"class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>