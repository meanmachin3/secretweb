class DB_Connect
{
    public function connect()
    {
      $host        = "ec2-174-129-33-159.compute-1.amazonaws.com";
      $port        = "port=5432";
      $dbname      = "dajjpjp69qe062";
      $credentials = "user=bovnrplelagehq password=cb1e676129543f0091e26734117d585829d87f16624a99ba023bc0da944b5900";

      $db = pg_connect( " $url $host $port $dbname $credentials"  );
      if(!$db){
         echo "Error : Unable to open database\n";
      } else {
         echo "Opened database successfully\n";
      }
      return $db;
    }
}