FROM openjdk:8-jdk-alpine

RUN touch /tmp/.lock
VOLUME /tmp
ARG WAR_FILE
COPY ${WAR_FILE} app.war
EXPOSE 8080
ENTRYPOINT ["java","-Djava.security.egd=file:/dev/./urandom","-jar","/app.war"]

