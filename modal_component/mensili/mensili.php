<div class="modal bg-dark bg-opacity-50 vh-100" id="<?php echo $_REQUEST['id_modal'];?>" data-bs-backdrop="static" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><h4 class="modal-title">Aggiungi</h4>
                <button type="button" class="btn-resize" aria-hidden="true" onclick="resize('#<?php echo $_REQUEST['id_modal'];?>')"></button>
                <button type="button" class="btn-close" onclick="closeModal(this);" aria-label="Close"></button>
            </div>
            <div class="modal-body  overflow-auto flex-grow-1">
                <?php 
                    $result=$_REQUEST['id']?Select('*')->from('mensili')->where("id={$_REQUEST['id']}")->first():[];
                    $categorie = Select('*')
                        ->from('categorie')
                        ->orderby('categoria ASC')
                        ->get();
                ?>
                <div class="p-2">
                    <input type="number" class="form-control" name="id" value="<?php echo $result['id']??''; ?>" hidden/> 
                    <div class="mb-3 ms-2">
                        <label for="giorno" class="form-label">Giorno</label>
                        <input type="number" class="form-control" name="giorno" value="<?php echo $result['giorno']??''; ?>"/> 
                    </div>
                    <div class="mb-3 ms-2">
                        <label for="id_categoria" class="form-label">Categoria</label>
                        <select class="form-select" name="id_categoria" value="<?php echo $result['id_categoria']??''; ?>" 
                            onchange="window.modalHandlers['mensili'].changecorso(this);"><?php 
                            foreach ($categorie as $categoria) {
                                $selected = (isset($result['id_categoria']) && $result['id_categoria'] == $categoria['id']) ? 'selected' : '';
                                echo "<option value=\"{$categoria['id']}\" class=\"ps-4 bg-white\" $selected>{$categoria['categoria']}</option>";
                            }?>
                        </select>
                    </div>
                    <div class="mb-3 ms-2">
                        <label for="titolo" class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="titolo" value="<?php echo $result['titolo']??''; ?>"/> 
                    </div>
                    <div class="mb-3 ms-2">
                        <label for="valore" class="form-label">Valore</label>
                        <input type="number" class="form-control" name="valore" value="<?php echo $result['valore']??''; ?>"/> 
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary" onclick="window.modalHandlers['mensili'].save(this,'<?php echo $_REQUEST['table'];?>')">Salva</a>
            </div>
        </div>
    </div>
    <?php modal_script('mensili'); ?>
</div>