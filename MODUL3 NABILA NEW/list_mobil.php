<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
            <table class="table" table-bordered>
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mobil</th>
                <th>Brand</th>
                <th>Warna</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
        $query = mysqli_query($connect, "SELECT * FROM showroom_mobil");
            
            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            while($select = mysqli_fetch_assoc($query)) {
                ?>
    
                        <tbody>
                            <tr>
                                <th scope="row"><?= $select['id']?></th>
                                <td><?= $select['nama_mobil']?></td>
                                <td><?= $select['brand_mobil']?></td>
                                <td><?= $select['warna_mobil']?></td>
                                <td><?= $select['tipe_mobil']?></td>
                                <td><?= $select['harga_mobil']?></td>
                                <td>
                                    <a href="form_detail_mobil.php?id=<?php echo $select['id']; ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                        
                  
                        <?php
                    }   

            
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>