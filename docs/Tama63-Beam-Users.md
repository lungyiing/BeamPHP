Tama63\Beam\Users
===============






* Class name: Users
* Namespace: Tama63\Beam
* Parent class: [Tama63\Beam\Helper\Api](Tama63-Beam-Helper-Api.md)



Constants
----------


### USERS_API

```
const USERS_API = '/users/'
```





### API_URL

```
const API_URL = 'https://beam.pro/api/v1'
```







Methods
-------


### \Tama63\Beam\Users::search()

```
mixed Tama63\Beam\Users::\Tama63\Beam\Users::search()(string $query, null $page, null $limit)
```

Search for users based on a query of usernames
<https://developer.beam.pro/api/user/search>



* Visibility: **public**

#### Arguments

* $query **string** - &lt;p&gt;The prefix of the username to query with. Must be at least two characters long, or an empty array will be returned&lt;/p&gt;
* $page **null** - &lt;p&gt;Page of results to get&lt;/p&gt;
* $limit **null** - &lt;p&gt;Number of results per page to retrieve&lt;/p&gt;



### \Tama63\Beam\Helper\Api::query()

```
mixed Tama63\Beam\Users::\Tama63\Beam\Helper\Api::query()(string $endpoint, null $params)
```

Sends a query to the Beam API endpoint with a user defined endpoint



* Visibility: **protected**

#### Arguments

* $endpoint **string** - &lt;p&gt;The url endpoint relative to the Beam API&lt;/p&gt;
* $params **null** - &lt;p&gt;Get parameters to be passed to the endpoint&lt;/p&gt;


