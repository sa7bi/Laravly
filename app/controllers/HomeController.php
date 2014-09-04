<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.master';

	public function showWelcome()
	{
		$this->layout->content = View::make('home.index');
	}

	public function getUrl()
	{
		$url = Input::get('url');
		$res = Url::whereoriginal($url)->first();
		if (Request::ajax()) {
			if ($res) {
				$shortened = $res->shortened;
				return HTML::link($shortened,'localhost:8000/'.$shortened) ;
			}else{
				$new_shortened =  static::get_short_url($url);
				if ($new_shortened != false) {
					return HTML::link($new_shortened,'localhost:8000/'.$new_shortened) ;
				}else{
					return '<div class="alert alert-danger" role="alert">Something went wrong with DB !</div>';
				}
				
			}
		}
		
	}

	private function get_short_url($url){
		//$var_url = $url;
		$res_short = base_convert(rand(10000,99999),10,36);
		if (Url::whereshortened($res_short)->first()) {
			get_short_url($url);
		}else{
			$new_url = new Url;
			$new_url->original = $url;
			$new_url->shortened = $res_short;
			$saved = $new_url->save();
			if ($saved) {
				return $res_short;
			}else{
				return false;
			}
			
		}
	}

}
