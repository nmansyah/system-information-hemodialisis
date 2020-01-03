@extends('layouts.guestUser')

@section('title', 'Home')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="box-grid">
    <div class="atas">
        <table width="100%" style="">
        <tr>
            <td><i class="fa fa-hospital-o"></i>RSU PKU Muh Bantul </td>
            <td><i class="fa fa-envelope-o"></i>Email : pkubantul@gmail.com</td>
        </tr>
        <br>
        <tr>
            <td><i class="fa fa-hospital-o"></i>Unit Hemodialisis</td>
            <td><i class="fa fa-book"></i>Kontak : 08542526727</td>
        </tr>
        <br>
        <tr>
            <td><i class="fa fa-map-marker"></i>Jl. Jend. Sudirman 124 Bantul Yogyakarta 55771</td>
            <td><i class="fa fa-clock-o"></i>Waktu Beroprasi Mulai Jam 05.00 - 20.30 (3 Sesi)</td>
        </tr>
        </table>
    </div>
  </div>

  <div class="box-grid">
    <div>
        <h2>VISI</h2>
        <p>Terwujudnya rumah sakit islami yang mempunyai keunggulan kompetitif global, dan menjadi kebanggaan umat</p>
    </div>
    <div>
        <h2>MISI</h2>
        <p>Berdakwah melalui pelayanan kesehatan yang berkualitas dengan mengutamakan peningkatan kepuasan pelanggan serta peduli pada kaum dhu’afa. Motto Layananku Ibadahku</p>
    </div>
    <div>
        <h2>Hemodialisi</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae voluptas beatae soluta excepturi. Corporis minima quas officiis. Nobis vero rerum dolor eius, est perspiciatis inventore reprehenderit necessitatibus dolorem, provident deleniti.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat recusandae libero ut, asperiores sunt vitae, unde consectetur eaque fuga deserunt repudiandae, quis neque nam aspernatur sed perspiciatis! Autem, ut cumque.</p>
    </div>
  </div>

@endsection