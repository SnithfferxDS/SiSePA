<div class="container-fluid col-lg-6 col-md-6 col-sm-6">
    <H1>Wellcome to the SiSePA Home page.</H1>
    <table class="table table-striped">
        <thead style="background: black; color: white;">
            <tr>
                <th>Fecha</th>
                <th>Asociado</th>
                <th>Monto</th>
                <th>Saldo</th>
                <th>Intereses Ganados</th>
            </tr>
        </thead>
        <tbody>
            <?php for($a = 0; $a < count($data['Asociados']); $a++){?>
            <tr>
            <?php for($b = 0; $b < count($data['Asociados']); $b++){?>
                <td>
                    <? $data['Asociados'][$a][$b];?>
                </td>
            <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>