<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts & Styles -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      </head>
      <body>
        
{{-- <table class="table table-striped">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Amount</th>
        <th>Date of Payment</th>
      </tr>
    </thead>
    <tbody>
@foreach($fees as $fee)
      <tr>
        <td>{{ $fee->student_id }}</td>
        <td>{{ $fee->student_name }}</td>
        <td>{{ $fee->amount }}</td>
        <td>{{ $fee->date_of_payment }}</td>
      </tr>
@endforeach
    </tbody>
  </table> --}}
  <div class="container">
  <h2>Total fees by all students</h2>
  <p>Type something in the input field to search in the entries:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
     <thead>
      <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Amount</th>
        <th>Date of Payment</th>
      </tr>
    </thead>
    <tbody id="myTable">
@foreach($fees as $fee)
      <tr>
        <td data-toggle="tooltip" title="Click to Student's fee payment" onclick="window.location='{{ url('/fees',[$fee->student_id]) }}'">{{ $fee->student_id }}</td>
        <td>{{ $fee->student->full_name }}</td>
        <td>{{ $fee->amount }}</td>
        <td>{{ $fee->date_of_payment }}</td>
      </tr>
@endforeach
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>
  <a href="{{ url('/') }}" class="btn btn-link" style="bottom: 0; position: fixed;">Go Back</a>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
      </body>
      </html>