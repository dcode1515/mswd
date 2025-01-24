<template>
  <div class="row">
     <div class="col-md-2">
  <div class="control float-left">
    <div class="input-group">
      <select v-model="tableData.length" @change="getData()" class="form-control">
        <option v-for="(records, index) in perPage" :key="index" :value="records">{{records}}</option>
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
                      class="modal fade"
                      :id="'viewmodal' + data.id"
                      tabindex="-1"
                      role="dialog"
                      aria-labelledby="exampleModalLabel"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                              View Details
                            </h5>
                            <button
                              type="button"
                              class="close"
                              data-dismiss="modal"
                              aria-label="Close"
                            >
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-12">
                                Profile #: {{ data.profile_no }}<br />
                                Name: {{ data.lastname }},{{ data.firstname }}
                                {{ data.middlename }} {{ data.extension }}<br />
                                Gender: {{ data.gender }}<br />
                                Barangay: {{ data.barangay }}<br />
                                Address: {{ data.address }}<br />
                                Birthdate: {{ data.birthdate }} - <b>Age:</b
                                >{{ data.age }} - <b> Age Category:</b>
                                {{ data.ageCategory }} <br />
                                LGBT: {{ data.lgbt }} <br />
                                Ethnicity: {{ data.ethnicity }} <br />
                                Disability: {{ data.disability }} <br />
                                Weight Status: {{ data.weightstatus }} <br />
                                Child Classification:
                                {{ data.childClassification }} <br />
                                Name of School: {{ data.nameofschool }} <br />
                                In School: {{ data.inschool }} <br /><br />

                                <b>Other Information (In Case of Emergency)</b>
                                <br />
                                Name: {{ data.nameofemergency }} <br />
                                Relation: {{ data.relationofemergency }} <br />
                                Contact: {{ data.contactnoofemergency }} <br />
                                Benefits Type: {{ data.benefitstype }} <br />
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button
                              type="button"
                              class="btn btn-secondary"
                              data-dismiss="modal"
                            >
                              Close
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </tr>
                </tbody>
              </datatable><br>
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
    getData(url = "/mswd/api/get/archived") {
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

