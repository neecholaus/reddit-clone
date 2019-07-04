<?php

    function formatPostVotes($int) {
        return $int > 1000 
            ? number_format($int / 1000, 1, '.', ',') . "K" 
            : $int;
    }