 <?php
    /**
     * Kelas Mahasiswa (Blueprint Objek Mahasiswa)
     * Modul 1: Konsep Dasar Class & Object
     */
    class Mahasiswa
    {
        // Properti (Attributes) - Data yang dimiliki objek
        public $nama;
        public $nim;

        /**
         * Konstruktor: Otomatis dipanggil saat objek dibuat (Instansiasi).
         * Digunakan untuk menginisialisasi properti objek.
         * @param string $nama Nama mahasiswa
         * @param string $nim NIM mahasiswa
         */
        public function __construct($nama, $nim)
        {
            // Menggunakan $this untuk mengisi properti kelas
            $this->nama = $nama;
            $this->nim = $nim;
            echo "--> Objek **{$this->nama}** berhasil dibuat (Konstruktor berjalan).<br>";
        }

        /*** 🔐 Setter (Mutator) untuk properti NIM.
         * Tempat logik validasi data diletakkan.
         */
        public function setNim($nim)
        {
            // Validasi Sederhana: NIM harus memiliki panjang 7
            if (strlen($nim) === 7) {
                $this->nim = $nim;
                return true;
            } else {
                echo "<span style='color: red;'>[ERROR ENKAPSULASI] NIM '{$nim}' tidak valid (Harus 7 
digit). NIM tidak diubah.</span><br>";
                return false;
            }
        }
        /**
         * 🔓 Getter (Accessor) untuk properti NIM.
         * Mengambil nilai properti privat.
         */
        public function getNim()
        {
            return $this->nim;
        }

        /**
         * Metode (Method) - Perilaku yang dapat dilakukan objek
         * Menampilkan salam sapaan.
         */
        public function sayHello()
        {
            // Menggunakan variabel internal kelas
            echo "Halo, saya adalah Mahasiswa " . $this->nama . ".<br>";
            echo "NIM saya adalah " . $this->nim . ". Selamat datang di dunia OOP!";
        }
        /**
         * Destruktor: Otomatis dipanggil saat objek dihapus dari memori atau skrip selesai.
         */
        public function __destruct()
        {
            echo "--> Objek **{$this->nama}** telah dihancurkan (Dest   ruktor berjalan).<br>";
        }
    }
