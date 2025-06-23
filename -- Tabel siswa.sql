-- Tabel siswa
CREATE TABLE siswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nisn VARCHAR(20) UNIQUE,
  nama VARCHAR(100),
  jenis_kelamin ENUM('L', 'P'),
  tanggal_lahir DATE,
  kelas_id INT
);

-- Tabel guru
CREATE TABLE guru (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nip VARCHAR(20) UNIQUE,
  nama VARCHAR(100),
  mapel_id INT
);

-- Tabel kelas
CREATE TABLE kelas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_kelas VARCHAR(20)
);

-- Tabel mata pelajaran
CREATE TABLE mata_pelajaran (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_mapel VARCHAR(100)
);

-- Tabel nilai
CREATE TABLE nilai (
  id INT AUTO_INCREMENT PRIMARY KEY,
  siswa_id INT,
  mapel_id INT,
  semester ENUM('Ganjil', 'Genap'),
  nilai_pengetahuan INT,
  nilai_keterampilan INT,
  deskripsi TEXT
);