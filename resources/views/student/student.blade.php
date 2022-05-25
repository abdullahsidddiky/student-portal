@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>student</title>
  </head>
  <div class="container">

  <body>
    <h1>Student Page</h1>
    <input type="button" onclick="window.location.href='{{route('take_course')}}';" value="Take Course">
  </div>
  </body>
</html>
