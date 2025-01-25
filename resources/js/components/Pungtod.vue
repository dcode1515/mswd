<template>
  <div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card" id="invoiceList">
          <div class="card-header border-0">
            <div class="d-flex align-items-center">
              <h5 class="card-title mb-0 flex-grow-1">List of All Profile - Kauswagan</h5>
            </div>
          </div>

          <div
            class="card-body bg-light-subtle border border-dashed border-start-0 border-end-0"
          >
            <form>
              <div class="row g-3">
                <div class="col-xxl-5 col-sm-12">
                  <div class="search-box">
                    <input
                      type="text"
                      class="form-control"
                      v-model="searchQuery"
                      @input="getDataProfile"
                      placeholder="Search..."
                    />
                    <i class="ri-search-line search-icon"></i>
                  </div>
                </div>

                <div class="col-xxl-3 col-sm-4">
                  <div class="input-light">
                    <select
                      class="form-control"
                      v-model="perPage"
                      @change="getDataProfile"
                    >
                      <option value="10">10 per page</option>
                      <option value="20">20 per page</option>
                      <option value="50">50 per page</option>
                      <option value="100">100 per page</option>
                    </select>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Profile No</th>
                    <th>Name</th>
                    <th>Birthdate</th>
                    <th>Gender</th>
                    <th>Barangay</th>
                    <th>Child Classification</th>
                    <th>Disability</th>
                    <th>School Level</th>
                    <th>4ps Member</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    v-for="(profile, index) in profiles.data"
                    :key="profile.id"
                  >
                    <td>
                      {{
                        (profiles.current_page - 1) * profiles.per_page +
                        index +
                        1
                      }}
                    </td>
                    <td>{{ profile.profile_no }}</td>
                    <td>
                      {{ profile.firstname }} {{ profile.middlename }},
                      {{ profile.lastname }}
                    </td>
                    <td>{{ profile.birthdate }}</td>
                    <td>{{ profile.gender }}</td>
                    <td>{{ profile.barangay }}</td>
                    <td>{{ profile.childClassification }}</td>
                    <td>{{ profile.disability }}</td>
                    <td>{{ profile.schoollevel }}</td>
                    <td>{{ profile.forpsno }}</td>
                    <td>{{ profile.status }}</td>
                      <td>
                      <a :href="'/mswd/view/'+ profile.id"
                        class="btn btn-sm btn-primary"
                        title="View"
                      >
                        <i class="fas fa-eye"></i>
                      </a>
                      <button
                        @click="archiveProfile(profile.id)"
                        class="btn btn-sm btn-danger ml-2"
                        title="Delete"
                      >
                        <i class="fas fa-trash"></i>
                      </button>
                    </td>
                    <!-- <td>
                      <button
                        @click="viewProfile(profile)"
                        class="btn btn-sm btn-primary"
                        title="View"
                      >
                        <i class="fas fa-eye"></i>
                      </button>
                      <button
                        @click="deleteProfile(profile.id)"
                        class="btn btn-sm btn-danger ml-2"
                        title="Delete"
                      >
                        <i class="fas fa-trash"></i>
                      </button>
                    </td> -->
                  </tr>
                </tbody>
              </table>
              <nav v-if="profiles.total > profiles.per_page">
                <ul class="pagination justify-content-end">
                  <li
                    class="page-item"
                    :class="{ disabled: profiles.current_page === 1 }"
                  >
                    <a
                      class="page-link"
                      href="#"
                      @click.prevent="changePage(profiles.current_page - 1)"
                    >
                      <i class="fas fa-chevron-left"></i>
                    </a>
                  </li>
                  <li
                    class="page-item"
                    v-for="page in profiles.last_page"
                    :key="page"
                    :class="{ active: page === profiles.current_page }"
                  >
                    <a
                      class="page-link"
                      href="#"
                      @click.prevent="changePage(page)"
                      >{{ page }}</a
                    >
                  </li>
                  <li
                    class="page-item"
                    :class="{
                      disabled: profiles.current_page === profiles.last_page,
                    }"
                  >
                    <a
                      class="page-link"
                      href="#"
                      @click.prevent="changePage(profiles.current_page + 1)"
                    >
                      <i class="fas fa-chevron-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Viewing Profile -->
    <div
      class="modal fade"
      id="viewProfileModal"
      tabindex="-1"
      aria-labelledby="viewProfileModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewProfileModalLabel">
              Profile Details
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="row g-3">
                <!-- Personal Information -->
                <div class="col-md-6">
                  <label for="profileNo" class="form-label">Profile No</label>
                  <input
                    type="text"
                    class="form-control"
                    id="profileNo"
                    v-model="formData.profile_no"
                    readonly
                  />
                </div>
                <div class="col-md-6">
                  <label for="firstname" class="form-label">First Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstname"
                    v-model="formData.firstname"
                    readonly
                  />
                </div>
                <div class="col-md-6">
                  <label for="middlename" class="form-label">Middle Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="middlename"
                    v-model="formData.middlename"
                    readonly
                  />
                </div>
                <div class="col-md-6">
                  <label for="lastname" class="form-label">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lastname"
                    v-model="formData.lastname"
                    readonly
                  />
                </div>
                <div class="col-md-6">
                  <label for="birthdate" class="form-label">Birthdate</label>
                  <input
                    type="text"
                    class="form-control"
                    id="birthdate"
                    v-model="formData.birthdate"
                    readonly
                  />
                </div>
                <div class="col-md-6">
                  <label for="gender" class="form-label">Gender</label>
                  <input
                    type="text"
                    class="form-control"
                    id="gender"
                    v-model="formData.gender"
                    readonly
                  />
                </div>
                <div class="col-md-6">
                  <label for="barangay" class="form-label">Barangay</label>
                  <input
                    type="text"
                    class="form-control"
                    id="barangay"
                    v-model="formData.barangay"
                    readonly
                  />
                </div>

                <!-- Child Classification and School Details -->
                <div class="col-md-6">
                  <label for="childClassification" class="form-label"
                    >Child Classification</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="childClassification"
                    v-model="formData.childClassification"
                    readonly
                  />
                </div>
                <div
                  class="col-md-6"
                  v-if="formData.childClassification === 'In School Youth'"
                >
                  <label for="nameofschool" class="form-label"
                    >Type of School</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="nameofschool"
                    v-model="formData.inschool"
                    readonly
                  />
                </div>
                <div
                  class="col-md-6"
                  v-if="formData.childClassification === 'In School Youth'"
                >
                  <label for="schoollevel" class="form-label"
                    >School Level</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="schoollevel"
                    v-model="formData.schoollevel"
                    readonly
                  />
                </div>

                <!-- Additional Information -->
                <div class="col-md-6">
                  <label for="disability" class="form-label">Disability</label>
                  <input
                    type="text"
                    class="form-control"
                    id="disability"
                    v-model="formData.disability"
                    readonly
                  />
                </div>
                <div class="col-md-6">
                  <label for="forpsno" class="form-label">4ps Member</label>
                  <input
                    type="text"
                    class="form-control"
                    id="forpsno"
                    v-model="formData.forpsno"
                    readonly
                  />
                </div>
                <div class="col-md-6">
                  <label for="status" class="form-label">Status</label>
                  <input
                    type="text"
                    class="form-control"
                    id="status"
                    v-model="formData.status"
                    readonly
                  />
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      profiles: {
        data: [],
        current_page: 1,
        last_page: 1,
        per_page: 10,
        total: 0,
      },
      formData: {
        profile_no: "",
        firstname: "",
        middlename: "",
        lastname: "",
        birthdate: "",
        gender: "",
        barangay: "",
        childClassification: "",
        inschool: "",
        schoollevel: "",
        disability: "",
        forpsno: "",
        status: "",
      },
      perPage: 10,
      searchQuery: "",
    };
  },
  methods: {
    async getDataProfile() {
      try {
        const response = await axios.get("/mswd/api/get/data/pungtod", {
          params: {
            page: this.profiles.current_page,
            per_page: this.perPage,
            search: this.searchQuery,
          },
        });
        this.profiles = response.data.data;
      } catch (error) {
        console.error("Error fetching Profile data:", error);
      }
    },
    viewProfile(profile) {
      // Populate formData with the selected profile's data
      this.formData = { ...profile };
      // Open the modal
      new bootstrap.Modal(document.getElementById("viewProfileModal")).show();
    },
    changePage(page) {
      if (page >= 1 && page <= this.profiles.last_page) {
        this.profiles.current_page = page;
        this.getDataProfile();
      }
    },
  },
  created() {
    this.getDataProfile();
  },
  mounted() {
    console.log("Component Mounted");
  },
};
</script>

<style scoped>
.centered {
  text-align: center;
}

.pdf-icon {
  font-size: 18px;
  margin-right: 8px;
}

.print-icon {
  font-size: 18px;
  margin-right: 8px;
}

.icon {
  font-size: 18px;
  margin-right: 8px;
}

.custom-modal-size {
  max-width: 1200px;
}
</style>