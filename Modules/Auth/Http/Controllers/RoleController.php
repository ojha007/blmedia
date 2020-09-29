<?php

namespace Modules\Auth\Http\Controllers;

use Nwidart\Modules\Routing\Controller;


class RoleController extends Controller
{
    protected $model, $edition;

    protected $viewPath = 'auth::roles.';

//    public function __construct(Role $role)
//    {
//        $this->middleware(['auth:' . $this->edition]);
////        $this->middleware(['permission:role-view|role-create|role-edit|role-delete'], ['only' => ['index', 'show']]);
////        $this->middleware(['permission:role-create'], ['only' => ['create', 'store', 'show']]);
////        $this->middleware(['permission:role-edit'], ['only' => ['edit', 'update', 'show']]);
////        $this->middleware(['permission:role-delete'], ['only' => ['destroy']]);
////        $this->model = new RoleRepository($role);
//    }

//    /**
//     * Display a listing of the resource.
//     * @return IndexResponse
//     */
    public function index()
    {
        $roles = [];
        return view($this->viewPath . 'index', compact('roles'));
    }
//
//
    public function create()
    {
        return view('auth::roles.create');
    }
//
//
//    /**
//     * Store a newly created resource in storage.
//     * @param CreateRoleRequest $request
//     * @return StoreResponse
//     */
//    public function store(CreateRoleRequest $request)
//    {
//        $input = $request->all();
//        $input['guard_name'] = $request->route()->getAction('routePrefix');
//        $role = $this->model->create(array_except($input, ['permission', 'full-access']));
//        if (isset($input['permission']))
//            $role->syncPermissions($input['permission']);
//        return new StoreResponse($this->routePrefix, $role);
//    }
//
//
//    public function show()
//    {
//        return view('auth::show');
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     * @param $id
//     * @return void
//     */
//    public function edit($id)
//    {
//        /*$role = $this->model->getById($id);
//        return new EditResponse($role);*/
//    }
//
//
//    /**
//     * Update the specified resource in storage.
//     * @param UpdateRoleRequest $request
//     * @param $id
//     * @return UpdateResponse
//     */
//    public function update(UpdateRoleRequest $request, $id)
//    {
//        $input = $request->all();
//        $role = $this->model->update($id, ['name' => $input['name']]);
//        //$role = $this->model->update($id, array_except($input, ['permission', 'full-access']));
//        if (isset($input['permission']))
//            $role->syncPermissions($input['permission']);
//        return new UpdateResponse($this->routePrefix, $role);
//    }
//
//
//    public function destroy($id)
//    {
//        $role = $this->model->getById($id);
//        $usersCount = User::role($role)->count();
//        if ($usersCount > 0) {
//            return redirect()->route($this->routePrefix . '.roles.index')
//                ->with('failed', 'Role cannot be deleted. Users are found with this role.');
//        } else {
//            $this->model->delete($id);
//            return redirect()->route($this->routePrefix . '.roles.index')
//                ->with('success', 'Role deleted successfully.');
//        }
//    }
}
