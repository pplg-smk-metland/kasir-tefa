# Kasir Tefa

Ini adalah repo untuk aplikasi kasir tefa, yang dibuat dengan PHP, jQuery dan Bootstrap.

## Pengembangan

### Menjalankan aplikasi

Untuk pengembangan lokal, harus ada XAMPP terinstal di mesin lokal anda. (disarankan menginstall versi 3.3.0 karena ditemukan bug jika aplikasi dijalankan dengan Control Panel versi lebih baru)

Jika tidak ada XAMPP, anda dapat menggunakan web server bawaan PHP dengan perintah berikut:

```sh
# pertama pastikan anda di dalam folder projek
# asumsikan folder projek berada di direktori home dengan nama kasir-tefa
cd ~/kasir-tefa
php -S localhost:4000
```

Setelah itu, anda dapat menyalin file `.env.example` dan beri nama `.env`. Isi
masing-masing variabel dengan nilai yang sesuai.

Tabel 'Barang' bagian 'Harga_barang' diubah tipe nya, dari Varchar menjadi Int
