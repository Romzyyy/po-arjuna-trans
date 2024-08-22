import $ from "jquery";
import "bootstrap";


window.TambahTentangKami = function() {
    let Judul = $("#SubJudul").val();
    let Alamat = $("#AlamatLengkap").val();
    let Wa = $("#Wa").val();
    let Telpon = $("#Telpon").val();
    let Email = $("#Email").val();

    $.ajax({
        url: '/pengaturan-tentang-kami',
        type: 'POST',
        dataType: 'json',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            Email: Email,
            Sub_Judul: Judul,
            Alamat: Alamat,
            Wa: Wa,
            Telpon: Telpon
        },
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    })
}