<?php


namespace Core;

use Core\Response;
use Core\Router;
use PDO;
class Database{
    public $connection;
    public $statement;
    public function __construct($config,$username ='root',$password = ''){
       

        $dsn = 'mysql:'.http_build_query($config,'',';');
        $this ->connection = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $parameters = []){
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($parameters);
        return $this;
        
    }
    public function get(){
        return $this->statement->fetchAll();
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail(){
        $result = $this->find();
        if(!$result){
            abort(Response::NOT_FOUND);
        }
        return $result;
    }
   
}