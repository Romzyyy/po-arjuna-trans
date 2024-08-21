import $ from "jquery";
import "bootstrap";

// $.ajaxSetup({
//     headers: {
//         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//     },
// });

window.TambahPaketLayanan = function () {
    let Nama = $("#Nama_Layanan").val();
    let Foto = $("#Gambar")[0].files[0];
    let Keterangan = $("#Keterangan").val();

    let formData = new FormData();
    formData.append("Nama_Layanan", Nama);
    formData.append("Gambar", Foto);
    formData.append("Keterangan", Keterangan);
    formData.append("_token", $('meta[name="csrf-token"]').attr("content"));

    $.ajax({
        url: "/paket-layanan",
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


$(document).ready(function () {
    $.ajax({
        url: '/PaketLayanan',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            // console.log(data);
            GetPaketLayanan(data);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    })
});

function GetPaketLayanan(data){
    let html = '';

    data.forEach(item=>{
        var Gambar = `assets/upload/PaketLayanan/${item.Foto}`;

        html += `
               <div class="col">
            <div class="card">
                <img src="${Gambar}" class="card-img-top" alt="${item.Layanan}" />
                <div class="card-body">
                    <h5 class="card-title">${item.Layanan}</h5>
                    <p class="card-text">
                       ${item.Keterangan}
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="javascript:;" class="btn btn-warning">Detail</a>
                        <a href="javascript:;" class="btn btn-success">Edit</a>
                        <a href="javascript:;" class="btn btn-danger" onclick="deletePaketLayanan(${item.ID})">Delete</a>
                    </div>
                </div>
            </div>
        </div>`; 
    });
    $('#paket-layanan').html(html);
}


window.deletePaketLayanan = function (id) {
    $.ajax({
        url: `/PaketLayanan/${id}`,
        type: 'DELETE',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            console.log(response);

            // location.reload(); // Reload halaman untuk memperbarui data
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });

}