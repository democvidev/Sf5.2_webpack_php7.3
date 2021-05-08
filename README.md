# Symfony5.2_php7.3_webpack

Le projet crée un environnement de développement pour utiliser webpack-encore bundle, bootstrap


## Requirements

Docker

## Installation

Aller dans votre répertoire de travail

```bash
git clone https://github.com/democvidev/Sf5.2_webpack_php7.3.git

cd Sf5.2_webpack_php7.3/

cp .env.template sources/app/.env

docker-compose up -d

docker-compose exec app bash 

composer install

yarn install --force

php bin/console doctrine:migrations:migrate

yarn run build
```

## Usage

Page d'accueil du projet http://127.0.0.1:8000/

Page d'accueil phpmyadmin http://127.0.0.1:8080 (user:root , psw:root)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)