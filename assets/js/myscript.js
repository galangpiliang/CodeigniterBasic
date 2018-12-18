const flashdata = $('.flashdata').data('flashdata');
const flashlogin = $('.login').data('login');

console.log(flashlogin);


if (flashdata) {
    Swal({
        title : 'Data Berhasil '+flashdata,
        text : 'Kamu mantap nak bujang',
        type : 'success'
    });
}

if (flashlogin) {
    Swal({
        type: 'error',
        title: 'Oops...',
        text: flashlogin
    });
}

//tombol-hapus
$('.tombol-hapus').on('click', function (e) {
    e.preventDefault();

    const href = $(this).attr('href');

    Swal({
        title: 'Apa Kamu Yakin?',
        text              : "data mahasiswa akan dihapus!",
        type              : 'warning',
        showCancelButton  : true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor : '#d33',
        confirmButtonText : 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});