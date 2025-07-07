     @extends('layout.tamplate')
     <!-- START FORM -->
     @section('konten')
     <form action="{{ url('dosen') }}" method="post">
         @csrf
         <div class="my-3 p-3 bg-body rounded shadow-sm">
             <div class="mb-3 row">
                 <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                 <div class="col-sm-10">
                     <input type="number" class="form-control" name='nim' value="{{ Session::get('nim') }}" id="nim">
                 </div>
             </div>
             <div class="mb-3 row">
                 <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}" id="nama">
                 </div>
             </div>
             <div class="mb-3 row">
                 <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" name='jurusan' value="{{ Session::get('jurusan') }}"
                         id="jurusan">
                 </div>
             </div>
             <div class="mb-3 row">
                 <label for="nilai" class="col-sm-2 col-form-label">nilai</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" name='nilai' value="{{ Session::get('nilai') }}"
                         id="nilai">
                 </div>
             </div>
             <div class="mb-3 row">
                 <div class="col-sm-10 offset-sm-2">
                     <button type="submit" class="btn btn-primary">SIMPAN</button>
                     <a href="{{ url('dosen') }}" class="btn btn-secondary">KEMBALI</a>
                 </div>
             </div>
         </div>
     </form>
     <!-- AKHIR FORM -->
     @endsection