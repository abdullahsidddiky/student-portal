@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>supervisor</title>
  </head>
  <body>
    @php
      $grade= session()->get('grade');
      $supervisor=session()->get('supervisor');
      $unique_section_course_name = session()->get('unique_section_course_name');
    @endphp

    <br>
    <br>
    <br>
{{$unique_section_course_name}}
   <div class="container">
    <h1>Supervisor Page</h1>
    <table class="table table-striped table-hover">

    </table>
  </div>
  </body>
</html>
