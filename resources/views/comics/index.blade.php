@extends('layouts.main')

@section('title')
    Comics
@endsection


@section('content')



<div class="container p-5 d-flex flex-column align-items-center" style="min-height: calc(100vh - 90px - 150px);">

  <h1 class="py-4" >Comics</h1>

  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="">
        <th scope="col">#ID</th>
        <th scope="col">Title</th>
        <th class="w-25" scope="col">Description</th>
        <th scope="col">Thumb</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Sale_date</th>
        <th scope="col">Type</th>
        <th scope="col">Artists</th>
        <th scope="col">Writers</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($d_c_comics as $comic)

        <tr>
          <td>{{ $comic->id }}</td>
          <td>{{ $comic->title }}</td>
          <td class="w-25" >{{ $comic->description }}</td>
          <td><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
          <td>{{ $comic->price }}</td>
          <td>{{ $comic->series }}</td>
          <td>{{ $comic->sale_date }}</td>
          <td>{{ $comic->type }}</td>
          <td>{{ $comic->artists }}</td>
          <td>{{ $comic->writers }}</td>
          {{-- <td>
            @foreach ($comic['artists'] as $artist)
            @if (!$loop->last)
            <span>{{ $artist }},</span>
            @else
            <span>{{ $artist }}</span>
            @endif
            @endforeach
          </td>
          <td>
            @foreach ($comic['writers'] as $writers)
              @if (!$loop->last)
                <span>{{ $writers }},</span>
              @else
                <span>{{ $writers }}</span>
              @endif
            @endforeach
          </td> --}}
        </tr>

      @endforeach


    </tbody>
  </table>

</div>

@endsection
