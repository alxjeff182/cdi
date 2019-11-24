<template>
  <div class="card-body">
    <div class="row">
      <div class="col-9">
        <router-link to="/location">
          <button class="btn btn-primary btn-block font-weight-bold">Lihat Lokasi</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="img/icon/user.png" alt />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-9">
        <router-link to="/home/location">
          <button class="btn btn-primary btn-block font-weight-bold">Lihat Job Task</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="/img/icon/map.png" alt />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-9">
        <button class="btn btn-primary btn-block font-weight-bold">Report CS</button>
      </div>
      <div class="col-3">
        <img width="30px" src="img/icon/invoice.png" alt />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-9">
        <button class="btn btn-primary btn-block font-weight-bold">Tagihan Anda</button>
      </div>
      <div class="col-3">
        <img width="30px" src="img/icon/invoice.png" alt />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-9">
        <button class="btn btn-primary btn-block font-weight-bold">Pesan</button>
      </div>
      <div class="col-3">
        <img width="30px" src="img/icon/invoice.png" alt />
      </div>
    </div>
  </div>
</template>
