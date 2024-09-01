<? 

class Database
{
public static $conn;
public static function getconnection(){
    if(Database::$conn==NULL){
        $servername = "mysql.selfmade.ninja:3306";
        $username = "Sanjay";
        $password = "Sanjay12@";
        $dbname = "Sanjay_New";

        // Create connection
        $connection = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
        }
        else{
            Database::$conn=$connection;
            return Database::$conn;
            print("New Connection Establishing");
        }
        
    }
    else{
        return Database::$conn;
        print("Using Existing Connection");
    }
}

}