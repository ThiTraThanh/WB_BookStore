
<?php
    include "database.php";
?>
<?php
class LoaiSach {
    private $db;
    public function __construct()
    {
        $this -> db = new Database();
    }
    public function insert_cartegory($tenLoaiSach,$maLoaiSach){
        $query="INSERT INTO  theloaisach(tenLoaiSach,maLoaiSach) VALUES ('$tenLoaiSach','$maLoaiSach') ";
        $result = $this -> db -> insert($query);
        header('Location:cartegorylist.php');
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM theloaisach ORDER BY maLoaiSach DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function get_cartegory($maLoaiSach) {
        $query = "SELECT * FROM theloaisach where maLoaiSach='$maLoaiSach' ";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function update_cartegory($tenLoaiSach,$maLoaiSach) {
        $query = "UPDATE theloaisach SET tenLoaiSach = '$tenLoaiSach' where maLoaiSach='$maLoaiSach' ";
        $result = $this -> db -> update($query);
        header('Location:cartegorylist.php');
        return $result;
    }
    public function delete_cartegory($maLoaiSach)
    {
        $query= "DELETE FROM theloaisach WHERE maLoaiSach='$maLoaiSach'";
        $result = $this -> db -> delete($query);
        header('Location:cartegorylist.php');
        return $result;
    }
}
?>
