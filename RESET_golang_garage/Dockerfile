FROM golang

RUN mkdir /app
ADD . /app
WORKDIR /app
RUN go get github.com/go-sql-driver/mysql
RUN go build -o binary ./src/main.go ./src/reset.go ./src/method.go
EXPOSE 8080
WORKDIR /app/src
ENTRYPOINT /app/binary
