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
   <div class="container">
    <h1>Supervisor Page</h1>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Index</th>
          <th scope="col">Course Name</th>
          <th scope="col">Section</th>
        </tr>
      </thead>

      @foreach ($unique_section_course_name as $value)

      <tbody>
        <tr>
          <th scope="col"></th>
          <td>Mark</td>
        </tr>
        <tr>
          <th scope="col"></th>
          <td>Jacob</td>
        </tr>
      </tbody>
      @endforeach

    </table>
  </div>
  </body>
</html>
