<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\HealthCenter;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

    

class HealthCenterController extends Controller

{
     /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

     function __construct()

     {
          $this->middleware('permission:health-list|health-create|health-edit|health-delete', ['only' => ['index','store']]);
          $this->middleware('permission:health-create', ['only' => ['create','store']]);
          $this->middleware('permission:health-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:health-delete', ['only' => ['destroy']]);
 
     }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)
    {
        $roles = Role::all();
        $user = User::all();
        $health = HealthCenter::all();
        $data = User::orderBy('id','DESC')->paginate(5);
        $health = HealthCenter::orderBy('id','DESC')->paginate(5);

        //dd($roles);
        return view('health.index',compact('data')) 
            ->with('i', ($request->input('page', 1) - 1) * 5)
            ->with('user',$user)
            ->with('health',$health);
   
    }
   

    public function create()
    {
        $user = User::all();
        $roles = Role::pluck('name','name')->all();
        $users = User::pluck('name','name')->all();
        $health = HealthCenter::pluck('health_center_name','health_center_name','Leader','Leader')->all();
        return view('health.create',compact('health'))
                ->with('roles', $roles )
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
            'health_center_name' => 'required',
            'province' => 'required',
            'district' => 'required',
            'sector' => 'required',
            'category' => 'required',
            'Leader' => 'required'

        ]);

        $input = $request->all();
        //$input['password'] = Hash::make($input['password']);
        $health = HealthCenter::create($input);
        return redirect()->route('health.index')
                        ->with('success','Health Center  created successfully');
                     
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
