Tama63\Beam\Achievements
===============






* Class name: Achievements
* Namespace: Tama63\Beam
* Parent class: [Tama63\Beam\Helper\Api](Tama63-Beam-Helper-Api.md)



Constants
----------


### ACHIEVEMENTS_API

```
const ACHIEVEMENTS_API = '/achievements/'
```





### API_URL

```
const API_URL = 'https://beam.pro/api/v1'
```







Methods
-------


### \Tama63\Beam\Achievements::find()

```
mixed Tama63\Beam\Achievements::\Tama63\Beam\Achievements::find()()
```

Return a list of all the achievements on Beam
<https://developer.beam.pro/api/achievement/find>



* Visibility: **public**



### \Tama63\Beam\Helper\Api::query()

```
mixed Tama63\Beam\Achievements::\Tama63\Beam\Helper\Api::query()(string $endpoint, null $params)
```

Sends a query to the Beam API endpoint with a user defined endpoint



* Visibility: **protected**

#### Arguments

* $endpoint **string** - &lt;p&gt;The url endpoint relative to the Beam API&lt;/p&gt;
* $params **null** - &lt;p&gt;Get parameters to be passed to the endpoint&lt;/p&gt;


