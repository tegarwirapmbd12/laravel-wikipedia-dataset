<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wikipedia Dataset - Kabupaten Semarang</title>
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jimdelpedia.css') }}">
    <style>
    </style>
  </head>
  <body>
    <div  id="my_LayoutGrid1">
      <div id="LayoutGrid1">

        {{-- SIDEBAR --}}
        <div class="col-1">
          <div class="col-1-padding">
            <div id="my_sidebarLogo">
              <img src="{{ asset('images/logobulat.png') }}" id="sidebarLogo" alt="">
            </div>
            <div id="my_sidebarText1">
              <span id="my_jimdel1"><strong>WIKIPEDIA DATASET</strong></span>
              <span id="my_jimdel4">Kabupaten Semarang</span>
            </div>
            <!-- <div id="my_sidebarMenu1">
              <span><a href="#" class="style2" title="Visit the main page">Front page</a></span>
              <span><a href="#" class="style2" title="Guides to browsing Jimdelpedia">Front page</a></span>
              <span><a href="#" class="style2" title="Articles Related to current events">Happenings</a></span>
              <span><a href="#" class="style2" title="Visit a randonly selected articel">Hit-or-Miss</a></span>
              <span><a href="#" class="style2" title="Learn about Jimdelpedia">About Jimdelpedia</a></span>
              <span><a href="#" class="style2" title="How to contact Jimdelpedia">Contact us</a></span>
            </div> -->
            <div id="my_sidebarText2">
              <span id="my_jimdel5"><strong>2021</strong></span>
            </div>
            <div id="my_sidebarMenu2">
              <span><a href="#" class="style2" title="Guidance on how to use and edit Jimdelpedia">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa deleniti inventore, ex aliquid assumenda totam fuga veritatis, praesentium minima explicabo nobis, pariatur dolorum autem sed aperiam vero quam at harum!</a></span>
              <br>
              <span><a href="#" class="style2" title="Learn how to edit Jimdelpedia">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus corporis, nihil quia rerum aut itaque cupiditate neque, ipsum quae sunt vitae? Accusantium, laboriosam maiores aliquam ea ipsum accusamus saepe eaque!</a></span>
              <br>
              <span><a href="#" class="style2" title="About Jimdelpedia assessment">Assessment</a></span>
              <br>
              <span><a href="#" class="style2" title="How to contact Jimdelpedia">Get connected</a></span>
            </div>
            <div id="my_sidebarText3">
              <span id="my_jimdel5"><strong>2022</strong></span>
            </div>
            <div id="my_sidebarMenu3">
              <span><a href="#" class="style2" title="What links here">Jumlah Kejadian Penegakan Perda, Ketertiban Umum, dan Pemadam Kebakaran di Kabupaten Semarang 2021</a></span>
              <span><a href="#" class="style2" title="About system">ms-ind-Kompilasi Pasangan Usia Subur (PUS) yang menggunakan alat kontrasepsi modern 2021</a></span>
              <span><a href="#" class="style2" title="About information">ms-ind-Kompilasi Produk Administrasi Data Kependidikan Kabupaten Semarang 2021</a></span>
              <span><a href="#" class="style2" title="Jimdelpedia stuff">ms-ind-Kompilasi Produk Administrasi Pegawai Negeri Sipil Pemerintah Kabupaten Semarang 2021</a></span>
              <span><a href="#" class="style2" title="Jimdelpedia stuff">ms-ind-Laporan Jumlah Pedagang Pasar 2021</a></span>
              <span><a href="#" class="style2" title="Jimdelpedia stuff">ms-ind-Laporan Keuangan Pemerintah Daerah 2021</a></span>
            </div>
            <div id="my_sidebarText4">
              <span id="my_jimdel5"><strong>2023</strong></span>
            </div>
            <div id="my_sidebarMenu4">
              <span><a href="#" class="style2" title="What links here">Create website</a></span>
              <span><a href="#" class="style2" title="About system">Comments system</a></span>
              <span><a href="#" class="style2" title="About information">Jimdelpedia</a></span>
              <span><a href="#" class="style2" title="Jimdelpedia stuff">Free code</a></span>
            </div>
          </div>
        </div>
        {{-- SIDEBAR END --}}

        {{-- MAIN CONTENT --}}
        @yield('content')
        {{-- MAIN CONTENT END --}}

        {{-- PROFIL --}}
        <div class="col-3">
            <div class="col-3-padding">
            <table id="Table1">
                <tr>
                <td colspan="2" class="cell0"><p id="my_jimdel22"><span id="my_jimdel23">Jimdelpedia</span></p></td>
                </tr>
                <tr>
                <td colspan="2" class="cell1"><div id="my_indexImage1">
                    <img src="{{ asset('images/logo-diskominfo.png') }}" id="indexImage1" alt="">
                </div>
                </td>
                </tr>
                <tr>
                <td class="cell2"><p> <span id="my_jimdel24">Born</span></p>
                </td>
                <td class="cell2"><p>Jimdelpedia</p>
                    <p>October 1, 1950 (age 72)</p>
                    <p>Lasemence PHP, U.S.</p>
                </td>
                </tr>
                <tr>
                <td class="cell2"><p> <span id="my_jimdel25">Occupation</span></p>
                </td>
                <td class="cell2"><p>Cinematography - Software developer - martial artist</p>
                </td>
                </tr>
                <tr>
                <td class="cell2"><p id="my_jimdel26"><span id="my_jimdel27"> </span>Spouse(s)</p>
                </td>
                <td class="cell2"><p>La Une. <br>Blue.</p>
                </td>
                </tr>
                <tr>
                <td class="cell2"><p id="my_jimdel28"><span id="my_jimdel29"> </span>Coworker(s)</p>
                </td>
                <td class="cell2"><p>John</p>
                    <p>(1970-present)</p>
                </td>
                </tr>
                <tr>
                <td class="cell2"><p> <span id="my_jimdel30">Children</span></p>
                </td>
                <td>5</td>
                </tr>
                <tr>
                <td class="cell2"><p> <span id="my_jimdel30">Acadamy Awards</span></p>
                </td>
                <td class="cell2"><p><a href="#Heading3" class="style2">Table</a></p>
                </td>
                </tr>
                <tr>
                <td class="cell2"><p> <span id="my_jimdel31">Genres</span></p>
                </td>
                <td class="cell2"><p>Martial art - Action Movies</p>
                </td>
                </tr>
                <tr>
                <td class="cell2"><p> <span id="my_jimdel31">Instruments</span></p>
                </td>
                <td class="cell2"><p>Guitar - Piano</p>
                </td>
                </tr>
                <tr>
                <td class="cell2"><p> <span id="my_jimdel32">Website</span></p>
                </td>
                <td class="cell2"><p><a href="https://www.jdmah.com" target="_blank" class="style2">www.jimdelpedia.com</a></p>
                </td>
                </tr>
            </table>
            </div>
        </div>
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
  </body>
</html>
