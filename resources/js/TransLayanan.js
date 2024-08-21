import $ from "jquery";
import "bootstrap";

// $.ajaxSetup({
//     headers: {
//         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//     },
// });

// $(document).ready(function () {
//     $.ajax({
//         url: '/LayananTrans',
//         type: 'GET',
//         dataType: 'json',
//         success: function(data){
//             console.log(data);
//         },
//         error: function (xhr, status, error) {
//             console.error(xhr.responseText);
//         }
//     });
// });

window.TambahLayanan = function () {
    let Judul = $("#judul_halaman").val();
    let Keterangan = $("#keterangan_umum").val();
    let Wa = $("#whatsapp").val();
    let Total = $("#total_pelanggan").val();
    let TotalTerlayani = $("#total_pelanggan_terlayani").val();
    let Gambar = $("#gambar")[0].files[0];
    let Gambar1 = $("#gambar1")[0].files[0];
    let Gambar2 = $("#gambar2")[0].files[0];

    // console.log(
    //     Judul,
    //     Keterangan,
    //     Wa,
    //     Total,
    //     TotalTerlayani,
    //     Gambar,
    //     Gambar1,
    //     Gambar2
    // );

    let formData = new FormData();
    formData.append("Judul_Halaman", Judul);
    formData.append("Keterangan_Umum", Keterangan);
    formData.append("Wa", Wa);
    formData.append("Total_Pelanggan", Total);
    formData.append("Total_Pelanggan_Terlayani", TotalTerlayani);
    formData.append("Gambar", Gambar);
    formData.append("Gambar1", Gambar1);
    formData.append("Gambar2", Gambar2);
    formData.append("_token", $('meta[name="csrf-token"]').attr("content"));

    $.ajax({
        url: "/pengaturan-paket-layanan",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        },
    });
};
