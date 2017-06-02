<table border="1px">
    <tr>
        <td>Nomor kain</td>
        <td>Nama Kain</td>
        <td>Jumlah (meter)</td>
        <td>Harga Per Meter</td>
        <td>Gambar</td>
    </tr>
<?php foreach($katalog as $k){ ?>
    <tr>
        <td><?=$k->nomor?></td>
        <td><?=$k->namakain?></td>
        <td><?=$k->jumlah?></td>
        <td><?=$k->harga?></td>
        <td><img width='100px' height="100px" src='<?=base_url().$k->gambar?>'></td>
    
        <td><a href=<?php echo base_url()."index.php/admin/delete/".$k->idk?>><input type="button" value="HAPUS"></a></td>
    
    
        <td><a href=<?php echo base_url()."index.php/admin/update/".$k->idk?>><input type="button" value="UPDATE"></a></td>
    
    
        <td><a href=<?php echo base_url()."index.php/admin/upload_view"?>><input type="button" value="TAMBAH"></a></td>
    </tr>
            <?php } ?>
    
</table>