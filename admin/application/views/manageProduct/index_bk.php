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
                <form action="<?= $action_link ?>" method="post">
                    <div class="row gap-2 mt-3 justify-content-center">
                        <div class="col-12 col-sm-6">
                            <label for="product_name">ค้นหา</label>
                            <input type="text" name="product_name" class="form-control" id="product_name" placeholder="ค้นหา" value="<?= !empty($search) && !empty($search['product_name']) ? $search['product_name'] : '' ?>">
                        </div>
                        <div class="col-12 col-sm-2">
                            <label for="status">สถานะ</label>
                            <select class="form-select" aria-label="Select Status" name="status">
                                <option value="all" <?= !empty($search) && !empty($search['status']) && $search['status'] == 'all' ? 'selected' : '' ?>>ทั้งหมด</option>
                                <option value="1" <?= !empty($search) && !empty($search['status']) && intval($search['status']) == 1 ? 'selected' : '' ?>>เผยแพร่</option>
                                <option value="0" <?= !empty($search) && empty($search['status']) && intval($search['status']) == 0 ? 'selected' : '' ?>>ไม่เผยแพร่</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-2 justify-content-center">
                        <button type="submit" class="btn btn-primary" title="ค้นหา">
                            <i class="fa-solid fa-magnifying-glass"></i> ค้นหา
                        </button>

                        <button type="submit" name="reset" value="clear" class="btn btn-outline-secondary" title="ล้างค่า">
                            <i class="fa-solid fa-rotate"></i> ล้างค่า
                        </button>
                    </div>
                </form>
            </div>

            <div class="container mt-3">
                <div class="text-end">
                    <a href="<?= $action_link ?>form" class="btn btn-success" title="เพิ่มข้อมูล">
                        <i class="fa-solid fa-plus"></i> เพิ่มข้อมูล
                    </a>
                </div>
                <div class="table-responsive customTable">
                    <table class="table align-items-center table-striped">
                        <thead>
                            <tr>
                                <td width="100" class="text-center">ลำดับ</td>
                                <td width="450">ชื่อสินค้า</td>
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
                                            <?= ($startNo++) ?>
                                        </td>
                                        <td>
                                            <?= $value['product_name'] ?>
                                        </td>
                                        <td class="text-center <?= $value['status'] == 1 ? 'text-success' : 'text-danger' ?>">
                                            <?= $value['status'] == 1 ? 'เผยแพร่' : 'ไม่เผยแพร่' ?>
                                        </td>
                                        <td class="text-center">
                                            <?= dateTimeToDateThai($value['create_date']) ?>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn" href="<?= $action_link ?>form/<?= $value['product_id'] ?>" title="แก้ไขข้อมูล">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>

                                            <a onclick="return confirm('คุณต้องการลบรายการนี้ใช่หรือไม่ ?')" class="btn btn-danger" href="<?= $action_link ?>delete/<?= $value['product_id'] ?>" title="ลบข้อมูล">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center h-60">- ไม่พบข้อมูล -</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                   <?php !empty($allPage) && $this->load->view('component/pagination'); ?>
                </div>
            </div>

        </div>
    </div>
</div>