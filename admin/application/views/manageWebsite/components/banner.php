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