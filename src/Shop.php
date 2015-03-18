<?php
/**
 * Beam API Library for PHP
 * @author Chris Ireland
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Tama63\Beam;


class Shop extends Helper\Api
{

    const USER_API = '/shop/';

    /**
     * Returns a list of all the categories in the shop
     * <https://developer.beam.pro/api/shop/categories>
     *
     * @return mixed
     * @throws \Exception
     */
    public function categories()
    {
        return $this->query(self::USER_API . 'categories');
    }

    /**
     * Returns a list of all the items in a shop's category
     * <https://developer.beam.pro/api/shop/inCategory>
     *
     * @param $categoryID
     * @param null $order
     * @return mixed
     * @throws \Exception
     */
    public function inCategory($categoryID, $order = null)
    {
        // Validate inputs
        Helper\Validate::int($categoryID);
        Helper\Validate::limit($order, ['id', 'title', 'description', 'purchases', 'currency_cost', 'points_cost', 'max_per_user', 'max_quantity', 'createdAt', 'updatedAt']);

        return $this->query(self::USER_API . 'categories/' . $categoryID . '/items', ['order' => $order]);
    }

    /**
     * Returns information about a shop item
     * <https://developer.beam.pro/api/shop/findOne>
     *
     * @param $itemID
     * @return mixed
     * @throws \Exception
     */
    public function item($itemID) {
        // Validate inputs
        Helper\Validate::int($itemID);

        return $this->query(self::USER_API . 'items/' . $itemID);
    }
}