                             Prvi domaci – Laravel aplikacija

------------------------------------------------------
 I Kreirati najmanje 2 međusobno povezana modela 
=> app/models: customer, food, order 

primer: php artisan make:model Order --controller --resource --seed --migration
-------------------------------------------------------
II Kreirati najmanje 4 migracije različite namene (kreiranje tabele, izmena tabele...)
=> database/migrations:
create_food_table
create_orders_table
create_customers_table
create_first_last_name
add_order_foreign_keys
--------------------------------------------------------
III Popuniti bazu korišćenjem Seeder-a ili sličnog alata
database/seeders:
FoodSeeder
CustomerSeeder
---------------------------------------------------------
IV Kreirati rute i odgovarajuće kontrolere
Rute:
Routes/Api.php
Rutiranje u Laravel-u omogućava da usmerimo sve naše zahteve aplikacije do odgovarajućeg kontrolera. Koristila sam resource-controller rutiranje.

Route::resource('orders', OrderController::class);
Route::resource('customers', CustomerController::class);
Route::resource('foods', FoodController::class);
-------------------------------
Kontroleri:
App/http/controllers:

Generalno ponašanje rute definišemo i kontrolišemo kroz kontrolere.
CustomerController

FoodController

OrderControler
-------------------------------------------------------------

Napraviti dokumentaciju (Word ili Git)

Word + Readme file Git
-------------------------------------------------------------
That's all folks.