<template>
  <div class="col-12 mt-5">
    <div class="card card-bg">
      <div class="card-body">
        <h5 class="text-center font-weight-bold mb-3">Unggah Laporan Anda</h5>
        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col">Before</th>
              <th scope="col">After</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="customCheck"
                    name="example1"
                  />
                  <label class="custom-control-label" for="customCheck"></label>
                </div>
              </th>
              <td>Floor</td>
              <td>
                <input type="file" />
              </td>
              <td>
                <input type="file" />
              </td>
            </tr>
            <tr>
              <th scope="row">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="customCheck"
                    name="example1"
                  />
                  <label class="custom-control-label" for="customCheck"></label>
                </div>
              </th>
              <td>Bathroom</td>
              <td>
                <input type="file" />
              </td>
              <td>
                <input type="file" />
              </td>
            </tr>
            <tr>
              <th scope="row">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="customCheck"
                    name="example1"
                  />
                  <label class="custom-control-label" for="customCheck"></label>
                </div>
              </th>
              <td>Toilet</td>
              <td>
                <input type="file" />
              </td>
              <td>
                <input type="file" />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer b-none row">
        <div class="col-1"></div>
        <div class="col-5">
          <button class="btn btn-primary btn-block">Kirim</button>
        </div>
        <div class="col-5">
          <button class="btn btn-primary btn-block">Batal</button>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
  </div>
</template>
