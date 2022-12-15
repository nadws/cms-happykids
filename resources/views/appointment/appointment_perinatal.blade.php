
<div class="bg-white text-center rounded p-5">
    <h1 class="mb-4">Riwayat Perinatal</h1>

   
    <form id="form-appointment-saudara">
        @csrf
        <input type="text" class="form-control" style="display: none" name="no_order" value="{{ $no_order }}">
        <div class="row g-3">
            <div class="col-4 col-sm-4">
                <div class="form-floating mb-3">
                    <input required name="kehamilan" type="text" class="form-control bg-light border-0"
                    placeholder="kehamilan/minggu" style="height: 55px;">
                    <label for="floatingInput">kehamilan .. mgg</label>
                </div>
            </div>
            <div class="col-8 col-sm-8">
                <table>
                    <tr>
                        <th>Jenis Persalinan</th>
                        <th></th>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input required class="form-check-input j_kelamin" value="Laki - laki" type="radio" name="j_kelamin[]"
                                    id="inlineRadioLs" value="optionL">
                                <label class="form-check-label" for="inlineRadioLs">Spontan / Normal</label>
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="form-check mr-5">
                                <input required class="form-check-input j_kelamin" value="Perempuan" type="radio" name="j_kelamin[]"
                                    id="inlineRadioPs" value="optionP">
                                <label class="form-check-label" for="inlineRadioPs">S.C atas indikasi</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>&nbsp&nbsp</td>
                        <td>
                            <input required name="kehamilan" type="text" class="form-control bg-light border-0"
                            placeholder="indikasi" style="height: 35px;">
                        </td>
                    </tr>
                </table>
            </div>
            {{-- <div class="col-3 col-sm-3">
                <div class="form-group mb-3">
                    <label for="floatingInput">Jenis Persalinan</label>
                </div>
            </div>
            <div class="col-5 col-sm-5">
                <div class="form-check">
                    <input required class="form-check-input j_kelamin" value="Laki - laki" type="radio" name="j_kelamin[]"
                        id="inlineRadioLs" value="optionL">
                    <label class="form-check-label" for="inlineRadioLs">Spontan / Normal</label>
                </div>
                <div class="form-check mr-2">
                    <input required class="form-check-input j_kelamin" value="Perempuan" type="radio" name="j_kelamin[]"
                        id="inlineRadioPs" value="optionP">
                    <label class="form-check-label" for="inlineRadioPs">S.C atas indikasi</label>
                    
                </div>
                
            </div> --}}

            <div class="col-4">
                <button class="btn btn-secondary w-100 py-3 bg-button" type="button" no_order="{{ $no_order }}" id="back-appointment-perinatal"><i class="fa fa-arrow-left"></i> Back </button>
            </div>
            <div class="col-8">
                <button class="btn btn-secondary w-100 py-3 bg-button" type="submit" id="save-appointment-perinatal">Make An
                    Appointment <i class="fa fa-arrow-right"></i></button>
                    
            </div>
        </div>
    </form>
</div>
