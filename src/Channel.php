<?php
/**
 * Channel is part of the Beam API Library for PHP
 *
 * Channel provides an interface for the /channels/ endpoint of the Beam API but for single channels
 *
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
     * @param int $channelID The id of a channel
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
     * @param null $page Page of results to get
     * @param null $limit Number of results per page to retrieve
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