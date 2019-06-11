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
  margin: 150px auto;
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

</style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
       {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script> --}}
    </head>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style: none">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('student-status'))
    <div class="alert alert-success">
        {{ session('student-status') }}
    </div>
@endif
{{-- <script type="text/javascript">
   $(function () {
   var bindDatePicker = function() {
    $(".date").datetimepicker({
        format:'YYYY-MM-DD',
      icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down"
      }
    }).find('input:first').on("blur",function () {
      // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
      // update the format if it's yyyy-mm-dd
      var date = parseDate($(this).val());

      if (! isValidDate(date)) {
        //create date based on momentjs (we have that)
        date = moment().format('YYYY-MM-DD');
      }

      $(this).val(date);
    });
  }
   
   var isValidDate = function(value, format) {
    format = format || false;
    // lets parse the date to the best of our knowledge
    if (format) {
      value = parseDate(value);
    }

    var timestamp = Date.parse(value);

    return isNaN(timestamp) == false;
   }
   
   var parseDate = function(value) {
    var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
    if (m)
      value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

    return value;
   }
   
   bindDatePicker();
 });
</script> --}}
<form id="form" method="post" action="{{ route('register.student') }}">
  {{ csrf_field() }}
   <p>Register as a student.</p>

   <div class="form-group">
      <label for="full_name">Your Full Name:</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i>            </div>
         <input type="text" id="full_name" name="full_name" placeholder="Jane Smith..."/>
         </div>
      </div>
   
   <div class="form-group">
      <label for="student_number">Student number</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true">            </i></div>
         <input type="text" id="student_number" name="student_number" placeholder="103432"/>
         </div>
      </div>
   </div>

   <div class="form-group">
      <label for="address">Student address</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true">            </i></div>
         <input type="text" id="address" name="address" placeholder="Highrise..."/>
         </div>
      </div>
   </div>
   
   <div class="form-group">
      <label for="dob">Date of Birth</label>
     <div class="input-group">
                <div class='input-group' id='datetimepicker1'>
                    <input type='date' name="dob" id="dob" class="form-control" />
                    <span class="input-group-addon"><i class="fa fa-calendar"></i>
                    </span>
                </div>
      </div>
   </div>


   
   <input type="submit" name="Register" class="btn btn-block btn-success">
<a href="{{ url('/') }}" class="btn btn-link" style="color: white; float: right;">Go Back</a>
</form>