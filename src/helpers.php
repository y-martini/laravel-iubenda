<?php

use Illuminate\Support;

if (!function_exists('iubenda_cookie_policy_url')) {
    /**
     * Get the URL to Iubenda Cookie Policy page.
     */
    function iubenda_cookie_policy_url(): ?string
    {
        return ($url = iubenda_privacy_policy_url()) ? "$url/cookie-policy" : null;
    }
}

if (!function_exists('iubenda_privacy_policy_url')) {
    /**
     * Get the URL to Iubenda Privacy Policy page.
     */
    function iubenda_privacy_policy_url(): ?string
    {
        return ($id = Support\Facades\Config::get("iubenda.privacy_policy.id"))
            ? iubenda_url("/privacy-policy/$id")
            : null;
    }
}

if (!function_exists('iubenda_url')) {
    /**
     * Get the URL to Iubenda.
     */
    function iubenda_url(string $url): string
    {
        return "https://www.iubenda.com$url";
    }
}
