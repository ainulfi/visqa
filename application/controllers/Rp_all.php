<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rp_all extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library([
            'form_validation'
        ]);
        $this->load->model('Model_all_rp', 'm_rp_all');    
    }
    public function index()
    {
        $parser = [
            'judul' => '<i class="fa fa-users"></i> Data Capaian Rapor Pendidikan SMK di Wilayah BBPPMPV BMTI ',
            'isi' => $this->load->view('detail_all/tampildata_all', '', true)
        ];
        $this->parser->parse('template/main', $parser);
    }
    public function ambildata()
    {
        if ($this->input->is_ajax_request() == true) {

            $list = $this->m_rp_all->get_datatables();
            $data = array();
            $no = $_POST['start'];

            foreach ($list as $field) {

                $no++;
                $row = array();

                // Membuat Tombol
                $tombollihat = "<button type=\"button\" class=\"btn btn-outline-info\" title=\"Lihat Data\" onclick=\"lihat('" . $field->npsn . "')\">
                    <i class=\"fa fa-info\"> </i>
                </button>";
                $tomboledit = "<button type=\"button\" class=\"btn btn-outline-warning\" title=\"Edit Data\" onclick=\"edit('" . $field->npsn . "')\">
                    <i class=\"fa fa-pencil\"></i>
                </button>";
                $tombolhapus = "<button type=\"button\" class=\"btn btn-outline-danger\" title=\"Hapus Data\" onclick=\"hapus('" . $field->npsn . "')\">
                    <i class=\"fa fa-trash\"></i>
                </button>";
                $row[] = $no;
                $row[] = $field->npsn;
                $row[] = $field->nama_satpen;
                $row[] = $field->kab_kota . ' , ' . $field->provinsi;
                $row[] = $field->persen.' %';
                $row[] = $field->predikat;
                $row[] = $field->tahun;
                $row[] = $tombollihat;
                $data[] = $row;
            }

            $output['data'] = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->m_rp_all->count_all(),
                "recordsFiltered" => $this->m_rp_all->count_filtered(),
                "data" => $data,
            );
            
            echo json_encode($output['data']);
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }

    public function formtambah()
    {
        if ($this->input->is_ajax_request() == true) {
            $msg = [
                'sukses' => $this->load->view('detail_all/modaltambah_all', '', true)
            ];
            echo json_encode($msg);
        }
    }

    public function simpandata()
    {
        if ($this->input->is_ajax_request() == true) {
            $id = $this->input->post('id', true);
            $npsn = $this->input->post('npsn', true);
            $nama_satpen = $this->input->post('nama_satpen', true);
            $jenis_satpen = $this->input->post('jenis_satpen', true);
            $status_satpen = $this->input->post('status_satpen', true);
            $kab_kota = $this->input->post('kab_kota', true);
            $kecamatan = $this->input->post('kecamatan', true);
            $a1 = $this->input->post('a1', true);
            $a2 = $this->input->post('a2', true);
            $a3 = $this->input->post('a3', true);
            $a4 = $this->input->post('a4', true);
            $d1 = $this->input->post('d1', true);
            $d4 = $this->input->post('d4', true);
            $d8 = $this->input->post('d8', true);
            $d17 = $this->input->post('d17', true);
            $skor = $this->input->post('skor', true);
            $persen = $this->input->post('persen', true);
            $predikat = $this->input->post('predikat', true);

            $this->form_validation->set_rules(
                'id',
                'Data ID',
                'trim|required|is_unique[rp_all.id]',
                [
                    'required' => '%s tidak boleh kosong',
                    'is_unique' => '%s sudah ada didalam database'
                ]
            );

            $this->form_validation->set_rules(
                'npsn',
                'NPSN',
                'trim|required|is_unique[rp_all.npsn]',
                [
                    'required' => '%s tidak boleh kosong',
                    'is_unique' => '%s sudah ada didalam database'
                ]
            );

            $this->form_validation->set_rules(
                'nama_satpen',
                'Nama Satpen',
                'trim|required',
                [
                    'required' => '%s tidak boleh kosong',
                ]
            );

            $this->form_validation->set_rules(
                'jenis_satpen',
                'Jenis Satpen',
                'trim|required',
                [
                    'required' => '%s tidak boleh kosong',
                ]
            );

            $this->form_validation->set_rules(
                'status_satpen',
                'Status Satpen',
                'trim|required',
                [
                    'required' => '%s tidak boleh kosong',
                ]
            );

            $this->form_validation->set_rules(
                'kab_kota',
                'Kabupaten / Kota',
                'trim|required',
                [
                    'required' => '%s tidak boleh kosong',
                ]
            );

            $this->form_validation->set_rules(
                'kecamatan',
                'Kecamatan',
                'trim|required',
                [
                    'required' => '%s tidak boleh kosong',
                ]
            );


            if ($this->form_validation->run() == TRUE) {
                $this->m_rp_all->simpan($id,$npsn,$nama_satpen,$jenis_satpen,$status_satpen,$kab_kota,$kecamatan,$a1,$a2,$a3,$a4,$d1,$d4,$d8,$d17,$skor,$persen,$predikat);

                $msg = [
                    'sukses' => 'data rapor pendidikan berhasil disimpan'
                ];
            } else {
                $msg = [
                    'error' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    ' . validation_errors() . '
                </div>'
                ];
            }

            echo json_encode($msg);
        }
    }

    public function lihatdata()
    {
        if ($this->input->is_ajax_request() == true) {
            $npsn = $this->input->post('npsn', true);

            $ambildata = $this->m_rp_all->ambildata($npsn);
            $getdata2023 = $this->m_rp_all->ambildata_gabung($npsn, '2023');
            $getdata2024 = $this->m_rp_all->ambildata_gabung($npsn, '2024');



            if ($ambildata->num_rows() > 0) {
                $row_all = $ambildata->row_array();
                $row = $getdata2023->row_array();
                $row2 = $getdata2024->row_array();

                //array untuk konversi dari predikat ke skor, ingat ada spasinya di arraynya
                $predikat = [
                            'Baik ' => '4',
                            'Baik' => '4',
                            'Sedang ' => '3',
                            'Sedang' => '3',
                            'Kurang ' => '2',
                            'Kurang' => '2',
                            'Capaian Tidak Tersedia ' => '1',
                            'Capaian Tidak Tersedia' => '1'];
                ////////////////////////////////////////

                $data = [
                    'id' => $row['id'],
                    'npsn' => $row['npsn'],
                    'nama_satpen' => $row['nama_satpen'],
                    'jenis_satpen' => $row['jenis_satpen'],
                    'status_satpen' => $row['status_satpen'],
                    'provinsi' => $row['provinsi'],
                    'kab_kota' => $row['kab_kota'],
                    'kecamatan' => $row['kecamatan'],
                    'a1' => $predikat[$row['a1']],
                    'a2' => $predikat[$row['a2']],
                    'a3' => $predikat[$row['a3']],
                    'a4' => $predikat[$row['a4']],
                    'd1' => $predikat[$row['d1']],
                    'd4' => $predikat[$row['d4']],
                    'd8' => $predikat[$row['d8']],
                    'd17' => $predikat[$row['d17']],
                    'skor' => $row['skor'],
                    'persen' => $row['persen'],
                    'predikat' => $row['predikat'],
                    'tahun' => $row['tahun'],
                    //-----//
                    'id_2' => $row2['id'],
                    'npsn_2' => $row2['npsn'],
                    'nama_satpen_2' => $row2['nama_satpen'],
                    'jenis_satpen_2' => $row2['jenis_satpen'],
                    'status_satpen_2' => $row2['status_satpen'],
                    'provinsi_2' => $row2['provinsi'],
                    'kab_kota_2' => $row2['kab_kota'],
                    'kecamatan_2' => $row2['kecamatan'],
                    'a1_2' => $predikat[$row2['a1']],
                    'a2_2' => $predikat[$row2['a2']],
                    'a3_2' => $predikat[$row2['a3']],
                    'a4_2' => $predikat[$row2['a4']],
                    'd1_2' => $predikat[$row2['d1']],
                    'd4_2' => $predikat[$row2['d4']],
                    'd8_2' => $predikat[$row2['d8']],
                    'd17_2' => $predikat[$row2['d17']],
                    'skor_2' => $row2['skor'],
                    'persen_2' => $row2['persen'],
                    'predikat_2' => $row2['predikat'],
                    'tahun_2' => $row2['tahun'],
                ];


            }

            // var_dump($data); //aktifkan untuk cek data where condition
            // exit;
            $msg = [
                'sukses' => $this->load->view('detail_all/modallihat_all', $data, true)
            ];

            echo json_encode($msg);
        }
        return $data;

    }

    public function formedit()
    {
        if ($this->input->is_ajax_request() == true) {
            $npsn = $this->input->post('npsn', true);

            $ambildata = $this->m_rp_all->ambildata($npsn);

            if ($ambildata->num_rows() > 0) {
                $row = $ambildata->row_array();
                $data = [
                    'id' => $row['id'],
                    'npsn' => $row['npsn'],
                    'nama_satpen' => $row['nama_satpen'],
                    'jenis_satpen' => $row['jenis_satpen'],
                    'status_satpen' => $row['status_satpen'],
                    'kab_kota' => $row['kab_kota'],
                    'kecamatan' => $row['kecamatan'],
                    'a1' => $row['a1'],
                    'a2' => $row['a2'],
                    'a3' => $row['a3'],
                    'a4' => $row['a4'],
                    'd1' => $row['d1'],
                    'd4' => $row['d4'],
                    'd8' => $row['d8'],
                    'd17' => $row['d17'],
                    'skor' => $row['skor'],
                    'persen' => $row['persen'],
                    'predikat' => $row['predikat'],
                ];
            }
            $msg = [
                'sukses' => $this->load->view('detail_all/modaledit_all', $data, true)
            ];

            echo json_encode($msg);
        }
    }

    public function updatedata()
    {
        if ($this->input->is_ajax_request() == true) {
            $id = $this->input->post('id', true);
            $npsn = $this->input->post('npsn', true);
            $nama_satpen = $this->input->post('nama_satpen', true);
            $jenis_satpen = $this->input->post('jenis_satpen', true);
            $status_satpen = $this->input->post('status_satpen', true);
            $kab_kota = $this->input->post('kab_kota', true);
            $kecamatan = $this->input->post('kecamatan', true);
            $a1 = $this->input->post('a1', true);
            $a2 = $this->input->post('a2', true);
            $a3 = $this->input->post('a3', true);
            $a4 = $this->input->post('a4', true);
            $d1 = $this->input->post('d1', true);
            $d4 = $this->input->post('d4', true);
            $d8 = $this->input->post('d8', true);
            $d17 = $this->input->post('d17', true);
            $skor = $this->input->post('skor', true);
            $persen = $this->input->post('persen', true);
            $predikat = $this->input->post('predikat', true);



            $this->m_rp_all->update($id,$npsn,$nama_satpen,$jenis_satpen,$status_satpen,$kab_kota,$kecamatan,$a1,$a2,$a3,$a4,$d1,$d4,$d8,$d17,$skor,$persen,$predikat);

            $msg = [
                'sukses' => 'data Rapor Pendidikan berhasil di-ubah'
            ];
            echo json_encode($msg);
        }
    }

    public function hapus()
    {
        if ($this->input->is_ajax_request() == true) {
            $id = $this->input->post('id', true);

            $hapus = $this->m_rp_all->hapus($id);

            if ($hapus) {
                $msg = [
                    'sukses' => 'Data berhasil terhapus'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function deletemultiple()
    {
        if ($this->input->is_ajax_request() == true) {

            $id = $this->input->post('id', true);
            $jmldata = count($id);

            $hapusdata = $this->m_rp_all->hapusbanyak($id, $jmldata);

            if ($hapusdata == true) {
                $msg = [
                    'sukses' => "$jmldata data rapor pendidikan berhasil terhapus"
                ];
            }
            echo json_encode($msg);
        } else {
            exit('Maaf tidak bisa dilanjutkan');
        }
    }
}