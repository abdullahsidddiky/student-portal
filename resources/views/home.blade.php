@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home page</title>
  </head>
  <body>
    <div class="container">
    <h1>Home Page</h1>
     <button onclick="window.location.href='{{route('login')}}';">Login</button>
   </div>
  </body>
</html>
