<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin page</title>
  </head>
  <body>
    <h1>Admin page</h1>
    @php
      $user = session()->get('user');
    @endphp
    {{$user->name}}
    <form>
      <input type="button" onclick="window.location.href='{{route('register_admin')}}';" value="Register" />
    </form>
  </body>
</html>
