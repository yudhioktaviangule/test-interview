@extends("main")
@section("title","Keanggotaan")
@section("content")
 <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Tambah Data Anggota
                        </div>
                    </div>
                    <div class="card-body">
                        
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $K_error => $error)
                                    <span>{{ $error }}</span><br>
                                @endforeach
                            </div>
                        @endif

                        <div class="container-fluid">
                            <form action="{{ route('anggota.store') }}" method="POST">
                            
                                <csrf></csrf>
                                
                                <div class='form-group'>
                                    <label for=name>Nama</label>
                                    <input class='form-control form-control-sm' name='name' id='name'>
                                </div>
                                
                                <div class='form-group'>
                                    <label for=email>E-Mail</label>
                                    <input type="email" class='form-control form-control-sm' name='email' id='email'>
                                </div>
                                
                                <div class='form-group'>
                                    <label for=email>Telepon</label>
                                    <input type="tel" class='form-control form-control-sm' name='telepon' id='telepon'>
                                </div>
                                
                                <div class='form-group'>
                                    <label for=alamat>Alamat</label>
                                    <textarea class='form-control form-control-sm' name='alamat' id='alamat'></textarea>
                                </div>
                                
                                <button class="btn btn-primary">
                                    Simpan
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