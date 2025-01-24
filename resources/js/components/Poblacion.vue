<template>
  <div class="row">
    <div class="col-md-2">
      <div class="control float-left">
        <div class="input-group">
          <select
            v-model="tableData.length"
            @change="getData()"
            class="form-control"
          >
            <option
              v-for="(records, index) in perPage"
              :key="index"
              :value="records"
            >
              {{ records }}
            </option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="ibox-body">
        <div class="col-md-12">
          <div class="col-md-12 d-flex justify-content-end">
            <div class="control float-right">
              <div class="input-group">
                <input
                  class="input form-control"
                  type="text"
                  v-model="tableData.search"
                  placeholder="Search"
                  @input="getData()"
                />
              </div>
            </div>
          </div>
        </div>
        <br />
        <div class="table-responsive">
          <datatable
            :columns="columns"
            :sortKey="sortKey"
            :sortOrders="sortOrders"
            @sort="sortBy"
          >
            <tbody>
              <tr v-for="data in data" :key="data.id">
                <td>{{ data.profile_no }}</td>
                <td>
                  {{ data.lastname }},{{ data.firstname }}
                  {{ data.middlename }} {{ data.extension }}
                </td>
                <td>
                  {{ data.birthdate }}<br />
                  <b>Age:</b> {{ data.age }}
                </td>

                <td>{{ data.ageCategory }}</td>
                <td>{{ data.gender }}</td>
                <td>{{ data.barangay }}</td>
                <td>{{ data.address }}</td>
                <td>{{ data.status }}</td>
                <td>
                      <a v-bind:href="'/mswd/view/profile/' + data.id" class="btn btn-danger">View</a> 
                </td>
                <div
            class="modal fade modal-bookmark"
            :id="'exampleModal' + data.id"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    Profile #: {{ data.profile_no }}
                  </h5>
                  <button
                    class="btn-close"
                    type="button"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="task-title">Lastname</label>
                      <input
                        class="form-control"
                        id="task-title"
                        :value="data.lastname"
                        type="text"
                        required=""
                        autocomplete="off"
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Firstname</label>
                      <input
                        class="form-control"
                        id="task-title"
                        :value="data.firstname"
                        type="text"
                        required=""
                        autocomplete="off"
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Middlename</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.middlename"
                        required=""
                        autocomplete="off"
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Extension</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.extension"
                        required=""
                        autocomplete="off"
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Gender</label>
                      <select class="form-control" :value="data.gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Birthdate</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="date"
                        :value="data.birthdate"
                        required=""
                        autocomplete="off"
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Age</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.age"
                        disabled
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Age Category</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.ageCategory"
                        disabled
                      />
                    </div>

                    <template v-if="data.ageCategory == '13-18'">
                      <div class="form-group col-md-12">
                        <label for="task-title">LGBT</label>
                        <input
                          class="form-control"
                          id="task-title"
                          type="text"
                          :value="data.ageCategory"
                          disabled
                        />
                      </div>
                    </template>
                    <template
                      v-if="
                        data.ageCategory == '5-12' ||
                        data.ageCategory == '0-2' ||
                        data.ageCategory == '3-4'
                      "
                    >
                      <div class="form-group col-md-12">
                        <label for="task-title">Weight Status</label>
                        <select class="form-control" :value="data.weightstatus">
                          <option value="Obese">Obese</option>
                          <option value="Stunted">Stunted</option>
                          <option value="Stunted">Wasted</option>
                          <option value="Overweight">Overweight</option>
                        </select>
                      </div>
                    </template>
                    <template
                      v-if="
                        data.ageCategory == '5-12' ||
                        data.ageCategory == '13-18'
                      "
                    >
                      <div class="form-group col-md-3">
                        <label for="task-title">Child Classification</label>
                        <select
                          class="form-control"
                          :value="data.childClassification"
                        >
                          <option disabled value="">
                            Select Child Classification
                          </option>
                          <option value="In School Youth">
                            In School Youth
                          </option>
                          <option value="Out of School Youth">
                            Out of School Youth
                          </option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="task-title">Type of School</label>
                        <select class="form-control" :value="data.typeofschool">
                          <option disabled value="">
                            Select Name of School
                          </option>
                          <option value="Private">Private</option>
                          <option value="Public">Public</option>
                          <option value="ALS">ALS</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="task-title">School Level</label>
                        <select class="form-control" :value="data.schoollevel">
                          <option value="Day Care">Day Care</option>
                          <option value="Elementary">Elementary</option>
                          <option value="High School">High School</option>
                          <option value="Senior High">Senior High</option>
                          <option value="College Level">College Level</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="task-title">Name of School</label>
                        <input
                          class="form-control"
                          id="task-title"
                          type="text"
                          :value="data.nameofschool"
                        />
                      </div>
                    </template>
                    <div class="form-group col-md-12">
                      <label for="task-title">Barangay</label>
                      <select  class="form-control" :value="data.barangay">
                        <option disabled value="">Select Barangay</option>
                        <option value="BRITANIA">BRITANIA</option>
                        <option value="BUATONG">BUATONG</option>
                        <option value="BUHISAN">BUHISAN</option>
                        <option value="GATA">GATA</option>
                        <option value="HORNASAN">HORNASAN</option>
                        <option value="JANIPAAN">JANIPAAN</option>
                        <option value="KAUSWAGAN">KAUSWAGAN</option>
                        <option value="OTIEZA">OTIEZA</option>
                        <option value="POBLACION">POBLACION</option>
                        <option value="PUNGTOD">PUNGTOD</option>
                        <option value="PONG-ON">PONG-ON</option>
                        <option value="SALVACION">SALVACION</option>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="task-title">Address</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.address"
                      />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="task-title">Adolescent Matter</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.adolescent"
                      />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="task-title">Ethnicity</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.ethnicity"
                      />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="task-title">Disability</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.disability"
                      />
                    </div>

                    <div class="form-group col-md-4">
                      <label for="task-title">Name of Relation</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.nameofemergency"
                      />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="task-title">Relation</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.relationofemergency"
                      />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="task-title">Contact Number:</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.contactnoofemergency"
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="task-title">4p's Member</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.benefitstype"
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="task-title">4p's No</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.forpsno"
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="task-title">Philhealth Member</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.Philhealth"
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="task-title">Philhealth No</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                        :value="data.Philhealth_no"
                      />
                    </div>
                  </div>
                  <button
                    class="btn btn-primary"
                    type="button"
                    data-bs-dismiss="modal"
                  >
                    Update Profile
                  </button>
                  <button class="btn btn-secondary" @click="archive(data.id)">
                    Archive
                  </button>
                </div>
              </div>
            </div>
          </div>
              </tr>
            </tbody> </datatable
          ><br />
          <pagination
            :pagination="pagination"
            @prev="getData(pagination.prevPageUrl)"
            @next="getData(pagination.nextPageUrl)"
          >
          </pagination>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Datatable from "./Datatable.vue";
import Pagination from "./Pagination.vue";

export default {
  components: { datatable: Datatable, pagination: Pagination },
  methods: {
    archive(id) {
      Swal.fire({
        title: "Are you sure want to Archive this Record?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Archive it!",
      }).then((result) => {
        if (result.isConfirmed) {
          axios.post(`/mswd/api/archive/${id}`).then((response) => {});

          Swal.fire("Success!", "Record has been Archived.", "success").then(
            function () {
              window.location.href = "/mswd/all-records";
            }
          );
        }
      });
      console.log(id);
    },
    getData(url = "/mswd/api/get/data/poblacion") {
      this.tableData.draw++;
      axios
        .get(url, { params: this.tableData })
        .then((response) => {
          let data = response.data;
          if (this.tableData.draw == data.draw) {
            this.data = data.data.data;
            this.configPagination(data.data);
          }
        })
        .catch((errors) => {
          console.log(errors);
        });
    },
    configPagination(data) {
      this.pagination.lastPage = data.last_page;
      this.pagination.currentPage = data.current_page;
      this.pagination.total = data.total;
      this.pagination.lastPageUrl = data.last_page_url;
      this.pagination.nextPageUrl = data.next_page_url;
      this.pagination.prevPageUrl = data.prev_page_url;
      this.pagination.from = data.from;
      this.pagination.to = data.to;
    },
    sortBy(key) {
      this.sortKey = key;
      this.sortOrders[key] = this.sortOrders[key] * -1;
      this.tableData.column = this.getIndex(this.columns, "name", key);
      this.tableData.dir = this.sortOrders[key] === 1 ? "asc" : "desc";
      this.getData();
    },
    getIndex(array, key, value) {
      return array.findIndex((i) => i[key] == value);
    },
  },

  mounted() {
    console.log("Component Mounted");
    this.getData();
  },
  data() {
    let sortOrders = {};
    let columns = [
      { width: "8%", label: "PROFILE NO", name: "profile_no" },
      { width: "15", label: "NAME", no: "name" },
      { width: "7%", label: "BIRTHDATE", name: "bdate" },

      { width: "9%", label: "AGE CATEGORY", name: "ageCategry" },
      { width: "8%", label: "GENDER", name: "Gender" },
      { width: "12%", label: "BARANGAY", name: "barangay" },
      { width: "20%", label: "ADDRESS", name: "address" },
      { width: "5%", label: "STATUS", name: "status" },
      { width: "15%", label: "ACTION", name: "action" },
    ];
    columns.forEach((column) => {
      sortOrders[column.name] = -1;
    });
    return {
      page: 10,
      data: [],
      length: 10,
      search: "",
      assign: [],
      selected_user: [],
      current_page: [],
      error: "",
      columns: columns,
      sortKey: "lastname",
      sortOrders: sortOrders,
      perPage: ["10", "20", "30"],
      tableData: {
        draw: 0,
        length: 10,
        search: "",
        column: 0,
        dir: "asc",
      },
      pagination: {
        lastPage: "",
        currentPage: "",
        total: "",
        lastPageUrl: "",
        nextPageUrl: "",
        prevPageUrl: "",
        from: "",
        to: "",
      },
    };
  },
};
</script>

<style scoped>
td {
  text-transform: uppercase;
}
</style>

