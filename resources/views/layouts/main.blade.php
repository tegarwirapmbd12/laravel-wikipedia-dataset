<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wikipedia Dataset - Kabupaten Semarang</title>
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jimdelpedia.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>

    </style>
  </head>
  <body>
    <div  id="my_LayoutGrid1">
      <div id="LayoutGrid1">

        {{-- SIDEBAR --}}
        @include('layouts.sidebar')
        {{-- SIDEBAR END --}}

        {{-- MAIN CONTENT --}}
        @yield('content')
        {{-- MAIN CONTENT END --}}

        {{-- PROFIL --}}
        {{-- @include('layouts.profil') --}}
        {{-- PROFIL END --}}

      </div>
    </div>
    <div id="my_footer">
      <div id="footer">
        <div class="row">
          <div class="col-1">
          </div>
          <div class="col-2">
            <div id="my_footerText">
              <span id="my_jimdel33">Last edited on 26 June 2022, at 3:35 (CT).<br><br>Terms and conditions.
                  Jimdelpedia, all rights reserved.</span>
            </div>
            <div id="my_footerMenu">
              <span><a href="#" class="style2" title="Privacy policy">Conditions</a>
              </span>
              <span><a href="https://www.youtube.com/channel/UCiC5-n85_UzJs7C1FvFl-fg/videos" class="style2" title="About">About</a></span>
              <span><a href="#" class="style2" title="Contact">Contact</a></span>
              <span><a href="#" class="style2" title="Blog">Blog</a></span>
              <span><a href="#" class="style2" title="Cookie statement">Use of Coookie</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
