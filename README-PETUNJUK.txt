PAKET FILE WEBSITE CI4 - SITI NOVI TRIANA

1. Salin folder app/Controllers/Situs.php ke app/Controllers/.
2. Salin seluruh folder app/Views/ ke app/Views/ project CI4.
3. Salin public/css/style.css ke public/css/.
4. Buat folder public/assets jika belum ada.
5. Salin gambar milikmu ke public/assets/ dengan nama:
   - ana.png
   - background.jpg  (pastikan ejaan nama file sama; boleh ubah CSS jika nama file berbeda)
   Gambar lain seperti login.png, profil.png, dan perhitungan.png dapat disimpan di folder yang sama jika nanti dipakai.
6. Buka app/Config/Routes.php lalu tambahkan isi Routes-snippet.php.
7. Jalankan di terminal:
   php spark serve
8. Buka:
   http://localhost:8080/

LOGIN DEMO:
Username: ana
Password: 12345678

CATATAN MODUL:
Tombol Modul 1, 2, 3, 5, 6, dan 7 sudah memiliki URL CI4 /modul/1, /modul/2, dan seterusnya.
Namun isi folder modul belum disertakan pada kode yang dikirim, sehingga halaman modul saat ini berupa halaman sementara. Isi file modul aslinya perlu dipindahkan/diubah ke View dan Controller CI4 agar berfungsi penuh.

KEAMANAN:
Login masih menggunakan username/password demo sesuai kode UTS, bukan autentikasi database. Jangan gunakan pola ini untuk website yang dipublikasikan.
