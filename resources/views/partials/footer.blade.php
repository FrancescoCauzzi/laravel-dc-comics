<div class="container-fluid __footer-top-ctn">

    <div class="container">
        <div class="row row-cols-3 py-4 w-50 __links">
            @foreach ($footerItems as $item)


            <div class="col">
                <ul class="__{{str_replace(array("\r", "\n", "\t", ' '), '', $item["title"])}}">
                    <h5 class="text-white mb-2 text-uppercase">{{ $item['title'] }}</h5>

                    @foreach ($item['links'] as $link )

                    <li
                    class=" text-white py-1"

                    >
                    <a href="">{{ $link }}</a>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
    <img
    id="dc-logo-bg"
    src="{{Vite::asset('resources/img/dc-logo-bg.png')}}"
        alt="Cannot retrieve image"
        />
    </div>
</div>

<div class="container-fluid __footer-bottom-ctn py-2">
    <div class="container d-flex justify-content-between">
        <div class="__left d-flex py-3">
          <button class="px-4 text-uppercase text-white">{{ $dcNavbarBottom['btnText'] }}</button>
        </div>
        <div class="__right d-flex justify-content-end p-3">
          <div class="__social-media d-flex align-items-center">
            <h5 class="__social-media-title text-uppercase">
              {{ $dcNavbarBottom['socialMediaLinksTitle'] }}
            </h5>
            <ul class="d-flex gap-3 align-items-center">
                @foreach ($dcNavbarBottom['socialMediaLinks'] as $link )

                <li class="" >
                    <img class="" src="{{Vite::asset('resources' . $link['image'])}}" alt="" />
                </li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>


</div>
