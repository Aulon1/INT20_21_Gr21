<?php

include'autoload.php';
class news{
 private $mysqli;
 public function __construct()
 {
     $this -> mysqli=(Database::getInstance())-> getConnection();
    
}
public function all(){
    $news = [];
    $sql="SELECT*FROM `lajmet`";

    $result = $this -> mysqli -> query($sql);

    if($result -> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            $news[] = $row;
        }
    }
    return $news;
}


public function delete($id) {
    $sql = "DELETE FROM `lajmet` WHERE `id` = '" .$id ."'";

    if($this->mysqli->query($sql))
        return true;

    return false;
}
}
/**class News{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = (Database::getInstance())->getConnection();
    }
    public function all()
    {
        $news=[];
        $sql="SELECT *FROM 'lajmi'";
        $result = $this->mysqli->query($sql);

        if($result->num_rows>0){
        while($row= $result-> fetch_assoc()){
    $news[]=$row;}
        }

return $news;
}   
    public function get($ID) {
        $news = [];
        $sql = "SELECT * FROM `lajmi` WHERE `ID` = '".$ID."'";
        $result = $this->mysqli->query($sql);
        if($result->num_rows > 0) {
            $news = $result->fetch_assoc();
    }
    return $news;
//}
//}

*/

$news= new news();
$news->all();
?>
