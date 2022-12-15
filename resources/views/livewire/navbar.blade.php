<div>
    
<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-primary shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-primary navbar-light py-3 py-lg-0">
            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-h1" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-secondary border border-danger border-5" style="padding: 3px">
                    <img src="{{ asset('assets/img/'.$img.'') }}" width="100" height="80" alt="">
                 {{ $h1 }}
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#" class="nav-item nav-link">Beranda</a>
                    <a href="#load-about" class="nav-item nav-link">Tentang Kami</a>
                    {{-- <a href="#load-service" class="nav-item nav-link">Service</a> --}}
                    <a href="#load-appointment" class="nav-item nav-link">Buat Janji</a>
                    <a href="#load-doctors" class="nav-item nav-link">Dokter Kami</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="appointment.html" class="dropdown-item">Appointment</a>
                            <a href="search.html" class="dropdown-item">Search</a>
                        </div>
                    </div> --}}
                    <a href="#load-contact" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
{{-- action="{{ route('save_h1') }}" method="POST" enctype="multipart/form-data" --}}

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
                    <input autofocus type="text" class="form-control" wire:model="input_h1">
                    
                </div>
                <div class="form-group">
                    <label for="">Logo Navbar</label><br>
                    <img src="{{ asset('assets/img/'.$img.'') }}" width="100" height="80">
                    <input type="file" class="form-control" name="logo">
                </div>
                
             </div>
             <div class="modal-footer">
                  <button wire:click="save_h1" type="button" class="btn btn-primary">Edit/Save</button>
             </div>
        </div>
    </div>
</div>


</div>
