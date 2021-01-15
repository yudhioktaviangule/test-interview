@extends("main")
@section("title","Keanggotaan")
@section("content")
 <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Ubah Data {{ $data->nama }}
                        </div>
                    </div>
                    <div class="card-body">
                        

                        <div class="container-fluid">
                            <form action="{{ route('anggota.update',['anggotum'=>$data->id]) }}" method="POST">
                                <input type="hidden" name="_method" value="put">
                                <csrf></csrf>
                                
                                <div class='form-group'>
                                    <label for=name>Nama</label>
                                    <input value="{{ $data->name }}" class='form-control form-control-sm' name='name' id='name'>
                                </div>
                                
                                <div class='form-group'>
                                    <label for=email>E-Mail</label>
                                    <input value="{{$data->email}}" type="email" class='form-control form-control-sm' name='email' id='email'>
                                </div>
                                
                                <div class='form-group'>
                                    <label for=email>Telepon</label>
                                    <input value="{{$data->telepon}}" type="tel" class='form-control form-control-sm' name='telepon' id='telepon'>
                                </div>
                                
                                <div class='form-group'>
                                    <label for=alamat>Alamat</label>
                                    <textarea class='form-control form-control-sm' name='alamat' id='alamat'>{{$data->telepon}}</textarea>
                                </div>
                                
                                <button class="btn btn-primary">
                                    Update
                                </button>
                                <a href="{{ route('anggota.index') }}" class="btn btn-danger">Kembali</a>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
@endsection