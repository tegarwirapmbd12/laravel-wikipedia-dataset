@extends('layouts.main')

@section('content')
<div class="col-2">
    <div id="my_contentHeading1">
      <h1 id="my_contentHeading1">Jumlah Kejadian Penegakan Perda, Ketertiban Umum, dan Pemadam Kebakaran di Kabupaten Semarang 2021</h1>
    </div>
    <hr id="indexLine1">
    {{-- <div id="my_textIntro">
      <span id="my_jimdel7"><strong>Lorem ipsum</strong>Lorem ipsum dolor sit amet,
         consectetur adipiscing elit. Cras accumsan vitae risus id vulputate.
         Phasellus ac viverra sapien, nec posuere turpis.<br><br>Lorem ipsum dolor sit amet,
          consectetur adipiscing elit. Cras accumsan vitae risus id vulputate.
         Phasellus ac viverra sapien, nec posuere turpis.<br><br>Lorem ipsum dolor sit amet,
         consectetur adipiscing elit. Cras accumsan vitae risus id vulputate.
         Phasellus ac viverra sapien, nec posuere turpis.</span>
    </div> --}}
    <div id="my_toc_container">
      <div id="toc_container">
        <div class="toc_title">Kegiatan</div>
        <ul class="toc_list">
          <li>
            <span class="toc_number">1 </span><a href="#Heading1" class="style2">Penyelenggara</a>
             <ul>
               <li>
                 <span class="toc_number">1.1 </span><a href="#Heading1_1" class="style2">Instansi Penyelenggara</a>
               </li>
               <li>
                 <span class="toc_number">1.2 </span><a href="#Heading1_2" class="style2">Alamat Lengkap Instansi Penyelenggara
                </a>
               </li>
             </ul>
          </li>
          <li>
            <span class="toc_number">2 </span><a href="#Heading2" class="style2">Penanggung Jawab</a>
            <ul>
              <li>
                <span class="toc_number">2.1</span><a href="#Heading2_1" class="style2">Unit Eselon Penanggung Jawab</a>
              </li>
              <li>
                <span class="toc_number">2.2</span><a href="#Heading2_2" class="style2">Penanggung Jawab Teknis (setingkat Eselon 3)</a>
              </li>
            </ul>
         </li>
          <li>
            <span class="toc_number">3 </span><a href="#Heading2" class="style2">Perencanaan dan Persiapan</a>
            <ul>
              <li>
                <span class="toc_number">3.1</span><a href="#Heading2_1" class="style2"> Latar Belakang Kegiatan</a>
              </li>
              <li>
                <span class="toc_number">3.2</span><a href="#Heading2_2" class="style2">Tujuan Kegiatan</a>
              </li>
              <li>
                <span class="toc_number">3.3</span><a href="#Heading2_3" class="style2">Rencana Jadwal Kegiatan</a>
              </li>
              <li>
                <span class="toc_number">3.4</span><a href="#Heading2_4" class="style2">Variabel (Karakteristik) yang Dikumpulkan</a>
              </li>
            </ul>
         </li>
         <li>
           <span class="toc_number">4 </span><a href="#Heading3" class="style2">Indikator</a>
         </li>
           <span class="toc_number">5 </span><a href="#Heading5" class="style2">Variabel</a>
         </li>
        </ul>
      </div>
    </div>

    {{-- BAB1 --}}
    <div class="my_Heading1">
      <h2 class="Heading1">Penyelenggara</h2>
    </div>
    <hr id="Line1">
    <div class="my_Heading1_4">
      <h3 class="Heading1_4">1.1 Instansi Penyelenggara</h3>
    </div>
    <div class="my_Text1_4">
      <span class="my_jimdel11">SATPOL PP DAN DAMKAR KAB SEMARANG
      </span>
    </div>
    <div class="my_Heading1_4">
      <h3 class="Heading1_4">1.2 Alamat Lengkap Instansi Penyelenggara</h3>
    </div>
    <div class="my_Text1_4">
      <span class="my_jimdel11">Jl. Brigjen Sudiarto No 34 Ungaran, Telepon : 0246921026, Email : satpolkabsemarang@gmail.com, Faksimile : 0246921026
      </span>
    </div>
    {{-- BAB 1 END --}}

    {{-- BAB 2 --}}
    <div class="my_Heading1">
      <h2 class="Heading1">Penanggung Jawab</h2>
    </div>
    <hr id="Line1">
    <div class="my_Heading1_4">
      <h3 class="Heading1_4">2.1 Unit Eselon Penanggung Jawab</h3>
    </div>
    <div class="my_Text1_4">
      <label class="my_jimdel11 col-sm-1">Eselon 1</label>
      <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">-</span>
    </div>
    <div class="my_Text1_4">
      <label class="my_jimdel11 col-sm-1">Eselon 2</label>
      <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">Kepala Satpol PP & Damkar Kab Semarang
    </span>
    </div>
    <div class="my_Heading1_4">
      <h3 class="Heading1_4">2.2 Penanggung Jawab Teknis (setingkat Eselon 3)</h3>
    </div>
    <div class="my_Text1_4">
        <label class="my_jimdel11 col-sm-1">Jabatan</label>
        <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">Kasubag Umpeg</span>
    </div>
    <div class="my_Text1_4">
        <label class="my_jimdel11 col-sm-1">Alamat</label>
        <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">Jl. Brigjen Sudiarto No 34 Ungaran</span>
    </div>
    <div class="my_Text1_4">
        <label class="my_jimdel11 col-sm-1">Telepon</label>
      <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">0246921026</span>
    </div>
    <div class="my_Text1_4">
      <label class="my_jimdel11 col-sm-1">Faksimile</label>
      <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">0246921026</span>
    </div>
    <div class="my_Text1_4">
      <label class="my_jimdel11 col-sm-1">Email</label>
      <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">satpolkabsemarang@gmail.com</span>
    </div>
    {{-- BAB 2 END --}}

    {{-- BAB 3 --}}
    <div class="my_Heading1">
      <h2 class="Heading1">Perencanaan dan Persiapan</h2>
    </div>
    <hr id="Line1">
    <div class="my_Heading1_4">
      <h3 class="Heading1_4">3.1 Latar Belakang</h3>
    </div>
    <div class="my_Text1_4">
      <span class="my_jimdel11" style="margin: 0 10px"></span>
      <span class="my_jimdel11">Jumlah Kejadian Penegakan Perda, Ketertiban Umum, dan Pemadam Kebakaran di Kabupaten Semarang
      </span>
    </div>
    {{-- <div class="my_Text1_4">
      <span class="my_jimdel11" style="margin: 0 10px">-</span>
      <span class="my_jimdel11"> kebutuhan informasi mengenai kepegawaian untuk memenuhi kebutuhan unsur pimpinan instansi
        di lingkungan pemerintah Kab. Semarang dan juga untuk mendukung kebutuhan data oleh kalangan
        umum dan stakeholder, sehingga dapat meningkatkan layanan administratif dan pembinaan sumber
        daya aparatur PNS.
      </span>
    </div> --}}
    <div class="my_Heading1_4">
      <h3 class="Heading1_4">3.2 Tujuan Kegiatan</h3>
    </div>
    <div class="my_Text1_4">
        <span class="my_jimdel11" style="margin: 0 10px"></span>
        <span class="my_jimdel11">Memberikan informasi kejadian penegakan Perda, Ketertiban Umum, dan Pemadam Kebakaran di Kabupaten Semarang kepada masyarakat.
        </span>
    </div>
    {{-- <div class="my_Text1_4">
        <span class="my_jimdel11" style="margin: 0 10px">2</span>
        <span class="my_jimdel11">. Menyajikan informasi data kepegawaian, sehingga dapat diperoleh gambaran/keadaan umum
            kepegawaian khususnya Pegawai Negeri Sipil di
            Kabupaten Semarang.
        </span>
    </div>
    <div class="my_Text1_4">
        <span class="my_jimdel11" style="margin: 0 10px">3</span>
        <span class="my_jimdel11">. Menyajikan informasi data kepegawaian, sebagai bahan guna memenuhi
            kebutuhan unsur pimpinan dalam rangka perencanaan pembinaan pegawai
            serta keperluan dan kebutuhan lainnya.
        </span>
    </div>
    <div class="my_Text1_4">
        <span class="my_jimdel11" style="margin: 0 10px">4</span>
        <span class="my_jimdel11">Secara bertahap dan berjangka panjang menyiapkan data dasar yang dapat
            dimanfaatkan sebagai bahan penyusunan kebijakan kepegawaian di
            Pemerintah Kabupaten Semarang.
        </span>
    </div> --}}
    <div class="my_Heading1_4">
        <h3 class="Heading1_4">3.3 Rencana Jadwal Kegiatan</h3>
    </div>
    <div class="my_Text1_4">
        <table class="table  table-bordered" width="70%">
            <thead class="table-light">
              <tr>
                <th class="my_jimdel11 wrapped-cell">ID</th>
                <th class="my_jimdel11 wrapped-cell">KEGIATAN</th>
                <th class="my_jimdel11 wrapped-cell">AWAL</th>
                <th class="my_jimdel11 wrapped-cell">AKHIR</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="my_jimdel11 wrapped-cell">A</th>
                <td colspan="3" class="my_jimdel11 wrapped-cell"><strong>Perencanaan</strong></td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">1</th>
                <td class="my_jimdel11 wrapped-cell">Perencanaan Kegiatan</td>
                <td class="my_jimdel11 wrapped-cell">04-01-2021</td>
                <td class="my_jimdel11 wrapped-cell">29-01-2021</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">2</th>
                <td class="my_jimdel11 wrapped-cell">Desain</td>
                <td class="my_jimdel11 wrapped-cell">04-01-2021</td>
                <td class="my_jimdel11 wrapped-cell">29-01-2021</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell">B</th>
                <td colspan="3" class="my_jimdel11 wrapped-cell"><strong>Pengumpulan</strong></td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">3</th>
                <td class="my_jimdel11 wrapped-cell">Pengumpulan Data</td>
                <td class="my_jimdel11 wrapped-cell">04-01-2021</td>
                <td class="my_jimdel11 wrapped-cell">31-12-2021</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell">C</th>
                <td colspan="3" class="my_jimdel11 wrapped-cell"><strong>Pemeriksaan</strong></td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">4</th>
                <td class="my_jimdel11 wrapped-cell">Pengolahan Data</td>
                <td class="my_jimdel11 wrapped-cell">25-01-2021</td>
                <td class="my_jimdel11 wrapped-cell">31-12-2021</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell">D</th>
                <td colspan="3" class="my_jimdel11 wrapped-cell"><strong>Penyebarluasan</strong></td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">5</th>
                <td class="my_jimdel11 wrapped-cell">Analisis</td>
                <td class="my_jimdel11 wrapped-cell">01-12-2021</td>
                <td class="my_jimdel11 wrapped-cell">31-12-2021</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">6</th>
                <td class="my_jimdel11 wrapped-cell">Diseminasi Hasil</td>
                <td class="my_jimdel11 wrapped-cell">01-01-2022</td>
                <td class="my_jimdel11 wrapped-cell">31-01-2022</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">7</th>
                <td class="my_jimdel11 wrapped-cell">Evaluasi</td>
                <td class="my_jimdel11 wrapped-cell">01-01-2022</td>
                <td class="my_jimdel11 wrapped-cell">31-01-2022</td>
              </tr>
            </tbody>
          </table>
    </div>

    <div class="my_Heading1_4">
        <h3 class="Heading1_4">3.4 Variabel (Karakteristik) yang Dikumpulkan</h3>
    </div>
    <div class="my_Text1_4">
        <table class="table  table-bordered" width="70%">
            <thead class="table-light">
              <tr>
                <th class="my_jimdel11 wrapped-cell">NO</th>
                <th class="my_jimdel11 wrapped-cell">Nama Variabel (Karakteristik)</th>
                <th class="my_jimdel11 wrapped-cell">Konsep</th>
                <th class="my_jimdel11 wrapped-cell">Definisi</th>
                <th class="my_jimdel11 wrapped-cell">Referensi Waktu (Periode Enumerasi)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">1</th>
                <td class="my_jimdel11 wrapped-cell">Jumlah Kejadian Pemadaman Kebakaran (damkar)</td>
                <td class="my_jimdel11 wrapped-cell">Pemadaman kebakaran (damkar)</td>
                <td class="my_jimdel11 wrapped-cell">Pemadaman kebakaran adalah tindakan untuk mencegah penyebaran dan pemadamkan api yang tidak diinginkan pada bangunan, kendaraan, hutan, dll.</td>
                <td class="my_jimdel11 wrapped-cell">1 tahun</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">2</th>
                <td class="my_jimdel11 wrapped-cell">Jumlah Penegakan Peraturan daerah (Perda)</td>
                <td class="my_jimdel11 wrapped-cell">Peraturan daerah (Perda)</td>
                <td class="my_jimdel11 wrapped-cell">Perda adalah peraturan perundang-undangan yang dibentuk oleh DPRD dengan persetujuan bersama Kepala Daerah</td>
                <td class="my_jimdel11 wrapped-cell">1 tahun</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">3</th>
                <td class="my_jimdel11 wrapped-cell">jumlah penindakan ketertiban umum</td>
                <td class="my_jimdel11 wrapped-cell">ketertiban umum</td>
                <td class="my_jimdel11 wrapped-cell">suatu asas dan standard yang dibentuk oleh badan pembuat undang- undang atau oleh pengadilan sebagai suatu dasar atau asas yang penting bagi suatu negara dan semua         masyarakat</td>
                <td class="my_jimdel11 wrapped-cell">1 tahun</td>
              </tr>
            </tbody>
          </table>
    </div>
    {{-- BAB 3 END --}}

    {{-- BAB 4 --}}
    <div class="my_Heading1">
        <h2 class="Heading1">Indikator</h2>
      </div>
      <hr id="Line1">
      {{-- <div class="my_Heading1_4">
        <h3 class="Heading1_4">3.1 Latar Belakang</h3>
      </div> --}}
    <div class="my_Text1_4 bg-light">
        <div class="table-responsive mt-5">
        <table class="table table-bordered table-sm" width="100%">
            <thead class="table-secondary text-center">
              <tr>
                <th class="my_jimdel11" rowspan="2">No</th>
                <th class="my_jimdel11" rowspan="2">Indikator</th>
                <th class="my_jimdel11" rowspan="2">Konsep</th>
                <th class="my_jimdel11" rowspan="2">Definisi</th>
                <th class="my_jimdel11" rowspan="2">Interpretasi</th>
                <th class="my_jimdel11" rowspan="2">Metode/Rumus Perhitungan</th>
                <th class="my_jimdel11" rowspan="2">Ukuran</th>
                <th class="my_jimdel11" rowspan="2">Satuan</th>
                <th class="my_jimdel11" rowspan="2">Klasifikasi Penyajian</th>
                <th class="my_jimdel11" rowspan="2">Indikator Komposit</th>
                <th class="my_jimdel11" colspan="2" >Indikator Pembangunan</th>
                <th class="my_jimdel11" colspan="3">Variabel Pembangunan</th>
                <th class="my_jimdel11" rowspan="2">Level Estimasi</th>
                <th class="my_jimdel11" rowspan="2">Dapat Diakses Umum</th>
              </tr>
              <tr>
                <th class="my_jimdel11">Publikasi Ketersediaan</th>
                <th class="my_jimdel11">Nama</th>
                <th class="my_jimdel11">Kegiatan Penghasil</th>
                <th class="my_jimdel11">Kode Keg.</th>
                <th class="my_jimdel11">Nama</th>
              </tr>
            </thead>
            <?php $i = 1; ?>
            @foreach ($indikators as $indikator)
            <tbody>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">{{ $indikator->id }}</th>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->nama_indikator }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->konsep }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->definisi }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->interpretasi }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->metode_rumus_penghitungan }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->ukuran }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->satuan }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->klasifikasi_penyajian }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->indikator_komposit }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->publikasi_ketersediaan }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->nama_indikator_pembangunan }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->kegiatan_penghasil }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->kode_kegiatan }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->nama_variabel_pembangunan }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->level_estimasi }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $indikator->dapat_diakses_umum }}</td>
              </tr>
              <?php $i++; ?>
                  @endforeach
            </tbody>
          </table>
        </div>
    </div>
    {{-- BAB 4 END --}}

    {{-- BAB 5 --}}
    <div class="my_Heading1">
        <h2 class="Heading1">Variabel</h2>
      </div>
      <hr id="Line1">
      {{-- <div class="my_Heading1_4">
        <h3 class="Heading1_4">3.1 Latar Belakang</h3>
      </div> --}}
    <div class="my_Text1_4 bg-light">
        <div class="table-responsive mt-5">
        <table class="table table-bordered table-sm" width="100%">
            <thead class="table-secondary text-center">
              <tr>
                <th class="my_jimdel11">No</th>
                <th class="my_jimdel11">Nama Variabel</th>
                <th class="my_jimdel11">Alias</th>
                <th class="my_jimdel11">Konsep</th>
                <th class="my_jimdel11">Definisi</th>
                <th class="my_jimdel11">Referensi Pemilihan</th>
                <th class="my_jimdel11">Referensi Waktu</th>
                <th class="my_jimdel11">Tipe Data</th>
                <th class="my_jimdel11">Klasifikasi Isian</th>
                <th class="my_jimdel11">Aturan Validasi</th>
                <th class="my_jimdel11">Kalimat Pertanyaan</th>
                <th class="my_jimdel11">Dapat Diakses Umum</th>
              </tr>
            </thead>
            <?php $i = 1; ?>
            @foreach ($variabels as $variabel)
            <tbody>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">{{ $variabel->id }}</th>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->nama_variabel }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->alias }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->konsep }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->definisi }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->referensi_pemilihan }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->referensi_waktu }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->tipe_data }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->klasifikasi_isian }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->aturan_validasi }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->kalimat_pertanyaan }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $variabel->dapat_diakses_umum }}</td>
              </tr>
              <?php $i++; ?>
                  @endforeach
            </tbody>
          </table>
        </div>
    </div>
    {{-- BAB 5 END --}}

    <div id="my_Heading4">
      <h2 id="Heading4">Konten Terkait</h2>
    </div>
    <hr id="line4">
    <div id="my_Text4">
      <span class="my_jimdel18"><strong>•</strong></span><span class="my_jimdel19"><a href="https://www.youtube.com/channel/UCiC5-n85_UzJs7C1FvFl-fg/videos" target="_blank">Kegiatan</a>
      </span>
      <span class="my_jimdel18"><strong>•</strong></span><span class="my_jimdel19"><a href="https://www.youtube.com/channel/UCiC5-n85_UzJs7C1FvFl-fg/videos" target="_blank">Indikator</a><br></span>
      <span class="my_jimdel18"><strong>•</strong></span><span class="my_jimdel19"><a href="https://www.youtube.com/channel/UCiC5-n85_UzJs7C1FvFl-fg/videos" target="_blank">Variabel</a><br></span>
    </div>
  </div>
  @endsection
