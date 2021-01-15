@extends("main")
@section("title","Keanggotaan")
@section("content")
    
    <div class="row">

        <div class="col"></div>
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Daftar Anggota</div>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="text-right">
                            <a href="{{route('anggota.create')}}" class="btn btn-info">
                                Tambah Anggota
                            </a>
                        </div>
                        <br>
                        <table id='table-anggota' class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>E-Mail</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
  

@endsection

