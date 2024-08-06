<style>
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
        <div class="breadcrumb-item active"><?= $titlePage ?></div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="<?= $action_link ?>save/" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card">
                <div class="card-header">
                    <h4>แบนเนอร์</h4>
                </div>
                <div class="card-body">
                    <div class="row gap-5">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="banner_title" class="form-label">หัวเรื่อง <span class="text-danger">*</span></label>
                                <input type="text" name="banner_title" class="form-control" id="banner_title" placeholder="หัวเรื่อง" required autocomplete="off">
                                <div class="invalid-feedback">
                                    กรุณาระบุชื่อหัวเรื่อง
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="product_name" class="form-label">รายละเอียด <span class="text-danger">*</span></label>
                                <textarea name="banner_detail" class="summernote" placeholder="รายละเอียด" required></textarea>
                                <div class="invalid-feedback">
                                    กรุณาระบุรายละเอียด
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="product_image">รูปภาพพื้นหลัง <span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="product_image" id="customFile" accept="image/*" <?= !empty($results) && !empty($results['image_path']) ? '' : 'required' ?>>
                                    <label class="custom-file-label" for="customFile"><?= !empty($results) && !empty($results['image_path']) ? $results['image_original_name'] : 'เลือกไฟล์' ?></label>
                                    <div class="invalid-feedback pt-5px">
                                        กรุณาอัพโหลดรูปภาพพื้นหลัง
                                    </div>
                                </div>

                                <!-- <div class="previewImage text-center mt-2">
                                    <img class="previewBash img-thumbnail" id="previewBash" src="<?= !empty($results) && !empty($results['image_path']) ? $results['image_path'] : '' ?>">
                                </div> -->
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