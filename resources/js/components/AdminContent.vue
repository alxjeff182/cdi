<template>
  <div class="card-body">
    <div class="row">
      <div class="col-9">
        <router-link to="/dashboard/manage-user">
          <button class="btn btn-primary btn-block font-weight-bold">Manage User</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="img/icon/manage-user.png" alt />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-9">
        <router-link to="/dashboard/manage-location">
          <button class="btn btn-primary btn-block font-weight-bold">Manage Lokasi</button>
        </router-link>
      </div>
      <div class="col-3">
        <img width="30px" src="/img/icon/manage-location.png" alt />
      </div>
    </div>
    <router-link to="/dashboard/manage-task">
      <div class="row mt-4">
        <div class="col-9">
          <button class="btn btn-primary btn-block font-weight-bold">Manage Task</button>
        </div>
        <div class="col-3">
          <img width="30px" src="img/icon/manage-task.png" alt />
        </div>
      </div>
    </router-link>
    <router-link to="/dashboard/manage-assignment">
      <div class="row mt-4">
        <div class="col-9">
          <button class="btn btn-primary btn-block font-weight-bold">Assign Job</button>
        </div>
        <div class="col-3">
          <img width="30px" src="img/icon/manage-assignment.png" alt />
        </div>
      </div>
    </router-link>
    <router-link to="/dashboard/manage-invoice">
      <div class="row mt-4">
        <div class="col-9">
          <button class="btn btn-primary btn-block font-weight-bold">Penagihan</button>
        </div>
        <div class="col-3">
          <img width="30px" src="img/icon/manage-invoice.png" alt />
        </div>
      </div>
    </router-link>

    <router-link to="/dashboard/manage-message">
      <div class="row mt-4">
        <div class="col-9">
          <button class="btn btn-primary btn-block font-weight-bold">Pesan</button>
        </div>
        <div class="col-3">
          <img width="30px" src="img/icon/manage-message.png" alt />
        </div>
      </div>
    </router-link>
  </div>
</template>
