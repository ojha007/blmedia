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
}
