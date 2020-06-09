--
-- Database: `pmb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jabatan` varchar(11) NOT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kota` varchar(75) DEFAULT NULL,
  `provinsi` varchar(75) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `id_user`, `nama`, `tempat_lahir`, `tgl_lahir`, `jns_kelamin`, `agama`, `status`, `jabatan`, `alamat`, `kota`, `provinsi`, `telp`, `foto`, `username`, `password`) VALUES
(14, '132', 'susilo', 'karngdo', '2018-03-29', 'cowok', 'ISLAM', 'menikah', 'STAFF PSB', 'kwasuhan', 'surakarta', 'jawa tengah', '089876576', '', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` int(9) NOT NULL,
  `jurusan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id`, `jurusan`) VALUES
(19, 'SASTRA INGGRIS'),
(20, 'TEKNIK SIPIL'),
(22, 'TEKNIK INFORMATIKA'),
(23, 'SISTEM KOMPUTER'),
(25, 'TEKNIK MESIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_berita_kampus` int(5) DEFAULT NULL,
  `tanggal_komentar` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `isi_komentar` text,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhsiswa`
--

CREATE TABLE `tbl_mhsiswa` (
  `id_daftar` int(10) NOT NULL,
  `nisn` int(5) NOT NULL,
  `nama_mahasiswa` varchar(75) DEFAULT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgllhr` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(35) DEFAULT NULL,
  `jurusan` varchar(75) DEFAULT NULL,
  `asal_sekolah` varchar(75) DEFAULT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kelurahan` varchar(45) DEFAULT NULL,
  `kecamatan` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `provinsi` varchar(75) DEFAULT NULL,
  `telp` int(15) DEFAULT NULL,
  `no_anak` int(2) NOT NULL,
  `jumlah_saudara` int(2) NOT NULL,
  `nama_ortu` varchar(60) NOT NULL,
  `alamat_ortu` varchar(75) NOT NULL,
  `pendidikan_ortu` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `telpon_ortu` int(15) NOT NULL,
  `no_ijazah` varchar(30) NOT NULL,
  `nilai_mtk` double NOT NULL,
  `nilai_bindo` double NOT NULL,
  `nilai_bing` double NOT NULL,
  `rata_nilai` double NOT NULL,
  `juara` int(3) DEFAULT NULL,
  `bidang` varchar(30) DEFAULT NULL,
  `tingkat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mhsiswa`
--

INSERT INTO `tbl_mhsiswa` (`id_daftar`, `nisn`, `nama_mahasiswa`, `jns_kelamin`, `tempat_lahir`, `tgllhr`, `agama`, `status`, `jurusan`, `asal_sekolah`, `tahun_lulus`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `telp`, `no_anak`, `jumlah_saudara`, `nama_ortu`, `alamat_ortu`, `pendidikan_ortu`, `pekerjaan`, `telpon_ortu`, `no_ijazah`, `nilai_mtk`, `nilai_bindo`, `nilai_bing`, `rata_nilai`, `juara`, `bidang`, `tingkat`) VALUES
(10, 12425, 'dwi prihtapambudi', 'cowok', 'karanganyar', '2011-03-03', 'ISLAM', 'kandung', 'ILMU KOMPUTER', 'SMK PENDA 2 KARANGANYAR', 2011, 'Kwasuhan RT.03/04 Gantiwarno', 'Gantiwarno', 'Matesih', 'Karanganyar', 'Jawa tengah', 892672542, 1, 2, 'Suyatmin', 'Kwasuhan', 'TIDAK SEKOLAH', 'PNS', 2147483647, 'B089TTYY', 4, 4, 4, 4, 1, 'OLAHRAGA', 'KOTA'),
(11, 4527542, 'justin bieber sutarno', 'cewek', 'karanganyar', '2018-04-19', 'KATOLIK', 'kandung', 'TEKNIK INFORMATIKA', 'smk negri 1 los angels', 2018, 'kwasuhan rt,03/04', 'gantiwarno', 'matesih', 'boston', 'texas', 899999999, 4, 2, 'lastri', 'kwasuhan', 'SMP/SEDERAJAT', 'WIRAUSAHA', 896371515, '0P913813', 2, 1, 2, 2, 3, 'IPA', 'KABUPATEN'),
(12, 2372, 'dwi ahsudahlah', 'cewek', 'wakanda', '2018-04-26', 'ISLAM', 'kandung', 'SISTEM INFORMASI', 'smak smak', 1904, 'wkwkwk', 'wkwkwk', 'wkwkkw', 'wkwkkw', 'wkwkk', 0, 1, 2, 'wkwkkw', 'wkwkkw', 'SMA/SEDERAJAT', 'APARAT', 21283964, '1', 1, 1, 1, 1, 3, 'SENI', 'KABUPATEN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_artikel` int(5) NOT NULL,
  `tanggal_publish` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `penulis` varchar(50) DEFAULT NULL,
  `judul_berita` varchar(200) DEFAULT NULL,
  `isi_berita` text,
  `image_artikel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin'),
(2, 'user', 'user@gmail.com', 'user'),
(3, 'budi', 'budi@gmail.com', 'budi123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `usia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_mhsiswa`
--
ALTER TABLE `tbl_mhsiswa`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_mhsiswa`
--
ALTER TABLE `tbl_mhsiswa`
  MODIFY `id_daftar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
