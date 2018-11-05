FROM maven:3-jdk-11-slim

COPY 	ddss-mvn /ddss-mvn
WORKDIR /ddss-mvn

RUN sh build.sh

CMD ["/ddss-mvn/run.sh"]

