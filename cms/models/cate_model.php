<?php
class cate_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getFetObj($tukhoa)
    {
        $dieukien = 'WHERE 1';
        if ($tukhoa != '')
            $dieukien .= " AND name LIKE '%" . $tukhoa . "%' ";
        $query = $this->db->query("SELECT * FROM " . cate . " $dieukien ORDER BY id DESC ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getrow($id)
    {
        $query = $this->db->query("SELECT * FROM ".cate." WHERE id=$id ");
        $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
        return ($temp[0]);
    }

    function getdanhmuc($id)
    {
        $query = $this->db->query("SELECT id, name, cha FROM " . cate . " WHERE tinh_trang=1 AND id!=$id ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    function addObj($data)
    {
        $data['url']=$this->makeurl(cate,$data['name'],0);
        $query = $this->insert(cate, $data);
        return $query;
    }

    function updateObj($id, $data)
    {
        $query = $this->update(cate, $data, "id = $id");
        return $query;
    }

    function delObj($id)
    {
        $query = $this->delete(cate,"id=$id");
        return $query;
    }

    function battat($id)
    {
        $query = $this->db->query("UPDATE " . cate . " SET tinh_trang=NOT(tinh_trang) WHERE id=$id ");
        return true;
    }

}
?>
