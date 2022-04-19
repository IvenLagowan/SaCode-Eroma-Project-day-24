<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data Mahsiswa</h1>
    <form action="post" method="" enctype="multipert/form-daa">

        <table>
            <tr>
                <td>
                    <label for="nama">
                        Name
                    </label>
                </td>
                <td>

                    :
                    <input type="text" name="name" id="name" require>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jnskelamin">
                        jenis kelamin
                    </label>
                </td>
                <td>
                    :
                    <input type="radio" name="jns_kelamin" id="jenisKelamin" value="laki-laki" require>Laki-Laki
                    <input type="radio" name="jns_kelamin" id="jenisKelamin" value="Perempuan" require>Perempuan
                </td>
            </tr>
            <tr>
                <td>
                    <label for="agama">
                        Agama
                    </label>
                </td>
                <td>
                    :
                    <section name="agama" id="agama">
                        <option>Pilih Agama</option>
                        <opigroup label="Agama"></opigroup>
                        <option value="Kristen">Kristen</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                    </section>
                </td>
            </tr>
            </tr>
            <td>
                <table for="alamat">Alamat</table>
            </td>
            <td>
                :
                <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
            </td>
            <tr>
                <td>
                    <label for="telpon">Telpon</label>
                </td>
                <td>
                    :
                    <input type="text" name="telpon" id="telpon" require>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="hoby">Hoby</label>
                </td>
                <td>
                    :
                    <input type="checkbox" name="hoby[]" id="hoby" value="Olah raga" require>Olah raga
                    <input type="checkbox" name="hoby[]" id="hoby" value="Membaca" require>Membaca
                    <input type="checkbox" name="hoby[]" id="hoby" value="Main musik" require>Main musik
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">Jurusan</label>
                </td>
                <td>
                    :
                    <section name="jurusan" id="jurusan"></section>
                    <option>Pilih Jurusan</option>
                    <optgroup label="Diploma"></optgroup>
                    <option>S1 - Sistem informasi</option>
                    <option>S1 Teknik Informatika</option>
                    <option>S1 Universitas sains dan teknologi jayapuara</option>

                </td>
            </tr>
            <tr>
                <td>
                    <label for="bidangminat">Bidang Minat</label>
                </td>
                <td>
                    :
                    <input type="checkbox" name="bdg_minat" id="bidangminat" value="Programan" require>Programan
                    <input type="checkbox" name="bdg_minat" id="bidangminat" value="Design web" require>Design web
                    <input type="checkbox" name="bdg_minat" id="bidangminat" value="Teknologi & komputer"
                        require>Teknologi & komputer
                </td>
            </tr>
            <tr>
                <td>
                    <label for="foto">
                        foto
                    </label>
                </td>
                <td>
                    :
                    <input type="file" name="foto" id="foto" require>Foto
                </td>
            </tr>
        </table>
    </form>


</body>

</html>