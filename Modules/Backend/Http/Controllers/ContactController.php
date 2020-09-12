<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Contact;
use Modules\Backend\Http\Responses\Response;
use Modules\Backend\Repositories\ContactRepository;

class ContactController extends Controller
{

    /**
     * @var string
     */
    protected $viewPath = 'backend::contacts';


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

    public function store()
    {


    }

    public function update()
    {


    }

}
