<style>
    .previewImageBanner {
        max-width: 200px;
        display: none;
    }
</style>

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