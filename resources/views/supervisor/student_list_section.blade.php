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
              <form  action="{{route('update_grade')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="section" value="{{$students->student_id}}">
                <button type="submit" name="button" class="btn btn-primary">Update Grade</button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </body>
</html>
