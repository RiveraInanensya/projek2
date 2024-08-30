$(document).ready(function() {
    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        Swal.fire({
            title: 'Pesan',
            text: 'Berhasil ' + flashData,
            icon: 'success'
        });
    }
});