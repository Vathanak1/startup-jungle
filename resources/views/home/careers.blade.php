@extends('layout.master')
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="calendar">START UP JUNGLE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="calendar">Calendar</a></li>
        <li><a href="events">Events</a></li>
        <li><a href="careers">Careers</a></li>
        <li><a href="about">About</a></li>
      </ul>
    </div>
  </div>
</nav>
@extends('home.footer')