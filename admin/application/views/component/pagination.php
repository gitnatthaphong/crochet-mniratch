<?php if($allPage > 1) : ?>
    <nav aria-label="Page navigation example" class="d-flex justify-content-end">
        <ul class="pagination customPagination">
            <?php if($currentPage != 1): ?>
            <li class="page-item">
                <a class="page-link" href="<?= $action_link ?>index/<?= $currentPage - 1 ?>" aria-label="ก่อนหน้า">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php endif; ?>
            <li class="page-item">
                <?= $currentPage ?>
            </li>
            <li class="page-item">/</li>
            <li class="page-item">
                <?= $allPage ?>
            </li>
            <?php if($currentPage != $allPage): ?>
            <li class="page-item">
                <a class="page-link" href="<?= $action_link ?>index/<?= $currentPage + 1 ?>" aria-label="ถัดไป">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>