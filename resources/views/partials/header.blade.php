@php
  $navLinks = [
    ["name" => "Characters"],
    ["name" => "Comics"],
    ["name" => "Movies"],
    ["name" => "Tv"],
    ["name" => "Games"],
    ["name" => "Collectibles"],
    ["name" => "Videos"],
    ["name" => "Fans"],
    ["name" => "News"],
    ["name" => "Shop"]
  ];
@endphp

<header>
  <div class="container-fluid">
    <div class="container d-flex justify-content-between align-items-center py-4">
      <img id="logo" src="../../vue-dc-comics-1/img/dc-logo.png" alt="DC Logo">

      <ul class="nav nav-pills">
        @foreach ($navLinks as $item)
          <li class="nav-item">
            <a href="#" class="nav-link text-black fw-bold fs-6">
              {{ $item["name"] }}
            </a>
          </li>
        @endforeach        
      </ul>
    </div>
  </div>
</header>