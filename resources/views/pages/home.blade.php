@extends('layout.default')


@section('content')





    <section class="mt-16 container  home-header">


        <x-tools.card.card-text-with-btn></x-tools.card.card-text-with-btn>
        <img src="{{asset('img/community.png')}}" alt="">




    </section>


    <br>

    <section class="container-fluid coach">

        <div class="coach-list container">

           <vue-card-coach></vue-card-coach>
           <vue-card-coach></vue-card-coach>


        </div>
    </section>


    <section class="mt-16 container  section-course">


            <img src="{{asset('img/course.png')}}" alt="">
        <x-tools.card.card-text-with-btn></x-tools.card.card-text-with-btn>




    </section>


    <section class="mt-16 container mx-auto testimonies-member">


           <div class="testimonies-member-left">
               <h2 class="primary-color">
                   Retour des membre qui apprecient TPH
               </h2>
               <br>

               <div>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                   Dictumst pharetra, amet, tempus, scelerisque orci. Nec sed
                   nulla tellus consequat, sed nu
               </div>
           </div>

            <div class="testimonies-member-right">
                <vue-card-coach></vue-card-coach>
                <vue-card-coach></vue-card-coach>
            </div>


    </section>

@endsection
