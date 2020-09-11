<?php


namespace Modules\Backend\Repositories;


use App\Repositories\Repository;
use Modules\Backend\Entities\Advertisement;

class AdvertisementRepository extends Repository
{
    public function __construct(Advertisement $advertisement)
    {
        $this->model = $advertisement;
    }

//    public function getViewData()
//    {
//        $selectPublishStatuses = $this->selectNewsStatus();
//        $selectGuests = [];
//        $selectReporters = [];
//        return [
//            'selectPublishStatuses' => $selectPublishStatuses,
//            'selectReporter' => $selectReporters,
//            'selectGuests' => $selectGuests,
//        ];
//    }
//
//    public function selectNewsStatus()
//    {
//
//        $publishStatuses = [];
//        foreach (News::publishStatus() as $status) {
//            $publishStatuses[$status] = $status;
//        }
//        return $publishStatuses;
//    }
}
