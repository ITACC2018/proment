<h1>
    <span class="logo">
        <!-- <?= $this->url->link('K<span>B</span>', 'DashboardController', 'show', array(), false, '', t('Dashboard')) ?> -->
         <a href="/?controller=DashboardController&action=show"><img src="/assets/img/acc.jpg" style="position: absolute;width: 41px;height: 50px;"></img></a>
    </span>
    <span class="title" style="margin-left: 49px;position: absolute;margin-top: 13px;margin-bottom: 100px;color: #f1b60a;">
        <b style="font-weight: bold;">PROMENT</b> - <?php if (! empty($description)): ?> &nbsp;&nbsp;<?php endif ?>
        <?php if (! empty($project) && ! empty($task)): ?>
            <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
        <?php else: ?>
            <?= $this->text->e($title) ?>
        <?php endif ?>
    </span>
    <?php if (! empty($description)): ?>
        <small class="tooltip" title="<?= $this->text->markdownAttribute($description) ?>" style="position: absolute;margin-left: 191px;margin-top: 20px;">
            <i class="fa fa-info-circle"></i>
        </small>
    <?php endif ?>
</h1>
