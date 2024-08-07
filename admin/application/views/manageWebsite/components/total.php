<style>
    .previewImageCount {
        max-width: 200px;
        display: none;
    }
</style>

<div class="row gap-5">

    <div class="col-12">
        <div class="form-group">
            <label for="total_shop" class="form-label">ยอดสั่งซื้อ <span class="text-danger">*</span></label>
            <input type="text" name="total_shop" class="form-control" id="total_shop" placeholder="ยอดสั่งซื้อ" value="<?= $results['total_shop'] ?>" required autocomplete="off">
            <div class="invalid-feedback">
                กรุณาระบุชื่อยอดสั่งซื้อ
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="bg_count">รูปภาพพื้นหลัง <span class="text-danger">*</span></label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="bg_count" id="customFileCount" accept="image/*" <?= !empty($results) && !empty($results['bg_count']) ? '' : 'required' ?>>
                <label class="custom-file-label" for="customFileCount">เลือกไฟล์</label>
                <div class="invalid-feedback pt-5px">
                    กรุณาอัพโหลดรูปภาพพื้นหลัง
                </div>
            </div>

            <div class="previewImageCount text-center mt-2">
                <img class="previewBashCount img-thumbnail" id="previewBashCount" src="<?= !empty($results) && !empty($results['bg_count']) ? $results['bg_count'] : '' ?>">
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        <?php if (!empty($results) && !empty($results['bg_count'])) : ?>
            $('.previewImageCount').fadeIn();
        <?php endif; ?>

        $('#customFileCount').on('change', function(event) {
            $('label[for="customFileCount"]').text(event.target.files[0].name);
            $('.previewImageCount').fadeIn();
            $('.previewBashCount').attr('src', URL.createObjectURL(event.target.files[0]));
        })

    });
</script>