@extends('layouts.home')

@section('content')

@php
    $page = 'destination';
@endphp

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
           <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Tour List <i class="fa fa-chevron-right"></i></span></p>
           <h1 class="mb-0 bread">Tours List</h1>
       </div>
   </div>
  </div>
  </section>
  
  <section class="ftco-section ftco-no-pb">
     <div class="container">
        <div class="row">
         <div class="col-md-12">
            <div class="search-wrap-1 ftco-animate">
               <form action="#" class="search-property-1">
                  <div class="row no-gutters">
                     <div class="col-lg d-flex">
                        <div class="form-group p-4 border-0">
                           <label for="#">Destination</label>
                           <div class="form-field">
                             <div class="icon"><span class="fa fa-search"></span></div>
                             <input type="text" class="form-control" placeholder="Search place">
                         </div>
                     </div>
                 </div>
                 <div class="col-lg d-flex">
                    <div class="form-group p-4">
                       <label for="#">Check-in date</label>
                       <div class="form-field">
                         <div class="icon"><span class="fa fa-calendar"></span></div>
                         <input type="text" class="form-control checkin_date" placeholder="Check In Date">
                     </div>
                 </div>
             </div>
             <div class="col-lg d-flex">
                <div class="form-group p-4">
                   <label for="#">Check-out date</label>
                   <div class="form-field">
                     <div class="icon"><span class="fa fa-calendar"></span></div>
                     <input type="text" class="form-control checkout_date" placeholder="Check Out Date">
                 </div>
             </div>
         </div>
         <div class="col-lg d-flex">
            <div class="form-group p-4">
               <label for="#">Price Limit</label>
               <div class="form-field">
                 <div class="select-wrap">
                  <div class="icon"><span class="fa fa-chevron-down"></span></div>
                  <select name="" id="" class="form-control">
                    <option value="">$5,000</option>
                    <option value="">$10,000</option>
                    <option value="">$50,000</option>
                    <option value="">$100,000</option>
                    <option value="">$200,000</option>
                    <option value="">$300,000</option>
                    <option value="">$400,000</option>
                    <option value="">$500,000</option>
                    <option value="">$600,000</option>
                    <option value="">$700,000</option>
                    <option value="">$800,000</option>
                    <option value="">$900,000</option>
                    <option value="">$1,000,000</option>
                    <option value="">$2,000,000</option>
                </select>
            </div>
        </div>
    </div>
  </div>
  <div class="col-lg d-flex">
    <div class="form-group d-flex w-100 border-0">
       <div class="form-field w-100 align-items-center d-flex">
          <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
      </div>
  </div>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </section>
  
  <section class="ftco-section">
     <div class="container">
      <div class="row">
        @foreach ($datas as $item)
        
        <div class="col-md-4 ftco-animate">
            <a href="">
            <div class="project-wrap">
               <div class="img" style="background-image: url('{{ asset($item->foto) }}');">
                  <span class="price">Rp. {{ number_format($item->harga,0,",",".") }}/person</span>
               </div>
              <div class="text p-4">
                  <span class="days">{{ $item->kategori->nama_kategori }}</span>
                  <h3>{{ ucwords($item->nama) }}</h3>
                  <p class="location"><span class="fa fa-map-marker"></span> {{ $item->alamat }}</p>
                  
             </div>
         </div>
        </a>
     </div>
    
        @endforeach
         
     

  </div>
  </div>
  </section>
  
  
  
  <section class="ftco-intro ftco-section ftco-no-pt">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-12 text-center">
            <div class="img"  style="background-image: url(images/bg_2.jpg);">
               <div class="overlay"></div>
               <h2>We Are Pacific A Travel Agency</h2>
               <p>We can manage your dream building A small river named Duden flows by their place</p>
               <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
           </div>
       </div>
   </div>
  </div>
  </section>
  
  <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md pt-5">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">About</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
              <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
      </div>
  </div>
  <div class="col-md pt-5 border-left">
      <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
        <h2 class="ftco-heading-2">Infromation</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
          <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
          <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
          <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
          <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
          <li><a href="#" class="py-2 d-block">Call Us</a></li>
      </ul>
  </div>
  </div>
  <div class="col-md pt-5 border-left">
     <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2">Experience</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Adventure</a></li>
          <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
          <li><a href="#" class="py-2 d-block">Beach</a></li>
          <li><a href="#" class="py-2 d-block">Nature</a></li>
          <li><a href="#" class="py-2 d-block">Camping</a></li>
          <li><a href="#" class="py-2 d-block">Party</a></li>
      </ul>
  </div>
  </div>
  <div class="col-md pt-5 border-left">
      <div class="ftco-footer-widget pt-md-5 mb-4">
         <h2 class="ftco-heading-2">Have a Questions?</h2>
         <div class="block-23 mb-3">
           <ul>
             <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
             <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
             <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
         </ul>
     </div>
  </div>
  </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
  
      <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
  </div>
  </footer>
    
@endsection