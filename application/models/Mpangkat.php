<?php defined('BASEPATH') OR exit ('No direct script access allowed!');

class Mpangkat extends CI_Model {
    public function hitung($inp){//perhitungan
        $nilai = $inp['nilai'];
        $pangkat = $inp['pangkat'];
        // $hasil = pow($nilai,$pangkat);
        $hasil = 1;
        for ($i=0; $i < $pangkat; $i++) { 
            $hasil*=$nilai;
        }
        $this->savecsv($nilai,$hasil);
        return $hasil;
    }
    public function savecsv($nilai,$hasil){ //pembuatan csv
        $file_open = fopen("data.csv",'a');
        $no = count(file('data.csv'));
        $data=array();
        $data=[['date','jenis','nilai','output']];
        if($no>0){
            $data=array();
        }
        $temp = array(
            'date'=>date("Y/m/d h:m:s"),
            'jenis'=>'pangkat',
            'nilai'=>$nilai,
            'output'=>$hasil
        );
        array_push($data,$temp);
        foreach ($data as $key => $value) {
            fputcsv($file_open,$value);
        }
    }
    public function get_data(){
        $file = file('data.csv');
        $count = 0;
        $data = array();
        foreach ($file as $key => $value) {
            if($count>0){
                $v = explode(",",$value);
                if($v[1]=='pangkat'){
                    $temp = [
                        'date'=>$v[0],
                        'jenis'=>$v[1],
                        'input'=>$v[2],
                        'output'=>$v[3]
                    ];
                    array_push($data,$temp);
                }
            }
            $count++;
        }
        return $data;
    }

}

?>