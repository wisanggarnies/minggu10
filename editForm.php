<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP MySQL</title>
    </head>
    <body>
        <?php
            include "myconnection.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM student WHERE id=$id";
            $result = mysqli_query($connect,$query);
        ?>
        <form action="editProcess.php" method="get">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> ID : </td>
                    <td> <input type="text" name="myid" value="<?php echo $row['id'];?>" readonly> </td>
                </tr>
                <tr>
                    <td> Nama : </td>
                    <td> <input type="text" name="myname" value="<?php echo $row['name'];?>"> </td>
                </tr>
                <tr>
                    <td> Alamat : </td>
                    <td>
                        <textarea name="myaddress" rows="5" cols="20"><?php echo $row['address'];?>
                    </textarea>
                    </td>
                </tr>
                <tr>
                    <td>Tambah foto</td>
                    <td><input type="file" name="foto" value="<?php echo $row['foto'];?>"></td>
                </tr>
                <tr>
                    <td> <input type="submit" name="save" value="Simpan"> </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </body>
</html>