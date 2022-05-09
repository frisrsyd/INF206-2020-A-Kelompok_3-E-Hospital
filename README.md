## Installation

1. clone the repository

```bash
git clone https://github.com/frisrsyd/INF206-2020-A-Kelompok_3-E-Hospital
```

2. go to folder and run

```bash
composer install
```
```bash
composer update
```

3. migrate the table

Copy the contents of `.env.example` file to new `.env` file:

```sh
$ cp .env.example .env
```

Create an application encryption key:

```sh
$ php artisan key:generate
```

Create an empty database and fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` fields in the `.env` file to match the credentials of your newly created database.

Run the migrations:

```sh
$ php artisan migrate
```

4. run serve with

```bash
php artisan serve
```

## Contact info

if any problem contact whatsapp

```bash
https://api.whatsapp.com/send?phone=6285261297134
```
