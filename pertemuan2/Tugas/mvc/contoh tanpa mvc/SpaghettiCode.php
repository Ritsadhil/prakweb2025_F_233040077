<?php
$host = 'localhost';
$dbname = 'mydb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}

function getAllUsers($pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserById($pdo, $id)
{
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $user = getUserById($pdo, $_GET['id']);
    $show_detail = true;
} else {
    $users = getAllUsers($pdo);
    $show_detail = false;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $show_detail ? "Profil Pengguna" : "Daftar Pengguna" ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <?php if ($show_detail): ?>
            <!-- Tampilkan detail pengguna -->
            <h1>Selamat datang, <?= htmlspecialchars($user['name']) ?></h1>
            <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
            <a href="SpaghettiCode.php">Kembali ke Daftar Pengguna</a>

        <?php else: ?>
            <!-- Tampilkan daftar pengguna -->
            <h1>Daftar Pengguna</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['id']) ?></td>
                            <td><?= htmlspecialchars($user['name']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td><a href="SpaghettiCode.php?id=<?= $user['id'] ?>">Lihat Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>

</html>