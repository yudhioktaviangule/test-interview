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
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show">
                                @foreach($errors->all() as $K_error => $error)
                                    <span>{{ $error }}</span><br>
                                @endforeach

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="text-right">
                            
                            <div id="main-controls">
                                <a href="{{route('anggota.create')}}" class="btn btn-info">
                                    Tambah Anggota
                                </a>
                                <a href="#" class='btn btn-outline-secondary' onclick='window.pencarian.aktifkanPencarian()'>Cari</a>
                            </div>

                            <div class='input-group mb-3' id="search-controls" style="display:none">
                                <input type="text" onchange="pencarian.bindQueryString($(this))" onkeyup="pencarian.bindQueryString($(this))" class="form-control" placeholder="Cari Nama,Alamat,E-Mail atau telepon Anggota" aria-label="" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button onclick="window.pencarian.cari()" class="btn btn-success" type="button">Pencarian</button>
                                    <button onclick="window.pencarian.matikanPencarian()" class="btn btn-secondary" type="button">
                                        <div class="close text-light">
                                            <span aria-hidden="true">&times;</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <table id='table-anggota' class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>E-Mail</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id='table-content'>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->alamat }}</td>
                                        <td>{{ $value->telepon }}</td>
                                        <td>
                                            <a href="{{ route('anggota.show',['anggotum'=>$value->id]) }}" class="btn btn-sm btn-block btn-primary">
                                                Tampil
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
  

@endsection
@section("js")
    <script>
        $(document).ready(() => {
            
            window.anggota   = window.application.keanggotaan;
            window.pencarian = anggota.cari();
        });
    </script>
@endsection
