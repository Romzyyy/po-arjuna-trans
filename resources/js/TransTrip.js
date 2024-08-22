import $ from "jquery";
import "bootstrap";


window.TambahTrip = function () {
    let Judul = $("#HalamanJudul").val();
    let Wa = $("#Wa").val();
    let Jadwal = $("#Jadwal").val();

    $.ajax({
        url: '/pengaturan-jadwal-trip',
        type: 'POST',
        dataType: 'json',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            Judul_Halaman: Judul,
            Wa: Wa,
            Jadwal_Trip: Jadwal
        },
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}