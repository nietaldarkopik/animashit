<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\PageModel;
use Illuminate\Http\Request;        
use YoutubeDl\Options;
use YoutubeDl\YoutubeDl;
use Animashit\Ytdl\YoutubeDlshit;

class ApiServicesController extends Controller
{

    public function getCountriesList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getCountriesDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigsList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigsDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigFeaturesList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigFeaturesDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigMediasList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigMediasDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigPackagesList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigPackagesDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigPackageExtrasList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigPackageExtrasDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigPackageFeaturesList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigPackageFeaturesDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigPackageHeadList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigPackageHeadDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigPackageMediasList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getGigPackageMediasDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getPackagesList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getPackagesDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getPagesList(Request $request)
    {
        $data = PageModel::get();
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getPagesDetail(Request $request)
    {
        $data = PageModel::where('slug','=', $request->slug)->first();
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getPortfoliosList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getPortfoliosDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getPortfolioMediasList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getPortfolioMediasDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getProfilesList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getProfilesDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getSchedulesList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getSchedulesDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getScheduleItemsList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getScheduleItemsDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getScheduleItemTypesList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getScheduleItemTypesDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getScheduleStatusList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getScheduleStatusDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getSettingsList(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }
    public function getSettingsDetail(Request $request)
    {
        $data = [];
        $output = [
            'data' => $data,
            'status' => true,
            'message' => 'Success'
        ];
        return response($output,201);
    }


    public function getYoutubeUrl(Request $request)
    {
        $postUrl = $request->input('url');
        $yt = new YoutubeDlshit();
        
        $collection = $yt->videoList(
            Options::create()
                ->url('https://www.youtube.com/watch?v=oDAw7vW7H0c')
        );
    
        return response($collection->getVideos(),201);
        foreach ($collection->getVideos() as $video) {
            if ($video->getError() !== null) {
                echo "Error downloading video: {$video->getError()}.";
            } else {
                echo $video->getTitle(); // Will return Phonebloks
                // $video->getFile(); // \SplFileInfo instance of downloaded file
            }
        }
    }
}
