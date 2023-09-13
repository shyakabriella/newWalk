<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Patient;
use App\Models\HealthCenter;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

    

class PatientController extends Controller

{
      /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

     function __construct()

     {
          $this->middleware('permission:patients-list|patients-create|patients-edit|patients-delete', ['only' => ['index','store']]);
          $this->middleware('permission:patients-create', ['only' => ['create','store']]);
          $this->middleware('permission:patients-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:patients-delete', ['only' => ['destroy']]);
 
     }

    public function index(Request $request)
    {
        $patients = Patient::all();
        $roles = Role::all();
        $user = User::all();
        $health = HealthCenter::all();
        $data = User::orderBy('id','DESC')->paginate(5);
        $health = HealthCenter::orderBy('id','DESC')->paginate(5);

        //dd($patients);
        return view('patients.index',compact('data')) 
            ->with('i', ($request->input('page', 1) - 1) * 5)
            ->with('user',$user)
            ->with('health',$health)
            ->with('patients',$patients);
   
    }

    public function create()
    {
        $health = HealthCenter::all();
        $user = User::all();
        $roles = Role::pluck('name','name')->all();
        $users = User::pluck('name','name')->all();
        $health = HealthCenter::pluck('health_center_name','health_center_name','Leader','Leader')->all();
        $patients = Patient::pluck('name','name')->all();

        return view('patients.create',compact('patients'))
                ->with('roles', $roles )
                ->with('patients', $patients)
                ->with('health',$health)
                ->with('users', $users );
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
            'phone' => 'required',
            'Nid' => 'required',
            'health_center_name' => 'required'

        ]);

        $input = $request->all();
        //$input['password'] = Hash::make($input['password']);
        $patients = Patient::create($input);
        return redirect()->route('patients.index')
                        ->with('success','Patient  created successfully');
                     
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
