@extends('layouts.app')

@section('content')
<style>
    .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
    position: absolute; /* Menjadikan posisi absolut */
    right: 0; /* Menempatkannya di samping kiri halaman */
    top: 0; /* Menempatkannya di bagian atas halaman */
    height: 100vh; /* Menyesuaikan tinggi sesuai tinggi viewport */
}

/* Style for label */
label {
    display: block; /* Membuat label berada di baris yang berbeda */
    margin-bottom: 5px; /* Jarak antara label dan input */
}

/* Style for input */
input {
    width: 100%; /* Membuat input memenuhi lebar parentnya */
    padding: 8px; /* Padding pada input */
    border-radius: 5px; /* Border radius */
    border: 1px solid #ccc; /* Border style */
    box-sizing: border-box; /* Memastikan padding dan border dihitung dalam lebar */
}

/* Optional: Style when input is focused */
input:focus {
    border-color: #007bff; /* Contoh perubahan warna saat input difokuskan */
    outline: none; /* Menghilangkan outline bawaan pada focus */
}

</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 mt-5"> <!-- Menambahkan kelas position-relative -->
     <h3 class="fw-bold">
        Selamat Datang Admin ! <br>
        Masuk Akun
     </h3>
     <p>Masuk menggunakan akun yang telah terdaftar</p>
     <hr class="me-5">
     <form action="" class="row">
    <div class="col-12 mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" style="border-radius: 5px;">
    </div>
    <div class="col-12 mb-3">
        <label for="password">Password</label>
        <input type="password" id="password" style="border-radius: 5px; margin-right:100px;">
    </div>
</form>
      </div>
    </div>
  </div>
</section>
<!-- End Hero Section -->   

  <!-- <div id="preloader"></div> -->

@endsection
