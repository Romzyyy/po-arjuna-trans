import $ from "jquery";
import "bootstrap";


window.TambahHome = function(){
    let NamaTravel = $("#Travel").val();
    let NamaTravel1 = $("#Travel1").val();
    let Slogan = $("#Slogan").val();
    let Wa = $("#Wa").val();
    let Logo = $("#Logo")[0].files[0];
    let Home = $("#Home")[0].files[0];

    let formData = new FormData();
    formData.append("Nama_Travel", NamaTravel);
    formData.append("Nama_Travel1", NamaTravel1);
    formData.append("Slogan", Slogan);
    formData.append("Wa", Wa);
    formData.append("Logo", Logo);
    formData.append("Home", Home);
    formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

    $.ajax({
        url: '/pengaturan-home',
        type: 'POST',
        dataType: 'json',
        data: formData,
        processData: false,
        contentType: false,
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}