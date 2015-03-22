Tama63\Beam\User
===============






* Class name: User
* Namespace: Tama63\Beam
* Parent class: [Tama63\Beam\Helper\Api](Tama63-Beam-Helper-Api.md)



Constants
----------


### USER_API

```
const USER_API = '/users/'
```





### API_URL

```
const API_URL = 'https://beam.pro/api/v1'
```





Properties
----------


### $userID

```
private mixed $userID
```





* Visibility: **private**


### $userEndpoint

```
private mixed $userEndpoint
```





* Visibility: **private**


Methods
-------


### \Tama63\Beam\User::__construct()

```
mixed Tama63\Beam\User::\Tama63\Beam\User::__construct()(integer $userID)
```

Creates a user instance using an id



* Visibility: **public**

#### Arguments

* $userID **integer** - &lt;p&gt;The id of a user&lt;/p&gt;



### \Tama63\Beam\User::info()

```
mixed Tama63\Beam\User::\Tama63\Beam\User::info()()
```

Returns information about the user
<https://developer.beam.pro/api/user/findOne>



* Visibility: **public**



### \Tama63\Beam\User::following()

```
mixed Tama63\Beam\User::\Tama63\Beam\User::following()(null $page, null $limit)
```

Returns a list of the channels a user follows
<https://developer.beam.pro/api/user/follows>



* Visibility: **public**

#### Arguments

* $page **null** - &lt;p&gt;Page of results to get&lt;/p&gt;
* $limit **null** - &lt;p&gt;Number of results per page to retrieve&lt;/p&gt;



### \Tama63\Beam\User::achievements()

```
mixed Tama63\Beam\User::\Tama63\Beam\User::achievements()()
```

Lists the progress of a user on Beam's achievements
<https://developer.beam.pro/api/achievement/forUser>



* Visibility: **public**



### \Tama63\Beam\Helper\Api::query()

```
mixed Tama63\Beam\User::\Tama63\Beam\Helper\Api::query()(string $endpoint, null $params)
```

Sends a query to the Beam API endpoint with a user defined endpoint



* Visibility: **protected**

#### Arguments

* $endpoint **string** - &lt;p&gt;The url endpoint relative to the Beam API&lt;/p&gt;
* $params **null** - &lt;p&gt;Get parameters to be passed to the endpoint&lt;/p&gt;


