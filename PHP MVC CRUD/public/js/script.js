
// jalankan function kalau filenya sudah siap
$(function(){

    const URL = 'http://localhost/php mvc/php mvc crud/public';
    //  ketika kita klik tombol tambah data
     $('.tambahDataMahasiswa').on('click',function(){
        $('.modal-title').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-content form').attr('action', URL+'/mahasiswa/tambah_Mahasiswa');

        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('Sistem Informasi');

        // $('.modal-footer button[type=submit]').on('click',function(){
        //     $.ajax({
        //         type : 'post',
        //         url : "http://localhost/php mvc/pertemuan6/public/mahasiswa/tambah_Mahasiswa",
        //         dataType : 'json',
        //         // data : {
        //         //     'apikey' : 'e871e0d6',
        //         //     's' : $('#search-input').val()
        //         // },
        //         success : function(result){
        //             console.log(result);
        //                 // $.each(result, function(i,data){
        //                 //     $('.data-mahasiswa').html(`
        //                 //     <li class="list-group-item d-flex justify-content-between align-items-center">
        //                 //       <div> Berhasil Menggunakan AJAX </div>
        //                 //       <div>
        //                 //         <a href="<?=URL?>/mahasiswa/detail_Mahasiswa/<?=$mahasiswa['id']?>" class="badge bg-primary">Detail</a>
        //                 //         <button class="badge bg-success editDataMahasiswa" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?=$mahasiswa['id']?>">Edit</button>
        //                 //         <a href="<?=URL?>/mahasiswa/delete_Mahasiswa/<?=$mahasiswa['id']?>" class="badge bg-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');">Delete</a>
        //                 //       </div>
        //                 //     </li>`)
        //                 // })
        //         }
        //         })
        //     })
    })
   
    // ketika kita klik tombol edit data mahasiswa
    $('.editDataMahasiswa').on('click',function(){
        $('.modal-title').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
        // mengubah href ke function edit_mahasiswa
        $('.modal-content form').attr('action', URL+'/mahasiswa/edit_Mahasiswa');
        
        // mengambil data id yang dikirimkan dengan method data-id
        const id =  $(this).data('id');
        
        // ajax untuk mengambil data dari function getEdit
        $.ajax({
            type : 'post',
            url : URL+'/mahasiswa/getEdit',
            dataType : 'json',
            data : {
                'id' : id
            },
            success : function(data){
                $('#id').val(data['id']);
                $('#nama').val(data['nama']);
                $('#nrp').val(data['nrp']);
                $('#email').val(data['email']);
                $('#jurusan').val(data['jurusan']);
            }
        })
    })
})