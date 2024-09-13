<?php
class Model_rp2024_lampung extends CI_Model
{
    var $table = 'rp_2024_lampung'; //nama tabel dari database
    var $column_order = array(null, 'npsn','nama_satpen','jenis_satpen','status_satpen','kab_kota','kecamatan','a1','a2','a3','a4','d1','d4','d8','d17','skor','persen','predikat', null); //Sesuaikan dengan field
    var $column_search = array('npsn','nama_satpen','jenis_satpen','status_satpen','kab_kota','kecamatan','a1','a2','a3','a4','d1','d4','d8','d17','skor','persen','predikat'); //field yang diizin untuk pencarian 
    var $order = array('kab_kota' => 'asc'); // default order

     /////////////===================================////////////////
    var $column_order2 = array(null, 'npsn','nama_satpen','kab_kota','persen','predikat'); //Sesuaikan dengan field
    var $column_search2 = array('npsn','nama_satpen','kab_kota','persen','predikat'); //field yang diizin untuk pencarian 
    var $order2 = array('kab_kota' => 'asc'); // default order

    private function _get_datatables_query()
    {

        $this->db->from($this->table);

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
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
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

    public function simpan($id,$npsn,$nama_satpen,$jenis_satpen,$status_satpen,$kab_kota,$kecamatan,$a1,$a2,$a3,$a4,$d1,$d4,$d8,$d17,$skor,$persen,$predikat)
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
            'predikat' => $predikat
        ];
        $this->db->insert('rp_2024_lampung', $simpan);
    }

    public function ambildata($npsn)
    {
        return $this->db->get_where('rp_2024_lampung', ['npsn' => $npsn]);
    }

    public function update($id,$npsn,$nama_satpen,$jenis_satpen,$status_satpen,$kab_kota,$kecamatan,$a1,$a2,$a3,$a4,$d1,$d4,$d8,$d17,$skor,$persen,$predikat)
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
            'predikat' => $predikat
        ];
        $this->db->where('npsn', $npsn);
        $this->db->update('rp_2024_lampung', $simpan);
    }

    public function hapus($id)
    {
        return $this->db->delete('rp_2024_lampung', ['id' => $id]);
    }

    public function hapusbanyak($id, $jmldata)
    {
        for ($i = 0; $i < $jmldata; $i++) {
            $this->db->delete('rp_2024_lampung', ['id' => $id[$i]]);
        }

        return true;
    }

    //// = Data Infografis Province BY Tahun dan Predikat Baik = //////

     private function _get_datatables_query_byPred()
    {
        $where = "predikat = 'Baik'";
        $this->db->where($where)->from($this->table);

        // $this->db->from($this->table);

        $i = 0;

        foreach ($this->column_search2 as $item) // looping awal
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

                if (count($this->column_search2) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order2)) {
            $order2 = $this->order2;
            $this->db->order_by(key($order2), $order2[key($order2)]);
        }
    }

    function get_datatables_byPred()
    {
        $this->_get_datatables_query_byPred();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered_byPred()
    {
        $this->_get_datatables_query_byPred();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_byPred()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}