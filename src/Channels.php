<?php
/**
 * Beam API Library for PHP
 * @author Chris Ireland
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Tama63\Beam;


class Channels extends Helper\Api
{

    const CHANNELS_API = '/channels/';

    /**
     * Returns a list of all the channels on beam
     * <https://developer.beam.pro/api/channel/find>
     *
     * @param null $order
     * @param null $only
     * @param null $page
     * @param null $limit
     * @return mixed
     * @throws \Exception
     */
    public function find($order = null, $only = null, $page = null, $limit = null)
    {
        // Validate inputs
        Helper\Validate::limit($order, ['online', 'featured', 'partnered', 'name', 'viewers_total', 'followers', 'subscribers']);
        Helper\Validate::limit($only, ['featured', 'partnered']);
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query(self::CHANNELS_API, ['order' => $order, 'only' => $only, 'page' => $page, 'limit' => $limit]);
    }

    /**
     * Return a list of all possible types of channels
     * <https://developer.beam.pro/api/channel/types>
     *
     * @return mixed
     * @throws \Exception
     */
    public function types()
    {
        return $this->query(self::CHANNELS_API . 'types');
    }

    /**
     * Return all the channels in a particular slug/type
     * <https://developer.beam.pro/api/channel/inType>
     *
     * @param $slug
     * @param null $order
     * @param null $only
     * @param null $page
     * @param null $limit
     * @return mixed
     * @throws \Exception
     */
    public function inSlug($slug, $order = null, $only = null, $page = null, $limit = null)
    {
        // Validate inputs
        Helper\Validate::limit($order, ['online', 'featured', 'partnered', 'name', 'viewers_total', 'followers', 'subscribers']);
        Helper\Validate::limit($only, ['featured', 'partnered']);
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query(self::CHANNELS_API . 'types/' . $slug . '/channels', ['order' => $order, 'only' => $only, 'page' => $page, 'limit' => $limit]);
    }

    /**
     * Search channels using a scope and query
     * <https://developer.beam.pro/api/channel/search>
     *
     * @param $scope
     * @param $query
     * @param null $page
     * @param null $limit
     * @return mixed
     * @throws \Exception
     */
    public function search($scope, $query, $page = null, $limit = null)
    {
        // Validate inputs
        Helper\Validate::limit($scope, ['names', 'titles', 'types', 'all']);
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query(self::CHANNELS_API . 'search', ['scope' => $scope, 'query' => $query, 'page' => $page, 'limit' => $limit]);
    }
}