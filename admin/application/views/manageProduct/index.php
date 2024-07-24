<div class="container-fluid py-1 pb-4 px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="<?= LINK ?>">หน้าหลัก</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?= $titlePage ?></li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0"><?= $titlePage ?></h6>
    </nav>
</div>

<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card customCard">
            <div class="card-header pb-0 p-3">
                <div class="row gap-2 mt-3 justify-content-center">
                    <div class="col-12 col-sm-8">
                        <input type="text" name="stext" class="form-control" id="stext" placeholder="ค้นหา">
                    </div>
                </div>

                <div class="d-flex gap-2 mt-2 justify-content-center">
                    <button type="button" class="btn btn-primary" title="ค้นหา">
                        <i class="fa-solid fa-magnifying-glass"></i> ค้นหา
                    </button>

                    <button type="button" class="btn btn-outline-secondary" title="ล้างค่า">
                        <i class="fa-solid fa-rotate"></i> ล้างค่า
                    </button>
                </div>

            </div>

            <div class="container mt-3">
                <div class="text-end">
                    <a href="<?= $action_link ?>form" class="btn btn-success" title="เพิ่มข้อมูล">
                        <i class="fa-solid fa-plus"></i> เพิ่มข้อมูล
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <thead>
                            <tr>
                                <td width="20" class="text-center">ลำดับ</td>
                                <td>ชื่อสินค้า</td>
                                <td class="text-center">สถานะ</td>
                                <td class="text-center">วันที่สร้าง</td>
                                <td class="text-center"><i class="fa-solid fa-gears"></i></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($results)) : ?>
                                <?php foreach($results as $key => $value) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= ($key + 1) ?>
                                        </td>
                                        <td>
                                            <?= $value['product_name'] ?>
                                        </td>
                                        <td class="text-center">
                                            <span class="<?= $value['status'] == 1 ? 'text-success' : 'text-danger' ?>">
                                                <?= $value['status'] == 1 ? 'เผยแพร่' : 'ไม่เผยแพร่' ?>
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <?= $value['create_date'] ?>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn" href="<?= $action_link ?>form/<?= $value['product_id'] ?>">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>

                                            <a onclick="confirm('คุณต้องการลบรายการนี้ใช่หรือไม่ ?')" class="btn btn-danger" href="<?= $action_link ?>delete/<?= $value['product_id'] ?>">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center">- ไม่พบข้อมูล -</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>