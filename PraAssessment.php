<?php
    $buku = array(array('Judul'     =>'Sherlock Holmes',
				  		          'Pengarang' =>'Arthur Conan Doyle',
                        'Harga'     =>'50000',
				  	          	'Stok'      =>'20'),
				    array ('Judul'          =>'Arsene Lupin',
				  		  'Pengarang'         =>'Maurice LeBlanc',
				  		  'Harga'             =>'250000',
				  		  'Stok'              =>'50'),
				   array('Judul'            =>'Games Of Throne',
				  		   'Pengarang'        =>'George R.R.Martin',
				  	   	 'Harga'            =>'125000',
				  		   'Stok'             =>'60'),
                );
     
    echo "<table border='1' cellpadding='5'>";
    echo "<thead>
          <th colspan='4'><b>DATA BUKU</b></th>
          </thead>
          <thead>
          <th><b>Judul</b></th>
          <th><b>Pengarang</b></th>
          <th><b>Harga (Rp)</b></th>
          <th><b>Stok</b></th>
          </thead>";
    
    for($x=0;$x<count($buku);$x++){
        echo "<tr>";
        echo "<td>".$buku[$x]['Judul']."</td>";
        echo "<td>".$buku[$x]['Pengarang']."</td>";  
        echo "<td>".$buku[$x]['Harga']."</td>";  
        echo "<td>".$buku[$x]['Stok']."</td>";  
        echo "</tr>";
    }
    echo "</table>";
    echo "<table border=0 cellpadding=8>
          <tr><td></td></tr>   
          </table>";

    $pembeli = array(array('Judul'=>'Sherlock Holmes',
                             'Jumlah'=>5),
                       array('Judul'=>'Arsene Lupin',
                             'Jumlah'=>2),
                       array('Judul'=>'Game Of Throne',
                             'Jumlah'=>4),
                    );
    $total = 0;
    echo "<table border='1' cellpadding='5'>";
    echo "<thead>
          <th colspan='3'><b>DATA PEMBELI</b></th>
          </thead>
          <thead>
          <th><b>Judul</b></th>
          <th><b>Jumlah<b></th>
          <th><b>Harga (Rp)</b></th>
          </thead>";
          
    for($x=0;$x<count($pembeli);$x++){
        echo "<tr>";
        echo "<td>".$pembeli[$x]['Judul']."</td>";
        echo "<td>".$pembeli[$x]['Jumlah']."</td>";
        for($y=0;$y<count($buku);$y++){
            if($pembeli[$x]['Judul']==$buku[$y]['Judul']){
                $Harga = $buku[$y]['Harga']*$pembeli[$x]['Jumlah'];
                break;
            }
        }
        $total = $total + $Harga;
        echo "<td>".$Harga."</td>";  
        ;
    }
    echo "<tr>
          <td colspan='2'><b>Total Harga (Rp)</b></td>
          <td>".$total."</td>
          </tr>";
    echo "</table>";
?>