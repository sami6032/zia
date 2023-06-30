<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <main>
        <div class="link_container">
            <a class="link" href="ajouter.php"> ajouter un utilisateur</a>
        </div>
        <table>
            <thead>

            <?php
                include_once "../connexion.php";
                //liste des utilisateurs
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0 ){
                //afficher les utilisateurs
                }
            ?>
                <tr>
                    <th>nom</th>
                    <th>email</th>
                    <th>modifier</th>
                    <th>supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                
                ?>

                <tr>
                    <td><?=$row['nom'] ?></td>
                    <td><?=$row['email'] ?></td>
                    <td class="image"><a href="modifier.php?id=<?=$row['Id'] ?>"> <img width=10px src="images/" alt=""></a></td>
                    <td class="image"><a href="modifier.php?id=<?=$row['Id'] ?>"> <img width=10px src="image/img1.jp" alt=""></a></td>
                </tr>
                <?php
                }
            }
            else{
                echo "<p class='message'>0 utilisateur présent !</p>";
            }
            ?>

            </tbody>

        </table>
    </main>
</body>
</html>