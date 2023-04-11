<html>

<head>
    <title>Form Input Matakuliah</title>
</head>
<style>
    .error {
        color: red;
        font-size: 11px;
        font-weight: bold;
        text-align: center;
    }
</style>

<body>
    <center>
        <form action="<?= base_url('matakuliah2/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <marquee><?php echo form_error('kode', '<div class="error">', '</div>') ?> </marquee>
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <td colspan="3"> <?php echo form_error('nama', '<div class="error">', '</div>') ?></td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
            <div style="color: red;">
                <?php echo validation_errors() ?>
            </div>
        </form>
    </center>
</body>

</html>