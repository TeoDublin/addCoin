<div class="d-flex flex-row p-2">
    <div class= "xl-w-20 lg-w-20  xxl-w-20 sm-w-100 md-w-100" onclick="add(false);">
        <button type="button" class="btn btn-primary p-2 d-flex flex-row btn-insert w-100 h-100">
            <div class="mx-2"><?php echo icon('cloud-add.svg','white',20,20);?></div>
            <div>Aggiungi</div>
        </button>
    </div>
</div>
<div class="w-100 mx-1" id="search_table"></div>
<?php script('pages/impostazioni/categorie/categorie.js'); ?>