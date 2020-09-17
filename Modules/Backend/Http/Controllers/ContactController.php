<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Backend\Entities\Contact;
use Modules\Backend\Http\Requests\ContactRequest;
use Modules\Backend\Http\Responses\Response;
use Modules\Backend\Repositories\ContactRepository;

class ContactController extends Controller
{

    /**
     * @var string
     */
    protected $viewPath = 'backend::contacts';

    protected $type;

    private $model;
    /**
     * @var ContactRepository
     */
    private $repository;

    public function __construct(Contact $contact)
    {
        $this->model = $contact;
        $this->repository = new ContactRepository($contact);

    }

    public function index()
    {

        $viewPath = $this->viewPath . '.index';
        $contacts = $this->repository->paginate(20);
        return new Response($viewPath, [
            'contacts' => $contacts,
            'type' => $this->model->getType()
        ]);
    }

    public function create()
    {
        $viewPath = $this->viewPath . '.create';
        return new Response($viewPath, [
            'type' => $this->model->getType()
        ]);

    }

    public function edit($id)
    {

        $contact = $this->repository->getById($id);

        $viewPath = $this->viewPath . '.edit';
        return new Response($viewPath, [
            'type' => $this->model->getType(),
            'contact' => $contact
        ]);

    }

    public function store(ContactRequest $request)
    {
        $attributes = $request->validated();
        try {
            DB::beginTransaction();
            $this->repository->create($attributes);
            DB::commit();
            $baseRoute = getBaseRouteByUrl($request);
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'Contact Created Successfully');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            return redirect()->back()
                ->withInput()
                ->with('failed', 'Failed to update Contacts');

        }

    }

    public function update(ContactRequest $request, $id)
    {

        $attributes = $request->validated();
        try {
            DB::beginTransaction();
            $this->repository->update($id, $attributes);
            DB::commit();
            $baseRoute = getBaseRouteByUrl($request);
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'Contact updated Successfully');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            return redirect()->back()
                ->withInput()
                ->with('failed', 'Failed to update contact .');
        }

    }

    public function destroy(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->repository->delete($id);
            DB::commit();
            return redirect()->back()
                ->with('success', 'Contact deleted Successfully');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            return redirect()->back()
                ->withInput()
                ->with('failed', 'Failed to delete contact .');

        }
    }
}
