<?
mysql_connect("localhost","root",""); //koneksi [cite: 46]
mysql_select_db("lat_dbase"); // mengaktifkan database [cite: 47]
//membuat tabel [cite: 48]
$sql = "CREATE TABLE tbl_mhs 
(
mhsID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(mhsID),
FirstName varchar(15),
LastName varchar(15),
Age int
)"; [cite: 49, 50, 51, 52, 53, 54, 55, 56]
mysql_query($sql); [cite: 57]
// input data [cite: 58]
$input=mysql_query("insert into tbl_mhs(FirstName,LastName,Age) values('Anjar','Prabowo',25)"); [cite: 59]
?>