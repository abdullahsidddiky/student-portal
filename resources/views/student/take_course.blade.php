@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Take Course</title>
    <style>
    table, th,td{
      border:1px solid black;
      border-collapse: collapse;
    }
    </style>
  </head>
  <body>
      <h1>Take Course</h1>
      <form action="/advising_window" method="POST">
        @csrf
      <label for="subject">Please Choose Subject</label>
      <br>

      @foreach ($course as $course)
          <div class="form-check">
            <input class="form-check-input" type="radio" name="course" id="course">
            <label class="form-check-label" for="flexRadioDefault">
              Subject:{{$course->course_name}} Faculty:{{$course->supervisor_name}} Section:{{$course->section}}
          </div>
      @endforeach




  </body>
</html>
