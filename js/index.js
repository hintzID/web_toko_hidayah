        // Fungsi untuk animasi mengetik
        function typeWriter(text, i, id) {
            if (i < text.length) {
                document.getElementById(id).innerHTML += text.charAt(i);
                i++;
                setTimeout(function() {
                    typeWriter(text, i, id);
                }, 50); // Ubah kecepatan ketik di sini (dalam milidetik)
            } else {
                // Animasi selesai, hapus teks dan panggil kembali
                setTimeout(function() {
                    document.getElementById(id).innerHTML = '';
                    typeWriter(text, 0, id);
                }, 600); // Delay sebelum mengulang animasi (dalam milidetik)
            }
        }

        // Panggil fungsi mengetik
        typeWriter(" Selamat datang di Toko Kami kami!", 0, "type-it");