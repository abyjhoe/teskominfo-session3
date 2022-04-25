<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pasar Senggol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,700;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('vendor/'); ?>style.css">
</head>

<body>
    <div class="container">
        <div class="row content-header">
            <h1>Pasar Senggol</h1>
        </div>
        <div class="row content-breadcrumb">
            Home > Pendaftaran
        </div>
        <div class="row content-body">
            <h3>Pendaftaran Pasar Senggol</h3>
            <p>
                Lengkapi formulir berikut untuk melakukan pendaftaran.<br />
                Isian bertanda (<span class="text-danger">*</span>) harus diisi, tidak boleh kosong.
            </p>

            <form name="daftar">
                <div class="mb-3">
                    <label for="input-nik" class="form-label">Nomor Induk Kependudukan (NIK) <span class="text-danger">*</span></label>
                    <input type="number" pattern="[0-9\.\-]*" min="1000000000000000" max="9999999999999999" class="form-control" id="input-nik" name="nik" placeholder="Masukkan Nomor Induk Kependudukan">
                    <div class="small">
                        Isi dengan 16 angka Nomor Induk Kependudukan yang tertera pada KTP.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="input-nama" class="form-label">Nama lengkap <span class="text-danger">*</span></label>
                    <input type="" class="form-control" id="input-nama" name="nama" placeholder="Masukkan Nama Lengkap">
                    <div class="small">
                        Isi dengan nama lengkap sesuai yang tertera pada KTP.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="input-alamat" class="form-label">Alamat lengkap <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="4" id="input-alamat" name="alamat" placeholder="Masukkan Alamat Lengkap"></textarea>
                    <div class="small">
                        Isi dengan alamat lengkap sesuai yang tertera pada KTP.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="input-surel" class="form-label">Alamat surat elektronik</label>
                    <input type="email" class="form-control" id="input-surel" name="surel" placeholder="name@example.com">
                    <div class="small">
                        Isi dengan alamat surat elektronik pendaftar, contoh:<br /><code>nama_anda@contoh.com</code> <br />
                        Isian ini bisa dikosongkan kalau tidak ada.
                    </div>
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="checkbox" name="setuju" id="input-setuju">
                    <label class="form-check-label" for="input-setuju">
                        Saya setuju dengan persyaratan yang telah ditetapkan oleh Pemerintah Kota Kotamobagu. <span class="text-danger">*</span>
                    </label>
                    <div>
                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#modal-sk">Lihat Syarat dan Ketentuan</button>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </form>
        </div>
        <div class="row content-footer">
            Copyright &copy; 2022 | Pemerintah Kota Kotamobagu<br />
            Build with ❤️
        </div>
    </div>
    <div class="">
        <div class="modal" id="modal-sk">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Syarat dan Ketentuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>Pendaftaran akan dibuka selama jatah kios/lapak masih tersedia.
                                Ketika jatah sudah habis, pendaftaran otomatis akan ditutup.</li>
                            <li>Satu NIK hanya bisa digunakan untuk satu kali pendaftaran.</li>
                            <li>Lokasi kios/lapak akan ditentukan kemudian oleh Panitia.</li>
                            <li>Pendaftar akan diverifikasi oleh Panitia berdasarkan NIK KTP.</li>
                            <li>Pendaftar yang tidak terverifikasi akan dibatalkan oleh Panitia.</li>
                            <li>Keputusan Panitia tidak bisa diganggugugat.</li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Saya sudah membaca dan mengerti!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 start-50 translate-middle-x p-3" style="z-index: 11">
        <div id="toast-pesan" class="toast align-items-center text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">Test toast</div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Tutup"></button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url('vendor/'); ?>script.js"></script>
</body>

</html>