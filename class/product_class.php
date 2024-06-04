<?php
    include "database.php";
?>
<?php
class Sach {
    private $db;
    public function __construct()
    {
        $this -> db = new Database();
    }
    public function show_cartegory(){
        $query = "SELECT * FROM theloaisach ORDER BY maLoaiSach DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function insert_product(){
        $tenSach = $_POST['tenSach'];
        $maSach = $_POST['maSach'];
        $maLoaiSach = $_POST['maLoaiSach'];
        $maNXB= $_POST['maNXB'];
        $maTacGia=$_POST['maTacGia'];
        $Gia=$_POST['Gia'];
        $moTa=$_POST['moTa'];
        $soLuongConLai=$_POST['soLuongConLai'];
        $anhBia=$_FILES['anhBia']['name'];
        $query="INSERT INTO  sach(
            tenSach, 
            maSach,
            maLoaiSach,
            maNXB,
            maTacGia,
            Gia,
            soLuongConLai,
            moTa,
            anhBia)
         VALUES (
            '$tenSach', 
            '$maSach',
            '$maLoaiSach',
            '$maNXB',
            '$maTacGia',
            '$Gia',
            '$soLuongConLai',
            '$moTa',
            '$anhBia'
         ) ";
         $result = $this -> db -> insert($query);
         header('Location:productlist.php');
         return $result;
        
    }
    public function show_product(){
        // $query = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
        $query= "SELECT sach.*,nxb.tenNXB,theloaisach.tenLoaiSach,tacgia.tenTacGia
        FROM sach
         JOIN nxb ON sach.maNXB=nxb.maNXB
         JOIN theloaisach ON theloaisach.maLoaiSach=sach.maLoaiSach
         JOIN tacgia ON tacgia.maTacGia=sach.maTacGia
        ORDER BY sach.maSach DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function get_product($maSach) {
        $query = "SELECT * FROM sach where maSach='$maSach' ";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function update_product($maNXB,$maTacGia,$tenSach,$maSach){
        $query = "UPDATE sach SET tenSach = '$tenSach' ,maNXB ='$maNXB', maTacGia='$maTacGia' where maSach='$maSach' ";
        $result = $this -> db -> update($query);
        header('Location:productlist.php');
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
    public function delete_product($maSach)
    {
        $query= "DELETE FROM sach WHERE maSach='$maSach'";
        $result = $this -> db -> delete($query);
        header('Location:productlist.php');
        return $result;
    }

}
?>
