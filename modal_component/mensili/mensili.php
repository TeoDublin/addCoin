<div class="modal bg-dark bg-opacity-50 vh-100" id="<?php echo $_REQUEST['id_modal'];?>" data-bs-backdrop="static" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><h4 class="modal-title">Aggiungi corso</h4>
                <button type="button" class="btn-resize" aria-hidden="true" onclick="resize('#<?php echo $_REQUEST['id_modal'];?>')"></button>
                <button type="button" class="btn-close" onclick="closeModal(this);" aria-label="Close"></button>
            </div>
            <div class="modal-body  overflow-auto flex-grow-1">
                <?php 
                    $result=$_REQUEST['id']?Select('*')->from('sedute')->where("id={$_REQUEST['id']}")->first():[];
                    $corsi = Select('*')
                        ->from('mensili')
                        ->orderby('giorno ASC')
                        ->get();
                ?>
                <div class="p-2">
                    <div class="mb-3 ms-2">
                        <label for="giorno" class="form-label">Giorno</label>
                        <input type="number" class="form-control" name="giorno" value="" onchange="window.modalHandlers['mensili'].changePrezzo(this);"/> 
                    </div>                    
                    <div class="mb-3 ms-2">
                        <label for="id_corso" class="form-label">Corso</label>
                        <select class="form-select" id="id_corso" name="id_corso" value="<?php echo $result['id_corso']??''; ?>" 
                            onchange="window.modalHandlers['mensili'].changecorso(this);"><?php 
                            echo "<option value=\"\" class=\"ps-4  bg-white\" prezzo=\"\" tipo=\"\"></option>";
                            $selected = (isset($result['id_corso']) && $result['id_corso'] == $corso['id']) ? 'selected' : '';
                            echo "<option value=\"{$corso['id']}\" class=\"ps-4 bg-white\" prezzo=\"{$corso['prezzo']}\" tipo=\"{$corso['tipo']}\" $selected>{$corso['corso']}</option>";?>
                        </select>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
                <a href="#" class="btn btn-primary" onclick="window.modalHandlers['corsi'].save(this,'<?php echo $_REQUEST['table'];?>')">Salva</a>
            </div>
        </div>
    </div>
    <?php modal_script('corsi'); ?>
</div>