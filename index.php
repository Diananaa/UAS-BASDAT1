<?php
    $result=mysqli_query(mysqli_connect("localhost","root","","dbc118076"),"select * from album") 
    //untuk memilih table yang ingin ditampilkan
?>

<html>
    <head>
        <title>UAS BASIS DATA - DBC 118 076 DIANA</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="../DBC118076/bootstrap.js"></script>
    </head>
    <body>
    
    <div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <!-- navbar -->
                <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                <img src="../DBC118076/Sampul/navbar.jpg" width="10%" height="10%">
                    Daftar Album
                </a>
                </nav>
            <!-- akhir navbar -->
        </div>    
    </div>
    <div class="row">
    <div class="col1 col-8 col-md-8"> <br>
    <table class="table table-striped">
            <thead>
                <tr align="center">
                    <td width ="30%"> <b>Sampul</b> </td>
                    <td width ="250px"><b>keterangan</b></td>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row=mysqli_fetch_assoc($result)): 
                ?>
                <tr>
                    <td align="center">
                    <?= '<img src="data:image/jpeg;base64,'.base64_encode($row['sampul']).'" height="100" width="100" />'; ?>
                    </td>
                    <td>
                        Kode_album : <?= $row["Kode_album"]; ?><br>
                        judul : <?= $row["judul"]; ?><br>
                        penyanyi : <?= $row["penyanyi"]; ?><br>
                        harga : <?= $row["harga"]; ?><br>
                        stok : <?= $row["stok"]; ?> <br>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>      
        </table>  
    </div>
    <div class="col2 class=col-4 col-md-4">
   <center> 
       <h3>About Me</h3> <br>
       <img src="../DBC118076/Sampul/me.png" width="50%" class="rounded-circle" alt="Cinque Terre"> <br> <br><br> 
        <h3>Diana</h3>
        <h3>DBC118076</h3>
    </center> <br>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Source Code</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th><a href="https://github.com/Diananaa/UAS-BASDAT1"><img src="../DBC118076/Sampul/github.png" width="10%"></a> GITHUB : Diananaa</th>
                </tr>
                <tr>
                    <th><a href="https://gitlab.com/Diananaa/uas_basdat1"><img src="../DBC118076/Sampul/gitlab.png" width="10%"></a> GITLAB : Diananaa</th>
                </tr>
            </tbody>
        </table>
        
    </div>
    </div>
    </div>  
    </body>
</html>
