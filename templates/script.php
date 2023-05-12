<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../../assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../../assets/js/datatables-simple-demo.js"></script>
<script src="../../assets/js/sweetalert.js"></script>
<script>
    $('#form').submit(function(e) {
        e.preventDefault();
        var data = $('#form').serialize();
        var url = $('#form').attr('action');
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            dataType: 'json',
            beforeSend: function() {
                $('#tombol_submit').prop("disabled", true);
                $('#tombol_submit').text('Please wait...');
            },
            success: function(response) {
                if (response.status == "success") {
                    Swal.fire({
                        title: 'Success',
                        text: response.message,
                        icon: "success",
                        confirmButtonText: 'OK'
                    }).then(function() {
                        window.location.href = "list.php";
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: response.message,
                        icon: "error",
                        confirmButtonText: 'OK'
                    }).then(function() {
                        $('#tombol_submit').prop("disabled", false);
                        $('#tombol_submit').html('Simpan');
                    })
                }
            }
        });
    });

    function deleteData(id) {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '',
                    type: "POST",
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        Swal.fire({
                            title: 'Terhapus!',
                            text: 'Data telah dihapus.',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            location.reload();
                        });
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                    'Batal',
                    'Data batal dihapus :)',
                    'error'
                )
            }
        });
    }
</script>