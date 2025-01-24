<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $age = DB::table('profile')
                ->whereRaw('TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) >= 19')
                ->get();

        $barangay  = Profile::get();
        $britania  = Profile::where('barangay','=','BRITANIA')->where('status','=','Active')->count();
        $buatong  = Profile::where('barangay','=','BUATONG')->where('status','=','Active')->count();
        $buhisan  = Profile::where('barangay','=','BUHISAN')->where('status','=','Active')->count();
        $gata  = Profile::where('barangay','=','GATA')->where('status','=','Active')->count();
        $hornasan  = Profile::where('barangay','=','HORNASAN')->where('status','=','Active')->count();
        $janipaan  = Profile::where('barangay','=','JANIPAAN')->where('status','=','Active')->count();
        $kauswagan  = Profile::where('barangay','=','KAUSWAGAN')->where('status','=','Active')->count();
        $otieza  = Profile::where('barangay','=','OTIEZA')->where('status','=','Active')->count();
        $poblacion  = Profile::where('barangay','=','POBLACION')->where('status','=','Active')->count();
        $pungtod  = Profile::where('barangay','=','PUNGTOD')->where('status','=','Active')->count();
        $pongon  = Profile::where('barangay','=','PONG-ON')->where('status','=','Active')->count();
        $salvacion  = Profile::where('barangay','=','SALVACION')->where('status','=','Active')->count();

        $overall  = Profile::where('status','=','Active')->count();
        $is  = Profile::where('childClassification','=','In School Youth')->count();
        $os  = Profile::where('childClassification','=','Out of School Youth')->count();
        $archived  = Profile::where('status','=','ARCHIVED')->count();

        $cat1  = Profile::where('ageCategory','=','0-2')->count();
        $cat2  = Profile::where('ageCategory','=','3-4')->count();
        $cat3  = Profile::where('ageCategory','=','5-12')->count();
        $cat4  = Profile::where('ageCategory','=','13-18')->count();
        $lgbtyes  = Profile::where('lgbt','=','YES')->count();
        $lgbtno  = Profile::where('lgbt','=','NO')->count();
        $forps  = Profile::where('benefitstype','=','YES')->count();
        $forpsno  = Profile::where('benefitstype','=','NO')->count();


        return view('home',compact('lgbtyes','lgbtno','cat1','cat2','forps','forpsno','cat3','cat4','age','britania','buatong','buhisan','gata','hornasan','janipaan','kauswagan','otieza','poblacion','pungtod','pongon','salvacion','os','archived','overall','is'));
    }
    public function dashboard()
    {
        $age = DB::table('profile')
                ->whereRaw('TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) >= 19')
                ->get();

        $barangay  = Profile::get();
        $britania  = Profile::where('barangay','=','BRITANIA')->where('status','=','Active')->count();
        $buatong  = Profile::where('barangay','=','BUATONG')->where('status','=','Active')->count();
        $buhisan  = Profile::where('barangay','=','BUHISAN')->where('status','=','Active')->count();
        $gata  = Profile::where('barangay','=','GATA')->where('status','=','Active')->count();
        $hornasan  = Profile::where('barangay','=','HORNASAN')->where('status','=','Active')->count();
        $janipaan  = Profile::where('barangay','=','JANIPAAN')->where('status','=','Active')->count();
        $kauswagan  = Profile::where('barangay','=','KAUSWAGAN')->where('status','=','Active')->count();
        $otieza  = Profile::where('barangay','=','OTIEZA')->where('status','=','Active')->count();
        $poblacion  = Profile::where('barangay','=','POBLACION')->where('status','=','Active')->count();
        $pungtod  = Profile::where('barangay','=','PUNGTOD')->where('status','=','Active')->count();
        $pongon  = Profile::where('barangay','=','PONG-ON')->where('status','=','Active')->count();
        $salvacion  = Profile::where('barangay','=','SALVACION')->where('status','=','Active')->count();

        $overall  = Profile::where('status','=','Active')->count();
        $is  = Profile::where('childClassification','=','In School Youth')->count();
        $os  = Profile::where('childClassification','=','Out of School Youth')->count();
        $archived  = Profile::where('status','=','ARCHIVED')->count();

        $cat1  = Profile::where('ageCategory','=','0-2')->count();
        $cat2  = Profile::where('ageCategory','=','3-4')->count();
        $cat3  = Profile::where('ageCategory','=','5-12')->count();
        $cat4  = Profile::where('ageCategory','=','13-18')->count();
        $lgbtyes  = Profile::where('lgbt','=','YES')->count();
        $lgbtno  = Profile::where('lgbt','=','NO')->count();
        $forps  = Profile::where('benefitstype','=','YES')->count();


        return view('home',compact('lgbtyes','lgbtno','forps','cat1','cat2','cat3','cat4','age','britania','buatong','buhisan','gata','hornasan','janipaan','kauswagan','otieza','poblacion','pungtod','pongon','salvacion','os','archived','overall','is'));
    }

    public function barangay_index (){
        $age = DB::table('profile')
                ->whereRaw('TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) >= 19')
                ->get();

        $barangay  = Profile::get();
        $britania  = Profile::where('barangay','=','BRITANIA')->where('status','=','Active')->count();
        $buatong  = Profile::where('barangay','=','BUATONG')->where('status','=','Active')->count();
        $buhisan  = Profile::where('barangay','=','BUHISAN')->where('status','=','Active')->count();
        $gata  = Profile::where('barangay','=','GATA')->where('status','=','Active')->count();
        $hornasan  = Profile::where('barangay','=','HORNASAN')->where('status','=','Active')->count();
        $janipaan  = Profile::where('barangay','=','JANIPAAN')->where('status','=','Active')->count();
        $kauswagan  = Profile::where('barangay','=','KAUSWAGAN')->where('status','=','Active')->count();
        $otieza  = Profile::where('barangay','=','OTIEZA')->where('status','=','Active')->count();
        $poblacion  = Profile::where('barangay','=','POBLACION')->where('status','=','Active')->count();
        $pungtod  = Profile::where('barangay','=','PUNGTOD')->where('status','=','Active')->count();
        $pongon  = Profile::where('barangay','=','PONG-ON')->where('status','=','Active')->count();
        $salvacion  = Profile::where('barangay','=','SALVACION')->where('status','=','Active')->count();
        $santonino   = Profile::where('barangay','=','SANTO NINO')->where('status','=','Active')->count();

        $overall  = Profile::where('status','=','Active')->count();
        $is  = Profile::where('childClassification','=','In School Youth')->count();
        $os  = Profile::where('childClassification','=','Out of School Youth')->count();
        $archived  = Profile::where('status','=','ARCHIVED')->count();

        $cat1  = Profile::where('ageCategory','=','0-2')->count();
        $cat2  = Profile::where('ageCategory','=','3-4')->count();
        $cat3  = Profile::where('ageCategory','=','5-12')->count();
        $cat4  = Profile::where('ageCategory','=','13-18')->count();
        $lgbtyes  = Profile::where('lgbt','=','YES')->count();
        $lgbtno  = Profile::where('lgbt','=','NO')->count();
        $forps  = Profile::where('benefitstype','=','YES')->count();
        $forpsno  = Profile::where('benefitstype','=','NO')->count();


        return view('mswd.barangaydashboard',compact('lgbtyes','lgbtno','cat1','cat2','forps','forpsno','cat3','cat4','age','britania','buatong','buhisan','gata','hornasan','janipaan','kauswagan','otieza','poblacion','pungtod','pongon','salvacion','os','archived','overall','is','santonino'));
    }

    public function admin_index(){
        $age = DB::table('profile')
        ->whereRaw('TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) >= 19')
        ->get();

        $barangay  = Profile::get();
        $britania  = Profile::where('barangay','=','BRITANIA')->where('status','=','Active')->count();
        $buatong  = Profile::where('barangay','=','BUATONG')->where('status','=','Active')->count();
        $buhisan  = Profile::where('barangay','=','BUHISAN')->where('status','=','Active')->count();
        $gata  = Profile::where('barangay','=','GATA')->where('status','=','Active')->count();
        $hornasan  = Profile::where('barangay','=','HORNASAN')->where('status','=','Active')->count();
        $janipaan  = Profile::where('barangay','=','JANIPAAN')->where('status','=','Active')->count();
        $kauswagan  = Profile::where('barangay','=','KAUSWAGAN')->where('status','=','Active')->count();
        $otieza  = Profile::where('barangay','=','OTIEZA')->where('status','=','Active')->count();
        $poblacion  = Profile::where('barangay','=','POBLACION')->where('status','=','Active')->count();
        $pungtod  = Profile::where('barangay','=','PUNGTOD')->where('status','=','Active')->count();
        $pongon  = Profile::where('barangay','=','PONG-ON')->where('status','=','Active')->count();
        $salvacion  = Profile::where('barangay','=','SALVACION')->where('status','=','Active')->count();

        $overall  = Profile::where('status','=','Active')->count();
        $is  = Profile::where('childClassification','=','In School Youth')->count();
        $os  = Profile::where('childClassification','=','Out of School Youth')->count();
        $archived  = Profile::where('status','=','ARCHIVED')->count();

        $cat1  = Profile::where('ageCategory','=','0-2')->count();
        $cat2  = Profile::where('ageCategory','=','3-4')->count();
        $cat3  = Profile::where('ageCategory','=','5-12')->count();
        $cat4  = Profile::where('ageCategory','=','13-18')->count();
        $lgbtyes  = Profile::where('lgbt','=','YES')->count();
        $lgbtno  = Profile::where('lgbt','=','NO')->count();
        $forps  = Profile::where('benefitstype','=','YES')->count();
        $forpsno  = Profile::where('benefitstype','=','NO')->count();
    return view('admin.admindashboard',compact('lgbtyes','lgbtno','cat1','cat2','forps','forpsno','cat3','cat4','age','britania','buatong','buhisan','gata','hornasan','janipaan','kauswagan','otieza','poblacion','pungtod','pongon','salvacion','os','archived','overall','is'));

    }
    public function britania(Request $request){
       
        return view('mswd.britania');

    }
    public function buatong(Request $request){
       
        return view('mswd.buatong');

    }
    public function gata(Request $request){
       
        return view('mswd.gata');

    }

    public function hornasan(Request $request){
       
        return view('mswd.hornasan');

    }
    public function janipaan(Request $request){
       
        return view('mswd.janipaan');

    }
    public function kauswagan(Request $request){
       
        return view('mswd.kauswagan');

    }
    public function otieza(Request $request){
       
        return view('mswd.otieza');

    }
    public function poblacion(Request $request){
       
        return view('mswd.poblacion');

    }
    public function pungtod(Request $request){
       
        return view('mswd.pungtod');

    }
    public function pongon(Request $request){
       
        return view('mswd.pongon');

    }
    public function salvacion(Request $request){
       
        return view('mswd.salvacion');

    }
    public function buhisan(Request $request){
       
        return view('mswd.buhisan');

    }
   

}
