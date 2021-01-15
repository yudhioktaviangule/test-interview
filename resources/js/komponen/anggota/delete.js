const DeleteAnggota = (id='',nama='')=>{
    const pesan = confirm(`Ingin Menghapus ${nama}?`);
    if(pesan){
        $("#form-delete").attr("action",`/anggota/${id}`);
        $("#form-delete").submit();
    }
}

export default DeleteAnggota;