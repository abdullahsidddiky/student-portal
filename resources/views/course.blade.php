@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <div class="container">
    <h1>Course</h1>
    <form action="/course" method="POST" class="form-group">
      {{csrf_field()}}
    <div class="form-group">
  <label for="subject_name" >Subject Name</label>
  <input list="subject" name="subject">
  <datalist id="subject" name = "subject">
    @foreach ($subject as $subject)
    <option value="{{$subject->course_name}}"></option>
    @endforeach
  </datalist>
  </div>
  <div class="form-group">
  <label for="faculty_name" >Faculty Name</label>
  <input list="faculty" name="faculty">
  <datalist id="faculty">
    @foreach ($faculty as $faculty)
    <option value="{{$faculty->name}}"></option>
    @endforeach
  </datalist>
  </div>
  <div class="form-group">
  <label for="section" >Section</label>
  <input type="text" name="section">
  </div>
  <div class="form-group">
  <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</body>
</html>
