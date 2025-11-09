<h2>Daftar User</h2>
<a href="/public/User/add">+ Tambah User</a>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($data['users'] as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['email']; ?></td>
            <td>
                <a href="/public/User/detail/<?= $user['id']; ?>">Detail</a> |
                <a href="/public/User/edit/<?= $user['id']; ?>">Edit</a> |
                <a href="/public/User/delete/<?= $user['id']; ?>" onclick="return confirm('Yakin hapus user ini?');">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>