@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
    <div class="container">
    <h1>Login Page</h1>
    <form action="/login" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="from-group">
          <label for="password">password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
<<<<<<< HEAD
    </div>
=======
  </div>
>>>>>>> working_branch
  </body>
</html>
