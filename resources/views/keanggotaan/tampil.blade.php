@extends("main")
@section("title","Keanggotaan")
@section("content")
 <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Anggota
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            @if($data==NULL)
                                <p>
                                    Data Not Found
                                </p>
                            @else
                                <p>
                                    <strong>Nama</strong>
                                    <br>
                                    <span>{{$data->name}}</span>
                                </p>
                                <p>
                                    <strong>E-Mail</strong>
                                    <br>
                                    <span>{{ $data->email }}</span>
                                </p>
                                <p>
                                    <strong>Alamat</strong>
                                    <br>
                                    <span>{{ $data->alamat }}</span>
                                </p>
                                <p>
                                    <strong>Telepon</strong>
                                    <br>
                                    <span>{{ $data->telepon }}</span>
                                </p>

                            @endif
                            <div id="button-area">
                                <a href="{{ route('anggota.index') }}" class="btn btn-primary">
                                    Kembali
                                </a>
                                <a href="#" onclick='window.anggota.cetakKartu({{$data->toJson(JSON_PRETTY_PRINT) }})' class="btn btn-success">
                                    Cetak
                                </a>
                                <a href="{{ route('anggota.edit',[ 'anggotum' => $data->id ]) }}" class="btn btn-warning">
                                    Edit
                                </a>
                                <a href="#" onclick="window.anggota.hapus({{ $data->id }},`{{ $data->name }}`)" class="btn btn-danger">
                                    Hapus
                                </a>

                            </div>
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
            window.anggota = window.application.keanggotaan;
        });
    </script>
@endsection