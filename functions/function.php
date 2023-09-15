<?php
    require "connection.php";

    class System {
        public function genelsorgu($vt, $sql, $tercih) {
            $sor = $vt->prepare($sql);
            $sor->execute();
            if ($tercih == 1):
                return $sonuc = $sor->get_result();
            endif;
        }


    }
  