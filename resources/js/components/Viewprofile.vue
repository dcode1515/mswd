<template>
  <div class="ibox">
    <div class="ibox-head">
      <div class="ibox-title">
        Fill out required fields marked by asterisk (<font color="red">*</font>)
      </div>
      <div class="ibox-tools">
        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
      </div>
    </div>
    <div class="ibox-body">
      <!-- Personal Information Section -->
      <div class="form-section">
        <h5 class="form-section-title">Personal Information</h5>
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
              :disabled="isViewMode"
            />
            <br />
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
              :disabled="isViewMode"
            />
            <br />
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
              :disabled="isViewMode"
            />
            <span style="color: red">Optional</span><br />
            <br />
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
              :disabled="isViewMode"
            />
            <span style="color: red">Optional</span><br />
            <br />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >Birthdate<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <input
              class="form-control"
              type="date"
              v-model="formData.birthdate"
              :disabled="isViewMode"
            />
            <span style="color: red">(Month/Date/Year)</span><br />
            <br />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Age</label>
          <div class="col-sm-10">
            <input class="form-control" type="number" v-model="age" disabled />
            <br />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Age Category</label>
          <div class="col-sm-10">
            <label style="color: red">{{ ageCategory }}</label>
            <br />
          </div>
        </div>
      </div>

      <!-- Conditional Fields Section -->
      <div class="form-section" v-if="age >= 15 && age <= 18">
        <h5 class="form-section-title">LGBT Information</h5>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >LGBT<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <select
              v-model="formData.lgbt"
              class="form-control"
              :disabled="isViewMode"
            >
              <option disabled value="">Select LGBT</option>
              <option value="NO">NO</option>
              <option value="YES">YES</option>
            </select>
            <br />
          </div>
        </div>
      </div>

      <div class="form-section" v-if="age >= 0 && age <= 5">
        <h5 class="form-section-title">Weight Status</h5>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >Weight Status<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <select
              v-model="formData.weightstatus"
              class="form-control"
              :disabled="isViewMode"
            >
              <option disabled value="">Select Weight Status</option>
              <option value="Obese">Obese</option>
              <option value="Stunted">Stunted</option>
              <option value="Wasted">Wasted</option>
              <option value="Overweight">Overweight</option>
              <option value="Normal Weight">Normal Weight</option>
            </select>
            <br />
          </div>
        </div>
      </div>

      <div class="form-section" v-if="age >= 4 && age <= 18">
        <h5 class="form-section-title">Child Classification</h5>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >Child Classification<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <select
              v-model="formData.childClassification"
              class="form-control"
              :disabled="isViewMode"
            >
              <option disabled value="">Select Child Classification</option>
              <option value="In School Youth">In School Youth</option>
              <option value="Out of School Youth">Out of School Youth</option>
            </select>
            <br />
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
                :disabled="isViewMode"
              >
                <option disabled value="">Select Name of School</option>
                <option value="Private">Private</option>
                <option value="Public">Public</option>
                <option value="ALS">ALS</option>
              </select>
              <br />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label"
              >School Level<font color="red">*</font></label
            >
            <div class="col-sm-10">
              <select
                v-model="formData.schoollevel"
                class="form-control"
                :disabled="isViewMode"
              >
                <option value="Day Care">Day Care</option>
                <option value="Elementary">Elementary</option>
                <option value="High School">High School</option>
                <option value="Senior High">Senior High</option>
                <option value="College Level">College Level</option>
              </select>
              <br />
            </div>
          </div>
        </div>
      </div>

      <!-- Additional Information Section -->
      <div class="form-section">
        <h5 class="form-section-title">Additional Information</h5>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >Gender<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <select
              v-model="formData.gender"
              class="form-control"
              :disabled="isViewMode"
            >
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <br />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >Barangay<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <select
              v-model="formData.barangay"
              class="form-control"
              :disabled="isViewMode"
            >
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
            <br />
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
              :disabled="isViewMode"
            />
            <span style="color: red"
              >House #, Street, Subdivision, Brgy, City/Municipality</span
            ><br />
            <br />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >Adolescent Matter<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <select
              v-model="formData.adolescent"
              class="form-control"
              :disabled="isViewMode"
            >
              <option disabled value="">Select Adolescent Matter</option>
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
            <br />
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
              :disabled="isViewMode"
            />
            <br />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >Disability<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <select
              v-model="formData.disability"
              class="form-control"
              :disabled="isViewMode"
            >
              <option disabled value="">Select Disability</option>
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
            <br />
          </div>
        </div>
      </div>

      <!-- Emergency Contact Information Section -->
      <div class="form-section">
        <h5 class="form-section-title">Emergency Contact Information</h5>
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
              :disabled="isViewMode"
            />
            <br />
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
              placeholder="Father, Mother, Sister, etc"
              :disabled="isViewMode"
            />
            <br />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >Contact Number<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <input
              class="form-control"
              type="number"
              v-model="formData.contactnoofemergency"
              @input="validatePhoneNumber"
              :disabled="isViewMode"
            />
            <span v-if="invalidPhoneNumber" style="color: red"
              >Please enter a valid 11-digit phone number.</span
            >
            <br />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >4p's Member?<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <select
              v-model="formData.forpsno"
              class="form-control"
              :disabled="isViewMode"
            >
              <option disabled value="">Select 4'ps Member</option>
              <option value="NO">NO</option>
              <option value="YES">YES</option>
            </select>
            <br />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"
            >Philhealth Member?<font color="red">*</font></label
          >
          <div class="col-sm-10">
            <select
              v-model="formData.philhealth"
              class="form-control"
              :disabled="isViewMode"
            >
              <option disabled value="">Select Philhealth Member</option>
              <option value="NO">NO</option>
              <option value="YES">YES</option>
            </select>
            <br />
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="form-group row">
        <div class="col-sm-10 ml-sm-auto">
          <button
            v-if="isViewMode"
            class="btn btn-primary"
            @click="enableEditMode"
          >
            Edit
          </button>
          <button v-else class="btn btn-success" @click="updateProfile">
            Update
          </button>
          <a :href="'/mswd/all-records'" class="btn btn-danger">Back</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    profile: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      formData: { ...this.profile }, // Initialize formData with profile data
      invalidPhoneNumber: false,
      isViewMode: true, // Set to true to disable all fields
    };
  },
  computed: {
    age() {
      if (!this.formData.birthdate) return null;
      const birthDate = new Date(this.formData.birthdate);
      const today = new Date();
      const age = today.getFullYear() - birthDate.getFullYear();
      const monthDifference = today.getMonth() - birthDate.getMonth();
      if (
        monthDifference < 0 ||
        (monthDifference === 0 && today.getDate() < birthDate.getDate())
      ) {
        return age - 1;
      }
      return age;
    },
    ageCategory() {
      if (this.age >= 0 && this.age <= 2) return "0-2";
      if (this.age >= 3 && this.age <= 4) return "3-4";
      if (this.age >= 5 && this.age <= 12) return "5-12";
      if (this.age >= 13 && this.age <= 18) return "13-18";
      return "Invalid Age (18 Below Only)";
    },
  },
  methods: {
    validatePhoneNumber() {
      const regex = /^\d{11}$/;
      this.invalidPhoneNumber = !regex.test(this.formData.contactnoofemergency);
    },
    enableEditMode() {
      this.isViewMode = false; // Enable editing
      // Scroll to the top of the page
      window.scrollTo({ top: 0, behavior: "smooth" });
    },
    async updateProfile() {
      try {
        const response = await axios.put(
          `/mswd/api/update/profile/${this.formData.id}`,
          this.formData
        );
        Swal.fire({
          title: "Profile Updated Successfully!",
          icon: "success",
          confirmButtonText: "Okay",
        }).then(() => {
          // Redirect to /mswd/all-records after the user clicks "Okay"
          window.location.href = "/mswd/all-records";
        });
        this.isViewMode = true; // Switch back to view mode
      } catch (error) {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Failed to update profile. Please try again.",
        });
      }
    },
  },
};
</script>

<style scoped>
/* Custom Styles */
.form-section {
  margin-bottom: 2rem;
}

.form-section-title {
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 1rem;
  border-bottom: 1px solid #ddd;
  padding-bottom: 0.5rem;
}

.ibox {
  background: #fff;
  border: 1px solid #e7eaec;
  margin-bottom: 20px;
  padding: 15px;
}

.ibox-head {
  border-bottom: 1px solid #e7eaec;
  margin-bottom: 15px;
}

.ibox-title {
  font-size: 16px;
  font-weight: 600;
}

.ibox-body {
  padding: 15px;
}
</style>