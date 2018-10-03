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
<div class="container">
  <div class="row1">
    <h1>About</h1>
  </div>
    <div class="row">
        <div class="col-md-6">
            <img src="/images/1.png">
        </div>
        <div class="col-md-6">
            <h3>STARTUP JUNGLE</h3>
            <p>Calling on all the startup ninjas, product rockstars, hackers & engineers to join us for regular trainings in Phnom Penh. Share your knowledge.</p> 
            <p>Mostly free trainings from the best product-oriented businesses in Phnom Penh. Welcome to Startup Jungle! Learn from the best in Phnom Penh on how to build great products for you and for your clients, and how to bring them to market.</p> 
            <p>We help connect awesome people across Phnom Penh:</p> 
            <p>1) some of the best product mentors and speakers, supported by great companies. </p>
            <p>2) hungry developers, product managers, designers and marketeers that want to learn it all! </p>
            <p>3) (mostly) free workshops to build the startup and tech ecosystem</p> 
            <p>4) beer, pizzas and loads of fun networking </p>
            <p>Topics will include: </p>
            <p>– software development, programming topics </p>
            <p>– AI and data science </p>
            <p>– other deep tech (IoT/hardware, Blockchain)</p> 
            <p>– product development, UX, design thinking </p>
            <p>– lean startup</p> 
            <p>– project management, scrum</p> 
            <p>– devops, CI/CD practices, testing, QA </p>
            <p>– growth hacking, digital marketing</p> 
            <p>Join us!</p>
            </div>
    </div>
</div>
@extends('home.subcribe')
@extends('home.footer')