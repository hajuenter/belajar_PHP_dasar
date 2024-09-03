<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="flex justify-center min-h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-2xl font-bold mb-6">Menentukan bilangan Ganjil dan Genap</h1>
        <form action="" method="post" class="space-y-4 border border-black">
            <div>
                <label for="awal" class="block">Batas awal</label>
                <input type="number" name="awal" required class="border border-black p-2 w-full">
            </div>
            <div>
                <label for="akhir" class="block">Batas akhir</label>
                <input type="number" name="akhir" required class="border border-black p-2 w-full">
            </div>
            <button type="submit" class="flex p-2 px-12 bg-blue-600 text-white rounded mx-auto">Mulai</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $awalinput = isset($_POST['awal']) ? intval($_POST['awal']) : 0;
            //$_POST adalah array superglobal di php yang berfungsi menyimpan data post dari html
            //isset digunakan memeriksa apakah awal ada di array post
            //? operasi ternary if else
            //intvl untuk mengubah nilai menjadi integer
            $akhirinput = isset($_POST['akhir']) ? intval($_POST['akhir']) : 0;

            function validasi_ganjil_genap($awal, $akhir)
            {
                if ($awal > $akhir) {
                    echo "<p class='mt-4 text-red-600'>Batas awal harus lebih kecil dari batas akhir.</p>";
                } else {
                    echo "<h2 class='mt-6 text-xl font-semibold'>Bilangan Ganjil dan Genap dari $awal sampai $akhir adalah :</h2>";
                    echo "<div class='mt-4 text-center'>";

                    for ($i = $awal; $i <= $akhir; $i++) {
                        if ($i % 2 == 0) {
                            echo "<p>$i adalah bilangan genap.</p>";
                        } else {
                            echo "<p>$i adalah bilangan ganjil.</p>";
                        }
                    }
                    echo "</div>";
                }
            }

            // Memanggil fungsi dengan variabel yang telah di-set
            validasi_ganjil_genap($awalinput, $akhirinput);
        }
        ?>

    </div>
</body>

</html>