<template>
  <div class="row" v-if="this.$route.path == '/dashboard'">
    <div class="col-12 text-right font-weight-bold f-12 py-2">Selasa, 19/11/2019</div>
    <div class="col-2"></div>
    <div class="col-10">
      <div class="card">
        <div class="card-body pt-2">
          <p style=" margin-left: -31px">
            <button class="btn-left">
              <a href="#">Broadcast Message</a>
            </button>
          </p>Dikarenakan adanya pemilu pada tanggal 17 April, CS yang
          bertugas pada shift 1 boleh masuk jam 12.00
          <p class="text-right font-weight-bold m-0">Yunardi, HR Dept</p>
        </div>
      </div>
    </div>
  </div>
</template>
