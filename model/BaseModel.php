<?php

//! veri tabanı baglantısı  */ 

class BaseModel
{
    protected $pdo = null;
    public function  __construct() {
        try {
            $this->pdo = new pdo('mysql:host=localhost;dbname=php;charset=utf8','root','');
            print 'Başarılı';
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}
