<template>
  <div>
    <div class="col-12 py-3 px-0">
      <div class="row text-right">
        <div class="col-12">
          <h5 class="text-center font-weight-bold mb-3">Tagihan Client</h5>
        </div>
        <div class="col-2"></div>
        <div class="col-5 pr-0">
          <select name id class="form-control input-sm">
            <option value>Report Task</option>
          </select>
        </div>
        <div class="col-5 pl-1">
          <select name id class="form-control input-sm">
            <option value>Custom Date</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-12 mb-2 px-0">
      <input type="text" placeholder="Cari task" class="form-control input-sm" />
    </div>
    <div class="col-12 px-0">
      <table class="table table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-12 text-right p-0">
      <button class="btn btn-success input-sm px-2">Export to XLS</button>
    </div>
  </div>
</template>