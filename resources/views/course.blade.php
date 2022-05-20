<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Course</h1>
    <form action="/course">
  <input list="course" name="course">
  <datalist id="course">
    @foreach ($subject as $subject)
    <option value="{{$subject->course_name}}"></option>
    @endforeach
  </datalist>
  <input type="submit">
</form>



  </body>
</html>
