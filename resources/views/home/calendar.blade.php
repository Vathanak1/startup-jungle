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
<div class="container" style="margin-top:100px">
  <iframe src="https://calendar.google.com/calendar/embed?src=3atr03khjej1jj2nu5tu39iqo4%40group.calendar.google.com&ctz=Asia%2FBangkok" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    <div>
        <a type="button" class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLSdPx8rR2hWDetwH7S19tfVi5ox6wuO5svFiAptgzTxlaFP2QQ/viewform">ADD EVENTS</a>
    </div>
</div>

@extends('home.footer')