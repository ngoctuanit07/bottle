<?php

namespace Botble\Captcha\Contracts\Utilities;

interface RequestContract
{
    /**
     * Run the request and get response.
     *
     * @param  string $url
     * @param  bool $curled
     *
     * @return array
     * @author ARCANEDEV
     */
    public function send($url, $curled = true);
}
