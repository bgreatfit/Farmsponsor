@extends('layouts.basic')

@section('content')
  <main class="gallery-wrap">
    <section class="gallery-header" style="background-image: url('{{asset('img/fs-gal.jpg')}}'); background-size:cover; background-position: center;">
    {{-- <section class="gallery-header" --}}
        <div class="gallery__headingContainer">
          <h1 class="gallery__heading--main">Have a glance at our gallery</h1>
          <p class="gallery__heading--text">We let the pictures tell our story</p>
        </div>
    </section>

    <section class="gallery">
        <figure class="gallery__item gallery__item--1"><img src="img/gallery/gal-1.jpg" alt="Gallery image 1" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--2"><img src="img/gallery/gal-2.jpeg" alt="Gallery image 2" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--3"><img src="img/gallery/gal-3.jpeg" alt="Gallery image 3" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--4"><img src="img/gallery/gal-4.jpeg" alt="Gallery image 4" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--5"><img src="img/gallery/gal-5.jpeg" alt="Gallery image 5" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--6"><img src="img/gallery/gal-6.jpeg" alt="Gallery image 6" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--7"><img src="img/gallery/gal-7.jpeg" alt="Gallery image 7" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--8"><img src="img/gallery/gal-8.jpeg" alt="Gallery image 8" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--9"><img src="img/gallery/gal-9.jpeg" alt="Gallery image 9" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--10"><img src="img/gallery/gal-10.jpeg" alt="Gallery image 10" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--11"><img src="img/gallery/gal-11.jpeg" alt="Gallery image 11" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--12"><img src="img/gallery/gal-12.jpeg" alt="Gallery image 12" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--13"><img src="img/gallery/gal-13.jpeg" alt="Gallery image 13" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--14"><img src="img/gallery/gal-14.jpeg" alt="Gallery image 14" class="gallery__img"></figure>
    </section>
  </main>
@endsection