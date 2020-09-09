
    $(function() {
        $('.updateDupa').on('click', function () {

            // mengambil data(id) di database 
            const id = $(this).data('id');
            
            $.ajax({
                url: 'http://localhost/dupa/admin/update',
                data: {id : id}, // id sebelah kiri adalah nama data yang dikirimkan, sedangkan sebelah kanan merupakan isi data (anggep aja var dengan values)
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama_dupa').val(data.nama_dupa); //mengambil id yang berisi value #nama_dupa lalu ditampilkan pada modal
                    $('#image_dupa').val(data.image_dupa);
                    $('#harga_dupa').val(data.harga_dupa);
                    $('#deskripsi_dupa').val(data.deksripsi_dupa);
                    $('#id').val(data.id);
                }
            })
        })
    })