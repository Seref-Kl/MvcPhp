<?php

class Index extends Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function anasayfa(){
        $this->load->view("anasayfa");
    }
    public function isimListele(){
        $index_model = $this->load->model("index_model");
        $data["isimListele"] = $index_model->isimListele();

        $this->load->view("isimListele", $data);
    }
    public function ogrenciListele(){
        $index_model = $this->load->model("index_model");
        $data["ogrenciListele"] = $index_model->ogrenciListele();

        $this->load->view("ogrenciListele", $data);
    }
    public function veriKaydet(){
        $this->load->view("veriKaydet");
    }


    public function veriEkle(){
        $Ogr_No=$_POST["Ogr_No"];
        $AdSoyad=$_POST["AdSoyad"];
        $Bas_Tar=$_POST["Bas_Tar"];
        $Bit_Tar=$_POST["Bit_Tar"];
        $YapilanKurum=$_POST["YapilanKurum"];
        $Gun=$_POST["Gun"];
        $KabulGun=$_POST["KabulGun"];
        $StajKonusu=$_POST["StajKonusu"];
        $Durum=$_POST["Durum"];

        $index_model = $this->load->model("index_model");


        $data = array(
            "Ogr_No" => $Ogr_No,
            "AdSoyad" => $AdSoyad,
            "Bas_Tar" => $Bas_Tar,
            "Bit_Tar" => $Bit_Tar,
            "YapilanKurum" => $YapilanKurum,
            "Gun" => $Gun,
            "KabulGun" => $KabulGun,
            "StajKonusu" => $StajKonusu,
            "Durum" => $Durum
        );
        $result = $index_model->veriEkle($data);
        if ($result==1){
            header("Location: http://localhost/mvc/index/isimListele");
            exit();
        }else{
            $data["mesaj"]=array(
                "mesaj" => "kayıt oluşurken ters giden bişey oldu"
            );
            $this->load->view("veriKaydet", $data);
        }
    }
    public function ogrenciKaydet(){
        $this->load->view("ogrenciKaydet");
    }


    public function ogrenciEkle(){
        $Ogr_No=$_POST["Ogr_No"];
        $AdSoyad=$_POST["AdSoyad"];
        $staj=$_POST["staj"];
        $staj2=$_POST["staj2"];

        $index_model = $this->load->model("index_model");


        $data = array(
            "Ogr_No" => $Ogr_No,
            "AdSoyad" => $AdSoyad,
            "staj" => $staj,
            "staj2" => $staj2
        );
        $result = $index_model->ogrenciEkle($data);
        if ($result==1){
            header("Location: http://localhost/mvc/index/ogrenciListele");
            exit();
        }else{
            $data["mesaj"]=array(
                "mesaj" => "kayıt oluşurken ters giden bişey oldu"
            );
            $this->load->view("ogrenciKaydet", $data);
        }
    }
    public function sil(){
        $bulunacakID=$_GET["id"];

        $index_model = $this->load->model("index_model");
        $index_model-> sil($bulunacakID);
        $data["isimListele"] = $index_model->isimListele();
        $this->load->view("isimListele",$data);
    }
    public function silogrenci(){
        $bulunacakID=$_GET["id"];

        $index_model = $this->load->model("index_model");
        $index_model->silogrenci($bulunacakID);
        $data["ogrenciListele"] = $index_model->ogrenciListele();
        $this->load->view("ogrenciListele",$data);
    }
    public function veriGuncelle(){
        $bulunacakID=$_GET["id"];
        $index_model = $this->load->model("index_model");
        $data["bilgiler"] = $index_model->bilgiler($bulunacakID);
        $this->load->view("veriGuncelle",$data);
    }
    public  function  guncelle(){
        $bulunacakID=$_GET["id"];
        $Ogr_No=$_POST["Ogr_No"];
        $AdSoyad=$_POST["AdSoyad"];
        $Bas_Tar=$_POST["Bas_Tar"];
        $Bit_Tar=$_POST["Bit_Tar"];
        $YapilanKurum=$_POST["YapilanKurum"];
        $Gun=$_POST["Gun"];
        $KabulGun=$_POST["KabulGun"];
        $StajKonusu=$_POST["StajKonusu"];
        $Durum=$_POST["Durum"];

        $index_model = $this->load->model("index_model");


        $data = array(
            "Ogr_No" => $Ogr_No,
            "AdSoyad" => $AdSoyad,
            "Bas_Tar" => $Bas_Tar,
            "Bit_Tar" => $Bit_Tar,
            "YapilanKurum" => $YapilanKurum,
            "Gun" => $Gun,
            "KabulGun" => $KabulGun,
            "StajKonusu" => $StajKonusu,
            "Durum" => $Durum
        );
        $result = $index_model->guncelle($data,$bulunacakID);
        if ($result==1){
            header("Location: http://localhost/mvc/index/isimListele");
            exit();
        }else{
            $data["mesaj"]=array(
                "mesaj" => "kayıt oluşurken ters giden bişey oldu"
            );
            $this->load->view("veriGuncelle", $data);
        }

    }
    public function ogrenciGuncelle(){
        $bulunacakID=$_GET["id"];
        $index_model = $this->load->model("index_model");
        $data["bilgi"] = $index_model->bilgi($bulunacakID);
        $this->load->view("ogrenciGuncelle",$data);
    }
    public  function  guncelleogrenci(){
        $bulunacakID=$_GET["id"];
        $Ogr_No=$_POST["Ogr_No"];
        $AdSoyad=$_POST["AdSoyad"];
        $staj=$_POST["staj"];
        $staj2=$_POST["staj2"];

        $index_model = $this->load->model("index_model");


        $data = array(
            "Ogr_No" => $Ogr_No,
            "AdSoyad" => $AdSoyad,
            "staj" => $staj,
            "staj2" => $staj2
        );
        $result = $index_model->guncelleogrenci($data,$bulunacakID);
        if ($result==1){
            header("Location: http://localhost/mvc/index/ogrenciListele");
            exit();
        }else{
            $data["mesaj"]=array(
                "mesaj" => "kayıt oluşurken ters giden bişey oldu"
            );
            $this->load->view("ogrenciGuncelle", $data);
        }

    }
    public function search(){
        $search=$_POST["search"];
        $index_model = $this->load->model("index_model");
        $data["search"] = $index_model->search($search);
        $this->load->view("search",$data);

    }
    public function searchogrenci(){
        $searchogrenci=$_POST["searchogrenci"];
        $index_model = $this->load->model("index_model");
        $data["searchogrenci"] = $index_model->searchogrenci($searchogrenci);
        $this->load->view("searchogrenci",$data);

    }



}



?>