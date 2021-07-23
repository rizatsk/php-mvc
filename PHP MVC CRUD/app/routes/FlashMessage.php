<?php 

class FlashMessage
{
    public static function setFlash($svg,$pesan,$aksi,$tipe)
    {
        $_SESSION['flash'] = [
            'svg' => $svg,
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if ( isset($_SESSION['flash']) ){
            echo '<div class="alert alert-'. $_SESSION['flash']['tipe'] .' alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" ><use xlink:href="#'.$_SESSION['flash']['svg'].'"/></svg>
            Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

          unset($_SESSION['flash']);
        }
    }
}