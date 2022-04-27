<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Edit Panen</h1>
        <form action="/panen/store" method="POST">
            @csrf
            <select class="form-select" name="productID">
                <option value="">Pilih Produck</option>
                <option value="01">Jeruk</option>
                <option value="02">Manggis</option>
            </select><br>
            <select class="form-select" name="id_kelompok_tani">
                <option value="">Pilih KelompokTani</option>
                <option value="AR">AngaraSari</option>
                <option value="SS">SultraSari</option>
            </select><br>
            <div class="mb-3">
                <label for="perkiraanPanenDate" class="form-label">perkiraanPanenDate</label>
                <input type="perkiraanPanenDate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="perkiraanPanenJumlah" class="form-label">perkiraanPanenJumlah</label>
                <textarea class="form-control" name="perkiraanPanenJumlah"  rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="PanenDate" class="form-label">PanenDate</label>
                <input type="PanenDate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="JumblahPanen" class="form-label">JumblahPanen</label>
                <input type="JumblahPanen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <input type="submit" name="submit" class="btn btn-info" value="Simpan">

        </Form>
    </table>

</body>

</html>
