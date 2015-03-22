<?php
/**
 * Shop is part of the Beam API Library for PHP
 *
 * Shop provides an interface for the /shop/ endpoint of the Beam API
 *
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
     * @param int $categoryID Category id to search in
     * @param null $attribute Specifies the attribute that for the order in which items should be displayed
     * @param null $order Order should be one of asc or desc
     * @return mixed
     * @throws \Exception
     */
    public function inCategory($categoryID, $attribute = null, $order = null)
    {
        // Validate inputs
        Helper\Validate::int($categoryID);
        Helper\Validate::limit($attribute, ['id', 'title', 'description', 'purchases', 'currency_cost', 'points_cost', 'max_per_user', 'max_quantity', 'createdAt', 'updatedAt']);

        return $this->query(self::USER_API . 'categories/' . $categoryID . '/items', ['order' => $attribute . ':' . $order,]);
    }

    /**
     * Returns information about a shop item
     * <https://developer.beam.pro/api/shop/findOne>
     *
     * @param int $itemID The item id to display
     * @return mixed
     * @throws \Exception
     */
    public function item($itemID)
    {
        // Validate inputs
        Helper\Validate::int($itemID);

        return $this->query(self::USER_API . 'items/' . $itemID);
    }
}