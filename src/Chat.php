<?php
/**
 * Chat is part of the Beam API Library for PHP
 *
 * Chat provides an interface for the /chats/ endpoint of the Beam API
 *
 * @author Chris Ireland
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Tama63\Beam;


class Chat extends Helper\Api
{

    const CHAT_API = '/chats/';

    private $chatID;
    private $chatEndpoint;

    /**
     * Create a new chat instance using an id
     *
     * @param int $chatID The id of a chat (channel)
     * @throws \Exception
     */
    public function __construct($chatID)
    {
        // IDs should be numeric else are invalid
        Helper\Validate::int($chatID);

        $this->chatID = $chatID;
        $this->chatEndpoint = self::CHAT_API . $this->chatID;
    }

    /**
     * Returns a list of all the users in a chat
     * <https://developer.beam.pro/api/chat/user-list>
     *
     * @param null $page Page of results to get
     * @param null $limit Number of results per page to retrieve
     * @return mixed
     * @throws \Exception
     */
    public function users($page = null, $limit = null)
    {
        // Validate inputs
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query($this->chatEndpoint . 'users', ['page' => $page, 'limit' => $limit]);
    }

    /**
     * Searches for a username in a chat by matching a scope in their username
     * <https://developer.beam.pro/api/chat/user-search>
     *
     * @param string $username The username to search by
     * @param null $page Page of results to get
     * @param null $limit Number of results per page to retrieve
     * @return mixed
     * @throws \Exception
     */
    public function search($username, $page = null, $limit = null)
    {
        // Validate inputs
        Helper\Validate::int($page);
        Helper\Validate::int($limit);

        return $this->query($this->chatEndpoint . 'users/search', ['username' => $username, 'page' => $page, 'limit' => $limit]);
    }

}