@extends('layout.app')
@section('title', 'Events')
@section('content')
       

            <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">Special</span>
                <h2 class="section-title">Yerevan Events</h2>

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
                </div>
            </section>

            

            @endsection