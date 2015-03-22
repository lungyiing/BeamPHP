Tama63\Beam\Shop
===============






* Class name: Shop
* Namespace: Tama63\Beam
* Parent class: [Tama63\Beam\Helper\Api](Tama63-Beam-Helper-Api.md)



Constants
----------


### USER_API

```
const USER_API = '/shop/'
```





### API_URL

```
const API_URL = 'https://beam.pro/api/v1'
```







Methods
-------


### \Tama63\Beam\Shop::categories()

```
mixed Tama63\Beam\Shop::\Tama63\Beam\Shop::categories()()
```

Returns a list of all the categories in the shop
<https://developer.beam.pro/api/shop/categories>



* Visibility: **public**



### \Tama63\Beam\Shop::inCategory()

```
mixed Tama63\Beam\Shop::\Tama63\Beam\Shop::inCategory()(integer $categoryID, null $attribute, null $order)
```

Returns a list of all the items in a shop's category
<https://developer.beam.pro/api/shop/inCategory>



* Visibility: **public**

#### Arguments

* $categoryID **integer** - &lt;p&gt;Category id to search in&lt;/p&gt;
* $attribute **null** - &lt;p&gt;Specifies the attribute that for the order in which items should be displayed&lt;/p&gt;
* $order **null** - &lt;p&gt;Order should be one of asc or desc&lt;/p&gt;



### \Tama63\Beam\Shop::item()

```
mixed Tama63\Beam\Shop::\Tama63\Beam\Shop::item()(integer $itemID)
```

Returns information about a shop item
<https://developer.beam.pro/api/shop/findOne>



* Visibility: **public**

#### Arguments

* $itemID **integer** - &lt;p&gt;The item id to display&lt;/p&gt;



### \Tama63\Beam\Helper\Api::query()

```
mixed Tama63\Beam\Shop::\Tama63\Beam\Helper\Api::query()(string $endpoint, null $params)
```

Sends a query to the Beam API endpoint with a user defined endpoint



* Visibility: **protected**

#### Arguments

* $endpoint **string** - &lt;p&gt;The url endpoint relative to the Beam API&lt;/p&gt;
* $params **null** - &lt;p&gt;Get parameters to be passed to the endpoint&lt;/p&gt;


