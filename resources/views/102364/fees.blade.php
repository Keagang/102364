<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

<style type="text/css">
   * {
  box-sizing: border-box;
  font-family: "Merriweather Sans", sans-serif;
}

body #form {
  color: white;
  background-color: #f28500;
  border-radius: 5px;
  width: 400px;
  padding: 40px;
  margin: 100px auto;
  -webkit-box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.75);
  box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.75);
}
body #form p {
  font-size: 0.9em;
}
body #form button {
  width: 100%;
  text-align: center;
  color: grey;
  margin-top: 20px;
  border: 1px solid rgba(0, 0, 0, 0.4);
}
body #form .form-group {
  margin: 15px auto;
}
body #form .form-group label {
  font-weight: bold;
  font-size: 0.9em;
}
body #form .form-group .input-group {
  border-radius: 5px;
  -webkit-box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.35);
  -moz-box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.35);
  box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.35);
}
body #form .form-group .input-group .input-group-addon {
  border: none;
  border-right: 1px solid rgba(0, 0, 0, 0.2);
}
body #form .form-group .input-group input {
  padding-left: 10px;
}
body #form .form-group .input-group i {
  color: #009EDF;
}
body #form .form-group input {
  padding: 3px;
  width: 100%;
  border: none;
  border-radius: 0 5px 5px 0;
}
.end{
  bottom: 0px;
  position: fixed;
  background-color: #dddddd !important;
  color: green !important;        
  border-color: #dddddd !important;
  left: 45%;
}
</style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
@if ($errors->any())
    <div class="alert alert-danger" >
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style: none;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('fee-status'))
    <div class="alert alert-success">
        {{ session('fee-status') }}
    </div>
@endif

<form id="form" method="post" action="{{ route('fees.store') }}">
  {{ csrf_field() }}
   <p>Please input pending fees.</p>

   <div class="form-group">
      <label for="student_id">Student Number:</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i>            </div>
         <input type="text" id="student_id" name="student_id" placeholder="102234..."/>
         </div>
      </div>
   
   <div class="form-group">
      <label for="details">Choose to pay full amount or by part</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true">            </i></div>
         <select class="input-group" name="student_details">
           <option value="">Select One...</option>
           <option value="pay-type: full">In full</option>
           <option value="pay-type: bits">By bits</option>
         </select>
         </div>
      </div>
      </div>

   
   <div class="form-group">
      <label for="amount">Fee amount (Kshs.):</label>
      <br />
       <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i>            </div>
         <input type="text" id="amount" name="amount" placeholder="Enter Amount"/>
         </div>
   </div>
   
   </div>
   
   <input type="submit" name="Register" class="btn btn-block btn-success">
   <a href="{{ url('/') }}" class="btn btn-link" style="color: white; float: right;">Go Back</a>
</form>
<a href="{{ url('/total-fees') }}" class="btn  end">See Total Fees</a>

</html>