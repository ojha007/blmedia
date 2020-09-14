<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Http\Responses\Response;
use Modules\Backend\Repositories\NewsCategoryRepository;
use Modules\Frontend\Entities\NewsCategory;

class NewsController extends Controller
{
    protected $module = 'fronted';

    protected $viewPath = 'frontend::components.';

    public function showNews($slug)
    {
        $news = $this->getNews($slug);
        $headerCategories = (new NewsCategoryRepository(new NewsCategory()))->getHeaderCategories();
        return new Response($this->viewPath . '.newsDetail',
            [
                'news' => $news,
                'headerCategories' => $headerCategories
            ]);

    }

    protected function getNews($slug)
    {
        return DB::table('news')
            ->where('slug', $slug)
            ->select('news.title', 'news.sub_title', 'news.description')
            ->first();
    }

}
