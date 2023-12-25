<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<h2 class="text-2xl font-semibold text-center mb-6"> Add Contract </h2>
    <form method="post" class="max-w-md mx-auto bg-white p-4 rounded shadow-md">
    <div class="mb-4">
            <label for="company" class="block font-semibold mb-1"> Company </label>
            <select name="company"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                <option value=""> Choose Company</option>
                <?php
                    if (isset($companies) && count($companies) > 0) { 
                        foreach ($companies as $company) { ?>
                        <option value="<?php echo $company['vat_number'] ?>"> <?php echo $company['name'] ?> </option>
                        <?php
                        }

                    }
                 ?>
            </select>
            <?php if (isset($errors['company'])) { ?>
                <span class="text-red-500"><?=$errors['company']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="codeES" class="block font-semibold mb-1"> codeES </label>
            <input type="text" id="codeEs" name="code_es" value="<?=set_value('code_es')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['code_es'])) { ?>
                <span class="text-red-500"><?=$errors['code_es']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="modelNumber" class="block font-semibold mb-1"> Funding Model </label>
            <select name="model_number" id="model-number"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                <option value="">Choose Funding</option>
                <?php
                    if (isset($fundings) && count($fundings) > 0) { 
                        foreach ($fundings as $funding) { ?>
                        <option value="<?=$funding['id']?>"> <?=$funding['model_number']?> </option>
                        <?php
                        }
                    }
                 ?>
            </select>
            <?php if (isset($errors['model_number'])) { ?>
                <span class="text-red-500"><?=$errors['model_number']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="stApp" class="block font-semibold mb-1"> StApp </label>
            <select id="stApp" name="st_app"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                <option value=""> Choose StApp</option>
                <option value="Marigenimil Roma">Marigenimil Roma</option>
                <option value="Marigenimil La Spezia">Marigenimil La Spezia</option>
                <option value="Marigenimil Augusta">Marigenimil Augusta</option>
                <option value="Marigenimil Cagliari">Marigenimil Cagliari</option>
                <option value="Marigenimil Taranto">Marigenimil Taranto</option>
                <option value="Marigenimil Ancona">Marigenimil Ancona</option>
            </select>
            <?php if (isset($errors['st_app'])) { ?>
                <span class="text-red-500"><?=$errors['st_app']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="cig" class="block font-semibold mb-1"> CIG </label>
            <input type="text" id="cig" name="cig" value="<?=set_value('cig')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" />
            <?php if (isset($errors['cig'])) { ?>
                <span class="text-red-500"><?=$errors['cig']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="NrAtto" class="block font-semibold mb-1"> NrAtto </label>
            <input type="text" id="NrAtto" name="nr_atto" value="<?=set_value('nr_atto')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"/>
            <?php if (isset($errors['nr_atto'])) { ?>
                <span class="text-red-500"><?=$errors['nr_atto']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="contractValue" class="block font-semibold mb-1"> Contract Value </label>
            <input type="text" id="contractValue" name="contract_value" value="<?=set_value('contract_value')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['contract_value'])) { ?>
                <span class="text-red-500"><?=$errors['contract_value']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="annualities" class="block font-semibold mb-1"> Annualities </label>
            <input type="text" id="annualities" name="annualities" value="<?=set_value('annualities')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" />
            <?php if (isset($errors['annualities'])) { ?>
                <span class="text-red-500"><?=$errors['annualities']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="installmentYears" class="block font-semibold mb-1"> Installment Years </label>
            <input type="number" id="installmentYears" name="installment_years" value="<?=set_value('installment_years')?>" min="1" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"/>
            <?php if (isset($errors['installment_years'])) { ?>
                <span class="text-red-500"><?=$errors['installment_years']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="sceltaContraente" class="block font-semibold mb-1"> Scelta Contraente </label>
            <select id="sceltaContraente" name="scelta_contraente"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                <option value=""> Choose Scelta Contraente</option>
                <option value="00-DA DEFINIRE">00-DA DEFINIRE</option>
                <option value="01-PROCEDURA APERTA">01-PROCEDURA APERTA</option>
                <option value="02-PROCEDURA RISTRETTA">02-PROCEDURA RISTRETTA</option>
                <option value="03-PROCEDURA NEGOZIATA">03-PROCEDURA NEGOZIATA</option>
                <option value="04-PROCEDURA NEGOZIATA SENZA PREVIA PUBBLICAZIONE">04-PROCEDURA NEGOZIATA SENZA PREVIA PUBBLICAZIONE</option>
                <option value="05-ACCORDO QUADRO">05-ACCORDO QUADRO</option>
                <option value="06-AFFIDAMENTO DIRETTO">06-AFFIDAMENTO DIRETTO</option>
            </select>
            <?php if (isset($errors['scelta_contraente'])) { ?>
                <span class="text-red-500"><?=$errors['scelta_contraente']?></span>
            <?php } ?>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 w-1/2 rounded font-semibold hover:bg-blue-600 focus:outline-none">
                Add Contract
            </button>
        </div>
    </form>
    <script>  
    const amount = document.getElementById('contractValue');
    const elem = new AutoNumeric(amount);    
    </script>
<?= $this->endSection() ?>