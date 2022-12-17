
<!-- Navbar Start -->

<style>
    .style1 {
        -webkit-appearance: none;
        -moz-appearance: none;
        width: 80px;
        height: 50px;
        border: none;
        cursor: pointer;
        margin-bottom: 10px;
    }
</style>
<div class="container-fluid sticky-top shadow-sm warna1" style="background-color: {{$warna}}">
    <div class="container">
        <nav class="navbar warna1 navbar-expand-lg navbar-light py-3 py-lg-0" style="background-color: {{$warna}}">
            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-h1" class="navbar-brand">
                <h1 data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-custom-class="custom-tooltip"
                data-bs-title="teks logo" class="m-0 text-uppercase border border-5 fwarna1 border-a" style="color: {{$fontc1}};">
                    <img data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="logo navbar" src="{{ asset('assets/img/'.$img.'') }}" width="100" height="80" alt="">
                    {{ $h1 }}
                </h1>
            </a>

            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-theme" class="text-secondary"><i class="bi bi-pencil-square"></i> Theme Colors</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#" class="nav-item nav-link fwarna1" style="font-size: 15px;color: {{$fontc1}};">Beranda</a>
                    <a href="#load-about" class="nav-item nav-link fwarna1" style="font-size: 15px;color: {{$fontc1}};">Tentang Kami</a>
                    {{-- <a href="#load-service" class="nav-item nav-link" style="font-size: 15px">Service</a> --}}
                    {{-- <a href="#load-appointment" class="nav-item nav-link" style="font-size: 15px">Buat Janji</a> --}}
                </div>
                
                {{-- <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="Logout" class="btn btn-rounded btn-danger" style="margin-left: 10px" onclick="event.preventDefault();
                    this.closest('form').submit();">Logout</button>
                </form> --}}
            </div>
        </nav>
        
    </div>
</div>
<!-- Navbar End -->
 
<form action="{{ route('save_h1') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="modal" id="edit-h1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="hidden" name="jenis" value="navbar">
                    <label for="">Teks Logo</label>
                    <input autofocus type="text" class="form-control" name="h1" value="{{ $h1 }}">
                    
                </div>
                <div class="form-group">
                    <label for="">Logo Navbar</label><br>
                    <img src="{{ asset('assets/img/'.$img.'') }}" width="100" height="80"><span class="text-warning ml-3">Dimensions : 500 x 500</span>
                    <input type="file" class="form-control" name="logo">
                </div>
                
             </div>
             <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Edit/Save</button>
             </div>
        </div>
    </div>
</div>
</form>

<form action="{{ route('save_warna') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="modal" id="edit-theme" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
             <div class="modal-header bg-primary">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Theme</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                  </button>
             </div>
             <div class="modal-body">
                <center>
                <div class="row">
                    <h5>Colors</h5>
                    <div class="col-lg-6">
                        <input class="form-control style1" id="warna1" type="color" value="{{$warna}}" name="warna1">
                        <label for="" class="text-secondary ml-2">Warna 1</label>
                        {{-- <input placeholder="warna hexa tanpa '#'" id="warna_val" name="warna1" value="{{ $warna }}" type="text" class="form-control"> --}}
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control style1" id="warna2" type="color" value="{{$warna_bg}}" name="warna2">
                        <label for="" class="text-secondary ml-2">Warna 2</label>
                        {{-- <input placeholder="warna hexa tanpa '#'" id="warna_val" name="warna2" value="{{ $warna_bg }}" type="text" class="form-control"> --}}
                    </div>
                </div>
                <div class="row mt-5">
                    <h5>Font Colors</h5>
                    <div class="col-lg-4">
                        <input class="form-control style1" id="fwarna1" type="color" value="{{$fontc1}}" name="fontc1">
                        <label for="" class="text-secondary ml-2">Warna 1</label>
                        {{-- <input placeholder="warna hexa tanpa '#'" id="warna_val" name="warna1" value="{{ $warna }}" type="text" class="form-control"> --}}
                    </div>
                    <div class="col-lg-4">
                        <input class="form-control style1" id="fwarna2" type="color" value="{{$fontc2}}" name="fontc2">
                        <label for="" class="text-secondary ml-2">Warna 2</label>
                        {{-- <input placeholder="warna hexa tanpa '#'" id="warna_val" name="warna2" value="{{ $warna_bg }}" type="text" class="form-control"> --}}
                    </div>
                    <div class="col-lg-4">
                        <input class="form-control style1" id="fwarna3" type="color" value="{{$fontc3}}" name="fontc3">
                        <label for="" class="text-secondary ml-2">Warna 3</label>
                        {{-- <input placeholder="warna hexa tanpa '#'" id="warna_val" name="warna2" value="{{ $warna_bg }}" type="text" class="form-control"> --}}
                    </div>
                </div>
                </center>
             </div>
             <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Edit/Save</button>
             </div>
        </div>
    </div>
</div>
</form>
@section('scripts')
<script>
    $(document).on('change', '#warna1', function(){
        $('.warna1').css('background-color', $(this).val())
    })
    $(document).on('change', '#warna2', function(){
        $('.warna2').css('background-color', $(this).val())
    })

    $(document).on('change', '#fwarna1', function(){
        $('.fwarna1').css('color', $(this).val())
    })
    $(document).on('change', '#fwarna2', function(){
        $('.fwarna2').css('color', $(this).val())
    })
    $(document).on('change', '#fwarna3', function(){
        $('.fwarna3').css('color', $(this).val())
    })
</script>
@endsection
