<?php


namespace Modules\Backend\Repositories;


use App\Repositories\Repository;
use Modules\Backend\Entities\Contact;

class ContactRepository extends Repository
{
    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }


}
