import $ from "jquery";
import "bootstrap";

window.TambahTestimoni = function(){
    let HalamanJudul = $("#Judul_Halaman").val();
    let Keterangan = $("#Testimoni").val();

    $.ajax({
        url: '/pengaturan-testimonial',
        type: 'POST',
        dataType: 'json',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            Judul_Halaman: HalamanJudul,
            Testimoni: Keterangan
        },
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}