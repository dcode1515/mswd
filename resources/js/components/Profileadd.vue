<template>

       <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Fill out required field mark by asterisk(<font color="red">*</font>)</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                       
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lastname<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input class="form-control" style="text-transform: uppercase;" type="text" v-model="lastname" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Firstname<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input class="form-control" style="text-transform: uppercase;" type="text" v-model="firstname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Middlename</label>
                                <div class="col-sm-10">
                                    <input class="form-control" style="text-transform: uppercase;" type="text" v-model="middlename">
                                      <span style="color: red;">Optional</span>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Extension</label>
                                <div class="col-sm-10">
                                    <input class="form-control" style="text-transform: uppercase;" type="text" v-model="extension">
                                         <span style="color: red;">Optional</span>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Birthdate<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="date" v-model="bdate">
                                      <span style="color: red;">(Month/Date/Year)</span>
                                </div>
                            </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Age</label>
                                <div class="col-sm-10">
                                    <input class="form-control"  type="number" v-model="age" disabled>
                                   
                                </div>
                            </div>
                           
                                
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Age Category</label>
                                <div class="col-sm-10">
                                   <label style="color:red"> {{ageCategory}}</label>
                                    <!-- {{ageCategory}} -->
                                </div>
                            </div>
                             <div v-if="age >= 15 && age <= 18">
                             <div class="form-group row">
                                <label class="col-sm-2 col-form-label">LGBT<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <select v-model="lgbt" class="form-control">
                                    <option disabled value="">Select LGBT</option>
                                    <option value="NO">NO</option>
                                    <option value="YES">YES</option>
                                  
                                   
                                    </select>
                                </div>
                            </div>
                         </div>
                          <div v-if="age >= 0 && age <= 5">
                             <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Weight Status<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <select v-model="weightstatus" class="form-control" style="text-transform: uppercase;">
                                         <option disabled value="">Select an Weight Status</option>
                                    <option value="Under Weight">Under Weight</option>
                                    <option value="Normal Weight">Normal Weight</option>
                                     <option value="Over Weight">Over Weight</option>
                                  
                                   
                                    </select>
                                </div>
                            </div>
                         </div>
                          <div v-if="age >= 4 && age <= 18">
                          <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Child Classification<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <select v-model="childClassification" class="form-control">
                                     <option disabled value="">Select Child Classification</option>
                                    <option value="In School Youth">In School Youth </option>
                                    <option value="Out of School Youth">Out of School Youth</option>
                                   
                                    </select>
                                </div>
                            </div>
                <div v-if="childClassification === 'In School Youth'">     
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name of School<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <select v-model="nameofschool" class="form-control">
                                          <option disabled value="">Select Name of School</option>
                                    <option value="Private">Private </option>
                                    <option value="Public">Public</option>
                                    <option value="ALS">ALS</option>
                                   
                                    </select>
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-sm-2 col-form-label">In School<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <select v-model="inschool" class="form-control">
                                    <option value="Day Care">Day Care </option>
                                    <option value="Elementary">Elementary </option>
                                    <option value="High School">High School</option>
                                    <option value="Senior High">Senior High</option>
                                   
                                    </select>
                                </div>
                            </div>
                </div>
                 <div v-else-if="childClassification === 'Out of School Youth'">
                            
                 </div>            
                        </div>     
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gender<font color="red">*</font></label>
                                <div class="col-sm-10">
                                  <select v-model="gender" class="form-control">
                                    <option value="Male">Male </option>
                                    <option value="Female">Female </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Barangay<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <select v-model="barangay" class="form-control">
                                    <option value="GATA">GATA </option>
                                    <option value="BRITANIA">BRITANIA </option>
                                    <option value="BUATONG">BUATONG </option>
                                    <option value="SALVACION">SALVACION </option>
                                    <option value="BUHISAN">BUHISAN </option>
                                    <option value="KAUSWAGAN">KAUSWAGAN </option>
                                    <option value="POBLACION">POBLACION </option>
                                    <option value="OTIEZA">OTIEZA </option>
                                    <option value="HORNASAN">HORNASAN </option>
                                    <option value="PUNGTOD">PUNGTOD </option>
                                    <option value="PONG-ON">PONG-ON </option>
                                    <option value="JANIPAAN">JANIPAAN </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Address<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" v-model="address" style="text-transform: uppercase;">
                                      <span style="color: red;">House #, Street, Subdivision, Brgy, City/Municipality</span>
                                </div>
                            </div>

                           
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ethnicity<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <select v-model="ethnicity" class="form-control">
                                    <option value="No">No </option>
                                    <option value="Yes">Yes</option>
                                   
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Disability<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <select v-model="disability" class="form-control">
                                    <option value="No">No </option>
                                    <option value="Yes">Yes</option>
                                   
                                    </select>
                                </div>
                            </div>
                            <hr>
                              <div class="ibox-title"><b>Other Information (In Case of Emergency)</b></div><br>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input class="form-control" style="text-transform: uppercase;" type="text" v-model="nameofemergency">
                                </div>
                            </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Relation<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input class="form-control" style="text-transform: uppercase;" type="text" v-model="relationofemergency" placeholder="Father,Mother, Sister, etc">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Contact Number<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" v-model="contactnoofemergency"  @input="validatePhoneNumber">
                                     <span v-if="invalidPhoneNumber" style="color: red;">Please enter a valid 11-digit phone number.</span>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Benefits Type<font color="red">*</font></label>
                                <div class="col-sm-10">
                                     <select v-model="benefitstype" class="form-control">
                                    <option value="Non 4p's">Non 4p's </option>
                                    <option value="4p's">4p's</option>
                                   
                                    </select>
                                </div>
                            </div>
                              <br>
                         
                            
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <button class="btn btn-info" type="submit" @click="saveProfile">Submit</button>
                                    <a v-bind:href="'/mswd/all-records'" class="btn btn-danger ">Back</a>
                                </div>
                            </div>
                     
                    </div>
                </div>
      
</template>
<script>
export default{
    methods:{
       validatePhoneNumber() {
            const regex = /^\d{11}$/;
            if (regex.test(this.contactnoofemergency)) {
        this.invalidPhoneNumber = false;
      }
      else {
        this.invalidPhoneNumber = true;
      }
        },

        saveProfile(){
            if(this.age >=19){
                Swal.fire({
                            icon: 'error',
                            title: '18 Below Only',
                            confirmButtonText: 'Okay'
                            
            })
            
            }else{
                    const firstname = this.firstname.trim()
                    const middlename = this.middlename.trim()
                    const lastname = this.lastname.trim()
                    const extension = this.extension.trim()
                    const bdate = this.bdate.trim()
                    const lgbt = this.lgbt.trim()
                    const weightstatus = this.weightstatus.trim()
                    const nameofschool = this.nameofschool.trim()
                    const inschool = this.inschool.trim()
                    const nameofemergency = this.nameofemergency.trim()
                    const relationofemergency = this.relationofemergency.trim()
                    const contactnoofemergency = this.contactnoofemergency.trim()
                    const benefitstype = this.benefitstype.trim()
                    const gender = this.gender.trim()
                    const barangay = this.barangay.trim()
                    const address = this.address.trim()
                    const ethnicity = this.ethnicity.trim()
                    const disability = this.disability.trim()
                    const childClassification = this.childClassification.trim()



                if (!firstname || !lastname || !bdate || !nameofemergency || !relationofemergency || !contactnoofemergency || !benefitstype  || !gender || !barangay || !address || !ethnicity || !disability) {
                        Swal.fire('Error', 'Please fill out all required fields', 'error')
                        return
             }
                axios.post('/mswd/api/store/profile',{
                   
                    lastname: this.lastname,
                     firstname: this.firstname,
                    middlename: this.middlename,
                    extension: this.extension,
                    birthdate: this.birthdate,
                    age: this.age,
                    ageCategory: this.ageCategory,
                    lgbt: this.lgbt,
                    weightstatus: this.weightstatus,
                    nameofschool: this.nameofschool,
                    inschool: this.inschool,
                    nameofemergency: this.nameofemergency,
                    relationofemergency: this.relationofemergency,
                    contactnoofemergency: this.contactnoofemergency,
                    benefitstype: this.benefitstype,
                    gender: this.gender,
                    barangay: this.barangay,
                    address: this.address,
                    ethnicity: this.ethnicity,
                    disability: this.disability,
                    childClassification:  this.childClassification,
                    bdate: this.bdate,
                   
               })
               .then(response => {
                     
                        Swal.fire({
                            title:"New Profile Successfully Saved!",
                            // text: "New Profile Successfully Save!",
                            icon: 'success',
                            confirmButtonText: 'Okay'
                            
                        }).then(function() {
                              
                              window.location.href = '/mswd/all-records';
                        });
                 
                }).catch(error => {
                    
                    if (!_.isEmpty(error.response)) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Fill out Required Fields',
                            
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
             
            
            
        }
    },
    data() {
            return {
                lastname:'',
                firstname:'',
                middlename:'',
                extension:'',
                birthdate:'',
                lgbt:'',
                weightstatus:'',
                nameofschool:'',
                inschool:'',
                nameofemergency:'',
                relationofemergency:'',
                contactnoofemergency:'',
                benefitstype:'',
                gender:'',
                barangay:'',
                address:'',
                ethnicity:'',
                disability:'',
                childClassification: '',
                bdate: '',

    };
  },
  computed: {
    ageCategory() {
      if (this.age >= 0 && this.age <= 2) {
        return "0-2";
      } else if (this.age >= 3 && this.age <= 4) {
        return "3-4";
      }
       else if (this.age >= 5 && this.age <= 12) {
        return "5-12";
    }
    else if (this.age >= 13 && this.age <= 18) {
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
          }
  },
};
</script>