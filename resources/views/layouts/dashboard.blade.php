@extends('main')
@section('title', 'Welcome')
    @section('content')
     <div id="app">   
          <user-profile></user-profile> 
      <div class="container mb-5 px-2">
         {{-- <admin-content></admin-content> --}}
         {{-- <admin-edit-message></admin-edit-message> --}}
         {{-- <admin-edit-invoice></admin-edit-invoice> --}}
         {{-- <main-content></main-content> --}}
         {{-- <location-select></location-select> --}}
         {{-- <report-task></report-task> --}}
         {{-- <upload-task></upload-task> --}}
           <div class="col-12 mt-5">
    <div class="card card-bg">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <router-link to="/location">
              <button class="btn btn-primary btn-block font-weight-bold">Pilih Lokasi</button>
            </router-link>
          </div>
          <div class="col-3">
            <img width="30px" src="img/icon/map.png" alt />
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-9">
            <router-link to="/job">
              <button class="btn btn-primary btn-block font-weight-bold">Job Task</button>
            </router-link>
          </div>
          <div class="col-3">
            <img width="30px" src="img/icon/note.png" alt />
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-9">
            <router-link to="/message">
              <button class="btn btn-primary btn-block font-weight-bold">Pesan</button>
            </router-link>
          </div>
          <div class="col-3">
            <img width="30px" src="img/icon/message.png" alt />
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-9">
            <router-link to="/report">
              <button class="btn btn-primary btn-block font-weight-bold">Laporan Harian</button>
            </router-link>
          </div>
          <div class="col-3">
            <img width="30px" src="img/icon/report.png" alt />
          </div>
        </div>
      </div>
    </div>
  </div>
         <broadcast-message></broadcast-message>
         <footer-setting></footer-setting>
    </div>	 
    </div>	 
@endsection