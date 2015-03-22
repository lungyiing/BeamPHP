Tama63\Beam\Channels
===============






* Class name: Channels
* Namespace: Tama63\Beam
* Parent class: [Tama63\Beam\Helper\Api](Tama63-Beam-Helper-Api.md)



Constants
----------


### CHANNELS_API

```
const CHANNELS_API = '/channels/'
```





### API_URL

```
const API_URL = 'https://beam.pro/api/v1'
```







Methods
-------


### \Tama63\Beam\Channels::find()

```
mixed Tama63\Beam\Channels::\Tama63\Beam\Channels::find()(null $attribute, null $order, null $only, null $page, null $limit)
```

Returns a list of all the channels on beam
<https://developer.beam.pro/api/channel/find>



* Visibility: **public**

#### Arguments

* $attribute **null** - &lt;p&gt;Specifies the attribute that for the order in which channels should be displayed&lt;/p&gt;
* $order **null** - &lt;p&gt;Order should be one of asc or desc&lt;/p&gt;
* $only **null** - &lt;p&gt;Filters the results to a specific subset. Valid values are: featured, partnered&lt;/p&gt;
* $page **null** - &lt;p&gt;Page of results to get&lt;/p&gt;
* $limit **null** - &lt;p&gt;Number of results per page to retrieve&lt;/p&gt;



### \Tama63\Beam\Channels::types()

```
mixed Tama63\Beam\Channels::\Tama63\Beam\Channels::types()()
```

Return a list of all possible types of channels
<https://developer.beam.pro/api/channel/types>



* Visibility: **public**



### \Tama63\Beam\Channels::inSlug()

```
mixed Tama63\Beam\Channels::\Tama63\Beam\Channels::inSlug()($slug, null $attribute, null $order, null $only, null $page, null $limit)
```

Return all the channels in a particular slug/type
<https://developer.beam.pro/api/channel/inType>



* Visibility: **public**

#### Arguments

* $slug **mixed**
* $attribute **null** - &lt;p&gt;Specifies the attribute that for the order in which channels should be displayed&lt;/p&gt;
* $order **null** - &lt;p&gt;Order should be one of asc or desc&lt;/p&gt;
* $only **null** - &lt;p&gt;Filters the results to a specific subset. Valid values are: featured, partnered&lt;/p&gt;
* $page **null** - &lt;p&gt;Page of results to get&lt;/p&gt;
* $limit **null** - &lt;p&gt;Number of results per page to retrieve&lt;/p&gt;



### \Tama63\Beam\Channels::search()

```
mixed Tama63\Beam\Channels::\Tama63\Beam\Channels::search()(string $scope, string $query, null $page, null $limit)
```

Search channels using a scope and query
<https://developer.beam.pro/api/channel/search>



* Visibility: **public**

#### Arguments

* $scope **string** - &lt;p&gt;Scope specifies the channel attributes you want to search for using the $query&lt;/p&gt;
* $query **string** - &lt;p&gt;The string to search by, in the previously provided $scope&lt;/p&gt;
* $page **null** - &lt;p&gt;Page of results to get&lt;/p&gt;
* $limit **null** - &lt;p&gt;Number of results per page to retrieve&lt;/p&gt;



### \Tama63\Beam\Helper\Api::query()

```
mixed Tama63\Beam\Channels::\Tama63\Beam\Helper\Api::query()(string $endpoint, null $params)
```

Sends a query to the Beam API endpoint with a user defined endpoint



* Visibility: **protected**

#### Arguments

* $endpoint **string** - &lt;p&gt;The url endpoint relative to the Beam API&lt;/p&gt;
* $params **null** - &lt;p&gt;Get parameters to be passed to the endpoint&lt;/p&gt;


