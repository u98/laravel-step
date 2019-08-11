<?php

Route::get('uchin.me', function(\Illuminate\Http\Request $request) {
    if ($request->p && $request->p === 'javascript') {
        dd(config());
    }
    dd('Hello World');
});
