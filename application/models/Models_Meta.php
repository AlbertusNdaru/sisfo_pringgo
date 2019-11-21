<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_Meta extends CI_Model {

	public function list_pekerjaan() {
		$data_pekerjaan = array(
			'01' => 'Ahli Ekonomi',
			'02' => 'Ahli Hukum',
			'03' => 'Ahli Perpustakaan',
			'04' => 'Apoteker',
			'05' => 'Bidan Ahli',
			'06' => 'Buruh Tani dan Ternak',
			'07' => 'Dokter Gigi',
			'08' => 'Dokter Hewan',
			'09' => 'Dokter Umum / Ahli',
			'10' => 'Guide Turis',
			'11' => 'Juru Masak',
			'12' => 'Kontraktor',
			'13' => 'Olahragawan',
			'14' => 'Pandai Besi',
			'15' => 'Pedagang kecil',
			'16' => 'Pejabat DPR',
			'17' => 'Pejabat Pelaksana',
			'18' => 'Pekerja kasar / Buruh',
			'19' => 'Pemahat / Pelukis / Seniman',
			'20' => 'Pekerja Rumah Tangga',
			'29' => 'Pekerja',
			'30' => 'Guru',
			'31' => 'Dosen',
			'32' => 'Wartawan',
			'33' => 'Pekerja Sosial',
			'34' => 'Pensiunan',
			'35' => 'Perawat',
			'36' => 'Petani dan Peternak',
			'37' => 'PNS/Pegawai/Karyawan',
			'38' => 'Polisi/TNI',
			'39' => 'Psikolog',
			'40' => 'Satpam/Security',
			'41' => 'Sopir',
			'42' => 'Teknisi',
			'43' => 'Tenaga Manajemen',
			'44' => 'Tenaga Pemasaran',
			'45' => 'Tidak Dapat Bekerja/Cacat',
			'46' => 'Sopir',
			'47' => 'Tukang',
			'56' => 'Swasta',
			'57' => 'Pedagang Sedang',
			'60' => 'Tidak Bekerja',
			'62' => 'Ibu Rumah Tangga',
			'64' => 'Pelajar',
			'65' => 'Mahasiswa',
			'66' => 'Katekis',
			'69' => 'Nelayan',
			'70' => 'Buruh Pabrik',
			'88' => 'Belum Tahu',
			'99' => 'Lain-lain'
		);
		return $data_pekerjaan;
	}

	public function list_ekonomi() {
		$data_ekonomi = array(
			'01' => 'Bisa membantu',
			'02' => 'Biasa/cukup',
			'03' => 'Memerlukan bantuan'
		);
		return $data_ekonomi;
	}

	public function list_golongan_darah() {
		$list_golongan_darah = array(
			'01' => 'A',
			'02' => 'B',
			'03' => 'O',
			'04' => 'AB',
			'08' => 'Belum Tahu'
		);
		return $list_golongan_darah;
	}

	public function list_jenis_kelamin() {
		$data_jenis_kelamin = array(
			'1' => 'Laki-laki',
			'2' => 'Perempuan'
		);
		return $data_jenis_kelamin;
	}

	public function list_jenis_agama() {
		$data_jenis_agama = array(
			'01' => 'Islam',
			'02' => 'Kristen',
			'03' => 'Katolik',
			'04' => 'Hindu',
			'05' => 'Budha',
			'06' => 'Konghucu',
			'07' => 'Lainnya',
			'08' => 'Kato > NK',
			'09' => 'Kato > Kristen',
			'10' => 'Katekumen'
		);
		return $data_jenis_agama;
	}

	public function list_status_kawin() {
		$data_status_kawin = array(
			'01' => 'Belum',
			'02' => 'Sah Katolik',
			'03' => 'Sah Beda Agama',
			'04' => 'Sah Beda Gereja',
			'05' => 'Nikah Luar Gereja',
			'06' => 'Ditinggal',
			'07' => 'KbM',
			'08' => 'Janda/Duda'
		);
		return $data_status_kawin;
	}

	public function list_jenis_kk() {
		$data_jenis_kk = array(
			'01' => 'Rumah Tangga Biasa',
			'02' => 'Rumah Tangga Khusus'
		);
		return $data_jenis_kk;
	}

	public function list_hubungan_kk() {
		$data_hubungan_kk = array(
			'01' => 'Kepala Rumah Tangga',
			'02' => 'Pasangan',
			'03' => 'Anak',
			'04' => 'Kakak/Adik',
			'05' => 'Anak Adopsi/Anak tiri',
			'06' => 'Cucu',
			'07' => 'Orang tua/Mertua',
			'08' => 'Famili lain',
			'09' => 'Pembantu/Sopir/Tukang Kebun',
			'10' => 'Lain-lain'
		);
		return $data_hubungan_kk;
	}

	public function list_suku_bangsa() {
		$data_suku_bangsa = array(
			'01' => 'Ambon',
			'02' => 'Bali',
			'03' => 'Batak',
			'04' => 'Betawi',
			'05' => 'Bugis',
			'06' => 'Dayak',
			'07' => 'Flores',
			'08' => 'Papua',
			'09' => 'Jawa',
			'10' => 'Madura',
			'11' => 'Makassar',
			'12' => 'Minangkabau',
			'13' => 'Nias',
			'14' => 'Sumbawa',
			'15' => 'Sunda',
			'16' => 'Timor',
			'17' => 'Tionghoa',
			'18' => 'Toraja',
			'19' => 'Non-Indonesia',
			'20' => 'Lainnya'
		);
		return $data_suku_bangsa;
	}

	public function list_pendidikan() {
		$data_pendidikan = array(
			'00' => 'Belum Sekolah',
			'01' => 'SD',
			'02' => 'SLTP',
			'03' => 'SLTA',
			'04' => 'Diploma',
			'05' => 'Sarjana',
			'06' => 'S2/Akta 5',
			'07' => 'S3',
			'11' => 'SD - K',
			'12' => 'SLTP - K',
			'13' => 'SLTA - K',
			'14' => 'D1-D3 - K',
			'15' => 'S1 - K',
			'16' => 'S2 - K',
			'17' => 'S3 - K',
			'21' => 'SD - NK',
			'22' => 'SLTP - NK',
			'23' => 'SLTA - NK',
			'24' => 'D1-D3 - NK',
			'25' => 'S1/D4 - NK',
			'26' => 'S2 - NK',
			'27' => 'S3 - NK',
			'33' => '7-12 non skl',
			'44' => '13-15 non skl',
			'77' => 'Buta Aksara'
		);
		return $data_pendidikan;
	}

	public function list_lingkungan() {
		$this->db->select('*');
		$this->db->from('data_lingkungan');
		$data_lingkungan = $this->db->get()->result_array();
		foreach ($data_lingkungan as $lingkungan) {
			$list_lingkungan[$lingkungan['kodelingkungan']] = $lingkungan['nama'];
		}
		return $list_lingkungan;
	}

	public function list_wilayah() {
		$this->db->select('wilayah, ket');
		$this->db->from('data_wilayah');
		$query = $this->db->get();
		return $query->result();
	}

}