<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PENGADUAN JARINGAN TIK | KOMINFO
  </title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('img/logo.png')}}">
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Montserrat', sans-serif">

<nav id ="welcome" class="flex items-center justify-between flex-wrap bg-blue-401 p-10 px-18">
    <div class="flex items-center flex-shrink-0 text-black mr-6">
      <img src="{{ asset('img/logo.png')}}" alt=""
        class="transform transition hover:scale-125 duration-300 ease-in-out" />
      <span class="font-bold tracking-wider text-xl">
        &nbsp PENGADUAN JARINGAN TIK KOMINFO
        <h5>&nbsp HUMBANG HASUNDUTAN</h5></span>
    </div>
    <div class="block lg:hidden">
      <button
        class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-center">
      <div class="text-md lg:flex-grow">
        <a href="#welcome" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-12">
          Home
        </a>
        <a href="#prosespengaduan" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-6">
          Proses Pengaduan
        </a>
      </div>
      <div>
        <button
          class="text-black font-normal rounded-md py-3 border-black px-4 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Masuk</a>
        </button>
        <button
          class="text-black font-medium rounded-md py-3 px-6 border-2 border-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('register')}}">Daftar</a>
        </button>
      </div>
    </div>
  </nav>

  <!-- Header -->

  <!--Hero-->
  <div class="pt-1 px-16 bg-blue-400">    <!--pt adalah jarak-->
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left text-white">
        <h1 class="my-4 text-4xl font-bold leading-tight">
          Layanan Pengaduan Jaringan TIK
        </h1>
        <p class="leading-normal text-1xl mb-8">
          Sampaikan laporan masalah Anda di sini, kami tim DISKOMINFO akan memprosesnya
          dengan cepat.
        </p>
        <button
          class="mx-auto lg:mx-0 bg-blue-500 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Laporkan!</a>
        </button>
      </div>

      <!-- Gambar welcome-->
      <div class="w-full md:w-3/5 text-center">
        <img class="object-fill mx-36 transform transition hover:scale-105 duration-300 ease-in-out"
          src="{{ asset('img/network.svg')}}" />
      </div>
    </div>
  </div>

  <!-- Proses Pengaduan -->
  <div id="prosespengaduan" class="container my-20 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Tulis"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/tulis laporan.png')}}" />
          <header class="leading-tight p-2 md:p-4 text-center ">
            <h1 class="text-lg font-bold">1. Buat Laporan</h1>
            <p class="text-grey-darker text-sm py-4">
            Tuliskan keluhan anda disini.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Proses"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/verifikasi.png')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">2. Cek Laporan</h1>
            <p class="text-grey-darker text-sm py-4">
            Diskominfo akan melakukan pengecekan laporan.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Ditindak"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/tindak.png')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">3. Solusi Pengaduan</h1>
            <p class="text-grey-darker text-sm py-4">
            Diskominfo akan memberikan solusi dari masalah anda.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Selesai"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/finish.png')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">4. Selesai</h1>
            <p class="text-grey-darker text-sm py-4">
            Laporan pengaduan telah berhasil di proses.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center font-medium bg-gray-200 py-6">  <!-- py= panjang footer -->
  © 2021 Pengaduan jaringan TIK  | By KP-21-204B
  </footer>
  @include('sweetalert::alert')
</body>

</html>