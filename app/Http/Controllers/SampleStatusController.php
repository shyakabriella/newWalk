<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Patient;
use App\Models\SampleStatus;
use App\Models\Sample;
use App\Models\HealthCenter;
use App\Models\Tbdocument;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

    

class SampleStatusController extends Controller

{
     /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

     function __construct()

     {
          $this->middleware('permission:status-list|status-create|status-edit|status-delete', ['only' => ['index','store']]);
          $this->middleware('permission:status-create', ['only' => ['create','store']]);
          $this->middleware('permission:status-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:status-delete', ['only' => ['destroy']]);
 
     }

    public function index(Request $request)
    {
        $status = SampleStatus::all();
        $samples = Sample::all();
        $patients = Patient::all();
        $roles = Role::all();
        $user = User::all();
        $health = HealthCenter::all();
        $data = User::orderBy('id','DESC')->paginate(5);
        $health = HealthCenter::orderBy('id','DESC')->paginate(5);

         //dd($status);
        return view('status.index',compact('data')) 
            ->with('i', ($request->input('page', 1) - 1) * 5)
            ->with('user',$user)
            ->with('health',$health)
            ->with('patients',$patients)
            ->with('status',$status)
            ->with('samples',$samples);
   
    }

    public function category(Request $request)
    {
        $status = SampleStatus::all();
        $samples = Sample::all();
        $patients = Patient::all();
        $roles = Role::all();
        $user = User::all();
        $health = HealthCenter::all();
        $category = Tbdocument::all();
        $data = User::orderBy('id','DESC')->paginate(5);
        // dd($category);
        return view('status.index',compact('category','data'))
        ->with('i', ($request->input('page', 1) - 1) * 5)
            ->with('user',$user)
            ->with('health',$health)
            ->with('patients',$patients)
            ->with('status',$status)
            ->with('samples',$samples);  
    }


    public function create()
    {
        $health = HealthCenter::all();
        $user = User::all();
        $roles = Role::pluck('name','name')->all();
        $users = User::pluck('name','name')->all();
        $samples = Sample::pluck('patient_name','patient_name')->all();
        $health = HealthCenter::pluck('health_center_name','health_center_name','Leader','Leader')->all();
        $patients = Patient::pluck('name','name')->all();
        $status = SampleStatus::pluck('name','name')->all();

        return view('status.create',compact('status'))
                ->with('roles', $roles )
                ->with('patients', $patients)
                ->with('health',$health)
                ->with('users', $users )
                ->with('status', $status)
                ->with('samples', $samples );
    }

    /**

     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
          
            
        ]);

        $input = $request->all();
        //$input['password'] = Hash::make($input['password']);
        $status = SampleStatus::create($input);
        return redirect()->route('status.index')
                        ->with('success','Status  created Recorded');
                     
    }
    

     public function show(HealthCenter $health)
     {
         return view('health.show',compact('health'));
     }
     

     public function edit(HealthCenter $health)

     {
         return view('health.edit',compact('health'));
     }

   

     public function update(Request $request, HealthCenter $health)
     {
          request()->validate([
            'health_center_name' => 'required',
            'province' => 'required',
            'district' => 'required',
            'sector' => 'required',
            'category' => 'required',
            'Leader' => 'required'
         ]);
 
     
 
         $health->update($request->all());
         return redirect()->route('health.index')
 
                         ->with('success','Healt Center updated successfully');
 
     }
 

     public function destroy(HealthCenter $health)
     {
         $health->delete();
         return redirect()->route('health.index')
 
                         ->with('success','Health center deleted successfully');
     }

}

