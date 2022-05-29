@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">
      <h1>Student list from each section</h1>
      <table class="table table-dark table-hover">
        <tr>
          <th>Student ID</th>
          <th>Course_name</th>
          <th>Section</th>
          <th>Grade</th>
          <th>Update Grade</th>
        </tr>
        @foreach ($students as $students)
          <tr>
            <td>{{$students->student_id}}</td>
            <td>{{$students->course_name}}</td>
            <td>{{$students->section}}</td>
            <td>{{$students->grade}}</td>
            <td>
              <a href="{{route('update_grade',['id'=>$students->student_id,'section'=>$students->section])}}" class="btn btn-primary stretched-link">Go somewhere</a>
            </td>
          </tr>
        @endforeach
      </table>
      <button type="button" name="button" class="btn btn-info" onclick="window.location.href='{{route('get_section_list',['section'=>$students->supervisor_name])}}';">View Your Section</button>
    </div>
  </body>
</html>
