<?php
include 'koneksiy.php';

// Inisialisasi variabel (biar tidak error)
$id_pegawai     = "";
$nama_pegawai   = "";
$sift_kerja     = "";
$alamat         = "";
$jabatan        = "";
$gaji           = "";


if(isset($_POST['tampilkan'])){
    $id_pegawai = $_POST['id_pegawai'];

    $query = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
    $data = mysqli_fetch_assoc($query);

    if($data){
        $nama_pegawai    = $data['nama_pegawai'];
        $sift_kerja      = $data['sift_kerja'];
        $alamat          = $data['alamat'];
        $jabatan         = $data['jabatan'];
        $gaji            = $data['gaji'];
    } else {
        echo "Data tidak ditemukan!";
    }
}


if(isset($_POST['simpan'])){
    $id_pegawai       = $_POST['id_pegawai'];
    $nama_pegawai     = $_POST['nama_pegawai'];
    $sift_kerja       = $_POST['sift_kerja'];
    $alamat           = $_POST['alamat'];
    $jabatan          = $_POST['jabatan'];
    $gaji             = $_POST['gaji'];

    if($id_pegawai=="" || $nama_pegawai=="" || $sift_kerja=="" || $alamat=="" || $jabatan=="" || $gaji==""){
        echo "Data tidak boleh kosong!";
    } else {

        $simpan = mysqli_query($conn, "INSERT INTO pegawai
        (id_pegawai , nama_pegawai, sift_kerja, alamat, jabatan, gaji)
        VALUES 
        ('$id_pegawai','$nama_pegawai','$sift_kerja','$alamat','$jabatan','$gaji')");

        if($simpan){
            echo "Data berhasil disimpan!";
        } else {
            echo "Gagal simpan: " . mysqli_error($conn);
        }
    }
}


if(isset($_POST['ubah'])){
    $id_pegawai     = $_POST['id_pegawai'];
    $nama_pegawai   = $_POST['nama_pegawai'];
    $sift_kerja     = $_POST['sift_kerja'];
    $alamat         = $_POST['alamat'];
    $jabatan        = $_POST['jabatan'];
    $gaji           = $_POST['gaji'];

    $update = mysqli_query($conn, "UPDATE pegawai SET
        nama_pegawai='$nama_pegawai',
        sift_kerja='$sift_kerja',
        alamat='$alamat',
        jabatan='$jabatan',
        gaji='$gaji'
        WHERE id_pegawai='$id_pegawai'
    ");

    if($update){
        echo "Data berhasil diubah!";
    } else {
        echo "Gagal ubah: " . mysqli_error($conn);
    }
}


if(isset($_POST['hapus'])){
    $id_pegawai = $_POST['id_pegawai'];

    $hapus = mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");

    if($hapus){
        echo "Data berhasil dihapus!";
    } else {
        echo "Gagal hapus: " . mysqli_error($conn);
    }
}
?>

<h1 style= "color:black; font-family: sans; text-align:center">FORM DATA PEGAWAI TOKO ELEKTRONIK </h1>

<h2 style= "color:black; font-family: sans;"> From data pegawai </h2>

<form method="POST">

ID:
<input type="text" name="id_pegawai" value="<?php echo $id_pegawai; ?>" required>
<br><br>

Nama Pegawai:
<input type="text" name="nama_pegawai" value="<?php echo $nama_pegawai; ?>">
<br><br>

Sift Kerja:
<input type="text" name="sift_kerja" value="<?php echo $sift_kerja; ?>">
<br><br>

Alamat:
<input type="text" name="alamat" value="<?php echo $alamat; ?>">
<br><br>

Jabatan:
<input type="text" name="jabatan" value="<?php echo $jabatan; ?>">
<br><br>

Gaji:
<input type="text" name="gaji" value="<?php echo $gaji; ?>">
<br><br>
</select>
<br><br>

<!-- TOMBOL -->
<button type="submit" name="tampilkan" class="btn-tampilkan">
    Tampilkan
</button>

<button type="submit" name="simpan" class="btn-simpan">
    Simpan
</button>

<button type="submit" name="ubah" class="btn-ubah">
    Ubah
</button>

<button type="submit" name="hapus" class="btn-hapus">
    Hapus
</button>
</form>

<hr>

<h2 style= "color:black; font-family: sans;"> Data Pegawai </h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Nama Pegawai</th>
    <th>Sift Kerja</th>
    <th>Alamat</th>
    <th>Jabatan</th>
    <th>Gaji</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM pegawai");

while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $d['id_pegawai']; ?></td>
    <td><?php echo $d['nama_pegawai']; ?></td>
    <td><?php echo $d['sift_kerja']; ?></td>
    <td><?php echo $d['alamat']; ?></td>
    <td><?php echo $d['jabatan']; ?></td>
    <td><?php echo $d['gaji']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>input data pegawai</title>
    <link rel="stylesheet" href="styley.css">
</head>
</html>