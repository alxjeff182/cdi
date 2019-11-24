<template>
  <div class="card-body">
    <div class="row">
      <div class="col-9">
        <router-link to="/dashboard/location">
          <button class="btn btn-primary btn-block font-weight-bold">Pilih Lokasi</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="/img/icon/map.png" alt />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-9">
        <router-link to="/dashboard/job">
          <button class="btn btn-primary btn-block font-weight-bold">Job Task</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="/img/icon/note.png" alt />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-9">
        <router-link to="/dashboard/message">
          <button class="btn btn-primary btn-block font-weight-bold">Pesan</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="/img/icon/message.png" alt />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-9">
        <router-link to="/dashboard/report">
          <button class="btn btn-primary btn-block font-weight-bold">Laporan Harian</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="/img/icon/report.png" alt />
      </div>
    </div>
  </div>
</template>
