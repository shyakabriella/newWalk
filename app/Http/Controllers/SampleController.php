<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Patient;
use App\Models\SampleStatus;
use App\Models\Sample;
use App\Models\HealthCenter;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class SampleController extends Controller

{
      /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

     function __construct()

     {
          $this->middleware('permission:samples-list|samples-create|samples-edit|samples-delete', ['only' => ['index','store']]);
          $this->middleware('permission:samples-create', ['only' => ['create','store']]);
          $this->middleware('permission:samples-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:samples-delete', ['only' => ['destroy']]);
 
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

        // dd($samples);
        return view('samples.index',compact('data')) 
            ->with('i', ($request->input('page', 1) - 1) * 5)
            ->with('user',$user)
            ->with('health',$health)
            ->with('patients',$patients)
            ->with('status',$status)
            ->with('samples',$samples);
    }
    public function create()
    {
        $status = SampleStatus::all();
        $health = HealthCenter::all();
        $user = User::all();
        $roles = Role::pluck('name','name')->all();
        $users = User::pluck('name','name')->all();
        $samples = Sample::pluck('patient_name','patient_name')->all();
        $health = HealthCenter::pluck('health_center_name','health_center_name','Leader','Leader')->all();
        $patients = Patient::pluck('name','name')->all();
        $status = SampleStatus::pluck('name','name')->all();


        return view('samples.create',compact('samples'))
                ->with('roles', $roles )
                ->with('patients', $patients)
                ->with('health',$health)
                ->with('users', $users )
                ->with('status',$status)
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
            'patient_name' => 'required',
            'sample_status' => 'required',
            'Advices' => 'required'
            
        ]);

        $input = $request->all();
        //$input['password'] = Hash::make($input['password']);
        $samples = Sample::create($input);
        return redirect()->route('samples.index')
                        ->with('success','Sample  created Recorded');
                     
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

