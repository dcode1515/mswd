<template>
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form role="form" class="php-email-form">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Lastname<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <input
                  class="form-control"
                  style="text-transform: uppercase"
                  type="text"
                  v-model="formData.lastname"
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Firstname<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <input
                  class="form-control"
                  style="text-transform: uppercase"
                  type="text"
                  v-model="formData.firstname"
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Middlename</label>
              <div class="col-sm-10">
                <input
                  class="form-control"
                  style="text-transform: uppercase"
                  type="text"
                  v-model="formData.middlename"
                />
                <span style="color: red">Optional</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Extension</label>
              <div class="col-sm-10">
                <input
                  class="form-control"
                  style="text-transform: uppercase"
                  type="text"
                  v-model="formData.extension"
                />
                <span style="color: red">Optional</span>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Gender<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <select v-model="formData.gender" class="form-control">
                  <option disabled value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Birthdate<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <input class="form-control" type="date" v-model="bdate" />
                <span style="color: red">(Month/Date/Year)</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Age</label>
              <div class="col-sm-10">
                <input
                  class="form-control"
                  type="number"
                  v-model="age"
                  disabled
                />
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Age Category</label>
              <div class="col-sm-10">
                <label style="color: red"> {{ ageCategory }}</label>
                <!-- {{ageCategory}} -->
              </div>
            </div>
            <div v-if="age >= 15 && age <= 18">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label"
                  >LGBT<font color="red">*</font></label
                >
                <div class="col-sm-10">
                  <select v-model="formData.lgbt" class="form-control">
                    <option disabled value="">Select LGBT</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                  </select>
                </div>
              </div>
            </div>
            <div v-if="age >= 0 && age <= 5">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label"
                  >Weight Status<font color="red">*</font></label
                >
                <div class="col-sm-10">
                  <select v-model="formData.weightstatus" class="form-control">
                    <option disabled value="">Select Weight Status</option>
                    <option value="Obese">Obese</option>
                    <option value="Stunted">Stunted</option>
                    <option value="Wasted">Wasted</option>
                    <option value="Overweight">Overweight</option>
                    <option value="Normal Weight">Normal Weight</option>
                  </select>
                </div>
              </div>
            </div>
            <div v-if="age >= 4 && age <= 18">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label"
                  >Child Classification<font color="red">*</font></label
                >
                <div class="col-sm-10">
                  <select
                    v-model="formData.childClassification"
                    class="form-control"
                  >
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
              <div v-if="formData.childClassification === 'In School Youth'">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    >Type of School<font color="red">*</font></label
                  >
                  <div class="col-sm-10">
                    <select
                      v-model="formData.typeofschool"
                      class="form-control"
                    >
                      <option disabled value="">Select Name of School</option>
                      <option value="Private">Private</option>
                      <option value="Public">Public</option>
                      <option value="ALS">ALS</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    >School Level<font color="red">*</font></label
                  >
                  <div class="col-sm-10">
                    <select v-model="formData.schoollevel" class="form-control">
                      <option value="Day Care">Day Care</option>
                      <option value="Elementary">Elementary</option>
                      <option value="High School">High School</option>
                      <option value="Senior High">Senior High</option>
                      <option value="College Level">College Level</option>
                    </select>
                  </div>
                </div>

                
              </div>
              <div
                v-else-if="childClassification === 'Out of School Youth'"
              ></div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Barangay<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <select v-model="formData.barangay" class="form-control">
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
                  <option value="SANTO NINO">SANTO NINO</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Address<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <input
                  class="form-control"
                  type="text"
                  v-model="formData.address"
                  style="text-transform: uppercase"
                />
                <span style="color: red"
                  >House #, Street, Subdivision, Brgy, City/Municipality</span
                >
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Adolescent Matter<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <select v-model="formData.adolescent" class="form-control">
                  <option disabled value="">Select Adolescent Matter</option>
                  <option value="No">No</option>
                  <option value="Yes">Yes</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Ethnicity<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <input
                  type="text"
                  class="form-control"
                  style="text-transform: uppercase"
                  v-model="formData.ethnicity"
                  placeholder="Manobo,Badjao ETC"
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Disability<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <select v-model="formData.disability" class="form-control">
                  <option disabled value="">Select Disability</option>
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
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Name<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <input
                  class="form-control"
                  style="text-transform: uppercase"
                  type="text"
                  v-model="formData.nameofemergency"
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Relation<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <input
                  class="form-control"
                  style="text-transform: uppercase"
                  type="text"
                  v-model="formData.relationofemergency"
                  placeholder="Father,Mother, Sister, etc"
                />
              </div>
            </div>
            <!-- <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Contact Number<font color="red">*</font></label
              > -->
              <!-- <div class="col-sm-10">
                <input
                  class="form-control"
                  type="number"
                  v-model="formData.contactnoofemergency"
                  @input="validatePhoneNumber"
                  placeholder="Start-09"
                />
                <span v-if="invalidPhoneNumber" style="color: red"
                  >Please enter a valid 11-digit phone number.</span
                >
              </div> -->
            <!-- </div> -->
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >4p's Member?<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <select v-model="formData.benefitstype" class="form-control">
                  <option disabled value="">Select 4'ps Member</option>
                  <option value="NO">NO</option>
                  <option value="YES">YES</option>
                </select>
              </div>
            </div>
            <!-- <template v-if="formData.benefitstype == 'YES'">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label"
                  >4'ps #<font color="red">*</font></label
                >
                <div class="col-sm-10">
                  <input
                    class="form-control"
                    type="number"
                    v-model="formData.forpsno"
                    placeholder="Enter 4'ps #"
                  />
                </div>
              </div>
            </template>
            <template else> </template> -->

            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Philhealth Member?<font color="red">*</font></label
              >
              <div class="col-sm-10">
                <select v-model="formData.philhealth" class="form-control">
                  <option disabled value="">Select Philhealth Member</option>
                  <option value="NO">NO</option>
                  <option value="YES">YES</option>
                </select>
              </div>
            </div>
            <!-- <template v-if="formData.philhealth == 'YES'">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label"
                  >Philhealth #<font color="red">*</font></label
                >
                <div class="col-sm-10">
                  <input
                    class="form-control"
                    type="number"
                    v-model="formData.philhealth_no"
                    placeholder="Enter philhealth #"
                  />
                </div>
              </div>
            </template>
            <template else> </template> -->

            <div class="text-center">
              <button
                onclick="document.getElementById('id01').style.display='block'"
                class="btn btn-danger"
              >
                Preview Registration
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="w3-container">
      <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
          <header class="w3-container w3-teal">
            <span
              onclick="document.getElementById('id01').style.display='none'"
              class="w3-button w3-display-topright"
              >&times;</span
            >
            <center><h2>Summary of Registration</h2></center>
          </header>
          <div class="w3-container">
            <br />
            <b>Profile Information</b><br />
            <div class="row">
              <div class="col-sm-4">
                Name:
                <label style="text-transform: uppercase"
                  >{{ formData.lastname }}, {{ formData.firstname }}
                  {{ formData.middlename }} {{ formData.extension }}</label
                ><br />
              </div>
              <div class="col-sm-4">
                Gender:
                <label style="text-transform: uppercase">
                  {{ formData.gender }} </label
                ><br />
              </div>
              <div class="col-sm-4">
                Birthdate: {{ bdate }}-{{ age }} Years Old<br />
              </div>
              <div class="col-sm-4">Age Category: {{ ageCategory }}</div>
            </div>

            <div v-if="age >= 0 && age <= 5">
              Weight Status:
              <label style="text-transform: uppercase">{{
                formData.weightstatus
              }}</label>
              <br />
            </div>
            <div v-if="age >= 4 && age <= 18">
              LGBT:
              <label style="text-transform: uppercase">{{
                formData.lgbt
              }}</label>
              <br />
              Child Classification: {{ formData.childClassification }} <br />
              <div v-if="formData.childClassification === 'In School Youth'">
                Type of School:
                <label style="text-transform: uppercase">{{
                  formData.typeofschool
                }}</label>
                <br />
                School Level:
                <label style="text-transform: uppercase">{{
                  formData.schoollevel
                }}</label>
                <br />
               
                <br />
              </div>
            </div>
            Barangay:
            <label style="text-transform: uppercase">{{
              formData.barangay
            }}</label>
            <br />
            Address:
            <label style="text-transform: uppercase">{{
              formData.address
            }}</label>
            <br />
            Adolescent Matter: {{ formData.adolescent }} <br />
            Ethnicity:
            <label style="text-transform: uppercase">{{
              formData.ethnicity
            }}</label>
            <br />
            Disability:
            <label style="text-transform: uppercase"
              >{{ formData.disability }} </label
            ><br />
            <b>Other Information (In Case of Emergency)</b><br />
            Name:
            <label style="text-transform: uppercase">{{
              formData.nameofemergency
            }}</label>
            <br />
            Relation:
            <label style="text-transform: uppercase">{{
              formData.relationofemergency
            }}</label>
            <br />
            <!-- Contact Number: {{ formData.contactnoofemergency }} <br /> -->
            4p's Member: {{ formData.benefitstype }} <br />
            <!-- <div v-if="formData.benefitstype === 'YES'">
              4'ps #: {{ formData.forpsno }} <br />
            </div> -->
            Philhealth Member: {{ formData.philhealth }} <br />
            <!-- <div v-if="formData.philhealth === 'YES'">
              Philhealth #: {{ formData.philhealth_no }} <br />
            </div> -->

            NOTE:
            <i style="color: red"
              >Please Check all Required Fields Before you Submit the
              Registration</i
            ><br /><br />
            <!-- {{data.origin_place}} within the day after submission of this application
                              otherwise this application will be cancelled. -->
          </div>

          <center>
            <h5>
              <button class="btn btn-danger" @click.prevent="saveProfile">
                Submit Profile
              </button>
            </h5>
          </center>

          <footer class="w3-container w3-teal"><br /></footer>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
</template>
<script>
export default {
  methods: {
    // validatePhoneNumber() {
    //   const regex = /^\d{11}$/;
    //   if (regex.test(this.formData.contactnoofemergency)) {
    //     this.invalidPhoneNumber = false;
    //   } else {
    //     this.invalidPhoneNumber = true;
    //   }
    // },

    saveProfile() {
      this.loading = true;
      if (this.age >= 19) {
        Swal.fire({
          icon: "error",
          title: "18 Below Only",
          confirmButtonText: "Okay",
        });
      } else {
        const firstname = this.formData.firstname.trim();
        const middlename = this.formData.middlename.trim();
        const lastname = this.formData.lastname.trim();
        const extension = this.formData.extension.trim();
        //const bdate = this.bdate.trim();
        const lgbt = this.formData.lgbt.trim();
        const weightstatus = this.formData.weightstatus.trim();
   
        // const schoollevel = this.schoollevel.trim()
        const nameofemergency = this.formData.nameofemergency.trim();
        const relationofemergency = this.formData.relationofemergency.trim();
        //const contactnoofemergency = this.formData.contactnoofemergency.trim();
        const benefitstype = this.formData.benefitstype.trim();
        const gender = this.formData.gender.trim();
        const barangay = this.formData.barangay.trim();
        const address = this.formData.address.trim();
        const ethnicity = this.formData.ethnicity.trim();
        const disability = this.formData.disability.trim();
        const childClassification = this.formData.childClassification.trim();

        if (
          !firstname ||
          !lastname ||
          !nameofemergency ||
          !relationofemergency ||
          // !contactnoofemergency ||
          !benefitstype ||
          !gender ||
          !barangay ||
          !address ||
          !ethnicity ||
          !disability
        ) {
          Swal.fire("Error", "Please fill out all required fields", "error");
          return;
        }

        axios
  .post("/mswd/api/store/profile", {
    ...this.formData,
    bdate: this.bdate,
    age: this.age,
    ageCategory: this.ageCategory,
  }, {
    params: {
      timestamp: new Date().getTime() // Add a cache-busting parameter
    }
  })
  .then((response) => {
    this.bdate = null;
    if (response.data.error) {
      Swal.fire({
        title: "Error",
        text: response.data.error,
        icon: "error",
        confirmButtonText: "Okay",
      });
    } else {
      Swal.fire({
        title: response.data.message,
        text: "New Profile Successfully Saved!",
        icon: "success",
        confirmButtonText: "Okay",
      }).then(function () {
        window.location.href = "/mswd/register-profile";
      });
    }
  });
      }
    },
  },
  data() {
    return {
      bdate: "",

      formData: {
        adolescent: "",
        // forpsno: "",
        lastname: "",
        firstname: "",
        middlename: "",
        extension: "",
        lgbt: "",
        weightstatus: "",
     
        schoollevevel: "",
      
        nameofemergency: "",
        relationofemergency: "",
        // contactnoofemergency: "",
        benefitstype: "",
        gender: "",
        barangay: "",
        address: "",
        ethnicity: "",
        disability: "",
        childClassification: "",
        philhealth: "",
      },
    };
  },
  computed: {
    ageCategory() {
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
    age() {
      if (!this.bdate) return null;
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
