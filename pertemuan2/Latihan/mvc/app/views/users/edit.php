<h2>Edit Data User</h2>
<form action="/public/User/edit/<?= $data['user']['id']; ?>" method="POST">
    <input type="hidden" name="id" value="<?= $data['user']['id']; ?>">
    <label>Nama:</label><br>
    <input type="text" name="name" value="<?= $data['user']['name']; ?>" required><br>
    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $data['user']['email']; ?>" required><br><br>
    <button type="submit">Update</button>
    <a href="/public/User">Batal</a>
</form>