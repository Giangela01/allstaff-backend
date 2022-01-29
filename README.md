# All Staff Backend
This project serves as a backend designed to work as an employee database. This API is created using Laravel 8 API Resource.

## Technologies Used
* PHP 8.1.1
* Composer (a dependency manager for PHP)
* PostgreSQL 14

### Employee Model
Schema  | 
------------- | 
$table->string('lastName')|
$table->string('firstName')|
$table->string('email')|
$table->string('officePhone')|
$table->date('dob')|
$table->string('department')|
$table->string('directSupervisor')|
$table->string('jobTitle')|
$table->string('jobStatus')|
$table->date('startDate')|
$table->date('endDate')|
$table->date('probationPeriod')|
$table->string('salary')|


### API End Points / Route Order:
URL | HTTP Verb | Action | Notes
| :---: | :---: | :---: | :---: |
/api/employees/ | GET | index | This route shows a list or index of all employees. |
/api/employees/ | POST | new | a CREATE route. |
/api/employees/:id | PUT PATCH | update | an UPDATE route |
/api/employees/:id | DELETE | destroy | This routes deletes entries from Database. |

## Deployment
Requires the Heroku CLI client. 
https://staff-backend.herokuapp.com/api/employees/

#### Encountered Issues
* Although deployment seems successful, persistent issues regarding CORS working localhost but not on production. I can still use the deployed app on Postman, but not through regular HTTP requests on my React app. HTTP Status Code 301 is reflecting on Network. 
![CORS Issue](https://i.imgur.com/AWYZqep.png)

#### Contributing
Pulls are always welcome. Any contributions and fixes you make are greatly appreciated. Thank you in advance!
