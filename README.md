
## Simple Laravel API

This is a simple Laravel API that uses the Laravel API Resources to return a JSON response.

### Installation

1. Clone the repository
2. Run `composer install`
3. Run `php artisan migrate`
4. Run `php artisan db:seed`
5. Run `php artisan serve`

### Endpoints

- `GET /api/v1/customers` - Returns a list of customers
- `GET /api/v1/customers/{id}` - Returns a single customer
- `POST /api/v1/customers` - Creates a new customer
- `PUT /api/v1/customers/{id}` - Updates a customer
- `PATCH` /api/v1/customers/{id} - Updates a customer (partial)
- `DELETE /api/v1/customers/{id}` - Deletes a customer (To be implemented)
- `GET /api/v1/customers/{id}?includeInvoices=true` - Returns a list of invoices for a customer
- `GET /api/v1/invoices` - Returns a list of invoices
- `GET /api/v1/invoices/{id}` - Returns a single invoice
- `POST /api/v1/invoices` - Creates a new invoice


### Credits

- [Laravel](https://laravel.com/)
- [Laravel REST API Tutorial](https://www.youtube.com/watch?v=YGqCZjdgJJk&list=PLUHpK5OcodpgfyGXjslXaHoLXDeSD8G-W&index=3&t=4200s&ab_channel=EnvatoTuts%2B)
