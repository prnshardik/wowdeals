<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin;
    use App\Models\State;
    use App\Models\City;
    use App\Http\Requests\CityRequest;
    use DB, Auth, Hash;
    use Illuminate\Support\Facades\View;

    class CitiesController extends Controller{
        public function index(Request $request){
            if($request->ajax()){
                $collection = DB::table('cities')
                                ->select('cities.*', 'states.name as state_name');
                
                if($request->search != ''){
                    $collection->where('cities.name', 'like', "%$request->search%")
                                ->orWhere('states.name', 'like', "%$request->search%");
                }

                $data = $collection->leftJoin('states', 'states.id', 'cities.state_id')
                                    ->paginate(5);

                $view = View::make('admin.view.cities.list_ajax', ['data' => $data])->render();
                $pagination = View::make('admin.view.cities.list_ajax_pagination', ['data' => $data])->render();

                return response()->json(['view' => $view, 'pagination' => $pagination]);
            }

            $states = State::where(['status' => 'active'])->get();

            return view('admin.view.cities.list')->with(['states' => $states]);
        }

        public function store(CityRequest $request){
            if(!$request->ajax()){ return 'No Direct script alloweded.'; }

            $crud = [
                'name' => ucfirst($request->name),
                'state_id' => $request->state_id,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => auth()->guard('admin')->user()->id,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => auth()->guard('admin')->user()->id
            ];

            $data = City::create($crud);

            if($data)
                return response()->json(['code' => 200]);
            else
                return response()->json(['code' => 201]);
        }

        public function edit(Request $request){
            $id = base64_decode($request->id);
            $data = City::find($id);

            if($data)
                return response()->json(['code' => 200, 'data' => $data]);
            else
                return response()->json(['code' => 201]);
        }

        public function update(CityRequest $request){
            if(!$request->ajax()){ return 'No Direct script alloweded.'; }

            $crud = [
                'name' => ucfirst($request->name),
                'state_id' => $request->state_id,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => auth()->guard('admin')->user()->id
            ];

            $update = City::where(['id' => $request->id])->update($crud);

            if($update)
                return response()->json(['code' => 200]);
            else
                return response()->json(['code' => 201]);
        }

        public function change_status(Request $request){
            $id = base64_decode($request->id);

            $crud = [
                'status' => $request->status,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => auth()->guard('admin')->user()->id
            ];

            $update = City::where(['id' => $id])->update($crud);

            if($update)
                return response()->json(['code' => 200]);
            else
                return response()->json(['code' => 201]);
        }
    }
