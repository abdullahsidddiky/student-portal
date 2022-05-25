@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>student</title>
  </head>
  <body>
  <div class="container">
    <h1>Student Page</h1>
    <input class="btn btn-primary" type="button" onclick="window.location.href='{{route('take_course')}}';" value="Take Course">
  </div>
  </body>
</html>
