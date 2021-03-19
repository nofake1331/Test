<?

  class UsersM  extends DBC
{
    
    private $dbTable = "users";

         protected function getUsersFromBd(){
            $sql = "SELECT * FROM $this->dbTable";
            $result = $this-> connect() ->query($sql);
            if( $result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
            }
            return $data;
         }
         
         protected function addUsertoBd(){
    
            $sql = "INSERT INTO $this->dbTable (first_name, last_name, email) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[email]')";
            $this->connect() ->query($sql);
         }
         protected function UpdUsertoBd($id){
    
            $sql = "UPDATE $this->dbTable SET  first_name='$_POST[first_name]',last_name='$_POST[last_name]',email='$_POST[email]',update_date=current_timestamp  WHERE id=$id";
            $this->connect() ->query($sql);
         }
}

    


?>