import $ from "jquery";
import "bootstrap";


window.TambahShortVideo = function(){
    let HalamanJudul = $("#JudulHalaman").val();
    let youtube = $("#Youtube").val();
    let instagram = $("#Instagram").val();
    let Tiktok = $("#Tiktok").val();
    let Facebook = $("#Facebook").val();
    let Video = $("#Video").val();


    $.ajax({
        url: '/pengaturan-short-video',
        type: 'POST',
        dataType: 'json',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            Judul_Halaman: HalamanJudul,
            Youtube: youtube,
            Instagram: instagram,
            Tiktok: Tiktok,
            Facebook: Facebook,
            Short_Video: Video
        },
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });


}