<?php
namespace Yeelight\Services\Image\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Yeelight\Services\Image\YeelightImageService;

class YeelightImageController extends BaseController
{

    /**
     * @param $template
     * @param $image_name
     * @return mixed|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public static function showImage($template, $image_name)
    {
        $yeelightImageService = new YeelightImageService();
        return $yeelightImageService->showImage($template, $image_name);
    }

}