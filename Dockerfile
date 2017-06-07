FROM php:7.1-alpine

COPY ./src/ /src/
COPY ./vendor/ /vendor/
ADD router.php /

EXPOSE 8080

CMD [ "php", "-S", "0.0.0.0:8080", "/router.php" ]
