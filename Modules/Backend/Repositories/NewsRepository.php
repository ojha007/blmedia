<?php


namespace Modules\Backend\Repositories;


use App\Repositories\Repository;
use Modules\Backend\Entities\News;

class NewsRepository extends Repository
{
    public function __construct(News $news)
    {
        $this->model = $news;
    }

    public function getViewData()
    {
        $selectPublishStatuses = $this->selectNewsStatus();
        $selectGuests = [];
        $selectReporters = [];
        return [
            'selectPublishStatuses' => $selectPublishStatuses,
            'selectReporter' => $selectReporters,
            'selectGuests' => $selectGuests,
        ];
    }

    public function selectNewsStatus()
    {

        $publishStatuses = [];
        foreach (News::publishStatus() as $status) {
            $publishStatuses[$status] = $status;
        }
        return $publishStatuses;
    }
}
