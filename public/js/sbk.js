$(document).ready(function() {
    $('.instructors-multicombo').select2();
    $('#videoinput').on('input', function () {
        $value = $(this).val();
        $('#video').attr('src',$value);
    });
});
