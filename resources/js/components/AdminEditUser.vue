<template>
  <div>
    <div class="col-12 py-3 px-0">
      <div class="row text-right">
        <div class="col-12">
          <h5 class="text-center font-weight-bold mb-3">Manage User</h5>
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
            @click="newModal"
          >add new</button>
        </div>
        <div class="col-9">
          <input type="text" placeholder="Cari user" class="form-control input-sm" />
        </div>
      </div>
    </div>
    <div class="col-12 px-0">
      <div class="collapse" id="addnew">
        <div class="card bg-transparent border-white">
          <div class="card-header bg-primary">
            <h4 class="m-0 font-weight-bold" v-show="!editmode">Add new user</h4>
            <h4 class="m-0 font-weight-bold" v-show="editmode">Edit user</h4>
          </div>
          <div class="card-body">
            <form @submit.prevent="editmode ? updateUser() : createUser()">
              <div class="row my-2">
                <div class="col-3 pr-0">No ID</div>
                <div class="col-9">
                  <input
                    v-model="form.userNo"
                    type="text"
                    name="userNo"
                    placeholder="No ID"
                    class="form-control input-sm"
                    :class="{ 'is-invalid': form.errors.has('userNo') }"
                  />
                  <has-error :form="form" field="userNo"></has-error>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-3 pr-0">Name</div>
                <div class="col-9">
                  <input
                    v-model="form.name"
                    type="text"
                    name="name"
                    placeholder="Nama Lengkap"
                    class="form-control input-sm"
                    :class="{ 'is-invalid': form.errors.has('name') }"
                  />
                  <has-error :form="form" field="name"></has-error>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-3 pr-0">Tanggal Lahir</div>
                <div class="col-9">
                  <input
                    v-model="form.dateOfBirth"
                    type="text"
                    name="dateOfBirth"
                    placeholder="Tanggal Lahir"
                    class="form-control input-sm"
                    :class="{ 'is-invalid': form.errors.has('dateOfBirth') }"
                  />
                  <has-error :form="form" field="dateOfBirth"></has-error>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-3 pr-0">No Telp.</div>
                <div class="col-9">
                  <input
                    v-model="form.phoneNumber"
                    type="text"
                    name="phoneNumber"
                    placeholder="No Telp."
                    class="form-control input-sm"
                    :class="{ 'is-invalid': form.errors.has('phoneNumber') }"
                  />
                  <has-error :form="form" field="phoneNumber"></has-error>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-3 pr-0">Alamat Lengkap</div>
                <div class="col-9">
                  <textarea
                    v-model="form.address"
                    type="text"
                    name="address"
                    placeholder="Alamt Lengkap"
                    class="form-control input-sm"
                    :class="{ 'is-invalid': form.errors.has('address') }"
                  ></textarea>
                  <has-error :form="form" field="address"></has-error>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-3 pr-0">No. KTP</div>
                <div class="col-9">
                  <input
                    v-model="form.noKtp"
                    type="text"
                    name="noKtp"
                    placeholder="No. KTP"
                    class="form-control input-sm"
                    :class="{ 'is-invalid': form.errors.has('noKtp') }"
                  />
                  <has-error :form="form" field="noKtp"></has-error>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-3 pr-0">Jenis Kelamin</div>
                <div class="col-9">
                  <select
                    name="gender"
                    v-model="form.gender"
                    id="gender"
                    class="form-control input-sm"
                    :class="{ 'is-invalid': form.errors.has('gender') }"
                  >
                    <option value>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-3 pr-0">Email</div>
                <div class="col-9">
                  <input
                    v-model="form.email"
                    type="email"
                    name="email"
                    placeholder="Alamat Email"
                    class="form-control input-sm"
                    :class="{ 'is-invalid': form.errors.has('email') }"
                  />
                  <has-error :form="form" field="email"></has-error>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-3 pr-0">Password</div>
                <div class="col-9">
                  <input
                    v-model="form.password"
                    type="password"
                    name="password"
                    class="form-control input-sm"
                    :class="{ 'is-invalid': form.errors.has('password') }"
                  />
                  <has-error :form="form" field="password"></has-error>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-3 pr-0">Role</div>
                <div class="col-9">
                  <select
                    name="role"
                    v-model="form.role"
                    id="role"
                    class="form-control input-sm"
                    :class="{ 'is-invalid': form.errors.has('role') }"
                  >
                    <option value>Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="cleaner">Cleaner</option>
                    <option value="customer">Customer</option>
                  </select>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-3 pr-0">Profile Picture</div>
                <div class="col-9">
                  <input
                    @change="selectImage"
                    type="file"
                    name="profilePicture"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('profilePicture') }"
                  />
                  <has-error :form="form" field="profilePicture"></has-error>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-3 pr-0"></div>
                <div class="col-3"></div>
                <div class="col-3">
                  <div class="text-center bg-white" id="preview">
                    <img v-if="url" :src="url" class="w-100" />
                  </div>
                </div>
                <div class="col-3"></div>
              </div>

              <div class="row mt-2">
                <div class="col-3 pr-0"></div>
                <div class="col-9">
                  <div class="row">
                    <div class="col-6">
                      <button
                        data-toggle="collapse"
                        data-target="#addnew"
                        aria-expanded="false"
                        aria-controls="addnew"
                        class="btn btn-danger btn-block input-sm px-2"
                      >cancel</button>
                    </div>
                    <div class="col-6">
                      <button
                        type="submit"
                        v-show="!editmode"
                        class="btn btn-success btn-block input-sm px-2"
                      >add</button>
                      <button
                        type="submit"
                        v-show="editmode"
                        class="btn btn-success btn-block input-sm px-2"
                      >update</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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
          <tr v-for="user in users.data" :key="user.idUser">
            <th>{{user.userNo}}</th>
            <td>{{user.name}}</td>
            <td>{{user.email}}</td>
            <td>
              <span>
                <i
                  class="fas fa-edit text-orange"
                  data-toggle="collapse"
                  data-target="#addnew"
                  aria-expanded="false"
                  aria-controls="addnew"
                  @click="editModal(user)"
                ></i>
              </span> /
              <span>
                <a @click="deleteUser(user.idUser)">
                  <i class="fas fa-trash-alt text-red"></i>
                </a>
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

<script>
export default {
  data() {
    return {
      url: "",
      editmode: false,
      users: {},
      form: new Form({
        userNo: "",
        name: "",
        dateOfBirth: "",
        phoneNumber: "",
        address: "",
        noKtp: "",
        gender: "",
        email: "",
        password: "",
        role: "",
        profilePicture: ""
      })
    };
  },
  methods: {
    selectImage(e) {
      //console.log('upload');
      let file = e.target.files[0];
      this.url = URL.createObjectURL(file);
      console.log(file);
      let reader = new FileReader();
      if (file["size"] < 1000000) {
        reader.onloadend = file => {
          //console.log('RESULT', reader.result)
          this.form.profilePicture = reader.result;
        };
        reader.readAsDataURL(file);
      } else {
        Swal("Oops", "max file size 1mb to upload", "error");
      }
    },
    getResults(page = 1) {
      axios.get("/api/user?page=" + page).then(response => {
        this.users = response.data;
      });
    },
    updateUser() {
      this.$Progress.start();
      // console.log('Editing data');
      this.form
        .put("/api/user/" + this.form.id)
        .then(() => {
          // success
          $("#addNew").modal("hide");
          Swal.fire("Updated!", "Information has been updated.", "success");
          this.$Progress.finish();
          Reload.$emit("AfterCreate");
        })
        .catch(() => {
          this.$Progress.fail();
        });
    },
    editModal(user) {
      this.editmode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(user);
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $("#addNew").modal("show");
    },
    deleteUser(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        // Send request to the server
        if (result.value) {
          this.form
            .delete("/api/user/" + id)
            .then(() => {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              Reload.$emit("AfterCreate");
            })
            .catch(() => {
              Swal.fire("Failed!", "There was something wronge.", "warning");
            });
        }
      });
    },
    loadUsers() {
      if (this.$gate.isAdmin()) {
        axios.get("/api/user").then(({ data }) => (this.users = data));
      }
    },
    createUser() {
      this.$Progress.start();
      this.form
        .post("/api/user")
        .then(() => {
          Reload.$emit("AfterCreate");
          $("#addNew").modal("hide");
          toast({
            type: "success",
            title: "User Created in successfully"
          });
          this.$Progress.finish();
        })
        .catch(() => {});
    }
  },
  created() {
    Reload.$on("searching", () => {
      if (this.$gate.isAdmin()) {
        let query = this.$parent.search;
        axios
          .get("/api/findUser?q=" + query)
          .then(data => {
            this.users = data.data;
          })
          .catch(() => {});
      }
    });
    this.loadUsers();
    Reload.$on("AfterCreate", () => {
      this.loadUsers();
    });
  }
};
</script>