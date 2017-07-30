<?php
	class QueryData {
		public $result = array();
		public $rows = 0;
	}

    class dbService {
        private static $sqlConnectionString = "host=localhost port=5432 dbname=bd-turma73 user=turma73 password=turma73 options='--client_encoding=UTF8'";
        private static $connection = false;

        private static function connect() {
            try {
                self::$connection = pg_connect(self::$sqlConnectionString);
                if(self::$connection)
                    return true;
                else
                    return false;
            }
            catch(Exception $e) {
                throw new Exception("Nao foi possivel conectar ao banco de dados");
            }
        }
        public static function executeNonQuery($sqlString, array $array = array()) {
            if(!self::$connection)
                self::connect();
            try {
                $query = pg_prepare(self::$connection, "", $sqlString);
                $query = pg_execute(self::$connection, "", $array);
                if(pg_affected_rows($query) == 0)
                    return false;
                else
                    return true;
            }
            catch(Exception $e)  {
                throw new Exception("Nao foi possivel executar o comando '$sqlString'");
            }
        }
        public static function executeQuery($sqlString, array $array = array()) {
            if(!self::$connection)
                self::connect();
            try {
                $query = pg_prepare(self::$connection, "", $sqlString);
                $query = pg_execute(self::$connection, "", $array);
                $data = array();
                while($row = pg_fetch_array($query)) {
                    array_push($data, $row);
                }
                return $data;
            }
            catch(Exception $e)  {
                throw new Exception("Nao foi possivel executar o comando '$sqlString'");
            }
        }
        public static function executeQueryReturning($sqlString, array $array = array()) {
            if(!self::$connection)
                self::connect();
            try {
                $query = pg_prepare(self::$connection, "", $sqlString);
                $query = pg_execute(self::$connection, "", $array);
                $data = array();
				$rows = pg_num_rows($query);
				$dados = new QueryData();
				$dados->rows = $rows;
                while($row = pg_fetch_array($query)) {
                    array_push($dados->result, $row);
                }
                return $dados;
            }
            catch(Exception $e)  {
                throw new Exception("Nao foi possivel executar o comando '$sqlString'");
            }
        }
        public static function executeNonQueryReturning($sqlString, array $array = array()) {
            if(!self::$connection)
                self::connect();
            try {
                $query = pg_prepare(self::$connection, "", $sqlString);
                $query = pg_execute(self::$connection, "", $array);
                return pg_affected_rows($query);
            }
            catch(Exception $e)  {
                throw new Exception("Nao foi possivel executar o comando '$sqlString'");
            }
        }
        public static function getVersion() {
            if(!self::$connection)
                self::connect();
            try {
                $query = pg_version(self::$connection);
                return $query['client'];
            }
            catch(Exception $e)  {
                throw new Exception("Nao foi possivel retornar a versao");
            }
        }
        public static function executeQueryJSON($sqlString, array $array = array()) {
            if(!self::$connection)
                self::connect();
            try {
                $query = pg_prepare(self::$connection, "", $sqlString);
                $query = pg_execute(self::$connection, "", $array);
                //Table info
                /*$numFields = pg_num_fields($query);
                $columnNames = array();
                for($i = 0; $i < $numFields; $i++) {
                    $columnNames[$i] = pg_field_name($query, $i);
                }*/
                //----------
                $data = array();
                while($row = pg_fetch_row($query)) {
                    array_push($data, array($row));
                }
                return json_encode($data);
            }
            catch(Exception $e)  {
                throw new Exception("Nao foi possivel executar o comando '$sqlString'");
            }
        }
    }
    //dbService::executeNonQuery("INSERT INTO usuarios VALUES ($1,$2,nextval('usuarios_id_seq'::regclass))", array("PG_PREPARE", "TESTE"));
    //echo dbService::getVersion();

   // $data = dbService::executeQueryJSON("SELECT * FROM usuarios ORDER BY id");
    //echo $data;

    //Exemplo de como ler arquivo JSON em PHP
    /*$dasta = json_decode($data);
    foreach($dasta as $row) {
        echo "Id: ".$row[0][2]."<br>";
        echo "Login: ".$row[0][0]."<br>";
        echo "Senha: ".$row[0][1]."<br><br>";
    }*/
?>
