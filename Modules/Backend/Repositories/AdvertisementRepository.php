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

    public function getViewData()
    {
        $selectPublishStatuses = [];
        $selectGuests = [];
        $selectReporters = [];
        $selectAdsFor = config('ads');
        $selectAdsSubFor = config('backend::advertisement.sub_for');
        dd($selectAdsFor);
        return [
            'selectPublishStatuses' => $selectPublishStatuses,
            'selectReporter' => $selectReporters,
            'selectGuests' => $selectGuests,
            'selectAdsFor' => $selectAdsFor,
            'selectAdsSubFor' => $selectAdsSubFor,
        ];
    }

}
