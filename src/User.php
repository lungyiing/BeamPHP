<?php
/**
 * Beam API Library for PHP
 * @author Chris Ireland
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Tama63\Beam;


class User extends Helper\Api {

    const USER_API = '/users/';

    private $userID;
    private $userEndpoint;

    /**
     * Creates a user instance using an id
     *
     * @param $userID
     * @throws \Exception
     */
    public function __construct($userID)
    {
        // IDs should be numeric else are invalid
        Helper\Validate::int($userID);

        $this->userID = $userID;
        $this->userEndpoint = self::USER_API . $this->userID;
    }

    /**
     * Returns information about the user
     * <https://developer.beam.pro/api/user/findOne>
     *
     * @return mixed
     * @throws \Exception
     */
    public function info() {
        return $this->query($this->userEndpoint);
    }

    /**
     * Returns a list of the channels a user follows
     * <https://developer.beam.pro/api/user/follows>
     *
     * @param null $page
     * @param null $limit
     * @return mixed
     * @throws \Exception
     */
    public function following($page = null, $limit = null) {
        // Validate inputs
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query($this->userEndpoint . 'followers', ['page' => $page, 'limit' => $limit]);
    }

    /**
     * Lists the progress of a user on Beam's achievements
     * <https://developer.beam.pro/api/achievement/forUser>
     *
     * @return mixed
     * @throws \Exception
     */
    public function achievements() {
        return $this->query($this->userEndpoint . 'achievements');
    }
}