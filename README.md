[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/AirVisual/functions?utm_source=RapidAPIGitHub_AirVisualFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# AirVisual Package
The world’s smartest air quality monitor helping you track, foresee, and take action against invisible threats in the air.The AirVisual Advantage - 8,000 stations worldwide Air pollution is a global problem - we offer a global solution.High accuracy forecasts In-house artificial intelligence delivers forecast precision never known possible, until now.Crowd-sourced platform No-nonsense news and educational ressources provided for the community, by the community.
* Domain: [airvisual.com](https://airvisual.com)
* Credentials: apiKey

## How to get credentials: 
1. Register on the [airvisual.com](https://airvisual.com).
2. After register, in [console](https://airvisual.com/user/api), you will see apiKey****.
 
## Custom datatypes:
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]```
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

 
## AirVisual.getNearestCity
Pollution data for nearest city from GPS coordinates / IP address.In case coordinates are not specified, we will estimate these based on requester's IP address.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your API key from airVisual account.
| coordinates| Map        | Latitude and longitude of the place.
| radius     | Number     | Maximum radius distance in kilometers for search. Default is 1,000Km

## AirVisual.getCity
Pollution data for a specified city.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key from airVisual account.
| country| String     | Country name where the city is located.
| city   | String     | State/Country/Region name where the city is located.
| state  | String     |  Name of city you wish to get the data from.

