@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>supervisor</title>
  </head>
  <body>
    @php
      $supervisor= session()->get('supervisor');
    @endphp
    {{$supervisor}}
   <div class="container">
    <h1>Supervisor Page</h1>
    <table class="table table-striped table-hover">

    </table>
  </div>
  </body>
</html>
