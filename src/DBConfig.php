<?php
    namespace Indiciez\Tuiz;
    use mysqli;
    use Indiciez\Tuiz\Configuration;

    class DBConfig {
        protected static $connection = null;

        public function createConnection(): array|bool|\mysqli|null {
            if(is_null(self::$connection)){
                self::$connection = mysqli_connect(Configuration::hostname,Configuration::db_user,Configuration::db_password,Configuration::db_name,Configuration::db_port);
            }
            return (!self::$connection) ? ["not connected"] : self::$connection;
        }
    }