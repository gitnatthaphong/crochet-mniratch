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
                                <label for="contact_title" class="form-label">หัวเรื่อง <span class="text-danger">*</span></label>
                                <input type="text" name="contact_title" class="form-control" id="contact_title" placeholder="หัวเรื่อง" value="<?= $results['contact_title'] ?>" required autocomplete="off">
                                <div class="invalid-feedback">
                                    กรุณาระบุชื่อหัวเรื่อง
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact_detail" class="form-label">รายละเอียด <span class="text-danger">*</span></label>
                                <textarea name="contact_detail" class="summernote" placeholder="รายละเอียด" required>
                                    <?= $results['contact_detail'] ?>
                                </textarea>
                                <div class="invalid-feedback">
                                    กรุณาระบุรายละเอียด
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