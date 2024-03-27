<form action="#" method="POST">
    <table style="margin: auto; border-spacing: 30px;">
        <tr>
            <th colspan="2" style="padding-top: 20px; text-align: center; background-color: rgb(208, 216, 240);">
                <h2>Form Pembelian</h2>
            </th>
        </tr>
        <tr>
            <td><label>Nama Pelanggan</label> </td>
            <td><input id="name" name="name" placeholder="Masukan Nama Anda" type="text"></td>
          </tr>
          <tr>
            <td><label>Produk Pilihan</label></td>
            <td><select id="produk" name="produk">
                <option value="">--- Pilih Produk ---</option>
                <option value="VGA">VGA</option>
                <option value="CPU">CPU</option>
                <option value="Motherboard">Motherboard</option>
                <option value="Monitor">Monitor</option>
              </select></td>
          </tr>
          <tr>
            <td><label for="jubel">Jumlah Beli :</label> </td>
            <td><input id="jubel" name="jubel" placeholder="Masukan Jumlah Pembelian" type="number"></td>
          </tr>
          <tr>
            <td colspan="2" style="padding-top: 20px; text-align: center; background-color: rgb(208, 216, 240);">
                <h2><button name="proses" type="submit">Submit</button> <button name="reset" type="reset">Batal</button></h2></td>
          </tr>
    </table>
</form>

<?php

    error_reporting(0);
    $pelanggan = $_POST['name'];
    $produk = $_POST['produk'];
    $jubel = $_POST['jubel']; 
    $proses = $_POST['proses'];

    //SWITCH CASE
    switch($produk){
      case 'VGA' : $harsat = 2500000; break;
      case 'CPU' : $harsat = 1500000; break;
      case 'Motherboard' : $harsat = 1000000; break;
      case 'Monitor' : $harsat = 3000000; break;
      default : $harsat = '';
  }

  $totbel = $harsat * $jubel;
  $diskon = ($jubel >= 2) ? 0.15 * $totbel : 0;
  $ppn = ($totbel - $diskon) * 0.11;
  $harsih = $totbel - $diskon + $ppn;

    if(isset($proses)){
?>

  <center>
    <p>Nama Pelanggan : <?=$pelanggan?><br>
    Pilihan Produk : <?=$produk?><br>
    Jumlah Beli : <?=$jubel?><br>
    Harga Satuan : <?=$harsat?><br>
    Total Belanja : <?=$totbel?><br>
    Diskon : <?=$diskon?><br>
    PPN : <?=$ppn?><br>
    Harga Bersih : <?=$harsih?></p>
  </center>

<?php } ?>