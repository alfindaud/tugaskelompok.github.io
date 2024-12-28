<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tugas Kelompok 1</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="assets/img/hero-img.png" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="#hero" class="logo d-flex align-items-center me-auto me-xl-0">
    
        <h1 class="sitename">Kelompok 1</h1>
        <span>.</span>
      </a>

      {{-- navbar --}}
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#bab1">Bab I</a></li>
          <li><a href="#bab2">Bab II</a></li>
          
          <li class="dropdown"><a href="#"><span>Bab III</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#bab3">Bab 3</a></li>
              <li><a href="#gallery">Tampilan Aplikasi</a></li>
              <li><a href="#database">Analisis dan Perancangan</a></li>
            </ul>
          </li>
          <li><a href="#bab4">Bab IV</a></li>
          <li><a href="#ucapan">Penutup</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav> 
      {{-- navbar end --}}

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Kelompok 1<br>Interaksi Manusia Dan Komputer</h1>
            <p data-aos="fade-up" data-aos-delay="100">Perkenalkan, kami dari Kelompok 1, Kelas TI-5A, berasal dari Kampus ITB STIKOM Ambon. Pada kesempatan ini, kami akan mempresentasikan materi yang telah kami siapkan. Namun sebelum itu, izinkan kami untuk memperkenalkan anggota kelompok kami terlebih dahulu.</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#about" class="btn-get-started">Tentang Kami</a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Team Section -->
    <section id="about" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p><span>Our</span> <span class="description-title">Professional Team<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <!-- Baris Elemen Tim -->
        <div class="row justify-content-center gy-4">
          <!-- Anggota Tim 1 -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ketua Kelompok (Developer)</h4>
                <span class="pt-3">Biodata Lengkap:</span>
                <p style="margin-bottom: 2px;">Nama Lengkap : Alfin Daud</p>
                <p style="margin-bottom: 2px;">Nim : 220101002</p>
                <p style="margin-bottom: 2px;">TTL : Bandung, 13 Januari 2000</p>
                <p style="margin-bottom: 2px;">Hobi : Badminton 🏸</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!-- Anggota Tim 2 -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/2.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Anggota Kelompok</h4>
                <span class="pt-3">Biodata Lengkap:</span>
                <p style="margin-bottom: 2px;">Nama Lengkap : Rina La Ramid</p>
                <p style="margin-bottom: 2px;">Nim : 220101017</p>
                <p style="margin-bottom: 2px;">TTL : Aira, 06 Mei 2004</p>
                <p style="margin-bottom: 2px;">Hobi : Main Game 🎮</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          {{-- Angggota Tim 3 --}}
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/4.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Angggota Kelompok</h4>
                <span class="pt-3">Biodata Lengkap:</span>
                <p style="margin-bottom: 2px;">Nama Lengkap : Tia Apriliani</p>
                <p style="margin-bottom: 2px;">Nim : 220101031</p>
                <p style="margin-bottom: 2px;">TTL : Waekasar, 17 April 2004</p>
                <p style="margin-bottom: 2px;">Hobi : Jalan-jalan ✈️</p>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/3.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Anggota Kelompok</h4>
                <span class="pt-3">Biodata Lengkap:</span>
                <p style="margin-bottom: 2px;">Nama Lengkap : Rendi Wilson Lesnussa</p>
                <p style="margin-bottom: 2px;">Nim : 220101016</p>
                <p style="margin-bottom: 2px;">TTL : Seram, 27 September 2002</p>
                <p style="margin-bottom: 2px;">Hobi : Main Game 🎮</p>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div><!-- End Row -->
      </div><!-- End Container -->
    </section>
<!-- End Team Member -->

    <!-- /Chefs Section -->

    <!-- Bab 1 -->
    <section id="bab1" class="why-us section light-background mb-5">

      <div class="container">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2 class="fs-1">BAB I</h2>
          <p><span class="description-title pt-1">Pendahuluan<br></span></p>
        </div><!-- End Section Title -->

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Latar Belakang</h3>
              <p>
                Di era digital saat ini, perpustakaan sebagai pusat pengetahuan dan informasi menghadapi tantangan yang signifikan dalam mengelola dan memberikan layanan kepada penggunanya. Perpustakaan Sipus University menghadapi tantangan dalam mengelola koleksi buku dan layanan peminjaman yang masih menggunakan sistem manual Sistem perpustakaan konvensional yang masih menggunakan pencatatan manual menghadapi berbagai kendala. 
              </p><br>
              
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-briefcase"></i>
                  <h4>Studi Kasus</h4>
                  <p>Pengembangan Sistem Informasi Manajemen Perpustakaan Digital Berbasis Web di Perpustakaan Sipus University</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-balloon-heart-fill"></i>
                  <h4>Tujuan</h4>
                  <p>Tujuan dari pengembangan Sistem Informasi Perpustakaan Digital ini ada 5 yaitu:</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Manfaat</h4>
                    <ul>
                      <li>Menunjukkan nilai tambah sistem bagi semua pengguna</li>
                      <li> Memberikan gambaran keuntungan implementasi sistem</li>
                      <li>Menjustifikasi investasi waktu dan sumber daya</li>
                    </ul>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Bab 1 -->


    <!-- Bab 2 Section -->
    <section id="bab2" class="testimonials section mb-5">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="fs-1">BAB II</h2>
        <p>Landasan <span class="description-title">Teori</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 30000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>Sistem Informasi</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Sistem informasi adalah suatu sistem dalam organisasi yang mempertemukan kebutuhan pengolahan transaksi harian, mendukung operasi, bersifat manajerial dan kegiatan strategi dari suatu organisasi dan menyediakan pihak luar tertentu dengan laporan-laporan yang diperlukan.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h3>Komponen sistem informasi:</h3>
                    <ul>
                      <li>Hardware</li>
                      <li>Software</li>
                      <li>Data</li>
                      <li>Prosedure</li>
                      <li>Manusia</li>
                      <li>Jaringan</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>Perpustakaan Digital</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Perpustakaan digital adalah perpustakaan yang menyimpan dan mengelola koleksi dalam bentuk digital serta dapat diakses melalui jaringan komputer. Perpustakaan digital memungkinkan akses terhadap sumber daya informasi secara lebih efisien dan efektif.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h3>Karakteristik Perpustakaan Digital:</h3>
                    <ul>
                      <li>Menggunakan teknologi digital</li>
                      <li>Memiliki koleksi digital</li>
                      <li>Dapat diakses secara online</li>
                      <li>Memiliki sistem temu kembali informasi</li>
                      <li>Menyediakan layanan berbasis web</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>Basis Data</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Basis data adalah kumpulan data yang saling berhubungan dan disimpan secara bersama pada suatu media, tanpa mengatasi satu sama lain atau tidak perlu suatu kerangkapan data, dan disimpan sedemikian rupa sehingga mudah digunakan oleh satu atau lebih program aplikasi secara optimal.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h3>Komponen Basis Data:</h3>
                    <ul>
                      <li>Data</li>
                      <li>Software DBMS</li>
                      <li>Hardware</li>
                      <li>User/Pengguna</li>
                      <li>Prosedur/Aturan</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>PHP (Hypertext Preprocessor)</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>PHP adalah bahasa pemrograman script server-side yang dirancang untuk pengembangan web. PHP dikembangkan pada tahun 1995 oleh Rasmus Lerdorf dan sekarang dikelola oleh The PHP Group.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h3>Karakteristik PHP:</h3>
                    <ul>
                      <li>Server-Side Scripting</li>
                      <li>Command Line Scripting</li>
                      <li>Open Source</li>
                      <li>Cross Platform</li>
                      <li>Mendukung Berbagai Database</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>MySQL</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>MySQL adalah sistem manajemen database relasional (RDBMS) yang bersifat open source dan multithread. MySQL dikembangkan, didistribusikan, dan didukung oleh Oracle Corporation.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h3>Fitur-fitur MySQL:</h3>
                    <ul>
                      <li>Multiuser</li>
                      <li>Multiple Storage Engines</li>
                      <li>Keamanan yang Terjamin</li>
                      <li>Kapasitas yang Besar</li>
                      <li>Kecepatan</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>Framework CodeIgniter</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>CodeIgniter adalah framework PHP yang kuat dengan footprint yang sangat kecil, dibangun untuk pengembang yang membutuhkan toolkit sederhana dan elegan untuk membuat aplikasi web dengan fitur lengkap.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h3>Fitur CodeIgniter:</h3>
                    <ul>
                      <li>Model-View-Controller(MVC)</li>
                      <li>Form and Data Validation</li>
                      <li>Security Features</li>
                      <li>Session Management</li>
                      <li>Database Support</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>UML (Unified Modeling Language)</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>UML adalah bahasa pemodelan visual yang digunakan untuk menspesifikasikan, memvisualisasikan, membangun, dan mendokumentasikan sistem perangkat lunak.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h3>Jenis-jenis Diagram UML:</h3>
                    <ul>
                      <li>Use Case Diagram</li>
                      <li>Class Diagram</li>
                      <li>Activity Diagram</li>
                      <li>Sequence Diagram</li>
                      <li>State Diagram</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>Metode Waterfall</h3>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Metode Waterfall adalah model pengembangan perangkat lunak yang sistematis dan berurutan (sekuensial) yang dimulai dari spesifikasi kebutuhan pengguna dan berlanjut melalui tahapan-tahapan perencanaan, pemodelan, konstruksi, serta penyerahan sistem ke pengguna.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h3>Tahapan Metode Waterfall:</h3>
                    <ul>
                      <li>Requirements Analysis</li>
                      <li>System Design</li>
                      <li>Implementation</li>
                      <li>Testing</li>
                      <li>Deployment</li>
                      <li>Maintenance</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Bab 2 end Section -->

    <!-- Bab 3 Section -->
    <section id="bab3" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="fs-1">Bab III<br></h2>
        <p><span>Analisis Dan</span> <span class="description-title">Perancangan Data</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Analisis Sistem</h3>
            <h4>Analisis Sistem Bejalan</h4>
            <p>Sistem perpustakaan yang berjalan saat ini masih menggunakan pencatatan manual <br> dengan buku besar untuk:</p>
            <ul>
              <li>Pendaftaran anggota perpustakaan</li>
              <li>Pencatatan peminjaman dan pengembalian buku</li>
              <li>Pencarian katalog buku</li>
              <li>Pembuatan laporan bulanan</li>
            </ul>
            <h4>Analisis Kebutuhan Sistem</h4>
            <ol type="A">
              <li>Kebutuhan Fungsional</li>
              <ul>
                <li>Sistem dapat melakukan pendaftaran anggota baru</li>
                <li>Sistem dapat mengelola data buku</li>
                <li>Sistem dapat mengelola peminjaman dan pengembalian</li>
                <li>Sistem dapat membuat laporan</li>
                <li>Sistem dapat melakukan pencarian buku</li>
                <li>Sistem dapat mengirim notifikasi</li>
              </ul>
              <li>Kebutuhan Non-Fungsional</li>
              <ul>
                <li>Sistem dapat diakses 24 jam</li>
                <li>Interface yang user-friendly</li>
                <li>Keamanan data terjamin</li>
                <li>Waktu respon maksimal 3 detik</li>
                <li>Mendukung multi-user</li>
              </ul>
            </ol>
            <br>
            <h3>Perancangan Sistem</h3>
                <h3>Use Case Diagram</h3>
                <br>
                <p>graph TD
                  <ul style="list-style: none">
                    <li>Admin[Admin] --> ManageBooks[Manage Books]</li>
                    <li>Admin --> ManageMembers[Manage Members]</li>
                    <li>Admin --> GenerateReports[Generate Reports]</li>
                    <li>Member[Member] --> SearchBooks[Search Books]</li>
                    <li>Member --> BorrowBooks[Borrow Books]</li>
                    <li>Member --> ReturnBooks[Return Books]</li>
                    <li>Member --> ViewHistory[View History]</li>
                  </ul>
                </p>
                <br>
              <h3>Activity Diagram</h3>
              <h4>Proses Peminjaman Buku</h4>
              
              <p>graph TD</p>
              <ul style="list-style: none">
                <li>[Start] --> [Login] --> [Search Book] --> [Select Book]</li>
                <li>--> [Check Availability] --> {Book Available?}</li>
                <li>-->|Yes| [Create Loan]</li>
                <li>-->|No| [Show Message]</li>
                <li>--> [Update Stock]</li>
                <li>--> [End]</li>
              </ul>
              <br>
              <h3>Entity Relationship Diagram</h3>
              <p>erDiagram</p>
              <ul style="list-style: none">
                <li>MEMBER ||--o{ LOAN : makes</li>
                <li>BOOK ||--o{ LOAN : has</li>
                <li>MEMBER { <ul>
                  <li>int member_id</li>
                  <li>string name</li>
                  <li>string email</li>
                  <li>string phone</li>
                  </ul>
                </li>
                <li>}</li>
                <li>BOOK { <ul>
                  <li>int book_id</li>
                  <li>string title</li>
                  <li>string author</li>
                  <li>int stock</li>
                  <li>}</li>
                  </ul>
                </li>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">            
                <li>LOAN { <ul>
                  <li>int loan_id</li>
                  <li>date borrow_date</li>
                  <li>date return_date</li>
                  <li>string status</li>
                  <li>}</li>
                  </ul>
                </li>
              </ul>
              <br>
              <h3>Perancangan Interface</h3>
              <h4>Halaman Login</h4>
              <p>Desain halaman login terdiri dari:</p>
              <ul>
                <li>Logo sistem di bagian atas</li>
                <li>Form login dengan field: 
                  <ul>
                    <li>1. Username/Email</li>
                    <li>2. Password</li>
                  </ul>
                </li>
                <li>Tombol Login</li>
                <li>Link "Forgot Password"</li>
                <li>Link "Register New Account"</li>
              </ul>
              <br>
              <h4>Halaman Dashboard Admin</h4>
              <p>Dashboard admin memiliki komponen:</p>
              <p>Sidebar menu dengan opsi:</p>
              <ul>
                <li>1. Books Management</li>
                <li>2. Member Management</li>
                <li>3. Loan Management</li>
                <li>4. Reports</li>
              </ul>
              <p>Header dengan: 
                <ul>
                  <li>1. Search bar</li>
                  <li>2. Admin profile</li>
                </ul>
            </p>
              <p>Main content area menampilkan: 
                <ul>
                  <li>1. Total books statistics</li>
                  <li>2. Active loans</li>
                  <li>3. New members</li>
                  <li>4. Recent activities</li>
                </ul>
            </p>
            <br>
            <h4>Katalog Buku</h4>
            <p>Halaman katalog buku menampilkan:</p>
            <p>Search bar dengan filter: 
              <ul>
                <li>1. Kategori</li>
                <li>2. Tahun terbit</li>
              </ul>
            </p>
            <p>Grid view buku dengan informasi:
              <ul>
                <li>1. Cover buku</li>
                <li>2. Judul</li>
                <li>3. Pengarang</li>
                <li>4. Detail Buku</li>
                <li>5. Pagination di bagian bawah</li>
              </ul>
            </p>
            </div>
          </div>
        </div>

      
      </div>

    </section><!-- /Bab Section -->
    

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section mt-5">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p><span>Tampilan Aplikasi</span> <span class="description-title">Sipus Perpustakaan</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 3,
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/4.png">
                <img src="assets/img/gallery/4.png" class="img-fluid" alt="Image 4">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/1.png">
                <img src="assets/img/gallery/1.png" class="img-fluid" alt="Image 1">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/5.jpg">
                <img src="assets/img/gallery/5.jpg" class="img-fluid" alt="Image 5">
              </a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        

      </div>

    </section><!-- /Gallery Section -->

    {{-- Struktur Database --}}
    <section id="database" class="gallery section light-background mt-5">
      <div class="container section-title" data-aos="fade-up">
        <p><span>Implementasi</span> <span class="description-title">Database</span></p>
      </div><!-- End Section Title -->
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100"> 
            <h3>Struktur Tabel</h3>
            <ol type="A">
              <li>Tabel Members
                <ul type="none">
                  <li>CREATE TABLE members (
                    <ul type="none">
                      <li>member_id INT PRIMARY KEY AUTO_INCREMENT,</li>
                      <li>name VARCHAR(100) NOT NULL,</li>
                      <li>email VARCHAR(100) UNIQUE NOT NULL,</li>
                      <li>password VARCHAR(255) NOT NULL,</li>
                      <li>phone VARCHAR(15),</li>
                      <li>status ENUM('active', 'inactive') DEFAULT 'active',</li>
                      <li>created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP</li>
                      
                    </ul>
                    <li>);</li> <br>
                  </li>
                </ul>
              </li>
                <li>Tabel Books
                  <ul type="none">
                    <li>CREATE TABLE books (
                      <ul type="none">
                        <li>book_id INT PRIMARY KEY AUTO_INCREMENT,</li>
                        <li>title VARCHAR(200) NOT NULL,</li>
                        <li>author VARCHAR(100) NOT NULL,</li>
                        <li>isbn VARCHAR(13) UNIQUE,</li>
                        <li>category VARCHAR(50),</li>
                        <li>stock INT DEFAULT 0,</li>
                        <li>created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP</li>
                        
                      </ul>
                      <li>);</li> <br>
                    </li>
                  </ul>
                </li>
              </li>
              <li>Tabel Loans
                <ul type="none">
                  <li>CREATE TABLE loans (
                    <ul type="none">
                      <li>loan_id INT PRIMARY KEY AUTO_INCREMENT,</li>
                      <li>member_id INT,</li>
                      <li>book_id INT,</li>
                      <li>borrow_date DATE NOT NULL,</li>
                      <li>due_date DATE NOT NULL,</li>
                      <li>return_date DATE,</li>
                      <li>status ENUM('borrowed', 'returned', 'overdue') DEFAULT 'borrowed',</li>
                      <li>FOREIGN KEY (member_id) REFERENCES members(member_id),</li>
                      <li>FOREIGN KEY (book_id) REFERENCES books(book_id)</li>
                    </ul>
                    <li>);</li> <br>
                  </li>
                </ul>
              </li>
              </li>
            </ol>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250"> 
            <h3>Spesifikasi Hardware dan Software</h3>
            <ol type="A">
              <li>Spesifikasi Hardware
                <ul>
                  <li>Processor: Intel Core i5 </li>
                  <li>RAM: Minimal 8GB</li>
                  <li>Storage: 256GB SSD</li>
                  <li>Network: Gigabit Ethernet</li>
                </ul>
              </li>
              <li>Spesifikasi Software
                <ul>
                  <li>Sistem Operasi: Windows 10/11 atau Linux</li>
                  <li>Web Server: Apache 2.4</li>
                  <li>Database: MySQL 8.0</li>
                  <li>PHP Version: 8.2 atau lebih tinggi</li>
                  <li>Browser: Chrome, Firefox, Safari versi terbaru</li>
                </ul>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section id="bab4" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="fs-1">Bab IV<br></h2>
        <p><span class="description-title">Penutup</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="100">
            <h3>Kesimpulan</h3>
            <p>Pengembangan Sistem Informasi Manajemen Perpustakaan Digital berbasis web merupakan solusi yang sangat dibutuhkan untuk mengatasi permasalahan yang dihadapi oleh perpustakaan XYZ University. Sistem manual yang selama ini digunakan memiliki banyak kekurangan, seperti tidak efisien, sulit diakses, dan rentan terhadap kehilangan data. Dengan sistem digital ini, berbagai proses operasional perpustakaan, seperti pendaftaran anggota, pencatatan peminjaman dan pengembalian buku, serta pembuatan laporan, dapat diotomatisasi dan dilakukan dengan lebih efisien.</p>
            <p>Sistem ini juga menawarkan manfaat signifikan, seperti kemudahan akses informasi, keamanan data, serta fitur pencarian dan pelaporan yang lebih baik. Teknologi yang digunakan, seperti PHP, MySQL, dan framework CodeIgniter, memungkinkan pengembangan sistem yang handal dan terintegrasi dengan database terstruktur. Selain itu, metode Waterfall yang diterapkan memastikan pengembangan sistem dilakukan secara terorganisir, mulai dari analisis kebutuhan hingga tahap implementasi dan pemeliharaan.</p>
            <br>
            <h3>Saran</h3>
              <p>Sistem Informasi Perpustakaan Digital yang telah dirancang memiliki potensi besar untuk meningkatkan efisiensi operasional dan kualitas layanan perpustakaan. Namun, agar sistem ini dapat berjalan optimal, diperlukan beberapa langkah pendukung. Salah satu hal yang perlu diperhatikan adalah keamanan data. Sistem ini harus memiliki mekanisme perlindungan yang kuat untuk mencegah risiko seperti kebocoran informasi atau serangan siber.</p>
          </div>
          <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <br><br>
              <p>Selain itu, penting untuk memberikan pelatihan kepada staf perpustakaan agar mereka memahami cara menggunakan sistem dengan baik. Pelatihan ini akan memastikan bahwa semua fitur sistem dapat dimanfaatkan secara maksimal oleh pengguna internal.</p>
              <p>Di samping itu, keberlanjutan pengembangan sistem perlu direncanakan dengan baik. Teknologi dan kebutuhan pengguna akan terus berkembang, sehingga diperlukan evaluasi berkala untuk menyesuaikan sistem dengan perubahan tersebut. Monitoring yang konsisten juga penting untuk memastikan bahwa sistem selalu dalam kondisi optimal. Terakhir, agar pengguna merasa nyaman, desain antarmuka harus terus disesuaikan dengan prinsip-prinsip user-friendly sehingga memberikan pengalaman penggunaan yang intuitif dan menyenangkan. Dengan perhatian terhadap aspek-aspek ini, sistem informasi yang dikembangkan dapat memberikan manfaat maksimal bagi perpustakaan dan penggunanya.</p>
              <br> <br>
              <h3>Daftar Pustaka</h3>
              <p>Pratama, A. R., & Santoso, H. B. (2019). "Pengembangan Sistem Informasi Perpustakaan Digital Berbasis Web: Studi Kasus di Perpustakaan Sipus University." Jurnal Sistem Informasi Indonesia, 4(2), 78-89.</p>
            </div>
          </div>
        </div>
      
      </div>
      

    </section>


    <!-- Contact Section -->
    <section id="ucapan" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1>Terima Kasih!!</h1>
            <h1>Apakah Ada <br>Pertanyaan ??</h1>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
      <br><br><br>

    </section><!-- /Hero Section -->

  </main>

  <footer id="footer" class="footer dark-background">


    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dibuat Dengan Cinta Oleh :</strong> <span>Alfin Habsa Balubun ❤️</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://instagram.com/alfin_daud">Alfin Habsa Balubun </a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>