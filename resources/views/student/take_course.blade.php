<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Take Course</title>
    <style>
    table, th,td{
      border:1px solid black;
      border-collapse: collapse;
    }
    </style>
  </head>
  <body>
      <h1>Take Course</h1>
      <form action="/advising_window" method="POST">
        @csrf
      <label for="subject">Please Choose Subject</label>
      <br>
      <table>
        <tr>
          <th>Course Name</th>
          <th>Faculty Name</th>
          <th>Section</th>
        </tr>
      @foreach ($course as $course)
          <tr>
            <td>{{$course->course_name}}</td>
            <td>{{$course->supervisor_name}}</td>
            <td>{{$course->section}}</td>
          </tr>
      @endforeach
      </table>
      </form>



  </body>
</html>
