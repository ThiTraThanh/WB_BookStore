<?php
    include "database.php";
?>
<?php
class TacGia {
    private $db;
    public function __construct()
    {
        $this -> db = new Database();
    }
    public function insert_TacGia($maTacGia,$tenTacGia){
        $query="INSERT INTO  tacgia(maTacGia,tenTacGia) VALUES ('$maTacGia','$tenTacGia') ";
        $result = $this -> db -> insert($query);
        header('Location:TacGialist.php');
        return $result;
    }
    public function show_TacGia(){
        $query = "SELECT * FROM tacgia ORDER BY maTacGia DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function get_TacGia($maTacGia) {
        $query = "SELECT * FROM tacgia where maTacGia='$maTacGia' ";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function update_TacGia($tenTacGia,$maTacGia) {
        $query = "UPDATE tacgia SET tenTacGia = '$tenTacGia' where maTacGia='$maTacGia' ";
        $result = $this -> db -> update($query);
        header('Location:TacGialist.php');
        return $result;
    }
    public function delete_TacGia($maTacGia)
    {
        $query= "DELETE FROM tacgia WHERE maTacGia='$maTacGia'";
        $result = $this -> db -> delete($query);
        header('Location:TacGialist.php');
        return $result;
    }
}
?>
