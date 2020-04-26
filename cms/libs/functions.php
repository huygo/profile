<?php
class functions
{
    public static function uploadfile($filename, $dir, $name)
    {
        if ($_FILES[$filename]["size"] > 5000000) // gioi han kich thuoc file 5M
            return false;
        elseif (getimagesize($_FILES[$filename]["tmp_name"]) == false) // kiểm tra xem có phải là file ảnh ko?
            return false;
        else {
            $imageFileType = strtolower(pathinfo(basename($_FILES[$filename]["name"]), PATHINFO_EXTENSION));
            $newfile       = $name . '.' . $imageFileType;
            $target        = $dir . $newfile;
            $i             = 1;
            while (file_exists($target)) {
                $newfile = $name . '.' . $i . '.' . $imageFileType;
                $target  = $dir . $newfile;
                $i++;
            }
            if (move_uploaded_file($_FILES[$filename]["tmp_name"], $target))
                return $newfile;
            else
                return false;
        }
    }

    public static function convertname($str)
    {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        $str = str_replace(" ", "-", $str);
        $str = str_replace("!", "-", $str);
        $str = str_replace("@", "-", $str);
        $str = str_replace("#", "-", $str);
        $str = str_replace("$", "-", $str);
        $str = str_replace("%", "-", $str);
        $str = str_replace("&", "-", $str);
        $str = str_replace("&amp;", "-", $str);
        $str = str_replace("*", "-", $str);
        $str = str_replace("?", "-", $str);
        $str = str_replace(";", "-", $str);
        $str = str_replace(":", "-", $str);
        $str = str_replace(",", "-", $str);
        $str = str_replace(".", "-", $str);
        $str = str_replace("\"", "-", $str);
        $str = str_replace('“', "-", $str);
        $str = str_replace('”', "-", $str);
        $str = str_replace('"', "-", $str);
        $str = str_replace("(", "-", $str);
        $str = str_replace(")", "-", $str);
        $str = str_replace("{", "-", $str);
        $str = str_replace("}", "-", $str);
        $str = str_replace("[", "-", $str);
        $str = str_replace("]", "-", $str);
        $str = str_replace("/", "-", $str);
        $str = str_replace("----", "-", $str);
        $str = str_replace("---", "-", $str);
        $str = str_replace("--", "-", $str);
        $str = rtrim(strtolower($str), '-');
        return $str;
    }


    public static function dequy($menu, $parentid, $level)
    {
        if (!isset($ketqua))
            $ketqua = array();
        global $ketqua;
        $level = ($parentid == 0) ? 0 : $level + 1;
        foreach ($menu as $value) {
            $value['level'] = $level;
            if ($value['cha'] == $parentid) {
                $ketqua[] = $value;
                functions::dequy($menu, $value['id'], $level);
            }
        }
        return $ketqua;
    }
}
//
//    function convertdate($ngay){
//        $a = explode('/', $ngay);
//        return $a[2].'-'.$a[0].'-'.$a[1];
//    }
//
//
//
//
//
///* ----------------------------------------- */
//
//
//
//
//
//    /**
//     * Chỉ sử dụng hàm convertDate($txtDate) khi chuỗi có định dạng 'dd$mm$yyyy'
//     */
//
//    /**
//     * Chỉ sử dụng hàm convertDategrid($txtDate) khi chuỗi có định dạng 'yyyy$mm$dd'
//     */
//    function convertDategrid($txtDate) {
//        if (isset ( $txtDate )) {
//            list ( $year, $month, $date ) = explode ( "$", $txtDate );
//            $_date_converted = $year . '-' . $month . '-' . $date;
//            return $_date_converted;
//        }
//        return '';
//    }
//
//    /**
//     * @param $cs
//     * @param bool|false $tolower
//     * @return mixed|string
//     * Chuyển đổi chuỗi có dấu thành không dấu
//     */
//
//    /**
//     * Sử dụng tạo mã sản phẩm tự động từ tên sản phẩm + 5 số ngẫu nhiên
//     */
//    function create_ma_san_pham($text){
//        if(isset($text) && ($text!=''))
//            return substr($this->vn2latin($text, true), 0, 4).'-'.rand(00000, 99999);
//        else
//            return 'vdata-'.rand(00000, 99999);
//    }
//
//    function create_ma_san_pham_out($text){
//        if(isset($text)) {
//            $string = substr($this->vn2latin($text, true), 0, 4);
//            $number = rand(000000, 999999);
//            $txt = ucfirst($string) . '-' . $number;
//            return $txt;
//        }
//        return '';
//    }
//
//    function registerImageKey($key, $value) {
//        global $imageKeys;
//        $imageKeys[$key] = $value;
//    }
//
//    function getImageKeys() {
//        global $imageKeys;
//        return $imageKeys;
//    }
//
//    function convertText($text) {
//        $text = stripslashes($text);
//        if (function_exists('mb_convert_encoding')) {
//            $text = mb_convert_encoding($text, 'ISO-8859-1', 'UTF-8');
//        }
//
//        return $text;
//    }
//
//    // hien thi danh sach destination
//    function convert_number_to_words($number){
//        $donvi=" đồng ";
//        $tiente=array("nganty" => " nghìn tỷ ","ty" => " tỷ ","trieu" => " triệu ","ngan" =>" nghìn ","tram" => " trăm ");
//        $num_f=$nombre_format_francais = number_format($number, 2, ',', ' ');
//        $vitri=strpos($num_f,',');
//        $num_cut=substr($num_f,0,$vitri);
//        $mang=explode(" ",$num_cut);
//        $sophantu=count($mang);
//        switch($sophantu){
//            case '5':
//                    $nganty=$this->doc3so($mang[0]);
//                    $text=$nganty;
//                    $ty=$this->doc3so($mang[1]);
//                    $trieu=$this->doc3so($mang[2]);
//                    $ngan=$this->doc3so($mang[3]);
//                    $tram=$this->doc3so($mang[4]);
//                    if((int)$mang[1]!=0){
//                        $text.=$tiente['ngan'];
//                        $text.=$ty.$tiente['ty'];
//                    }
//                    else{
//                        $text.=$tiente['nganty'];
//                    }
//                    if((int)$mang[2]!=0)
//                        $text.=$trieu.$tiente['trieu'];
//                    if((int)$mang[3]!=0)
//                        $text.=$ngan.$tiente['ngan'];
//                    if((int)$mang[4]!=0)
//                        $text.=$tram;
//                    $text.=$donvi;
//                    return $text;
//
//
//            break;
//            case '4':
//                    $ty=$this->doc3so($mang[0]);
//                    $text=$ty.$tiente['ty'];
//                    $trieu=$this->doc3so($mang[1]);
//                    $ngan=$this->doc3so($mang[2]);
//                    $tram=$this->doc3so($mang[3]);
//                    if((int)$mang[1]!=0)
//                        $text.=$trieu.$tiente['trieu'];
//                    if((int)$mang[2]!=0)
//                        $text.=$ngan.$tiente['ngan'];
//                    if((int)$mang[3]!=0)
//                        $text.=$tram;
//                    $text.=$donvi;
//                    return $text;
//
//
//            break;
//            case '3':
//                    $trieu=$this->doc3so($mang[0]);
//                    $text=$trieu.$tiente['trieu'];
//                    $ngan=$this->doc3so($mang[1]);
//                    $tram=$this->doc3so($mang[2]);
//                    if((int)$mang[1]!=0)
//                        $text.=$ngan.$tiente['ngan'];
//                    if((int)$mang[2]!=0)
//                        $text.=$tram;
//                    $text.=$donvi;
//                    return $text;
//            break;
//            case '2':
//                    $ngan=$this->doc3so($mang[0]);
//                    $text=$ngan.$tiente['ngan'];
//                    $tram=$this->doc3so($mang[1]);
//                    if((int)$mang[1]!=0)
//                        $text.=$tram;
//                    $text.=$donvi;
//                    return $text;
//
//            break;
//            case '1':
//                    $tram=$this->doc3so($mang[0]);
//                    $text=$tram.$donvi;
//                    return $text;
//
//            break;
//            default:
//                return "Xin lỗi số quá lớn không thể đổi được";
//            break;
//        }
//    }
//
//    function doc3so($so){
//        $achu = array ( " không "," một "," hai "," ba "," bốn "," năm "," sáu "," bảy "," tám "," chín " );
//        $aso = array ( "0","1","2","3","4","5","6","7","8","9" );
//        $kq = "";
//        $tram = floor($so/100); // Hàng trăm
//        $chuc = floor(($so/10)%10); // Hàng chục
//        $donvi = floor(($so%10)); // Hàng đơn vị
//        if($tram==0 && $chuc==0 && $donvi==0) $kq = "";
//        if($tram!=0){
//            $kq .= $achu[$tram] . " trăm ";
//            if (($chuc == 0) && ($donvi != 0)) $kq .= " lẻ ";
//        }
//        if (($chuc != 0) && ($chuc != 1)){
//            $kq .= $achu[$chuc] . " mươi";
//            if (($chuc == 0) && ($donvi != 0)) $kq .= " linh ";
//        }
//        if ($chuc == 1) $kq .= " mười ";
//        switch ($donvi){
//        case 1:
//            if (($chuc != 0) && ($chuc != 1)){
//                $kq .= " mốt ";
//            }
//            else{
//                $kq .= $achu[$donvi];
//            }
//            break;
//        case 5:
//            if ($chuc == 0){
//                $kq .= $achu[$donvi];
//            }
//            else{
//                $kq .= " lăm ";
//            }
//            break;
//        default:
//            if ($donvi != 0){
//                   $kq .= $achu[$donvi];
//            }
//            break;
//        }
//        if($kq=="")
//            $kq=0;
//        return $kq;
//    }
//
//    function doc_so($so){
//        $so = preg_replace("([a-zA-Z{!@#$%^&*()_+<>?,.}]*)","",$so);
//        if (strlen($so) <= 21){
//            $kq = "";
//            $c = 0;
//            $d = 0;
//            $tien = array ( "", " nghìn", " triệu", " tỷ", " nghìn tỷ", " triệu tỷ", " tỷ tỷ" );
//            for ($i = 0; $i < strlen($so); $i++){
//                if ($so[$i] == "0")
//                    $d++;
//                else break;
//            }
//            $so = substr($so,$d);
//            for ($i = strlen($so); $i > 0; $i-=3){
//                $a[$c] = substr($so, $i, 3);
//                $so = substr($so, 0, $i);
//                $c++;
//            }
//            $a[$c] = $so;
//            for ($i = count($a); $i > 0; $i--){
//                if (strlen(trim($a[$i])) != 0){
//                    if (doc3so($a[$i]) != ""){
//                        if (($tien[$i-1]=="")){
//                            if (count($a) > 2)
//                                $kq .= " không trăm lẻ ".doc3so($a[$i]).$tien[$i-1];
//                            else $kq .= doc3so($a[$i]).$tien[$i-1];
//                        }
//                        else if ((trim(doc3so($a[$i])) == "mười") && ($tien[$i-1]=="")){
//                            if (count($a) > 2)
//                                $kq .= " không trăm ".doc3so($a[$i]).$tien[$i-1];
//                            else $kq .= doc3so($a[$i]).$tien[$i-1];
//                        }
//                        else{
//                            $kq .= doc3so($a[$i]).$tien[$i-1];
//                        }
//                    }
//                }
//            }
//            return $kq;
//        }else{
//            return "Số quá lớn!";
//        }
//    }
//
//
//
//
//
//
//
//
//
//
//
//
//    function nhanvien(){
//        $query = $this->db->query("SELECT id, name FROM nhanvien WHERE tinh_trang=1 ");
//        $temp=$query->fetchAll(PDO::FETCH_ASSOC);
//        return $temp;
//    }
//
//    function khachhang(){
//        $query = $this->db->query("SELECT id, name FROM khachhang WHERE tinh_trang=1 ORDER BY name  ");
//        $temp=$query->fetchAll(PDO::FETCH_ASSOC);
//        return $temp;
//    }
//
//    function lienhe(){
//        $query = $this->db->query("SELECT id, name FROM lienhe WHERE tinh_trang=1 ORDER BY name  ");
//        $temp=$query->fetchAll(PDO::FETCH_ASSOC);
//        return $temp;
//    }
//
//    function dichvu(){
//        $query = $this->db->query("SELECT id, CONCAT(name,' (',FORMAT(don_gia,0),'/',(FORMAT(gia_von,0)),')') AS name
//            FROM dichvu WHERE tinh_trang=1 ");
//        $temp=$query->fetchAll(PDO::FETCH_ASSOC);
//        return $temp;
//    }
//
//}
?>
