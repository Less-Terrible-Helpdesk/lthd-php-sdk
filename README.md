# Less Terrible Helpdesk PHP SDK

Install  
```
composer require daysupport/daysupport
```  

Import class  
```php
use DaySupport\DaySupport;
```

### GET request
#### Get ticket details
```php
$api_version = 'v1';
$api_key = $_ENV['api_key'];
$ds_obj = new DaySupport($api_version, $api_key);
$ds_obj->get_ticket(42);
```
### POST request
#### Create a new ticket
```php
$api_version = 'v1';
$api_key = $_ENV['api_key'];
$ds_obj = new DaySupport($api_version, $api_key);
$project_id = 1;
$heading = 'Ticket title';
$description = 'Creating from sdk';
$priority = 'low';
$customer_id = 1;
$contact_fname = 'Contact first name';
$contact_lname = 'Contact las name';
$contact_email = 'contact@example.com';
$ds_obj->create_ticket($project_id, $heading, $description, $priority, $customer_id, $contact_fname, $contact_lname, $contact_email);
```
### Interested in contributing
If you are interested in contributing to this package, then please do feel free to take a fork and submit pull requests.

### Future plans
For now the sdk only has somie basic features but will eventually be able to perform all expected activities.