<?php


namespace Modules\Backend\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Modules\Auth\Entities\User;
use Modules\Auth\Http\Requests\CreateUserRequest;
use Modules\Auth\Notifications\UserInvited;
use Modules\Auth\Repositories\UserRepository;
use Modules\Backend\Http\Responses\Response;

class UserController extends Controller
{
    protected $baseRoute = 'users';
    protected $viewPath = 'backend::users.';
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct()
    {
        $this->repository = new UserRepository(new User());
    }

    public function index()
    {
        $users = User::paginate(20);
        return new Response($this->viewPath . 'index', ['users' => $users]);
    }

    public function create()
    {
        return new Response($this->viewPath . 'create');
    }

    public function edit(User $user)
    {
        return new Response($this->viewPath . 'edit', ['user' => $user]);
    }

    public function store(CreateUserRequest $request)
    {
        $password_generated = Str::random(10);
        $request->request->add(['password_generated' => $password_generated]);
        $input = $request->all();
        $user = $this->repository->create($input);
        $password = $this->repository->encryptPassword($password_generated);
        $user->notify(new UserInvited($user, $password));
        $request->session()->flash('success', 'New user added successfully.');
    }

    public function destroy(Request $request, $id)
    {

        $baseRoute = getBaseRouteByUrl($request);
        try {
            DB::beginTransaction();
            $this->repository->delete($id);
            DB::commit();
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'User deleted successfully');
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->route($baseRoute . '.index')
                ->with('failed', 'User cannot be deleted.');
        }
    }
}
