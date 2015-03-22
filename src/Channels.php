<?php
/**
 * Channels is part of the Beam API Library for PHP
 *
 * Channels provides an interface for the /channels/ endpoint of the Beam API
 *
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
     * @param null $attribute Specifies the attribute that for the order in which channels should be displayed
     * @param null $order Order should be one of asc or desc
     * @param null $only Filters the results to a specific subset. Valid values are: featured, partnered
     * @param null $page Page of results to get
     * @param null $limit Number of results per page to retrieve
     * @return mixed
     * @throws \Exception
     */
    public function find($attribute = null, $order = null, $only = null, $page = null, $limit = null)
    {
        // Validate inputs
        Helper\Validate::limit($order, ['asc', 'desc']);
        Helper\Validate::limit($attribute, ['online', 'featured', 'partnered', 'name', 'viewers_total', 'followers', 'subscribers']);
        Helper\Validate::limit($only, ['featured', 'partnered']);
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query(self::CHANNELS_API, ['order' => $attribute . ':' . $order, 'only' => $only, 'page' => $page, 'limit' => $limit]);
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
     * @param null $attribute Specifies the attribute that for the order in which channels should be displayed
     * @param null $order Order should be one of asc or desc
     * @param null $only Filters the results to a specific subset. Valid values are: featured, partnered
     * @param null $page Page of results to get
     * @param null $limit Number of results per page to retrieve
     * @return mixed
     * @throws \Exception
     */
    public function inSlug($slug, $attribute = null, $order = null, $only = null, $page = null, $limit = null)
    {
        // Validate inputs
        Helper\Validate::limit($order, ['asc', 'desc']);
        Helper\Validate::limit($attribute, ['online', 'featured', 'partnered', 'name', 'viewers_total', 'followers', 'subscribers']);
        Helper\Validate::limit($only, ['featured', 'partnered']);
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query(self::CHANNELS_API . 'types/' . $slug . '/channels', ['order' => $attribute . ':' . $order, 'only' => $only, 'page' => $page, 'limit' => $limit]);
    }

    /**
     * Search channels using a scope and query
     * <https://developer.beam.pro/api/channel/search>
     *
     * @param string $scope Scope specifies the channel attributes you want to search for using the $query
     * @param string $query The string to search by, in the previously provided $scope
     * @param null $page Page of results to get
     * @param null $limit Number of results per page to retrieve
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