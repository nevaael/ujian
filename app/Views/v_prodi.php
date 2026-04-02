<h3>Data Prodi</h3>

<?php if (!empty($prodi)) { ?>
    <ul>
        <?php foreach ($prodi as $prd) { ?>
            <li><?= $prd['kode_prodi'] . ' ' . $prd['prodi'] ?></li>
        <?php } ?>
    </ul>
<?php } else { ?>
    <p>Data kosong</p>
<?php } ?>