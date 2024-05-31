<?php
    include "database.php";
?>
<?php
class nxb {
    private $db;
    public function __construct()
    {
        $this -> db = new Database();
    }
    public function insert_nxb($tenNXB){
        $query="INSERT INTO  nxb(tenNXB) VALUES ('$tenNXB') ";
        $result = $this -> db -> insert($query);
        header('Location:nxblist.php');
        return $result;
    }
    public function show_nxb(){
        $query = "SELECT * FROM nxb ORDER BY maNXB DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function get_nxb($maNXB) {
        $query = "SELECT * FROM nxb where maNXB='$maNXB' ";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function update_nxb($tenNXB,$maNXB) {
        $query = "UPDATE nxb SET tenNXB = '$tenNXB' where maNXB='$maNXB' ";
        $result = $this -> db -> update($query);
        header('Location:nxblist.php');
        return $result;
    }
    public function delete_nxb($maNXB)
    {
        $query= "DELETE FROM nxb WHERE maNXB='$maNXB'";
        $result = $this -> db -> delete($query);
        header('Location:nxblist.php');
        return $result;
    }
}
?>
