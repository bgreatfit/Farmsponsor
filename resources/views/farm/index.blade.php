@extends('layouts.basic')

@section('content')
<section class="farmlist-page-wrap">
    <div class="container">
        <div class="row">
            @foreach($farms as $farm)
                <div class="col-md-3 col-12 col-sm-8 mx-sm-auto mx-auto">
                    <div class="content-wrap card-box">
                       @include('includes.farmsCard')
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                {{-- @include('includes.pagination') --}}
{{$farms->links()}}
            </div>
        </div>
    </div>
</section>
@endsection
