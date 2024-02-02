<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Metadata Dataset - Kabupaten Semarang</title>
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jimdelpedia.css') }}">
    @foreach($kegiatans as $kegiatan)
    <style>
        #list-kegiatan{{ $kegiatan->id }}  {
            display: none;
        }
        #daftar-kegiatan{{ $kegiatan->id }} {
            color: blue;
            cursor: pointer
        }
        #daftar-kegiatan{{ $kegiatan->id }}:hover {
            text-decoration: underline;
        }

        #duasatu{{ $kegiatan->id }}:hover {
            text-decoration: underline;
        }
        #duadua{{ $kegiatan->id }}:hover {
            text-decoration: underline;
        }
        #duatiga{{ $kegiatan->id }}:hover {
            text-decoration: underline;
        }

    </style>
    @endforeach
  </head>
  <body>
    <div  id="my_LayoutGrid1">
      <div id="LayoutGrid1">

        {{-- SIDEBAR --}}
        @include('layouts.sidebar')
        {{-- SIDEBAR END --}}

        <div class="col-2">
          <div class="my_contentHeading1">
            <h1 class="my_contentHeading1">Metadata</h1>
          </div>
          <hr id="indexLine1">
          <div class="my_textIntro">
            <span class="my_jimdel7"><strong>Metadata</strong> adalah informasi terstruktur yang mendeskripsikan, menjelaskan, menemukan, atau setidaknya menjadikan suatu informasi mudah untuk ditemukan kembali, digunakan, atau dikelola. Metadata sering disebut sebagai <a href="https://id.wikipedia.org/wiki/Data" target="blank" style="color: blue;">data</a> tentang data atau <a href="https://id.wikipedia.org/wiki/Informasi" target="blank" style="color: blue;">informasi</a> tentang informasi. Metadata ini mengandung informasi mengenai isi dari suatu data yang dipakai untuk keperluan manajemen file/data itu nantinya dalam suatu <a href="https://id.wikipedia.org/wiki/Pangkalan_data" target="blank" style="color: blue;">basis data.</a> Jika data tersebut dalam bentuk teks, metadatanya biasanya berupa keterangan mengenai dan tipe fieldnya: integer, date, dll. Untuk jenis data ', metadata mengandung informasi mengenai siapa pemotretnya, kapan pemotretannya, dan setting kamera pada saat dilakukan pemotretan. Satu lagi untuk jenis data berupa kumpulan file, metadatanya adalah nama-nama file, tipe file, dan nama pengelola (administrator) dari file-file tersebut. (Source : Wikipedia)</span>
          </div>

          <div class="my_Heading2">
            <h2 class="Heading2">Fungsi Metadata</h2>
          </div>
          <hr id="Line2">
          <div class="my_textIntro">
            <span class="my_jimdel7">Metadata memberikan fungsi yang sama seperti katalog yaitu :
            </span>
          </div>
          <div class="my_textIntro">
            <ul >
                <li class="my_jimdel7">membuat sumberdaya bisa ditemukan dengan menggunakan kriteria yang relevan</li>
                <li class="my_jimdel7">mengidentifikasi sumberdaya</li>
                <li class="my_jimdel7">mengelompokkan sumberdaya yang serupa</li>
                <li class="my_jimdel7">membedakan sumberdaya yang tak miliki kesamaan</li>
                <li class="my_jimdel7">memberikan informasi lokasi</li>
            </ul>
            <span class="my_jimdel7">(Source : Wikipedia)
            </span>
          </div>

          <div class="my_Heading2">
            <h2 class="Heading2">Jenis Metadata</h2>
          </div>
          <hr id="Line2">
          <div class="my_textIntro">
            <span class="my_jimdel7">Terdapat tiga jenis utama metadata :
            </span>
          </div>
          <div class="my_textIntro">
            <ul >
                <li class="my_jimdel7"><strong>Metadata deskriptif</strong> menggambarkan suatu sumberdaya dalam maksud seperti penemuan dan identifikasi. Dia bisa meliputi elemen semisal judul, abstrak, pengarang, dan kata kunci.</li>
                <li class="my_jimdel7"><strong>Metadata struktural</strong> menunjukkan bagaimana kumpulan objek disusun secara bersama-sama menjadi satu, semisal bagaimana halaman-halaman ditata untuk membentuk suatu bab.</li>
                <li class="my_jimdel7"><strong>Metadata administratif</strong> menyediakan informasi untuk membantu mengelola sumberdaya, semisal terkait kapan dan bagaimana suatu informasi diciptakan, tipe dokumen dan informasi teknis lainnya, serta siapa yang bisa mengaks managed by Oak Ridge National Laboratory <a href="https://id.wikipedia.org/wiki/Distributed_Active_Archive_Center" target="blank">Distributed Active Archive Center</a></li>
            </ul>
            <span class="my_jimdel7">(Source : Wikipedia)
            </span>
          </div>
          <div id="my_toc_container">
            <div id="toc_container">
              <div class="toc_title">Kegiatan</div>
              <ul class="toc_list">
                @foreach($kegiatans as $kegiatan)
                <li class="toc_list_group">
                  <span class="style2" id="daftar-kegiatan{{ $kegiatan->id }}" onclick="toggleList{{ $kegiatan->id }}()">{{ $kegiatan->kegiatan }}</span>
                   <ul class="list-group" id="list-kegiatan{{ $kegiatan->id }}">
                     <li class="sublist-group">
                       <a href="/{{ $kegiatan->{'2021'} }}" class="style2" id="duasatu{{ $kegiatan->id }}">2021</a>
                     </li>
                     <li>
                       <a href="/{{ $kegiatan->{'2022'} }}" class="style2" id="duadua{{ $kegiatan->id }}">2022</a>
                     </li>
                     <li>
                       <a href="/{{ $kegiatan->{'2023'} }}" class="style2" id="duatiga{{ $kegiatan->id }}">2023</a>
                     </li>
                   </ul>
                </li>
                @endforeach
              </ul>
            </div>
          </div>


          {{-- <div id="my_Heading1">
            <h2 id="Heading1">Life and career</h2>
          </div>
          <hr id="Line1">
          <div id="my_Heading1_1">
            <h3 id="Heading1_1">1920-1925: Early life and career</h3>
          </div>
          <div id="my_Text1_1">
            <span id="my_jimdel8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Cras accumsan vitae risus id vulputate. Phasellus ac viverra sapie.
              Morbi turpis leo, venenatis vitae dapibus eget, pulvinar nec metus.
              Sed bibendum enim est, vitae porta dolor dignissim sit amet.
            </span>
          </div>
          <div id="my_Heading1_2">
            <h3 id="Heading1_2">1926-1931: Early development</h3>
          </div>
          <div id="my_Text1_2">
            <span id="my_jimdel9">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Cras accumsan vitae risus id vulputate. Phasellus ac viverra sapie.
              Morbi turpis leo, venenatis vitae dapibus eget, pulvinar nec metus.
              Sed bibendum enim est, vitae porta dolor dignissim sit amet.
            </span>
          </div>
          <div id="my_Heading1_3">
            <h3 id="Heading1_3">1936-1941: Developmental path</h3>
          </div>
          <div id="my_Text1_3">
            <span id="my_jimdel10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Cras accumsan vitae risus id vulputate. Phasellus ac viverra sapie.
              Morbi turpis leo, venenatis vitae dapibus eget, pulvinar nec metus.
              Sed bibendum enim est, vitae porta dolor dignissim sit amet.
            </span>
          </div>
          <div id="my_Heading1_4">
            <h3 id="Heading1_4">1946-1951: Adulthood</h3>
          </div>
          <div id="my_Text1_4">
            <span id="my_jimdel11">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Cras accumsan vitae risus id vulputate. Phasellus ac viverra sapie.
              Morbi turpis leo, venenatis vitae dapibus eget, pulvinar nec metus.
              Sed bibendum enim est, vitae porta dolor dignissim sit amet.
            </span>
          </div>
          <div id="my_Heading1_5">
            <h3 id="Heading1_5">1920-1925: Early life and career</h3>
          </div>
          <div id="my_Text1_5">
            <span id="my_jimdel12">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Cras accumsan vitae risus id vulputate. Phasellus ac viverra sapie.
              Morbi turpis leo, venenatis vitae dapibus eget, pulvinar nec metus.
              Sed bibendum enim est, vitae porta dolor dignissim sit amet.
            </span>
          </div>
          <div id="my_Heading1_6">
            <h3 id="Heading1_6">1920-1925: Early life and career</h3>
          </div>
          <div id="my_Text1_6">
            <span id="my_jimdel3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Cras accumsan vitae risus id vulputate. Phasellus ac viverra sapie.<br><br>
              Morbi turpis leo, venenatis vitae dapibus eget, pulvinar nec metus.
              Sed bibendum enim est, vitae porta dolor dignissim sit amet.<br><br>Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Cras accumsan vitae risus id vulputate. Phasellus ac viverra sapien,
              nec posuere turpis.Morbi turpis leo, venenatis vitae dapibus eget, pulvinar nec metus.<br>
            </span>
          </div>







          <div id="muy_Heading2_2">
            <h3 id="Heading2_2">Influences</h3>
          </div>
          <div id="my_Text2_2">
            <span id="my_jimdel15">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Cras accumsan vitae risus id vulputate. Phasellus ac viverra sapien, nec posuere turpis.
              Morbi turpis leo, venenatis vitae dapibus eget, pulvinar nec metus.
            </span>
          </div>
          <div id="muy_Heading2_3">
            <h3 id="Heading2_3">Influences</h3>
          </div>
          <div id="my_Text2_3">
            <span id="my_jimdel16">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Cras accumsan vitae risus id vulputate. Phasellus ac viverra sapien, nec posuere turpis.
              Morbi turpis leo, venenatis vitae dapibus eget, pulvinar nec metus.
            </span>
          </div>
          <div id="my_Heading3">
            <h2 id="Heading3">Accomplishmets</h2>
          </div>
          <hr id="Line3">
          <div id="my_Text3">
            <span id="my_jimdel17">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Cras accumsan vitae risus id vulputate. Phasellus ac viverra sapien, nec posuere turpis.
              Morbi turpis leo, venenatis vitae dapibus
            </span>
          </div>
          <div id="my_Heading4">
            <h2 id="Heading4">Outward tips</h2>
          </div>
          <hr id="line4">
          <div id="my_Text4">
            <span id="my_jimdel18"><strong>•</strong></span><span id="my_jimdel19"><a href="https://www.youtube.com/channel/UCiC5-n85_UzJs7C1FvFl-fg/videos" target="_blank">Official website</a>
            </span>
            <span id="my_jimdel20"><strong>•</strong></span>
            <span id="my_jimdel21"><a href="https://www.youtube.com/channel/UCiC5-n85_UzJs7C1FvFl-fg/videos" target="_blank">Jimdel-Edu</a><br></span>
          </div> --}}
      </div>

      @include('layouts.profil')


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
        @foreach($kegiatans as $kegiatan)
        <script>
                function toggleList{{ $kegiatan->id }}() {
            // Dapatkan elemen list
                var listKegiatan{{ $kegiatan->id }} = document.getElementById('list-kegiatan{{ $kegiatan->id }}');

                // Periksa apakah list sedang ditampilkan atau sembunyi
                if (listKegiatan{{ $kegiatan->id }}.style.display === 'none') {
                    // Jika sedang sembunyi, tampilkan
                    listKegiatan{{ $kegiatan->id }}.style.display = 'block';
                } else {
                    // Jika sedang ditampilkan, sembunyikan
                    listKegiatan{{ $kegiatan->id }}.style.display = 'none';
                }
            }
        </script>
        @endforeach
  </body>
</html>
