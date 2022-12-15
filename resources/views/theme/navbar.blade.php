
<!-- Navbar Start -->


<div class="container-fluid sticky-top shadow-sm" style="background-color: {{$warna}}">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0" style="background-color: {{$warna}}">
            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-h1" class="navbar-brand">
                <h1 data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-custom-class="custom-tooltip"
                data-bs-title="teks logo" class="m-0 text-uppercase text-secondary border border-danger border-5" style="padding: 3px; border-color: {{$warna_bg}}">
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
                    <a href="#" class="nav-item nav-link" style="font-size: 15px">Beranda</a>
                    <a href="#load-about" class="nav-item nav-link" style="font-size: 15px">Tentang Kami</a>
                    {{-- <a href="#load-service" class="nav-item nav-link" style="font-size: 15px">Service</a> --}}
                    {{-- <a href="#load-appointment" class="nav-item nav-link" style="font-size: 15px">Buat Janji</a> --}}
                </div>
                
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="Logout" class="btn btn-rounded btn-danger" style="margin-left: 10px" onclick="event.preventDefault();
                    this.closest('form').submit();">Logout</button>
                </form>
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
                <div class="row">

                    <div class="col-4">
                        <input class="form-control" type="color" value="{{$warna}}" name="warna1">
                        {{-- <input placeholder="warna hexa tanpa '#'" id="warna_val" name="warna1" value="{{ $warna }}" type="text" class="form-control"> --}}
                    </div>
                    <div class="col-4">
                        <label for="exampleColorInput"  class="form-label"><input type="color" value="{{$warna_bg}}" name="warna2"></label>
                        {{-- <input placeholder="warna hexa tanpa '#'" id="warna_val" name="warna2" value="{{ $warna_bg }}" type="text" class="form-control"> --}}
                    </div>
                    <div class="col-4">
                        <label for="exampleColorInput"  class="form-label"><input type="color" value="{{$warna}}"></label>
                        {{-- <input placeholder="warna hexa tanpa '#'" id="warna_val" name="warna3" value="{{ $warna }}" type="text" class="form-control"> --}}
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
@section('scripts')
<script>
    

    $(document).on('submit', '#save_warna', function(){
        const rgba2hex = (rgba) => `#${rgba.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+\.{0,1}\d*))?\)$/).slice(1).map((n, i) => (i === 3 ? Math.round(parseFloat(n) * 255) : parseFloat(n)).toString(16).padStart(2, '0').replace('NaN', '')).join('')}`
        var warna = $("#warna_val").val()
        var css = $(".bg-primary").css("background-color");
        alert(rgb2hex(css));
        // $.ajax({
        //     type: "POST",
        //     url: "{{route('save_warna')}}?warna="+warna,
        //     success: function (r) {
        //     }
        // });
    })
</script>
@endsection
