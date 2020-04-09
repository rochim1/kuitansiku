@extends('layouts.main')

@section('title', 'Our Team')

@section('content')

@include('layouts.header')
<link rel="stylesheet" href="{{asset('css/team.css')}}">

<div class="container">
    <div class="text-center pt-md-5 text-white">
        <h2 class="text-capitalize text-bold pt-5">Our Team</h2>
        <h3 class="caption gray">Meet the people who make awesome stuffs</h3>
      </div> 
    <div class="row pt-3 d-flex justify-content-center">
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <img src="https://images.pexels.com/photos/157646/title-photo-logo-shirt-157646.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="team member" class="img-responsive">
                <div class="team-content">
                    <h3 class="name">M. Nur Rochim</h3>
                    <span class="post">web designer</span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <img src="https://static.pexels.com/photos/38554/girl-people-landscape-sun-38554.jpeg" alt="team member" class="img-responsive">
                <div class="team-content">
                    <h3 class="name">Kanaya Angle</h3>
                    <span class="post">web designer</span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <img src="https://images.pexels.com/photos/157646/title-photo-logo-shirt-157646.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="team member" class="img-responsive">
                <div class="team-content">
                    <h3 class="name">Hanif Ahmad</h3>
                    <span class="post">web designer</span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <img src="https://images.pexels.com/photos/157646/title-photo-logo-shirt-157646.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="team member" class="img-responsive">
                <div class="team-content">
                    <h3 class="name">Nanang</h3>
                    <span class="post">web designer</span>
                </div>
            </div>
        </div>
        
    </div>

    <div class="text-center mt-md-5">
        <h2>Funny Moment with team</h2>
        <h3 class="caption gray">Meet the people who make awesome stuffs</h3>
      </div>

      <div class="row">
        <div class="col-md-12 overflow-auto">
           <div class="galery">
              <ul class="tiles center-block align-center align-content-center mt-2">
              <li>
                <h2>Culture, Wine, Food And Shopping</h2>
                <a href="#">Learn More >></a>
              </li>
              <li class="wow bounceInLeft">
                <img src="http://images.hayneedle.com/mgen/master:RIB118.jpg?is=368,368">
              </li>
              <li>
                <h2>Itinerary</h2>
                <a href="#">Learn More >></a>
              </li>
              <li class="wow bounceInRight">
                <img src="http://media-cache-ak0.pinimg.com/736x/34/ab/ec/34abec2582c784f74f7910689f7dfaa8.jpg">
              </li>
              <li class="wow bounceInLeft">
                <img src="http://2.imimg.com/data2/XQ/OD/FRL-3032268/images-beach-04-500x500.jpg">
              </li>
              <li>
                <h2>Our Team</h2>
                <a href="#">Learn More >></a>
              </li>
              <li class="wow bounceInRight">
                <img src="http://www.royalislander.com/images/specials.jpg">
              </li>
              <li>
                <h2>2014 Tour Dates</h2>
                <a href="#">View All >></a>
              </li>
              <li>
                <h2>Culture, Wine, Food And Shopping</h2>
                <a href="#">Learn More >></a>
              </li>
              <li class="wow bounceInLeft">
                <img src="http://images.hayneedle.com/mgen/master:RIB118.jpg?is=368,368">
              </li>
              <li>
                <h2>Itinerary</h2>
                <a href="#">Learn More >></a>
              </li>
              <li class="wow bounceInRight">
                <img src="http://media-cache-ak0.pinimg.com/736x/34/ab/ec/34abec2582c784f74f7910689f7dfaa8.jpg">
              </li>
              <li class="wow bounceInLeft">
                <img src="http://2.imimg.com/data2/XQ/OD/FRL-3032268/images-beach-04-500x500.jpg">
              </li>
              <li>
                <h2>Our Team</h2>
                <a href="#">Learn More >></a>
              </li>
              <li class="wow bounceInRight">
                <img src="http://www.royalislander.com/images/specials.jpg">
              </li>
              <li>
                <h2>2014 Tour Dates</h2>
                <a href="#">View All >></a>
              </li>
            </ul>
            </div>
        </div>
      </div>
</div>
@endsection