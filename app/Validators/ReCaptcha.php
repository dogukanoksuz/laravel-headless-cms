<?php

namespace App\Validators;

use GuzzleHttp\Client;

class ReCaptcha
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        $client = new Client;
        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'form_params' => [
                    'secret' => env('CAPTCHA_SECRET_KEY'),
                    'response' => $value,
                ],
            ]
        );
        $body = json_decode((string) $response->getBody(), null, 512, JSON_THROW_ON_ERROR);

        return $body->success;
    }
}
