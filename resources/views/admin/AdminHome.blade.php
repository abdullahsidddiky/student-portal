@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin page</title>
  </head>
  <body>
    <div class="container">
    <h1>Admin page</h1>
    @php
      $user = session()->get('user');
    @endphp
    @if ($user->is_admin)
      <form>
        <input type="button" class="btn btn-primary" onclick="window.location.href='{{route('subject')}}';" value="Create subject" />
      </form>
      <br>
      <form>
        <input type="button" class="btn btn-primary" onclick="window.location.href='{{route('register_supervisor')}}';" value="Register Supervisor" />
      </form>
      <br>
       <form>
          <input type="button" class="btn btn-primary" onclick="window.location.href='{{route('register_student')}}';" value="Register Student" />
        </form>
        <br>
        <form>
          <input type="button" class="btn btn-primary" onclick="window.location.href='{{route('create_course')}}';" value="Create course" />
        </form>
        <br>
        <form>
          <input type="button" class="btn btn-primary" onclick="window.location.href='{{route('delete_user')}}';" value="Delete User" />
        </form>
    @else
      <form>
        <input type="button" class="btn btn-primary" onclick="window.location.href='{{route('register_admin')}}';" value="Register Admin" />
      </form>
    @endif
  </div>
  </body>
</html>
