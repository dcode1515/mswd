<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Carbon\Carbon;
use \PDF;
class mswdController extends Controller
{
    //

    public function allrecords(){
        $records = Profile::orderBy('lastname','asc')->where('status','=',"Active")->get();
        return view('mswd.allrecords',compact("records"));

    }
    public function britania (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"BRITANIA")->where('status','=',"Active")->get();
        return view('mswd.britania',compact("records"));

    }
    public function buhisan (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"BUHISAN")->where('status','=',"Active")->get();
        return view('mswd.buhisan',compact('records'));

    }
    public function buatong (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"BUATONG")->where('status','=',"Active")->get();
       return view('mswd.buatong',compact('records'));
    }
    public function hornasan (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"HORNASAN")->where('status','=',"Active")->get();
        return view('mswd.hornasan',compact('records'));

    }
    public function janipaan (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"JANIPAAN")->where('status','=',"Active")->get();
        return view('mswd.janipaan',compact('records'));

    }
    public function kauswagan (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"KAUSWAGAN")->where('status','=',"Active")->get();
        return view('mswd.kauswagan',compact('records'));

    }
    public function otieza (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"OTIEZA")->where('status','=',"Active")->get();
        return view('mswd.otieza',compact('records'));

    }
    public function poblacion (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"POBLACION")->where('status','=',"Active")->get();
        return view('mswd.poblacion',compact('records'));

    }
    public function pungtod (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"PUNGTOD")->where('status','=',"Active")->get();
        return view('mswd.pungtod',compact('records'));

    }
    public function pongon (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"PONG-ON")->where('status','=',"Active")->get();
        return view('mswd.pongon',compact('records'));

    }
    public function salvacion (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"SALVACION")->where('status','=',"Active")->get();
        return view('mswd.salvacion',compact('records'));

    }
    public function gata (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"GATA")->where('status','=',"Active")->get();
        return view('mswd.gata',compact('records'));

    }
    public function Santonino (){
        $records = Profile::orderBy('lastname','asc')->where('barangay','=',"SANTO NINO")->where('status','=',"Active")->get();
        return view('mswd.santonino',compact('records'));

    }

    public function is(){
        $records = Profile::orderBy('lastname','asc')->where('childClassification','=',"In School Youth")->where('status','=',"Active")->get();
        return view('mswd.is',compact('records'));

    }
    public function os(){
        $records = Profile::orderBy('lastname','asc')->where('childClassification','=',"Out of School Youth")->where('status','=',"Active")->get();
        return view('mswd.os',compact('records'));

    }
    public function archived (){
        $records = Profile::orderBy('lastname','asc')->where('status','=',"ARCHIVED")->get();
        return view('mswd.archived',compact('records'));

    }
    public function category1 (){
        $records = Profile::orderBy('lastname','asc')->where('ageCategory','=',"0-2")->get();
        return view('mswd.category1',compact('records'));

    }
    public function category2 (){
        $records = Profile::orderBy('lastname','asc')->where('ageCategory','=',"3-4")->get();
        return view('mswd.category2',compact('records'));

    }
    public function category3 (){
        $records = Profile::orderBy('lastname','asc')->where('ageCategory','=',"5-12")->get();
        return view('mswd.category3',compact('records'));

    }
    public function category4 (){
        $records = Profile::orderBy('lastname','asc')->where('ageCategory','=',"13-18")->get();
        return view('mswd.category4',compact('records'));

    }
  
    public function profile_add(){
        return view('mswd.profile_add');
    }
    public function reporting(){
        return view('mswd.report');
    }

    public function store_mswd_profile(Request $request){

       

            $now = Carbon::now()->format('Y');
        $text = "MSWD";
        $profileNo = Profile::IDGenerator(new Profile,'profile_no',5, $text.'-'.$now);
        
                $existingProfile = Profile::where('lastname', strtoupper($request->lastname))
                ->where('firstname', strtoupper($request->firstname))
                ->where('middlename', strtoupper($request->middlename))
                ->first();

                if ($existingProfile) {
                    $fullName = $existingProfile->firstname . ' ' . $existingProfile->middlename. ' ' .$existingProfile->lastname;
                    return response()->json(['error' => 'Profile  ' . $fullName . ' already exists.']);
                }

        
        $profile = new Profile();
        $profile->profile_no = $profileNo;
        $profile->lastname = strtoupper($request->lastname);
        $profile->firstname = strtoupper($request->firstname);
        $profile->middlename = strtoupper($request->middlename);
        $profile->extension = strtoupper($request->extension);
        $profile->birthdate = $request->bdate;
        $profile->age = $request->age;
        $profile->ageCategory = $request->ageCategory;
        $profile->lgbt = $request->lgbt;
        $profile->weightstatus = $request->weightstatus;
        $profile->childClassification = $request->childClassification;  
    
        $profile->typeofschool = $request->typeofschool;
        $profile->schoollevel = $request->schoollevel;
        $profile->nameofemergency = strtoupper($request->nameofemergency);
        $profile->relationofemergency = strtoupper($request->relationofemergency);
        $profile->contactnoofemergency = strtoupper($request->contactnoofemergency);
        $profile->contactnoofemergency = strtoupper($request->contactnoofemergency);
        $profile->disability = $request->disability;
        $profile->ethnicity = $request->ethnicity;
        $profile->weightstatus= $request->weightstatus;
        $profile->gender = $request->gender;
        $profile->barangay = $request->barangay;
        $profile->address = $request->address;
        $profile->adolescent = $request->adolescent;
        $profile->benefitstype = $request->benefitstype;
        $profile->forpsno = $request->forpsno;
        $profile->philhealth = $request->philhealth;
        //   $profile->philhealth_no = $request->philhealth_no;
        $profile->status = 'ACTIVE';
        $profile->save();
        return response()->json(['message','Profile Added!']);
      

         }               


        
    
    public function update_mswd_profile(Request $request,$id){

        // $now = Carbon::now()->format('Y');
        // $text = "MSWD";
        // $profileNo = Profile::IDGenerator(new Profile,'profile_no',5, $text.'-'.$now);
        
        $profile = Profile::find($id);
        //$profile->profile_no = $profileNo;
        $profile->lastname = strtoupper($request->profileLastname,);
        $profile->firstname = strtoupper($request->profileFirstname);
        $profile->middlename = strtoupper($request->profileMiddlename);
        $profile->extension = strtoupper($request->profileExtension);
        $profile->birthdate = $request->profileBdate;
        $profile->age = $request->profileAge;
        $profile->ageCategory = $request->profileAgecategory;
        $profile->lgbt = $request->profileLgbt;
        $profile->weightstatus = $request->profileWeight;
        $profile->childClassification = $request->profileClassification;
        $profile->nameofschool = $request->profileNameofschool;
        $profile->typeofschool = $request->profileInschool;
        $profile->schoollevel = $request->schoollevel;
        $profile->nameofemergency = strtoupper($request->profileNameofemergency);
        $profile->relationofemergency = strtoupper($request->profileRelationofemergency);
        $profile->contactnoofemergency = strtoupper($request->profileContactnoofemergency);
        $profile->contactnoofemergency = strtoupper($request->profileBenefitstype);
        $profile->disability = $request->profileDisability;
        $profile->ethnicity = $request->profileEthnicity;
        $profile->weightstatus= $request->weightstatus;
        $profile->gender = $request->profileGender;
        $profile->barangay = $request->profileBarangay;
        $profile->address = $request->profileAddress;
        $profile->adolescent = $request->adolescent;
        $profile->benefitstype = $request->benefitstype;
        $profile->forpsno = $request->forpsno;
        $profile->philhealth = $request->philhealth;
          $profile->philhealth_no = $request->philhealthno;
        $profile->status = 'ACTIVE';
        $profile->save();
        return response()->json(['message','Profile Added!']);

    }
    public function update_profile(Request $request,$id){

        // $now = Carbon::now()->format('Y');
        // $text = "MSWD";
        // $profileNo = Profile::IDGenerator(new Profile,'profile_no',5, $text.'-'.$now);
        
        $profile = Profile::find($id);
        // $profile->profile_no = $profileNo;
        $profile->lastname = strtoupper($request->profileLastname);
        $profile->firstname = strtoupper($request->profileFirstname);
        $profile->middlename = strtoupper($request->profileMiddlename);
        $profile->extension = strtoupper($request->profileExtension);
        $profile->birthdate = $request->profileBdate;
        $profile->age = $request->profileAge;
        $profile->ageCategory = $request->profileAgecategory;
        $profile->lgbt = $request->profileLgbt;
        $profile->weightstatus = $request->profileWeight;
        if($request->profileClassification=="Out of School Youth"){
            $profile->nameofschool = null;
            $profile->inschool = null;
        }
        if($request->profileClassification=="In School Youth"){
            $profile->nameofschool = $request->profileNameofschool;
            $profile->inschool = $request->profileInschool;
        }
        $profile->childClassification = $request->profileClassification;
       
        $profile->nameofemergency = strtoupper($request->profileNameofemergency);
        $profile->relationofemergency = strtoupper($request->profileRelationofemergency);
        $profile->contactnoofemergency = strtoupper($request->profileContactnoofemergency);
        $profile->disability = $request->profileDisability;
        $profile->ethnicity = $request->profileEthnicity;
        $profile->weightstatus= $request->weightstatus;
        $profile->gender = $request->profileGender;
        $profile->barangay = $request->profileBarangay;
        $profile->address = $request->profileAddress;
        $profile->benefitstype = $request->profileBenefitstype;
       
        $profile->save();
        return response()->json(['message','Profile Updated!']);
      
        

    }

    public function get_mswd_profile(Request $request)
{
    try {
        $search = $request->query('search');
        $perPage = $request->query('per_page', 10);
        $perPage = max(1, min(100, $perPage)); // Validate per_page value

        // Query profiles with optional search and pagination
        $profiles = Profile::when($search, function ($query, $search) {
            return $query->where(function ($q) use ($search) {
                $q->where('profile_no', 'like', '%' . $search . '%')
                    ->orWhere('lastname', 'like', '%' . $search . '%')
                    ->orWhere('firstname', 'like', '%' . $search . '%')
                    ->orWhere('middlename', 'like', '%' . $search . '%')
                    ->orWhere('extension', 'like', '%' . $search . '%')
                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                    ->orWhere('age', 'like', '%' . $search . '%')
                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                    ->orWhere('gender', 'like', '%' . $search . '%')
                    ->orWhere('barangay', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                    ->orWhere('disability', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%');
            });
        })
        ->orderBy('firstname', 'desc')
        ->paginate($perPage);

        return response()->json([
            'success' => true,
            'message' => 'Profiles retrieved successfully.',
            'data' => $profiles,
            'meta' => [
                'total' => $profiles->total(),
                'per_page' => $profiles->perPage(),
                'current_page' => $profiles->currentPage(),
                'last_page' => $profiles->lastPage(),
            ],
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'An error occurred while retrieving profiles.',
            'error' => $e->getMessage(),
        ], 500);
    }
}
    public function get_barangay_profile_britania(Request $request){
        
        try {
            $search = $request->query('search');
            $perPage = $request->query('per_page', 10);
            $perPage = max(1, min(100, $perPage)); // Validate per_page value
    
            // Query profiles with optional search and pagination
            $profiles = Profile::when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('profile_no', 'like', '%' . $search . '%')
                        ->orWhere('lastname', 'like', '%' . $search . '%')
                        ->orWhere('firstname', 'like', '%' . $search . '%')
                        ->orWhere('middlename', 'like', '%' . $search . '%')
                        ->orWhere('extension', 'like', '%' . $search . '%')
                        ->orWhere('birthdate', 'like', '%' . $search . '%')
                        ->orWhere('ageCategory', 'like', '%' . $search . '%')
                        ->orWhere('age', 'like', '%' . $search . '%')
                        ->orWhere('lgbt', 'like', '%' . $search . '%')
                        ->orWhere('weightstatus', 'like', '%' . $search . '%')
                        ->orWhere('childClassification', 'like', '%' . $search . '%')
                        ->orWhere('nameofschool', 'like', '%' . $search . '%')
                        ->orWhere('typeofschool', 'like', '%' . $search . '%')
                        ->orWhere('schoollevel', 'like', '%' . $search . '%')
                        ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                        ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                        ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                        ->orWhere('benefitstype', 'like', '%' . $search . '%')
                        ->orWhere('gender', 'like', '%' . $search . '%')
                        ->orWhere('barangay', 'like', '%' . $search . '%')
                        ->orWhere('address', 'like', '%' . $search . '%')
                        ->orWhere('ethnicity', 'like', '%' . $search . '%')
                        ->orWhere('disability', 'like', '%' . $search . '%')
                        ->orWhere('status', 'like', '%' . $search . '%');
                });
            })
            ->where('barangay','=','BRITANIA')
            ->orderBy('firstname', 'desc')
            ->paginate($perPage);
    
            return response()->json([
                'success' => true,
                'message' => 'Profiles retrieved successfully.',
                'data' => $profiles,
                'meta' => [
                    'total' => $profiles->total(),
                    'per_page' => $profiles->perPage(),
                    'current_page' => $profiles->currentPage(),
                    'last_page' => $profiles->lastPage(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while retrieving profiles.',
                'error' => $e->getMessage(),
            ], 500);
        }
       
}
   public function get_barangay_is(Request $request){
        
     
    try {
        $search = $request->query('search');
        $perPage = $request->query('per_page', 10);
        $perPage = max(1, min(100, $perPage)); // Validate per_page value

        // Query profiles with optional search and pagination
        $profiles = Profile::when($search, function ($query, $search) {
            return $query->where(function ($q) use ($search) {
                $q->where('profile_no', 'like', '%' . $search . '%')
                    ->orWhere('lastname', 'like', '%' . $search . '%')
                    ->orWhere('firstname', 'like', '%' . $search . '%')
                    ->orWhere('middlename', 'like', '%' . $search . '%')
                    ->orWhere('extension', 'like', '%' . $search . '%')
                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                    ->orWhere('age', 'like', '%' . $search . '%')
                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                    ->orWhere('gender', 'like', '%' . $search . '%')
                    ->orWhere('barangay', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                    ->orWhere('disability', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%');
            });
        })
        ->where('childClassification','=','In School Youth')
        ->orderBy('firstname', 'desc')
        ->paginate($perPage);

        return response()->json([
            'success' => true,
            'message' => 'Profiles retrieved successfully.',
            'data' => $profiles,
            'meta' => [
                'total' => $profiles->total(),
                'per_page' => $profiles->perPage(),
                'current_page' => $profiles->currentPage(),
                'last_page' => $profiles->lastPage(),
            ],
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'An error occurred while retrieving profiles.',
            'error' => $e->getMessage(),
        ], 500);
    }
}

public function get_barangay_os(Request $request){
    
    try {
        $search = $request->query('search');
        $perPage = $request->query('per_page', 10);
        $perPage = max(1, min(100, $perPage)); // Validate per_page value

        // Query profiles with optional search and pagination
        $profiles = Profile::when($search, function ($query, $search) {
            return $query->where(function ($q) use ($search) {
                $q->where('profile_no', 'like', '%' . $search . '%')
                    ->orWhere('lastname', 'like', '%' . $search . '%')
                    ->orWhere('firstname', 'like', '%' . $search . '%')
                    ->orWhere('middlename', 'like', '%' . $search . '%')
                    ->orWhere('extension', 'like', '%' . $search . '%')
                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                    ->orWhere('age', 'like', '%' . $search . '%')
                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                    ->orWhere('gender', 'like', '%' . $search . '%')
                    ->orWhere('barangay', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                    ->orWhere('disability', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%');
            });
        })
        ->where('childClassification','=','Out of School Youth')
        ->orderBy('firstname', 'desc')
        ->paginate($perPage);

        return response()->json([
            'success' => true,
            'message' => 'Profiles retrieved successfully.',
            'data' => $profiles,
            'meta' => [
                'total' => $profiles->total(),
                'per_page' => $profiles->perPage(),
                'current_page' => $profiles->currentPage(),
                'last_page' => $profiles->lastPage(),
            ],
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'An error occurred while retrieving profiles.',
            'error' => $e->getMessage(),
        ], 500);
    }
}

    public function get_barangay_buatong(Request $request){
        try {
            $search = $request->query('search');
            $perPage = $request->query('per_page', 10);
            $perPage = max(1, min(100, $perPage)); // Validate per_page value
    
            // Query profiles with optional search and pagination
            $profiles = Profile::when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('profile_no', 'like', '%' . $search . '%')
                        ->orWhere('lastname', 'like', '%' . $search . '%')
                        ->orWhere('firstname', 'like', '%' . $search . '%')
                        ->orWhere('middlename', 'like', '%' . $search . '%')
                        ->orWhere('extension', 'like', '%' . $search . '%')
                        ->orWhere('birthdate', 'like', '%' . $search . '%')
                        ->orWhere('ageCategory', 'like', '%' . $search . '%')
                        ->orWhere('age', 'like', '%' . $search . '%')
                        ->orWhere('lgbt', 'like', '%' . $search . '%')
                        ->orWhere('weightstatus', 'like', '%' . $search . '%')
                        ->orWhere('childClassification', 'like', '%' . $search . '%')
                        ->orWhere('nameofschool', 'like', '%' . $search . '%')
                        ->orWhere('typeofschool', 'like', '%' . $search . '%')
                        ->orWhere('schoollevel', 'like', '%' . $search . '%')
                        ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                        ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                        ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                        ->orWhere('benefitstype', 'like', '%' . $search . '%')
                        ->orWhere('gender', 'like', '%' . $search . '%')
                        ->orWhere('barangay', 'like', '%' . $search . '%')
                        ->orWhere('address', 'like', '%' . $search . '%')
                        ->orWhere('ethnicity', 'like', '%' . $search . '%')
                        ->orWhere('disability', 'like', '%' . $search . '%')
                        ->orWhere('status', 'like', '%' . $search . '%');
                });
            })
            ->where('barangay','=','BUATONG')
            ->orderBy('firstname', 'desc')
            ->paginate($perPage);
    
            return response()->json([
                'success' => true,
                'message' => 'Profiles retrieved successfully.',
                'data' => $profiles,
                'meta' => [
                    'total' => $profiles->total(),
                    'per_page' => $profiles->perPage(),
                    'current_page' => $profiles->currentPage(),
                    'last_page' => $profiles->lastPage(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while retrieving profiles.',
                'error' => $e->getMessage(),
            ], 500);
        }
                }
                public function get_barangay_buhisan(Request $request){
                        
                    try {
                        $search = $request->query('search');
                        $perPage = $request->query('per_page', 10);
                        $perPage = max(1, min(100, $perPage)); // Validate per_page value
                
                        // Query profiles with optional search and pagination
                        $profiles = Profile::when($search, function ($query, $search) {
                            return $query->where(function ($q) use ($search) {
                                $q->where('profile_no', 'like', '%' . $search . '%')
                                    ->orWhere('lastname', 'like', '%' . $search . '%')
                                    ->orWhere('firstname', 'like', '%' . $search . '%')
                                    ->orWhere('middlename', 'like', '%' . $search . '%')
                                    ->orWhere('extension', 'like', '%' . $search . '%')
                                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                                    ->orWhere('age', 'like', '%' . $search . '%')
                                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                                    ->orWhere('gender', 'like', '%' . $search . '%')
                                    ->orWhere('barangay', 'like', '%' . $search . '%')
                                    ->orWhere('address', 'like', '%' . $search . '%')
                                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                                    ->orWhere('disability', 'like', '%' . $search . '%')
                                    ->orWhere('status', 'like', '%' . $search . '%');
                            });
                        })
                        ->where('barangay','=','BUHISAN')
                        ->orderBy('firstname', 'desc')
                        ->paginate($perPage);
                
                        return response()->json([
                            'success' => true,
                            'message' => 'Profiles retrieved successfully.',
                            'data' => $profiles,
                            'meta' => [
                                'total' => $profiles->total(),
                                'per_page' => $profiles->perPage(),
                                'current_page' => $profiles->currentPage(),
                                'last_page' => $profiles->lastPage(),
                            ],
                        ]);
                    } catch (\Exception $e) {
                        return response()->json([
                            'success' => false,
                            'message' => 'An error occurred while retrieving profiles.',
                            'error' => $e->getMessage(),
                        ], 500);
                    }
                }

                public function get_barangay_gata(Request $request){
                        
                    $columns = ['profile_no', 'name', 'bdate','age','gender', 'barangay', 'address'];
                    $length = $request->input('length');
                    $column = $request->input('column');
                    $dir = $request->input('dir');
                    $searchValue = $request->input('search');
                    
                    $data = Profile::where('status','=','ACTIVE')->where('barangay','=','GATA')->orderBy($columns[$column], $dir);
                

                    if($searchValue){
                        $data->where(function($data) use ($searchValue) {
                            $data->where('profile_no', 'like', '%' . $searchValue . '%')
                            ->orWhere('lastname', 'like', '%' . $searchValue . '%')
                            ->orWhere('firstname', 'like', '%' . $searchValue . '%')
                            ->orWhere('middlename', 'like', '%' . $searchValue . '%')
                            ->orWhere('extension', 'like', '%' . $searchValue . '%')
                            ->orWhere('birthdate', 'like', '%' . $searchValue . '%')
                            ->orWhere('ageCategory', 'like', '%' . $searchValue . '%')
                            ->orWhere('age', 'like', '%' . $searchValue . '%')
                            ->orWhere('lgbt', 'like', '%' . $searchValue . '%')
                            ->orWhere('weightstatus', 'like', '%' . $searchValue . '%')
                            ->orWhere('childClassification', 'like', '%' . $searchValue . '%')
                            ->orWhere('nameofschool', 'like', '%' . $searchValue . '%')
                            ->orWhere('typeofschool', 'like', '%' . $searchValue . '%')
                            ->orWhere('schoollevel', 'like', '%' . $searchValue . '%')
                            ->orWhere('nameofemergency', 'like', '%' . $searchValue . '%')
                            ->orWhere('relationofemergency', 'like', '%' . $searchValue . '%')
                            ->orWhere('contactnoofemergency', 'like', '%' . $searchValue . '%')
                            ->orWhere('benefitstype', 'like', '%' . $searchValue . '%')
                            ->orWhere('gender', 'like', '%' . $searchValue . '%')
                            ->orWhere('barangay', 'like', '%' . $searchValue . '%')
                            ->orWhere('address', 'like', '%' . $searchValue . '%')
                            ->orWhere('ethnicity', 'like', '%' . $searchValue . '%')
                            ->orWhere('disability', 'like', '%' . $searchValue . '%')
                            ->orWhere('status', 'like', '%' . $searchValue . '%');
                            
                        });
                        

                    }
                    $data = $data->paginate($length);
                    return ['data' => $data, 'draw' => $request->input('draw')];
                }

                public function get_barangay_hornasan(Request $request){
                        
                    try {
                        $search = $request->query('search');
                        $perPage = $request->query('per_page', 10);
                        $perPage = max(1, min(100, $perPage)); // Validate per_page value
                
                        // Query profiles with optional search and pagination
                        $profiles = Profile::when($search, function ($query, $search) {
                            return $query->where(function ($q) use ($search) {
                                $q->where('profile_no', 'like', '%' . $search . '%')
                                    ->orWhere('lastname', 'like', '%' . $search . '%')
                                    ->orWhere('firstname', 'like', '%' . $search . '%')
                                    ->orWhere('middlename', 'like', '%' . $search . '%')
                                    ->orWhere('extension', 'like', '%' . $search . '%')
                                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                                    ->orWhere('age', 'like', '%' . $search . '%')
                                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                                    ->orWhere('gender', 'like', '%' . $search . '%')
                                    ->orWhere('barangay', 'like', '%' . $search . '%')
                                    ->orWhere('address', 'like', '%' . $search . '%')
                                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                                    ->orWhere('disability', 'like', '%' . $search . '%')
                                    ->orWhere('status', 'like', '%' . $search . '%');
                            });
                        })
                        ->where('barangay','=','HORNASAN')
                        ->orderBy('firstname', 'desc')
                        ->paginate($perPage);
                
                        return response()->json([
                            'success' => true,
                            'message' => 'Profiles retrieved successfully.',
                            'data' => $profiles,
                            'meta' => [
                                'total' => $profiles->total(),
                                'per_page' => $profiles->perPage(),
                                'current_page' => $profiles->currentPage(),
                                'last_page' => $profiles->lastPage(),
                            ],
                        ]);
                    } catch (\Exception $e) {
                        return response()->json([
                            'success' => false,
                            'message' => 'An error occurred while retrieving profiles.',
                            'error' => $e->getMessage(),
                        ], 500);
                }
            }

                public function get_barangay_janipaan(Request $request){
                        
                          
                    try {
                        $search = $request->query('search');
                        $perPage = $request->query('per_page', 10);
                        $perPage = max(1, min(100, $perPage)); // Validate per_page value
                
                        // Query profiles with optional search and pagination
                        $profiles = Profile::when($search, function ($query, $search) {
                            return $query->where(function ($q) use ($search) {
                                $q->where('profile_no', 'like', '%' . $search . '%')
                                    ->orWhere('lastname', 'like', '%' . $search . '%')
                                    ->orWhere('firstname', 'like', '%' . $search . '%')
                                    ->orWhere('middlename', 'like', '%' . $search . '%')
                                    ->orWhere('extension', 'like', '%' . $search . '%')
                                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                                    ->orWhere('age', 'like', '%' . $search . '%')
                                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                                    ->orWhere('gender', 'like', '%' . $search . '%')
                                    ->orWhere('barangay', 'like', '%' . $search . '%')
                                    ->orWhere('address', 'like', '%' . $search . '%')
                                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                                    ->orWhere('disability', 'like', '%' . $search . '%')
                                    ->orWhere('status', 'like', '%' . $search . '%');
                            });
                        })
                        ->where('barangay','=','JANIPAAN')
                        ->orderBy('firstname', 'desc')
                        ->paginate($perPage);
                
                        return response()->json([
                            'success' => true,
                            'message' => 'Profiles retrieved successfully.',
                            'data' => $profiles,
                            'meta' => [
                                'total' => $profiles->total(),
                                'per_page' => $profiles->perPage(),
                                'current_page' => $profiles->currentPage(),
                                'last_page' => $profiles->lastPage(),
                            ],
                        ]);
                    } catch (\Exception $e) {
                        return response()->json([
                            'success' => false,
                            'message' => 'An error occurred while retrieving profiles.',
                            'error' => $e->getMessage(),
                        ], 500);
                }
                }
                public function get_barangay_kauswagan(Request $request){
                        
                         
                          
                    try {
                        $search = $request->query('search');
                        $perPage = $request->query('per_page', 10);
                        $perPage = max(1, min(100, $perPage)); // Validate per_page value
                
                        // Query profiles with optional search and pagination
                        $profiles = Profile::when($search, function ($query, $search) {
                            return $query->where(function ($q) use ($search) {
                                $q->where('profile_no', 'like', '%' . $search . '%')
                                    ->orWhere('lastname', 'like', '%' . $search . '%')
                                    ->orWhere('firstname', 'like', '%' . $search . '%')
                                    ->orWhere('middlename', 'like', '%' . $search . '%')
                                    ->orWhere('extension', 'like', '%' . $search . '%')
                                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                                    ->orWhere('age', 'like', '%' . $search . '%')
                                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                                    ->orWhere('gender', 'like', '%' . $search . '%')
                                    ->orWhere('barangay', 'like', '%' . $search . '%')
                                    ->orWhere('address', 'like', '%' . $search . '%')
                                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                                    ->orWhere('disability', 'like', '%' . $search . '%')
                                    ->orWhere('status', 'like', '%' . $search . '%');
                            });
                        })
                        ->where('barangay','=','KAUSWAGAN')
                        ->orderBy('firstname', 'desc')
                        ->paginate($perPage);
                
                        return response()->json([
                            'success' => true,
                            'message' => 'Profiles retrieved successfully.',
                            'data' => $profiles,
                            'meta' => [
                                'total' => $profiles->total(),
                                'per_page' => $profiles->perPage(),
                                'current_page' => $profiles->currentPage(),
                                'last_page' => $profiles->lastPage(),
                            ],
                        ]);
                    } catch (\Exception $e) {
                        return response()->json([
                            'success' => false,
                            'message' => 'An error occurred while retrieving profiles.',
                            'error' => $e->getMessage(),
                        ], 500);
                }
                }

                public function get_barangay_otieza(Request $request){
                         
                          
                    try {
                        $search = $request->query('search');
                        $perPage = $request->query('per_page', 10);
                        $perPage = max(1, min(100, $perPage)); // Validate per_page value
                
                        // Query profiles with optional search and pagination
                        $profiles = Profile::when($search, function ($query, $search) {
                            return $query->where(function ($q) use ($search) {
                                $q->where('profile_no', 'like', '%' . $search . '%')
                                    ->orWhere('lastname', 'like', '%' . $search . '%')
                                    ->orWhere('firstname', 'like', '%' . $search . '%')
                                    ->orWhere('middlename', 'like', '%' . $search . '%')
                                    ->orWhere('extension', 'like', '%' . $search . '%')
                                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                                    ->orWhere('age', 'like', '%' . $search . '%')
                                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                                    ->orWhere('gender', 'like', '%' . $search . '%')
                                    ->orWhere('barangay', 'like', '%' . $search . '%')
                                    ->orWhere('address', 'like', '%' . $search . '%')
                                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                                    ->orWhere('disability', 'like', '%' . $search . '%')
                                    ->orWhere('status', 'like', '%' . $search . '%');
                            });
                        })
                        ->where('barangay','=','OTIEZA')
                        ->orderBy('firstname', 'desc')
                        ->paginate($perPage);
                
                        return response()->json([
                            'success' => true,
                            'message' => 'Profiles retrieved successfully.',
                            'data' => $profiles,
                            'meta' => [
                                'total' => $profiles->total(),
                                'per_page' => $profiles->perPage(),
                                'current_page' => $profiles->currentPage(),
                                'last_page' => $profiles->lastPage(),
                            ],
                        ]);
                    } catch (\Exception $e) {
                        return response()->json([
                            'success' => false,
                            'message' => 'An error occurred while retrieving profiles.',
                            'error' => $e->getMessage(),
                        ], 500);
                }
                }

                public function get_barangay_poblacion(Request $request){
                        
                    $columns = ['profile_no', 'name', 'bdate','age','gender', 'barangay', 'address'];
                    $length = $request->input('length');
                    $column = $request->input('column');
                    $dir = $request->input('dir');
                    $searchValue = $request->input('search');
                    
                    $data = Profile::where('status','=','ACTIVE')->where('barangay','=','POBLACION')->orderBy($columns[$column], $dir);
                

                    if($searchValue){
                        $data->where(function($data) use ($searchValue) {
                            $data->where('profile_no', 'like', '%' . $searchValue . '%')
                            ->orWhere('lastname', 'like', '%' . $searchValue . '%')
                            ->orWhere('firstname', 'like', '%' . $searchValue . '%')
                            ->orWhere('middlename', 'like', '%' . $searchValue . '%')
                            ->orWhere('extension', 'like', '%' . $searchValue . '%')
                            ->orWhere('birthdate', 'like', '%' . $searchValue . '%')
                            ->orWhere('ageCategory', 'like', '%' . $searchValue . '%')
                            ->orWhere('age', 'like', '%' . $searchValue . '%')
                            ->orWhere('lgbt', 'like', '%' . $searchValue . '%')
                            ->orWhere('weightstatus', 'like', '%' . $searchValue . '%')
                            ->orWhere('childClassification', 'like', '%' . $searchValue . '%')
                            ->orWhere('nameofschool', 'like', '%' . $searchValue . '%')
                            ->orWhere('typeofschool', 'like', '%' . $searchValue . '%')
                            ->orWhere('schoollevel', 'like', '%' . $searchValue . '%')
                            ->orWhere('nameofemergency', 'like', '%' . $searchValue . '%')
                            ->orWhere('relationofemergency', 'like', '%' . $searchValue . '%')
                            ->orWhere('contactnoofemergency', 'like', '%' . $searchValue . '%')
                            ->orWhere('benefitstype', 'like', '%' . $searchValue . '%')
                            ->orWhere('gender', 'like', '%' . $searchValue . '%')
                            ->orWhere('barangay', 'like', '%' . $searchValue . '%')
                            ->orWhere('address', 'like', '%' . $searchValue . '%')
                            ->orWhere('ethnicity', 'like', '%' . $searchValue . '%')
                            ->orWhere('disability', 'like', '%' . $searchValue . '%')
                            ->orWhere('status', 'like', '%' . $searchValue . '%');
                            
                        });
                        

                    }
                    $data = $data->paginate($length);
                    return ['data' => $data, 'draw' => $request->input('draw')];
                }

                public function get_barangay_pungtod(Request $request){
                        
                       
                    try {
                        $search = $request->query('search');
                        $perPage = $request->query('per_page', 10);
                        $perPage = max(1, min(100, $perPage)); // Validate per_page value
                
                        // Query profiles with optional search and pagination
                        $profiles = Profile::when($search, function ($query, $search) {
                            return $query->where(function ($q) use ($search) {
                                $q->where('profile_no', 'like', '%' . $search . '%')
                                    ->orWhere('lastname', 'like', '%' . $search . '%')
                                    ->orWhere('firstname', 'like', '%' . $search . '%')
                                    ->orWhere('middlename', 'like', '%' . $search . '%')
                                    ->orWhere('extension', 'like', '%' . $search . '%')
                                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                                    ->orWhere('age', 'like', '%' . $search . '%')
                                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                                    ->orWhere('gender', 'like', '%' . $search . '%')
                                    ->orWhere('barangay', 'like', '%' . $search . '%')
                                    ->orWhere('address', 'like', '%' . $search . '%')
                                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                                    ->orWhere('disability', 'like', '%' . $search . '%')
                                    ->orWhere('status', 'like', '%' . $search . '%');
                            });
                        })
                        ->where('barangay','=','PUNGTOD')
                        ->orderBy('firstname', 'desc')
                        ->paginate($perPage);
                
                        return response()->json([
                            'success' => true,
                            'message' => 'Profiles retrieved successfully.',
                            'data' => $profiles,
                            'meta' => [
                                'total' => $profiles->total(),
                                'per_page' => $profiles->perPage(),
                                'current_page' => $profiles->currentPage(),
                                'last_page' => $profiles->lastPage(),
                            ],
                        ]);
                    } catch (\Exception $e) {
                        return response()->json([
                            'success' => false,
                            'message' => 'An error occurred while retrieving profiles.',
                            'error' => $e->getMessage(),
                        ], 500);
                }
                }

                public function get_barangay_pongon(Request $request){
                        
                         
                       
                    try {
                        $search = $request->query('search');
                        $perPage = $request->query('per_page', 10);
                        $perPage = max(1, min(100, $perPage)); // Validate per_page value
                
                        // Query profiles with optional search and pagination
                        $profiles = Profile::when($search, function ($query, $search) {
                            return $query->where(function ($q) use ($search) {
                                $q->where('profile_no', 'like', '%' . $search . '%')
                                    ->orWhere('lastname', 'like', '%' . $search . '%')
                                    ->orWhere('firstname', 'like', '%' . $search . '%')
                                    ->orWhere('middlename', 'like', '%' . $search . '%')
                                    ->orWhere('extension', 'like', '%' . $search . '%')
                                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                                    ->orWhere('age', 'like', '%' . $search . '%')
                                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                                    ->orWhere('gender', 'like', '%' . $search . '%')
                                    ->orWhere('barangay', 'like', '%' . $search . '%')
                                    ->orWhere('address', 'like', '%' . $search . '%')
                                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                                    ->orWhere('disability', 'like', '%' . $search . '%')
                                    ->orWhere('status', 'like', '%' . $search . '%');
                            });
                        })
                        ->where('barangay','=','PONG-ON')
                        ->orderBy('firstname', 'desc')
                        ->paginate($perPage);
                
                        return response()->json([
                            'success' => true,
                            'message' => 'Profiles retrieved successfully.',
                            'data' => $profiles,
                            'meta' => [
                                'total' => $profiles->total(),
                                'per_page' => $profiles->perPage(),
                                'current_page' => $profiles->currentPage(),
                                'last_page' => $profiles->lastPage(),
                            ],
                        ]);
                    } catch (\Exception $e) {
                        return response()->json([
                            'success' => false,
                            'message' => 'An error occurred while retrieving profiles.',
                            'error' => $e->getMessage(),
                        ], 500);
                }
                }

                public function get_barangay_salvacion(Request $request){
                        
                       
                    try {
                        $search = $request->query('search');
                        $perPage = $request->query('per_page', 10);
                        $perPage = max(1, min(100, $perPage)); // Validate per_page value
                
                        // Query profiles with optional search and pagination
                        $profiles = Profile::when($search, function ($query, $search) {
                            return $query->where(function ($q) use ($search) {
                                $q->where('profile_no', 'like', '%' . $search . '%')
                                    ->orWhere('lastname', 'like', '%' . $search . '%')
                                    ->orWhere('firstname', 'like', '%' . $search . '%')
                                    ->orWhere('middlename', 'like', '%' . $search . '%')
                                    ->orWhere('extension', 'like', '%' . $search . '%')
                                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                                    ->orWhere('age', 'like', '%' . $search . '%')
                                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                                    ->orWhere('gender', 'like', '%' . $search . '%')
                                    ->orWhere('barangay', 'like', '%' . $search . '%')
                                    ->orWhere('address', 'like', '%' . $search . '%')
                                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                                    ->orWhere('disability', 'like', '%' . $search . '%')
                                    ->orWhere('status', 'like', '%' . $search . '%');
                            });
                        })
                        ->where('barangay','=','SALVACION')
                        ->orderBy('firstname', 'desc')
                        ->paginate($perPage);
                
                        return response()->json([
                            'success' => true,
                            'message' => 'Profiles retrieved successfully.',
                            'data' => $profiles,
                            'meta' => [
                                'total' => $profiles->total(),
                                'per_page' => $profiles->perPage(),
                                'current_page' => $profiles->currentPage(),
                                'last_page' => $profiles->lastPage(),
                            ],
                        ]);
                    } catch (\Exception $e) {
                        return response()->json([
                            'success' => false,
                            'message' => 'An error occurred while retrieving profiles.',
                            'error' => $e->getMessage(),
                        ], 500);
                }
                }

                public function get_barangay_santonino(Request $request){
                        
                       
                    try {
                        $search = $request->query('search');
                        $perPage = $request->query('per_page', 10);
                        $perPage = max(1, min(100, $perPage)); // Validate per_page value
                
                        // Query profiles with optional search and pagination
                        $profiles = Profile::when($search, function ($query, $search) {
                            return $query->where(function ($q) use ($search) {
                                $q->where('profile_no', 'like', '%' . $search . '%')
                                    ->orWhere('lastname', 'like', '%' . $search . '%')
                                    ->orWhere('firstname', 'like', '%' . $search . '%')
                                    ->orWhere('middlename', 'like', '%' . $search . '%')
                                    ->orWhere('extension', 'like', '%' . $search . '%')
                                    ->orWhere('birthdate', 'like', '%' . $search . '%')
                                    ->orWhere('ageCategory', 'like', '%' . $search . '%')
                                    ->orWhere('age', 'like', '%' . $search . '%')
                                    ->orWhere('lgbt', 'like', '%' . $search . '%')
                                    ->orWhere('weightstatus', 'like', '%' . $search . '%')
                                    ->orWhere('childClassification', 'like', '%' . $search . '%')
                                    ->orWhere('nameofschool', 'like', '%' . $search . '%')
                                    ->orWhere('typeofschool', 'like', '%' . $search . '%')
                                    ->orWhere('schoollevel', 'like', '%' . $search . '%')
                                    ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                                    ->orWhere('benefitstype', 'like', '%' . $search . '%')
                                    ->orWhere('gender', 'like', '%' . $search . '%')
                                    ->orWhere('barangay', 'like', '%' . $search . '%')
                                    ->orWhere('address', 'like', '%' . $search . '%')
                                    ->orWhere('ethnicity', 'like', '%' . $search . '%')
                                    ->orWhere('disability', 'like', '%' . $search . '%')
                                    ->orWhere('status', 'like', '%' . $search . '%');
                            });
                        })
                        ->where('barangay','=','SANTO NINO')
                        ->orderBy('firstname', 'desc')
                        ->paginate($perPage);
                
                        return response()->json([
                            'success' => true,
                            'message' => 'Profiles retrieved successfully.',
                            'data' => $profiles,
                            'meta' => [
                                'total' => $profiles->total(),
                                'per_page' => $profiles->perPage(),
                                'current_page' => $profiles->currentPage(),
                                'last_page' => $profiles->lastPage(),
                            ],
                        ]);
                    } catch (\Exception $e) {
                        return response()->json([
                            'success' => false,
                            'message' => 'An error occurred while retrieving profiles.',
                            'error' => $e->getMessage(),
                        ], 500);
                }
                }


                

    public function archive(Request $request){
        $mswd = Profile::find($request->id);
        $mswd->status="ARCHIVED";
        $mswd->save();
        return redirect()->back()->with('success', 'Profile Archive Successfully.');
    }
    public function edit ($id){
        $mswd = Profile::find($id);
        return view('mswd.edit',compact('mswd'));
    }
    public function get_archived(Request $request){
        
			$columns = ['profile_no', 'name', 'bdate','age','gender', 'barangay', 'address'];
			$length = $request->input('length');
			$column = $request->input('column');
			$dir = $request->input('dir');
			$searchValue = $request->input('search');
			$data = Profile::where('status','=','ARCHIVED')->orderBy($columns[$column], $dir);

			if($searchValue){
				$data->where(function($data) use ($searchValue) {
					$data->where('profile_no', 'like', '%' . $searchValue . '%')
					->orWhere('lastname', 'like', '%' . $searchValue . '%')
                    ->orWhere('firstname', 'like', '%' . $searchValue . '%')
					->orWhere('middlename', 'like', '%' . $searchValue . '%')
					->orWhere('extension', 'like', '%' . $searchValue . '%')
					->orWhere('birthdate', 'like', '%' . $searchValue . '%')
                    ->orWhere('ageCategory', 'like', '%' . $searchValue . '%')
					->orWhere('age', 'like', '%' . $searchValue . '%')
					->orWhere('lgbt', 'like', '%' . $searchValue . '%')
					->orWhere('weightstatus', 'like', '%' . $searchValue . '%')
                    ->orWhere('childClassification', 'like', '%' . $searchValue . '%')
                    ->orWhere('nameofschool', 'like', '%' . $searchValue . '%')
                    ->orWhere('inschool', 'like', '%' . $searchValue . '%')
                    ->orWhere('nameofemergency', 'like', '%' . $searchValue . '%')
                    ->orWhere('relationofemergency', 'like', '%' . $searchValue . '%')
                    ->orWhere('contactnoofemergency', 'like', '%' . $searchValue . '%')
                    ->orWhere('benefitstype', 'like', '%' . $searchValue . '%')
                    ->orWhere('gender', 'like', '%' . $searchValue . '%')
                    ->orWhere('barangay', 'like', '%' . $searchValue . '%')
                    ->orWhere('address', 'like', '%' . $searchValue . '%')
                    ->orWhere('ethnicity', 'like', '%' . $searchValue . '%')
                    ->orWhere('disability', 'like', '%' . $searchValue . '%')
                    ->orWhere('status', 'like', '%' . $searchValue . '%');
					
				});
				

			}
			$data = $data->paginate($length);
		    return ['data' => $data, 'draw' => $request->input('draw')];
    }
    public function get_age02(Request $request){
        
        try {
            $search = $request->query('search');
            $perPage = $request->query('per_page', 10);
            $perPage = max(1, min(100, $perPage)); // Validate per_page value
    
            // Query profiles with optional search and pagination
            $profiles = Profile::when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('profile_no', 'like', '%' . $search . '%')
                        ->orWhere('lastname', 'like', '%' . $search . '%')
                        ->orWhere('firstname', 'like', '%' . $search . '%')
                        ->orWhere('middlename', 'like', '%' . $search . '%')
                        ->orWhere('extension', 'like', '%' . $search . '%')
                        ->orWhere('birthdate', 'like', '%' . $search . '%')
                        ->orWhere('ageCategory', 'like', '%' . $search . '%')
                        ->orWhere('age', 'like', '%' . $search . '%')
                        ->orWhere('lgbt', 'like', '%' . $search . '%')
                        ->orWhere('weightstatus', 'like', '%' . $search . '%')
                        ->orWhere('childClassification', 'like', '%' . $search . '%')
                        ->orWhere('nameofschool', 'like', '%' . $search . '%')
                        ->orWhere('typeofschool', 'like', '%' . $search . '%')
                        ->orWhere('schoollevel', 'like', '%' . $search . '%')
                        ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                        ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                        ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                        ->orWhere('benefitstype', 'like', '%' . $search . '%')
                        ->orWhere('gender', 'like', '%' . $search . '%')
                        ->orWhere('barangay', 'like', '%' . $search . '%')
                        ->orWhere('address', 'like', '%' . $search . '%')
                        ->orWhere('ethnicity', 'like', '%' . $search . '%')
                        ->orWhere('disability', 'like', '%' . $search . '%')
                        ->orWhere('status', 'like', '%' . $search . '%');
                });
            })
            ->where('ageCategory','=','0-2')
            ->orderBy('firstname', 'desc')
            ->paginate($perPage);
    
            return response()->json([
                'success' => true,
                'message' => 'Profiles retrieved successfully.',
                'data' => $profiles,
                'meta' => [
                    'total' => $profiles->total(),
                    'per_page' => $profiles->perPage(),
                    'current_page' => $profiles->currentPage(),
                    'last_page' => $profiles->lastPage(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while retrieving profiles.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function get_age34(Request $request){
        
        try {
            $search = $request->query('search');
            $perPage = $request->query('per_page', 10);
            $perPage = max(1, min(100, $perPage)); // Validate per_page value
    
            // Query profiles with optional search and pagination
            $profiles = Profile::when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('profile_no', 'like', '%' . $search . '%')
                        ->orWhere('lastname', 'like', '%' . $search . '%')
                        ->orWhere('firstname', 'like', '%' . $search . '%')
                        ->orWhere('middlename', 'like', '%' . $search . '%')
                        ->orWhere('extension', 'like', '%' . $search . '%')
                        ->orWhere('birthdate', 'like', '%' . $search . '%')
                        ->orWhere('ageCategory', 'like', '%' . $search . '%')
                        ->orWhere('age', 'like', '%' . $search . '%')
                        ->orWhere('lgbt', 'like', '%' . $search . '%')
                        ->orWhere('weightstatus', 'like', '%' . $search . '%')
                        ->orWhere('childClassification', 'like', '%' . $search . '%')
                        ->orWhere('nameofschool', 'like', '%' . $search . '%')
                        ->orWhere('typeofschool', 'like', '%' . $search . '%')
                        ->orWhere('schoollevel', 'like', '%' . $search . '%')
                        ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                        ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                        ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                        ->orWhere('benefitstype', 'like', '%' . $search . '%')
                        ->orWhere('gender', 'like', '%' . $search . '%')
                        ->orWhere('barangay', 'like', '%' . $search . '%')
                        ->orWhere('address', 'like', '%' . $search . '%')
                        ->orWhere('ethnicity', 'like', '%' . $search . '%')
                        ->orWhere('disability', 'like', '%' . $search . '%')
                        ->orWhere('status', 'like', '%' . $search . '%');
                });
            })
            ->where('ageCategory','=','3-4')
            ->orderBy('firstname', 'desc')
            ->paginate($perPage);
    
            return response()->json([
                'success' => true,
                'message' => 'Profiles retrieved successfully.',
                'data' => $profiles,
                'meta' => [
                    'total' => $profiles->total(),
                    'per_page' => $profiles->perPage(),
                    'current_page' => $profiles->currentPage(),
                    'last_page' => $profiles->lastPage(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while retrieving profiles.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function get_age512(Request $request){
        
        try {
            $search = $request->query('search');
            $perPage = $request->query('per_page', 10);
            $perPage = max(1, min(100, $perPage)); // Validate per_page value
    
            // Query profiles with optional search and pagination
            $profiles = Profile::when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('profile_no', 'like', '%' . $search . '%')
                        ->orWhere('lastname', 'like', '%' . $search . '%')
                        ->orWhere('firstname', 'like', '%' . $search . '%')
                        ->orWhere('middlename', 'like', '%' . $search . '%')
                        ->orWhere('extension', 'like', '%' . $search . '%')
                        ->orWhere('birthdate', 'like', '%' . $search . '%')
                        ->orWhere('ageCategory', 'like', '%' . $search . '%')
                        ->orWhere('age', 'like', '%' . $search . '%')
                        ->orWhere('lgbt', 'like', '%' . $search . '%')
                        ->orWhere('weightstatus', 'like', '%' . $search . '%')
                        ->orWhere('childClassification', 'like', '%' . $search . '%')
                        ->orWhere('nameofschool', 'like', '%' . $search . '%')
                        ->orWhere('typeofschool', 'like', '%' . $search . '%')
                        ->orWhere('schoollevel', 'like', '%' . $search . '%')
                        ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                        ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                        ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                        ->orWhere('benefitstype', 'like', '%' . $search . '%')
                        ->orWhere('gender', 'like', '%' . $search . '%')
                        ->orWhere('barangay', 'like', '%' . $search . '%')
                        ->orWhere('address', 'like', '%' . $search . '%')
                        ->orWhere('ethnicity', 'like', '%' . $search . '%')
                        ->orWhere('disability', 'like', '%' . $search . '%')
                        ->orWhere('status', 'like', '%' . $search . '%');
                });
            })
            ->where('ageCategory','=','5-12')
            ->orderBy('firstname', 'desc')
            ->paginate($perPage);
    
            return response()->json([
                'success' => true,
                'message' => 'Profiles retrieved successfully.',
                'data' => $profiles,
                'meta' => [
                    'total' => $profiles->total(),
                    'per_page' => $profiles->perPage(),
                    'current_page' => $profiles->currentPage(),
                    'last_page' => $profiles->lastPage(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while retrieving profiles.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function get_age1318(Request $request){
        
        try {
            $search = $request->query('search');
            $perPage = $request->query('per_page', 10);
            $perPage = max(1, min(100, $perPage)); // Validate per_page value
    
            // Query profiles with optional search and pagination
            $profiles = Profile::when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('profile_no', 'like', '%' . $search . '%')
                        ->orWhere('lastname', 'like', '%' . $search . '%')
                        ->orWhere('firstname', 'like', '%' . $search . '%')
                        ->orWhere('middlename', 'like', '%' . $search . '%')
                        ->orWhere('extension', 'like', '%' . $search . '%')
                        ->orWhere('birthdate', 'like', '%' . $search . '%')
                        ->orWhere('ageCategory', 'like', '%' . $search . '%')
                        ->orWhere('age', 'like', '%' . $search . '%')
                        ->orWhere('lgbt', 'like', '%' . $search . '%')
                        ->orWhere('weightstatus', 'like', '%' . $search . '%')
                        ->orWhere('childClassification', 'like', '%' . $search . '%')
                        ->orWhere('nameofschool', 'like', '%' . $search . '%')
                        ->orWhere('typeofschool', 'like', '%' . $search . '%')
                        ->orWhere('schoollevel', 'like', '%' . $search . '%')
                        ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                        ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                        ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                        ->orWhere('benefitstype', 'like', '%' . $search . '%')
                        ->orWhere('gender', 'like', '%' . $search . '%')
                        ->orWhere('barangay', 'like', '%' . $search . '%')
                        ->orWhere('address', 'like', '%' . $search . '%')
                        ->orWhere('ethnicity', 'like', '%' . $search . '%')
                        ->orWhere('disability', 'like', '%' . $search . '%')
                        ->orWhere('status', 'like', '%' . $search . '%');
                });
            })
            ->where('ageCategory','=','13-18')
            ->orderBy('firstname', 'desc')
            ->paginate($perPage);
    
            return response()->json([
                'success' => true,
                'message' => 'Profiles retrieved successfully.',
                'data' => $profiles,
                'meta' => [
                    'total' => $profiles->total(),
                    'per_page' => $profiles->perPage(),
                    'current_page' => $profiles->currentPage(),
                    'last_page' => $profiles->lastPage(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while retrieving profiles.',
                'error' => $e->getMessage(),
            ], 500);
        }
       
    }
    public function get_data_archived(Request $request){
        
        try {
            $search = $request->query('search');
            $perPage = $request->query('per_page', 10);
            $perPage = max(1, min(100, $perPage)); // Validate per_page value
    
            // Query profiles with optional search and pagination
            $profiles = Profile::when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('profile_no', 'like', '%' . $search . '%')
                        ->orWhere('lastname', 'like', '%' . $search . '%')
                        ->orWhere('firstname', 'like', '%' . $search . '%')
                        ->orWhere('middlename', 'like', '%' . $search . '%')
                        ->orWhere('extension', 'like', '%' . $search . '%')
                        ->orWhere('birthdate', 'like', '%' . $search . '%')
                        ->orWhere('ageCategory', 'like', '%' . $search . '%')
                        ->orWhere('age', 'like', '%' . $search . '%')
                        ->orWhere('lgbt', 'like', '%' . $search . '%')
                        ->orWhere('weightstatus', 'like', '%' . $search . '%')
                        ->orWhere('childClassification', 'like', '%' . $search . '%')
                        ->orWhere('nameofschool', 'like', '%' . $search . '%')
                        ->orWhere('typeofschool', 'like', '%' . $search . '%')
                        ->orWhere('schoollevel', 'like', '%' . $search . '%')
                        ->orWhere('nameofemergency', 'like', '%' . $search . '%')
                        ->orWhere('relationofemergency', 'like', '%' . $search . '%')
                        ->orWhere('contactnoofemergency', 'like', '%' . $search . '%')
                        ->orWhere('benefitstype', 'like', '%' . $search . '%')
                        ->orWhere('gender', 'like', '%' . $search . '%')
                        ->orWhere('barangay', 'like', '%' . $search . '%')
                        ->orWhere('address', 'like', '%' . $search . '%')
                        ->orWhere('ethnicity', 'like', '%' . $search . '%')
                        ->orWhere('disability', 'like', '%' . $search . '%')
                        ->orWhere('status', 'like', '%' . $search . '%');
                });
            })
            ->where('status','=','ARCHIVED')
            ->orderBy('firstname', 'desc')
            ->paginate($perPage);
    
            return response()->json([
                'success' => true,
                'message' => 'Profiles retrieved successfully.',
                'data' => $profiles,
                'meta' => [
                    'total' => $profiles->total(),
                    'per_page' => $profiles->perPage(),
                    'current_page' => $profiles->currentPage(),
                    'last_page' => $profiles->lastPage(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while retrieving profiles.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
        
   
    
    
    public function filter_summary(Request $request)
{
    $category = $request->sel_type;
    $barangay = $request->barangay;

    $query = Profile::where('status', '=', 'Active');

    // Handle "All" barangay option
    if ($barangay !== "ALL") {
        $query->where('barangay', '=', $barangay);
    }

    // Apply additional filters based on the selected category
    if ($request->age_category) {
        $choose = $request->age_category;
        $query->where('ageCategory', '=', $request->age_category);
    }
    if ($request->agefilter) {
        $choose = $request->agefilter;
        $query->where('age', '=', $request->agefilter);
    }
    if ($request->gender) {
        $choose = $request->gender;
        $query->where('gender', '=', $request->gender);
    }
    if ($request->school_type) {
        $choose = $request->school_type;
        $query->where('childClassification', '=', $request->school_type);
    }
    if ($request->lgbt) {
        $choose = $request->lgbt;
        $query->where('lgbt', '=', $request->lgbt);
    }
    if ($request->weight_status) {
        $choose = $request->weight_status;
        $query->where('weightstatus', '=', $request->weight_status);
    }

    // Get the filtered results
    $filter = $query->get();
    $total = $filter->count();

    // Generate the PDF
    return PDF::loadView('mswd.pdf', compact('filter', 'total', 'barangay', 'category', 'choose'))
        ->setPaper('Legal', 'Landscape')
        ->stream('Generate Report.pdf');
}

    public function print(Request $request){

        $category = $request->sel_type;
        $barangay  = $request->barangay;

       

        $query = Profile::where('status','=','Active')->get();
        

        if($request->age_category && $request->barangay){
            $choose = $request->age_category;
            $filter = $query->where('barangay','=',$request->barangay)->where('ageCategory','=',$request->age_category);
            $total =  $query->where('barangay','=',$request->barangay)->where('ageCategory','=',$request->age_category)->count();
        }
        
        if($request->gender  && $request->barangay){
            $choose = $request->gender;
            $filter = $query->where('barangay','=',$request->barangay)->where('gender','=',$request->gender);
            $total =  $query->where('barangay','=',$request->barangay)->where('gender','=',$request->gender)->count();
        }
        if($request->school_type  && $request->barangay){
            $choose = $request->school_type;
            $filter = $query->where('barangay','=',$request->barangay)->where('childClassification','=',$request->school_type);
            $total =  $query->where('barangay','=',$request->barangay)->where('childClassification','=',$request->school_type)->count();
        }
        if($request->lgbt  && $request->barangay){
            $choose = $request->lgbt;
            $filter = $query->where('barangay','=',$request->barangay)->where('lgbt','=',$request->lgbt);
            $total =  $query->where('barangay','=',$request->barangay)->where('lgbt','=',$request->lgbt)->count();
        }
        if($request->weight_status  && $request->barangay){
            $choose = $request->weight_status;
            $filter = $query->where('barangay','=',$request->barangay)->where('weightstatus','=',$request->weight_status);
            $total =  $query->where('barangay','=',$request->barangay)->where('weightstatus','=',$request->weight_status)->count();
        }
        return PDF::loadView('mswd.pdf',compact('filter','total','barangay','category','choose'))->setPaper('A4', 'Landscape')->stream('Generate Report.pdf');
       
       

    }


    public function regsiter_profile(){
        return view('mswd.register');

    }

    public function view_profile($id){
        $profile = Profile::find($id);
        return view('mswd.viewprofile',compact('profile'));
    }

    public function deleteProfile(Request $request) {
        $profile = Profile::find($request->id);
        
        if (!$profile) {
            return redirect()->back()->with('error', 'Profile not found.');
        }
        
        $profile->delete();
        
        return redirect()->back()->with('success', 'Profile Deleted Successfully.');
    }
    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out
        return redirect('/'); // Redirect to the home page
    }
}
