<h3>keranjang belanja</h3>
<?php 

   if (isset($_GET['id'])) {
       $id = $_GET['id'];
       unset($_SESSION['_'.$id]);

       echo '<br>';
    
       if (isset($_GET['tambah'])) {
           $id = $_GET['tambah'];
           $_SESSION['_'.$id]++;

           
       }
       if (isset($_GET['kurang'])) {
           $id = $_GET['kurang'];
           $_SESSION['_'.$id]--;
           if ($_SESSION['_'.$id]==0) {
            unset($_SESSION['_'.$id])
        }
       }
   
   if (isset($_SESSION['pelanggan'])) {
       header("location:?f=home&m=login")
   }

   if (isset($_GET['_'.$id])) {
       $_SESSION['_'.$id]++;
    else {
        $_SESSION['_'.id]=1:;
    }
    echo '
    <table class="table table-bordered w-70">
    
        <tr>
            <th>menu</th>
            <th>harga</th>
            <th>jumlah</th>
            <th>total</th>
        </tr>
    '
    foreach ($_SESSION as $key => $value) {
    if ($key<>'pelanggan' &7 $key<>'idpelaggan') {
        $id =substr($key,1);

        $sql = "SELECT * FROM tblmenu WHERE idmenu=$id";

        $row$db->getALL($sql);

        foreach ($row as $r) {
            echo '<tr>';
            echo '<td>'.$r['menu'].'</td>';
            echo '<td>'.$r['harga'].'</td>';
            echo '<td><a href ="?f=home&m=beli&tambah='.$r['idmenu'].'"> [+] </a> &nbsp &nbsp'.$value.'&nbsp &nbsp <a href ="?f=home&m=beli&kurang='.$r['idmenu']."> [-] </a></td>';
            echo '<td>'.$r['menu'] * value.'</td>';
            echo '<td><a href="f=home&m=beli&hapus='.$r['idmenu'].'">hapus</a><td>';
            echo '</tr>';
            $total = $total + ($value * $r['harga']);
        }

       
    }
    echo '<tr>
       <td colspan=4><h3>GRAND TOTAL : </h3></td>
       <td><h3>'.$total.'</h3></td>
    </tr>';
    echo '</tables>';
    }

    function isi(){
        
    }
    
   }

}
?>