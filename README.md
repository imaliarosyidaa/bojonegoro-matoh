# 📌 Cara Menjalankan Project Laravel + Vite

## 1. Clone Project
Clone repository ke lokal:  
```bash
git clone https://github.com/username/nama-project.git
cd nama-project
```

## 2. Install Dependencies
Install semua package Laravel via Composer:  
```bash
composer install
```

Install semua package frontend via NPM/Yarn:  
```bash
npm install
# atau
yarn install
```

## 3. Konfigurasi Environment
Salin file `.env.example` menjadi `.env`:  
```bash
cp .env.example .env
```

Generate **APP_KEY**:  
```bash
php artisan key:generate
```

## 4. Setting Database
Edit file `.env` sesuai konfigurasi database lokal kamu, misalnya:  
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

## 5. Migrasi Database
Jalankan migrasi tabel:  
```bash
php artisan migrate
```

Jika ada seeder:  
```bash
php artisan db:seed
php artisan db:seed --class=EventSeeder
```

## 6. Jalankan Server
Untuk backend Laravel:  
```bash
php artisan serve
```

Buka terminal lagi lalu jalankan
Untuk frontend (Vite):  
```bash
npm run dev
```

## 7. Akses Aplikasi
Buka di browser:  
- Laravel backend → [http://127.0.0.1:8000](http://127.0.0.1:8000)  
- Vite frontend (hot reload) → [http://localhost:5173](http://localhost:5173)  

---

✅ Sekarang project Laravel + Vite sudah siap dijalankan di lokal.
