<div class="bg-white text-center rounded p-5">
    <h1 class="mb-4">Book An Appointment</h1>
    <div class="row">
        <h2>Saudara Kandung</h2>
    </div>

    <form id="form-appointment-saudara">
        @csrf
        <input type="text" class="form-control" style="display: none" name="no_order" value="{{ $no_order }}">
        <div class="row g-3">
            <div class="col-6 col-sm-6">
                <input required name="nm_saudara[]" type="text" class="form-control bg-light border-0"
                    placeholder="Nama Saudara" style="height: 55px;">
            </div>
            <div class="col-3 col-sm-3">
                <div class="form-check form-check-inline">
                    <input required class="form-check-input j_kelamin" value="Laki - laki" type="radio"
                        name="j_kelamin[]" id="inlineRadioLs" value="optionL">
                    <label class="form-check-label" for="inlineRadioLs">Laki - laki</label>
                </div>
            </div>
            <div class="col-3 col-sm-3">
                <div class="form-check form-check-inline">
                    <input required class="form-check-input j_kelamin" value="Perempuan" type="radio"
                        name="j_kelamin[]" id="inlineRadioPs" value="optionP">
                    <label class="form-check-label" for="inlineRadioPs">Perempuan</label>
                </div>
            </div>



            <div class="col-6 col-sm-6">
                <input required name="tgl_lahir[]" type="text" class="form-control bg-light border-0"
                    placeholder="Tanggal Lahir Saudara" onfocus="(this.type='date')" style="height: 55px;">
            </div>
            <div class="col-6 col-sm-6">
                <input required name="pekerjaan[]" type="text" class="form-control bg-light border-0"
                    placeholder="Pekerjaan / Pendidikan" style="height: 55px;">
            </div>

            <div class="col-10 col-sm-10">
                <input required name="ket[]" type="text" class="form-control bg-light border-0"
                    placeholder="Keterangan" style="height: 55px;">
            </div>
            <div class="col-2 col-sm-2">
                <button class="btn btn-secondary btn-sm" type="button" id="btn_plus_saudara"><i
                        class="fa fa-plus"></i></button>
            </div>

            {{-- plus saudara --}}
            <div id="plus_saudara"></div>

            <div class="col-4">
                <button class="btn btn-secondary w-100 py-3 bg-button" type="button" no_order="{{ $no_order }}"
                    id="back-appointment-saudara"><i class="fa fa-arrow-left"></i> Back </button>
            </div>
            <div class="col-8">
                <button class="btn btn-secondary w-100 py-3 bg-button" type="submit" id="save-appointment-saudara">Make
                    An Appointment <i class="fa fa-arrow-right"></i></button>

            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        var c = 1
        $(document).on('click', '#btn_plus_saudara', function() {
            c += 1
            $.ajax({
                type: "GET",
                url: "{{ route('plus_saudara') }}?c=" + c,
                success: function(r) {
                    $("#plus_saudara").append(r);
                }
            });
        })

        $(document).on('click', '.remove_plus_saudara', function() {
            var delete_row = $(this).attr("count");
            $('#row' + delete_row).remove();
        })
    });
</script>
