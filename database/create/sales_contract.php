<?php 


$tables = [
    "customer_code" => "int(255)",
    "FOREIGN KEY (customer_code)" => "REFERENCES customer(customer_code)",
];