<header class="bg-dark text-center text-white d-flex justify-content-between">

  {{-- <div class="p-4">
        <h3>HEADER</h3>
  </div> --}}

  <div class="text-center p-4">
      <h3>Laravel DC Comics</h3>
  </div>

  <nav class="navbar p-3">
    <a class="navbar-brand text-white" href=" {{ route('home') }} ">Home</a>
    <a class="navbar-brand text-white" href=" {{ route('d_c_comics.index') }} ">List</a>
    <a class="navbar-brand text-white" href=" {{ route('info') }} ">Info</a>
  </nav>

</header>
