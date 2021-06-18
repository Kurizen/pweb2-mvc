<?php 

class Keluarga_model {
    private $table = 'daftar_keluarga';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKeluarga()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKeluargaById($no_KK)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no_KK=:no_KK');
        $this->db->bind('no_KK', $no_KK);
        return $this->db->single();
    }

    public function tambahDataKeluarga($data)
    {
        $query = "INSERT INTO daftar_keluarga
                    VALUES
                  (:no_KK, :Nama_Kepala, :Anggota_Keluarga, :Alamat, :no_tlp, :Pekerjaan, :Penghasilan)";
        
        $this->db->query($query);
        $this->db->bind('no_KK', htmlspecialchars($data['no_KK']));
        $this->db->bind('Nama_Kepala', htmlspecialchars($data['Nama_Kepala']));
        $this->db->bind('Anggota_Keluarga', htmlspecialchars($data['Anggota_Keluarga']));
        $this->db->bind('Alamat', htmlspecialchars($data['Alamat']));
        $this->db->bind('no_tlp', htmlspecialchars($data['no_tlp']));
        $this->db->bind('Pekerjaan', htmlspecialchars($data['Pekerjaan']));
        $this->db->bind('Penghasilan', htmlspecialchars($data['Penghasilan']));

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKeluarga($no_KK)
    {
        $query = "DELETE FROM daftar_keluarga WHERE no_KK = :no_KK";
        
        $this->db->query($query);
        $this->db->bind('no_KK', $no_KK);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataKeluarga($data)
    {
        $query = "UPDATE daftar_keluarga SET
                    no_KK = :no_KK,
                    Nama_Kepala = :Nama_Kepala,
                    Anggota_Keluarga = :Anggota_Keluarga,
                    Alamat = :Alamat,
                    no_tlp = :no_tlp,
                    Pekerjaan = :Pekerjaan,
                    Penghasilan = :Penghasilan
                  WHERE no_KK = :no_KK";
        
        $this->db->query($query);
        $this->db->bind('no_KK', htmlspecialchars($data['no_KK']));
        $this->db->bind('Nama_Kepala', htmlspecialchars($data['Nama_Kepala']));
        $this->db->bind('Anggota_Keluarga', htmlspecialchars($data['Anggota_Keluarga']));
        $this->db->bind('Alamat', htmlspecialchars($data['Alamat']));
        $this->db->bind('no_tlp', htmlspecialchars($data['no_tlp']));
        $this->db->bind('Pekerjaan', htmlspecialchars($data['Pekerjaan']));
        $this->db->bind('Penghasilan', htmlspecialchars($data['Penghasilan']));


        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataKeluarga()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM daftar_keluarga WHERE Nama_Kepala LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}