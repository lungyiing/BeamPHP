Tama63\Beam\Channel
===============






* Class name: Channel
* Namespace: Tama63\Beam
* Parent class: [Tama63\Beam\Helper\Api](Tama63-Beam-Helper-Api.md)



Constants
----------


### CHANNEL_API

```
const CHANNEL_API = '/channels/'
```





### API_URL

```
const API_URL = 'https://beam.pro/api/v1'
```





Properties
----------


### $channelID

```
private mixed $channelID
```





* Visibility: **private**


### $channelEndpoint

```
private mixed $channelEndpoint
```





* Visibility: **private**


Methods
-------


### \Tama63\Beam\Channel::__construct()

```
mixed Tama63\Beam\Channel::\Tama63\Beam\Channel::__construct()(integer $channelID)
```

Create a channel instance using an id



* Visibility: **public**

#### Arguments

* $channelID **integer** - &lt;p&gt;The id of a channel&lt;/p&gt;



### \Tama63\Beam\Channel::info()

```
mixed Tama63\Beam\Channel::\Tama63\Beam\Channel::info()()
```

Return information about the channel
<https://developer.beam.pro/api/channel/findOne>



* Visibility: **public**



### \Tama63\Beam\Channel::followers()

```
mixed Tama63\Beam\Channel::\Tama63\Beam\Channel::followers()(null $page, null $limit)
```

Returns a list of all the channel's followers
<https://developer.beam.pro/api/channel/listFollowers>



* Visibility: **public**

#### Arguments

* $page **null** - &lt;p&gt;Page of results to get&lt;/p&gt;
* $limit **null** - &lt;p&gt;Number of results per page to retrieve&lt;/p&gt;



### \Tama63\Beam\Helper\Api::query()

```
mixed Tama63\Beam\Channel::\Tama63\Beam\Helper\Api::query()(string $endpoint, null $params)
```

Sends a query to the Beam API endpoint with a user defined endpoint



* Visibility: **protected**

#### Arguments

* $endpoint **string** - &lt;p&gt;The url endpoint relative to the Beam API&lt;/p&gt;
* $params **null** - &lt;p&gt;Get parameters to be passed to the endpoint&lt;/p&gt;


