# Laravel 6 API-Test

Setup: 

php artisan migrate
php artisan db:seed


# Some example curls to check the API 

Login:

curl --location --request POST 'http://hostname.tld/api/login' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--form 'name=Admin' \
--form 'email=marc@teuz.de' \
--form 'password=teuzit' \
--form 'password_confirmation=teuzit'

Get User

curl --location --request GET 'http://hostname.tld/api/user?api_token=TOKEN COMES HERE' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json'
