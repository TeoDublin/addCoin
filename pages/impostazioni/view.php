
<div class="d-flex w-100 py-3">
    <div class="flex-fill flex-column">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php echo _tab('categorie')?'active':'';?>" href="impostazioni.php?tab=categorie&pagination=0" aria-current="page">Categorie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo _tab('stipendio')?'active':'';?>" href="impostazioni.php?tab=stipendio&pagination=0" aria-current="page">Stipendio</a>
            </li>
        </ul>
        <div class="p-1">
            <?php $tab=cookie('tab','categorie'); require "{$tab}/{$tab}.php";?>
        </div>
    </div>
</div>