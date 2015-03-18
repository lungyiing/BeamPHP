<?php
/**
 * Beam API Library for PHP
 * @author Chris Ireland
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Tama63\Beam;


class Channel extends Helper\Api
{

    const CHANNEL_API = '/channels/';

    private $channelID;
    private $channelEndpoint;

    /**
     * Create a channel instance using an id
     *
     * @param $channelID
     * @throws \Exception
     */
    public function __construct($channelID)
    {
        // IDs should be numeric else are invalid
        Helper\Validate::int($channelID);

        $this->channelID = $channelID;
        $this->channelEndpoint = self::CHANNEL_API . $this->channelID;
    }

    /**
     * Return information about the channel
     * <https://developer.beam.pro/api/channel/findOne>
     *
     * @return mixed
     * @throws \Exception
     */
    public function info()
    {
        return $this->query($this->channelEndpoint);
    }

    /**
     * Returns a list of all the channel's followers
     * <https://developer.beam.pro/api/channel/listFollowers>
     *
     * @param null $page
     * @param null $limit
     * @return mixed
     * @throws \Exception
     */
    public function followers($page = null, $limit = null)
    {
        // Validate inputs
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query($this->channelEndpoint . '/follow', ['page' => $page, 'limit' => $limit]);
    }
}