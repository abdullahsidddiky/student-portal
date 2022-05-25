@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>subject</title>
  </head>
  <body>
   <div class="container">
    <h1>Create Subject</h1>
      <form action="/subject" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="name"> Name:</label>
          <br>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>
