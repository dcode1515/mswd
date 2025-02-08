@extends('layouts.template')
@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">MSWD</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Reports</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                
                        <div class="row">
                        <div class="col-md-12">
                        <div class="card">
                         
                              <div class="card-body card-block">
                                 <div class="row">
                            <div class="col-md-12">
                            <form action="{{route('filter.summary')}}" method="GET" target="_blank">
                                <label>Barangay: </label>
                                <select name="barangay" class="form-control" required>
                                        <option value="">Select Barangay</option>
                                        <option value="ALL">ALL</option> <!-- Add this line -->
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
                                    </select> <br> 
                                    <label>Category: </label>

                                    <select name="sel_type" id="sel_type"  class="form-control" required>
                                     <option value="">Select Category</option>
                                    <option value="Age Category">Age Category</option>
                                    <option value="Age">Age</option>
                                    <option value="Gender">Gender</option>
                                    <option value="Child Classification">Child Classification</option>
                                    <option value="LGBT">LGBT</option>
                                    <option value="Weight Status">Weight Status</option>
                                    <option value="None">None</option>
                                    </select> <br> 

                                <div id="div_id_agecategory" style="display: none">
                              <label>Age Category: </label>
                              <select name="age_category" class="form-control" >
                                <option value="">Select Age Category</option>
                                    <option value="0-2">0-2 Category</option>
                                    <option value="3-4">3-4 Category</option>
                                    <option value="5-12">5-12 Category</option>
                                    <option value="13-18">13-18 Category</option>
                                 
                                    </select> <br> 
                            </div>
                            <div id="div_id_filterage" style="display: none">
                              <label>Enter Age: </label>
                              <input type="text" class="form-control" name="agefilter" placeholder="Enter Age">
                            <br> 
                            </div>

                              <div id="div_id_gender" style="display: none">
                              <label> Choose Gender: </label>
                                <select name="gender" id="gender" class="form-control">
                                <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                            </select> <br> 
                            </div>

                            
                            <div id="div_id_classification" style="display: none">
                              <label>Choose Classification: </label>
                              <select name="school_type" class="form-control" >
                              <option value="">Select Child Classification</option>
                                    <option value="In School Youth">In School Youth</option>
                                    <option value="Out of School Youth">Out of School Youth</option>
                                    </select> <br> 
                            </div>

                            <div id="div_id_lgbt" style="display: none">
                              <label>Choose LGBT: </label>
                                <select name="lgbt"  class="form-control">
                                <option value="">Select LGBT</option>
                                    <option value="YES">Yes</option>
                                    <option value="NO">No</option>
                            </select> <br> 
                            </div>

                            <div id="div_id_weight" style="display: none">
                              <label>Choose Weight Status: </label>
                              <select name="weight_status" class="form-control" >
                                <option value="">Select Weight Status</option>
                                    <option value="Obese">Obese</option>
                                    <option value="Stunted">Stunted</option>
                                    <option value="Wasted">Wasted</option>
                                    <option value="Overweight">Overweight</option>
                                    </select> <br> 
                            </div>
                           
                            
                              <center><button type="submit" class="btn btn-danger">Generate</button></center>
                            
                            </div>
</form>       

                         
                          </div>
                               
                               
                            </div>
                        </div>
                    </div>

                    

                    
                    
                    
                </div>
                           
                        </div>
                  

                                </div>
                            </div>
                        </div> <!-- end row -->
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script>
 $('#sel_type').on('change', function () {
    // Hide all fields initially
    $('#div_id_gender').hide(500);
    $('#div_id_agecategory').hide(500);
    $('#div_id_filterage').hide(500);
    $('#div_id_classification').hide(500);
    $('#div_id_lgbt').hide(500);
    $('#div_id_weight').hide(500);
  
    var set_type = $('#sel_type').val();
  
    // Show the fields based on the selected category
    if (set_type == "Gender") {
        $('#div_id_gender').show(500);
    }
    if (set_type == "Age Category") {
        $('#div_id_agecategory').show(500);
        $('#div_id_gender').show(500); // Show gender field when Age Category is selected
    }
    if (set_type == "Age") {
        $('#div_id_filterage').show(500);
    }
    if (set_type == "Child Classification") {
        $('#div_id_classification').show(500);
    }
    if (set_type == "LGBT") {
        $('#div_id_lgbt').show(500);
    }
    if (set_type == "Weight Status") {
        $('#div_id_weight').show(500);
    }
});

 </script>
                  


@endsection
