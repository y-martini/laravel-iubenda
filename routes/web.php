<?php

use Illuminate\Support;

Support\Facades\Route::get(
  '/cookie-policy',
  function () {
    return ($url = iubenda_cookie_policy_url()) 
      ? Support\Facades\Redirect::to($url) 
      : Support\Facades\Response::noContent();
  }
)->name('cookie_policy');

Support\Facades\Route::get(
  '/privacy-policy',
  function () {
    return ($url = iubenda_privacy_policy_url()) 
      ? Support\Facades\Redirect::to($url) 
      : Support\Facades\Response::noContent();
  }
)->name('privacy_policy');
