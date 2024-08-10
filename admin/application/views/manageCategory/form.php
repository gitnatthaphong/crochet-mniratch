<style>
    .pt-5px {
        padding-top: 5px;
    }
</style>

<div class="section-header">
    <h1><?= $titlePage ?></h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="<?= LINK ?>">หน้าหลัก</a></div>
        <div class="breadcrumb-item"><a href="<?= $action_link ?>"><?= $titlePage ?></a></div>
        <div class="breadcrumb-item active"><?= $titlePageAction ?></div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="<?= $action_link ?>save/<?= $id ?>" method="post" class="needs-validation" id="myForm" novalidate>
            <div class="card">
                <div class="card-header">
                    <h4><?= $titlePageAction ?></h4>
                </div>
                <div class="card-body">
                    <div class="row gap-5">

                        <?php if (!empty(validation_errors())) : ?>
                            <div class="col-12">
                                <div class="alert alert-danger">
                                    <small class="text-danger text-validate-ci"><?php echo validation_errors(); ?></small>
                                </div>
                            </div>
                        <?php endif; ?>


                        <div class="col-12">
                            <div class="form-group">
                                <label for="topic_name" class="form-label">ชื่อหมวดหมู่ <span class="text-danger">*</span></label>
                                <input type="text" name="topic_name" value="<?= !empty($results) ? $results['topic_name'] : '' ?>" class="form-control" id="topic_name" placeholder="ชื่อหมวดหมู่" required autocomplete="off">
                                <div class="invalid-feedback">
                                    กรุณาระบุชื่อหมวดหมู่
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="topic_icon" class="form-label">Icon <span class="text-danger">* (สามารถเลือก Icon ได้ที่ <a href="https://fontawesome.com/v5/icons/" target="_blank">FontAwesome</a>)</span></label>
                                <input type="text" name="topic_icon" value="<?= !empty($results) ? $results['topic_icon'] : '' ?>" class="form-control" id="topic_icon" placeholder="Icon" required autocomplete="off">
                                <div class="invalid-feedback">
                                    กรุณาระบุ Icon
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="topic_detail" class="form-label">รายละเอียด <span class="text-danger">*</span></label>
                                <textarea class="summernote" name="topic_detail" id="topic_detail"><?= !empty($results) ? $results['topic_detail'] : '' ?></textarea>
                                <div class="invalid-feedback">
                                    กรุณาระบุรายละเอียด
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="status">สถานะ <span class="text-danger">*</span></label>
                                <br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio1" name="status" value="1" class="custom-control-input" <?= (!empty($results) && $results['status'] == 1) || $id == 0 ? 'checked' : '' ?>>
                                    <label class="custom-control-label" for="customRadio1">เผยแพร่</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio2" name="status" value="0" class="custom-control-input" <?= !empty($results) && $results['status'] == 0 ? 'checked' : '' ?>>
                                    <label class="custom-control-label" for="customRadio2">ไม่เผยแพร่</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-warning" href="<?= $action_link ?>" data-toggle="tooltip" title="ยกเลิก">
                            <i class="fas fa-times"></i>&nbsp;&nbsp;ยกเลิก
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