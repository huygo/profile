<?php
class model
{
    function __construct()
    {
        $this->db = new database();
        if (isset($_SESSION['userdata']['meta_id'])) {
            // define("url", $_SESSION['userdata']['meta_id'] . '_url');
            // define("pos", $_SESSION['userdata']['meta_id'] . '_pos');
            // define("baiviet", $_SESSION['userdata']['meta_id'] . '_posts');
            // define("danhmuc", $_SESSION['userdata']['meta_id'] . '_blog');
            // define("banner", $_SESSION['userdata']['meta_id'] . '_banner');
            // define("positem", $_SESSION['userdata']['meta_id'] . '_pos_item');
            // define("home", $_SESSION['userdata']['meta_id'] . '_home');
            // define("com", $_SESSION['userdata']['meta_id'] . '_com');
        } else {
            define("danhmuc", '1_blog');
            define("baiviet", '1_baiviet');
            define("banner", '1_banner');
            define("cate", '1_cate');
            define("sanpham", '1_sanpham');
            define("khachhang", '1_khachhang');
            define("donhang", '1_donhang');
            define("item", '1_items');
            define("menu", '1_menu');
            define("dmtemp", '1_dmtemp');
            define("media", '1_media');
            define("template", '1_template');
            define("thongtin", '1_thongtin');
            define("kinhnghiem", '1_kinhnghiem');
            define("quatrinh", '1_quatrinh');
            define("dangki", '1_dangki');
        }
    }
    //Các hàm dùng chung
    function makeurl($table,$name,$id)
    {
        $url  = functions::convertname($name);
        $urli = $url;
        $i    = 1;
        while (true) {
            $query = $this->db->query("SELECT COUNT(id) AS total FROM $table WHERE url='$urli' AND id!=$id ");
            $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
            if ($temp[0]['total'] > 0)
                $urli = $url . '-' . $i;
            else
                break;
            $i++;
        }
        return $urli;
    }

    //Các hàm basic thao tác với cơ sở dữ liệu
    function insert($table, $array)
    {
        $cols = array();
        $bind = array();
        foreach ($array as $key => $value) {
            $cols[] = $key;
            $bind[] = "'" . $value . "'";
        }
        $query = $this->db->query("INSERT IGNORE INTO " . $table . " (" . implode(",", $cols) . ")
          VALUES (" . implode(",", $bind) . ")");
        return $query;
    }

    function update($table, $array, $where)
    {
        $set = array();
        foreach ($array as $key => $value) {
            $set[] = $key . " = '" . $value . "'";
        }
        $query = $this->db->query("UPDATE " . $table . " SET " . implode(",", $set) . " WHERE " . $where);
        return $query;
    }

    function delete($table, $where = '')
    {
        if ($where == '') {
            $query = $this->db->query("DELETE FROM " . $table);
        } else {
            $query = $this->db->query("DELETE FROM " . $table . " WHERE " . $where);
        }
        return $query;
    }
}
?>
