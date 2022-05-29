$@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Grades</title>
  </head>
  <body>
    <div class="container">
      <h1>All Grades</h1>
      <table class="table table-striped table-hover">

          <tr>
            <th scope="col">Index</th>
            <th scope="col">Course Name</th>
            <th scope="col">Supervisor Name</th>
            <th scope="col">Section</th>
            <th scope="col">Grade</th>
          </tr>
          @foreach ($grades as $grade)
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$grade->course_name}}</td>
              <td>{{$grade->supervisor_name}}</td>
              <td>{{$grade->section}}</td>
              <td>{{$grade->grade}}</td>
            </tr>
          @endforeach

      </table>
    </div>
  </body>
</html>
