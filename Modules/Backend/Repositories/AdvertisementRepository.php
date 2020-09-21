<?php


namespace Modules\Backend\Repositories;


use App\Repositories\Repository;
use Illuminate\Support\Facades\DB;
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
        return [
            'selectPublishStatuses' => $selectPublishStatuses,
            'selectReporter' => $selectReporters,
            'selectGuests' => $selectGuests,
            'selectAdsFor' => $this->ads_page(),
            'selectAdsSubFor' => $this->ads_Positions(),
            'placement' => $this->adsPlacements(),
            'advertisement' => $advertisement
        ];
    }

    public function ads_page()
    {
        return [
            'all_page' => 'All Pages',
            'main_page' => 'Main Page',
            'detail_page' => 'Detail Page',
            'category_page' => 'Category Page',
        ];
    }

    public function ads_Positions()
    {

        $toArray = [
            'top_menu' => 'Top Menu',
            'logo_menu' => 'Logo and Menu',
            'logo' => 'Logo',
        ];
        $categories = DB::table('categories')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->whereNotNull('front_body_position')
            ->orWhereNotNull('detail_body_position')
            ->select('categories.id', 'categories.slug', 'categories.name')
            ->get();
        foreach ($categories as $category) {
            $toArray[$category->slug] = $category->name;

        }
        return $toArray;

    }

    public function adsPlacements()
    {
        return
            [
                'above' => 'Above',
                'below' => 'Below',
                'aside' => 'Aside'
            ];
    }

    public function getAdsByForAndSubForAndPlacement($for, $sub_for, $placement, $limit)
    {
        return DB::table('advertisements')
            ->select('title', 'image', 'description', 'sub_description')
            ->where('for', '=', $for)
            ->where('sub_for', '=', $sub_for)
            ->where('placement', '=', $placement)
            ->where('is_active', true)
            ->limit($limit)
            ->get()
            ->toArray();
    }

    public function getAdvertisementPositions($positions)
    {
        $toArray = [];
        foreach ($positions as $position) {
            $toArray[strtolower($position)] = ucwords($position, '_');
        }
        return $toArray;


    }

}
