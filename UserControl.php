<? class UsersC extends UsersM
{ 
  public $x;
  public  $users;
  public function __construct() {
    if($_GET['x']) $this->x = $_GET['x'];
    $this->users = $this-> getUsersFromBd();
}

public function redirect($url) {
  header('Location: '.$url);
}
 
    public function showUsers(){
   
       foreach ($this->users as $key => $user) {
        echo "<tr>
        <td>$user[id]</td>
        <td>$user[first_name]</td>
        <td>$user[last_name]</td>
        <td>$user[email]</td>
        <td>$user[create_date]</td>
        <td>$user[update_date]</td>
        <td> <a href='/AddUser.php?x=$key'>edit</a> </td>
        </tr>";
        }
    
       }
  
        
     public function addUser(){
      if($_POST['first_name'] && $_POST['last_name'] && $_POST['email'] ) {
        $this->addUsertoBd();
     }
    }
     public function UpdUser($id){
      if($_POST['first_name'] && $_POST['last_name'] && $_POST['email'] ) {
        $this->UpdUsertoBd($id);
     }
}
}
  ?>