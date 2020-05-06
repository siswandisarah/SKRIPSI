<?php

class M_rw extends CI_Model{

      ///model ini untuk menampilkan saja

      public function tampilkan()
      {
         return $this->db->get('jenis_racun')->result_array();
      }
      public function tampilkan_pupuk()
      {
         return $this->db->get('jenis_pupuk')->result_array();
      }
      public function tampilkan_data_pupuk1()
      {
         return $this->db->get('jenis_pupuk')->result_array();
      }
      public function tampilkan1()
      {
         return $this->db->get('jenis_racun')->result_array();
      }

    public function informasi_pertanian()
    {
        return $this->db->get('jenis_beras')->result_array();
    }
    //-------------------------------------------------------------------
    //ini untuk menampilkan informasi pertanian berdasarkan kecamatan
    public function informasi_pertanian2()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE kecamatan='Bolaang'");
       return $data->result_array();
    }
    public function informasi_pertanian3()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE kecamatan='Poigar'");
       return $data->result_array();
    }
    public function informasi_pertanian4()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE kecamatan='Dumoga Barat'");
       return $data->result_array();
    }
    public function informasi_pertanian5()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE kecamatan='Dumoga Timur'");
       return $data->result_array();
    }
    public function informasi_pertanian6()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE kecamatan='Dumoga Utara'");
       return $data->result_array();
    }
    public function informasi_pertanian7()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE kecamatan='Lolayan'");
       return $data->result_array();
    }
    public function informasi_pertanian8()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE kecamatan='Passi Barat'");
       return $data->result_array();
    }

    //----------------------------------------------------------------------
    public function tampilkan_data_prosespanen()
    {
        return $this->db->get('proses_panen')->result_array();
    }
    public function tampilkan_proses()
    {
        return $this->db->get('proses_pupuk')->result_array();
    }
    public function tampilkan_proses1()
    {
        return $this->db->get('proses_panen')->result_array();
    }
    public function tampilkan_galeri()
    {
         return $this->db->get('proses_panen')->result_array();
    }
    public function tampilkan_galeri1()
    {
         return $this->db->get('jenis_racun')->result_array();
    }



    ///model ini untuk memasukan data
    public function input_data($data)
    {
        $this->db->insert('jenis_racun',$data);
    }
    public function input_data_pupuk($data)
    {
        $this->db->insert('jenis_pupuk',$data);
    }
    public function input_data2($data)
    {
        $this->db->insert('jenis_beras',$data);
    }

    public function input_proses1($data)
    {
        $this->db->insert('proses_pupuk',$data);
    }
    public function input_proses2($data)
    {
        $this->db->insert('proses_panen',$data);
    }

    ///model untuk hapus data

    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jenis_racun');

       // $this->db->where($where);
       // $this->db->delete($table);
    }
    public function hapus_Pengguna($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');

       // $this->db->where($where);
       // $this->db->delete($table);
    }
    public function hapus_data2($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jenis_beras');
       // $this->db->where($where);
       // $this->db->delete($table);
    }

    public function hapus_data_pupuk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jenis_pupuk');
       // $this->db->where($where);
       // $this->db->delete($table);
    }

    public function hapus_proses_data1($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('proses_panen');
       // $this->db->where($where);
       // $this->db->delete($table);
    }
    public function hapus_proses_pemupukan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('proses_pupuk');
       // $this->db->where($where);
       // $this->db->delete($table);
    }
    public function hapus_data_pengguna($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
       // $this->db->where($where);
       // $this->db->delete($table);
    }


    //ini adalah tempat pembuatan model detail
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('jenis_racun', array('id' => $id))->row();
        return $query;
    }
    public function detail_proses_data1($id = NULL)
    {
        $query = $this->db->get_where('proses_panen', array('id' => $id))->row();
        return $query;
    }
    public function detail_proses_pemupukan($id = NULL)
    {
        $query = $this->db->get_where('proses_pupuk', array('id' => $id))->row();
        return $query;
    }

    //ini adalah lokasi untuk pembuatan model edit
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function edit_data1($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function edit_data2($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where('id', $where['id']);
        $this->db->update($table,$data);
    }
    public function update_data1($where, $data, $table)
    {
        $this->db->where('id', $where['id']);
        $this->db->update($table,$data);
    }
    public function update_data2($where, $data, $table)
    {
        $this->db->where('id', $where['id']);
        $this->db->update($table,$data);
    }

    public function cari_data($keyword)
    {
       $data = $this->db->query("SELECT * FROM jenis_racun WHERE nama_racun like ? or nama_racun like ? or nama_racun like ? or nama_racun like ?",
            array($keyword, $keyword.'%', '%'.$keyword, '%'.$keyword.'%')
        );
       return $data;
    }
    public function cari_data1($keyword)
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE nama_petani like ? or nama_petani like ? or nama_petani like ? or nama_petani like ?",
            array($keyword, $keyword.'%', '%'.$keyword, '%'.$keyword.'%')
        );
       return $data;
    }
    public function cari_data2($keyword)
    {
       $data = $this->db->query("SELECT * FROM jenis_pupuk WHERE nama_pupuk like ? or nama_pupuk like ? or nama_pupuk like ? or nama_pupuk like ?",
            array($keyword, $keyword.'%', '%'.$keyword, '%'.$keyword.'%')
        );
       return $data;
    }

    public function tampilkan3()
    {
        $data = $this->db->query("SELECT * FROM user WHERE role_id = '2'");
        return $data->result_array();
    }
//ini adalah perhitungan untuk setiap kecamatan
    public function get_sum()
    {
        $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE kecamatan='Bolaang'";
        $result = $this->db->query($sql);
        return $result->row()->jumlah;
    }
    public function get_sum1()
    {
        $sql = "SELECT  sum(jumlah) as jumlah FROM jenis_beras WHERE kecamatan='Poigar'";
        $result = $this->db->query($sql);
        return $result->row()->jumlah;
    }
    public function get_sum2()
    {
        $sql = "SELECT  sum(jumlah) as jumlah FROM jenis_beras WHERE kecamatan='Dumoga Barat'";
        $result = $this->db->query($sql);
        return $result->row()->jumlah;
    }
     public function get_sum3()
    {
        $sql = "SELECT  sum(jumlah) as jumlah FROM jenis_beras WHERE kecamatan='Dumoga Timur'";
        $result = $this->db->query($sql);
        return $result->row()->jumlah;
    }
    public function get_sum4()
    {
        $sql = "SELECT  sum(jumlah) as jumlah FROM jenis_beras WHERE kecamatan='Dumoga Utara'";
        $result = $this->db->query($sql);
        return $result->row()->jumlah;
    }
    public function get_sum5()
    {
        $sql = "SELECT  sum(jumlah) as jumlah FROM jenis_beras WHERE kecamatan='Lolayan'";
        $result = $this->db->query($sql);
        return $result->row()->jumlah;
    }
    public function get_sum6()
    {
        $sql = "SELECT  sum(jumlah) as jumlah FROM jenis_beras WHERE kecamatan='Passi Barat'";
        $result = $this->db->query($sql);
        return $result->row()->jumlah;
    }
//ini adalah query untuk perhitungan pemakaian terbanyak
    public function get_tertinggi()
    {
        $this->db->select("nama_beras, COUNT(nama_beras) as total");
        $this->db->group_by('nama_beras');
        $this->db->order_by('total','desc');
        $this->db->where('kecamatan="Bolaang"');
       return $this->db->get('jenis_beras');
    }
    public function get_tertinggi2()
    {
        $this->db->select("nama_beras, COUNT(nama_beras) as total ");
        $this->db->group_by('nama_beras');
        $this->db->order_by('total','desc');
        $this->db->where('kecamatan="Poigar"');
       return $this->db->get('jenis_beras');
    }
    public function get_tertinggi3()
    {
        $this->db->select("nama_beras, COUNT(nama_beras) as total");
        $this->db->group_by('nama_beras');
        $this->db->order_by('total','desc');
        $this->db->where('kecamatan="Dumoga Barat"');
       return $this->db->get('jenis_beras');
    }
    public function get_tertinggi4()
    {
        $this->db->select("nama_beras, COUNT(nama_beras) as total");
        $this->db->group_by('nama_beras');
        $this->db->order_by('total','desc');
        $this->db->where('kecamatan="Dumoga Timur"');
       return $this->db->get('jenis_beras');
    }
    public function get_tertinggi5()
    {
        $this->db->select("nama_beras, COUNT(nama_beras) as total");
        $this->db->group_by('nama_beras');
        $this->db->order_by('total','desc');
        $this->db->where('kecamatan="Dumoga Utara"');
       return $this->db->get('jenis_beras');
    }
    public function get_tertinggi6()
    {
        $this->db->select("nama_beras, COUNT(nama_beras) as total");
        $this->db->group_by('nama_beras');
        $this->db->order_by('total','desc');
        $this->db->where('kecamatan="Lolayan"');
       return $this->db->get('jenis_beras');
    }
    public function get_tertinggi7()
    {
        $this->db->select("nama_beras, COUNT(nama_beras) as total");
        $this->db->group_by('nama_beras');
        $this->db->order_by('total','desc');
        $this->db->where('kecamatan="Passi Barat"');
       return $this->db->get('jenis_beras');
    }

    public function get_spektisida()
    {
        $this->db->select('nama_racun, COUNT(nama_racun) as total');
        $this->db->group_by('nama_racun');
        $this->db->order_by('total','desc');
       return $this->db->get('jenis_racun');
    }
    public function get_pupuk()
    {
        $this->db->select('nama_pupuk, COUNT(nama_pupuk) as total');
        $this->db->group_by('nama_pupuk');
        $this->db->order_by('total','desc');
       return $this->db->get('jenis_pupuk');
    }

    //ini untuk menampilkan informasi pertanian berdasarkan desa

    public function informasi_inobonto1()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Inobonto 1'");
       return $data->result_array();
    }
    public function informasi_inobonto2()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Inobonto 2'");
       return $data->result_array();
    }
    public function informasi_ambang1()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Ambang 1'");
       return $data->result_array();
    }
    public function informasi_ambang2()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Ambang 2'");
       return $data->result_array();
    }
    public function informasi_tadoy()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Tadoy'");
       return $data->result_array();
    }
    public function informasi_tadoy1()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Tadoy 1'");
       return $data->result_array();
    }
    public function informasi_bolaang()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Bolaang'");
       return $data->result_array();
    }
    public function informasi_bantik()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Bantik'");
       return $data->result_array();
    }
    public function informasi_langagon()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='langagon'");
       return $data->result_array();
    }
    public function informasi_lolan()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='lolan'");
       return $data->result_array();
    }
    public function informasi_solimandungan1()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='solimandungan 1'");
       return $data->result_array();
    }
    public function informasi_solimandungan2()
    {
       $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='solimandungan 2'");
       return $data->result_array();
    }

//ini adalah perhitungan untuk setiap desa
public function get_sum_desa_solimandungan2()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='solimandungan 2'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_solimandungan1()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='solimandungan 1'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_lolan()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Lolan'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_langagon()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='langagon'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_bantik()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='bantik'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_inobonto1()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='inobonto 1'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_inobonto2()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='inobonto 2'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_ambang1()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='ambang 1'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_ambang2()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='ambang 2'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_tadoy()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='tadoy'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_tadoy1()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='tadoy 1'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function get_sum_desa_bolaang()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='bolaang'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}

////ini batas untuk kecamatan Bolaang
public function informasi_gogaluman()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Gogaluman'");
   return $data->result_array();
}
public function get_sum_desa_gogaluman()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Gogaluman'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mariri_baru()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Mariri Baru'");
   return $data->result_array();
}
public function get_sum_desa_mariri_baru()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Mariri Baru'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mariri_dua()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Mariri Dua'");
   return $data->result_array();
}
public function get_sum_desa_mariri_dua()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Mariri Dua'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mariri_lama()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Mariri lama'");
   return $data->result_array();
}
public function get_sum_desa_mariri_lama()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Mariri lama'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mariri_satu()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Mariri Satu'");
   return $data->result_array();
}
public function get_sum_desa_mariri_satu()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Mariri Satu'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_nanasi()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Nanasi'");
   return $data->result_array();
}
public function get_sum_desa_nanasi()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Nanasi'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_nanasi_timur()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Nanasi Timur'");
   return $data->result_array();
}
public function get_sum_desa_nanasi_timur()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Nanasi Timur'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_nonapan_baru()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Nonapan Baru'");
   return $data->result_array();
}
public function get_sum_desa_nonapan_baru()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Nonapan Baru'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_nonapan_dua()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Nonapan Dua'");
   return $data->result_array();
}
public function get_sum_desa_nonapan_dua()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Nonapan Dua'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_nonapan_satu()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Nonapan Satu'");
   return $data->result_array();
}
public function get_sum_desa_nonapan_satu()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Nonapan Satu'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_poigar()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Poigar'");
   return $data->result_array();
}
public function get_sum_desa_poigar()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Poigar'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_tiberias()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Tiberias'");
   return $data->result_array();
}
public function get_sum_desa_tiberias()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Tiberias'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_wineru()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Wineru'");
   return $data->result_array();
}
public function get_sum_desa_wineru()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Wineru'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
///batas desa kecamatan Poigar

public function informasi_doloduo()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Doloduo'");
   return $data->result_array();
}
public function get_sum_desa_doloduo()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Doloduo'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_ibolian()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Ibolian'");
   return $data->result_array();
}
public function get_sum_desa_ibolian()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Ibolian'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_ibolian_satu()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Ibolian Satu'");
   return $data->result_array();
}
public function get_sum_desa_ibolian_satu()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Ibolian Satu'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_ikhwan()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Ikhwan'");
   return $data->result_array();
}
public function get_sum_desa_ikhwan()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Ikhwan'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_kosio()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Kosio'");
   return $data->result_array();
}
public function get_sum_desa_kosio()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Kosio'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_kosio_timur()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Kosio Timur'");
   return $data->result_array();
}
public function get_sum_desa_kosio_timur()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Kosio Timur'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_matayangan()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Matayangan'");
   return $data->result_array();
}
public function get_sum_desa_matayangan()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Matayangan'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mekaruo()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Mekaruo'");
   return $data->result_array();
}
public function get_sum_desa_mekaruo()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Mekaruo'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_toraut()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Toraut'");
   return $data->result_array();
}
public function get_sum_desa_toraut()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='toraut'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_uuwan()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Uuwan'");
   return $data->result_array();
}
public function get_sum_desa_uuwan()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Uuwan'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_wangga_baru()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Wangga Baru'");
   return $data->result_array();
}
public function get_sum_desa_wangga_baru()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Wangga Baru'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_werdhi_agung()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Werdhi Agung'");
   return $data->result_array();
}
public function get_sum_desa_werdhi_agung()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Werdhi Agung'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_werdhi_agung_selatan()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Werdhi Agung Selatan'");
   return $data->result_array();
}
public function get_sum_desa_werdhi_agung_selatan()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Werdhi Agung Selatan'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
///batas desa dumoga barat
public function informasi_bumbungon()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Bumbungon'");
   return $data->result_array();
}
public function get_sum_desa_bumbungon()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Bumbungon'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_dumoga()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Dumoga'");
   return $data->result_array();
}
public function get_sum_desa_dumoga()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Dumoga'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_dumoga_satu()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Dumoga Satu'");
   return $data->result_array();
}
public function get_sum_desa_dumoga_satu()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Dumoga Satu'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_dumoga_dua()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Dumoga Dua'");
   return $data->result_array();
}
public function get_sum_desa_dumoga_dua()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Dumoga Dua'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_imandi()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Imandi'");
   return $data->result_array();
}
public function get_sum_desa_imandi()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Imandi'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_kanaan()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Kanaan'");
   return $data->result_array();
}
public function get_sum_desa_kanaan()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Kanaan'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_kembang()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Kembang'");
   return $data->result_array();
}
public function get_sum_desa_kembang()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Kembang'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_modomang()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Modomang'");
   return $data->result_array();
}
public function get_sum_desa_modomang()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Modomang'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mogoyunggung()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='mogoyunggung'");
   return $data->result_array();
}
public function get_sum_desa_mogoyunggung()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='mogoyunggung'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_ponompian()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Ponompian'");
   return $data->result_array();
}
public function get_sum_desa_ponompian()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Ponompian'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_pusian()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Pusian'");
   return $data->result_array();
}
public function get_sum_desa_pusian()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Pusian'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_siniyung()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Siniyung'");
   return $data->result_array();
}
public function get_sum_desa_siniyung()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Siniyung'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_tonom()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Tonom'");
   return $data->result_array();
}
public function get_sum_desa_tonom()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Tonom'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_toruakat()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Toruakat'");
   return $data->result_array();
}
public function get_sum_desa_toruakat()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Toruakat'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
///batas desa dumoga timur
public function informasi_bonawang()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Bonawang'");
   return $data->result_array();
}
public function get_sum_desa_bonawang()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Bonawang'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_dondomon()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Dondomon'");
   return $data->result_array();
}
public function get_sum_desa_dondomon()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Dondomon'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_konarom()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Konarom'");
   return $data->result_array();
}
public function get_sum_desa_konarom()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Konarom'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mopuya_utara()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Mopuya Utara'");
   return $data->result_array();
}
public function get_sum_desa_mopuya_utara()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Mopuya Utara'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mopuya_selatan()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Mopuya Selatan'");
   return $data->result_array();
}
public function get_sum_desa_mopuya_selatan()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Mopuya Selatan'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_osion()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Osion'");
   return $data->result_array();
}
public function get_sum_desa_osion()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Osion'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_tapadaka_satu()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Tapadaka Satu'");
   return $data->result_array();
}
public function get_sum_desa_tapadaka_satu()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Tapadaka Satu'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_tumokang_baru()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Tumokang Baru'");
   return $data->result_array();
}
public function get_sum_desa_tumokang_baru()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Tumokang Baru'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}

///batas kecamatan lolayan
public function informasi_abak()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Abak'");
   return $data->result_array();
}
public function get_sum_desa_abak()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Abak'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_bakan()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Bakan'");
   return $data->result_array();
}
public function get_sum_desa_bakan()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Bakan'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_bombanon()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Bombanon'");
   return $data->result_array();
}
public function get_sum_desa_bombanon()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Bombanon'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_kopandakan_dua()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Kopandakan Dua'");
   return $data->result_array();
}
public function get_sum_desa_kopandakan_dua()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Kopandakan Dua'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_matali_baru()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Matali Baru'");
   return $data->result_array();
}
public function get_sum_desa_matali_baru()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Matali Baru'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mengkang()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Mengkang'");
   return $data->result_array();
}
public function get_sum_desa_mengkang()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Mengkang'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mopait()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Mopait'");
   return $data->result_array();
}
public function get_sum_desa_mopait()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Mopait'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_mopusi()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Mopait'");
   return $data->result_array();
}
public function get_sum_desa_mopusi()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Mopait'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_tonayon_selatan()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Tonayon Selatan'");
   return $data->result_array();
}
public function get_sum_desa_tonayon_selatan()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Tonayon Selatan'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_tungoi_satu()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Tungoi Satu'");
   return $data->result_array();
}
public function get_sum_desa_tungoi_satu()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Tungoi Satu'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_tungoi_dua()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Tungoi Dua'");
   return $data->result_array();
}
public function get_sum_desa_tungoi_dua()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Tungoi Dua'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_bintau()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Bintau'");
   return $data->result_array();
}
public function get_sum_desa_bintau()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Bintau'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}

public function informasi_bulud()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Bulud'");
   return $data->result_array();
}
public function get_sum_desa_bulud()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Bulud'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_inuai()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Inuai'");
   return $data->result_array();
}
public function get_sum_desa_inuai()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Inuai'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_lobong()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Inuai'");
   return $data->result_array();
}
public function get_sum_desa_lobong()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Inuai'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_muntoi()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Muntoi'");
   return $data->result_array();
}
public function get_sum_desa_muntoi()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Muntoi'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_muntoi_timur()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Muntoi Timur'");
   return $data->result_array();
}
public function get_sum_desa_muntoi_timur()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Muntoi Timur'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_passi_satu()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Passi Satu'");
   return $data->result_array();
}
public function get_sum_desa_passi_satu()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Passi Satu'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}
public function informasi_passi_dua()
{
   $data = $this->db->query("SELECT * FROM jenis_beras WHERE alamat='Passi Dua'");
   return $data->result_array();
}
public function get_sum_desa_passi_dua()
{
    $sql = "SELECT sum(jumlah) as jumlah FROM jenis_beras WHERE alamat='Passi Dua'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
}



}
