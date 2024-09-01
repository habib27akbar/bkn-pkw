<?php

namespace App\Http\Controllers;

use App\Models\KabupatenKota;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function get_provinsi(Request $request)
    {
        $kab_kota = KabupatenKota::where('id_provinsi', $request->id_provinsi)->get();
?>
        <select class="form-control select2" name="id_kabupaten_kota" id="id_kabupaten_kota" required>
            <option value=""></option>
            <?php
            foreach ($kab_kota as $key => $value) {

            ?>
                <option value="<?= $value['id_kabupaten_kota'] ?>"><?= $value['nama_kabupaten_kota'] ?></option>
    <?php

            }
        }
    }
