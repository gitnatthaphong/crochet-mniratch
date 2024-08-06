<style>
    .gap-15 {
        gap: 10px;
    }

    .previewImage {
        max-width: 200px;
        display: none;
    }

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
        <form action="<?= $action_link ?>save/<?= $id ?>" method="post" enctype="multipart/form-data" class="needs-validation" id="myForm" novalidate>
            <div class="card">
                <div class="card-header">
                    <h4><?= $titlePageAction ?></h4>
                </div>
                <div class="card-body">
                    <div class="row gap-15">

                        <?php if (!empty(validation_errors())) : ?>
                            <div class="col-12">
                                <div class="alert alert-danger">
                                    <small class="text-danger text-validate-ci"><?php echo validation_errors(); ?></small>
                                </div>
                            </div>
                        <?php endif; ?>


                        <div class="col-12">
                            <div class="form-group">
                                <label for="product_name" class="form-label">ชื่อสินค้า <span class="text-danger">*</span></label>
                                <input type="text" name="product_name" value="<?= !empty($results) ? $results['product_name'] : '' ?>" class="form-control" id="product_name" placeholder="ชื่อสินค้า" required autocomplete="off">
                                <div class="invalid-feedback">
                                    กรุณาระบุชื่อสินค้า
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="product_tags">แท็ก <span class="text-danger">*</span></label>
                                <input type="text" class="form-control input-tags" name="product_tags" value="<?= !empty($results) ? $results['product_tags'] : '' ?>" placeholder="พิมพ์แล้วกด Enter" required>
                                <div class="invalid-feedback">
                                    กรุณาระบุแท็ก
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="product_image">รูปภาพสินค้า <span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="product_image" id="customFile" accept="image/*" <?= !empty($results) && !empty($results['image_path']) ? '' : 'required' ?>>
                                    <label class="custom-file-label" for="customFile"><?= !empty($results) && !empty($results['image_path']) ? $results['image_original_name'] : 'เลือกไฟล์' ?></label>
                                    <div class="invalid-feedback pt-5px">
                                        กรุณาอัพโหลดรูปภาพสินค้า
                                    </div>
                                </div>

                                <div class="previewImage text-center mt-2">
                                    <img class="previewBash img-thumbnail" id="previewBash" src="<?= !empty($results) && !empty($results['image_path']) ? $results['image_path'] : '' ?>">
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
                        <a class="btn btn-secondary" href="<?= $action_link ?>" data-toggle="tooltip" title="ยกเลิก">ยกเลิก</a>
                        <button type="submit" class="btn btn-success" data-toggle="tooltip" title="บันทึก">บันทึก</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".input-tags").tagsinput({
            confirmKeys: [13]
        });

        $('.bootstrap-tagsinput input').on("keydown", function(e) {
            if (event.keyCode == 13) {
                event.preventDefault();
                if (e.target.value > '') {
                    $(".input-tags").tagsinput('add', e.target.value);
                    $(this).val('');
                }
            }
        })

        <?php if (!empty($results) && !empty($results['image_path'])) : ?>
            $('.previewImage').fadeIn();
        <?php endif; ?>

        $('#customFile').on('change', function(event) {
            $('label[for="customFile"]').text(event.target.files[0].name);
            $('.previewImage').fadeIn();
            $('.previewBash').attr('src', URL.createObjectURL(event.target.files[0]));
        })

    });
</script>