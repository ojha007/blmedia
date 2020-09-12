<?php


namespace Modules\Backend\Repositories;


use App\Repositories\Repository;
use Modules\Backend\Entities\Guest;
use Modules\Backend\Entities\News;
use Modules\Backend\Entities\NewsCategory;
use Modules\Backend\Entities\Reporter;

class NewsRepository extends Repository
{
    public function __construct(News $news)
    {
        $this->model = $news;
    }

    public function getViewData()
    {
        $selectPublishStatuses = $this->selectNewsStatus();
        $selectGuests = (new ContactRepository(new Guest()))->selectContacts();
        $selectReporters = (new ContactRepository(new Reporter()))->selectContacts();
        $selectNewsCategories = (new NewsCategoryRepository(new NewsCategory()))->selectAllCategories();
        return [
            'selectPublishStatuses' => $selectPublishStatuses,
            'selectReporters' => $selectReporters,
            'selectGuests' => $selectGuests,
            'selectNewsCategories' => $selectNewsCategories
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
