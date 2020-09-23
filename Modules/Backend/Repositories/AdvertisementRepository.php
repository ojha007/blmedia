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
            'detail_page' => 'News Detail Page',
            'category_page' => 'Category Page',
        ];
    }

    public function ads_Positions()
    {

        $toArray = [
            'top_menu' => 'Top Menu',
            'logo_and_menu' => 'Logo and Menu',
            'logo' => 'Logo',
            'footer' => 'Footer',
        ];
        $categories = DB::table('categories')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->whereIn('front_body_position', [2, 4, 6, 8, 9])
            ->orWhereIn('detail_body_position', [])
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

    public function getAdvertisementPositions($positions)
    {
        $toArray = [];
        foreach ($positions as $position) {
            $toArray[strtolower($position)] = ucwords($position, '_');
        }
        return $toArray;


    }

    public function getAllAdvertisements($page)
    {
        $ads_above_top_menu = $this->getAdsByForAndSubForAndPlacement([$page, 'all_page'], 'top_menu', 'above', 2);
        $ads_below_top_menu = $this->getAdsByForAndSubForAndPlacement([$page, 'all_page'], 'top_menu', 'below', 2);
        $ads_aside_logo = $this->getAdsByForAndSubForAndPlacement([$page, 'all_page'], 'top_menu', 'aside', 1);
        $ads_above_logo_and_menu = $this->getAdsByForAndSubForAndPlacement([$page, 'all_page'], 'logo_and_menu', 'above', 1);
        $ads_below_logo_and_menu = $this->getAdsByForAndSubForAndPlacement([$page, 'all_page'], 'logo_and_menu', 'below', 1);
        $ads_above_footer = $this->getAdsByForAndSubForAndPlacement([$page, 'all_page'], 'footer', 'above', 2);

        return [
            'ads_aside_logo' => $ads_aside_logo,
            'ads_below_top_menu' => $ads_below_top_menu,
            'ads_above_logo_and_menu' => $ads_above_logo_and_menu,
            'ads_above_top_menu' => $ads_above_top_menu,
            'ads_below_logo_and_menu' => $ads_below_logo_and_menu,
            'ads_above_footer' => $ads_above_footer,
        ];
    }

    public function getAdsByForAndSubForAndPlacement(array $for, $sub_for, $placement, $limit)
    {

        return DB::table('advertisements')
            ->select('title', 'image', 'description', 'sub_description', 'url')
            ->whereIn('for', $for)
            ->where('sub_for', '=', $sub_for)
            ->where('placement', '=', $placement)
            ->where('is_active', true)
            ->orderBy('created_at', 'DESC')
            ->limit($limit)
            ->get()
            ->toArray();
    }

}
