@extends('layouts.main')

@section('title')
  {{ $dCComic->title }}
@endsection


@section('content')



<div class="container p-5 d-flex flex-column align-items-center" style="min-height: calc(100vh - 90px - 150px);">
{{-- @dump($dCComic); --}}
<h1 class="py-4 text-black">{{ $dCComic->title }}</h1>
<img src="{{ $dCComic->thumb }}" class="py-2">
<h6 class="py-2">Id: {{ $dCComic->id }}</h6>
<p class="py-2"><strong>Description:</strong> {{ $dCComic->description }}</p>
<h6 class="py-2"><strong>Price:</strong> {{ $dCComic->price }}</h6>
<h6 class="py-2"><strong>Series:</strong> {{ $dCComic->series }}</h6>
<h6 class="py-2"><strong>Sale date:</strong> {{ $dCComic->sale_date }}</h6>
<h6 class="py-2"><strong>Type:</strong> {{ $dCComic->type }}</h6>
<h6 class="py-2"><strong>Artists:</strong> {{ $dCComic->artists }}</h6>
<h6 class="py-2"><strong>Writers:</strong> {{ $dCComic->writers }}</h6>


</div>

@endsection
