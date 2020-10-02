<?php 
class Mahasiswa_model {
	// private $mhs = [
	// 	[
	// 		"nama" => "Shandika Galih",
	// 		"nrp" => "043040023",
	// 		"email" => "sandhikagalih@unpas.ac.id",
	// 		"jurusan" => "Teknik Informatika",
	// 	],
	// 	[
	// 		"nama" => "Doddy Ferdiansyah",
	// 		"nrp" => "133050321",
	// 		"email" => "doddy@unpas.ac.id",
	// 		"jurusan" => "Teknik Mesin",
	// 	],
	// 	[
	// 		"nama" => "Erik Doank",
	// 		"nrp" => "163030123",
	// 		"email" => "erik@unpas.ac.id",
	// 		"jurusan" => "Teknik Industri",
	// 	],
	// ];
	
	//database handler
	private $dbh;
	private $stmt;

	public function __construct() {
		//data source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc';
		try {
			$this->dbh = new PDO($dsn,'root','');
		} catch (PDOException $e){
			die ($e->getMessage());
		}
	}

	public function getAllMahasiswa () {
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}


?>