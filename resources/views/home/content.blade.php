@extends('theme.master') 
@section('content')
<style>
  .d-none {
    display: none;
  }
  .border:hover {
    cursor: pointer;
  } 
</style>

<!-- Hero Start -->
<div id="load-home" class="container-fluid py-5 mb-5" style="background: url(assets/img/{{$img_hero}}) top right no-repeat; background-size: cover;height: 650px;">
  <div class="container py-5"  data-bs-toggle="tooltip" data-bs-placement="top"
  data-bs-custom-class="custom-tooltip"
  data-bs-title="Gambar Hero">
    <div class="row justify-content-start">
      <div data-bs-toggle="modal" data-bs-target="#edit-hero-text" class="col-lg-8 text-center text-lg-start border border-a border-5" style="padding: 3px">

          <h5
            class="d-inline-block text-uppercase border-bottom border-5 fwarna2"
            style="
              border-color: rgba(256, 256, 256, 0.3) !important;
              color: {{$fontc2}};
            "
            data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-custom-class="custom-tooltip"
            data-bs-title="teks 1"
          >
            {{ $teks1 }}
          </h5>
          <h1 data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-custom-class="custom-tooltip"
          data-bs-title="teks 2" class="display-3 mb-md-4 fwarna1" style="color: {{$fontc1}};">
            {{ $teks2 }}
          </h1>


        <div class="pt-2">
          <h5 class="d-inline-block text-uppercase border-bottom border-5 fwarna2"
                        style="
            border-color: rgba(256, 256, 256, 0.3) !important;
            color: {{$fontc2}};
            font-size: 15px;
          ">
                        Pasien baru klik disini
                    </h5><br>
                    <a href="#load-appointment"
                            class="btn btn-secondary text-white rounded-pill py-md-3 px-md-5 mx-2">Isi Form</a>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->

{{-- form hero --}}
<form action="{{ route('save_hero') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="modal" id="edit-hero-text" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                  <h5 class="modal-title" id="exampleModalLabel">Edit H1</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="">Gambar Hero</label><br>
                <img class="mb-3" src="{{ asset('assets/img/'.$img_hero.'') }}" width="150" height="100"><span class="text-warning ml-3">Dimensions : 1920 x 1080</span>
                <input type="file" class="form-control" name="hero_img">
              </div>
              <div class="form-group">
                <label for="">Teks 1</label>
                <input value="{{ $teks1 }}" type="text" name="teks1" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Teks 2</label>
                <input type="text" name="teks2" value="{{ $teks2 }}" class="form-control">
            </div>
            </div>
            <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Edit/Save</button>
            </div>
        </div>
    </div>
  </div>
</form>
{{-- form hero end --}}

<!-- About Start -->


<div class="container-fluid py-5" id="load-about">
  
  <div class="container">
    <div class="row gx-5 border border-a border-5" data-bs-toggle="modal" data-bs-target="#edit-tentang-text">
      <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
        <div class="position-relative h-100">
          <img
          data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-custom-class="custom-tooltip"
          data-bs-title="Gambar Tentang"
            class="position-absolute w-100 h-100 rounded"
            src="{{ asset('assets') }}/img/{{$img_tentang}}"
            style="object-fit: cover"
          />
        </div>
      </div>
      <div class="col-lg-7">

        <div class="mb-4">
          <h5
            class="d-inline-block text-uppercase border-bottom border-5 fwarna2" style="color: {{$fontc2}}"
          >
            Tentang Kami
          </h5>
          <h1  data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-custom-class="custom-tooltip"
          data-bs-title="Teks 1" class="display-6 fwarna1" style="color: {{$fontc1}}">     
            {{ $teks_tentang1 }}
          </h1>
        </div>
        <p  data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        data-bs-title="Teks 2" class="fwarna3" style="color: {{$fontc3}}">
          {{ $teks_tentang2 }}
        </p>

        <div class="row g-3 pt-1">
          <div class="col-sm-6 col-12">

            <iframe 
            data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-custom-class="custom-tooltip"
            data-bs-title="maps"
              class="position-relative w-100 h-100"
              src="{{ $maps }}"
              frameborder="0"
              style="border: 0"
              allowfullscreen=""
              aria-hidden="false"
              tabindex="0"
            ></iframe>
            
          </div>
          <div class="col-sm-6 col-12">
            <h5 style="color: {{$fontc2}}" class="fwarna2 d-inline-block text-uppercase border-bottom border-5">
              Hubungi Kami
          </h5>
                <table class="table tbl-hub fwarna2" style="color:{{$fontc2}}">
                  <center>
                    <tr  data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="Waktu">
                      <th>
                        <i class="fa fa-clock"></i>
                      </th>
                      <th>{{ $waktu }}</th>
                    </tr>
                    <tr  data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="Alamat">
                      <th>
                        <i class="fa fa-hospital"></i>
                      </th>
                      <th>{{ $alamat }}</th>
                    </tr>
                    <tr data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="No HP">
                      <th>
                        <i class="fa fa-phone"></i>
                      </th>
                      <th>{{ $nohp }}</th>
                    </tr>
                    <tr data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="Email">
                      <th>
                        <i class="fa fa-envelope"></i>
                      </th>
                      <th>{{ $email }}</th>
                    </tr>
                    
                  </center>
                </table>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

{{-- form tentang --}}
<form action="{{ route('save_tentang') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="modal" id="edit-tentang-text" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Tentang Kami</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-6 col-sm-6">
                  <h1 class="display-6">Tentang Kami</h1>
                  <div class="form-group">

                    <img class="mb-3" src="{{ asset('assets/img/'.$img_tentang.'') }}" width="150" height="100"> <span class="text-warning ml-3">Dimensions : 800 x 500</span>
                    <input type="file" class="form-control" name="img_tentang">
                  </div>
                  <div class="form-group">
                    <label for="">Teks 1</label>
                    <input value="{{ $teks_tentang1 }}" type="text" name="teks_tentang1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Teks 2</label>
                    <textarea class="form-control" rows="5" name="teks_tentang2">{{ $teks_tentang2 }}</textarea>
                    
                </div>
                </div>
                <div class="col-6 col-sm-6">
                  <h1 class="display-6">Hubungi Kami</h1>
                  <div class="form-group">
                      <label for="">Waktu</label>
                      <input value="{{ $waktu }}" type="text" name="waktu" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Alamat</label>
                      <input value="{{ $alamat }}" type="text" name="alamat" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">No HP</label>
                      <input value="{{ $nohp }}" type="text" name="nohp" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Email</label>
                      <input value="{{ $email }}" type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Maps</label>
                      <input value="{{ $maps }}" type="text" class="form-control" name="maps">
                      
                  </div>

                </div>
              </div>
              
            </div>
            <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Edit/Save</button>
            </div>
        </div>
    </div>
  </div>
</form>
{{-- form tentang end --}}

<!-- Appointment Start -->
<div
  id="load-appointment"
  class="container-fluid my-5 py-5 warna1"
  style="background-color: {{$warna}}"
>
  <div class="container py-5">
    <div class="row gx-5">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <img style="object-fit: cover" class="w-100 h-50 rounded" src="{{ asset('assets') }}/img/{{$img}}" alt="">
        <img style="object-fit: cover;" class="w-100 h-50 rounded mt-3" src="{{ asset('assets') }}/img/{{$img_tamu}}" alt="">
      </div>
      <div class="col-lg-8">
        <div class="bg-white rounded p-5 border border-a border-5" style="padding: 3px" data-bs-toggle="modal" data-bs-target="#edit-tamu-selesai-text">
          <h3 class="mb-4 text-center" data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-custom-class="custom-tooltip"
          data-bs-title="teks 1">{{ $teks_janji1 }}</h3>
          <p style="color: #34364A" data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-custom-class="custom-tooltip"
          data-bs-title="Teks 2">{{ $teks_janji2 }}</p>
      
          <h5 style="text-align: left">Detail Pembayaran</h5>
          <table width="40%">
              <tr>
                  <td data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="nominal appointment" style="text-align: left">Appointment: </td>
                  <td style="text-align: right">{{ number_format($nominal_app,0) }}</td>
              </tr>
              <tr>
                  <td style="text-align: left">Total Transfer</td>
                  <th data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="nominal transfer" style="text-align: right;color: #34364A">{{ number_format($nominal_tf,0) }}</th>
              </tr>
          </table>
          
          <h5 style="text-align: left" class="mt-3 mb-3">Transfer pembayaran</h5>
          <span data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-custom-class="custom-tooltip"
          data-bs-title="Bank 1">
            <img src="{{ asset('assets') }}/img/logo_bank_bca.png" alt="" width="90px" style="text-align: left">
            <p>(Admin {{ ucwords($bca_admin) }}) <br>
                <span style="font-weight: bold; color: #34364A">{{ $bca_norek }}</span>
            </p>
          </span>
          <span data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-custom-class="custom-tooltip"
          data-bs-title="Bank 2">
          <img src="{{ asset('assets') }}/img/logo_bank_mandiri.png" alt="" width="90px"
              style="text-align: left">
          <p>(Admin {{ ucwords($mandiri_admin) }}) <br>
              <span style="font-weight: bold; color: #34364A">{{ $mandiri_norek }}</span>
          </p>
          </span>
          <p style="color: #34364A">konfirmasi pembayaran ke nomer berikut ini:</p>
          
          <table data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-custom-class="custom-tooltip"
          data-bs-title="Admin & No Whatsapp" width="50%">
              <tr>
                  <td><a target="_blank" href="https://wa.me/{{$wa_nohp}}?text=SILAHKAN%20UPLOAD%20BUKTI%20TRANSFER%0ANo%20Order%20:%20%20%0Aemail%20:%20%20%0AProvinsi:%20%0AKota:" class="btn btn-secondary"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48" style=" fill:#000000;"><path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path></svg> 
                {{ ucwords($wa_admin) }} : {{ $wa_nohp }} (Klik)</a></td>
                  
              </tr>

          </table>
      
      </div>
      
      </div>
    </div>
  </div>
</div>
<!-- Appointment End -->

{{-- form hero --}}
<form action="{{ route('save_teks_janji') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="modal" id="edit-tamu-text" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                  <h5 class="modal-title" id="exampleModalLabel">Edit H1</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="">Teks 1</label>
                <input value="{{ $teks_janji }}" type="text" name="teks_janji" class="form-control">
            </div>
            </div>
            <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Edit/Save</button>
            </div>
        </div>
    </div>
  </div>
</form>
{{-- form hero end --}}

{{-- form hero --}}
<form action="{{ route('save_teks_tamu') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="modal" id="edit-tamu-selesai-text" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Appointment</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="modal-body">
              <center>
              <div class="row">
                <div class="col-lg-6">
                  <img style="object-fit: cover" src="{{ asset('assets') }}/img/{{$img_tamu}}" class="pb-3" width="200" height="200" alt="">
                  <input type="file" class="form-control" name="img_tentang">
                </div>
              </div>
            </center>
              <div class="form-group">
                <label for="">Teks 1</label>
                <input value="{{ $teks_janji1 }}" type="text" name="teks1" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Teks 2</label>
                <input value="{{ $teks_janji2 }}" type="text" name="teks2" class="form-control">
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                      <label for="">Nominal Appointmen</label>
                      <input type="text" name="nominal_app" value="{{ $nominal_app }}" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                      <label for="">Nominal Transfer</label>
                      <input type="text" name="nominal_tf" value="{{ $nominal_tf }}" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <img src="{{ asset('assets') }}/img/logo_bank_mandiri.png" alt="" width="90px">
                      <label for="">Admin</label>
                      <input type="text" name="mandiri_admin" value="{{ $mandiri_admin }}" class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">

                  <div class="form-group">
                    <img src="{{ asset('assets') }}/img/logo_bank_mandiri.png" alt="" width="90px">
                      <label for="">No Rek</label>
                      <input type="text" name="mandiri_norek" value="{{ $mandiri_norek }}" class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <img src="{{ asset('assets') }}/img/logo_bank_bca.png" alt="" width="90px">
                      <label for="">Admin</label>
                      <input type="text" name="bca_admin" value="{{ $bca_admin }}" class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">

                  <div class="form-group">
                    <img src="{{ asset('assets') }}/img/logo_bank_bca.png" alt="" width="90px">
                      <label for="">No Rek</label>
                      <input type="text" name="bca_norek" value="{{ $bca_norek }}" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                      <label for="">Admin Wa</label>
                      <input type="text" name="wa_admin" value="{{ $wa_admin }}" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                      <label for="">No Whatsapp</label>
                      <input type="text" name="wa_nohp" value="{{ $wa_nohp }}" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Edit/Save</button>
            </div>
        </div>
    </div>
  </div>
</form>
{{-- form hero end --}}


@endsection

