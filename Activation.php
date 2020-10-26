<?php
namespace Core\Data;

class Activation {
    public $STB_No = null;
    public $Name = null;
    public $Email = null;
    public $Mobile_no = null;
    public $Address = null;
    public $Pincode = null;
    public $Adhar_no = null;

    private $table_name = null;
    private $conn = null;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->table_name = TABLE;
    }

    public function getRecords() {
        $sql = "SELECT * FROM {$this->table_name} ";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public function insert() {
        $sql = "insert into registrations(STB_No,Name,Mobile_no,Email,Address,Pincode,Adhar_no) values(?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1,$this->STB_No);
        $stmt->bindParam(2,$this->Name);
        $stmt->bindParam(3,$this->Mobile_no);
        $stmt->bindParam(4,$this->Email);
        $stmt->bindParam(5,$this->Address);
        $stmt->bindParam(6,$this->Pincode);
        $stmt->bindParam(7,$this->Adhar_no);

        $stmt->execute();
        
        return $stmt->rowCount();
    }

    

    function delete() {
        $sql = "DELETE FROM {$this->table_name} WHERE STB_No = ?";
        $stmt = $this->conn->prepare($sql);
        $this->STB_No = \htmlspecialchars($this->STB_No);
        $stmt->bindParam(1,$this->STB_No);
        $stmt->execute();
        return $stmt->rowCount();
    }



}
?>