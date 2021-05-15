<?php

include 'autoload.php';
class news{
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
}
}



$news= new News();
$news->all();
?>