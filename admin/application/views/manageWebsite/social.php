<div class="section-header">
    <h1><?= $titlePage ?></h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="<?= LINK ?>">หน้าหลัก</a></div>
        <div class="breadcrumb-item"><a href="<?= $action_link . $this->cur_method ?>"><?= $titlePage ?></a></div>
        <div class="breadcrumb-item active"><?= $titlePageAction ?></div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="<?= $action_link ?>save/" method="post" enctype="multipart/form-data" id="myForm" class="needs-validation" novalidate>
            <div class="card">
                <div class="card-header">
                    <h4><?= $titlePageAction ?></h4>
                </div>
                <div class="card-body">
                    <div class="row gap-5">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="social_email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="text" name="social_email" class="form-control" id="social_email" placeholder="Email" value="<?= $results['social_email'] ?>" required autocomplete="off">
                                <div class="invalid-feedback">
                                    Email
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="social_facebook" class="form-label">Facebook <span class="text-danger">*</span></label>
                                <input type="text" name="social_facebook" class="form-control" id="social_facebook" placeholder="Facebook" value="<?= $results['social_facebook'] ?>" required autocomplete="off">
                                <div class="invalid-feedback">
                                    Facebook
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="social_instagram" class="form-label">Instagram <span class="text-danger">*</span></label>
                                <input type="text" name="social_instagram" class="form-control" id="social_instagram" placeholder="Instagram" value="<?= $results['social_instagram'] ?>" required autocomplete="off">
                                <div class="invalid-feedback">
                                    Instagram
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-warning" href="<?= $action_link ?>/reset" onclick="return confirm('คุณต้องการคืนค่าเริ่มต้นใช่หรือไม่ ?')" data-toggle="tooltip" title="คืนค่าเริ่มต้น">
                            <i class="fas fa-sync-alt"></i>&nbsp;&nbsp;คืนค่าเริ่มต้น
                        </a>
                        <button type="submit" class="btn btn-success" data-toggle="tooltip" title="บันทึก">
                            <i class="fas fa-save"></i>&nbsp;&nbsp;บันทึก
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>