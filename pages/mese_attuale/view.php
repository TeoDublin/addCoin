
<div class="d-flex w-100 py-3">
    <div class="flex-fill flex-column">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php echo _tab('tutte')?'active':'';?>" href="mese_attuale.php?tab=tutte&pagination=0" aria-current="page">Tutte le Pendenze</a>
            </li>
            <li class="nav-item">
                <den class="nav-link <?php echo _tab('pendenti')?'active':'';?>" href="mese_attuale.php?tab=pendenti&pagination=0" aria-current="page">Pendenti</den>
            </li>
        </ul>
        <div class="p-1">
            <?php $tab=cookie('tab','tutte'); require "{$tab}/{$tab}.php";?>
        </div>
    </div>
</div>