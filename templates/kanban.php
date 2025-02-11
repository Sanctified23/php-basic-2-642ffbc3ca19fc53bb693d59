<div class="content-wrapper kanban">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Назва проекту</h1>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Назва проекту</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <a type="button" href="#" class="btn btn-secondary active">Усі завдання</a>
                            <a type="button" href="#" class="btn btn-default">Порядок денний</a>
                            <a type="button" href="#" class="btn btn-default">Завтра</a>
                            <a type="button" href="#" class="btn btn-default">Прострочені</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content pb-3">
        <div class="container-fluid h-100">
            <div class="card card-row card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        Беклог
                    </h3>
                </div>
                <div class="card-body connectedSortable" data-status="backlog">
                    <?php foreach ($info as $key => $item): ?>
                        <?php if($item['status'] === 'backlog'):?>
                            <div class="card card-info card-outline" data-task-id="1">
                                <div class="card-header">
                                    <h5 class="card-title"><?=htmlspecialchars($item['category'])?></h5>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-link">#3</a>
                                        <a href="#" class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <?=htmlspecialchars($item['task'])?>
                                    </p>
                                    <a href="#" class="btn btn-tool">
                                        <i class="fas fa-file"></i>
                                    </a>
                                    <?=date_calculating(htmlspecialchars($item['date']))?>
                                </div>
                            </div>
                        <?php endif?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="card card-row card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        Зробити
                    </h3>
                </div>
                <div class="card-body connectedSortable" data-status="to-do">
                    <?php foreach ($info as $key => $item): ?>
                        <?php if($item['status'] === 'to-do'):?>
                            <div class="card card-info card-outline" data-task-id="1">
                                <div class="card-header">
                                    <h5 class="card-title"><?=htmlspecialchars($item['category'])?></h5>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-link">#3</a>
                                        <a href="#" class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <?=htmlspecialchars($item['task'])?>
                                    </p>
                                    <a href="#" class="btn btn-tool">
                                        <i class="fas fa-file"></i>
                                    </a>
                                    <?=date_calculating(htmlspecialchars($item['date']))?>
                                </div>
                            </div>
                        <?php endif?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="card card-row card-default">
                <div class="card-header bg-info">
                    <h3 class="card-title">
                        В процесі
                    </h3>
                </div>
                <div class="card-body connectedSortable" data-status="in-progress">
                    <?php foreach ($info as $key => $item): ?>
                        <?php if($item['status'] === 'in-progress'):?>
                            <div class="card card-info card-outline" data-task-id="1">
                                <div class="card-header">
                                    <h5 class="card-title"><?=htmlspecialchars($item['category'])?></h5>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-link">#3</a>
                                        <a href="#" class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <?=htmlspecialchars($item['task'])?>
                                    </p>
                                    <a href="#" class="btn btn-tool">
                                        <i class="fas fa-file"></i>
                                    </a>
                                    <?=date_calculating(htmlspecialchars($item['date']))?>
                                </div>
                            </div>
                        <?php endif?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="card card-row card-success">
                <div class="card-header">
                    <h3 class="card-title">
                        Готово
                    </h3>
                </div>
                <div class="card-body connectedSortable" data-status="done">
                    <?php foreach ($info as $key => $item): ?>
                        <?php if($item['status'] === 'done'):?>
                            <div class="card card-info card-outline" data-task-id="1">
                                <div class="card-header">
                                    <h5 class="card-title"><?=htmlspecialchars($item['category'])?></h5>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-link">#3</a>
                                        <a href="#" class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <?=htmlspecialchars($item['task'])?>
                                    </p>
                                    <a href="#" class="btn btn-tool">
                                        <i class="fas fa-file"></i>
                                    </a>
                                    <?=date_calculating(htmlspecialchars($item['date']))?>
                                </div>
                            </div>
                        <?php endif?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
</div>