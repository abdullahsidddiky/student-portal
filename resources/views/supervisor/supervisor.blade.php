@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>supervisor</title>
  </head>
  <body>
    @php
      $grade= session()->get('grade');
      $supervisor=session()->get('supervisor');
      $unique_section_course_name = session()->get('unique_section_course_name');
    @endphp
   <div class="container">
    <h1>Supervisor Page</h1>
    <table class="table table-striped table-hover">

        <tr>
          <th scope="col">Index</th>
          <th scope="col">Course Name</th>
          <th scope="col">Section</th>
          <th scope="col">Section Link</th>
        </tr>


      @foreach ($unique_section_course_name as $value)

    <tr>
      <td>{{$loop->index+1}}</td>
      <td>{{$value->course_name}}</td>
      <td>{{$value->section}}</td>
      <td>
        <form  action="{{route('get_section_id')}}" method="POST">
            {{csrf_field()}}
          <input type="hidden" name="id" value="{{$value->id}}">
          <button type="submit" name="button">Link</button>


          </form>
      </td>
    </tr>
      @endforeach
    </table>
  </div>
  </body>
</html>
