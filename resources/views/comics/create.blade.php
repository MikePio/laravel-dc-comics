@extends('layouts.main')

@section('title')
  Add New Product
@endsection


@section('content')


<div class="mx-4 pb-5 d-flex flex-column align-items-start" style="min-height: calc(100vh - 90px - 150px);">

  <h1 class="pt-5 pb-3">Add a New Product</h1>

  <form action="{{ route("d_c_comics.store") }}" method="POST">

        {{-- //* token IMPORTANTE di verifica validità del form (viene utilizzato per dare una maggiore sicurezza ai dati) --}}
        @csrf

        <div class="mb-3" style="width: 96vw;">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Sale date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Type">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input type="text" class="form-control" id="artists" name="artists" placeholder="Artists">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Writers</label>
            <input type="text" class="form-control" id="writers" name="writers" placeholder="Writers">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>

  </form>

</div>

@endsection
