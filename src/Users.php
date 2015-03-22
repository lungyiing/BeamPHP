<?php
/**
 * Users is part of the Beam API Library for PHP
 *
 * Use provides an interface for the /users/ endpoint of the Beam API
 *
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
     * @param string $query The prefix of the username to query with. Must be at least two characters long, or an empty array will be returned
     * @param null $page Page of results to get
     * @param null $limit Number of results per page to retrieve
     * @return mixed
     * @throws \Exception
     */
    public function search($query, $page = null, $limit = null)
    {
        // Validate inputs
        Helper\Validate::length($query, 3);
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query(self::USERS_API . 'search', ['query' => $query, 'page' => $page, 'limit' => $limit]);
    }
}