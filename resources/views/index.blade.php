@extends('components/layout')

@section('content')
    <h1>Galéria</h1>
    <p class="lead fw-bold mb-5">Rövid leírás</p>
    <div class="row justify-content-md-center g-3">
        @foreach ($images as $image)
            <div class="col-md-4 col-sm-12">
                @component('components/card', ['image' => $image])
                @endcomponent
            </div>
        @endforeach
    </div>
@endsection
