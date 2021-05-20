<?php

include'autoload.php';
class news{
 private $mysqli;
 public function __construct() {
        $this->mysqli = (Database::getInstance())->getConnection();} 

public function all(){
    $news = [];
    $sql="SELECT*FROM `lajmet`";

    $result = $this -> mysqli -> query($sql);

    if($result -> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            $newss[] = $row;
        }
    }
    return $newss;
}
public function get($id){
    $news = [];
    $sql="SELECT*FROM `lajmet` WHERE 'id'='".$id."'";

    $result = $this -> mysqli -> query($sql);

    if($result -> num_rows > 0){
     $news= $result ->fetch_assoc();
    }
    return $news;
}

public function create($data) {
    $sql = "INSERT INTO `lajmet` (`titulli`, `permbajtja`, `image`) VALUES ('".$data['titulli']."', '".$data['permbajtja']."', '".$data['image']."'";
    
    if($result = $this->mysqli->query($sql))
        return true;
    else
        return false;
} 
public function update($id, $data) {
    $sql = "UPDATE `lajmet` SET `titulli`='".$data['titulli']."', `permbajtja`='".$data['permbajtja']."','image'='".$data['image']."' WHERE `id`='".$id."'";
    
    if($result = $this->mysqli->query($sql))
        return true;
    else
        return false;
} 


public function delete($id) {
    $sql = "DELETE FROM `lajmet` WHERE `id` = '" .$id ."'";

    if($this->mysqli->query($sql))
        return true;

    return false;
}
}
$newss= new news();
$newss->all();
?>
