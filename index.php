<!DOCTYPE html>
<html>

<head>
    <title>Toko Mesin Jahit Hidayah</title>
    <style>
        body {
            text-align: center;
        }

        header {
            background-color: darkolivegreen;
            color: greenyellow;
            padding: 50px;
            border-radius: 10px;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        #content {
            margin-top: 50px;
        }

        #photo-column {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .photo {
            flex-basis: calc(33.33% - 10px);
            /* Maksimum 3 foto per baris */
            margin-bottom: 20px;
            border-radius: 10px;
            background-color: blanchedalmond;
            padding: 20px 0px 20px 0px;
        }

        .photo img {
            min-width: 225px;
            height: auto;
        }

        div .photo:hover {
            background-color: aquamarine;
        }

        .photo p {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        h1 {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        footer p {
            font-size: large;
            font-family: cursive;
            border:1px solid;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <h1>Toko Mesin Jahit Hidayah</h1>
        <p>Alamat: Jln. Langenharjo No.48, Jawa Tengah, Kec. Grogol, Kab. Sukoharjo</p>
    </header>

    <!-- Content -->
    <div id="content">
        <div id="welcome-message"></div>
        <div id="photo-column">
            <div class="photo"><img src="assets/mesin_jadul_fix.png" alt="Mesin Jahit Tradisional"><p>Mesin Tradisional</p></div>    
            <div class="photo"><img src="assets/mesin_typical_fix.png" alt="Mesin Jahit Highspeed"><p>Mesin Highspeed</p></div>
            <div class="photo"><img src="assets/mesin_obras_fix.png"alt="Mesin Obras Besar"><p>Mesin Obras Besar</p></div>
            <div class="photo"><img src="assets/mesin_obras_kecil_fix.png" alt="Mesin Obras Kecil"><p>Mesin Obras Kecil</p></div>
            <div class="photo"><img src="assets/overdeck_fix.png" alt="Mesin Overdeck"><p>Mesin Overdeck</p></div>
            <div class="photo"><img src="assets/titik3_fix.png" alt="Dan Lain Lain"></div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Toko Mesin Jahit Hidayah</p>
    </footer>

    <!-- JavaScript -->
    <script type="text/javascript">
        // JavaScript untuk pesan selamat datang yang berulang
        const welcomeMessages = [
            "<h1>Selamat datang di toko mesin jahit kami!</h1>",
            "<h1>Sedia sparepart mesin jahit dan benang kiloan</h1>",
            "<h1>Pilih Kategori dari gambar dibawah</h1>"
        ];

        const welcomeMessageElement = document.getElementById("welcome-message");
        let messageIndex = 0;

        function updateWelcomeMessage() {
            welcomeMessageElement.innerHTML = welcomeMessages[messageIndex];
            messageIndex = (messageIndex + 1) % welcomeMessages.length;
        }

        // Set pesan selamat datang awal
        updateWelcomeMessage();

        // Atur interval untuk mengganti pesan selamat datang setiap 5 detik
        setInterval(updateWelcomeMessage, 1500);
    </script>

</body>

</html>