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
      <form>
        <input type="button" onclick="window.location.href='{{route('subject')}}';" value="Create subject" />
      </form>
      <br>
      <form>
        <input type="button" onclick="window.location.href='{{route('register_supervisor')}}';" value="Register Supervisor" />
      </form>
      <br>
       <form>
          <input type="button" onclick="window.location.href='{{route('register_student')}}';" value="Register Student" />
        </form>
    @else
      <form>
        <input type="button" onclick="window.location.href='{{route('register_admin')}}';" value="Register Admin" />
      </form>
    @endif
  </body>
</html>
