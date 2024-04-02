<?php
class Tabel
{
    private $table_name;
    private $conn;
    private $update;
    private $delete;

    public function __construct($host, $user, $pass, $database, $table, $update = "update.php", $delete = "delete.php")
    {
        $this->conn = new mysqli($host, $user, $pass, $database);
        $this->table_name = $table;
        $this->update = $update;
        $this->delete = $delete;
    }

    function executeSql($query)
    {
        $this->conn->query($query);
    }

    function getRow($query)
    {
        $table = $this->conn->query($query);
        return $table->fetch_assoc();
    }

    function showTable()
    {
        $table = $this->conn->query("SELECT * FROM $this->table_name");
        echo "<table border='1'>\n";
        echo "<tr>\n";
        //menampilkan heading
        $heading = $table->fetch_assoc();
        foreach ($heading as $field => $value) {
            echo "<th>" . ucwords($field) . "</th>";
        }
        echo "<th>Manupulasi Data</th>";

        echo "</tr>\n";
        $table->data_seek(0); //mengembalikan record pointer keawal
        //Menampilkan setiap baris data pada tabel
        while ($baris = $table->fetch_assoc()) {
            $baris = array_values($baris);
            echo "<tr>\n";
            foreach ($baris as $isinya) {
                echo "<td>$isinya</td>";
                continue;
            }
            echo "<td>";
            echo "<a href=$this->delete?delete=$baris[0]>Hapus</a>";
            echo "<a href=$this->update?update=$baris[0]>Ubah</a>";
            echo "</tr>\n";
        }
        echo "</table>";
    }
}
