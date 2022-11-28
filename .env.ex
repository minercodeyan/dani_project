APP_NAME=DaniCar
APP_ENV=local
APP_KEY=base64:DM0sz7IKMyiiyZb7cP4nKh+kfAjC2rnPxlwCOb4dkok=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

APP_ORDERS_PREFIX=ule

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=shop
DB_USERNAME=root
DB_PASSWORD=
DB_CHARSET=utf8
DB_COLLATION=utf8_unicode_ci

BROADCAST_DRIVER=log
CACHE_DRIVER=redis
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

# mailhog example
#MAIL_HOST=mailhog
#MAIL_PORT=1025
#MAIL_USERNAME=null
#MAIL_PASSWORD=null
#MAIL_ENCRYPTION=null
#MAIL_FROM_ADDRESS=some@email.dev
#MAIL_FROM_NAME=MyShop


PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=

#Local development
# When Sentry is installed in your application it will also be active when you are developing.
# If you don't want errors to be sent to Sentry when you are developing, set the DSN value to null.
# You can do this by not defining SENTRY_LARAVEL_DSN in your .env or define it as SENTRY_LARAVEL_DSN=null.

SENTRY_LARAVEL_DSN=https://111@2222.ingest.sentry.io/3333
SENTRY_TRACES_SAMPLE_RATE=1

PAYPAL_CLIENT_ID=see_developer_paypal_com
PAYPAL_CLIENT_SECRET=
