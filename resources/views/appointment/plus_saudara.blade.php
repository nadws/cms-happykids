<div class="row mt-3 mb-3" id="row{{$c}}">
    <div class="col-6 col-sm-6">
        <input required name="nm_saudara[]" type="text" class="form-control bg-light border-0"
            placeholder="Nama Saudara" style="height: 55px;">
    </div>
    <div class="col-3 mb-3 mt-3 col-sm-3">
        <div class="form-check form-check-inline">
            <input required class="form-check-input j_kelamin" value="Laki - laki" type="radio" name="j_kelamin[]"
                id="inlineRadioLs" value="optionL">
            <label class="form-check-label" for="inlineRadioLs">Laki - laki</label>
        </div>
    </div>
    <div class="col-3 mb-3 mt-3 col-sm-3">
        <div class="form-check form-check-inline">
            <input required class="form-check-input j_kelamin" value="Perempuan" type="radio" name="j_kelamin[]"
                id="inlineRadioPs" value="optionP">
            <label class="form-check-label" for="inlineRadioPs">Perempuan</label>
        </div>
    </div>
    
    <div class="col-6  mb-3 mt-3 col-sm-6">
        <input required name="tgl_lahir[]" type="text" class="form-control bg-light border-0"
        placeholder="Tanggal Lahir Saudara"
        onfocus="(this.type='date')" style="height: 55px;">
    </div>
    <div class="col-6  mb-3 mt-3 col-sm-6">
        <input required name="pekerjaan[]" type="text" class="form-control bg-light border-0"
        placeholder="Pekerjaan / Pendidikan"
        style="height: 55px;">
    </div>
    
    <div class="col-10  col-sm-10">
        <input required name="ket[]" type="text" class="form-control bg-light border-0"
            placeholder="Keterangan" style="height: 55px;">
    </div>
    <div class="col-2  col-sm-2">
        <button class="btn btn-secondary btn-sm remove_plus_saudara" type="button" count="{{ $c }}"><i class="fa fa-minus"></i></button>
    </div>
</div>