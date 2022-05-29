@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Supervisor</title>
  </head>
  <body>
    <div class="container">
      <h1>List of Supervisors</h1>
      <table class="table table-dark table-hover">
        <tr>
          <th>User ID</th>
          <th>User Name</th>
          <th>Email</th>
        </tr>
        @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </body>
</html>
