<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/icons/Logo_Niww.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Niww Creative</title>

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Magnific --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">

    {{-- Summernote CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- Content --}}
    @yield('content')

        {{-- Footer --}}
        <section id="footer" class="bg-white" data-aos="zoom-in-down">
            <div class="container py-4">
                <footer>
                    <div class="row">
                        {{-- navigasi kata kunci --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Navigasi</h5>
                            <div class="d-flex">
                                <ul class="nav flex-column me-5">
                                    <li class="nav-item mb-2"><a href="https://www.djkn.kemenkeu.go.id/kanwil-jatim/baca-artikel/16933/Pengembangan-UMKM-demi-Perekonomian-Nasional-yang-Kuat.html" 
                                        class="nav-link p-0 text-muted">UMKM</a>
                                    </li>
                                    
                                    <li class="nav-item mb-2"><a href="https://www.blitarkab.go.id/" class="nav-link p-0 text-muted">Blitar</a>
                                    </li>
                                    
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Berita UMKM</a>
                                    </li>
                                </ul>
                                {{-- <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">UMKM</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Wifi</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Telur Bebek</a></li>
                                </ul> --}}
                            </div>
                        </div>

                    {{-- media sosial --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Media Sosial</h5>
                            <div class="d-flex mb-3">
                                <a href="https://www.instagram.com/aiiysya?igsh=bW11cWt1ajNtbjdx" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{asset('assets/icons/instagram.png')}}" height="30" width="30" class="me-4" alt="">
                                </a>
                                <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{asset('assets/icons/gmail.png')}}" height="30" width="30" class="me-4" alt="">
                                </a>
                                {{-- <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{asset('assets/icons/logo.png')}}" height="30" width="30" class="me-4" alt="">
                                </a> --}}
                            </div>
                        </div>
                    {{-- Kontak --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                            <ul class="nav-flex-column">
                                <li class="nav-item mb-2"><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox"
                                        class="nav-link p-0 text-muted">aiyatulaili22.mhs@akb.ac.id</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-muted">085-546-113-963</a></li>
                            </ul>
                        </div>
                        {{-- alamat --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="font-inter fw-bold mb-3">Alamat Niww Creative</h5>
                            <a class="nav-link p-0 text-muted" href="https://maps.app.goo.gl/rL8gti51c21TWqQh9">Dusun Salam Desa Kedawung Kecamatan Nglegok Kabupaten Blitar</a>
                            {{-- <p>Desa Kedawung Kecamatan Nglegok Kabupaten Blitar</p> --}}
                        </div>
                    </div>
                </footer>

                <section >
                <div class="container py-4">
                    <footer class="py-3 my-4">
                      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                      </ul>
                      <p class="text-center text-body-secondary">©Aisyatulaili--2024</p>
                    </footer>
                  </div>
                </section>

            </div>
        </section>
    {{-- end Footer --}}

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- JQuery  --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    {{-- JQUERY --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script> --}}

    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>


    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                // navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                // navbar.classList.add("navbar-dark");
            }
        };
        // animasi AOS
        AOS.init();

        // Magnific
        $(document).ready(function(){
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio){
                        return item.src.replace(/\.\w+$/, function(m){
                            return'@2x' + m;
                        });
                    }
                }
            });
        });

        //  summernote
        $(document).ready(function() {
          $('#summernote').summernote({
            height: 200,
          });
        });

        
    </script>
    
<script>
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function() {
            document.querySelector('input[name="umkm"]').value = this.textContent.trim();
        });
    });
    </script>
    


</body>

</html>