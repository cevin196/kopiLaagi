@php
    function harga($data){
        $hasil = strrev(wordwrap(strrev($data) , 3 , '.' , true ));
        return $hasil;
    }
@endphp