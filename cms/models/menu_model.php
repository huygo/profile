<?php
class menu_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getFetObj()
    {
        $query = $this->db->query("SELECT *,
           IF(phan_loai=1,'bài viết',IF(phan_loai=2,'danh mục bài viết',IF(phan_loai=3,'sản phẩm',IF(phan_loai=4,'danh mục sản phẩm',IF(phan_loai=5,'Template','link ngoài'))))) AS loai,
           IF(phan_loai=1,(SELECT name FROM " . baiviet . " WHERE id=a.url),IF(phan_loai=2,(SELECT name FROM " . danhmuc . " WHERE id=a.url),
              IF(phan_loai=3,(SELECT name FROM " . sanpham . " WHERE id=a.url),IF(phan_loai=4,(SELECT name FROM " . cate . " WHERE id=a.url),
                IF(phan_loai=5,(SELECT name FROM " . dmtemp . " WHERE id=a.url),url))))) AS url
           FROM " . menu . " a  ORDER BY thu_tu ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getrow($id)
    {
        $query = $this->db->query("SELECT * FROM " . menu . " WHERE id=$id ");
        $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
        return ($temp[0]);
    }

    function getmenu($id)
    {
        $query = $this->db->query("SELECT * FROM " . menu . " WHERE tinh_trang=1 AND id!=$id ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function addObj($data)
    {
        $query = $this->insert(menu, $data);
        return $query;
    }

    function updateObj($id, $data)
    {
        $query = $this->update(menu, $data, "id = $id");
        return $query;
    }

    function battat($id)
    {
        $query = $this->db->query("UPDATE " . menu . " SET tinh_trang=NOT(tinh_trang) WHERE id=$id ");
        return $query;
    }

    function delObj($id)
    {
        $query = $this->delete(menu, " id=$id ");
        return $query;
    }

    function select($loai)
    {
        if ($loai == 1) {
            $query = $this->db->query("SELECT id, name FROM " . baiviet . " WHERE tinh_trang=1 ");
            $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
        } elseif ($loai == 2) {
            $query = $this->db->query("SELECT id, name FROM " . danhmuc . " WHERE tinh_trang=1 ");
            $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
        } elseif ($loai == 3) {
            $query = $this->db->query("SELECT id, name FROM " . sanpham . " WHERE tinh_trang=1 ");
            $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
        } elseif ($loai == 4) {
            $query = $this->db->query("SELECT id, name FROM " . cate . " WHERE tinh_trang=1 ");
            $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
        } else
            $temp = array();
        return $temp;
    }
}
?>
