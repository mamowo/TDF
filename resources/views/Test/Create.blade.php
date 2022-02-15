@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb"></div>
  <div class="pull-left">
      <h2>Add New Test</h2>
  </div>
  <div class="pull-right">
      <a class ="btn btn-primary"href="#">back</a>
  </div>
</div>
<div class="container"> 
      <form action="#" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>testname</strong>
                            <input type="text" name="testname" class="form-control" placeholder="testname"></br>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>abrivation</strong>
                       <input type="text" name="abrivation" class="form-control" placeholder="abrivation"></br>
               </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>price</strong>
                    <input type="text" name="price" class="form-control" placeholder="price"></br>
            </div>
        </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>charge_code</strong>
                <input type="text" name="charge_code" class="form-control" placeholder="charge_code"></br>
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
                <strong>dicription</strong>
                <input type="text" name="dicription" class="form-control" placeholder="dicription"></br>
            </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>dicription</strong>
            <button type="submit" class="btn btn-primary">Submit</button>
       </div>
    </div>
</form>
</div>

    <div class="md-8"> </div>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

  </div>
</div>
@endsection