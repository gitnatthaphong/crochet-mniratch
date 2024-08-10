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
                                <label for="title" class="form-label">ชื่อรายการ <span class="text-danger">*</span></label>
                                <input type="text" name="title" value="<?= !empty($results) ? $results['title'] : '' ?>" class="form-control" id="title" placeholder="ชื่อรายการ" required autocomplete="off">
                                <div class="invalid-feedback">
                                    กรุณาระบุชื่อรายการ
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="icon" class="form-label">Icon <span class="text-danger">* (สามารถเลือก Icon ได้ที่ <a href="https://fontawesome.com/v4/icons/" target="_blank">FontAwesome</a>)</span></label>
                                <input type="text" name="icon" value="<?= !empty($results) ? $results['icon'] : '' ?>" class="form-control" id="icon" placeholder="Icon" required autocomplete="off">
                                <div class="invalid-feedback">
                                    กรุณาระบุ Icon
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="detail" class="form-label">รายละเอียด <span class="text-danger">*</span></label>
                                <textarea class="summernote" name="detail" id="detail" required><?= !empty($results) ? $results['detail'] : '' ?></textarea>
                                <div class="invalid-feedback">
                                    กรุณาระบุรายละเอียด
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