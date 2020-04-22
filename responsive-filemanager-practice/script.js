$(document).ready(function () {

    $(".fancy").fancybox({
        type: "iframe",
    });

});

function responsive_filemanager_callback(field_id) {
    var image = $('#' + field_id).val();
    $('#prev_image').attr('src', image);
}

function clear_image() {
    var image = 'no-image.jpg';
    $('#prev_image').attr('src', image);
    $('#image_path').val('', image);
}

