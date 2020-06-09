<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','a4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(300,7,'SEKOLAH MENENGAH KEJURUSAN PENDA 2 KARANGANYAR',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(300,7,'DAFTAR PENDAFTAR SISWA BARU',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'ID DAFTAR',1,0);
        $pdf->Cell(30,6,'NISN',1,0);
        $pdf->Cell(50,6,'NAMA MAHASISWA',1,0);
        $pdf->Cell(50,6,'JURUSAN',1,0);
        $pdf->Cell(80,6,'ALAMAT',1,0);
        $pdf->Cell(30,6,'NO TELPON',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('tbl_mhsiswa')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(30,6,$row->id_daftar,1,0);
            $pdf->Cell(30,6,$row->nisn,1,0);
            $pdf->Cell(50,6,$row->nama_mahasiswa,1,0);
            $pdf->Cell(50,6,$row->jurusan,1,0);
            $pdf->Cell(80,6,$row->alamat,1,0); 
            $pdf->Cell(30,6,$row->no_anak,1,1);

        }
        $pdf->Output();
    }
}