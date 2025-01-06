<?php 
    function _tab($tab):bool{
        return cookie('tab','tutte')==$tab;
    }