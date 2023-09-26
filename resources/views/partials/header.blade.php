@php
  $menu = [
    ["title" => "Characters"],
    ["title" => "Comics"],
    ["title" => "Movies"],
    ["title" => "Tv"],
    ["title" => "Games"],
    ["title" => "Collectibles"],
    ["title" => "Videos"],
    ["title" => "Fans"],
    ["title" => "News"],
    ["title" => "Shop"]
  ];
@endphp

<header>
  <div class="container-fluid">
    <div class="container d-flex justify-content-between align-items-center py-4">
      <img id="logo" src="../../vue-dc-comics-1/img/dc-logo.png" alt="DC Logo">

      <ul class="nav nav-pills">
        @foreach ($menu as $item)
          <li class="nav-item" v-for="link in navLinks">
            <a href="#" class="nav-link text-black fw-bold fs-6">
              {{ $item["title"] }}
            </a>
          </li>
        @endforeach        
      </ul>
    </div>
  </div>
</header>