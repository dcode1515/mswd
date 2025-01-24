<template>
  <div class="row">
    <div class="col-sm-12">
      <div class="card-box">
        <div class="col-md-3">
          <h4 class="header-title m-t-0 m-b-30">Input Types</h4>

          <div class="row">
            <div class="col-md-3">
              <label>Lastname<font color="red">*</font></label>
              <input
                class="form-control"
                style="text-transform: uppercase"
                type="text"
                v-model="profileLastname"
              />
              <input
                class="form-control"
                style="text-transform: uppercase"
                type="text"
                v-model="id"
                hidden
              />
            </div>
             <div class="col-md-3">
            <label>Firstname<font color="red">*</font></label>

              <input
                class="form-control"
                style="text-transform: uppercase"
                type="text"
                v-model="profileFirstname"
              />
           
          </div>
           <div class="col-md-3">
            <label>Middlename</label>
          
              <input
                class="form-control"
                style="text-transform: uppercase"
                type="text"
                v-model="profileMiddlename"
              />
         </div>
              <div class="col-md-3">
            <label>Extension</label>
       
              <input
                class="form-control"
                style="text-transform: uppercase"
                type="text"
                v-model="profileExtension"
              /><br>
          </div>
          
          <div class="col-md-3">
            <label>Birthdate<font color="red">*</font></label>
          
              <input class="form-control" type="date" v-model="profileBdate" />
             
          </div>
           <div class="col-md-3">
            <label>Age</label>
          
              <input
                class="form-control"
                type="number"
                v-model="profileAge"
                disabled
              />
           
          </div>
           <div class="col-md-3">
            <label>Age Category</label><br>
          
              <label style="color: red"> {{ profileAgecategory }}</label>
            
          </div>
        
            <div class="col-md-3">
              <label>LGBT<font color="red">*</font></label>
             
                <select v-model="profileLgbt" class="form-control">
                  <option disabled value="">Select LGBT</option>
                  <option value="NO">NO</option>
                  <option value="YES">YES</option>
                </select>
             
            </div>
        


          




          </div>
         
         
     

         

         
         


          <div v-if="this.profileAge >= 0 && this.profileAge <= 2">
            <div class="col-md-3">
              <label>Weight Status<font color="red">*</font></label>
              <div class="col-sm-10">
                <select
                  v-model="profileWeight"
                  class="form-control"
                  style="text-transform: uppercase"
                >
                  <option disabled value="">Select Weight Status</option>
                  <option value="Under Weight">Under Weight</option>
                  <option value="Normal Weight">Normal Weight</option>
                  <option value="Over Weight">Over Weight</option>
                </select>
              </div>
            </div>
          </div>
          <div v-if="this.profileAge >= 4 && this.profileAge <= 18">
            <div class="col-md-3">
              <label>Child Classification<font color="red">*</font></label>
              <div class="col-sm-10">
                <select v-model="profileClassification" class="form-control">
                  <option disabled value="">Select Child Classification</option>
                  <option value="In School Youth">In School Youth</option>
                  <option value="Out of School Youth">
                    Out of School Youth
                  </option>
                </select>
              </div>
            </div>
            <div v-if="profileClassification === 'In School Youth'">
              <div class="col-md-3">
                <label>Name of School<font color="red">*</font></label>
                <div class="col-sm-10">
                  <input
                    class="form-control"
                    type="text"
                    v-model="profileSchool"
                  />
                </div>
              </div>
              <div class="col-md-3">
                <label>Type of School<font color="red">*</font></label>
                <div class="col-sm-10">
                  <select v-model="profileTypeschool" class="form-control">
                    <option value="Private">Private</option>
                    <option value="Public">Public</option>
                    <option value="ALS">ALS</option>
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <label>School Level<font color="red">*</font></label>
                <div class="col-sm-10">
                  <select v-model="profileSchoollevel" class="form-control">
                    <option value="Day Care">Day Care</option>
                    <option value="Elementary">Elementary</option>
                    <option value="High School">High School</option>
                    <option value="Senior High">Senior High</option>
                  </select>
                </div>
              </div>
            </div>
            <div
              v-else-if="profileClassification === 'Out of School Youth'"
            ></div>
          </div>
          <div class="col-md-3">
            <label>Gender<font color="red">*</font></label>
            <div class="col-sm-10">
              <select v-model="profileGender" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <label>Barangay<font color="red">*</font></label>
            <div class="col-sm-10">
              <select v-model="profileBarangay" class="form-control">
                <option value="GATA">GATA</option>
                <option value="BRITANIA">BRITANIA</option>
                <option value="BUATONG">BUATONG</option>
                <option value="SALVACION">SALVACION</option>
                <option value="BUHISAN">BUHISAN</option>
                <option value="KAUSWAGAN">KAUSWAGAN</option>
                <option value="POBLACION">POBLACION</option>
                <option value="OTIEZA">OTIEZA</option>
                <option value="HORNASAN">HORNASAN</option>
                <option value="PUNGTOD">PUNGTOD</option>
                <option value="PONG-ON">PONG-ON</option>
                <option value="JANIPAAN">JANIPAAN</option>
                <option value="SANTO NINO">SANTO NINO</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <label>Address<font color="red">*</font></label>
            <div class="col-sm-10">
              <input
                class="form-control"
                type="text"
                v-model="profileAddress"
                style="text-transform: uppercase"
              />
              <span style="color: red"
                >House #, Street, Subdivision, Brgy, City/Municipality</span
              >
            </div>
          </div>

          <div class="col-md-3">
            <label>Ethnicity<font color="red">*</font></label>
            <div class="col-sm-10">
              <select v-model="profileEthnicity" class="form-control">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <label>Disability<font color="red">*</font></label>
            <div class="col-sm-10">
              <select v-model="profileDisability" class="form-control">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
              </select>
            </div>
          </div>
          <hr />
          <div class="ibox-title">
            <b>Other Information (In Case of Emergency)</b>
          </div>
          <br />
          <div class="col-md-3">
            <label>Name<font color="red">*</font></label>
            <div class="col-sm-10">
              <input
                class="form-control"
                style="text-transform: uppercase"
                type="text"
                v-model="profileNameofemergency"
              />
            </div>
          </div>
          <div class="col-md-3">
            <label>Relation<font color="red">*</font></label>
            <div class="col-sm-10">
              <input
                class="form-control"
                style="text-transform: uppercase"
                type="text"
                v-model="profileRelationofemergency"
                placeholder="Father,Mother, Sister, etc"
              />
            </div>
          </div>
          <div class="col-md-3">
            <label>Contact Number<font color="red">*</font></label>
            <div class="col-sm-10">
              <input
                class="form-control"
                type="number"
                v-model="profileContactnoofemergency"
                @input="validatePhoneNumber"
              />
              <span v-if="invalidPhoneNumber" style="color: red"
                >Please enter a valid 11-digit phone number.</span
              >
            </div>
          </div>
          <div class="col-md-3">
            <label>Benefits Type<font color="red">*</font></label>
            <div class="col-sm-10">
              <select v-model="profileBenefitstype" class="form-control">
                <option value="Non 4p's">Non 4p's</option>
                <option value="4p's">4p's</option>
              </select>
            </div>
          </div>
          <br />

          <div class="form-group row">
            <div class="col-sm-10 ml-sm-auto">
              <button
                class="btn btn-info"
                type="submit"
                @click="saveProfile(id)"
              >
                Submit
              </button>
              <a v-bind:href="'/mswd/all-records'" class="btn btn-danger"
                >Back</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    id: {
      type: String,
      required: true,
    },
    profileNo: {
      type: String,
      required: true,
    },
    profileLastname: {
      type: String,
      required: true,
    },
    profileSchoollevel: {
      type: String,
      required: true,
    },
    profileFirstname: {
      type: String,
      required: true,
    },
    profileMiddlename: {
      type: String,
      required: true,
    },
    profileExtension: {
      type: String,
      required: true,
    },
    profileBdate: {
      type: String,
      required: true,
    },
    profileAge: {
      type: String,
      required: true,
    },
    profileAgecategory: {
      type: String,
      required: true,
    },
    profileLgbt: {
      type: String,
      required: true,
    },
    profileWeight: {
      type: String,
      required: true,
    },
    profileClassification: {
      type: String,
      required: true,
    },
    profileSchool: {
      type: String,
      required: true,
    },
    profileInschool: {
      type: String,
      required: true,
    },
    profileTypeschool: {
      type: String,
      required: true,
    },
    profileRelationofemergency: {
      type: String,
      required: true,
    },
    profileContactnoofemergency: {
      type: String,
      required: true,
    },
    profileBenefitstype: {
      type: String,
      required: true,
    },
    profileGender: {
      type: String,
      required: true,
    },
    profileBarangay: {
      type: String,
      required: true,
    },
    profileAddress: {
      type: String,
      required: true,
    },
    profileEthnicity: {
      type: String,
      required: true,
    },
    profileDisability: {
      type: String,
      required: true,
    },
    profileNameofemergency: {
      type: String,
      required: true,
    },
  },
  methods: {
    validatePhoneNumber() {
      const regex = /^\d{11}$/;
      if (regex.test(this.profileContactnoofemergency)) {
        this.invalidPhoneNumber = false;
      } else {
        this.invalidPhoneNumber = true;
      }
    },

    saveProfile(id) {
      if (this.profileAge >= 19) {
        Swal.fire({
          icon: "error",
          title: "18 Below Only",
          confirmButtonText: "Okay",
        });
      } else {
        // const lastname  = this.profileLastname.trim()
        // const middlename = this.profileMiddlename.trim()
        // const firstname = this.profileFirstname.trim()
        // const extension = this.profileExtension.trim()
        // const bdate = this.profileBdate.trim()
        // const lgbt = this.profileLgbt.trim()
        // const weightstatus = this.profileWeight.trim()
        // const nameofschool = this.profileNameofschool.trim()
        // const inschool = this.profileInschool.trim()
        // const nameofemergency = this.profileNameofemergency.trim()
        // const relationofemergency = this.profileRelationofemergency.trim()
        // const contactnoofemergency = this.profileContactnoofemergency.trim()
        // const benefitstype = this.profileBenefitstype.trim()
        // const gender = this.profileGender.trim()
        // const barangay = this.profileBarangay.trim()
        // const address = this.profileAddress.trim()
        // const ethnicity = this.profileEthnicity.trim()
        // const disability = this.profileDisability.trim()
        // const childClassification = this.profileClassification.trim()

        //     if (!firstname || !lastname || !bdate || !nameofemergency || !relationofemergency || !contactnoofemergency || !benefitstype  || !gender || !barangay || !address || !ethnicity || !disability) {
        //             Swal.fire('Error', 'Please fill out all required fields', 'error')
        //             return
        //  }
        axios
          .post("/mswd/api/update/profile/" + id, {
            profileLastname: this.profileLastname,
            profileFirstname: this.profileFirstname,
            profileMiddlename: this.profileMiddlename,
            profileExtension: this.profileExtension,
            profileBdate: this.profileBdate,
            profileAge: this.profileAge,
            profileAgecategory: this.profileAgecategory,
            profileLgbt: this.profileLgbt,
            profileWeight: this.profileWeight,
            profileNameofschool: this.profileNameofschool,
            profileInschool: this.profileInschool,
            profileNameofemergency: this.profileNameofemergency,
            profileRelationofemergency: this.profileRelationofemergency,
            profileContactnoofemergency: this.profileContactnoofemergency,
            profileBenefitstype: this.profileBenefitstype,
            profileGender: this.profileGender,
            profileBarangay: this.profileBarangay,
            profileAddress: this.profileAddress,
            profileEthnicity: this.profileEthnicity,
            profileDisability: this.profileDisability,
            profileClassification: this.profileClassification,
            profileBdate: this.profileBdate,
          })
          .then((response) => {
            Swal.fire({
              title: "Updated Profile",
              // text: "New Profile Successfully Save!",
              icon: "success",
              confirmButtonText: "Okay",
            }).then(function () {
              window.location.href = "/mswd/all-records";
              console.log(id);
            });
          })
          .catch((error) => {
            if (!_.isEmpty(error.response)) {
              Swal.fire({
                icon: "error",
                title: "Fill out Required Fields",
              });
              if ((error.response.status = 422)) {
                this.errors = error.response.data.errors;
                this.successful = false;
                this.error = true;
                this.submitted = false;
              }
            }
          });
      }
    },
  },
  data() {
    return {
      profileLastname: "",
      profileFirstname: "",
      profileMiddlename: "",
      profileExtension: "",
      profileBdate: "",
      profileClassification: "",
      profileLgbt: "",
      profileWeight: "",
      profileNameofemergency: "",
      profileInschool: "",
      profileNameofemergency: "",
      profileRelationofemergency: "",
      profileContactnoofemergency: "",
      profileBenefitstype: "",
      profileGender: "",
      profileAgecategory: "",
      profileAddress: "",
      profileEthnicity: "",
      profileDisability: "",
      profileBdate: "",
    };
  },
  computed: {
    profileAgecategory() {
      if (this.profileAge >= 0 && this.profileAge <= 2) {
        return "0-2";
      } else if (this.profileAge >= 3 && this.profileAge <= 4) {
        return "3-4";
      } else if (this.profileAge >= 5 && this.profileAge <= 12) {
        return "5-12";
      } else if (this.profileAge >= 13 && this.profileAge <= 18) {
        return "13-18";
      } else {
        return "Invalid Age 18 Below Only";
      }
    },
    profileAge() {
      if (!this.profileBdate) return null;
      const bdate = new Date(this.profileBdate);
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