<template>
  <div class="col-12 mt-5">
    <div class="card card-bg">
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <h5 class="text-center font-weight-bold mb-3">Admin Setting</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-9">
            <router-link to="/location">
              <button class="btn btn-primary btn-block font-weight-bold">User</button>
            </router-link>
          </div>
          <div class="col-3">
            <img width="30px" src="img/icon/map.png" alt />
          </div>
        </div>
        <div class="row mt-4">
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
            <button class="btn btn-primary btn-block font-weight-bold">Job Task</button>
          </div>
          <div class="col-3">
            <img width="30px" src="img/icon/note.png" alt />
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-9">
            <button class="btn btn-primary btn-block font-weight-bold">Penagihan</button>
          </div>
          <div class="col-3">
            <img width="30px" src="img/icon/report.png" alt />
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-9">
            <button class="btn btn-primary btn-block font-weight-bold">Pesan</button>
          </div>
          <div class="col-3">
            <img width="30px" src="img/icon/report.png" alt />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
