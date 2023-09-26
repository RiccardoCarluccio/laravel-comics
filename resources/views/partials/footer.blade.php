@php
  $footerItems = [
    [
      "name" => "Dc Comics",
      "items" => [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "videos",
        "news"
      ]
    ],
    [
      "name" => "Shop",
      "items" => [
        "shop dc",
        "shop dc collectibles"
      ]
    ],
    [
      "name" => "DC",
      "items" => [
        "terms of use",
        "privacy policy (new)",
        "ad choices",
        "advertising",
        "jobs",
        "subscription",
        "talent workshop",
        "cpsc certificates",
        "ratings",
        "shop help",
        "contact us"
      ]
    ],
    [
      "name" => "Sites",
      "items" => [
        "dc",
        "mad magazine",
        "dc kids",
        "dc universe",
        "dc power visa"
      ]  
    ]
  ];
@endphp

<footer>
  <div id="footer-background" class="container-fluid">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex bg-dark">
          @foreach ($footerItems as $footerItem)
            <div class="d-flex flex-wrap flex-column gap-5">
              <h3 class="text-white text-uppercase fw-bold">
                dc comics
              </h3>
              <ul class="nav nav-pills d-flex flex-column">
                @foreach ($footerItem["items"] as $item)
                  <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                      {{ $item }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach
        </div>

        <img src="../../vue-dc-comics-1/img/dc-logo-bg.png" alt="DC Logo Background">
      </div>
    </div>

    <div class="container-fluid bg-dark">
      <div class="container d-flex justify-content-between align-items-center">
        <div>
          <button type="button" id="footer-button" class="btn btn-outline-primary text-uppercase text-white border-2">sign-up now!</button>
        </div>
        <div class="d-flex justify-content-end align-items-center gap-3 py-3">
          <h4 class="text-uppercase text-primary">follow us</h4>
          <img src="../../vue-dc-comics-1/img/footer-facebook.png" alt="">
          <img src="../../vue-dc-comics-1/img/footer-periscope.png" alt="">
          <img src="../../vue-dc-comics-1/img/footer-pinterest.png" alt="">
          <img src="../../vue-dc-comics-1/img/footer-twitter.png" alt="">
          <img src="../../vue-dc-comics-1/img/footer-youtube.png" alt="">
        </div>
      </div>
    </div>
  </div>
</footer>