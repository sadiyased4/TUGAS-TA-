@extends('layouts.layouts')

@section('content')
    {{-- tentang --}}
    <section id="tentang kami" style="margin-top: 100px" class="py-5">
        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-blod">Cerita Kami</h2>
            </div>

            <div class="row py-5" data-aos="flip-up">
                <div class="d-flex mb-3">
                    <a href="/">Home</a>
                </div>

                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/tentang kami.png') }}" class="img-fluid" alt="">
                        <h2 class="title py-3">Awal Mula</h2>
                        <p>Dimulai dari tahun 1998, Ibu Winn adalah seorang penjahit yang memulai kariernya dengan jahitan
                            baju-baju sederhana.
                            Setiap hari, dia menjahit dengan penuh dedikasi, melayani pelanggan dari berbagai kalangan.
                            Dari tangannya yang terampil, lahirlah pakaian-pakaian yang menambah kepercayaan diri para
                            pelanggannya.
                            Usahanya tidak hanya memenuhi kebutuhan keluarga,
                            tetapi juga memberikan kebahagiaan bagi mereka yang memakainya.

                            Bertahun-tahun bekerja dengan mesin jahit, Ibu Winn menyimpan sedikit demi sedikit keuntungan
                            yang didapatnya. Hingga akhirnya, pada tahun 2018, dia memiliki cukup modal untuk mencoba usaha
                            baru. Kali ini, dia memutuskan untuk beternak bebek. Walau terkesan jauh berbeda dari
                            jahit-menjahit, Ibu Winn merasa beternak bebek bisa menjadi peluang bisnis yang baik. Dimulai
                            dengan beberapa ekor bebek, usahanya berkembang secara perlahan. Pada awalnya, dia hanya menjual
                            telur bebek ke tetangga dan pasar setempat. Namun, antusiasme terhadap telur bebek organik yang
                            dihasilkannya mulai meningkat.
                            <br>
                            <br>
                            --Bisnis telur bebek berkembang cukup baik selama beberapa tahun, tetapi kemudian pandemi
                            COVID-19
                            datang. Seperti banyak usaha kecil lainnya, bisnis telur bebek Ibu Winn mengalami penurunan
                            drastis. Pembatasan sosial dan ketidakpastian ekonomi membuat banyak orang mengurangi
                            pengeluaran mereka, termasuk untuk kebutuhan makanan tambahan seperti telur bebek.
                            Namun, Keluarga Ibu Winn tidak menyerah. Dia melihat bahwa pandemi juga membawa kebutuhan baru,
                            terutama
                            untuk akses internet. Dengan banyaknya orang yang harus bekerja dan belajar dari rumah,
                            kebutuhan akan Wi-Fi meningkat tajam. Mengambil peluang ini, Ibu Winn dan keluarganya mulai
                            merambah ke usaha baru yaitu jasa pemasangan Wi-Fi. Mereka memanfaatkan modal yang ada untuk
                            membeli peralatan dan mempelajari teknis pemasangan jaringan. Usaha ini mendapat sambutan
                            positif dari masyarakat, terutama karena banyak orang membutuhkan koneksi internet yang andal
                            untuk bekerja dan anak-anak untuk mengikuti pelajaran jarak jauh atau Zoom.
                            <br>
                            <br>
                            Seiring waktu, layanan pemasangan Wi-Fi dari Keluarga Ibu Winn menjadi andalan banyak keluarga
                            dan usaha
                            di desa Salam Kedawung. Kualitas layanan dan kemudahan yang diberikan membuat bisnis ini tetap
                            diminati bahkan setelah pandemi mereda. Namun, Keluarga Ibu Winn tidak berhenti di situ. Dia
                            selalu
                            mencari cara untuk berkembang dan berinovasi.
                            <br>
                            <br>
                            Baru-baru ini, Niww Creative, nama usaha yang diambil dari kombinasi nama Ibu Winn yang di balik
                            memperluas lini bisnisnya lagi. Mereka mulai memproduksi dan menjual aksesori
                            seperti gelang manik-manik dan kalung. Produk-produk ini dirancang dengan keahlian dan sentuhan
                            estetika yang unik, membuatnya diminati oleh berbagai kalangan, terutama para remaja dan wanita
                            muda. Dengan dukungan promosi di media sosial, produk aksesori dari Niww Creative mulai dikenal
                            lebih luas.
                            <br>
                            <br>
                            Kini, Niww Creative berdiri sebagai perusahaan yang dinamis dengan berbagai lini usaha mulai
                            dari jasa pemasangan Wi-Fi hingga produksi aksesori. Perjalanan Ibu Winn dari seorang penjahit
                            sederhana hingga menjadi Keluarga pengusaha dengan berbagai lini usaha menunjukkan ketekunan,
                            adaptabilitas, dan semangat pantang menyerah. Dari krisis hingga inovasi, cerita Niww Creative
                            adalah bukti bahwa peluang bisa muncul dari berbagai situasi, dan dengan kerja keras serta
                            ketekunan, kita bisa bangkit dan berkembang bahkan dari masa-masa sulit.

                        </p>
                    </div>
                </div>
            </div>

            {{-- <div class="footer-berita text-center">
                        <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
                    </div> --}}
        </div>
    </section>
    {{-- end tentang --}}
@endsection
