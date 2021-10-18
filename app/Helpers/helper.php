<?php

/**
 * Get list of languages
 */

use Carbon\Carbon;
use App\Models\City;
use App\Models\Country;

use Illuminate\Support\Facades\Storage;

/**
 * Generate Code 
 */
if (!function_exists('generateRandomCode')) {
	function generateRandomCode($string)
	{
		return $string .'-'. substr(md5(microtime()), rand(0, 26), 5);
	}
}

if (!function_exists('getCountry')) {
	function getCountry($city_id)
	{
		$city = City::whereId($city_id)->select('country_id')->first();
		return $city->country_id;
	}
}

if (!function_exists('cities')) {
	function cities()
	{
		$cities = City::get();
		return $cities;
	}
}
if (!function_exists('countries')) {
	function countries()
	{
		$countries = Country::get();
		return $countries;
	}
}
if (!function_exists('realEstatesType')) {
	function realEstatesType($type)
	{
		if ($type == 'normal') {
			return '<div class="badge badge-light-info fw-bolder">' . __("Normal") . '</div>';
		} elseif ($type == 'special') {
			return '<div class="badge badge-light-warning fw-bolder">' . __("Special") . '</div>';
		}
	}
}

if (!function_exists('uploadToPublic')) {
	function uploadToPublic($folder, $image)
	{
		return 'uploads/' . Storage::disk('public_new')->put($folder, $image);
	}
}

if (!function_exists('isActive')) {
	function isActive($type,$end_date="")
	{

		if ($type == 1 || $end_date >= now()) {
			return '<div class="badge badge-light-success fw-bolder">' . __("Active") . '</div>';
		} else{
			return '<div class="badge badge-light-danger fw-bolder">' . __("Not Active") . '</div>';
		}
	}
}

if (!function_exists('review')) {
	function review($type)
	{

		if ($type == 1) {
			return '<div class="badge badge-light-success fw-bolder">' . __("Reviewed") . '</div>';
		} elseif ($type == 0) {
			return '<a href="#" class="badge badge-light-danger fw-bolder">' . __("Not Review") . '</a>';
		}
	}
}




/**
 * Upload
 */
if (!function_exists('upload')) {
	function upload($file, $path)
	{
		$baseDir = 'uploads/' . $path;

		$name = sha1(time() . $file->getClientOriginalName());
		$extension = $file->getClientOriginalExtension();
		$fileName = "{$name}.{$extension}";

		$file->move(public_path() . '/' . $baseDir, $fileName);

		return "{$baseDir}/{$fileName}";
	}
}
