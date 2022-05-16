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
    @if ($user->is_admin)
      <h1>yes it is</h1>
    @else
      <h1>no its not</h1>
    @endif
    <form>
      <input type="button" onclick="window.location.href='{{route('register_admin')}}';" value="Register" />
    </form>
  </body>
</html>
