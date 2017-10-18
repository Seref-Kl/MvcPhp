<?php

class Index_Model extends Model {
    public function __construct()
    {
        parent::__construct();
    }
    public function isimListele(){
        $sth = $this->db->query("select * from stajrapor");
        $dizi = $sth->fetchAll();
        return $dizi;

    }
    public function veriEkle($data){
        $sth=$this->db->insert("stajrapor",$data);
        return 1;
    }
    public function sil($bulunacakID){
        $this->db->delete("stajrapor","SiraNo=$bulunacakID");
    }
    public function bilgiler($bulunacakID){
        $sth = $this->db->query("select * from stajrapor WHERE SiraNo=".$bulunacakID);
        $dizi = $sth->fetchAll();
        return $dizi;

    }
    public function guncelle($data,$bulunacakID){
        $this->db->update("stajrapor",$data,"SiraNo=$bulunacakID");
        return 1;
    }
    public function search($search){
        $sth = $this->db->query("SELECT * FROM stajrapor WHERE AdSoyad LIKE '%" .$search. "%'");
        $dizi = $sth->fetchAll();
        return $dizi;
    }
    public function ogrenciListele(){
        $sth = $this->db->query("select * from stajgunleri");
        $dizi = $sth->fetchAll();
        return $dizi;

    }
    public function ogrenciEkle($data){
        $sth=$this->db->insert("stajgunleri",$data);
        return 1;
    }
    public function silogrenci($bulunacakID)
    {
        $this->db->delete("stajgunleri", "Ogr_No=$bulunacakID");
    }
    public function bilgi($bulunacakID){
        $sth = $this->db->query("select * from stajgunleri WHERE Ogr_No=".$bulunacakID);
        $dizi = $sth->fetchAll();
        return $dizi;

    }
    public function guncelleogrenci($data,$bulunacakID){
        $this->db->update("stajgunleri",$data,"Ogr_No=$bulunacakID");
        return 1;
    }
    public function searchogrenci($searchogrenci){
        $sth = $this->db->query("SELECT * FROM stajgunleri WHERE AdSoyad LIKE '%" .$searchogrenci. "%'");
        $dizi = $sth->fetchAll();
        return $dizi;
    }
}




?>