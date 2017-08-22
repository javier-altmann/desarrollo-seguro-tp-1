<?
class DBHelper {
	
	private static $con;

	private static function connect() {
		require_once "database.php";
      
		try {        
		    //self::$con = new PDO('mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname='.$database, $username, $password);
            self::$con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
		}
		catch (PDOException $e) {
			print "¡Error!: " . $e->getMessage();
			die();
		}
	}
	
    
    public static function crearAlumno($nombre, $apellido)
	{
		self::connect();
     
		$sql = "INSERT INTO alumno (nombre,apellido) VALUES ('$nombre','$apellido')";
        
       
        self::$con->exec($sql);
	}
    
     public static function crearAsignatura($id_profesor, $nombre_asignatura)
	{
		self::connect();
     
		$sql = "INSERT INTO asignatura (id_profesor,'nombre_asignatura') VALUES ('$id_profesor','$nombre_asignatura')";
        
       
        self::$con->exec($sql);
	}
    
    public static function listarProfesores(){
        self::conect();
        $sql = "SELECT nombre from profesor";
         self::$con->query($sql);
      
        
    }
}

?>