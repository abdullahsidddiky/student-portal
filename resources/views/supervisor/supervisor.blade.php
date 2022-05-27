@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>supervisor</title>
  </head>
  <body>
    @php
    use App\Models\Grade;
    use App\Models\Supervisor;
      $grade= session()->get('grade');
      $supervisor=session()->get('supervisor');
      $g = session()->get('grouped');
    @endphp
    {{$grade}}
    {{$supervisor}}
    <br>
    <br>
    <br>
{{$g}}
   <div class="container">
    <h1>Supervisor Page</h1>
    <table class="table table-striped table-hover">

    </table>
  </div>
  </body>
</html>
$grouped = $things->groupBy('type');
Machine::groupBy('category')->get();
