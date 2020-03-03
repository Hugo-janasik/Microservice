FROM golang

RUN mkdir /app
ADD . /app
WORKDIR /app
RUN go get github.com/go-sql-driver/mysql
RUN go build -o binary ./src/booking.go ./src/check.go ./src/data.go ./src/display.go ./src/get.go ./src/main.go ./src/picture.go
WORKDIR /app/src
EXPOSE 8080
ENTRYPOINT /app/binary
