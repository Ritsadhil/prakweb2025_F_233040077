<h2>Tambah User Baru</h2>
<form action="/public/User/add" method="POST">
    <label>Nama:</label><br>
    <input type="text" name="name" required><br>
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    <button type="submit">Simpan</button>
    <a href="/public/User">Batal</a>
</form>