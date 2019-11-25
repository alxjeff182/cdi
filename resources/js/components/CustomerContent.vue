<template>
  <div class="card-body">
    <div class="row">
      <div class="col-9">
        <router-link to="/dashboard/customer-location">
          <button class="btn btn-primary btn-block font-weight-bold">Lihat Lokasi</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="img/icon/location.png" alt />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-9">
        <router-link to="/dashboard/customer-task">
          <button class="btn btn-primary btn-block font-weight-bold">Lihat Job Task</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="/img/icon/job.png" alt />
      </div>
    </div>
    <router-link to="/dashboard/customer-report">
      <div class="row mt-4">
        <div class="col-9">
          <button class="btn btn-primary btn-block font-weight-bold">Report CS</button>
        </div>
        <div class="col-3">
          <img width="30px" src="img/icon/user-report.png" alt />
        </div>
      </div>
    </router-link>
    <router-link to="/dashboard/customer-invoice">
      <div class="row mt-4">
        <div class="col-9">
          <button class="btn btn-primary btn-block font-weight-bold">Tagihan Anda</button>
        </div>
        <div class="col-3">
          <img width="30px" src="img/icon/customer-invoice.png" alt />
        </div>
      </div>
    </router-link>
    <router-link to="/dashboard/customer-message">
      <div class="row mt-4">
        <div class="col-9">
          <button class="btn btn-primary btn-block font-weight-bold">Pesan</button>
        </div>
        <div class="col-3">
          <img width="30px" src="img/icon/message.png" alt />
        </div>
      </div>
    </router-link>
  </div>
</template>
