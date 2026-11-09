# LITERASI DIGITAL — WordPress Website

Website personal portfolio dan edukasi literasi digital menggunakan WordPress dan MySQL sebagai proyek mata kuliah Literasi Digital untuk Program Studi Sistem Informasi.

Website ini bertujuan memberikan informasi dan edukasi mengenai keamanan akun digital, jejak digital, serta etika penggunaan media sosial. Website juga menyediakan halaman profil pengembang dan formulir kontak untuk komunikasi dengan pengunjung.

---

## Identitas Pengembang

| Keterangan | Detail |
|---|---|
| Nama | Afif Rahman Maulana Putra |
| NIM | [09010626002] |
| Program Studi | Sistem Informasi |
| Fakultas | Sains dan Teknologi |
| Universitas | UIN Sunan Ampel Surabaya |
| Mata Kuliah | Literasi Digital |

---

## Deskripsi Proyek

Website Literasi Digital merupakan website berbasis WordPress yang menyediakan informasi edukatif seputar keamanan digital dan aktivitas pengguna di internet.

Website ini dirancang dengan beberapa halaman utama, yaitu Home, About Me, Blog, dan Contact.

Pengunjung dapat melihat halaman utama, mengenal profil pengembang, membaca artikel literasi digital, serta mengirimkan pesan melalui formulir kontak.

Website dikembangkan menggunakan WordPress dengan bantuan XAMPP sebagai lingkungan server lokal. Pengelolaan konten dilakukan melalui dashboard administrator WordPress.

---

## Teknologi yang Digunakan

| Teknologi | Kegunaan |
|---|---|
| WordPress | Content Management System |
| PHP | Backend dan pemrosesan website |
| MySQL | Database website |
| HTML5 | Struktur halaman website |
| CSS3 | Desain dan tampilan antarmuka |
| Apache (XAMPP) | Web server lokal |
| Blocksy | Theme WordPress |
| WPForms Lite | Formulir kontak |
| FluentSMTP | Pengelolaan pengiriman email |
| Git & GitHub | Version control dan penyimpanan source code |

---

## Fitur Website

### 1. Fitur Pengunjung

Pengunjung dapat mengakses halaman website untuk memperoleh informasi literasi digital.

- **Home:** Menampilkan halaman utama dan navigasi website.
- **About Me:** Menampilkan informasi dan profil pengembang.
- **Blog:** Menampilkan artikel edukasi literasi digital.
- **Detail Artikel:** Membaca isi artikel secara lengkap.
- **Kategori dan Tag:** Mengelompokkan artikel berdasarkan topik.
- **Gambar Unggulan:** Menampilkan ilustrasi pada artikel.
- **Contact:** Menyediakan formulir untuk mengirimkan pesan.
- **Notifikasi Email:** Mengirimkan pemberitahuan ketika formulir kontak dikirimkan.

### 2. Fitur Administrator

Administrator menggunakan dashboard WordPress untuk mengelola website.

- **Login Admin:** Mengakses dashboard administrator.
- **Dashboard:** Mengelola konten website.
- **Manajemen Halaman:** Menambahkan dan mengedit halaman.
- **Manajemen Artikel:** Membuat, mengedit, dan menghapus artikel.
- **Kategori dan Tag:** Mengelompokkan artikel.
- **Media Library:** Mengelola gambar dan media website.
- **Manajemen Tema:** Mengatur tampilan menggunakan tema Blocksy.
- **Manajemen Plugin:** Mengelola plugin WordPress.
- **Manajemen Formulir:** Mengelola formulir kontak melalui WPForms.

### 3. Sistem Formulir Kontak

Website menggunakan WPForms Lite untuk menyediakan fasilitas komunikasi antara pengunjung dan pemilik website.

Alur formulir kontak:

1. Pengunjung membuka halaman Contact.
2. Pengunjung mengisi nama, alamat email, dan pesan.
3. Pengunjung mengirimkan formulir.
4. Sistem memproses pengiriman formulir.
5. Notifikasi pesan dikirimkan melalui email menggunakan FluentSMTP.

---

## Struktur Folder

Struktur utama proyek WordPress:

```text
literasi/
│
├── wp-admin/
│
├── wp-content/
│   ├── plugins/
│   ├── themes/
│   └── uploads/
│
├── wp-includes/
│
├── db/
│   └── database.sql
│
├── .gitignore
├── wp-config-sample.php
└── README.md
```

### Keterangan

- `wp-admin/` — Halaman administrasi WordPress.
- `wp-content/` — Menyimpan konten website, tema, plugin, dan media.
- `plugins/` — Menyimpan plugin WordPress.
- `themes/` — Menyimpan tema website.
- `uploads/` — Menyimpan gambar dan media yang diunggah.
- `wp-includes/` — Menyimpan file inti WordPress.
- `db/` — Tempat penyimpanan ekspor database.
- `.gitignore` — Mengatur file yang tidak disertakan dalam pelacakan Git.
- `wp-config-sample.php` — Contoh konfigurasi WordPress.
- `README.md` — Dokumentasi proyek.

---

## Database

Website menggunakan MySQL sebagai sistem pengelolaan database.

Database WordPress menyimpan berbagai informasi, antara lain:

- Data pengguna dan administrator.
- Artikel dan halaman website.
- Kategori dan tag.
- Pengaturan website.
- Informasi plugin dan tema.
- Data formulir dan konfigurasi terkait plugin.

File ekspor database proyek direncanakan disimpan pada:

```text
db/database.sql
```

File SQL digunakan untuk membantu proses pemulihan website pada lingkungan lokal.

---

## Cara Instalasi dan Menjalankan Website

### Persyaratan

Pastikan perangkat telah memiliki:

- XAMPP.
- PHP yang kompatibel dengan versi WordPress.
- MySQL atau MariaDB.
- Browser seperti Google Chrome atau Microsoft Edge.
- Visual Studio Code (opsional).

### Langkah 1 — Menyiapkan Project

1. Clone repository atau unduh source code dari GitHub.
2. Letakkan folder proyek di dalam direktori:

```text
C:\xampp\htdocs\
```

3. Pastikan nama folder proyek adalah:

```text
literasi
```

### Langkah 2 — Menjalankan XAMPP

1. Buka XAMPP Control Panel.
2. Jalankan Apache.
3. Jalankan MySQL.

### Langkah 3 — Membuat Database

1. Buka phpMyAdmin melalui:

```text
http://localhost/phpmyadmin
```

2. Buat database sesuai nama database yang digunakan pada konfigurasi proyek.
3. Pilih menu Import.
4. Pilih file:

```text
db/database.sql
```

5. Jalankan proses import.

### Langkah 4 — Mengatur Konfigurasi WordPress

1. Salin file `wp-config-sample.php`.
2. Ubah nama salinannya menjadi `wp-config.php`.
3. Sesuaikan nama database, username, dan password MySQL.
4. Pastikan konfigurasi sesuai dengan lingkungan XAMPP lokal.

File `wp-config.php` merupakan konfigurasi lokal dan tidak disertakan dalam repository.

### Langkah 5 — Menjalankan Website

Buka browser dan akses:

```text
http://localhost/literasi
```

### Langkah 6 — Mengakses Dashboard Administrator

Dashboard administrator dapat diakses melalui:

```text
http://localhost/literasi/wp-admin
```

Gunakan akun administrator WordPress yang telah dibuat pada instalasi proyek.

---

## Keamanan Dasar

Beberapa hal yang diperhatikan dalam pengelolaan proyek:

- **Perlindungan Konfigurasi:** File `wp-config.php` tidak disertakan dalam repository.
- **Git Ignore:** Menggunakan `.gitignore` untuk mengecualikan file konfigurasi sensitif dan file sementara.
- **Contoh Konfigurasi:** Menyediakan `wp-config-sample.php` sebagai contoh konfigurasi.
- **Pengelolaan Media:** Folder uploads tetap disertakan agar gambar website tersedia.
- **Pengelolaan Repository:** Source code dikelola menggunakan Git dan GitHub.
- **Pengelolaan Email:** Pengiriman formulir kontak menggunakan FluentSMTP.

---

## Pengembangan Selanjutnya

Beberapa pengembangan yang dapat dilakukan untuk meningkatkan website:

- Menambahkan artikel literasi digital.
- Mengembangkan tampilan website agar lebih responsif.
- Meningkatkan keamanan formulir kontak.
- Mengoptimalkan performa website.
- Mengembangkan konten edukasi digital.
- Meningkatkan pengelolaan dan dokumentasi database.

---

## Repository

Source code proyek tersedia di GitHub:

**Literasi Digital — WordPress Website**

https://github.com/afifrahmanmaulanaputra08-lab/literasi-wordpress

---

## Lisensi dan Tujuan Penggunaan

Website ini dikembangkan sebagai proyek pembelajaran akademik untuk memenuhi tugas mata kuliah Literasi Digital pada Program Studi Sistem Informasi.

Proyek ini bertujuan menerapkan pemahaman mengenai pengelolaan website menggunakan WordPress, database MySQL, serta penggunaan Git dan GitHub untuk pengelolaan source code.
