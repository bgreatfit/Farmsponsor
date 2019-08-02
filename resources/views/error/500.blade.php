@extends('layouts.error')
@section('content')
<main class="error-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <section class="error-content">
                    <h1 class="error-heading">500</h1>
                    <p class="error-text text-bold">Ooops,</p>
                    <p class="error-text">An unexpected error occurred!</p>
                    <p class="error-text text-small">We can’t seem to find the page you’re looking for.</p>
                    <a href="#" class="error-btn">Home</a>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection