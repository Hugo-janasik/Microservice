/***********
Create by Hugo Janasik
Intern Developer
VMware
************/

package main

import (
	"fmt"
	"log"
	"net/http"
)

func main() {
	http.HandleFunc("/", request)

	fmt.Printf("READY\n")
	if err := http.ListenAndServe(":8080", nil); err != nil {
		log.Fatal(err)
	}
}
