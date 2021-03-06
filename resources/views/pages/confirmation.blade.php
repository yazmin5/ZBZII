@extends('layouts.template')

@section('title')
<title>Zeen by Zi | Confirmation </title>
@endsection


@section('breadcrumb')
    <!-- breadcrumb start-->
    <!-- MASI HARDCODE :( -->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Keranjang Belanja / Checkout / Confirmation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end-->
@endsection

@section('content')
<section class="confirmation_part section_padding">
    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-lx-4">
              <div class="single_confirmation_details">
                  <h4>order info</h4>
                  <ul>
                    <li><p>Nama Barang</p>
                        @foreach(Cart::content() as $item)
                            <span>: {{ $item->name }} <span>x {{ $item ->qty}} </span> </span> 
                            <br>    
                        @endforeach
                    </li>
                    <li>
                        <p>Total</p><span>: @currency($sub)</span>
                    </li>
                    <li>
                        <p>Metode Pembayaran</p><span>: Transfer</span>
                    </li>
                    <li>
                        <p>Rekening Pembayaran</p><span>: BCA 2312451345 <br> ( Salsabilah )</span>
                    </li>
                  </ul>
                </div>
            </div>
            <div class="col-lg-6 col-lx-4">
                <div class="single_confirmation_details">
                    <h4>shipping Address</h4>
                    <ul>
                        <li>
                            <p>Alamat Lengkap</p><span>: {{ $form->alamat }} </span>
                        </li>
                        <li>
                            <p>Kota</p><span>: {{ $form->kota }}</span>
                        </li>
                        <li>
                            <p>Provinsi</p><span>: {{ $form->provinsi }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="confirmation_tittle">
                <span>Terimakasih. Pesanan anda telah diterima. Tolong lakukan pembayaran sebelum pukul 16.00 WIB.</span>
                <br>
                <span>Tolong Screenchot halaman ini kemudian klik tombol dibawah untuk mengirim hasil screenshot sebagai konfirmasi pembelian.</span> 
                </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4 justify-content-center float-right">
            <button class="btn_1">
                <a href="https://api.whatsapp.com/send?phone=6287843337726&source=&data=">Konfirmasi Pembelian</a>
            </button>
            </div>
      </div>
    </div>
  </section>
@endsection