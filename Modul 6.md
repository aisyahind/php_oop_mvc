**Nama: Aisyah Indriani**

**Npm: 2310010223**

**Matkul: Praktikum Web2**

Ketika pengguna membuka URL situs.com/mahasiswa/index, permintaan pertama kali diterima oleh Controller, yaitu MahasiswaController. Controller berfungsi sebagai pengatur alur, sehingga ia memutuskan apa yang harus dilakukan. Controller lalu meminta data ke Model, misalnya MahasiswaModel, karena Model bertanggung jawab melakukan interaksi dengan database. Model mengambil semua data mahasiswa dari tabel di database dan mengembalikan hasilnya kepada Controller. Setelah menerima data lengkap, Controller meneruskannya ke bagian View, misalnya file mahasiswa/index.php. View bertugas menampilkan data tersebut dalam bentuk halaman HTML yang rapi. Terakhir, pengguna melihat tampilan daftar mahasiswa pada browser.

