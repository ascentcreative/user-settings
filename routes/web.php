<?php


Route::middleware('web')->group( function() {

    Route::get('/us-test', function() {
        dump(AscentCreative\UserSettings\Models\Setting::get('test4'));

        dump(AscentCreative\UserSettings\Models\Setting::getArray('test4'));
    });


    Route::get('user-settings', function(Request $request) {
        return view('usersettings::base');
    })->name('usersettings');

    Route::post('user-settings', function(Request $request) {

        $input = request()->all();
        unset($input['_token']);

        foreach($input as $name=>$value) {
            AscentCreative\UserSettings\Models\Setting::set($name, $value);
        }

        return back()->with('alert','Settings updated')->with('alert-type', 'success');

    })->name('usersettings');


}); //->middleware('web');

