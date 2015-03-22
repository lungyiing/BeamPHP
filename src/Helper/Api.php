<?php
/**
 * Beam API Library for PHP
 * @author Chris Ireland
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Tama63\Beam\Helper;


use GuzzleHttp\Client;

class Api
{

    const API_URL = 'https://beam.pro/api/v1';

    /**
     * Sends a query to the Beam API endpoint with a user defined endpoint
     *
     * @param string $endpoint The url endpoint relative to the Beam API
     * @param null $params Get parameters to be passed to the endpoint
     * @return mixed $response Either a plain body or array response
     * @throws \Exception
     */
    protected function query($endpoint, $params = null)
    {
        // Init guzzle
        $client = new Client();

        // Query the Beam API with the relevant endpoint
        $response = $client->get(self::API_URL . $endpoint, $params);

        // If the response code isn't 200 then we haven't been able to query the endpoint
        if ($response->getStatusCode() != '200') {
            throw new \Exception('Unable to resolve Beam API endpoint');
        } else {
            // Some returns from the api aren't json...
            if (Validate::json($response->json())) {
                return $response->json();
            } else {
                return $response->getBody();
            }
        }

    }
}