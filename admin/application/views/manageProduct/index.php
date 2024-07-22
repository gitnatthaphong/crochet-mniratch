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
        <div class="card ">
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

                    <button type="button" class="btn btn-outline-primary" title="ล้างค่า">
                        <i class="fa-solid fa-rotate"></i> ล้างค่า
                    </button>
                </div>

            </div>

            <div class="container mt-3">
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <thead>
                            <tr>
                                <td width="20" class="text-center">ลำดับ</td>
                                <td>รายการ</td>
                                <td class="text-center">สถานะ</td>
                                <td class="text-center">#</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    1
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Sales</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                                </td>
                                <td class="text-center">
                                    tes
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>