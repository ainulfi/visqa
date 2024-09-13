<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->model('Model_all_rp', 'm_rp_all');
        $this->load->model('Model_rp2023_lampung', 'm_lampung23');
        $this->load->model('Model_rp2024_lampung', 'm_lampung24');
        $this->load->model('Model_rp2023_bengkulu', 'm_bengkulu23');
        $this->load->model('Model_rp2024_bengkulu', 'm_bengkulu24');
        $this->load->model('Model_rp2023_jabar', 'm_jabar23');
        $this->load->model('Model_rp2024_jabar', 'm_jabar24');
    }
    public function index()
    {
        // Logika Anda untuk memproses data
        // $data['judul'] = 'Capaian Penjaminan Mutu';
        // $data['isi'] = $this->load->view('home/beranda', '', true);
        

         // call method siswaPertahun di Model_chart
        $data['chartSMK'] = $this->m_rp_all->JmlSmkPertahun();

        //data jumlah smk baik per tahun
        $data['chartSMKBaik2023'] = $this->m_rp_all->getSMKPredikat('Baik','2023');
        $data['chartSMKBaik2024'] = $this->m_rp_all->getSMKPredikat('Baik','2024');

        //data persentase baik per tahun
        $data['chartSMKPersentaseBaik2023'] = $this->m_rp_all->getSMKPersentaseBaik('Baik','2023');
        $data['chartSMKPersentaseBaik2024'] = $this->m_rp_all->getSMKPersentaseBaik('Baik','2024');

        //data persentase baik ber provinsi per tahun
        $data['chartJabarPersenBaik2023'] = $this->m_rp_all->getProvinsiPersenBaik('Baik','Jawa Barat','2023');
        $data['chartLampungPersenBaik2023'] = $this->m_rp_all->getProvinsiPersenBaik('Baik','Lampung','2023');
        $data['chartBengkuluPersenBaik2023'] = $this->m_rp_all->getProvinsiPersenBaik('Baik','Bengkulu','2023');
        $data['chartJabarPersenBaik2024'] = $this->m_rp_all->getProvinsiPersenBaik('Baik','Jawa Barat','2024');
        $data['chartLampungPersenBaik2024'] = $this->m_rp_all->getProvinsiPersenBaik('Baik','Lampung','2024');
        $data['chartBengkuluPersenBaik2024'] = $this->m_rp_all->getProvinsiPersenBaik('Baik','Bengkulu','2024');

        //get jumlah data untuk tabel jabar
        $data['SMK_PredikatBaikJabar2023'] = $this->m_rp_all->countSMKPredikat2023('Baik','Jawa Barat','2023');
        $data['SMK_PredikatSedangJabar2023'] = $this->m_rp_all->countSMKPredikat2023('Sedang','Jawa Barat','2023');
        $data['SMK_PredikatKurangJabar2023'] = $this->m_rp_all->countSMKPredikat2023('Kurang','Jawa Barat','2023');
        $data['SMK_PredikatKurangJabar2023'] = $this->m_rp_all->countSMKPredikat2023('Kurang','Jawa Barat','2023');
        $data['countSMKPredikatAllJabar2023'] = $this->m_rp_all->countSMKPredikatAll('Jawa Barat','2023'); //jml seluruhnya

        //get jumlah data untuk tabel jabar
        $data['SMK_PredikatBaikJabar2024'] = $this->m_rp_all->countSMKPredikat2023('Baik','Jawa Barat','2024');
        $data['SMK_PredikatSedangJabar2024'] = $this->m_rp_all->countSMKPredikat2023('Sedang','Jawa Barat','2024');
        $data['SMK_PredikatKurangJabar2024'] = $this->m_rp_all->countSMKPredikat2023('Kurang','Jawa Barat','2024');
        $data['countSMKPredikatAllJabar2024'] = $this->m_rp_all->countSMKPredikatAll('Jawa Barat','2024');

        //get jumlah data untuk tabel Bengkulu
        $data['SMK_PredikatBaikBengkulu2023'] = $this->m_rp_all->countSMKPredikat2023('Baik','Bengkulu','2023');
        $data['SMK_PredikatSedangBengkulu2023'] = $this->m_rp_all->countSMKPredikat2023('Sedang','Bengkulu','2023');
        $data['SMK_PredikatKurangBengkulu2023'] = $this->m_rp_all->countSMKPredikat2023('Kurang','Bengkulu','2023');
        $data['SMK_PredikatKurangBengkulu2023'] = $this->m_rp_all->countSMKPredikat2023('Kurang','Bengkulu','2023');
        $data['countSMKPredikatAllBengkulu2023'] = $this->m_rp_all->countSMKPredikatAll('Bengkulu','2023'); //jml seluruhnya

        //get jumlah data untuk tabel Bengkulu
        $data['SMK_PredikatBaikBengkulu2024'] = $this->m_rp_all->countSMKPredikat2023('Baik','Bengkulu','2024');
        $data['SMK_PredikatSedangBengkulu2024'] = $this->m_rp_all->countSMKPredikat2023('Sedang','Bengkulu','2024');
        $data['SMK_PredikatKurangBengkulu2024'] = $this->m_rp_all->countSMKPredikat2023('Kurang','Bengkulu','2024');
        $data['countSMKPredikatAllBengkulu2024'] = $this->m_rp_all->countSMKPredikatAll('Bengkulu','2024');

        //get jumlah data untuk tabel Lampung
        $data['SMK_PredikatBaikLampung2023'] = $this->m_rp_all->countSMKPredikat2023('Baik','Lampung','2023');
        $data['SMK_PredikatSedangLampung2023'] = $this->m_rp_all->countSMKPredikat2023('Sedang','Lampung','2023');
        $data['SMK_PredikatKurangLampung2023'] = $this->m_rp_all->countSMKPredikat2023('Kurang','Lampung','2023');
        $data['SMK_PredikatKurangLampung2023'] = $this->m_rp_all->countSMKPredikat2023('Kurang','Lampung','2023');
        $data['countSMKPredikatAllLampung2023'] = $this->m_rp_all->countSMKPredikatAll('Lampung','2023'); //jml seluruhnya

        //get jumlah data untuk tabel Lampung
        $data['SMK_PredikatBaikLampung2024'] = $this->m_rp_all->countSMKPredikat2023('Baik','Lampung','2024');
        $data['SMK_PredikatSedangLampung2024'] = $this->m_rp_all->countSMKPredikat2023('Sedang','Lampung','2024');
        $data['SMK_PredikatKurangLampung2024'] = $this->m_rp_all->countSMKPredikat2023('Kurang','Lampung','2024');
        $data['countSMKPredikatAllLampung2024'] = $this->m_rp_all->countSMKPredikatAll('Lampung','2024');

        //tabel count all predikat by year
        $data['getSMKBaik2023'] = $this->m_rp_all->getSMKPredikat('Baik','2023');
        $data['getSMKSedang2023'] = $this->m_rp_all->getSMKPredikat('Sedang','2023');
        $data['getSMKKurang2023'] = $this->m_rp_all->getSMKPredikat('Kurang','2023');
        $data['getSMKBaik2024'] = $this->m_rp_all->getSMKPredikat('Baik','2024');
        $data['getSMKSedang2024'] = $this->m_rp_all->getSMKPredikat('Sedang','2024');
        $data['getSMKKurang2024'] = $this->m_rp_all->getSMKPredikat('Kurang','2024');

        // $data['cek'] = $this->m_lampung23->get_datatables_byPred();

        // var_dump($data); //aktifkan untuk cek data where condition
        // exit;

        $parser = [
            'judul' => 'Capaian Penjaminan Mutu',
            'isi' => $this->load->view('home/beranda', $data, true),
        ];
        $this->parser->parse('template/main', $parser);

        // $this->load->view('template/main', $data);
        // $this->load->view('home/beranda', $data); // passing data ke view_chart

        $this->load->view('home/modal', $data); //modal info prov untuk map
    }

    public function getdata_kabkota(){
        if ($this->input->is_ajax_request() == true) {

            $list = $this->m_rp_all->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {

                $no++;
                $row = array();

                // Membuat Tombol
                $tombollihat = "<button type=\"button\" class=\"btn btn-outline-info\" title=\"Lihat Data\" onclick=\"lihat('" . $field->kab_kota . "')\">
                    <i class=\"fa fa-info\"></i>
                </button>";
                $row[] = $no;
                $row[] = $field->kab_kota;
                $row[] = $field->kecamatan;
                $row[] = $field->count_all()->group_by('kab_kota');
                $row[] = $tombollihat;
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->m_rp_all->count_all(),
                "recordsFiltered" => $this->m_rp_all->count_filtered(),
                "data" => $data,
            );
            //output dalam format JSON
            echo json_encode($output);
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }


    // ========= Data Grafis Lampung ============ //
    public function data_lampung_2023()
    {
        // $list = $this->m_lampung23->get_datatables_byPred();
        // var_dump ($list);
        if ($this->input->is_ajax_request() == true) {

            $list = $this->m_lampung23->get_datatables_byPred();
            $data = array();
            $no = $_POST['start'];

            foreach ($list as $field) {

                $no++;
                $row = array();

                $row[] = $no;
                $row[] = $field->npsn;
                $row[] = $field->nama_satpen;
                $row[] = $field->kab_kota;
                $row[] = $field->persen.' %';
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->m_lampung23->count_all_byPred(),
                "recordsFiltered" => $this->m_lampung23->count_filtered_byPred(),
                "data" => $data,
            );
            //output dalam format JSON
            echo json_encode($output);

            
            // var_dump($output);
            // exit;

        } else {
            exit('Maaf data tidak bisa ditampilkan');
            // return $list;
        }

    }

    public function data_lampung_2024()
    {
        // $list = $this->m_lampung23->get_datatables_byPred();
        // var_dump ($list);
        if ($this->input->is_ajax_request() == true) {

            $list = $this->m_lampung24->get_datatables_byPred();
            $data = array();
            $no = $_POST['start'];

            foreach ($list as $field) {

                $no++;
                $row = array();

                $row[] = $no;
                $row[] = $field->npsn;
                $row[] = $field->nama_satpen;
                $row[] = $field->kab_kota;
                $row[] = $field->persen.' %';
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->m_lampung24->count_all_byPred(),
                "recordsFiltered" => $this->m_lampung24->count_filtered_byPred(),
                "data" => $data,
            );
            //output dalam format JSON
            echo json_encode($output);

            
            // var_dump($output);
            // exit;

        } else {
            exit('Maaf data tidak bisa ditampilkan');
            // return $list;
        }

    }
    // ===============================================//

    // ========= Data Grafis Bengkulu ============ //
    public function data_bengkulu_2023()
    {
        // $list = $this->m_lampung23->get_datatables_byPred();
        // var_dump ($list);
        if ($this->input->is_ajax_request() == true) {

            $list = $this->m_bengkulu23->get_datatables_byPred();
            $data = array();
            $no = $_POST['start'];

            foreach ($list as $field) {

                $no++;
                $row = array();

                $row[] = $no;
                $row[] = $field->npsn;
                $row[] = $field->nama_satpen;
                $row[] = $field->kab_kota;
                $row[] = $field->persen.' %';
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->m_bengkulu23->count_all_byPred(),
                "recordsFiltered" => $this->m_bengkulu23->count_filtered_byPred(),
                "data" => $data,
            );
            //output dalam format JSON
            echo json_encode($output);

            
            // var_dump($output);
            // exit;

        } else {
            exit('Maaf data tidak bisa ditampilkan');
            // return $list;
        }

    }

    public function data_bengkulu_2024()
    {
        // $list = $this->m_lampung23->get_datatables_byPred();
        // var_dump ($list);
        if ($this->input->is_ajax_request() == true) {

            $list = $this->m_bengkulu24->get_datatables_byPred();
            $data = array();
            $no = $_POST['start'];

            foreach ($list as $field) {

                $no++;
                $row = array();

                $row[] = $no;
                $row[] = $field->npsn;
                $row[] = $field->nama_satpen;
                $row[] = $field->kab_kota;
                $row[] = $field->persen.' %';
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->m_bengkulu24->count_all_byPred(),
                "recordsFiltered" => $this->m_bengkulu24->count_filtered_byPred(),
                "data" => $data,
            );
            //output dalam format JSON
            echo json_encode($output);

            
            // var_dump($output);
            // exit;

        } else {
            exit('Maaf data tidak bisa ditampilkan');
            // return $list;
        }

    }
    // ===============================================//

    // ========= Data Grafis Jabar ============ //
    public function data_jabar_2023()
    {
        // $list = $this->m_lampung23->get_datatables_byPred();
        // var_dump ($list);
        if ($this->input->is_ajax_request() == true) {

            $list = $this->m_jabar23->get_datatables_byPred();
            $data = array();
            $no = $_POST['start'];

            foreach ($list as $field) {

                $no++;
                $row = array();

                $row[] = $no;
                $row[] = $field->npsn;
                $row[] = $field->nama_satpen;
                $row[] = $field->kab_kota;
                $row[] = $field->persen.' %';
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->m_jabar23->count_all_byPred(),
                "recordsFiltered" => $this->m_jabar23->count_filtered_byPred(),
                "data" => $data,
            );
            //output dalam format JSON
            echo json_encode($output);

            
            // var_dump($output);
            // exit;

        } else {
            exit('Maaf data tidak bisa ditampilkan');
            // return $list;
        }

    }

    public function data_jabar_2024()
    {
        // $list = $this->m_lampung23->get_datatables_byPred();
        // var_dump ($list);
        if ($this->input->is_ajax_request() == true) {

            $list = $this->m_jabar24->get_datatables_byPred();
            $data = array();
            $no = $_POST['start'];

            foreach ($list as $field) {

                $no++;
                $row = array();

                $row[] = $no;
                $row[] = $field->npsn;
                $row[] = $field->nama_satpen;
                $row[] = $field->kab_kota;
                $row[] = $field->persen.' %';
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->m_jabar24->count_all_byPred(),
                "recordsFiltered" => $this->m_jabar24->count_filtered_byPred(),
                "data" => $data,
            );
            //output dalam format JSON
            echo json_encode($output);

            
            // var_dump($output);
            // exit;

        } else {
            exit('Maaf data tidak bisa ditampilkan');
            // return $list;
        }

    }
    // ===============================================//
}