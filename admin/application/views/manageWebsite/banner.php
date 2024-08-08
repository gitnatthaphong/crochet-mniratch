<style>
    .previewImage {
        max-width: 200px;
        display: none;
    }

    .pt-5px {
        padding-top: 5px;
    }

    .previewImageBanner {
        max-width: 200px;
        display: none;
    }
</style>

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
                                <label for="banner_title" class="form-label">หัวเรื่อง <span class="text-danger">*</span></label>
                                <input type="text" name="banner_title" class="form-control" id="banner_title" value="<?= $results['banner_title'] ?>" placeholder="หัวเรื่อง" required autocomplete="off">
                                <div class="invalid-feedback">
                                    กรุณาระบุชื่อหัวเรื่อง
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="banner_detail" class="form-label">รายละเอียด <span class="text-danger">*</span></label>
                                <textarea name="banner_detail" class="summernote" placeholder="รายละเอียด" required>
                                    <?= $results['banner_detail'] ?>
                                </textarea>
                                <div class="invalid-feedback">
                                    กรุณาระบุรายละเอียด
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="banner_image">รูปภาพพื้นหลัง <span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="banner_image" id="customFileBanner" accept="image/*" <?= !empty($results) && !empty($results['banner_image']) ? '' : 'required' ?>>
                                    <label class="custom-file-label" for="customFileBanner">เลือกไฟล์</label>
                                    <div class="invalid-feedback pt-5px">
                                        กรุณาอัพโหลดรูปภาพพื้นหลัง
                                    </div>
                                </div>

                                <div class="previewImageBanner text-center mt-2">
                                    <img class="previewBashBanner img-thumbnail" id="previewBashBanner" src="<?= !empty($results) && !empty($results['banner_image']) ? $results['banner_image'] : '' ?>">
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

<script>
    $(document).ready(function() {
        <?php if (!empty($results) && !empty($results['banner_image'])) : ?>
            $('.previewImageBanner').fadeIn();
        <?php endif; ?>

        $('#customFileBanner').on('change', function(event) {
            $('label[for="customFileBanner"]').text(event.target.files[0].name);
            $('.previewImageBanner').fadeIn();
            $('.previewBashBanner').attr('src', URL.createObjectURL(event.target.files[0]));
        })

    });
</script>