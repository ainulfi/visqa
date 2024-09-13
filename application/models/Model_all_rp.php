<?php
class Model_all_rp extends CI_Model
{
    var $table = 'rp_all'; //rp all tabel

    var $column_order = array(null, 'npsn','nama_satpen','jenis_satpen','status_satpen','provinsi','kab_kota','kecamatan','a1','a2','a3','a4','d1','d4','d8','d17','skor','persen','predikat','tahun', null); //Sesuaikan dengan field
    var $column_search = array('npsn','nama_satpen','jenis_satpen','status_satpen','provinsi','kab_kota','kecamatan','a1','a2','a3','a4','d1','d4','d8','d17','skor','persen','predikat','tahun'); //field yang diizin untuk pencarian 
    var $order = array('provinsi' => 'asc'); // default order 

    private function _get_datatables_query()
    {
        $where = "tahun = '2024'";
        $this->db->where($where)->from($this->table);

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }

        // $this->getQuery();
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        $this->getQuery();
        return $query->result();
    }

    private function getQuery()
    {

        //add custom filter here
        //concat untuk menggabung beberapa field string
        // if(!empty($this->input->post('fullname')))
        // {
        //     $this->db->like('concat_ws(" ", e.name, e.last_name)', $this->input->post('fullname'), 'both');
        // }
        if(!empty($this->input->post('npsn')))
        {
            $this->db->like('npsn', $this->input->post('npsn'), 'both');
        }
        if(!empty($this->input->post('nama_satpen')))
        {
            $this->db->like('nama_satpen', $this->input->post('nama_satpen'), 'both');
        }
        if(!empty($this->input->post('kab_kota')))
        {
            $this->db->like('kab_kota', $this->input->post('kab_kota'), 'both');
        }
        if(!empty($this->input->post('predikat')))
        {
            $this->db->like('predikat', $this->input->post('predikat'), 'both');
        }

        // $this->db->select(array('c.npsn', 'c.nama_satpen','c.kab_kota','c.predikat','c.provinsi'));
        $this->db->select(array('npsn', 'nama_satpen','kab_kota','predikat','provinsi'));

        // $this->db->from('rp_all as c');
        $i = 0;
    
        foreach ($this->column_search as $item) // loop column 
        {
            if(!empty($_POST['search']['value'])) // if datatable send POST for search
            {
                
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
        
        if(!empty($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(!empty($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function simpan($id,$npsn,$nama_satpen,$jenis_satpen,$status_satpen,$kab_kota,$kecamatan,$a1,$a2,$a3,$a4,$d1,$d4,$d8,$d17,$skor,$persen,$predikat,$tahun)
    {
        $simpan = [
            'id' => $id,
            'npsn' => $npsn,
            'nama_satpen' => $nama_satpen,
            'jenis_satpen' => $jenis_satpen,
            'status_satpen' => $status_satpen,
            'kab_kota' => $kab_kota,
            'kecamatan' => $kecamatan,
            'a1' => $a1,
            'a2' => $a2,
            'a3' => $a3,
            'a4' => $a4,
            'd1' => $d1,
            'd4' => $d4,
            'd8' => $d8,
            'd17' => $d17,
            'skor' => $skor,
            'persen' => $persen,
            'predikat' => $predikat,
            'tahun' => $tahun
        ];
        $this->db->insert('rp_all', $simpan);
    }

    public function ambildata($npsn)
    {
        return $this->db->get_where('rp_all', ['npsn' => $npsn]);
    }

    public function ambildata_gabung($npsn, $tahun)
    {
        $where = array('tahun' => $tahun);

        return $this->db->select('*')
        ->from('rp_all')
        ->like('npsn', $npsn, 'both')
        ->where($where)
        // ->join('parameter', 'rp_all.a1, rp_all.a2, rp_all.a3, rp_all.a4, rp_all.d1, rp_all.d4, rp_all.d8, rp_all.d17 = parameter.indikator', 'left')
        ->get();
    }

    public function get_indikator($indikator)
    {
        $where = array('indikator' => $indikator);
        return $this->db->select('*')
        ->from('parameter')
        ->where($where)
        ->get();
    }

    public function update($id,$npsn,$nama_satpen,$jenis_satpen,$status_satpen,$kab_kota,$kecamatan,$a1,$a2,$a3,$a4,$d1,$d4,$d8,$d17,$skor,$persen,$predikat,$tahun)
    {
        $simpan = [
            'id' => $id,
            'npsn' => $npsn,
            'nama_satpen' => $nama_satpen,
            'jenis_satpen' => $jenis_satpen,
            'status_satpen' => $status_satpen,
            'kab_kota' => $kab_kota,
            'kecamatan' => $kecamatan,
            'a1' => $a1,
            'a2' => $a2,
            'a3' => $a3,
            'a4' => $a4,
            'd1' => $d1,
            'd4' => $d4,
            'd8' => $d8,
            'd17' => $d17,
            'skor' => $skor,
            'persen' => $persen,
            'predikat' => $predikat,
            'tahun' => $tahun
        ];
        $this->db->where('npsn', $npsn);
        $this->db->update('rp_all', $simpan);
    }

    public function hapus($id)
    {
        return $this->db->delete('rp_all', ['id' => $id]);
    }

    public function hapusbanyak($id, $jmldata)
    {
        for ($i = 0; $i < $jmldata; $i++) {
            $this->db->delete('rp_all', ['id' => $id[$i]]);
        }

        return true;
    }

    public function JmlSmkPertahun()
    {
        $query = "SELECT tahun AS TAHUN, COUNT(*) AS total_smk FROM rp_all
                    GROUP BY tahun";
        $result = $this->db->query($query)->result();
        return $result;
    }

    public function countAllSMK() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    //untuk grafik
    public function getSMKPredikat($predikat,$tahun){
        //where predikat = baik && tahun = 2023 atau tahun = 2024
        $array = array(
            'predikat' => $predikat, 
            'tahun' => $tahun
        );
        $this->db->where($array);
        $this->db->from($this->table); //dari tabel rp_all
        return $this->db->get()->num_rows(); //get jumlah kondisi
    }

    //untuk grafik
    public function getSMKPersentaseBaik($predikat, $tahun){
        //where predikat = baik && tahun = 2023 atau tahun = 2024
        $array = array(
            'predikat' => $predikat, 
            'tahun' => $tahun
        );
        $baik_all = $this->db->where($array)->from($this->table);
        $get_baik_all = $baik_all->get()->num_rows();

        //menghitung jumlah smk dari tahun = 2023 atau tahun = 2024
        $count_all_smk= $this->db->where('tahun', $tahun)->from($this->table)->get()->num_rows();
        
        //perhitungan persentase jumlah kondisi baik dibagi jumlah seluruh smk
        // $persentase_baik = ($get_baik_all / $count_all_smk) * 100 ;
        $persentase_baik = round(($get_baik_all / $count_all_smk) * 100); //kalau nilai nya mau di bulatkan
        return $persentase_baik;
    }

    //untuk grafik
    public function getProvinsiPersenBaik($predikat, $provinsi, $tahun){
        //get where predikat = baik && tahun = 2023 atau tahun = 2024
        $kondisi = array(
            'predikat' => $predikat,
            'provinsi' => $provinsi,
            'tahun' => $tahun
        );
        $baik_all = $this->db->where($kondisi)->from($this->table);
        $get_baik_all = $baik_all->get()->num_rows();

        //get where provinsi = jabar/bengkulu/lampung && tahun = 2023/2024
        $kondisi2 = array(
            'provinsi' => $provinsi,
            'tahun' => $tahun
        );

        //get data sesuai kondisi
        $count_all_smk= $this->db->where($kondisi2)->from($this->table)->get()->num_rows();
        
        //perhitungan persentase jumlah kondisi baik per provinsi dibagi jumlah smk yang baik pada prov tsb
        // $persentase_baik = ($get_baik_all / $count_all_smk) * 100 ;
        $persentase_baik = round(($get_baik_all / $count_all_smk) * 100); //kalau nilai nya mau di bulatkan
        return $persentase_baik;
    }

    //untuk tabel
    // public function getPredikatAll(){
    //     $predikat = $this->db->where('predikat','*')->from($this->table)->get()->num_rows();

    //     return $predikat
    // }

    //untuk tabel
    public function countSMKPredikat2023($predikat, $provinsi, $tahun){
        $kondisi = array(
            'predikat' => $predikat ,
            'provinsi' => $provinsi ,
            'tahun' => $tahun
             );
        $count_predikat = $this->db->where($kondisi)->from($this->table)->get()->num_rows();

        return $count_predikat;
    }

    //untuk tabel
    public function countSMKPredikat2024($predikat, $provinsi, $tahun){
        $kondisi = array(
            'predikat' => $predikat ,
            'provinsi' => $provinsi ,
            'tahun' => $tahun
             );
        $count_predikat = $this->db->where($kondisi)->from($this->table)->get()->num_rows();

        return $count_predikat;
    }

    //untuk tabel jml predikat all per provinsi per tahun
    public function countSMKPredikatAll($provinsi, $tahun){
        $kondisi = array(
            'provinsi' => $provinsi ,
            'tahun' => $tahun
             );
        $count_predikat = $this->db->where($kondisi)->from($this->table)->get()->num_rows();

        return $count_predikat;
    }

    // public function countByCity(){
    //     $this->db->group_by("kab_kota")->where("tahun"=>"2023")->from($this->table);
    //     return $this->db->count_all_results();
    // }

}