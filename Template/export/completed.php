<?= $this->render('export/header', array('project' => $project, 'title' => $title)) ?>

<p class="alert alert-info"><?= t('This report contains all tasks information for the given date range.') ?></p>

<form class="js-modal-ignore-form" method="post" action="<?= $this->url->href('ExportController', 'completed', array('project_id' => $project['id'], 'plugin' => 'exportCompleted')) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>
    <?= $this->form->hidden('project_id', $values) ?>
    <?= $this->form->date(t('Start date'), 'from', $values) ?>
    <?= $this->form->date(('Data de finalização'), 'to', $values) ?>

    <div class="form-actions">
        <button type="submit" class="btn btn-blue js-form-export"><?= t('Export') ?></button>
        <?= t('or') ?>
        <?= $this->url->link(t('cancel'), 'ExportController', 'completed', array('project_id' => $project['id'], 'plugin' => 'exportCompleted'), false, 'js-modal-close') ?>
    </div>
</form>
