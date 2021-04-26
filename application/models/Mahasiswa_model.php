<?PHP

class Mahasiswa_model extends CI_Model {

public $nama;
public $gender;
public $usia;
public $alamat;

public function get_last_five_entries()
{
        $query = $this->db->get('mahasiswas', 5);
        return $query->result();
}

public function insert_entry()
{
        $this->nama    = $_POST['nama'];
        $this->gender  = $_POST['gender'];
        $this->usia    = $_POST['usia'];
        $this->alamat  = $_POST['alamat'];

        $this->db->insert('entries', $this);
}

public function update_entry()
{
        $this->nama    = $_POST['nama'];
        $this->gender  = $_POST['gender'];
        $this->usia    = $_POST['usia'];
        $this->alamat  = $_POST['alamat'];

        $this->db->update('entries', $this, array('id' => $_POST['id']));
}

}