<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin;
    use App\Models\State;
    use App\Http\Requests\StateRequest;
    use DB, Auth, Hash;
    use Illuminate\Support\Facades\View;

    class StatesController extends Controller{
        public function index(Request $request){
            if($request->ajax()){
                $collection = DB::table('states')
                                ->select('states.*');
                
                if($request->search != ''){
                    $collection->where('states.name', 'like', "%$request->search%");
                }

                $data = $collection->paginate(5);

                $view = View::make('admin.view.states.list_ajax', ['data' => $data])->render();
                $pagination = View::make('admin.view.states.list_ajax_pagination', ['data' => $data])->render();

                return response()->json(['view' => $view, 'pagination' => $pagination]);
            }

            return view('admin.view.states.list');
        }

        public function store(StateRequest $request){
            if(!$request->ajax()){ return 'No Direct script alloweded.'; }

            $crud = [
                'name' => ucfirst($request->name),
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => auth()->guard('admin')->user()->id,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => auth()->guard('admin')->user()->id
            ];

            $data = State::create($crud);

            if($data)
                return response()->json(['code' => 200]);
            else
                return response()->json(['code' => 201]);
        }

        public function edit(Request $request){
            $id = base64_decode($request->id);
            $data = State::find($id);

            if($data)
                return response()->json(['code' => 200, 'data' => $data]);
            else
                return response()->json(['code' => 201]);
        }

        public function update(StateRequest $request){
            if(!$request->ajax()){ return 'No Direct script alloweded.'; }

            $crud = [
                'name' => ucfirst($request->name),
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => auth()->guard('admin')->user()->id
            ];

            $update = State::where(['id' => $request->id])->update($crud);

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

            $update = State::where(['id' => $id])->update($crud);

            if($update)
                return response()->json(['code' => 200]);
            else
                return response()->json(['code' => 201]);
        }
    }
