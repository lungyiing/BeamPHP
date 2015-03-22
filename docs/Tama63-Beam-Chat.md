Tama63\Beam\Chat
===============






* Class name: Chat
* Namespace: Tama63\Beam
* Parent class: [Tama63\Beam\Helper\Api](Tama63-Beam-Helper-Api.md)



Constants
----------


### CHAT_API

```
const CHAT_API = '/chats/'
```





### API_URL

```
const API_URL = 'https://beam.pro/api/v1'
```





Properties
----------


### $chatID

```
private mixed $chatID
```





* Visibility: **private**


### $chatEndpoint

```
private mixed $chatEndpoint
```





* Visibility: **private**


Methods
-------


### \Tama63\Beam\Chat::__construct()

```
mixed Tama63\Beam\Chat::\Tama63\Beam\Chat::__construct()(integer $chatID)
```

Create a new chat instance using an id



* Visibility: **public**

#### Arguments

* $chatID **integer** - &lt;p&gt;The id of a chat (channel)&lt;/p&gt;



### \Tama63\Beam\Chat::users()

```
mixed Tama63\Beam\Chat::\Tama63\Beam\Chat::users()(null $page, null $limit)
```

Returns a list of all the users in a chat
<https://developer.beam.pro/api/chat/user-list>



* Visibility: **public**

#### Arguments

* $page **null** - &lt;p&gt;Page of results to get&lt;/p&gt;
* $limit **null** - &lt;p&gt;Number of results per page to retrieve&lt;/p&gt;



### \Tama63\Beam\Chat::search()

```
mixed Tama63\Beam\Chat::\Tama63\Beam\Chat::search()(string $username, null $page, null $limit)
```

Searches for a username in a chat by matching a scope in their username
<https://developer.beam.pro/api/chat/user-search>



* Visibility: **public**

#### Arguments

* $username **string** - &lt;p&gt;The username to search by&lt;/p&gt;
* $page **null** - &lt;p&gt;Page of results to get&lt;/p&gt;
* $limit **null** - &lt;p&gt;Number of results per page to retrieve&lt;/p&gt;



### \Tama63\Beam\Helper\Api::query()

```
mixed Tama63\Beam\Chat::\Tama63\Beam\Helper\Api::query()(string $endpoint, null $params)
```

Sends a query to the Beam API endpoint with a user defined endpoint



* Visibility: **protected**

#### Arguments

* $endpoint **string** - &lt;p&gt;The url endpoint relative to the Beam API&lt;/p&gt;
* $params **null** - &lt;p&gt;Get parameters to be passed to the endpoint&lt;/p&gt;


