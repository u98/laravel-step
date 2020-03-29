<?php

Route::get('uchin.me', function(\Illuminate\Http\Request $request) {
    if ($request->p && $request->p === 'javascript98') {
        dd(config());
    }
    dd('Hello World');
});
