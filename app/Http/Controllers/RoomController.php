<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class RoomController extends BaseController
{
    public function index(){
        return view('index');
        //return $this->getArraySettings();
    }
    public function getArraySettings(){
        $disk = Storage::disk('public');
        $arrNames = array();
        if ($disk->exists('heater/outputs/names')) {
            $arrNames = explode(';', $disk->get('heater/outputs/names'));
            dd($arrNames);
        }
    return $arrNames;
    }
}
