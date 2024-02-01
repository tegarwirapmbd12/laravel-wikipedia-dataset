@extends('layouts.main')

@section('content')
<div class="col-2">
    <div id="my_contentHeading1">
      <h1 id="my_contentHeading1">{{ $metadatas[0]->judul_kegiatan }}</h1>
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
            <span class="toc_number">1 </span><a href="#penyelenggara" class="style2">Penyelenggara</a>
             <ul>
               <li>
                 <span class="toc_number">1.1 </span><a href="#instansi_penyelenggara" class="style2">Instansi Penyelenggara</a>
               </li>
               <li>
                 <span class="toc_number">1.2 </span><a href="#alamat_lengkap_instansi_penyelenggara" class="style2">Alamat Lengkap Instansi Penyelenggara
                </a>
               </li>
             </ul>
          </li>
          <li>
            <span class="toc_number">2 </span><a href="#penanggung_jawab" class="style2">Penanggung Jawab</a>
            <ul>
              <li>
                <span class="toc_number">2.1</span><a href="#unit_eselon_penanggung_jawab" class="style2">Unit Eselon Penanggung Jawab</a>
              </li>
              <li>
                <span class="toc_number">2.2</span><a href="#penanggung_jawab_teknis" class="style2">Penanggung Jawab Teknis (setingkat Eselon 3)</a>
              </li>
            </ul>
         </li>
          <li>
            <span class="toc_number">3 </span><a href="#perencanaan_dan_persiapan" class="style2">Perencanaan dan Persiapan</a>
            <ul>
              <li>
                <span class="toc_number">3.1</span><a href="#latar_belakang_kegiatan" class="style2"> Latar Belakang Kegiatan</a>
              </li>
              <li>
                <span class="toc_number">3.2</span><a href="#tujuan_kegiatan" class="style2">Tujuan Kegiatan</a>
              </li>
              <li>
                <span class="toc_number">3.3</span><a href="#rencana_jadwal_kegiatan" class="style2">Rencana Jadwal Kegiatan</a>
              </li>
              {{-- <li>
                <span class="toc_number">3.4</span><a href="#variabel_yang_dikumpulkan" class="style2">Variabel (Karakteristik) yang Dikumpulkan</a>
              </li> --}}
            </ul>
         </li>
         <li>
           <span class="toc_number">4 </span><a href="#indikator" class="style2">Indikator</a>
         </li>
           <span class="toc_number">5 </span><a href="#variabel" class="style2">Variabel</a>
         </li>
        </ul>
      </div>
    </div>

    {{-- BAB1 --}}
    <div class="my_Heading1" id="penyelenggara">
      <h2 class="Heading1">Penyelenggara</h2>
    </div>
    <hr id="Line1">
    <div class="my_Heading1_4" id="instansi_penyelenggara">
      <h3 class="Heading1_4">1.1 Instansi Penyelenggara</h3>
    </div>
    <div class="my_Text1_4">
      <span class="my_jimdel11">{{ $metadatas[0]->instansi }}
      </span>
    </div>
    <div class="my_Heading1_4" id="alamat_lengkap_instansi_penyelenggara">
      <h3 class="Heading1_4">1.2 Alamat Lengkap Instansi Penyelenggara</h3>
    </div>
    <div class="my_Text1_4">
      <span class="my_jimdel11">{{ $metadatas[0]->alamat }}
      </span>
    </div>
    {{-- BAB 1 END --}}

    {{-- BAB 2 --}}
    <div class="my_Heading1" id="penanggung_jawab">
      <h2 class="Heading1">Penanggung Jawab</h2>
    </div>
    <hr id="Line1">
    <div class="my_Heading1_4" id="unit_eselon_penanggung_jawab">
      <h3 class="Heading1_4">2.1 Unit Eselon Penanggung Jawab</h3>
    </div>
    <div class="my_Text1_4">
      <label class="my_jimdel11 col-sm-1">Eselon 1</label>
      <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">{{ $metadatas[0]->eselon_1 }}</span>
    </div>
    <div class="my_Text1_4">
      <label class="my_jimdel11 col-sm-1">Eselon 2</label>
      <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">{{ $metadatas[0]->eselon_2 }}
    </span>
    </div>
    <div class="my_Heading1_4" id="penanggung_jawab_teknis">
      <h3 class="Heading1_4">2.2 Penanggung Jawab Teknis (setingkat Eselon 3)</h3>
    </div>
    <div class="my_Text1_4">
        <label class="my_jimdel11 col-sm-1">Jabatan</label>
        <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">{{ $metadatas[0]->jabatan }}</span>
    </div>
    <div class="my_Text1_4">
        <label class="my_jimdel11 col-sm-1">Alamat</label>
        <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">{{ $metadatas[0]->alamat }}</span>
    </div>
    <div class="my_Text1_4">
        <label class="my_jimdel11 col-sm-1">Telepon</label>
      <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">{{ $metadatas[0]->telepon }}</span>
    </div>
    <div class="my_Text1_4">
      <label class="my_jimdel11 col-sm-1">Faksimile</label>
      <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">{{ $metadatas[0]->faksimile }}</span>
    </div>
    <div class="my_Text1_4">
      <label class="my_jimdel11 col-sm-1">Email</label>
      <span class="my_jimdel11" style="margin: 0 10px">:</span><span class="my_jimdel11">{{ $metadatas[0]->email }}</span>
    </div>
    {{-- BAB 2 END --}}

    {{-- BAB 3 --}}
    <div class="my_Heading1" id="perencanaan_dan_persiapan">
      <h2 class="Heading1">Perencanaan dan Persiapan</h2>
    </div>
    <hr id="Line1">
    <div class="my_Heading1_4" id="latar_belakang_kegiatan">
      <h3 class="Heading1_4">3.1 Latar Belakang Kegiatan</h3>
    </div>

    {{-- Latar belakang hanya 1 --}}
    @if( $metadatas->count() == 1 || $metadatas->count() > 1 && $metadatas->whereNotNull('latar_belakang')->count() == 1)
    <div class="my_Text1_4">
      <span class="my_jimdel11" style="margin: 0 10px"></span>
      <span class="my_jimdel11">{{ $metadatas[0]->latar_belakang }}
      </span>
    </div>
    {{-- PERCOBAAN ELSE IF NULL --}}
    @elseif($metadatas->count() > 1)
    @foreach($metadatas as $metadata)
    @if($metadata->latar_belakang !== null)
    <div class="my_Text1_4">
      <span class="my_jimdel11" style="margin: 0 10px">{{ $metadata->id }}</span>
      <span class="my_jimdel11">{{ $metadata->latar_belakang }}
      </span>
    </div>
    @else
    @endif
    @endforeach
    @else

    @endif
    {{-- PERCOBAAN ELSE IF NULL END --}}

    {{-- ELSE IF BERHASIL --}}
    {{-- @elseif($metadatas->count() > 1)
    @foreach($metadatas as $metadata)
    <div class="my_Text1_4">
      <span class="my_jimdel11" style="margin: 0 10px">{{ $metadata->id }}</span>
      <span class="my_jimdel11">{{ $metadata->latar_belakang }}
      </span>
    </div>
    @endforeach

    @else
    @endif --}}
    {{-- ELSE IF BERHASIL END --}}



    <div class="my_Heading1_4" id="tujuan_kegiatan">
      <h3 class="Heading1_4">3.2 Tujuan Kegiatan</h3>
    </div>
    {{-- tujuan kegiatan hanya 1 --}}
    @if( $metadatas->count() == 1 || $metadatas->count() > 1 && $metadatas->whereNotNull('tujuan_kegiatan')->count() == 1)
    <div class="my_Text1_4">
      <span class="my_jimdel11" style="margin: 0 10px"></span>
      <span class="my_jimdel11">{{ $metadatas[0]->tujuan_kegiatan }}
      </span>
    </div>
    {{-- PERCOBAAN ELSE IF NULL --}}
    @elseif($metadatas->count() > 1)
    @foreach($metadatas as $metadata)
    @if($metadata->tujuan_kegiatan !== null)
    <div class="my_Text1_4">
      <span class="my_jimdel11" style="margin: 0 10px">{{ $metadata->id }}</span>
      <span class="my_jimdel11">{{ $metadata->tujuan_kegiatan }}
      </span>
    </div>
    @else
    @endif
    @endforeach
    @else

    @endif




    <div class="my_Heading1_4" id="rencana_jadwal_kegiatan">
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
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->perencanaan_kegiatan_awal }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->perencanaan_kegiatan_akhir }}</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">2</th>
                <td class="my_jimdel11 wrapped-cell">Desain</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->desain_awal }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->desain_akhir }}</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell">B</th>
                <td colspan="3" class="my_jimdel11 wrapped-cell"><strong>Pengumpulan</strong></td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">3</th>
                <td class="my_jimdel11 wrapped-cell">Pengumpulan Data</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->pengumpulan_data_awal }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->pengumpulan_data_akhir }}</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell">C</th>
                <td colspan="3" class="my_jimdel11 wrapped-cell"><strong>Pemeriksaan</strong></td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">4</th>
                <td class="my_jimdel11 wrapped-cell">Pengolahan Data</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->pengolahan_data_awal }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->pengolahan_data_akhir }}</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell">D</th>
                <td colspan="3" class="my_jimdel11 wrapped-cell"><strong>Penyebarluasan</strong></td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">5</th>
                <td class="my_jimdel11 wrapped-cell">Analisis</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->analisis_awal }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->analisis_akhir }}</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">6</th>
                <td class="my_jimdel11 wrapped-cell">Diseminasi Hasil</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->diseminasi_hasil_awal }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->diseminasi_hasil_akhir }}</td>
              </tr>
              <tr>
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">7</th>
                <td class="my_jimdel11 wrapped-cell">Evaluasi</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->evaluasi_awal }}</td>
                <td class="my_jimdel11 wrapped-cell">{{ $metadatas[0]->evaluasi_akhir }}</td>
              </tr>
            </tbody>
          </table>
    </div>

    {{-- <div class="my_Heading1_4" id="variabel_yang_dikumpulkan">
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
    </div> --}}
    {{-- BAB 3 END --}}

    {{-- BAB 4 --}}
    <div class="my_Heading1" id="indikator">
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
            @foreach ($metadatas as $metadata)
            <tbody>
              <tr>
                @if ($metadata->nama_indikator !== null)
                <th class="my_jimdel11 wrapped-cell" style="text-align: center">{{ $metadata->id }}</th>
                @else
                @endif

                @if ($metadata->nama_indikator !== null)
                <td class="my_jimdel11 wrapped-cell" style="text-align: center">{{ $metadata->nama_indikator }}</td>
                @else

                @endif

                @if ($metadata->konsep_indikator !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->konsep_indikator }}</td>
                @else

                @endif

                @if ($metadata->definisi_indikator !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->definisi_indikator }}</td>
                @else

                @endif

                @if ($metadata->interpretasi !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->interpretasi }}</td>
                @else

                @endif

                @if ($metadata->metode_rumus_penghitungan !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->metode_rumus_penghitungan }}</td>
                @else

                @endif

                @if ($metadata->ukuran !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->ukuran }}</td>
                @else

                @endif

                @if ($metadata->satuan !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->satuan }}</td>
                @else

                @endif

                @if ($metadata->klasifikasi_penyajian !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->klasifikasi_penyajian }}</td>
                @else

                @endif

                @if ($metadata->indikator_komposit !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->indikator_komposit }}</td>
                @else

                @endif

                @if ($metadata->publikasi_ketersediaan !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->publikasi_ketersediaan }}</td>
                @else

                @endif

                @if ($metadata->nama_indikator_pembangunan !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->nama_indikator_pembangunan }}</td>
                @else

                @endif

                @if ($metadata->kegiatan_penghasil !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->kegiatan_penghasil }}</td>
                @else

                @endif

                @if ($metadata->kode_kegiatan !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->kode_kegiatan }}</td>
                @else

                @endif

                @if ($metadata->nama_variabel_pembangunan !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->nama_variabel_pembangunan }}</td>
                @else

                @endif

                @if ($metadata->level_estimasi !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->level_estimasi }}</td>
                @else

                @endif

                @if ($metadata->dapat_diakses_umum_indikator !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->dapat_diakses_umum_indikator }}</td>
                @else

                @endif
              </tr>
              <?php $i++; ?>
                  @endforeach
            </tbody>
          </table>
        </div>
    </div>
    {{-- BAB 4 END --}}

    {{-- BAB 5 --}}
    <div class="my_Heading1" id="variabel">
        <h2 class="Heading1">Variabel</h2>
      </div>
      <hr id="Line1">
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
            @foreach ($metadatas as $metadata)
            <tbody>
              <tr>
                @if ($metadata->nama_variabel !== null)
                <th class="my_jimdel11 wrapped-cell">{{ $metadata->id }}</th>
                @else
                @endif


                @if ($metadata->nama_variabel !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->nama_variabel }}</td>
                @else
                @endif

                @if ($metadata->alias !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->alias }}</td>
                @else
                @endif


                @if ($metadata->konsep_variabel !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->konsep_variabel }}</td>
                @else
                @endif


                @if ($metadata->definisi_variabel !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->definisi_variabel }}</td>
                @else
                @endif


                @if ($metadata->referensi_pemilihan !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->referensi_pemilihan }}</td>
                @else
                @endif


                @if ($metadata->referensi_waktu !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->referensi_waktu }}</td>
                @else
                @endif


                @if ($metadata->tipe_data !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->tipe_data }}</td>
                @else
                @endif


                @if ($metadata->klasifikasi_isian !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->klasifikasi_isian }}</td>
                @else
                @endif


                @if ($metadata->aturan_validasi !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->aturan_validasi }}</td>
                @else
                @endif


                @if ($metadata->kalimat_pertanyaan !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->kalimat_pertanyaan }}</td>
                @else
                @endif


                @if ($metadata->dapat_diakses_umum_variabel !== null)
                <td class="my_jimdel11 wrapped-cell">{{ $metadata->dapat_diakses_umum_variabel }}</td>
                @else
                @endif
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

      {{-- @foreach($variabels as $variabel) --}}
      <span class="my_jimdel18"><strong>•</strong></span><span class="my_jimdel19"><a href="{{ asset('storage/' . $metadatas[0]->file_kegiatan) }}" target="_blank">Kegiatan</a>
      </span>

      <span class="my_jimdel18"><strong>•</strong></span><span class="my_jimdel19"><a href="{{ asset('storage/' . $metadatas[0]->file_indikator) }}" target="_blank">indikator</a>
      </span>
      <span class="my_jimdel18"><strong>•</strong></span><span class="my_jimdel19"><a href="{{ asset('storage/' . $metadatas[0]->file_variabel) }}" target="_blank">Variabel</a><br></span>
      {{-- @endforeach --}}
    </div>
  </div>
  @endsection
