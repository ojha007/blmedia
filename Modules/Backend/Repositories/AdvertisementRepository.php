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

    public function getViewData($advertisement)
    {

        $selectPublishStatuses = [];
        $selectGuests = [];
        $selectReporters = [];
        $placement = [
            'one' => 'one',
            'two' => 'two'
        ];
        $selectAdsFor = $this->getAdvertisementPositions(config('ads.for'));
        $selectAdsSubFor = $this->getAdvertisementPositions(config('ads.sub_for'));
        return [
            'selectPublishStatuses' => $selectPublishStatuses,
            'selectReporter' => $selectReporters,
            'selectGuests' => $selectGuests,
            'selectAdsFor' => $selectAdsFor,
            'selectAdsSubFor' => $selectAdsSubFor,
            'placement'=>$placement,
            'advertisement'=>$advertisement
        ];
    }

    protected function getAdvertisementPositions($positions)
    {
        $toArray = [];
        foreach ($positions as $position) {
            $toArray[strtolower($position)] = ucwords($position, '_');
        }
        return $toArray;


    }

}
