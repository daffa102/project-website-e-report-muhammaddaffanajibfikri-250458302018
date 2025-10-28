# 🛰️ Portal Pengaduan Masyarakat - **Sipenmas**

Sistem pengaduan masyarakat modern berbasis **Laravel Livewire** untuk pelayanan publik yang lebih baik.  
Platform ini memungkinkan warga melaporkan masalah di lingkungan mereka secara **online**, **mudah**, **transparan**, dan **terpercaya**.

---

## ✨ Fitur Utama

### 👥 Untuk Warga
- **Form Pengaduan Online** – Interface user-friendly untuk membuat laporan  
- **Upload Dokumen & Foto** – Mendukung multiple file uploads  
- **Tracking Status Real-time** – Pantau progres laporan Anda  
- **Dashboard Pribadi** – Kelola semua pengaduan  
- **Notifikasi Update** – Dapatkan update melalui berbagai channel  

### 🏢 Untuk Admin
- **Dashboard Analytics** – Statistik dan performa pelayanan publik  
- **Manajemen Pengaduan** – Kelola semua laporan masuk  
- **Detail Laporan** – Lihat informasi lengkap setiap laporan  
- **Manajemen Warga** – Kelola data pengguna sistem  
- **Update Status** – Ubah status pengaduan (Pending → Proses → Selesai)

---

## 🎨 UI/UX Features
- **Galaxy Theme** – Desain futuristik bertema kosmik  
- **Responsive Design** – Kompatibel dengan desktop, tablet, dan mobile  
- **Real-time Updates** – Menggunakan Livewire tanpa reload  
- **Modern Interface** – Dibangun dengan Tailwind CSS  

---

## 🛠 Tech Stack
- **Backend:** Laravel 12  
- **Frontend:** Livewire 3.6, Tailwind CSS  
- **Database:** MySQL  
- **Build Tool:** Vite  
- **Authentication:** Laravel Sanctum  
- **Testing:** Pest PHP  

---

## ⚙️ Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/daffa102/project-website-e-report-muhammaddaffanajibfikri-250458302018.git
cd Sistem-Pengaduan-Masyarakat-main
2. Install Dependencies
bash
Copy code
composer install
npm install
3. Environment Setup
bash
Copy code
cp .env.example .env
php artisan key:generate
4. Database Setup
bash
Copy code
php artisan migrate
php artisan db:seed # optional
5. Build Assets
bash
Copy code
npm run build   # untuk production
npm run dev     # untuk development
6. Jalankan Aplikasi
bash
Copy code
php artisan serve
Akses di http://localhost:8000

📖 Penggunaan
🔹 Registrasi & Login
Akses halaman utama

Klik "Masuk" untuk registrasi

Login dengan akun yang telah dibuat

🔹 Untuk Warga
Buat Pengaduan Baru:
“Laporan” → “Buat Laporan” → Isi form → Upload foto → Klik “Simpan”

Pantau Status:
Lihat semua laporan di menu “Laporan”

🔹 Untuk Admin
Dashboard Overview: Lihat statistik & performa pelayanan

Kelola Pengaduan: Update status pengaduan dan detail laporan

🗄 Struktur Database
Tabel users

Kolom	Deskripsi
id	Primary key
name	Nama lengkap
email	Email unik
password	Password hash
timestamps	Waktu pembuatan & update

Tabel laporans

Kolom	Deskripsi
id	Primary key
judul	Judul pengaduan
detail	Deskripsi
tanggal	Tanggal kejadian
foto	Path file
status	pending/proses/selesai
pelapor_id	Foreign key ke users
timestamps	Waktu pembuatan & update

🧪 Testing
bash
Copy code
php artisan test
🤝 Kontribusi
Fork repository

Buat branch baru: git checkout -b feature/AmazingFeature

Commit perubahan: git commit -m 'Add some AmazingFeature'

Push: git push origin feature/AmazingFeature

Buat Pull Request

Guidelines

Ikuti PSR-12 coding standard

Gunakan pesan commit yang jelas

Tambahkan tests & update dokumentasi

📜 License
Distributed under the MIT License.
Lihat file LICENSE untuk detail.

👥 Tim Pengembang
Project Lead / Backend / Frontend / Design:
🧑‍💻 Muhammad Daffa Najib Fikri (250458302018)

📞 Support
✉️ Email: daffanajibfikri@gmail.com

📱 Call Center: 081364794617

💬 Live Chat: Tersedia 24/7 di website

❤️ Acknowledgments
Laravel Framework

Livewire

Tailwind CSS

Heroicons
