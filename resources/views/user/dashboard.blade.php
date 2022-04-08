@extends('layout.app')
@section('title', 'Events')
@section('content')

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Events</h1>
                        <h2 class="home__subtitle">Choose your unique event online<br> the year.</h2>
                        <a href="{{url('/all_events')}}" class="button">View Menu</a>
                    </div>
    
                    <img src="assets/img/home.jpg" alt="" class="home__img">
                   
                </div>
            </section>
            
            <!--========== ABOUT ==========-->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">About us</span>
                        <h2 class="section-title about__initial">We offer you the hottest event<br>This year</h2>
                        <p class="about__description">We cook the best food in the entire city, with excellent customer service, the best meals and at the best price, visit us.</p>
                        <a href="#" class="button">Explore history</a>
                    </div>

                    <img src="assets/img/about.jpg" alt="" class="about__img">
                </div>
            </section>

            <!--========== SERVICES ==========-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">Offering</span>
                <h2 class="section-title">Our amazing services</h2>

                <div class="services__container  bd-grid">
                    <div class="services__content">
                    <img src="assets/img/restoran.jpg" alt="" class="about__img">
                        <h3 class="services__title">Restaurant</h3>
                        <p class="services__description">We offer our clients excellent quality services for many years, with the best and delicious food in the city.</p>
                    </div>

                    <div class="services__content">
                       
                    <img src="assets/img/pub.jpg" alt="" class="about__img">
                        <h3 class="services__title">Pub / Bar</h3>
                        <p class="services__description">We offer our clients excellent quality services for many years, with the best and delicious food in the city.</p>
                    </div>

                    <div class="services__content">
                    <img src="assets/img/club.jpg" alt="" class="about__img">
                        <h3 class="services__title">Karaoke / Club</h3>
                        <p class="services__description">We offer our clients excellent quality services for many years, with the best and delicious food in the city.</p>
                    </div>
                </div>
            </section>

            <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">Special</span>
                <h2 class="section-title">Yerevan Events</h2>
                <i class="fa-duotone fa-360-degrees"></i>
                
                <div class="menu__container bd-grid">
                @foreach($events as $event)
                    <div class="menu__content">
                        <img src="assets/img/{{$event->event_path}}" class="w-100">
                        <h3 class="menu__name">{{$event->name}}</h3>
                        <span class="menu__detail">{{$event->discription}}</span>
                        <span class="menu__preci">{{$event->date_start}}</span>
                        <span class="menu__preci">{{$event->date_end}}</span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
                @endforeach

                    <!-- <div class="menu__content">
                    <img src="assets/img/default_events_photo.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Institution name</h3>
                        <span class="menu__detail">Event name</span>
                        <span class="menu__preci">When does it start</span>
                        <span class="menu__preci">when does it end</span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
                    
                    <div class="menu__content">
                    <img src="assets/img/default_events_photo.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Institution name</h3>
                        <span class="menu__detail">Event name</span>
                        <span class="menu__preci">When does it start</span>
                        <span class="menu__preci">when does it end</span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div> -->
                </div>
             
            </section>

            <!--===== APP =======-->
            <section class="app section bd-container">
                <div class="app__container bd-grid">
                    <div class="app__data">
                        <span class="section-subtitle app__initial">Events</span>
                        <h2 class="section-title app__initial">Events is aviable</h2>
                        <p class="app__description">Choose your unique event online,you can have your own individual code to enter the event,with the help of this site you can find your right place to spend your good day</p>
                        <div class="app__stores">
                            <a href="#">Tell your friends about this website</a>
                            
                        </div>
                    </div>

                   <!-- stex mit dnenq nkar mer web site i -->
                </div>
            </section>

            <!--========== CONTACT US ==========-->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's talk</span>
                        <h2 class="section-title contact__initial">Contact us</h2>
                        <p class="contact__description">If you want to reserve a table in our restaurant, contact us and we will attend you quickly, with our 24/7 chat service.</p>
                    </div>

                    <div class="contact__button">
                        <a href="#" class="button">Contact us now</a>
                    </div>
                </div>
            </section>
        </main>

     
        @endsection