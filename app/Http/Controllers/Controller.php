<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	protected $C_lang;
	
	public function getCurrentLang()
    {
    	if(Session::has('changed_language'))
		{
			\App::setLocale(Session::get('changed_language'));
			return $this->C_lang = Session::get('changed_language');
		}
		else
		{
			\App::setLocale('en');
			return $this->C_lang = 'en';
		}
    }
}
