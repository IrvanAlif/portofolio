# 🌐 Website Portofolio - Irvan Alif

Website portofolio pribadi yang bersifat dinamis, dibangun menggunakan PHP, MySQL, Vue.js, dan Bootstrap 5. Data ditampilkan langsung dari database sehingga mudah diperbarui tanpa mengubah kode HTML.

---

## 📸 Tampilan Website

### Halaman Home (Hero Section)
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/c97e7981-4984-4c0d-9970-2e7191510d42" />


---

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/6cd76479-460e-4b5f-9ef9-2dbcfcd62262" />

---

### Skills & Pengalaman
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/b616856a-7f55-4982-b5fd-53b8c1ad00df" />


<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/b801e14b-6e61-4b58-a209-3209c3200a62" />



---

### Halaman Certificates
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/2153adf6-5722-49dd-b878-b1db1fe847c4" />

---

### Tampilan Mobile / Responsif
<img width="352" height="761" alt="image" src="https://github.com/user-attachments/assets/6be85fa0-fa8a-4ecc-b872-7a391f3c7ede" />


---

## 🗂️ Struktur Project

<img width="224" height="499" alt="image" src="https://github.com/user-attachments/assets/1fbcf55f-27f6-484b-9a65-ae59fa82a36f" />


```
portofolio/
├── index.php            # Halaman utama 
├── config/
│   └── koneksi.php      # Konfigurasi koneksi database
├── Style/
│   └── style.css        # Custom CSS styling
├── image/
│   └── alip.jpeg        # Foto profil
└── portofolio.sql       # File database (import ke phpMyAdmin)
```

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Kegunaan |
|---|---|
| PHP | Mengambil data dari database dan mengirimnya ke Vue |
| MySQL | Menyimpan data profil, skills, pengalaman, sertifikat |
| Vue.js 3 | Menampilkan data secara interaktif menggunakan `{{ }}` dan `v-for` |
| Bootstrap 5 | Layout responsif, navbar, card, progress bar |
| Bootstrap Icons | Ikon-ikon pada tampilan |
| Google Fonts (Poppins) | Tipografi |

---

## ⚙️ Cara Instalasi

### 1. Persiapan
- Pastikan **Laragon** sudah terinstall dan berjalan
- Buka **phpMyAdmin** melalui Laragon

### 2. Import Database
1. Buka phpMyAdmin → klik **"New"** → buat database bernama `portofolio`
2. Pilih database `portofolio` → klik tab **"Import"**
3. Pilih file `portofolio.sql` → klik **"Go"**

### 3. Letakkan File Project
Salin seluruh folder project ke:
```
C:\laragon\www\portofolio\
```

### 4. Jalankan Website
Buka browser dan akses:
```
http://localhost/portofolio/
```

---

## 🗄️ Struktur Database

| Tabel | Isi |
|---|---|
| `profil` | Nama, jabatan, bio, lokasi, email, universitas, dll |
| `statistik` | Angka statistik hero (semester, koordinator, sertifikat) |
| `skills` | Nama skill dan persentase progress bar |
| `pengalaman` | Periode, jabatan, organisasi, deskripsi |
| `sertifikat` | Judul, penerbit, tanggal, deskripsi, ID sertifikat |

---

## ✨ Fitur

- **Hero Section** — perkenalan singkat dengan foto dan statistik dinamis
- **About Me** — bio, info pribadi, dan progress bar skills
- **Pengalaman** — kartu riwayat organisasi dan kegiatan
- **Sertifikat** — grid kartu sertifikat dengan warna berbeda
- **Responsif** — tampilan menyesuaikan di semua ukuran layar
- **Navbar** — navigasi tetap di atas (sticky) dengan efek blur

---
