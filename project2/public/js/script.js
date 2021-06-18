$(function(){
    $('.tombolTambahDaftar').on('click', function(){
        $('#exampleModalLabel').html('Tambah Data Keluarga');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    })
    $('.tampilModalUbah').on('click', function(){
        $('#exampleModalLabel').html('Ubah Data Keluarga');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/project2/public/keluarga/ubah');
        const id = $(this).data('no_KK');
        $.ajax({
            url : 'http://localhost/project2/public/keluarga/getubah',
            data : {id : id},
            method : 'post',
            dataType : 'json',
            success : function(data) {
                $('#no_KK').val(data.no_KK);
                $('#Nama_Kepala').val(data.Nama_Kepala);
                $('#Anggota_Keluarga').val(data.Anggota_Keluarga);
                $('#Alamat').val(data.Alamat);
                $('#no_tlp').val(data.no_tlp);
                $('#Pekerjaan').val(data.Pekerjaan);
                $('#Penghasilan').val(data.Penghasilan);
                $('#id').val(data.id);
            } 
        })
    })
})