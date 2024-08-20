import $ from 'jquery';
import 'bootstrap';


$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {
    console.log("jQuery dan Bootstrap sudah siap!");
});