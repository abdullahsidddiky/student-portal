@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Grade</title>
  </head>
  <body>
    <div class="container">
      <h1>Update Student Grade</h1>
      <h2>Student Information</h2>
      <h3>Student ID:{{$student->student_id}}</h3>
      <h3>Course Name:{{$student->course_name}}</h3>
      <h3>Section:{{$student->section}}</h3>
        <form action="/update_grade/{id}" method="POST" class="form-group">
          {{csrf_field()}}
          <div class="form-group">
            <input type="hidden" name="student_id" value="{{$student->student_id}}">
            <label for="gpa" >Grade</label>
            <input list="gpa" name="gpa">
            <datalist id="gpa" name = "gpa">
                <option value=4.0></option>
                <option value=3.5></option>
                <option value=3.0></option>
            </datalist>
          </div>
        <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
          </form>
    </div>
  </body>
</html>
