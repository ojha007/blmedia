<?php

namespace Modules\Backend\Http\Controllers;

use Modules\Backend\Entities\Reporter;

class ReporterController extends ContactController
{

    protected $type = 'REPORTER';


    public function __construct(Reporter $reporter)
    {
        parent::__construct($reporter);
    }


}
