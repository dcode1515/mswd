<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="form theme-form">
              <div class="row">
                <h5>Profile Number : {{ profileno }}</h5>
                <br /><br />
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Lastname</label>
                    <input
                      v-model="lastname"
                      class="form-control"
                      type="text"
                      placeholder="Enter project Rate"
                    />
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Firstname</label>
                    <input
                      v-model="firstname"
                      class="form-control"
                      type="text"
                      placeholder="Enter project Rate"
                    />
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Middlename</label>
                    <input
                      v-model="middlename"
                      class="form-control"
                      type="text"
                      placeholder="Enter project Rate"
                    />
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Extension</label>
                    <input
                      v-model="extension"
                      class="form-control"
                      type="text"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Gender</label>
                    <select class="form-select" v-model="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Birthdate</label>
                    <input
                      class="datepicker-here form-control"
                      type="text"
                      v-model="birthdate"
                      data-language="en"
                    />
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Age</label>
                    <input
                      class="datepicker-here form-control"
                      type="text"
                      v-model="age"
                      disabled
                    />
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Age Category</label>
                    <input
                      class="form-control"
                      type="text"
                      v-model="agecategory"
                      disabled
                    />
                  </div>
                </div>
                <template v-if="age >= 15 && age <= 18">
                  <div class="col-sm-3">
                    <div class="mb-3">
                      <label>LGBT</label>
                      <select
                        v-model="lgbt"
                        class="form-control"
                        style="text-transform: uppercase"
                      >
                        <option disabled value="">Select LGBT</option>
                        <option value="NO">NO</option>
                        <option value="YES">YES</option>
                      </select>
                    </div>
                  </div>
                </template>

                <template v-if="age >= 0 && age <= 5">
                  <div class="col-sm-3">
                    <div class="mb-3">
                      <label>Weight Status</label>
                      <select
                        v-model="weightstatus"
                        class="form-control"
                        style="text-transform: uppercase"
                      >
                        <option disabled value="">Select Weight Status</option>
                        <option value="Obese">Obese</option>
                        <option value="Stunted">Stunted</option>
                        <option value="Wasted">Wasted</option>
                        <option value="Overweight">Overweight</option>
                      </select>
                    </div>
                  </div>
                </template>

                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Child Classification</label>
                    <select v-model="childclassification" class="form-control">
                      <option disabled value="">
                        Select Child Classification
                      </option>
                      <option value="In School Youth">In School Youth</option>
                      <option value="Out of School Youth">
                        Out of School Youth
                      </option>
                    </select>
                  </div>
                </div>

                <template v-if="childclassification == 'In School Youth'">
                  <div class="col-sm-3">
                    <div class="mb-3">
                      <label>Type of School</label>
                      <select v-model="inschool" class="form-control">
                        <option disabled value="">
                          Select Child Classification
                        </option>
                        <option value="Private">Private</option>
                        <option value="Public">Public</option>
                        <option value="Public">ALS</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="mb-3">
                      <label>School Level</label>
                      <select v-model="schoollevel" class="form-control">
                        <option disabled value="">
                          Select Child Classification
                        </option>
                        <option value="Day Care">Day Care</option>
                        <option value="Elementary">Elementary</option>
                        <option value="High School">High School</option>
                        <option value="Senior High">Senior High</option>
                        <option value="Senior High">College Level</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="mb-3">
                      <label>Name of School</label>
                      <input
                        type="text"
                        class="form-control"
                        v-model="nameofschool"
                      />
                    </div>
                  </div>
                </template>
                <template v-else> </template>

                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Barangay</label>
                     <select v-model="barangay" class="form-control">
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
                </div>
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Address</label>
                    <input class="form-control" type="text" v-model="address" />
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Adolescent Matter</label>
                    <select class="form-select" v-model="adolescent">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Ethnicity</label>
                    <input
                      class="form-control"
                      type="text"
                      v-model="ethnicity"
                    />
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Disablity</label>
                    <select class="form-select" v-model="disability">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>
                <br />
              </div>
              <p><b>Other Information (In Case of Emergency)</b></p>

              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Name</label>
                    <input
                      class="form-control"
                      type="text"
                      v-model="nameofemergency"
                    />
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Relation</label>
                    <input
                      class="form-control"
                      type="text"
                      v-model="relationofemergency"
                    />
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Contact Number</label>
                    <input
                      class="form-control"
                      type="text"
                      v-model="contactnoofemergency"
                    />
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>4p's Member</label>
                    <select class="form-select" v-model="benefitstype">
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                </div>
               <template v-if="benefitstype=='YES'">
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>4p's No</label>
                    <input class="form-control" type="text" v-model="forpsno" />
                  </div>
                </div>
             </template>   
             
               
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Philhealth Member</label>
                    <select class="form-select" v-model="philhealth">
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                </div>
            <template v-if="philhealth=='YES'">
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label>Philhealth No</label>
                    <input
                      class="form-control"
                      type="text"
                      v-model="philhealthno"
                    />
                  </div>
                </div>
            </template>   
            
          
              </div>
              <br />

              <div class="row">
                <div class="col">
                  <div class="text-center">
                    <button
                      class="btn btn-success me-3"
                      @click="update_profile(id)"
                    >
                      Update Profile</button
                    ><button class="btn btn-warning" @click="archive(id)">
                      Archive
                    </button>
                    <a class="btn btn-danger" v-bind:href="'/mswd/all-records'">Back</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
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
    update_profile(id) {
      Swal.fire({
        title: "Are you sure want to Update this Record?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Update it!",
      }).then((result) => {
        if (result.isConfirmed) {
          const data = {
            lastname: this.lastname,
            middlename: this.middlename,
            firstname: this.firstname,
            extension: this.extension,
            birthdate: this.birthdate,
            age: this.age,
            agecategory: this.agecategory,
            lgbt: this.lgbt,
            weightstatus: this.weightstatus,
            childclassification: this.childclassification,
            nameofschool: this.nameofschool,
            inschool: this.inschool,
            schoollevel: this.schoollevel,
            nameofemergency: this.nameofemergency,
            relationofemergency: this.relationofemergency,
            contactnoofemergency: this.contactnoofemergency,
            benefitstype: this.benefitstype,
            gender: this.gender,
            barangay: this.barangay,
            address: this.address,
            adolescent: this.adolescent,
            ethnicity: this.ethnicity,
            typeofschool: this.typeofschool,
            disability: this.disability,
            forpsno: this.forpsno,
            philhealth: this.philhealth,
            philhealthno: this.philhealthno,
            
          };
          axios
            .post(`/mswd/api/update/profile/${id}`, data)
            .then((response) => {});
          Swal.fire("Success!", "Record has been Archived.", "success").then(
            function () {
              window.location.href = "/mswd/view/profile/" + id;
            }
          );
        }
      });
      console.log(id);
    },
  },
  props: {
    id: {
      type: String,
      required: true,
    },
    profileno: {
      type: String,
      required: true,
    },
    lastname: {
      type: String,
      required: true,
    },
    middlename: {
      type: String,
      required: true,
    },
    firstname: {
      type: String,
      required: true,
    },
    extension: {
      type: String,
      required: true,
    },
    birthdate: {
      type: String,
      required: true,
    },
    age: {
      type: String,
      required: true,
    },
    agecategory: {
      type: String,
      required: true,
    },
    lgbt: {
      type: String,
      required: true,
    },
    weightstatus: {
      type: String,
      required: true,
    },
    childclassification: {
      type: String,
      required: true,
    },
    nameofschool: {
      type: String,
      required: true,
    },
    inschool: {
      type: String,
      required: true,
    },
    schoollevel: {
      type: String,
      required: true,
    },
    nameofemergency: {
      type: String,
      required: true,
    },
    relationofemergency: {
      type: String,
      required: true,
    },
    contactnoofemergency: {
      type: String,
      required: true,
    },
    benefitstype: {
      type: String,
      required: true,
    },
    gender: {
      type: String,
      required: true,
    },
    barangay: {
      type: String,
      required: true,
    },
    address: {
      type: String,
      required: true,
    },
    adolescent: {
      type: String,
      required: true,
    },
    ethnicity: {
      type: String,
      required: true,
    },
    typeofschool: {
      type: String,
      required: true,
    },
    disability: {
      type: String,
      required: true,
    },
    forpsno: {
      type: String,
      required: true,
    },
    philhealth: {
      type: String,
      required: true,
    },
    philhealthno: {
      type: String,
      required: true,
    },
  },

  data() {
    return {};
  },

  mounted() {
    console.log("Component Mounted");
  },
   computed: {
    agecategory2() {
      if (this.age >= 0 && this.age <= 2) {
        return "0-2";
      } else if (this.age >= 3 && this.age <= 4) {
        return "3-4";
      } else if (this.age >= 5 && this.age <= 12) {
        return "5-12";
      } else if (this.age >= 13 && this.age <= 18) {
        return "13-18";
      } else {
        return "Invalid Age 18 Below Only";
      }
    },
    age2() {
      if (!this.birthdate) return null;
      const bdate = new Date(this.bdate);
      const currentDate = new Date();
      const differenceInMilliseconds = currentDate - bdate;
      const age = Math.floor(
        differenceInMilliseconds / (1000 * 60 * 60 * 24 * 365.25)
      );

      return age;
    },
  },
};
</script>
