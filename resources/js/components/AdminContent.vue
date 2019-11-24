<template>
  <div class="card-body">
    <div class="row">
      <div class="col-9">
        <router-link to="/dashboard/manage-user">
          <button class="btn btn-primary btn-block font-weight-bold">Manage User</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="img/icon/user.png" alt />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-9">
        <router-link to="/dashboard/manage-location">
          <button class="btn btn-primary btn-block font-weight-bold">Manage Lokasi</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="/img/icon/map.png" alt />
      </div>
    </div>
    <router-link to="/dashboard/manage-task">
      <div class="row mt-4">
        <div class="col-9">
          <button class="btn btn-primary btn-block font-weight-bold">Manage Task</button>
        </div>
        <div class="col-3">
          <img width="30px" src="img/icon/invoice.png" alt />
        </div>
      </div>
    </router-link>
    <router-link to="/dashboard/manage-invoice">
      <div class="row mt-4">
        <div class="col-9">
          <button class="btn btn-primary btn-block font-weight-bold">Penagihan</button>
        </div>
        <div class="col-3">
          <img width="30px" src="img/icon/invoice.png" alt />
        </div>
      </div>
    </router-link>

    <router-link to="/dashboard/admin-message">
      <div class="row mt-4">
        <div class="col-9">
          <button class="btn btn-primary btn-block font-weight-bold">Pesan</button>
        </div>
        <div class="col-3">
          <img width="30px" src="img/icon/invoice.png" alt />
        </div>
      </div>
    </router-link>
  </div>
</template>
