<div class="d-flex flex-row p-2">
    <div class= "xl-w-20 lg-w-20  xxl-w-20 sm-w-100 md-w-100" onclick="add(false);">
        <button type="button" class="btn btn-primary p-2 d-flex flex-row btn-insert w-100 h-100">
            <div class="mx-2"><?php echo icon('cloud-add.svg','white',20,20);?></div>
            <div>Aggiungi</div>
        </button>
    </div>
</div>
<div class="card d-flex w-100 mx-1 mb-2">
    <div class="card-body d-flex w-100 text-center">
        <h3>Totale: <?php echo Select('sum(valore) as sm')->from('view_mensili')->col('sm');?></h3>
    </div>
</div>
<div class="w-100 mx-1">
    <div class="card p">
        <div class="card-body d-flex flex-column">
            <div class="p-2 border my-1" style="border-bottom: 0px!important;border-radius: 10px 10px 0 0;">
                <table class="table table-striped border-0">
                    <thead>
                        <tr class="align-middle">
                            <th scope="col" class="text-center">Titolo</th>
                            <th scope="col" class="text-center">Giorno</th>
                            <th scope="col" class="text-center">Valore</th>
                            <th scope="col" class="text-center" rowspan="2">#</th>
                        </tr>
                    </thead>
                    <tbody><?php
                        $response=Select('*')->from('view_mensili')->get();
                        if(count($response)==0)echo "<div class=\"text-center mt-3\"><h3>Non Trovato</h3></div>";
                        else{
                            foreach ($response  as $row) {?>
                                <tr class="table-row" onclick="editClick(this,<?php echo $row['id'];?>);">
                                    <td scope="col" class="text-center"><?php echo $row['titolo'];?></td>
                                    <td scope="col" class="text-center"><?php echo $row['giorno'];?></td>
                                    <td scope="col" class="text-center"><?php echo $row['valore'];?></td>
                                    <td scope="col" class="text-center action-Elimina" title="Elimina" 
                                        onmouseenter="hoverIconWarning(this)";><?php echo icon('bin.svg');?>
                                    </td>
                                </tr><?php
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php script('pages/mese_attuale/tutte/tutte.js'); ?>