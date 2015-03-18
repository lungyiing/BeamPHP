<?php
/**
 * Beam API Library for PHP
 * @author Chris Ireland
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Tama63\Beam;


class Users extends Helper\Api {

    const USERS_API = '/users/';

    /**
     * Search for users based on a query of usernames
     * <https://developer.beam.pro/api/user/search>
     *
     * @param $query
     * @param null $page
     * @param null $limit
     * @return mixed
     * @throws \Exception
     */
    public function search($query, $page = null, $limit = null) {
        // Validate inputs
        Helper\Validate::length($query, 3);
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query(self::USERS_API . 'search', ['query' => $query, 'page' => $page, 'limit' => $limit]);
    }
}