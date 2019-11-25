<template>
  <div>
    <div class="col-12 py-3 px-0">
      <div class="row text-right">
        <div class="col-12">
          <h5 class="text-center font-weight-bold mb-3">Manage Task</h5>
        </div>
        <div class="col-3"></div>
        <div class="col-9">
          <div class="row">
            <div class="col-6 pr-0">
              <select name id class="form-control input-sm">
                <option value>Report Task</option>
              </select>
            </div>
            <div class="col-6 pl-1">
              <select name id class="form-control input-sm">
                <option value>Custom Date</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 mb-2 px-0">
      <div class="row">
        <div class="col-3 pr-0">
          <button
            type="button"
            data-toggle="collapse"
            data-target="#addnew"
            aria-expanded="false"
            aria-controls="addnew"
            class="btn btn-success btn-block input-sm px-2"
          >add new</button>
        </div>
        <div class="col-9">
          <input type="text" placeholder="Cari task" class="form-control input-sm" />
        </div>
      </div>
    </div>
    <div class="col-12 px-0">
      <div class="collapse" id="addnew">
        <div class="card bg-transparent border-white">
          <div class="card-header bg-primary">
            <h4 class="m-0 font-weight-bold">Add new user</h4>
          </div>
          <div class="card-body">
            <div class="row my-2">
              <div class="col-3 pr-0">Name</div>
              <div class="col-9">
                <input type="text" class="form-control input-sm" />
              </div>
            </div>
            <div class="row my-2">
              <div class="col-3 pr-0">Name</div>
              <div class="col-9">
                <input type="text" class="form-control input-sm" />
              </div>
            </div>
            <div class="row my-2">
              <div class="col-3 pr-0">Name</div>
              <div class="col-9">
                <input type="text" class="form-control input-sm" />
              </div>
            </div>
            <div class="row my-2">
              <div class="col-3 pr-0">Name</div>
              <div class="col-9">
                <input type="text" class="form-control input-sm" />
              </div>
            </div>
            <div class="row my-2">
              <div class="col-3 pr-0">Name</div>
              <div class="col-9">
                <input type="text" class="form-control input-sm" />
              </div>
            </div>
            <div class="row my-2">
              <div class="col-3 pr-0">Name</div>
              <div class="col-9">
                <input type="text" class="form-control input-sm" />
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-3 pr-0"></div>
              <div class="col-9">
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-danger btn-block input-sm px-2">cancel</button>
                  </div>
                  <div class="col-6">
                    <button class="btn btn-success btn-block input-sm px-2">add</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 px-0 mt-2">
      <table class="table table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">#25011996K</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>
              <span>
                <i
                  class="fas fa-edit text-orange"
                  data-toggle="collapse"
                  data-target="#addnew"
                  aria-expanded="false"
                  aria-controls="addnew"
                ></i>
              </span> /
              <span>
                <i class="fas fa-trash-alt text-red"></i>
              </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-12 text-right p-0">
      <button class="btn btn-success input-sm px-2">Export to XLS</button>
    </div>
  </div>
</template>