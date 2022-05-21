<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Course</h1>
    <form action="/course" method="POST">
      {{csrf_field()}}
  <label for="subject_name">Subject Name</label>
  <input list="subject" name="subject">
  <datalist id="subject" name = "subject">
    @foreach ($subject as $subject)
    <option value="{{$subject->course_name}}"></option>
    @endforeach
  </datalist>
  <br>
  <label for="faculty_name">faculty Name</label>
  <input list="faculty" name="faculty">

  <datalist id="faculty">
    @foreach ($faculty as $faculty)
    <option value="{{$faculty->name}}"></option>
    @endforeach
  </datalist>
  <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
