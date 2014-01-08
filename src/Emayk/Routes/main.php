<?php
Route::group(array('prefix' => 'iseng','as' => 'btrap'),function(){
	 Route::get('/',function(){
			$time = time();
			return \View::make('btrap::home.index',compact('time'));
	 });
});