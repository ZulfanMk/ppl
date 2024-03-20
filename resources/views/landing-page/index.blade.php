@extends('layouts.app')

@section('content')
<!-- CSS untuk Bootstrap -->

<style> 

.hero {
  width: 100%;
  min-height: 100vh;
  
}




@media (min-width: 1034px) {
  .hero:after {
    position: absolute;
    align-items: end;
    content: "";
    width: 40%;
    top: 0;
    bottom: 0;
    right: 0;
  }
}

.hero:before {
  position: absolute;
  content: "";
  background:#fff;
  inset: 0;
}

@media (max-width: 1034px) {
  .hero:before {
    background: rgba(27, 47, 69, 0.7)
  }
}

.hero .container {
  z-index: 1;
}

@media (min-width: 1365px) {
  .hero {
    background-attachment: fixed;
  }
}

.hero h2 {
  margin:0;
  font-size: 35px;
  font-weight: 700;
  line-height: 1.2;
  color: #000;
  font-family: var(--font-secondary);
}

.hero blockquote {
  color: #000;
  padding-left: 20px;
  font-size: 15px;
  font-family: var(--font-default);
  border-left: 2px solid var(--color-primary);
  margin: 40px 0;
}

.hero .btn-get-started {
  font-family: var(--font-secondary);
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 25px;
  border-radius: 45px;
  transition: 0.5s;
  color: #000;
  background: var(--color-primary);
}

.hero .btn-get-started:hover {
  background: rgba(86, 184, 230, 0.8);
}


@media (max-width: 640px) {
  .hero h2 {
    font-size: 36px;
    line-height: 1;
  }

  .hero .btn-get-started{
    font-size: 13px;
  }
}


</style>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="d-flex align-items-center">Rekap Kopi</h1>
        </a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="" class="active">Beranda</a></li>
                <li><a href="">Fitur-Fitur</a></li>
                <li><a href="">Tentang Kami</a></li>
                <li><a id="masuk" href= "#" data-toggle="modal" data-target="#modalMasuk">MASUK</a></li>
                <li><a id="daftar" href="#" data-toggle="modal" data-target="#myModal"> DAFTAR </a></li>
            </ul>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<!-- Modal Masuk -->
<div class="modal" id="modalMasuk">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 450px; height: 560px; background-color: #ECB159;">
            <!-- Modal Header -->
            <div class="modal-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pengguna-tab" data-toggle="tab" href="#pengguna" role="tab" aria-controls="pengguna" aria-selected="true">Pengguna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="karyawan-tab" data-toggle="tab" href="#karyawan" role="tab" aria-controls="karyawan" aria-selected="false">Karyawan</a>
                        </li>
                    </ul>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="mt-3">
                    <div class="tab-content" id="myTabContent">
                        <!-- Form Pengguna -->
                        <div class="tab-pane fade show active" id="pengguna" role="tabpanel" aria-labelledby="pengguna-tab">
                            <form action="/login_pengguna" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="username_pengguna">Nama Pengguna Pengguna:</label>
                                    <input type="text" class="form-control" id="username_pengguna" name="username_pengguna">
                                </div>
                                <div class="form-group">
                                    <label for="email_pengguna">Email:</label>
                                    <input type="email" class="form-control" id="email_pengguna" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password_pengguna">Kata Sandi Pengguna:</label>
                                    <input type="password" class="form-control" id="password_pengguna" name="password_pengguna">
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary btn-block" style="background:#B67352;">MASUK</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Form Karyawan -->
                        <div class="tab-pane fade" id="karyawan" role="tabpanel" aria-labelledby="karyawan-tab">
                            <form action="/login_karyawan" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="username_karyawan">Nama Pengguna Karyawan:</label>
                                    <input type="text" class="form-control" id="username_karyawan" name="username_karyawan">
                                </div>
                                <div class="form-group">
                                    <label for="email_karyawan">Email:</label>
                                    <input type="email" class="form-control" id="email_karyawan" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password_karyawan">Kata Sandi Karyawan:</label>
                                    <input type="password" class="form-control" id="password_karyawan" name="password_karyawan">
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary btn-block" style="background:#B67352;">MASUK</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal DAFTAR-->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 450px; height: 560px; background-color: #ECB159;">
            <!-- Modal Header -->
            <div class="modal-header justify-content-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="true">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="employee-tab" data-toggle="tab" href="#employee" role="tab" aria-controls="employee" aria-selected="false">Karyawan</a>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="modal-body">
                        <div class="mt-3">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                                    <form action="/register" method="POST">
                                        @csrf
                                        <input type="hidden" id="role_admin" name="role" value="admin"> <!-- Hidden input field for role -->
                                        <div class="form-group">
                                            <label for="nama_admin">Nama Pengguna:</label>
                                            <input type="text" class="form-control" id="nama_admin" name="nama_admin">
                                        </div>
                                        <div class="form-group">
                                            <label for="email_admin">Email:</label>
                                            <input type="email" class="form-control" id="email_admin" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password_admin">Kata Sandi Baru:</label>
                                            <input type="password" class="form-control" id="password_admin" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_password_admin">Konfirmasi Kata Sandi Baru:</label>
                                            <input type="password" class="form-control" id="confirm_password_admin" name="confirm_password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block" style="background:#B67352;">DAFTAR</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="employee" role="tabpanel" aria-labelledby="employee-tab">
                                    <form action="/register" method="POST">
                                        @csrf
                                        <input type="hidden" id="role_employee" name="role" value="employee"> <!-- Hidden input field for role -->
                                        <div class="form-group">
                                            <label for="nama_employee">Nama Karyawan:</label>
                                            <input type="text" class="form-control" id="nama_employee" name="nama_employee">
                                        </div>
                                        <div class="form-group">
                                            <label for="email_employee">Email:</label>
                                            <input type="email" class="form-control" id="email_employee" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password_employee">Kata Sandi Baru:</label>
                                            <input type="password" class="form-control" id="password_employee" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_password_employee">Konfirmasi Kata Sandi Baru:</label>
                                            <input type="password" class="form-control" id="confirm_password_employee" name="confirm_password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block" style="background:#B67352;">DAFTAR</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- ======= section2 Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-between mt-5">
            <!-- kanan -->
            <div class="col-8 ">
                <h2 data-aos="fade-right">Selamat Datang di IzzaCoffe!</h2>
                <blockquote data-aos="fade-right" data-aos-delay="100">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum laboriosam voluptatem repudiandae odio, vel exercitationem officiis provident minima. </p>
                </blockquote>
                <div class="d-flex" data-aos="fade-right" data-aos-delay="200">
                    <a href="" class="btn-get-started">Tentang Kami</a>
                </div>
            </div>
            <div class="col-4">
                <img style="height:251px; width:257px; float:right" src="{{('/')}}assets/img/man.png" alt="">
            </div>
            <!-- kiri -->
        </div>
        <div class="row justify-content-between mt-3">
            <div class="col-4">
                <img style="height:251px; width:257px; align-item:end;" src="{{('/')}}assets/img/woman.png" alt="">  
            </div>

            <div class="col-8">
                <h2 data-aos="fade-left" style="text-align: right">Produksi Kopi</h2>
                <blockquote data-aos="fade-left" data-aos-delay="100">
                    <p style="text-align: right">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum laboriosam voluptatem repudiandae odio, vel exercitationem officiis provident minima. </p>
                </blockquote>
                <div class="d-flex justify-content-end" data-aos="fade-left" data-aos-delay="200">
                    <a style="text-align: right" href=" class="btn-get-started" >Fitur-Fitur</a>
                </div> 
            </div>
        </div>
    </div>
</section><!-- End Hero Section -->

<!-- <section id="section2" class="section2 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-6">
                <h2 data-aos="fade-right">Selamat Datang di IzzaCoffe!</h2>
                <blockquote data-aos="fade-right" data-aos-delay="100">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum laboriosam voluptatem repudiandae odio, vel exercitationem officiis provident minima. </p>
                </blockquote>
                <div class="d-flex" data-aos="fade-right" data-aos-delay="200">
                    <a href="" class="btn-get-started">Tentang Kami</a>
                </div>
            </div>

            <div class="col-6">
                <img style="height:50px; width:50px; align-item:end;" src="{{('/')}}assets/img/image.jpg" alt="">
            </div>
        </div>
    </div>
</section> -->


<main id="main">

</main>

<script>
    $(document).ready(function () {
        // Initialize Bootstrap tab functionality
        $('#myTab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    });
    $(document).ready(function () {
        $('#masuk').click(function(e){
            e.preventDefault();
            $('#modalMasuk').modal('show');
        });
    });
</script>

@endsection
