container="msi-ddss-python"

mkdir -p app/logs

echo "-- Running --"
# Adding the -d flag runs the container in detached mode (i.e. kind of background)

docker run --name  $container -v  "$PWD/app":/app -p 5000:5000  $container 

