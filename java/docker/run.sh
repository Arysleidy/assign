container="msi-ddss-java"

mkdir -p ddss-mvn/logs


echo "-- Running --"
docker run --name $container -v "$PWD/ddss-mvn/logs":/ddss-mvn/bin/logs -p 4567:4567  $container 
