<?php 


$tables = [
    "id" => "int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY",
    "name" => "varchar(12)",
    "username" => "varchar(34)",
    "password" => "TEXT",
    "email" => "varchar(255)",
    "profile_image" => "TEXT",
    "role" => "TEXT",
    "jenis_kelamin" => "varchar(23)",
    "nomer_induk_dokter" => "varchar(255)",
    "tempat_lahir" => "varchar(255)",
    "tanggal_lahir" => "date",
    "alamat" => "text",
    "created_at" => "date",
    "updated_at" => "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
];
