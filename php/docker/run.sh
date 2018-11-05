container="msi-ddss-php"

echo "-- Running --"

docker run --name $container -p 8080:80  -v "$PWD/htdocs":/var/www/html $container
# -dit

